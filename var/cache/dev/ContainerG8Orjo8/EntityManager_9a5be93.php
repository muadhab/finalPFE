<?php

namespace ContainerG8Orjo8;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder666ca = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer159a5 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties0b9ea = [
        
    ];

    public function getConnection()
    {
        $this->initializer159a5 && ($this->initializer159a5->__invoke($valueHolder666ca, $this, 'getConnection', array(), $this->initializer159a5) || 1) && $this->valueHolder666ca = $valueHolder666ca;

        return $this->valueHolder666ca->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer159a5 && ($this->initializer159a5->__invoke($valueHolder666ca, $this, 'getMetadataFactory', array(), $this->initializer159a5) || 1) && $this->valueHolder666ca = $valueHolder666ca;

        return $this->valueHolder666ca->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer159a5 && ($this->initializer159a5->__invoke($valueHolder666ca, $this, 'getExpressionBuilder', array(), $this->initializer159a5) || 1) && $this->valueHolder666ca = $valueHolder666ca;

        return $this->valueHolder666ca->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer159a5 && ($this->initializer159a5->__invoke($valueHolder666ca, $this, 'beginTransaction', array(), $this->initializer159a5) || 1) && $this->valueHolder666ca = $valueHolder666ca;

        return $this->valueHolder666ca->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer159a5 && ($this->initializer159a5->__invoke($valueHolder666ca, $this, 'getCache', array(), $this->initializer159a5) || 1) && $this->valueHolder666ca = $valueHolder666ca;

        return $this->valueHolder666ca->getCache();
    }

    public function transactional($func)
    {
        $this->initializer159a5 && ($this->initializer159a5->__invoke($valueHolder666ca, $this, 'transactional', array('func' => $func), $this->initializer159a5) || 1) && $this->valueHolder666ca = $valueHolder666ca;

        return $this->valueHolder666ca->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer159a5 && ($this->initializer159a5->__invoke($valueHolder666ca, $this, 'wrapInTransaction', array('func' => $func), $this->initializer159a5) || 1) && $this->valueHolder666ca = $valueHolder666ca;

        return $this->valueHolder666ca->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer159a5 && ($this->initializer159a5->__invoke($valueHolder666ca, $this, 'commit', array(), $this->initializer159a5) || 1) && $this->valueHolder666ca = $valueHolder666ca;

        return $this->valueHolder666ca->commit();
    }

    public function rollback()
    {
        $this->initializer159a5 && ($this->initializer159a5->__invoke($valueHolder666ca, $this, 'rollback', array(), $this->initializer159a5) || 1) && $this->valueHolder666ca = $valueHolder666ca;

        return $this->valueHolder666ca->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer159a5 && ($this->initializer159a5->__invoke($valueHolder666ca, $this, 'getClassMetadata', array('className' => $className), $this->initializer159a5) || 1) && $this->valueHolder666ca = $valueHolder666ca;

        return $this->valueHolder666ca->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer159a5 && ($this->initializer159a5->__invoke($valueHolder666ca, $this, 'createQuery', array('dql' => $dql), $this->initializer159a5) || 1) && $this->valueHolder666ca = $valueHolder666ca;

        return $this->valueHolder666ca->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer159a5 && ($this->initializer159a5->__invoke($valueHolder666ca, $this, 'createNamedQuery', array('name' => $name), $this->initializer159a5) || 1) && $this->valueHolder666ca = $valueHolder666ca;

        return $this->valueHolder666ca->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer159a5 && ($this->initializer159a5->__invoke($valueHolder666ca, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer159a5) || 1) && $this->valueHolder666ca = $valueHolder666ca;

        return $this->valueHolder666ca->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer159a5 && ($this->initializer159a5->__invoke($valueHolder666ca, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer159a5) || 1) && $this->valueHolder666ca = $valueHolder666ca;

        return $this->valueHolder666ca->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer159a5 && ($this->initializer159a5->__invoke($valueHolder666ca, $this, 'createQueryBuilder', array(), $this->initializer159a5) || 1) && $this->valueHolder666ca = $valueHolder666ca;

        return $this->valueHolder666ca->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer159a5 && ($this->initializer159a5->__invoke($valueHolder666ca, $this, 'flush', array('entity' => $entity), $this->initializer159a5) || 1) && $this->valueHolder666ca = $valueHolder666ca;

        return $this->valueHolder666ca->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer159a5 && ($this->initializer159a5->__invoke($valueHolder666ca, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer159a5) || 1) && $this->valueHolder666ca = $valueHolder666ca;

        return $this->valueHolder666ca->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer159a5 && ($this->initializer159a5->__invoke($valueHolder666ca, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer159a5) || 1) && $this->valueHolder666ca = $valueHolder666ca;

        return $this->valueHolder666ca->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer159a5 && ($this->initializer159a5->__invoke($valueHolder666ca, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer159a5) || 1) && $this->valueHolder666ca = $valueHolder666ca;

        return $this->valueHolder666ca->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer159a5 && ($this->initializer159a5->__invoke($valueHolder666ca, $this, 'clear', array('entityName' => $entityName), $this->initializer159a5) || 1) && $this->valueHolder666ca = $valueHolder666ca;

        return $this->valueHolder666ca->clear($entityName);
    }

    public function close()
    {
        $this->initializer159a5 && ($this->initializer159a5->__invoke($valueHolder666ca, $this, 'close', array(), $this->initializer159a5) || 1) && $this->valueHolder666ca = $valueHolder666ca;

        return $this->valueHolder666ca->close();
    }

    public function persist($entity)
    {
        $this->initializer159a5 && ($this->initializer159a5->__invoke($valueHolder666ca, $this, 'persist', array('entity' => $entity), $this->initializer159a5) || 1) && $this->valueHolder666ca = $valueHolder666ca;

        return $this->valueHolder666ca->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer159a5 && ($this->initializer159a5->__invoke($valueHolder666ca, $this, 'remove', array('entity' => $entity), $this->initializer159a5) || 1) && $this->valueHolder666ca = $valueHolder666ca;

        return $this->valueHolder666ca->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer159a5 && ($this->initializer159a5->__invoke($valueHolder666ca, $this, 'refresh', array('entity' => $entity), $this->initializer159a5) || 1) && $this->valueHolder666ca = $valueHolder666ca;

        return $this->valueHolder666ca->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer159a5 && ($this->initializer159a5->__invoke($valueHolder666ca, $this, 'detach', array('entity' => $entity), $this->initializer159a5) || 1) && $this->valueHolder666ca = $valueHolder666ca;

        return $this->valueHolder666ca->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer159a5 && ($this->initializer159a5->__invoke($valueHolder666ca, $this, 'merge', array('entity' => $entity), $this->initializer159a5) || 1) && $this->valueHolder666ca = $valueHolder666ca;

        return $this->valueHolder666ca->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer159a5 && ($this->initializer159a5->__invoke($valueHolder666ca, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer159a5) || 1) && $this->valueHolder666ca = $valueHolder666ca;

        return $this->valueHolder666ca->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer159a5 && ($this->initializer159a5->__invoke($valueHolder666ca, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer159a5) || 1) && $this->valueHolder666ca = $valueHolder666ca;

        return $this->valueHolder666ca->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer159a5 && ($this->initializer159a5->__invoke($valueHolder666ca, $this, 'getRepository', array('entityName' => $entityName), $this->initializer159a5) || 1) && $this->valueHolder666ca = $valueHolder666ca;

        return $this->valueHolder666ca->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer159a5 && ($this->initializer159a5->__invoke($valueHolder666ca, $this, 'contains', array('entity' => $entity), $this->initializer159a5) || 1) && $this->valueHolder666ca = $valueHolder666ca;

        return $this->valueHolder666ca->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer159a5 && ($this->initializer159a5->__invoke($valueHolder666ca, $this, 'getEventManager', array(), $this->initializer159a5) || 1) && $this->valueHolder666ca = $valueHolder666ca;

        return $this->valueHolder666ca->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer159a5 && ($this->initializer159a5->__invoke($valueHolder666ca, $this, 'getConfiguration', array(), $this->initializer159a5) || 1) && $this->valueHolder666ca = $valueHolder666ca;

        return $this->valueHolder666ca->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer159a5 && ($this->initializer159a5->__invoke($valueHolder666ca, $this, 'isOpen', array(), $this->initializer159a5) || 1) && $this->valueHolder666ca = $valueHolder666ca;

        return $this->valueHolder666ca->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer159a5 && ($this->initializer159a5->__invoke($valueHolder666ca, $this, 'getUnitOfWork', array(), $this->initializer159a5) || 1) && $this->valueHolder666ca = $valueHolder666ca;

        return $this->valueHolder666ca->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer159a5 && ($this->initializer159a5->__invoke($valueHolder666ca, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer159a5) || 1) && $this->valueHolder666ca = $valueHolder666ca;

        return $this->valueHolder666ca->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer159a5 && ($this->initializer159a5->__invoke($valueHolder666ca, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer159a5) || 1) && $this->valueHolder666ca = $valueHolder666ca;

        return $this->valueHolder666ca->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer159a5 && ($this->initializer159a5->__invoke($valueHolder666ca, $this, 'getProxyFactory', array(), $this->initializer159a5) || 1) && $this->valueHolder666ca = $valueHolder666ca;

        return $this->valueHolder666ca->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer159a5 && ($this->initializer159a5->__invoke($valueHolder666ca, $this, 'initializeObject', array('obj' => $obj), $this->initializer159a5) || 1) && $this->valueHolder666ca = $valueHolder666ca;

        return $this->valueHolder666ca->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer159a5 && ($this->initializer159a5->__invoke($valueHolder666ca, $this, 'getFilters', array(), $this->initializer159a5) || 1) && $this->valueHolder666ca = $valueHolder666ca;

        return $this->valueHolder666ca->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer159a5 && ($this->initializer159a5->__invoke($valueHolder666ca, $this, 'isFiltersStateClean', array(), $this->initializer159a5) || 1) && $this->valueHolder666ca = $valueHolder666ca;

        return $this->valueHolder666ca->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer159a5 && ($this->initializer159a5->__invoke($valueHolder666ca, $this, 'hasFilters', array(), $this->initializer159a5) || 1) && $this->valueHolder666ca = $valueHolder666ca;

        return $this->valueHolder666ca->hasFilters();
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

        $instance->initializer159a5 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder666ca) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder666ca = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder666ca->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer159a5 && ($this->initializer159a5->__invoke($valueHolder666ca, $this, '__get', ['name' => $name], $this->initializer159a5) || 1) && $this->valueHolder666ca = $valueHolder666ca;

        if (isset(self::$publicProperties0b9ea[$name])) {
            return $this->valueHolder666ca->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder666ca;

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

        $targetObject = $this->valueHolder666ca;
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
        $this->initializer159a5 && ($this->initializer159a5->__invoke($valueHolder666ca, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer159a5) || 1) && $this->valueHolder666ca = $valueHolder666ca;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder666ca;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder666ca;
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
        $this->initializer159a5 && ($this->initializer159a5->__invoke($valueHolder666ca, $this, '__isset', array('name' => $name), $this->initializer159a5) || 1) && $this->valueHolder666ca = $valueHolder666ca;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder666ca;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder666ca;
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
        $this->initializer159a5 && ($this->initializer159a5->__invoke($valueHolder666ca, $this, '__unset', array('name' => $name), $this->initializer159a5) || 1) && $this->valueHolder666ca = $valueHolder666ca;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder666ca;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder666ca;
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
        $this->initializer159a5 && ($this->initializer159a5->__invoke($valueHolder666ca, $this, '__clone', array(), $this->initializer159a5) || 1) && $this->valueHolder666ca = $valueHolder666ca;

        $this->valueHolder666ca = clone $this->valueHolder666ca;
    }

    public function __sleep()
    {
        $this->initializer159a5 && ($this->initializer159a5->__invoke($valueHolder666ca, $this, '__sleep', array(), $this->initializer159a5) || 1) && $this->valueHolder666ca = $valueHolder666ca;

        return array('valueHolder666ca');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer159a5 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer159a5;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer159a5 && ($this->initializer159a5->__invoke($valueHolder666ca, $this, 'initializeProxy', array(), $this->initializer159a5) || 1) && $this->valueHolder666ca = $valueHolder666ca;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder666ca;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder666ca;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
