<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Hydrator\Operation\Repos\CbOrgRcb\CbRepoRcb\Actions\RequiredWorkflows\CbRequiredWorkflowIdForRepoRcb;

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
                'ApiClients\Client\GitHub\Schema\BasicError' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BasicError($payload),
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
            $value = $payload['UBUNTU'] ?? null;

            if ($value === null) {
                $properties['ubuntu'] = null;
                goto after_ubuntu;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'ubuntu';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WorkflowUsage⚡️Billable⚡️Ubuntu($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['ubuntu'] = $value;

            after_ubuntu:

            $value = $payload['MACOS'] ?? null;

            if ($value === null) {
                $properties['macos'] = null;
                goto after_macos;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'macos';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WorkflowUsage⚡️Billable⚡️Ubuntu($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['macos'] = $value;

            after_macos:

            $value = $payload['WINDOWS'] ?? null;

            if ($value === null) {
                $properties['windows'] = null;
                goto after_windows;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'windows';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WorkflowUsage⚡️Billable⚡️Ubuntu($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['windows'] = $value;

            after_windows:

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
                $properties['totalMs'] = null;
                goto after_totalMs;
            }

            $properties['totalMs'] = $value;

            after_totalMs:

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
            'ApiClients\Client\GitHub\Schema\WorkflowUsage' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WorkflowUsage($object),
            'ApiClients\Client\GitHub\Schema\WorkflowUsage\Billable' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WorkflowUsage⚡️Billable($object),
            'ApiClients\Client\GitHub\Schema\WorkflowUsage\Billable\Ubuntu' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WorkflowUsage⚡️Billable⚡️Ubuntu($object),
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

        $ubuntu = $object->ubuntu;

        if ($ubuntu === null) {
            goto after_ubuntu;
        }
        $ubuntu = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WorkflowUsage⚡️Billable⚡️Ubuntu($ubuntu);
        after_ubuntu:        $result['UBUNTU'] = $ubuntu;

        
        $macos = $object->macos;

        if ($macos === null) {
            goto after_macos;
        }
        $macos = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WorkflowUsage⚡️Billable⚡️Ubuntu($macos);
        after_macos:        $result['MACOS'] = $macos;

        
        $windows = $object->windows;

        if ($windows === null) {
            goto after_windows;
        }
        $windows = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WorkflowUsage⚡️Billable⚡️Ubuntu($windows);
        after_windows:        $result['WINDOWS'] = $windows;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WorkflowUsage⚡️Billable⚡️Ubuntu(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WorkflowUsage\Billable\Ubuntu);
        $result = [];

        $totalMs = $object->totalMs;

        if ($totalMs === null) {
            goto after_totalMs;
        }
        after_totalMs:        $result['total_ms'] = $totalMs;


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
