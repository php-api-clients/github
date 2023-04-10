<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Codeowners;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class Errors implements ObjectMapper
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
            'ApiClients\Client\Github\Schema\CodeownersErrors' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️CodeownersErrors($payload),
                'ApiClients\Client\Github\Schema\CodeownersErrors\Errors' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️CodeownersErrors⚡️Errors($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️CodeownersErrors(array $payload): \ApiClients\Client\Github\Schema\CodeownersErrors
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['errors'] ?? null;

            if ($value === null) {
                $missingFields[] = 'errors';
                goto after_errors;
            }

            static $errorsCaster1;

            if ($errorsCaster1 === null) {
                $errorsCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\Github\\Schema\\CodeownersErrors\\Errors',
));
            }

            $value = $errorsCaster1->cast($value, $this);

            $properties['errors'] = $value;

            after_errors:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\CodeownersErrors', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\CodeownersErrors::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\Github\Schema\CodeownersErrors(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\CodeownersErrors', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️CodeownersErrors⚡️Errors(array $payload): \ApiClients\Client\Github\Schema\CodeownersErrors\Errors
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['line'] ?? null;

            if ($value === null) {
                $missingFields[] = 'line';
                goto after_line;
            }

            $properties['line'] = $value;

            after_line:

            $value = $payload['column'] ?? null;

            if ($value === null) {
                $missingFields[] = 'column';
                goto after_column;
            }

            $properties['column'] = $value;

            after_column:

            $value = $payload['source'] ?? null;

            if ($value === null) {
                $properties['source'] = null;
                goto after_source;
            }

            $properties['source'] = $value;

            after_source:

            $value = $payload['kind'] ?? null;

            if ($value === null) {
                $missingFields[] = 'kind';
                goto after_kind;
            }

            $properties['kind'] = $value;

            after_kind:

            $value = $payload['suggestion'] ?? null;

            if ($value === null) {
                $properties['suggestion'] = null;
                goto after_suggestion;
            }

            $properties['suggestion'] = $value;

            after_suggestion:

            $value = $payload['message'] ?? null;

            if ($value === null) {
                $missingFields[] = 'message';
                goto after_message;
            }

            $properties['message'] = $value;

            after_message:

            $value = $payload['path'] ?? null;

            if ($value === null) {
                $missingFields[] = 'path';
                goto after_path;
            }

            $properties['path'] = $value;

            after_path:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\CodeownersErrors\Errors', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\CodeownersErrors\Errors::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\Github\Schema\CodeownersErrors\Errors(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\CodeownersErrors\Errors', $exception, stack: $this->hydrationStack);
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
            'ApiClients\Client\Github\Schema\CodeownersErrors' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️CodeownersErrors($object),
            'ApiClients\Client\Github\Schema\CodeownersErrors\Errors' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️CodeownersErrors⚡️Errors($object),
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


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️CodeownersErrors(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\CodeownersErrors);
        $result = [];

        $errors = $object->errors;
        static $errorsSerializer0;

        if ($errorsSerializer0 === null) {
            $errorsSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\Github\\Schema\\CodeownersErrors\\Errors',
));
        }
        
        $errors = $errorsSerializer0->serialize($errors, $this);
        after_errors:        $result['errors'] = $errors;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️CodeownersErrors⚡️Errors(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\CodeownersErrors\Errors);
        $result = [];

        $line = $object->line;
        after_line:        $result['line'] = $line;

        
        $column = $object->column;
        after_column:        $result['column'] = $column;

        
        $source = $object->source;

        if ($source === null) {
            goto after_source;
        }
        after_source:        $result['source'] = $source;

        
        $kind = $object->kind;
        after_kind:        $result['kind'] = $kind;

        
        $suggestion = $object->suggestion;

        if ($suggestion === null) {
            goto after_suggestion;
        }
        after_suggestion:        $result['suggestion'] = $suggestion;

        
        $message = $object->message;
        after_message:        $result['message'] = $message;

        
        $path = $object->path;
        after_path:        $result['path'] = $path;


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
