<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder9f213 = null;
    private $initializer290ac = null;
    private static $publicProperties83ec0 = [
        
    ];
    public function getConnection()
    {
        $this->initializer290ac && ($this->initializer290ac->__invoke($valueHolder9f213, $this, 'getConnection', array(), $this->initializer290ac) || 1) && $this->valueHolder9f213 = $valueHolder9f213;
        return $this->valueHolder9f213->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer290ac && ($this->initializer290ac->__invoke($valueHolder9f213, $this, 'getMetadataFactory', array(), $this->initializer290ac) || 1) && $this->valueHolder9f213 = $valueHolder9f213;
        return $this->valueHolder9f213->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer290ac && ($this->initializer290ac->__invoke($valueHolder9f213, $this, 'getExpressionBuilder', array(), $this->initializer290ac) || 1) && $this->valueHolder9f213 = $valueHolder9f213;
        return $this->valueHolder9f213->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer290ac && ($this->initializer290ac->__invoke($valueHolder9f213, $this, 'beginTransaction', array(), $this->initializer290ac) || 1) && $this->valueHolder9f213 = $valueHolder9f213;
        return $this->valueHolder9f213->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer290ac && ($this->initializer290ac->__invoke($valueHolder9f213, $this, 'getCache', array(), $this->initializer290ac) || 1) && $this->valueHolder9f213 = $valueHolder9f213;
        return $this->valueHolder9f213->getCache();
    }
    public function transactional($func)
    {
        $this->initializer290ac && ($this->initializer290ac->__invoke($valueHolder9f213, $this, 'transactional', array('func' => $func), $this->initializer290ac) || 1) && $this->valueHolder9f213 = $valueHolder9f213;
        return $this->valueHolder9f213->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializer290ac && ($this->initializer290ac->__invoke($valueHolder9f213, $this, 'wrapInTransaction', array('func' => $func), $this->initializer290ac) || 1) && $this->valueHolder9f213 = $valueHolder9f213;
        return $this->valueHolder9f213->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializer290ac && ($this->initializer290ac->__invoke($valueHolder9f213, $this, 'commit', array(), $this->initializer290ac) || 1) && $this->valueHolder9f213 = $valueHolder9f213;
        return $this->valueHolder9f213->commit();
    }
    public function rollback()
    {
        $this->initializer290ac && ($this->initializer290ac->__invoke($valueHolder9f213, $this, 'rollback', array(), $this->initializer290ac) || 1) && $this->valueHolder9f213 = $valueHolder9f213;
        return $this->valueHolder9f213->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer290ac && ($this->initializer290ac->__invoke($valueHolder9f213, $this, 'getClassMetadata', array('className' => $className), $this->initializer290ac) || 1) && $this->valueHolder9f213 = $valueHolder9f213;
        return $this->valueHolder9f213->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer290ac && ($this->initializer290ac->__invoke($valueHolder9f213, $this, 'createQuery', array('dql' => $dql), $this->initializer290ac) || 1) && $this->valueHolder9f213 = $valueHolder9f213;
        return $this->valueHolder9f213->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer290ac && ($this->initializer290ac->__invoke($valueHolder9f213, $this, 'createNamedQuery', array('name' => $name), $this->initializer290ac) || 1) && $this->valueHolder9f213 = $valueHolder9f213;
        return $this->valueHolder9f213->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer290ac && ($this->initializer290ac->__invoke($valueHolder9f213, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer290ac) || 1) && $this->valueHolder9f213 = $valueHolder9f213;
        return $this->valueHolder9f213->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer290ac && ($this->initializer290ac->__invoke($valueHolder9f213, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer290ac) || 1) && $this->valueHolder9f213 = $valueHolder9f213;
        return $this->valueHolder9f213->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer290ac && ($this->initializer290ac->__invoke($valueHolder9f213, $this, 'createQueryBuilder', array(), $this->initializer290ac) || 1) && $this->valueHolder9f213 = $valueHolder9f213;
        return $this->valueHolder9f213->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer290ac && ($this->initializer290ac->__invoke($valueHolder9f213, $this, 'flush', array('entity' => $entity), $this->initializer290ac) || 1) && $this->valueHolder9f213 = $valueHolder9f213;
        return $this->valueHolder9f213->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer290ac && ($this->initializer290ac->__invoke($valueHolder9f213, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer290ac) || 1) && $this->valueHolder9f213 = $valueHolder9f213;
        return $this->valueHolder9f213->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer290ac && ($this->initializer290ac->__invoke($valueHolder9f213, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer290ac) || 1) && $this->valueHolder9f213 = $valueHolder9f213;
        return $this->valueHolder9f213->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer290ac && ($this->initializer290ac->__invoke($valueHolder9f213, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer290ac) || 1) && $this->valueHolder9f213 = $valueHolder9f213;
        return $this->valueHolder9f213->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer290ac && ($this->initializer290ac->__invoke($valueHolder9f213, $this, 'clear', array('entityName' => $entityName), $this->initializer290ac) || 1) && $this->valueHolder9f213 = $valueHolder9f213;
        return $this->valueHolder9f213->clear($entityName);
    }
    public function close()
    {
        $this->initializer290ac && ($this->initializer290ac->__invoke($valueHolder9f213, $this, 'close', array(), $this->initializer290ac) || 1) && $this->valueHolder9f213 = $valueHolder9f213;
        return $this->valueHolder9f213->close();
    }
    public function persist($entity)
    {
        $this->initializer290ac && ($this->initializer290ac->__invoke($valueHolder9f213, $this, 'persist', array('entity' => $entity), $this->initializer290ac) || 1) && $this->valueHolder9f213 = $valueHolder9f213;
        return $this->valueHolder9f213->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer290ac && ($this->initializer290ac->__invoke($valueHolder9f213, $this, 'remove', array('entity' => $entity), $this->initializer290ac) || 1) && $this->valueHolder9f213 = $valueHolder9f213;
        return $this->valueHolder9f213->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer290ac && ($this->initializer290ac->__invoke($valueHolder9f213, $this, 'refresh', array('entity' => $entity), $this->initializer290ac) || 1) && $this->valueHolder9f213 = $valueHolder9f213;
        return $this->valueHolder9f213->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer290ac && ($this->initializer290ac->__invoke($valueHolder9f213, $this, 'detach', array('entity' => $entity), $this->initializer290ac) || 1) && $this->valueHolder9f213 = $valueHolder9f213;
        return $this->valueHolder9f213->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer290ac && ($this->initializer290ac->__invoke($valueHolder9f213, $this, 'merge', array('entity' => $entity), $this->initializer290ac) || 1) && $this->valueHolder9f213 = $valueHolder9f213;
        return $this->valueHolder9f213->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer290ac && ($this->initializer290ac->__invoke($valueHolder9f213, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer290ac) || 1) && $this->valueHolder9f213 = $valueHolder9f213;
        return $this->valueHolder9f213->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer290ac && ($this->initializer290ac->__invoke($valueHolder9f213, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer290ac) || 1) && $this->valueHolder9f213 = $valueHolder9f213;
        return $this->valueHolder9f213->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer290ac && ($this->initializer290ac->__invoke($valueHolder9f213, $this, 'getRepository', array('entityName' => $entityName), $this->initializer290ac) || 1) && $this->valueHolder9f213 = $valueHolder9f213;
        return $this->valueHolder9f213->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer290ac && ($this->initializer290ac->__invoke($valueHolder9f213, $this, 'contains', array('entity' => $entity), $this->initializer290ac) || 1) && $this->valueHolder9f213 = $valueHolder9f213;
        return $this->valueHolder9f213->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer290ac && ($this->initializer290ac->__invoke($valueHolder9f213, $this, 'getEventManager', array(), $this->initializer290ac) || 1) && $this->valueHolder9f213 = $valueHolder9f213;
        return $this->valueHolder9f213->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer290ac && ($this->initializer290ac->__invoke($valueHolder9f213, $this, 'getConfiguration', array(), $this->initializer290ac) || 1) && $this->valueHolder9f213 = $valueHolder9f213;
        return $this->valueHolder9f213->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer290ac && ($this->initializer290ac->__invoke($valueHolder9f213, $this, 'isOpen', array(), $this->initializer290ac) || 1) && $this->valueHolder9f213 = $valueHolder9f213;
        return $this->valueHolder9f213->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer290ac && ($this->initializer290ac->__invoke($valueHolder9f213, $this, 'getUnitOfWork', array(), $this->initializer290ac) || 1) && $this->valueHolder9f213 = $valueHolder9f213;
        return $this->valueHolder9f213->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer290ac && ($this->initializer290ac->__invoke($valueHolder9f213, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer290ac) || 1) && $this->valueHolder9f213 = $valueHolder9f213;
        return $this->valueHolder9f213->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer290ac && ($this->initializer290ac->__invoke($valueHolder9f213, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer290ac) || 1) && $this->valueHolder9f213 = $valueHolder9f213;
        return $this->valueHolder9f213->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer290ac && ($this->initializer290ac->__invoke($valueHolder9f213, $this, 'getProxyFactory', array(), $this->initializer290ac) || 1) && $this->valueHolder9f213 = $valueHolder9f213;
        return $this->valueHolder9f213->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer290ac && ($this->initializer290ac->__invoke($valueHolder9f213, $this, 'initializeObject', array('obj' => $obj), $this->initializer290ac) || 1) && $this->valueHolder9f213 = $valueHolder9f213;
        return $this->valueHolder9f213->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer290ac && ($this->initializer290ac->__invoke($valueHolder9f213, $this, 'getFilters', array(), $this->initializer290ac) || 1) && $this->valueHolder9f213 = $valueHolder9f213;
        return $this->valueHolder9f213->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer290ac && ($this->initializer290ac->__invoke($valueHolder9f213, $this, 'isFiltersStateClean', array(), $this->initializer290ac) || 1) && $this->valueHolder9f213 = $valueHolder9f213;
        return $this->valueHolder9f213->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer290ac && ($this->initializer290ac->__invoke($valueHolder9f213, $this, 'hasFilters', array(), $this->initializer290ac) || 1) && $this->valueHolder9f213 = $valueHolder9f213;
        return $this->valueHolder9f213->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer290ac = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder9f213) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder9f213 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder9f213->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer290ac && ($this->initializer290ac->__invoke($valueHolder9f213, $this, '__get', ['name' => $name], $this->initializer290ac) || 1) && $this->valueHolder9f213 = $valueHolder9f213;
        if (isset(self::$publicProperties83ec0[$name])) {
            return $this->valueHolder9f213->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
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
