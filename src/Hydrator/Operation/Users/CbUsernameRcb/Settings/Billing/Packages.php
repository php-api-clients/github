<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Hydrator\Operation\Users\CbUsernameRcb\Settings\Billing;

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
            'ApiClients\Client\Github\Schema\PackagesBillingUsage' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️PackagesBillingUsage($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️PackagesBillingUsage(array $payload): \ApiClients\Client\Github\Schema\PackagesBillingUsage
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['total_gigabytes_bandwidth_used'] ?? null;

            if ($value === null) {
                $missingFields[] = 'total_gigabytes_bandwidth_used';
                goto after_totalGigabytesBandwidthUsed;
            }

            $properties['totalGigabytesBandwidthUsed'] = $value;

            after_totalGigabytesBandwidthUsed:

            $value = $payload['total_paid_gigabytes_bandwidth_used'] ?? null;

            if ($value === null) {
                $missingFields[] = 'total_paid_gigabytes_bandwidth_used';
                goto after_totalPaidGigabytesBandwidthUsed;
            }

            $properties['totalPaidGigabytesBandwidthUsed'] = $value;

            after_totalPaidGigabytesBandwidthUsed:

            $value = $payload['included_gigabytes_bandwidth'] ?? null;

            if ($value === null) {
                $missingFields[] = 'included_gigabytes_bandwidth';
                goto after_includedGigabytesBandwidth;
            }

            $properties['includedGigabytesBandwidth'] = $value;

            after_includedGigabytesBandwidth:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\PackagesBillingUsage', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\PackagesBillingUsage::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\Github\Schema\PackagesBillingUsage(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\PackagesBillingUsage', $exception, stack: $this->hydrationStack);
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
            'ApiClients\Client\Github\Schema\PackagesBillingUsage' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️PackagesBillingUsage($object),
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


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️PackagesBillingUsage(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\PackagesBillingUsage);
        $result = [];

        $totalGigabytesBandwidthUsed = $object->totalGigabytesBandwidthUsed;
        after_totalGigabytesBandwidthUsed:        $result['total_gigabytes_bandwidth_used'] = $totalGigabytesBandwidthUsed;

        
        $totalPaidGigabytesBandwidthUsed = $object->totalPaidGigabytesBandwidthUsed;
        after_totalPaidGigabytesBandwidthUsed:        $result['total_paid_gigabytes_bandwidth_used'] = $totalPaidGigabytesBandwidthUsed;

        
        $includedGigabytesBandwidth = $object->includedGigabytesBandwidth;
        after_includedGigabytesBandwidth:        $result['included_gigabytes_bandwidth'] = $includedGigabytesBandwidth;


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
