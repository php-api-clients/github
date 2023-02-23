<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Actions\Runners;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class RegistrationToken implements ObjectMapper
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
            'ApiClients\Client\Github\Schema\AuthenticationToken' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️AuthenticationToken($payload),
                'ApiClients\Client\Github\Schema\AuthenticationToken\Permissions' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️AuthenticationToken⚡️Permissions($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
        private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️AuthenticationToken(array $payload): \ApiClients\Client\Github\Schema\AuthenticationToken
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['token'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'token';
                    goto after_token;
                }

                $properties['token'] = $value;
    
                after_token:

                $value = $payload['expires_at'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'expires_at';
                    goto after_expires_at;
                }

                $properties['expires_at'] = $value;
    
                after_expires_at:

                $value = $payload['permissions'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'permissions';
                    goto after_permissions;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'permissions';
                        $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️AuthenticationToken⚡️Permissions($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['permissions'] = $value;
    
                after_permissions:

                $value = $payload['repositories'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'repositories';
                    goto after_repositories;
                }

                $properties['repositories'] = $value;
    
                after_repositories:

                $value = $payload['single_file'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'single_file';
                    goto after_single_file;
                }

                $properties['single_file'] = $value;
    
                after_single_file:

                $value = $payload['repository_selection'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'repository_selection';
                    goto after_repository_selection;
                }

                $properties['repository_selection'] = $value;
    
                after_repository_selection:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\AuthenticationToken', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\AuthenticationToken::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\Github\Schema\AuthenticationToken(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\AuthenticationToken', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️AuthenticationToken⚡️Permissions(array $payload): \ApiClients\Client\Github\Schema\AuthenticationToken\Permissions
        {
            $properties = []; 
            $missingFields = [];
            try {
                
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\AuthenticationToken\Permissions', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\AuthenticationToken\Permissions::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\Github\Schema\AuthenticationToken\Permissions(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\AuthenticationToken\Permissions', $exception, stack: $this->hydrationStack);
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
                'ApiClients\Client\Github\Schema\AuthenticationToken' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️AuthenticationToken($object),
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

    
    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️AuthenticationToken(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\AuthenticationToken);
        $result = [];
        
        $token = $object->token;

        if ($token === null) {
            goto after_token;
        }
        after_token:        $result['token'] = $token;

        
        $expires_at = $object->expires_at;

        if ($expires_at === null) {
            goto after_expires_at;
        }
        after_expires_at:        $result['expires_at'] = $expires_at;

        
        $permissions = $object->permissions;
        $permissions = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️AuthenticationToken⚡️Permissions($permissions);
        after_permissions:        $result['permissions'] = $permissions;

        
        $repositories = $object->repositories;
        static $repositoriesSerializer0;

        if ($repositoriesSerializer0 === null) {
            $repositoriesSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $repositories = $repositoriesSerializer0->serialize($repositories, $this);
        after_repositories:        $result['repositories'] = $repositories;

        
        $single_file = $object->single_file;

        if ($single_file === null) {
            goto after_single_file;
        }
        after_single_file:        $result['single_file'] = $single_file;

        
        $repository_selection = $object->repository_selection;
        after_repository_selection:        $result['repository_selection'] = $repository_selection;


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
