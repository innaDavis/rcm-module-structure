<?php
/**
 * Module Config For ZF2
 */

namespace {ROOTNAMESPACE}\{NAMESPACE};

/**
 * Class Module
 */
class Module
{
    public function getConfig()
    {
        return include __DIR__ . '/../config/module.config.php';
    }
}
