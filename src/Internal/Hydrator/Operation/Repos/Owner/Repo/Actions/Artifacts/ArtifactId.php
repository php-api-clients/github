<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Artifacts;

use ApiClients\Client\GitHub\Schema\Artifact;
use ApiClients\Client\GitHub\Schema\Artifact\WorkflowRun;
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

class ArtifactId implements ObjectMapper
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
            'ApiClients\Client\GitHub\Schema\Artifact' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Artifact($payload),
                'ApiClients\Client\GitHub\Schema\Artifact\WorkflowRun' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Artifact⚡️WorkflowRun($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Artifact(array $payload): Artifact
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

            $value = $payload['size_in_bytes'] ?? null;

            if ($value === null) {
                $missingFields[] = 'size_in_bytes';
                goto after_sizeInBytes;
            }

            $properties['sizeInBytes'] = $value;

            after_sizeInBytes:

            $value = $payload['url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'url';
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

            $value = $payload['archive_download_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'archive_download_url';
                goto after_archiveDownloadUrl;
            }

            $properties['archiveDownloadUrl'] = $value;

            after_archiveDownloadUrl:

            $value = $payload['expired'] ?? null;

            if ($value === null) {
                $missingFields[] = 'expired';
                goto after_expired;
            }

            $properties['expired'] = $value;

            after_expired:

            $value = $payload['created_at'] ?? null;

            if ($value === null) {
                $properties['createdAt'] = null;
                goto after_createdAt;
            }

            $properties['createdAt'] = $value;

            after_createdAt:

            $value = $payload['expires_at'] ?? null;

            if ($value === null) {
                $properties['expiresAt'] = null;
                goto after_expiresAt;
            }

            $properties['expiresAt'] = $value;

            after_expiresAt:

            $value = $payload['updated_at'] ?? null;

            if ($value === null) {
                $properties['updatedAt'] = null;
                goto after_updatedAt;
            }

            $properties['updatedAt'] = $value;

            after_updatedAt:

            $value = $payload['workflow_run'] ?? null;

            if ($value === null) {
                $properties['workflowRun'] = null;
                goto after_workflowRun;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'workflowRun';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Artifact⚡️WorkflowRun($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['workflowRun'] = $value;

            after_workflowRun:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Artifact', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(Artifact::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new Artifact(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Artifact', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Artifact⚡️WorkflowRun(array $payload): WorkflowRun
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['id'] ?? null;

            if ($value === null) {
                $properties['id'] = null;
                goto after_id;
            }

            $properties['id'] = $value;

            after_id:

            $value = $payload['repository_id'] ?? null;

            if ($value === null) {
                $properties['repositoryId'] = null;
                goto after_repositoryId;
            }

            $properties['repositoryId'] = $value;

            after_repositoryId:

            $value = $payload['head_repository_id'] ?? null;

            if ($value === null) {
                $properties['headRepositoryId'] = null;
                goto after_headRepositoryId;
            }

            $properties['headRepositoryId'] = $value;

            after_headRepositoryId:

            $value = $payload['head_branch'] ?? null;

            if ($value === null) {
                $properties['headBranch'] = null;
                goto after_headBranch;
            }

            $properties['headBranch'] = $value;

            after_headBranch:

            $value = $payload['head_sha'] ?? null;

            if ($value === null) {
                $properties['headSha'] = null;
                goto after_headSha;
            }

            $properties['headSha'] = $value;

            after_headSha:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Artifact\WorkflowRun', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(WorkflowRun::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new WorkflowRun(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Artifact\WorkflowRun', $exception, stack: $this->hydrationStack);
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
                'ApiClients\Client\GitHub\Schema\Artifact' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Artifact($object),
                'ApiClients\Client\GitHub\Schema\Artifact\WorkflowRun' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Artifact⚡️WorkflowRun($object),
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

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Artifact(mixed $object): mixed
    {
        assert($object instanceof Artifact);
        $result = [];

        $id                            = $object->id;
        after_id:        $result['id'] = $id;

        $nodeId                                 = $object->nodeId;
        after_nodeId:        $result['node_id'] = $nodeId;

        $name                              = $object->name;
        after_name:        $result['name'] = $name;

        $sizeInBytes                                       = $object->sizeInBytes;
        after_sizeInBytes:        $result['size_in_bytes'] = $sizeInBytes;

        $url                             = $object->url;
        after_url:        $result['url'] = $url;

        $archiveDownloadUrl                                              = $object->archiveDownloadUrl;
        after_archiveDownloadUrl:        $result['archive_download_url'] = $archiveDownloadUrl;

        $expired                                 = $object->expired;
        after_expired:        $result['expired'] = $expired;

        $createdAt = $object->createdAt;

        if ($createdAt === null) {
            goto after_createdAt;
        }

        after_createdAt:        $result['created_at'] = $createdAt;

        $expiresAt = $object->expiresAt;

        if ($expiresAt === null) {
            goto after_expiresAt;
        }

        after_expiresAt:        $result['expires_at'] = $expiresAt;

        $updatedAt = $object->updatedAt;

        if ($updatedAt === null) {
            goto after_updatedAt;
        }

        after_updatedAt:        $result['updated_at'] = $updatedAt;

        $workflowRun = $object->workflowRun;

        if ($workflowRun === null) {
            goto after_workflowRun;
        }

        $workflowRun                                      = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Artifact⚡️WorkflowRun($workflowRun);
        after_workflowRun:        $result['workflow_run'] = $workflowRun;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Artifact⚡️WorkflowRun(mixed $object): mixed
    {
        assert($object instanceof WorkflowRun);
        $result = [];

        $id = $object->id;

        if ($id === null) {
            goto after_id;
        }

        after_id:        $result['id'] = $id;

        $repositoryId = $object->repositoryId;

        if ($repositoryId === null) {
            goto after_repositoryId;
        }

        after_repositoryId:        $result['repository_id'] = $repositoryId;

        $headRepositoryId = $object->headRepositoryId;

        if ($headRepositoryId === null) {
            goto after_headRepositoryId;
        }

        after_headRepositoryId:        $result['head_repository_id'] = $headRepositoryId;

        $headBranch = $object->headBranch;

        if ($headBranch === null) {
            goto after_headBranch;
        }

        after_headBranch:        $result['head_branch'] = $headBranch;

        $headSha = $object->headSha;

        if ($headSha === null) {
            goto after_headSha;
        }

        after_headSha:        $result['head_sha'] = $headSha;

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
