<?php

namespace ContainerYcdCx99;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderc72f0 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer8a224 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiese7027 = [
        
    ];

    public function getConnection()
    {
        $this->initializer8a224 && ($this->initializer8a224->__invoke($valueHolderc72f0, $this, 'getConnection', array(), $this->initializer8a224) || 1) && $this->valueHolderc72f0 = $valueHolderc72f0;

        return $this->valueHolderc72f0->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer8a224 && ($this->initializer8a224->__invoke($valueHolderc72f0, $this, 'getMetadataFactory', array(), $this->initializer8a224) || 1) && $this->valueHolderc72f0 = $valueHolderc72f0;

        return $this->valueHolderc72f0->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer8a224 && ($this->initializer8a224->__invoke($valueHolderc72f0, $this, 'getExpressionBuilder', array(), $this->initializer8a224) || 1) && $this->valueHolderc72f0 = $valueHolderc72f0;

        return $this->valueHolderc72f0->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer8a224 && ($this->initializer8a224->__invoke($valueHolderc72f0, $this, 'beginTransaction', array(), $this->initializer8a224) || 1) && $this->valueHolderc72f0 = $valueHolderc72f0;

        return $this->valueHolderc72f0->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer8a224 && ($this->initializer8a224->__invoke($valueHolderc72f0, $this, 'getCache', array(), $this->initializer8a224) || 1) && $this->valueHolderc72f0 = $valueHolderc72f0;

        return $this->valueHolderc72f0->getCache();
    }

    public function transactional($func)
    {
        $this->initializer8a224 && ($this->initializer8a224->__invoke($valueHolderc72f0, $this, 'transactional', array('func' => $func), $this->initializer8a224) || 1) && $this->valueHolderc72f0 = $valueHolderc72f0;

        return $this->valueHolderc72f0->transactional($func);
    }

    public function commit()
    {
        $this->initializer8a224 && ($this->initializer8a224->__invoke($valueHolderc72f0, $this, 'commit', array(), $this->initializer8a224) || 1) && $this->valueHolderc72f0 = $valueHolderc72f0;

        return $this->valueHolderc72f0->commit();
    }

    public function rollback()
    {
        $this->initializer8a224 && ($this->initializer8a224->__invoke($valueHolderc72f0, $this, 'rollback', array(), $this->initializer8a224) || 1) && $this->valueHolderc72f0 = $valueHolderc72f0;

        return $this->valueHolderc72f0->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer8a224 && ($this->initializer8a224->__invoke($valueHolderc72f0, $this, 'getClassMetadata', array('className' => $className), $this->initializer8a224) || 1) && $this->valueHolderc72f0 = $valueHolderc72f0;

        return $this->valueHolderc72f0->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer8a224 && ($this->initializer8a224->__invoke($valueHolderc72f0, $this, 'createQuery', array('dql' => $dql), $this->initializer8a224) || 1) && $this->valueHolderc72f0 = $valueHolderc72f0;

        return $this->valueHolderc72f0->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer8a224 && ($this->initializer8a224->__invoke($valueHolderc72f0, $this, 'createNamedQuery', array('name' => $name), $this->initializer8a224) || 1) && $this->valueHolderc72f0 = $valueHolderc72f0;

        return $this->valueHolderc72f0->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer8a224 && ($this->initializer8a224->__invoke($valueHolderc72f0, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer8a224) || 1) && $this->valueHolderc72f0 = $valueHolderc72f0;

        return $this->valueHolderc72f0->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer8a224 && ($this->initializer8a224->__invoke($valueHolderc72f0, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer8a224) || 1) && $this->valueHolderc72f0 = $valueHolderc72f0;

        return $this->valueHolderc72f0->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer8a224 && ($this->initializer8a224->__invoke($valueHolderc72f0, $this, 'createQueryBuilder', array(), $this->initializer8a224) || 1) && $this->valueHolderc72f0 = $valueHolderc72f0;

        return $this->valueHolderc72f0->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer8a224 && ($this->initializer8a224->__invoke($valueHolderc72f0, $this, 'flush', array('entity' => $entity), $this->initializer8a224) || 1) && $this->valueHolderc72f0 = $valueHolderc72f0;

        return $this->valueHolderc72f0->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer8a224 && ($this->initializer8a224->__invoke($valueHolderc72f0, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer8a224) || 1) && $this->valueHolderc72f0 = $valueHolderc72f0;

        return $this->valueHolderc72f0->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer8a224 && ($this->initializer8a224->__invoke($valueHolderc72f0, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer8a224) || 1) && $this->valueHolderc72f0 = $valueHolderc72f0;

        return $this->valueHolderc72f0->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer8a224 && ($this->initializer8a224->__invoke($valueHolderc72f0, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer8a224) || 1) && $this->valueHolderc72f0 = $valueHolderc72f0;

        return $this->valueHolderc72f0->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer8a224 && ($this->initializer8a224->__invoke($valueHolderc72f0, $this, 'clear', array('entityName' => $entityName), $this->initializer8a224) || 1) && $this->valueHolderc72f0 = $valueHolderc72f0;

        return $this->valueHolderc72f0->clear($entityName);
    }

    public function close()
    {
        $this->initializer8a224 && ($this->initializer8a224->__invoke($valueHolderc72f0, $this, 'close', array(), $this->initializer8a224) || 1) && $this->valueHolderc72f0 = $valueHolderc72f0;

        return $this->valueHolderc72f0->close();
    }

    public function persist($entity)
    {
        $this->initializer8a224 && ($this->initializer8a224->__invoke($valueHolderc72f0, $this, 'persist', array('entity' => $entity), $this->initializer8a224) || 1) && $this->valueHolderc72f0 = $valueHolderc72f0;

        return $this->valueHolderc72f0->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer8a224 && ($this->initializer8a224->__invoke($valueHolderc72f0, $this, 'remove', array('entity' => $entity), $this->initializer8a224) || 1) && $this->valueHolderc72f0 = $valueHolderc72f0;

        return $this->valueHolderc72f0->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer8a224 && ($this->initializer8a224->__invoke($valueHolderc72f0, $this, 'refresh', array('entity' => $entity), $this->initializer8a224) || 1) && $this->valueHolderc72f0 = $valueHolderc72f0;

        return $this->valueHolderc72f0->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer8a224 && ($this->initializer8a224->__invoke($valueHolderc72f0, $this, 'detach', array('entity' => $entity), $this->initializer8a224) || 1) && $this->valueHolderc72f0 = $valueHolderc72f0;

        return $this->valueHolderc72f0->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer8a224 && ($this->initializer8a224->__invoke($valueHolderc72f0, $this, 'merge', array('entity' => $entity), $this->initializer8a224) || 1) && $this->valueHolderc72f0 = $valueHolderc72f0;

        return $this->valueHolderc72f0->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer8a224 && ($this->initializer8a224->__invoke($valueHolderc72f0, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer8a224) || 1) && $this->valueHolderc72f0 = $valueHolderc72f0;

        return $this->valueHolderc72f0->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer8a224 && ($this->initializer8a224->__invoke($valueHolderc72f0, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer8a224) || 1) && $this->valueHolderc72f0 = $valueHolderc72f0;

        return $this->valueHolderc72f0->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer8a224 && ($this->initializer8a224->__invoke($valueHolderc72f0, $this, 'getRepository', array('entityName' => $entityName), $this->initializer8a224) || 1) && $this->valueHolderc72f0 = $valueHolderc72f0;

        return $this->valueHolderc72f0->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer8a224 && ($this->initializer8a224->__invoke($valueHolderc72f0, $this, 'contains', array('entity' => $entity), $this->initializer8a224) || 1) && $this->valueHolderc72f0 = $valueHolderc72f0;

        return $this->valueHolderc72f0->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer8a224 && ($this->initializer8a224->__invoke($valueHolderc72f0, $this, 'getEventManager', array(), $this->initializer8a224) || 1) && $this->valueHolderc72f0 = $valueHolderc72f0;

        return $this->valueHolderc72f0->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer8a224 && ($this->initializer8a224->__invoke($valueHolderc72f0, $this, 'getConfiguration', array(), $this->initializer8a224) || 1) && $this->valueHolderc72f0 = $valueHolderc72f0;

        return $this->valueHolderc72f0->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer8a224 && ($this->initializer8a224->__invoke($valueHolderc72f0, $this, 'isOpen', array(), $this->initializer8a224) || 1) && $this->valueHolderc72f0 = $valueHolderc72f0;

        return $this->valueHolderc72f0->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer8a224 && ($this->initializer8a224->__invoke($valueHolderc72f0, $this, 'getUnitOfWork', array(), $this->initializer8a224) || 1) && $this->valueHolderc72f0 = $valueHolderc72f0;

        return $this->valueHolderc72f0->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer8a224 && ($this->initializer8a224->__invoke($valueHolderc72f0, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer8a224) || 1) && $this->valueHolderc72f0 = $valueHolderc72f0;

        return $this->valueHolderc72f0->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer8a224 && ($this->initializer8a224->__invoke($valueHolderc72f0, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer8a224) || 1) && $this->valueHolderc72f0 = $valueHolderc72f0;

        return $this->valueHolderc72f0->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer8a224 && ($this->initializer8a224->__invoke($valueHolderc72f0, $this, 'getProxyFactory', array(), $this->initializer8a224) || 1) && $this->valueHolderc72f0 = $valueHolderc72f0;

        return $this->valueHolderc72f0->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer8a224 && ($this->initializer8a224->__invoke($valueHolderc72f0, $this, 'initializeObject', array('obj' => $obj), $this->initializer8a224) || 1) && $this->valueHolderc72f0 = $valueHolderc72f0;

        return $this->valueHolderc72f0->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer8a224 && ($this->initializer8a224->__invoke($valueHolderc72f0, $this, 'getFilters', array(), $this->initializer8a224) || 1) && $this->valueHolderc72f0 = $valueHolderc72f0;

        return $this->valueHolderc72f0->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer8a224 && ($this->initializer8a224->__invoke($valueHolderc72f0, $this, 'isFiltersStateClean', array(), $this->initializer8a224) || 1) && $this->valueHolderc72f0 = $valueHolderc72f0;

        return $this->valueHolderc72f0->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer8a224 && ($this->initializer8a224->__invoke($valueHolderc72f0, $this, 'hasFilters', array(), $this->initializer8a224) || 1) && $this->valueHolderc72f0 = $valueHolderc72f0;

        return $this->valueHolderc72f0->hasFilters();
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

        $instance->initializer8a224 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderc72f0) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderc72f0 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderc72f0->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer8a224 && ($this->initializer8a224->__invoke($valueHolderc72f0, $this, '__get', ['name' => $name], $this->initializer8a224) || 1) && $this->valueHolderc72f0 = $valueHolderc72f0;

        if (isset(self::$publicPropertiese7027[$name])) {
            return $this->valueHolderc72f0->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc72f0;

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

        $targetObject = $this->valueHolderc72f0;
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
        $this->initializer8a224 && ($this->initializer8a224->__invoke($valueHolderc72f0, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer8a224) || 1) && $this->valueHolderc72f0 = $valueHolderc72f0;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc72f0;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderc72f0;
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
        $this->initializer8a224 && ($this->initializer8a224->__invoke($valueHolderc72f0, $this, '__isset', array('name' => $name), $this->initializer8a224) || 1) && $this->valueHolderc72f0 = $valueHolderc72f0;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc72f0;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderc72f0;
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
        $this->initializer8a224 && ($this->initializer8a224->__invoke($valueHolderc72f0, $this, '__unset', array('name' => $name), $this->initializer8a224) || 1) && $this->valueHolderc72f0 = $valueHolderc72f0;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc72f0;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderc72f0;
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
        $this->initializer8a224 && ($this->initializer8a224->__invoke($valueHolderc72f0, $this, '__clone', array(), $this->initializer8a224) || 1) && $this->valueHolderc72f0 = $valueHolderc72f0;

        $this->valueHolderc72f0 = clone $this->valueHolderc72f0;
    }

    public function __sleep()
    {
        $this->initializer8a224 && ($this->initializer8a224->__invoke($valueHolderc72f0, $this, '__sleep', array(), $this->initializer8a224) || 1) && $this->valueHolderc72f0 = $valueHolderc72f0;

        return array('valueHolderc72f0');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer8a224 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer8a224;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer8a224 && ($this->initializer8a224->__invoke($valueHolderc72f0, $this, 'initializeProxy', array(), $this->initializer8a224) || 1) && $this->valueHolderc72f0 = $valueHolderc72f0;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderc72f0;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderc72f0;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
