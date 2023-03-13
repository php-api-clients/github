<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CheckDashSuites\CbCheckSuiteIdRcb;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class CheckDashRuns implements ObjectMapper
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
            'ApiClients\Client\GitHub\Schema\Operation\Checks\ListForSuite\Response\Applicationjson\H200' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Operation⚡️Checks⚡️ListForSuite⚡️Response⚡️Applicationjson⚡️H200($payload),
                'ApiClients\Client\GitHub\Schema\CheckRun' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CheckRun($payload),
                'ApiClients\Client\GitHub\Schema\CheckRun\Output' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CheckRun⚡️Output($payload),
                'ApiClients\Client\GitHub\Schema\CheckRun\CheckSuite' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CheckRun⚡️CheckSuite($payload),
                'ApiClients\Client\GitHub\Schema\PullRequestMinimal' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PullRequestMinimal($payload),
                'ApiClients\Client\GitHub\Schema\PullRequestMinimal\Head' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PullRequestMinimal⚡️Head($payload),
                'ApiClients\Client\GitHub\Schema\PullRequestMinimal\Head\Repo' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PullRequestMinimal⚡️Head⚡️Repo($payload),
                'ApiClients\Client\GitHub\Schema\DeploymentSimple' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️DeploymentSimple($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Operation⚡️Checks⚡️ListForSuite⚡️Response⚡️Applicationjson⚡️H200(array $payload): \ApiClients\Client\GitHub\Schema\Operation\Checks\ListForSuite\Response\Applicationjson\H200
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['total_count'] ?? null;

            if ($value === null) {
                $missingFields[] = 'total_count';
                goto after_total_count;
            }

            $properties['total_count'] = $value;

            after_total_count:

            $value = $payload['check_runs'] ?? null;

            if ($value === null) {
                $missingFields[] = 'check_runs';
                goto after_check_runs;
            }

            static $check_runsCaster1;

            if ($check_runsCaster1 === null) {
                $check_runsCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\CheckRun',
));
            }

            $value = $check_runsCaster1->cast($value, $this);

            $properties['check_runs'] = $value;

            after_check_runs:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Operation\Checks\ListForSuite\Response\Applicationjson\H200', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\Operation\Checks\ListForSuite\Response\Applicationjson\H200::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\Operation\Checks\ListForSuite\Response\Applicationjson\H200(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Operation\Checks\ListForSuite\Response\Applicationjson\H200', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CheckRun(array $payload): \ApiClients\Client\GitHub\Schema\CheckRun
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
                $properties['external_id'] = null;
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
                $properties['html_url'] = null;
                goto after_html_url;
            }

            $properties['html_url'] = $value;

            after_html_url:

            $value = $payload['details_url'] ?? null;

            if ($value === null) {
                $properties['details_url'] = null;
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
                $properties['conclusion'] = null;
                goto after_conclusion;
            }

            $properties['conclusion'] = $value;

            after_conclusion:

            $value = $payload['started_at'] ?? null;

            if ($value === null) {
                $properties['started_at'] = null;
                goto after_started_at;
            }

            $properties['started_at'] = $value;

            after_started_at:

            $value = $payload['completed_at'] ?? null;

            if ($value === null) {
                $properties['completed_at'] = null;
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
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CheckRun⚡️Output($value);
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
                $properties['check_suite'] = null;
                goto after_check_suite;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'check_suite';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CheckRun⚡️CheckSuite($value);
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

            static $pull_requestsCaster1;

            if ($pull_requestsCaster1 === null) {
                $pull_requestsCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\PullRequestMinimal',
));
            }

            $value = $pull_requestsCaster1->cast($value, $this);

            $properties['pull_requests'] = $value;

            after_pull_requests:

            $value = $payload['deployment'] ?? null;

            if ($value === null) {
                $properties['deployment'] = null;
                goto after_deployment;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'deployment';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️DeploymentSimple($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['deployment'] = $value;

            after_deployment:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\CheckRun', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\CheckRun::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\CheckRun(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\CheckRun', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CheckRun⚡️Output(array $payload): \ApiClients\Client\GitHub\Schema\CheckRun\Output
    {
        $properties = []; 
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
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\CheckRun\Output', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\CheckRun\Output::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\CheckRun\Output(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\CheckRun\Output', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CheckRun⚡️CheckSuite(array $payload): \ApiClients\Client\GitHub\Schema\CheckRun\CheckSuite
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
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\CheckRun\CheckSuite', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\CheckRun\CheckSuite::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\CheckRun\CheckSuite(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\CheckRun\CheckSuite', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PullRequestMinimal(array $payload): \ApiClients\Client\GitHub\Schema\PullRequestMinimal
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

            $value = $payload['number'] ?? null;

            if ($value === null) {
                $missingFields[] = 'number';
                goto after_number;
            }

            $properties['number'] = $value;

            after_number:

            $value = $payload['url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'url';
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

            $value = $payload['head'] ?? null;

            if ($value === null) {
                $missingFields[] = 'head';
                goto after_head;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'head';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PullRequestMinimal⚡️Head($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['head'] = $value;

            after_head:

            $value = $payload['base'] ?? null;

            if ($value === null) {
                $missingFields[] = 'base';
                goto after_base;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'base';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PullRequestMinimal⚡️Head($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['base'] = $value;

            after_base:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\PullRequestMinimal', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\PullRequestMinimal::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\PullRequestMinimal(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\PullRequestMinimal', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PullRequestMinimal⚡️Head(array $payload): \ApiClients\Client\GitHub\Schema\PullRequestMinimal\Head
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['ref'] ?? null;

            if ($value === null) {
                $missingFields[] = 'ref';
                goto after_ref;
            }

            $properties['ref'] = $value;

            after_ref:

            $value = $payload['sha'] ?? null;

            if ($value === null) {
                $missingFields[] = 'sha';
                goto after_sha;
            }

            $properties['sha'] = $value;

            after_sha:

            $value = $payload['repo'] ?? null;

            if ($value === null) {
                $missingFields[] = 'repo';
                goto after_repo;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'repo';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PullRequestMinimal⚡️Head⚡️Repo($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['repo'] = $value;

            after_repo:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\PullRequestMinimal\Head', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\PullRequestMinimal\Head::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\PullRequestMinimal\Head(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\PullRequestMinimal\Head', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PullRequestMinimal⚡️Head⚡️Repo(array $payload): \ApiClients\Client\GitHub\Schema\PullRequestMinimal\Head\Repo
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

            $value = $payload['url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'url';
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

            $value = $payload['name'] ?? null;

            if ($value === null) {
                $missingFields[] = 'name';
                goto after_name;
            }

            $properties['name'] = $value;

            after_name:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\PullRequestMinimal\Head\Repo', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\PullRequestMinimal\Head\Repo::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\PullRequestMinimal\Head\Repo(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\PullRequestMinimal\Head\Repo', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️DeploymentSimple(array $payload): \ApiClients\Client\GitHub\Schema\DeploymentSimple
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
                $properties['original_environment'] = null;
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
                $properties['description'] = null;
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
                $properties['transient_environment'] = null;
                goto after_transient_environment;
            }

            $properties['transient_environment'] = $value;

            after_transient_environment:

            $value = $payload['production_environment'] ?? null;

            if ($value === null) {
                $properties['production_environment'] = null;
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
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\DeploymentSimple', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\DeploymentSimple::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\DeploymentSimple(...$properties);
        } catch (\Throwable $exception) {
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
            'ApiClients\Client\GitHub\Schema\Operation\Checks\ListForSuite\Response\Applicationjson\H200' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Operation⚡️Checks⚡️ListForSuite⚡️Response⚡️Applicationjson⚡️H200($object),
            'ApiClients\Client\GitHub\Schema\CheckRun' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CheckRun($object),
            'ApiClients\Client\GitHub\Schema\CheckRun\Output' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CheckRun⚡️Output($object),
            'ApiClients\Client\GitHub\Schema\CheckRun\CheckSuite' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CheckRun⚡️CheckSuite($object),
            'ApiClients\Client\GitHub\Schema\PullRequestMinimal' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PullRequestMinimal($object),
            'ApiClients\Client\GitHub\Schema\PullRequestMinimal\Head' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PullRequestMinimal⚡️Head($object),
            'ApiClients\Client\GitHub\Schema\PullRequestMinimal\Head\Repo' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PullRequestMinimal⚡️Head⚡️Repo($object),
            'ApiClients\Client\GitHub\Schema\DeploymentSimple' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️DeploymentSimple($object),
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


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Operation⚡️Checks⚡️ListForSuite⚡️Response⚡️Applicationjson⚡️H200(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\Operation\Checks\ListForSuite\Response\Applicationjson\H200);
        $result = [];

        $total_count = $object->total_count;
        after_total_count:        $result['total_count'] = $total_count;

        
        $check_runs = $object->check_runs;
        static $check_runsSerializer0;

        if ($check_runsSerializer0 === null) {
            $check_runsSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\CheckRun',
));
        }
        
        $check_runs = $check_runsSerializer0->serialize($check_runs, $this);
        after_check_runs:        $result['check_runs'] = $check_runs;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CheckRun(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\CheckRun);
        $result = [];

        $id = $object->id;
        after_id:        $result['id'] = $id;

        
        $head_sha = $object->head_sha;
        after_head_sha:        $result['head_sha'] = $head_sha;

        
        $node_id = $object->node_id;
        after_node_id:        $result['node_id'] = $node_id;

        
        $external_id = $object->external_id;

        if ($external_id === null) {
            goto after_external_id;
        }
        after_external_id:        $result['external_id'] = $external_id;

        
        $url = $object->url;
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
        $output = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CheckRun⚡️Output($output);
        after_output:        $result['output'] = $output;

        
        $name = $object->name;
        after_name:        $result['name'] = $name;

        
        $check_suite = $object->check_suite;

        if ($check_suite === null) {
            goto after_check_suite;
        }
        $check_suite = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CheckRun⚡️CheckSuite($check_suite);
        after_check_suite:        $result['check_suite'] = $check_suite;

        
        $app = $object->app;

        if ($app === null) {
            goto after_app;
        }
        after_app:        $result['app'] = $app;

        
        $pull_requests = $object->pull_requests;
        static $pull_requestsSerializer0;

        if ($pull_requestsSerializer0 === null) {
            $pull_requestsSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\PullRequestMinimal',
));
        }
        
        $pull_requests = $pull_requestsSerializer0->serialize($pull_requests, $this);
        after_pull_requests:        $result['pull_requests'] = $pull_requests;

        
        $deployment = $object->deployment;

        if ($deployment === null) {
            goto after_deployment;
        }
        $deployment = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️DeploymentSimple($deployment);
        after_deployment:        $result['deployment'] = $deployment;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CheckRun⚡️Output(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\CheckRun\Output);
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

        
        $annotations_count = $object->annotations_count;
        after_annotations_count:        $result['annotations_count'] = $annotations_count;

        
        $annotations_url = $object->annotations_url;
        after_annotations_url:        $result['annotations_url'] = $annotations_url;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CheckRun⚡️CheckSuite(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\CheckRun\CheckSuite);
        $result = [];

        $id = $object->id;
        after_id:        $result['id'] = $id;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PullRequestMinimal(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\PullRequestMinimal);
        $result = [];

        $id = $object->id;
        after_id:        $result['id'] = $id;

        
        $number = $object->number;
        after_number:        $result['number'] = $number;

        
        $url = $object->url;
        after_url:        $result['url'] = $url;

        
        $head = $object->head;
        $head = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PullRequestMinimal⚡️Head($head);
        after_head:        $result['head'] = $head;

        
        $base = $object->base;
        $base = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PullRequestMinimal⚡️Head($base);
        after_base:        $result['base'] = $base;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PullRequestMinimal⚡️Head(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\PullRequestMinimal\Head);
        $result = [];

        $ref = $object->ref;
        after_ref:        $result['ref'] = $ref;

        
        $sha = $object->sha;
        after_sha:        $result['sha'] = $sha;

        
        $repo = $object->repo;
        $repo = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PullRequestMinimal⚡️Head⚡️Repo($repo);
        after_repo:        $result['repo'] = $repo;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PullRequestMinimal⚡️Head⚡️Repo(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\PullRequestMinimal\Head\Repo);
        $result = [];

        $id = $object->id;
        after_id:        $result['id'] = $id;

        
        $url = $object->url;
        after_url:        $result['url'] = $url;

        
        $name = $object->name;
        after_name:        $result['name'] = $name;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️DeploymentSimple(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\DeploymentSimple);
        $result = [];

        $url = $object->url;
        after_url:        $result['url'] = $url;

        
        $id = $object->id;
        after_id:        $result['id'] = $id;

        
        $node_id = $object->node_id;
        after_node_id:        $result['node_id'] = $node_id;

        
        $task = $object->task;
        after_task:        $result['task'] = $task;

        
        $original_environment = $object->original_environment;

        if ($original_environment === null) {
            goto after_original_environment;
        }
        after_original_environment:        $result['original_environment'] = $original_environment;

        
        $environment = $object->environment;
        after_environment:        $result['environment'] = $environment;

        
        $description = $object->description;

        if ($description === null) {
            goto after_description;
        }
        after_description:        $result['description'] = $description;

        
        $created_at = $object->created_at;
        after_created_at:        $result['created_at'] = $created_at;

        
        $updated_at = $object->updated_at;
        after_updated_at:        $result['updated_at'] = $updated_at;

        
        $statuses_url = $object->statuses_url;
        after_statuses_url:        $result['statuses_url'] = $statuses_url;

        
        $repository_url = $object->repository_url;
        after_repository_url:        $result['repository_url'] = $repository_url;

        
        $transient_environment = $object->transient_environment;

        if ($transient_environment === null) {
            goto after_transient_environment;
        }
        after_transient_environment:        $result['transient_environment'] = $transient_environment;

        
        $production_environment = $object->production_environment;

        if ($production_environment === null) {
            goto after_production_environment;
        }
        after_production_environment:        $result['production_environment'] = $production_environment;

        
        $performed_via_github_app = $object->performed_via_github_app;

        if ($performed_via_github_app === null) {
            goto after_performed_via_github_app;
        }
        after_performed_via_github_app:        $result['performed_via_github_app'] = $performed_via_github_app;


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
