<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Hydrator\Operation\Repos\Owner\Repo\Actions\Jobs;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class JobId implements ObjectMapper
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
            'ApiClients\Client\GitHub\Schema\Job' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Job($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Job(array $payload): \ApiClients\Client\GitHub\Schema\Job
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

            $value = $payload['run_id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'run_id';
                goto after_runId;
            }

            $properties['runId'] = $value;

            after_runId:

            $value = $payload['run_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'run_url';
                goto after_runUrl;
            }

            $properties['runUrl'] = $value;

            after_runUrl:

            $value = $payload['run_attempt'] ?? null;

            if ($value === null) {
                $properties['runAttempt'] = null;
                goto after_runAttempt;
            }

            $properties['runAttempt'] = $value;

            after_runAttempt:

            $value = $payload['node_id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'node_id';
                goto after_nodeId;
            }

            $properties['nodeId'] = $value;

            after_nodeId:

            $value = $payload['head_sha'] ?? null;

            if ($value === null) {
                $missingFields[] = 'head_sha';
                goto after_headSha;
            }

            $properties['headSha'] = $value;

            after_headSha:

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

            $value = $payload['created_at'] ?? null;

            if ($value === null) {
                $missingFields[] = 'created_at';
                goto after_createdAt;
            }

            $properties['createdAt'] = $value;

            after_createdAt:

            $value = $payload['started_at'] ?? null;

            if ($value === null) {
                $missingFields[] = 'started_at';
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

            $value = $payload['name'] ?? null;

            if ($value === null) {
                $missingFields[] = 'name';
                goto after_name;
            }

            $properties['name'] = $value;

            after_name:

            $value = $payload['steps'] ?? null;

            if ($value === null) {
                $properties['steps'] = null;
                goto after_steps;
            }

            $properties['steps'] = $value;

            after_steps:

            $value = $payload['check_run_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'check_run_url';
                goto after_checkRunUrl;
            }

            $properties['checkRunUrl'] = $value;

            after_checkRunUrl:

            $value = $payload['labels'] ?? null;

            if ($value === null) {
                $missingFields[] = 'labels';
                goto after_labels;
            }

            $properties['labels'] = $value;

            after_labels:

            $value = $payload['runner_id'] ?? null;

            if ($value === null) {
                $properties['runnerId'] = null;
                goto after_runnerId;
            }

            $properties['runnerId'] = $value;

            after_runnerId:

            $value = $payload['runner_name'] ?? null;

            if ($value === null) {
                $properties['runnerName'] = null;
                goto after_runnerName;
            }

            $properties['runnerName'] = $value;

            after_runnerName:

            $value = $payload['runner_group_id'] ?? null;

            if ($value === null) {
                $properties['runnerGroupId'] = null;
                goto after_runnerGroupId;
            }

            $properties['runnerGroupId'] = $value;

            after_runnerGroupId:

            $value = $payload['runner_group_name'] ?? null;

            if ($value === null) {
                $properties['runnerGroupName'] = null;
                goto after_runnerGroupName;
            }

            $properties['runnerGroupName'] = $value;

            after_runnerGroupName:

            $value = $payload['workflow_name'] ?? null;

            if ($value === null) {
                $properties['workflowName'] = null;
                goto after_workflowName;
            }

            $properties['workflowName'] = $value;

            after_workflowName:

            $value = $payload['head_branch'] ?? null;

            if ($value === null) {
                $properties['headBranch'] = null;
                goto after_headBranch;
            }

            $properties['headBranch'] = $value;

            after_headBranch:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Job', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\Job::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\Job(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Job', $exception, stack: $this->hydrationStack);
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
            'ApiClients\Client\GitHub\Schema\Job' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Job($object),
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


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Job(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\Job);
        $result = [];

        $id = $object->id;
        after_id:        $result['id'] = $id;

        
        $runId = $object->runId;
        after_runId:        $result['run_id'] = $runId;

        
        $runUrl = $object->runUrl;
        after_runUrl:        $result['run_url'] = $runUrl;

        
        $runAttempt = $object->runAttempt;

        if ($runAttempt === null) {
            goto after_runAttempt;
        }
        after_runAttempt:        $result['run_attempt'] = $runAttempt;

        
        $nodeId = $object->nodeId;
        after_nodeId:        $result['node_id'] = $nodeId;

        
        $headSha = $object->headSha;
        after_headSha:        $result['head_sha'] = $headSha;

        
        $url = $object->url;
        after_url:        $result['url'] = $url;

        
        $htmlUrl = $object->htmlUrl;

        if ($htmlUrl === null) {
            goto after_htmlUrl;
        }
        after_htmlUrl:        $result['html_url'] = $htmlUrl;

        
        $status = $object->status;
        after_status:        $result['status'] = $status;

        
        $conclusion = $object->conclusion;

        if ($conclusion === null) {
            goto after_conclusion;
        }
        after_conclusion:        $result['conclusion'] = $conclusion;

        
        $createdAt = $object->createdAt;
        after_createdAt:        $result['created_at'] = $createdAt;

        
        $startedAt = $object->startedAt;
        after_startedAt:        $result['started_at'] = $startedAt;

        
        $completedAt = $object->completedAt;

        if ($completedAt === null) {
            goto after_completedAt;
        }
        after_completedAt:        $result['completed_at'] = $completedAt;

        
        $name = $object->name;
        after_name:        $result['name'] = $name;

        
        $steps = $object->steps;

        if ($steps === null) {
            goto after_steps;
        }
        static $stepsSerializer0;

        if ($stepsSerializer0 === null) {
            $stepsSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $steps = $stepsSerializer0->serialize($steps, $this);
        after_steps:        $result['steps'] = $steps;

        
        $checkRunUrl = $object->checkRunUrl;
        after_checkRunUrl:        $result['check_run_url'] = $checkRunUrl;

        
        $labels = $object->labels;
        static $labelsSerializer0;

        if ($labelsSerializer0 === null) {
            $labelsSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $labels = $labelsSerializer0->serialize($labels, $this);
        after_labels:        $result['labels'] = $labels;

        
        $runnerId = $object->runnerId;

        if ($runnerId === null) {
            goto after_runnerId;
        }
        after_runnerId:        $result['runner_id'] = $runnerId;

        
        $runnerName = $object->runnerName;

        if ($runnerName === null) {
            goto after_runnerName;
        }
        after_runnerName:        $result['runner_name'] = $runnerName;

        
        $runnerGroupId = $object->runnerGroupId;

        if ($runnerGroupId === null) {
            goto after_runnerGroupId;
        }
        after_runnerGroupId:        $result['runner_group_id'] = $runnerGroupId;

        
        $runnerGroupName = $object->runnerGroupName;

        if ($runnerGroupName === null) {
            goto after_runnerGroupName;
        }
        after_runnerGroupName:        $result['runner_group_name'] = $runnerGroupName;

        
        $workflowName = $object->workflowName;

        if ($workflowName === null) {
            goto after_workflowName;
        }
        after_workflowName:        $result['workflow_name'] = $workflowName;

        
        $headBranch = $object->headBranch;

        if ($headBranch === null) {
            goto after_headBranch;
        }
        after_headBranch:        $result['head_branch'] = $headBranch;


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
