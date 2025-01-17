<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Actions\HostedRunners;

use ApiClients\Client\GitHub\Schema\ActionsHostedRunnerLimits;
use ApiClients\Client\GitHub\Schema\ActionsHostedRunnerLimits\PublicIps;
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

class Limits implements ObjectMapper
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
            'ApiClients\Client\GitHub\Schema\ActionsHostedRunnerLimits' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ActionsHostedRunnerLimits($payload),
                'ApiClients\Client\GitHub\Schema\ActionsHostedRunnerLimits\PublicIps' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ActionsHostedRunnerLimits⚡️PublicIps($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ActionsHostedRunnerLimits(array $payload): ActionsHostedRunnerLimits
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['public_ips'] ?? null;

            if ($value === null) {
                $missingFields[] = 'public_ips';
                goto after_publicIps;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'publicIps';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ActionsHostedRunnerLimits⚡️PublicIps($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['publicIps'] = $value;

            after_publicIps:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ActionsHostedRunnerLimits', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(ActionsHostedRunnerLimits::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new ActionsHostedRunnerLimits(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ActionsHostedRunnerLimits', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ActionsHostedRunnerLimits⚡️PublicIps(array $payload): PublicIps
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['maximum'] ?? null;

            if ($value === null) {
                $missingFields[] = 'maximum';
                goto after_maximum;
            }

            $properties['maximum'] = $value;

            after_maximum:

            $value = $payload['current_usage'] ?? null;

            if ($value === null) {
                $missingFields[] = 'current_usage';
                goto after_currentUsage;
            }

            $properties['currentUsage'] = $value;

            after_currentUsage:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ActionsHostedRunnerLimits\PublicIps', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(PublicIps::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new PublicIps(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ActionsHostedRunnerLimits\PublicIps', $exception, stack: $this->hydrationStack);
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
                'ApiClients\Client\GitHub\Schema\ActionsHostedRunnerLimits' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ActionsHostedRunnerLimits($object),
                'ApiClients\Client\GitHub\Schema\ActionsHostedRunnerLimits\PublicIps' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ActionsHostedRunnerLimits⚡️PublicIps($object),
                default => throw new LogicException("No serialization defined for $className"),
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

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ActionsHostedRunnerLimits(mixed $object): mixed
    {
        assert($object instanceof ActionsHostedRunnerLimits);
        $result = [];

        $publicIps                                    = $object->publicIps;
        $publicIps                                    = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ActionsHostedRunnerLimits⚡️PublicIps($publicIps);
        after_publicIps:        $result['public_ips'] = $publicIps;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ActionsHostedRunnerLimits⚡️PublicIps(mixed $object): mixed
    {
        assert($object instanceof PublicIps);
        $result = [];

        $maximum                                 = $object->maximum;
        after_maximum:        $result['maximum'] = $maximum;

        $currentUsage                                       = $object->currentUsage;
        after_currentUsage:        $result['current_usage'] = $currentUsage;

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
