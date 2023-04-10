<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Commits\CbRefRcb;

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
            'ApiClients\Client\Github\Schema\Operation\Checks\ListForRef\Response\Applicationjson\H200' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️Operation⚡️Checks⚡️ListForRef⚡️Response⚡️Applicationjson⚡️H200($payload),
                'ApiClients\Client\Github\Schema\CheckRun' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️CheckRun($payload),
                'ApiClients\Client\Github\Schema\CheckRun\Output' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️CheckRun⚡️Output($payload),
                'ApiClients\Client\Github\Schema\CheckRun\CheckSuite' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️CheckRun⚡️CheckSuite($payload),
                'ApiClients\Client\Github\Schema\PullRequestMinimal' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️PullRequestMinimal($payload),
                'ApiClients\Client\Github\Schema\PullRequestMinimal\Head' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️PullRequestMinimal⚡️Head($payload),
                'ApiClients\Client\Github\Schema\PullRequestMinimal\Head\Repo' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️PullRequestMinimal⚡️Head⚡️Repo($payload),
                'ApiClients\Client\Github\Schema\PullRequestMinimal\Base' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️PullRequestMinimal⚡️Base($payload),
                'ApiClients\Client\Github\Schema\PullRequestMinimal\Base\Repo' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️PullRequestMinimal⚡️Base⚡️Repo($payload),
                'ApiClients\Client\Github\Schema\DeploymentSimple' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️DeploymentSimple($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️Operation⚡️Checks⚡️ListForRef⚡️Response⚡️Applicationjson⚡️H200(array $payload): \ApiClients\Client\Github\Schema\Operation\Checks\ListForRef\Response\Applicationjson\H200
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

            $value = $payload['check_runs'] ?? null;

            if ($value === null) {
                $missingFields[] = 'check_runs';
                goto after_checkRuns;
            }

            static $checkRunsCaster1;

            if ($checkRunsCaster1 === null) {
                $checkRunsCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\Github\\Schema\\CheckRun',
));
            }

            $value = $checkRunsCaster1->cast($value, $this);

            $properties['checkRuns'] = $value;

            after_checkRuns:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\Operation\Checks\ListForRef\Response\Applicationjson\H200', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\Operation\Checks\ListForRef\Response\Applicationjson\H200::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\Github\Schema\Operation\Checks\ListForRef\Response\Applicationjson\H200(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\Operation\Checks\ListForRef\Response\Applicationjson\H200', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️CheckRun(array $payload): \ApiClients\Client\Github\Schema\CheckRun
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
                    $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️CheckRun⚡️Output($value);
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
                    $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️CheckRun⚡️CheckSuite($value);
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

            $properties['app'] = $value;

            after_app:

            $value = $payload['pull_requests'] ?? null;

            if ($value === null) {
                $missingFields[] = 'pull_requests';
                goto after_pullRequests;
            }

            static $pullRequestsCaster1;

            if ($pullRequestsCaster1 === null) {
                $pullRequestsCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\Github\\Schema\\PullRequestMinimal',
));
            }

            $value = $pullRequestsCaster1->cast($value, $this);

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
                    $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️DeploymentSimple($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['deployment'] = $value;

            after_deployment:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\CheckRun', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\CheckRun::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\Github\Schema\CheckRun(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\CheckRun', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️CheckRun⚡️Output(array $payload): \ApiClients\Client\Github\Schema\CheckRun\Output
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

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\CheckRun\Output', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\CheckRun\Output::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\Github\Schema\CheckRun\Output(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\CheckRun\Output', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️CheckRun⚡️CheckSuite(array $payload): \ApiClients\Client\Github\Schema\CheckRun\CheckSuite
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
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\CheckRun\CheckSuite', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\CheckRun\CheckSuite::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\Github\Schema\CheckRun\CheckSuite(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\CheckRun\CheckSuite', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️PullRequestMinimal(array $payload): \ApiClients\Client\Github\Schema\PullRequestMinimal
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
                    $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️PullRequestMinimal⚡️Head($value);
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
                    $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️PullRequestMinimal⚡️Base($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['base'] = $value;

            after_base:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\PullRequestMinimal', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\PullRequestMinimal::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\Github\Schema\PullRequestMinimal(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\PullRequestMinimal', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️PullRequestMinimal⚡️Head(array $payload): \ApiClients\Client\Github\Schema\PullRequestMinimal\Head
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
                    $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️PullRequestMinimal⚡️Head⚡️Repo($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['repo'] = $value;

            after_repo:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\PullRequestMinimal\Head', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\PullRequestMinimal\Head::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\Github\Schema\PullRequestMinimal\Head(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\PullRequestMinimal\Head', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️PullRequestMinimal⚡️Head⚡️Repo(array $payload): \ApiClients\Client\Github\Schema\PullRequestMinimal\Head\Repo
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
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\PullRequestMinimal\Head\Repo', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\PullRequestMinimal\Head\Repo::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\Github\Schema\PullRequestMinimal\Head\Repo(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\PullRequestMinimal\Head\Repo', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️PullRequestMinimal⚡️Base(array $payload): \ApiClients\Client\Github\Schema\PullRequestMinimal\Base
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
                    $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️PullRequestMinimal⚡️Head⚡️Repo($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['repo'] = $value;

            after_repo:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\PullRequestMinimal\Base', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\PullRequestMinimal\Base::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\Github\Schema\PullRequestMinimal\Base(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\PullRequestMinimal\Base', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️PullRequestMinimal⚡️Base⚡️Repo(array $payload): \ApiClients\Client\Github\Schema\PullRequestMinimal\Base\Repo
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
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\PullRequestMinimal\Base\Repo', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\PullRequestMinimal\Base\Repo::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\Github\Schema\PullRequestMinimal\Base\Repo(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\PullRequestMinimal\Base\Repo', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️DeploymentSimple(array $payload): \ApiClients\Client\Github\Schema\DeploymentSimple
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

            $properties['performedViaGithubApp'] = $value;

            after_performedViaGithubApp:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\DeploymentSimple', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\DeploymentSimple::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\Github\Schema\DeploymentSimple(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\DeploymentSimple', $exception, stack: $this->hydrationStack);
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
            'ApiClients\Client\Github\Schema\Operation\Checks\ListForRef\Response\Applicationjson\H200' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️Operation⚡️Checks⚡️ListForRef⚡️Response⚡️Applicationjson⚡️H200($object),
            'ApiClients\Client\Github\Schema\CheckRun' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️CheckRun($object),
            'ApiClients\Client\Github\Schema\CheckRun\Output' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️CheckRun⚡️Output($object),
            'ApiClients\Client\Github\Schema\CheckRun\CheckSuite' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️CheckRun⚡️CheckSuite($object),
            'ApiClients\Client\Github\Schema\PullRequestMinimal' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️PullRequestMinimal($object),
            'ApiClients\Client\Github\Schema\PullRequestMinimal\Head' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️PullRequestMinimal⚡️Head($object),
            'ApiClients\Client\Github\Schema\PullRequestMinimal\Head\Repo' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️PullRequestMinimal⚡️Head⚡️Repo($object),
            'ApiClients\Client\Github\Schema\PullRequestMinimal\Base' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️PullRequestMinimal⚡️Base($object),
            'ApiClients\Client\Github\Schema\PullRequestMinimal\Base\Repo' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️PullRequestMinimal⚡️Base⚡️Repo($object),
            'ApiClients\Client\Github\Schema\DeploymentSimple' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️DeploymentSimple($object),
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


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️Operation⚡️Checks⚡️ListForRef⚡️Response⚡️Applicationjson⚡️H200(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\Operation\Checks\ListForRef\Response\Applicationjson\H200);
        $result = [];

        $totalCount = $object->totalCount;
        after_totalCount:        $result['total_count'] = $totalCount;

        
        $checkRuns = $object->checkRuns;
        static $checkRunsSerializer0;

        if ($checkRunsSerializer0 === null) {
            $checkRunsSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\Github\\Schema\\CheckRun',
));
        }
        
        $checkRuns = $checkRunsSerializer0->serialize($checkRuns, $this);
        after_checkRuns:        $result['check_runs'] = $checkRuns;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️CheckRun(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\CheckRun);
        $result = [];

        $id = $object->id;
        after_id:        $result['id'] = $id;

        
        $headSha = $object->headSha;
        after_headSha:        $result['head_sha'] = $headSha;

        
        $nodeId = $object->nodeId;
        after_nodeId:        $result['node_id'] = $nodeId;

        
        $externalId = $object->externalId;

        if ($externalId === null) {
            goto after_externalId;
        }
        after_externalId:        $result['external_id'] = $externalId;

        
        $url = $object->url;
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

        
        $status = $object->status;
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

        
        $output = $object->output;
        $output = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️CheckRun⚡️Output($output);
        after_output:        $result['output'] = $output;

        
        $name = $object->name;
        after_name:        $result['name'] = $name;

        
        $checkSuite = $object->checkSuite;

        if ($checkSuite === null) {
            goto after_checkSuite;
        }
        $checkSuite = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️CheckRun⚡️CheckSuite($checkSuite);
        after_checkSuite:        $result['check_suite'] = $checkSuite;

        
        $app = $object->app;

        if ($app === null) {
            goto after_app;
        }
        after_app:        $result['app'] = $app;

        
        $pullRequests = $object->pullRequests;
        static $pullRequestsSerializer0;

        if ($pullRequestsSerializer0 === null) {
            $pullRequestsSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\Github\\Schema\\PullRequestMinimal',
));
        }
        
        $pullRequests = $pullRequestsSerializer0->serialize($pullRequests, $this);
        after_pullRequests:        $result['pull_requests'] = $pullRequests;

        
        $deployment = $object->deployment;

        if ($deployment === null) {
            goto after_deployment;
        }
        $deployment = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️DeploymentSimple($deployment);
        after_deployment:        $result['deployment'] = $deployment;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️CheckRun⚡️Output(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\CheckRun\Output);
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

        
        $annotationsCount = $object->annotationsCount;
        after_annotationsCount:        $result['annotations_count'] = $annotationsCount;

        
        $annotationsUrl = $object->annotationsUrl;
        after_annotationsUrl:        $result['annotations_url'] = $annotationsUrl;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️CheckRun⚡️CheckSuite(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\CheckRun\CheckSuite);
        $result = [];

        $id = $object->id;
        after_id:        $result['id'] = $id;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️PullRequestMinimal(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\PullRequestMinimal);
        $result = [];

        $id = $object->id;
        after_id:        $result['id'] = $id;

        
        $number = $object->number;
        after_number:        $result['number'] = $number;

        
        $url = $object->url;
        after_url:        $result['url'] = $url;

        
        $head = $object->head;
        $head = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️PullRequestMinimal⚡️Head($head);
        after_head:        $result['head'] = $head;

        
        $base = $object->base;
        $base = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️PullRequestMinimal⚡️Base($base);
        after_base:        $result['base'] = $base;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️PullRequestMinimal⚡️Head(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\PullRequestMinimal\Head);
        $result = [];

        $ref = $object->ref;
        after_ref:        $result['ref'] = $ref;

        
        $sha = $object->sha;
        after_sha:        $result['sha'] = $sha;

        
        $repo = $object->repo;
        $repo = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️PullRequestMinimal⚡️Head⚡️Repo($repo);
        after_repo:        $result['repo'] = $repo;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️PullRequestMinimal⚡️Head⚡️Repo(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\PullRequestMinimal\Head\Repo);
        $result = [];

        $id = $object->id;
        after_id:        $result['id'] = $id;

        
        $url = $object->url;
        after_url:        $result['url'] = $url;

        
        $name = $object->name;
        after_name:        $result['name'] = $name;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️PullRequestMinimal⚡️Base(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\PullRequestMinimal\Base);
        $result = [];

        $ref = $object->ref;
        after_ref:        $result['ref'] = $ref;

        
        $sha = $object->sha;
        after_sha:        $result['sha'] = $sha;

        
        $repo = $object->repo;
        $repo = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️PullRequestMinimal⚡️Head⚡️Repo($repo);
        after_repo:        $result['repo'] = $repo;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️PullRequestMinimal⚡️Base⚡️Repo(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\PullRequestMinimal\Base\Repo);
        $result = [];

        $id = $object->id;
        after_id:        $result['id'] = $id;

        
        $url = $object->url;
        after_url:        $result['url'] = $url;

        
        $name = $object->name;
        after_name:        $result['name'] = $name;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️DeploymentSimple(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\DeploymentSimple);
        $result = [];

        $url = $object->url;
        after_url:        $result['url'] = $url;

        
        $id = $object->id;
        after_id:        $result['id'] = $id;

        
        $nodeId = $object->nodeId;
        after_nodeId:        $result['node_id'] = $nodeId;

        
        $task = $object->task;
        after_task:        $result['task'] = $task;

        
        $originalEnvironment = $object->originalEnvironment;

        if ($originalEnvironment === null) {
            goto after_originalEnvironment;
        }
        after_originalEnvironment:        $result['original_environment'] = $originalEnvironment;

        
        $environment = $object->environment;
        after_environment:        $result['environment'] = $environment;

        
        $description = $object->description;

        if ($description === null) {
            goto after_description;
        }
        after_description:        $result['description'] = $description;

        
        $createdAt = $object->createdAt;
        after_createdAt:        $result['created_at'] = $createdAt;

        
        $updatedAt = $object->updatedAt;
        after_updatedAt:        $result['updated_at'] = $updatedAt;

        
        $statusesUrl = $object->statusesUrl;
        after_statusesUrl:        $result['statuses_url'] = $statusesUrl;

        
        $repositoryUrl = $object->repositoryUrl;
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
        after_performedViaGithubApp:        $result['performed_via_github_app'] = $performedViaGithubApp;


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
