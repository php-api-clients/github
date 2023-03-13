<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Workflows\CbWorkflowIdRcb;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class Timing implements ObjectMapper
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
            'ApiClients\Client\GitHub\Schema\WorkflowUsage' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WorkflowUsage($payload),
                'ApiClients\Client\GitHub\Schema\WorkflowUsage\Billable' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WorkflowUsage⚡️Billable($payload),
                'ApiClients\Client\GitHub\Schema\WorkflowUsage\Billable\Ubuntu' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WorkflowUsage⚡️Billable⚡️Ubuntu($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WorkflowUsage(array $payload): \ApiClients\Client\GitHub\Schema\WorkflowUsage
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['billable'] ?? null;

            if ($value === null) {
                $missingFields[] = 'billable';
                goto after_billable;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'billable';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WorkflowUsage⚡️Billable($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['billable'] = $value;

            after_billable:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WorkflowUsage', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WorkflowUsage::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WorkflowUsage(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WorkflowUsage', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WorkflowUsage⚡️Billable(array $payload): \ApiClients\Client\GitHub\Schema\WorkflowUsage\Billable
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['u_b_u_n_t_u'] ?? null;

            if ($value === null) {
                $properties['UBUNTU'] = null;
                goto after_UBUNTU;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'UBUNTU';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WorkflowUsage⚡️Billable⚡️Ubuntu($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['UBUNTU'] = $value;

            after_UBUNTU:

            $value = $payload['m_a_c_o_s'] ?? null;

            if ($value === null) {
                $properties['MACOS'] = null;
                goto after_MACOS;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'MACOS';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WorkflowUsage⚡️Billable⚡️Ubuntu($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['MACOS'] = $value;

            after_MACOS:

            $value = $payload['w_i_n_d_o_w_s'] ?? null;

            if ($value === null) {
                $properties['WINDOWS'] = null;
                goto after_WINDOWS;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'WINDOWS';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WorkflowUsage⚡️Billable⚡️Ubuntu($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['WINDOWS'] = $value;

            after_WINDOWS:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WorkflowUsage\Billable', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WorkflowUsage\Billable::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WorkflowUsage\Billable(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WorkflowUsage\Billable', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WorkflowUsage⚡️Billable⚡️Ubuntu(array $payload): \ApiClients\Client\GitHub\Schema\WorkflowUsage\Billable\Ubuntu
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['total_ms'] ?? null;

            if ($value === null) {
                $properties['total_ms'] = null;
                goto after_total_ms;
            }

            $properties['total_ms'] = $value;

            after_total_ms:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WorkflowUsage\Billable\Ubuntu', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WorkflowUsage\Billable\Ubuntu::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WorkflowUsage\Billable\Ubuntu(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WorkflowUsage\Billable\Ubuntu', $exception, stack: $this->hydrationStack);
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
            'ApiClients\Client\GitHub\Schema\WorkflowUsage' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WorkflowUsage($object),
            'ApiClients\Client\GitHub\Schema\WorkflowUsage\Billable' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WorkflowUsage⚡️Billable($object),
            'ApiClients\Client\GitHub\Schema\WorkflowUsage\Billable\Ubuntu' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WorkflowUsage⚡️Billable⚡️Ubuntu($object),
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


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WorkflowUsage(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WorkflowUsage);
        $result = [];

        $billable = $object->billable;
        $billable = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WorkflowUsage⚡️Billable($billable);
        after_billable:        $result['billable'] = $billable;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WorkflowUsage⚡️Billable(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WorkflowUsage\Billable);
        $result = [];

        $UBUNTU = $object->UBUNTU;

        if ($UBUNTU === null) {
            goto after_UBUNTU;
        }
        $UBUNTU = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WorkflowUsage⚡️Billable⚡️Ubuntu($UBUNTU);
        after_UBUNTU:        $result['u_b_u_n_t_u'] = $UBUNTU;

        
        $MACOS = $object->MACOS;

        if ($MACOS === null) {
            goto after_MACOS;
        }
        $MACOS = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WorkflowUsage⚡️Billable⚡️Ubuntu($MACOS);
        after_MACOS:        $result['m_a_c_o_s'] = $MACOS;

        
        $WINDOWS = $object->WINDOWS;

        if ($WINDOWS === null) {
            goto after_WINDOWS;
        }
        $WINDOWS = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WorkflowUsage⚡️Billable⚡️Ubuntu($WINDOWS);
        after_WINDOWS:        $result['w_i_n_d_o_w_s'] = $WINDOWS;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WorkflowUsage⚡️Billable⚡️Ubuntu(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WorkflowUsage\Billable\Ubuntu);
        $result = [];

        $total_ms = $object->total_ms;

        if ($total_ms === null) {
            goto after_total_ms;
        }
        after_total_ms:        $result['total_ms'] = $total_ms;


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
