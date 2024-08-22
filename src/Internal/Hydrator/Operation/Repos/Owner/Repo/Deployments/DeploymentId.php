<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Deployments;

use ApiClients\Client\GitHub\Internal\Attribute\CastUnionToType\Schema\Deployment\Payload;
use ApiClients\Client\GitHub\Schema\BasicError;
use ApiClients\Client\GitHub\Schema\Deployment;
use ApiClients\Client\GitHub\Schema\Integration;
use ApiClients\Client\GitHub\Schema\Integration\Permissions;
use ApiClients\Client\GitHub\Schema\SimpleUser;
use ApiClients\Client\GitHub\Schema\ValidationErrorSimple;
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
use function is_object;

class DeploymentId implements ObjectMapper
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
            'ApiClients\Client\GitHub\Schema\Deployment' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Deployment($payload),
                'ApiClients\Client\GitHub\Schema\SimpleUser' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($payload),
                'ApiClients\Client\GitHub\Schema\Integration' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Integration($payload),
                'ApiClients\Client\GitHub\Schema\Integration\Permissions' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Integration⚡️Permissions($payload),
                'ApiClients\Client\GitHub\Schema\BasicError' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BasicError($payload),
                'ApiClients\Client\GitHub\Schema\ValidationErrorSimple' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ValidationErrorSimple($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Deployment(array $payload): Deployment
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'url';
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

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

            $value = $payload['sha'] ?? null;

            if ($value === null) {
                $missingFields[] = 'sha';
                goto after_sha;
            }

            $properties['sha'] = $value;

            after_sha:

            $value = $payload['ref'] ?? null;

            if ($value === null) {
                $missingFields[] = 'ref';
                goto after_ref;
            }

            $properties['ref'] = $value;

            after_ref:

            $value = $payload['task'] ?? null;

            if ($value === null) {
                $missingFields[] = 'task';
                goto after_task;
            }

            $properties['task'] = $value;

            after_task:

            $value = $payload['payload'] ?? null;

            if ($value === null) {
                $missingFields[] = 'payload';
                goto after_payload;
            }

            static $payloadCaster1;

            if ($payloadCaster1 === null) {
                $payloadCaster1 = new Payload(...[]);
            }

            $value = $payloadCaster1->cast($value, $this);

            if ($value === null) {
                                $missingFields[] = 'payload';
                goto after_payload;
            }

            $properties['payload'] = $value;

            after_payload:

            $value = $payload['original_environment'] ?? null;

            if ($value === null) {
                $properties['originalEnvironment'] = null;
                goto after_originalEnvironment;
            }

            $properties['originalEnvironment'] = $value;

            after_originalEnvironment:

            $value = $payload['environment'] ?? null;

            if ($value === null) {
                $missingFields[] = 'environment';
                goto after_environment;
            }

            $properties['environment'] = $value;

            after_environment:

            $value = $payload['description'] ?? null;

            if ($value === null) {
                $properties['description'] = null;
                goto after_description;
            }

            $properties['description'] = $value;

            after_description:

            $value = $payload['creator'] ?? null;

            if ($value === null) {
                $properties['creator'] = null;
                goto after_creator;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'creator';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['creator'] = $value;

            after_creator:

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

            $value = $payload['statuses_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'statuses_url';
                goto after_statusesUrl;
            }

            $properties['statusesUrl'] = $value;

            after_statusesUrl:

            $value = $payload['repository_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'repository_url';
                goto after_repositoryUrl;
            }

            $properties['repositoryUrl'] = $value;

            after_repositoryUrl:

            $value = $payload['transient_environment'] ?? null;

            if ($value === null) {
                $properties['transientEnvironment'] = null;
                goto after_transientEnvironment;
            }

            $properties['transientEnvironment'] = $value;

            after_transientEnvironment:

            $value = $payload['production_environment'] ?? null;

            if ($value === null) {
                $properties['productionEnvironment'] = null;
                goto after_productionEnvironment;
            }

            $properties['productionEnvironment'] = $value;

            after_productionEnvironment:

            $value = $payload['performed_via_github_app'] ?? null;

            if ($value === null) {
                $properties['performedViaGithubApp'] = null;
                goto after_performedViaGithubApp;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'performedViaGithubApp';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Integration($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['performedViaGithubApp'] = $value;

            after_performedViaGithubApp:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Deployment', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(Deployment::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new Deployment(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Deployment', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser(array $payload): SimpleUser
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['name'] ?? null;

            if ($value === null) {
                $properties['name'] = null;
                goto after_name;
            }

            $properties['name'] = $value;

            after_name:

            $value = $payload['email'] ?? null;

            if ($value === null) {
                $properties['email'] = null;
                goto after_email;
            }

            $properties['email'] = $value;

            after_email:

            $value = $payload['login'] ?? null;

            if ($value === null) {
                $missingFields[] = 'login';
                goto after_login;
            }

            $properties['login'] = $value;

            after_login:

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

            $value = $payload['avatar_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'avatar_url';
                goto after_avatarUrl;
            }

            $properties['avatarUrl'] = $value;

            after_avatarUrl:

            $value = $payload['gravatar_id'] ?? null;

            if ($value === null) {
                $properties['gravatarId'] = null;
                goto after_gravatarId;
            }

            $properties['gravatarId'] = $value;

            after_gravatarId:

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

            $value = $payload['followers_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'followers_url';
                goto after_followersUrl;
            }

            $properties['followersUrl'] = $value;

            after_followersUrl:

            $value = $payload['following_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'following_url';
                goto after_followingUrl;
            }

            $properties['followingUrl'] = $value;

            after_followingUrl:

            $value = $payload['gists_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'gists_url';
                goto after_gistsUrl;
            }

            $properties['gistsUrl'] = $value;

            after_gistsUrl:

            $value = $payload['starred_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'starred_url';
                goto after_starredUrl;
            }

            $properties['starredUrl'] = $value;

            after_starredUrl:

            $value = $payload['subscriptions_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'subscriptions_url';
                goto after_subscriptionsUrl;
            }

            $properties['subscriptionsUrl'] = $value;

            after_subscriptionsUrl:

            $value = $payload['organizations_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'organizations_url';
                goto after_organizationsUrl;
            }

            $properties['organizationsUrl'] = $value;

            after_organizationsUrl:

            $value = $payload['repos_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'repos_url';
                goto after_reposUrl;
            }

            $properties['reposUrl'] = $value;

            after_reposUrl:

            $value = $payload['events_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'events_url';
                goto after_eventsUrl;
            }

            $properties['eventsUrl'] = $value;

            after_eventsUrl:

            $value = $payload['received_events_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'received_events_url';
                goto after_receivedEventsUrl;
            }

            $properties['receivedEventsUrl'] = $value;

            after_receivedEventsUrl:

            $value = $payload['type'] ?? null;

            if ($value === null) {
                $missingFields[] = 'type';
                goto after_type;
            }

            $properties['type'] = $value;

            after_type:

            $value = $payload['site_admin'] ?? null;

            if ($value === null) {
                $missingFields[] = 'site_admin';
                goto after_siteAdmin;
            }

            $properties['siteAdmin'] = $value;

            after_siteAdmin:

            $value = $payload['starred_at'] ?? null;

            if ($value === null) {
                $properties['starredAt'] = null;
                goto after_starredAt;
            }

            $properties['starredAt'] = $value;

            after_starredAt:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\SimpleUser', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(SimpleUser::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new SimpleUser(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\SimpleUser', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Integration(array $payload): Integration
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

            $value = $payload['slug'] ?? null;

            if ($value === null) {
                $properties['slug'] = null;
                goto after_slug;
            }

            $properties['slug'] = $value;

            after_slug:

            $value = $payload['node_id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'node_id';
                goto after_nodeId;
            }

            $properties['nodeId'] = $value;

            after_nodeId:

            $value = $payload['client_id'] ?? null;

            if ($value === null) {
                $properties['clientId'] = null;
                goto after_clientId;
            }

            $properties['clientId'] = $value;

            after_clientId:

            $value = $payload['owner'] ?? null;

            if ($value === null) {
                $properties['owner'] = null;
                goto after_owner;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'owner';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['owner'] = $value;

            after_owner:

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

            $value = $payload['external_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'external_url';
                goto after_externalUrl;
            }

            $properties['externalUrl'] = $value;

            after_externalUrl:

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

            $value = $payload['permissions'] ?? null;

            if ($value === null) {
                $missingFields[] = 'permissions';
                goto after_permissions;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'permissions';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Integration⚡️Permissions($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['permissions'] = $value;

            after_permissions:

            $value = $payload['events'] ?? null;

            if ($value === null) {
                $missingFields[] = 'events';
                goto after_events;
            }

            $properties['events'] = $value;

            after_events:

            $value = $payload['installations_count'] ?? null;

            if ($value === null) {
                $properties['installationsCount'] = null;
                goto after_installationsCount;
            }

            $properties['installationsCount'] = $value;

            after_installationsCount:

            $value = $payload['client_secret'] ?? null;

            if ($value === null) {
                $properties['clientSecret'] = null;
                goto after_clientSecret;
            }

            $properties['clientSecret'] = $value;

            after_clientSecret:

            $value = $payload['webhook_secret'] ?? null;

            if ($value === null) {
                $properties['webhookSecret'] = null;
                goto after_webhookSecret;
            }

            $properties['webhookSecret'] = $value;

            after_webhookSecret:

            $value = $payload['pem'] ?? null;

            if ($value === null) {
                $properties['pem'] = null;
                goto after_pem;
            }

            $properties['pem'] = $value;

            after_pem:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Integration', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(Integration::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new Integration(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Integration', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Integration⚡️Permissions(array $payload): Permissions
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['issues'] ?? null;

            if ($value === null) {
                $properties['issues'] = null;
                goto after_issues;
            }

            $properties['issues'] = $value;

            after_issues:

            $value = $payload['checks'] ?? null;

            if ($value === null) {
                $properties['checks'] = null;
                goto after_checks;
            }

            $properties['checks'] = $value;

            after_checks:

            $value = $payload['metadata'] ?? null;

            if ($value === null) {
                $properties['metadata'] = null;
                goto after_metadata;
            }

            $properties['metadata'] = $value;

            after_metadata:

            $value = $payload['contents'] ?? null;

            if ($value === null) {
                $properties['contents'] = null;
                goto after_contents;
            }

            $properties['contents'] = $value;

            after_contents:

            $value = $payload['deployments'] ?? null;

            if ($value === null) {
                $properties['deployments'] = null;
                goto after_deployments;
            }

            $properties['deployments'] = $value;

            after_deployments:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Integration\Permissions', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(Permissions::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new Permissions(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Integration\Permissions', $exception, stack: $this->hydrationStack);
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

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ValidationErrorSimple(array $payload): ValidationErrorSimple
    {
        $properties    = [];
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
                goto after_documentationUrl;
            }

            $properties['documentationUrl'] = $value;

            after_documentationUrl:

            $value = $payload['errors'] ?? null;

            if ($value === null) {
                $properties['errors'] = null;
                goto after_errors;
            }

            $properties['errors'] = $value;

            after_errors:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ValidationErrorSimple', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(ValidationErrorSimple::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new ValidationErrorSimple(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ValidationErrorSimple', $exception, stack: $this->hydrationStack);
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
                'ApiClients\Client\GitHub\Schema\Deployment' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Deployment($object),
                'ApiClients\Client\GitHub\Schema\SimpleUser' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($object),
                'ApiClients\Client\GitHub\Schema\Integration' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Integration($object),
                'ApiClients\Client\GitHub\Schema\Integration\Permissions' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Integration⚡️Permissions($object),
                'ApiClients\Client\GitHub\Schema\BasicError' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BasicError($object),
                'ApiClients\Client\GitHub\Schema\ValidationErrorSimple' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ValidationErrorSimple($object),
                default => throw new LogicException("No serialization defined for $className"),
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

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Deployment(mixed $object): mixed
    {
        assert($object instanceof Deployment);
        $result = [];

        $url                             = $object->url;
        after_url:        $result['url'] = $url;

        $id                            = $object->id;
        after_id:        $result['id'] = $id;

        $nodeId                                 = $object->nodeId;
        after_nodeId:        $result['node_id'] = $nodeId;

        $sha                             = $object->sha;
        after_sha:        $result['sha'] = $sha;

        $ref                             = $object->ref;
        after_ref:        $result['ref'] = $ref;

        $task                              = $object->task;
        after_task:        $result['task'] = $task;

        $payload = $object->payload;
        if (is_object($payload)) {
            $payload = $this->serializeObject($payload);
        }

        after_payload:        $result['payload'] = $payload;

        $originalEnvironment = $object->originalEnvironment;

        if ($originalEnvironment === null) {
            goto after_originalEnvironment;
        }

        after_originalEnvironment:        $result['original_environment'] = $originalEnvironment;

        $environment                                     = $object->environment;
        after_environment:        $result['environment'] = $environment;

        $description = $object->description;

        if ($description === null) {
            goto after_description;
        }

        after_description:        $result['description'] = $description;

        $creator = $object->creator;

        if ($creator === null) {
            goto after_creator;
        }

        $creator                                 = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($creator);
        after_creator:        $result['creator'] = $creator;

        $createdAt                                    = $object->createdAt;
        after_createdAt:        $result['created_at'] = $createdAt;

        $updatedAt                                    = $object->updatedAt;
        after_updatedAt:        $result['updated_at'] = $updatedAt;

        $statusesUrl                                      = $object->statusesUrl;
        after_statusesUrl:        $result['statuses_url'] = $statusesUrl;

        $repositoryUrl                                        = $object->repositoryUrl;
        after_repositoryUrl:        $result['repository_url'] = $repositoryUrl;

        $transientEnvironment = $object->transientEnvironment;

        if ($transientEnvironment === null) {
            goto after_transientEnvironment;
        }

        after_transientEnvironment:        $result['transient_environment'] = $transientEnvironment;

        $productionEnvironment = $object->productionEnvironment;

        if ($productionEnvironment === null) {
            goto after_productionEnvironment;
        }

        after_productionEnvironment:        $result['production_environment'] = $productionEnvironment;

        $performedViaGithubApp = $object->performedViaGithubApp;

        if ($performedViaGithubApp === null) {
            goto after_performedViaGithubApp;
        }

        $performedViaGithubApp                                                  = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Integration($performedViaGithubApp);
        after_performedViaGithubApp:        $result['performed_via_github_app'] = $performedViaGithubApp;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser(mixed $object): mixed
    {
        assert($object instanceof SimpleUser);
        $result = [];

        $name = $object->name;

        if ($name === null) {
            goto after_name;
        }

        after_name:        $result['name'] = $name;

        $email = $object->email;

        if ($email === null) {
            goto after_email;
        }

        after_email:        $result['email'] = $email;

        $login                               = $object->login;
        after_login:        $result['login'] = $login;

        $id                            = $object->id;
        after_id:        $result['id'] = $id;

        $nodeId                                 = $object->nodeId;
        after_nodeId:        $result['node_id'] = $nodeId;

        $avatarUrl                                    = $object->avatarUrl;
        after_avatarUrl:        $result['avatar_url'] = $avatarUrl;

        $gravatarId = $object->gravatarId;

        if ($gravatarId === null) {
            goto after_gravatarId;
        }

        after_gravatarId:        $result['gravatar_id'] = $gravatarId;

        $url                             = $object->url;
        after_url:        $result['url'] = $url;

        $htmlUrl                                  = $object->htmlUrl;
        after_htmlUrl:        $result['html_url'] = $htmlUrl;

        $followersUrl                                       = $object->followersUrl;
        after_followersUrl:        $result['followers_url'] = $followersUrl;

        $followingUrl                                       = $object->followingUrl;
        after_followingUrl:        $result['following_url'] = $followingUrl;

        $gistsUrl                                   = $object->gistsUrl;
        after_gistsUrl:        $result['gists_url'] = $gistsUrl;

        $starredUrl                                     = $object->starredUrl;
        after_starredUrl:        $result['starred_url'] = $starredUrl;

        $subscriptionsUrl                                           = $object->subscriptionsUrl;
        after_subscriptionsUrl:        $result['subscriptions_url'] = $subscriptionsUrl;

        $organizationsUrl                                           = $object->organizationsUrl;
        after_organizationsUrl:        $result['organizations_url'] = $organizationsUrl;

        $reposUrl                                   = $object->reposUrl;
        after_reposUrl:        $result['repos_url'] = $reposUrl;

        $eventsUrl                                    = $object->eventsUrl;
        after_eventsUrl:        $result['events_url'] = $eventsUrl;

        $receivedEventsUrl                                             = $object->receivedEventsUrl;
        after_receivedEventsUrl:        $result['received_events_url'] = $receivedEventsUrl;

        $type                              = $object->type;
        after_type:        $result['type'] = $type;

        $siteAdmin                                    = $object->siteAdmin;
        after_siteAdmin:        $result['site_admin'] = $siteAdmin;

        $starredAt = $object->starredAt;

        if ($starredAt === null) {
            goto after_starredAt;
        }

        after_starredAt:        $result['starred_at'] = $starredAt;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Integration(mixed $object): mixed
    {
        assert($object instanceof Integration);
        $result = [];

        $id                            = $object->id;
        after_id:        $result['id'] = $id;

        $slug = $object->slug;

        if ($slug === null) {
            goto after_slug;
        }

        after_slug:        $result['slug'] = $slug;

        $nodeId                                 = $object->nodeId;
        after_nodeId:        $result['node_id'] = $nodeId;

        $clientId = $object->clientId;

        if ($clientId === null) {
            goto after_clientId;
        }

        after_clientId:        $result['client_id'] = $clientId;

        $owner = $object->owner;

        if ($owner === null) {
            goto after_owner;
        }

        $owner                               = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($owner);
        after_owner:        $result['owner'] = $owner;

        $name                              = $object->name;
        after_name:        $result['name'] = $name;

        $description = $object->description;

        if ($description === null) {
            goto after_description;
        }

        after_description:        $result['description'] = $description;

        $externalUrl                                      = $object->externalUrl;
        after_externalUrl:        $result['external_url'] = $externalUrl;

        $htmlUrl                                  = $object->htmlUrl;
        after_htmlUrl:        $result['html_url'] = $htmlUrl;

        $createdAt                                    = $object->createdAt;
        after_createdAt:        $result['created_at'] = $createdAt;

        $updatedAt                                    = $object->updatedAt;
        after_updatedAt:        $result['updated_at'] = $updatedAt;

        $permissions                                     = $object->permissions;
        $permissions                                     = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Integration⚡️Permissions($permissions);
        after_permissions:        $result['permissions'] = $permissions;

        $events = $object->events;
        static $eventsSerializer0;

        if ($eventsSerializer0 === null) {
            $eventsSerializer0 = new SerializeArrayItems(...[]);
        }

        $events                                = $eventsSerializer0->serialize($events, $this);
        after_events:        $result['events'] = $events;

        $installationsCount = $object->installationsCount;

        if ($installationsCount === null) {
            goto after_installationsCount;
        }

        after_installationsCount:        $result['installations_count'] = $installationsCount;

        $clientSecret = $object->clientSecret;

        if ($clientSecret === null) {
            goto after_clientSecret;
        }

        after_clientSecret:        $result['client_secret'] = $clientSecret;

        $webhookSecret = $object->webhookSecret;

        if ($webhookSecret === null) {
            goto after_webhookSecret;
        }

        after_webhookSecret:        $result['webhook_secret'] = $webhookSecret;

        $pem = $object->pem;

        if ($pem === null) {
            goto after_pem;
        }

        after_pem:        $result['pem'] = $pem;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Integration⚡️Permissions(mixed $object): mixed
    {
        assert($object instanceof Permissions);
        $result = [];

        $issues = $object->issues;

        if ($issues === null) {
            goto after_issues;
        }

        after_issues:        $result['issues'] = $issues;

        $checks = $object->checks;

        if ($checks === null) {
            goto after_checks;
        }

        after_checks:        $result['checks'] = $checks;

        $metadata = $object->metadata;

        if ($metadata === null) {
            goto after_metadata;
        }

        after_metadata:        $result['metadata'] = $metadata;

        $contents = $object->contents;

        if ($contents === null) {
            goto after_contents;
        }

        after_contents:        $result['contents'] = $contents;

        $deployments = $object->deployments;

        if ($deployments === null) {
            goto after_deployments;
        }

        after_deployments:        $result['deployments'] = $deployments;

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

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ValidationErrorSimple(mixed $object): mixed
    {
        assert($object instanceof ValidationErrorSimple);
        $result = [];

        $message                                 = $object->message;
        after_message:        $result['message'] = $message;

        $documentationUrl                                           = $object->documentationUrl;
        after_documentationUrl:        $result['documentation_url'] = $documentationUrl;

        $errors = $object->errors;

        if ($errors === null) {
            goto after_errors;
        }

        static $errorsSerializer0;

        if ($errorsSerializer0 === null) {
            $errorsSerializer0 = new SerializeArrayItems(...[]);
        }

        $errors                                = $errorsSerializer0->serialize($errors, $this);
        after_errors:        $result['errors'] = $errors;

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
