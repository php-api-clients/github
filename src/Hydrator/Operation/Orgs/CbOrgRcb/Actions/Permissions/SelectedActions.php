<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Actions\Permissions;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class SelectedActions implements ObjectMapper
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
            'ApiClients\Client\Github\Schema\SelectedActions' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️SelectedActions($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
        private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️SelectedActions(array $payload): \ApiClients\Client\Github\Schema\SelectedActions
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['github_owned_allowed'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'github_owned_allowed';
                    goto after_github_owned_allowed;
                }

                $properties['github_owned_allowed'] = $value;
    
                after_github_owned_allowed:

                $value = $payload['verified_allowed'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'verified_allowed';
                    goto after_verified_allowed;
                }

                $properties['verified_allowed'] = $value;
    
                after_verified_allowed:

                $value = $payload['patterns_allowed'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'patterns_allowed';
                    goto after_patterns_allowed;
                }

                $properties['patterns_allowed'] = $value;
    
                after_patterns_allowed:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\SelectedActions', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\SelectedActions::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\Github\Schema\SelectedActions(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\SelectedActions', $exception, stack: $this->hydrationStack);
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
                'ApiClients\Client\Github\Schema\SelectedActions' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️SelectedActions($object),
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

    
    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️SelectedActions(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\SelectedActions);
        $result = [];
        
        $github_owned_allowed = $object->github_owned_allowed;

        if ($github_owned_allowed === null) {
            goto after_github_owned_allowed;
        }
        after_github_owned_allowed:        $result['github_owned_allowed'] = $github_owned_allowed;

        
        $verified_allowed = $object->verified_allowed;

        if ($verified_allowed === null) {
            goto after_verified_allowed;
        }
        after_verified_allowed:        $result['verified_allowed'] = $verified_allowed;

        
        $patterns_allowed = $object->patterns_allowed;

        if ($patterns_allowed === null) {
            goto after_patterns_allowed;
        }
        static $patterns_allowedSerializer0;

        if ($patterns_allowedSerializer0 === null) {
            $patterns_allowedSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $patterns_allowed = $patterns_allowedSerializer0->serialize($patterns_allowed, $this);
        after_patterns_allowed:        $result['patterns_allowed'] = $patterns_allowed;


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
