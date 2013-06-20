<?php

namespace ElsassSeeraiwer\ESArticleBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html#cookbook-bundles-extension-config-class}
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('elsass_seeraiwer_es_article');

        $rootNode
            ->children()
                ->scalarNode('config')->defaultValue('app')->end()
                ->scalarNode('domain')->defaultValue('articles')->end()
                ->arrayNode('locales')
                    ->prototype('scalar')->end()
                    ->defaultValue(array('en', 'fr'))
                ->end()
            ->end()
        ;

        return $treeBuilder;
    }
}
