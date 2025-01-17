<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\CheckRuns;

use ApiClients\Client\GitHub\Internal\Attribute\CastUnionToType\Schema\Integration\Owner;
use ApiClients\Client\GitHub\Schema\CheckRun;
use ApiClients\Client\GitHub\Schema\CheckRun\CheckSuite;
use ApiClients\Client\GitHub\Schema\CheckRun\Output;
use ApiClients\Client\GitHub\Schema\DeploymentSimple;
use ApiClients\Client\GitHub\Schema\Integration;
use ApiClients\Client\GitHub\Schema\Integration\Permissions;
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

class CheckRunId implements ObjectMapper
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
            'ApiClients\Client\GitHub\Schema\CheckRun' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CheckRun($payload),
                'ApiClients\Client\GitHub\Schema\CheckRun\Output' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CheckRun⚡️Output($payload),
                'ApiClients\Client\GitHub\Schema\CheckRun\CheckSuite' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CheckRun⚡️CheckSuite($payload),
                'ApiClients\Client\GitHub\Schema\Integration' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Integration($payload),
                'ApiClients\Client\GitHub\Schema\Integration\Permissions' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Integration⚡️Permissions($payload),
                'ApiClients\Client\GitHub\Schema\DeploymentSimple' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️DeploymentSimple($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CheckRun(array $payload): CheckRun
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

            $value = $payload['head_sha'] ?? null;

            if ($value === null) {
                $missingFields[] = 'head_sha';
                goto after_headSha;
            }

            $properties['headSha'] = $value;

            after_headSha:

            $value = $payload['node_id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'node_id';
                goto after_nodeId;
            }

            $properties['nodeId'] = $value;

            after_nodeId:

            $value = $payload['external_id'] ?? null;

            if ($value === null) {
                $properties['externalId'] = null;
                goto after_externalId;
            }

            $properties['externalId'] = $value;

            after_externalId:

            $value = $payload['url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'url';
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

            $value = $payload['html_url'] ?? null;

            if ($value === null) {
                $properties['htmlUrl'] = null;
                goto after_htmlUrl;
            }

            $properties['htmlUrl'] = $value;

            after_htmlUrl:

            $value = $payload['details_url'] ?? null;

            if ($value === null) {
                $properties['detailsUrl'] = null;
                goto after_detailsUrl;
            }

            $properties['detailsUrl'] = $value;

            after_detailsUrl:

            $value = $payload['status'] ?? null;

            if ($value === null) {
                $missingFields[] = 'status';
                goto after_status;
            }

            $properties['status'] = $value;

            after_status:

            $value = $payload['conclusion'] ?? null;

            if ($value === null) {
                $properties['conclusion'] = null;
                goto after_conclusion;
            }

            $properties['conclusion'] = $value;

            after_conclusion:

            $value = $payload['started_at'] ?? null;

            if ($value === null) {
                $properties['startedAt'] = null;
                goto after_startedAt;
            }

            $properties['startedAt'] = $value;

            after_startedAt:

            $value = $payload['completed_at'] ?? null;

            if ($value === null) {
                $properties['completedAt'] = null;
                goto after_completedAt;
            }

            $properties['completedAt'] = $value;

            after_completedAt:

            $value = $payload['output'] ?? null;

            if ($value === null) {
                $missingFields[] = 'output';
                goto after_output;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'output';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CheckRun⚡️Output($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['output'] = $value;

            after_output:

            $value = $payload['name'] ?? null;

            if ($value === null) {
                $missingFields[] = 'name';
                goto after_name;
            }

            $properties['name'] = $value;

            after_name:

            $value = $payload['check_suite'] ?? null;

            if ($value === null) {
                $properties['checkSuite'] = null;
                goto after_checkSuite;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'checkSuite';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CheckRun⚡️CheckSuite($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['checkSuite'] = $value;

            after_checkSuite:

            $value = $payload['app'] ?? null;

            if ($value === null) {
                $properties['app'] = null;
                goto after_app;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'app';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Integration($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['app'] = $value;

            after_app:

            $value = $payload['pull_requests'] ?? null;

            if ($value === null) {
                $missingFields[] = 'pull_requests';
                goto after_pullRequests;
            }

            $properties['pullRequests'] = $value;

            after_pullRequests:

            $value = $payload['deployment'] ?? null;

            if ($value === null) {
                $properties['deployment'] = null;
                goto after_deployment;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'deployment';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️DeploymentSimple($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['deployment'] = $value;

            after_deployment:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\CheckRun', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(CheckRun::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new CheckRun(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\CheckRun', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CheckRun⚡️Output(array $payload): Output
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['title'] ?? null;

            if ($value === null) {
                $properties['title'] = null;
                goto after_title;
            }

            $properties['title'] = $value;

            after_title:

            $value = $payload['summary'] ?? null;

            if ($value === null) {
                $properties['summary'] = null;
                goto after_summary;
            }

            $properties['summary'] = $value;

            after_summary:

            $value = $payload['text'] ?? null;

            if ($value === null) {
                $properties['text'] = null;
                goto after_text;
            }

            $properties['text'] = $value;

            after_text:

            $value = $payload['annotations_count'] ?? null;

            if ($value === null) {
                $missingFields[] = 'annotations_count';
                goto after_annotationsCount;
            }

            $properties['annotationsCount'] = $value;

            after_annotationsCount:

            $value = $payload['annotations_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'annotations_url';
                goto after_annotationsUrl;
            }

            $properties['annotationsUrl'] = $value;

            after_annotationsUrl:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\CheckRun\Output', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(Output::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new Output(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\CheckRun\Output', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CheckRun⚡️CheckSuite(array $payload): CheckSuite
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
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\CheckRun\CheckSuite', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(CheckSuite::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new CheckSuite(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\CheckRun\CheckSuite', $exception, stack: $this->hydrationStack);
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
                $missingFields[] = 'owner';
                goto after_owner;
            }

            static $ownerCaster1;

            if ($ownerCaster1 === null) {
                $ownerCaster1 = new Owner(...[]);
            }

            $value = $ownerCaster1->cast($value, $this);

            if ($value === null) {
                                $missingFields[] = 'owner';
                goto after_owner;
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

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️DeploymentSimple(array $payload): DeploymentSimple
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

            $value = $payload['task'] ?? null;

            if ($value === null) {
                $missingFields[] = 'task';
                goto after_task;
            }

            $properties['task'] = $value;

            after_task:

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
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\DeploymentSimple', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(DeploymentSimple::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new DeploymentSimple(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\DeploymentSimple', $exception, stack: $this->hydrationStack);
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
                'ApiClients\Client\GitHub\Schema\CheckRun' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CheckRun($object),
                'ApiClients\Client\GitHub\Schema\CheckRun\Output' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CheckRun⚡️Output($object),
                'ApiClients\Client\GitHub\Schema\CheckRun\CheckSuite' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CheckRun⚡️CheckSuite($object),
                'ApiClients\Client\GitHub\Schema\Integration' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Integration($object),
                'ApiClients\Client\GitHub\Schema\Integration\Permissions' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Integration⚡️Permissions($object),
                'ApiClients\Client\GitHub\Schema\DeploymentSimple' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️DeploymentSimple($object),
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

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CheckRun(mixed $object): mixed
    {
        assert($object instanceof CheckRun);
        $result = [];

        $id                            = $object->id;
        after_id:        $result['id'] = $id;

        $headSha                                  = $object->headSha;
        after_headSha:        $result['head_sha'] = $headSha;

        $nodeId                                 = $object->nodeId;
        after_nodeId:        $result['node_id'] = $nodeId;

        $externalId = $object->externalId;

        if ($externalId === null) {
            goto after_externalId;
        }

        after_externalId:        $result['external_id'] = $externalId;

        $url                             = $object->url;
        after_url:        $result['url'] = $url;

        $htmlUrl = $object->htmlUrl;

        if ($htmlUrl === null) {
            goto after_htmlUrl;
        }

        after_htmlUrl:        $result['html_url'] = $htmlUrl;

        $detailsUrl = $object->detailsUrl;

        if ($detailsUrl === null) {
            goto after_detailsUrl;
        }

        after_detailsUrl:        $result['details_url'] = $detailsUrl;

        $status                                = $object->status;
        after_status:        $result['status'] = $status;

        $conclusion = $object->conclusion;

        if ($conclusion === null) {
            goto after_conclusion;
        }

        after_conclusion:        $result['conclusion'] = $conclusion;

        $startedAt = $object->startedAt;

        if ($startedAt === null) {
            goto after_startedAt;
        }

        after_startedAt:        $result['started_at'] = $startedAt;

        $completedAt = $object->completedAt;

        if ($completedAt === null) {
            goto after_completedAt;
        }

        after_completedAt:        $result['completed_at'] = $completedAt;

        $output                                = $object->output;
        $output                                = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CheckRun⚡️Output($output);
        after_output:        $result['output'] = $output;

        $name                              = $object->name;
        after_name:        $result['name'] = $name;

        $checkSuite = $object->checkSuite;

        if ($checkSuite === null) {
            goto after_checkSuite;
        }

        $checkSuite                                     = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CheckRun⚡️CheckSuite($checkSuite);
        after_checkSuite:        $result['check_suite'] = $checkSuite;

        $app = $object->app;

        if ($app === null) {
            goto after_app;
        }

        $app                             = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Integration($app);
        after_app:        $result['app'] = $app;

        $pullRequests = $object->pullRequests;
        static $pullRequestsSerializer0;

        if ($pullRequestsSerializer0 === null) {
            $pullRequestsSerializer0 = new SerializeArrayItems(...[]);
        }

        $pullRequests                                       = $pullRequestsSerializer0->serialize($pullRequests, $this);
        after_pullRequests:        $result['pull_requests'] = $pullRequests;

        $deployment = $object->deployment;

        if ($deployment === null) {
            goto after_deployment;
        }

        $deployment                                    = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️DeploymentSimple($deployment);
        after_deployment:        $result['deployment'] = $deployment;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CheckRun⚡️Output(mixed $object): mixed
    {
        assert($object instanceof Output);
        $result = [];

        $title = $object->title;

        if ($title === null) {
            goto after_title;
        }

        after_title:        $result['title'] = $title;

        $summary = $object->summary;

        if ($summary === null) {
            goto after_summary;
        }

        after_summary:        $result['summary'] = $summary;

        $text = $object->text;

        if ($text === null) {
            goto after_text;
        }

        after_text:        $result['text'] = $text;

        $annotationsCount                                           = $object->annotationsCount;
        after_annotationsCount:        $result['annotations_count'] = $annotationsCount;

        $annotationsUrl                                         = $object->annotationsUrl;
        after_annotationsUrl:        $result['annotations_url'] = $annotationsUrl;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CheckRun⚡️CheckSuite(mixed $object): mixed
    {
        assert($object instanceof CheckSuite);
        $result = [];

        $id                            = $object->id;
        after_id:        $result['id'] = $id;

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
        $owner = match ($owner::class) {
                        'ApiClients\Client\GitHub\Schema\SimpleUser' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($owner),
            'ApiClients\Client\GitHub\Schema\Enterprise' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Enterprise($owner),
        };
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

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️DeploymentSimple(mixed $object): mixed
    {
        assert($object instanceof DeploymentSimple);
        $result = [];

        $url                             = $object->url;
        after_url:        $result['url'] = $url;

        $id                            = $object->id;
        after_id:        $result['id'] = $id;

        $nodeId                                 = $object->nodeId;
        after_nodeId:        $result['node_id'] = $nodeId;

        $task                              = $object->task;
        after_task:        $result['task'] = $task;

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
