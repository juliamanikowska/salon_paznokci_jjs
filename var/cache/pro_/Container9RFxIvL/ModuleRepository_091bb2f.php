<?php

class ModuleRepository_091bb2f extends \PrestaShop\PrestaShop\Core\Module\ModuleRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder9f213 = null;
    private $initializer290ac = null;
    private static $publicProperties83ec0 = [
        
    ];
    public function getList() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer290ac && ($this->initializer290ac->__invoke($valueHolder9f213, $this, 'getList', array(), $this->initializer290ac) || 1) && $this->valueHolder9f213 = $valueHolder9f213;
        return $this->valueHolder9f213->getList();
    }
    public function getInstalledModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer290ac && ($this->initializer290ac->__invoke($valueHolder9f213, $this, 'getInstalledModules', array(), $this->initializer290ac) || 1) && $this->valueHolder9f213 = $valueHolder9f213;
        return $this->valueHolder9f213->getInstalledModules();
    }
    public function getMustBeConfiguredModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer290ac && ($this->initializer290ac->__invoke($valueHolder9f213, $this, 'getMustBeConfiguredModules', array(), $this->initializer290ac) || 1) && $this->valueHolder9f213 = $valueHolder9f213;
        return $this->valueHolder9f213->getMustBeConfiguredModules();
    }
    public function getUpgradableModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer290ac && ($this->initializer290ac->__invoke($valueHolder9f213, $this, 'getUpgradableModules', array(), $this->initializer290ac) || 1) && $this->valueHolder9f213 = $valueHolder9f213;
        return $this->valueHolder9f213->getUpgradableModules();
    }
    public function getModule(string $moduleName) : \PrestaShop\PrestaShop\Core\Module\ModuleInterface
    {
        $this->initializer290ac && ($this->initializer290ac->__invoke($valueHolder9f213, $this, 'getModule', array('moduleName' => $moduleName), $this->initializer290ac) || 1) && $this->valueHolder9f213 = $valueHolder9f213;
        return $this->valueHolder9f213->getModule($moduleName);
    }
    public function getModulePath(string $moduleName) : ?string
    {
        $this->initializer290ac && ($this->initializer290ac->__invoke($valueHolder9f213, $this, 'getModulePath', array('moduleName' => $moduleName), $this->initializer290ac) || 1) && $this->valueHolder9f213 = $valueHolder9f213;
        return $this->valueHolder9f213->getModulePath($moduleName);
    }
    public function setActionUrls(\PrestaShop\PrestaShop\Core\Module\ModuleCollection $collection) : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer290ac && ($this->initializer290ac->__invoke($valueHolder9f213, $this, 'setActionUrls', array('collection' => $collection), $this->initializer290ac) || 1) && $this->valueHolder9f213 = $valueHolder9f213;
        return $this->valueHolder9f213->setActionUrls($collection);
    }
    public function clearCache(?string $moduleName = null, bool $allShops = false) : bool
    {
        $this->initializer290ac && ($this->initializer290ac->__invoke($valueHolder9f213, $this, 'clearCache', array('moduleName' => $moduleName, 'allShops' => $allShops), $this->initializer290ac) || 1) && $this->valueHolder9f213 = $valueHolder9f213;
        return $this->valueHolder9f213->clearCache($moduleName, $allShops);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $instance, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($instance);
        $instance->initializer290ac = $initializer;
        return $instance;
    }
    public function __construct(\PrestaShop\PrestaShop\Adapter\Module\ModuleDataProvider $moduleDataProvider, \PrestaShop\PrestaShop\Adapter\Module\AdminModuleDataProvider $adminModuleDataProvider, \Doctrine\Common\Cache\CacheProvider $cacheProvider, \PrestaShop\PrestaShop\Adapter\HookManager $hookManager, string $modulePath, int $contextLangId)
    {
        static $reflection;
        if (! $this->valueHolder9f213) {
            $reflection = $reflection ?? new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
            $this->valueHolder9f213 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
        }
        $this->valueHolder9f213->__construct($moduleDataProvider, $adminModuleDataProvider, $cacheProvider, $hookManager, $modulePath, $contextLangId);
    }
    public function & __get($name)
    {
        $this->initializer290ac && ($this->initializer290ac->__invoke($valueHolder9f213, $this, '__get', ['name' => $name], $this->initializer290ac) || 1) && $this->valueHolder9f213 = $valueHolder9f213;
        if (isset(self::$publicProperties83ec0[$name])) {
            return $this->valueHolder9f213->$name;
        }
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9f213;
            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder9f213;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializer290ac && ($this->initializer290ac->__invoke($valueHolder9f213, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer290ac) || 1) && $this->valueHolder9f213 = $valueHolder9f213;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9f213;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder9f213;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializer290ac && ($this->initializer290ac->__invoke($valueHolder9f213, $this, '__isset', array('name' => $name), $this->initializer290ac) || 1) && $this->valueHolder9f213 = $valueHolder9f213;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9f213;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder9f213;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializer290ac && ($this->initializer290ac->__invoke($valueHolder9f213, $this, '__unset', array('name' => $name), $this->initializer290ac) || 1) && $this->valueHolder9f213 = $valueHolder9f213;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9f213;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder9f213;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }
    public function __clone()
    {
        $this->initializer290ac && ($this->initializer290ac->__invoke($valueHolder9f213, $this, '__clone', array(), $this->initializer290ac) || 1) && $this->valueHolder9f213 = $valueHolder9f213;
        $this->valueHolder9f213 = clone $this->valueHolder9f213;
    }
    public function __sleep()
    {
        $this->initializer290ac && ($this->initializer290ac->__invoke($valueHolder9f213, $this, '__sleep', array(), $this->initializer290ac) || 1) && $this->valueHolder9f213 = $valueHolder9f213;
        return array('valueHolder9f213');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer290ac = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer290ac;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer290ac && ($this->initializer290ac->__invoke($valueHolder9f213, $this, 'initializeProxy', array(), $this->initializer290ac) || 1) && $this->valueHolder9f213 = $valueHolder9f213;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder9f213;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder9f213;
    }
}
