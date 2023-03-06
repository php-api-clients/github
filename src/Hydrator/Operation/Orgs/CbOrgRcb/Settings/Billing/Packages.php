<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Hydrator\Operation\Orgs\CbOrgRcb\Settings\Billing;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class Packages implements ObjectMapper
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
            'ApiClients\Client\GitHub\Schema\PackagesBillingUsage' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PackagesBillingUsage($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PackagesBillingUsage(array $payload): \ApiClients\Client\GitHub\Schema\PackagesBillingUsage
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['total_gigabytes_bandwidth_used'] ?? null;
    
                if ($value === null) {
                    $properties['total_gigabytes_bandwidth_used'] = null;
                    goto after_total_gigabytes_bandwidth_used;
                }

                $properties['total_gigabytes_bandwidth_used'] = $value;
    
                after_total_gigabytes_bandwidth_used:

                $value = $payload['total_paid_gigabytes_bandwidth_used'] ?? null;
    
                if ($value === null) {
                    $properties['total_paid_gigabytes_bandwidth_used'] = null;
                    goto after_total_paid_gigabytes_bandwidth_used;
                }

                $properties['total_paid_gigabytes_bandwidth_used'] = $value;
    
                after_total_paid_gigabytes_bandwidth_used:

                $value = $payload['included_gigabytes_bandwidth'] ?? null;
    
                if ($value === null) {
                    $properties['included_gigabytes_bandwidth'] = null;
                    goto after_included_gigabytes_bandwidth;
                }

                $properties['included_gigabytes_bandwidth'] = $value;
    
                after_included_gigabytes_bandwidth:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\PackagesBillingUsage', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\PackagesBillingUsage::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\PackagesBillingUsage(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\PackagesBillingUsage', $exception, stack: $this->hydrationStack);
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
                'ApiClients\Client\GitHub\Schema\PackagesBillingUsage' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PackagesBillingUsage($object),
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

    
    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PackagesBillingUsage(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\PackagesBillingUsage);
        $result = [];
        
        $total_gigabytes_bandwidth_used = $object->total_gigabytes_bandwidth_used;

        if ($total_gigabytes_bandwidth_used === null) {
            goto after_total_gigabytes_bandwidth_used;
        }
        after_total_gigabytes_bandwidth_used:        $result['total_gigabytes_bandwidth_used'] = $total_gigabytes_bandwidth_used;

        
        $total_paid_gigabytes_bandwidth_used = $object->total_paid_gigabytes_bandwidth_used;

        if ($total_paid_gigabytes_bandwidth_used === null) {
            goto after_total_paid_gigabytes_bandwidth_used;
        }
        after_total_paid_gigabytes_bandwidth_used:        $result['total_paid_gigabytes_bandwidth_used'] = $total_paid_gigabytes_bandwidth_used;

        
        $included_gigabytes_bandwidth = $object->included_gigabytes_bandwidth;

        if ($included_gigabytes_bandwidth === null) {
            goto after_included_gigabytes_bandwidth;
        }
        after_included_gigabytes_bandwidth:        $result['included_gigabytes_bandwidth'] = $included_gigabytes_bandwidth;


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
