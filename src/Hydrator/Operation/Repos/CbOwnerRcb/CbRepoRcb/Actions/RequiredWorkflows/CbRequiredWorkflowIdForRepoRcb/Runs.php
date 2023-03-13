<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\RequiredWorkflows\CbRequiredWorkflowIdForRepoRcb;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class Runs implements ObjectMapper
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
            'ApiClients\Client\GitHub\Schema\Operation\Actions\ListRequiredWorkflowRuns\Response\Applicationjson\H200' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Operation⚡️Actions⚡️ListRequiredWorkflowRuns⚡️Response⚡️Applicationjson⚡️H200($payload),
                'ApiClients\Client\GitHub\Schema\WorkflowRun' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WorkflowRun($payload),
                'ApiClients\Client\GitHub\Schema\ReferencedWorkflow' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ReferencedWorkflow($payload),
                'ApiClients\Client\GitHub\Schema\PullRequestMinimal' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PullRequestMinimal($payload),
                'ApiClients\Client\GitHub\Schema\PullRequestMinimal\Head' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PullRequestMinimal⚡️Head($payload),
                'ApiClients\Client\GitHub\Schema\PullRequestMinimal\Head\Repo' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PullRequestMinimal⚡️Head⚡️Repo($payload),
                'ApiClients\Client\GitHub\Schema\SimpleUser' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($payload),
                'ApiClients\Client\GitHub\Schema\MinimalRepository' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️MinimalRepository($payload),
                'ApiClients\Client\GitHub\Schema\Repository\TemplateRepository\Permissions' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Repository⚡️TemplateRepository⚡️Permissions($payload),
                'ApiClients\Client\GitHub\Schema\CodeOfConduct' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CodeOfConduct($payload),
                'ApiClients\Client\GitHub\Schema\MinimalRepository\License' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️MinimalRepository⚡️License($payload),
                'ApiClients\Client\GitHub\Schema\SecurityAndAnalysis' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SecurityAndAnalysis($payload),
                'ApiClients\Client\GitHub\Schema\SecurityAndAnalysis\AdvancedSecurity' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SecurityAndAnalysis⚡️AdvancedSecurity($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Operation⚡️Actions⚡️ListRequiredWorkflowRuns⚡️Response⚡️Applicationjson⚡️H200(array $payload): \ApiClients\Client\GitHub\Schema\Operation\Actions\ListRequiredWorkflowRuns\Response\Applicationjson\H200
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

            $value = $payload['workflow_runs'] ?? null;

            if ($value === null) {
                $missingFields[] = 'workflow_runs';
                goto after_workflow_runs;
            }

            static $workflow_runsCaster1;

            if ($workflow_runsCaster1 === null) {
                $workflow_runsCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\WorkflowRun',
));
            }

            $value = $workflow_runsCaster1->cast($value, $this);

            $properties['workflow_runs'] = $value;

            after_workflow_runs:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Operation\Actions\ListRequiredWorkflowRuns\Response\Applicationjson\H200', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\Operation\Actions\ListRequiredWorkflowRuns\Response\Applicationjson\H200::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\Operation\Actions\ListRequiredWorkflowRuns\Response\Applicationjson\H200(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Operation\Actions\ListRequiredWorkflowRuns\Response\Applicationjson\H200', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WorkflowRun(array $payload): \ApiClients\Client\GitHub\Schema\WorkflowRun
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

            $value = $payload['name'] ?? null;

            if ($value === null) {
                $properties['name'] = null;
                goto after_name;
            }

            $properties['name'] = $value;

            after_name:

            $value = $payload['node_id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'node_id';
                goto after_node_id;
            }

            $properties['node_id'] = $value;

            after_node_id:

            $value = $payload['check_suite_id'] ?? null;

            if ($value === null) {
                $properties['check_suite_id'] = null;
                goto after_check_suite_id;
            }

            $properties['check_suite_id'] = $value;

            after_check_suite_id:

            $value = $payload['check_suite_node_id'] ?? null;

            if ($value === null) {
                $properties['check_suite_node_id'] = null;
                goto after_check_suite_node_id;
            }

            $properties['check_suite_node_id'] = $value;

            after_check_suite_node_id:

            $value = $payload['head_branch'] ?? null;

            if ($value === null) {
                $properties['head_branch'] = null;
                goto after_head_branch;
            }

            $properties['head_branch'] = $value;

            after_head_branch:

            $value = $payload['head_sha'] ?? null;

            if ($value === null) {
                $missingFields[] = 'head_sha';
                goto after_head_sha;
            }

            $properties['head_sha'] = $value;

            after_head_sha:

            $value = $payload['path'] ?? null;

            if ($value === null) {
                $missingFields[] = 'path';
                goto after_path;
            }

            $properties['path'] = $value;

            after_path:

            $value = $payload['run_number'] ?? null;

            if ($value === null) {
                $missingFields[] = 'run_number';
                goto after_run_number;
            }

            $properties['run_number'] = $value;

            after_run_number:

            $value = $payload['run_attempt'] ?? null;

            if ($value === null) {
                $properties['run_attempt'] = null;
                goto after_run_attempt;
            }

            $properties['run_attempt'] = $value;

            after_run_attempt:

            $value = $payload['referenced_workflows'] ?? null;

            if ($value === null) {
                $properties['referenced_workflows'] = null;
                goto after_referenced_workflows;
            }

            static $referenced_workflowsCaster1;

            if ($referenced_workflowsCaster1 === null) {
                $referenced_workflowsCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\ReferencedWorkflow',
));
            }

            $value = $referenced_workflowsCaster1->cast($value, $this);

            $properties['referenced_workflows'] = $value;

            after_referenced_workflows:

            $value = $payload['event'] ?? null;

            if ($value === null) {
                $missingFields[] = 'event';
                goto after_event;
            }

            $properties['event'] = $value;

            after_event:

            $value = $payload['status'] ?? null;

            if ($value === null) {
                $properties['status'] = null;
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

            $value = $payload['workflow_id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'workflow_id';
                goto after_workflow_id;
            }

            $properties['workflow_id'] = $value;

            after_workflow_id:

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

            $value = $payload['pull_requests'] ?? null;

            if ($value === null) {
                $properties['pull_requests'] = null;
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

            $value = $payload['actor'] ?? null;

            if ($value === null) {
                $properties['actor'] = null;
                goto after_actor;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'actor';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['actor'] = $value;

            after_actor:

            $value = $payload['triggering_actor'] ?? null;

            if ($value === null) {
                $properties['triggering_actor'] = null;
                goto after_triggering_actor;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'triggering_actor';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['triggering_actor'] = $value;

            after_triggering_actor:

            $value = $payload['run_started_at'] ?? null;

            if ($value === null) {
                $properties['run_started_at'] = null;
                goto after_run_started_at;
            }

            $properties['run_started_at'] = $value;

            after_run_started_at:

            $value = $payload['jobs_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'jobs_url';
                goto after_jobs_url;
            }

            $properties['jobs_url'] = $value;

            after_jobs_url:

            $value = $payload['logs_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'logs_url';
                goto after_logs_url;
            }

            $properties['logs_url'] = $value;

            after_logs_url:

            $value = $payload['check_suite_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'check_suite_url';
                goto after_check_suite_url;
            }

            $properties['check_suite_url'] = $value;

            after_check_suite_url:

            $value = $payload['artifacts_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'artifacts_url';
                goto after_artifacts_url;
            }

            $properties['artifacts_url'] = $value;

            after_artifacts_url:

            $value = $payload['cancel_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'cancel_url';
                goto after_cancel_url;
            }

            $properties['cancel_url'] = $value;

            after_cancel_url:

            $value = $payload['rerun_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'rerun_url';
                goto after_rerun_url;
            }

            $properties['rerun_url'] = $value;

            after_rerun_url:

            $value = $payload['previous_attempt_url'] ?? null;

            if ($value === null) {
                $properties['previous_attempt_url'] = null;
                goto after_previous_attempt_url;
            }

            $properties['previous_attempt_url'] = $value;

            after_previous_attempt_url:

            $value = $payload['workflow_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'workflow_url';
                goto after_workflow_url;
            }

            $properties['workflow_url'] = $value;

            after_workflow_url:

            $value = $payload['head_commit'] ?? null;

            if ($value === null) {
                $properties['head_commit'] = null;
                goto after_head_commit;
            }

            $properties['head_commit'] = $value;

            after_head_commit:

            $value = $payload['repository'] ?? null;

            if ($value === null) {
                $missingFields[] = 'repository';
                goto after_repository;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'repository';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️MinimalRepository($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['repository'] = $value;

            after_repository:

            $value = $payload['head_repository'] ?? null;

            if ($value === null) {
                $missingFields[] = 'head_repository';
                goto after_head_repository;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'head_repository';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️MinimalRepository($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['head_repository'] = $value;

            after_head_repository:

            $value = $payload['head_repository_id'] ?? null;

            if ($value === null) {
                $properties['head_repository_id'] = null;
                goto after_head_repository_id;
            }

            $properties['head_repository_id'] = $value;

            after_head_repository_id:

            $value = $payload['display_title'] ?? null;

            if ($value === null) {
                $missingFields[] = 'display_title';
                goto after_display_title;
            }

            $properties['display_title'] = $value;

            after_display_title:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WorkflowRun', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WorkflowRun::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WorkflowRun(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WorkflowRun', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ReferencedWorkflow(array $payload): \ApiClients\Client\GitHub\Schema\ReferencedWorkflow
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['path'] ?? null;

            if ($value === null) {
                $missingFields[] = 'path';
                goto after_path;
            }

            $properties['path'] = $value;

            after_path:

            $value = $payload['sha'] ?? null;

            if ($value === null) {
                $missingFields[] = 'sha';
                goto after_sha;
            }

            $properties['sha'] = $value;

            after_sha:

            $value = $payload['ref'] ?? null;

            if ($value === null) {
                $properties['ref'] = null;
                goto after_ref;
            }

            $properties['ref'] = $value;

            after_ref:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ReferencedWorkflow', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\ReferencedWorkflow::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\ReferencedWorkflow(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ReferencedWorkflow', $exception, stack: $this->hydrationStack);
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

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser(array $payload): \ApiClients\Client\GitHub\Schema\SimpleUser
    {
        $properties = []; 
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
                goto after_node_id;
            }

            $properties['node_id'] = $value;

            after_node_id:

            $value = $payload['avatar_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'avatar_url';
                goto after_avatar_url;
            }

            $properties['avatar_url'] = $value;

            after_avatar_url:

            $value = $payload['gravatar_id'] ?? null;

            if ($value === null) {
                $properties['gravatar_id'] = null;
                goto after_gravatar_id;
            }

            $properties['gravatar_id'] = $value;

            after_gravatar_id:

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

            $value = $payload['followers_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'followers_url';
                goto after_followers_url;
            }

            $properties['followers_url'] = $value;

            after_followers_url:

            $value = $payload['following_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'following_url';
                goto after_following_url;
            }

            $properties['following_url'] = $value;

            after_following_url:

            $value = $payload['gists_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'gists_url';
                goto after_gists_url;
            }

            $properties['gists_url'] = $value;

            after_gists_url:

            $value = $payload['starred_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'starred_url';
                goto after_starred_url;
            }

            $properties['starred_url'] = $value;

            after_starred_url:

            $value = $payload['subscriptions_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'subscriptions_url';
                goto after_subscriptions_url;
            }

            $properties['subscriptions_url'] = $value;

            after_subscriptions_url:

            $value = $payload['organizations_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'organizations_url';
                goto after_organizations_url;
            }

            $properties['organizations_url'] = $value;

            after_organizations_url:

            $value = $payload['repos_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'repos_url';
                goto after_repos_url;
            }

            $properties['repos_url'] = $value;

            after_repos_url:

            $value = $payload['events_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'events_url';
                goto after_events_url;
            }

            $properties['events_url'] = $value;

            after_events_url:

            $value = $payload['received_events_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'received_events_url';
                goto after_received_events_url;
            }

            $properties['received_events_url'] = $value;

            after_received_events_url:

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
                goto after_site_admin;
            }

            $properties['site_admin'] = $value;

            after_site_admin:

            $value = $payload['starred_at'] ?? null;

            if ($value === null) {
                $properties['starred_at'] = null;
                goto after_starred_at;
            }

            $properties['starred_at'] = $value;

            after_starred_at:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\SimpleUser', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\SimpleUser::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\SimpleUser(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\SimpleUser', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️MinimalRepository(array $payload): \ApiClients\Client\GitHub\Schema\MinimalRepository
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
                goto after_node_id;
            }

            $properties['node_id'] = $value;

            after_node_id:

            $value = $payload['name'] ?? null;

            if ($value === null) {
                $missingFields[] = 'name';
                goto after_name;
            }

            $properties['name'] = $value;

            after_name:

            $value = $payload['full_name'] ?? null;

            if ($value === null) {
                $missingFields[] = 'full_name';
                goto after_full_name;
            }

            $properties['full_name'] = $value;

            after_full_name:

            $value = $payload['owner'] ?? null;

            if ($value === null) {
                $missingFields[] = 'owner';
                goto after_owner;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'owner';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['owner'] = $value;

            after_owner:

            $value = $payload['private'] ?? null;

            if ($value === null) {
                $missingFields[] = 'private';
                goto after_private;
            }

            $properties['private'] = $value;

            after_private:

            $value = $payload['html_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'html_url';
                goto after_html_url;
            }

            $properties['html_url'] = $value;

            after_html_url:

            $value = $payload['description'] ?? null;

            if ($value === null) {
                $properties['description'] = null;
                goto after_description;
            }

            $properties['description'] = $value;

            after_description:

            $value = $payload['fork'] ?? null;

            if ($value === null) {
                $missingFields[] = 'fork';
                goto after_fork;
            }

            $properties['fork'] = $value;

            after_fork:

            $value = $payload['url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'url';
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

            $value = $payload['archive_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'archive_url';
                goto after_archive_url;
            }

            $properties['archive_url'] = $value;

            after_archive_url:

            $value = $payload['assignees_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'assignees_url';
                goto after_assignees_url;
            }

            $properties['assignees_url'] = $value;

            after_assignees_url:

            $value = $payload['blobs_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'blobs_url';
                goto after_blobs_url;
            }

            $properties['blobs_url'] = $value;

            after_blobs_url:

            $value = $payload['branches_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'branches_url';
                goto after_branches_url;
            }

            $properties['branches_url'] = $value;

            after_branches_url:

            $value = $payload['collaborators_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'collaborators_url';
                goto after_collaborators_url;
            }

            $properties['collaborators_url'] = $value;

            after_collaborators_url:

            $value = $payload['comments_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'comments_url';
                goto after_comments_url;
            }

            $properties['comments_url'] = $value;

            after_comments_url:

            $value = $payload['commits_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'commits_url';
                goto after_commits_url;
            }

            $properties['commits_url'] = $value;

            after_commits_url:

            $value = $payload['compare_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'compare_url';
                goto after_compare_url;
            }

            $properties['compare_url'] = $value;

            after_compare_url:

            $value = $payload['contents_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'contents_url';
                goto after_contents_url;
            }

            $properties['contents_url'] = $value;

            after_contents_url:

            $value = $payload['contributors_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'contributors_url';
                goto after_contributors_url;
            }

            $properties['contributors_url'] = $value;

            after_contributors_url:

            $value = $payload['deployments_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'deployments_url';
                goto after_deployments_url;
            }

            $properties['deployments_url'] = $value;

            after_deployments_url:

            $value = $payload['downloads_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'downloads_url';
                goto after_downloads_url;
            }

            $properties['downloads_url'] = $value;

            after_downloads_url:

            $value = $payload['events_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'events_url';
                goto after_events_url;
            }

            $properties['events_url'] = $value;

            after_events_url:

            $value = $payload['forks_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'forks_url';
                goto after_forks_url;
            }

            $properties['forks_url'] = $value;

            after_forks_url:

            $value = $payload['git_commits_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'git_commits_url';
                goto after_git_commits_url;
            }

            $properties['git_commits_url'] = $value;

            after_git_commits_url:

            $value = $payload['git_refs_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'git_refs_url';
                goto after_git_refs_url;
            }

            $properties['git_refs_url'] = $value;

            after_git_refs_url:

            $value = $payload['git_tags_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'git_tags_url';
                goto after_git_tags_url;
            }

            $properties['git_tags_url'] = $value;

            after_git_tags_url:

            $value = $payload['git_url'] ?? null;

            if ($value === null) {
                $properties['git_url'] = null;
                goto after_git_url;
            }

            $properties['git_url'] = $value;

            after_git_url:

            $value = $payload['issue_comment_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'issue_comment_url';
                goto after_issue_comment_url;
            }

            $properties['issue_comment_url'] = $value;

            after_issue_comment_url:

            $value = $payload['issue_events_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'issue_events_url';
                goto after_issue_events_url;
            }

            $properties['issue_events_url'] = $value;

            after_issue_events_url:

            $value = $payload['issues_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'issues_url';
                goto after_issues_url;
            }

            $properties['issues_url'] = $value;

            after_issues_url:

            $value = $payload['keys_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'keys_url';
                goto after_keys_url;
            }

            $properties['keys_url'] = $value;

            after_keys_url:

            $value = $payload['labels_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'labels_url';
                goto after_labels_url;
            }

            $properties['labels_url'] = $value;

            after_labels_url:

            $value = $payload['languages_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'languages_url';
                goto after_languages_url;
            }

            $properties['languages_url'] = $value;

            after_languages_url:

            $value = $payload['merges_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'merges_url';
                goto after_merges_url;
            }

            $properties['merges_url'] = $value;

            after_merges_url:

            $value = $payload['milestones_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'milestones_url';
                goto after_milestones_url;
            }

            $properties['milestones_url'] = $value;

            after_milestones_url:

            $value = $payload['notifications_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'notifications_url';
                goto after_notifications_url;
            }

            $properties['notifications_url'] = $value;

            after_notifications_url:

            $value = $payload['pulls_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'pulls_url';
                goto after_pulls_url;
            }

            $properties['pulls_url'] = $value;

            after_pulls_url:

            $value = $payload['releases_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'releases_url';
                goto after_releases_url;
            }

            $properties['releases_url'] = $value;

            after_releases_url:

            $value = $payload['ssh_url'] ?? null;

            if ($value === null) {
                $properties['ssh_url'] = null;
                goto after_ssh_url;
            }

            $properties['ssh_url'] = $value;

            after_ssh_url:

            $value = $payload['stargazers_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'stargazers_url';
                goto after_stargazers_url;
            }

            $properties['stargazers_url'] = $value;

            after_stargazers_url:

            $value = $payload['statuses_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'statuses_url';
                goto after_statuses_url;
            }

            $properties['statuses_url'] = $value;

            after_statuses_url:

            $value = $payload['subscribers_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'subscribers_url';
                goto after_subscribers_url;
            }

            $properties['subscribers_url'] = $value;

            after_subscribers_url:

            $value = $payload['subscription_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'subscription_url';
                goto after_subscription_url;
            }

            $properties['subscription_url'] = $value;

            after_subscription_url:

            $value = $payload['tags_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'tags_url';
                goto after_tags_url;
            }

            $properties['tags_url'] = $value;

            after_tags_url:

            $value = $payload['teams_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'teams_url';
                goto after_teams_url;
            }

            $properties['teams_url'] = $value;

            after_teams_url:

            $value = $payload['trees_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'trees_url';
                goto after_trees_url;
            }

            $properties['trees_url'] = $value;

            after_trees_url:

            $value = $payload['clone_url'] ?? null;

            if ($value === null) {
                $properties['clone_url'] = null;
                goto after_clone_url;
            }

            $properties['clone_url'] = $value;

            after_clone_url:

            $value = $payload['mirror_url'] ?? null;

            if ($value === null) {
                $properties['mirror_url'] = null;
                goto after_mirror_url;
            }

            $properties['mirror_url'] = $value;

            after_mirror_url:

            $value = $payload['hooks_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'hooks_url';
                goto after_hooks_url;
            }

            $properties['hooks_url'] = $value;

            after_hooks_url:

            $value = $payload['svn_url'] ?? null;

            if ($value === null) {
                $properties['svn_url'] = null;
                goto after_svn_url;
            }

            $properties['svn_url'] = $value;

            after_svn_url:

            $value = $payload['homepage'] ?? null;

            if ($value === null) {
                $properties['homepage'] = null;
                goto after_homepage;
            }

            $properties['homepage'] = $value;

            after_homepage:

            $value = $payload['language'] ?? null;

            if ($value === null) {
                $properties['language'] = null;
                goto after_language;
            }

            $properties['language'] = $value;

            after_language:

            $value = $payload['forks_count'] ?? null;

            if ($value === null) {
                $properties['forks_count'] = null;
                goto after_forks_count;
            }

            $properties['forks_count'] = $value;

            after_forks_count:

            $value = $payload['stargazers_count'] ?? null;

            if ($value === null) {
                $properties['stargazers_count'] = null;
                goto after_stargazers_count;
            }

            $properties['stargazers_count'] = $value;

            after_stargazers_count:

            $value = $payload['watchers_count'] ?? null;

            if ($value === null) {
                $properties['watchers_count'] = null;
                goto after_watchers_count;
            }

            $properties['watchers_count'] = $value;

            after_watchers_count:

            $value = $payload['size'] ?? null;

            if ($value === null) {
                $properties['size'] = null;
                goto after_size;
            }

            $properties['size'] = $value;

            after_size:

            $value = $payload['default_branch'] ?? null;

            if ($value === null) {
                $properties['default_branch'] = null;
                goto after_default_branch;
            }

            $properties['default_branch'] = $value;

            after_default_branch:

            $value = $payload['open_issues_count'] ?? null;

            if ($value === null) {
                $properties['open_issues_count'] = null;
                goto after_open_issues_count;
            }

            $properties['open_issues_count'] = $value;

            after_open_issues_count:

            $value = $payload['is_template'] ?? null;

            if ($value === null) {
                $properties['is_template'] = null;
                goto after_is_template;
            }

            $properties['is_template'] = $value;

            after_is_template:

            $value = $payload['topics'] ?? null;

            if ($value === null) {
                $properties['topics'] = null;
                goto after_topics;
            }

            $properties['topics'] = $value;

            after_topics:

            $value = $payload['has_issues'] ?? null;

            if ($value === null) {
                $properties['has_issues'] = null;
                goto after_has_issues;
            }

            $properties['has_issues'] = $value;

            after_has_issues:

            $value = $payload['has_projects'] ?? null;

            if ($value === null) {
                $properties['has_projects'] = null;
                goto after_has_projects;
            }

            $properties['has_projects'] = $value;

            after_has_projects:

            $value = $payload['has_wiki'] ?? null;

            if ($value === null) {
                $properties['has_wiki'] = null;
                goto after_has_wiki;
            }

            $properties['has_wiki'] = $value;

            after_has_wiki:

            $value = $payload['has_pages'] ?? null;

            if ($value === null) {
                $properties['has_pages'] = null;
                goto after_has_pages;
            }

            $properties['has_pages'] = $value;

            after_has_pages:

            $value = $payload['has_downloads'] ?? null;

            if ($value === null) {
                $properties['has_downloads'] = null;
                goto after_has_downloads;
            }

            $properties['has_downloads'] = $value;

            after_has_downloads:

            $value = $payload['has_discussions'] ?? null;

            if ($value === null) {
                $properties['has_discussions'] = null;
                goto after_has_discussions;
            }

            $properties['has_discussions'] = $value;

            after_has_discussions:

            $value = $payload['archived'] ?? null;

            if ($value === null) {
                $properties['archived'] = null;
                goto after_archived;
            }

            $properties['archived'] = $value;

            after_archived:

            $value = $payload['disabled'] ?? null;

            if ($value === null) {
                $properties['disabled'] = null;
                goto after_disabled;
            }

            $properties['disabled'] = $value;

            after_disabled:

            $value = $payload['visibility'] ?? null;

            if ($value === null) {
                $properties['visibility'] = null;
                goto after_visibility;
            }

            $properties['visibility'] = $value;

            after_visibility:

            $value = $payload['pushed_at'] ?? null;

            if ($value === null) {
                $properties['pushed_at'] = null;
                goto after_pushed_at;
            }

            $properties['pushed_at'] = $value;

            after_pushed_at:

            $value = $payload['created_at'] ?? null;

            if ($value === null) {
                $properties['created_at'] = null;
                goto after_created_at;
            }

            $properties['created_at'] = $value;

            after_created_at:

            $value = $payload['updated_at'] ?? null;

            if ($value === null) {
                $properties['updated_at'] = null;
                goto after_updated_at;
            }

            $properties['updated_at'] = $value;

            after_updated_at:

            $value = $payload['permissions'] ?? null;

            if ($value === null) {
                $properties['permissions'] = null;
                goto after_permissions;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'permissions';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Repository⚡️TemplateRepository⚡️Permissions($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['permissions'] = $value;

            after_permissions:

            $value = $payload['role_name'] ?? null;

            if ($value === null) {
                $properties['role_name'] = null;
                goto after_role_name;
            }

            $properties['role_name'] = $value;

            after_role_name:

            $value = $payload['temp_clone_token'] ?? null;

            if ($value === null) {
                $properties['temp_clone_token'] = null;
                goto after_temp_clone_token;
            }

            $properties['temp_clone_token'] = $value;

            after_temp_clone_token:

            $value = $payload['delete_branch_on_merge'] ?? null;

            if ($value === null) {
                $properties['delete_branch_on_merge'] = null;
                goto after_delete_branch_on_merge;
            }

            $properties['delete_branch_on_merge'] = $value;

            after_delete_branch_on_merge:

            $value = $payload['subscribers_count'] ?? null;

            if ($value === null) {
                $properties['subscribers_count'] = null;
                goto after_subscribers_count;
            }

            $properties['subscribers_count'] = $value;

            after_subscribers_count:

            $value = $payload['network_count'] ?? null;

            if ($value === null) {
                $properties['network_count'] = null;
                goto after_network_count;
            }

            $properties['network_count'] = $value;

            after_network_count:

            $value = $payload['code_of_conduct'] ?? null;

            if ($value === null) {
                $properties['code_of_conduct'] = null;
                goto after_code_of_conduct;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'code_of_conduct';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CodeOfConduct($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['code_of_conduct'] = $value;

            after_code_of_conduct:

            $value = $payload['license'] ?? null;

            if ($value === null) {
                $properties['license'] = null;
                goto after_license;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'license';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️MinimalRepository⚡️License($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['license'] = $value;

            after_license:

            $value = $payload['forks'] ?? null;

            if ($value === null) {
                $properties['forks'] = null;
                goto after_forks;
            }

            $properties['forks'] = $value;

            after_forks:

            $value = $payload['open_issues'] ?? null;

            if ($value === null) {
                $properties['open_issues'] = null;
                goto after_open_issues;
            }

            $properties['open_issues'] = $value;

            after_open_issues:

            $value = $payload['watchers'] ?? null;

            if ($value === null) {
                $properties['watchers'] = null;
                goto after_watchers;
            }

            $properties['watchers'] = $value;

            after_watchers:

            $value = $payload['allow_forking'] ?? null;

            if ($value === null) {
                $properties['allow_forking'] = null;
                goto after_allow_forking;
            }

            $properties['allow_forking'] = $value;

            after_allow_forking:

            $value = $payload['web_commit_signoff_required'] ?? null;

            if ($value === null) {
                $properties['web_commit_signoff_required'] = null;
                goto after_web_commit_signoff_required;
            }

            $properties['web_commit_signoff_required'] = $value;

            after_web_commit_signoff_required:

            $value = $payload['security_and_analysis'] ?? null;

            if ($value === null) {
                $properties['security_and_analysis'] = null;
                goto after_security_and_analysis;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'security_and_analysis';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SecurityAndAnalysis($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['security_and_analysis'] = $value;

            after_security_and_analysis:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\MinimalRepository', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\MinimalRepository::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\MinimalRepository(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\MinimalRepository', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Repository⚡️TemplateRepository⚡️Permissions(array $payload): \ApiClients\Client\GitHub\Schema\Repository\TemplateRepository\Permissions
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['admin'] ?? null;

            if ($value === null) {
                $properties['admin'] = null;
                goto after_admin;
            }

            $properties['admin'] = $value;

            after_admin:

            $value = $payload['maintain'] ?? null;

            if ($value === null) {
                $properties['maintain'] = null;
                goto after_maintain;
            }

            $properties['maintain'] = $value;

            after_maintain:

            $value = $payload['push'] ?? null;

            if ($value === null) {
                $properties['push'] = null;
                goto after_push;
            }

            $properties['push'] = $value;

            after_push:

            $value = $payload['triage'] ?? null;

            if ($value === null) {
                $properties['triage'] = null;
                goto after_triage;
            }

            $properties['triage'] = $value;

            after_triage:

            $value = $payload['pull'] ?? null;

            if ($value === null) {
                $properties['pull'] = null;
                goto after_pull;
            }

            $properties['pull'] = $value;

            after_pull:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Repository\TemplateRepository\Permissions', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\Repository\TemplateRepository\Permissions::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\Repository\TemplateRepository\Permissions(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Repository\TemplateRepository\Permissions', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CodeOfConduct(array $payload): \ApiClients\Client\GitHub\Schema\CodeOfConduct
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['key'] ?? null;

            if ($value === null) {
                $missingFields[] = 'key';
                goto after_key;
            }

            $properties['key'] = $value;

            after_key:

            $value = $payload['name'] ?? null;

            if ($value === null) {
                $missingFields[] = 'name';
                goto after_name;
            }

            $properties['name'] = $value;

            after_name:

            $value = $payload['url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'url';
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

            $value = $payload['body'] ?? null;

            if ($value === null) {
                $properties['body'] = null;
                goto after_body;
            }

            $properties['body'] = $value;

            after_body:

            $value = $payload['html_url'] ?? null;

            if ($value === null) {
                $properties['html_url'] = null;
                goto after_html_url;
            }

            $properties['html_url'] = $value;

            after_html_url:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\CodeOfConduct', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\CodeOfConduct::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\CodeOfConduct(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\CodeOfConduct', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️MinimalRepository⚡️License(array $payload): \ApiClients\Client\GitHub\Schema\MinimalRepository\License
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['key'] ?? null;

            if ($value === null) {
                $properties['key'] = null;
                goto after_key;
            }

            $properties['key'] = $value;

            after_key:

            $value = $payload['name'] ?? null;

            if ($value === null) {
                $properties['name'] = null;
                goto after_name;
            }

            $properties['name'] = $value;

            after_name:

            $value = $payload['spdx_id'] ?? null;

            if ($value === null) {
                $properties['spdx_id'] = null;
                goto after_spdx_id;
            }

            $properties['spdx_id'] = $value;

            after_spdx_id:

            $value = $payload['url'] ?? null;

            if ($value === null) {
                $properties['url'] = null;
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

            $value = $payload['node_id'] ?? null;

            if ($value === null) {
                $properties['node_id'] = null;
                goto after_node_id;
            }

            $properties['node_id'] = $value;

            after_node_id:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\MinimalRepository\License', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\MinimalRepository\License::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\MinimalRepository\License(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\MinimalRepository\License', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SecurityAndAnalysis(array $payload): \ApiClients\Client\GitHub\Schema\SecurityAndAnalysis
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['advanced_security'] ?? null;

            if ($value === null) {
                $properties['advanced_security'] = null;
                goto after_advanced_security;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'advanced_security';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SecurityAndAnalysis⚡️AdvancedSecurity($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['advanced_security'] = $value;

            after_advanced_security:

            $value = $payload['secret_scanning'] ?? null;

            if ($value === null) {
                $properties['secret_scanning'] = null;
                goto after_secret_scanning;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'secret_scanning';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SecurityAndAnalysis⚡️AdvancedSecurity($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['secret_scanning'] = $value;

            after_secret_scanning:

            $value = $payload['secret_scanning_push_protection'] ?? null;

            if ($value === null) {
                $properties['secret_scanning_push_protection'] = null;
                goto after_secret_scanning_push_protection;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'secret_scanning_push_protection';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SecurityAndAnalysis⚡️AdvancedSecurity($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['secret_scanning_push_protection'] = $value;

            after_secret_scanning_push_protection:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\SecurityAndAnalysis', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\SecurityAndAnalysis::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\SecurityAndAnalysis(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\SecurityAndAnalysis', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SecurityAndAnalysis⚡️AdvancedSecurity(array $payload): \ApiClients\Client\GitHub\Schema\SecurityAndAnalysis\AdvancedSecurity
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['status'] ?? null;

            if ($value === null) {
                $properties['status'] = null;
                goto after_status;
            }

            $properties['status'] = $value;

            after_status:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\SecurityAndAnalysis\AdvancedSecurity', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\SecurityAndAnalysis\AdvancedSecurity::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\SecurityAndAnalysis\AdvancedSecurity(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\SecurityAndAnalysis\AdvancedSecurity', $exception, stack: $this->hydrationStack);
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
            'ApiClients\Client\GitHub\Schema\Operation\Actions\ListRequiredWorkflowRuns\Response\Applicationjson\H200' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Operation⚡️Actions⚡️ListRequiredWorkflowRuns⚡️Response⚡️Applicationjson⚡️H200($object),
            'ApiClients\Client\GitHub\Schema\WorkflowRun' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WorkflowRun($object),
            'ApiClients\Client\GitHub\Schema\ReferencedWorkflow' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ReferencedWorkflow($object),
            'ApiClients\Client\GitHub\Schema\PullRequestMinimal' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PullRequestMinimal($object),
            'ApiClients\Client\GitHub\Schema\PullRequestMinimal\Head' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PullRequestMinimal⚡️Head($object),
            'ApiClients\Client\GitHub\Schema\PullRequestMinimal\Head\Repo' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PullRequestMinimal⚡️Head⚡️Repo($object),
            'ApiClients\Client\GitHub\Schema\SimpleUser' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($object),
            'ApiClients\Client\GitHub\Schema\MinimalRepository' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️MinimalRepository($object),
            'ApiClients\Client\GitHub\Schema\Repository\TemplateRepository\Permissions' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Repository⚡️TemplateRepository⚡️Permissions($object),
            'ApiClients\Client\GitHub\Schema\CodeOfConduct' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CodeOfConduct($object),
            'ApiClients\Client\GitHub\Schema\MinimalRepository\License' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️MinimalRepository⚡️License($object),
            'ApiClients\Client\GitHub\Schema\SecurityAndAnalysis' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SecurityAndAnalysis($object),
            'ApiClients\Client\GitHub\Schema\SecurityAndAnalysis\AdvancedSecurity' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SecurityAndAnalysis⚡️AdvancedSecurity($object),
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


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Operation⚡️Actions⚡️ListRequiredWorkflowRuns⚡️Response⚡️Applicationjson⚡️H200(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\Operation\Actions\ListRequiredWorkflowRuns\Response\Applicationjson\H200);
        $result = [];

        $total_count = $object->total_count;
        after_total_count:        $result['total_count'] = $total_count;

        
        $workflow_runs = $object->workflow_runs;
        static $workflow_runsSerializer0;

        if ($workflow_runsSerializer0 === null) {
            $workflow_runsSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\WorkflowRun',
));
        }
        
        $workflow_runs = $workflow_runsSerializer0->serialize($workflow_runs, $this);
        after_workflow_runs:        $result['workflow_runs'] = $workflow_runs;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WorkflowRun(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WorkflowRun);
        $result = [];

        $id = $object->id;
        after_id:        $result['id'] = $id;

        
        $name = $object->name;

        if ($name === null) {
            goto after_name;
        }
        after_name:        $result['name'] = $name;

        
        $node_id = $object->node_id;
        after_node_id:        $result['node_id'] = $node_id;

        
        $check_suite_id = $object->check_suite_id;

        if ($check_suite_id === null) {
            goto after_check_suite_id;
        }
        after_check_suite_id:        $result['check_suite_id'] = $check_suite_id;

        
        $check_suite_node_id = $object->check_suite_node_id;

        if ($check_suite_node_id === null) {
            goto after_check_suite_node_id;
        }
        after_check_suite_node_id:        $result['check_suite_node_id'] = $check_suite_node_id;

        
        $head_branch = $object->head_branch;

        if ($head_branch === null) {
            goto after_head_branch;
        }
        after_head_branch:        $result['head_branch'] = $head_branch;

        
        $head_sha = $object->head_sha;
        after_head_sha:        $result['head_sha'] = $head_sha;

        
        $path = $object->path;
        after_path:        $result['path'] = $path;

        
        $run_number = $object->run_number;
        after_run_number:        $result['run_number'] = $run_number;

        
        $run_attempt = $object->run_attempt;

        if ($run_attempt === null) {
            goto after_run_attempt;
        }
        after_run_attempt:        $result['run_attempt'] = $run_attempt;

        
        $referenced_workflows = $object->referenced_workflows;

        if ($referenced_workflows === null) {
            goto after_referenced_workflows;
        }
        static $referenced_workflowsSerializer0;

        if ($referenced_workflowsSerializer0 === null) {
            $referenced_workflowsSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\ReferencedWorkflow',
));
        }
        
        $referenced_workflows = $referenced_workflowsSerializer0->serialize($referenced_workflows, $this);
        after_referenced_workflows:        $result['referenced_workflows'] = $referenced_workflows;

        
        $event = $object->event;
        after_event:        $result['event'] = $event;

        
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

        
        $workflow_id = $object->workflow_id;
        after_workflow_id:        $result['workflow_id'] = $workflow_id;

        
        $url = $object->url;
        after_url:        $result['url'] = $url;

        
        $html_url = $object->html_url;
        after_html_url:        $result['html_url'] = $html_url;

        
        $pull_requests = $object->pull_requests;

        if ($pull_requests === null) {
            goto after_pull_requests;
        }
        static $pull_requestsSerializer0;

        if ($pull_requestsSerializer0 === null) {
            $pull_requestsSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\PullRequestMinimal',
));
        }
        
        $pull_requests = $pull_requestsSerializer0->serialize($pull_requests, $this);
        after_pull_requests:        $result['pull_requests'] = $pull_requests;

        
        $created_at = $object->created_at;
        after_created_at:        $result['created_at'] = $created_at;

        
        $updated_at = $object->updated_at;
        after_updated_at:        $result['updated_at'] = $updated_at;

        
        $actor = $object->actor;

        if ($actor === null) {
            goto after_actor;
        }
        $actor = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($actor);
        after_actor:        $result['actor'] = $actor;

        
        $triggering_actor = $object->triggering_actor;

        if ($triggering_actor === null) {
            goto after_triggering_actor;
        }
        $triggering_actor = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($triggering_actor);
        after_triggering_actor:        $result['triggering_actor'] = $triggering_actor;

        
        $run_started_at = $object->run_started_at;

        if ($run_started_at === null) {
            goto after_run_started_at;
        }
        after_run_started_at:        $result['run_started_at'] = $run_started_at;

        
        $jobs_url = $object->jobs_url;
        after_jobs_url:        $result['jobs_url'] = $jobs_url;

        
        $logs_url = $object->logs_url;
        after_logs_url:        $result['logs_url'] = $logs_url;

        
        $check_suite_url = $object->check_suite_url;
        after_check_suite_url:        $result['check_suite_url'] = $check_suite_url;

        
        $artifacts_url = $object->artifacts_url;
        after_artifacts_url:        $result['artifacts_url'] = $artifacts_url;

        
        $cancel_url = $object->cancel_url;
        after_cancel_url:        $result['cancel_url'] = $cancel_url;

        
        $rerun_url = $object->rerun_url;
        after_rerun_url:        $result['rerun_url'] = $rerun_url;

        
        $previous_attempt_url = $object->previous_attempt_url;

        if ($previous_attempt_url === null) {
            goto after_previous_attempt_url;
        }
        after_previous_attempt_url:        $result['previous_attempt_url'] = $previous_attempt_url;

        
        $workflow_url = $object->workflow_url;
        after_workflow_url:        $result['workflow_url'] = $workflow_url;

        
        $head_commit = $object->head_commit;

        if ($head_commit === null) {
            goto after_head_commit;
        }
        after_head_commit:        $result['head_commit'] = $head_commit;

        
        $repository = $object->repository;
        $repository = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️MinimalRepository($repository);
        after_repository:        $result['repository'] = $repository;

        
        $head_repository = $object->head_repository;
        $head_repository = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️MinimalRepository($head_repository);
        after_head_repository:        $result['head_repository'] = $head_repository;

        
        $head_repository_id = $object->head_repository_id;

        if ($head_repository_id === null) {
            goto after_head_repository_id;
        }
        after_head_repository_id:        $result['head_repository_id'] = $head_repository_id;

        
        $display_title = $object->display_title;
        after_display_title:        $result['display_title'] = $display_title;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ReferencedWorkflow(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\ReferencedWorkflow);
        $result = [];

        $path = $object->path;
        after_path:        $result['path'] = $path;

        
        $sha = $object->sha;
        after_sha:        $result['sha'] = $sha;

        
        $ref = $object->ref;

        if ($ref === null) {
            goto after_ref;
        }
        after_ref:        $result['ref'] = $ref;


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


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\SimpleUser);
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

        
        $login = $object->login;
        after_login:        $result['login'] = $login;

        
        $id = $object->id;
        after_id:        $result['id'] = $id;

        
        $node_id = $object->node_id;
        after_node_id:        $result['node_id'] = $node_id;

        
        $avatar_url = $object->avatar_url;
        after_avatar_url:        $result['avatar_url'] = $avatar_url;

        
        $gravatar_id = $object->gravatar_id;

        if ($gravatar_id === null) {
            goto after_gravatar_id;
        }
        after_gravatar_id:        $result['gravatar_id'] = $gravatar_id;

        
        $url = $object->url;
        after_url:        $result['url'] = $url;

        
        $html_url = $object->html_url;
        after_html_url:        $result['html_url'] = $html_url;

        
        $followers_url = $object->followers_url;
        after_followers_url:        $result['followers_url'] = $followers_url;

        
        $following_url = $object->following_url;
        after_following_url:        $result['following_url'] = $following_url;

        
        $gists_url = $object->gists_url;
        after_gists_url:        $result['gists_url'] = $gists_url;

        
        $starred_url = $object->starred_url;
        after_starred_url:        $result['starred_url'] = $starred_url;

        
        $subscriptions_url = $object->subscriptions_url;
        after_subscriptions_url:        $result['subscriptions_url'] = $subscriptions_url;

        
        $organizations_url = $object->organizations_url;
        after_organizations_url:        $result['organizations_url'] = $organizations_url;

        
        $repos_url = $object->repos_url;
        after_repos_url:        $result['repos_url'] = $repos_url;

        
        $events_url = $object->events_url;
        after_events_url:        $result['events_url'] = $events_url;

        
        $received_events_url = $object->received_events_url;
        after_received_events_url:        $result['received_events_url'] = $received_events_url;

        
        $type = $object->type;
        after_type:        $result['type'] = $type;

        
        $site_admin = $object->site_admin;
        after_site_admin:        $result['site_admin'] = $site_admin;

        
        $starred_at = $object->starred_at;

        if ($starred_at === null) {
            goto after_starred_at;
        }
        after_starred_at:        $result['starred_at'] = $starred_at;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️MinimalRepository(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\MinimalRepository);
        $result = [];

        $id = $object->id;
        after_id:        $result['id'] = $id;

        
        $node_id = $object->node_id;
        after_node_id:        $result['node_id'] = $node_id;

        
        $name = $object->name;
        after_name:        $result['name'] = $name;

        
        $full_name = $object->full_name;
        after_full_name:        $result['full_name'] = $full_name;

        
        $owner = $object->owner;
        $owner = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($owner);
        after_owner:        $result['owner'] = $owner;

        
        $private = $object->private;
        after_private:        $result['private'] = $private;

        
        $html_url = $object->html_url;
        after_html_url:        $result['html_url'] = $html_url;

        
        $description = $object->description;

        if ($description === null) {
            goto after_description;
        }
        after_description:        $result['description'] = $description;

        
        $fork = $object->fork;
        after_fork:        $result['fork'] = $fork;

        
        $url = $object->url;
        after_url:        $result['url'] = $url;

        
        $archive_url = $object->archive_url;
        after_archive_url:        $result['archive_url'] = $archive_url;

        
        $assignees_url = $object->assignees_url;
        after_assignees_url:        $result['assignees_url'] = $assignees_url;

        
        $blobs_url = $object->blobs_url;
        after_blobs_url:        $result['blobs_url'] = $blobs_url;

        
        $branches_url = $object->branches_url;
        after_branches_url:        $result['branches_url'] = $branches_url;

        
        $collaborators_url = $object->collaborators_url;
        after_collaborators_url:        $result['collaborators_url'] = $collaborators_url;

        
        $comments_url = $object->comments_url;
        after_comments_url:        $result['comments_url'] = $comments_url;

        
        $commits_url = $object->commits_url;
        after_commits_url:        $result['commits_url'] = $commits_url;

        
        $compare_url = $object->compare_url;
        after_compare_url:        $result['compare_url'] = $compare_url;

        
        $contents_url = $object->contents_url;
        after_contents_url:        $result['contents_url'] = $contents_url;

        
        $contributors_url = $object->contributors_url;
        after_contributors_url:        $result['contributors_url'] = $contributors_url;

        
        $deployments_url = $object->deployments_url;
        after_deployments_url:        $result['deployments_url'] = $deployments_url;

        
        $downloads_url = $object->downloads_url;
        after_downloads_url:        $result['downloads_url'] = $downloads_url;

        
        $events_url = $object->events_url;
        after_events_url:        $result['events_url'] = $events_url;

        
        $forks_url = $object->forks_url;
        after_forks_url:        $result['forks_url'] = $forks_url;

        
        $git_commits_url = $object->git_commits_url;
        after_git_commits_url:        $result['git_commits_url'] = $git_commits_url;

        
        $git_refs_url = $object->git_refs_url;
        after_git_refs_url:        $result['git_refs_url'] = $git_refs_url;

        
        $git_tags_url = $object->git_tags_url;
        after_git_tags_url:        $result['git_tags_url'] = $git_tags_url;

        
        $git_url = $object->git_url;

        if ($git_url === null) {
            goto after_git_url;
        }
        after_git_url:        $result['git_url'] = $git_url;

        
        $issue_comment_url = $object->issue_comment_url;
        after_issue_comment_url:        $result['issue_comment_url'] = $issue_comment_url;

        
        $issue_events_url = $object->issue_events_url;
        after_issue_events_url:        $result['issue_events_url'] = $issue_events_url;

        
        $issues_url = $object->issues_url;
        after_issues_url:        $result['issues_url'] = $issues_url;

        
        $keys_url = $object->keys_url;
        after_keys_url:        $result['keys_url'] = $keys_url;

        
        $labels_url = $object->labels_url;
        after_labels_url:        $result['labels_url'] = $labels_url;

        
        $languages_url = $object->languages_url;
        after_languages_url:        $result['languages_url'] = $languages_url;

        
        $merges_url = $object->merges_url;
        after_merges_url:        $result['merges_url'] = $merges_url;

        
        $milestones_url = $object->milestones_url;
        after_milestones_url:        $result['milestones_url'] = $milestones_url;

        
        $notifications_url = $object->notifications_url;
        after_notifications_url:        $result['notifications_url'] = $notifications_url;

        
        $pulls_url = $object->pulls_url;
        after_pulls_url:        $result['pulls_url'] = $pulls_url;

        
        $releases_url = $object->releases_url;
        after_releases_url:        $result['releases_url'] = $releases_url;

        
        $ssh_url = $object->ssh_url;

        if ($ssh_url === null) {
            goto after_ssh_url;
        }
        after_ssh_url:        $result['ssh_url'] = $ssh_url;

        
        $stargazers_url = $object->stargazers_url;
        after_stargazers_url:        $result['stargazers_url'] = $stargazers_url;

        
        $statuses_url = $object->statuses_url;
        after_statuses_url:        $result['statuses_url'] = $statuses_url;

        
        $subscribers_url = $object->subscribers_url;
        after_subscribers_url:        $result['subscribers_url'] = $subscribers_url;

        
        $subscription_url = $object->subscription_url;
        after_subscription_url:        $result['subscription_url'] = $subscription_url;

        
        $tags_url = $object->tags_url;
        after_tags_url:        $result['tags_url'] = $tags_url;

        
        $teams_url = $object->teams_url;
        after_teams_url:        $result['teams_url'] = $teams_url;

        
        $trees_url = $object->trees_url;
        after_trees_url:        $result['trees_url'] = $trees_url;

        
        $clone_url = $object->clone_url;

        if ($clone_url === null) {
            goto after_clone_url;
        }
        after_clone_url:        $result['clone_url'] = $clone_url;

        
        $mirror_url = $object->mirror_url;

        if ($mirror_url === null) {
            goto after_mirror_url;
        }
        after_mirror_url:        $result['mirror_url'] = $mirror_url;

        
        $hooks_url = $object->hooks_url;
        after_hooks_url:        $result['hooks_url'] = $hooks_url;

        
        $svn_url = $object->svn_url;

        if ($svn_url === null) {
            goto after_svn_url;
        }
        after_svn_url:        $result['svn_url'] = $svn_url;

        
        $homepage = $object->homepage;

        if ($homepage === null) {
            goto after_homepage;
        }
        after_homepage:        $result['homepage'] = $homepage;

        
        $language = $object->language;

        if ($language === null) {
            goto after_language;
        }
        after_language:        $result['language'] = $language;

        
        $forks_count = $object->forks_count;

        if ($forks_count === null) {
            goto after_forks_count;
        }
        after_forks_count:        $result['forks_count'] = $forks_count;

        
        $stargazers_count = $object->stargazers_count;

        if ($stargazers_count === null) {
            goto after_stargazers_count;
        }
        after_stargazers_count:        $result['stargazers_count'] = $stargazers_count;

        
        $watchers_count = $object->watchers_count;

        if ($watchers_count === null) {
            goto after_watchers_count;
        }
        after_watchers_count:        $result['watchers_count'] = $watchers_count;

        
        $size = $object->size;

        if ($size === null) {
            goto after_size;
        }
        after_size:        $result['size'] = $size;

        
        $default_branch = $object->default_branch;

        if ($default_branch === null) {
            goto after_default_branch;
        }
        after_default_branch:        $result['default_branch'] = $default_branch;

        
        $open_issues_count = $object->open_issues_count;

        if ($open_issues_count === null) {
            goto after_open_issues_count;
        }
        after_open_issues_count:        $result['open_issues_count'] = $open_issues_count;

        
        $is_template = $object->is_template;

        if ($is_template === null) {
            goto after_is_template;
        }
        after_is_template:        $result['is_template'] = $is_template;

        
        $topics = $object->topics;

        if ($topics === null) {
            goto after_topics;
        }
        static $topicsSerializer0;

        if ($topicsSerializer0 === null) {
            $topicsSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $topics = $topicsSerializer0->serialize($topics, $this);
        after_topics:        $result['topics'] = $topics;

        
        $has_issues = $object->has_issues;

        if ($has_issues === null) {
            goto after_has_issues;
        }
        after_has_issues:        $result['has_issues'] = $has_issues;

        
        $has_projects = $object->has_projects;

        if ($has_projects === null) {
            goto after_has_projects;
        }
        after_has_projects:        $result['has_projects'] = $has_projects;

        
        $has_wiki = $object->has_wiki;

        if ($has_wiki === null) {
            goto after_has_wiki;
        }
        after_has_wiki:        $result['has_wiki'] = $has_wiki;

        
        $has_pages = $object->has_pages;

        if ($has_pages === null) {
            goto after_has_pages;
        }
        after_has_pages:        $result['has_pages'] = $has_pages;

        
        $has_downloads = $object->has_downloads;

        if ($has_downloads === null) {
            goto after_has_downloads;
        }
        after_has_downloads:        $result['has_downloads'] = $has_downloads;

        
        $has_discussions = $object->has_discussions;

        if ($has_discussions === null) {
            goto after_has_discussions;
        }
        after_has_discussions:        $result['has_discussions'] = $has_discussions;

        
        $archived = $object->archived;

        if ($archived === null) {
            goto after_archived;
        }
        after_archived:        $result['archived'] = $archived;

        
        $disabled = $object->disabled;

        if ($disabled === null) {
            goto after_disabled;
        }
        after_disabled:        $result['disabled'] = $disabled;

        
        $visibility = $object->visibility;

        if ($visibility === null) {
            goto after_visibility;
        }
        after_visibility:        $result['visibility'] = $visibility;

        
        $pushed_at = $object->pushed_at;

        if ($pushed_at === null) {
            goto after_pushed_at;
        }
        after_pushed_at:        $result['pushed_at'] = $pushed_at;

        
        $created_at = $object->created_at;

        if ($created_at === null) {
            goto after_created_at;
        }
        after_created_at:        $result['created_at'] = $created_at;

        
        $updated_at = $object->updated_at;

        if ($updated_at === null) {
            goto after_updated_at;
        }
        after_updated_at:        $result['updated_at'] = $updated_at;

        
        $permissions = $object->permissions;

        if ($permissions === null) {
            goto after_permissions;
        }
        $permissions = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Repository⚡️TemplateRepository⚡️Permissions($permissions);
        after_permissions:        $result['permissions'] = $permissions;

        
        $role_name = $object->role_name;

        if ($role_name === null) {
            goto after_role_name;
        }
        after_role_name:        $result['role_name'] = $role_name;

        
        $temp_clone_token = $object->temp_clone_token;

        if ($temp_clone_token === null) {
            goto after_temp_clone_token;
        }
        after_temp_clone_token:        $result['temp_clone_token'] = $temp_clone_token;

        
        $delete_branch_on_merge = $object->delete_branch_on_merge;

        if ($delete_branch_on_merge === null) {
            goto after_delete_branch_on_merge;
        }
        after_delete_branch_on_merge:        $result['delete_branch_on_merge'] = $delete_branch_on_merge;

        
        $subscribers_count = $object->subscribers_count;

        if ($subscribers_count === null) {
            goto after_subscribers_count;
        }
        after_subscribers_count:        $result['subscribers_count'] = $subscribers_count;

        
        $network_count = $object->network_count;

        if ($network_count === null) {
            goto after_network_count;
        }
        after_network_count:        $result['network_count'] = $network_count;

        
        $code_of_conduct = $object->code_of_conduct;

        if ($code_of_conduct === null) {
            goto after_code_of_conduct;
        }
        $code_of_conduct = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CodeOfConduct($code_of_conduct);
        after_code_of_conduct:        $result['code_of_conduct'] = $code_of_conduct;

        
        $license = $object->license;

        if ($license === null) {
            goto after_license;
        }
        $license = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️MinimalRepository⚡️License($license);
        after_license:        $result['license'] = $license;

        
        $forks = $object->forks;

        if ($forks === null) {
            goto after_forks;
        }
        after_forks:        $result['forks'] = $forks;

        
        $open_issues = $object->open_issues;

        if ($open_issues === null) {
            goto after_open_issues;
        }
        after_open_issues:        $result['open_issues'] = $open_issues;

        
        $watchers = $object->watchers;

        if ($watchers === null) {
            goto after_watchers;
        }
        after_watchers:        $result['watchers'] = $watchers;

        
        $allow_forking = $object->allow_forking;

        if ($allow_forking === null) {
            goto after_allow_forking;
        }
        after_allow_forking:        $result['allow_forking'] = $allow_forking;

        
        $web_commit_signoff_required = $object->web_commit_signoff_required;

        if ($web_commit_signoff_required === null) {
            goto after_web_commit_signoff_required;
        }
        after_web_commit_signoff_required:        $result['web_commit_signoff_required'] = $web_commit_signoff_required;

        
        $security_and_analysis = $object->security_and_analysis;

        if ($security_and_analysis === null) {
            goto after_security_and_analysis;
        }
        $security_and_analysis = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SecurityAndAnalysis($security_and_analysis);
        after_security_and_analysis:        $result['security_and_analysis'] = $security_and_analysis;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Repository⚡️TemplateRepository⚡️Permissions(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\Repository\TemplateRepository\Permissions);
        $result = [];

        $admin = $object->admin;

        if ($admin === null) {
            goto after_admin;
        }
        after_admin:        $result['admin'] = $admin;

        
        $maintain = $object->maintain;

        if ($maintain === null) {
            goto after_maintain;
        }
        after_maintain:        $result['maintain'] = $maintain;

        
        $push = $object->push;

        if ($push === null) {
            goto after_push;
        }
        after_push:        $result['push'] = $push;

        
        $triage = $object->triage;

        if ($triage === null) {
            goto after_triage;
        }
        after_triage:        $result['triage'] = $triage;

        
        $pull = $object->pull;

        if ($pull === null) {
            goto after_pull;
        }
        after_pull:        $result['pull'] = $pull;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CodeOfConduct(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\CodeOfConduct);
        $result = [];

        $key = $object->key;
        after_key:        $result['key'] = $key;

        
        $name = $object->name;
        after_name:        $result['name'] = $name;

        
        $url = $object->url;
        after_url:        $result['url'] = $url;

        
        $body = $object->body;

        if ($body === null) {
            goto after_body;
        }
        after_body:        $result['body'] = $body;

        
        $html_url = $object->html_url;

        if ($html_url === null) {
            goto after_html_url;
        }
        after_html_url:        $result['html_url'] = $html_url;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️MinimalRepository⚡️License(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\MinimalRepository\License);
        $result = [];

        $key = $object->key;

        if ($key === null) {
            goto after_key;
        }
        after_key:        $result['key'] = $key;

        
        $name = $object->name;

        if ($name === null) {
            goto after_name;
        }
        after_name:        $result['name'] = $name;

        
        $spdx_id = $object->spdx_id;

        if ($spdx_id === null) {
            goto after_spdx_id;
        }
        after_spdx_id:        $result['spdx_id'] = $spdx_id;

        
        $url = $object->url;

        if ($url === null) {
            goto after_url;
        }
        after_url:        $result['url'] = $url;

        
        $node_id = $object->node_id;

        if ($node_id === null) {
            goto after_node_id;
        }
        after_node_id:        $result['node_id'] = $node_id;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SecurityAndAnalysis(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\SecurityAndAnalysis);
        $result = [];

        $advanced_security = $object->advanced_security;

        if ($advanced_security === null) {
            goto after_advanced_security;
        }
        $advanced_security = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SecurityAndAnalysis⚡️AdvancedSecurity($advanced_security);
        after_advanced_security:        $result['advanced_security'] = $advanced_security;

        
        $secret_scanning = $object->secret_scanning;

        if ($secret_scanning === null) {
            goto after_secret_scanning;
        }
        $secret_scanning = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SecurityAndAnalysis⚡️AdvancedSecurity($secret_scanning);
        after_secret_scanning:        $result['secret_scanning'] = $secret_scanning;

        
        $secret_scanning_push_protection = $object->secret_scanning_push_protection;

        if ($secret_scanning_push_protection === null) {
            goto after_secret_scanning_push_protection;
        }
        $secret_scanning_push_protection = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SecurityAndAnalysis⚡️AdvancedSecurity($secret_scanning_push_protection);
        after_secret_scanning_push_protection:        $result['secret_scanning_push_protection'] = $secret_scanning_push_protection;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SecurityAndAnalysis⚡️AdvancedSecurity(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\SecurityAndAnalysis\AdvancedSecurity);
        $result = [];

        $status = $object->status;

        if ($status === null) {
            goto after_status;
        }
        after_status:        $result['status'] = $status;


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
