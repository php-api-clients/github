<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Actions\Cache;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class UsageByRepository implements ObjectMapper
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
            'ApiClients\Client\Github\Schema\Operation\Actions\GetActionsCacheUsageByRepoForOrg\Response\Applicationjson\H200' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️Operation⚡️Actions⚡️GetActionsCacheUsageByRepoForOrg⚡️Response⚡️Applicationjson⚡️H200($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
        private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️Operation⚡️Actions⚡️GetActionsCacheUsageByRepoForOrg⚡️Response⚡️Applicationjson⚡️H200(array $payload): \ApiClients\Client\Github\Schema\Operation\Actions\GetActionsCacheUsageByRepoForOrg\Response\Applicationjson\H200
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['total_count'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'total_count';
                    goto after_total_count;
                }

                $properties['total_count'] = $value;
    
                after_total_count:

                $value = $payload['repository_cache_usages'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'repository_cache_usages';
                    goto after_repository_cache_usages;
                }

                $properties['repository_cache_usages'] = $value;
    
                after_repository_cache_usages:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\Operation\Actions\GetActionsCacheUsageByRepoForOrg\Response\Applicationjson\H200', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\Operation\Actions\GetActionsCacheUsageByRepoForOrg\Response\Applicationjson\H200::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\Github\Schema\Operation\Actions\GetActionsCacheUsageByRepoForOrg\Response\Applicationjson\H200(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\Operation\Actions\GetActionsCacheUsageByRepoForOrg\Response\Applicationjson\H200', $exception, stack: $this->hydrationStack);
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
                'ApiClients\Client\Github\Schema\Operation\Actions\GetActionsCacheUsageByRepoForOrg\Response\Applicationjson\H200' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️Operation⚡️Actions⚡️GetActionsCacheUsageByRepoForOrg⚡️Response⚡️Applicationjson⚡️H200($object),
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

    
    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️Operation⚡️Actions⚡️GetActionsCacheUsageByRepoForOrg⚡️Response⚡️Applicationjson⚡️H200(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\Operation\Actions\GetActionsCacheUsageByRepoForOrg\Response\Applicationjson\H200);
        $result = [];
        
        $total_count = $object->total_count;

        if ($total_count === null) {
            goto after_total_count;
        }
        after_total_count:        $result['total_count'] = $total_count;

        
        $repository_cache_usages = $object->repository_cache_usages;

        if ($repository_cache_usages === null) {
            goto after_repository_cache_usages;
        }
        static $repository_cache_usagesSerializer0;

        if ($repository_cache_usagesSerializer0 === null) {
            $repository_cache_usagesSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $repository_cache_usages = $repository_cache_usagesSerializer0->serialize($repository_cache_usages, $this);
        after_repository_cache_usages:        $result['repository_cache_usages'] = $repository_cache_usages;


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
