<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class Artifacts implements ObjectMapper
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
            'ApiClients\Client\GitHub\Schema\Operation\Actions\ListArtifactsForRepo\Response\Applicationjson\H200' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Operation⚡️Actions⚡️ListArtifactsForRepo⚡️Response⚡️Applicationjson⚡️H200($payload),
                'ApiClients\Client\GitHub\Schema\Artifact' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Artifact($payload),
                'ApiClients\Client\GitHub\Schema\Artifact\WorkflowRun' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Artifact⚡️WorkflowRun($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Operation⚡️Actions⚡️ListArtifactsForRepo⚡️Response⚡️Applicationjson⚡️H200(array $payload): \ApiClients\Client\GitHub\Schema\Operation\Actions\ListArtifactsForRepo\Response\Applicationjson\H200
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['total_count'] ?? null;

            if ($value === null) {
                $missingFields[] = 'total_count';
                goto after_totalCount;
            }

            $properties['totalCount'] = $value;

            after_totalCount:

            $value = $payload['artifacts'] ?? null;

            if ($value === null) {
                $missingFields[] = 'artifacts';
                goto after_artifacts;
            }

            static $artifactsCaster1;

            if ($artifactsCaster1 === null) {
                $artifactsCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\Artifact',
));
            }

            $value = $artifactsCaster1->cast($value, $this);

            $properties['artifacts'] = $value;

            after_artifacts:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Operation\Actions\ListArtifactsForRepo\Response\Applicationjson\H200', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\Operation\Actions\ListArtifactsForRepo\Response\Applicationjson\H200::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\Operation\Actions\ListArtifactsForRepo\Response\Applicationjson\H200(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Operation\Actions\ListArtifactsForRepo\Response\Applicationjson\H200', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Artifact(array $payload): \ApiClients\Client\GitHub\Schema\Artifact
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
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Artifact⚡️WorkflowRun($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['workflowRun'] = $value;

            after_workflowRun:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Artifact', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\Artifact::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\Artifact(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Artifact', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Artifact⚡️WorkflowRun(array $payload): \ApiClients\Client\GitHub\Schema\Artifact\WorkflowRun
    {
        $properties = []; 
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

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Artifact\WorkflowRun', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\Artifact\WorkflowRun::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\Artifact\WorkflowRun(...$properties);
        } catch (\Throwable $exception) {
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
            'ApiClients\Client\GitHub\Schema\Operation\Actions\ListArtifactsForRepo\Response\Applicationjson\H200' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Operation⚡️Actions⚡️ListArtifactsForRepo⚡️Response⚡️Applicationjson⚡️H200($object),
            'ApiClients\Client\GitHub\Schema\Artifact' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Artifact($object),
            'ApiClients\Client\GitHub\Schema\Artifact\WorkflowRun' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Artifact⚡️WorkflowRun($object),
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


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Operation⚡️Actions⚡️ListArtifactsForRepo⚡️Response⚡️Applicationjson⚡️H200(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\Operation\Actions\ListArtifactsForRepo\Response\Applicationjson\H200);
        $result = [];

        $totalCount = $object->totalCount;
        after_totalCount:        $result['total_count'] = $totalCount;

        
        $artifacts = $object->artifacts;
        static $artifactsSerializer0;

        if ($artifactsSerializer0 === null) {
            $artifactsSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\Artifact',
));
        }
        
        $artifacts = $artifactsSerializer0->serialize($artifacts, $this);
        after_artifacts:        $result['artifacts'] = $artifacts;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Artifact(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\Artifact);
        $result = [];

        $id = $object->id;
        after_id:        $result['id'] = $id;

        
        $nodeId = $object->nodeId;
        after_nodeId:        $result['node_id'] = $nodeId;

        
        $name = $object->name;
        after_name:        $result['name'] = $name;

        
        $sizeInBytes = $object->sizeInBytes;
        after_sizeInBytes:        $result['size_in_bytes'] = $sizeInBytes;

        
        $url = $object->url;
        after_url:        $result['url'] = $url;

        
        $archiveDownloadUrl = $object->archiveDownloadUrl;
        after_archiveDownloadUrl:        $result['archive_download_url'] = $archiveDownloadUrl;

        
        $expired = $object->expired;
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
        $workflowRun = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Artifact⚡️WorkflowRun($workflowRun);
        after_workflowRun:        $result['workflow_run'] = $workflowRun;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Artifact⚡️WorkflowRun(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\Artifact\WorkflowRun);
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
