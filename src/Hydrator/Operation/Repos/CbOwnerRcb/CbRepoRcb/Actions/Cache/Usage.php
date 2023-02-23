<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Cache;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class Usage implements ObjectMapper
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
            'ApiClients\Client\Github\Schema\ActionsCacheUsageByRepository' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️ActionsCacheUsageByRepository($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
        private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️ActionsCacheUsageByRepository(array $payload): \ApiClients\Client\Github\Schema\ActionsCacheUsageByRepository
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['full_name'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'full_name';
                    goto after_full_name;
                }

                $properties['full_name'] = $value;
    
                after_full_name:

                $value = $payload['active_caches_size_in_bytes'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'active_caches_size_in_bytes';
                    goto after_active_caches_size_in_bytes;
                }

                $properties['active_caches_size_in_bytes'] = $value;
    
                after_active_caches_size_in_bytes:

                $value = $payload['active_caches_count'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'active_caches_count';
                    goto after_active_caches_count;
                }

                $properties['active_caches_count'] = $value;
    
                after_active_caches_count:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\ActionsCacheUsageByRepository', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\ActionsCacheUsageByRepository::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\Github\Schema\ActionsCacheUsageByRepository(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\ActionsCacheUsageByRepository', $exception, stack: $this->hydrationStack);
            }
        }
    
    public function serializeObject(object $object): mixed
    {
        try {
            $className = get_class($object);

            return match($className) {
                'array' => $this->serializeValuearray($object),
                'Ramsey\Uuid\UuidInterface' => $this->serializeValueRamsey⚡️Uuid⚡️UuidInterface($object),
                'DateTime' => $this->serializeValueDateTime($object),
                'DateTimeImmutable' => $this->serializeValueDateTimeImmutable($object),
                'DateTimeInterface' => $this->serializeValueDateTimeInterface($object),
                'ApiClients\Client\Github\Schema\ActionsCacheUsageByRepository' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️ActionsCacheUsageByRepository($object),
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

    
    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️ActionsCacheUsageByRepository(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\ActionsCacheUsageByRepository);
        $result = [];
        
        $full_name = $object->full_name;

        if ($full_name === null) {
            goto after_full_name;
        }
        after_full_name:        $result['full_name'] = $full_name;

        
        $active_caches_size_in_bytes = $object->active_caches_size_in_bytes;

        if ($active_caches_size_in_bytes === null) {
            goto after_active_caches_size_in_bytes;
        }
        after_active_caches_size_in_bytes:        $result['active_caches_size_in_bytes'] = $active_caches_size_in_bytes;

        
        $active_caches_count = $object->active_caches_count;

        if ($active_caches_count === null) {
            goto after_active_caches_count;
        }
        after_active_caches_count:        $result['active_caches_count'] = $active_caches_count;


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
