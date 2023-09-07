<?php

declare(strict_types=1);

namespace ITholics\Oxid\Component\DebugSmarty\Smarty\Plugin;

use OxidEsales\Smarty\Configuration\SmartyPluginsDataProviderInterface;

class SmartyDebugProvider implements SmartyPluginsDataProviderInterface {
    public function __construct(
        private SmartyPluginsDataProviderInterface $parent
    ) {}

    public function getPlugins(): array {
        $parentDirs = $this->parent->getPlugins();
        $newDirs = $this->getComponentPlugins();
        return array_merge($parentDirs, $newDirs);
    }

    private function getComponentPlugins(): array {
        return [dirname(__DIR__, 2) . "/smarty_plugins"];
    }
}