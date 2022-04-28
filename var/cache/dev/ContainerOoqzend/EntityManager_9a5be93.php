<?php

namespace ContainerOoqzend;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderb2a5e = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer3f11c = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties4f098 = [
        
    ];

    public function getConnection()
    {
        $this->initializer3f11c && ($this->initializer3f11c->__invoke($valueHolderb2a5e, $this, 'getConnection', array(), $this->initializer3f11c) || 1) && $this->valueHolderb2a5e = $valueHolderb2a5e;

        return $this->valueHolderb2a5e->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer3f11c && ($this->initializer3f11c->__invoke($valueHolderb2a5e, $this, 'getMetadataFactory', array(), $this->initializer3f11c) || 1) && $this->valueHolderb2a5e = $valueHolderb2a5e;

        return $this->valueHolderb2a5e->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer3f11c && ($this->initializer3f11c->__invoke($valueHolderb2a5e, $this, 'getExpressionBuilder', array(), $this->initializer3f11c) || 1) && $this->valueHolderb2a5e = $valueHolderb2a5e;

        return $this->valueHolderb2a5e->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer3f11c && ($this->initializer3f11c->__invoke($valueHolderb2a5e, $this, 'beginTransaction', array(), $this->initializer3f11c) || 1) && $this->valueHolderb2a5e = $valueHolderb2a5e;

        return $this->valueHolderb2a5e->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer3f11c && ($this->initializer3f11c->__invoke($valueHolderb2a5e, $this, 'getCache', array(), $this->initializer3f11c) || 1) && $this->valueHolderb2a5e = $valueHolderb2a5e;

        return $this->valueHolderb2a5e->getCache();
    }

    public function transactional($func)
    {
        $this->initializer3f11c && ($this->initializer3f11c->__invoke($valueHolderb2a5e, $this, 'transactional', array('func' => $func), $this->initializer3f11c) || 1) && $this->valueHolderb2a5e = $valueHolderb2a5e;

        return $this->valueHolderb2a5e->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer3f11c && ($this->initializer3f11c->__invoke($valueHolderb2a5e, $this, 'wrapInTransaction', array('func' => $func), $this->initializer3f11c) || 1) && $this->valueHolderb2a5e = $valueHolderb2a5e;

        return $this->valueHolderb2a5e->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer3f11c && ($this->initializer3f11c->__invoke($valueHolderb2a5e, $this, 'commit', array(), $this->initializer3f11c) || 1) && $this->valueHolderb2a5e = $valueHolderb2a5e;

        return $this->valueHolderb2a5e->commit();
    }

    public function rollback()
    {
        $this->initializer3f11c && ($this->initializer3f11c->__invoke($valueHolderb2a5e, $this, 'rollback', array(), $this->initializer3f11c) || 1) && $this->valueHolderb2a5e = $valueHolderb2a5e;

        return $this->valueHolderb2a5e->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer3f11c && ($this->initializer3f11c->__invoke($valueHolderb2a5e, $this, 'getClassMetadata', array('className' => $className), $this->initializer3f11c) || 1) && $this->valueHolderb2a5e = $valueHolderb2a5e;

        return $this->valueHolderb2a5e->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer3f11c && ($this->initializer3f11c->__invoke($valueHolderb2a5e, $this, 'createQuery', array('dql' => $dql), $this->initializer3f11c) || 1) && $this->valueHolderb2a5e = $valueHolderb2a5e;

        return $this->valueHolderb2a5e->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer3f11c && ($this->initializer3f11c->__invoke($valueHolderb2a5e, $this, 'createNamedQuery', array('name' => $name), $this->initializer3f11c) || 1) && $this->valueHolderb2a5e = $valueHolderb2a5e;

        return $this->valueHolderb2a5e->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer3f11c && ($this->initializer3f11c->__invoke($valueHolderb2a5e, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer3f11c) || 1) && $this->valueHolderb2a5e = $valueHolderb2a5e;

        return $this->valueHolderb2a5e->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer3f11c && ($this->initializer3f11c->__invoke($valueHolderb2a5e, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer3f11c) || 1) && $this->valueHolderb2a5e = $valueHolderb2a5e;

        return $this->valueHolderb2a5e->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer3f11c && ($this->initializer3f11c->__invoke($valueHolderb2a5e, $this, 'createQueryBuilder', array(), $this->initializer3f11c) || 1) && $this->valueHolderb2a5e = $valueHolderb2a5e;

        return $this->valueHolderb2a5e->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer3f11c && ($this->initializer3f11c->__invoke($valueHolderb2a5e, $this, 'flush', array('entity' => $entity), $this->initializer3f11c) || 1) && $this->valueHolderb2a5e = $valueHolderb2a5e;

        return $this->valueHolderb2a5e->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer3f11c && ($this->initializer3f11c->__invoke($valueHolderb2a5e, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer3f11c) || 1) && $this->valueHolderb2a5e = $valueHolderb2a5e;

        return $this->valueHolderb2a5e->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer3f11c && ($this->initializer3f11c->__invoke($valueHolderb2a5e, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer3f11c) || 1) && $this->valueHolderb2a5e = $valueHolderb2a5e;

        return $this->valueHolderb2a5e->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer3f11c && ($this->initializer3f11c->__invoke($valueHolderb2a5e, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer3f11c) || 1) && $this->valueHolderb2a5e = $valueHolderb2a5e;

        return $this->valueHolderb2a5e->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer3f11c && ($this->initializer3f11c->__invoke($valueHolderb2a5e, $this, 'clear', array('entityName' => $entityName), $this->initializer3f11c) || 1) && $this->valueHolderb2a5e = $valueHolderb2a5e;

        return $this->valueHolderb2a5e->clear($entityName);
    }

    public function close()
    {
        $this->initializer3f11c && ($this->initializer3f11c->__invoke($valueHolderb2a5e, $this, 'close', array(), $this->initializer3f11c) || 1) && $this->valueHolderb2a5e = $valueHolderb2a5e;

        return $this->valueHolderb2a5e->close();
    }

    public function persist($entity)
    {
        $this->initializer3f11c && ($this->initializer3f11c->__invoke($valueHolderb2a5e, $this, 'persist', array('entity' => $entity), $this->initializer3f11c) || 1) && $this->valueHolderb2a5e = $valueHolderb2a5e;

        return $this->valueHolderb2a5e->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer3f11c && ($this->initializer3f11c->__invoke($valueHolderb2a5e, $this, 'remove', array('entity' => $entity), $this->initializer3f11c) || 1) && $this->valueHolderb2a5e = $valueHolderb2a5e;

        return $this->valueHolderb2a5e->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer3f11c && ($this->initializer3f11c->__invoke($valueHolderb2a5e, $this, 'refresh', array('entity' => $entity), $this->initializer3f11c) || 1) && $this->valueHolderb2a5e = $valueHolderb2a5e;

        return $this->valueHolderb2a5e->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer3f11c && ($this->initializer3f11c->__invoke($valueHolderb2a5e, $this, 'detach', array('entity' => $entity), $this->initializer3f11c) || 1) && $this->valueHolderb2a5e = $valueHolderb2a5e;

        return $this->valueHolderb2a5e->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer3f11c && ($this->initializer3f11c->__invoke($valueHolderb2a5e, $this, 'merge', array('entity' => $entity), $this->initializer3f11c) || 1) && $this->valueHolderb2a5e = $valueHolderb2a5e;

        return $this->valueHolderb2a5e->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer3f11c && ($this->initializer3f11c->__invoke($valueHolderb2a5e, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer3f11c) || 1) && $this->valueHolderb2a5e = $valueHolderb2a5e;

        return $this->valueHolderb2a5e->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer3f11c && ($this->initializer3f11c->__invoke($valueHolderb2a5e, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer3f11c) || 1) && $this->valueHolderb2a5e = $valueHolderb2a5e;

        return $this->valueHolderb2a5e->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer3f11c && ($this->initializer3f11c->__invoke($valueHolderb2a5e, $this, 'getRepository', array('entityName' => $entityName), $this->initializer3f11c) || 1) && $this->valueHolderb2a5e = $valueHolderb2a5e;

        return $this->valueHolderb2a5e->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer3f11c && ($this->initializer3f11c->__invoke($valueHolderb2a5e, $this, 'contains', array('entity' => $entity), $this->initializer3f11c) || 1) && $this->valueHolderb2a5e = $valueHolderb2a5e;

        return $this->valueHolderb2a5e->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer3f11c && ($this->initializer3f11c->__invoke($valueHolderb2a5e, $this, 'getEventManager', array(), $this->initializer3f11c) || 1) && $this->valueHolderb2a5e = $valueHolderb2a5e;

        return $this->valueHolderb2a5e->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer3f11c && ($this->initializer3f11c->__invoke($valueHolderb2a5e, $this, 'getConfiguration', array(), $this->initializer3f11c) || 1) && $this->valueHolderb2a5e = $valueHolderb2a5e;

        return $this->valueHolderb2a5e->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer3f11c && ($this->initializer3f11c->__invoke($valueHolderb2a5e, $this, 'isOpen', array(), $this->initializer3f11c) || 1) && $this->valueHolderb2a5e = $valueHolderb2a5e;

        return $this->valueHolderb2a5e->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer3f11c && ($this->initializer3f11c->__invoke($valueHolderb2a5e, $this, 'getUnitOfWork', array(), $this->initializer3f11c) || 1) && $this->valueHolderb2a5e = $valueHolderb2a5e;

        return $this->valueHolderb2a5e->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer3f11c && ($this->initializer3f11c->__invoke($valueHolderb2a5e, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer3f11c) || 1) && $this->valueHolderb2a5e = $valueHolderb2a5e;

        return $this->valueHolderb2a5e->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer3f11c && ($this->initializer3f11c->__invoke($valueHolderb2a5e, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer3f11c) || 1) && $this->valueHolderb2a5e = $valueHolderb2a5e;

        return $this->valueHolderb2a5e->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer3f11c && ($this->initializer3f11c->__invoke($valueHolderb2a5e, $this, 'getProxyFactory', array(), $this->initializer3f11c) || 1) && $this->valueHolderb2a5e = $valueHolderb2a5e;

        return $this->valueHolderb2a5e->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer3f11c && ($this->initializer3f11c->__invoke($valueHolderb2a5e, $this, 'initializeObject', array('obj' => $obj), $this->initializer3f11c) || 1) && $this->valueHolderb2a5e = $valueHolderb2a5e;

        return $this->valueHolderb2a5e->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer3f11c && ($this->initializer3f11c->__invoke($valueHolderb2a5e, $this, 'getFilters', array(), $this->initializer3f11c) || 1) && $this->valueHolderb2a5e = $valueHolderb2a5e;

        return $this->valueHolderb2a5e->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer3f11c && ($this->initializer3f11c->__invoke($valueHolderb2a5e, $this, 'isFiltersStateClean', array(), $this->initializer3f11c) || 1) && $this->valueHolderb2a5e = $valueHolderb2a5e;

        return $this->valueHolderb2a5e->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer3f11c && ($this->initializer3f11c->__invoke($valueHolderb2a5e, $this, 'hasFilters', array(), $this->initializer3f11c) || 1) && $this->valueHolderb2a5e = $valueHolderb2a5e;

        return $this->valueHolderb2a5e->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer3f11c = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderb2a5e) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderb2a5e = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderb2a5e->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer3f11c && ($this->initializer3f11c->__invoke($valueHolderb2a5e, $this, '__get', ['name' => $name], $this->initializer3f11c) || 1) && $this->valueHolderb2a5e = $valueHolderb2a5e;

        if (isset(self::$publicProperties4f098[$name])) {
            return $this->valueHolderb2a5e->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb2a5e;

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

        $targetObject = $this->valueHolderb2a5e;
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
        $this->initializer3f11c && ($this->initializer3f11c->__invoke($valueHolderb2a5e, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer3f11c) || 1) && $this->valueHolderb2a5e = $valueHolderb2a5e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb2a5e;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderb2a5e;
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
        $this->initializer3f11c && ($this->initializer3f11c->__invoke($valueHolderb2a5e, $this, '__isset', array('name' => $name), $this->initializer3f11c) || 1) && $this->valueHolderb2a5e = $valueHolderb2a5e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb2a5e;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderb2a5e;
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
        $this->initializer3f11c && ($this->initializer3f11c->__invoke($valueHolderb2a5e, $this, '__unset', array('name' => $name), $this->initializer3f11c) || 1) && $this->valueHolderb2a5e = $valueHolderb2a5e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb2a5e;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderb2a5e;
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
        $this->initializer3f11c && ($this->initializer3f11c->__invoke($valueHolderb2a5e, $this, '__clone', array(), $this->initializer3f11c) || 1) && $this->valueHolderb2a5e = $valueHolderb2a5e;

        $this->valueHolderb2a5e = clone $this->valueHolderb2a5e;
    }

    public function __sleep()
    {
        $this->initializer3f11c && ($this->initializer3f11c->__invoke($valueHolderb2a5e, $this, '__sleep', array(), $this->initializer3f11c) || 1) && $this->valueHolderb2a5e = $valueHolderb2a5e;

        return array('valueHolderb2a5e');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer3f11c = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer3f11c;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer3f11c && ($this->initializer3f11c->__invoke($valueHolderb2a5e, $this, 'initializeProxy', array(), $this->initializer3f11c) || 1) && $this->valueHolderb2a5e = $valueHolderb2a5e;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderb2a5e;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderb2a5e;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
