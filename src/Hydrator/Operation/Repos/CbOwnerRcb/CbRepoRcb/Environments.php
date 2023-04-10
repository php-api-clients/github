<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class Environments implements ObjectMapper
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
            'ApiClients\Client\Github\Schema\Operation\Repos\GetAllEnvironments\Response\Applicationjson\H200' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️Operation⚡️Repos⚡️GetAllEnvironments⚡️Response⚡️Applicationjson⚡️H200($payload),
                'ApiClients\Client\Github\Schema\Environment' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️Environment($payload),
                'ApiClients\Client\Github\Schema\Environment\ProtectionRules' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️Environment⚡️ProtectionRules($payload),
                'ApiClients\Client\Github\Schema\DeploymentBranchPolicySettings' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️DeploymentBranchPolicySettings($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️Operation⚡️Repos⚡️GetAllEnvironments⚡️Response⚡️Applicationjson⚡️H200(array $payload): \ApiClients\Client\Github\Schema\Operation\Repos\GetAllEnvironments\Response\Applicationjson\H200
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['total_count'] ?? null;

            if ($value === null) {
                $properties['totalCount'] = null;
                goto after_totalCount;
            }

            $properties['totalCount'] = $value;

            after_totalCount:

            $value = $payload['environments'] ?? null;

            if ($value === null) {
                $properties['environments'] = null;
                goto after_environments;
            }

            static $environmentsCaster1;

            if ($environmentsCaster1 === null) {
                $environmentsCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\Github\\Schema\\Environment',
));
            }

            $value = $environmentsCaster1->cast($value, $this);

            $properties['environments'] = $value;

            after_environments:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\Operation\Repos\GetAllEnvironments\Response\Applicationjson\H200', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\Operation\Repos\GetAllEnvironments\Response\Applicationjson\H200::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\Github\Schema\Operation\Repos\GetAllEnvironments\Response\Applicationjson\H200(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\Operation\Repos\GetAllEnvironments\Response\Applicationjson\H200', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️Environment(array $payload): \ApiClients\Client\Github\Schema\Environment
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'id';
                goto after_id;
            }

            $properties['id'] = $value;

            after_id:

            $value = $payload['node_id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'node_id';
                goto after_nodeId;
            }

            $properties['nodeId'] = $value;

            after_nodeId:

            $value = $payload['name'] ?? null;

            if ($value === null) {
                $missingFields[] = 'name';
                goto after_name;
            }

            $properties['name'] = $value;

            after_name:

            $value = $payload['url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'url';
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

            $value = $payload['html_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'html_url';
                goto after_htmlUrl;
            }

            $properties['htmlUrl'] = $value;

            after_htmlUrl:

            $value = $payload['created_at'] ?? null;

            if ($value === null) {
                $missingFields[] = 'created_at';
                goto after_createdAt;
            }

            $properties['createdAt'] = $value;

            after_createdAt:

            $value = $payload['updated_at'] ?? null;

            if ($value === null) {
                $missingFields[] = 'updated_at';
                goto after_updatedAt;
            }

            $properties['updatedAt'] = $value;

            after_updatedAt:

            $value = $payload['protection_rules'] ?? null;

            if ($value === null) {
                $properties['protectionRules'] = null;
                goto after_protectionRules;
            }

            static $protectionRulesCaster1;

            if ($protectionRulesCaster1 === null) {
                $protectionRulesCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\Github\\Schema\\Environment\\ProtectionRules',
));
            }

            $value = $protectionRulesCaster1->cast($value, $this);

            $properties['protectionRules'] = $value;

            after_protectionRules:

            $value = $payload['deployment_branch_policy'] ?? null;

            if ($value === null) {
                $properties['deploymentBranchPolicy'] = null;
                goto after_deploymentBranchPolicy;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'deploymentBranchPolicy';
                    $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️DeploymentBranchPolicySettings($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['deploymentBranchPolicy'] = $value;

            after_deploymentBranchPolicy:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\Environment', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\Environment::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\Github\Schema\Environment(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\Environment', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️Environment⚡️ProtectionRules(array $payload): \ApiClients\Client\Github\Schema\Environment\ProtectionRules
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'id';
                goto after_id;
            }

            $properties['id'] = $value;

            after_id:

            $value = $payload['node_id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'node_id';
                goto after_nodeId;
            }

            $properties['nodeId'] = $value;

            after_nodeId:

            $value = $payload['type'] ?? null;

            if ($value === null) {
                $missingFields[] = 'type';
                goto after_type;
            }

            $properties['type'] = $value;

            after_type:

            $value = $payload['wait_timer'] ?? null;

            if ($value === null) {
                $properties['waitTimer'] = null;
                goto after_waitTimer;
            }

            $properties['waitTimer'] = $value;

            after_waitTimer:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\Environment\ProtectionRules', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\Environment\ProtectionRules::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\Github\Schema\Environment\ProtectionRules(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\Environment\ProtectionRules', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️DeploymentBranchPolicySettings(array $payload): \ApiClients\Client\Github\Schema\DeploymentBranchPolicySettings
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['protected_branches'] ?? null;

            if ($value === null) {
                $missingFields[] = 'protected_branches';
                goto after_protectedBranches;
            }

            $properties['protectedBranches'] = $value;

            after_protectedBranches:

            $value = $payload['custom_branch_policies'] ?? null;

            if ($value === null) {
                $missingFields[] = 'custom_branch_policies';
                goto after_customBranchPolicies;
            }

            $properties['customBranchPolicies'] = $value;

            after_customBranchPolicies:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\DeploymentBranchPolicySettings', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\DeploymentBranchPolicySettings::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\Github\Schema\DeploymentBranchPolicySettings(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\DeploymentBranchPolicySettings', $exception, stack: $this->hydrationStack);
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
            'ApiClients\Client\Github\Schema\Operation\Repos\GetAllEnvironments\Response\Applicationjson\H200' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️Operation⚡️Repos⚡️GetAllEnvironments⚡️Response⚡️Applicationjson⚡️H200($object),
            'ApiClients\Client\Github\Schema\Environment' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️Environment($object),
            'ApiClients\Client\Github\Schema\Environment\ProtectionRules' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️Environment⚡️ProtectionRules($object),
            'ApiClients\Client\Github\Schema\DeploymentBranchPolicySettings' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️DeploymentBranchPolicySettings($object),
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


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️Operation⚡️Repos⚡️GetAllEnvironments⚡️Response⚡️Applicationjson⚡️H200(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\Operation\Repos\GetAllEnvironments\Response\Applicationjson\H200);
        $result = [];

        $totalCount = $object->totalCount;

        if ($totalCount === null) {
            goto after_totalCount;
        }
        after_totalCount:        $result['total_count'] = $totalCount;

        
        $environments = $object->environments;

        if ($environments === null) {
            goto after_environments;
        }
        static $environmentsSerializer0;

        if ($environmentsSerializer0 === null) {
            $environmentsSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\Github\\Schema\\Environment',
));
        }
        
        $environments = $environmentsSerializer0->serialize($environments, $this);
        after_environments:        $result['environments'] = $environments;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️Environment(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\Environment);
        $result = [];

        $id = $object->id;
        after_id:        $result['id'] = $id;

        
        $nodeId = $object->nodeId;
        after_nodeId:        $result['node_id'] = $nodeId;

        
        $name = $object->name;
        after_name:        $result['name'] = $name;

        
        $url = $object->url;
        after_url:        $result['url'] = $url;

        
        $htmlUrl = $object->htmlUrl;
        after_htmlUrl:        $result['html_url'] = $htmlUrl;

        
        $createdAt = $object->createdAt;
        after_createdAt:        $result['created_at'] = $createdAt;

        
        $updatedAt = $object->updatedAt;
        after_updatedAt:        $result['updated_at'] = $updatedAt;

        
        $protectionRules = $object->protectionRules;

        if ($protectionRules === null) {
            goto after_protectionRules;
        }
        static $protectionRulesSerializer0;

        if ($protectionRulesSerializer0 === null) {
            $protectionRulesSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\Github\\Schema\\Environment\\ProtectionRules',
));
        }
        
        $protectionRules = $protectionRulesSerializer0->serialize($protectionRules, $this);
        after_protectionRules:        $result['protection_rules'] = $protectionRules;

        
        $deploymentBranchPolicy = $object->deploymentBranchPolicy;

        if ($deploymentBranchPolicy === null) {
            goto after_deploymentBranchPolicy;
        }
        $deploymentBranchPolicy = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️DeploymentBranchPolicySettings($deploymentBranchPolicy);
        after_deploymentBranchPolicy:        $result['deployment_branch_policy'] = $deploymentBranchPolicy;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️Environment⚡️ProtectionRules(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\Environment\ProtectionRules);
        $result = [];

        $id = $object->id;
        after_id:        $result['id'] = $id;

        
        $nodeId = $object->nodeId;
        after_nodeId:        $result['node_id'] = $nodeId;

        
        $type = $object->type;
        after_type:        $result['type'] = $type;

        
        $waitTimer = $object->waitTimer;

        if ($waitTimer === null) {
            goto after_waitTimer;
        }
        after_waitTimer:        $result['wait_timer'] = $waitTimer;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️DeploymentBranchPolicySettings(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\DeploymentBranchPolicySettings);
        $result = [];

        $protectedBranches = $object->protectedBranches;
        after_protectedBranches:        $result['protected_branches'] = $protectedBranches;

        
        $customBranchPolicies = $object->customBranchPolicies;
        after_customBranchPolicies:        $result['custom_branch_policies'] = $customBranchPolicies;


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