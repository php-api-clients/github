<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Settings\Billing;

use ApiClients\Client\GitHub\Schema\ActionsBillingUsage;
use ApiClients\Client\GitHub\Schema\ActionsBillingUsage\MinutesUsedBreakdown;
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

class Actions implements ObjectMapper
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
            'ApiClients\Client\GitHub\Schema\ActionsBillingUsage' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ActionsBillingUsage($payload),
                'ApiClients\Client\GitHub\Schema\ActionsBillingUsage\MinutesUsedBreakdown' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ActionsBillingUsage⚡️MinutesUsedBreakdown($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ActionsBillingUsage(array $payload): ActionsBillingUsage
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['total_minutes_used'] ?? null;

            if ($value === null) {
                $missingFields[] = 'total_minutes_used';
                goto after_totalMinutesUsed;
            }

            $properties['totalMinutesUsed'] = $value;

            after_totalMinutesUsed:

            $value = $payload['total_paid_minutes_used'] ?? null;

            if ($value === null) {
                $missingFields[] = 'total_paid_minutes_used';
                goto after_totalPaidMinutesUsed;
            }

            $properties['totalPaidMinutesUsed'] = $value;

            after_totalPaidMinutesUsed:

            $value = $payload['included_minutes'] ?? null;

            if ($value === null) {
                $missingFields[] = 'included_minutes';
                goto after_includedMinutes;
            }

            $properties['includedMinutes'] = $value;

            after_includedMinutes:

            $value = $payload['minutes_used_breakdown'] ?? null;

            if ($value === null) {
                $missingFields[] = 'minutes_used_breakdown';
                goto after_minutesUsedBreakdown;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'minutesUsedBreakdown';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ActionsBillingUsage⚡️MinutesUsedBreakdown($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['minutesUsedBreakdown'] = $value;

            after_minutesUsedBreakdown:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ActionsBillingUsage', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(ActionsBillingUsage::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new ActionsBillingUsage(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ActionsBillingUsage', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ActionsBillingUsage⚡️MinutesUsedBreakdown(array $payload): MinutesUsedBreakdown
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['UBUNTU'] ?? null;

            if ($value === null) {
                $properties['ubuntu'] = null;
                goto after_ubuntu;
            }

            $properties['ubuntu'] = $value;

            after_ubuntu:

            $value = $payload['MACOS'] ?? null;

            if ($value === null) {
                $properties['macos'] = null;
                goto after_macos;
            }

            $properties['macos'] = $value;

            after_macos:

            $value = $payload['WINDOWS'] ?? null;

            if ($value === null) {
                $properties['windows'] = null;
                goto after_windows;
            }

            $properties['windows'] = $value;

            after_windows:

            $value = $payload['ubuntu_4_core'] ?? null;

            if ($value === null) {
                $properties['ubuntuFourCore'] = null;
                goto after_ubuntuFourCore;
            }

            $properties['ubuntuFourCore'] = $value;

            after_ubuntuFourCore:

            $value = $payload['ubuntu_8_core'] ?? null;

            if ($value === null) {
                $properties['ubuntuEightCore'] = null;
                goto after_ubuntuEightCore;
            }

            $properties['ubuntuEightCore'] = $value;

            after_ubuntuEightCore:

            $value = $payload['ubuntu_16_core'] ?? null;

            if ($value === null) {
                $properties['ubuntuSixteenCore'] = null;
                goto after_ubuntuSixteenCore;
            }

            $properties['ubuntuSixteenCore'] = $value;

            after_ubuntuSixteenCore:

            $value = $payload['ubuntu_32_core'] ?? null;

            if ($value === null) {
                $properties['ubuntuThirtyTwoCore'] = null;
                goto after_ubuntuThirtyTwoCore;
            }

            $properties['ubuntuThirtyTwoCore'] = $value;

            after_ubuntuThirtyTwoCore:

            $value = $payload['ubuntu_64_core'] ?? null;

            if ($value === null) {
                $properties['ubuntuSixtyFourCore'] = null;
                goto after_ubuntuSixtyFourCore;
            }

            $properties['ubuntuSixtyFourCore'] = $value;

            after_ubuntuSixtyFourCore:

            $value = $payload['windows_4_core'] ?? null;

            if ($value === null) {
                $properties['windowsFourCore'] = null;
                goto after_windowsFourCore;
            }

            $properties['windowsFourCore'] = $value;

            after_windowsFourCore:

            $value = $payload['windows_8_core'] ?? null;

            if ($value === null) {
                $properties['windowsEightCore'] = null;
                goto after_windowsEightCore;
            }

            $properties['windowsEightCore'] = $value;

            after_windowsEightCore:

            $value = $payload['windows_16_core'] ?? null;

            if ($value === null) {
                $properties['windowsSixteenCore'] = null;
                goto after_windowsSixteenCore;
            }

            $properties['windowsSixteenCore'] = $value;

            after_windowsSixteenCore:

            $value = $payload['windows_32_core'] ?? null;

            if ($value === null) {
                $properties['windowsThirtyTwoCore'] = null;
                goto after_windowsThirtyTwoCore;
            }

            $properties['windowsThirtyTwoCore'] = $value;

            after_windowsThirtyTwoCore:

            $value = $payload['windows_64_core'] ?? null;

            if ($value === null) {
                $properties['windowsSixtyFourCore'] = null;
                goto after_windowsSixtyFourCore;
            }

            $properties['windowsSixtyFourCore'] = $value;

            after_windowsSixtyFourCore:

            $value = $payload['macos_12_core'] ?? null;

            if ($value === null) {
                $properties['macosTwelveCore'] = null;
                goto after_macosTwelveCore;
            }

            $properties['macosTwelveCore'] = $value;

            after_macosTwelveCore:

            $value = $payload['total'] ?? null;

            if ($value === null) {
                $properties['total'] = null;
                goto after_total;
            }

            $properties['total'] = $value;

            after_total:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ActionsBillingUsage\MinutesUsedBreakdown', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(MinutesUsedBreakdown::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new MinutesUsedBreakdown(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ActionsBillingUsage\MinutesUsedBreakdown', $exception, stack: $this->hydrationStack);
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
                'ApiClients\Client\GitHub\Schema\ActionsBillingUsage' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ActionsBillingUsage($object),
                'ApiClients\Client\GitHub\Schema\ActionsBillingUsage\MinutesUsedBreakdown' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ActionsBillingUsage⚡️MinutesUsedBreakdown($object),
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

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ActionsBillingUsage(mixed $object): mixed
    {
        assert($object instanceof ActionsBillingUsage);
        $result = [];

        $totalMinutesUsed                                            = $object->totalMinutesUsed;
        after_totalMinutesUsed:        $result['total_minutes_used'] = $totalMinutesUsed;

        $totalPaidMinutesUsed                                                 = $object->totalPaidMinutesUsed;
        after_totalPaidMinutesUsed:        $result['total_paid_minutes_used'] = $totalPaidMinutesUsed;

        $includedMinutes                                          = $object->includedMinutes;
        after_includedMinutes:        $result['included_minutes'] = $includedMinutes;

        $minutesUsedBreakdown                                                = $object->minutesUsedBreakdown;
        $minutesUsedBreakdown                                                = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ActionsBillingUsage⚡️MinutesUsedBreakdown($minutesUsedBreakdown);
        after_minutesUsedBreakdown:        $result['minutes_used_breakdown'] = $minutesUsedBreakdown;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ActionsBillingUsage⚡️MinutesUsedBreakdown(mixed $object): mixed
    {
        assert($object instanceof MinutesUsedBreakdown);
        $result = [];

        $ubuntu = $object->ubuntu;

        if ($ubuntu === null) {
            goto after_ubuntu;
        }

        after_ubuntu:        $result['UBUNTU'] = $ubuntu;

        $macos = $object->macos;

        if ($macos === null) {
            goto after_macos;
        }

        after_macos:        $result['MACOS'] = $macos;

        $windows = $object->windows;

        if ($windows === null) {
            goto after_windows;
        }

        after_windows:        $result['WINDOWS'] = $windows;

        $ubuntuFourCore = $object->ubuntuFourCore;

        if ($ubuntuFourCore === null) {
            goto after_ubuntuFourCore;
        }

        after_ubuntuFourCore:        $result['ubuntu_4_core'] = $ubuntuFourCore;

        $ubuntuEightCore = $object->ubuntuEightCore;

        if ($ubuntuEightCore === null) {
            goto after_ubuntuEightCore;
        }

        after_ubuntuEightCore:        $result['ubuntu_8_core'] = $ubuntuEightCore;

        $ubuntuSixteenCore = $object->ubuntuSixteenCore;

        if ($ubuntuSixteenCore === null) {
            goto after_ubuntuSixteenCore;
        }

        after_ubuntuSixteenCore:        $result['ubuntu_16_core'] = $ubuntuSixteenCore;

        $ubuntuThirtyTwoCore = $object->ubuntuThirtyTwoCore;

        if ($ubuntuThirtyTwoCore === null) {
            goto after_ubuntuThirtyTwoCore;
        }

        after_ubuntuThirtyTwoCore:        $result['ubuntu_32_core'] = $ubuntuThirtyTwoCore;

        $ubuntuSixtyFourCore = $object->ubuntuSixtyFourCore;

        if ($ubuntuSixtyFourCore === null) {
            goto after_ubuntuSixtyFourCore;
        }

        after_ubuntuSixtyFourCore:        $result['ubuntu_64_core'] = $ubuntuSixtyFourCore;

        $windowsFourCore = $object->windowsFourCore;

        if ($windowsFourCore === null) {
            goto after_windowsFourCore;
        }

        after_windowsFourCore:        $result['windows_4_core'] = $windowsFourCore;

        $windowsEightCore = $object->windowsEightCore;

        if ($windowsEightCore === null) {
            goto after_windowsEightCore;
        }

        after_windowsEightCore:        $result['windows_8_core'] = $windowsEightCore;

        $windowsSixteenCore = $object->windowsSixteenCore;

        if ($windowsSixteenCore === null) {
            goto after_windowsSixteenCore;
        }

        after_windowsSixteenCore:        $result['windows_16_core'] = $windowsSixteenCore;

        $windowsThirtyTwoCore = $object->windowsThirtyTwoCore;

        if ($windowsThirtyTwoCore === null) {
            goto after_windowsThirtyTwoCore;
        }

        after_windowsThirtyTwoCore:        $result['windows_32_core'] = $windowsThirtyTwoCore;

        $windowsSixtyFourCore = $object->windowsSixtyFourCore;

        if ($windowsSixtyFourCore === null) {
            goto after_windowsSixtyFourCore;
        }

        after_windowsSixtyFourCore:        $result['windows_64_core'] = $windowsSixtyFourCore;

        $macosTwelveCore = $object->macosTwelveCore;

        if ($macosTwelveCore === null) {
            goto after_macosTwelveCore;
        }

        after_macosTwelveCore:        $result['macos_12_core'] = $macosTwelveCore;

        $total = $object->total;

        if ($total === null) {
            goto after_total;
        }

        after_total:        $result['total'] = $total;

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
