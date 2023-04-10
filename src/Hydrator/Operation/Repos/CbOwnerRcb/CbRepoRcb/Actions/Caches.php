<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class Caches implements ObjectMapper
{
    private array $hydrationStack = [];
    public function __construct() {}

    /**
     * @template T of object
     * @param class-string<T> $className
     * @return T
     */
    public function hydrateObject(string $className, array $payload): object
    {
        return match($className) {
            'ApiClients\Client\Github\Schema\ActionsCacheList' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️ActionsCacheList($payload),
                'ApiClients\Client\Github\Schema\ActionsCacheList\ActionsCaches' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️ActionsCacheList⚡️ActionsCaches($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️ActionsCacheList(array $payload): \ApiClients\Client\Github\Schema\ActionsCacheList
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['total_count'] ?? null;

            if ($value === null) {
                $missingFields[] = 'total_count';
                goto after_totalCount;
            }

            $properties['totalCount'] = $value;

            after_totalCount:

            $value = $payload['actions_caches'] ?? null;

            if ($value === null) {
                $missingFields[] = 'actions_caches';
                goto after_actionsCaches;
            }

            static $actionsCachesCaster1;

            if ($actionsCachesCaster1 === null) {
                $actionsCachesCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\Github\\Schema\\ActionsCacheList\\ActionsCaches',
));
            }

            $value = $actionsCachesCaster1->cast($value, $this);

            $properties['actionsCaches'] = $value;

            after_actionsCaches:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\ActionsCacheList', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\ActionsCacheList::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\Github\Schema\ActionsCacheList(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\ActionsCacheList', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️ActionsCacheList⚡️ActionsCaches(array $payload): \ApiClients\Client\Github\Schema\ActionsCacheList\ActionsCaches
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['id'] ?? null;

            if ($value === null) {
                $properties['id'] = null;
                goto after_id;
            }

            $properties['id'] = $value;

            after_id:

            $value = $payload['ref'] ?? null;

            if ($value === null) {
                $properties['ref'] = null;
                goto after_ref;
            }

            $properties['ref'] = $value;

            after_ref:

            $value = $payload['key'] ?? null;

            if ($value === null) {
                $properties['key'] = null;
                goto after_key;
            }

            $properties['key'] = $value;

            after_key:

            $value = $payload['version'] ?? null;

            if ($value === null) {
                $properties['version'] = null;
                goto after_version;
            }

            $properties['version'] = $value;

            after_version:

            $value = $payload['last_accessed_at'] ?? null;

            if ($value === null) {
                $properties['lastAccessedAt'] = null;
                goto after_lastAccessedAt;
            }

            $properties['lastAccessedAt'] = $value;

            after_lastAccessedAt:

            $value = $payload['created_at'] ?? null;

            if ($value === null) {
                $properties['createdAt'] = null;
                goto after_createdAt;
            }

            $properties['createdAt'] = $value;

            after_createdAt:

            $value = $payload['size_in_bytes'] ?? null;

            if ($value === null) {
                $properties['sizeInBytes'] = null;
                goto after_sizeInBytes;
            }

            $properties['sizeInBytes'] = $value;

            after_sizeInBytes:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\ActionsCacheList\ActionsCaches', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\ActionsCacheList\ActionsCaches::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\Github\Schema\ActionsCacheList\ActionsCaches(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\ActionsCacheList\ActionsCaches', $exception, stack: $this->hydrationStack);
        }
    }
    
    private function serializeViaTypeMap(string $accessor, object $object, array $payloadToTypeMap): array
    {
        foreach ($payloadToTypeMap as $payloadType => [$valueType, $method]) {
            if (is_a($object, $valueType)) {
                return [$accessor => $payloadType] + $this->{$method}($object);
            }
        }

        throw new \LogicException('No type mapped for object of class: ' . get_class($object));
    }

    public function serializeObject(object $object): mixed
    {
        return $this->serializeObjectOfType($object, get_class($object));
    }

    /**
     * @template T
     *
     * @param T               $object
     * @param class-string<T> $className
     */
    public function serializeObjectOfType(object $object, string $className): mixed
    {
        try {
            return match($className) {
                'array' => $this->serializeValuearray($object),
            'Ramsey\Uuid\UuidInterface' => $this->serializeValueRamsey⚡️Uuid⚡️UuidInterface($object),
            'DateTime' => $this->serializeValueDateTime($object),
            'DateTimeImmutable' => $this->serializeValueDateTimeImmutable($object),
            'DateTimeInterface' => $this->serializeValueDateTimeInterface($object),
            'ApiClients\Client\Github\Schema\ActionsCacheList' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️ActionsCacheList($object),
            'ApiClients\Client\Github\Schema\ActionsCacheList\ActionsCaches' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️ActionsCacheList⚡️ActionsCaches($object),
                default => throw new \LogicException('No serialization defined for $className'),
            };
        } catch (\Throwable $exception) {
            throw UnableToSerializeObject::dueToError($className, $exception);
        }
    }
    
    
    private function serializeValuearray(mixed $value): mixed
    {
        static $serializer;
        
        if ($serializer === null) {
            $serializer = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        return $serializer->serialize($value, $this);
    }


    private function serializeValueRamsey⚡️Uuid⚡️UuidInterface(mixed $value): mixed
    {
        static $serializer;
        
        if ($serializer === null) {
            $serializer = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeUuidToString(...array (
));
        }
        
        return $serializer->serialize($value, $this);
    }


    private function serializeValueDateTime(mixed $value): mixed
    {
        static $serializer;
        
        if ($serializer === null) {
            $serializer = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeDateTime(...array (
));
        }
        
        return $serializer->serialize($value, $this);
    }


    private function serializeValueDateTimeImmutable(mixed $value): mixed
    {
        static $serializer;
        
        if ($serializer === null) {
            $serializer = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeDateTime(...array (
));
        }
        
        return $serializer->serialize($value, $this);
    }


    private function serializeValueDateTimeInterface(mixed $value): mixed
    {
        static $serializer;
        
        if ($serializer === null) {
            $serializer = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeDateTime(...array (
));
        }
        
        return $serializer->serialize($value, $this);
    }


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️ActionsCacheList(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\ActionsCacheList);
        $result = [];

        $totalCount = $object->totalCount;
        after_totalCount:        $result['total_count'] = $totalCount;

        
        $actionsCaches = $object->actionsCaches;
        static $actionsCachesSerializer0;

        if ($actionsCachesSerializer0 === null) {
            $actionsCachesSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\Github\\Schema\\ActionsCacheList\\ActionsCaches',
));
        }
        
        $actionsCaches = $actionsCachesSerializer0->serialize($actionsCaches, $this);
        after_actionsCaches:        $result['actions_caches'] = $actionsCaches;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️ActionsCacheList⚡️ActionsCaches(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\ActionsCacheList\ActionsCaches);
        $result = [];

        $id = $object->id;

        if ($id === null) {
            goto after_id;
        }
        after_id:        $result['id'] = $id;

        
        $ref = $object->ref;

        if ($ref === null) {
            goto after_ref;
        }
        after_ref:        $result['ref'] = $ref;

        
        $key = $object->key;

        if ($key === null) {
            goto after_key;
        }
        after_key:        $result['key'] = $key;

        
        $version = $object->version;

        if ($version === null) {
            goto after_version;
        }
        after_version:        $result['version'] = $version;

        
        $lastAccessedAt = $object->lastAccessedAt;

        if ($lastAccessedAt === null) {
            goto after_lastAccessedAt;
        }
        after_lastAccessedAt:        $result['last_accessed_at'] = $lastAccessedAt;

        
        $createdAt = $object->createdAt;

        if ($createdAt === null) {
            goto after_createdAt;
        }
        after_createdAt:        $result['created_at'] = $createdAt;

        
        $sizeInBytes = $object->sizeInBytes;

        if ($sizeInBytes === null) {
            goto after_sizeInBytes;
        }
        after_sizeInBytes:        $result['size_in_bytes'] = $sizeInBytes;


        return $result;
    }
    
    

    /**
     * @template T
     *
     * @param class-string<T> $className
     * @param iterable<array> $payloads;
     *
     * @return IterableList<T>
     *
     * @throws UnableToHydrateObject
     */
    public function hydrateObjects(string $className, iterable $payloads): IterableList
    {
        return new IterableList($this->doHydrateObjects($className, $payloads));
    }

    private function doHydrateObjects(string $className, iterable $payloads): Generator
    {
        foreach ($payloads as $index => $payload) {
            yield $index => $this->hydrateObject($className, $payload);
        }
    }

    /**
     * @template T
     *
     * @param class-string<T> $className
     * @param iterable<array> $payloads;
     *
     * @return IterableList<T>
     *
     * @throws UnableToSerializeObject
     */
    public function serializeObjects(iterable $payloads): IterableList
    {
        return new IterableList($this->doSerializeObjects($payloads));
    }

    private function doSerializeObjects(iterable $objects): Generator
    {
        foreach ($objects as $index => $object) {
            yield $index => $this->serializeObject($object);
        }
    }
}
