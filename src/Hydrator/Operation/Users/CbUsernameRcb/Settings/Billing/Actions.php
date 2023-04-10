<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Hydrator\Operation\Users\CbUsernameRcb\Settings\Billing;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class Actions implements ObjectMapper
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
            'ApiClients\Client\Github\Schema\ActionsBillingUsage' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️ActionsBillingUsage($payload),
                'ApiClients\Client\Github\Schema\ActionsBillingUsage\MinutesUsedBreakdown' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️ActionsBillingUsage⚡️MinutesUsedBreakdown($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️ActionsBillingUsage(array $payload): \ApiClients\Client\Github\Schema\ActionsBillingUsage
    {
        $properties = []; 
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
                    $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️ActionsBillingUsage⚡️MinutesUsedBreakdown($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['minutesUsedBreakdown'] = $value;

            after_minutesUsedBreakdown:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\ActionsBillingUsage', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\ActionsBillingUsage::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\Github\Schema\ActionsBillingUsage(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\ActionsBillingUsage', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️ActionsBillingUsage⚡️MinutesUsedBreakdown(array $payload): \ApiClients\Client\Github\Schema\ActionsBillingUsage\MinutesUsedBreakdown
    {
        $properties = []; 
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
                $properties['ubuntu4Core'] = null;
                goto after_ubuntu4Core;
            }

            $properties['ubuntu4Core'] = $value;

            after_ubuntu4Core:

            $value = $payload['ubuntu_8_core'] ?? null;

            if ($value === null) {
                $properties['ubuntu8Core'] = null;
                goto after_ubuntu8Core;
            }

            $properties['ubuntu8Core'] = $value;

            after_ubuntu8Core:

            $value = $payload['ubuntu_16_core'] ?? null;

            if ($value === null) {
                $properties['ubuntu16Core'] = null;
                goto after_ubuntu16Core;
            }

            $properties['ubuntu16Core'] = $value;

            after_ubuntu16Core:

            $value = $payload['ubuntu_32_core'] ?? null;

            if ($value === null) {
                $properties['ubuntu32Core'] = null;
                goto after_ubuntu32Core;
            }

            $properties['ubuntu32Core'] = $value;

            after_ubuntu32Core:

            $value = $payload['ubuntu_64_core'] ?? null;

            if ($value === null) {
                $properties['ubuntu64Core'] = null;
                goto after_ubuntu64Core;
            }

            $properties['ubuntu64Core'] = $value;

            after_ubuntu64Core:

            $value = $payload['windows_4_core'] ?? null;

            if ($value === null) {
                $properties['windows4Core'] = null;
                goto after_windows4Core;
            }

            $properties['windows4Core'] = $value;

            after_windows4Core:

            $value = $payload['windows_8_core'] ?? null;

            if ($value === null) {
                $properties['windows8Core'] = null;
                goto after_windows8Core;
            }

            $properties['windows8Core'] = $value;

            after_windows8Core:

            $value = $payload['windows_16_core'] ?? null;

            if ($value === null) {
                $properties['windows16Core'] = null;
                goto after_windows16Core;
            }

            $properties['windows16Core'] = $value;

            after_windows16Core:

            $value = $payload['windows_32_core'] ?? null;

            if ($value === null) {
                $properties['windows32Core'] = null;
                goto after_windows32Core;
            }

            $properties['windows32Core'] = $value;

            after_windows32Core:

            $value = $payload['windows_64_core'] ?? null;

            if ($value === null) {
                $properties['windows64Core'] = null;
                goto after_windows64Core;
            }

            $properties['windows64Core'] = $value;

            after_windows64Core:

            $value = $payload['macos_12_core'] ?? null;

            if ($value === null) {
                $properties['macos12Core'] = null;
                goto after_macos12Core;
            }

            $properties['macos12Core'] = $value;

            after_macos12Core:

            $value = $payload['total'] ?? null;

            if ($value === null) {
                $properties['total'] = null;
                goto after_total;
            }

            $properties['total'] = $value;

            after_total:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\ActionsBillingUsage\MinutesUsedBreakdown', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\ActionsBillingUsage\MinutesUsedBreakdown::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\Github\Schema\ActionsBillingUsage\MinutesUsedBreakdown(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\ActionsBillingUsage\MinutesUsedBreakdown', $exception, stack: $this->hydrationStack);
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
            'ApiClients\Client\Github\Schema\ActionsBillingUsage' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️ActionsBillingUsage($object),
            'ApiClients\Client\Github\Schema\ActionsBillingUsage\MinutesUsedBreakdown' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️ActionsBillingUsage⚡️MinutesUsedBreakdown($object),
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


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️ActionsBillingUsage(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\ActionsBillingUsage);
        $result = [];

        $totalMinutesUsed = $object->totalMinutesUsed;
        after_totalMinutesUsed:        $result['total_minutes_used'] = $totalMinutesUsed;

        
        $totalPaidMinutesUsed = $object->totalPaidMinutesUsed;
        after_totalPaidMinutesUsed:        $result['total_paid_minutes_used'] = $totalPaidMinutesUsed;

        
        $includedMinutes = $object->includedMinutes;
        after_includedMinutes:        $result['included_minutes'] = $includedMinutes;

        
        $minutesUsedBreakdown = $object->minutesUsedBreakdown;
        $minutesUsedBreakdown = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️ActionsBillingUsage⚡️MinutesUsedBreakdown($minutesUsedBreakdown);
        after_minutesUsedBreakdown:        $result['minutes_used_breakdown'] = $minutesUsedBreakdown;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️ActionsBillingUsage⚡️MinutesUsedBreakdown(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\ActionsBillingUsage\MinutesUsedBreakdown);
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

        
        $ubuntu4Core = $object->ubuntu4Core;

        if ($ubuntu4Core === null) {
            goto after_ubuntu4Core;
        }
        after_ubuntu4Core:        $result['ubuntu_4_core'] = $ubuntu4Core;

        
        $ubuntu8Core = $object->ubuntu8Core;

        if ($ubuntu8Core === null) {
            goto after_ubuntu8Core;
        }
        after_ubuntu8Core:        $result['ubuntu_8_core'] = $ubuntu8Core;

        
        $ubuntu16Core = $object->ubuntu16Core;

        if ($ubuntu16Core === null) {
            goto after_ubuntu16Core;
        }
        after_ubuntu16Core:        $result['ubuntu_16_core'] = $ubuntu16Core;

        
        $ubuntu32Core = $object->ubuntu32Core;

        if ($ubuntu32Core === null) {
            goto after_ubuntu32Core;
        }
        after_ubuntu32Core:        $result['ubuntu_32_core'] = $ubuntu32Core;

        
        $ubuntu64Core = $object->ubuntu64Core;

        if ($ubuntu64Core === null) {
            goto after_ubuntu64Core;
        }
        after_ubuntu64Core:        $result['ubuntu_64_core'] = $ubuntu64Core;

        
        $windows4Core = $object->windows4Core;

        if ($windows4Core === null) {
            goto after_windows4Core;
        }
        after_windows4Core:        $result['windows_4_core'] = $windows4Core;

        
        $windows8Core = $object->windows8Core;

        if ($windows8Core === null) {
            goto after_windows8Core;
        }
        after_windows8Core:        $result['windows_8_core'] = $windows8Core;

        
        $windows16Core = $object->windows16Core;

        if ($windows16Core === null) {
            goto after_windows16Core;
        }
        after_windows16Core:        $result['windows_16_core'] = $windows16Core;

        
        $windows32Core = $object->windows32Core;

        if ($windows32Core === null) {
            goto after_windows32Core;
        }
        after_windows32Core:        $result['windows_32_core'] = $windows32Core;

        
        $windows64Core = $object->windows64Core;

        if ($windows64Core === null) {
            goto after_windows64Core;
        }
        after_windows64Core:        $result['windows_64_core'] = $windows64Core;

        
        $macos12Core = $object->macos12Core;

        if ($macos12Core === null) {
            goto after_macos12Core;
        }
        after_macos12Core:        $result['macos_12_core'] = $macos12Core;

        
        $total = $object->total;

        if ($total === null) {
            goto after_total;
        }
        after_total:        $result['total'] = $total;


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
