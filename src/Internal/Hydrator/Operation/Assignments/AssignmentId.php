<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Hydrator\Operation\Assignments;

use ApiClients\Client\GitHub\Schema\BasicError;
use ApiClients\Client\GitHub\Schema\Classroom;
use ApiClients\Client\GitHub\Schema\ClassroomAssignment;
use ApiClients\Client\GitHub\Schema\SimpleClassroomOrganization;
use ApiClients\Client\GitHub\Schema\SimpleClassroomRepository;
use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems;
use EventSauce\ObjectHydrator\PropertySerializers\SerializeDateTime;
use EventSauce\ObjectHydrator\PropertySerializers\SerializeUuidToString;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;
use LogicException;
use Throwable;

use function array_pop;
use function assert;
use function count;
use function is_a;
use function is_array;

class AssignmentId implements ObjectMapper
{
    private array $hydrationStack = [];

    public function __construct()
    {
    }

    /**
     * @param class-string<T> $className
     *
     * @return T
     *
     * @template T of object
     */
    public function hydrateObject(string $className, array $payload): object
    {
        return match ($className) {
            'ApiClients\Client\GitHub\Schema\ClassroomAssignment' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ClassroomAssignment($payload),
                'ApiClients\Client\GitHub\Schema\SimpleClassroomRepository' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleClassroomRepository($payload),
                'ApiClients\Client\GitHub\Schema\Classroom' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Classroom($payload),
                'ApiClients\Client\GitHub\Schema\SimpleClassroomOrganization' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleClassroomOrganization($payload),
                'ApiClients\Client\GitHub\Schema\BasicError' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BasicError($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ClassroomAssignment(array $payload): ClassroomAssignment
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'id';
                goto after_id;
            }

            $properties['id'] = $value;

            after_id:

            $value = $payload['public_repo'] ?? null;

            if ($value === null) {
                $missingFields[] = 'public_repo';
                goto after_publicRepo;
            }

            $properties['publicRepo'] = $value;

            after_publicRepo:

            $value = $payload['title'] ?? null;

            if ($value === null) {
                $missingFields[] = 'title';
                goto after_title;
            }

            $properties['title'] = $value;

            after_title:

            $value = $payload['type'] ?? null;

            if ($value === null) {
                $missingFields[] = 'type';
                goto after_type;
            }

            $properties['type'] = $value;

            after_type:

            $value = $payload['invite_link'] ?? null;

            if ($value === null) {
                $missingFields[] = 'invite_link';
                goto after_inviteLink;
            }

            $properties['inviteLink'] = $value;

            after_inviteLink:

            $value = $payload['invitations_enabled'] ?? null;

            if ($value === null) {
                $missingFields[] = 'invitations_enabled';
                goto after_invitationsEnabled;
            }

            $properties['invitationsEnabled'] = $value;

            after_invitationsEnabled:

            $value = $payload['slug'] ?? null;

            if ($value === null) {
                $missingFields[] = 'slug';
                goto after_slug;
            }

            $properties['slug'] = $value;

            after_slug:

            $value = $payload['students_are_repo_admins'] ?? null;

            if ($value === null) {
                $missingFields[] = 'students_are_repo_admins';
                goto after_studentsAreRepoAdmins;
            }

            $properties['studentsAreRepoAdmins'] = $value;

            after_studentsAreRepoAdmins:

            $value = $payload['feedback_pull_requests_enabled'] ?? null;

            if ($value === null) {
                $missingFields[] = 'feedback_pull_requests_enabled';
                goto after_feedbackPullRequestsEnabled;
            }

            $properties['feedbackPullRequestsEnabled'] = $value;

            after_feedbackPullRequestsEnabled:

            $value = $payload['max_teams'] ?? null;

            if ($value === null) {
                $properties['maxTeams'] = null;
                goto after_maxTeams;
            }

            $properties['maxTeams'] = $value;

            after_maxTeams:

            $value = $payload['max_members'] ?? null;

            if ($value === null) {
                $properties['maxMembers'] = null;
                goto after_maxMembers;
            }

            $properties['maxMembers'] = $value;

            after_maxMembers:

            $value = $payload['editor'] ?? null;

            if ($value === null) {
                $missingFields[] = 'editor';
                goto after_editor;
            }

            $properties['editor'] = $value;

            after_editor:

            $value = $payload['accepted'] ?? null;

            if ($value === null) {
                $missingFields[] = 'accepted';
                goto after_accepted;
            }

            $properties['accepted'] = $value;

            after_accepted:

            $value = $payload['submitted'] ?? null;

            if ($value === null) {
                $missingFields[] = 'submitted';
                goto after_submitted;
            }

            $properties['submitted'] = $value;

            after_submitted:

            $value = $payload['passing'] ?? null;

            if ($value === null) {
                $missingFields[] = 'passing';
                goto after_passing;
            }

            $properties['passing'] = $value;

            after_passing:

            $value = $payload['language'] ?? null;

            if ($value === null) {
                $missingFields[] = 'language';
                goto after_language;
            }

            $properties['language'] = $value;

            after_language:

            $value = $payload['deadline'] ?? null;

            if ($value === null) {
                $properties['deadline'] = null;
                goto after_deadline;
            }

            $properties['deadline'] = $value;

            after_deadline:

            $value = $payload['starter_code_repository'] ?? null;

            if ($value === null) {
                $missingFields[] = 'starter_code_repository';
                goto after_starterCodeRepository;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'starterCodeRepository';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleClassroomRepository($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['starterCodeRepository'] = $value;

            after_starterCodeRepository:

            $value = $payload['classroom'] ?? null;

            if ($value === null) {
                $missingFields[] = 'classroom';
                goto after_classroom;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'classroom';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Classroom($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['classroom'] = $value;

            after_classroom:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ClassroomAssignment', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(ClassroomAssignment::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new ClassroomAssignment(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ClassroomAssignment', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleClassroomRepository(array $payload): SimpleClassroomRepository
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'id';
                goto after_id;
            }

            $properties['id'] = $value;

            after_id:

            $value = $payload['full_name'] ?? null;

            if ($value === null) {
                $missingFields[] = 'full_name';
                goto after_fullName;
            }

            $properties['fullName'] = $value;

            after_fullName:

            $value = $payload['html_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'html_url';
                goto after_htmlUrl;
            }

            $properties['htmlUrl'] = $value;

            after_htmlUrl:

            $value = $payload['node_id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'node_id';
                goto after_nodeId;
            }

            $properties['nodeId'] = $value;

            after_nodeId:

            $value = $payload['private'] ?? null;

            if ($value === null) {
                $missingFields[] = 'private';
                goto after_private;
            }

            $properties['private'] = $value;

            after_private:

            $value = $payload['default_branch'] ?? null;

            if ($value === null) {
                $missingFields[] = 'default_branch';
                goto after_defaultBranch;
            }

            $properties['defaultBranch'] = $value;

            after_defaultBranch:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\SimpleClassroomRepository', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(SimpleClassroomRepository::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new SimpleClassroomRepository(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\SimpleClassroomRepository', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Classroom(array $payload): Classroom
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'id';
                goto after_id;
            }

            $properties['id'] = $value;

            after_id:

            $value = $payload['name'] ?? null;

            if ($value === null) {
                $missingFields[] = 'name';
                goto after_name;
            }

            $properties['name'] = $value;

            after_name:

            $value = $payload['archived'] ?? null;

            if ($value === null) {
                $missingFields[] = 'archived';
                goto after_archived;
            }

            $properties['archived'] = $value;

            after_archived:

            $value = $payload['organization'] ?? null;

            if ($value === null) {
                $missingFields[] = 'organization';
                goto after_organization;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'organization';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleClassroomOrganization($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['organization'] = $value;

            after_organization:

            $value = $payload['url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'url';
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Classroom', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(Classroom::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new Classroom(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Classroom', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleClassroomOrganization(array $payload): SimpleClassroomOrganization
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'id';
                goto after_id;
            }

            $properties['id'] = $value;

            after_id:

            $value = $payload['login'] ?? null;

            if ($value === null) {
                $missingFields[] = 'login';
                goto after_login;
            }

            $properties['login'] = $value;

            after_login:

            $value = $payload['node_id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'node_id';
                goto after_nodeId;
            }

            $properties['nodeId'] = $value;

            after_nodeId:

            $value = $payload['html_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'html_url';
                goto after_htmlUrl;
            }

            $properties['htmlUrl'] = $value;

            after_htmlUrl:

            $value = $payload['name'] ?? null;

            if ($value === null) {
                $properties['name'] = null;
                goto after_name;
            }

            $properties['name'] = $value;

            after_name:

            $value = $payload['avatar_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'avatar_url';
                goto after_avatarUrl;
            }

            $properties['avatarUrl'] = $value;

            after_avatarUrl:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\SimpleClassroomOrganization', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(SimpleClassroomOrganization::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new SimpleClassroomOrganization(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\SimpleClassroomOrganization', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BasicError(array $payload): BasicError
    {
        $properties    = [];
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
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\BasicError', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(BasicError::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new BasicError(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\BasicError', $exception, stack: $this->hydrationStack);
        }
    }

    private function serializeViaTypeMap(string $accessor, object $object, array $payloadToTypeMap): array
    {
        foreach ($payloadToTypeMap as $payloadType => [$valueType, $method]) {
            if (is_a($object, $valueType)) {
                return [$accessor => $payloadType] + $this->{$method}($object);
            }
        }

        throw new LogicException('No type mapped for object of class: ' . $object::class);
    }

    public function serializeObject(object $object): mixed
    {
        return $this->serializeObjectOfType($object, $object::class);
    }

    /**
     * @param T               $object
     * @param class-string<T> $className
     *
     * @template T
     */
    public function serializeObjectOfType(object $object, string $className): mixed
    {
        try {
            return match ($className) {
                'array' => $this->serializeValuearray($object),
                'Ramsey\Uuid\UuidInterface' => $this->serializeValueRamsey⚡️Uuid⚡️UuidInterface($object),
                'DateTime' => $this->serializeValueDateTime($object),
                'DateTimeImmutable' => $this->serializeValueDateTimeImmutable($object),
                'DateTimeInterface' => $this->serializeValueDateTimeInterface($object),
                'ApiClients\Client\GitHub\Schema\ClassroomAssignment' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ClassroomAssignment($object),
                'ApiClients\Client\GitHub\Schema\SimpleClassroomRepository' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleClassroomRepository($object),
                'ApiClients\Client\GitHub\Schema\Classroom' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Classroom($object),
                'ApiClients\Client\GitHub\Schema\SimpleClassroomOrganization' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleClassroomOrganization($object),
                'ApiClients\Client\GitHub\Schema\BasicError' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BasicError($object),
                default => throw new LogicException('No serialization defined for $className'),
            };
        } catch (Throwable $exception) {
            throw UnableToSerializeObject::dueToError($className, $exception);
        }
    }

    private function serializeValuearray(mixed $value): mixed
    {
        static $serializer;

        if ($serializer === null) {
            $serializer = new SerializeArrayItems(...[]);
        }

        return $serializer->serialize($value, $this);
    }

    private function serializeValueRamsey⚡️Uuid⚡️UuidInterface(mixed $value): mixed
    {
        static $serializer;

        if ($serializer === null) {
            $serializer = new SerializeUuidToString(...[]);
        }

        return $serializer->serialize($value, $this);
    }

    private function serializeValueDateTime(mixed $value): mixed
    {
        static $serializer;

        if ($serializer === null) {
            $serializer = new SerializeDateTime(...[]);
        }

        return $serializer->serialize($value, $this);
    }

    private function serializeValueDateTimeImmutable(mixed $value): mixed
    {
        static $serializer;

        if ($serializer === null) {
            $serializer = new SerializeDateTime(...[]);
        }

        return $serializer->serialize($value, $this);
    }

    private function serializeValueDateTimeInterface(mixed $value): mixed
    {
        static $serializer;

        if ($serializer === null) {
            $serializer = new SerializeDateTime(...[]);
        }

        return $serializer->serialize($value, $this);
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ClassroomAssignment(mixed $object): mixed
    {
        assert($object instanceof ClassroomAssignment);
        $result = [];

        $id                            = $object->id;
        after_id:        $result['id'] = $id;

        $publicRepo                                     = $object->publicRepo;
        after_publicRepo:        $result['public_repo'] = $publicRepo;

        $title                               = $object->title;
        after_title:        $result['title'] = $title;

        $type                              = $object->type;
        after_type:        $result['type'] = $type;

        $inviteLink                                     = $object->inviteLink;
        after_inviteLink:        $result['invite_link'] = $inviteLink;

        $invitationsEnabled                                             = $object->invitationsEnabled;
        after_invitationsEnabled:        $result['invitations_enabled'] = $invitationsEnabled;

        $slug                              = $object->slug;
        after_slug:        $result['slug'] = $slug;

        $studentsAreRepoAdmins                                                  = $object->studentsAreRepoAdmins;
        after_studentsAreRepoAdmins:        $result['students_are_repo_admins'] = $studentsAreRepoAdmins;

        $feedbackPullRequestsEnabled                                                        = $object->feedbackPullRequestsEnabled;
        after_feedbackPullRequestsEnabled:        $result['feedback_pull_requests_enabled'] = $feedbackPullRequestsEnabled;

        $maxTeams = $object->maxTeams;

        if ($maxTeams === null) {
            goto after_maxTeams;
        }

        after_maxTeams:        $result['max_teams'] = $maxTeams;

        $maxMembers = $object->maxMembers;

        if ($maxMembers === null) {
            goto after_maxMembers;
        }

        after_maxMembers:        $result['max_members'] = $maxMembers;

        $editor                                = $object->editor;
        after_editor:        $result['editor'] = $editor;

        $accepted                                  = $object->accepted;
        after_accepted:        $result['accepted'] = $accepted;

        $submitted                                   = $object->submitted;
        after_submitted:        $result['submitted'] = $submitted;

        $passing                                 = $object->passing;
        after_passing:        $result['passing'] = $passing;

        $language                                  = $object->language;
        after_language:        $result['language'] = $language;

        $deadline = $object->deadline;

        if ($deadline === null) {
            goto after_deadline;
        }

        after_deadline:        $result['deadline'] = $deadline;

        $starterCodeRepository                                                 = $object->starterCodeRepository;
        $starterCodeRepository                                                 = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleClassroomRepository($starterCodeRepository);
        after_starterCodeRepository:        $result['starter_code_repository'] = $starterCodeRepository;

        $classroom                                   = $object->classroom;
        $classroom                                   = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Classroom($classroom);
        after_classroom:        $result['classroom'] = $classroom;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleClassroomRepository(mixed $object): mixed
    {
        assert($object instanceof SimpleClassroomRepository);
        $result = [];

        $id                            = $object->id;
        after_id:        $result['id'] = $id;

        $fullName                                   = $object->fullName;
        after_fullName:        $result['full_name'] = $fullName;

        $htmlUrl                                  = $object->htmlUrl;
        after_htmlUrl:        $result['html_url'] = $htmlUrl;

        $nodeId                                 = $object->nodeId;
        after_nodeId:        $result['node_id'] = $nodeId;

        $private                                 = $object->private;
        after_private:        $result['private'] = $private;

        $defaultBranch                                        = $object->defaultBranch;
        after_defaultBranch:        $result['default_branch'] = $defaultBranch;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Classroom(mixed $object): mixed
    {
        assert($object instanceof Classroom);
        $result = [];

        $id                            = $object->id;
        after_id:        $result['id'] = $id;

        $name                              = $object->name;
        after_name:        $result['name'] = $name;

        $archived                                  = $object->archived;
        after_archived:        $result['archived'] = $archived;

        $organization                                      = $object->organization;
        $organization                                      = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleClassroomOrganization($organization);
        after_organization:        $result['organization'] = $organization;

        $url                             = $object->url;
        after_url:        $result['url'] = $url;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleClassroomOrganization(mixed $object): mixed
    {
        assert($object instanceof SimpleClassroomOrganization);
        $result = [];

        $id                            = $object->id;
        after_id:        $result['id'] = $id;

        $login                               = $object->login;
        after_login:        $result['login'] = $login;

        $nodeId                                 = $object->nodeId;
        after_nodeId:        $result['node_id'] = $nodeId;

        $htmlUrl                                  = $object->htmlUrl;
        after_htmlUrl:        $result['html_url'] = $htmlUrl;

        $name = $object->name;

        if ($name === null) {
            goto after_name;
        }

        after_name:        $result['name'] = $name;

        $avatarUrl                                    = $object->avatarUrl;
        after_avatarUrl:        $result['avatar_url'] = $avatarUrl;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BasicError(mixed $object): mixed
    {
        assert($object instanceof BasicError);
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
     * @param class-string<T> $className
     * @param iterable<array> $payloads;
     *
     * @return IterableList<T>
     *
     * @throws UnableToHydrateObject
     *
     * @template T
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
     * @param class-string<T> $className
     * @param iterable<array> $payloads;
     *
     * @return IterableList<T>
     *
     * @throws UnableToSerializeObject
     *
     * @template T
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
