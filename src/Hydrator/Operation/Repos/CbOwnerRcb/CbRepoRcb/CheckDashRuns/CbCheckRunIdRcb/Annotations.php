<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CheckDashRuns\CbCheckRunIdRcb;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class Annotations implements ObjectMapper
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
            'ApiClients\Client\GitHub\Schema\CheckAnnotation' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CheckAnnotation($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CheckAnnotation(array $payload): \ApiClients\Client\GitHub\Schema\CheckAnnotation
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['path'] ?? null;

            if ($value === null) {
                $missingFields[] = 'path';
                goto after_path;
            }

            $properties['path'] = $value;

            after_path:

            $value = $payload['start_line'] ?? null;

            if ($value === null) {
                $missingFields[] = 'start_line';
                goto after_start_line;
            }

            $properties['start_line'] = $value;

            after_start_line:

            $value = $payload['end_line'] ?? null;

            if ($value === null) {
                $missingFields[] = 'end_line';
                goto after_end_line;
            }

            $properties['end_line'] = $value;

            after_end_line:

            $value = $payload['start_column'] ?? null;

            if ($value === null) {
                $properties['start_column'] = null;
                goto after_start_column;
            }

            $properties['start_column'] = $value;

            after_start_column:

            $value = $payload['end_column'] ?? null;

            if ($value === null) {
                $properties['end_column'] = null;
                goto after_end_column;
            }

            $properties['end_column'] = $value;

            after_end_column:

            $value = $payload['annotation_level'] ?? null;

            if ($value === null) {
                $properties['annotation_level'] = null;
                goto after_annotation_level;
            }

            $properties['annotation_level'] = $value;

            after_annotation_level:

            $value = $payload['title'] ?? null;

            if ($value === null) {
                $properties['title'] = null;
                goto after_title;
            }

            $properties['title'] = $value;

            after_title:

            $value = $payload['message'] ?? null;

            if ($value === null) {
                $properties['message'] = null;
                goto after_message;
            }

            $properties['message'] = $value;

            after_message:

            $value = $payload['raw_details'] ?? null;

            if ($value === null) {
                $properties['raw_details'] = null;
                goto after_raw_details;
            }

            $properties['raw_details'] = $value;

            after_raw_details:

            $value = $payload['blob_href'] ?? null;

            if ($value === null) {
                $missingFields[] = 'blob_href';
                goto after_blob_href;
            }

            $properties['blob_href'] = $value;

            after_blob_href:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\CheckAnnotation', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\CheckAnnotation::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\CheckAnnotation(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\CheckAnnotation', $exception, stack: $this->hydrationStack);
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
            'ApiClients\Client\GitHub\Schema\CheckAnnotation' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CheckAnnotation($object),
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


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CheckAnnotation(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\CheckAnnotation);
        $result = [];

        $path = $object->path;
        after_path:        $result['path'] = $path;

        
        $start_line = $object->start_line;
        after_start_line:        $result['start_line'] = $start_line;

        
        $end_line = $object->end_line;
        after_end_line:        $result['end_line'] = $end_line;

        
        $start_column = $object->start_column;

        if ($start_column === null) {
            goto after_start_column;
        }
        after_start_column:        $result['start_column'] = $start_column;

        
        $end_column = $object->end_column;

        if ($end_column === null) {
            goto after_end_column;
        }
        after_end_column:        $result['end_column'] = $end_column;

        
        $annotation_level = $object->annotation_level;

        if ($annotation_level === null) {
            goto after_annotation_level;
        }
        after_annotation_level:        $result['annotation_level'] = $annotation_level;

        
        $title = $object->title;

        if ($title === null) {
            goto after_title;
        }
        after_title:        $result['title'] = $title;

        
        $message = $object->message;

        if ($message === null) {
            goto after_message;
        }
        after_message:        $result['message'] = $message;

        
        $raw_details = $object->raw_details;

        if ($raw_details === null) {
            goto after_raw_details;
        }
        after_raw_details:        $result['raw_details'] = $raw_details;

        
        $blob_href = $object->blob_href;
        after_blob_href:        $result['blob_href'] = $blob_href;


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
