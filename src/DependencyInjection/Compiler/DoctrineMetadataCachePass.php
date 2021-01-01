<?php

declare(strict_types=1);

namespace App\DependencyInjection\Compiler;

use App\CacheWarmer\DoctrineMetadataCacheWarmer;
use Symfony\Component\Cache\Adapter\DoctrineAdapter;
use Symfony\Component\Cache\Adapter\PhpArrayAdapter;
use Symfony\Component\Cache\DoctrineProvider;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Definition;
use Symfony\Component\DependencyInjection\Reference;

class DoctrineMetadataCachePass implements CompilerPassInterface
{
    public function process(ContainerBuilder $container): void
    {
        if (!$container->getParameter('kernel.debug')) {
            $this->registerMetadataPhpArrayCaching('default', $container);
        }
    }

    protected function getObjectManagerElementName(string $name): string
    {
        return 'doctrine.orm.'.$name;
    }

    private function registerMetadataPhpArrayCaching(string $entityManagerName, ContainerBuilder $container): void
    {
        $metadataCacheAlias = $this->getObjectManagerElementName($entityManagerName.'_metadata_cache');
        $decoratedMetadataCacheServiceId = (string) $container->getAlias($metadataCacheAlias);
        $phpArrayCacheDecoratorServiceId = $decoratedMetadataCacheServiceId.'.php_array';
        $phpArrayFile = '%kernel.cache_dir%'.sprintf('/doctrine/orm/%s_metadata.php', $entityManagerName);
        $cacheWarmerServiceId = $this->getObjectManagerElementName($entityManagerName.'_metadata_cache_warmer');

        $container->register($cacheWarmerServiceId, DoctrineMetadataCacheWarmer::class)
            ->setArguments([new Reference(sprintf('doctrine.orm.%s_entity_manager', $entityManagerName)), $phpArrayFile])
            ->addTag('kernel.cache_warmer', ['priority' => 1000]) // priority should be higher than ProxyCacheWarmer
        ;

        $container->setAlias($metadataCacheAlias, $phpArrayCacheDecoratorServiceId);
        $container->register($phpArrayCacheDecoratorServiceId, DoctrineProvider::class)
            ->addArgument(
                new Definition(PhpArrayAdapter::class, [
                    $phpArrayFile,
                    new Definition(DoctrineAdapter::class, [new Reference($decoratedMetadataCacheServiceId)]),
                ])
            )
        ;
    }
}
