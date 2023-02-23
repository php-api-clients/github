<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb\Protection;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class Restrictions implements ObjectMapper
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
            'ApiClients\Client\Github\Schema\BranchRestrictionPolicy' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️BranchRestrictionPolicy($payload),
                'ApiClients\Client\Github\Schema\BasicError' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️BasicError($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
        private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️BranchRestrictionPolicy(array $payload): \ApiClients\Client\Github\Schema\BranchRestrictionPolicy
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'url';
                    goto after_url;
                }

                $properties['url'] = $value;
    
                after_url:

                $value = $payload['users_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'users_url';
                    goto after_users_url;
                }

                $properties['users_url'] = $value;
    
                after_users_url:

                $value = $payload['teams_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'teams_url';
                    goto after_teams_url;
                }

                $properties['teams_url'] = $value;
    
                after_teams_url:

                $value = $payload['apps_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'apps_url';
                    goto after_apps_url;
                }

                $properties['apps_url'] = $value;
    
                after_apps_url:

                $value = $payload['users'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'users';
                    goto after_users;
                }

                $properties['users'] = $value;
    
                after_users:

                $value = $payload['teams'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'teams';
                    goto after_teams;
                }

                $properties['teams'] = $value;
    
                after_teams:

                $value = $payload['apps'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'apps';
                    goto after_apps;
                }

                $properties['apps'] = $value;
    
                after_apps:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\BranchRestrictionPolicy', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\BranchRestrictionPolicy::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\Github\Schema\BranchRestrictionPolicy(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\BranchRestrictionPolicy', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️BasicError(array $payload): \ApiClients\Client\Github\Schema\BasicError
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['message'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'message';
                    goto after_message;
                }

                $properties['message'] = $value;
    
                after_message:

                $value = $payload['documentation_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'documentation_url';
                    goto after_documentation_url;
                }

                $properties['documentation_url'] = $value;
    
                after_documentation_url:

                $value = $payload['url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'url';
                    goto after_url;
                }

                $properties['url'] = $value;
    
                after_url:

                $value = $payload['status'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'status';
                    goto after_status;
                }

                $properties['status'] = $value;
    
                after_status:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\BasicError', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\BasicError::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\Github\Schema\BasicError(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\BasicError', $exception, stack: $this->hydrationStack);
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
                'ApiClients\Client\Github\Schema\BranchRestrictionPolicy' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️BranchRestrictionPolicy($object),
                'ApiClients\Client\Github\Schema\BasicError' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️BasicError($object),
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

    
    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️BranchRestrictionPolicy(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\BranchRestrictionPolicy);
        $result = [];
        
        $url = $object->url;

        if ($url === null) {
            goto after_url;
        }
        after_url:        $result['url'] = $url;

        
        $users_url = $object->users_url;

        if ($users_url === null) {
            goto after_users_url;
        }
        after_users_url:        $result['users_url'] = $users_url;

        
        $teams_url = $object->teams_url;

        if ($teams_url === null) {
            goto after_teams_url;
        }
        after_teams_url:        $result['teams_url'] = $teams_url;

        
        $apps_url = $object->apps_url;

        if ($apps_url === null) {
            goto after_apps_url;
        }
        after_apps_url:        $result['apps_url'] = $apps_url;

        
        $users = $object->users;

        if ($users === null) {
            goto after_users;
        }
        static $usersSerializer0;

        if ($usersSerializer0 === null) {
            $usersSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $users = $usersSerializer0->serialize($users, $this);
        after_users:        $result['users'] = $users;

        
        $teams = $object->teams;

        if ($teams === null) {
            goto after_teams;
        }
        static $teamsSerializer0;

        if ($teamsSerializer0 === null) {
            $teamsSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $teams = $teamsSerializer0->serialize($teams, $this);
        after_teams:        $result['teams'] = $teams;

        
        $apps = $object->apps;

        if ($apps === null) {
            goto after_apps;
        }
        static $appsSerializer0;

        if ($appsSerializer0 === null) {
            $appsSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $apps = $appsSerializer0->serialize($apps, $this);
        after_apps:        $result['apps'] = $apps;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️BasicError(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\BasicError);
        $result = [];
        
        $message = $object->message;

        if ($message === null) {
            goto after_message;
        }
        after_message:        $result['message'] = $message;

        
        $documentation_url = $object->documentation_url;

        if ($documentation_url === null) {
            goto after_documentation_url;
        }
        after_documentation_url:        $result['documentation_url'] = $documentation_url;

        
        $url = $object->url;

        if ($url === null) {
            goto after_url;
        }
        after_url:        $result['url'] = $url;

        
        $status = $object->status;

        if ($status === null) {
            goto after_status;
        }
        after_status:        $result['status'] = $status;


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
