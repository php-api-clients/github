<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Hydrator\Operation\User\Codespaces\CbCodespaceNameRcb;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class Machines implements ObjectMapper
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
            'ApiClients\Client\GitHub\Schema\Operation\Codespaces\RepoMachinesForAuthenticatedUser\Response\Applicationjson\H200' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Operation⚡️Codespaces⚡️RepoMachinesForAuthenticatedUser⚡️Response⚡️Applicationjson⚡️H200($payload),
                'ApiClients\Client\GitHub\Schema\CodespaceMachine' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CodespaceMachine($payload),
                'ApiClients\Client\GitHub\Schema\BasicError' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BasicError($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Operation⚡️Codespaces⚡️RepoMachinesForAuthenticatedUser⚡️Response⚡️Applicationjson⚡️H200(array $payload): \ApiClients\Client\GitHub\Schema\Operation\Codespaces\RepoMachinesForAuthenticatedUser\Response\Applicationjson\H200
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

            $value = $payload['machines'] ?? null;

            if ($value === null) {
                $missingFields[] = 'machines';
                goto after_machines;
            }

            static $machinesCaster1;

            if ($machinesCaster1 === null) {
                $machinesCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\CodespaceMachine',
));
            }

            $value = $machinesCaster1->cast($value, $this);

            $properties['machines'] = $value;

            after_machines:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Operation\Codespaces\RepoMachinesForAuthenticatedUser\Response\Applicationjson\H200', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\Operation\Codespaces\RepoMachinesForAuthenticatedUser\Response\Applicationjson\H200::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\Operation\Codespaces\RepoMachinesForAuthenticatedUser\Response\Applicationjson\H200(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Operation\Codespaces\RepoMachinesForAuthenticatedUser\Response\Applicationjson\H200', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CodespaceMachine(array $payload): \ApiClients\Client\GitHub\Schema\CodespaceMachine
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['name'] ?? null;

            if ($value === null) {
                $missingFields[] = 'name';
                goto after_name;
            }

            $properties['name'] = $value;

            after_name:

            $value = $payload['display_name'] ?? null;

            if ($value === null) {
                $missingFields[] = 'display_name';
                goto after_displayName;
            }

            $properties['displayName'] = $value;

            after_displayName:

            $value = $payload['operating_system'] ?? null;

            if ($value === null) {
                $missingFields[] = 'operating_system';
                goto after_operatingSystem;
            }

            $properties['operatingSystem'] = $value;

            after_operatingSystem:

            $value = $payload['storage_in_bytes'] ?? null;

            if ($value === null) {
                $missingFields[] = 'storage_in_bytes';
                goto after_storageInBytes;
            }

            $properties['storageInBytes'] = $value;

            after_storageInBytes:

            $value = $payload['memory_in_bytes'] ?? null;

            if ($value === null) {
                $missingFields[] = 'memory_in_bytes';
                goto after_memoryInBytes;
            }

            $properties['memoryInBytes'] = $value;

            after_memoryInBytes:

            $value = $payload['cpus'] ?? null;

            if ($value === null) {
                $missingFields[] = 'cpus';
                goto after_cpus;
            }

            $properties['cpus'] = $value;

            after_cpus:

            $value = $payload['prebuild_availability'] ?? null;

            if ($value === null) {
                $properties['prebuildAvailability'] = null;
                goto after_prebuildAvailability;
            }

            $properties['prebuildAvailability'] = $value;

            after_prebuildAvailability:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\CodespaceMachine', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\CodespaceMachine::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\CodespaceMachine(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\CodespaceMachine', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BasicError(array $payload): \ApiClients\Client\GitHub\Schema\BasicError
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['message'] ?? null;

            if ($value === null) {
                $properties['message'] = null;
                goto after_message;
            }

            $properties['message'] = $value;

            after_message:

            $value = $payload['documentation_url'] ?? null;

            if ($value === null) {
                $properties['documentationUrl'] = null;
                goto after_documentationUrl;
            }

            $properties['documentationUrl'] = $value;

            after_documentationUrl:

            $value = $payload['url'] ?? null;

            if ($value === null) {
                $properties['url'] = null;
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

            $value = $payload['status'] ?? null;

            if ($value === null) {
                $properties['status'] = null;
                goto after_status;
            }

            $properties['status'] = $value;

            after_status:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\BasicError', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\BasicError::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\BasicError(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\BasicError', $exception, stack: $this->hydrationStack);
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
            'ApiClients\Client\GitHub\Schema\Operation\Codespaces\RepoMachinesForAuthenticatedUser\Response\Applicationjson\H200' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Operation⚡️Codespaces⚡️RepoMachinesForAuthenticatedUser⚡️Response⚡️Applicationjson⚡️H200($object),
            'ApiClients\Client\GitHub\Schema\CodespaceMachine' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CodespaceMachine($object),
            'ApiClients\Client\GitHub\Schema\BasicError' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BasicError($object),
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


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Operation⚡️Codespaces⚡️RepoMachinesForAuthenticatedUser⚡️Response⚡️Applicationjson⚡️H200(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\Operation\Codespaces\RepoMachinesForAuthenticatedUser\Response\Applicationjson\H200);
        $result = [];

        $totalCount = $object->totalCount;
        after_totalCount:        $result['total_count'] = $totalCount;

        
        $machines = $object->machines;
        static $machinesSerializer0;

        if ($machinesSerializer0 === null) {
            $machinesSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\CodespaceMachine',
));
        }
        
        $machines = $machinesSerializer0->serialize($machines, $this);
        after_machines:        $result['machines'] = $machines;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CodespaceMachine(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\CodespaceMachine);
        $result = [];

        $name = $object->name;
        after_name:        $result['name'] = $name;

        
        $displayName = $object->displayName;
        after_displayName:        $result['display_name'] = $displayName;

        
        $operatingSystem = $object->operatingSystem;
        after_operatingSystem:        $result['operating_system'] = $operatingSystem;

        
        $storageInBytes = $object->storageInBytes;
        after_storageInBytes:        $result['storage_in_bytes'] = $storageInBytes;

        
        $memoryInBytes = $object->memoryInBytes;
        after_memoryInBytes:        $result['memory_in_bytes'] = $memoryInBytes;

        
        $cpus = $object->cpus;
        after_cpus:        $result['cpus'] = $cpus;

        
        $prebuildAvailability = $object->prebuildAvailability;

        if ($prebuildAvailability === null) {
            goto after_prebuildAvailability;
        }
        after_prebuildAvailability:        $result['prebuild_availability'] = $prebuildAvailability;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BasicError(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\BasicError);
        $result = [];

        $message = $object->message;

        if ($message === null) {
            goto after_message;
        }
        after_message:        $result['message'] = $message;

        
        $documentationUrl = $object->documentationUrl;

        if ($documentationUrl === null) {
            goto after_documentationUrl;
        }
        after_documentationUrl:        $result['documentation_url'] = $documentationUrl;

        
        $url = $object->url;

        if ($url === null) {
            goto after_url;
        }
        after_url:        $result['url'] = $url;

        
        $status = $object->status;

        if ($status === null) {
            goto after_status;
        }
        after_status:        $result['status'] = $status;


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
