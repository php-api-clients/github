<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Hydrator\Operation\Orgs\CbOrgRcb\Actions;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class Permissions implements ObjectMapper
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
            'ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ActionsOrganizationPermissions' => $this->hydrateApiClients⚡️Client⚡️Github⚡️OpenAPI⚡️ApiGitHubCom⚡️Schema⚡️ActionsOrganizationPermissions($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
        private function hydrateApiClients⚡️Client⚡️Github⚡️OpenAPI⚡️ApiGitHubCom⚡️Schema⚡️ActionsOrganizationPermissions(array $payload): \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ActionsOrganizationPermissions
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['enabled_repositories'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'enabled_repositories';
                    goto after_enabled_repositories;
                }

                $properties['enabled_repositories'] = $value;
    
                after_enabled_repositories:

                $value = $payload['selected_repositories_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'selected_repositories_url';
                    goto after_selected_repositories_url;
                }

                $properties['selected_repositories_url'] = $value;
    
                after_selected_repositories_url:

                $value = $payload['allowed_actions'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'allowed_actions';
                    goto after_allowed_actions;
                }

                $properties['allowed_actions'] = $value;
    
                after_allowed_actions:

                $value = $payload['selected_actions_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'selected_actions_url';
                    goto after_selected_actions_url;
                }

                $properties['selected_actions_url'] = $value;
    
                after_selected_actions_url:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ActionsOrganizationPermissions', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ActionsOrganizationPermissions::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ActionsOrganizationPermissions(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ActionsOrganizationPermissions', $exception, stack: $this->hydrationStack);
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
                'ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ActionsOrganizationPermissions' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️OpenAPI⚡️ApiGitHubCom⚡️Schema⚡️ActionsOrganizationPermissions($object),
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

    
    private function serializeObjectApiClients⚡️Client⚡️Github⚡️OpenAPI⚡️ApiGitHubCom⚡️Schema⚡️ActionsOrganizationPermissions(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ActionsOrganizationPermissions);
        $result = [];
        
        $enabled_repositories = $object->enabled_repositories;

        if ($enabled_repositories === null) {
            goto after_enabled_repositories;
        }
        after_enabled_repositories:        $result['enabled_repositories'] = $enabled_repositories;

        
        $selected_repositories_url = $object->selected_repositories_url;
        after_selected_repositories_url:        $result['selected_repositories_url'] = $selected_repositories_url;

        
        $allowed_actions = $object->allowed_actions;
        after_allowed_actions:        $result['allowed_actions'] = $allowed_actions;

        
        $selected_actions_url = $object->selected_actions_url;
        after_selected_actions_url:        $result['selected_actions_url'] = $selected_actions_url;


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
