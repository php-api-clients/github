<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class CheckRuns implements ObjectMapper
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
            'ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CheckRun' => $this->hydrateApiClients⚡️Client⚡️Github⚡️OpenAPI⚡️ApiGitHubCom⚡️Schema⚡️CheckRun($payload),
                'ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CheckRun\Output' => $this->hydrateApiClients⚡️Client⚡️Github⚡️OpenAPI⚡️ApiGitHubCom⚡️Schema⚡️CheckRun⚡️Output($payload),
                'ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CheckRun\CheckSuite' => $this->hydrateApiClients⚡️Client⚡️Github⚡️OpenAPI⚡️ApiGitHubCom⚡️Schema⚡️CheckRun⚡️CheckSuite($payload),
                'ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DeploymentSimple' => $this->hydrateApiClients⚡️Client⚡️Github⚡️OpenAPI⚡️ApiGitHubCom⚡️Schema⚡️DeploymentSimple($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
        private function hydrateApiClients⚡️Client⚡️Github⚡️OpenAPI⚡️ApiGitHubCom⚡️Schema⚡️CheckRun(array $payload): \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CheckRun
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

                $value = $payload['head_sha'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'head_sha';
                    goto after_head_sha;
                }

                $properties['head_sha'] = $value;
    
                after_head_sha:

                $value = $payload['node_id'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'node_id';
                    goto after_node_id;
                }

                $properties['node_id'] = $value;
    
                after_node_id:

                $value = $payload['external_id'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'external_id';
                    goto after_external_id;
                }

                $properties['external_id'] = $value;
    
                after_external_id:

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
                    goto after_html_url;
                }

                $properties['html_url'] = $value;
    
                after_html_url:

                $value = $payload['details_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'details_url';
                    goto after_details_url;
                }

                $properties['details_url'] = $value;
    
                after_details_url:

                $value = $payload['status'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'status';
                    goto after_status;
                }

                $properties['status'] = $value;
    
                after_status:

                $value = $payload['conclusion'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'conclusion';
                    goto after_conclusion;
                }

                $properties['conclusion'] = $value;
    
                after_conclusion:

                $value = $payload['started_at'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'started_at';
                    goto after_started_at;
                }

                $properties['started_at'] = $value;
    
                after_started_at:

                $value = $payload['completed_at'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'completed_at';
                    goto after_completed_at;
                }

                $properties['completed_at'] = $value;
    
                after_completed_at:

                $value = $payload['output'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'output';
                    goto after_output;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'output';
                        $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️OpenAPI⚡️ApiGitHubCom⚡️Schema⚡️CheckRun⚡️Output($value);
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
                    $missingFields[] = 'check_suite';
                    goto after_check_suite;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'check_suite';
                        $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️OpenAPI⚡️ApiGitHubCom⚡️Schema⚡️CheckRun⚡️CheckSuite($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['check_suite'] = $value;
    
                after_check_suite:

                $value = $payload['app'] ?? null;
    
                if ($value === null) {
                    $properties['app'] = null;
                    goto after_app;
                }

                $properties['app'] = $value;
    
                after_app:

                $value = $payload['pull_requests'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'pull_requests';
                    goto after_pull_requests;
                }

                $properties['pull_requests'] = $value;
    
                after_pull_requests:

                $value = $payload['deployment'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'deployment';
                    goto after_deployment;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'deployment';
                        $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️OpenAPI⚡️ApiGitHubCom⚡️Schema⚡️DeploymentSimple($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['deployment'] = $value;
    
                after_deployment:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CheckRun', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CheckRun::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CheckRun(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CheckRun', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️Github⚡️OpenAPI⚡️ApiGitHubCom⚡️Schema⚡️CheckRun⚡️Output(array $payload): \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CheckRun\Output
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['title'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'title';
                    goto after_title;
                }

                $properties['title'] = $value;
    
                after_title:

                $value = $payload['summary'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'summary';
                    goto after_summary;
                }

                $properties['summary'] = $value;
    
                after_summary:

                $value = $payload['text'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'text';
                    goto after_text;
                }

                $properties['text'] = $value;
    
                after_text:

                $value = $payload['annotations_count'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'annotations_count';
                    goto after_annotations_count;
                }

                $properties['annotations_count'] = $value;
    
                after_annotations_count:

                $value = $payload['annotations_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'annotations_url';
                    goto after_annotations_url;
                }

                $properties['annotations_url'] = $value;
    
                after_annotations_url:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CheckRun\Output', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CheckRun\Output::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CheckRun\Output(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CheckRun\Output', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️Github⚡️OpenAPI⚡️ApiGitHubCom⚡️Schema⚡️CheckRun⚡️CheckSuite(array $payload): \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CheckRun\CheckSuite
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

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CheckRun\CheckSuite', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CheckRun\CheckSuite::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CheckRun\CheckSuite(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CheckRun\CheckSuite', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️Github⚡️OpenAPI⚡️ApiGitHubCom⚡️Schema⚡️DeploymentSimple(array $payload): \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DeploymentSimple
        {
            $properties = []; 
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
                    goto after_node_id;
                }

                $properties['node_id'] = $value;
    
                after_node_id:

                $value = $payload['task'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'task';
                    goto after_task;
                }

                $properties['task'] = $value;
    
                after_task:

                $value = $payload['original_environment'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'original_environment';
                    goto after_original_environment;
                }

                $properties['original_environment'] = $value;
    
                after_original_environment:

                $value = $payload['environment'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'environment';
                    goto after_environment;
                }

                $properties['environment'] = $value;
    
                after_environment:

                $value = $payload['description'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'description';
                    goto after_description;
                }

                $properties['description'] = $value;
    
                after_description:

                $value = $payload['created_at'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'created_at';
                    goto after_created_at;
                }

                $properties['created_at'] = $value;
    
                after_created_at:

                $value = $payload['updated_at'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'updated_at';
                    goto after_updated_at;
                }

                $properties['updated_at'] = $value;
    
                after_updated_at:

                $value = $payload['statuses_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'statuses_url';
                    goto after_statuses_url;
                }

                $properties['statuses_url'] = $value;
    
                after_statuses_url:

                $value = $payload['repository_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'repository_url';
                    goto after_repository_url;
                }

                $properties['repository_url'] = $value;
    
                after_repository_url:

                $value = $payload['transient_environment'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'transient_environment';
                    goto after_transient_environment;
                }

                $properties['transient_environment'] = $value;
    
                after_transient_environment:

                $value = $payload['production_environment'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'production_environment';
                    goto after_production_environment;
                }

                $properties['production_environment'] = $value;
    
                after_production_environment:

                $value = $payload['performed_via_github_app'] ?? null;
    
                if ($value === null) {
                    $properties['performed_via_github_app'] = null;
                    goto after_performed_via_github_app;
                }

                $properties['performed_via_github_app'] = $value;
    
                after_performed_via_github_app:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DeploymentSimple', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DeploymentSimple::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DeploymentSimple(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DeploymentSimple', $exception, stack: $this->hydrationStack);
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
                'ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CheckRun' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️OpenAPI⚡️ApiGitHubCom⚡️Schema⚡️CheckRun($object),
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

    
    private function serializeObjectApiClients⚡️Client⚡️Github⚡️OpenAPI⚡️ApiGitHubCom⚡️Schema⚡️CheckRun(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CheckRun);
        $result = [];
        
        $id = $object->id;

        if ($id === null) {
            goto after_id;
        }
        after_id:        $result['id'] = $id;

        
        $head_sha = $object->head_sha;

        if ($head_sha === null) {
            goto after_head_sha;
        }
        after_head_sha:        $result['head_sha'] = $head_sha;

        
        $node_id = $object->node_id;

        if ($node_id === null) {
            goto after_node_id;
        }
        after_node_id:        $result['node_id'] = $node_id;

        
        $external_id = $object->external_id;

        if ($external_id === null) {
            goto after_external_id;
        }
        after_external_id:        $result['external_id'] = $external_id;

        
        $url = $object->url;

        if ($url === null) {
            goto after_url;
        }
        after_url:        $result['url'] = $url;

        
        $html_url = $object->html_url;

        if ($html_url === null) {
            goto after_html_url;
        }
        after_html_url:        $result['html_url'] = $html_url;

        
        $details_url = $object->details_url;

        if ($details_url === null) {
            goto after_details_url;
        }
        after_details_url:        $result['details_url'] = $details_url;

        
        $status = $object->status;

        if ($status === null) {
            goto after_status;
        }
        after_status:        $result['status'] = $status;

        
        $conclusion = $object->conclusion;

        if ($conclusion === null) {
            goto after_conclusion;
        }
        after_conclusion:        $result['conclusion'] = $conclusion;

        
        $started_at = $object->started_at;

        if ($started_at === null) {
            goto after_started_at;
        }
        after_started_at:        $result['started_at'] = $started_at;

        
        $completed_at = $object->completed_at;

        if ($completed_at === null) {
            goto after_completed_at;
        }
        after_completed_at:        $result['completed_at'] = $completed_at;

        
        $output = $object->output;

        if ($output === null) {
            goto after_output;
        }
        $output = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️OpenAPI⚡️ApiGitHubCom⚡️Schema⚡️CheckRun⚡️Output($output);
        after_output:        $result['output'] = $output;

        
        $name = $object->name;

        if ($name === null) {
            goto after_name;
        }
        after_name:        $result['name'] = $name;

        
        $check_suite = $object->check_suite;

        if ($check_suite === null) {
            goto after_check_suite;
        }
        $check_suite = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️OpenAPI⚡️ApiGitHubCom⚡️Schema⚡️CheckRun⚡️CheckSuite($check_suite);
        after_check_suite:        $result['check_suite'] = $check_suite;

        
        $app = $object->app;

        if ($app === null) {
            goto after_app;
        }
        after_app:        $result['app'] = $app;

        
        $pull_requests = $object->pull_requests;

        if ($pull_requests === null) {
            goto after_pull_requests;
        }
        static $pull_requestsSerializer0;

        if ($pull_requestsSerializer0 === null) {
            $pull_requestsSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $pull_requests = $pull_requestsSerializer0->serialize($pull_requests, $this);
        after_pull_requests:        $result['pull_requests'] = $pull_requests;

        
        $deployment = $object->deployment;
        $deployment = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️OpenAPI⚡️ApiGitHubCom⚡️Schema⚡️DeploymentSimple($deployment);
        after_deployment:        $result['deployment'] = $deployment;


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
