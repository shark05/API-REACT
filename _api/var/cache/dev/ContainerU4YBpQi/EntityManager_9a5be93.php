<?php

namespace ContainerU4YBpQi;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldercc744 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer84fcf = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties48420 = [
        
    ];

    public function getConnection()
    {
        $this->initializer84fcf && ($this->initializer84fcf->__invoke($valueHoldercc744, $this, 'getConnection', array(), $this->initializer84fcf) || 1) && $this->valueHoldercc744 = $valueHoldercc744;

        return $this->valueHoldercc744->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer84fcf && ($this->initializer84fcf->__invoke($valueHoldercc744, $this, 'getMetadataFactory', array(), $this->initializer84fcf) || 1) && $this->valueHoldercc744 = $valueHoldercc744;

        return $this->valueHoldercc744->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer84fcf && ($this->initializer84fcf->__invoke($valueHoldercc744, $this, 'getExpressionBuilder', array(), $this->initializer84fcf) || 1) && $this->valueHoldercc744 = $valueHoldercc744;

        return $this->valueHoldercc744->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer84fcf && ($this->initializer84fcf->__invoke($valueHoldercc744, $this, 'beginTransaction', array(), $this->initializer84fcf) || 1) && $this->valueHoldercc744 = $valueHoldercc744;

        return $this->valueHoldercc744->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer84fcf && ($this->initializer84fcf->__invoke($valueHoldercc744, $this, 'getCache', array(), $this->initializer84fcf) || 1) && $this->valueHoldercc744 = $valueHoldercc744;

        return $this->valueHoldercc744->getCache();
    }

    public function transactional($func)
    {
        $this->initializer84fcf && ($this->initializer84fcf->__invoke($valueHoldercc744, $this, 'transactional', array('func' => $func), $this->initializer84fcf) || 1) && $this->valueHoldercc744 = $valueHoldercc744;

        return $this->valueHoldercc744->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer84fcf && ($this->initializer84fcf->__invoke($valueHoldercc744, $this, 'wrapInTransaction', array('func' => $func), $this->initializer84fcf) || 1) && $this->valueHoldercc744 = $valueHoldercc744;

        return $this->valueHoldercc744->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer84fcf && ($this->initializer84fcf->__invoke($valueHoldercc744, $this, 'commit', array(), $this->initializer84fcf) || 1) && $this->valueHoldercc744 = $valueHoldercc744;

        return $this->valueHoldercc744->commit();
    }

    public function rollback()
    {
        $this->initializer84fcf && ($this->initializer84fcf->__invoke($valueHoldercc744, $this, 'rollback', array(), $this->initializer84fcf) || 1) && $this->valueHoldercc744 = $valueHoldercc744;

        return $this->valueHoldercc744->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer84fcf && ($this->initializer84fcf->__invoke($valueHoldercc744, $this, 'getClassMetadata', array('className' => $className), $this->initializer84fcf) || 1) && $this->valueHoldercc744 = $valueHoldercc744;

        return $this->valueHoldercc744->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer84fcf && ($this->initializer84fcf->__invoke($valueHoldercc744, $this, 'createQuery', array('dql' => $dql), $this->initializer84fcf) || 1) && $this->valueHoldercc744 = $valueHoldercc744;

        return $this->valueHoldercc744->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer84fcf && ($this->initializer84fcf->__invoke($valueHoldercc744, $this, 'createNamedQuery', array('name' => $name), $this->initializer84fcf) || 1) && $this->valueHoldercc744 = $valueHoldercc744;

        return $this->valueHoldercc744->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer84fcf && ($this->initializer84fcf->__invoke($valueHoldercc744, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer84fcf) || 1) && $this->valueHoldercc744 = $valueHoldercc744;

        return $this->valueHoldercc744->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer84fcf && ($this->initializer84fcf->__invoke($valueHoldercc744, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer84fcf) || 1) && $this->valueHoldercc744 = $valueHoldercc744;

        return $this->valueHoldercc744->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer84fcf && ($this->initializer84fcf->__invoke($valueHoldercc744, $this, 'createQueryBuilder', array(), $this->initializer84fcf) || 1) && $this->valueHoldercc744 = $valueHoldercc744;

        return $this->valueHoldercc744->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer84fcf && ($this->initializer84fcf->__invoke($valueHoldercc744, $this, 'flush', array('entity' => $entity), $this->initializer84fcf) || 1) && $this->valueHoldercc744 = $valueHoldercc744;

        return $this->valueHoldercc744->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer84fcf && ($this->initializer84fcf->__invoke($valueHoldercc744, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer84fcf) || 1) && $this->valueHoldercc744 = $valueHoldercc744;

        return $this->valueHoldercc744->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer84fcf && ($this->initializer84fcf->__invoke($valueHoldercc744, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer84fcf) || 1) && $this->valueHoldercc744 = $valueHoldercc744;

        return $this->valueHoldercc744->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer84fcf && ($this->initializer84fcf->__invoke($valueHoldercc744, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer84fcf) || 1) && $this->valueHoldercc744 = $valueHoldercc744;

        return $this->valueHoldercc744->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer84fcf && ($this->initializer84fcf->__invoke($valueHoldercc744, $this, 'clear', array('entityName' => $entityName), $this->initializer84fcf) || 1) && $this->valueHoldercc744 = $valueHoldercc744;

        return $this->valueHoldercc744->clear($entityName);
    }

    public function close()
    {
        $this->initializer84fcf && ($this->initializer84fcf->__invoke($valueHoldercc744, $this, 'close', array(), $this->initializer84fcf) || 1) && $this->valueHoldercc744 = $valueHoldercc744;

        return $this->valueHoldercc744->close();
    }

    public function persist($entity)
    {
        $this->initializer84fcf && ($this->initializer84fcf->__invoke($valueHoldercc744, $this, 'persist', array('entity' => $entity), $this->initializer84fcf) || 1) && $this->valueHoldercc744 = $valueHoldercc744;

        return $this->valueHoldercc744->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer84fcf && ($this->initializer84fcf->__invoke($valueHoldercc744, $this, 'remove', array('entity' => $entity), $this->initializer84fcf) || 1) && $this->valueHoldercc744 = $valueHoldercc744;

        return $this->valueHoldercc744->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer84fcf && ($this->initializer84fcf->__invoke($valueHoldercc744, $this, 'refresh', array('entity' => $entity), $this->initializer84fcf) || 1) && $this->valueHoldercc744 = $valueHoldercc744;

        return $this->valueHoldercc744->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer84fcf && ($this->initializer84fcf->__invoke($valueHoldercc744, $this, 'detach', array('entity' => $entity), $this->initializer84fcf) || 1) && $this->valueHoldercc744 = $valueHoldercc744;

        return $this->valueHoldercc744->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer84fcf && ($this->initializer84fcf->__invoke($valueHoldercc744, $this, 'merge', array('entity' => $entity), $this->initializer84fcf) || 1) && $this->valueHoldercc744 = $valueHoldercc744;

        return $this->valueHoldercc744->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer84fcf && ($this->initializer84fcf->__invoke($valueHoldercc744, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer84fcf) || 1) && $this->valueHoldercc744 = $valueHoldercc744;

        return $this->valueHoldercc744->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer84fcf && ($this->initializer84fcf->__invoke($valueHoldercc744, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer84fcf) || 1) && $this->valueHoldercc744 = $valueHoldercc744;

        return $this->valueHoldercc744->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer84fcf && ($this->initializer84fcf->__invoke($valueHoldercc744, $this, 'getRepository', array('entityName' => $entityName), $this->initializer84fcf) || 1) && $this->valueHoldercc744 = $valueHoldercc744;

        return $this->valueHoldercc744->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer84fcf && ($this->initializer84fcf->__invoke($valueHoldercc744, $this, 'contains', array('entity' => $entity), $this->initializer84fcf) || 1) && $this->valueHoldercc744 = $valueHoldercc744;

        return $this->valueHoldercc744->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer84fcf && ($this->initializer84fcf->__invoke($valueHoldercc744, $this, 'getEventManager', array(), $this->initializer84fcf) || 1) && $this->valueHoldercc744 = $valueHoldercc744;

        return $this->valueHoldercc744->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer84fcf && ($this->initializer84fcf->__invoke($valueHoldercc744, $this, 'getConfiguration', array(), $this->initializer84fcf) || 1) && $this->valueHoldercc744 = $valueHoldercc744;

        return $this->valueHoldercc744->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer84fcf && ($this->initializer84fcf->__invoke($valueHoldercc744, $this, 'isOpen', array(), $this->initializer84fcf) || 1) && $this->valueHoldercc744 = $valueHoldercc744;

        return $this->valueHoldercc744->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer84fcf && ($this->initializer84fcf->__invoke($valueHoldercc744, $this, 'getUnitOfWork', array(), $this->initializer84fcf) || 1) && $this->valueHoldercc744 = $valueHoldercc744;

        return $this->valueHoldercc744->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer84fcf && ($this->initializer84fcf->__invoke($valueHoldercc744, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer84fcf) || 1) && $this->valueHoldercc744 = $valueHoldercc744;

        return $this->valueHoldercc744->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer84fcf && ($this->initializer84fcf->__invoke($valueHoldercc744, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer84fcf) || 1) && $this->valueHoldercc744 = $valueHoldercc744;

        return $this->valueHoldercc744->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer84fcf && ($this->initializer84fcf->__invoke($valueHoldercc744, $this, 'getProxyFactory', array(), $this->initializer84fcf) || 1) && $this->valueHoldercc744 = $valueHoldercc744;

        return $this->valueHoldercc744->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer84fcf && ($this->initializer84fcf->__invoke($valueHoldercc744, $this, 'initializeObject', array('obj' => $obj), $this->initializer84fcf) || 1) && $this->valueHoldercc744 = $valueHoldercc744;

        return $this->valueHoldercc744->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer84fcf && ($this->initializer84fcf->__invoke($valueHoldercc744, $this, 'getFilters', array(), $this->initializer84fcf) || 1) && $this->valueHoldercc744 = $valueHoldercc744;

        return $this->valueHoldercc744->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer84fcf && ($this->initializer84fcf->__invoke($valueHoldercc744, $this, 'isFiltersStateClean', array(), $this->initializer84fcf) || 1) && $this->valueHoldercc744 = $valueHoldercc744;

        return $this->valueHoldercc744->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer84fcf && ($this->initializer84fcf->__invoke($valueHoldercc744, $this, 'hasFilters', array(), $this->initializer84fcf) || 1) && $this->valueHoldercc744 = $valueHoldercc744;

        return $this->valueHoldercc744->hasFilters();
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

        $instance->initializer84fcf = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHoldercc744) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldercc744 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldercc744->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer84fcf && ($this->initializer84fcf->__invoke($valueHoldercc744, $this, '__get', ['name' => $name], $this->initializer84fcf) || 1) && $this->valueHoldercc744 = $valueHoldercc744;

        if (isset(self::$publicProperties48420[$name])) {
            return $this->valueHoldercc744->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercc744;

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

        $targetObject = $this->valueHoldercc744;
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
        $this->initializer84fcf && ($this->initializer84fcf->__invoke($valueHoldercc744, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer84fcf) || 1) && $this->valueHoldercc744 = $valueHoldercc744;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercc744;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldercc744;
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
        $this->initializer84fcf && ($this->initializer84fcf->__invoke($valueHoldercc744, $this, '__isset', array('name' => $name), $this->initializer84fcf) || 1) && $this->valueHoldercc744 = $valueHoldercc744;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercc744;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldercc744;
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
        $this->initializer84fcf && ($this->initializer84fcf->__invoke($valueHoldercc744, $this, '__unset', array('name' => $name), $this->initializer84fcf) || 1) && $this->valueHoldercc744 = $valueHoldercc744;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercc744;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldercc744;
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
        $this->initializer84fcf && ($this->initializer84fcf->__invoke($valueHoldercc744, $this, '__clone', array(), $this->initializer84fcf) || 1) && $this->valueHoldercc744 = $valueHoldercc744;

        $this->valueHoldercc744 = clone $this->valueHoldercc744;
    }

    public function __sleep()
    {
        $this->initializer84fcf && ($this->initializer84fcf->__invoke($valueHoldercc744, $this, '__sleep', array(), $this->initializer84fcf) || 1) && $this->valueHoldercc744 = $valueHoldercc744;

        return array('valueHoldercc744');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer84fcf = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer84fcf;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer84fcf && ($this->initializer84fcf->__invoke($valueHoldercc744, $this, 'initializeProxy', array(), $this->initializer84fcf) || 1) && $this->valueHoldercc744 = $valueHoldercc744;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldercc744;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldercc744;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
