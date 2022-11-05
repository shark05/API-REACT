<?php

namespace ContainerPnT0x6a;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder667ef = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializere12c6 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties60646 = [
        
    ];

    public function getConnection()
    {
        $this->initializere12c6 && ($this->initializere12c6->__invoke($valueHolder667ef, $this, 'getConnection', array(), $this->initializere12c6) || 1) && $this->valueHolder667ef = $valueHolder667ef;

        return $this->valueHolder667ef->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializere12c6 && ($this->initializere12c6->__invoke($valueHolder667ef, $this, 'getMetadataFactory', array(), $this->initializere12c6) || 1) && $this->valueHolder667ef = $valueHolder667ef;

        return $this->valueHolder667ef->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializere12c6 && ($this->initializere12c6->__invoke($valueHolder667ef, $this, 'getExpressionBuilder', array(), $this->initializere12c6) || 1) && $this->valueHolder667ef = $valueHolder667ef;

        return $this->valueHolder667ef->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializere12c6 && ($this->initializere12c6->__invoke($valueHolder667ef, $this, 'beginTransaction', array(), $this->initializere12c6) || 1) && $this->valueHolder667ef = $valueHolder667ef;

        return $this->valueHolder667ef->beginTransaction();
    }

    public function getCache()
    {
        $this->initializere12c6 && ($this->initializere12c6->__invoke($valueHolder667ef, $this, 'getCache', array(), $this->initializere12c6) || 1) && $this->valueHolder667ef = $valueHolder667ef;

        return $this->valueHolder667ef->getCache();
    }

    public function transactional($func)
    {
        $this->initializere12c6 && ($this->initializere12c6->__invoke($valueHolder667ef, $this, 'transactional', array('func' => $func), $this->initializere12c6) || 1) && $this->valueHolder667ef = $valueHolder667ef;

        return $this->valueHolder667ef->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializere12c6 && ($this->initializere12c6->__invoke($valueHolder667ef, $this, 'wrapInTransaction', array('func' => $func), $this->initializere12c6) || 1) && $this->valueHolder667ef = $valueHolder667ef;

        return $this->valueHolder667ef->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializere12c6 && ($this->initializere12c6->__invoke($valueHolder667ef, $this, 'commit', array(), $this->initializere12c6) || 1) && $this->valueHolder667ef = $valueHolder667ef;

        return $this->valueHolder667ef->commit();
    }

    public function rollback()
    {
        $this->initializere12c6 && ($this->initializere12c6->__invoke($valueHolder667ef, $this, 'rollback', array(), $this->initializere12c6) || 1) && $this->valueHolder667ef = $valueHolder667ef;

        return $this->valueHolder667ef->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializere12c6 && ($this->initializere12c6->__invoke($valueHolder667ef, $this, 'getClassMetadata', array('className' => $className), $this->initializere12c6) || 1) && $this->valueHolder667ef = $valueHolder667ef;

        return $this->valueHolder667ef->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializere12c6 && ($this->initializere12c6->__invoke($valueHolder667ef, $this, 'createQuery', array('dql' => $dql), $this->initializere12c6) || 1) && $this->valueHolder667ef = $valueHolder667ef;

        return $this->valueHolder667ef->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializere12c6 && ($this->initializere12c6->__invoke($valueHolder667ef, $this, 'createNamedQuery', array('name' => $name), $this->initializere12c6) || 1) && $this->valueHolder667ef = $valueHolder667ef;

        return $this->valueHolder667ef->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializere12c6 && ($this->initializere12c6->__invoke($valueHolder667ef, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializere12c6) || 1) && $this->valueHolder667ef = $valueHolder667ef;

        return $this->valueHolder667ef->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializere12c6 && ($this->initializere12c6->__invoke($valueHolder667ef, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializere12c6) || 1) && $this->valueHolder667ef = $valueHolder667ef;

        return $this->valueHolder667ef->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializere12c6 && ($this->initializere12c6->__invoke($valueHolder667ef, $this, 'createQueryBuilder', array(), $this->initializere12c6) || 1) && $this->valueHolder667ef = $valueHolder667ef;

        return $this->valueHolder667ef->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializere12c6 && ($this->initializere12c6->__invoke($valueHolder667ef, $this, 'flush', array('entity' => $entity), $this->initializere12c6) || 1) && $this->valueHolder667ef = $valueHolder667ef;

        return $this->valueHolder667ef->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializere12c6 && ($this->initializere12c6->__invoke($valueHolder667ef, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere12c6) || 1) && $this->valueHolder667ef = $valueHolder667ef;

        return $this->valueHolder667ef->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializere12c6 && ($this->initializere12c6->__invoke($valueHolder667ef, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializere12c6) || 1) && $this->valueHolder667ef = $valueHolder667ef;

        return $this->valueHolder667ef->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializere12c6 && ($this->initializere12c6->__invoke($valueHolder667ef, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializere12c6) || 1) && $this->valueHolder667ef = $valueHolder667ef;

        return $this->valueHolder667ef->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializere12c6 && ($this->initializere12c6->__invoke($valueHolder667ef, $this, 'clear', array('entityName' => $entityName), $this->initializere12c6) || 1) && $this->valueHolder667ef = $valueHolder667ef;

        return $this->valueHolder667ef->clear($entityName);
    }

    public function close()
    {
        $this->initializere12c6 && ($this->initializere12c6->__invoke($valueHolder667ef, $this, 'close', array(), $this->initializere12c6) || 1) && $this->valueHolder667ef = $valueHolder667ef;

        return $this->valueHolder667ef->close();
    }

    public function persist($entity)
    {
        $this->initializere12c6 && ($this->initializere12c6->__invoke($valueHolder667ef, $this, 'persist', array('entity' => $entity), $this->initializere12c6) || 1) && $this->valueHolder667ef = $valueHolder667ef;

        return $this->valueHolder667ef->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializere12c6 && ($this->initializere12c6->__invoke($valueHolder667ef, $this, 'remove', array('entity' => $entity), $this->initializere12c6) || 1) && $this->valueHolder667ef = $valueHolder667ef;

        return $this->valueHolder667ef->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializere12c6 && ($this->initializere12c6->__invoke($valueHolder667ef, $this, 'refresh', array('entity' => $entity), $this->initializere12c6) || 1) && $this->valueHolder667ef = $valueHolder667ef;

        return $this->valueHolder667ef->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializere12c6 && ($this->initializere12c6->__invoke($valueHolder667ef, $this, 'detach', array('entity' => $entity), $this->initializere12c6) || 1) && $this->valueHolder667ef = $valueHolder667ef;

        return $this->valueHolder667ef->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializere12c6 && ($this->initializere12c6->__invoke($valueHolder667ef, $this, 'merge', array('entity' => $entity), $this->initializere12c6) || 1) && $this->valueHolder667ef = $valueHolder667ef;

        return $this->valueHolder667ef->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializere12c6 && ($this->initializere12c6->__invoke($valueHolder667ef, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializere12c6) || 1) && $this->valueHolder667ef = $valueHolder667ef;

        return $this->valueHolder667ef->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializere12c6 && ($this->initializere12c6->__invoke($valueHolder667ef, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere12c6) || 1) && $this->valueHolder667ef = $valueHolder667ef;

        return $this->valueHolder667ef->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializere12c6 && ($this->initializere12c6->__invoke($valueHolder667ef, $this, 'getRepository', array('entityName' => $entityName), $this->initializere12c6) || 1) && $this->valueHolder667ef = $valueHolder667ef;

        return $this->valueHolder667ef->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializere12c6 && ($this->initializere12c6->__invoke($valueHolder667ef, $this, 'contains', array('entity' => $entity), $this->initializere12c6) || 1) && $this->valueHolder667ef = $valueHolder667ef;

        return $this->valueHolder667ef->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializere12c6 && ($this->initializere12c6->__invoke($valueHolder667ef, $this, 'getEventManager', array(), $this->initializere12c6) || 1) && $this->valueHolder667ef = $valueHolder667ef;

        return $this->valueHolder667ef->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializere12c6 && ($this->initializere12c6->__invoke($valueHolder667ef, $this, 'getConfiguration', array(), $this->initializere12c6) || 1) && $this->valueHolder667ef = $valueHolder667ef;

        return $this->valueHolder667ef->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializere12c6 && ($this->initializere12c6->__invoke($valueHolder667ef, $this, 'isOpen', array(), $this->initializere12c6) || 1) && $this->valueHolder667ef = $valueHolder667ef;

        return $this->valueHolder667ef->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializere12c6 && ($this->initializere12c6->__invoke($valueHolder667ef, $this, 'getUnitOfWork', array(), $this->initializere12c6) || 1) && $this->valueHolder667ef = $valueHolder667ef;

        return $this->valueHolder667ef->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializere12c6 && ($this->initializere12c6->__invoke($valueHolder667ef, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializere12c6) || 1) && $this->valueHolder667ef = $valueHolder667ef;

        return $this->valueHolder667ef->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializere12c6 && ($this->initializere12c6->__invoke($valueHolder667ef, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializere12c6) || 1) && $this->valueHolder667ef = $valueHolder667ef;

        return $this->valueHolder667ef->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializere12c6 && ($this->initializere12c6->__invoke($valueHolder667ef, $this, 'getProxyFactory', array(), $this->initializere12c6) || 1) && $this->valueHolder667ef = $valueHolder667ef;

        return $this->valueHolder667ef->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializere12c6 && ($this->initializere12c6->__invoke($valueHolder667ef, $this, 'initializeObject', array('obj' => $obj), $this->initializere12c6) || 1) && $this->valueHolder667ef = $valueHolder667ef;

        return $this->valueHolder667ef->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializere12c6 && ($this->initializere12c6->__invoke($valueHolder667ef, $this, 'getFilters', array(), $this->initializere12c6) || 1) && $this->valueHolder667ef = $valueHolder667ef;

        return $this->valueHolder667ef->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializere12c6 && ($this->initializere12c6->__invoke($valueHolder667ef, $this, 'isFiltersStateClean', array(), $this->initializere12c6) || 1) && $this->valueHolder667ef = $valueHolder667ef;

        return $this->valueHolder667ef->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializere12c6 && ($this->initializere12c6->__invoke($valueHolder667ef, $this, 'hasFilters', array(), $this->initializere12c6) || 1) && $this->valueHolder667ef = $valueHolder667ef;

        return $this->valueHolder667ef->hasFilters();
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

        $instance->initializere12c6 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder667ef) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder667ef = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder667ef->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializere12c6 && ($this->initializere12c6->__invoke($valueHolder667ef, $this, '__get', ['name' => $name], $this->initializere12c6) || 1) && $this->valueHolder667ef = $valueHolder667ef;

        if (isset(self::$publicProperties60646[$name])) {
            return $this->valueHolder667ef->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder667ef;

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

        $targetObject = $this->valueHolder667ef;
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
        $this->initializere12c6 && ($this->initializere12c6->__invoke($valueHolder667ef, $this, '__set', array('name' => $name, 'value' => $value), $this->initializere12c6) || 1) && $this->valueHolder667ef = $valueHolder667ef;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder667ef;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder667ef;
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
        $this->initializere12c6 && ($this->initializere12c6->__invoke($valueHolder667ef, $this, '__isset', array('name' => $name), $this->initializere12c6) || 1) && $this->valueHolder667ef = $valueHolder667ef;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder667ef;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder667ef;
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
        $this->initializere12c6 && ($this->initializere12c6->__invoke($valueHolder667ef, $this, '__unset', array('name' => $name), $this->initializere12c6) || 1) && $this->valueHolder667ef = $valueHolder667ef;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder667ef;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder667ef;
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
        $this->initializere12c6 && ($this->initializere12c6->__invoke($valueHolder667ef, $this, '__clone', array(), $this->initializere12c6) || 1) && $this->valueHolder667ef = $valueHolder667ef;

        $this->valueHolder667ef = clone $this->valueHolder667ef;
    }

    public function __sleep()
    {
        $this->initializere12c6 && ($this->initializere12c6->__invoke($valueHolder667ef, $this, '__sleep', array(), $this->initializere12c6) || 1) && $this->valueHolder667ef = $valueHolder667ef;

        return array('valueHolder667ef');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializere12c6 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializere12c6;
    }

    public function initializeProxy() : bool
    {
        return $this->initializere12c6 && ($this->initializere12c6->__invoke($valueHolder667ef, $this, 'initializeProxy', array(), $this->initializere12c6) || 1) && $this->valueHolder667ef = $valueHolder667ef;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder667ef;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder667ef;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
