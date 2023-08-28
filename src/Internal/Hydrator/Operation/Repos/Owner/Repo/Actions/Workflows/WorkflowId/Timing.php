<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Workflows\WorkflowId;

use ApiClients\Client\GitHub\Schema\WorkflowUsage;
use ApiClients\Client\GitHub\Schema\WorkflowUsage\Billable;
use ApiClients\Client\GitHub\Schema\WorkflowUsage\Billable\Macos;
use ApiClients\Client\GitHub\Schema\WorkflowUsage\Billable\Ubuntu;
use ApiClients\Client\GitHub\Schema\WorkflowUsage\Billable\Windows;
use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems;
use EventSauce\ObjectHydrator\PropertySerializers\SerializeDateTime;
use EventSauce\ObjectHydrator\PropertySerializers\SerializeUuidToString;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;
use LogicException;
use Throwable;

use function array_pop;
use function assert;
use function count;
use function is_a;
use function is_array;

class Timing implements ObjectMapper
{
    private array $hydrationStack = [];

    public function __construct()
    {
    }

    /**
     * @param class-string<T> $className
     *
     * @return T
     *
     * @template T of object
     */
    public function hydrateObject(string $className, array $payload): object
    {
        return match ($className) {
            'ApiClients\Client\GitHub\Schema\WorkflowUsage' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WorkflowUsage($payload),
                'ApiClients\Client\GitHub\Schema\WorkflowUsage\Billable' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WorkflowUsage⚡️Billable($payload),
                'ApiClients\Client\GitHub\Schema\WorkflowUsage\Billable\Ubuntu' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WorkflowUsage⚡️Billable⚡️Ubuntu($payload),
                'ApiClients\Client\GitHub\Schema\WorkflowUsage\Billable\Macos' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WorkflowUsage⚡️Billable⚡️Macos($payload),
                'ApiClients\Client\GitHub\Schema\WorkflowUsage\Billable\Windows' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WorkflowUsage⚡️Billable⚡️Windows($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WorkflowUsage(array $payload): WorkflowUsage
    {
        $properties    = [];
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
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WorkflowUsage⚡️Billable($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['billable'] = $value;

            after_billable:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WorkflowUsage', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(WorkflowUsage::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new WorkflowUsage(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WorkflowUsage', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WorkflowUsage⚡️Billable(array $payload): Billable
    {
        $properties    = [];
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
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WorkflowUsage⚡️Billable⚡️Ubuntu($value);
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
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WorkflowUsage⚡️Billable⚡️Macos($value);
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
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WorkflowUsage⚡️Billable⚡️Windows($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['windows'] = $value;

            after_windows:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WorkflowUsage\Billable', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(Billable::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new Billable(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WorkflowUsage\Billable', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WorkflowUsage⚡️Billable⚡️Ubuntu(array $payload): Ubuntu
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['total_ms'] ?? null;

            if ($value === null) {
                $properties['totalMs'] = null;
                goto after_totalMs;
            }

            $properties['totalMs'] = $value;

            after_totalMs:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WorkflowUsage\Billable\Ubuntu', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(Ubuntu::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new Ubuntu(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WorkflowUsage\Billable\Ubuntu', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WorkflowUsage⚡️Billable⚡️Macos(array $payload): Macos
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['total_ms'] ?? null;

            if ($value === null) {
                $properties['totalMs'] = null;
                goto after_totalMs;
            }

            $properties['totalMs'] = $value;

            after_totalMs:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WorkflowUsage\Billable\Macos', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(Macos::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new Macos(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WorkflowUsage\Billable\Macos', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WorkflowUsage⚡️Billable⚡️Windows(array $payload): Windows
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['total_ms'] ?? null;

            if ($value === null) {
                $properties['totalMs'] = null;
                goto after_totalMs;
            }

            $properties['totalMs'] = $value;

            after_totalMs:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WorkflowUsage\Billable\Windows', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(Windows::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new Windows(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WorkflowUsage\Billable\Windows', $exception, stack: $this->hydrationStack);
        }
    }

    private function serializeViaTypeMap(string $accessor, object $object, array $payloadToTypeMap): array
    {
        foreach ($payloadToTypeMap as $payloadType => [$valueType, $method]) {
            if (is_a($object, $valueType)) {
                return [$accessor => $payloadType] + $this->{$method}($object);
            }
        }

        throw new LogicException('No type mapped for object of class: ' . $object::class);
    }

    public function serializeObject(object $object): mixed
    {
        return $this->serializeObjectOfType($object, $object::class);
    }

    /**
     * @param T               $object
     * @param class-string<T> $className
     *
     * @template T
     */
    public function serializeObjectOfType(object $object, string $className): mixed
    {
        try {
            return match ($className) {
                'array' => $this->serializeValuearray($object),
                'Ramsey\Uuid\UuidInterface' => $this->serializeValueRamsey⚡️Uuid⚡️UuidInterface($object),
                'DateTime' => $this->serializeValueDateTime($object),
                'DateTimeImmutable' => $this->serializeValueDateTimeImmutable($object),
                'DateTimeInterface' => $this->serializeValueDateTimeInterface($object),
                'ApiClients\Client\GitHub\Schema\WorkflowUsage' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WorkflowUsage($object),
                'ApiClients\Client\GitHub\Schema\WorkflowUsage\Billable' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WorkflowUsage⚡️Billable($object),
                'ApiClients\Client\GitHub\Schema\WorkflowUsage\Billable\Ubuntu' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WorkflowUsage⚡️Billable⚡️Ubuntu($object),
                'ApiClients\Client\GitHub\Schema\WorkflowUsage\Billable\Macos' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WorkflowUsage⚡️Billable⚡️Macos($object),
                'ApiClients\Client\GitHub\Schema\WorkflowUsage\Billable\Windows' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WorkflowUsage⚡️Billable⚡️Windows($object),
                default => throw new LogicException('No serialization defined for $className'),
            };
        } catch (Throwable $exception) {
            throw UnableToSerializeObject::dueToError($className, $exception);
        }
    }

    private function serializeValuearray(mixed $value): mixed
    {
        static $serializer;

        if ($serializer === null) {
            $serializer = new SerializeArrayItems(...[]);
        }

        return $serializer->serialize($value, $this);
    }

    private function serializeValueRamsey⚡️Uuid⚡️UuidInterface(mixed $value): mixed
    {
        static $serializer;

        if ($serializer === null) {
            $serializer = new SerializeUuidToString(...[]);
        }

        return $serializer->serialize($value, $this);
    }

    private function serializeValueDateTime(mixed $value): mixed
    {
        static $serializer;

        if ($serializer === null) {
            $serializer = new SerializeDateTime(...[]);
        }

        return $serializer->serialize($value, $this);
    }

    private function serializeValueDateTimeImmutable(mixed $value): mixed
    {
        static $serializer;

        if ($serializer === null) {
            $serializer = new SerializeDateTime(...[]);
        }

        return $serializer->serialize($value, $this);
    }

    private function serializeValueDateTimeInterface(mixed $value): mixed
    {
        static $serializer;

        if ($serializer === null) {
            $serializer = new SerializeDateTime(...[]);
        }

        return $serializer->serialize($value, $this);
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WorkflowUsage(mixed $object): mixed
    {
        assert($object instanceof WorkflowUsage);
        $result = [];

        $billable                                  = $object->billable;
        $billable                                  = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WorkflowUsage⚡️Billable($billable);
        after_billable:        $result['billable'] = $billable;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WorkflowUsage⚡️Billable(mixed $object): mixed
    {
        assert($object instanceof Billable);
        $result = [];

        $ubuntu = $object->ubuntu;

        if ($ubuntu === null) {
            goto after_ubuntu;
        }

        $ubuntu                                = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WorkflowUsage⚡️Billable⚡️Ubuntu($ubuntu);
        after_ubuntu:        $result['UBUNTU'] = $ubuntu;

        $macos = $object->macos;

        if ($macos === null) {
            goto after_macos;
        }

        $macos                               = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WorkflowUsage⚡️Billable⚡️Macos($macos);
        after_macos:        $result['MACOS'] = $macos;

        $windows = $object->windows;

        if ($windows === null) {
            goto after_windows;
        }

        $windows                                 = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WorkflowUsage⚡️Billable⚡️Windows($windows);
        after_windows:        $result['WINDOWS'] = $windows;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WorkflowUsage⚡️Billable⚡️Ubuntu(mixed $object): mixed
    {
        assert($object instanceof Ubuntu);
        $result = [];

        $totalMs = $object->totalMs;

        if ($totalMs === null) {
            goto after_totalMs;
        }

        after_totalMs:        $result['total_ms'] = $totalMs;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WorkflowUsage⚡️Billable⚡️Macos(mixed $object): mixed
    {
        assert($object instanceof Macos);
        $result = [];

        $totalMs = $object->totalMs;

        if ($totalMs === null) {
            goto after_totalMs;
        }

        after_totalMs:        $result['total_ms'] = $totalMs;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WorkflowUsage⚡️Billable⚡️Windows(mixed $object): mixed
    {
        assert($object instanceof Windows);
        $result = [];

        $totalMs = $object->totalMs;

        if ($totalMs === null) {
            goto after_totalMs;
        }

        after_totalMs:        $result['total_ms'] = $totalMs;

        return $result;
    }

    /**
     * @param class-string<T> $className
     * @param iterable<array> $payloads;
     *
     * @return IterableList<T>
     *
     * @throws UnableToHydrateObject
     *
     * @template T
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
     * @param class-string<T> $className
     * @param iterable<array> $payloads;
     *
     * @return IterableList<T>
     *
     * @throws UnableToSerializeObject
     *
     * @template T
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
