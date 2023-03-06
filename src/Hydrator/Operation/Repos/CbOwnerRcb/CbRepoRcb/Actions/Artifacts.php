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
                    $properties['total_count'] = null;
                    goto after_total_count;
                }

                $properties['total_count'] = $value;
    
                after_total_count:

                $value = $payload['artifacts'] ?? null;
    
                if ($value === null) {
                    $properties['artifacts'] = null;
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
                    $properties['id'] = null;
                    goto after_id;
                }

                $properties['id'] = $value;
    
                after_id:

                $value = $payload['node_id'] ?? null;
    
                if ($value === null) {
                    $properties['node_id'] = null;
                    goto after_node_id;
                }

                $properties['node_id'] = $value;
    
                after_node_id:

                $value = $payload['name'] ?? null;
    
                if ($value === null) {
                    $properties['name'] = null;
                    goto after_name;
                }

                $properties['name'] = $value;
    
                after_name:

                $value = $payload['size_in_bytes'] ?? null;
    
                if ($value === null) {
                    $properties['size_in_bytes'] = null;
                    goto after_size_in_bytes;
                }

                $properties['size_in_bytes'] = $value;
    
                after_size_in_bytes:

                $value = $payload['url'] ?? null;
    
                if ($value === null) {
                    $properties['url'] = null;
                    goto after_url;
                }

                $properties['url'] = $value;
    
                after_url:

                $value = $payload['archive_download_url'] ?? null;
    
                if ($value === null) {
                    $properties['archive_download_url'] = null;
                    goto after_archive_download_url;
                }

                $properties['archive_download_url'] = $value;
    
                after_archive_download_url:

                $value = $payload['expired'] ?? null;
    
                if ($value === null) {
                    $properties['expired'] = null;
                    goto after_expired;
                }

                $properties['expired'] = $value;
    
                after_expired:

                $value = $payload['created_at'] ?? null;
    
                if ($value === null) {
                    $properties['created_at'] = null;
                    goto after_created_at;
                }

                $properties['created_at'] = $value;
    
                after_created_at:

                $value = $payload['expires_at'] ?? null;
    
                if ($value === null) {
                    $properties['expires_at'] = null;
                    goto after_expires_at;
                }

                $properties['expires_at'] = $value;
    
                after_expires_at:

                $value = $payload['updated_at'] ?? null;
    
                if ($value === null) {
                    $properties['updated_at'] = null;
                    goto after_updated_at;
                }

                $properties['updated_at'] = $value;
    
                after_updated_at:

                $value = $payload['workflow_run'] ?? null;
    
                if ($value === null) {
                    $properties['workflow_run'] = null;
                    goto after_workflow_run;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'workflow_run';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Artifact⚡️WorkflowRun($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['workflow_run'] = $value;
    
                after_workflow_run:

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
                    $properties['repository_id'] = null;
                    goto after_repository_id;
                }

                $properties['repository_id'] = $value;
    
                after_repository_id:

                $value = $payload['head_repository_id'] ?? null;
    
                if ($value === null) {
                    $properties['head_repository_id'] = null;
                    goto after_head_repository_id;
                }

                $properties['head_repository_id'] = $value;
    
                after_head_repository_id:

                $value = $payload['head_branch'] ?? null;
    
                if ($value === null) {
                    $properties['head_branch'] = null;
                    goto after_head_branch;
                }

                $properties['head_branch'] = $value;
    
                after_head_branch:

                $value = $payload['head_sha'] ?? null;
    
                if ($value === null) {
                    $properties['head_sha'] = null;
                    goto after_head_sha;
                }

                $properties['head_sha'] = $value;
    
                after_head_sha:

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
        
        $total_count = $object->total_count;

        if ($total_count === null) {
            goto after_total_count;
        }
        after_total_count:        $result['total_count'] = $total_count;

        
        $artifacts = $object->artifacts;

        if ($artifacts === null) {
            goto after_artifacts;
        }
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

        if ($id === null) {
            goto after_id;
        }
        after_id:        $result['id'] = $id;

        
        $node_id = $object->node_id;

        if ($node_id === null) {
            goto after_node_id;
        }
        after_node_id:        $result['node_id'] = $node_id;

        
        $name = $object->name;

        if ($name === null) {
            goto after_name;
        }
        after_name:        $result['name'] = $name;

        
        $size_in_bytes = $object->size_in_bytes;

        if ($size_in_bytes === null) {
            goto after_size_in_bytes;
        }
        after_size_in_bytes:        $result['size_in_bytes'] = $size_in_bytes;

        
        $url = $object->url;

        if ($url === null) {
            goto after_url;
        }
        after_url:        $result['url'] = $url;

        
        $archive_download_url = $object->archive_download_url;

        if ($archive_download_url === null) {
            goto after_archive_download_url;
        }
        after_archive_download_url:        $result['archive_download_url'] = $archive_download_url;

        
        $expired = $object->expired;

        if ($expired === null) {
            goto after_expired;
        }
        after_expired:        $result['expired'] = $expired;

        
        $created_at = $object->created_at;

        if ($created_at === null) {
            goto after_created_at;
        }
        after_created_at:        $result['created_at'] = $created_at;

        
        $expires_at = $object->expires_at;

        if ($expires_at === null) {
            goto after_expires_at;
        }
        after_expires_at:        $result['expires_at'] = $expires_at;

        
        $updated_at = $object->updated_at;

        if ($updated_at === null) {
            goto after_updated_at;
        }
        after_updated_at:        $result['updated_at'] = $updated_at;

        
        $workflow_run = $object->workflow_run;

        if ($workflow_run === null) {
            goto after_workflow_run;
        }
        $workflow_run = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Artifact⚡️WorkflowRun($workflow_run);
        after_workflow_run:        $result['workflow_run'] = $workflow_run;


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

        
        $repository_id = $object->repository_id;

        if ($repository_id === null) {
            goto after_repository_id;
        }
        after_repository_id:        $result['repository_id'] = $repository_id;

        
        $head_repository_id = $object->head_repository_id;

        if ($head_repository_id === null) {
            goto after_head_repository_id;
        }
        after_head_repository_id:        $result['head_repository_id'] = $head_repository_id;

        
        $head_branch = $object->head_branch;

        if ($head_branch === null) {
            goto after_head_branch;
        }
        after_head_branch:        $result['head_branch'] = $head_branch;

        
        $head_sha = $object->head_sha;

        if ($head_sha === null) {
            goto after_head_sha;
        }
        after_head_sha:        $result['head_sha'] = $head_sha;


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
