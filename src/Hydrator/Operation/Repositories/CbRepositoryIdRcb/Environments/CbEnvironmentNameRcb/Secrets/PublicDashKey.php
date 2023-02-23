<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Hydrator\Operation\Repositories\CbRepositoryIdRcb\Environments\CbEnvironmentNameRcb\Secrets;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class PublicDashKey implements ObjectMapper
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
            'ApiClients\Client\Github\Schema\ActionsPublicKey' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️ActionsPublicKey($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
        private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️ActionsPublicKey(array $payload): \ApiClients\Client\Github\Schema\ActionsPublicKey
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['key_id'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'key_id';
                    goto after_key_id;
                }

                $properties['key_id'] = $value;
    
                after_key_id:

                $value = $payload['key'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'key';
                    goto after_key;
                }

                $properties['key'] = $value;
    
                after_key:

                $value = $payload['id'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'id';
                    goto after_id;
                }

                $properties['id'] = $value;
    
                after_id:

                $value = $payload['url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'url';
                    goto after_url;
                }

                $properties['url'] = $value;
    
                after_url:

                $value = $payload['title'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'title';
                    goto after_title;
                }

                $properties['title'] = $value;
    
                after_title:

                $value = $payload['created_at'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'created_at';
                    goto after_created_at;
                }

                $properties['created_at'] = $value;
    
                after_created_at:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\ActionsPublicKey', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\ActionsPublicKey::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\Github\Schema\ActionsPublicKey(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\ActionsPublicKey', $exception, stack: $this->hydrationStack);
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
                'ApiClients\Client\Github\Schema\ActionsPublicKey' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️ActionsPublicKey($object),
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

    
    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️ActionsPublicKey(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\ActionsPublicKey);
        $result = [];
        
        $key_id = $object->key_id;

        if ($key_id === null) {
            goto after_key_id;
        }
        after_key_id:        $result['key_id'] = $key_id;

        
        $key = $object->key;

        if ($key === null) {
            goto after_key;
        }
        after_key:        $result['key'] = $key;

        
        $id = $object->id;
        after_id:        $result['id'] = $id;

        
        $url = $object->url;
        after_url:        $result['url'] = $url;

        
        $title = $object->title;
        after_title:        $result['title'] = $title;

        
        $created_at = $object->created_at;
        after_created_at:        $result['created_at'] = $created_at;


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
