<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Hydrator\WebHook;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class CheckSuite implements ObjectMapper
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
            'ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteCompleted($payload),
                'ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted\CheckSuite' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteCompleted⚡️CheckSuite($payload),
                'ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted\CheckSuite\App' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteCompleted⚡️CheckSuite⚡️App($payload),
                'ApiClients\Client\GitHub\Schema\Discussion\AnswerChosenBy' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Discussion⚡️AnswerChosenBy($payload),
                'ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted\CheckSuite\App\Permissions' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteCompleted⚡️CheckSuite⚡️App⚡️Permissions($payload),
                'ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted\CheckSuite\HeadCommit' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteCompleted⚡️CheckSuite⚡️HeadCommit($payload),
                'ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted\CheckSuite\HeadCommit\Author' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteCompleted⚡️CheckSuite⚡️HeadCommit⚡️Author($payload),
                'ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted\CheckSuite\PullRequests' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteCompleted⚡️CheckSuite⚡️PullRequests($payload),
                'ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted\CheckSuite\PullRequests\Base' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteCompleted⚡️CheckSuite⚡️PullRequests⚡️Base($payload),
                'ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted\CheckSuite\PullRequests\Base\Repo' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteCompleted⚡️CheckSuite⚡️PullRequests⚡️Base⚡️Repo($payload),
                'ApiClients\Client\GitHub\Schema\Enterprise' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Enterprise($payload),
                'ApiClients\Client\GitHub\Schema\SimpleInstallation' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleInstallation($payload),
                'ApiClients\Client\GitHub\Schema\OrganizationSimple' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️OrganizationSimple($payload),
                'ApiClients\Client\GitHub\Schema\Repository' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Repository($payload),
                'ApiClients\Client\GitHub\Schema\Repository\Permissions' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Repository⚡️Permissions($payload),
                'ApiClients\Client\GitHub\Schema\SimpleUser' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($payload),
                'ApiClients\Client\GitHub\Schema\Repository\TemplateRepository' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Repository⚡️TemplateRepository($payload),
                'ApiClients\Client\GitHub\Schema\Repository\TemplateRepository\Owner' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Repository⚡️TemplateRepository⚡️Owner($payload),
                'ApiClients\Client\GitHub\Schema\Repository\TemplateRepository\Permissions' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Repository⚡️TemplateRepository⚡️Permissions($payload),
                'ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRequested' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteRequested($payload),
                'ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRequested\CheckSuite' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteRequested⚡️CheckSuite($payload),
                'ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRequested\CheckSuite\App' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteRequested⚡️CheckSuite⚡️App($payload),
                'ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRerequested' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteRerequested($payload),
                'ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRerequested\ActionsMeta' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteRerequested⚡️ActionsMeta($payload),
                'ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRerequested\ActionsMeta\RerunInfo' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteRerequested⚡️ActionsMeta⚡️RerunInfo($payload),
                'ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRerequested\CheckSuite' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteRerequested⚡️CheckSuite($payload),
                'ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRerequested\CheckSuite\App' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteRerequested⚡️CheckSuite⚡️App($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteCompleted(array $payload): \ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['action'] ?? null;

            if ($value === null) {
                $missingFields[] = 'action';
                goto after_action;
            }

            $properties['action'] = $value;

            after_action:

            $value = $payload['actions_meta'] ?? null;

            if ($value === null) {
                $properties['actions_meta'] = null;
                goto after_actions_meta;
            }

            $properties['actions_meta'] = $value;

            after_actions_meta:

            $value = $payload['check_suite'] ?? null;

            if ($value === null) {
                $missingFields[] = 'check_suite';
                goto after_check_suite;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'check_suite';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteCompleted⚡️CheckSuite($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['check_suite'] = $value;

            after_check_suite:

            $value = $payload['enterprise'] ?? null;

            if ($value === null) {
                $properties['enterprise'] = null;
                goto after_enterprise;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'enterprise';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Enterprise($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['enterprise'] = $value;

            after_enterprise:

            $value = $payload['installation'] ?? null;

            if ($value === null) {
                $properties['installation'] = null;
                goto after_installation;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'installation';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleInstallation($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['installation'] = $value;

            after_installation:

            $value = $payload['organization'] ?? null;

            if ($value === null) {
                $properties['organization'] = null;
                goto after_organization;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'organization';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️OrganizationSimple($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['organization'] = $value;

            after_organization:

            $value = $payload['repository'] ?? null;

            if ($value === null) {
                $missingFields[] = 'repository';
                goto after_repository;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'repository';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Repository($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['repository'] = $value;

            after_repository:

            $value = $payload['sender'] ?? null;

            if ($value === null) {
                $missingFields[] = 'sender';
                goto after_sender;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'sender';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['sender'] = $value;

            after_sender:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteCompleted⚡️CheckSuite(array $payload): \ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted\CheckSuite
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['after'] ?? null;

            if ($value === null) {
                $properties['after'] = null;
                goto after_after;
            }

            $properties['after'] = $value;

            after_after:

            $value = $payload['app'] ?? null;

            if ($value === null) {
                $missingFields[] = 'app';
                goto after_app;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'app';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteCompleted⚡️CheckSuite⚡️App($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['app'] = $value;

            after_app:

            $value = $payload['before'] ?? null;

            if ($value === null) {
                $properties['before'] = null;
                goto after_before;
            }

            $properties['before'] = $value;

            after_before:

            $value = $payload['check_runs_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'check_runs_url';
                goto after_check_runs_url;
            }

            $properties['check_runs_url'] = $value;

            after_check_runs_url:

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
                goto after_created_at;
            }

            $properties['created_at'] = $value;

            after_created_at:

            $value = $payload['head_branch'] ?? null;

            if ($value === null) {
                $properties['head_branch'] = null;
                goto after_head_branch;
            }

            $properties['head_branch'] = $value;

            after_head_branch:

            $value = $payload['head_commit'] ?? null;

            if ($value === null) {
                $missingFields[] = 'head_commit';
                goto after_head_commit;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'head_commit';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteCompleted⚡️CheckSuite⚡️HeadCommit($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['head_commit'] = $value;

            after_head_commit:

            $value = $payload['head_sha'] ?? null;

            if ($value === null) {
                $missingFields[] = 'head_sha';
                goto after_head_sha;
            }

            $properties['head_sha'] = $value;

            after_head_sha:

            $value = $payload['id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'id';
                goto after_id;
            }

            $properties['id'] = $value;

            after_id:

            $value = $payload['latest_check_runs_count'] ?? null;

            if ($value === null) {
                $missingFields[] = 'latest_check_runs_count';
                goto after_latest_check_runs_count;
            }

            $properties['latest_check_runs_count'] = $value;

            after_latest_check_runs_count:

            $value = $payload['node_id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'node_id';
                goto after_node_id;
            }

            $properties['node_id'] = $value;

            after_node_id:

            $value = $payload['pull_requests'] ?? null;

            if ($value === null) {
                $missingFields[] = 'pull_requests';
                goto after_pull_requests;
            }

            static $pull_requestsCaster1;

            if ($pull_requestsCaster1 === null) {
                $pull_requestsCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\WebhookCheckSuiteCompleted\\CheckSuite\\PullRequests',
));
            }

            $value = $pull_requestsCaster1->cast($value, $this);

            $properties['pull_requests'] = $value;

            after_pull_requests:

            $value = $payload['rerequestable'] ?? null;

            if ($value === null) {
                $properties['rerequestable'] = null;
                goto after_rerequestable;
            }

            $properties['rerequestable'] = $value;

            after_rerequestable:

            $value = $payload['runs_rerequestable'] ?? null;

            if ($value === null) {
                $properties['runs_rerequestable'] = null;
                goto after_runs_rerequestable;
            }

            $properties['runs_rerequestable'] = $value;

            after_runs_rerequestable:

            $value = $payload['status'] ?? null;

            if ($value === null) {
                $properties['status'] = null;
                goto after_status;
            }

            $properties['status'] = $value;

            after_status:

            $value = $payload['updated_at'] ?? null;

            if ($value === null) {
                $missingFields[] = 'updated_at';
                goto after_updated_at;
            }

            $properties['updated_at'] = $value;

            after_updated_at:

            $value = $payload['url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'url';
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted\CheckSuite', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted\CheckSuite::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted\CheckSuite(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted\CheckSuite', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteCompleted⚡️CheckSuite⚡️App(array $payload): \ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted\CheckSuite\App
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['created_at'] ?? null;

            if ($value === null) {
                $properties['created_at'] = null;
                goto after_created_at;
            }

            $properties['created_at'] = $value;

            after_created_at:

            $value = $payload['description'] ?? null;

            if ($value === null) {
                $properties['description'] = null;
                goto after_description;
            }

            $properties['description'] = $value;

            after_description:

            $value = $payload['events'] ?? null;

            if ($value === null) {
                $properties['events'] = null;
                goto after_events;
            }

            $properties['events'] = $value;

            after_events:

            $value = $payload['external_url'] ?? null;

            if ($value === null) {
                $properties['external_url'] = null;
                goto after_external_url;
            }

            $properties['external_url'] = $value;

            after_external_url:

            $value = $payload['html_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'html_url';
                goto after_html_url;
            }

            $properties['html_url'] = $value;

            after_html_url:

            $value = $payload['id'] ?? null;

            if ($value === null) {
                $properties['id'] = null;
                goto after_id;
            }

            $properties['id'] = $value;

            after_id:

            $value = $payload['name'] ?? null;

            if ($value === null) {
                $missingFields[] = 'name';
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

            $value = $payload['owner'] ?? null;

            if ($value === null) {
                $properties['owner'] = null;
                goto after_owner;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'owner';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Discussion⚡️AnswerChosenBy($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['owner'] = $value;

            after_owner:

            $value = $payload['permissions'] ?? null;

            if ($value === null) {
                $properties['permissions'] = null;
                goto after_permissions;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'permissions';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteCompleted⚡️CheckSuite⚡️App⚡️Permissions($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['permissions'] = $value;

            after_permissions:

            $value = $payload['slug'] ?? null;

            if ($value === null) {
                $properties['slug'] = null;
                goto after_slug;
            }

            $properties['slug'] = $value;

            after_slug:

            $value = $payload['updated_at'] ?? null;

            if ($value === null) {
                $properties['updated_at'] = null;
                goto after_updated_at;
            }

            $properties['updated_at'] = $value;

            after_updated_at:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted\CheckSuite\App', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted\CheckSuite\App::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted\CheckSuite\App(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted\CheckSuite\App', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Discussion⚡️AnswerChosenBy(array $payload): \ApiClients\Client\GitHub\Schema\Discussion\AnswerChosenBy
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['avatar_url'] ?? null;

            if ($value === null) {
                $properties['avatar_url'] = null;
                goto after_avatar_url;
            }

            $properties['avatar_url'] = $value;

            after_avatar_url:

            $value = $payload['deleted'] ?? null;

            if ($value === null) {
                $properties['deleted'] = null;
                goto after_deleted;
            }

            $properties['deleted'] = $value;

            after_deleted:

            $value = $payload['email'] ?? null;

            if ($value === null) {
                $properties['email'] = null;
                goto after_email;
            }

            $properties['email'] = $value;

            after_email:

            $value = $payload['events_url'] ?? null;

            if ($value === null) {
                $properties['events_url'] = null;
                goto after_events_url;
            }

            $properties['events_url'] = $value;

            after_events_url:

            $value = $payload['followers_url'] ?? null;

            if ($value === null) {
                $properties['followers_url'] = null;
                goto after_followers_url;
            }

            $properties['followers_url'] = $value;

            after_followers_url:

            $value = $payload['following_url'] ?? null;

            if ($value === null) {
                $properties['following_url'] = null;
                goto after_following_url;
            }

            $properties['following_url'] = $value;

            after_following_url:

            $value = $payload['gists_url'] ?? null;

            if ($value === null) {
                $properties['gists_url'] = null;
                goto after_gists_url;
            }

            $properties['gists_url'] = $value;

            after_gists_url:

            $value = $payload['gravatar_id'] ?? null;

            if ($value === null) {
                $properties['gravatar_id'] = null;
                goto after_gravatar_id;
            }

            $properties['gravatar_id'] = $value;

            after_gravatar_id:

            $value = $payload['html_url'] ?? null;

            if ($value === null) {
                $properties['html_url'] = null;
                goto after_html_url;
            }

            $properties['html_url'] = $value;

            after_html_url:

            $value = $payload['id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'id';
                goto after_id;
            }

            $properties['id'] = $value;

            after_id:

            $value = $payload['login'] ?? null;

            if ($value === null) {
                $missingFields[] = 'login';
                goto after_login;
            }

            $properties['login'] = $value;

            after_login:

            $value = $payload['name'] ?? null;

            if ($value === null) {
                $properties['name'] = null;
                goto after_name;
            }

            $properties['name'] = $value;

            after_name:

            $value = $payload['node_id'] ?? null;

            if ($value === null) {
                $properties['node_id'] = null;
                goto after_node_id;
            }

            $properties['node_id'] = $value;

            after_node_id:

            $value = $payload['organizations_url'] ?? null;

            if ($value === null) {
                $properties['organizations_url'] = null;
                goto after_organizations_url;
            }

            $properties['organizations_url'] = $value;

            after_organizations_url:

            $value = $payload['received_events_url'] ?? null;

            if ($value === null) {
                $properties['received_events_url'] = null;
                goto after_received_events_url;
            }

            $properties['received_events_url'] = $value;

            after_received_events_url:

            $value = $payload['repos_url'] ?? null;

            if ($value === null) {
                $properties['repos_url'] = null;
                goto after_repos_url;
            }

            $properties['repos_url'] = $value;

            after_repos_url:

            $value = $payload['site_admin'] ?? null;

            if ($value === null) {
                $properties['site_admin'] = null;
                goto after_site_admin;
            }

            $properties['site_admin'] = $value;

            after_site_admin:

            $value = $payload['starred_url'] ?? null;

            if ($value === null) {
                $properties['starred_url'] = null;
                goto after_starred_url;
            }

            $properties['starred_url'] = $value;

            after_starred_url:

            $value = $payload['subscriptions_url'] ?? null;

            if ($value === null) {
                $properties['subscriptions_url'] = null;
                goto after_subscriptions_url;
            }

            $properties['subscriptions_url'] = $value;

            after_subscriptions_url:

            $value = $payload['type'] ?? null;

            if ($value === null) {
                $properties['type'] = null;
                goto after_type;
            }

            $properties['type'] = $value;

            after_type:

            $value = $payload['url'] ?? null;

            if ($value === null) {
                $properties['url'] = null;
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Discussion\AnswerChosenBy', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\Discussion\AnswerChosenBy::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\Discussion\AnswerChosenBy(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Discussion\AnswerChosenBy', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteCompleted⚡️CheckSuite⚡️App⚡️Permissions(array $payload): \ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted\CheckSuite\App\Permissions
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['actions'] ?? null;

            if ($value === null) {
                $properties['actions'] = null;
                goto after_actions;
            }

            $properties['actions'] = $value;

            after_actions:

            $value = $payload['administration'] ?? null;

            if ($value === null) {
                $properties['administration'] = null;
                goto after_administration;
            }

            $properties['administration'] = $value;

            after_administration:

            $value = $payload['checks'] ?? null;

            if ($value === null) {
                $properties['checks'] = null;
                goto after_checks;
            }

            $properties['checks'] = $value;

            after_checks:

            $value = $payload['content_references'] ?? null;

            if ($value === null) {
                $properties['content_references'] = null;
                goto after_content_references;
            }

            $properties['content_references'] = $value;

            after_content_references:

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

            $value = $payload['discussions'] ?? null;

            if ($value === null) {
                $properties['discussions'] = null;
                goto after_discussions;
            }

            $properties['discussions'] = $value;

            after_discussions:

            $value = $payload['emails'] ?? null;

            if ($value === null) {
                $properties['emails'] = null;
                goto after_emails;
            }

            $properties['emails'] = $value;

            after_emails:

            $value = $payload['environments'] ?? null;

            if ($value === null) {
                $properties['environments'] = null;
                goto after_environments;
            }

            $properties['environments'] = $value;

            after_environments:

            $value = $payload['issues'] ?? null;

            if ($value === null) {
                $properties['issues'] = null;
                goto after_issues;
            }

            $properties['issues'] = $value;

            after_issues:

            $value = $payload['keys'] ?? null;

            if ($value === null) {
                $properties['keys'] = null;
                goto after_keys;
            }

            $properties['keys'] = $value;

            after_keys:

            $value = $payload['members'] ?? null;

            if ($value === null) {
                $properties['members'] = null;
                goto after_members;
            }

            $properties['members'] = $value;

            after_members:

            $value = $payload['metadata'] ?? null;

            if ($value === null) {
                $properties['metadata'] = null;
                goto after_metadata;
            }

            $properties['metadata'] = $value;

            after_metadata:

            $value = $payload['organization_administration'] ?? null;

            if ($value === null) {
                $properties['organization_administration'] = null;
                goto after_organization_administration;
            }

            $properties['organization_administration'] = $value;

            after_organization_administration:

            $value = $payload['organization_hooks'] ?? null;

            if ($value === null) {
                $properties['organization_hooks'] = null;
                goto after_organization_hooks;
            }

            $properties['organization_hooks'] = $value;

            after_organization_hooks:

            $value = $payload['organization_packages'] ?? null;

            if ($value === null) {
                $properties['organization_packages'] = null;
                goto after_organization_packages;
            }

            $properties['organization_packages'] = $value;

            after_organization_packages:

            $value = $payload['organization_plan'] ?? null;

            if ($value === null) {
                $properties['organization_plan'] = null;
                goto after_organization_plan;
            }

            $properties['organization_plan'] = $value;

            after_organization_plan:

            $value = $payload['organization_projects'] ?? null;

            if ($value === null) {
                $properties['organization_projects'] = null;
                goto after_organization_projects;
            }

            $properties['organization_projects'] = $value;

            after_organization_projects:

            $value = $payload['organization_secrets'] ?? null;

            if ($value === null) {
                $properties['organization_secrets'] = null;
                goto after_organization_secrets;
            }

            $properties['organization_secrets'] = $value;

            after_organization_secrets:

            $value = $payload['organization_self_hosted_runners'] ?? null;

            if ($value === null) {
                $properties['organization_self_hosted_runners'] = null;
                goto after_organization_self_hosted_runners;
            }

            $properties['organization_self_hosted_runners'] = $value;

            after_organization_self_hosted_runners:

            $value = $payload['organization_user_blocking'] ?? null;

            if ($value === null) {
                $properties['organization_user_blocking'] = null;
                goto after_organization_user_blocking;
            }

            $properties['organization_user_blocking'] = $value;

            after_organization_user_blocking:

            $value = $payload['packages'] ?? null;

            if ($value === null) {
                $properties['packages'] = null;
                goto after_packages;
            }

            $properties['packages'] = $value;

            after_packages:

            $value = $payload['pages'] ?? null;

            if ($value === null) {
                $properties['pages'] = null;
                goto after_pages;
            }

            $properties['pages'] = $value;

            after_pages:

            $value = $payload['pull_requests'] ?? null;

            if ($value === null) {
                $properties['pull_requests'] = null;
                goto after_pull_requests;
            }

            $properties['pull_requests'] = $value;

            after_pull_requests:

            $value = $payload['repository_hooks'] ?? null;

            if ($value === null) {
                $properties['repository_hooks'] = null;
                goto after_repository_hooks;
            }

            $properties['repository_hooks'] = $value;

            after_repository_hooks:

            $value = $payload['repository_projects'] ?? null;

            if ($value === null) {
                $properties['repository_projects'] = null;
                goto after_repository_projects;
            }

            $properties['repository_projects'] = $value;

            after_repository_projects:

            $value = $payload['secret_scanning_alerts'] ?? null;

            if ($value === null) {
                $properties['secret_scanning_alerts'] = null;
                goto after_secret_scanning_alerts;
            }

            $properties['secret_scanning_alerts'] = $value;

            after_secret_scanning_alerts:

            $value = $payload['secrets'] ?? null;

            if ($value === null) {
                $properties['secrets'] = null;
                goto after_secrets;
            }

            $properties['secrets'] = $value;

            after_secrets:

            $value = $payload['security_events'] ?? null;

            if ($value === null) {
                $properties['security_events'] = null;
                goto after_security_events;
            }

            $properties['security_events'] = $value;

            after_security_events:

            $value = $payload['security_scanning_alert'] ?? null;

            if ($value === null) {
                $properties['security_scanning_alert'] = null;
                goto after_security_scanning_alert;
            }

            $properties['security_scanning_alert'] = $value;

            after_security_scanning_alert:

            $value = $payload['single_file'] ?? null;

            if ($value === null) {
                $properties['single_file'] = null;
                goto after_single_file;
            }

            $properties['single_file'] = $value;

            after_single_file:

            $value = $payload['statuses'] ?? null;

            if ($value === null) {
                $properties['statuses'] = null;
                goto after_statuses;
            }

            $properties['statuses'] = $value;

            after_statuses:

            $value = $payload['team_discussions'] ?? null;

            if ($value === null) {
                $properties['team_discussions'] = null;
                goto after_team_discussions;
            }

            $properties['team_discussions'] = $value;

            after_team_discussions:

            $value = $payload['vulnerability_alerts'] ?? null;

            if ($value === null) {
                $properties['vulnerability_alerts'] = null;
                goto after_vulnerability_alerts;
            }

            $properties['vulnerability_alerts'] = $value;

            after_vulnerability_alerts:

            $value = $payload['workflows'] ?? null;

            if ($value === null) {
                $properties['workflows'] = null;
                goto after_workflows;
            }

            $properties['workflows'] = $value;

            after_workflows:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted\CheckSuite\App\Permissions', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted\CheckSuite\App\Permissions::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted\CheckSuite\App\Permissions(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted\CheckSuite\App\Permissions', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteCompleted⚡️CheckSuite⚡️HeadCommit(array $payload): \ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted\CheckSuite\HeadCommit
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['author'] ?? null;

            if ($value === null) {
                $missingFields[] = 'author';
                goto after_author;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'author';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteCompleted⚡️CheckSuite⚡️HeadCommit⚡️Author($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['author'] = $value;

            after_author:

            $value = $payload['committer'] ?? null;

            if ($value === null) {
                $missingFields[] = 'committer';
                goto after_committer;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'committer';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteCompleted⚡️CheckSuite⚡️HeadCommit⚡️Author($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['committer'] = $value;

            after_committer:

            $value = $payload['id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'id';
                goto after_id;
            }

            $properties['id'] = $value;

            after_id:

            $value = $payload['message'] ?? null;

            if ($value === null) {
                $missingFields[] = 'message';
                goto after_message;
            }

            $properties['message'] = $value;

            after_message:

            $value = $payload['timestamp'] ?? null;

            if ($value === null) {
                $missingFields[] = 'timestamp';
                goto after_timestamp;
            }

            $properties['timestamp'] = $value;

            after_timestamp:

            $value = $payload['tree_id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'tree_id';
                goto after_tree_id;
            }

            $properties['tree_id'] = $value;

            after_tree_id:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted\CheckSuite\HeadCommit', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted\CheckSuite\HeadCommit::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted\CheckSuite\HeadCommit(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted\CheckSuite\HeadCommit', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteCompleted⚡️CheckSuite⚡️HeadCommit⚡️Author(array $payload): \ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted\CheckSuite\HeadCommit\Author
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['date'] ?? null;

            if ($value === null) {
                $properties['date'] = null;
                goto after_date;
            }

            $properties['date'] = $value;

            after_date:

            $value = $payload['email'] ?? null;

            if ($value === null) {
                $properties['email'] = null;
                goto after_email;
            }

            $properties['email'] = $value;

            after_email:

            $value = $payload['name'] ?? null;

            if ($value === null) {
                $missingFields[] = 'name';
                goto after_name;
            }

            $properties['name'] = $value;

            after_name:

            $value = $payload['username'] ?? null;

            if ($value === null) {
                $properties['username'] = null;
                goto after_username;
            }

            $properties['username'] = $value;

            after_username:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted\CheckSuite\HeadCommit\Author', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted\CheckSuite\HeadCommit\Author::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted\CheckSuite\HeadCommit\Author(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted\CheckSuite\HeadCommit\Author', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteCompleted⚡️CheckSuite⚡️PullRequests(array $payload): \ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted\CheckSuite\PullRequests
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['base'] ?? null;

            if ($value === null) {
                $missingFields[] = 'base';
                goto after_base;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'base';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteCompleted⚡️CheckSuite⚡️PullRequests⚡️Base($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['base'] = $value;

            after_base:

            $value = $payload['head'] ?? null;

            if ($value === null) {
                $missingFields[] = 'head';
                goto after_head;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'head';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteCompleted⚡️CheckSuite⚡️PullRequests⚡️Base($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['head'] = $value;

            after_head:

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

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted\CheckSuite\PullRequests', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted\CheckSuite\PullRequests::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted\CheckSuite\PullRequests(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted\CheckSuite\PullRequests', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteCompleted⚡️CheckSuite⚡️PullRequests⚡️Base(array $payload): \ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted\CheckSuite\PullRequests\Base
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

            $value = $payload['repo'] ?? null;

            if ($value === null) {
                $missingFields[] = 'repo';
                goto after_repo;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'repo';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteCompleted⚡️CheckSuite⚡️PullRequests⚡️Base⚡️Repo($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['repo'] = $value;

            after_repo:

            $value = $payload['sha'] ?? null;

            if ($value === null) {
                $missingFields[] = 'sha';
                goto after_sha;
            }

            $properties['sha'] = $value;

            after_sha:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted\CheckSuite\PullRequests\Base', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted\CheckSuite\PullRequests\Base::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted\CheckSuite\PullRequests\Base(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted\CheckSuite\PullRequests\Base', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteCompleted⚡️CheckSuite⚡️PullRequests⚡️Base⚡️Repo(array $payload): \ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted\CheckSuite\PullRequests\Base\Repo
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

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted\CheckSuite\PullRequests\Base\Repo', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted\CheckSuite\PullRequests\Base\Repo::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted\CheckSuite\PullRequests\Base\Repo(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted\CheckSuite\PullRequests\Base\Repo', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Enterprise(array $payload): \ApiClients\Client\GitHub\Schema\Enterprise
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['description'] ?? null;

            if ($value === null) {
                $properties['description'] = null;
                goto after_description;
            }

            $properties['description'] = $value;

            after_description:

            $value = $payload['html_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'html_url';
                goto after_html_url;
            }

            $properties['html_url'] = $value;

            after_html_url:

            $value = $payload['website_url'] ?? null;

            if ($value === null) {
                $properties['website_url'] = null;
                goto after_website_url;
            }

            $properties['website_url'] = $value;

            after_website_url:

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

            $value = $payload['slug'] ?? null;

            if ($value === null) {
                $missingFields[] = 'slug';
                goto after_slug;
            }

            $properties['slug'] = $value;

            after_slug:

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

            $value = $payload['avatar_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'avatar_url';
                goto after_avatar_url;
            }

            $properties['avatar_url'] = $value;

            after_avatar_url:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Enterprise', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\Enterprise::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\Enterprise(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Enterprise', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleInstallation(array $payload): \ApiClients\Client\GitHub\Schema\SimpleInstallation
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

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\SimpleInstallation', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\SimpleInstallation::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\SimpleInstallation(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\SimpleInstallation', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️OrganizationSimple(array $payload): \ApiClients\Client\GitHub\Schema\OrganizationSimple
    {
        $properties = []; 
        $missingFields = [];
        try {
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

            $value = $payload['url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'url';
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

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

            $value = $payload['hooks_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'hooks_url';
                goto after_hooks_url;
            }

            $properties['hooks_url'] = $value;

            after_hooks_url:

            $value = $payload['issues_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'issues_url';
                goto after_issues_url;
            }

            $properties['issues_url'] = $value;

            after_issues_url:

            $value = $payload['members_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'members_url';
                goto after_members_url;
            }

            $properties['members_url'] = $value;

            after_members_url:

            $value = $payload['public_members_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'public_members_url';
                goto after_public_members_url;
            }

            $properties['public_members_url'] = $value;

            after_public_members_url:

            $value = $payload['avatar_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'avatar_url';
                goto after_avatar_url;
            }

            $properties['avatar_url'] = $value;

            after_avatar_url:

            $value = $payload['description'] ?? null;

            if ($value === null) {
                $properties['description'] = null;
                goto after_description;
            }

            $properties['description'] = $value;

            after_description:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\OrganizationSimple', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\OrganizationSimple::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\OrganizationSimple(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\OrganizationSimple', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Repository(array $payload): \ApiClients\Client\GitHub\Schema\Repository
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

            $value = $payload['license'] ?? null;

            if ($value === null) {
                $properties['license'] = null;
                goto after_license;
            }

            $properties['license'] = $value;

            after_license:

            $value = $payload['organization'] ?? null;

            if ($value === null) {
                $properties['organization'] = null;
                goto after_organization;
            }

            $properties['organization'] = $value;

            after_organization:

            $value = $payload['forks'] ?? null;

            if ($value === null) {
                $missingFields[] = 'forks';
                goto after_forks;
            }

            $properties['forks'] = $value;

            after_forks:

            $value = $payload['permissions'] ?? null;

            if ($value === null) {
                $properties['permissions'] = null;
                goto after_permissions;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'permissions';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Repository⚡️Permissions($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['permissions'] = $value;

            after_permissions:

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
                $missingFields[] = 'git_url';
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
                $missingFields[] = 'ssh_url';
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
                $missingFields[] = 'clone_url';
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
                $missingFields[] = 'svn_url';
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
                $missingFields[] = 'forks_count';
                goto after_forks_count;
            }

            $properties['forks_count'] = $value;

            after_forks_count:

            $value = $payload['stargazers_count'] ?? null;

            if ($value === null) {
                $missingFields[] = 'stargazers_count';
                goto after_stargazers_count;
            }

            $properties['stargazers_count'] = $value;

            after_stargazers_count:

            $value = $payload['watchers_count'] ?? null;

            if ($value === null) {
                $missingFields[] = 'watchers_count';
                goto after_watchers_count;
            }

            $properties['watchers_count'] = $value;

            after_watchers_count:

            $value = $payload['size'] ?? null;

            if ($value === null) {
                $missingFields[] = 'size';
                goto after_size;
            }

            $properties['size'] = $value;

            after_size:

            $value = $payload['default_branch'] ?? null;

            if ($value === null) {
                $missingFields[] = 'default_branch';
                goto after_default_branch;
            }

            $properties['default_branch'] = $value;

            after_default_branch:

            $value = $payload['open_issues_count'] ?? null;

            if ($value === null) {
                $missingFields[] = 'open_issues_count';
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
                $missingFields[] = 'has_issues';
                goto after_has_issues;
            }

            $properties['has_issues'] = $value;

            after_has_issues:

            $value = $payload['has_projects'] ?? null;

            if ($value === null) {
                $missingFields[] = 'has_projects';
                goto after_has_projects;
            }

            $properties['has_projects'] = $value;

            after_has_projects:

            $value = $payload['has_wiki'] ?? null;

            if ($value === null) {
                $missingFields[] = 'has_wiki';
                goto after_has_wiki;
            }

            $properties['has_wiki'] = $value;

            after_has_wiki:

            $value = $payload['has_pages'] ?? null;

            if ($value === null) {
                $missingFields[] = 'has_pages';
                goto after_has_pages;
            }

            $properties['has_pages'] = $value;

            after_has_pages:

            $value = $payload['has_downloads'] ?? null;

            if ($value === null) {
                $missingFields[] = 'has_downloads';
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
                $missingFields[] = 'archived';
                goto after_archived;
            }

            $properties['archived'] = $value;

            after_archived:

            $value = $payload['disabled'] ?? null;

            if ($value === null) {
                $missingFields[] = 'disabled';
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

            $value = $payload['allow_rebase_merge'] ?? null;

            if ($value === null) {
                $properties['allow_rebase_merge'] = null;
                goto after_allow_rebase_merge;
            }

            $properties['allow_rebase_merge'] = $value;

            after_allow_rebase_merge:

            $value = $payload['template_repository'] ?? null;

            if ($value === null) {
                $properties['template_repository'] = null;
                goto after_template_repository;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'template_repository';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Repository⚡️TemplateRepository($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['template_repository'] = $value;

            after_template_repository:

            $value = $payload['temp_clone_token'] ?? null;

            if ($value === null) {
                $properties['temp_clone_token'] = null;
                goto after_temp_clone_token;
            }

            $properties['temp_clone_token'] = $value;

            after_temp_clone_token:

            $value = $payload['allow_squash_merge'] ?? null;

            if ($value === null) {
                $properties['allow_squash_merge'] = null;
                goto after_allow_squash_merge;
            }

            $properties['allow_squash_merge'] = $value;

            after_allow_squash_merge:

            $value = $payload['allow_auto_merge'] ?? null;

            if ($value === null) {
                $properties['allow_auto_merge'] = null;
                goto after_allow_auto_merge;
            }

            $properties['allow_auto_merge'] = $value;

            after_allow_auto_merge:

            $value = $payload['delete_branch_on_merge'] ?? null;

            if ($value === null) {
                $properties['delete_branch_on_merge'] = null;
                goto after_delete_branch_on_merge;
            }

            $properties['delete_branch_on_merge'] = $value;

            after_delete_branch_on_merge:

            $value = $payload['allow_update_branch'] ?? null;

            if ($value === null) {
                $properties['allow_update_branch'] = null;
                goto after_allow_update_branch;
            }

            $properties['allow_update_branch'] = $value;

            after_allow_update_branch:

            $value = $payload['use_squash_pr_title_as_default'] ?? null;

            if ($value === null) {
                $properties['use_squash_pr_title_as_default'] = null;
                goto after_use_squash_pr_title_as_default;
            }

            $properties['use_squash_pr_title_as_default'] = $value;

            after_use_squash_pr_title_as_default:

            $value = $payload['squash_merge_commit_title'] ?? null;

            if ($value === null) {
                $properties['squash_merge_commit_title'] = null;
                goto after_squash_merge_commit_title;
            }

            $properties['squash_merge_commit_title'] = $value;

            after_squash_merge_commit_title:

            $value = $payload['squash_merge_commit_message'] ?? null;

            if ($value === null) {
                $properties['squash_merge_commit_message'] = null;
                goto after_squash_merge_commit_message;
            }

            $properties['squash_merge_commit_message'] = $value;

            after_squash_merge_commit_message:

            $value = $payload['merge_commit_title'] ?? null;

            if ($value === null) {
                $properties['merge_commit_title'] = null;
                goto after_merge_commit_title;
            }

            $properties['merge_commit_title'] = $value;

            after_merge_commit_title:

            $value = $payload['merge_commit_message'] ?? null;

            if ($value === null) {
                $properties['merge_commit_message'] = null;
                goto after_merge_commit_message;
            }

            $properties['merge_commit_message'] = $value;

            after_merge_commit_message:

            $value = $payload['allow_merge_commit'] ?? null;

            if ($value === null) {
                $properties['allow_merge_commit'] = null;
                goto after_allow_merge_commit;
            }

            $properties['allow_merge_commit'] = $value;

            after_allow_merge_commit:

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

            $value = $payload['open_issues'] ?? null;

            if ($value === null) {
                $missingFields[] = 'open_issues';
                goto after_open_issues;
            }

            $properties['open_issues'] = $value;

            after_open_issues:

            $value = $payload['watchers'] ?? null;

            if ($value === null) {
                $missingFields[] = 'watchers';
                goto after_watchers;
            }

            $properties['watchers'] = $value;

            after_watchers:

            $value = $payload['master_branch'] ?? null;

            if ($value === null) {
                $properties['master_branch'] = null;
                goto after_master_branch;
            }

            $properties['master_branch'] = $value;

            after_master_branch:

            $value = $payload['starred_at'] ?? null;

            if ($value === null) {
                $properties['starred_at'] = null;
                goto after_starred_at;
            }

            $properties['starred_at'] = $value;

            after_starred_at:

            $value = $payload['anonymous_access_enabled'] ?? null;

            if ($value === null) {
                $properties['anonymous_access_enabled'] = null;
                goto after_anonymous_access_enabled;
            }

            $properties['anonymous_access_enabled'] = $value;

            after_anonymous_access_enabled:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Repository', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\Repository::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\Repository(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Repository', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Repository⚡️Permissions(array $payload): \ApiClients\Client\GitHub\Schema\Repository\Permissions
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['admin'] ?? null;

            if ($value === null) {
                $missingFields[] = 'admin';
                goto after_admin;
            }

            $properties['admin'] = $value;

            after_admin:

            $value = $payload['pull'] ?? null;

            if ($value === null) {
                $missingFields[] = 'pull';
                goto after_pull;
            }

            $properties['pull'] = $value;

            after_pull:

            $value = $payload['triage'] ?? null;

            if ($value === null) {
                $properties['triage'] = null;
                goto after_triage;
            }

            $properties['triage'] = $value;

            after_triage:

            $value = $payload['push'] ?? null;

            if ($value === null) {
                $missingFields[] = 'push';
                goto after_push;
            }

            $properties['push'] = $value;

            after_push:

            $value = $payload['maintain'] ?? null;

            if ($value === null) {
                $properties['maintain'] = null;
                goto after_maintain;
            }

            $properties['maintain'] = $value;

            after_maintain:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Repository\Permissions', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\Repository\Permissions::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\Repository\Permissions(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Repository\Permissions', $exception, stack: $this->hydrationStack);
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

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Repository⚡️TemplateRepository(array $payload): \ApiClients\Client\GitHub\Schema\Repository\TemplateRepository
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

            $value = $payload['full_name'] ?? null;

            if ($value === null) {
                $properties['full_name'] = null;
                goto after_full_name;
            }

            $properties['full_name'] = $value;

            after_full_name:

            $value = $payload['owner'] ?? null;

            if ($value === null) {
                $properties['owner'] = null;
                goto after_owner;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'owner';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Repository⚡️TemplateRepository⚡️Owner($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['owner'] = $value;

            after_owner:

            $value = $payload['private'] ?? null;

            if ($value === null) {
                $properties['private'] = null;
                goto after_private;
            }

            $properties['private'] = $value;

            after_private:

            $value = $payload['html_url'] ?? null;

            if ($value === null) {
                $properties['html_url'] = null;
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
                $properties['fork'] = null;
                goto after_fork;
            }

            $properties['fork'] = $value;

            after_fork:

            $value = $payload['url'] ?? null;

            if ($value === null) {
                $properties['url'] = null;
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

            $value = $payload['archive_url'] ?? null;

            if ($value === null) {
                $properties['archive_url'] = null;
                goto after_archive_url;
            }

            $properties['archive_url'] = $value;

            after_archive_url:

            $value = $payload['assignees_url'] ?? null;

            if ($value === null) {
                $properties['assignees_url'] = null;
                goto after_assignees_url;
            }

            $properties['assignees_url'] = $value;

            after_assignees_url:

            $value = $payload['blobs_url'] ?? null;

            if ($value === null) {
                $properties['blobs_url'] = null;
                goto after_blobs_url;
            }

            $properties['blobs_url'] = $value;

            after_blobs_url:

            $value = $payload['branches_url'] ?? null;

            if ($value === null) {
                $properties['branches_url'] = null;
                goto after_branches_url;
            }

            $properties['branches_url'] = $value;

            after_branches_url:

            $value = $payload['collaborators_url'] ?? null;

            if ($value === null) {
                $properties['collaborators_url'] = null;
                goto after_collaborators_url;
            }

            $properties['collaborators_url'] = $value;

            after_collaborators_url:

            $value = $payload['comments_url'] ?? null;

            if ($value === null) {
                $properties['comments_url'] = null;
                goto after_comments_url;
            }

            $properties['comments_url'] = $value;

            after_comments_url:

            $value = $payload['commits_url'] ?? null;

            if ($value === null) {
                $properties['commits_url'] = null;
                goto after_commits_url;
            }

            $properties['commits_url'] = $value;

            after_commits_url:

            $value = $payload['compare_url'] ?? null;

            if ($value === null) {
                $properties['compare_url'] = null;
                goto after_compare_url;
            }

            $properties['compare_url'] = $value;

            after_compare_url:

            $value = $payload['contents_url'] ?? null;

            if ($value === null) {
                $properties['contents_url'] = null;
                goto after_contents_url;
            }

            $properties['contents_url'] = $value;

            after_contents_url:

            $value = $payload['contributors_url'] ?? null;

            if ($value === null) {
                $properties['contributors_url'] = null;
                goto after_contributors_url;
            }

            $properties['contributors_url'] = $value;

            after_contributors_url:

            $value = $payload['deployments_url'] ?? null;

            if ($value === null) {
                $properties['deployments_url'] = null;
                goto after_deployments_url;
            }

            $properties['deployments_url'] = $value;

            after_deployments_url:

            $value = $payload['downloads_url'] ?? null;

            if ($value === null) {
                $properties['downloads_url'] = null;
                goto after_downloads_url;
            }

            $properties['downloads_url'] = $value;

            after_downloads_url:

            $value = $payload['events_url'] ?? null;

            if ($value === null) {
                $properties['events_url'] = null;
                goto after_events_url;
            }

            $properties['events_url'] = $value;

            after_events_url:

            $value = $payload['forks_url'] ?? null;

            if ($value === null) {
                $properties['forks_url'] = null;
                goto after_forks_url;
            }

            $properties['forks_url'] = $value;

            after_forks_url:

            $value = $payload['git_commits_url'] ?? null;

            if ($value === null) {
                $properties['git_commits_url'] = null;
                goto after_git_commits_url;
            }

            $properties['git_commits_url'] = $value;

            after_git_commits_url:

            $value = $payload['git_refs_url'] ?? null;

            if ($value === null) {
                $properties['git_refs_url'] = null;
                goto after_git_refs_url;
            }

            $properties['git_refs_url'] = $value;

            after_git_refs_url:

            $value = $payload['git_tags_url'] ?? null;

            if ($value === null) {
                $properties['git_tags_url'] = null;
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
                $properties['issue_comment_url'] = null;
                goto after_issue_comment_url;
            }

            $properties['issue_comment_url'] = $value;

            after_issue_comment_url:

            $value = $payload['issue_events_url'] ?? null;

            if ($value === null) {
                $properties['issue_events_url'] = null;
                goto after_issue_events_url;
            }

            $properties['issue_events_url'] = $value;

            after_issue_events_url:

            $value = $payload['issues_url'] ?? null;

            if ($value === null) {
                $properties['issues_url'] = null;
                goto after_issues_url;
            }

            $properties['issues_url'] = $value;

            after_issues_url:

            $value = $payload['keys_url'] ?? null;

            if ($value === null) {
                $properties['keys_url'] = null;
                goto after_keys_url;
            }

            $properties['keys_url'] = $value;

            after_keys_url:

            $value = $payload['labels_url'] ?? null;

            if ($value === null) {
                $properties['labels_url'] = null;
                goto after_labels_url;
            }

            $properties['labels_url'] = $value;

            after_labels_url:

            $value = $payload['languages_url'] ?? null;

            if ($value === null) {
                $properties['languages_url'] = null;
                goto after_languages_url;
            }

            $properties['languages_url'] = $value;

            after_languages_url:

            $value = $payload['merges_url'] ?? null;

            if ($value === null) {
                $properties['merges_url'] = null;
                goto after_merges_url;
            }

            $properties['merges_url'] = $value;

            after_merges_url:

            $value = $payload['milestones_url'] ?? null;

            if ($value === null) {
                $properties['milestones_url'] = null;
                goto after_milestones_url;
            }

            $properties['milestones_url'] = $value;

            after_milestones_url:

            $value = $payload['notifications_url'] ?? null;

            if ($value === null) {
                $properties['notifications_url'] = null;
                goto after_notifications_url;
            }

            $properties['notifications_url'] = $value;

            after_notifications_url:

            $value = $payload['pulls_url'] ?? null;

            if ($value === null) {
                $properties['pulls_url'] = null;
                goto after_pulls_url;
            }

            $properties['pulls_url'] = $value;

            after_pulls_url:

            $value = $payload['releases_url'] ?? null;

            if ($value === null) {
                $properties['releases_url'] = null;
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
                $properties['stargazers_url'] = null;
                goto after_stargazers_url;
            }

            $properties['stargazers_url'] = $value;

            after_stargazers_url:

            $value = $payload['statuses_url'] ?? null;

            if ($value === null) {
                $properties['statuses_url'] = null;
                goto after_statuses_url;
            }

            $properties['statuses_url'] = $value;

            after_statuses_url:

            $value = $payload['subscribers_url'] ?? null;

            if ($value === null) {
                $properties['subscribers_url'] = null;
                goto after_subscribers_url;
            }

            $properties['subscribers_url'] = $value;

            after_subscribers_url:

            $value = $payload['subscription_url'] ?? null;

            if ($value === null) {
                $properties['subscription_url'] = null;
                goto after_subscription_url;
            }

            $properties['subscription_url'] = $value;

            after_subscription_url:

            $value = $payload['tags_url'] ?? null;

            if ($value === null) {
                $properties['tags_url'] = null;
                goto after_tags_url;
            }

            $properties['tags_url'] = $value;

            after_tags_url:

            $value = $payload['teams_url'] ?? null;

            if ($value === null) {
                $properties['teams_url'] = null;
                goto after_teams_url;
            }

            $properties['teams_url'] = $value;

            after_teams_url:

            $value = $payload['trees_url'] ?? null;

            if ($value === null) {
                $properties['trees_url'] = null;
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
                $properties['hooks_url'] = null;
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

            $value = $payload['allow_rebase_merge'] ?? null;

            if ($value === null) {
                $properties['allow_rebase_merge'] = null;
                goto after_allow_rebase_merge;
            }

            $properties['allow_rebase_merge'] = $value;

            after_allow_rebase_merge:

            $value = $payload['temp_clone_token'] ?? null;

            if ($value === null) {
                $properties['temp_clone_token'] = null;
                goto after_temp_clone_token;
            }

            $properties['temp_clone_token'] = $value;

            after_temp_clone_token:

            $value = $payload['allow_squash_merge'] ?? null;

            if ($value === null) {
                $properties['allow_squash_merge'] = null;
                goto after_allow_squash_merge;
            }

            $properties['allow_squash_merge'] = $value;

            after_allow_squash_merge:

            $value = $payload['allow_auto_merge'] ?? null;

            if ($value === null) {
                $properties['allow_auto_merge'] = null;
                goto after_allow_auto_merge;
            }

            $properties['allow_auto_merge'] = $value;

            after_allow_auto_merge:

            $value = $payload['delete_branch_on_merge'] ?? null;

            if ($value === null) {
                $properties['delete_branch_on_merge'] = null;
                goto after_delete_branch_on_merge;
            }

            $properties['delete_branch_on_merge'] = $value;

            after_delete_branch_on_merge:

            $value = $payload['allow_update_branch'] ?? null;

            if ($value === null) {
                $properties['allow_update_branch'] = null;
                goto after_allow_update_branch;
            }

            $properties['allow_update_branch'] = $value;

            after_allow_update_branch:

            $value = $payload['use_squash_pr_title_as_default'] ?? null;

            if ($value === null) {
                $properties['use_squash_pr_title_as_default'] = null;
                goto after_use_squash_pr_title_as_default;
            }

            $properties['use_squash_pr_title_as_default'] = $value;

            after_use_squash_pr_title_as_default:

            $value = $payload['squash_merge_commit_title'] ?? null;

            if ($value === null) {
                $properties['squash_merge_commit_title'] = null;
                goto after_squash_merge_commit_title;
            }

            $properties['squash_merge_commit_title'] = $value;

            after_squash_merge_commit_title:

            $value = $payload['squash_merge_commit_message'] ?? null;

            if ($value === null) {
                $properties['squash_merge_commit_message'] = null;
                goto after_squash_merge_commit_message;
            }

            $properties['squash_merge_commit_message'] = $value;

            after_squash_merge_commit_message:

            $value = $payload['merge_commit_title'] ?? null;

            if ($value === null) {
                $properties['merge_commit_title'] = null;
                goto after_merge_commit_title;
            }

            $properties['merge_commit_title'] = $value;

            after_merge_commit_title:

            $value = $payload['merge_commit_message'] ?? null;

            if ($value === null) {
                $properties['merge_commit_message'] = null;
                goto after_merge_commit_message;
            }

            $properties['merge_commit_message'] = $value;

            after_merge_commit_message:

            $value = $payload['allow_merge_commit'] ?? null;

            if ($value === null) {
                $properties['allow_merge_commit'] = null;
                goto after_allow_merge_commit;
            }

            $properties['allow_merge_commit'] = $value;

            after_allow_merge_commit:

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

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Repository\TemplateRepository', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\Repository\TemplateRepository::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\Repository\TemplateRepository(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Repository\TemplateRepository', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Repository⚡️TemplateRepository⚡️Owner(array $payload): \ApiClients\Client\GitHub\Schema\Repository\TemplateRepository\Owner
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['login'] ?? null;

            if ($value === null) {
                $properties['login'] = null;
                goto after_login;
            }

            $properties['login'] = $value;

            after_login:

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

            $value = $payload['avatar_url'] ?? null;

            if ($value === null) {
                $properties['avatar_url'] = null;
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
                $properties['url'] = null;
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

            $value = $payload['followers_url'] ?? null;

            if ($value === null) {
                $properties['followers_url'] = null;
                goto after_followers_url;
            }

            $properties['followers_url'] = $value;

            after_followers_url:

            $value = $payload['following_url'] ?? null;

            if ($value === null) {
                $properties['following_url'] = null;
                goto after_following_url;
            }

            $properties['following_url'] = $value;

            after_following_url:

            $value = $payload['gists_url'] ?? null;

            if ($value === null) {
                $properties['gists_url'] = null;
                goto after_gists_url;
            }

            $properties['gists_url'] = $value;

            after_gists_url:

            $value = $payload['starred_url'] ?? null;

            if ($value === null) {
                $properties['starred_url'] = null;
                goto after_starred_url;
            }

            $properties['starred_url'] = $value;

            after_starred_url:

            $value = $payload['subscriptions_url'] ?? null;

            if ($value === null) {
                $properties['subscriptions_url'] = null;
                goto after_subscriptions_url;
            }

            $properties['subscriptions_url'] = $value;

            after_subscriptions_url:

            $value = $payload['organizations_url'] ?? null;

            if ($value === null) {
                $properties['organizations_url'] = null;
                goto after_organizations_url;
            }

            $properties['organizations_url'] = $value;

            after_organizations_url:

            $value = $payload['repos_url'] ?? null;

            if ($value === null) {
                $properties['repos_url'] = null;
                goto after_repos_url;
            }

            $properties['repos_url'] = $value;

            after_repos_url:

            $value = $payload['events_url'] ?? null;

            if ($value === null) {
                $properties['events_url'] = null;
                goto after_events_url;
            }

            $properties['events_url'] = $value;

            after_events_url:

            $value = $payload['received_events_url'] ?? null;

            if ($value === null) {
                $properties['received_events_url'] = null;
                goto after_received_events_url;
            }

            $properties['received_events_url'] = $value;

            after_received_events_url:

            $value = $payload['type'] ?? null;

            if ($value === null) {
                $properties['type'] = null;
                goto after_type;
            }

            $properties['type'] = $value;

            after_type:

            $value = $payload['site_admin'] ?? null;

            if ($value === null) {
                $properties['site_admin'] = null;
                goto after_site_admin;
            }

            $properties['site_admin'] = $value;

            after_site_admin:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Repository\TemplateRepository\Owner', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\Repository\TemplateRepository\Owner::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\Repository\TemplateRepository\Owner(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Repository\TemplateRepository\Owner', $exception, stack: $this->hydrationStack);
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

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteRequested(array $payload): \ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRequested
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['action'] ?? null;

            if ($value === null) {
                $missingFields[] = 'action';
                goto after_action;
            }

            $properties['action'] = $value;

            after_action:

            $value = $payload['actions_meta'] ?? null;

            if ($value === null) {
                $properties['actions_meta'] = null;
                goto after_actions_meta;
            }

            $properties['actions_meta'] = $value;

            after_actions_meta:

            $value = $payload['check_suite'] ?? null;

            if ($value === null) {
                $missingFields[] = 'check_suite';
                goto after_check_suite;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'check_suite';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteRequested⚡️CheckSuite($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['check_suite'] = $value;

            after_check_suite:

            $value = $payload['enterprise'] ?? null;

            if ($value === null) {
                $properties['enterprise'] = null;
                goto after_enterprise;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'enterprise';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Enterprise($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['enterprise'] = $value;

            after_enterprise:

            $value = $payload['installation'] ?? null;

            if ($value === null) {
                $properties['installation'] = null;
                goto after_installation;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'installation';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleInstallation($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['installation'] = $value;

            after_installation:

            $value = $payload['organization'] ?? null;

            if ($value === null) {
                $properties['organization'] = null;
                goto after_organization;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'organization';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️OrganizationSimple($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['organization'] = $value;

            after_organization:

            $value = $payload['repository'] ?? null;

            if ($value === null) {
                $missingFields[] = 'repository';
                goto after_repository;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'repository';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Repository($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['repository'] = $value;

            after_repository:

            $value = $payload['sender'] ?? null;

            if ($value === null) {
                $missingFields[] = 'sender';
                goto after_sender;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'sender';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['sender'] = $value;

            after_sender:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRequested', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRequested::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRequested(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRequested', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteRequested⚡️CheckSuite(array $payload): \ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRequested\CheckSuite
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['after'] ?? null;

            if ($value === null) {
                $properties['after'] = null;
                goto after_after;
            }

            $properties['after'] = $value;

            after_after:

            $value = $payload['app'] ?? null;

            if ($value === null) {
                $missingFields[] = 'app';
                goto after_app;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'app';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteRequested⚡️CheckSuite⚡️App($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['app'] = $value;

            after_app:

            $value = $payload['before'] ?? null;

            if ($value === null) {
                $properties['before'] = null;
                goto after_before;
            }

            $properties['before'] = $value;

            after_before:

            $value = $payload['check_runs_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'check_runs_url';
                goto after_check_runs_url;
            }

            $properties['check_runs_url'] = $value;

            after_check_runs_url:

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
                goto after_created_at;
            }

            $properties['created_at'] = $value;

            after_created_at:

            $value = $payload['head_branch'] ?? null;

            if ($value === null) {
                $properties['head_branch'] = null;
                goto after_head_branch;
            }

            $properties['head_branch'] = $value;

            after_head_branch:

            $value = $payload['head_commit'] ?? null;

            if ($value === null) {
                $missingFields[] = 'head_commit';
                goto after_head_commit;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'head_commit';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteCompleted⚡️CheckSuite⚡️HeadCommit($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['head_commit'] = $value;

            after_head_commit:

            $value = $payload['head_sha'] ?? null;

            if ($value === null) {
                $missingFields[] = 'head_sha';
                goto after_head_sha;
            }

            $properties['head_sha'] = $value;

            after_head_sha:

            $value = $payload['id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'id';
                goto after_id;
            }

            $properties['id'] = $value;

            after_id:

            $value = $payload['latest_check_runs_count'] ?? null;

            if ($value === null) {
                $missingFields[] = 'latest_check_runs_count';
                goto after_latest_check_runs_count;
            }

            $properties['latest_check_runs_count'] = $value;

            after_latest_check_runs_count:

            $value = $payload['node_id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'node_id';
                goto after_node_id;
            }

            $properties['node_id'] = $value;

            after_node_id:

            $value = $payload['pull_requests'] ?? null;

            if ($value === null) {
                $missingFields[] = 'pull_requests';
                goto after_pull_requests;
            }

            static $pull_requestsCaster1;

            if ($pull_requestsCaster1 === null) {
                $pull_requestsCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\WebhookCheckSuiteCompleted\\CheckSuite\\PullRequests',
));
            }

            $value = $pull_requestsCaster1->cast($value, $this);

            $properties['pull_requests'] = $value;

            after_pull_requests:

            $value = $payload['rerequestable'] ?? null;

            if ($value === null) {
                $properties['rerequestable'] = null;
                goto after_rerequestable;
            }

            $properties['rerequestable'] = $value;

            after_rerequestable:

            $value = $payload['runs_rerequestable'] ?? null;

            if ($value === null) {
                $properties['runs_rerequestable'] = null;
                goto after_runs_rerequestable;
            }

            $properties['runs_rerequestable'] = $value;

            after_runs_rerequestable:

            $value = $payload['status'] ?? null;

            if ($value === null) {
                $properties['status'] = null;
                goto after_status;
            }

            $properties['status'] = $value;

            after_status:

            $value = $payload['updated_at'] ?? null;

            if ($value === null) {
                $missingFields[] = 'updated_at';
                goto after_updated_at;
            }

            $properties['updated_at'] = $value;

            after_updated_at:

            $value = $payload['url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'url';
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRequested\CheckSuite', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRequested\CheckSuite::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRequested\CheckSuite(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRequested\CheckSuite', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteRequested⚡️CheckSuite⚡️App(array $payload): \ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRequested\CheckSuite\App
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['created_at'] ?? null;

            if ($value === null) {
                $properties['created_at'] = null;
                goto after_created_at;
            }

            $properties['created_at'] = $value;

            after_created_at:

            $value = $payload['description'] ?? null;

            if ($value === null) {
                $properties['description'] = null;
                goto after_description;
            }

            $properties['description'] = $value;

            after_description:

            $value = $payload['events'] ?? null;

            if ($value === null) {
                $properties['events'] = null;
                goto after_events;
            }

            $properties['events'] = $value;

            after_events:

            $value = $payload['external_url'] ?? null;

            if ($value === null) {
                $properties['external_url'] = null;
                goto after_external_url;
            }

            $properties['external_url'] = $value;

            after_external_url:

            $value = $payload['html_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'html_url';
                goto after_html_url;
            }

            $properties['html_url'] = $value;

            after_html_url:

            $value = $payload['id'] ?? null;

            if ($value === null) {
                $properties['id'] = null;
                goto after_id;
            }

            $properties['id'] = $value;

            after_id:

            $value = $payload['name'] ?? null;

            if ($value === null) {
                $missingFields[] = 'name';
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

            $value = $payload['owner'] ?? null;

            if ($value === null) {
                $properties['owner'] = null;
                goto after_owner;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'owner';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Discussion⚡️AnswerChosenBy($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['owner'] = $value;

            after_owner:

            $value = $payload['permissions'] ?? null;

            if ($value === null) {
                $properties['permissions'] = null;
                goto after_permissions;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'permissions';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteCompleted⚡️CheckSuite⚡️App⚡️Permissions($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['permissions'] = $value;

            after_permissions:

            $value = $payload['slug'] ?? null;

            if ($value === null) {
                $properties['slug'] = null;
                goto after_slug;
            }

            $properties['slug'] = $value;

            after_slug:

            $value = $payload['updated_at'] ?? null;

            if ($value === null) {
                $properties['updated_at'] = null;
                goto after_updated_at;
            }

            $properties['updated_at'] = $value;

            after_updated_at:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRequested\CheckSuite\App', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRequested\CheckSuite\App::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRequested\CheckSuite\App(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRequested\CheckSuite\App', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteRerequested(array $payload): \ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRerequested
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['action'] ?? null;

            if ($value === null) {
                $missingFields[] = 'action';
                goto after_action;
            }

            $properties['action'] = $value;

            after_action:

            $value = $payload['actions_meta'] ?? null;

            if ($value === null) {
                $properties['actions_meta'] = null;
                goto after_actions_meta;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'actions_meta';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteRerequested⚡️ActionsMeta($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['actions_meta'] = $value;

            after_actions_meta:

            $value = $payload['check_suite'] ?? null;

            if ($value === null) {
                $missingFields[] = 'check_suite';
                goto after_check_suite;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'check_suite';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteRerequested⚡️CheckSuite($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['check_suite'] = $value;

            after_check_suite:

            $value = $payload['enterprise'] ?? null;

            if ($value === null) {
                $properties['enterprise'] = null;
                goto after_enterprise;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'enterprise';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Enterprise($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['enterprise'] = $value;

            after_enterprise:

            $value = $payload['installation'] ?? null;

            if ($value === null) {
                $properties['installation'] = null;
                goto after_installation;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'installation';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleInstallation($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['installation'] = $value;

            after_installation:

            $value = $payload['organization'] ?? null;

            if ($value === null) {
                $properties['organization'] = null;
                goto after_organization;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'organization';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️OrganizationSimple($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['organization'] = $value;

            after_organization:

            $value = $payload['repository'] ?? null;

            if ($value === null) {
                $missingFields[] = 'repository';
                goto after_repository;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'repository';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Repository($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['repository'] = $value;

            after_repository:

            $value = $payload['sender'] ?? null;

            if ($value === null) {
                $missingFields[] = 'sender';
                goto after_sender;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'sender';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['sender'] = $value;

            after_sender:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRerequested', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRerequested::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRerequested(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRerequested', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteRerequested⚡️ActionsMeta(array $payload): \ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRerequested\ActionsMeta
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['rerun_info'] ?? null;

            if ($value === null) {
                $properties['rerun_info'] = null;
                goto after_rerun_info;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'rerun_info';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteRerequested⚡️ActionsMeta⚡️RerunInfo($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['rerun_info'] = $value;

            after_rerun_info:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRerequested\ActionsMeta', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRerequested\ActionsMeta::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRerequested\ActionsMeta(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRerequested\ActionsMeta', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteRerequested⚡️ActionsMeta⚡️RerunInfo(array $payload): \ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRerequested\ActionsMeta\RerunInfo
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['plan_id'] ?? null;

            if ($value === null) {
                $properties['plan_id'] = null;
                goto after_plan_id;
            }

            $properties['plan_id'] = $value;

            after_plan_id:

            $value = $payload['job_ids'] ?? null;

            if ($value === null) {
                $properties['job_ids'] = null;
                goto after_job_ids;
            }

            $properties['job_ids'] = $value;

            after_job_ids:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRerequested\ActionsMeta\RerunInfo', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRerequested\ActionsMeta\RerunInfo::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRerequested\ActionsMeta\RerunInfo(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRerequested\ActionsMeta\RerunInfo', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteRerequested⚡️CheckSuite(array $payload): \ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRerequested\CheckSuite
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['after'] ?? null;

            if ($value === null) {
                $properties['after'] = null;
                goto after_after;
            }

            $properties['after'] = $value;

            after_after:

            $value = $payload['app'] ?? null;

            if ($value === null) {
                $missingFields[] = 'app';
                goto after_app;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'app';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteRerequested⚡️CheckSuite⚡️App($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['app'] = $value;

            after_app:

            $value = $payload['before'] ?? null;

            if ($value === null) {
                $properties['before'] = null;
                goto after_before;
            }

            $properties['before'] = $value;

            after_before:

            $value = $payload['check_runs_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'check_runs_url';
                goto after_check_runs_url;
            }

            $properties['check_runs_url'] = $value;

            after_check_runs_url:

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
                goto after_created_at;
            }

            $properties['created_at'] = $value;

            after_created_at:

            $value = $payload['head_branch'] ?? null;

            if ($value === null) {
                $properties['head_branch'] = null;
                goto after_head_branch;
            }

            $properties['head_branch'] = $value;

            after_head_branch:

            $value = $payload['head_commit'] ?? null;

            if ($value === null) {
                $missingFields[] = 'head_commit';
                goto after_head_commit;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'head_commit';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteCompleted⚡️CheckSuite⚡️HeadCommit($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['head_commit'] = $value;

            after_head_commit:

            $value = $payload['head_sha'] ?? null;

            if ($value === null) {
                $missingFields[] = 'head_sha';
                goto after_head_sha;
            }

            $properties['head_sha'] = $value;

            after_head_sha:

            $value = $payload['id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'id';
                goto after_id;
            }

            $properties['id'] = $value;

            after_id:

            $value = $payload['latest_check_runs_count'] ?? null;

            if ($value === null) {
                $missingFields[] = 'latest_check_runs_count';
                goto after_latest_check_runs_count;
            }

            $properties['latest_check_runs_count'] = $value;

            after_latest_check_runs_count:

            $value = $payload['node_id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'node_id';
                goto after_node_id;
            }

            $properties['node_id'] = $value;

            after_node_id:

            $value = $payload['pull_requests'] ?? null;

            if ($value === null) {
                $missingFields[] = 'pull_requests';
                goto after_pull_requests;
            }

            static $pull_requestsCaster1;

            if ($pull_requestsCaster1 === null) {
                $pull_requestsCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\WebhookCheckSuiteCompleted\\CheckSuite\\PullRequests',
));
            }

            $value = $pull_requestsCaster1->cast($value, $this);

            $properties['pull_requests'] = $value;

            after_pull_requests:

            $value = $payload['rerequestable'] ?? null;

            if ($value === null) {
                $properties['rerequestable'] = null;
                goto after_rerequestable;
            }

            $properties['rerequestable'] = $value;

            after_rerequestable:

            $value = $payload['runs_rerequestable'] ?? null;

            if ($value === null) {
                $properties['runs_rerequestable'] = null;
                goto after_runs_rerequestable;
            }

            $properties['runs_rerequestable'] = $value;

            after_runs_rerequestable:

            $value = $payload['status'] ?? null;

            if ($value === null) {
                $properties['status'] = null;
                goto after_status;
            }

            $properties['status'] = $value;

            after_status:

            $value = $payload['updated_at'] ?? null;

            if ($value === null) {
                $missingFields[] = 'updated_at';
                goto after_updated_at;
            }

            $properties['updated_at'] = $value;

            after_updated_at:

            $value = $payload['url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'url';
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRerequested\CheckSuite', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRerequested\CheckSuite::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRerequested\CheckSuite(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRerequested\CheckSuite', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteRerequested⚡️CheckSuite⚡️App(array $payload): \ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRerequested\CheckSuite\App
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['created_at'] ?? null;

            if ($value === null) {
                $properties['created_at'] = null;
                goto after_created_at;
            }

            $properties['created_at'] = $value;

            after_created_at:

            $value = $payload['description'] ?? null;

            if ($value === null) {
                $properties['description'] = null;
                goto after_description;
            }

            $properties['description'] = $value;

            after_description:

            $value = $payload['events'] ?? null;

            if ($value === null) {
                $properties['events'] = null;
                goto after_events;
            }

            $properties['events'] = $value;

            after_events:

            $value = $payload['external_url'] ?? null;

            if ($value === null) {
                $properties['external_url'] = null;
                goto after_external_url;
            }

            $properties['external_url'] = $value;

            after_external_url:

            $value = $payload['html_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'html_url';
                goto after_html_url;
            }

            $properties['html_url'] = $value;

            after_html_url:

            $value = $payload['id'] ?? null;

            if ($value === null) {
                $properties['id'] = null;
                goto after_id;
            }

            $properties['id'] = $value;

            after_id:

            $value = $payload['name'] ?? null;

            if ($value === null) {
                $missingFields[] = 'name';
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

            $value = $payload['owner'] ?? null;

            if ($value === null) {
                $properties['owner'] = null;
                goto after_owner;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'owner';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Discussion⚡️AnswerChosenBy($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['owner'] = $value;

            after_owner:

            $value = $payload['permissions'] ?? null;

            if ($value === null) {
                $properties['permissions'] = null;
                goto after_permissions;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'permissions';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteCompleted⚡️CheckSuite⚡️App⚡️Permissions($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['permissions'] = $value;

            after_permissions:

            $value = $payload['slug'] ?? null;

            if ($value === null) {
                $properties['slug'] = null;
                goto after_slug;
            }

            $properties['slug'] = $value;

            after_slug:

            $value = $payload['updated_at'] ?? null;

            if ($value === null) {
                $properties['updated_at'] = null;
                goto after_updated_at;
            }

            $properties['updated_at'] = $value;

            after_updated_at:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRerequested\CheckSuite\App', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRerequested\CheckSuite\App::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRerequested\CheckSuite\App(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRerequested\CheckSuite\App', $exception, stack: $this->hydrationStack);
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
            'ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteCompleted($object),
            'ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted\CheckSuite' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteCompleted⚡️CheckSuite($object),
            'ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted\CheckSuite\App' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteCompleted⚡️CheckSuite⚡️App($object),
            'ApiClients\Client\GitHub\Schema\Discussion\AnswerChosenBy' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Discussion⚡️AnswerChosenBy($object),
            'ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted\CheckSuite\App\Permissions' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteCompleted⚡️CheckSuite⚡️App⚡️Permissions($object),
            'ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted\CheckSuite\HeadCommit' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteCompleted⚡️CheckSuite⚡️HeadCommit($object),
            'ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted\CheckSuite\HeadCommit\Author' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteCompleted⚡️CheckSuite⚡️HeadCommit⚡️Author($object),
            'ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted\CheckSuite\PullRequests' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteCompleted⚡️CheckSuite⚡️PullRequests($object),
            'ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted\CheckSuite\PullRequests\Base' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteCompleted⚡️CheckSuite⚡️PullRequests⚡️Base($object),
            'ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted\CheckSuite\PullRequests\Base\Repo' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteCompleted⚡️CheckSuite⚡️PullRequests⚡️Base⚡️Repo($object),
            'ApiClients\Client\GitHub\Schema\Enterprise' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Enterprise($object),
            'ApiClients\Client\GitHub\Schema\SimpleInstallation' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleInstallation($object),
            'ApiClients\Client\GitHub\Schema\OrganizationSimple' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️OrganizationSimple($object),
            'ApiClients\Client\GitHub\Schema\Repository' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Repository($object),
            'ApiClients\Client\GitHub\Schema\Repository\Permissions' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Repository⚡️Permissions($object),
            'ApiClients\Client\GitHub\Schema\SimpleUser' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($object),
            'ApiClients\Client\GitHub\Schema\Repository\TemplateRepository' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Repository⚡️TemplateRepository($object),
            'ApiClients\Client\GitHub\Schema\Repository\TemplateRepository\Owner' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Repository⚡️TemplateRepository⚡️Owner($object),
            'ApiClients\Client\GitHub\Schema\Repository\TemplateRepository\Permissions' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Repository⚡️TemplateRepository⚡️Permissions($object),
            'ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRequested' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteRequested($object),
            'ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRequested\CheckSuite' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteRequested⚡️CheckSuite($object),
            'ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRequested\CheckSuite\App' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteRequested⚡️CheckSuite⚡️App($object),
            'ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRerequested' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteRerequested($object),
            'ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRerequested\ActionsMeta' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteRerequested⚡️ActionsMeta($object),
            'ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRerequested\ActionsMeta\RerunInfo' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteRerequested⚡️ActionsMeta⚡️RerunInfo($object),
            'ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRerequested\CheckSuite' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteRerequested⚡️CheckSuite($object),
            'ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRerequested\CheckSuite\App' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteRerequested⚡️CheckSuite⚡️App($object),
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


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteCompleted(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted);
        $result = [];

        $action = $object->action;
        after_action:        $result['action'] = $action;

        
        $actions_meta = $object->actions_meta;

        if ($actions_meta === null) {
            goto after_actions_meta;
        }
        after_actions_meta:        $result['actions_meta'] = $actions_meta;

        
        $check_suite = $object->check_suite;
        $check_suite = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteCompleted⚡️CheckSuite($check_suite);
        after_check_suite:        $result['check_suite'] = $check_suite;

        
        $enterprise = $object->enterprise;

        if ($enterprise === null) {
            goto after_enterprise;
        }
        $enterprise = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Enterprise($enterprise);
        after_enterprise:        $result['enterprise'] = $enterprise;

        
        $installation = $object->installation;

        if ($installation === null) {
            goto after_installation;
        }
        $installation = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleInstallation($installation);
        after_installation:        $result['installation'] = $installation;

        
        $organization = $object->organization;

        if ($organization === null) {
            goto after_organization;
        }
        $organization = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️OrganizationSimple($organization);
        after_organization:        $result['organization'] = $organization;

        
        $repository = $object->repository;
        $repository = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Repository($repository);
        after_repository:        $result['repository'] = $repository;

        
        $sender = $object->sender;
        $sender = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($sender);
        after_sender:        $result['sender'] = $sender;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteCompleted⚡️CheckSuite(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted\CheckSuite);
        $result = [];

        $after = $object->after;

        if ($after === null) {
            goto after_after;
        }
        after_after:        $result['after'] = $after;

        
        $app = $object->app;
        $app = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteCompleted⚡️CheckSuite⚡️App($app);
        after_app:        $result['app'] = $app;

        
        $before = $object->before;

        if ($before === null) {
            goto after_before;
        }
        after_before:        $result['before'] = $before;

        
        $check_runs_url = $object->check_runs_url;
        after_check_runs_url:        $result['check_runs_url'] = $check_runs_url;

        
        $conclusion = $object->conclusion;

        if ($conclusion === null) {
            goto after_conclusion;
        }
        after_conclusion:        $result['conclusion'] = $conclusion;

        
        $created_at = $object->created_at;
        after_created_at:        $result['created_at'] = $created_at;

        
        $head_branch = $object->head_branch;

        if ($head_branch === null) {
            goto after_head_branch;
        }
        after_head_branch:        $result['head_branch'] = $head_branch;

        
        $head_commit = $object->head_commit;
        $head_commit = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteCompleted⚡️CheckSuite⚡️HeadCommit($head_commit);
        after_head_commit:        $result['head_commit'] = $head_commit;

        
        $head_sha = $object->head_sha;
        after_head_sha:        $result['head_sha'] = $head_sha;

        
        $id = $object->id;
        after_id:        $result['id'] = $id;

        
        $latest_check_runs_count = $object->latest_check_runs_count;
        after_latest_check_runs_count:        $result['latest_check_runs_count'] = $latest_check_runs_count;

        
        $node_id = $object->node_id;
        after_node_id:        $result['node_id'] = $node_id;

        
        $pull_requests = $object->pull_requests;
        static $pull_requestsSerializer0;

        if ($pull_requestsSerializer0 === null) {
            $pull_requestsSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\WebhookCheckSuiteCompleted\\CheckSuite\\PullRequests',
));
        }
        
        $pull_requests = $pull_requestsSerializer0->serialize($pull_requests, $this);
        after_pull_requests:        $result['pull_requests'] = $pull_requests;

        
        $rerequestable = $object->rerequestable;

        if ($rerequestable === null) {
            goto after_rerequestable;
        }
        after_rerequestable:        $result['rerequestable'] = $rerequestable;

        
        $runs_rerequestable = $object->runs_rerequestable;

        if ($runs_rerequestable === null) {
            goto after_runs_rerequestable;
        }
        after_runs_rerequestable:        $result['runs_rerequestable'] = $runs_rerequestable;

        
        $status = $object->status;

        if ($status === null) {
            goto after_status;
        }
        after_status:        $result['status'] = $status;

        
        $updated_at = $object->updated_at;
        after_updated_at:        $result['updated_at'] = $updated_at;

        
        $url = $object->url;
        after_url:        $result['url'] = $url;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteCompleted⚡️CheckSuite⚡️App(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted\CheckSuite\App);
        $result = [];

        $created_at = $object->created_at;

        if ($created_at === null) {
            goto after_created_at;
        }
        after_created_at:        $result['created_at'] = $created_at;

        
        $description = $object->description;

        if ($description === null) {
            goto after_description;
        }
        after_description:        $result['description'] = $description;

        
        $events = $object->events;

        if ($events === null) {
            goto after_events;
        }
        static $eventsSerializer0;

        if ($eventsSerializer0 === null) {
            $eventsSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $events = $eventsSerializer0->serialize($events, $this);
        after_events:        $result['events'] = $events;

        
        $external_url = $object->external_url;

        if ($external_url === null) {
            goto after_external_url;
        }
        after_external_url:        $result['external_url'] = $external_url;

        
        $html_url = $object->html_url;
        after_html_url:        $result['html_url'] = $html_url;

        
        $id = $object->id;

        if ($id === null) {
            goto after_id;
        }
        after_id:        $result['id'] = $id;

        
        $name = $object->name;
        after_name:        $result['name'] = $name;

        
        $node_id = $object->node_id;
        after_node_id:        $result['node_id'] = $node_id;

        
        $owner = $object->owner;

        if ($owner === null) {
            goto after_owner;
        }
        $owner = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Discussion⚡️AnswerChosenBy($owner);
        after_owner:        $result['owner'] = $owner;

        
        $permissions = $object->permissions;

        if ($permissions === null) {
            goto after_permissions;
        }
        $permissions = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteCompleted⚡️CheckSuite⚡️App⚡️Permissions($permissions);
        after_permissions:        $result['permissions'] = $permissions;

        
        $slug = $object->slug;

        if ($slug === null) {
            goto after_slug;
        }
        after_slug:        $result['slug'] = $slug;

        
        $updated_at = $object->updated_at;

        if ($updated_at === null) {
            goto after_updated_at;
        }
        after_updated_at:        $result['updated_at'] = $updated_at;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Discussion⚡️AnswerChosenBy(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\Discussion\AnswerChosenBy);
        $result = [];

        $avatar_url = $object->avatar_url;

        if ($avatar_url === null) {
            goto after_avatar_url;
        }
        after_avatar_url:        $result['avatar_url'] = $avatar_url;

        
        $deleted = $object->deleted;

        if ($deleted === null) {
            goto after_deleted;
        }
        after_deleted:        $result['deleted'] = $deleted;

        
        $email = $object->email;

        if ($email === null) {
            goto after_email;
        }
        after_email:        $result['email'] = $email;

        
        $events_url = $object->events_url;

        if ($events_url === null) {
            goto after_events_url;
        }
        after_events_url:        $result['events_url'] = $events_url;

        
        $followers_url = $object->followers_url;

        if ($followers_url === null) {
            goto after_followers_url;
        }
        after_followers_url:        $result['followers_url'] = $followers_url;

        
        $following_url = $object->following_url;

        if ($following_url === null) {
            goto after_following_url;
        }
        after_following_url:        $result['following_url'] = $following_url;

        
        $gists_url = $object->gists_url;

        if ($gists_url === null) {
            goto after_gists_url;
        }
        after_gists_url:        $result['gists_url'] = $gists_url;

        
        $gravatar_id = $object->gravatar_id;

        if ($gravatar_id === null) {
            goto after_gravatar_id;
        }
        after_gravatar_id:        $result['gravatar_id'] = $gravatar_id;

        
        $html_url = $object->html_url;

        if ($html_url === null) {
            goto after_html_url;
        }
        after_html_url:        $result['html_url'] = $html_url;

        
        $id = $object->id;
        after_id:        $result['id'] = $id;

        
        $login = $object->login;
        after_login:        $result['login'] = $login;

        
        $name = $object->name;

        if ($name === null) {
            goto after_name;
        }
        after_name:        $result['name'] = $name;

        
        $node_id = $object->node_id;

        if ($node_id === null) {
            goto after_node_id;
        }
        after_node_id:        $result['node_id'] = $node_id;

        
        $organizations_url = $object->organizations_url;

        if ($organizations_url === null) {
            goto after_organizations_url;
        }
        after_organizations_url:        $result['organizations_url'] = $organizations_url;

        
        $received_events_url = $object->received_events_url;

        if ($received_events_url === null) {
            goto after_received_events_url;
        }
        after_received_events_url:        $result['received_events_url'] = $received_events_url;

        
        $repos_url = $object->repos_url;

        if ($repos_url === null) {
            goto after_repos_url;
        }
        after_repos_url:        $result['repos_url'] = $repos_url;

        
        $site_admin = $object->site_admin;

        if ($site_admin === null) {
            goto after_site_admin;
        }
        after_site_admin:        $result['site_admin'] = $site_admin;

        
        $starred_url = $object->starred_url;

        if ($starred_url === null) {
            goto after_starred_url;
        }
        after_starred_url:        $result['starred_url'] = $starred_url;

        
        $subscriptions_url = $object->subscriptions_url;

        if ($subscriptions_url === null) {
            goto after_subscriptions_url;
        }
        after_subscriptions_url:        $result['subscriptions_url'] = $subscriptions_url;

        
        $type = $object->type;

        if ($type === null) {
            goto after_type;
        }
        after_type:        $result['type'] = $type;

        
        $url = $object->url;

        if ($url === null) {
            goto after_url;
        }
        after_url:        $result['url'] = $url;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteCompleted⚡️CheckSuite⚡️App⚡️Permissions(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted\CheckSuite\App\Permissions);
        $result = [];

        $actions = $object->actions;

        if ($actions === null) {
            goto after_actions;
        }
        after_actions:        $result['actions'] = $actions;

        
        $administration = $object->administration;

        if ($administration === null) {
            goto after_administration;
        }
        after_administration:        $result['administration'] = $administration;

        
        $checks = $object->checks;

        if ($checks === null) {
            goto after_checks;
        }
        after_checks:        $result['checks'] = $checks;

        
        $content_references = $object->content_references;

        if ($content_references === null) {
            goto after_content_references;
        }
        after_content_references:        $result['content_references'] = $content_references;

        
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

        
        $discussions = $object->discussions;

        if ($discussions === null) {
            goto after_discussions;
        }
        after_discussions:        $result['discussions'] = $discussions;

        
        $emails = $object->emails;

        if ($emails === null) {
            goto after_emails;
        }
        after_emails:        $result['emails'] = $emails;

        
        $environments = $object->environments;

        if ($environments === null) {
            goto after_environments;
        }
        after_environments:        $result['environments'] = $environments;

        
        $issues = $object->issues;

        if ($issues === null) {
            goto after_issues;
        }
        after_issues:        $result['issues'] = $issues;

        
        $keys = $object->keys;

        if ($keys === null) {
            goto after_keys;
        }
        after_keys:        $result['keys'] = $keys;

        
        $members = $object->members;

        if ($members === null) {
            goto after_members;
        }
        after_members:        $result['members'] = $members;

        
        $metadata = $object->metadata;

        if ($metadata === null) {
            goto after_metadata;
        }
        after_metadata:        $result['metadata'] = $metadata;

        
        $organization_administration = $object->organization_administration;

        if ($organization_administration === null) {
            goto after_organization_administration;
        }
        after_organization_administration:        $result['organization_administration'] = $organization_administration;

        
        $organization_hooks = $object->organization_hooks;

        if ($organization_hooks === null) {
            goto after_organization_hooks;
        }
        after_organization_hooks:        $result['organization_hooks'] = $organization_hooks;

        
        $organization_packages = $object->organization_packages;

        if ($organization_packages === null) {
            goto after_organization_packages;
        }
        after_organization_packages:        $result['organization_packages'] = $organization_packages;

        
        $organization_plan = $object->organization_plan;

        if ($organization_plan === null) {
            goto after_organization_plan;
        }
        after_organization_plan:        $result['organization_plan'] = $organization_plan;

        
        $organization_projects = $object->organization_projects;

        if ($organization_projects === null) {
            goto after_organization_projects;
        }
        after_organization_projects:        $result['organization_projects'] = $organization_projects;

        
        $organization_secrets = $object->organization_secrets;

        if ($organization_secrets === null) {
            goto after_organization_secrets;
        }
        after_organization_secrets:        $result['organization_secrets'] = $organization_secrets;

        
        $organization_self_hosted_runners = $object->organization_self_hosted_runners;

        if ($organization_self_hosted_runners === null) {
            goto after_organization_self_hosted_runners;
        }
        after_organization_self_hosted_runners:        $result['organization_self_hosted_runners'] = $organization_self_hosted_runners;

        
        $organization_user_blocking = $object->organization_user_blocking;

        if ($organization_user_blocking === null) {
            goto after_organization_user_blocking;
        }
        after_organization_user_blocking:        $result['organization_user_blocking'] = $organization_user_blocking;

        
        $packages = $object->packages;

        if ($packages === null) {
            goto after_packages;
        }
        after_packages:        $result['packages'] = $packages;

        
        $pages = $object->pages;

        if ($pages === null) {
            goto after_pages;
        }
        after_pages:        $result['pages'] = $pages;

        
        $pull_requests = $object->pull_requests;

        if ($pull_requests === null) {
            goto after_pull_requests;
        }
        after_pull_requests:        $result['pull_requests'] = $pull_requests;

        
        $repository_hooks = $object->repository_hooks;

        if ($repository_hooks === null) {
            goto after_repository_hooks;
        }
        after_repository_hooks:        $result['repository_hooks'] = $repository_hooks;

        
        $repository_projects = $object->repository_projects;

        if ($repository_projects === null) {
            goto after_repository_projects;
        }
        after_repository_projects:        $result['repository_projects'] = $repository_projects;

        
        $secret_scanning_alerts = $object->secret_scanning_alerts;

        if ($secret_scanning_alerts === null) {
            goto after_secret_scanning_alerts;
        }
        after_secret_scanning_alerts:        $result['secret_scanning_alerts'] = $secret_scanning_alerts;

        
        $secrets = $object->secrets;

        if ($secrets === null) {
            goto after_secrets;
        }
        after_secrets:        $result['secrets'] = $secrets;

        
        $security_events = $object->security_events;

        if ($security_events === null) {
            goto after_security_events;
        }
        after_security_events:        $result['security_events'] = $security_events;

        
        $security_scanning_alert = $object->security_scanning_alert;

        if ($security_scanning_alert === null) {
            goto after_security_scanning_alert;
        }
        after_security_scanning_alert:        $result['security_scanning_alert'] = $security_scanning_alert;

        
        $single_file = $object->single_file;

        if ($single_file === null) {
            goto after_single_file;
        }
        after_single_file:        $result['single_file'] = $single_file;

        
        $statuses = $object->statuses;

        if ($statuses === null) {
            goto after_statuses;
        }
        after_statuses:        $result['statuses'] = $statuses;

        
        $team_discussions = $object->team_discussions;

        if ($team_discussions === null) {
            goto after_team_discussions;
        }
        after_team_discussions:        $result['team_discussions'] = $team_discussions;

        
        $vulnerability_alerts = $object->vulnerability_alerts;

        if ($vulnerability_alerts === null) {
            goto after_vulnerability_alerts;
        }
        after_vulnerability_alerts:        $result['vulnerability_alerts'] = $vulnerability_alerts;

        
        $workflows = $object->workflows;

        if ($workflows === null) {
            goto after_workflows;
        }
        after_workflows:        $result['workflows'] = $workflows;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteCompleted⚡️CheckSuite⚡️HeadCommit(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted\CheckSuite\HeadCommit);
        $result = [];

        $author = $object->author;
        $author = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteCompleted⚡️CheckSuite⚡️HeadCommit⚡️Author($author);
        after_author:        $result['author'] = $author;

        
        $committer = $object->committer;
        $committer = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteCompleted⚡️CheckSuite⚡️HeadCommit⚡️Author($committer);
        after_committer:        $result['committer'] = $committer;

        
        $id = $object->id;
        after_id:        $result['id'] = $id;

        
        $message = $object->message;
        after_message:        $result['message'] = $message;

        
        $timestamp = $object->timestamp;
        after_timestamp:        $result['timestamp'] = $timestamp;

        
        $tree_id = $object->tree_id;
        after_tree_id:        $result['tree_id'] = $tree_id;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteCompleted⚡️CheckSuite⚡️HeadCommit⚡️Author(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted\CheckSuite\HeadCommit\Author);
        $result = [];

        $date = $object->date;

        if ($date === null) {
            goto after_date;
        }
        after_date:        $result['date'] = $date;

        
        $email = $object->email;

        if ($email === null) {
            goto after_email;
        }
        after_email:        $result['email'] = $email;

        
        $name = $object->name;
        after_name:        $result['name'] = $name;

        
        $username = $object->username;

        if ($username === null) {
            goto after_username;
        }
        after_username:        $result['username'] = $username;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteCompleted⚡️CheckSuite⚡️PullRequests(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted\CheckSuite\PullRequests);
        $result = [];

        $base = $object->base;
        $base = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteCompleted⚡️CheckSuite⚡️PullRequests⚡️Base($base);
        after_base:        $result['base'] = $base;

        
        $head = $object->head;
        $head = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteCompleted⚡️CheckSuite⚡️PullRequests⚡️Base($head);
        after_head:        $result['head'] = $head;

        
        $id = $object->id;
        after_id:        $result['id'] = $id;

        
        $number = $object->number;
        after_number:        $result['number'] = $number;

        
        $url = $object->url;
        after_url:        $result['url'] = $url;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteCompleted⚡️CheckSuite⚡️PullRequests⚡️Base(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted\CheckSuite\PullRequests\Base);
        $result = [];

        $ref = $object->ref;
        after_ref:        $result['ref'] = $ref;

        
        $repo = $object->repo;
        $repo = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteCompleted⚡️CheckSuite⚡️PullRequests⚡️Base⚡️Repo($repo);
        after_repo:        $result['repo'] = $repo;

        
        $sha = $object->sha;
        after_sha:        $result['sha'] = $sha;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteCompleted⚡️CheckSuite⚡️PullRequests⚡️Base⚡️Repo(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted\CheckSuite\PullRequests\Base\Repo);
        $result = [];

        $id = $object->id;
        after_id:        $result['id'] = $id;

        
        $name = $object->name;
        after_name:        $result['name'] = $name;

        
        $url = $object->url;
        after_url:        $result['url'] = $url;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Enterprise(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\Enterprise);
        $result = [];

        $description = $object->description;

        if ($description === null) {
            goto after_description;
        }
        after_description:        $result['description'] = $description;

        
        $html_url = $object->html_url;
        after_html_url:        $result['html_url'] = $html_url;

        
        $website_url = $object->website_url;

        if ($website_url === null) {
            goto after_website_url;
        }
        after_website_url:        $result['website_url'] = $website_url;

        
        $id = $object->id;
        after_id:        $result['id'] = $id;

        
        $node_id = $object->node_id;
        after_node_id:        $result['node_id'] = $node_id;

        
        $name = $object->name;
        after_name:        $result['name'] = $name;

        
        $slug = $object->slug;
        after_slug:        $result['slug'] = $slug;

        
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

        
        $avatar_url = $object->avatar_url;
        after_avatar_url:        $result['avatar_url'] = $avatar_url;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleInstallation(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\SimpleInstallation);
        $result = [];

        $id = $object->id;
        after_id:        $result['id'] = $id;

        
        $node_id = $object->node_id;
        after_node_id:        $result['node_id'] = $node_id;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️OrganizationSimple(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\OrganizationSimple);
        $result = [];

        $login = $object->login;
        after_login:        $result['login'] = $login;

        
        $id = $object->id;
        after_id:        $result['id'] = $id;

        
        $node_id = $object->node_id;
        after_node_id:        $result['node_id'] = $node_id;

        
        $url = $object->url;
        after_url:        $result['url'] = $url;

        
        $repos_url = $object->repos_url;
        after_repos_url:        $result['repos_url'] = $repos_url;

        
        $events_url = $object->events_url;
        after_events_url:        $result['events_url'] = $events_url;

        
        $hooks_url = $object->hooks_url;
        after_hooks_url:        $result['hooks_url'] = $hooks_url;

        
        $issues_url = $object->issues_url;
        after_issues_url:        $result['issues_url'] = $issues_url;

        
        $members_url = $object->members_url;
        after_members_url:        $result['members_url'] = $members_url;

        
        $public_members_url = $object->public_members_url;
        after_public_members_url:        $result['public_members_url'] = $public_members_url;

        
        $avatar_url = $object->avatar_url;
        after_avatar_url:        $result['avatar_url'] = $avatar_url;

        
        $description = $object->description;

        if ($description === null) {
            goto after_description;
        }
        after_description:        $result['description'] = $description;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Repository(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\Repository);
        $result = [];

        $id = $object->id;
        after_id:        $result['id'] = $id;

        
        $node_id = $object->node_id;
        after_node_id:        $result['node_id'] = $node_id;

        
        $name = $object->name;
        after_name:        $result['name'] = $name;

        
        $full_name = $object->full_name;
        after_full_name:        $result['full_name'] = $full_name;

        
        $license = $object->license;

        if ($license === null) {
            goto after_license;
        }
        after_license:        $result['license'] = $license;

        
        $organization = $object->organization;

        if ($organization === null) {
            goto after_organization;
        }
        after_organization:        $result['organization'] = $organization;

        
        $forks = $object->forks;
        after_forks:        $result['forks'] = $forks;

        
        $permissions = $object->permissions;

        if ($permissions === null) {
            goto after_permissions;
        }
        $permissions = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Repository⚡️Permissions($permissions);
        after_permissions:        $result['permissions'] = $permissions;

        
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
        after_clone_url:        $result['clone_url'] = $clone_url;

        
        $mirror_url = $object->mirror_url;

        if ($mirror_url === null) {
            goto after_mirror_url;
        }
        after_mirror_url:        $result['mirror_url'] = $mirror_url;

        
        $hooks_url = $object->hooks_url;
        after_hooks_url:        $result['hooks_url'] = $hooks_url;

        
        $svn_url = $object->svn_url;
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
        after_forks_count:        $result['forks_count'] = $forks_count;

        
        $stargazers_count = $object->stargazers_count;
        after_stargazers_count:        $result['stargazers_count'] = $stargazers_count;

        
        $watchers_count = $object->watchers_count;
        after_watchers_count:        $result['watchers_count'] = $watchers_count;

        
        $size = $object->size;
        after_size:        $result['size'] = $size;

        
        $default_branch = $object->default_branch;
        after_default_branch:        $result['default_branch'] = $default_branch;

        
        $open_issues_count = $object->open_issues_count;
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
        after_has_issues:        $result['has_issues'] = $has_issues;

        
        $has_projects = $object->has_projects;
        after_has_projects:        $result['has_projects'] = $has_projects;

        
        $has_wiki = $object->has_wiki;
        after_has_wiki:        $result['has_wiki'] = $has_wiki;

        
        $has_pages = $object->has_pages;
        after_has_pages:        $result['has_pages'] = $has_pages;

        
        $has_downloads = $object->has_downloads;
        after_has_downloads:        $result['has_downloads'] = $has_downloads;

        
        $has_discussions = $object->has_discussions;

        if ($has_discussions === null) {
            goto after_has_discussions;
        }
        after_has_discussions:        $result['has_discussions'] = $has_discussions;

        
        $archived = $object->archived;
        after_archived:        $result['archived'] = $archived;

        
        $disabled = $object->disabled;
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

        
        $allow_rebase_merge = $object->allow_rebase_merge;

        if ($allow_rebase_merge === null) {
            goto after_allow_rebase_merge;
        }
        after_allow_rebase_merge:        $result['allow_rebase_merge'] = $allow_rebase_merge;

        
        $template_repository = $object->template_repository;

        if ($template_repository === null) {
            goto after_template_repository;
        }
        $template_repository = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Repository⚡️TemplateRepository($template_repository);
        after_template_repository:        $result['template_repository'] = $template_repository;

        
        $temp_clone_token = $object->temp_clone_token;

        if ($temp_clone_token === null) {
            goto after_temp_clone_token;
        }
        after_temp_clone_token:        $result['temp_clone_token'] = $temp_clone_token;

        
        $allow_squash_merge = $object->allow_squash_merge;

        if ($allow_squash_merge === null) {
            goto after_allow_squash_merge;
        }
        after_allow_squash_merge:        $result['allow_squash_merge'] = $allow_squash_merge;

        
        $allow_auto_merge = $object->allow_auto_merge;

        if ($allow_auto_merge === null) {
            goto after_allow_auto_merge;
        }
        after_allow_auto_merge:        $result['allow_auto_merge'] = $allow_auto_merge;

        
        $delete_branch_on_merge = $object->delete_branch_on_merge;

        if ($delete_branch_on_merge === null) {
            goto after_delete_branch_on_merge;
        }
        after_delete_branch_on_merge:        $result['delete_branch_on_merge'] = $delete_branch_on_merge;

        
        $allow_update_branch = $object->allow_update_branch;

        if ($allow_update_branch === null) {
            goto after_allow_update_branch;
        }
        after_allow_update_branch:        $result['allow_update_branch'] = $allow_update_branch;

        
        $use_squash_pr_title_as_default = $object->use_squash_pr_title_as_default;

        if ($use_squash_pr_title_as_default === null) {
            goto after_use_squash_pr_title_as_default;
        }
        after_use_squash_pr_title_as_default:        $result['use_squash_pr_title_as_default'] = $use_squash_pr_title_as_default;

        
        $squash_merge_commit_title = $object->squash_merge_commit_title;

        if ($squash_merge_commit_title === null) {
            goto after_squash_merge_commit_title;
        }
        after_squash_merge_commit_title:        $result['squash_merge_commit_title'] = $squash_merge_commit_title;

        
        $squash_merge_commit_message = $object->squash_merge_commit_message;

        if ($squash_merge_commit_message === null) {
            goto after_squash_merge_commit_message;
        }
        after_squash_merge_commit_message:        $result['squash_merge_commit_message'] = $squash_merge_commit_message;

        
        $merge_commit_title = $object->merge_commit_title;

        if ($merge_commit_title === null) {
            goto after_merge_commit_title;
        }
        after_merge_commit_title:        $result['merge_commit_title'] = $merge_commit_title;

        
        $merge_commit_message = $object->merge_commit_message;

        if ($merge_commit_message === null) {
            goto after_merge_commit_message;
        }
        after_merge_commit_message:        $result['merge_commit_message'] = $merge_commit_message;

        
        $allow_merge_commit = $object->allow_merge_commit;

        if ($allow_merge_commit === null) {
            goto after_allow_merge_commit;
        }
        after_allow_merge_commit:        $result['allow_merge_commit'] = $allow_merge_commit;

        
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

        
        $open_issues = $object->open_issues;
        after_open_issues:        $result['open_issues'] = $open_issues;

        
        $watchers = $object->watchers;
        after_watchers:        $result['watchers'] = $watchers;

        
        $master_branch = $object->master_branch;

        if ($master_branch === null) {
            goto after_master_branch;
        }
        after_master_branch:        $result['master_branch'] = $master_branch;

        
        $starred_at = $object->starred_at;

        if ($starred_at === null) {
            goto after_starred_at;
        }
        after_starred_at:        $result['starred_at'] = $starred_at;

        
        $anonymous_access_enabled = $object->anonymous_access_enabled;

        if ($anonymous_access_enabled === null) {
            goto after_anonymous_access_enabled;
        }
        after_anonymous_access_enabled:        $result['anonymous_access_enabled'] = $anonymous_access_enabled;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Repository⚡️Permissions(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\Repository\Permissions);
        $result = [];

        $admin = $object->admin;
        after_admin:        $result['admin'] = $admin;

        
        $pull = $object->pull;
        after_pull:        $result['pull'] = $pull;

        
        $triage = $object->triage;

        if ($triage === null) {
            goto after_triage;
        }
        after_triage:        $result['triage'] = $triage;

        
        $push = $object->push;
        after_push:        $result['push'] = $push;

        
        $maintain = $object->maintain;

        if ($maintain === null) {
            goto after_maintain;
        }
        after_maintain:        $result['maintain'] = $maintain;


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


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Repository⚡️TemplateRepository(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\Repository\TemplateRepository);
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

        
        $full_name = $object->full_name;

        if ($full_name === null) {
            goto after_full_name;
        }
        after_full_name:        $result['full_name'] = $full_name;

        
        $owner = $object->owner;

        if ($owner === null) {
            goto after_owner;
        }
        $owner = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Repository⚡️TemplateRepository⚡️Owner($owner);
        after_owner:        $result['owner'] = $owner;

        
        $private = $object->private;

        if ($private === null) {
            goto after_private;
        }
        after_private:        $result['private'] = $private;

        
        $html_url = $object->html_url;

        if ($html_url === null) {
            goto after_html_url;
        }
        after_html_url:        $result['html_url'] = $html_url;

        
        $description = $object->description;

        if ($description === null) {
            goto after_description;
        }
        after_description:        $result['description'] = $description;

        
        $fork = $object->fork;

        if ($fork === null) {
            goto after_fork;
        }
        after_fork:        $result['fork'] = $fork;

        
        $url = $object->url;

        if ($url === null) {
            goto after_url;
        }
        after_url:        $result['url'] = $url;

        
        $archive_url = $object->archive_url;

        if ($archive_url === null) {
            goto after_archive_url;
        }
        after_archive_url:        $result['archive_url'] = $archive_url;

        
        $assignees_url = $object->assignees_url;

        if ($assignees_url === null) {
            goto after_assignees_url;
        }
        after_assignees_url:        $result['assignees_url'] = $assignees_url;

        
        $blobs_url = $object->blobs_url;

        if ($blobs_url === null) {
            goto after_blobs_url;
        }
        after_blobs_url:        $result['blobs_url'] = $blobs_url;

        
        $branches_url = $object->branches_url;

        if ($branches_url === null) {
            goto after_branches_url;
        }
        after_branches_url:        $result['branches_url'] = $branches_url;

        
        $collaborators_url = $object->collaborators_url;

        if ($collaborators_url === null) {
            goto after_collaborators_url;
        }
        after_collaborators_url:        $result['collaborators_url'] = $collaborators_url;

        
        $comments_url = $object->comments_url;

        if ($comments_url === null) {
            goto after_comments_url;
        }
        after_comments_url:        $result['comments_url'] = $comments_url;

        
        $commits_url = $object->commits_url;

        if ($commits_url === null) {
            goto after_commits_url;
        }
        after_commits_url:        $result['commits_url'] = $commits_url;

        
        $compare_url = $object->compare_url;

        if ($compare_url === null) {
            goto after_compare_url;
        }
        after_compare_url:        $result['compare_url'] = $compare_url;

        
        $contents_url = $object->contents_url;

        if ($contents_url === null) {
            goto after_contents_url;
        }
        after_contents_url:        $result['contents_url'] = $contents_url;

        
        $contributors_url = $object->contributors_url;

        if ($contributors_url === null) {
            goto after_contributors_url;
        }
        after_contributors_url:        $result['contributors_url'] = $contributors_url;

        
        $deployments_url = $object->deployments_url;

        if ($deployments_url === null) {
            goto after_deployments_url;
        }
        after_deployments_url:        $result['deployments_url'] = $deployments_url;

        
        $downloads_url = $object->downloads_url;

        if ($downloads_url === null) {
            goto after_downloads_url;
        }
        after_downloads_url:        $result['downloads_url'] = $downloads_url;

        
        $events_url = $object->events_url;

        if ($events_url === null) {
            goto after_events_url;
        }
        after_events_url:        $result['events_url'] = $events_url;

        
        $forks_url = $object->forks_url;

        if ($forks_url === null) {
            goto after_forks_url;
        }
        after_forks_url:        $result['forks_url'] = $forks_url;

        
        $git_commits_url = $object->git_commits_url;

        if ($git_commits_url === null) {
            goto after_git_commits_url;
        }
        after_git_commits_url:        $result['git_commits_url'] = $git_commits_url;

        
        $git_refs_url = $object->git_refs_url;

        if ($git_refs_url === null) {
            goto after_git_refs_url;
        }
        after_git_refs_url:        $result['git_refs_url'] = $git_refs_url;

        
        $git_tags_url = $object->git_tags_url;

        if ($git_tags_url === null) {
            goto after_git_tags_url;
        }
        after_git_tags_url:        $result['git_tags_url'] = $git_tags_url;

        
        $git_url = $object->git_url;

        if ($git_url === null) {
            goto after_git_url;
        }
        after_git_url:        $result['git_url'] = $git_url;

        
        $issue_comment_url = $object->issue_comment_url;

        if ($issue_comment_url === null) {
            goto after_issue_comment_url;
        }
        after_issue_comment_url:        $result['issue_comment_url'] = $issue_comment_url;

        
        $issue_events_url = $object->issue_events_url;

        if ($issue_events_url === null) {
            goto after_issue_events_url;
        }
        after_issue_events_url:        $result['issue_events_url'] = $issue_events_url;

        
        $issues_url = $object->issues_url;

        if ($issues_url === null) {
            goto after_issues_url;
        }
        after_issues_url:        $result['issues_url'] = $issues_url;

        
        $keys_url = $object->keys_url;

        if ($keys_url === null) {
            goto after_keys_url;
        }
        after_keys_url:        $result['keys_url'] = $keys_url;

        
        $labels_url = $object->labels_url;

        if ($labels_url === null) {
            goto after_labels_url;
        }
        after_labels_url:        $result['labels_url'] = $labels_url;

        
        $languages_url = $object->languages_url;

        if ($languages_url === null) {
            goto after_languages_url;
        }
        after_languages_url:        $result['languages_url'] = $languages_url;

        
        $merges_url = $object->merges_url;

        if ($merges_url === null) {
            goto after_merges_url;
        }
        after_merges_url:        $result['merges_url'] = $merges_url;

        
        $milestones_url = $object->milestones_url;

        if ($milestones_url === null) {
            goto after_milestones_url;
        }
        after_milestones_url:        $result['milestones_url'] = $milestones_url;

        
        $notifications_url = $object->notifications_url;

        if ($notifications_url === null) {
            goto after_notifications_url;
        }
        after_notifications_url:        $result['notifications_url'] = $notifications_url;

        
        $pulls_url = $object->pulls_url;

        if ($pulls_url === null) {
            goto after_pulls_url;
        }
        after_pulls_url:        $result['pulls_url'] = $pulls_url;

        
        $releases_url = $object->releases_url;

        if ($releases_url === null) {
            goto after_releases_url;
        }
        after_releases_url:        $result['releases_url'] = $releases_url;

        
        $ssh_url = $object->ssh_url;

        if ($ssh_url === null) {
            goto after_ssh_url;
        }
        after_ssh_url:        $result['ssh_url'] = $ssh_url;

        
        $stargazers_url = $object->stargazers_url;

        if ($stargazers_url === null) {
            goto after_stargazers_url;
        }
        after_stargazers_url:        $result['stargazers_url'] = $stargazers_url;

        
        $statuses_url = $object->statuses_url;

        if ($statuses_url === null) {
            goto after_statuses_url;
        }
        after_statuses_url:        $result['statuses_url'] = $statuses_url;

        
        $subscribers_url = $object->subscribers_url;

        if ($subscribers_url === null) {
            goto after_subscribers_url;
        }
        after_subscribers_url:        $result['subscribers_url'] = $subscribers_url;

        
        $subscription_url = $object->subscription_url;

        if ($subscription_url === null) {
            goto after_subscription_url;
        }
        after_subscription_url:        $result['subscription_url'] = $subscription_url;

        
        $tags_url = $object->tags_url;

        if ($tags_url === null) {
            goto after_tags_url;
        }
        after_tags_url:        $result['tags_url'] = $tags_url;

        
        $teams_url = $object->teams_url;

        if ($teams_url === null) {
            goto after_teams_url;
        }
        after_teams_url:        $result['teams_url'] = $teams_url;

        
        $trees_url = $object->trees_url;

        if ($trees_url === null) {
            goto after_trees_url;
        }
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

        if ($hooks_url === null) {
            goto after_hooks_url;
        }
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

        
        $allow_rebase_merge = $object->allow_rebase_merge;

        if ($allow_rebase_merge === null) {
            goto after_allow_rebase_merge;
        }
        after_allow_rebase_merge:        $result['allow_rebase_merge'] = $allow_rebase_merge;

        
        $temp_clone_token = $object->temp_clone_token;

        if ($temp_clone_token === null) {
            goto after_temp_clone_token;
        }
        after_temp_clone_token:        $result['temp_clone_token'] = $temp_clone_token;

        
        $allow_squash_merge = $object->allow_squash_merge;

        if ($allow_squash_merge === null) {
            goto after_allow_squash_merge;
        }
        after_allow_squash_merge:        $result['allow_squash_merge'] = $allow_squash_merge;

        
        $allow_auto_merge = $object->allow_auto_merge;

        if ($allow_auto_merge === null) {
            goto after_allow_auto_merge;
        }
        after_allow_auto_merge:        $result['allow_auto_merge'] = $allow_auto_merge;

        
        $delete_branch_on_merge = $object->delete_branch_on_merge;

        if ($delete_branch_on_merge === null) {
            goto after_delete_branch_on_merge;
        }
        after_delete_branch_on_merge:        $result['delete_branch_on_merge'] = $delete_branch_on_merge;

        
        $allow_update_branch = $object->allow_update_branch;

        if ($allow_update_branch === null) {
            goto after_allow_update_branch;
        }
        after_allow_update_branch:        $result['allow_update_branch'] = $allow_update_branch;

        
        $use_squash_pr_title_as_default = $object->use_squash_pr_title_as_default;

        if ($use_squash_pr_title_as_default === null) {
            goto after_use_squash_pr_title_as_default;
        }
        after_use_squash_pr_title_as_default:        $result['use_squash_pr_title_as_default'] = $use_squash_pr_title_as_default;

        
        $squash_merge_commit_title = $object->squash_merge_commit_title;

        if ($squash_merge_commit_title === null) {
            goto after_squash_merge_commit_title;
        }
        after_squash_merge_commit_title:        $result['squash_merge_commit_title'] = $squash_merge_commit_title;

        
        $squash_merge_commit_message = $object->squash_merge_commit_message;

        if ($squash_merge_commit_message === null) {
            goto after_squash_merge_commit_message;
        }
        after_squash_merge_commit_message:        $result['squash_merge_commit_message'] = $squash_merge_commit_message;

        
        $merge_commit_title = $object->merge_commit_title;

        if ($merge_commit_title === null) {
            goto after_merge_commit_title;
        }
        after_merge_commit_title:        $result['merge_commit_title'] = $merge_commit_title;

        
        $merge_commit_message = $object->merge_commit_message;

        if ($merge_commit_message === null) {
            goto after_merge_commit_message;
        }
        after_merge_commit_message:        $result['merge_commit_message'] = $merge_commit_message;

        
        $allow_merge_commit = $object->allow_merge_commit;

        if ($allow_merge_commit === null) {
            goto after_allow_merge_commit;
        }
        after_allow_merge_commit:        $result['allow_merge_commit'] = $allow_merge_commit;

        
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


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Repository⚡️TemplateRepository⚡️Owner(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\Repository\TemplateRepository\Owner);
        $result = [];

        $login = $object->login;

        if ($login === null) {
            goto after_login;
        }
        after_login:        $result['login'] = $login;

        
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

        
        $avatar_url = $object->avatar_url;

        if ($avatar_url === null) {
            goto after_avatar_url;
        }
        after_avatar_url:        $result['avatar_url'] = $avatar_url;

        
        $gravatar_id = $object->gravatar_id;

        if ($gravatar_id === null) {
            goto after_gravatar_id;
        }
        after_gravatar_id:        $result['gravatar_id'] = $gravatar_id;

        
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

        
        $followers_url = $object->followers_url;

        if ($followers_url === null) {
            goto after_followers_url;
        }
        after_followers_url:        $result['followers_url'] = $followers_url;

        
        $following_url = $object->following_url;

        if ($following_url === null) {
            goto after_following_url;
        }
        after_following_url:        $result['following_url'] = $following_url;

        
        $gists_url = $object->gists_url;

        if ($gists_url === null) {
            goto after_gists_url;
        }
        after_gists_url:        $result['gists_url'] = $gists_url;

        
        $starred_url = $object->starred_url;

        if ($starred_url === null) {
            goto after_starred_url;
        }
        after_starred_url:        $result['starred_url'] = $starred_url;

        
        $subscriptions_url = $object->subscriptions_url;

        if ($subscriptions_url === null) {
            goto after_subscriptions_url;
        }
        after_subscriptions_url:        $result['subscriptions_url'] = $subscriptions_url;

        
        $organizations_url = $object->organizations_url;

        if ($organizations_url === null) {
            goto after_organizations_url;
        }
        after_organizations_url:        $result['organizations_url'] = $organizations_url;

        
        $repos_url = $object->repos_url;

        if ($repos_url === null) {
            goto after_repos_url;
        }
        after_repos_url:        $result['repos_url'] = $repos_url;

        
        $events_url = $object->events_url;

        if ($events_url === null) {
            goto after_events_url;
        }
        after_events_url:        $result['events_url'] = $events_url;

        
        $received_events_url = $object->received_events_url;

        if ($received_events_url === null) {
            goto after_received_events_url;
        }
        after_received_events_url:        $result['received_events_url'] = $received_events_url;

        
        $type = $object->type;

        if ($type === null) {
            goto after_type;
        }
        after_type:        $result['type'] = $type;

        
        $site_admin = $object->site_admin;

        if ($site_admin === null) {
            goto after_site_admin;
        }
        after_site_admin:        $result['site_admin'] = $site_admin;


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


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteRequested(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRequested);
        $result = [];

        $action = $object->action;
        after_action:        $result['action'] = $action;

        
        $actions_meta = $object->actions_meta;

        if ($actions_meta === null) {
            goto after_actions_meta;
        }
        after_actions_meta:        $result['actions_meta'] = $actions_meta;

        
        $check_suite = $object->check_suite;
        $check_suite = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteRequested⚡️CheckSuite($check_suite);
        after_check_suite:        $result['check_suite'] = $check_suite;

        
        $enterprise = $object->enterprise;

        if ($enterprise === null) {
            goto after_enterprise;
        }
        $enterprise = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Enterprise($enterprise);
        after_enterprise:        $result['enterprise'] = $enterprise;

        
        $installation = $object->installation;

        if ($installation === null) {
            goto after_installation;
        }
        $installation = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleInstallation($installation);
        after_installation:        $result['installation'] = $installation;

        
        $organization = $object->organization;

        if ($organization === null) {
            goto after_organization;
        }
        $organization = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️OrganizationSimple($organization);
        after_organization:        $result['organization'] = $organization;

        
        $repository = $object->repository;
        $repository = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Repository($repository);
        after_repository:        $result['repository'] = $repository;

        
        $sender = $object->sender;
        $sender = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($sender);
        after_sender:        $result['sender'] = $sender;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteRequested⚡️CheckSuite(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRequested\CheckSuite);
        $result = [];

        $after = $object->after;

        if ($after === null) {
            goto after_after;
        }
        after_after:        $result['after'] = $after;

        
        $app = $object->app;
        $app = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteRequested⚡️CheckSuite⚡️App($app);
        after_app:        $result['app'] = $app;

        
        $before = $object->before;

        if ($before === null) {
            goto after_before;
        }
        after_before:        $result['before'] = $before;

        
        $check_runs_url = $object->check_runs_url;
        after_check_runs_url:        $result['check_runs_url'] = $check_runs_url;

        
        $conclusion = $object->conclusion;

        if ($conclusion === null) {
            goto after_conclusion;
        }
        after_conclusion:        $result['conclusion'] = $conclusion;

        
        $created_at = $object->created_at;
        after_created_at:        $result['created_at'] = $created_at;

        
        $head_branch = $object->head_branch;

        if ($head_branch === null) {
            goto after_head_branch;
        }
        after_head_branch:        $result['head_branch'] = $head_branch;

        
        $head_commit = $object->head_commit;
        $head_commit = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteCompleted⚡️CheckSuite⚡️HeadCommit($head_commit);
        after_head_commit:        $result['head_commit'] = $head_commit;

        
        $head_sha = $object->head_sha;
        after_head_sha:        $result['head_sha'] = $head_sha;

        
        $id = $object->id;
        after_id:        $result['id'] = $id;

        
        $latest_check_runs_count = $object->latest_check_runs_count;
        after_latest_check_runs_count:        $result['latest_check_runs_count'] = $latest_check_runs_count;

        
        $node_id = $object->node_id;
        after_node_id:        $result['node_id'] = $node_id;

        
        $pull_requests = $object->pull_requests;
        static $pull_requestsSerializer0;

        if ($pull_requestsSerializer0 === null) {
            $pull_requestsSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\WebhookCheckSuiteCompleted\\CheckSuite\\PullRequests',
));
        }
        
        $pull_requests = $pull_requestsSerializer0->serialize($pull_requests, $this);
        after_pull_requests:        $result['pull_requests'] = $pull_requests;

        
        $rerequestable = $object->rerequestable;

        if ($rerequestable === null) {
            goto after_rerequestable;
        }
        after_rerequestable:        $result['rerequestable'] = $rerequestable;

        
        $runs_rerequestable = $object->runs_rerequestable;

        if ($runs_rerequestable === null) {
            goto after_runs_rerequestable;
        }
        after_runs_rerequestable:        $result['runs_rerequestable'] = $runs_rerequestable;

        
        $status = $object->status;

        if ($status === null) {
            goto after_status;
        }
        after_status:        $result['status'] = $status;

        
        $updated_at = $object->updated_at;
        after_updated_at:        $result['updated_at'] = $updated_at;

        
        $url = $object->url;
        after_url:        $result['url'] = $url;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteRequested⚡️CheckSuite⚡️App(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRequested\CheckSuite\App);
        $result = [];

        $created_at = $object->created_at;

        if ($created_at === null) {
            goto after_created_at;
        }
        after_created_at:        $result['created_at'] = $created_at;

        
        $description = $object->description;

        if ($description === null) {
            goto after_description;
        }
        after_description:        $result['description'] = $description;

        
        $events = $object->events;

        if ($events === null) {
            goto after_events;
        }
        static $eventsSerializer0;

        if ($eventsSerializer0 === null) {
            $eventsSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $events = $eventsSerializer0->serialize($events, $this);
        after_events:        $result['events'] = $events;

        
        $external_url = $object->external_url;

        if ($external_url === null) {
            goto after_external_url;
        }
        after_external_url:        $result['external_url'] = $external_url;

        
        $html_url = $object->html_url;
        after_html_url:        $result['html_url'] = $html_url;

        
        $id = $object->id;

        if ($id === null) {
            goto after_id;
        }
        after_id:        $result['id'] = $id;

        
        $name = $object->name;
        after_name:        $result['name'] = $name;

        
        $node_id = $object->node_id;
        after_node_id:        $result['node_id'] = $node_id;

        
        $owner = $object->owner;

        if ($owner === null) {
            goto after_owner;
        }
        $owner = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Discussion⚡️AnswerChosenBy($owner);
        after_owner:        $result['owner'] = $owner;

        
        $permissions = $object->permissions;

        if ($permissions === null) {
            goto after_permissions;
        }
        $permissions = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteCompleted⚡️CheckSuite⚡️App⚡️Permissions($permissions);
        after_permissions:        $result['permissions'] = $permissions;

        
        $slug = $object->slug;

        if ($slug === null) {
            goto after_slug;
        }
        after_slug:        $result['slug'] = $slug;

        
        $updated_at = $object->updated_at;

        if ($updated_at === null) {
            goto after_updated_at;
        }
        after_updated_at:        $result['updated_at'] = $updated_at;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteRerequested(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRerequested);
        $result = [];

        $action = $object->action;
        after_action:        $result['action'] = $action;

        
        $actions_meta = $object->actions_meta;

        if ($actions_meta === null) {
            goto after_actions_meta;
        }
        $actions_meta = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteRerequested⚡️ActionsMeta($actions_meta);
        after_actions_meta:        $result['actions_meta'] = $actions_meta;

        
        $check_suite = $object->check_suite;
        $check_suite = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteRerequested⚡️CheckSuite($check_suite);
        after_check_suite:        $result['check_suite'] = $check_suite;

        
        $enterprise = $object->enterprise;

        if ($enterprise === null) {
            goto after_enterprise;
        }
        $enterprise = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Enterprise($enterprise);
        after_enterprise:        $result['enterprise'] = $enterprise;

        
        $installation = $object->installation;

        if ($installation === null) {
            goto after_installation;
        }
        $installation = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleInstallation($installation);
        after_installation:        $result['installation'] = $installation;

        
        $organization = $object->organization;

        if ($organization === null) {
            goto after_organization;
        }
        $organization = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️OrganizationSimple($organization);
        after_organization:        $result['organization'] = $organization;

        
        $repository = $object->repository;
        $repository = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Repository($repository);
        after_repository:        $result['repository'] = $repository;

        
        $sender = $object->sender;
        $sender = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($sender);
        after_sender:        $result['sender'] = $sender;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteRerequested⚡️ActionsMeta(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRerequested\ActionsMeta);
        $result = [];

        $rerun_info = $object->rerun_info;

        if ($rerun_info === null) {
            goto after_rerun_info;
        }
        $rerun_info = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteRerequested⚡️ActionsMeta⚡️RerunInfo($rerun_info);
        after_rerun_info:        $result['rerun_info'] = $rerun_info;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteRerequested⚡️ActionsMeta⚡️RerunInfo(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRerequested\ActionsMeta\RerunInfo);
        $result = [];

        $plan_id = $object->plan_id;

        if ($plan_id === null) {
            goto after_plan_id;
        }
        after_plan_id:        $result['plan_id'] = $plan_id;

        
        $job_ids = $object->job_ids;

        if ($job_ids === null) {
            goto after_job_ids;
        }
        static $job_idsSerializer0;

        if ($job_idsSerializer0 === null) {
            $job_idsSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $job_ids = $job_idsSerializer0->serialize($job_ids, $this);
        after_job_ids:        $result['job_ids'] = $job_ids;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteRerequested⚡️CheckSuite(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRerequested\CheckSuite);
        $result = [];

        $after = $object->after;

        if ($after === null) {
            goto after_after;
        }
        after_after:        $result['after'] = $after;

        
        $app = $object->app;
        $app = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteRerequested⚡️CheckSuite⚡️App($app);
        after_app:        $result['app'] = $app;

        
        $before = $object->before;

        if ($before === null) {
            goto after_before;
        }
        after_before:        $result['before'] = $before;

        
        $check_runs_url = $object->check_runs_url;
        after_check_runs_url:        $result['check_runs_url'] = $check_runs_url;

        
        $conclusion = $object->conclusion;

        if ($conclusion === null) {
            goto after_conclusion;
        }
        after_conclusion:        $result['conclusion'] = $conclusion;

        
        $created_at = $object->created_at;
        after_created_at:        $result['created_at'] = $created_at;

        
        $head_branch = $object->head_branch;

        if ($head_branch === null) {
            goto after_head_branch;
        }
        after_head_branch:        $result['head_branch'] = $head_branch;

        
        $head_commit = $object->head_commit;
        $head_commit = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteCompleted⚡️CheckSuite⚡️HeadCommit($head_commit);
        after_head_commit:        $result['head_commit'] = $head_commit;

        
        $head_sha = $object->head_sha;
        after_head_sha:        $result['head_sha'] = $head_sha;

        
        $id = $object->id;
        after_id:        $result['id'] = $id;

        
        $latest_check_runs_count = $object->latest_check_runs_count;
        after_latest_check_runs_count:        $result['latest_check_runs_count'] = $latest_check_runs_count;

        
        $node_id = $object->node_id;
        after_node_id:        $result['node_id'] = $node_id;

        
        $pull_requests = $object->pull_requests;
        static $pull_requestsSerializer0;

        if ($pull_requestsSerializer0 === null) {
            $pull_requestsSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\WebhookCheckSuiteCompleted\\CheckSuite\\PullRequests',
));
        }
        
        $pull_requests = $pull_requestsSerializer0->serialize($pull_requests, $this);
        after_pull_requests:        $result['pull_requests'] = $pull_requests;

        
        $rerequestable = $object->rerequestable;

        if ($rerequestable === null) {
            goto after_rerequestable;
        }
        after_rerequestable:        $result['rerequestable'] = $rerequestable;

        
        $runs_rerequestable = $object->runs_rerequestable;

        if ($runs_rerequestable === null) {
            goto after_runs_rerequestable;
        }
        after_runs_rerequestable:        $result['runs_rerequestable'] = $runs_rerequestable;

        
        $status = $object->status;

        if ($status === null) {
            goto after_status;
        }
        after_status:        $result['status'] = $status;

        
        $updated_at = $object->updated_at;
        after_updated_at:        $result['updated_at'] = $updated_at;

        
        $url = $object->url;
        after_url:        $result['url'] = $url;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteRerequested⚡️CheckSuite⚡️App(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRerequested\CheckSuite\App);
        $result = [];

        $created_at = $object->created_at;

        if ($created_at === null) {
            goto after_created_at;
        }
        after_created_at:        $result['created_at'] = $created_at;

        
        $description = $object->description;

        if ($description === null) {
            goto after_description;
        }
        after_description:        $result['description'] = $description;

        
        $events = $object->events;

        if ($events === null) {
            goto after_events;
        }
        static $eventsSerializer0;

        if ($eventsSerializer0 === null) {
            $eventsSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $events = $eventsSerializer0->serialize($events, $this);
        after_events:        $result['events'] = $events;

        
        $external_url = $object->external_url;

        if ($external_url === null) {
            goto after_external_url;
        }
        after_external_url:        $result['external_url'] = $external_url;

        
        $html_url = $object->html_url;
        after_html_url:        $result['html_url'] = $html_url;

        
        $id = $object->id;

        if ($id === null) {
            goto after_id;
        }
        after_id:        $result['id'] = $id;

        
        $name = $object->name;
        after_name:        $result['name'] = $name;

        
        $node_id = $object->node_id;
        after_node_id:        $result['node_id'] = $node_id;

        
        $owner = $object->owner;

        if ($owner === null) {
            goto after_owner;
        }
        $owner = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Discussion⚡️AnswerChosenBy($owner);
        after_owner:        $result['owner'] = $owner;

        
        $permissions = $object->permissions;

        if ($permissions === null) {
            goto after_permissions;
        }
        $permissions = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteCompleted⚡️CheckSuite⚡️App⚡️Permissions($permissions);
        after_permissions:        $result['permissions'] = $permissions;

        
        $slug = $object->slug;

        if ($slug === null) {
            goto after_slug;
        }
        after_slug:        $result['slug'] = $slug;

        
        $updated_at = $object->updated_at;

        if ($updated_at === null) {
            goto after_updated_at;
        }
        after_updated_at:        $result['updated_at'] = $updated_at;


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
