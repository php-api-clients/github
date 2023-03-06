<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Hydrator\Operation\Orgs\CbOrgRcb\Settings\Billing;

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
            'ApiClients\Client\GitHub\Schema\ActionsBillingUsage' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ActionsBillingUsage($payload),
                'ApiClients\Client\GitHub\Schema\ActionsBillingUsage\MinutesUsedBreakdown' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ActionsBillingUsage⚡️MinutesUsedBreakdown($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ActionsBillingUsage(array $payload): \ApiClients\Client\GitHub\Schema\ActionsBillingUsage
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['total_minutes_used'] ?? null;
    
                if ($value === null) {
                    $properties['total_minutes_used'] = null;
                    goto after_total_minutes_used;
                }

                $properties['total_minutes_used'] = $value;
    
                after_total_minutes_used:

                $value = $payload['total_paid_minutes_used'] ?? null;
    
                if ($value === null) {
                    $properties['total_paid_minutes_used'] = null;
                    goto after_total_paid_minutes_used;
                }

                $properties['total_paid_minutes_used'] = $value;
    
                after_total_paid_minutes_used:

                $value = $payload['included_minutes'] ?? null;
    
                if ($value === null) {
                    $properties['included_minutes'] = null;
                    goto after_included_minutes;
                }

                $properties['included_minutes'] = $value;
    
                after_included_minutes:

                $value = $payload['minutes_used_breakdown'] ?? null;
    
                if ($value === null) {
                    $properties['minutes_used_breakdown'] = null;
                    goto after_minutes_used_breakdown;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'minutes_used_breakdown';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ActionsBillingUsage⚡️MinutesUsedBreakdown($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['minutes_used_breakdown'] = $value;
    
                after_minutes_used_breakdown:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ActionsBillingUsage', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\ActionsBillingUsage::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\ActionsBillingUsage(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ActionsBillingUsage', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ActionsBillingUsage⚡️MinutesUsedBreakdown(array $payload): \ApiClients\Client\GitHub\Schema\ActionsBillingUsage\MinutesUsedBreakdown
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['u_b_u_n_t_u'] ?? null;
    
                if ($value === null) {
                    $properties['UBUNTU'] = null;
                    goto after_UBUNTU;
                }

                $properties['UBUNTU'] = $value;
    
                after_UBUNTU:

                $value = $payload['m_a_c_o_s'] ?? null;
    
                if ($value === null) {
                    $properties['MACOS'] = null;
                    goto after_MACOS;
                }

                $properties['MACOS'] = $value;
    
                after_MACOS:

                $value = $payload['w_i_n_d_o_w_s'] ?? null;
    
                if ($value === null) {
                    $properties['WINDOWS'] = null;
                    goto after_WINDOWS;
                }

                $properties['WINDOWS'] = $value;
    
                after_WINDOWS:

                $value = $payload['ubuntu_4_core'] ?? null;
    
                if ($value === null) {
                    $properties['ubuntu_4_core'] = null;
                    goto after_ubuntu_4_core;
                }

                $properties['ubuntu_4_core'] = $value;
    
                after_ubuntu_4_core:

                $value = $payload['ubuntu_8_core'] ?? null;
    
                if ($value === null) {
                    $properties['ubuntu_8_core'] = null;
                    goto after_ubuntu_8_core;
                }

                $properties['ubuntu_8_core'] = $value;
    
                after_ubuntu_8_core:

                $value = $payload['ubuntu_16_core'] ?? null;
    
                if ($value === null) {
                    $properties['ubuntu_16_core'] = null;
                    goto after_ubuntu_16_core;
                }

                $properties['ubuntu_16_core'] = $value;
    
                after_ubuntu_16_core:

                $value = $payload['ubuntu_32_core'] ?? null;
    
                if ($value === null) {
                    $properties['ubuntu_32_core'] = null;
                    goto after_ubuntu_32_core;
                }

                $properties['ubuntu_32_core'] = $value;
    
                after_ubuntu_32_core:

                $value = $payload['ubuntu_64_core'] ?? null;
    
                if ($value === null) {
                    $properties['ubuntu_64_core'] = null;
                    goto after_ubuntu_64_core;
                }

                $properties['ubuntu_64_core'] = $value;
    
                after_ubuntu_64_core:

                $value = $payload['windows_4_core'] ?? null;
    
                if ($value === null) {
                    $properties['windows_4_core'] = null;
                    goto after_windows_4_core;
                }

                $properties['windows_4_core'] = $value;
    
                after_windows_4_core:

                $value = $payload['windows_8_core'] ?? null;
    
                if ($value === null) {
                    $properties['windows_8_core'] = null;
                    goto after_windows_8_core;
                }

                $properties['windows_8_core'] = $value;
    
                after_windows_8_core:

                $value = $payload['windows_16_core'] ?? null;
    
                if ($value === null) {
                    $properties['windows_16_core'] = null;
                    goto after_windows_16_core;
                }

                $properties['windows_16_core'] = $value;
    
                after_windows_16_core:

                $value = $payload['windows_32_core'] ?? null;
    
                if ($value === null) {
                    $properties['windows_32_core'] = null;
                    goto after_windows_32_core;
                }

                $properties['windows_32_core'] = $value;
    
                after_windows_32_core:

                $value = $payload['windows_64_core'] ?? null;
    
                if ($value === null) {
                    $properties['windows_64_core'] = null;
                    goto after_windows_64_core;
                }

                $properties['windows_64_core'] = $value;
    
                after_windows_64_core:

                $value = $payload['macos_12_core'] ?? null;
    
                if ($value === null) {
                    $properties['macos_12_core'] = null;
                    goto after_macos_12_core;
                }

                $properties['macos_12_core'] = $value;
    
                after_macos_12_core:

                $value = $payload['total'] ?? null;
    
                if ($value === null) {
                    $properties['total'] = null;
                    goto after_total;
                }

                $properties['total'] = $value;
    
                after_total:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ActionsBillingUsage\MinutesUsedBreakdown', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\ActionsBillingUsage\MinutesUsedBreakdown::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\ActionsBillingUsage\MinutesUsedBreakdown(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ActionsBillingUsage\MinutesUsedBreakdown', $exception, stack: $this->hydrationStack);
            }
        }
    
    public function serializeObject(object $object): mixed
    {
        try {
            $className = get_class($object);

            return match($className) {
                'array' => $this->serializeValuearray($object),
                'Ramsey\Uuid\UuidInterface' => $this->serializeValueRamsey⚡️Uuid⚡️UuidInterface($object),
                'DateTime' => $this->serializeValueDateTime($object),
                'DateTimeImmutable' => $this->serializeValueDateTimeImmutable($object),
                'DateTimeInterface' => $this->serializeValueDateTimeInterface($object),
                'ApiClients\Client\GitHub\Schema\ActionsBillingUsage' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ActionsBillingUsage($object),
                'ApiClients\Client\GitHub\Schema\ActionsBillingUsage\MinutesUsedBreakdown' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ActionsBillingUsage⚡️MinutesUsedBreakdown($object),
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

    
    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ActionsBillingUsage(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\ActionsBillingUsage);
        $result = [];
        
        $total_minutes_used = $object->total_minutes_used;

        if ($total_minutes_used === null) {
            goto after_total_minutes_used;
        }
        after_total_minutes_used:        $result['total_minutes_used'] = $total_minutes_used;

        
        $total_paid_minutes_used = $object->total_paid_minutes_used;

        if ($total_paid_minutes_used === null) {
            goto after_total_paid_minutes_used;
        }
        after_total_paid_minutes_used:        $result['total_paid_minutes_used'] = $total_paid_minutes_used;

        
        $included_minutes = $object->included_minutes;

        if ($included_minutes === null) {
            goto after_included_minutes;
        }
        after_included_minutes:        $result['included_minutes'] = $included_minutes;

        
        $minutes_used_breakdown = $object->minutes_used_breakdown;

        if ($minutes_used_breakdown === null) {
            goto after_minutes_used_breakdown;
        }
        $minutes_used_breakdown = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ActionsBillingUsage⚡️MinutesUsedBreakdown($minutes_used_breakdown);
        after_minutes_used_breakdown:        $result['minutes_used_breakdown'] = $minutes_used_breakdown;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ActionsBillingUsage⚡️MinutesUsedBreakdown(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\ActionsBillingUsage\MinutesUsedBreakdown);
        $result = [];
        
        $UBUNTU = $object->UBUNTU;

        if ($UBUNTU === null) {
            goto after_UBUNTU;
        }
        after_UBUNTU:        $result['u_b_u_n_t_u'] = $UBUNTU;

        
        $MACOS = $object->MACOS;

        if ($MACOS === null) {
            goto after_MACOS;
        }
        after_MACOS:        $result['m_a_c_o_s'] = $MACOS;

        
        $WINDOWS = $object->WINDOWS;

        if ($WINDOWS === null) {
            goto after_WINDOWS;
        }
        after_WINDOWS:        $result['w_i_n_d_o_w_s'] = $WINDOWS;

        
        $ubuntu_4_core = $object->ubuntu_4_core;

        if ($ubuntu_4_core === null) {
            goto after_ubuntu_4_core;
        }
        after_ubuntu_4_core:        $result['ubuntu_4_core'] = $ubuntu_4_core;

        
        $ubuntu_8_core = $object->ubuntu_8_core;

        if ($ubuntu_8_core === null) {
            goto after_ubuntu_8_core;
        }
        after_ubuntu_8_core:        $result['ubuntu_8_core'] = $ubuntu_8_core;

        
        $ubuntu_16_core = $object->ubuntu_16_core;

        if ($ubuntu_16_core === null) {
            goto after_ubuntu_16_core;
        }
        after_ubuntu_16_core:        $result['ubuntu_16_core'] = $ubuntu_16_core;

        
        $ubuntu_32_core = $object->ubuntu_32_core;

        if ($ubuntu_32_core === null) {
            goto after_ubuntu_32_core;
        }
        after_ubuntu_32_core:        $result['ubuntu_32_core'] = $ubuntu_32_core;

        
        $ubuntu_64_core = $object->ubuntu_64_core;

        if ($ubuntu_64_core === null) {
            goto after_ubuntu_64_core;
        }
        after_ubuntu_64_core:        $result['ubuntu_64_core'] = $ubuntu_64_core;

        
        $windows_4_core = $object->windows_4_core;

        if ($windows_4_core === null) {
            goto after_windows_4_core;
        }
        after_windows_4_core:        $result['windows_4_core'] = $windows_4_core;

        
        $windows_8_core = $object->windows_8_core;

        if ($windows_8_core === null) {
            goto after_windows_8_core;
        }
        after_windows_8_core:        $result['windows_8_core'] = $windows_8_core;

        
        $windows_16_core = $object->windows_16_core;

        if ($windows_16_core === null) {
            goto after_windows_16_core;
        }
        after_windows_16_core:        $result['windows_16_core'] = $windows_16_core;

        
        $windows_32_core = $object->windows_32_core;

        if ($windows_32_core === null) {
            goto after_windows_32_core;
        }
        after_windows_32_core:        $result['windows_32_core'] = $windows_32_core;

        
        $windows_64_core = $object->windows_64_core;

        if ($windows_64_core === null) {
            goto after_windows_64_core;
        }
        after_windows_64_core:        $result['windows_64_core'] = $windows_64_core;

        
        $macos_12_core = $object->macos_12_core;

        if ($macos_12_core === null) {
            goto after_macos_12_core;
        }
        after_macos_12_core:        $result['macos_12_core'] = $macos_12_core;

        
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
