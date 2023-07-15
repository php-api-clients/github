<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Hydrator\Operation\Orgs\Org\Members\Username;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class Copilot implements ObjectMapper
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
            'ApiClients\Client\GitHub\Schema\CopilotSeatDetails' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CopilotSeatDetails($payload),
                'ApiClients\Client\GitHub\Schema\BasicError' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BasicError($payload),
                'ApiClients\Client\GitHub\Schema\CopilotSeatDetails\Assignee' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CopilotSeatDetails⚡️Assignee($payload),
                'ApiClients\Client\GitHub\Schema\Team' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Team($payload),
                'ApiClients\Client\GitHub\Schema\Team\Permissions' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Team⚡️Permissions($payload),
                'ApiClients\Client\GitHub\Schema\TeamSimple' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️TeamSimple($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CopilotSeatDetails(array $payload): \ApiClients\Client\GitHub\Schema\CopilotSeatDetails
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['assignee'] ?? null;

            if ($value === null) {
                $missingFields[] = 'assignee';
                goto after_assignee;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'assignee';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CopilotSeatDetails⚡️Assignee($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['assignee'] = $value;

            after_assignee:

            $value = $payload['assigning_team'] ?? null;

            if ($value === null) {
                $properties['assigningTeam'] = null;
                goto after_assigningTeam;
            }

            static $assigningTeamCaster1;

            if ($assigningTeamCaster1 === null) {
                $assigningTeamCaster1 = new \ApiClients\Client\GitHub\Attribute\CastUnionToType\Schema\CopilotSeatDetails\AssigningTeam(...array (
));
            }

            $value = $assigningTeamCaster1->cast($value, $this);

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'assigningTeam';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Team($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['assigningTeam'] = $value;

            after_assigningTeam:

            $value = $payload['pending_cancellation_date'] ?? null;

            if ($value === null) {
                $properties['pendingCancellationDate'] = null;
                goto after_pendingCancellationDate;
            }

            $properties['pendingCancellationDate'] = $value;

            after_pendingCancellationDate:

            $value = $payload['last_activity_at'] ?? null;

            if ($value === null) {
                $properties['lastActivityAt'] = null;
                goto after_lastActivityAt;
            }

            $properties['lastActivityAt'] = $value;

            after_lastActivityAt:

            $value = $payload['last_activity_editor'] ?? null;

            if ($value === null) {
                $properties['lastActivityEditor'] = null;
                goto after_lastActivityEditor;
            }

            $properties['lastActivityEditor'] = $value;

            after_lastActivityEditor:

            $value = $payload['created_at'] ?? null;

            if ($value === null) {
                $missingFields[] = 'created_at';
                goto after_createdAt;
            }

            $properties['createdAt'] = $value;

            after_createdAt:

            $value = $payload['updated_at'] ?? null;

            if ($value === null) {
                $properties['updatedAt'] = null;
                goto after_updatedAt;
            }

            $properties['updatedAt'] = $value;

            after_updatedAt:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\CopilotSeatDetails', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\CopilotSeatDetails::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\CopilotSeatDetails(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\CopilotSeatDetails', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BasicError(array $payload): \ApiClients\Client\GitHub\Schema\BasicError
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['message'] ?? null;

            if ($value === null) {
                $properties['message'] = null;
                goto after_message;
            }

            $properties['message'] = $value;

            after_message:

            $value = $payload['documentation_url'] ?? null;

            if ($value === null) {
                $properties['documentationUrl'] = null;
                goto after_documentationUrl;
            }

            $properties['documentationUrl'] = $value;

            after_documentationUrl:

            $value = $payload['url'] ?? null;

            if ($value === null) {
                $properties['url'] = null;
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

            $value = $payload['status'] ?? null;

            if ($value === null) {
                $properties['status'] = null;
                goto after_status;
            }

            $properties['status'] = $value;

            after_status:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\BasicError', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\BasicError::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\BasicError(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\BasicError', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CopilotSeatDetails⚡️Assignee(array $payload): \ApiClients\Client\GitHub\Schema\CopilotSeatDetails\Assignee
    {
        $properties = []; 
        $missingFields = [];
        try {
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\CopilotSeatDetails\Assignee', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\CopilotSeatDetails\Assignee::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\CopilotSeatDetails\Assignee(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\CopilotSeatDetails\Assignee', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Team(array $payload): \ApiClients\Client\GitHub\Schema\Team
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

            $value = $payload['slug'] ?? null;

            if ($value === null) {
                $missingFields[] = 'slug';
                goto after_slug;
            }

            $properties['slug'] = $value;

            after_slug:

            $value = $payload['description'] ?? null;

            if ($value === null) {
                $properties['description'] = null;
                goto after_description;
            }

            $properties['description'] = $value;

            after_description:

            $value = $payload['privacy'] ?? null;

            if ($value === null) {
                $properties['privacy'] = null;
                goto after_privacy;
            }

            $properties['privacy'] = $value;

            after_privacy:

            $value = $payload['notification_setting'] ?? null;

            if ($value === null) {
                $properties['notificationSetting'] = null;
                goto after_notificationSetting;
            }

            $properties['notificationSetting'] = $value;

            after_notificationSetting:

            $value = $payload['permission'] ?? null;

            if ($value === null) {
                $missingFields[] = 'permission';
                goto after_permission;
            }

            $properties['permission'] = $value;

            after_permission:

            $value = $payload['permissions'] ?? null;

            if ($value === null) {
                $properties['permissions'] = null;
                goto after_permissions;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'permissions';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Team⚡️Permissions($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['permissions'] = $value;

            after_permissions:

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

            $value = $payload['members_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'members_url';
                goto after_membersUrl;
            }

            $properties['membersUrl'] = $value;

            after_membersUrl:

            $value = $payload['repositories_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'repositories_url';
                goto after_repositoriesUrl;
            }

            $properties['repositoriesUrl'] = $value;

            after_repositoriesUrl:

            $value = $payload['parent'] ?? null;

            if ($value === null) {
                $properties['parent'] = null;
                goto after_parent;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'parent';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️TeamSimple($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['parent'] = $value;

            after_parent:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Team', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\Team::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\Team(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Team', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Team⚡️Permissions(array $payload): \ApiClients\Client\GitHub\Schema\Team\Permissions
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['pull'] ?? null;

            if ($value === null) {
                $missingFields[] = 'pull';
                goto after_pull;
            }

            $properties['pull'] = $value;

            after_pull:

            $value = $payload['triage'] ?? null;

            if ($value === null) {
                $missingFields[] = 'triage';
                goto after_triage;
            }

            $properties['triage'] = $value;

            after_triage:

            $value = $payload['push'] ?? null;

            if ($value === null) {
                $missingFields[] = 'push';
                goto after_push;
            }

            $properties['push'] = $value;

            after_push:

            $value = $payload['maintain'] ?? null;

            if ($value === null) {
                $missingFields[] = 'maintain';
                goto after_maintain;
            }

            $properties['maintain'] = $value;

            after_maintain:

            $value = $payload['admin'] ?? null;

            if ($value === null) {
                $missingFields[] = 'admin';
                goto after_admin;
            }

            $properties['admin'] = $value;

            after_admin:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Team\Permissions', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\Team\Permissions::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\Team\Permissions(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Team\Permissions', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️TeamSimple(array $payload): \ApiClients\Client\GitHub\Schema\TeamSimple
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

            $value = $payload['url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'url';
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

            $value = $payload['members_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'members_url';
                goto after_membersUrl;
            }

            $properties['membersUrl'] = $value;

            after_membersUrl:

            $value = $payload['name'] ?? null;

            if ($value === null) {
                $missingFields[] = 'name';
                goto after_name;
            }

            $properties['name'] = $value;

            after_name:

            $value = $payload['description'] ?? null;

            if ($value === null) {
                $properties['description'] = null;
                goto after_description;
            }

            $properties['description'] = $value;

            after_description:

            $value = $payload['permission'] ?? null;

            if ($value === null) {
                $missingFields[] = 'permission';
                goto after_permission;
            }

            $properties['permission'] = $value;

            after_permission:

            $value = $payload['privacy'] ?? null;

            if ($value === null) {
                $properties['privacy'] = null;
                goto after_privacy;
            }

            $properties['privacy'] = $value;

            after_privacy:

            $value = $payload['notification_setting'] ?? null;

            if ($value === null) {
                $properties['notificationSetting'] = null;
                goto after_notificationSetting;
            }

            $properties['notificationSetting'] = $value;

            after_notificationSetting:

            $value = $payload['html_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'html_url';
                goto after_htmlUrl;
            }

            $properties['htmlUrl'] = $value;

            after_htmlUrl:

            $value = $payload['repositories_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'repositories_url';
                goto after_repositoriesUrl;
            }

            $properties['repositoriesUrl'] = $value;

            after_repositoriesUrl:

            $value = $payload['slug'] ?? null;

            if ($value === null) {
                $missingFields[] = 'slug';
                goto after_slug;
            }

            $properties['slug'] = $value;

            after_slug:

            $value = $payload['ldap_dn'] ?? null;

            if ($value === null) {
                $properties['ldapDn'] = null;
                goto after_ldapDn;
            }

            $properties['ldapDn'] = $value;

            after_ldapDn:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\TeamSimple', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\TeamSimple::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\TeamSimple(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\TeamSimple', $exception, stack: $this->hydrationStack);
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
            'ApiClients\Client\GitHub\Schema\CopilotSeatDetails' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CopilotSeatDetails($object),
            'ApiClients\Client\GitHub\Schema\BasicError' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BasicError($object),
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


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CopilotSeatDetails(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\CopilotSeatDetails);
        $result = [];

        $assignee = $object->assignee;
        $assignee = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CopilotSeatDetails⚡️Assignee($assignee);
        after_assignee:        $result['assignee'] = $assignee;

        
        $assigningTeam = $object->assigningTeam;

        if ($assigningTeam === null) {
            goto after_assigningTeam;
        }
        $assigningTeam = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Team($assigningTeam);
        after_assigningTeam:        $result['assigning_team'] = $assigningTeam;

        
        $pendingCancellationDate = $object->pendingCancellationDate;

        if ($pendingCancellationDate === null) {
            goto after_pendingCancellationDate;
        }
        after_pendingCancellationDate:        $result['pending_cancellation_date'] = $pendingCancellationDate;

        
        $lastActivityAt = $object->lastActivityAt;

        if ($lastActivityAt === null) {
            goto after_lastActivityAt;
        }
        after_lastActivityAt:        $result['last_activity_at'] = $lastActivityAt;

        
        $lastActivityEditor = $object->lastActivityEditor;

        if ($lastActivityEditor === null) {
            goto after_lastActivityEditor;
        }
        after_lastActivityEditor:        $result['last_activity_editor'] = $lastActivityEditor;

        
        $createdAt = $object->createdAt;
        after_createdAt:        $result['created_at'] = $createdAt;

        
        $updatedAt = $object->updatedAt;

        if ($updatedAt === null) {
            goto after_updatedAt;
        }
        after_updatedAt:        $result['updated_at'] = $updatedAt;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BasicError(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\BasicError);
        $result = [];

        $message = $object->message;

        if ($message === null) {
            goto after_message;
        }
        after_message:        $result['message'] = $message;

        
        $documentationUrl = $object->documentationUrl;

        if ($documentationUrl === null) {
            goto after_documentationUrl;
        }
        after_documentationUrl:        $result['documentation_url'] = $documentationUrl;

        
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
