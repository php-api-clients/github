<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Actions;

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
            'ApiClients\Client\Github\Schema\ActionsOrganizationPermissions' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️ActionsOrganizationPermissions($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️ActionsOrganizationPermissions(array $payload): \ApiClients\Client\Github\Schema\ActionsOrganizationPermissions
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['enabled_repositories'] ?? null;

            if ($value === null) {
                $missingFields[] = 'enabled_repositories';
                goto after_enabledRepositories;
            }

            $properties['enabledRepositories'] = $value;

            after_enabledRepositories:

            $value = $payload['selected_repositories_url'] ?? null;

            if ($value === null) {
                $properties['selectedRepositoriesUrl'] = null;
                goto after_selectedRepositoriesUrl;
            }

            $properties['selectedRepositoriesUrl'] = $value;

            after_selectedRepositoriesUrl:

            $value = $payload['allowed_actions'] ?? null;

            if ($value === null) {
                $properties['allowedActions'] = null;
                goto after_allowedActions;
            }

            $properties['allowedActions'] = $value;

            after_allowedActions:

            $value = $payload['selected_actions_url'] ?? null;

            if ($value === null) {
                $properties['selectedActionsUrl'] = null;
                goto after_selectedActionsUrl;
            }

            $properties['selectedActionsUrl'] = $value;

            after_selectedActionsUrl:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\ActionsOrganizationPermissions', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\ActionsOrganizationPermissions::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\Github\Schema\ActionsOrganizationPermissions(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\ActionsOrganizationPermissions', $exception, stack: $this->hydrationStack);
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
            'ApiClients\Client\Github\Schema\ActionsOrganizationPermissions' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️ActionsOrganizationPermissions($object),
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


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️ActionsOrganizationPermissions(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\ActionsOrganizationPermissions);
        $result = [];

        $enabledRepositories = $object->enabledRepositories;
        after_enabledRepositories:        $result['enabled_repositories'] = $enabledRepositories;

        
        $selectedRepositoriesUrl = $object->selectedRepositoriesUrl;

        if ($selectedRepositoriesUrl === null) {
            goto after_selectedRepositoriesUrl;
        }
        after_selectedRepositoriesUrl:        $result['selected_repositories_url'] = $selectedRepositoriesUrl;

        
        $allowedActions = $object->allowedActions;

        if ($allowedActions === null) {
            goto after_allowedActions;
        }
        after_allowedActions:        $result['allowed_actions'] = $allowedActions;

        
        $selectedActionsUrl = $object->selectedActionsUrl;

        if ($selectedActionsUrl === null) {
            goto after_selectedActionsUrl;
        }
        after_selectedActionsUrl:        $result['selected_actions_url'] = $selectedActionsUrl;


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
