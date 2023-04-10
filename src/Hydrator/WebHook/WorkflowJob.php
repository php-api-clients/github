<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Hydrator\WebHook;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class WorkflowJob implements ObjectMapper
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
            'ApiClients\Client\GitHub\Schema\WebhookWorkflowJobCompleted' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookWorkflowJobCompleted($payload),
                'ApiClients\Client\GitHub\Schema\Enterprise' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Enterprise($payload),
                'ApiClients\Client\GitHub\Schema\SimpleInstallation' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleInstallation($payload),
                'ApiClients\Client\GitHub\Schema\OrganizationSimple' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️OrganizationSimple($payload),
                'ApiClients\Client\GitHub\Schema\Repository' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Repository($payload),
                'ApiClients\Client\GitHub\Schema\Repository\Permissions' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Repository⚡️Permissions($payload),
                'ApiClients\Client\GitHub\Schema\SimpleUser' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($payload),
                'ApiClients\Client\GitHub\Schema\Repository\TemplateRepository' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Repository⚡️TemplateRepository($payload),
                'ApiClients\Client\GitHub\Schema\Repository\TemplateRepository\Owner' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Repository⚡️TemplateRepository⚡️Owner($payload),
                'ApiClients\Client\GitHub\Schema\Repository\TemplateRepository\Permissions' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Repository⚡️TemplateRepository⚡️Permissions($payload),
                'ApiClients\Client\GitHub\Schema\WebhookWorkflowJobCompleted\WorkflowJob' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookWorkflowJobCompleted⚡️WorkflowJob($payload),
                'ApiClients\Client\GitHub\Schema\WebhookWorkflowJobCompleted\WorkflowJob\Steps' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookWorkflowJobCompleted⚡️WorkflowJob⚡️Steps($payload),
                'ApiClients\Client\GitHub\Schema\Deployment' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Deployment($payload),
                'ApiClients\Client\GitHub\Schema\WebhookWorkflowJobInProgress' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookWorkflowJobInProgress($payload),
                'ApiClients\Client\GitHub\Schema\WebhookWorkflowJobInProgress\WorkflowJob' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookWorkflowJobInProgress⚡️WorkflowJob($payload),
                'ApiClients\Client\GitHub\Schema\WebhookWorkflowJobInProgress\WorkflowJob\Steps' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookWorkflowJobInProgress⚡️WorkflowJob⚡️Steps($payload),
                'ApiClients\Client\GitHub\Schema\WebhookWorkflowJobQueued' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookWorkflowJobQueued($payload),
                'ApiClients\Client\GitHub\Schema\WebhookWorkflowJobQueued\WorkflowJob' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookWorkflowJobQueued⚡️WorkflowJob($payload),
                'ApiClients\Client\GitHub\Schema\WebhookWorkflowJobQueued\WorkflowJob\Steps' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookWorkflowJobQueued⚡️WorkflowJob⚡️Steps($payload),
                'ApiClients\Client\GitHub\Schema\WebhookWorkflowJobWaiting' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookWorkflowJobWaiting($payload),
                'ApiClients\Client\GitHub\Schema\WebhookWorkflowJobWaiting\WorkflowJob' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookWorkflowJobWaiting⚡️WorkflowJob($payload),
                'ApiClients\Client\GitHub\Schema\WebhookWorkflowJobWaiting\WorkflowJob\Steps' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookWorkflowJobWaiting⚡️WorkflowJob⚡️Steps($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookWorkflowJobCompleted(array $payload): \ApiClients\Client\GitHub\Schema\WebhookWorkflowJobCompleted
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

            $value = $payload['workflow_job'] ?? null;

            if ($value === null) {
                $missingFields[] = 'workflow_job';
                goto after_workflowJob;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'workflowJob';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookWorkflowJobCompleted⚡️WorkflowJob($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['workflowJob'] = $value;

            after_workflowJob:

            $value = $payload['deployment'] ?? null;

            if ($value === null) {
                $properties['deployment'] = null;
                goto after_deployment;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'deployment';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Deployment($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['deployment'] = $value;

            after_deployment:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookWorkflowJobCompleted', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookWorkflowJobCompleted::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WebhookWorkflowJobCompleted(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookWorkflowJobCompleted', $exception, stack: $this->hydrationStack);
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
                goto after_htmlUrl;
            }

            $properties['htmlUrl'] = $value;

            after_htmlUrl:

            $value = $payload['website_url'] ?? null;

            if ($value === null) {
                $properties['websiteUrl'] = null;
                goto after_websiteUrl;
            }

            $properties['websiteUrl'] = $value;

            after_websiteUrl:

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

            $value = $payload['slug'] ?? null;

            if ($value === null) {
                $missingFields[] = 'slug';
                goto after_slug;
            }

            $properties['slug'] = $value;

            after_slug:

            $value = $payload['created_at'] ?? null;

            if ($value === null) {
                $properties['createdAt'] = null;
                goto after_createdAt;
            }

            $properties['createdAt'] = $value;

            after_createdAt:

            $value = $payload['updated_at'] ?? null;

            if ($value === null) {
                $properties['updatedAt'] = null;
                goto after_updatedAt;
            }

            $properties['updatedAt'] = $value;

            after_updatedAt:

            $value = $payload['avatar_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'avatar_url';
                goto after_avatarUrl;
            }

            $properties['avatarUrl'] = $value;

            after_avatarUrl:

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
                goto after_nodeId;
            }

            $properties['nodeId'] = $value;

            after_nodeId:

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
                goto after_nodeId;
            }

            $properties['nodeId'] = $value;

            after_nodeId:

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
                goto after_reposUrl;
            }

            $properties['reposUrl'] = $value;

            after_reposUrl:

            $value = $payload['events_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'events_url';
                goto after_eventsUrl;
            }

            $properties['eventsUrl'] = $value;

            after_eventsUrl:

            $value = $payload['hooks_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'hooks_url';
                goto after_hooksUrl;
            }

            $properties['hooksUrl'] = $value;

            after_hooksUrl:

            $value = $payload['issues_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'issues_url';
                goto after_issuesUrl;
            }

            $properties['issuesUrl'] = $value;

            after_issuesUrl:

            $value = $payload['members_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'members_url';
                goto after_membersUrl;
            }

            $properties['membersUrl'] = $value;

            after_membersUrl:

            $value = $payload['public_members_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'public_members_url';
                goto after_publicMembersUrl;
            }

            $properties['publicMembersUrl'] = $value;

            after_publicMembersUrl:

            $value = $payload['avatar_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'avatar_url';
                goto after_avatarUrl;
            }

            $properties['avatarUrl'] = $value;

            after_avatarUrl:

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

            $value = $payload['full_name'] ?? null;

            if ($value === null) {
                $missingFields[] = 'full_name';
                goto after_fullName;
            }

            $properties['fullName'] = $value;

            after_fullName:

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
                goto after_htmlUrl;
            }

            $properties['htmlUrl'] = $value;

            after_htmlUrl:

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
                goto after_archiveUrl;
            }

            $properties['archiveUrl'] = $value;

            after_archiveUrl:

            $value = $payload['assignees_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'assignees_url';
                goto after_assigneesUrl;
            }

            $properties['assigneesUrl'] = $value;

            after_assigneesUrl:

            $value = $payload['blobs_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'blobs_url';
                goto after_blobsUrl;
            }

            $properties['blobsUrl'] = $value;

            after_blobsUrl:

            $value = $payload['branches_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'branches_url';
                goto after_branchesUrl;
            }

            $properties['branchesUrl'] = $value;

            after_branchesUrl:

            $value = $payload['collaborators_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'collaborators_url';
                goto after_collaboratorsUrl;
            }

            $properties['collaboratorsUrl'] = $value;

            after_collaboratorsUrl:

            $value = $payload['comments_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'comments_url';
                goto after_commentsUrl;
            }

            $properties['commentsUrl'] = $value;

            after_commentsUrl:

            $value = $payload['commits_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'commits_url';
                goto after_commitsUrl;
            }

            $properties['commitsUrl'] = $value;

            after_commitsUrl:

            $value = $payload['compare_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'compare_url';
                goto after_compareUrl;
            }

            $properties['compareUrl'] = $value;

            after_compareUrl:

            $value = $payload['contents_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'contents_url';
                goto after_contentsUrl;
            }

            $properties['contentsUrl'] = $value;

            after_contentsUrl:

            $value = $payload['contributors_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'contributors_url';
                goto after_contributorsUrl;
            }

            $properties['contributorsUrl'] = $value;

            after_contributorsUrl:

            $value = $payload['deployments_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'deployments_url';
                goto after_deploymentsUrl;
            }

            $properties['deploymentsUrl'] = $value;

            after_deploymentsUrl:

            $value = $payload['downloads_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'downloads_url';
                goto after_downloadsUrl;
            }

            $properties['downloadsUrl'] = $value;

            after_downloadsUrl:

            $value = $payload['events_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'events_url';
                goto after_eventsUrl;
            }

            $properties['eventsUrl'] = $value;

            after_eventsUrl:

            $value = $payload['forks_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'forks_url';
                goto after_forksUrl;
            }

            $properties['forksUrl'] = $value;

            after_forksUrl:

            $value = $payload['git_commits_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'git_commits_url';
                goto after_gitCommitsUrl;
            }

            $properties['gitCommitsUrl'] = $value;

            after_gitCommitsUrl:

            $value = $payload['git_refs_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'git_refs_url';
                goto after_gitRefsUrl;
            }

            $properties['gitRefsUrl'] = $value;

            after_gitRefsUrl:

            $value = $payload['git_tags_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'git_tags_url';
                goto after_gitTagsUrl;
            }

            $properties['gitTagsUrl'] = $value;

            after_gitTagsUrl:

            $value = $payload['git_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'git_url';
                goto after_gitUrl;
            }

            $properties['gitUrl'] = $value;

            after_gitUrl:

            $value = $payload['issue_comment_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'issue_comment_url';
                goto after_issueCommentUrl;
            }

            $properties['issueCommentUrl'] = $value;

            after_issueCommentUrl:

            $value = $payload['issue_events_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'issue_events_url';
                goto after_issueEventsUrl;
            }

            $properties['issueEventsUrl'] = $value;

            after_issueEventsUrl:

            $value = $payload['issues_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'issues_url';
                goto after_issuesUrl;
            }

            $properties['issuesUrl'] = $value;

            after_issuesUrl:

            $value = $payload['keys_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'keys_url';
                goto after_keysUrl;
            }

            $properties['keysUrl'] = $value;

            after_keysUrl:

            $value = $payload['labels_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'labels_url';
                goto after_labelsUrl;
            }

            $properties['labelsUrl'] = $value;

            after_labelsUrl:

            $value = $payload['languages_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'languages_url';
                goto after_languagesUrl;
            }

            $properties['languagesUrl'] = $value;

            after_languagesUrl:

            $value = $payload['merges_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'merges_url';
                goto after_mergesUrl;
            }

            $properties['mergesUrl'] = $value;

            after_mergesUrl:

            $value = $payload['milestones_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'milestones_url';
                goto after_milestonesUrl;
            }

            $properties['milestonesUrl'] = $value;

            after_milestonesUrl:

            $value = $payload['notifications_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'notifications_url';
                goto after_notificationsUrl;
            }

            $properties['notificationsUrl'] = $value;

            after_notificationsUrl:

            $value = $payload['pulls_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'pulls_url';
                goto after_pullsUrl;
            }

            $properties['pullsUrl'] = $value;

            after_pullsUrl:

            $value = $payload['releases_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'releases_url';
                goto after_releasesUrl;
            }

            $properties['releasesUrl'] = $value;

            after_releasesUrl:

            $value = $payload['ssh_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'ssh_url';
                goto after_sshUrl;
            }

            $properties['sshUrl'] = $value;

            after_sshUrl:

            $value = $payload['stargazers_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'stargazers_url';
                goto after_stargazersUrl;
            }

            $properties['stargazersUrl'] = $value;

            after_stargazersUrl:

            $value = $payload['statuses_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'statuses_url';
                goto after_statusesUrl;
            }

            $properties['statusesUrl'] = $value;

            after_statusesUrl:

            $value = $payload['subscribers_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'subscribers_url';
                goto after_subscribersUrl;
            }

            $properties['subscribersUrl'] = $value;

            after_subscribersUrl:

            $value = $payload['subscription_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'subscription_url';
                goto after_subscriptionUrl;
            }

            $properties['subscriptionUrl'] = $value;

            after_subscriptionUrl:

            $value = $payload['tags_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'tags_url';
                goto after_tagsUrl;
            }

            $properties['tagsUrl'] = $value;

            after_tagsUrl:

            $value = $payload['teams_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'teams_url';
                goto after_teamsUrl;
            }

            $properties['teamsUrl'] = $value;

            after_teamsUrl:

            $value = $payload['trees_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'trees_url';
                goto after_treesUrl;
            }

            $properties['treesUrl'] = $value;

            after_treesUrl:

            $value = $payload['clone_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'clone_url';
                goto after_cloneUrl;
            }

            $properties['cloneUrl'] = $value;

            after_cloneUrl:

            $value = $payload['mirror_url'] ?? null;

            if ($value === null) {
                $properties['mirrorUrl'] = null;
                goto after_mirrorUrl;
            }

            $properties['mirrorUrl'] = $value;

            after_mirrorUrl:

            $value = $payload['hooks_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'hooks_url';
                goto after_hooksUrl;
            }

            $properties['hooksUrl'] = $value;

            after_hooksUrl:

            $value = $payload['svn_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'svn_url';
                goto after_svnUrl;
            }

            $properties['svnUrl'] = $value;

            after_svnUrl:

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
                goto after_forksCount;
            }

            $properties['forksCount'] = $value;

            after_forksCount:

            $value = $payload['stargazers_count'] ?? null;

            if ($value === null) {
                $missingFields[] = 'stargazers_count';
                goto after_stargazersCount;
            }

            $properties['stargazersCount'] = $value;

            after_stargazersCount:

            $value = $payload['watchers_count'] ?? null;

            if ($value === null) {
                $missingFields[] = 'watchers_count';
                goto after_watchersCount;
            }

            $properties['watchersCount'] = $value;

            after_watchersCount:

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
                goto after_defaultBranch;
            }

            $properties['defaultBranch'] = $value;

            after_defaultBranch:

            $value = $payload['open_issues_count'] ?? null;

            if ($value === null) {
                $missingFields[] = 'open_issues_count';
                goto after_openIssuesCount;
            }

            $properties['openIssuesCount'] = $value;

            after_openIssuesCount:

            $value = $payload['is_template'] ?? null;

            if ($value === null) {
                $properties['isTemplate'] = null;
                goto after_isTemplate;
            }

            $properties['isTemplate'] = $value;

            after_isTemplate:

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
                goto after_hasIssues;
            }

            $properties['hasIssues'] = $value;

            after_hasIssues:

            $value = $payload['has_projects'] ?? null;

            if ($value === null) {
                $missingFields[] = 'has_projects';
                goto after_hasProjects;
            }

            $properties['hasProjects'] = $value;

            after_hasProjects:

            $value = $payload['has_wiki'] ?? null;

            if ($value === null) {
                $missingFields[] = 'has_wiki';
                goto after_hasWiki;
            }

            $properties['hasWiki'] = $value;

            after_hasWiki:

            $value = $payload['has_pages'] ?? null;

            if ($value === null) {
                $missingFields[] = 'has_pages';
                goto after_hasPages;
            }

            $properties['hasPages'] = $value;

            after_hasPages:

            $value = $payload['has_downloads'] ?? null;

            if ($value === null) {
                $missingFields[] = 'has_downloads';
                goto after_hasDownloads;
            }

            $properties['hasDownloads'] = $value;

            after_hasDownloads:

            $value = $payload['has_discussions'] ?? null;

            if ($value === null) {
                $properties['hasDiscussions'] = null;
                goto after_hasDiscussions;
            }

            $properties['hasDiscussions'] = $value;

            after_hasDiscussions:

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
                $properties['pushedAt'] = null;
                goto after_pushedAt;
            }

            $properties['pushedAt'] = $value;

            after_pushedAt:

            $value = $payload['created_at'] ?? null;

            if ($value === null) {
                $properties['createdAt'] = null;
                goto after_createdAt;
            }

            $properties['createdAt'] = $value;

            after_createdAt:

            $value = $payload['updated_at'] ?? null;

            if ($value === null) {
                $properties['updatedAt'] = null;
                goto after_updatedAt;
            }

            $properties['updatedAt'] = $value;

            after_updatedAt:

            $value = $payload['allow_rebase_merge'] ?? null;

            if ($value === null) {
                $properties['allowRebaseMerge'] = null;
                goto after_allowRebaseMerge;
            }

            $properties['allowRebaseMerge'] = $value;

            after_allowRebaseMerge:

            $value = $payload['template_repository'] ?? null;

            if ($value === null) {
                $properties['templateRepository'] = null;
                goto after_templateRepository;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'templateRepository';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Repository⚡️TemplateRepository($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['templateRepository'] = $value;

            after_templateRepository:

            $value = $payload['temp_clone_token'] ?? null;

            if ($value === null) {
                $properties['tempCloneToken'] = null;
                goto after_tempCloneToken;
            }

            $properties['tempCloneToken'] = $value;

            after_tempCloneToken:

            $value = $payload['allow_squash_merge'] ?? null;

            if ($value === null) {
                $properties['allowSquashMerge'] = null;
                goto after_allowSquashMerge;
            }

            $properties['allowSquashMerge'] = $value;

            after_allowSquashMerge:

            $value = $payload['allow_auto_merge'] ?? null;

            if ($value === null) {
                $properties['allowAutoMerge'] = null;
                goto after_allowAutoMerge;
            }

            $properties['allowAutoMerge'] = $value;

            after_allowAutoMerge:

            $value = $payload['delete_branch_on_merge'] ?? null;

            if ($value === null) {
                $properties['deleteBranchOnMerge'] = null;
                goto after_deleteBranchOnMerge;
            }

            $properties['deleteBranchOnMerge'] = $value;

            after_deleteBranchOnMerge:

            $value = $payload['allow_update_branch'] ?? null;

            if ($value === null) {
                $properties['allowUpdateBranch'] = null;
                goto after_allowUpdateBranch;
            }

            $properties['allowUpdateBranch'] = $value;

            after_allowUpdateBranch:

            $value = $payload['use_squash_pr_title_as_default'] ?? null;

            if ($value === null) {
                $properties['useSquashPrTitleAsDefault'] = null;
                goto after_useSquashPrTitleAsDefault;
            }

            $properties['useSquashPrTitleAsDefault'] = $value;

            after_useSquashPrTitleAsDefault:

            $value = $payload['squash_merge_commit_title'] ?? null;

            if ($value === null) {
                $properties['squashMergeCommitTitle'] = null;
                goto after_squashMergeCommitTitle;
            }

            $properties['squashMergeCommitTitle'] = $value;

            after_squashMergeCommitTitle:

            $value = $payload['squash_merge_commit_message'] ?? null;

            if ($value === null) {
                $properties['squashMergeCommitMessage'] = null;
                goto after_squashMergeCommitMessage;
            }

            $properties['squashMergeCommitMessage'] = $value;

            after_squashMergeCommitMessage:

            $value = $payload['merge_commit_title'] ?? null;

            if ($value === null) {
                $properties['mergeCommitTitle'] = null;
                goto after_mergeCommitTitle;
            }

            $properties['mergeCommitTitle'] = $value;

            after_mergeCommitTitle:

            $value = $payload['merge_commit_message'] ?? null;

            if ($value === null) {
                $properties['mergeCommitMessage'] = null;
                goto after_mergeCommitMessage;
            }

            $properties['mergeCommitMessage'] = $value;

            after_mergeCommitMessage:

            $value = $payload['allow_merge_commit'] ?? null;

            if ($value === null) {
                $properties['allowMergeCommit'] = null;
                goto after_allowMergeCommit;
            }

            $properties['allowMergeCommit'] = $value;

            after_allowMergeCommit:

            $value = $payload['allow_forking'] ?? null;

            if ($value === null) {
                $properties['allowForking'] = null;
                goto after_allowForking;
            }

            $properties['allowForking'] = $value;

            after_allowForking:

            $value = $payload['web_commit_signoff_required'] ?? null;

            if ($value === null) {
                $properties['webCommitSignoffRequired'] = null;
                goto after_webCommitSignoffRequired;
            }

            $properties['webCommitSignoffRequired'] = $value;

            after_webCommitSignoffRequired:

            $value = $payload['subscribers_count'] ?? null;

            if ($value === null) {
                $properties['subscribersCount'] = null;
                goto after_subscribersCount;
            }

            $properties['subscribersCount'] = $value;

            after_subscribersCount:

            $value = $payload['network_count'] ?? null;

            if ($value === null) {
                $properties['networkCount'] = null;
                goto after_networkCount;
            }

            $properties['networkCount'] = $value;

            after_networkCount:

            $value = $payload['open_issues'] ?? null;

            if ($value === null) {
                $missingFields[] = 'open_issues';
                goto after_openIssues;
            }

            $properties['openIssues'] = $value;

            after_openIssues:

            $value = $payload['watchers'] ?? null;

            if ($value === null) {
                $missingFields[] = 'watchers';
                goto after_watchers;
            }

            $properties['watchers'] = $value;

            after_watchers:

            $value = $payload['master_branch'] ?? null;

            if ($value === null) {
                $properties['masterBranch'] = null;
                goto after_masterBranch;
            }

            $properties['masterBranch'] = $value;

            after_masterBranch:

            $value = $payload['starred_at'] ?? null;

            if ($value === null) {
                $properties['starredAt'] = null;
                goto after_starredAt;
            }

            $properties['starredAt'] = $value;

            after_starredAt:

            $value = $payload['anonymous_access_enabled'] ?? null;

            if ($value === null) {
                $properties['anonymousAccessEnabled'] = null;
                goto after_anonymousAccessEnabled;
            }

            $properties['anonymousAccessEnabled'] = $value;

            after_anonymousAccessEnabled:

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
                goto after_nodeId;
            }

            $properties['nodeId'] = $value;

            after_nodeId:

            $value = $payload['avatar_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'avatar_url';
                goto after_avatarUrl;
            }

            $properties['avatarUrl'] = $value;

            after_avatarUrl:

            $value = $payload['gravatar_id'] ?? null;

            if ($value === null) {
                $properties['gravatarId'] = null;
                goto after_gravatarId;
            }

            $properties['gravatarId'] = $value;

            after_gravatarId:

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
                goto after_htmlUrl;
            }

            $properties['htmlUrl'] = $value;

            after_htmlUrl:

            $value = $payload['followers_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'followers_url';
                goto after_followersUrl;
            }

            $properties['followersUrl'] = $value;

            after_followersUrl:

            $value = $payload['following_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'following_url';
                goto after_followingUrl;
            }

            $properties['followingUrl'] = $value;

            after_followingUrl:

            $value = $payload['gists_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'gists_url';
                goto after_gistsUrl;
            }

            $properties['gistsUrl'] = $value;

            after_gistsUrl:

            $value = $payload['starred_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'starred_url';
                goto after_starredUrl;
            }

            $properties['starredUrl'] = $value;

            after_starredUrl:

            $value = $payload['subscriptions_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'subscriptions_url';
                goto after_subscriptionsUrl;
            }

            $properties['subscriptionsUrl'] = $value;

            after_subscriptionsUrl:

            $value = $payload['organizations_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'organizations_url';
                goto after_organizationsUrl;
            }

            $properties['organizationsUrl'] = $value;

            after_organizationsUrl:

            $value = $payload['repos_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'repos_url';
                goto after_reposUrl;
            }

            $properties['reposUrl'] = $value;

            after_reposUrl:

            $value = $payload['events_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'events_url';
                goto after_eventsUrl;
            }

            $properties['eventsUrl'] = $value;

            after_eventsUrl:

            $value = $payload['received_events_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'received_events_url';
                goto after_receivedEventsUrl;
            }

            $properties['receivedEventsUrl'] = $value;

            after_receivedEventsUrl:

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
                goto after_siteAdmin;
            }

            $properties['siteAdmin'] = $value;

            after_siteAdmin:

            $value = $payload['starred_at'] ?? null;

            if ($value === null) {
                $properties['starredAt'] = null;
                goto after_starredAt;
            }

            $properties['starredAt'] = $value;

            after_starredAt:

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
                $properties['nodeId'] = null;
                goto after_nodeId;
            }

            $properties['nodeId'] = $value;

            after_nodeId:

            $value = $payload['name'] ?? null;

            if ($value === null) {
                $properties['name'] = null;
                goto after_name;
            }

            $properties['name'] = $value;

            after_name:

            $value = $payload['full_name'] ?? null;

            if ($value === null) {
                $properties['fullName'] = null;
                goto after_fullName;
            }

            $properties['fullName'] = $value;

            after_fullName:

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
                $properties['htmlUrl'] = null;
                goto after_htmlUrl;
            }

            $properties['htmlUrl'] = $value;

            after_htmlUrl:

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
                $properties['archiveUrl'] = null;
                goto after_archiveUrl;
            }

            $properties['archiveUrl'] = $value;

            after_archiveUrl:

            $value = $payload['assignees_url'] ?? null;

            if ($value === null) {
                $properties['assigneesUrl'] = null;
                goto after_assigneesUrl;
            }

            $properties['assigneesUrl'] = $value;

            after_assigneesUrl:

            $value = $payload['blobs_url'] ?? null;

            if ($value === null) {
                $properties['blobsUrl'] = null;
                goto after_blobsUrl;
            }

            $properties['blobsUrl'] = $value;

            after_blobsUrl:

            $value = $payload['branches_url'] ?? null;

            if ($value === null) {
                $properties['branchesUrl'] = null;
                goto after_branchesUrl;
            }

            $properties['branchesUrl'] = $value;

            after_branchesUrl:

            $value = $payload['collaborators_url'] ?? null;

            if ($value === null) {
                $properties['collaboratorsUrl'] = null;
                goto after_collaboratorsUrl;
            }

            $properties['collaboratorsUrl'] = $value;

            after_collaboratorsUrl:

            $value = $payload['comments_url'] ?? null;

            if ($value === null) {
                $properties['commentsUrl'] = null;
                goto after_commentsUrl;
            }

            $properties['commentsUrl'] = $value;

            after_commentsUrl:

            $value = $payload['commits_url'] ?? null;

            if ($value === null) {
                $properties['commitsUrl'] = null;
                goto after_commitsUrl;
            }

            $properties['commitsUrl'] = $value;

            after_commitsUrl:

            $value = $payload['compare_url'] ?? null;

            if ($value === null) {
                $properties['compareUrl'] = null;
                goto after_compareUrl;
            }

            $properties['compareUrl'] = $value;

            after_compareUrl:

            $value = $payload['contents_url'] ?? null;

            if ($value === null) {
                $properties['contentsUrl'] = null;
                goto after_contentsUrl;
            }

            $properties['contentsUrl'] = $value;

            after_contentsUrl:

            $value = $payload['contributors_url'] ?? null;

            if ($value === null) {
                $properties['contributorsUrl'] = null;
                goto after_contributorsUrl;
            }

            $properties['contributorsUrl'] = $value;

            after_contributorsUrl:

            $value = $payload['deployments_url'] ?? null;

            if ($value === null) {
                $properties['deploymentsUrl'] = null;
                goto after_deploymentsUrl;
            }

            $properties['deploymentsUrl'] = $value;

            after_deploymentsUrl:

            $value = $payload['downloads_url'] ?? null;

            if ($value === null) {
                $properties['downloadsUrl'] = null;
                goto after_downloadsUrl;
            }

            $properties['downloadsUrl'] = $value;

            after_downloadsUrl:

            $value = $payload['events_url'] ?? null;

            if ($value === null) {
                $properties['eventsUrl'] = null;
                goto after_eventsUrl;
            }

            $properties['eventsUrl'] = $value;

            after_eventsUrl:

            $value = $payload['forks_url'] ?? null;

            if ($value === null) {
                $properties['forksUrl'] = null;
                goto after_forksUrl;
            }

            $properties['forksUrl'] = $value;

            after_forksUrl:

            $value = $payload['git_commits_url'] ?? null;

            if ($value === null) {
                $properties['gitCommitsUrl'] = null;
                goto after_gitCommitsUrl;
            }

            $properties['gitCommitsUrl'] = $value;

            after_gitCommitsUrl:

            $value = $payload['git_refs_url'] ?? null;

            if ($value === null) {
                $properties['gitRefsUrl'] = null;
                goto after_gitRefsUrl;
            }

            $properties['gitRefsUrl'] = $value;

            after_gitRefsUrl:

            $value = $payload['git_tags_url'] ?? null;

            if ($value === null) {
                $properties['gitTagsUrl'] = null;
                goto after_gitTagsUrl;
            }

            $properties['gitTagsUrl'] = $value;

            after_gitTagsUrl:

            $value = $payload['git_url'] ?? null;

            if ($value === null) {
                $properties['gitUrl'] = null;
                goto after_gitUrl;
            }

            $properties['gitUrl'] = $value;

            after_gitUrl:

            $value = $payload['issue_comment_url'] ?? null;

            if ($value === null) {
                $properties['issueCommentUrl'] = null;
                goto after_issueCommentUrl;
            }

            $properties['issueCommentUrl'] = $value;

            after_issueCommentUrl:

            $value = $payload['issue_events_url'] ?? null;

            if ($value === null) {
                $properties['issueEventsUrl'] = null;
                goto after_issueEventsUrl;
            }

            $properties['issueEventsUrl'] = $value;

            after_issueEventsUrl:

            $value = $payload['issues_url'] ?? null;

            if ($value === null) {
                $properties['issuesUrl'] = null;
                goto after_issuesUrl;
            }

            $properties['issuesUrl'] = $value;

            after_issuesUrl:

            $value = $payload['keys_url'] ?? null;

            if ($value === null) {
                $properties['keysUrl'] = null;
                goto after_keysUrl;
            }

            $properties['keysUrl'] = $value;

            after_keysUrl:

            $value = $payload['labels_url'] ?? null;

            if ($value === null) {
                $properties['labelsUrl'] = null;
                goto after_labelsUrl;
            }

            $properties['labelsUrl'] = $value;

            after_labelsUrl:

            $value = $payload['languages_url'] ?? null;

            if ($value === null) {
                $properties['languagesUrl'] = null;
                goto after_languagesUrl;
            }

            $properties['languagesUrl'] = $value;

            after_languagesUrl:

            $value = $payload['merges_url'] ?? null;

            if ($value === null) {
                $properties['mergesUrl'] = null;
                goto after_mergesUrl;
            }

            $properties['mergesUrl'] = $value;

            after_mergesUrl:

            $value = $payload['milestones_url'] ?? null;

            if ($value === null) {
                $properties['milestonesUrl'] = null;
                goto after_milestonesUrl;
            }

            $properties['milestonesUrl'] = $value;

            after_milestonesUrl:

            $value = $payload['notifications_url'] ?? null;

            if ($value === null) {
                $properties['notificationsUrl'] = null;
                goto after_notificationsUrl;
            }

            $properties['notificationsUrl'] = $value;

            after_notificationsUrl:

            $value = $payload['pulls_url'] ?? null;

            if ($value === null) {
                $properties['pullsUrl'] = null;
                goto after_pullsUrl;
            }

            $properties['pullsUrl'] = $value;

            after_pullsUrl:

            $value = $payload['releases_url'] ?? null;

            if ($value === null) {
                $properties['releasesUrl'] = null;
                goto after_releasesUrl;
            }

            $properties['releasesUrl'] = $value;

            after_releasesUrl:

            $value = $payload['ssh_url'] ?? null;

            if ($value === null) {
                $properties['sshUrl'] = null;
                goto after_sshUrl;
            }

            $properties['sshUrl'] = $value;

            after_sshUrl:

            $value = $payload['stargazers_url'] ?? null;

            if ($value === null) {
                $properties['stargazersUrl'] = null;
                goto after_stargazersUrl;
            }

            $properties['stargazersUrl'] = $value;

            after_stargazersUrl:

            $value = $payload['statuses_url'] ?? null;

            if ($value === null) {
                $properties['statusesUrl'] = null;
                goto after_statusesUrl;
            }

            $properties['statusesUrl'] = $value;

            after_statusesUrl:

            $value = $payload['subscribers_url'] ?? null;

            if ($value === null) {
                $properties['subscribersUrl'] = null;
                goto after_subscribersUrl;
            }

            $properties['subscribersUrl'] = $value;

            after_subscribersUrl:

            $value = $payload['subscription_url'] ?? null;

            if ($value === null) {
                $properties['subscriptionUrl'] = null;
                goto after_subscriptionUrl;
            }

            $properties['subscriptionUrl'] = $value;

            after_subscriptionUrl:

            $value = $payload['tags_url'] ?? null;

            if ($value === null) {
                $properties['tagsUrl'] = null;
                goto after_tagsUrl;
            }

            $properties['tagsUrl'] = $value;

            after_tagsUrl:

            $value = $payload['teams_url'] ?? null;

            if ($value === null) {
                $properties['teamsUrl'] = null;
                goto after_teamsUrl;
            }

            $properties['teamsUrl'] = $value;

            after_teamsUrl:

            $value = $payload['trees_url'] ?? null;

            if ($value === null) {
                $properties['treesUrl'] = null;
                goto after_treesUrl;
            }

            $properties['treesUrl'] = $value;

            after_treesUrl:

            $value = $payload['clone_url'] ?? null;

            if ($value === null) {
                $properties['cloneUrl'] = null;
                goto after_cloneUrl;
            }

            $properties['cloneUrl'] = $value;

            after_cloneUrl:

            $value = $payload['mirror_url'] ?? null;

            if ($value === null) {
                $properties['mirrorUrl'] = null;
                goto after_mirrorUrl;
            }

            $properties['mirrorUrl'] = $value;

            after_mirrorUrl:

            $value = $payload['hooks_url'] ?? null;

            if ($value === null) {
                $properties['hooksUrl'] = null;
                goto after_hooksUrl;
            }

            $properties['hooksUrl'] = $value;

            after_hooksUrl:

            $value = $payload['svn_url'] ?? null;

            if ($value === null) {
                $properties['svnUrl'] = null;
                goto after_svnUrl;
            }

            $properties['svnUrl'] = $value;

            after_svnUrl:

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
                $properties['forksCount'] = null;
                goto after_forksCount;
            }

            $properties['forksCount'] = $value;

            after_forksCount:

            $value = $payload['stargazers_count'] ?? null;

            if ($value === null) {
                $properties['stargazersCount'] = null;
                goto after_stargazersCount;
            }

            $properties['stargazersCount'] = $value;

            after_stargazersCount:

            $value = $payload['watchers_count'] ?? null;

            if ($value === null) {
                $properties['watchersCount'] = null;
                goto after_watchersCount;
            }

            $properties['watchersCount'] = $value;

            after_watchersCount:

            $value = $payload['size'] ?? null;

            if ($value === null) {
                $properties['size'] = null;
                goto after_size;
            }

            $properties['size'] = $value;

            after_size:

            $value = $payload['default_branch'] ?? null;

            if ($value === null) {
                $properties['defaultBranch'] = null;
                goto after_defaultBranch;
            }

            $properties['defaultBranch'] = $value;

            after_defaultBranch:

            $value = $payload['open_issues_count'] ?? null;

            if ($value === null) {
                $properties['openIssuesCount'] = null;
                goto after_openIssuesCount;
            }

            $properties['openIssuesCount'] = $value;

            after_openIssuesCount:

            $value = $payload['is_template'] ?? null;

            if ($value === null) {
                $properties['isTemplate'] = null;
                goto after_isTemplate;
            }

            $properties['isTemplate'] = $value;

            after_isTemplate:

            $value = $payload['topics'] ?? null;

            if ($value === null) {
                $properties['topics'] = null;
                goto after_topics;
            }

            $properties['topics'] = $value;

            after_topics:

            $value = $payload['has_issues'] ?? null;

            if ($value === null) {
                $properties['hasIssues'] = null;
                goto after_hasIssues;
            }

            $properties['hasIssues'] = $value;

            after_hasIssues:

            $value = $payload['has_projects'] ?? null;

            if ($value === null) {
                $properties['hasProjects'] = null;
                goto after_hasProjects;
            }

            $properties['hasProjects'] = $value;

            after_hasProjects:

            $value = $payload['has_wiki'] ?? null;

            if ($value === null) {
                $properties['hasWiki'] = null;
                goto after_hasWiki;
            }

            $properties['hasWiki'] = $value;

            after_hasWiki:

            $value = $payload['has_pages'] ?? null;

            if ($value === null) {
                $properties['hasPages'] = null;
                goto after_hasPages;
            }

            $properties['hasPages'] = $value;

            after_hasPages:

            $value = $payload['has_downloads'] ?? null;

            if ($value === null) {
                $properties['hasDownloads'] = null;
                goto after_hasDownloads;
            }

            $properties['hasDownloads'] = $value;

            after_hasDownloads:

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
                $properties['pushedAt'] = null;
                goto after_pushedAt;
            }

            $properties['pushedAt'] = $value;

            after_pushedAt:

            $value = $payload['created_at'] ?? null;

            if ($value === null) {
                $properties['createdAt'] = null;
                goto after_createdAt;
            }

            $properties['createdAt'] = $value;

            after_createdAt:

            $value = $payload['updated_at'] ?? null;

            if ($value === null) {
                $properties['updatedAt'] = null;
                goto after_updatedAt;
            }

            $properties['updatedAt'] = $value;

            after_updatedAt:

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
                $properties['allowRebaseMerge'] = null;
                goto after_allowRebaseMerge;
            }

            $properties['allowRebaseMerge'] = $value;

            after_allowRebaseMerge:

            $value = $payload['temp_clone_token'] ?? null;

            if ($value === null) {
                $properties['tempCloneToken'] = null;
                goto after_tempCloneToken;
            }

            $properties['tempCloneToken'] = $value;

            after_tempCloneToken:

            $value = $payload['allow_squash_merge'] ?? null;

            if ($value === null) {
                $properties['allowSquashMerge'] = null;
                goto after_allowSquashMerge;
            }

            $properties['allowSquashMerge'] = $value;

            after_allowSquashMerge:

            $value = $payload['allow_auto_merge'] ?? null;

            if ($value === null) {
                $properties['allowAutoMerge'] = null;
                goto after_allowAutoMerge;
            }

            $properties['allowAutoMerge'] = $value;

            after_allowAutoMerge:

            $value = $payload['delete_branch_on_merge'] ?? null;

            if ($value === null) {
                $properties['deleteBranchOnMerge'] = null;
                goto after_deleteBranchOnMerge;
            }

            $properties['deleteBranchOnMerge'] = $value;

            after_deleteBranchOnMerge:

            $value = $payload['allow_update_branch'] ?? null;

            if ($value === null) {
                $properties['allowUpdateBranch'] = null;
                goto after_allowUpdateBranch;
            }

            $properties['allowUpdateBranch'] = $value;

            after_allowUpdateBranch:

            $value = $payload['use_squash_pr_title_as_default'] ?? null;

            if ($value === null) {
                $properties['useSquashPrTitleAsDefault'] = null;
                goto after_useSquashPrTitleAsDefault;
            }

            $properties['useSquashPrTitleAsDefault'] = $value;

            after_useSquashPrTitleAsDefault:

            $value = $payload['squash_merge_commit_title'] ?? null;

            if ($value === null) {
                $properties['squashMergeCommitTitle'] = null;
                goto after_squashMergeCommitTitle;
            }

            $properties['squashMergeCommitTitle'] = $value;

            after_squashMergeCommitTitle:

            $value = $payload['squash_merge_commit_message'] ?? null;

            if ($value === null) {
                $properties['squashMergeCommitMessage'] = null;
                goto after_squashMergeCommitMessage;
            }

            $properties['squashMergeCommitMessage'] = $value;

            after_squashMergeCommitMessage:

            $value = $payload['merge_commit_title'] ?? null;

            if ($value === null) {
                $properties['mergeCommitTitle'] = null;
                goto after_mergeCommitTitle;
            }

            $properties['mergeCommitTitle'] = $value;

            after_mergeCommitTitle:

            $value = $payload['merge_commit_message'] ?? null;

            if ($value === null) {
                $properties['mergeCommitMessage'] = null;
                goto after_mergeCommitMessage;
            }

            $properties['mergeCommitMessage'] = $value;

            after_mergeCommitMessage:

            $value = $payload['allow_merge_commit'] ?? null;

            if ($value === null) {
                $properties['allowMergeCommit'] = null;
                goto after_allowMergeCommit;
            }

            $properties['allowMergeCommit'] = $value;

            after_allowMergeCommit:

            $value = $payload['subscribers_count'] ?? null;

            if ($value === null) {
                $properties['subscribersCount'] = null;
                goto after_subscribersCount;
            }

            $properties['subscribersCount'] = $value;

            after_subscribersCount:

            $value = $payload['network_count'] ?? null;

            if ($value === null) {
                $properties['networkCount'] = null;
                goto after_networkCount;
            }

            $properties['networkCount'] = $value;

            after_networkCount:

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
                $properties['nodeId'] = null;
                goto after_nodeId;
            }

            $properties['nodeId'] = $value;

            after_nodeId:

            $value = $payload['avatar_url'] ?? null;

            if ($value === null) {
                $properties['avatarUrl'] = null;
                goto after_avatarUrl;
            }

            $properties['avatarUrl'] = $value;

            after_avatarUrl:

            $value = $payload['gravatar_id'] ?? null;

            if ($value === null) {
                $properties['gravatarId'] = null;
                goto after_gravatarId;
            }

            $properties['gravatarId'] = $value;

            after_gravatarId:

            $value = $payload['url'] ?? null;

            if ($value === null) {
                $properties['url'] = null;
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

            $value = $payload['followers_url'] ?? null;

            if ($value === null) {
                $properties['followersUrl'] = null;
                goto after_followersUrl;
            }

            $properties['followersUrl'] = $value;

            after_followersUrl:

            $value = $payload['following_url'] ?? null;

            if ($value === null) {
                $properties['followingUrl'] = null;
                goto after_followingUrl;
            }

            $properties['followingUrl'] = $value;

            after_followingUrl:

            $value = $payload['gists_url'] ?? null;

            if ($value === null) {
                $properties['gistsUrl'] = null;
                goto after_gistsUrl;
            }

            $properties['gistsUrl'] = $value;

            after_gistsUrl:

            $value = $payload['starred_url'] ?? null;

            if ($value === null) {
                $properties['starredUrl'] = null;
                goto after_starredUrl;
            }

            $properties['starredUrl'] = $value;

            after_starredUrl:

            $value = $payload['subscriptions_url'] ?? null;

            if ($value === null) {
                $properties['subscriptionsUrl'] = null;
                goto after_subscriptionsUrl;
            }

            $properties['subscriptionsUrl'] = $value;

            after_subscriptionsUrl:

            $value = $payload['organizations_url'] ?? null;

            if ($value === null) {
                $properties['organizationsUrl'] = null;
                goto after_organizationsUrl;
            }

            $properties['organizationsUrl'] = $value;

            after_organizationsUrl:

            $value = $payload['repos_url'] ?? null;

            if ($value === null) {
                $properties['reposUrl'] = null;
                goto after_reposUrl;
            }

            $properties['reposUrl'] = $value;

            after_reposUrl:

            $value = $payload['events_url'] ?? null;

            if ($value === null) {
                $properties['eventsUrl'] = null;
                goto after_eventsUrl;
            }

            $properties['eventsUrl'] = $value;

            after_eventsUrl:

            $value = $payload['received_events_url'] ?? null;

            if ($value === null) {
                $properties['receivedEventsUrl'] = null;
                goto after_receivedEventsUrl;
            }

            $properties['receivedEventsUrl'] = $value;

            after_receivedEventsUrl:

            $value = $payload['type'] ?? null;

            if ($value === null) {
                $properties['type'] = null;
                goto after_type;
            }

            $properties['type'] = $value;

            after_type:

            $value = $payload['site_admin'] ?? null;

            if ($value === null) {
                $properties['siteAdmin'] = null;
                goto after_siteAdmin;
            }

            $properties['siteAdmin'] = $value;

            after_siteAdmin:

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

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookWorkflowJobCompleted⚡️WorkflowJob(array $payload): \ApiClients\Client\GitHub\Schema\WebhookWorkflowJobCompleted\WorkflowJob
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['check_run_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'check_run_url';
                goto after_checkRunUrl;
            }

            $properties['checkRunUrl'] = $value;

            after_checkRunUrl:

            $value = $payload['completed_at'] ?? null;

            if ($value === null) {
                $properties['completedAt'] = null;
                goto after_completedAt;
            }

            $properties['completedAt'] = $value;

            after_completedAt:

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

            $value = $payload['head_sha'] ?? null;

            if ($value === null) {
                $missingFields[] = 'head_sha';
                goto after_headSha;
            }

            $properties['headSha'] = $value;

            after_headSha:

            $value = $payload['html_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'html_url';
                goto after_htmlUrl;
            }

            $properties['htmlUrl'] = $value;

            after_htmlUrl:

            $value = $payload['id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'id';
                goto after_id;
            }

            $properties['id'] = $value;

            after_id:

            $value = $payload['labels'] ?? null;

            if ($value === null) {
                $missingFields[] = 'labels';
                goto after_labels;
            }

            $properties['labels'] = $value;

            after_labels:

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
                goto after_nodeId;
            }

            $properties['nodeId'] = $value;

            after_nodeId:

            $value = $payload['run_attempt'] ?? null;

            if ($value === null) {
                $missingFields[] = 'run_attempt';
                goto after_runAttempt;
            }

            $properties['runAttempt'] = $value;

            after_runAttempt:

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

            $value = $payload['started_at'] ?? null;

            if ($value === null) {
                $missingFields[] = 'started_at';
                goto after_startedAt;
            }

            $properties['startedAt'] = $value;

            after_startedAt:

            $value = $payload['status'] ?? null;

            if ($value === null) {
                $missingFields[] = 'status';
                goto after_status;
            }

            $properties['status'] = $value;

            after_status:

            $value = $payload['head_branch'] ?? null;

            if ($value === null) {
                $properties['headBranch'] = null;
                goto after_headBranch;
            }

            $properties['headBranch'] = $value;

            after_headBranch:

            $value = $payload['workflow_name'] ?? null;

            if ($value === null) {
                $properties['workflowName'] = null;
                goto after_workflowName;
            }

            $properties['workflowName'] = $value;

            after_workflowName:

            $value = $payload['steps'] ?? null;

            if ($value === null) {
                $missingFields[] = 'steps';
                goto after_steps;
            }

            static $stepsCaster1;

            if ($stepsCaster1 === null) {
                $stepsCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowJobCompleted\\WorkflowJob\\Steps',
));
            }

            $value = $stepsCaster1->cast($value, $this);

            $properties['steps'] = $value;

            after_steps:

            $value = $payload['url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'url';
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookWorkflowJobCompleted\WorkflowJob', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookWorkflowJobCompleted\WorkflowJob::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WebhookWorkflowJobCompleted\WorkflowJob(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookWorkflowJobCompleted\WorkflowJob', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookWorkflowJobCompleted⚡️WorkflowJob⚡️Steps(array $payload): \ApiClients\Client\GitHub\Schema\WebhookWorkflowJobCompleted\WorkflowJob\Steps
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['completed_at'] ?? null;

            if ($value === null) {
                $properties['completedAt'] = null;
                goto after_completedAt;
            }

            $properties['completedAt'] = $value;

            after_completedAt:

            $value = $payload['conclusion'] ?? null;

            if ($value === null) {
                $properties['conclusion'] = null;
                goto after_conclusion;
            }

            $properties['conclusion'] = $value;

            after_conclusion:

            $value = $payload['name'] ?? null;

            if ($value === null) {
                $missingFields[] = 'name';
                goto after_name;
            }

            $properties['name'] = $value;

            after_name:

            $value = $payload['number'] ?? null;

            if ($value === null) {
                $missingFields[] = 'number';
                goto after_number;
            }

            $properties['number'] = $value;

            after_number:

            $value = $payload['started_at'] ?? null;

            if ($value === null) {
                $properties['startedAt'] = null;
                goto after_startedAt;
            }

            $properties['startedAt'] = $value;

            after_startedAt:

            $value = $payload['status'] ?? null;

            if ($value === null) {
                $missingFields[] = 'status';
                goto after_status;
            }

            $properties['status'] = $value;

            after_status:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookWorkflowJobCompleted\WorkflowJob\Steps', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookWorkflowJobCompleted\WorkflowJob\Steps::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WebhookWorkflowJobCompleted\WorkflowJob\Steps(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookWorkflowJobCompleted\WorkflowJob\Steps', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Deployment(array $payload): \ApiClients\Client\GitHub\Schema\Deployment
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

            $value = $payload['sha'] ?? null;

            if ($value === null) {
                $missingFields[] = 'sha';
                goto after_sha;
            }

            $properties['sha'] = $value;

            after_sha:

            $value = $payload['ref'] ?? null;

            if ($value === null) {
                $missingFields[] = 'ref';
                goto after_ref;
            }

            $properties['ref'] = $value;

            after_ref:

            $value = $payload['task'] ?? null;

            if ($value === null) {
                $missingFields[] = 'task';
                goto after_task;
            }

            $properties['task'] = $value;

            after_task:

            $value = $payload['payload'] ?? null;

            if ($value === null) {
                $properties['payload'] = null;
                goto after_payload;
            }

            $properties['payload'] = $value;

            after_payload:

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

            $value = $payload['creator'] ?? null;

            if ($value === null) {
                $properties['creator'] = null;
                goto after_creator;
            }

            $properties['creator'] = $value;

            after_creator:

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
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Deployment', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\Deployment::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\Deployment(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Deployment', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookWorkflowJobInProgress(array $payload): \ApiClients\Client\GitHub\Schema\WebhookWorkflowJobInProgress
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

            $value = $payload['workflow_job'] ?? null;

            if ($value === null) {
                $missingFields[] = 'workflow_job';
                goto after_workflowJob;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'workflowJob';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookWorkflowJobInProgress⚡️WorkflowJob($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['workflowJob'] = $value;

            after_workflowJob:

            $value = $payload['deployment'] ?? null;

            if ($value === null) {
                $properties['deployment'] = null;
                goto after_deployment;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'deployment';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Deployment($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['deployment'] = $value;

            after_deployment:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookWorkflowJobInProgress', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookWorkflowJobInProgress::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WebhookWorkflowJobInProgress(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookWorkflowJobInProgress', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookWorkflowJobInProgress⚡️WorkflowJob(array $payload): \ApiClients\Client\GitHub\Schema\WebhookWorkflowJobInProgress\WorkflowJob
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['check_run_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'check_run_url';
                goto after_checkRunUrl;
            }

            $properties['checkRunUrl'] = $value;

            after_checkRunUrl:

            $value = $payload['completed_at'] ?? null;

            if ($value === null) {
                $properties['completedAt'] = null;
                goto after_completedAt;
            }

            $properties['completedAt'] = $value;

            after_completedAt:

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

            $value = $payload['head_sha'] ?? null;

            if ($value === null) {
                $missingFields[] = 'head_sha';
                goto after_headSha;
            }

            $properties['headSha'] = $value;

            after_headSha:

            $value = $payload['html_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'html_url';
                goto after_htmlUrl;
            }

            $properties['htmlUrl'] = $value;

            after_htmlUrl:

            $value = $payload['id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'id';
                goto after_id;
            }

            $properties['id'] = $value;

            after_id:

            $value = $payload['labels'] ?? null;

            if ($value === null) {
                $missingFields[] = 'labels';
                goto after_labels;
            }

            $properties['labels'] = $value;

            after_labels:

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
                goto after_nodeId;
            }

            $properties['nodeId'] = $value;

            after_nodeId:

            $value = $payload['run_attempt'] ?? null;

            if ($value === null) {
                $missingFields[] = 'run_attempt';
                goto after_runAttempt;
            }

            $properties['runAttempt'] = $value;

            after_runAttempt:

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

            $value = $payload['started_at'] ?? null;

            if ($value === null) {
                $missingFields[] = 'started_at';
                goto after_startedAt;
            }

            $properties['startedAt'] = $value;

            after_startedAt:

            $value = $payload['status'] ?? null;

            if ($value === null) {
                $missingFields[] = 'status';
                goto after_status;
            }

            $properties['status'] = $value;

            after_status:

            $value = $payload['head_branch'] ?? null;

            if ($value === null) {
                $properties['headBranch'] = null;
                goto after_headBranch;
            }

            $properties['headBranch'] = $value;

            after_headBranch:

            $value = $payload['workflow_name'] ?? null;

            if ($value === null) {
                $properties['workflowName'] = null;
                goto after_workflowName;
            }

            $properties['workflowName'] = $value;

            after_workflowName:

            $value = $payload['steps'] ?? null;

            if ($value === null) {
                $missingFields[] = 'steps';
                goto after_steps;
            }

            static $stepsCaster1;

            if ($stepsCaster1 === null) {
                $stepsCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowJobInProgress\\WorkflowJob\\Steps',
));
            }

            $value = $stepsCaster1->cast($value, $this);

            $properties['steps'] = $value;

            after_steps:

            $value = $payload['url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'url';
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookWorkflowJobInProgress\WorkflowJob', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookWorkflowJobInProgress\WorkflowJob::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WebhookWorkflowJobInProgress\WorkflowJob(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookWorkflowJobInProgress\WorkflowJob', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookWorkflowJobInProgress⚡️WorkflowJob⚡️Steps(array $payload): \ApiClients\Client\GitHub\Schema\WebhookWorkflowJobInProgress\WorkflowJob\Steps
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['completed_at'] ?? null;

            if ($value === null) {
                $properties['completedAt'] = null;
                goto after_completedAt;
            }

            $properties['completedAt'] = $value;

            after_completedAt:

            $value = $payload['conclusion'] ?? null;

            if ($value === null) {
                $properties['conclusion'] = null;
                goto after_conclusion;
            }

            $properties['conclusion'] = $value;

            after_conclusion:

            $value = $payload['name'] ?? null;

            if ($value === null) {
                $missingFields[] = 'name';
                goto after_name;
            }

            $properties['name'] = $value;

            after_name:

            $value = $payload['number'] ?? null;

            if ($value === null) {
                $missingFields[] = 'number';
                goto after_number;
            }

            $properties['number'] = $value;

            after_number:

            $value = $payload['started_at'] ?? null;

            if ($value === null) {
                $properties['startedAt'] = null;
                goto after_startedAt;
            }

            $properties['startedAt'] = $value;

            after_startedAt:

            $value = $payload['status'] ?? null;

            if ($value === null) {
                $missingFields[] = 'status';
                goto after_status;
            }

            $properties['status'] = $value;

            after_status:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookWorkflowJobInProgress\WorkflowJob\Steps', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookWorkflowJobInProgress\WorkflowJob\Steps::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WebhookWorkflowJobInProgress\WorkflowJob\Steps(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookWorkflowJobInProgress\WorkflowJob\Steps', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookWorkflowJobQueued(array $payload): \ApiClients\Client\GitHub\Schema\WebhookWorkflowJobQueued
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

            $value = $payload['workflow_job'] ?? null;

            if ($value === null) {
                $missingFields[] = 'workflow_job';
                goto after_workflowJob;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'workflowJob';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookWorkflowJobQueued⚡️WorkflowJob($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['workflowJob'] = $value;

            after_workflowJob:

            $value = $payload['deployment'] ?? null;

            if ($value === null) {
                $properties['deployment'] = null;
                goto after_deployment;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'deployment';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Deployment($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['deployment'] = $value;

            after_deployment:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookWorkflowJobQueued', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookWorkflowJobQueued::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WebhookWorkflowJobQueued(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookWorkflowJobQueued', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookWorkflowJobQueued⚡️WorkflowJob(array $payload): \ApiClients\Client\GitHub\Schema\WebhookWorkflowJobQueued\WorkflowJob
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['check_run_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'check_run_url';
                goto after_checkRunUrl;
            }

            $properties['checkRunUrl'] = $value;

            after_checkRunUrl:

            $value = $payload['completed_at'] ?? null;

            if ($value === null) {
                $properties['completedAt'] = null;
                goto after_completedAt;
            }

            $properties['completedAt'] = $value;

            after_completedAt:

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

            $value = $payload['head_sha'] ?? null;

            if ($value === null) {
                $missingFields[] = 'head_sha';
                goto after_headSha;
            }

            $properties['headSha'] = $value;

            after_headSha:

            $value = $payload['html_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'html_url';
                goto after_htmlUrl;
            }

            $properties['htmlUrl'] = $value;

            after_htmlUrl:

            $value = $payload['id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'id';
                goto after_id;
            }

            $properties['id'] = $value;

            after_id:

            $value = $payload['labels'] ?? null;

            if ($value === null) {
                $missingFields[] = 'labels';
                goto after_labels;
            }

            $properties['labels'] = $value;

            after_labels:

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
                goto after_nodeId;
            }

            $properties['nodeId'] = $value;

            after_nodeId:

            $value = $payload['run_attempt'] ?? null;

            if ($value === null) {
                $missingFields[] = 'run_attempt';
                goto after_runAttempt;
            }

            $properties['runAttempt'] = $value;

            after_runAttempt:

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

            $value = $payload['started_at'] ?? null;

            if ($value === null) {
                $missingFields[] = 'started_at';
                goto after_startedAt;
            }

            $properties['startedAt'] = $value;

            after_startedAt:

            $value = $payload['status'] ?? null;

            if ($value === null) {
                $missingFields[] = 'status';
                goto after_status;
            }

            $properties['status'] = $value;

            after_status:

            $value = $payload['head_branch'] ?? null;

            if ($value === null) {
                $properties['headBranch'] = null;
                goto after_headBranch;
            }

            $properties['headBranch'] = $value;

            after_headBranch:

            $value = $payload['workflow_name'] ?? null;

            if ($value === null) {
                $properties['workflowName'] = null;
                goto after_workflowName;
            }

            $properties['workflowName'] = $value;

            after_workflowName:

            $value = $payload['steps'] ?? null;

            if ($value === null) {
                $missingFields[] = 'steps';
                goto after_steps;
            }

            static $stepsCaster1;

            if ($stepsCaster1 === null) {
                $stepsCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowJobQueued\\WorkflowJob\\Steps',
));
            }

            $value = $stepsCaster1->cast($value, $this);

            $properties['steps'] = $value;

            after_steps:

            $value = $payload['url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'url';
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookWorkflowJobQueued\WorkflowJob', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookWorkflowJobQueued\WorkflowJob::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WebhookWorkflowJobQueued\WorkflowJob(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookWorkflowJobQueued\WorkflowJob', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookWorkflowJobQueued⚡️WorkflowJob⚡️Steps(array $payload): \ApiClients\Client\GitHub\Schema\WebhookWorkflowJobQueued\WorkflowJob\Steps
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['completed_at'] ?? null;

            if ($value === null) {
                $properties['completedAt'] = null;
                goto after_completedAt;
            }

            $properties['completedAt'] = $value;

            after_completedAt:

            $value = $payload['conclusion'] ?? null;

            if ($value === null) {
                $properties['conclusion'] = null;
                goto after_conclusion;
            }

            $properties['conclusion'] = $value;

            after_conclusion:

            $value = $payload['name'] ?? null;

            if ($value === null) {
                $missingFields[] = 'name';
                goto after_name;
            }

            $properties['name'] = $value;

            after_name:

            $value = $payload['number'] ?? null;

            if ($value === null) {
                $missingFields[] = 'number';
                goto after_number;
            }

            $properties['number'] = $value;

            after_number:

            $value = $payload['started_at'] ?? null;

            if ($value === null) {
                $properties['startedAt'] = null;
                goto after_startedAt;
            }

            $properties['startedAt'] = $value;

            after_startedAt:

            $value = $payload['status'] ?? null;

            if ($value === null) {
                $missingFields[] = 'status';
                goto after_status;
            }

            $properties['status'] = $value;

            after_status:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookWorkflowJobQueued\WorkflowJob\Steps', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookWorkflowJobQueued\WorkflowJob\Steps::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WebhookWorkflowJobQueued\WorkflowJob\Steps(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookWorkflowJobQueued\WorkflowJob\Steps', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookWorkflowJobWaiting(array $payload): \ApiClients\Client\GitHub\Schema\WebhookWorkflowJobWaiting
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

            $value = $payload['workflow_job'] ?? null;

            if ($value === null) {
                $missingFields[] = 'workflow_job';
                goto after_workflowJob;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'workflowJob';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookWorkflowJobWaiting⚡️WorkflowJob($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['workflowJob'] = $value;

            after_workflowJob:

            $value = $payload['deployment'] ?? null;

            if ($value === null) {
                $properties['deployment'] = null;
                goto after_deployment;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'deployment';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Deployment($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['deployment'] = $value;

            after_deployment:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookWorkflowJobWaiting', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookWorkflowJobWaiting::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WebhookWorkflowJobWaiting(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookWorkflowJobWaiting', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookWorkflowJobWaiting⚡️WorkflowJob(array $payload): \ApiClients\Client\GitHub\Schema\WebhookWorkflowJobWaiting\WorkflowJob
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['check_run_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'check_run_url';
                goto after_checkRunUrl;
            }

            $properties['checkRunUrl'] = $value;

            after_checkRunUrl:

            $value = $payload['completed_at'] ?? null;

            if ($value === null) {
                $properties['completedAt'] = null;
                goto after_completedAt;
            }

            $properties['completedAt'] = $value;

            after_completedAt:

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

            $value = $payload['head_sha'] ?? null;

            if ($value === null) {
                $missingFields[] = 'head_sha';
                goto after_headSha;
            }

            $properties['headSha'] = $value;

            after_headSha:

            $value = $payload['html_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'html_url';
                goto after_htmlUrl;
            }

            $properties['htmlUrl'] = $value;

            after_htmlUrl:

            $value = $payload['id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'id';
                goto after_id;
            }

            $properties['id'] = $value;

            after_id:

            $value = $payload['labels'] ?? null;

            if ($value === null) {
                $missingFields[] = 'labels';
                goto after_labels;
            }

            $properties['labels'] = $value;

            after_labels:

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
                goto after_nodeId;
            }

            $properties['nodeId'] = $value;

            after_nodeId:

            $value = $payload['run_attempt'] ?? null;

            if ($value === null) {
                $missingFields[] = 'run_attempt';
                goto after_runAttempt;
            }

            $properties['runAttempt'] = $value;

            after_runAttempt:

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

            $value = $payload['started_at'] ?? null;

            if ($value === null) {
                $missingFields[] = 'started_at';
                goto after_startedAt;
            }

            $properties['startedAt'] = $value;

            after_startedAt:

            $value = $payload['head_branch'] ?? null;

            if ($value === null) {
                $properties['headBranch'] = null;
                goto after_headBranch;
            }

            $properties['headBranch'] = $value;

            after_headBranch:

            $value = $payload['workflow_name'] ?? null;

            if ($value === null) {
                $properties['workflowName'] = null;
                goto after_workflowName;
            }

            $properties['workflowName'] = $value;

            after_workflowName:

            $value = $payload['status'] ?? null;

            if ($value === null) {
                $missingFields[] = 'status';
                goto after_status;
            }

            $properties['status'] = $value;

            after_status:

            $value = $payload['steps'] ?? null;

            if ($value === null) {
                $missingFields[] = 'steps';
                goto after_steps;
            }

            static $stepsCaster1;

            if ($stepsCaster1 === null) {
                $stepsCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowJobWaiting\\WorkflowJob\\Steps',
));
            }

            $value = $stepsCaster1->cast($value, $this);

            $properties['steps'] = $value;

            after_steps:

            $value = $payload['url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'url';
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookWorkflowJobWaiting\WorkflowJob', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookWorkflowJobWaiting\WorkflowJob::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WebhookWorkflowJobWaiting\WorkflowJob(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookWorkflowJobWaiting\WorkflowJob', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookWorkflowJobWaiting⚡️WorkflowJob⚡️Steps(array $payload): \ApiClients\Client\GitHub\Schema\WebhookWorkflowJobWaiting\WorkflowJob\Steps
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['completed_at'] ?? null;

            if ($value === null) {
                $properties['completedAt'] = null;
                goto after_completedAt;
            }

            $properties['completedAt'] = $value;

            after_completedAt:

            $value = $payload['conclusion'] ?? null;

            if ($value === null) {
                $properties['conclusion'] = null;
                goto after_conclusion;
            }

            $properties['conclusion'] = $value;

            after_conclusion:

            $value = $payload['name'] ?? null;

            if ($value === null) {
                $missingFields[] = 'name';
                goto after_name;
            }

            $properties['name'] = $value;

            after_name:

            $value = $payload['number'] ?? null;

            if ($value === null) {
                $missingFields[] = 'number';
                goto after_number;
            }

            $properties['number'] = $value;

            after_number:

            $value = $payload['started_at'] ?? null;

            if ($value === null) {
                $properties['startedAt'] = null;
                goto after_startedAt;
            }

            $properties['startedAt'] = $value;

            after_startedAt:

            $value = $payload['status'] ?? null;

            if ($value === null) {
                $missingFields[] = 'status';
                goto after_status;
            }

            $properties['status'] = $value;

            after_status:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookWorkflowJobWaiting\WorkflowJob\Steps', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookWorkflowJobWaiting\WorkflowJob\Steps::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WebhookWorkflowJobWaiting\WorkflowJob\Steps(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookWorkflowJobWaiting\WorkflowJob\Steps', $exception, stack: $this->hydrationStack);
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
            'ApiClients\Client\GitHub\Schema\WebhookWorkflowJobCompleted' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookWorkflowJobCompleted($object),
            'ApiClients\Client\GitHub\Schema\Enterprise' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Enterprise($object),
            'ApiClients\Client\GitHub\Schema\SimpleInstallation' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleInstallation($object),
            'ApiClients\Client\GitHub\Schema\OrganizationSimple' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️OrganizationSimple($object),
            'ApiClients\Client\GitHub\Schema\Repository' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Repository($object),
            'ApiClients\Client\GitHub\Schema\Repository\Permissions' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Repository⚡️Permissions($object),
            'ApiClients\Client\GitHub\Schema\SimpleUser' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($object),
            'ApiClients\Client\GitHub\Schema\Repository\TemplateRepository' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Repository⚡️TemplateRepository($object),
            'ApiClients\Client\GitHub\Schema\Repository\TemplateRepository\Owner' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Repository⚡️TemplateRepository⚡️Owner($object),
            'ApiClients\Client\GitHub\Schema\Repository\TemplateRepository\Permissions' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Repository⚡️TemplateRepository⚡️Permissions($object),
            'ApiClients\Client\GitHub\Schema\WebhookWorkflowJobCompleted\WorkflowJob' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookWorkflowJobCompleted⚡️WorkflowJob($object),
            'ApiClients\Client\GitHub\Schema\WebhookWorkflowJobCompleted\WorkflowJob\Steps' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookWorkflowJobCompleted⚡️WorkflowJob⚡️Steps($object),
            'ApiClients\Client\GitHub\Schema\Deployment' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Deployment($object),
            'ApiClients\Client\GitHub\Schema\WebhookWorkflowJobInProgress' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookWorkflowJobInProgress($object),
            'ApiClients\Client\GitHub\Schema\WebhookWorkflowJobInProgress\WorkflowJob' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookWorkflowJobInProgress⚡️WorkflowJob($object),
            'ApiClients\Client\GitHub\Schema\WebhookWorkflowJobInProgress\WorkflowJob\Steps' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookWorkflowJobInProgress⚡️WorkflowJob⚡️Steps($object),
            'ApiClients\Client\GitHub\Schema\WebhookWorkflowJobQueued' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookWorkflowJobQueued($object),
            'ApiClients\Client\GitHub\Schema\WebhookWorkflowJobQueued\WorkflowJob' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookWorkflowJobQueued⚡️WorkflowJob($object),
            'ApiClients\Client\GitHub\Schema\WebhookWorkflowJobQueued\WorkflowJob\Steps' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookWorkflowJobQueued⚡️WorkflowJob⚡️Steps($object),
            'ApiClients\Client\GitHub\Schema\WebhookWorkflowJobWaiting' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookWorkflowJobWaiting($object),
            'ApiClients\Client\GitHub\Schema\WebhookWorkflowJobWaiting\WorkflowJob' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookWorkflowJobWaiting⚡️WorkflowJob($object),
            'ApiClients\Client\GitHub\Schema\WebhookWorkflowJobWaiting\WorkflowJob\Steps' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookWorkflowJobWaiting⚡️WorkflowJob⚡️Steps($object),
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


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookWorkflowJobCompleted(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookWorkflowJobCompleted);
        $result = [];

        $action = $object->action;
        after_action:        $result['action'] = $action;

        
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

        
        $workflowJob = $object->workflowJob;
        $workflowJob = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookWorkflowJobCompleted⚡️WorkflowJob($workflowJob);
        after_workflowJob:        $result['workflow_job'] = $workflowJob;

        
        $deployment = $object->deployment;

        if ($deployment === null) {
            goto after_deployment;
        }
        $deployment = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Deployment($deployment);
        after_deployment:        $result['deployment'] = $deployment;


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

        
        $htmlUrl = $object->htmlUrl;
        after_htmlUrl:        $result['html_url'] = $htmlUrl;

        
        $websiteUrl = $object->websiteUrl;

        if ($websiteUrl === null) {
            goto after_websiteUrl;
        }
        after_websiteUrl:        $result['website_url'] = $websiteUrl;

        
        $id = $object->id;
        after_id:        $result['id'] = $id;

        
        $nodeId = $object->nodeId;
        after_nodeId:        $result['node_id'] = $nodeId;

        
        $name = $object->name;
        after_name:        $result['name'] = $name;

        
        $slug = $object->slug;
        after_slug:        $result['slug'] = $slug;

        
        $createdAt = $object->createdAt;

        if ($createdAt === null) {
            goto after_createdAt;
        }
        after_createdAt:        $result['created_at'] = $createdAt;

        
        $updatedAt = $object->updatedAt;

        if ($updatedAt === null) {
            goto after_updatedAt;
        }
        after_updatedAt:        $result['updated_at'] = $updatedAt;

        
        $avatarUrl = $object->avatarUrl;
        after_avatarUrl:        $result['avatar_url'] = $avatarUrl;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleInstallation(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\SimpleInstallation);
        $result = [];

        $id = $object->id;
        after_id:        $result['id'] = $id;

        
        $nodeId = $object->nodeId;
        after_nodeId:        $result['node_id'] = $nodeId;


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

        
        $nodeId = $object->nodeId;
        after_nodeId:        $result['node_id'] = $nodeId;

        
        $url = $object->url;
        after_url:        $result['url'] = $url;

        
        $reposUrl = $object->reposUrl;
        after_reposUrl:        $result['repos_url'] = $reposUrl;

        
        $eventsUrl = $object->eventsUrl;
        after_eventsUrl:        $result['events_url'] = $eventsUrl;

        
        $hooksUrl = $object->hooksUrl;
        after_hooksUrl:        $result['hooks_url'] = $hooksUrl;

        
        $issuesUrl = $object->issuesUrl;
        after_issuesUrl:        $result['issues_url'] = $issuesUrl;

        
        $membersUrl = $object->membersUrl;
        after_membersUrl:        $result['members_url'] = $membersUrl;

        
        $publicMembersUrl = $object->publicMembersUrl;
        after_publicMembersUrl:        $result['public_members_url'] = $publicMembersUrl;

        
        $avatarUrl = $object->avatarUrl;
        after_avatarUrl:        $result['avatar_url'] = $avatarUrl;

        
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

        
        $nodeId = $object->nodeId;
        after_nodeId:        $result['node_id'] = $nodeId;

        
        $name = $object->name;
        after_name:        $result['name'] = $name;

        
        $fullName = $object->fullName;
        after_fullName:        $result['full_name'] = $fullName;

        
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

        
        $htmlUrl = $object->htmlUrl;
        after_htmlUrl:        $result['html_url'] = $htmlUrl;

        
        $description = $object->description;

        if ($description === null) {
            goto after_description;
        }
        after_description:        $result['description'] = $description;

        
        $fork = $object->fork;
        after_fork:        $result['fork'] = $fork;

        
        $url = $object->url;
        after_url:        $result['url'] = $url;

        
        $archiveUrl = $object->archiveUrl;
        after_archiveUrl:        $result['archive_url'] = $archiveUrl;

        
        $assigneesUrl = $object->assigneesUrl;
        after_assigneesUrl:        $result['assignees_url'] = $assigneesUrl;

        
        $blobsUrl = $object->blobsUrl;
        after_blobsUrl:        $result['blobs_url'] = $blobsUrl;

        
        $branchesUrl = $object->branchesUrl;
        after_branchesUrl:        $result['branches_url'] = $branchesUrl;

        
        $collaboratorsUrl = $object->collaboratorsUrl;
        after_collaboratorsUrl:        $result['collaborators_url'] = $collaboratorsUrl;

        
        $commentsUrl = $object->commentsUrl;
        after_commentsUrl:        $result['comments_url'] = $commentsUrl;

        
        $commitsUrl = $object->commitsUrl;
        after_commitsUrl:        $result['commits_url'] = $commitsUrl;

        
        $compareUrl = $object->compareUrl;
        after_compareUrl:        $result['compare_url'] = $compareUrl;

        
        $contentsUrl = $object->contentsUrl;
        after_contentsUrl:        $result['contents_url'] = $contentsUrl;

        
        $contributorsUrl = $object->contributorsUrl;
        after_contributorsUrl:        $result['contributors_url'] = $contributorsUrl;

        
        $deploymentsUrl = $object->deploymentsUrl;
        after_deploymentsUrl:        $result['deployments_url'] = $deploymentsUrl;

        
        $downloadsUrl = $object->downloadsUrl;
        after_downloadsUrl:        $result['downloads_url'] = $downloadsUrl;

        
        $eventsUrl = $object->eventsUrl;
        after_eventsUrl:        $result['events_url'] = $eventsUrl;

        
        $forksUrl = $object->forksUrl;
        after_forksUrl:        $result['forks_url'] = $forksUrl;

        
        $gitCommitsUrl = $object->gitCommitsUrl;
        after_gitCommitsUrl:        $result['git_commits_url'] = $gitCommitsUrl;

        
        $gitRefsUrl = $object->gitRefsUrl;
        after_gitRefsUrl:        $result['git_refs_url'] = $gitRefsUrl;

        
        $gitTagsUrl = $object->gitTagsUrl;
        after_gitTagsUrl:        $result['git_tags_url'] = $gitTagsUrl;

        
        $gitUrl = $object->gitUrl;
        after_gitUrl:        $result['git_url'] = $gitUrl;

        
        $issueCommentUrl = $object->issueCommentUrl;
        after_issueCommentUrl:        $result['issue_comment_url'] = $issueCommentUrl;

        
        $issueEventsUrl = $object->issueEventsUrl;
        after_issueEventsUrl:        $result['issue_events_url'] = $issueEventsUrl;

        
        $issuesUrl = $object->issuesUrl;
        after_issuesUrl:        $result['issues_url'] = $issuesUrl;

        
        $keysUrl = $object->keysUrl;
        after_keysUrl:        $result['keys_url'] = $keysUrl;

        
        $labelsUrl = $object->labelsUrl;
        after_labelsUrl:        $result['labels_url'] = $labelsUrl;

        
        $languagesUrl = $object->languagesUrl;
        after_languagesUrl:        $result['languages_url'] = $languagesUrl;

        
        $mergesUrl = $object->mergesUrl;
        after_mergesUrl:        $result['merges_url'] = $mergesUrl;

        
        $milestonesUrl = $object->milestonesUrl;
        after_milestonesUrl:        $result['milestones_url'] = $milestonesUrl;

        
        $notificationsUrl = $object->notificationsUrl;
        after_notificationsUrl:        $result['notifications_url'] = $notificationsUrl;

        
        $pullsUrl = $object->pullsUrl;
        after_pullsUrl:        $result['pulls_url'] = $pullsUrl;

        
        $releasesUrl = $object->releasesUrl;
        after_releasesUrl:        $result['releases_url'] = $releasesUrl;

        
        $sshUrl = $object->sshUrl;
        after_sshUrl:        $result['ssh_url'] = $sshUrl;

        
        $stargazersUrl = $object->stargazersUrl;
        after_stargazersUrl:        $result['stargazers_url'] = $stargazersUrl;

        
        $statusesUrl = $object->statusesUrl;
        after_statusesUrl:        $result['statuses_url'] = $statusesUrl;

        
        $subscribersUrl = $object->subscribersUrl;
        after_subscribersUrl:        $result['subscribers_url'] = $subscribersUrl;

        
        $subscriptionUrl = $object->subscriptionUrl;
        after_subscriptionUrl:        $result['subscription_url'] = $subscriptionUrl;

        
        $tagsUrl = $object->tagsUrl;
        after_tagsUrl:        $result['tags_url'] = $tagsUrl;

        
        $teamsUrl = $object->teamsUrl;
        after_teamsUrl:        $result['teams_url'] = $teamsUrl;

        
        $treesUrl = $object->treesUrl;
        after_treesUrl:        $result['trees_url'] = $treesUrl;

        
        $cloneUrl = $object->cloneUrl;
        after_cloneUrl:        $result['clone_url'] = $cloneUrl;

        
        $mirrorUrl = $object->mirrorUrl;

        if ($mirrorUrl === null) {
            goto after_mirrorUrl;
        }
        after_mirrorUrl:        $result['mirror_url'] = $mirrorUrl;

        
        $hooksUrl = $object->hooksUrl;
        after_hooksUrl:        $result['hooks_url'] = $hooksUrl;

        
        $svnUrl = $object->svnUrl;
        after_svnUrl:        $result['svn_url'] = $svnUrl;

        
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

        
        $forksCount = $object->forksCount;
        after_forksCount:        $result['forks_count'] = $forksCount;

        
        $stargazersCount = $object->stargazersCount;
        after_stargazersCount:        $result['stargazers_count'] = $stargazersCount;

        
        $watchersCount = $object->watchersCount;
        after_watchersCount:        $result['watchers_count'] = $watchersCount;

        
        $size = $object->size;
        after_size:        $result['size'] = $size;

        
        $defaultBranch = $object->defaultBranch;
        after_defaultBranch:        $result['default_branch'] = $defaultBranch;

        
        $openIssuesCount = $object->openIssuesCount;
        after_openIssuesCount:        $result['open_issues_count'] = $openIssuesCount;

        
        $isTemplate = $object->isTemplate;

        if ($isTemplate === null) {
            goto after_isTemplate;
        }
        after_isTemplate:        $result['is_template'] = $isTemplate;

        
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

        
        $hasIssues = $object->hasIssues;
        after_hasIssues:        $result['has_issues'] = $hasIssues;

        
        $hasProjects = $object->hasProjects;
        after_hasProjects:        $result['has_projects'] = $hasProjects;

        
        $hasWiki = $object->hasWiki;
        after_hasWiki:        $result['has_wiki'] = $hasWiki;

        
        $hasPages = $object->hasPages;
        after_hasPages:        $result['has_pages'] = $hasPages;

        
        $hasDownloads = $object->hasDownloads;
        after_hasDownloads:        $result['has_downloads'] = $hasDownloads;

        
        $hasDiscussions = $object->hasDiscussions;

        if ($hasDiscussions === null) {
            goto after_hasDiscussions;
        }
        after_hasDiscussions:        $result['has_discussions'] = $hasDiscussions;

        
        $archived = $object->archived;
        after_archived:        $result['archived'] = $archived;

        
        $disabled = $object->disabled;
        after_disabled:        $result['disabled'] = $disabled;

        
        $visibility = $object->visibility;

        if ($visibility === null) {
            goto after_visibility;
        }
        after_visibility:        $result['visibility'] = $visibility;

        
        $pushedAt = $object->pushedAt;

        if ($pushedAt === null) {
            goto after_pushedAt;
        }
        after_pushedAt:        $result['pushed_at'] = $pushedAt;

        
        $createdAt = $object->createdAt;

        if ($createdAt === null) {
            goto after_createdAt;
        }
        after_createdAt:        $result['created_at'] = $createdAt;

        
        $updatedAt = $object->updatedAt;

        if ($updatedAt === null) {
            goto after_updatedAt;
        }
        after_updatedAt:        $result['updated_at'] = $updatedAt;

        
        $allowRebaseMerge = $object->allowRebaseMerge;

        if ($allowRebaseMerge === null) {
            goto after_allowRebaseMerge;
        }
        after_allowRebaseMerge:        $result['allow_rebase_merge'] = $allowRebaseMerge;

        
        $templateRepository = $object->templateRepository;

        if ($templateRepository === null) {
            goto after_templateRepository;
        }
        $templateRepository = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Repository⚡️TemplateRepository($templateRepository);
        after_templateRepository:        $result['template_repository'] = $templateRepository;

        
        $tempCloneToken = $object->tempCloneToken;

        if ($tempCloneToken === null) {
            goto after_tempCloneToken;
        }
        after_tempCloneToken:        $result['temp_clone_token'] = $tempCloneToken;

        
        $allowSquashMerge = $object->allowSquashMerge;

        if ($allowSquashMerge === null) {
            goto after_allowSquashMerge;
        }
        after_allowSquashMerge:        $result['allow_squash_merge'] = $allowSquashMerge;

        
        $allowAutoMerge = $object->allowAutoMerge;

        if ($allowAutoMerge === null) {
            goto after_allowAutoMerge;
        }
        after_allowAutoMerge:        $result['allow_auto_merge'] = $allowAutoMerge;

        
        $deleteBranchOnMerge = $object->deleteBranchOnMerge;

        if ($deleteBranchOnMerge === null) {
            goto after_deleteBranchOnMerge;
        }
        after_deleteBranchOnMerge:        $result['delete_branch_on_merge'] = $deleteBranchOnMerge;

        
        $allowUpdateBranch = $object->allowUpdateBranch;

        if ($allowUpdateBranch === null) {
            goto after_allowUpdateBranch;
        }
        after_allowUpdateBranch:        $result['allow_update_branch'] = $allowUpdateBranch;

        
        $useSquashPrTitleAsDefault = $object->useSquashPrTitleAsDefault;

        if ($useSquashPrTitleAsDefault === null) {
            goto after_useSquashPrTitleAsDefault;
        }
        after_useSquashPrTitleAsDefault:        $result['use_squash_pr_title_as_default'] = $useSquashPrTitleAsDefault;

        
        $squashMergeCommitTitle = $object->squashMergeCommitTitle;

        if ($squashMergeCommitTitle === null) {
            goto after_squashMergeCommitTitle;
        }
        after_squashMergeCommitTitle:        $result['squash_merge_commit_title'] = $squashMergeCommitTitle;

        
        $squashMergeCommitMessage = $object->squashMergeCommitMessage;

        if ($squashMergeCommitMessage === null) {
            goto after_squashMergeCommitMessage;
        }
        after_squashMergeCommitMessage:        $result['squash_merge_commit_message'] = $squashMergeCommitMessage;

        
        $mergeCommitTitle = $object->mergeCommitTitle;

        if ($mergeCommitTitle === null) {
            goto after_mergeCommitTitle;
        }
        after_mergeCommitTitle:        $result['merge_commit_title'] = $mergeCommitTitle;

        
        $mergeCommitMessage = $object->mergeCommitMessage;

        if ($mergeCommitMessage === null) {
            goto after_mergeCommitMessage;
        }
        after_mergeCommitMessage:        $result['merge_commit_message'] = $mergeCommitMessage;

        
        $allowMergeCommit = $object->allowMergeCommit;

        if ($allowMergeCommit === null) {
            goto after_allowMergeCommit;
        }
        after_allowMergeCommit:        $result['allow_merge_commit'] = $allowMergeCommit;

        
        $allowForking = $object->allowForking;

        if ($allowForking === null) {
            goto after_allowForking;
        }
        after_allowForking:        $result['allow_forking'] = $allowForking;

        
        $webCommitSignoffRequired = $object->webCommitSignoffRequired;

        if ($webCommitSignoffRequired === null) {
            goto after_webCommitSignoffRequired;
        }
        after_webCommitSignoffRequired:        $result['web_commit_signoff_required'] = $webCommitSignoffRequired;

        
        $subscribersCount = $object->subscribersCount;

        if ($subscribersCount === null) {
            goto after_subscribersCount;
        }
        after_subscribersCount:        $result['subscribers_count'] = $subscribersCount;

        
        $networkCount = $object->networkCount;

        if ($networkCount === null) {
            goto after_networkCount;
        }
        after_networkCount:        $result['network_count'] = $networkCount;

        
        $openIssues = $object->openIssues;
        after_openIssues:        $result['open_issues'] = $openIssues;

        
        $watchers = $object->watchers;
        after_watchers:        $result['watchers'] = $watchers;

        
        $masterBranch = $object->masterBranch;

        if ($masterBranch === null) {
            goto after_masterBranch;
        }
        after_masterBranch:        $result['master_branch'] = $masterBranch;

        
        $starredAt = $object->starredAt;

        if ($starredAt === null) {
            goto after_starredAt;
        }
        after_starredAt:        $result['starred_at'] = $starredAt;

        
        $anonymousAccessEnabled = $object->anonymousAccessEnabled;

        if ($anonymousAccessEnabled === null) {
            goto after_anonymousAccessEnabled;
        }
        after_anonymousAccessEnabled:        $result['anonymous_access_enabled'] = $anonymousAccessEnabled;


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

        
        $nodeId = $object->nodeId;
        after_nodeId:        $result['node_id'] = $nodeId;

        
        $avatarUrl = $object->avatarUrl;
        after_avatarUrl:        $result['avatar_url'] = $avatarUrl;

        
        $gravatarId = $object->gravatarId;

        if ($gravatarId === null) {
            goto after_gravatarId;
        }
        after_gravatarId:        $result['gravatar_id'] = $gravatarId;

        
        $url = $object->url;
        after_url:        $result['url'] = $url;

        
        $htmlUrl = $object->htmlUrl;
        after_htmlUrl:        $result['html_url'] = $htmlUrl;

        
        $followersUrl = $object->followersUrl;
        after_followersUrl:        $result['followers_url'] = $followersUrl;

        
        $followingUrl = $object->followingUrl;
        after_followingUrl:        $result['following_url'] = $followingUrl;

        
        $gistsUrl = $object->gistsUrl;
        after_gistsUrl:        $result['gists_url'] = $gistsUrl;

        
        $starredUrl = $object->starredUrl;
        after_starredUrl:        $result['starred_url'] = $starredUrl;

        
        $subscriptionsUrl = $object->subscriptionsUrl;
        after_subscriptionsUrl:        $result['subscriptions_url'] = $subscriptionsUrl;

        
        $organizationsUrl = $object->organizationsUrl;
        after_organizationsUrl:        $result['organizations_url'] = $organizationsUrl;

        
        $reposUrl = $object->reposUrl;
        after_reposUrl:        $result['repos_url'] = $reposUrl;

        
        $eventsUrl = $object->eventsUrl;
        after_eventsUrl:        $result['events_url'] = $eventsUrl;

        
        $receivedEventsUrl = $object->receivedEventsUrl;
        after_receivedEventsUrl:        $result['received_events_url'] = $receivedEventsUrl;

        
        $type = $object->type;
        after_type:        $result['type'] = $type;

        
        $siteAdmin = $object->siteAdmin;
        after_siteAdmin:        $result['site_admin'] = $siteAdmin;

        
        $starredAt = $object->starredAt;

        if ($starredAt === null) {
            goto after_starredAt;
        }
        after_starredAt:        $result['starred_at'] = $starredAt;


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

        
        $nodeId = $object->nodeId;

        if ($nodeId === null) {
            goto after_nodeId;
        }
        after_nodeId:        $result['node_id'] = $nodeId;

        
        $name = $object->name;

        if ($name === null) {
            goto after_name;
        }
        after_name:        $result['name'] = $name;

        
        $fullName = $object->fullName;

        if ($fullName === null) {
            goto after_fullName;
        }
        after_fullName:        $result['full_name'] = $fullName;

        
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

        
        $htmlUrl = $object->htmlUrl;

        if ($htmlUrl === null) {
            goto after_htmlUrl;
        }
        after_htmlUrl:        $result['html_url'] = $htmlUrl;

        
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

        
        $archiveUrl = $object->archiveUrl;

        if ($archiveUrl === null) {
            goto after_archiveUrl;
        }
        after_archiveUrl:        $result['archive_url'] = $archiveUrl;

        
        $assigneesUrl = $object->assigneesUrl;

        if ($assigneesUrl === null) {
            goto after_assigneesUrl;
        }
        after_assigneesUrl:        $result['assignees_url'] = $assigneesUrl;

        
        $blobsUrl = $object->blobsUrl;

        if ($blobsUrl === null) {
            goto after_blobsUrl;
        }
        after_blobsUrl:        $result['blobs_url'] = $blobsUrl;

        
        $branchesUrl = $object->branchesUrl;

        if ($branchesUrl === null) {
            goto after_branchesUrl;
        }
        after_branchesUrl:        $result['branches_url'] = $branchesUrl;

        
        $collaboratorsUrl = $object->collaboratorsUrl;

        if ($collaboratorsUrl === null) {
            goto after_collaboratorsUrl;
        }
        after_collaboratorsUrl:        $result['collaborators_url'] = $collaboratorsUrl;

        
        $commentsUrl = $object->commentsUrl;

        if ($commentsUrl === null) {
            goto after_commentsUrl;
        }
        after_commentsUrl:        $result['comments_url'] = $commentsUrl;

        
        $commitsUrl = $object->commitsUrl;

        if ($commitsUrl === null) {
            goto after_commitsUrl;
        }
        after_commitsUrl:        $result['commits_url'] = $commitsUrl;

        
        $compareUrl = $object->compareUrl;

        if ($compareUrl === null) {
            goto after_compareUrl;
        }
        after_compareUrl:        $result['compare_url'] = $compareUrl;

        
        $contentsUrl = $object->contentsUrl;

        if ($contentsUrl === null) {
            goto after_contentsUrl;
        }
        after_contentsUrl:        $result['contents_url'] = $contentsUrl;

        
        $contributorsUrl = $object->contributorsUrl;

        if ($contributorsUrl === null) {
            goto after_contributorsUrl;
        }
        after_contributorsUrl:        $result['contributors_url'] = $contributorsUrl;

        
        $deploymentsUrl = $object->deploymentsUrl;

        if ($deploymentsUrl === null) {
            goto after_deploymentsUrl;
        }
        after_deploymentsUrl:        $result['deployments_url'] = $deploymentsUrl;

        
        $downloadsUrl = $object->downloadsUrl;

        if ($downloadsUrl === null) {
            goto after_downloadsUrl;
        }
        after_downloadsUrl:        $result['downloads_url'] = $downloadsUrl;

        
        $eventsUrl = $object->eventsUrl;

        if ($eventsUrl === null) {
            goto after_eventsUrl;
        }
        after_eventsUrl:        $result['events_url'] = $eventsUrl;

        
        $forksUrl = $object->forksUrl;

        if ($forksUrl === null) {
            goto after_forksUrl;
        }
        after_forksUrl:        $result['forks_url'] = $forksUrl;

        
        $gitCommitsUrl = $object->gitCommitsUrl;

        if ($gitCommitsUrl === null) {
            goto after_gitCommitsUrl;
        }
        after_gitCommitsUrl:        $result['git_commits_url'] = $gitCommitsUrl;

        
        $gitRefsUrl = $object->gitRefsUrl;

        if ($gitRefsUrl === null) {
            goto after_gitRefsUrl;
        }
        after_gitRefsUrl:        $result['git_refs_url'] = $gitRefsUrl;

        
        $gitTagsUrl = $object->gitTagsUrl;

        if ($gitTagsUrl === null) {
            goto after_gitTagsUrl;
        }
        after_gitTagsUrl:        $result['git_tags_url'] = $gitTagsUrl;

        
        $gitUrl = $object->gitUrl;

        if ($gitUrl === null) {
            goto after_gitUrl;
        }
        after_gitUrl:        $result['git_url'] = $gitUrl;

        
        $issueCommentUrl = $object->issueCommentUrl;

        if ($issueCommentUrl === null) {
            goto after_issueCommentUrl;
        }
        after_issueCommentUrl:        $result['issue_comment_url'] = $issueCommentUrl;

        
        $issueEventsUrl = $object->issueEventsUrl;

        if ($issueEventsUrl === null) {
            goto after_issueEventsUrl;
        }
        after_issueEventsUrl:        $result['issue_events_url'] = $issueEventsUrl;

        
        $issuesUrl = $object->issuesUrl;

        if ($issuesUrl === null) {
            goto after_issuesUrl;
        }
        after_issuesUrl:        $result['issues_url'] = $issuesUrl;

        
        $keysUrl = $object->keysUrl;

        if ($keysUrl === null) {
            goto after_keysUrl;
        }
        after_keysUrl:        $result['keys_url'] = $keysUrl;

        
        $labelsUrl = $object->labelsUrl;

        if ($labelsUrl === null) {
            goto after_labelsUrl;
        }
        after_labelsUrl:        $result['labels_url'] = $labelsUrl;

        
        $languagesUrl = $object->languagesUrl;

        if ($languagesUrl === null) {
            goto after_languagesUrl;
        }
        after_languagesUrl:        $result['languages_url'] = $languagesUrl;

        
        $mergesUrl = $object->mergesUrl;

        if ($mergesUrl === null) {
            goto after_mergesUrl;
        }
        after_mergesUrl:        $result['merges_url'] = $mergesUrl;

        
        $milestonesUrl = $object->milestonesUrl;

        if ($milestonesUrl === null) {
            goto after_milestonesUrl;
        }
        after_milestonesUrl:        $result['milestones_url'] = $milestonesUrl;

        
        $notificationsUrl = $object->notificationsUrl;

        if ($notificationsUrl === null) {
            goto after_notificationsUrl;
        }
        after_notificationsUrl:        $result['notifications_url'] = $notificationsUrl;

        
        $pullsUrl = $object->pullsUrl;

        if ($pullsUrl === null) {
            goto after_pullsUrl;
        }
        after_pullsUrl:        $result['pulls_url'] = $pullsUrl;

        
        $releasesUrl = $object->releasesUrl;

        if ($releasesUrl === null) {
            goto after_releasesUrl;
        }
        after_releasesUrl:        $result['releases_url'] = $releasesUrl;

        
        $sshUrl = $object->sshUrl;

        if ($sshUrl === null) {
            goto after_sshUrl;
        }
        after_sshUrl:        $result['ssh_url'] = $sshUrl;

        
        $stargazersUrl = $object->stargazersUrl;

        if ($stargazersUrl === null) {
            goto after_stargazersUrl;
        }
        after_stargazersUrl:        $result['stargazers_url'] = $stargazersUrl;

        
        $statusesUrl = $object->statusesUrl;

        if ($statusesUrl === null) {
            goto after_statusesUrl;
        }
        after_statusesUrl:        $result['statuses_url'] = $statusesUrl;

        
        $subscribersUrl = $object->subscribersUrl;

        if ($subscribersUrl === null) {
            goto after_subscribersUrl;
        }
        after_subscribersUrl:        $result['subscribers_url'] = $subscribersUrl;

        
        $subscriptionUrl = $object->subscriptionUrl;

        if ($subscriptionUrl === null) {
            goto after_subscriptionUrl;
        }
        after_subscriptionUrl:        $result['subscription_url'] = $subscriptionUrl;

        
        $tagsUrl = $object->tagsUrl;

        if ($tagsUrl === null) {
            goto after_tagsUrl;
        }
        after_tagsUrl:        $result['tags_url'] = $tagsUrl;

        
        $teamsUrl = $object->teamsUrl;

        if ($teamsUrl === null) {
            goto after_teamsUrl;
        }
        after_teamsUrl:        $result['teams_url'] = $teamsUrl;

        
        $treesUrl = $object->treesUrl;

        if ($treesUrl === null) {
            goto after_treesUrl;
        }
        after_treesUrl:        $result['trees_url'] = $treesUrl;

        
        $cloneUrl = $object->cloneUrl;

        if ($cloneUrl === null) {
            goto after_cloneUrl;
        }
        after_cloneUrl:        $result['clone_url'] = $cloneUrl;

        
        $mirrorUrl = $object->mirrorUrl;

        if ($mirrorUrl === null) {
            goto after_mirrorUrl;
        }
        after_mirrorUrl:        $result['mirror_url'] = $mirrorUrl;

        
        $hooksUrl = $object->hooksUrl;

        if ($hooksUrl === null) {
            goto after_hooksUrl;
        }
        after_hooksUrl:        $result['hooks_url'] = $hooksUrl;

        
        $svnUrl = $object->svnUrl;

        if ($svnUrl === null) {
            goto after_svnUrl;
        }
        after_svnUrl:        $result['svn_url'] = $svnUrl;

        
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

        
        $forksCount = $object->forksCount;

        if ($forksCount === null) {
            goto after_forksCount;
        }
        after_forksCount:        $result['forks_count'] = $forksCount;

        
        $stargazersCount = $object->stargazersCount;

        if ($stargazersCount === null) {
            goto after_stargazersCount;
        }
        after_stargazersCount:        $result['stargazers_count'] = $stargazersCount;

        
        $watchersCount = $object->watchersCount;

        if ($watchersCount === null) {
            goto after_watchersCount;
        }
        after_watchersCount:        $result['watchers_count'] = $watchersCount;

        
        $size = $object->size;

        if ($size === null) {
            goto after_size;
        }
        after_size:        $result['size'] = $size;

        
        $defaultBranch = $object->defaultBranch;

        if ($defaultBranch === null) {
            goto after_defaultBranch;
        }
        after_defaultBranch:        $result['default_branch'] = $defaultBranch;

        
        $openIssuesCount = $object->openIssuesCount;

        if ($openIssuesCount === null) {
            goto after_openIssuesCount;
        }
        after_openIssuesCount:        $result['open_issues_count'] = $openIssuesCount;

        
        $isTemplate = $object->isTemplate;

        if ($isTemplate === null) {
            goto after_isTemplate;
        }
        after_isTemplate:        $result['is_template'] = $isTemplate;

        
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

        
        $hasIssues = $object->hasIssues;

        if ($hasIssues === null) {
            goto after_hasIssues;
        }
        after_hasIssues:        $result['has_issues'] = $hasIssues;

        
        $hasProjects = $object->hasProjects;

        if ($hasProjects === null) {
            goto after_hasProjects;
        }
        after_hasProjects:        $result['has_projects'] = $hasProjects;

        
        $hasWiki = $object->hasWiki;

        if ($hasWiki === null) {
            goto after_hasWiki;
        }
        after_hasWiki:        $result['has_wiki'] = $hasWiki;

        
        $hasPages = $object->hasPages;

        if ($hasPages === null) {
            goto after_hasPages;
        }
        after_hasPages:        $result['has_pages'] = $hasPages;

        
        $hasDownloads = $object->hasDownloads;

        if ($hasDownloads === null) {
            goto after_hasDownloads;
        }
        after_hasDownloads:        $result['has_downloads'] = $hasDownloads;

        
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

        
        $pushedAt = $object->pushedAt;

        if ($pushedAt === null) {
            goto after_pushedAt;
        }
        after_pushedAt:        $result['pushed_at'] = $pushedAt;

        
        $createdAt = $object->createdAt;

        if ($createdAt === null) {
            goto after_createdAt;
        }
        after_createdAt:        $result['created_at'] = $createdAt;

        
        $updatedAt = $object->updatedAt;

        if ($updatedAt === null) {
            goto after_updatedAt;
        }
        after_updatedAt:        $result['updated_at'] = $updatedAt;

        
        $permissions = $object->permissions;

        if ($permissions === null) {
            goto after_permissions;
        }
        $permissions = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Repository⚡️TemplateRepository⚡️Permissions($permissions);
        after_permissions:        $result['permissions'] = $permissions;

        
        $allowRebaseMerge = $object->allowRebaseMerge;

        if ($allowRebaseMerge === null) {
            goto after_allowRebaseMerge;
        }
        after_allowRebaseMerge:        $result['allow_rebase_merge'] = $allowRebaseMerge;

        
        $tempCloneToken = $object->tempCloneToken;

        if ($tempCloneToken === null) {
            goto after_tempCloneToken;
        }
        after_tempCloneToken:        $result['temp_clone_token'] = $tempCloneToken;

        
        $allowSquashMerge = $object->allowSquashMerge;

        if ($allowSquashMerge === null) {
            goto after_allowSquashMerge;
        }
        after_allowSquashMerge:        $result['allow_squash_merge'] = $allowSquashMerge;

        
        $allowAutoMerge = $object->allowAutoMerge;

        if ($allowAutoMerge === null) {
            goto after_allowAutoMerge;
        }
        after_allowAutoMerge:        $result['allow_auto_merge'] = $allowAutoMerge;

        
        $deleteBranchOnMerge = $object->deleteBranchOnMerge;

        if ($deleteBranchOnMerge === null) {
            goto after_deleteBranchOnMerge;
        }
        after_deleteBranchOnMerge:        $result['delete_branch_on_merge'] = $deleteBranchOnMerge;

        
        $allowUpdateBranch = $object->allowUpdateBranch;

        if ($allowUpdateBranch === null) {
            goto after_allowUpdateBranch;
        }
        after_allowUpdateBranch:        $result['allow_update_branch'] = $allowUpdateBranch;

        
        $useSquashPrTitleAsDefault = $object->useSquashPrTitleAsDefault;

        if ($useSquashPrTitleAsDefault === null) {
            goto after_useSquashPrTitleAsDefault;
        }
        after_useSquashPrTitleAsDefault:        $result['use_squash_pr_title_as_default'] = $useSquashPrTitleAsDefault;

        
        $squashMergeCommitTitle = $object->squashMergeCommitTitle;

        if ($squashMergeCommitTitle === null) {
            goto after_squashMergeCommitTitle;
        }
        after_squashMergeCommitTitle:        $result['squash_merge_commit_title'] = $squashMergeCommitTitle;

        
        $squashMergeCommitMessage = $object->squashMergeCommitMessage;

        if ($squashMergeCommitMessage === null) {
            goto after_squashMergeCommitMessage;
        }
        after_squashMergeCommitMessage:        $result['squash_merge_commit_message'] = $squashMergeCommitMessage;

        
        $mergeCommitTitle = $object->mergeCommitTitle;

        if ($mergeCommitTitle === null) {
            goto after_mergeCommitTitle;
        }
        after_mergeCommitTitle:        $result['merge_commit_title'] = $mergeCommitTitle;

        
        $mergeCommitMessage = $object->mergeCommitMessage;

        if ($mergeCommitMessage === null) {
            goto after_mergeCommitMessage;
        }
        after_mergeCommitMessage:        $result['merge_commit_message'] = $mergeCommitMessage;

        
        $allowMergeCommit = $object->allowMergeCommit;

        if ($allowMergeCommit === null) {
            goto after_allowMergeCommit;
        }
        after_allowMergeCommit:        $result['allow_merge_commit'] = $allowMergeCommit;

        
        $subscribersCount = $object->subscribersCount;

        if ($subscribersCount === null) {
            goto after_subscribersCount;
        }
        after_subscribersCount:        $result['subscribers_count'] = $subscribersCount;

        
        $networkCount = $object->networkCount;

        if ($networkCount === null) {
            goto after_networkCount;
        }
        after_networkCount:        $result['network_count'] = $networkCount;


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

        
        $nodeId = $object->nodeId;

        if ($nodeId === null) {
            goto after_nodeId;
        }
        after_nodeId:        $result['node_id'] = $nodeId;

        
        $avatarUrl = $object->avatarUrl;

        if ($avatarUrl === null) {
            goto after_avatarUrl;
        }
        after_avatarUrl:        $result['avatar_url'] = $avatarUrl;

        
        $gravatarId = $object->gravatarId;

        if ($gravatarId === null) {
            goto after_gravatarId;
        }
        after_gravatarId:        $result['gravatar_id'] = $gravatarId;

        
        $url = $object->url;

        if ($url === null) {
            goto after_url;
        }
        after_url:        $result['url'] = $url;

        
        $htmlUrl = $object->htmlUrl;

        if ($htmlUrl === null) {
            goto after_htmlUrl;
        }
        after_htmlUrl:        $result['html_url'] = $htmlUrl;

        
        $followersUrl = $object->followersUrl;

        if ($followersUrl === null) {
            goto after_followersUrl;
        }
        after_followersUrl:        $result['followers_url'] = $followersUrl;

        
        $followingUrl = $object->followingUrl;

        if ($followingUrl === null) {
            goto after_followingUrl;
        }
        after_followingUrl:        $result['following_url'] = $followingUrl;

        
        $gistsUrl = $object->gistsUrl;

        if ($gistsUrl === null) {
            goto after_gistsUrl;
        }
        after_gistsUrl:        $result['gists_url'] = $gistsUrl;

        
        $starredUrl = $object->starredUrl;

        if ($starredUrl === null) {
            goto after_starredUrl;
        }
        after_starredUrl:        $result['starred_url'] = $starredUrl;

        
        $subscriptionsUrl = $object->subscriptionsUrl;

        if ($subscriptionsUrl === null) {
            goto after_subscriptionsUrl;
        }
        after_subscriptionsUrl:        $result['subscriptions_url'] = $subscriptionsUrl;

        
        $organizationsUrl = $object->organizationsUrl;

        if ($organizationsUrl === null) {
            goto after_organizationsUrl;
        }
        after_organizationsUrl:        $result['organizations_url'] = $organizationsUrl;

        
        $reposUrl = $object->reposUrl;

        if ($reposUrl === null) {
            goto after_reposUrl;
        }
        after_reposUrl:        $result['repos_url'] = $reposUrl;

        
        $eventsUrl = $object->eventsUrl;

        if ($eventsUrl === null) {
            goto after_eventsUrl;
        }
        after_eventsUrl:        $result['events_url'] = $eventsUrl;

        
        $receivedEventsUrl = $object->receivedEventsUrl;

        if ($receivedEventsUrl === null) {
            goto after_receivedEventsUrl;
        }
        after_receivedEventsUrl:        $result['received_events_url'] = $receivedEventsUrl;

        
        $type = $object->type;

        if ($type === null) {
            goto after_type;
        }
        after_type:        $result['type'] = $type;

        
        $siteAdmin = $object->siteAdmin;

        if ($siteAdmin === null) {
            goto after_siteAdmin;
        }
        after_siteAdmin:        $result['site_admin'] = $siteAdmin;


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


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookWorkflowJobCompleted⚡️WorkflowJob(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookWorkflowJobCompleted\WorkflowJob);
        $result = [];

        $checkRunUrl = $object->checkRunUrl;
        after_checkRunUrl:        $result['check_run_url'] = $checkRunUrl;

        
        $completedAt = $object->completedAt;

        if ($completedAt === null) {
            goto after_completedAt;
        }
        after_completedAt:        $result['completed_at'] = $completedAt;

        
        $conclusion = $object->conclusion;

        if ($conclusion === null) {
            goto after_conclusion;
        }
        after_conclusion:        $result['conclusion'] = $conclusion;

        
        $createdAt = $object->createdAt;
        after_createdAt:        $result['created_at'] = $createdAt;

        
        $headSha = $object->headSha;
        after_headSha:        $result['head_sha'] = $headSha;

        
        $htmlUrl = $object->htmlUrl;
        after_htmlUrl:        $result['html_url'] = $htmlUrl;

        
        $id = $object->id;
        after_id:        $result['id'] = $id;

        
        $labels = $object->labels;
        static $labelsSerializer0;

        if ($labelsSerializer0 === null) {
            $labelsSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $labels = $labelsSerializer0->serialize($labels, $this);
        after_labels:        $result['labels'] = $labels;

        
        $name = $object->name;
        after_name:        $result['name'] = $name;

        
        $nodeId = $object->nodeId;
        after_nodeId:        $result['node_id'] = $nodeId;

        
        $runAttempt = $object->runAttempt;
        after_runAttempt:        $result['run_attempt'] = $runAttempt;

        
        $runId = $object->runId;
        after_runId:        $result['run_id'] = $runId;

        
        $runUrl = $object->runUrl;
        after_runUrl:        $result['run_url'] = $runUrl;

        
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

        
        $startedAt = $object->startedAt;
        after_startedAt:        $result['started_at'] = $startedAt;

        
        $status = $object->status;
        after_status:        $result['status'] = $status;

        
        $headBranch = $object->headBranch;

        if ($headBranch === null) {
            goto after_headBranch;
        }
        after_headBranch:        $result['head_branch'] = $headBranch;

        
        $workflowName = $object->workflowName;

        if ($workflowName === null) {
            goto after_workflowName;
        }
        after_workflowName:        $result['workflow_name'] = $workflowName;

        
        $steps = $object->steps;
        static $stepsSerializer0;

        if ($stepsSerializer0 === null) {
            $stepsSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowJobCompleted\\WorkflowJob\\Steps',
));
        }
        
        $steps = $stepsSerializer0->serialize($steps, $this);
        after_steps:        $result['steps'] = $steps;

        
        $url = $object->url;
        after_url:        $result['url'] = $url;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookWorkflowJobCompleted⚡️WorkflowJob⚡️Steps(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookWorkflowJobCompleted\WorkflowJob\Steps);
        $result = [];

        $completedAt = $object->completedAt;

        if ($completedAt === null) {
            goto after_completedAt;
        }
        after_completedAt:        $result['completed_at'] = $completedAt;

        
        $conclusion = $object->conclusion;

        if ($conclusion === null) {
            goto after_conclusion;
        }
        after_conclusion:        $result['conclusion'] = $conclusion;

        
        $name = $object->name;
        after_name:        $result['name'] = $name;

        
        $number = $object->number;
        after_number:        $result['number'] = $number;

        
        $startedAt = $object->startedAt;

        if ($startedAt === null) {
            goto after_startedAt;
        }
        after_startedAt:        $result['started_at'] = $startedAt;

        
        $status = $object->status;
        after_status:        $result['status'] = $status;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Deployment(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\Deployment);
        $result = [];

        $url = $object->url;
        after_url:        $result['url'] = $url;

        
        $id = $object->id;
        after_id:        $result['id'] = $id;

        
        $nodeId = $object->nodeId;
        after_nodeId:        $result['node_id'] = $nodeId;

        
        $sha = $object->sha;
        after_sha:        $result['sha'] = $sha;

        
        $ref = $object->ref;
        after_ref:        $result['ref'] = $ref;

        
        $task = $object->task;
        after_task:        $result['task'] = $task;

        
        $payload = $object->payload;

        if ($payload === null) {
            goto after_payload;
        }
        after_payload:        $result['payload'] = $payload;

        
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

        
        $creator = $object->creator;

        if ($creator === null) {
            goto after_creator;
        }
        after_creator:        $result['creator'] = $creator;

        
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


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookWorkflowJobInProgress(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookWorkflowJobInProgress);
        $result = [];

        $action = $object->action;
        after_action:        $result['action'] = $action;

        
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

        
        $workflowJob = $object->workflowJob;
        $workflowJob = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookWorkflowJobInProgress⚡️WorkflowJob($workflowJob);
        after_workflowJob:        $result['workflow_job'] = $workflowJob;

        
        $deployment = $object->deployment;

        if ($deployment === null) {
            goto after_deployment;
        }
        $deployment = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Deployment($deployment);
        after_deployment:        $result['deployment'] = $deployment;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookWorkflowJobInProgress⚡️WorkflowJob(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookWorkflowJobInProgress\WorkflowJob);
        $result = [];

        $checkRunUrl = $object->checkRunUrl;
        after_checkRunUrl:        $result['check_run_url'] = $checkRunUrl;

        
        $completedAt = $object->completedAt;

        if ($completedAt === null) {
            goto after_completedAt;
        }
        after_completedAt:        $result['completed_at'] = $completedAt;

        
        $conclusion = $object->conclusion;

        if ($conclusion === null) {
            goto after_conclusion;
        }
        after_conclusion:        $result['conclusion'] = $conclusion;

        
        $createdAt = $object->createdAt;
        after_createdAt:        $result['created_at'] = $createdAt;

        
        $headSha = $object->headSha;
        after_headSha:        $result['head_sha'] = $headSha;

        
        $htmlUrl = $object->htmlUrl;
        after_htmlUrl:        $result['html_url'] = $htmlUrl;

        
        $id = $object->id;
        after_id:        $result['id'] = $id;

        
        $labels = $object->labels;
        static $labelsSerializer0;

        if ($labelsSerializer0 === null) {
            $labelsSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $labels = $labelsSerializer0->serialize($labels, $this);
        after_labels:        $result['labels'] = $labels;

        
        $name = $object->name;
        after_name:        $result['name'] = $name;

        
        $nodeId = $object->nodeId;
        after_nodeId:        $result['node_id'] = $nodeId;

        
        $runAttempt = $object->runAttempt;
        after_runAttempt:        $result['run_attempt'] = $runAttempt;

        
        $runId = $object->runId;
        after_runId:        $result['run_id'] = $runId;

        
        $runUrl = $object->runUrl;
        after_runUrl:        $result['run_url'] = $runUrl;

        
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

        
        $startedAt = $object->startedAt;
        after_startedAt:        $result['started_at'] = $startedAt;

        
        $status = $object->status;
        after_status:        $result['status'] = $status;

        
        $headBranch = $object->headBranch;

        if ($headBranch === null) {
            goto after_headBranch;
        }
        after_headBranch:        $result['head_branch'] = $headBranch;

        
        $workflowName = $object->workflowName;

        if ($workflowName === null) {
            goto after_workflowName;
        }
        after_workflowName:        $result['workflow_name'] = $workflowName;

        
        $steps = $object->steps;
        static $stepsSerializer0;

        if ($stepsSerializer0 === null) {
            $stepsSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowJobInProgress\\WorkflowJob\\Steps',
));
        }
        
        $steps = $stepsSerializer0->serialize($steps, $this);
        after_steps:        $result['steps'] = $steps;

        
        $url = $object->url;
        after_url:        $result['url'] = $url;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookWorkflowJobInProgress⚡️WorkflowJob⚡️Steps(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookWorkflowJobInProgress\WorkflowJob\Steps);
        $result = [];

        $completedAt = $object->completedAt;

        if ($completedAt === null) {
            goto after_completedAt;
        }
        after_completedAt:        $result['completed_at'] = $completedAt;

        
        $conclusion = $object->conclusion;

        if ($conclusion === null) {
            goto after_conclusion;
        }
        after_conclusion:        $result['conclusion'] = $conclusion;

        
        $name = $object->name;
        after_name:        $result['name'] = $name;

        
        $number = $object->number;
        after_number:        $result['number'] = $number;

        
        $startedAt = $object->startedAt;

        if ($startedAt === null) {
            goto after_startedAt;
        }
        after_startedAt:        $result['started_at'] = $startedAt;

        
        $status = $object->status;
        after_status:        $result['status'] = $status;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookWorkflowJobQueued(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookWorkflowJobQueued);
        $result = [];

        $action = $object->action;
        after_action:        $result['action'] = $action;

        
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

        
        $workflowJob = $object->workflowJob;
        $workflowJob = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookWorkflowJobQueued⚡️WorkflowJob($workflowJob);
        after_workflowJob:        $result['workflow_job'] = $workflowJob;

        
        $deployment = $object->deployment;

        if ($deployment === null) {
            goto after_deployment;
        }
        $deployment = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Deployment($deployment);
        after_deployment:        $result['deployment'] = $deployment;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookWorkflowJobQueued⚡️WorkflowJob(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookWorkflowJobQueued\WorkflowJob);
        $result = [];

        $checkRunUrl = $object->checkRunUrl;
        after_checkRunUrl:        $result['check_run_url'] = $checkRunUrl;

        
        $completedAt = $object->completedAt;

        if ($completedAt === null) {
            goto after_completedAt;
        }
        after_completedAt:        $result['completed_at'] = $completedAt;

        
        $conclusion = $object->conclusion;

        if ($conclusion === null) {
            goto after_conclusion;
        }
        after_conclusion:        $result['conclusion'] = $conclusion;

        
        $createdAt = $object->createdAt;
        after_createdAt:        $result['created_at'] = $createdAt;

        
        $headSha = $object->headSha;
        after_headSha:        $result['head_sha'] = $headSha;

        
        $htmlUrl = $object->htmlUrl;
        after_htmlUrl:        $result['html_url'] = $htmlUrl;

        
        $id = $object->id;
        after_id:        $result['id'] = $id;

        
        $labels = $object->labels;
        static $labelsSerializer0;

        if ($labelsSerializer0 === null) {
            $labelsSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $labels = $labelsSerializer0->serialize($labels, $this);
        after_labels:        $result['labels'] = $labels;

        
        $name = $object->name;
        after_name:        $result['name'] = $name;

        
        $nodeId = $object->nodeId;
        after_nodeId:        $result['node_id'] = $nodeId;

        
        $runAttempt = $object->runAttempt;
        after_runAttempt:        $result['run_attempt'] = $runAttempt;

        
        $runId = $object->runId;
        after_runId:        $result['run_id'] = $runId;

        
        $runUrl = $object->runUrl;
        after_runUrl:        $result['run_url'] = $runUrl;

        
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

        
        $startedAt = $object->startedAt;
        after_startedAt:        $result['started_at'] = $startedAt;

        
        $status = $object->status;
        after_status:        $result['status'] = $status;

        
        $headBranch = $object->headBranch;

        if ($headBranch === null) {
            goto after_headBranch;
        }
        after_headBranch:        $result['head_branch'] = $headBranch;

        
        $workflowName = $object->workflowName;

        if ($workflowName === null) {
            goto after_workflowName;
        }
        after_workflowName:        $result['workflow_name'] = $workflowName;

        
        $steps = $object->steps;
        static $stepsSerializer0;

        if ($stepsSerializer0 === null) {
            $stepsSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowJobQueued\\WorkflowJob\\Steps',
));
        }
        
        $steps = $stepsSerializer0->serialize($steps, $this);
        after_steps:        $result['steps'] = $steps;

        
        $url = $object->url;
        after_url:        $result['url'] = $url;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookWorkflowJobQueued⚡️WorkflowJob⚡️Steps(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookWorkflowJobQueued\WorkflowJob\Steps);
        $result = [];

        $completedAt = $object->completedAt;

        if ($completedAt === null) {
            goto after_completedAt;
        }
        after_completedAt:        $result['completed_at'] = $completedAt;

        
        $conclusion = $object->conclusion;

        if ($conclusion === null) {
            goto after_conclusion;
        }
        after_conclusion:        $result['conclusion'] = $conclusion;

        
        $name = $object->name;
        after_name:        $result['name'] = $name;

        
        $number = $object->number;
        after_number:        $result['number'] = $number;

        
        $startedAt = $object->startedAt;

        if ($startedAt === null) {
            goto after_startedAt;
        }
        after_startedAt:        $result['started_at'] = $startedAt;

        
        $status = $object->status;
        after_status:        $result['status'] = $status;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookWorkflowJobWaiting(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookWorkflowJobWaiting);
        $result = [];

        $action = $object->action;
        after_action:        $result['action'] = $action;

        
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

        
        $workflowJob = $object->workflowJob;
        $workflowJob = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookWorkflowJobWaiting⚡️WorkflowJob($workflowJob);
        after_workflowJob:        $result['workflow_job'] = $workflowJob;

        
        $deployment = $object->deployment;

        if ($deployment === null) {
            goto after_deployment;
        }
        $deployment = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Deployment($deployment);
        after_deployment:        $result['deployment'] = $deployment;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookWorkflowJobWaiting⚡️WorkflowJob(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookWorkflowJobWaiting\WorkflowJob);
        $result = [];

        $checkRunUrl = $object->checkRunUrl;
        after_checkRunUrl:        $result['check_run_url'] = $checkRunUrl;

        
        $completedAt = $object->completedAt;

        if ($completedAt === null) {
            goto after_completedAt;
        }
        after_completedAt:        $result['completed_at'] = $completedAt;

        
        $conclusion = $object->conclusion;

        if ($conclusion === null) {
            goto after_conclusion;
        }
        after_conclusion:        $result['conclusion'] = $conclusion;

        
        $createdAt = $object->createdAt;
        after_createdAt:        $result['created_at'] = $createdAt;

        
        $headSha = $object->headSha;
        after_headSha:        $result['head_sha'] = $headSha;

        
        $htmlUrl = $object->htmlUrl;
        after_htmlUrl:        $result['html_url'] = $htmlUrl;

        
        $id = $object->id;
        after_id:        $result['id'] = $id;

        
        $labels = $object->labels;
        static $labelsSerializer0;

        if ($labelsSerializer0 === null) {
            $labelsSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $labels = $labelsSerializer0->serialize($labels, $this);
        after_labels:        $result['labels'] = $labels;

        
        $name = $object->name;
        after_name:        $result['name'] = $name;

        
        $nodeId = $object->nodeId;
        after_nodeId:        $result['node_id'] = $nodeId;

        
        $runAttempt = $object->runAttempt;
        after_runAttempt:        $result['run_attempt'] = $runAttempt;

        
        $runId = $object->runId;
        after_runId:        $result['run_id'] = $runId;

        
        $runUrl = $object->runUrl;
        after_runUrl:        $result['run_url'] = $runUrl;

        
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

        
        $startedAt = $object->startedAt;
        after_startedAt:        $result['started_at'] = $startedAt;

        
        $headBranch = $object->headBranch;

        if ($headBranch === null) {
            goto after_headBranch;
        }
        after_headBranch:        $result['head_branch'] = $headBranch;

        
        $workflowName = $object->workflowName;

        if ($workflowName === null) {
            goto after_workflowName;
        }
        after_workflowName:        $result['workflow_name'] = $workflowName;

        
        $status = $object->status;
        after_status:        $result['status'] = $status;

        
        $steps = $object->steps;
        static $stepsSerializer0;

        if ($stepsSerializer0 === null) {
            $stepsSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowJobWaiting\\WorkflowJob\\Steps',
));
        }
        
        $steps = $stepsSerializer0->serialize($steps, $this);
        after_steps:        $result['steps'] = $steps;

        
        $url = $object->url;
        after_url:        $result['url'] = $url;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookWorkflowJobWaiting⚡️WorkflowJob⚡️Steps(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookWorkflowJobWaiting\WorkflowJob\Steps);
        $result = [];

        $completedAt = $object->completedAt;

        if ($completedAt === null) {
            goto after_completedAt;
        }
        after_completedAt:        $result['completed_at'] = $completedAt;

        
        $conclusion = $object->conclusion;

        if ($conclusion === null) {
            goto after_conclusion;
        }
        after_conclusion:        $result['conclusion'] = $conclusion;

        
        $name = $object->name;
        after_name:        $result['name'] = $name;

        
        $number = $object->number;
        after_number:        $result['number'] = $number;

        
        $startedAt = $object->startedAt;

        if ($startedAt === null) {
            goto after_startedAt;
        }
        after_startedAt:        $result['started_at'] = $startedAt;

        
        $status = $object->status;
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
