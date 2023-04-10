<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Stats;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class Contributors implements ObjectMapper
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
            'ApiClients\Client\GitHub\Schema\ContributorActivity' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ContributorActivity($payload),
                'ApiClients\Client\GitHub\Schema\ContributorActivity\Weeks' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ContributorActivity⚡️Weeks($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ContributorActivity(array $payload): \ApiClients\Client\GitHub\Schema\ContributorActivity
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['author'] ?? null;

            if ($value === null) {
                $properties['author'] = null;
                goto after_author;
            }

            $properties['author'] = $value;

            after_author:

            $value = $payload['total'] ?? null;

            if ($value === null) {
                $missingFields[] = 'total';
                goto after_total;
            }

            $properties['total'] = $value;

            after_total:

            $value = $payload['weeks'] ?? null;

            if ($value === null) {
                $missingFields[] = 'weeks';
                goto after_weeks;
            }

            static $weeksCaster1;

            if ($weeksCaster1 === null) {
                $weeksCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\ContributorActivity\\Weeks',
));
            }

            $value = $weeksCaster1->cast($value, $this);

            $properties['weeks'] = $value;

            after_weeks:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ContributorActivity', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\ContributorActivity::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\ContributorActivity(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ContributorActivity', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ContributorActivity⚡️Weeks(array $payload): \ApiClients\Client\GitHub\Schema\ContributorActivity\Weeks
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['w'] ?? null;

            if ($value === null) {
                $properties['w'] = null;
                goto after_w;
            }

            $properties['w'] = $value;

            after_w:

            $value = $payload['a'] ?? null;

            if ($value === null) {
                $properties['a'] = null;
                goto after_a;
            }

            $properties['a'] = $value;

            after_a:

            $value = $payload['d'] ?? null;

            if ($value === null) {
                $properties['d'] = null;
                goto after_d;
            }

            $properties['d'] = $value;

            after_d:

            $value = $payload['c'] ?? null;

            if ($value === null) {
                $properties['c'] = null;
                goto after_c;
            }

            $properties['c'] = $value;

            after_c:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ContributorActivity\Weeks', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\ContributorActivity\Weeks::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\ContributorActivity\Weeks(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ContributorActivity\Weeks', $exception, stack: $this->hydrationStack);
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
            'ApiClients\Client\GitHub\Schema\ContributorActivity' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ContributorActivity($object),
            'ApiClients\Client\GitHub\Schema\ContributorActivity\Weeks' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ContributorActivity⚡️Weeks($object),
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


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ContributorActivity(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\ContributorActivity);
        $result = [];

        $author = $object->author;

        if ($author === null) {
            goto after_author;
        }
        after_author:        $result['author'] = $author;

        
        $total = $object->total;
        after_total:        $result['total'] = $total;

        
        $weeks = $object->weeks;
        static $weeksSerializer0;

        if ($weeksSerializer0 === null) {
            $weeksSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\ContributorActivity\\Weeks',
));
        }
        
        $weeks = $weeksSerializer0->serialize($weeks, $this);
        after_weeks:        $result['weeks'] = $weeks;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ContributorActivity⚡️Weeks(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\ContributorActivity\Weeks);
        $result = [];

        $w = $object->w;

        if ($w === null) {
            goto after_w;
        }
        after_w:        $result['w'] = $w;

        
        $a = $object->a;

        if ($a === null) {
            goto after_a;
        }
        after_a:        $result['a'] = $a;

        
        $d = $object->d;

        if ($d === null) {
            goto after_d;
        }
        after_d:        $result['d'] = $d;

        
        $c = $object->c;

        if ($c === null) {
            goto after_c;
        }
        after_c:        $result['c'] = $c;


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
