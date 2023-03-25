<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Hydrator\WebHook;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class Issues implements ObjectMapper
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
            'ApiClients\Client\GitHub\Schema\WebhookIssuesAssigned' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesAssigned($payload),
                'ApiClients\Client\GitHub\Schema\Discussion\AnswerChosenBy' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Discussion⚡️AnswerChosenBy($payload),
                'ApiClients\Client\GitHub\Schema\Enterprise' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Enterprise($payload),
                'ApiClients\Client\GitHub\Schema\SimpleInstallation' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleInstallation($payload),
                'ApiClients\Client\GitHub\Schema\WebhookIssueCommentEdited\Issue' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssueCommentEdited⚡️Issue($payload),
                'ApiClients\Client\GitHub\Schema\WebhookIssueCommentCreated\Issue\Assignee' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssueCommentCreated⚡️Issue⚡️Assignee($payload),
                'ApiClients\Client\GitHub\Schema\WebhookDiscussionLabeled\Label' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookDiscussionLabeled⚡️Label($payload),
                'ApiClients\Client\GitHub\Schema\WebhookIssueCommentCreated\Issue\Milestone' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssueCommentCreated⚡️Issue⚡️Milestone($payload),
                'ApiClients\Client\GitHub\Schema\WebhookIssueCommentEdited\Issue\PerformedViaGithubApp' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssueCommentEdited⚡️Issue⚡️PerformedViaGithubApp($payload),
                'ApiClients\Client\GitHub\Schema\WebhookIssueCommentEdited\Issue\PerformedViaGithubApp\Permissions' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssueCommentEdited⚡️Issue⚡️PerformedViaGithubApp⚡️Permissions($payload),
                'ApiClients\Client\GitHub\Schema\WebhookIssueCommentCreated\Issue\PullRequest' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssueCommentCreated⚡️Issue⚡️PullRequest($payload),
                'ApiClients\Client\GitHub\Schema\Discussion\Reactions' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Discussion⚡️Reactions($payload),
                'ApiClients\Client\GitHub\Schema\OrganizationSimple' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️OrganizationSimple($payload),
                'ApiClients\Client\GitHub\Schema\Repository' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Repository($payload),
                'ApiClients\Client\GitHub\Schema\Repository\Permissions' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Repository⚡️Permissions($payload),
                'ApiClients\Client\GitHub\Schema\SimpleUser' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($payload),
                'ApiClients\Client\GitHub\Schema\Repository\TemplateRepository' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Repository⚡️TemplateRepository($payload),
                'ApiClients\Client\GitHub\Schema\Repository\TemplateRepository\Owner' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Repository⚡️TemplateRepository⚡️Owner($payload),
                'ApiClients\Client\GitHub\Schema\Repository\TemplateRepository\Permissions' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Repository⚡️TemplateRepository⚡️Permissions($payload),
                'ApiClients\Client\GitHub\Schema\WebhookIssuesClosed' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesClosed($payload),
                'ApiClients\Client\GitHub\Schema\WebhookIssuesClosed\Issue' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesClosed⚡️Issue($payload),
                'ApiClients\Client\GitHub\Schema\WebhookIssuesClosed\Issue\PerformedViaGithubApp' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesClosed⚡️Issue⚡️PerformedViaGithubApp($payload),
                'ApiClients\Client\GitHub\Schema\WebhookIssuesDeleted' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesDeleted($payload),
                'ApiClients\Client\GitHub\Schema\WebhookIssuesDeleted\Issue' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesDeleted⚡️Issue($payload),
                'ApiClients\Client\GitHub\Schema\WebhookIssuesDeleted\Issue\Milestone' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesDeleted⚡️Issue⚡️Milestone($payload),
                'ApiClients\Client\GitHub\Schema\WebhookIssuesDeleted\Issue\PerformedViaGithubApp' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesDeleted⚡️Issue⚡️PerformedViaGithubApp($payload),
                'ApiClients\Client\GitHub\Schema\WebhookDeploymentCreated\Deployment\PerformedViaGithubApp\Permissions' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookDeploymentCreated⚡️Deployment⚡️PerformedViaGithubApp⚡️Permissions($payload),
                'ApiClients\Client\GitHub\Schema\WebhookIssuesDemilestoned' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesDemilestoned($payload),
                'ApiClients\Client\GitHub\Schema\WebhookIssuesDemilestoned\Issue' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesDemilestoned⚡️Issue($payload),
                'ApiClients\Client\GitHub\Schema\WebhookIssuesDemilestoned\Issue\PerformedViaGithubApp' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesDemilestoned⚡️Issue⚡️PerformedViaGithubApp($payload),
                'ApiClients\Client\GitHub\Schema\WebhookIssuesDemilestoned\Milestone' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesDemilestoned⚡️Milestone($payload),
                'ApiClients\Client\GitHub\Schema\WebhookIssuesEdited' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesEdited($payload),
                'ApiClients\Client\GitHub\Schema\WebhookIssuesEdited\Changes' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesEdited⚡️Changes($payload),
                'ApiClients\Client\GitHub\Schema\WebhookIssueCommentEdited\Changes\Body' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssueCommentEdited⚡️Changes⚡️Body($payload),
                'ApiClients\Client\GitHub\Schema\WebhookIssuesEdited\Changes\Title' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesEdited⚡️Changes⚡️Title($payload),
                'ApiClients\Client\GitHub\Schema\WebhookIssuesEdited\Issue' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesEdited⚡️Issue($payload),
                'ApiClients\Client\GitHub\Schema\WebhookIssuesEdited\Issue\PerformedViaGithubApp' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesEdited⚡️Issue⚡️PerformedViaGithubApp($payload),
                'ApiClients\Client\GitHub\Schema\WebhookIssuesLabeled' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesLabeled($payload),
                'ApiClients\Client\GitHub\Schema\WebhookIssuesLabeled\Issue' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesLabeled⚡️Issue($payload),
                'ApiClients\Client\GitHub\Schema\WebhookIssuesLabeled\Issue\PerformedViaGithubApp' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesLabeled⚡️Issue⚡️PerformedViaGithubApp($payload),
                'ApiClients\Client\GitHub\Schema\WebhookIssuesLocked' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesLocked($payload),
                'ApiClients\Client\GitHub\Schema\WebhookIssuesLocked\Issue' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesLocked⚡️Issue($payload),
                'ApiClients\Client\GitHub\Schema\WebhookIssuesLocked\Issue\PerformedViaGithubApp' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesLocked⚡️Issue⚡️PerformedViaGithubApp($payload),
                'ApiClients\Client\GitHub\Schema\WebhookIssuesMilestoned' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesMilestoned($payload),
                'ApiClients\Client\GitHub\Schema\WebhookIssuesMilestoned\Issue' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesMilestoned⚡️Issue($payload),
                'ApiClients\Client\GitHub\Schema\WebhookIssuesMilestoned\Issue\PerformedViaGithubApp' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesMilestoned⚡️Issue⚡️PerformedViaGithubApp($payload),
                'ApiClients\Client\GitHub\Schema\WebhookIssuesOpened' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesOpened($payload),
                'ApiClients\Client\GitHub\Schema\WebhookIssuesOpened\Changes' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesOpened⚡️Changes($payload),
                'ApiClients\Client\GitHub\Schema\WebhookIssuesOpened\Changes\OldIssue' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesOpened⚡️Changes⚡️OldIssue($payload),
                'ApiClients\Client\GitHub\Schema\WebhookIssueCommentDeleted\Issue\PerformedViaGithubApp' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssueCommentDeleted⚡️Issue⚡️PerformedViaGithubApp($payload),
                'ApiClients\Client\GitHub\Schema\WebhookIssuesOpened\Changes\OldRepository' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesOpened⚡️Changes⚡️OldRepository($payload),
                'ApiClients\Client\GitHub\Schema\WebhookFork\Forkee\License' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookFork⚡️Forkee⚡️License($payload),
                'ApiClients\Client\GitHub\Schema\WebhookFork\Forkee\Permissions' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookFork⚡️Forkee⚡️Permissions($payload),
                'ApiClients\Client\GitHub\Schema\WebhookIssuesOpened\Issue' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesOpened⚡️Issue($payload),
                'ApiClients\Client\GitHub\Schema\WebhookIssuesPinned' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesPinned($payload),
                'ApiClients\Client\GitHub\Schema\WebhookIssuesPinned\Issue' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesPinned⚡️Issue($payload),
                'ApiClients\Client\GitHub\Schema\WebhookIssuesReopened' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesReopened($payload),
                'ApiClients\Client\GitHub\Schema\WebhookIssuesReopened\Issue' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesReopened⚡️Issue($payload),
                'ApiClients\Client\GitHub\Schema\WebhookIssuesReopened\Issue\PerformedViaGithubApp' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesReopened⚡️Issue⚡️PerformedViaGithubApp($payload),
                'ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted\CheckSuite\App\Permissions' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteCompleted⚡️CheckSuite⚡️App⚡️Permissions($payload),
                'ApiClients\Client\GitHub\Schema\WebhookIssuesTransferred' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesTransferred($payload),
                'ApiClients\Client\GitHub\Schema\WebhookIssuesTransferred\Changes' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesTransferred⚡️Changes($payload),
                'ApiClients\Client\GitHub\Schema\WebhookIssuesTransferred\Changes\NewRepository' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesTransferred⚡️Changes⚡️NewRepository($payload),
                'ApiClients\Client\GitHub\Schema\WebhookIssuesUnassigned' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesUnassigned($payload),
                'ApiClients\Client\GitHub\Schema\WebhookIssuesUnlabeled' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesUnlabeled($payload),
                'ApiClients\Client\GitHub\Schema\WebhookIssuesUnlocked' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesUnlocked($payload),
                'ApiClients\Client\GitHub\Schema\WebhookIssuesUnpinned' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesUnpinned($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesAssigned(array $payload): \ApiClients\Client\GitHub\Schema\WebhookIssuesAssigned
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

            $value = $payload['assignee'] ?? null;

            if ($value === null) {
                $properties['assignee'] = null;
                goto after_assignee;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'assignee';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Discussion⚡️AnswerChosenBy($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['assignee'] = $value;

            after_assignee:

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

            $value = $payload['issue'] ?? null;

            if ($value === null) {
                $missingFields[] = 'issue';
                goto after_issue;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'issue';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssueCommentEdited⚡️Issue($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['issue'] = $value;

            after_issue:

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
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookIssuesAssigned', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookIssuesAssigned::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WebhookIssuesAssigned(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookIssuesAssigned', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Discussion⚡️AnswerChosenBy(array $payload): \ApiClients\Client\GitHub\Schema\Discussion\AnswerChosenBy
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['avatar_url'] ?? null;

            if ($value === null) {
                $properties['avatarUrl'] = null;
                goto after_avatarUrl;
            }

            $properties['avatarUrl'] = $value;

            after_avatarUrl:

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
                $properties['eventsUrl'] = null;
                goto after_eventsUrl;
            }

            $properties['eventsUrl'] = $value;

            after_eventsUrl:

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

            $value = $payload['gravatar_id'] ?? null;

            if ($value === null) {
                $properties['gravatarId'] = null;
                goto after_gravatarId;
            }

            $properties['gravatarId'] = $value;

            after_gravatarId:

            $value = $payload['html_url'] ?? null;

            if ($value === null) {
                $properties['htmlUrl'] = null;
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
                $properties['nodeId'] = null;
                goto after_nodeId;
            }

            $properties['nodeId'] = $value;

            after_nodeId:

            $value = $payload['organizations_url'] ?? null;

            if ($value === null) {
                $properties['organizationsUrl'] = null;
                goto after_organizationsUrl;
            }

            $properties['organizationsUrl'] = $value;

            after_organizationsUrl:

            $value = $payload['received_events_url'] ?? null;

            if ($value === null) {
                $properties['receivedEventsUrl'] = null;
                goto after_receivedEventsUrl;
            }

            $properties['receivedEventsUrl'] = $value;

            after_receivedEventsUrl:

            $value = $payload['repos_url'] ?? null;

            if ($value === null) {
                $properties['reposUrl'] = null;
                goto after_reposUrl;
            }

            $properties['reposUrl'] = $value;

            after_reposUrl:

            $value = $payload['site_admin'] ?? null;

            if ($value === null) {
                $properties['siteAdmin'] = null;
                goto after_siteAdmin;
            }

            $properties['siteAdmin'] = $value;

            after_siteAdmin:

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

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssueCommentEdited⚡️Issue(array $payload): \ApiClients\Client\GitHub\Schema\WebhookIssueCommentEdited\Issue
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['active_lock_reason'] ?? null;

            if ($value === null) {
                $properties['activeLockReason'] = null;
                goto after_activeLockReason;
            }

            $properties['activeLockReason'] = $value;

            after_activeLockReason:

            $value = $payload['assignee'] ?? null;

            if ($value === null) {
                $properties['assignee'] = null;
                goto after_assignee;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'assignee';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssueCommentCreated⚡️Issue⚡️Assignee($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['assignee'] = $value;

            after_assignee:

            $value = $payload['assignees'] ?? null;

            if ($value === null) {
                $missingFields[] = 'assignees';
                goto after_assignees;
            }

            static $assigneesCaster1;

            if ($assigneesCaster1 === null) {
                $assigneesCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\WebhookIssueCommentCreated\\Issue\\Assignee',
));
            }

            $value = $assigneesCaster1->cast($value, $this);

            $properties['assignees'] = $value;

            after_assignees:

            $value = $payload['author_association'] ?? null;

            if ($value === null) {
                $missingFields[] = 'author_association';
                goto after_authorAssociation;
            }

            $properties['authorAssociation'] = $value;

            after_authorAssociation:

            $value = $payload['body'] ?? null;

            if ($value === null) {
                $properties['body'] = null;
                goto after_body;
            }

            $properties['body'] = $value;

            after_body:

            $value = $payload['closed_at'] ?? null;

            if ($value === null) {
                $properties['closedAt'] = null;
                goto after_closedAt;
            }

            $properties['closedAt'] = $value;

            after_closedAt:

            $value = $payload['comments'] ?? null;

            if ($value === null) {
                $missingFields[] = 'comments';
                goto after_comments;
            }

            $properties['comments'] = $value;

            after_comments:

            $value = $payload['comments_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'comments_url';
                goto after_commentsUrl;
            }

            $properties['commentsUrl'] = $value;

            after_commentsUrl:

            $value = $payload['created_at'] ?? null;

            if ($value === null) {
                $missingFields[] = 'created_at';
                goto after_createdAt;
            }

            $properties['createdAt'] = $value;

            after_createdAt:

            $value = $payload['draft'] ?? null;

            if ($value === null) {
                $properties['draft'] = null;
                goto after_draft;
            }

            $properties['draft'] = $value;

            after_draft:

            $value = $payload['events_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'events_url';
                goto after_eventsUrl;
            }

            $properties['eventsUrl'] = $value;

            after_eventsUrl:

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
                $properties['labels'] = null;
                goto after_labels;
            }

            static $labelsCaster1;

            if ($labelsCaster1 === null) {
                $labelsCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionLabeled\\Label',
));
            }

            $value = $labelsCaster1->cast($value, $this);

            $properties['labels'] = $value;

            after_labels:

            $value = $payload['labels_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'labels_url';
                goto after_labelsUrl;
            }

            $properties['labelsUrl'] = $value;

            after_labelsUrl:

            $value = $payload['locked'] ?? null;

            if ($value === null) {
                $properties['locked'] = null;
                goto after_locked;
            }

            $properties['locked'] = $value;

            after_locked:

            $value = $payload['milestone'] ?? null;

            if ($value === null) {
                $properties['milestone'] = null;
                goto after_milestone;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'milestone';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssueCommentCreated⚡️Issue⚡️Milestone($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['milestone'] = $value;

            after_milestone:

            $value = $payload['node_id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'node_id';
                goto after_nodeId;
            }

            $properties['nodeId'] = $value;

            after_nodeId:

            $value = $payload['number'] ?? null;

            if ($value === null) {
                $missingFields[] = 'number';
                goto after_number;
            }

            $properties['number'] = $value;

            after_number:

            $value = $payload['performed_via_github_app'] ?? null;

            if ($value === null) {
                $properties['performedViaGithubApp'] = null;
                goto after_performedViaGithubApp;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'performedViaGithubApp';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssueCommentEdited⚡️Issue⚡️PerformedViaGithubApp($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['performedViaGithubApp'] = $value;

            after_performedViaGithubApp:

            $value = $payload['pull_request'] ?? null;

            if ($value === null) {
                $properties['pullRequest'] = null;
                goto after_pullRequest;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'pullRequest';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssueCommentCreated⚡️Issue⚡️PullRequest($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['pullRequest'] = $value;

            after_pullRequest:

            $value = $payload['reactions'] ?? null;

            if ($value === null) {
                $missingFields[] = 'reactions';
                goto after_reactions;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'reactions';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Discussion⚡️Reactions($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['reactions'] = $value;

            after_reactions:

            $value = $payload['repository_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'repository_url';
                goto after_repositoryUrl;
            }

            $properties['repositoryUrl'] = $value;

            after_repositoryUrl:

            $value = $payload['state'] ?? null;

            if ($value === null) {
                $properties['state'] = null;
                goto after_state;
            }

            $properties['state'] = $value;

            after_state:

            $value = $payload['state_reason'] ?? null;

            if ($value === null) {
                $properties['stateReason'] = null;
                goto after_stateReason;
            }

            $properties['stateReason'] = $value;

            after_stateReason:

            $value = $payload['timeline_url'] ?? null;

            if ($value === null) {
                $properties['timelineUrl'] = null;
                goto after_timelineUrl;
            }

            $properties['timelineUrl'] = $value;

            after_timelineUrl:

            $value = $payload['title'] ?? null;

            if ($value === null) {
                $missingFields[] = 'title';
                goto after_title;
            }

            $properties['title'] = $value;

            after_title:

            $value = $payload['updated_at'] ?? null;

            if ($value === null) {
                $missingFields[] = 'updated_at';
                goto after_updatedAt;
            }

            $properties['updatedAt'] = $value;

            after_updatedAt:

            $value = $payload['url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'url';
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

            $value = $payload['user'] ?? null;

            if ($value === null) {
                $properties['user'] = null;
                goto after_user;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'user';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssueCommentCreated⚡️Issue⚡️Assignee($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['user'] = $value;

            after_user:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookIssueCommentEdited\Issue', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookIssueCommentEdited\Issue::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WebhookIssueCommentEdited\Issue(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookIssueCommentEdited\Issue', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssueCommentCreated⚡️Issue⚡️Assignee(array $payload): \ApiClients\Client\GitHub\Schema\WebhookIssueCommentCreated\Issue\Assignee
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['avatar_url'] ?? null;

            if ($value === null) {
                $properties['avatarUrl'] = null;
                goto after_avatarUrl;
            }

            $properties['avatarUrl'] = $value;

            after_avatarUrl:

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
                $properties['eventsUrl'] = null;
                goto after_eventsUrl;
            }

            $properties['eventsUrl'] = $value;

            after_eventsUrl:

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

            $value = $payload['gravatar_id'] ?? null;

            if ($value === null) {
                $properties['gravatarId'] = null;
                goto after_gravatarId;
            }

            $properties['gravatarId'] = $value;

            after_gravatarId:

            $value = $payload['html_url'] ?? null;

            if ($value === null) {
                $properties['htmlUrl'] = null;
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
                $properties['nodeId'] = null;
                goto after_nodeId;
            }

            $properties['nodeId'] = $value;

            after_nodeId:

            $value = $payload['organizations_url'] ?? null;

            if ($value === null) {
                $properties['organizationsUrl'] = null;
                goto after_organizationsUrl;
            }

            $properties['organizationsUrl'] = $value;

            after_organizationsUrl:

            $value = $payload['received_events_url'] ?? null;

            if ($value === null) {
                $properties['receivedEventsUrl'] = null;
                goto after_receivedEventsUrl;
            }

            $properties['receivedEventsUrl'] = $value;

            after_receivedEventsUrl:

            $value = $payload['repos_url'] ?? null;

            if ($value === null) {
                $properties['reposUrl'] = null;
                goto after_reposUrl;
            }

            $properties['reposUrl'] = $value;

            after_reposUrl:

            $value = $payload['site_admin'] ?? null;

            if ($value === null) {
                $properties['siteAdmin'] = null;
                goto after_siteAdmin;
            }

            $properties['siteAdmin'] = $value;

            after_siteAdmin:

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
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookIssueCommentCreated\Issue\Assignee', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookIssueCommentCreated\Issue\Assignee::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WebhookIssueCommentCreated\Issue\Assignee(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookIssueCommentCreated\Issue\Assignee', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookDiscussionLabeled⚡️Label(array $payload): \ApiClients\Client\GitHub\Schema\WebhookDiscussionLabeled\Label
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['color'] ?? null;

            if ($value === null) {
                $missingFields[] = 'color';
                goto after_color;
            }

            $properties['color'] = $value;

            after_color:

            $value = $payload['default'] ?? null;

            if ($value === null) {
                $missingFields[] = 'default';
                goto after_default;
            }

            $properties['default'] = $value;

            after_default:

            $value = $payload['description'] ?? null;

            if ($value === null) {
                $properties['description'] = null;
                goto after_description;
            }

            $properties['description'] = $value;

            after_description:

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

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookDiscussionLabeled\Label', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookDiscussionLabeled\Label::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WebhookDiscussionLabeled\Label(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookDiscussionLabeled\Label', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssueCommentCreated⚡️Issue⚡️Milestone(array $payload): \ApiClients\Client\GitHub\Schema\WebhookIssueCommentCreated\Issue\Milestone
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['closed_at'] ?? null;

            if ($value === null) {
                $properties['closedAt'] = null;
                goto after_closedAt;
            }

            $properties['closedAt'] = $value;

            after_closedAt:

            $value = $payload['closed_issues'] ?? null;

            if ($value === null) {
                $missingFields[] = 'closed_issues';
                goto after_closedIssues;
            }

            $properties['closedIssues'] = $value;

            after_closedIssues:

            $value = $payload['created_at'] ?? null;

            if ($value === null) {
                $missingFields[] = 'created_at';
                goto after_createdAt;
            }

            $properties['createdAt'] = $value;

            after_createdAt:

            $value = $payload['creator'] ?? null;

            if ($value === null) {
                $properties['creator'] = null;
                goto after_creator;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'creator';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssueCommentCreated⚡️Issue⚡️Assignee($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['creator'] = $value;

            after_creator:

            $value = $payload['description'] ?? null;

            if ($value === null) {
                $properties['description'] = null;
                goto after_description;
            }

            $properties['description'] = $value;

            after_description:

            $value = $payload['due_on'] ?? null;

            if ($value === null) {
                $properties['dueOn'] = null;
                goto after_dueOn;
            }

            $properties['dueOn'] = $value;

            after_dueOn:

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

            $value = $payload['labels_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'labels_url';
                goto after_labelsUrl;
            }

            $properties['labelsUrl'] = $value;

            after_labelsUrl:

            $value = $payload['node_id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'node_id';
                goto after_nodeId;
            }

            $properties['nodeId'] = $value;

            after_nodeId:

            $value = $payload['number'] ?? null;

            if ($value === null) {
                $missingFields[] = 'number';
                goto after_number;
            }

            $properties['number'] = $value;

            after_number:

            $value = $payload['open_issues'] ?? null;

            if ($value === null) {
                $missingFields[] = 'open_issues';
                goto after_openIssues;
            }

            $properties['openIssues'] = $value;

            after_openIssues:

            $value = $payload['state'] ?? null;

            if ($value === null) {
                $missingFields[] = 'state';
                goto after_state;
            }

            $properties['state'] = $value;

            after_state:

            $value = $payload['title'] ?? null;

            if ($value === null) {
                $missingFields[] = 'title';
                goto after_title;
            }

            $properties['title'] = $value;

            after_title:

            $value = $payload['updated_at'] ?? null;

            if ($value === null) {
                $missingFields[] = 'updated_at';
                goto after_updatedAt;
            }

            $properties['updatedAt'] = $value;

            after_updatedAt:

            $value = $payload['url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'url';
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookIssueCommentCreated\Issue\Milestone', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookIssueCommentCreated\Issue\Milestone::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WebhookIssueCommentCreated\Issue\Milestone(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookIssueCommentCreated\Issue\Milestone', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssueCommentEdited⚡️Issue⚡️PerformedViaGithubApp(array $payload): \ApiClients\Client\GitHub\Schema\WebhookIssueCommentEdited\Issue\PerformedViaGithubApp
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['created_at'] ?? null;

            if ($value === null) {
                $properties['createdAt'] = null;
                goto after_createdAt;
            }

            $properties['createdAt'] = $value;

            after_createdAt:

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
                $properties['externalUrl'] = null;
                goto after_externalUrl;
            }

            $properties['externalUrl'] = $value;

            after_externalUrl:

            $value = $payload['html_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'html_url';
                goto after_htmlUrl;
            }

            $properties['htmlUrl'] = $value;

            after_htmlUrl:

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
                goto after_nodeId;
            }

            $properties['nodeId'] = $value;

            after_nodeId:

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
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssueCommentEdited⚡️Issue⚡️PerformedViaGithubApp⚡️Permissions($value);
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
                $properties['updatedAt'] = null;
                goto after_updatedAt;
            }

            $properties['updatedAt'] = $value;

            after_updatedAt:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookIssueCommentEdited\Issue\PerformedViaGithubApp', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookIssueCommentEdited\Issue\PerformedViaGithubApp::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WebhookIssueCommentEdited\Issue\PerformedViaGithubApp(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookIssueCommentEdited\Issue\PerformedViaGithubApp', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssueCommentEdited⚡️Issue⚡️PerformedViaGithubApp⚡️Permissions(array $payload): \ApiClients\Client\GitHub\Schema\WebhookIssueCommentEdited\Issue\PerformedViaGithubApp\Permissions
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
                $properties['contentReferences'] = null;
                goto after_contentReferences;
            }

            $properties['contentReferences'] = $value;

            after_contentReferences:

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
                $properties['organizationAdministration'] = null;
                goto after_organizationAdministration;
            }

            $properties['organizationAdministration'] = $value;

            after_organizationAdministration:

            $value = $payload['organization_hooks'] ?? null;

            if ($value === null) {
                $properties['organizationHooks'] = null;
                goto after_organizationHooks;
            }

            $properties['organizationHooks'] = $value;

            after_organizationHooks:

            $value = $payload['organization_packages'] ?? null;

            if ($value === null) {
                $properties['organizationPackages'] = null;
                goto after_organizationPackages;
            }

            $properties['organizationPackages'] = $value;

            after_organizationPackages:

            $value = $payload['organization_plan'] ?? null;

            if ($value === null) {
                $properties['organizationPlan'] = null;
                goto after_organizationPlan;
            }

            $properties['organizationPlan'] = $value;

            after_organizationPlan:

            $value = $payload['organization_projects'] ?? null;

            if ($value === null) {
                $properties['organizationProjects'] = null;
                goto after_organizationProjects;
            }

            $properties['organizationProjects'] = $value;

            after_organizationProjects:

            $value = $payload['organization_secrets'] ?? null;

            if ($value === null) {
                $properties['organizationSecrets'] = null;
                goto after_organizationSecrets;
            }

            $properties['organizationSecrets'] = $value;

            after_organizationSecrets:

            $value = $payload['organization_self_hosted_runners'] ?? null;

            if ($value === null) {
                $properties['organizationSelfHostedRunners'] = null;
                goto after_organizationSelfHostedRunners;
            }

            $properties['organizationSelfHostedRunners'] = $value;

            after_organizationSelfHostedRunners:

            $value = $payload['organization_user_blocking'] ?? null;

            if ($value === null) {
                $properties['organizationUserBlocking'] = null;
                goto after_organizationUserBlocking;
            }

            $properties['organizationUserBlocking'] = $value;

            after_organizationUserBlocking:

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
                $properties['pullRequests'] = null;
                goto after_pullRequests;
            }

            $properties['pullRequests'] = $value;

            after_pullRequests:

            $value = $payload['repository_hooks'] ?? null;

            if ($value === null) {
                $properties['repositoryHooks'] = null;
                goto after_repositoryHooks;
            }

            $properties['repositoryHooks'] = $value;

            after_repositoryHooks:

            $value = $payload['repository_projects'] ?? null;

            if ($value === null) {
                $properties['repositoryProjects'] = null;
                goto after_repositoryProjects;
            }

            $properties['repositoryProjects'] = $value;

            after_repositoryProjects:

            $value = $payload['secret_scanning_alerts'] ?? null;

            if ($value === null) {
                $properties['secretScanningAlerts'] = null;
                goto after_secretScanningAlerts;
            }

            $properties['secretScanningAlerts'] = $value;

            after_secretScanningAlerts:

            $value = $payload['secrets'] ?? null;

            if ($value === null) {
                $properties['secrets'] = null;
                goto after_secrets;
            }

            $properties['secrets'] = $value;

            after_secrets:

            $value = $payload['security_events'] ?? null;

            if ($value === null) {
                $properties['securityEvents'] = null;
                goto after_securityEvents;
            }

            $properties['securityEvents'] = $value;

            after_securityEvents:

            $value = $payload['security_scanning_alert'] ?? null;

            if ($value === null) {
                $properties['securityScanningAlert'] = null;
                goto after_securityScanningAlert;
            }

            $properties['securityScanningAlert'] = $value;

            after_securityScanningAlert:

            $value = $payload['single_file'] ?? null;

            if ($value === null) {
                $properties['singleFile'] = null;
                goto after_singleFile;
            }

            $properties['singleFile'] = $value;

            after_singleFile:

            $value = $payload['statuses'] ?? null;

            if ($value === null) {
                $properties['statuses'] = null;
                goto after_statuses;
            }

            $properties['statuses'] = $value;

            after_statuses:

            $value = $payload['team_discussions'] ?? null;

            if ($value === null) {
                $properties['teamDiscussions'] = null;
                goto after_teamDiscussions;
            }

            $properties['teamDiscussions'] = $value;

            after_teamDiscussions:

            $value = $payload['vulnerability_alerts'] ?? null;

            if ($value === null) {
                $properties['vulnerabilityAlerts'] = null;
                goto after_vulnerabilityAlerts;
            }

            $properties['vulnerabilityAlerts'] = $value;

            after_vulnerabilityAlerts:

            $value = $payload['workflows'] ?? null;

            if ($value === null) {
                $properties['workflows'] = null;
                goto after_workflows;
            }

            $properties['workflows'] = $value;

            after_workflows:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookIssueCommentEdited\Issue\PerformedViaGithubApp\Permissions', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookIssueCommentEdited\Issue\PerformedViaGithubApp\Permissions::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WebhookIssueCommentEdited\Issue\PerformedViaGithubApp\Permissions(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookIssueCommentEdited\Issue\PerformedViaGithubApp\Permissions', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssueCommentCreated⚡️Issue⚡️PullRequest(array $payload): \ApiClients\Client\GitHub\Schema\WebhookIssueCommentCreated\Issue\PullRequest
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['diff_url'] ?? null;

            if ($value === null) {
                $properties['diffUrl'] = null;
                goto after_diffUrl;
            }

            $properties['diffUrl'] = $value;

            after_diffUrl:

            $value = $payload['html_url'] ?? null;

            if ($value === null) {
                $properties['htmlUrl'] = null;
                goto after_htmlUrl;
            }

            $properties['htmlUrl'] = $value;

            after_htmlUrl:

            $value = $payload['merged_at'] ?? null;

            if ($value === null) {
                $properties['mergedAt'] = null;
                goto after_mergedAt;
            }

            $properties['mergedAt'] = $value;

            after_mergedAt:

            $value = $payload['patch_url'] ?? null;

            if ($value === null) {
                $properties['patchUrl'] = null;
                goto after_patchUrl;
            }

            $properties['patchUrl'] = $value;

            after_patchUrl:

            $value = $payload['url'] ?? null;

            if ($value === null) {
                $properties['url'] = null;
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookIssueCommentCreated\Issue\PullRequest', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookIssueCommentCreated\Issue\PullRequest::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WebhookIssueCommentCreated\Issue\PullRequest(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookIssueCommentCreated\Issue\PullRequest', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Discussion⚡️Reactions(array $payload): \ApiClients\Client\GitHub\Schema\Discussion\Reactions
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['_PLUSES_1'] ?? null;

            if ($value === null) {
                $missingFields[] = '_PLUSES_1';
                goto after_pluses1;
            }

            $properties['pluses1'] = $value;

            after_pluses1:

            $value = $payload['_MINUS_1'] ?? null;

            if ($value === null) {
                $missingFields[] = '_MINUS_1';
                goto after_minus1;
            }

            $properties['minus1'] = $value;

            after_minus1:

            $value = $payload['confused'] ?? null;

            if ($value === null) {
                $missingFields[] = 'confused';
                goto after_confused;
            }

            $properties['confused'] = $value;

            after_confused:

            $value = $payload['eyes'] ?? null;

            if ($value === null) {
                $missingFields[] = 'eyes';
                goto after_eyes;
            }

            $properties['eyes'] = $value;

            after_eyes:

            $value = $payload['heart'] ?? null;

            if ($value === null) {
                $missingFields[] = 'heart';
                goto after_heart;
            }

            $properties['heart'] = $value;

            after_heart:

            $value = $payload['hooray'] ?? null;

            if ($value === null) {
                $missingFields[] = 'hooray';
                goto after_hooray;
            }

            $properties['hooray'] = $value;

            after_hooray:

            $value = $payload['laugh'] ?? null;

            if ($value === null) {
                $missingFields[] = 'laugh';
                goto after_laugh;
            }

            $properties['laugh'] = $value;

            after_laugh:

            $value = $payload['rocket'] ?? null;

            if ($value === null) {
                $missingFields[] = 'rocket';
                goto after_rocket;
            }

            $properties['rocket'] = $value;

            after_rocket:

            $value = $payload['total_count'] ?? null;

            if ($value === null) {
                $missingFields[] = 'total_count';
                goto after_totalCount;
            }

            $properties['totalCount'] = $value;

            after_totalCount:

            $value = $payload['url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'url';
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Discussion\Reactions', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\Discussion\Reactions::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\Discussion\Reactions(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Discussion\Reactions', $exception, stack: $this->hydrationStack);
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

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesClosed(array $payload): \ApiClients\Client\GitHub\Schema\WebhookIssuesClosed
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

            $value = $payload['issue'] ?? null;

            if ($value === null) {
                $missingFields[] = 'issue';
                goto after_issue;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'issue';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesClosed⚡️Issue($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['issue'] = $value;

            after_issue:

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
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookIssuesClosed', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookIssuesClosed::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WebhookIssuesClosed(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookIssuesClosed', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesClosed⚡️Issue(array $payload): \ApiClients\Client\GitHub\Schema\WebhookIssuesClosed\Issue
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['active_lock_reason'] ?? null;

            if ($value === null) {
                $properties['activeLockReason'] = null;
                goto after_activeLockReason;
            }

            $properties['activeLockReason'] = $value;

            after_activeLockReason:

            $value = $payload['assignee'] ?? null;

            if ($value === null) {
                $properties['assignee'] = null;
                goto after_assignee;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'assignee';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssueCommentCreated⚡️Issue⚡️Assignee($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['assignee'] = $value;

            after_assignee:

            $value = $payload['assignees'] ?? null;

            if ($value === null) {
                $missingFields[] = 'assignees';
                goto after_assignees;
            }

            static $assigneesCaster1;

            if ($assigneesCaster1 === null) {
                $assigneesCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\WebhookIssueCommentCreated\\Issue\\Assignee',
));
            }

            $value = $assigneesCaster1->cast($value, $this);

            $properties['assignees'] = $value;

            after_assignees:

            $value = $payload['author_association'] ?? null;

            if ($value === null) {
                $missingFields[] = 'author_association';
                goto after_authorAssociation;
            }

            $properties['authorAssociation'] = $value;

            after_authorAssociation:

            $value = $payload['body'] ?? null;

            if ($value === null) {
                $properties['body'] = null;
                goto after_body;
            }

            $properties['body'] = $value;

            after_body:

            $value = $payload['closed_at'] ?? null;

            if ($value === null) {
                $properties['closedAt'] = null;
                goto after_closedAt;
            }

            $properties['closedAt'] = $value;

            after_closedAt:

            $value = $payload['comments'] ?? null;

            if ($value === null) {
                $missingFields[] = 'comments';
                goto after_comments;
            }

            $properties['comments'] = $value;

            after_comments:

            $value = $payload['comments_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'comments_url';
                goto after_commentsUrl;
            }

            $properties['commentsUrl'] = $value;

            after_commentsUrl:

            $value = $payload['created_at'] ?? null;

            if ($value === null) {
                $missingFields[] = 'created_at';
                goto after_createdAt;
            }

            $properties['createdAt'] = $value;

            after_createdAt:

            $value = $payload['draft'] ?? null;

            if ($value === null) {
                $properties['draft'] = null;
                goto after_draft;
            }

            $properties['draft'] = $value;

            after_draft:

            $value = $payload['events_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'events_url';
                goto after_eventsUrl;
            }

            $properties['eventsUrl'] = $value;

            after_eventsUrl:

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
                $properties['labels'] = null;
                goto after_labels;
            }

            static $labelsCaster1;

            if ($labelsCaster1 === null) {
                $labelsCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionLabeled\\Label',
));
            }

            $value = $labelsCaster1->cast($value, $this);

            $properties['labels'] = $value;

            after_labels:

            $value = $payload['labels_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'labels_url';
                goto after_labelsUrl;
            }

            $properties['labelsUrl'] = $value;

            after_labelsUrl:

            $value = $payload['locked'] ?? null;

            if ($value === null) {
                $properties['locked'] = null;
                goto after_locked;
            }

            $properties['locked'] = $value;

            after_locked:

            $value = $payload['milestone'] ?? null;

            if ($value === null) {
                $properties['milestone'] = null;
                goto after_milestone;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'milestone';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssueCommentCreated⚡️Issue⚡️Milestone($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['milestone'] = $value;

            after_milestone:

            $value = $payload['node_id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'node_id';
                goto after_nodeId;
            }

            $properties['nodeId'] = $value;

            after_nodeId:

            $value = $payload['number'] ?? null;

            if ($value === null) {
                $missingFields[] = 'number';
                goto after_number;
            }

            $properties['number'] = $value;

            after_number:

            $value = $payload['performed_via_github_app'] ?? null;

            if ($value === null) {
                $properties['performedViaGithubApp'] = null;
                goto after_performedViaGithubApp;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'performedViaGithubApp';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesClosed⚡️Issue⚡️PerformedViaGithubApp($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['performedViaGithubApp'] = $value;

            after_performedViaGithubApp:

            $value = $payload['pull_request'] ?? null;

            if ($value === null) {
                $properties['pullRequest'] = null;
                goto after_pullRequest;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'pullRequest';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssueCommentCreated⚡️Issue⚡️PullRequest($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['pullRequest'] = $value;

            after_pullRequest:

            $value = $payload['reactions'] ?? null;

            if ($value === null) {
                $missingFields[] = 'reactions';
                goto after_reactions;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'reactions';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Discussion⚡️Reactions($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['reactions'] = $value;

            after_reactions:

            $value = $payload['repository_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'repository_url';
                goto after_repositoryUrl;
            }

            $properties['repositoryUrl'] = $value;

            after_repositoryUrl:

            $value = $payload['state'] ?? null;

            if ($value === null) {
                $properties['state'] = null;
                goto after_state;
            }

            $properties['state'] = $value;

            after_state:

            $value = $payload['state_reason'] ?? null;

            if ($value === null) {
                $properties['stateReason'] = null;
                goto after_stateReason;
            }

            $properties['stateReason'] = $value;

            after_stateReason:

            $value = $payload['timeline_url'] ?? null;

            if ($value === null) {
                $properties['timelineUrl'] = null;
                goto after_timelineUrl;
            }

            $properties['timelineUrl'] = $value;

            after_timelineUrl:

            $value = $payload['title'] ?? null;

            if ($value === null) {
                $missingFields[] = 'title';
                goto after_title;
            }

            $properties['title'] = $value;

            after_title:

            $value = $payload['updated_at'] ?? null;

            if ($value === null) {
                $missingFields[] = 'updated_at';
                goto after_updatedAt;
            }

            $properties['updatedAt'] = $value;

            after_updatedAt:

            $value = $payload['url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'url';
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

            $value = $payload['user'] ?? null;

            if ($value === null) {
                $properties['user'] = null;
                goto after_user;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'user';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssueCommentCreated⚡️Issue⚡️Assignee($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['user'] = $value;

            after_user:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookIssuesClosed\Issue', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookIssuesClosed\Issue::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WebhookIssuesClosed\Issue(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookIssuesClosed\Issue', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesClosed⚡️Issue⚡️PerformedViaGithubApp(array $payload): \ApiClients\Client\GitHub\Schema\WebhookIssuesClosed\Issue\PerformedViaGithubApp
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['created_at'] ?? null;

            if ($value === null) {
                $properties['createdAt'] = null;
                goto after_createdAt;
            }

            $properties['createdAt'] = $value;

            after_createdAt:

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
                $properties['externalUrl'] = null;
                goto after_externalUrl;
            }

            $properties['externalUrl'] = $value;

            after_externalUrl:

            $value = $payload['html_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'html_url';
                goto after_htmlUrl;
            }

            $properties['htmlUrl'] = $value;

            after_htmlUrl:

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
                goto after_nodeId;
            }

            $properties['nodeId'] = $value;

            after_nodeId:

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
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssueCommentEdited⚡️Issue⚡️PerformedViaGithubApp⚡️Permissions($value);
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
                $properties['updatedAt'] = null;
                goto after_updatedAt;
            }

            $properties['updatedAt'] = $value;

            after_updatedAt:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookIssuesClosed\Issue\PerformedViaGithubApp', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookIssuesClosed\Issue\PerformedViaGithubApp::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WebhookIssuesClosed\Issue\PerformedViaGithubApp(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookIssuesClosed\Issue\PerformedViaGithubApp', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesDeleted(array $payload): \ApiClients\Client\GitHub\Schema\WebhookIssuesDeleted
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

            $value = $payload['issue'] ?? null;

            if ($value === null) {
                $missingFields[] = 'issue';
                goto after_issue;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'issue';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesDeleted⚡️Issue($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['issue'] = $value;

            after_issue:

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
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookIssuesDeleted', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookIssuesDeleted::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WebhookIssuesDeleted(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookIssuesDeleted', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesDeleted⚡️Issue(array $payload): \ApiClients\Client\GitHub\Schema\WebhookIssuesDeleted\Issue
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['active_lock_reason'] ?? null;

            if ($value === null) {
                $properties['activeLockReason'] = null;
                goto after_activeLockReason;
            }

            $properties['activeLockReason'] = $value;

            after_activeLockReason:

            $value = $payload['assignee'] ?? null;

            if ($value === null) {
                $properties['assignee'] = null;
                goto after_assignee;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'assignee';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Discussion⚡️AnswerChosenBy($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['assignee'] = $value;

            after_assignee:

            $value = $payload['assignees'] ?? null;

            if ($value === null) {
                $missingFields[] = 'assignees';
                goto after_assignees;
            }

            static $assigneesCaster1;

            if ($assigneesCaster1 === null) {
                $assigneesCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\Discussion\\AnswerChosenBy',
));
            }

            $value = $assigneesCaster1->cast($value, $this);

            $properties['assignees'] = $value;

            after_assignees:

            $value = $payload['author_association'] ?? null;

            if ($value === null) {
                $missingFields[] = 'author_association';
                goto after_authorAssociation;
            }

            $properties['authorAssociation'] = $value;

            after_authorAssociation:

            $value = $payload['body'] ?? null;

            if ($value === null) {
                $properties['body'] = null;
                goto after_body;
            }

            $properties['body'] = $value;

            after_body:

            $value = $payload['closed_at'] ?? null;

            if ($value === null) {
                $properties['closedAt'] = null;
                goto after_closedAt;
            }

            $properties['closedAt'] = $value;

            after_closedAt:

            $value = $payload['comments'] ?? null;

            if ($value === null) {
                $missingFields[] = 'comments';
                goto after_comments;
            }

            $properties['comments'] = $value;

            after_comments:

            $value = $payload['comments_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'comments_url';
                goto after_commentsUrl;
            }

            $properties['commentsUrl'] = $value;

            after_commentsUrl:

            $value = $payload['created_at'] ?? null;

            if ($value === null) {
                $missingFields[] = 'created_at';
                goto after_createdAt;
            }

            $properties['createdAt'] = $value;

            after_createdAt:

            $value = $payload['draft'] ?? null;

            if ($value === null) {
                $properties['draft'] = null;
                goto after_draft;
            }

            $properties['draft'] = $value;

            after_draft:

            $value = $payload['events_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'events_url';
                goto after_eventsUrl;
            }

            $properties['eventsUrl'] = $value;

            after_eventsUrl:

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
                $properties['labels'] = null;
                goto after_labels;
            }

            static $labelsCaster1;

            if ($labelsCaster1 === null) {
                $labelsCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionLabeled\\Label',
));
            }

            $value = $labelsCaster1->cast($value, $this);

            $properties['labels'] = $value;

            after_labels:

            $value = $payload['labels_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'labels_url';
                goto after_labelsUrl;
            }

            $properties['labelsUrl'] = $value;

            after_labelsUrl:

            $value = $payload['locked'] ?? null;

            if ($value === null) {
                $properties['locked'] = null;
                goto after_locked;
            }

            $properties['locked'] = $value;

            after_locked:

            $value = $payload['milestone'] ?? null;

            if ($value === null) {
                $properties['milestone'] = null;
                goto after_milestone;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'milestone';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesDeleted⚡️Issue⚡️Milestone($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['milestone'] = $value;

            after_milestone:

            $value = $payload['node_id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'node_id';
                goto after_nodeId;
            }

            $properties['nodeId'] = $value;

            after_nodeId:

            $value = $payload['number'] ?? null;

            if ($value === null) {
                $missingFields[] = 'number';
                goto after_number;
            }

            $properties['number'] = $value;

            after_number:

            $value = $payload['performed_via_github_app'] ?? null;

            if ($value === null) {
                $properties['performedViaGithubApp'] = null;
                goto after_performedViaGithubApp;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'performedViaGithubApp';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesDeleted⚡️Issue⚡️PerformedViaGithubApp($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['performedViaGithubApp'] = $value;

            after_performedViaGithubApp:

            $value = $payload['pull_request'] ?? null;

            if ($value === null) {
                $properties['pullRequest'] = null;
                goto after_pullRequest;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'pullRequest';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssueCommentCreated⚡️Issue⚡️PullRequest($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['pullRequest'] = $value;

            after_pullRequest:

            $value = $payload['reactions'] ?? null;

            if ($value === null) {
                $missingFields[] = 'reactions';
                goto after_reactions;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'reactions';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Discussion⚡️Reactions($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['reactions'] = $value;

            after_reactions:

            $value = $payload['repository_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'repository_url';
                goto after_repositoryUrl;
            }

            $properties['repositoryUrl'] = $value;

            after_repositoryUrl:

            $value = $payload['state'] ?? null;

            if ($value === null) {
                $properties['state'] = null;
                goto after_state;
            }

            $properties['state'] = $value;

            after_state:

            $value = $payload['state_reason'] ?? null;

            if ($value === null) {
                $properties['stateReason'] = null;
                goto after_stateReason;
            }

            $properties['stateReason'] = $value;

            after_stateReason:

            $value = $payload['timeline_url'] ?? null;

            if ($value === null) {
                $properties['timelineUrl'] = null;
                goto after_timelineUrl;
            }

            $properties['timelineUrl'] = $value;

            after_timelineUrl:

            $value = $payload['title'] ?? null;

            if ($value === null) {
                $missingFields[] = 'title';
                goto after_title;
            }

            $properties['title'] = $value;

            after_title:

            $value = $payload['updated_at'] ?? null;

            if ($value === null) {
                $missingFields[] = 'updated_at';
                goto after_updatedAt;
            }

            $properties['updatedAt'] = $value;

            after_updatedAt:

            $value = $payload['url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'url';
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

            $value = $payload['user'] ?? null;

            if ($value === null) {
                $properties['user'] = null;
                goto after_user;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'user';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Discussion⚡️AnswerChosenBy($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['user'] = $value;

            after_user:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookIssuesDeleted\Issue', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookIssuesDeleted\Issue::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WebhookIssuesDeleted\Issue(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookIssuesDeleted\Issue', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesDeleted⚡️Issue⚡️Milestone(array $payload): \ApiClients\Client\GitHub\Schema\WebhookIssuesDeleted\Issue\Milestone
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['closed_at'] ?? null;

            if ($value === null) {
                $properties['closedAt'] = null;
                goto after_closedAt;
            }

            $properties['closedAt'] = $value;

            after_closedAt:

            $value = $payload['closed_issues'] ?? null;

            if ($value === null) {
                $missingFields[] = 'closed_issues';
                goto after_closedIssues;
            }

            $properties['closedIssues'] = $value;

            after_closedIssues:

            $value = $payload['created_at'] ?? null;

            if ($value === null) {
                $missingFields[] = 'created_at';
                goto after_createdAt;
            }

            $properties['createdAt'] = $value;

            after_createdAt:

            $value = $payload['creator'] ?? null;

            if ($value === null) {
                $properties['creator'] = null;
                goto after_creator;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'creator';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Discussion⚡️AnswerChosenBy($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['creator'] = $value;

            after_creator:

            $value = $payload['description'] ?? null;

            if ($value === null) {
                $properties['description'] = null;
                goto after_description;
            }

            $properties['description'] = $value;

            after_description:

            $value = $payload['due_on'] ?? null;

            if ($value === null) {
                $properties['dueOn'] = null;
                goto after_dueOn;
            }

            $properties['dueOn'] = $value;

            after_dueOn:

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

            $value = $payload['labels_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'labels_url';
                goto after_labelsUrl;
            }

            $properties['labelsUrl'] = $value;

            after_labelsUrl:

            $value = $payload['node_id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'node_id';
                goto after_nodeId;
            }

            $properties['nodeId'] = $value;

            after_nodeId:

            $value = $payload['number'] ?? null;

            if ($value === null) {
                $missingFields[] = 'number';
                goto after_number;
            }

            $properties['number'] = $value;

            after_number:

            $value = $payload['open_issues'] ?? null;

            if ($value === null) {
                $missingFields[] = 'open_issues';
                goto after_openIssues;
            }

            $properties['openIssues'] = $value;

            after_openIssues:

            $value = $payload['state'] ?? null;

            if ($value === null) {
                $missingFields[] = 'state';
                goto after_state;
            }

            $properties['state'] = $value;

            after_state:

            $value = $payload['title'] ?? null;

            if ($value === null) {
                $missingFields[] = 'title';
                goto after_title;
            }

            $properties['title'] = $value;

            after_title:

            $value = $payload['updated_at'] ?? null;

            if ($value === null) {
                $missingFields[] = 'updated_at';
                goto after_updatedAt;
            }

            $properties['updatedAt'] = $value;

            after_updatedAt:

            $value = $payload['url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'url';
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookIssuesDeleted\Issue\Milestone', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookIssuesDeleted\Issue\Milestone::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WebhookIssuesDeleted\Issue\Milestone(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookIssuesDeleted\Issue\Milestone', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesDeleted⚡️Issue⚡️PerformedViaGithubApp(array $payload): \ApiClients\Client\GitHub\Schema\WebhookIssuesDeleted\Issue\PerformedViaGithubApp
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['created_at'] ?? null;

            if ($value === null) {
                $properties['createdAt'] = null;
                goto after_createdAt;
            }

            $properties['createdAt'] = $value;

            after_createdAt:

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
                $properties['externalUrl'] = null;
                goto after_externalUrl;
            }

            $properties['externalUrl'] = $value;

            after_externalUrl:

            $value = $payload['html_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'html_url';
                goto after_htmlUrl;
            }

            $properties['htmlUrl'] = $value;

            after_htmlUrl:

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
                goto after_nodeId;
            }

            $properties['nodeId'] = $value;

            after_nodeId:

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
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookDeploymentCreated⚡️Deployment⚡️PerformedViaGithubApp⚡️Permissions($value);
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
                $properties['updatedAt'] = null;
                goto after_updatedAt;
            }

            $properties['updatedAt'] = $value;

            after_updatedAt:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookIssuesDeleted\Issue\PerformedViaGithubApp', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookIssuesDeleted\Issue\PerformedViaGithubApp::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WebhookIssuesDeleted\Issue\PerformedViaGithubApp(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookIssuesDeleted\Issue\PerformedViaGithubApp', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookDeploymentCreated⚡️Deployment⚡️PerformedViaGithubApp⚡️Permissions(array $payload): \ApiClients\Client\GitHub\Schema\WebhookDeploymentCreated\Deployment\PerformedViaGithubApp\Permissions
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
                $properties['contentReferences'] = null;
                goto after_contentReferences;
            }

            $properties['contentReferences'] = $value;

            after_contentReferences:

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
                $properties['organizationAdministration'] = null;
                goto after_organizationAdministration;
            }

            $properties['organizationAdministration'] = $value;

            after_organizationAdministration:

            $value = $payload['organization_hooks'] ?? null;

            if ($value === null) {
                $properties['organizationHooks'] = null;
                goto after_organizationHooks;
            }

            $properties['organizationHooks'] = $value;

            after_organizationHooks:

            $value = $payload['organization_packages'] ?? null;

            if ($value === null) {
                $properties['organizationPackages'] = null;
                goto after_organizationPackages;
            }

            $properties['organizationPackages'] = $value;

            after_organizationPackages:

            $value = $payload['organization_plan'] ?? null;

            if ($value === null) {
                $properties['organizationPlan'] = null;
                goto after_organizationPlan;
            }

            $properties['organizationPlan'] = $value;

            after_organizationPlan:

            $value = $payload['organization_projects'] ?? null;

            if ($value === null) {
                $properties['organizationProjects'] = null;
                goto after_organizationProjects;
            }

            $properties['organizationProjects'] = $value;

            after_organizationProjects:

            $value = $payload['organization_secrets'] ?? null;

            if ($value === null) {
                $properties['organizationSecrets'] = null;
                goto after_organizationSecrets;
            }

            $properties['organizationSecrets'] = $value;

            after_organizationSecrets:

            $value = $payload['organization_self_hosted_runners'] ?? null;

            if ($value === null) {
                $properties['organizationSelfHostedRunners'] = null;
                goto after_organizationSelfHostedRunners;
            }

            $properties['organizationSelfHostedRunners'] = $value;

            after_organizationSelfHostedRunners:

            $value = $payload['organization_user_blocking'] ?? null;

            if ($value === null) {
                $properties['organizationUserBlocking'] = null;
                goto after_organizationUserBlocking;
            }

            $properties['organizationUserBlocking'] = $value;

            after_organizationUserBlocking:

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
                $properties['pullRequests'] = null;
                goto after_pullRequests;
            }

            $properties['pullRequests'] = $value;

            after_pullRequests:

            $value = $payload['repository_hooks'] ?? null;

            if ($value === null) {
                $properties['repositoryHooks'] = null;
                goto after_repositoryHooks;
            }

            $properties['repositoryHooks'] = $value;

            after_repositoryHooks:

            $value = $payload['repository_projects'] ?? null;

            if ($value === null) {
                $properties['repositoryProjects'] = null;
                goto after_repositoryProjects;
            }

            $properties['repositoryProjects'] = $value;

            after_repositoryProjects:

            $value = $payload['secret_scanning_alerts'] ?? null;

            if ($value === null) {
                $properties['secretScanningAlerts'] = null;
                goto after_secretScanningAlerts;
            }

            $properties['secretScanningAlerts'] = $value;

            after_secretScanningAlerts:

            $value = $payload['secrets'] ?? null;

            if ($value === null) {
                $properties['secrets'] = null;
                goto after_secrets;
            }

            $properties['secrets'] = $value;

            after_secrets:

            $value = $payload['security_events'] ?? null;

            if ($value === null) {
                $properties['securityEvents'] = null;
                goto after_securityEvents;
            }

            $properties['securityEvents'] = $value;

            after_securityEvents:

            $value = $payload['security_scanning_alert'] ?? null;

            if ($value === null) {
                $properties['securityScanningAlert'] = null;
                goto after_securityScanningAlert;
            }

            $properties['securityScanningAlert'] = $value;

            after_securityScanningAlert:

            $value = $payload['single_file'] ?? null;

            if ($value === null) {
                $properties['singleFile'] = null;
                goto after_singleFile;
            }

            $properties['singleFile'] = $value;

            after_singleFile:

            $value = $payload['statuses'] ?? null;

            if ($value === null) {
                $properties['statuses'] = null;
                goto after_statuses;
            }

            $properties['statuses'] = $value;

            after_statuses:

            $value = $payload['team_discussions'] ?? null;

            if ($value === null) {
                $properties['teamDiscussions'] = null;
                goto after_teamDiscussions;
            }

            $properties['teamDiscussions'] = $value;

            after_teamDiscussions:

            $value = $payload['vulnerability_alerts'] ?? null;

            if ($value === null) {
                $properties['vulnerabilityAlerts'] = null;
                goto after_vulnerabilityAlerts;
            }

            $properties['vulnerabilityAlerts'] = $value;

            after_vulnerabilityAlerts:

            $value = $payload['workflows'] ?? null;

            if ($value === null) {
                $properties['workflows'] = null;
                goto after_workflows;
            }

            $properties['workflows'] = $value;

            after_workflows:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookDeploymentCreated\Deployment\PerformedViaGithubApp\Permissions', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookDeploymentCreated\Deployment\PerformedViaGithubApp\Permissions::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WebhookDeploymentCreated\Deployment\PerformedViaGithubApp\Permissions(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookDeploymentCreated\Deployment\PerformedViaGithubApp\Permissions', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesDemilestoned(array $payload): \ApiClients\Client\GitHub\Schema\WebhookIssuesDemilestoned
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

            $value = $payload['issue'] ?? null;

            if ($value === null) {
                $missingFields[] = 'issue';
                goto after_issue;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'issue';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesDemilestoned⚡️Issue($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['issue'] = $value;

            after_issue:

            $value = $payload['milestone'] ?? null;

            if ($value === null) {
                $properties['milestone'] = null;
                goto after_milestone;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'milestone';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesDemilestoned⚡️Milestone($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['milestone'] = $value;

            after_milestone:

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
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookIssuesDemilestoned', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookIssuesDemilestoned::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WebhookIssuesDemilestoned(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookIssuesDemilestoned', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesDemilestoned⚡️Issue(array $payload): \ApiClients\Client\GitHub\Schema\WebhookIssuesDemilestoned\Issue
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['active_lock_reason'] ?? null;

            if ($value === null) {
                $properties['activeLockReason'] = null;
                goto after_activeLockReason;
            }

            $properties['activeLockReason'] = $value;

            after_activeLockReason:

            $value = $payload['assignee'] ?? null;

            if ($value === null) {
                $properties['assignee'] = null;
                goto after_assignee;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'assignee';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssueCommentCreated⚡️Issue⚡️Assignee($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['assignee'] = $value;

            after_assignee:

            $value = $payload['assignees'] ?? null;

            if ($value === null) {
                $missingFields[] = 'assignees';
                goto after_assignees;
            }

            static $assigneesCaster1;

            if ($assigneesCaster1 === null) {
                $assigneesCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\WebhookIssueCommentCreated\\Issue\\Assignee',
));
            }

            $value = $assigneesCaster1->cast($value, $this);

            $properties['assignees'] = $value;

            after_assignees:

            $value = $payload['author_association'] ?? null;

            if ($value === null) {
                $missingFields[] = 'author_association';
                goto after_authorAssociation;
            }

            $properties['authorAssociation'] = $value;

            after_authorAssociation:

            $value = $payload['body'] ?? null;

            if ($value === null) {
                $properties['body'] = null;
                goto after_body;
            }

            $properties['body'] = $value;

            after_body:

            $value = $payload['closed_at'] ?? null;

            if ($value === null) {
                $properties['closedAt'] = null;
                goto after_closedAt;
            }

            $properties['closedAt'] = $value;

            after_closedAt:

            $value = $payload['comments'] ?? null;

            if ($value === null) {
                $missingFields[] = 'comments';
                goto after_comments;
            }

            $properties['comments'] = $value;

            after_comments:

            $value = $payload['comments_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'comments_url';
                goto after_commentsUrl;
            }

            $properties['commentsUrl'] = $value;

            after_commentsUrl:

            $value = $payload['created_at'] ?? null;

            if ($value === null) {
                $missingFields[] = 'created_at';
                goto after_createdAt;
            }

            $properties['createdAt'] = $value;

            after_createdAt:

            $value = $payload['draft'] ?? null;

            if ($value === null) {
                $properties['draft'] = null;
                goto after_draft;
            }

            $properties['draft'] = $value;

            after_draft:

            $value = $payload['events_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'events_url';
                goto after_eventsUrl;
            }

            $properties['eventsUrl'] = $value;

            after_eventsUrl:

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
                $properties['labels'] = null;
                goto after_labels;
            }

            static $labelsCaster1;

            if ($labelsCaster1 === null) {
                $labelsCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionLabeled\\Label',
));
            }

            $value = $labelsCaster1->cast($value, $this);

            $properties['labels'] = $value;

            after_labels:

            $value = $payload['labels_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'labels_url';
                goto after_labelsUrl;
            }

            $properties['labelsUrl'] = $value;

            after_labelsUrl:

            $value = $payload['locked'] ?? null;

            if ($value === null) {
                $properties['locked'] = null;
                goto after_locked;
            }

            $properties['locked'] = $value;

            after_locked:

            $value = $payload['milestone'] ?? null;

            if ($value === null) {
                $properties['milestone'] = null;
                goto after_milestone;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'milestone';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssueCommentCreated⚡️Issue⚡️Milestone($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['milestone'] = $value;

            after_milestone:

            $value = $payload['node_id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'node_id';
                goto after_nodeId;
            }

            $properties['nodeId'] = $value;

            after_nodeId:

            $value = $payload['number'] ?? null;

            if ($value === null) {
                $missingFields[] = 'number';
                goto after_number;
            }

            $properties['number'] = $value;

            after_number:

            $value = $payload['performed_via_github_app'] ?? null;

            if ($value === null) {
                $properties['performedViaGithubApp'] = null;
                goto after_performedViaGithubApp;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'performedViaGithubApp';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesDemilestoned⚡️Issue⚡️PerformedViaGithubApp($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['performedViaGithubApp'] = $value;

            after_performedViaGithubApp:

            $value = $payload['pull_request'] ?? null;

            if ($value === null) {
                $properties['pullRequest'] = null;
                goto after_pullRequest;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'pullRequest';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssueCommentCreated⚡️Issue⚡️PullRequest($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['pullRequest'] = $value;

            after_pullRequest:

            $value = $payload['reactions'] ?? null;

            if ($value === null) {
                $missingFields[] = 'reactions';
                goto after_reactions;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'reactions';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Discussion⚡️Reactions($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['reactions'] = $value;

            after_reactions:

            $value = $payload['repository_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'repository_url';
                goto after_repositoryUrl;
            }

            $properties['repositoryUrl'] = $value;

            after_repositoryUrl:

            $value = $payload['state'] ?? null;

            if ($value === null) {
                $properties['state'] = null;
                goto after_state;
            }

            $properties['state'] = $value;

            after_state:

            $value = $payload['state_reason'] ?? null;

            if ($value === null) {
                $properties['stateReason'] = null;
                goto after_stateReason;
            }

            $properties['stateReason'] = $value;

            after_stateReason:

            $value = $payload['timeline_url'] ?? null;

            if ($value === null) {
                $properties['timelineUrl'] = null;
                goto after_timelineUrl;
            }

            $properties['timelineUrl'] = $value;

            after_timelineUrl:

            $value = $payload['title'] ?? null;

            if ($value === null) {
                $missingFields[] = 'title';
                goto after_title;
            }

            $properties['title'] = $value;

            after_title:

            $value = $payload['updated_at'] ?? null;

            if ($value === null) {
                $missingFields[] = 'updated_at';
                goto after_updatedAt;
            }

            $properties['updatedAt'] = $value;

            after_updatedAt:

            $value = $payload['url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'url';
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

            $value = $payload['user'] ?? null;

            if ($value === null) {
                $properties['user'] = null;
                goto after_user;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'user';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssueCommentCreated⚡️Issue⚡️Assignee($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['user'] = $value;

            after_user:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookIssuesDemilestoned\Issue', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookIssuesDemilestoned\Issue::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WebhookIssuesDemilestoned\Issue(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookIssuesDemilestoned\Issue', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesDemilestoned⚡️Issue⚡️PerformedViaGithubApp(array $payload): \ApiClients\Client\GitHub\Schema\WebhookIssuesDemilestoned\Issue\PerformedViaGithubApp
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['created_at'] ?? null;

            if ($value === null) {
                $properties['createdAt'] = null;
                goto after_createdAt;
            }

            $properties['createdAt'] = $value;

            after_createdAt:

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
                $properties['externalUrl'] = null;
                goto after_externalUrl;
            }

            $properties['externalUrl'] = $value;

            after_externalUrl:

            $value = $payload['html_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'html_url';
                goto after_htmlUrl;
            }

            $properties['htmlUrl'] = $value;

            after_htmlUrl:

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
                goto after_nodeId;
            }

            $properties['nodeId'] = $value;

            after_nodeId:

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
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssueCommentEdited⚡️Issue⚡️PerformedViaGithubApp⚡️Permissions($value);
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
                $properties['updatedAt'] = null;
                goto after_updatedAt;
            }

            $properties['updatedAt'] = $value;

            after_updatedAt:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookIssuesDemilestoned\Issue\PerformedViaGithubApp', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookIssuesDemilestoned\Issue\PerformedViaGithubApp::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WebhookIssuesDemilestoned\Issue\PerformedViaGithubApp(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookIssuesDemilestoned\Issue\PerformedViaGithubApp', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesDemilestoned⚡️Milestone(array $payload): \ApiClients\Client\GitHub\Schema\WebhookIssuesDemilestoned\Milestone
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['closed_at'] ?? null;

            if ($value === null) {
                $properties['closedAt'] = null;
                goto after_closedAt;
            }

            $properties['closedAt'] = $value;

            after_closedAt:

            $value = $payload['closed_issues'] ?? null;

            if ($value === null) {
                $missingFields[] = 'closed_issues';
                goto after_closedIssues;
            }

            $properties['closedIssues'] = $value;

            after_closedIssues:

            $value = $payload['created_at'] ?? null;

            if ($value === null) {
                $missingFields[] = 'created_at';
                goto after_createdAt;
            }

            $properties['createdAt'] = $value;

            after_createdAt:

            $value = $payload['creator'] ?? null;

            if ($value === null) {
                $properties['creator'] = null;
                goto after_creator;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'creator';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssueCommentCreated⚡️Issue⚡️Assignee($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['creator'] = $value;

            after_creator:

            $value = $payload['description'] ?? null;

            if ($value === null) {
                $properties['description'] = null;
                goto after_description;
            }

            $properties['description'] = $value;

            after_description:

            $value = $payload['due_on'] ?? null;

            if ($value === null) {
                $properties['dueOn'] = null;
                goto after_dueOn;
            }

            $properties['dueOn'] = $value;

            after_dueOn:

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

            $value = $payload['labels_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'labels_url';
                goto after_labelsUrl;
            }

            $properties['labelsUrl'] = $value;

            after_labelsUrl:

            $value = $payload['node_id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'node_id';
                goto after_nodeId;
            }

            $properties['nodeId'] = $value;

            after_nodeId:

            $value = $payload['number'] ?? null;

            if ($value === null) {
                $missingFields[] = 'number';
                goto after_number;
            }

            $properties['number'] = $value;

            after_number:

            $value = $payload['open_issues'] ?? null;

            if ($value === null) {
                $missingFields[] = 'open_issues';
                goto after_openIssues;
            }

            $properties['openIssues'] = $value;

            after_openIssues:

            $value = $payload['state'] ?? null;

            if ($value === null) {
                $missingFields[] = 'state';
                goto after_state;
            }

            $properties['state'] = $value;

            after_state:

            $value = $payload['title'] ?? null;

            if ($value === null) {
                $missingFields[] = 'title';
                goto after_title;
            }

            $properties['title'] = $value;

            after_title:

            $value = $payload['updated_at'] ?? null;

            if ($value === null) {
                $missingFields[] = 'updated_at';
                goto after_updatedAt;
            }

            $properties['updatedAt'] = $value;

            after_updatedAt:

            $value = $payload['url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'url';
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookIssuesDemilestoned\Milestone', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookIssuesDemilestoned\Milestone::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WebhookIssuesDemilestoned\Milestone(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookIssuesDemilestoned\Milestone', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesEdited(array $payload): \ApiClients\Client\GitHub\Schema\WebhookIssuesEdited
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

            $value = $payload['changes'] ?? null;

            if ($value === null) {
                $missingFields[] = 'changes';
                goto after_changes;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'changes';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesEdited⚡️Changes($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['changes'] = $value;

            after_changes:

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

            $value = $payload['issue'] ?? null;

            if ($value === null) {
                $missingFields[] = 'issue';
                goto after_issue;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'issue';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesEdited⚡️Issue($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['issue'] = $value;

            after_issue:

            $value = $payload['label'] ?? null;

            if ($value === null) {
                $properties['label'] = null;
                goto after_label;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'label';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookDiscussionLabeled⚡️Label($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['label'] = $value;

            after_label:

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
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookIssuesEdited', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookIssuesEdited::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WebhookIssuesEdited(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookIssuesEdited', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesEdited⚡️Changes(array $payload): \ApiClients\Client\GitHub\Schema\WebhookIssuesEdited\Changes
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['body'] ?? null;

            if ($value === null) {
                $properties['body'] = null;
                goto after_body;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'body';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssueCommentEdited⚡️Changes⚡️Body($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['body'] = $value;

            after_body:

            $value = $payload['title'] ?? null;

            if ($value === null) {
                $properties['title'] = null;
                goto after_title;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'title';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesEdited⚡️Changes⚡️Title($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['title'] = $value;

            after_title:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookIssuesEdited\Changes', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookIssuesEdited\Changes::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WebhookIssuesEdited\Changes(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookIssuesEdited\Changes', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssueCommentEdited⚡️Changes⚡️Body(array $payload): \ApiClients\Client\GitHub\Schema\WebhookIssueCommentEdited\Changes\Body
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['from'] ?? null;

            if ($value === null) {
                $missingFields[] = 'from';
                goto after_from;
            }

            $properties['from'] = $value;

            after_from:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookIssueCommentEdited\Changes\Body', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookIssueCommentEdited\Changes\Body::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WebhookIssueCommentEdited\Changes\Body(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookIssueCommentEdited\Changes\Body', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesEdited⚡️Changes⚡️Title(array $payload): \ApiClients\Client\GitHub\Schema\WebhookIssuesEdited\Changes\Title
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['from'] ?? null;

            if ($value === null) {
                $missingFields[] = 'from';
                goto after_from;
            }

            $properties['from'] = $value;

            after_from:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookIssuesEdited\Changes\Title', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookIssuesEdited\Changes\Title::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WebhookIssuesEdited\Changes\Title(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookIssuesEdited\Changes\Title', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesEdited⚡️Issue(array $payload): \ApiClients\Client\GitHub\Schema\WebhookIssuesEdited\Issue
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['active_lock_reason'] ?? null;

            if ($value === null) {
                $properties['activeLockReason'] = null;
                goto after_activeLockReason;
            }

            $properties['activeLockReason'] = $value;

            after_activeLockReason:

            $value = $payload['assignee'] ?? null;

            if ($value === null) {
                $properties['assignee'] = null;
                goto after_assignee;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'assignee';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssueCommentCreated⚡️Issue⚡️Assignee($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['assignee'] = $value;

            after_assignee:

            $value = $payload['assignees'] ?? null;

            if ($value === null) {
                $missingFields[] = 'assignees';
                goto after_assignees;
            }

            static $assigneesCaster1;

            if ($assigneesCaster1 === null) {
                $assigneesCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\WebhookIssueCommentCreated\\Issue\\Assignee',
));
            }

            $value = $assigneesCaster1->cast($value, $this);

            $properties['assignees'] = $value;

            after_assignees:

            $value = $payload['author_association'] ?? null;

            if ($value === null) {
                $missingFields[] = 'author_association';
                goto after_authorAssociation;
            }

            $properties['authorAssociation'] = $value;

            after_authorAssociation:

            $value = $payload['body'] ?? null;

            if ($value === null) {
                $properties['body'] = null;
                goto after_body;
            }

            $properties['body'] = $value;

            after_body:

            $value = $payload['closed_at'] ?? null;

            if ($value === null) {
                $properties['closedAt'] = null;
                goto after_closedAt;
            }

            $properties['closedAt'] = $value;

            after_closedAt:

            $value = $payload['comments'] ?? null;

            if ($value === null) {
                $missingFields[] = 'comments';
                goto after_comments;
            }

            $properties['comments'] = $value;

            after_comments:

            $value = $payload['comments_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'comments_url';
                goto after_commentsUrl;
            }

            $properties['commentsUrl'] = $value;

            after_commentsUrl:

            $value = $payload['created_at'] ?? null;

            if ($value === null) {
                $missingFields[] = 'created_at';
                goto after_createdAt;
            }

            $properties['createdAt'] = $value;

            after_createdAt:

            $value = $payload['draft'] ?? null;

            if ($value === null) {
                $properties['draft'] = null;
                goto after_draft;
            }

            $properties['draft'] = $value;

            after_draft:

            $value = $payload['events_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'events_url';
                goto after_eventsUrl;
            }

            $properties['eventsUrl'] = $value;

            after_eventsUrl:

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
                $properties['labels'] = null;
                goto after_labels;
            }

            static $labelsCaster1;

            if ($labelsCaster1 === null) {
                $labelsCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionLabeled\\Label',
));
            }

            $value = $labelsCaster1->cast($value, $this);

            $properties['labels'] = $value;

            after_labels:

            $value = $payload['labels_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'labels_url';
                goto after_labelsUrl;
            }

            $properties['labelsUrl'] = $value;

            after_labelsUrl:

            $value = $payload['locked'] ?? null;

            if ($value === null) {
                $properties['locked'] = null;
                goto after_locked;
            }

            $properties['locked'] = $value;

            after_locked:

            $value = $payload['milestone'] ?? null;

            if ($value === null) {
                $properties['milestone'] = null;
                goto after_milestone;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'milestone';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssueCommentCreated⚡️Issue⚡️Milestone($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['milestone'] = $value;

            after_milestone:

            $value = $payload['node_id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'node_id';
                goto after_nodeId;
            }

            $properties['nodeId'] = $value;

            after_nodeId:

            $value = $payload['number'] ?? null;

            if ($value === null) {
                $missingFields[] = 'number';
                goto after_number;
            }

            $properties['number'] = $value;

            after_number:

            $value = $payload['performed_via_github_app'] ?? null;

            if ($value === null) {
                $properties['performedViaGithubApp'] = null;
                goto after_performedViaGithubApp;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'performedViaGithubApp';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesEdited⚡️Issue⚡️PerformedViaGithubApp($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['performedViaGithubApp'] = $value;

            after_performedViaGithubApp:

            $value = $payload['pull_request'] ?? null;

            if ($value === null) {
                $properties['pullRequest'] = null;
                goto after_pullRequest;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'pullRequest';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssueCommentCreated⚡️Issue⚡️PullRequest($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['pullRequest'] = $value;

            after_pullRequest:

            $value = $payload['reactions'] ?? null;

            if ($value === null) {
                $missingFields[] = 'reactions';
                goto after_reactions;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'reactions';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Discussion⚡️Reactions($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['reactions'] = $value;

            after_reactions:

            $value = $payload['repository_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'repository_url';
                goto after_repositoryUrl;
            }

            $properties['repositoryUrl'] = $value;

            after_repositoryUrl:

            $value = $payload['state'] ?? null;

            if ($value === null) {
                $properties['state'] = null;
                goto after_state;
            }

            $properties['state'] = $value;

            after_state:

            $value = $payload['state_reason'] ?? null;

            if ($value === null) {
                $properties['stateReason'] = null;
                goto after_stateReason;
            }

            $properties['stateReason'] = $value;

            after_stateReason:

            $value = $payload['timeline_url'] ?? null;

            if ($value === null) {
                $properties['timelineUrl'] = null;
                goto after_timelineUrl;
            }

            $properties['timelineUrl'] = $value;

            after_timelineUrl:

            $value = $payload['title'] ?? null;

            if ($value === null) {
                $missingFields[] = 'title';
                goto after_title;
            }

            $properties['title'] = $value;

            after_title:

            $value = $payload['updated_at'] ?? null;

            if ($value === null) {
                $missingFields[] = 'updated_at';
                goto after_updatedAt;
            }

            $properties['updatedAt'] = $value;

            after_updatedAt:

            $value = $payload['url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'url';
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

            $value = $payload['user'] ?? null;

            if ($value === null) {
                $properties['user'] = null;
                goto after_user;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'user';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssueCommentCreated⚡️Issue⚡️Assignee($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['user'] = $value;

            after_user:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookIssuesEdited\Issue', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookIssuesEdited\Issue::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WebhookIssuesEdited\Issue(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookIssuesEdited\Issue', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesEdited⚡️Issue⚡️PerformedViaGithubApp(array $payload): \ApiClients\Client\GitHub\Schema\WebhookIssuesEdited\Issue\PerformedViaGithubApp
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['created_at'] ?? null;

            if ($value === null) {
                $properties['createdAt'] = null;
                goto after_createdAt;
            }

            $properties['createdAt'] = $value;

            after_createdAt:

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
                $properties['externalUrl'] = null;
                goto after_externalUrl;
            }

            $properties['externalUrl'] = $value;

            after_externalUrl:

            $value = $payload['html_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'html_url';
                goto after_htmlUrl;
            }

            $properties['htmlUrl'] = $value;

            after_htmlUrl:

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
                goto after_nodeId;
            }

            $properties['nodeId'] = $value;

            after_nodeId:

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
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssueCommentEdited⚡️Issue⚡️PerformedViaGithubApp⚡️Permissions($value);
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
                $properties['updatedAt'] = null;
                goto after_updatedAt;
            }

            $properties['updatedAt'] = $value;

            after_updatedAt:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookIssuesEdited\Issue\PerformedViaGithubApp', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookIssuesEdited\Issue\PerformedViaGithubApp::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WebhookIssuesEdited\Issue\PerformedViaGithubApp(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookIssuesEdited\Issue\PerformedViaGithubApp', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesLabeled(array $payload): \ApiClients\Client\GitHub\Schema\WebhookIssuesLabeled
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

            $value = $payload['issue'] ?? null;

            if ($value === null) {
                $missingFields[] = 'issue';
                goto after_issue;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'issue';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesLabeled⚡️Issue($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['issue'] = $value;

            after_issue:

            $value = $payload['label'] ?? null;

            if ($value === null) {
                $properties['label'] = null;
                goto after_label;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'label';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookDiscussionLabeled⚡️Label($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['label'] = $value;

            after_label:

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
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookIssuesLabeled', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookIssuesLabeled::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WebhookIssuesLabeled(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookIssuesLabeled', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesLabeled⚡️Issue(array $payload): \ApiClients\Client\GitHub\Schema\WebhookIssuesLabeled\Issue
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['active_lock_reason'] ?? null;

            if ($value === null) {
                $properties['activeLockReason'] = null;
                goto after_activeLockReason;
            }

            $properties['activeLockReason'] = $value;

            after_activeLockReason:

            $value = $payload['assignee'] ?? null;

            if ($value === null) {
                $properties['assignee'] = null;
                goto after_assignee;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'assignee';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssueCommentCreated⚡️Issue⚡️Assignee($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['assignee'] = $value;

            after_assignee:

            $value = $payload['assignees'] ?? null;

            if ($value === null) {
                $missingFields[] = 'assignees';
                goto after_assignees;
            }

            static $assigneesCaster1;

            if ($assigneesCaster1 === null) {
                $assigneesCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\WebhookIssueCommentCreated\\Issue\\Assignee',
));
            }

            $value = $assigneesCaster1->cast($value, $this);

            $properties['assignees'] = $value;

            after_assignees:

            $value = $payload['author_association'] ?? null;

            if ($value === null) {
                $missingFields[] = 'author_association';
                goto after_authorAssociation;
            }

            $properties['authorAssociation'] = $value;

            after_authorAssociation:

            $value = $payload['body'] ?? null;

            if ($value === null) {
                $properties['body'] = null;
                goto after_body;
            }

            $properties['body'] = $value;

            after_body:

            $value = $payload['closed_at'] ?? null;

            if ($value === null) {
                $properties['closedAt'] = null;
                goto after_closedAt;
            }

            $properties['closedAt'] = $value;

            after_closedAt:

            $value = $payload['comments'] ?? null;

            if ($value === null) {
                $missingFields[] = 'comments';
                goto after_comments;
            }

            $properties['comments'] = $value;

            after_comments:

            $value = $payload['comments_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'comments_url';
                goto after_commentsUrl;
            }

            $properties['commentsUrl'] = $value;

            after_commentsUrl:

            $value = $payload['created_at'] ?? null;

            if ($value === null) {
                $missingFields[] = 'created_at';
                goto after_createdAt;
            }

            $properties['createdAt'] = $value;

            after_createdAt:

            $value = $payload['draft'] ?? null;

            if ($value === null) {
                $properties['draft'] = null;
                goto after_draft;
            }

            $properties['draft'] = $value;

            after_draft:

            $value = $payload['events_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'events_url';
                goto after_eventsUrl;
            }

            $properties['eventsUrl'] = $value;

            after_eventsUrl:

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
                $properties['labels'] = null;
                goto after_labels;
            }

            static $labelsCaster1;

            if ($labelsCaster1 === null) {
                $labelsCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionLabeled\\Label',
));
            }

            $value = $labelsCaster1->cast($value, $this);

            $properties['labels'] = $value;

            after_labels:

            $value = $payload['labels_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'labels_url';
                goto after_labelsUrl;
            }

            $properties['labelsUrl'] = $value;

            after_labelsUrl:

            $value = $payload['locked'] ?? null;

            if ($value === null) {
                $properties['locked'] = null;
                goto after_locked;
            }

            $properties['locked'] = $value;

            after_locked:

            $value = $payload['milestone'] ?? null;

            if ($value === null) {
                $properties['milestone'] = null;
                goto after_milestone;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'milestone';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssueCommentCreated⚡️Issue⚡️Milestone($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['milestone'] = $value;

            after_milestone:

            $value = $payload['node_id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'node_id';
                goto after_nodeId;
            }

            $properties['nodeId'] = $value;

            after_nodeId:

            $value = $payload['number'] ?? null;

            if ($value === null) {
                $missingFields[] = 'number';
                goto after_number;
            }

            $properties['number'] = $value;

            after_number:

            $value = $payload['performed_via_github_app'] ?? null;

            if ($value === null) {
                $properties['performedViaGithubApp'] = null;
                goto after_performedViaGithubApp;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'performedViaGithubApp';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesLabeled⚡️Issue⚡️PerformedViaGithubApp($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['performedViaGithubApp'] = $value;

            after_performedViaGithubApp:

            $value = $payload['pull_request'] ?? null;

            if ($value === null) {
                $properties['pullRequest'] = null;
                goto after_pullRequest;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'pullRequest';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssueCommentCreated⚡️Issue⚡️PullRequest($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['pullRequest'] = $value;

            after_pullRequest:

            $value = $payload['reactions'] ?? null;

            if ($value === null) {
                $missingFields[] = 'reactions';
                goto after_reactions;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'reactions';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Discussion⚡️Reactions($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['reactions'] = $value;

            after_reactions:

            $value = $payload['repository_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'repository_url';
                goto after_repositoryUrl;
            }

            $properties['repositoryUrl'] = $value;

            after_repositoryUrl:

            $value = $payload['state'] ?? null;

            if ($value === null) {
                $properties['state'] = null;
                goto after_state;
            }

            $properties['state'] = $value;

            after_state:

            $value = $payload['state_reason'] ?? null;

            if ($value === null) {
                $properties['stateReason'] = null;
                goto after_stateReason;
            }

            $properties['stateReason'] = $value;

            after_stateReason:

            $value = $payload['timeline_url'] ?? null;

            if ($value === null) {
                $properties['timelineUrl'] = null;
                goto after_timelineUrl;
            }

            $properties['timelineUrl'] = $value;

            after_timelineUrl:

            $value = $payload['title'] ?? null;

            if ($value === null) {
                $missingFields[] = 'title';
                goto after_title;
            }

            $properties['title'] = $value;

            after_title:

            $value = $payload['updated_at'] ?? null;

            if ($value === null) {
                $missingFields[] = 'updated_at';
                goto after_updatedAt;
            }

            $properties['updatedAt'] = $value;

            after_updatedAt:

            $value = $payload['url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'url';
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

            $value = $payload['user'] ?? null;

            if ($value === null) {
                $properties['user'] = null;
                goto after_user;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'user';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssueCommentCreated⚡️Issue⚡️Assignee($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['user'] = $value;

            after_user:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookIssuesLabeled\Issue', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookIssuesLabeled\Issue::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WebhookIssuesLabeled\Issue(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookIssuesLabeled\Issue', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesLabeled⚡️Issue⚡️PerformedViaGithubApp(array $payload): \ApiClients\Client\GitHub\Schema\WebhookIssuesLabeled\Issue\PerformedViaGithubApp
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['created_at'] ?? null;

            if ($value === null) {
                $properties['createdAt'] = null;
                goto after_createdAt;
            }

            $properties['createdAt'] = $value;

            after_createdAt:

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
                $properties['externalUrl'] = null;
                goto after_externalUrl;
            }

            $properties['externalUrl'] = $value;

            after_externalUrl:

            $value = $payload['html_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'html_url';
                goto after_htmlUrl;
            }

            $properties['htmlUrl'] = $value;

            after_htmlUrl:

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
                goto after_nodeId;
            }

            $properties['nodeId'] = $value;

            after_nodeId:

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
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssueCommentEdited⚡️Issue⚡️PerformedViaGithubApp⚡️Permissions($value);
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
                $properties['updatedAt'] = null;
                goto after_updatedAt;
            }

            $properties['updatedAt'] = $value;

            after_updatedAt:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookIssuesLabeled\Issue\PerformedViaGithubApp', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookIssuesLabeled\Issue\PerformedViaGithubApp::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WebhookIssuesLabeled\Issue\PerformedViaGithubApp(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookIssuesLabeled\Issue\PerformedViaGithubApp', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesLocked(array $payload): \ApiClients\Client\GitHub\Schema\WebhookIssuesLocked
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

            $value = $payload['issue'] ?? null;

            if ($value === null) {
                $missingFields[] = 'issue';
                goto after_issue;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'issue';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesLocked⚡️Issue($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['issue'] = $value;

            after_issue:

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
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookIssuesLocked', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookIssuesLocked::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WebhookIssuesLocked(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookIssuesLocked', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesLocked⚡️Issue(array $payload): \ApiClients\Client\GitHub\Schema\WebhookIssuesLocked\Issue
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['active_lock_reason'] ?? null;

            if ($value === null) {
                $properties['activeLockReason'] = null;
                goto after_activeLockReason;
            }

            $properties['activeLockReason'] = $value;

            after_activeLockReason:

            $value = $payload['assignee'] ?? null;

            if ($value === null) {
                $properties['assignee'] = null;
                goto after_assignee;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'assignee';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Discussion⚡️AnswerChosenBy($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['assignee'] = $value;

            after_assignee:

            $value = $payload['assignees'] ?? null;

            if ($value === null) {
                $missingFields[] = 'assignees';
                goto after_assignees;
            }

            static $assigneesCaster1;

            if ($assigneesCaster1 === null) {
                $assigneesCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\Discussion\\AnswerChosenBy',
));
            }

            $value = $assigneesCaster1->cast($value, $this);

            $properties['assignees'] = $value;

            after_assignees:

            $value = $payload['author_association'] ?? null;

            if ($value === null) {
                $missingFields[] = 'author_association';
                goto after_authorAssociation;
            }

            $properties['authorAssociation'] = $value;

            after_authorAssociation:

            $value = $payload['body'] ?? null;

            if ($value === null) {
                $properties['body'] = null;
                goto after_body;
            }

            $properties['body'] = $value;

            after_body:

            $value = $payload['closed_at'] ?? null;

            if ($value === null) {
                $properties['closedAt'] = null;
                goto after_closedAt;
            }

            $properties['closedAt'] = $value;

            after_closedAt:

            $value = $payload['comments'] ?? null;

            if ($value === null) {
                $missingFields[] = 'comments';
                goto after_comments;
            }

            $properties['comments'] = $value;

            after_comments:

            $value = $payload['comments_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'comments_url';
                goto after_commentsUrl;
            }

            $properties['commentsUrl'] = $value;

            after_commentsUrl:

            $value = $payload['created_at'] ?? null;

            if ($value === null) {
                $missingFields[] = 'created_at';
                goto after_createdAt;
            }

            $properties['createdAt'] = $value;

            after_createdAt:

            $value = $payload['draft'] ?? null;

            if ($value === null) {
                $properties['draft'] = null;
                goto after_draft;
            }

            $properties['draft'] = $value;

            after_draft:

            $value = $payload['events_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'events_url';
                goto after_eventsUrl;
            }

            $properties['eventsUrl'] = $value;

            after_eventsUrl:

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
                $properties['labels'] = null;
                goto after_labels;
            }

            static $labelsCaster1;

            if ($labelsCaster1 === null) {
                $labelsCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionLabeled\\Label',
));
            }

            $value = $labelsCaster1->cast($value, $this);

            $properties['labels'] = $value;

            after_labels:

            $value = $payload['labels_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'labels_url';
                goto after_labelsUrl;
            }

            $properties['labelsUrl'] = $value;

            after_labelsUrl:

            $value = $payload['locked'] ?? null;

            if ($value === null) {
                $properties['locked'] = null;
                goto after_locked;
            }

            $properties['locked'] = $value;

            after_locked:

            $value = $payload['milestone'] ?? null;

            if ($value === null) {
                $properties['milestone'] = null;
                goto after_milestone;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'milestone';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesDeleted⚡️Issue⚡️Milestone($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['milestone'] = $value;

            after_milestone:

            $value = $payload['node_id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'node_id';
                goto after_nodeId;
            }

            $properties['nodeId'] = $value;

            after_nodeId:

            $value = $payload['number'] ?? null;

            if ($value === null) {
                $missingFields[] = 'number';
                goto after_number;
            }

            $properties['number'] = $value;

            after_number:

            $value = $payload['performed_via_github_app'] ?? null;

            if ($value === null) {
                $properties['performedViaGithubApp'] = null;
                goto after_performedViaGithubApp;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'performedViaGithubApp';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesLocked⚡️Issue⚡️PerformedViaGithubApp($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['performedViaGithubApp'] = $value;

            after_performedViaGithubApp:

            $value = $payload['pull_request'] ?? null;

            if ($value === null) {
                $properties['pullRequest'] = null;
                goto after_pullRequest;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'pullRequest';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssueCommentCreated⚡️Issue⚡️PullRequest($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['pullRequest'] = $value;

            after_pullRequest:

            $value = $payload['reactions'] ?? null;

            if ($value === null) {
                $missingFields[] = 'reactions';
                goto after_reactions;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'reactions';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Discussion⚡️Reactions($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['reactions'] = $value;

            after_reactions:

            $value = $payload['repository_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'repository_url';
                goto after_repositoryUrl;
            }

            $properties['repositoryUrl'] = $value;

            after_repositoryUrl:

            $value = $payload['state'] ?? null;

            if ($value === null) {
                $properties['state'] = null;
                goto after_state;
            }

            $properties['state'] = $value;

            after_state:

            $value = $payload['state_reason'] ?? null;

            if ($value === null) {
                $properties['stateReason'] = null;
                goto after_stateReason;
            }

            $properties['stateReason'] = $value;

            after_stateReason:

            $value = $payload['timeline_url'] ?? null;

            if ($value === null) {
                $properties['timelineUrl'] = null;
                goto after_timelineUrl;
            }

            $properties['timelineUrl'] = $value;

            after_timelineUrl:

            $value = $payload['title'] ?? null;

            if ($value === null) {
                $missingFields[] = 'title';
                goto after_title;
            }

            $properties['title'] = $value;

            after_title:

            $value = $payload['updated_at'] ?? null;

            if ($value === null) {
                $missingFields[] = 'updated_at';
                goto after_updatedAt;
            }

            $properties['updatedAt'] = $value;

            after_updatedAt:

            $value = $payload['url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'url';
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

            $value = $payload['user'] ?? null;

            if ($value === null) {
                $properties['user'] = null;
                goto after_user;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'user';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Discussion⚡️AnswerChosenBy($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['user'] = $value;

            after_user:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookIssuesLocked\Issue', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookIssuesLocked\Issue::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WebhookIssuesLocked\Issue(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookIssuesLocked\Issue', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesLocked⚡️Issue⚡️PerformedViaGithubApp(array $payload): \ApiClients\Client\GitHub\Schema\WebhookIssuesLocked\Issue\PerformedViaGithubApp
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['created_at'] ?? null;

            if ($value === null) {
                $properties['createdAt'] = null;
                goto after_createdAt;
            }

            $properties['createdAt'] = $value;

            after_createdAt:

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
                $properties['externalUrl'] = null;
                goto after_externalUrl;
            }

            $properties['externalUrl'] = $value;

            after_externalUrl:

            $value = $payload['html_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'html_url';
                goto after_htmlUrl;
            }

            $properties['htmlUrl'] = $value;

            after_htmlUrl:

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
                goto after_nodeId;
            }

            $properties['nodeId'] = $value;

            after_nodeId:

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
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookDeploymentCreated⚡️Deployment⚡️PerformedViaGithubApp⚡️Permissions($value);
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
                $properties['updatedAt'] = null;
                goto after_updatedAt;
            }

            $properties['updatedAt'] = $value;

            after_updatedAt:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookIssuesLocked\Issue\PerformedViaGithubApp', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookIssuesLocked\Issue\PerformedViaGithubApp::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WebhookIssuesLocked\Issue\PerformedViaGithubApp(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookIssuesLocked\Issue\PerformedViaGithubApp', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesMilestoned(array $payload): \ApiClients\Client\GitHub\Schema\WebhookIssuesMilestoned
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

            $value = $payload['issue'] ?? null;

            if ($value === null) {
                $missingFields[] = 'issue';
                goto after_issue;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'issue';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesMilestoned⚡️Issue($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['issue'] = $value;

            after_issue:

            $value = $payload['milestone'] ?? null;

            if ($value === null) {
                $missingFields[] = 'milestone';
                goto after_milestone;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'milestone';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesDemilestoned⚡️Milestone($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['milestone'] = $value;

            after_milestone:

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
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookIssuesMilestoned', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookIssuesMilestoned::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WebhookIssuesMilestoned(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookIssuesMilestoned', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesMilestoned⚡️Issue(array $payload): \ApiClients\Client\GitHub\Schema\WebhookIssuesMilestoned\Issue
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['active_lock_reason'] ?? null;

            if ($value === null) {
                $properties['activeLockReason'] = null;
                goto after_activeLockReason;
            }

            $properties['activeLockReason'] = $value;

            after_activeLockReason:

            $value = $payload['assignee'] ?? null;

            if ($value === null) {
                $properties['assignee'] = null;
                goto after_assignee;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'assignee';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Discussion⚡️AnswerChosenBy($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['assignee'] = $value;

            after_assignee:

            $value = $payload['assignees'] ?? null;

            if ($value === null) {
                $missingFields[] = 'assignees';
                goto after_assignees;
            }

            static $assigneesCaster1;

            if ($assigneesCaster1 === null) {
                $assigneesCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\Discussion\\AnswerChosenBy',
));
            }

            $value = $assigneesCaster1->cast($value, $this);

            $properties['assignees'] = $value;

            after_assignees:

            $value = $payload['author_association'] ?? null;

            if ($value === null) {
                $missingFields[] = 'author_association';
                goto after_authorAssociation;
            }

            $properties['authorAssociation'] = $value;

            after_authorAssociation:

            $value = $payload['body'] ?? null;

            if ($value === null) {
                $properties['body'] = null;
                goto after_body;
            }

            $properties['body'] = $value;

            after_body:

            $value = $payload['closed_at'] ?? null;

            if ($value === null) {
                $properties['closedAt'] = null;
                goto after_closedAt;
            }

            $properties['closedAt'] = $value;

            after_closedAt:

            $value = $payload['comments'] ?? null;

            if ($value === null) {
                $missingFields[] = 'comments';
                goto after_comments;
            }

            $properties['comments'] = $value;

            after_comments:

            $value = $payload['comments_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'comments_url';
                goto after_commentsUrl;
            }

            $properties['commentsUrl'] = $value;

            after_commentsUrl:

            $value = $payload['created_at'] ?? null;

            if ($value === null) {
                $missingFields[] = 'created_at';
                goto after_createdAt;
            }

            $properties['createdAt'] = $value;

            after_createdAt:

            $value = $payload['draft'] ?? null;

            if ($value === null) {
                $properties['draft'] = null;
                goto after_draft;
            }

            $properties['draft'] = $value;

            after_draft:

            $value = $payload['events_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'events_url';
                goto after_eventsUrl;
            }

            $properties['eventsUrl'] = $value;

            after_eventsUrl:

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
                $properties['labels'] = null;
                goto after_labels;
            }

            static $labelsCaster1;

            if ($labelsCaster1 === null) {
                $labelsCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionLabeled\\Label',
));
            }

            $value = $labelsCaster1->cast($value, $this);

            $properties['labels'] = $value;

            after_labels:

            $value = $payload['labels_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'labels_url';
                goto after_labelsUrl;
            }

            $properties['labelsUrl'] = $value;

            after_labelsUrl:

            $value = $payload['locked'] ?? null;

            if ($value === null) {
                $properties['locked'] = null;
                goto after_locked;
            }

            $properties['locked'] = $value;

            after_locked:

            $value = $payload['milestone'] ?? null;

            if ($value === null) {
                $properties['milestone'] = null;
                goto after_milestone;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'milestone';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssueCommentCreated⚡️Issue⚡️Milestone($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['milestone'] = $value;

            after_milestone:

            $value = $payload['node_id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'node_id';
                goto after_nodeId;
            }

            $properties['nodeId'] = $value;

            after_nodeId:

            $value = $payload['number'] ?? null;

            if ($value === null) {
                $missingFields[] = 'number';
                goto after_number;
            }

            $properties['number'] = $value;

            after_number:

            $value = $payload['performed_via_github_app'] ?? null;

            if ($value === null) {
                $properties['performedViaGithubApp'] = null;
                goto after_performedViaGithubApp;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'performedViaGithubApp';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesMilestoned⚡️Issue⚡️PerformedViaGithubApp($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['performedViaGithubApp'] = $value;

            after_performedViaGithubApp:

            $value = $payload['pull_request'] ?? null;

            if ($value === null) {
                $properties['pullRequest'] = null;
                goto after_pullRequest;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'pullRequest';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssueCommentCreated⚡️Issue⚡️PullRequest($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['pullRequest'] = $value;

            after_pullRequest:

            $value = $payload['reactions'] ?? null;

            if ($value === null) {
                $missingFields[] = 'reactions';
                goto after_reactions;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'reactions';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Discussion⚡️Reactions($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['reactions'] = $value;

            after_reactions:

            $value = $payload['repository_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'repository_url';
                goto after_repositoryUrl;
            }

            $properties['repositoryUrl'] = $value;

            after_repositoryUrl:

            $value = $payload['state'] ?? null;

            if ($value === null) {
                $properties['state'] = null;
                goto after_state;
            }

            $properties['state'] = $value;

            after_state:

            $value = $payload['state_reason'] ?? null;

            if ($value === null) {
                $properties['stateReason'] = null;
                goto after_stateReason;
            }

            $properties['stateReason'] = $value;

            after_stateReason:

            $value = $payload['timeline_url'] ?? null;

            if ($value === null) {
                $properties['timelineUrl'] = null;
                goto after_timelineUrl;
            }

            $properties['timelineUrl'] = $value;

            after_timelineUrl:

            $value = $payload['title'] ?? null;

            if ($value === null) {
                $missingFields[] = 'title';
                goto after_title;
            }

            $properties['title'] = $value;

            after_title:

            $value = $payload['updated_at'] ?? null;

            if ($value === null) {
                $missingFields[] = 'updated_at';
                goto after_updatedAt;
            }

            $properties['updatedAt'] = $value;

            after_updatedAt:

            $value = $payload['url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'url';
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

            $value = $payload['user'] ?? null;

            if ($value === null) {
                $properties['user'] = null;
                goto after_user;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'user';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Discussion⚡️AnswerChosenBy($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['user'] = $value;

            after_user:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookIssuesMilestoned\Issue', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookIssuesMilestoned\Issue::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WebhookIssuesMilestoned\Issue(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookIssuesMilestoned\Issue', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesMilestoned⚡️Issue⚡️PerformedViaGithubApp(array $payload): \ApiClients\Client\GitHub\Schema\WebhookIssuesMilestoned\Issue\PerformedViaGithubApp
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['created_at'] ?? null;

            if ($value === null) {
                $properties['createdAt'] = null;
                goto after_createdAt;
            }

            $properties['createdAt'] = $value;

            after_createdAt:

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
                $properties['externalUrl'] = null;
                goto after_externalUrl;
            }

            $properties['externalUrl'] = $value;

            after_externalUrl:

            $value = $payload['html_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'html_url';
                goto after_htmlUrl;
            }

            $properties['htmlUrl'] = $value;

            after_htmlUrl:

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
                goto after_nodeId;
            }

            $properties['nodeId'] = $value;

            after_nodeId:

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
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssueCommentEdited⚡️Issue⚡️PerformedViaGithubApp⚡️Permissions($value);
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
                $properties['updatedAt'] = null;
                goto after_updatedAt;
            }

            $properties['updatedAt'] = $value;

            after_updatedAt:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookIssuesMilestoned\Issue\PerformedViaGithubApp', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookIssuesMilestoned\Issue\PerformedViaGithubApp::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WebhookIssuesMilestoned\Issue\PerformedViaGithubApp(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookIssuesMilestoned\Issue\PerformedViaGithubApp', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesOpened(array $payload): \ApiClients\Client\GitHub\Schema\WebhookIssuesOpened
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

            $value = $payload['changes'] ?? null;

            if ($value === null) {
                $properties['changes'] = null;
                goto after_changes;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'changes';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesOpened⚡️Changes($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['changes'] = $value;

            after_changes:

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

            $value = $payload['issue'] ?? null;

            if ($value === null) {
                $missingFields[] = 'issue';
                goto after_issue;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'issue';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesOpened⚡️Issue($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['issue'] = $value;

            after_issue:

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
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookIssuesOpened', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookIssuesOpened::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WebhookIssuesOpened(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookIssuesOpened', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesOpened⚡️Changes(array $payload): \ApiClients\Client\GitHub\Schema\WebhookIssuesOpened\Changes
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['old_issue'] ?? null;

            if ($value === null) {
                $properties['oldIssue'] = null;
                goto after_oldIssue;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'oldIssue';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesOpened⚡️Changes⚡️OldIssue($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['oldIssue'] = $value;

            after_oldIssue:

            $value = $payload['old_repository'] ?? null;

            if ($value === null) {
                $missingFields[] = 'old_repository';
                goto after_oldRepository;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'oldRepository';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesOpened⚡️Changes⚡️OldRepository($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['oldRepository'] = $value;

            after_oldRepository:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookIssuesOpened\Changes', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookIssuesOpened\Changes::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WebhookIssuesOpened\Changes(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookIssuesOpened\Changes', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesOpened⚡️Changes⚡️OldIssue(array $payload): \ApiClients\Client\GitHub\Schema\WebhookIssuesOpened\Changes\OldIssue
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['active_lock_reason'] ?? null;

            if ($value === null) {
                $properties['activeLockReason'] = null;
                goto after_activeLockReason;
            }

            $properties['activeLockReason'] = $value;

            after_activeLockReason:

            $value = $payload['assignee'] ?? null;

            if ($value === null) {
                $properties['assignee'] = null;
                goto after_assignee;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'assignee';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Discussion⚡️AnswerChosenBy($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['assignee'] = $value;

            after_assignee:

            $value = $payload['assignees'] ?? null;

            if ($value === null) {
                $missingFields[] = 'assignees';
                goto after_assignees;
            }

            static $assigneesCaster1;

            if ($assigneesCaster1 === null) {
                $assigneesCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\Discussion\\AnswerChosenBy',
));
            }

            $value = $assigneesCaster1->cast($value, $this);

            $properties['assignees'] = $value;

            after_assignees:

            $value = $payload['author_association'] ?? null;

            if ($value === null) {
                $missingFields[] = 'author_association';
                goto after_authorAssociation;
            }

            $properties['authorAssociation'] = $value;

            after_authorAssociation:

            $value = $payload['body'] ?? null;

            if ($value === null) {
                $properties['body'] = null;
                goto after_body;
            }

            $properties['body'] = $value;

            after_body:

            $value = $payload['closed_at'] ?? null;

            if ($value === null) {
                $properties['closedAt'] = null;
                goto after_closedAt;
            }

            $properties['closedAt'] = $value;

            after_closedAt:

            $value = $payload['comments'] ?? null;

            if ($value === null) {
                $missingFields[] = 'comments';
                goto after_comments;
            }

            $properties['comments'] = $value;

            after_comments:

            $value = $payload['comments_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'comments_url';
                goto after_commentsUrl;
            }

            $properties['commentsUrl'] = $value;

            after_commentsUrl:

            $value = $payload['created_at'] ?? null;

            if ($value === null) {
                $missingFields[] = 'created_at';
                goto after_createdAt;
            }

            $properties['createdAt'] = $value;

            after_createdAt:

            $value = $payload['draft'] ?? null;

            if ($value === null) {
                $properties['draft'] = null;
                goto after_draft;
            }

            $properties['draft'] = $value;

            after_draft:

            $value = $payload['events_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'events_url';
                goto after_eventsUrl;
            }

            $properties['eventsUrl'] = $value;

            after_eventsUrl:

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
                $properties['labels'] = null;
                goto after_labels;
            }

            static $labelsCaster1;

            if ($labelsCaster1 === null) {
                $labelsCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionLabeled\\Label',
));
            }

            $value = $labelsCaster1->cast($value, $this);

            $properties['labels'] = $value;

            after_labels:

            $value = $payload['labels_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'labels_url';
                goto after_labelsUrl;
            }

            $properties['labelsUrl'] = $value;

            after_labelsUrl:

            $value = $payload['locked'] ?? null;

            if ($value === null) {
                $properties['locked'] = null;
                goto after_locked;
            }

            $properties['locked'] = $value;

            after_locked:

            $value = $payload['milestone'] ?? null;

            if ($value === null) {
                $properties['milestone'] = null;
                goto after_milestone;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'milestone';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesDeleted⚡️Issue⚡️Milestone($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['milestone'] = $value;

            after_milestone:

            $value = $payload['node_id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'node_id';
                goto after_nodeId;
            }

            $properties['nodeId'] = $value;

            after_nodeId:

            $value = $payload['number'] ?? null;

            if ($value === null) {
                $missingFields[] = 'number';
                goto after_number;
            }

            $properties['number'] = $value;

            after_number:

            $value = $payload['performed_via_github_app'] ?? null;

            if ($value === null) {
                $properties['performedViaGithubApp'] = null;
                goto after_performedViaGithubApp;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'performedViaGithubApp';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssueCommentDeleted⚡️Issue⚡️PerformedViaGithubApp($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['performedViaGithubApp'] = $value;

            after_performedViaGithubApp:

            $value = $payload['pull_request'] ?? null;

            if ($value === null) {
                $properties['pullRequest'] = null;
                goto after_pullRequest;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'pullRequest';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssueCommentCreated⚡️Issue⚡️PullRequest($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['pullRequest'] = $value;

            after_pullRequest:

            $value = $payload['reactions'] ?? null;

            if ($value === null) {
                $missingFields[] = 'reactions';
                goto after_reactions;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'reactions';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Discussion⚡️Reactions($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['reactions'] = $value;

            after_reactions:

            $value = $payload['repository_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'repository_url';
                goto after_repositoryUrl;
            }

            $properties['repositoryUrl'] = $value;

            after_repositoryUrl:

            $value = $payload['state'] ?? null;

            if ($value === null) {
                $properties['state'] = null;
                goto after_state;
            }

            $properties['state'] = $value;

            after_state:

            $value = $payload['state_reason'] ?? null;

            if ($value === null) {
                $properties['stateReason'] = null;
                goto after_stateReason;
            }

            $properties['stateReason'] = $value;

            after_stateReason:

            $value = $payload['timeline_url'] ?? null;

            if ($value === null) {
                $properties['timelineUrl'] = null;
                goto after_timelineUrl;
            }

            $properties['timelineUrl'] = $value;

            after_timelineUrl:

            $value = $payload['title'] ?? null;

            if ($value === null) {
                $missingFields[] = 'title';
                goto after_title;
            }

            $properties['title'] = $value;

            after_title:

            $value = $payload['updated_at'] ?? null;

            if ($value === null) {
                $missingFields[] = 'updated_at';
                goto after_updatedAt;
            }

            $properties['updatedAt'] = $value;

            after_updatedAt:

            $value = $payload['url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'url';
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

            $value = $payload['user'] ?? null;

            if ($value === null) {
                $properties['user'] = null;
                goto after_user;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'user';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Discussion⚡️AnswerChosenBy($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['user'] = $value;

            after_user:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookIssuesOpened\Changes\OldIssue', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookIssuesOpened\Changes\OldIssue::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WebhookIssuesOpened\Changes\OldIssue(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookIssuesOpened\Changes\OldIssue', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssueCommentDeleted⚡️Issue⚡️PerformedViaGithubApp(array $payload): \ApiClients\Client\GitHub\Schema\WebhookIssueCommentDeleted\Issue\PerformedViaGithubApp
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['created_at'] ?? null;

            if ($value === null) {
                $properties['createdAt'] = null;
                goto after_createdAt;
            }

            $properties['createdAt'] = $value;

            after_createdAt:

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
                $properties['externalUrl'] = null;
                goto after_externalUrl;
            }

            $properties['externalUrl'] = $value;

            after_externalUrl:

            $value = $payload['html_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'html_url';
                goto after_htmlUrl;
            }

            $properties['htmlUrl'] = $value;

            after_htmlUrl:

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
                goto after_nodeId;
            }

            $properties['nodeId'] = $value;

            after_nodeId:

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
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookDeploymentCreated⚡️Deployment⚡️PerformedViaGithubApp⚡️Permissions($value);
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
                $properties['updatedAt'] = null;
                goto after_updatedAt;
            }

            $properties['updatedAt'] = $value;

            after_updatedAt:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookIssueCommentDeleted\Issue\PerformedViaGithubApp', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookIssueCommentDeleted\Issue\PerformedViaGithubApp::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WebhookIssueCommentDeleted\Issue\PerformedViaGithubApp(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookIssueCommentDeleted\Issue\PerformedViaGithubApp', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesOpened⚡️Changes⚡️OldRepository(array $payload): \ApiClients\Client\GitHub\Schema\WebhookIssuesOpened\Changes\OldRepository
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['allow_auto_merge'] ?? null;

            if ($value === null) {
                $properties['allowAutoMerge'] = null;
                goto after_allowAutoMerge;
            }

            $properties['allowAutoMerge'] = $value;

            after_allowAutoMerge:

            $value = $payload['allow_forking'] ?? null;

            if ($value === null) {
                $properties['allowForking'] = null;
                goto after_allowForking;
            }

            $properties['allowForking'] = $value;

            after_allowForking:

            $value = $payload['allow_merge_commit'] ?? null;

            if ($value === null) {
                $properties['allowMergeCommit'] = null;
                goto after_allowMergeCommit;
            }

            $properties['allowMergeCommit'] = $value;

            after_allowMergeCommit:

            $value = $payload['allow_rebase_merge'] ?? null;

            if ($value === null) {
                $properties['allowRebaseMerge'] = null;
                goto after_allowRebaseMerge;
            }

            $properties['allowRebaseMerge'] = $value;

            after_allowRebaseMerge:

            $value = $payload['allow_squash_merge'] ?? null;

            if ($value === null) {
                $properties['allowSquashMerge'] = null;
                goto after_allowSquashMerge;
            }

            $properties['allowSquashMerge'] = $value;

            after_allowSquashMerge:

            $value = $payload['allow_update_branch'] ?? null;

            if ($value === null) {
                $properties['allowUpdateBranch'] = null;
                goto after_allowUpdateBranch;
            }

            $properties['allowUpdateBranch'] = $value;

            after_allowUpdateBranch:

            $value = $payload['archive_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'archive_url';
                goto after_archiveUrl;
            }

            $properties['archiveUrl'] = $value;

            after_archiveUrl:

            $value = $payload['archived'] ?? null;

            if ($value === null) {
                $missingFields[] = 'archived';
                goto after_archived;
            }

            $properties['archived'] = $value;

            after_archived:

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

            $value = $payload['clone_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'clone_url';
                goto after_cloneUrl;
            }

            $properties['cloneUrl'] = $value;

            after_cloneUrl:

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

            $value = $payload['created_at'] ?? null;

            if ($value === null) {
                $missingFields[] = 'created_at';
                goto after_createdAt;
            }

            $properties['createdAt'] = $value;

            after_createdAt:

            $value = $payload['default_branch'] ?? null;

            if ($value === null) {
                $missingFields[] = 'default_branch';
                goto after_defaultBranch;
            }

            $properties['defaultBranch'] = $value;

            after_defaultBranch:

            $value = $payload['delete_branch_on_merge'] ?? null;

            if ($value === null) {
                $properties['deleteBranchOnMerge'] = null;
                goto after_deleteBranchOnMerge;
            }

            $properties['deleteBranchOnMerge'] = $value;

            after_deleteBranchOnMerge:

            $value = $payload['deployments_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'deployments_url';
                goto after_deploymentsUrl;
            }

            $properties['deploymentsUrl'] = $value;

            after_deploymentsUrl:

            $value = $payload['description'] ?? null;

            if ($value === null) {
                $properties['description'] = null;
                goto after_description;
            }

            $properties['description'] = $value;

            after_description:

            $value = $payload['disabled'] ?? null;

            if ($value === null) {
                $properties['disabled'] = null;
                goto after_disabled;
            }

            $properties['disabled'] = $value;

            after_disabled:

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

            $value = $payload['fork'] ?? null;

            if ($value === null) {
                $missingFields[] = 'fork';
                goto after_fork;
            }

            $properties['fork'] = $value;

            after_fork:

            $value = $payload['forks'] ?? null;

            if ($value === null) {
                $missingFields[] = 'forks';
                goto after_forks;
            }

            $properties['forks'] = $value;

            after_forks:

            $value = $payload['forks_count'] ?? null;

            if ($value === null) {
                $missingFields[] = 'forks_count';
                goto after_forksCount;
            }

            $properties['forksCount'] = $value;

            after_forksCount:

            $value = $payload['forks_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'forks_url';
                goto after_forksUrl;
            }

            $properties['forksUrl'] = $value;

            after_forksUrl:

            $value = $payload['full_name'] ?? null;

            if ($value === null) {
                $missingFields[] = 'full_name';
                goto after_fullName;
            }

            $properties['fullName'] = $value;

            after_fullName:

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

            $value = $payload['has_downloads'] ?? null;

            if ($value === null) {
                $missingFields[] = 'has_downloads';
                goto after_hasDownloads;
            }

            $properties['hasDownloads'] = $value;

            after_hasDownloads:

            $value = $payload['has_issues'] ?? null;

            if ($value === null) {
                $missingFields[] = 'has_issues';
                goto after_hasIssues;
            }

            $properties['hasIssues'] = $value;

            after_hasIssues:

            $value = $payload['has_pages'] ?? null;

            if ($value === null) {
                $missingFields[] = 'has_pages';
                goto after_hasPages;
            }

            $properties['hasPages'] = $value;

            after_hasPages:

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

            $value = $payload['homepage'] ?? null;

            if ($value === null) {
                $properties['homepage'] = null;
                goto after_homepage;
            }

            $properties['homepage'] = $value;

            after_homepage:

            $value = $payload['hooks_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'hooks_url';
                goto after_hooksUrl;
            }

            $properties['hooksUrl'] = $value;

            after_hooksUrl:

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

            $value = $payload['is_template'] ?? null;

            if ($value === null) {
                $properties['isTemplate'] = null;
                goto after_isTemplate;
            }

            $properties['isTemplate'] = $value;

            after_isTemplate:

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

            $value = $payload['language'] ?? null;

            if ($value === null) {
                $properties['language'] = null;
                goto after_language;
            }

            $properties['language'] = $value;

            after_language:

            $value = $payload['languages_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'languages_url';
                goto after_languagesUrl;
            }

            $properties['languagesUrl'] = $value;

            after_languagesUrl:

            $value = $payload['license'] ?? null;

            if ($value === null) {
                $properties['license'] = null;
                goto after_license;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'license';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookFork⚡️Forkee⚡️License($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['license'] = $value;

            after_license:

            $value = $payload['master_branch'] ?? null;

            if ($value === null) {
                $properties['masterBranch'] = null;
                goto after_masterBranch;
            }

            $properties['masterBranch'] = $value;

            after_masterBranch:

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

            $value = $payload['mirror_url'] ?? null;

            if ($value === null) {
                $properties['mirrorUrl'] = null;
                goto after_mirrorUrl;
            }

            $properties['mirrorUrl'] = $value;

            after_mirrorUrl:

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

            $value = $payload['notifications_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'notifications_url';
                goto after_notificationsUrl;
            }

            $properties['notificationsUrl'] = $value;

            after_notificationsUrl:

            $value = $payload['open_issues'] ?? null;

            if ($value === null) {
                $missingFields[] = 'open_issues';
                goto after_openIssues;
            }

            $properties['openIssues'] = $value;

            after_openIssues:

            $value = $payload['open_issues_count'] ?? null;

            if ($value === null) {
                $missingFields[] = 'open_issues_count';
                goto after_openIssuesCount;
            }

            $properties['openIssuesCount'] = $value;

            after_openIssuesCount:

            $value = $payload['organization'] ?? null;

            if ($value === null) {
                $properties['organization'] = null;
                goto after_organization;
            }

            $properties['organization'] = $value;

            after_organization:

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
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookFork⚡️Forkee⚡️Permissions($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['permissions'] = $value;

            after_permissions:

            $value = $payload['private'] ?? null;

            if ($value === null) {
                $missingFields[] = 'private';
                goto after_private;
            }

            $properties['private'] = $value;

            after_private:

            $value = $payload['public'] ?? null;

            if ($value === null) {
                $properties['public'] = null;
                goto after_public;
            }

            $properties['public'] = $value;

            after_public:

            $value = $payload['pulls_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'pulls_url';
                goto after_pullsUrl;
            }

            $properties['pullsUrl'] = $value;

            after_pullsUrl:

            $value = $payload['pushed_at'] ?? null;

            if ($value === null) {
                $missingFields[] = 'pushed_at';
                goto after_pushedAt;
            }

            $properties['pushedAt'] = $value;

            after_pushedAt:

            $value = $payload['releases_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'releases_url';
                goto after_releasesUrl;
            }

            $properties['releasesUrl'] = $value;

            after_releasesUrl:

            $value = $payload['role_name'] ?? null;

            if ($value === null) {
                $properties['roleName'] = null;
                goto after_roleName;
            }

            $properties['roleName'] = $value;

            after_roleName:

            $value = $payload['size'] ?? null;

            if ($value === null) {
                $missingFields[] = 'size';
                goto after_size;
            }

            $properties['size'] = $value;

            after_size:

            $value = $payload['ssh_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'ssh_url';
                goto after_sshUrl;
            }

            $properties['sshUrl'] = $value;

            after_sshUrl:

            $value = $payload['stargazers'] ?? null;

            if ($value === null) {
                $properties['stargazers'] = null;
                goto after_stargazers;
            }

            $properties['stargazers'] = $value;

            after_stargazers:

            $value = $payload['stargazers_count'] ?? null;

            if ($value === null) {
                $missingFields[] = 'stargazers_count';
                goto after_stargazersCount;
            }

            $properties['stargazersCount'] = $value;

            after_stargazersCount:

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

            $value = $payload['svn_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'svn_url';
                goto after_svnUrl;
            }

            $properties['svnUrl'] = $value;

            after_svnUrl:

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

            $value = $payload['topics'] ?? null;

            if ($value === null) {
                $missingFields[] = 'topics';
                goto after_topics;
            }

            $properties['topics'] = $value;

            after_topics:

            $value = $payload['trees_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'trees_url';
                goto after_treesUrl;
            }

            $properties['treesUrl'] = $value;

            after_treesUrl:

            $value = $payload['updated_at'] ?? null;

            if ($value === null) {
                $missingFields[] = 'updated_at';
                goto after_updatedAt;
            }

            $properties['updatedAt'] = $value;

            after_updatedAt:

            $value = $payload['url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'url';
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

            $value = $payload['visibility'] ?? null;

            if ($value === null) {
                $missingFields[] = 'visibility';
                goto after_visibility;
            }

            $properties['visibility'] = $value;

            after_visibility:

            $value = $payload['watchers'] ?? null;

            if ($value === null) {
                $missingFields[] = 'watchers';
                goto after_watchers;
            }

            $properties['watchers'] = $value;

            after_watchers:

            $value = $payload['watchers_count'] ?? null;

            if ($value === null) {
                $missingFields[] = 'watchers_count';
                goto after_watchersCount;
            }

            $properties['watchersCount'] = $value;

            after_watchersCount:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookIssuesOpened\Changes\OldRepository', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookIssuesOpened\Changes\OldRepository::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WebhookIssuesOpened\Changes\OldRepository(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookIssuesOpened\Changes\OldRepository', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookFork⚡️Forkee⚡️License(array $payload): \ApiClients\Client\GitHub\Schema\WebhookFork\Forkee\License
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

            $value = $payload['node_id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'node_id';
                goto after_nodeId;
            }

            $properties['nodeId'] = $value;

            after_nodeId:

            $value = $payload['spdx_id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'spdx_id';
                goto after_spdxId;
            }

            $properties['spdxId'] = $value;

            after_spdxId:

            $value = $payload['url'] ?? null;

            if ($value === null) {
                $properties['url'] = null;
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookFork\Forkee\License', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookFork\Forkee\License::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WebhookFork\Forkee\License(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookFork\Forkee\License', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookFork⚡️Forkee⚡️Permissions(array $payload): \ApiClients\Client\GitHub\Schema\WebhookFork\Forkee\Permissions
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

            $value = $payload['maintain'] ?? null;

            if ($value === null) {
                $properties['maintain'] = null;
                goto after_maintain;
            }

            $properties['maintain'] = $value;

            after_maintain:

            $value = $payload['pull'] ?? null;

            if ($value === null) {
                $missingFields[] = 'pull';
                goto after_pull;
            }

            $properties['pull'] = $value;

            after_pull:

            $value = $payload['push'] ?? null;

            if ($value === null) {
                $missingFields[] = 'push';
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

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookFork\Forkee\Permissions', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookFork\Forkee\Permissions::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WebhookFork\Forkee\Permissions(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookFork\Forkee\Permissions', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesOpened⚡️Issue(array $payload): \ApiClients\Client\GitHub\Schema\WebhookIssuesOpened\Issue
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['active_lock_reason'] ?? null;

            if ($value === null) {
                $properties['activeLockReason'] = null;
                goto after_activeLockReason;
            }

            $properties['activeLockReason'] = $value;

            after_activeLockReason:

            $value = $payload['assignee'] ?? null;

            if ($value === null) {
                $properties['assignee'] = null;
                goto after_assignee;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'assignee';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Discussion⚡️AnswerChosenBy($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['assignee'] = $value;

            after_assignee:

            $value = $payload['assignees'] ?? null;

            if ($value === null) {
                $missingFields[] = 'assignees';
                goto after_assignees;
            }

            static $assigneesCaster1;

            if ($assigneesCaster1 === null) {
                $assigneesCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\Discussion\\AnswerChosenBy',
));
            }

            $value = $assigneesCaster1->cast($value, $this);

            $properties['assignees'] = $value;

            after_assignees:

            $value = $payload['author_association'] ?? null;

            if ($value === null) {
                $missingFields[] = 'author_association';
                goto after_authorAssociation;
            }

            $properties['authorAssociation'] = $value;

            after_authorAssociation:

            $value = $payload['body'] ?? null;

            if ($value === null) {
                $properties['body'] = null;
                goto after_body;
            }

            $properties['body'] = $value;

            after_body:

            $value = $payload['closed_at'] ?? null;

            if ($value === null) {
                $properties['closedAt'] = null;
                goto after_closedAt;
            }

            $properties['closedAt'] = $value;

            after_closedAt:

            $value = $payload['comments'] ?? null;

            if ($value === null) {
                $missingFields[] = 'comments';
                goto after_comments;
            }

            $properties['comments'] = $value;

            after_comments:

            $value = $payload['comments_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'comments_url';
                goto after_commentsUrl;
            }

            $properties['commentsUrl'] = $value;

            after_commentsUrl:

            $value = $payload['created_at'] ?? null;

            if ($value === null) {
                $missingFields[] = 'created_at';
                goto after_createdAt;
            }

            $properties['createdAt'] = $value;

            after_createdAt:

            $value = $payload['draft'] ?? null;

            if ($value === null) {
                $properties['draft'] = null;
                goto after_draft;
            }

            $properties['draft'] = $value;

            after_draft:

            $value = $payload['events_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'events_url';
                goto after_eventsUrl;
            }

            $properties['eventsUrl'] = $value;

            after_eventsUrl:

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
                $properties['labels'] = null;
                goto after_labels;
            }

            static $labelsCaster1;

            if ($labelsCaster1 === null) {
                $labelsCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionLabeled\\Label',
));
            }

            $value = $labelsCaster1->cast($value, $this);

            $properties['labels'] = $value;

            after_labels:

            $value = $payload['labels_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'labels_url';
                goto after_labelsUrl;
            }

            $properties['labelsUrl'] = $value;

            after_labelsUrl:

            $value = $payload['locked'] ?? null;

            if ($value === null) {
                $properties['locked'] = null;
                goto after_locked;
            }

            $properties['locked'] = $value;

            after_locked:

            $value = $payload['milestone'] ?? null;

            if ($value === null) {
                $properties['milestone'] = null;
                goto after_milestone;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'milestone';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssueCommentCreated⚡️Issue⚡️Milestone($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['milestone'] = $value;

            after_milestone:

            $value = $payload['node_id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'node_id';
                goto after_nodeId;
            }

            $properties['nodeId'] = $value;

            after_nodeId:

            $value = $payload['number'] ?? null;

            if ($value === null) {
                $missingFields[] = 'number';
                goto after_number;
            }

            $properties['number'] = $value;

            after_number:

            $value = $payload['performed_via_github_app'] ?? null;

            if ($value === null) {
                $properties['performedViaGithubApp'] = null;
                goto after_performedViaGithubApp;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'performedViaGithubApp';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesEdited⚡️Issue⚡️PerformedViaGithubApp($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['performedViaGithubApp'] = $value;

            after_performedViaGithubApp:

            $value = $payload['pull_request'] ?? null;

            if ($value === null) {
                $properties['pullRequest'] = null;
                goto after_pullRequest;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'pullRequest';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssueCommentCreated⚡️Issue⚡️PullRequest($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['pullRequest'] = $value;

            after_pullRequest:

            $value = $payload['reactions'] ?? null;

            if ($value === null) {
                $missingFields[] = 'reactions';
                goto after_reactions;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'reactions';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Discussion⚡️Reactions($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['reactions'] = $value;

            after_reactions:

            $value = $payload['repository_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'repository_url';
                goto after_repositoryUrl;
            }

            $properties['repositoryUrl'] = $value;

            after_repositoryUrl:

            $value = $payload['state'] ?? null;

            if ($value === null) {
                $properties['state'] = null;
                goto after_state;
            }

            $properties['state'] = $value;

            after_state:

            $value = $payload['state_reason'] ?? null;

            if ($value === null) {
                $properties['stateReason'] = null;
                goto after_stateReason;
            }

            $properties['stateReason'] = $value;

            after_stateReason:

            $value = $payload['timeline_url'] ?? null;

            if ($value === null) {
                $properties['timelineUrl'] = null;
                goto after_timelineUrl;
            }

            $properties['timelineUrl'] = $value;

            after_timelineUrl:

            $value = $payload['title'] ?? null;

            if ($value === null) {
                $missingFields[] = 'title';
                goto after_title;
            }

            $properties['title'] = $value;

            after_title:

            $value = $payload['updated_at'] ?? null;

            if ($value === null) {
                $missingFields[] = 'updated_at';
                goto after_updatedAt;
            }

            $properties['updatedAt'] = $value;

            after_updatedAt:

            $value = $payload['url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'url';
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

            $value = $payload['user'] ?? null;

            if ($value === null) {
                $properties['user'] = null;
                goto after_user;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'user';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Discussion⚡️AnswerChosenBy($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['user'] = $value;

            after_user:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookIssuesOpened\Issue', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookIssuesOpened\Issue::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WebhookIssuesOpened\Issue(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookIssuesOpened\Issue', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesPinned(array $payload): \ApiClients\Client\GitHub\Schema\WebhookIssuesPinned
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

            $value = $payload['issue'] ?? null;

            if ($value === null) {
                $missingFields[] = 'issue';
                goto after_issue;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'issue';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesPinned⚡️Issue($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['issue'] = $value;

            after_issue:

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
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookIssuesPinned', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookIssuesPinned::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WebhookIssuesPinned(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookIssuesPinned', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesPinned⚡️Issue(array $payload): \ApiClients\Client\GitHub\Schema\WebhookIssuesPinned\Issue
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['active_lock_reason'] ?? null;

            if ($value === null) {
                $properties['activeLockReason'] = null;
                goto after_activeLockReason;
            }

            $properties['activeLockReason'] = $value;

            after_activeLockReason:

            $value = $payload['assignee'] ?? null;

            if ($value === null) {
                $properties['assignee'] = null;
                goto after_assignee;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'assignee';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Discussion⚡️AnswerChosenBy($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['assignee'] = $value;

            after_assignee:

            $value = $payload['assignees'] ?? null;

            if ($value === null) {
                $missingFields[] = 'assignees';
                goto after_assignees;
            }

            static $assigneesCaster1;

            if ($assigneesCaster1 === null) {
                $assigneesCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\Discussion\\AnswerChosenBy',
));
            }

            $value = $assigneesCaster1->cast($value, $this);

            $properties['assignees'] = $value;

            after_assignees:

            $value = $payload['author_association'] ?? null;

            if ($value === null) {
                $missingFields[] = 'author_association';
                goto after_authorAssociation;
            }

            $properties['authorAssociation'] = $value;

            after_authorAssociation:

            $value = $payload['body'] ?? null;

            if ($value === null) {
                $properties['body'] = null;
                goto after_body;
            }

            $properties['body'] = $value;

            after_body:

            $value = $payload['closed_at'] ?? null;

            if ($value === null) {
                $properties['closedAt'] = null;
                goto after_closedAt;
            }

            $properties['closedAt'] = $value;

            after_closedAt:

            $value = $payload['comments'] ?? null;

            if ($value === null) {
                $missingFields[] = 'comments';
                goto after_comments;
            }

            $properties['comments'] = $value;

            after_comments:

            $value = $payload['comments_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'comments_url';
                goto after_commentsUrl;
            }

            $properties['commentsUrl'] = $value;

            after_commentsUrl:

            $value = $payload['created_at'] ?? null;

            if ($value === null) {
                $missingFields[] = 'created_at';
                goto after_createdAt;
            }

            $properties['createdAt'] = $value;

            after_createdAt:

            $value = $payload['draft'] ?? null;

            if ($value === null) {
                $properties['draft'] = null;
                goto after_draft;
            }

            $properties['draft'] = $value;

            after_draft:

            $value = $payload['events_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'events_url';
                goto after_eventsUrl;
            }

            $properties['eventsUrl'] = $value;

            after_eventsUrl:

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
                $properties['labels'] = null;
                goto after_labels;
            }

            static $labelsCaster1;

            if ($labelsCaster1 === null) {
                $labelsCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionLabeled\\Label',
));
            }

            $value = $labelsCaster1->cast($value, $this);

            $properties['labels'] = $value;

            after_labels:

            $value = $payload['labels_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'labels_url';
                goto after_labelsUrl;
            }

            $properties['labelsUrl'] = $value;

            after_labelsUrl:

            $value = $payload['locked'] ?? null;

            if ($value === null) {
                $properties['locked'] = null;
                goto after_locked;
            }

            $properties['locked'] = $value;

            after_locked:

            $value = $payload['milestone'] ?? null;

            if ($value === null) {
                $properties['milestone'] = null;
                goto after_milestone;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'milestone';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesDeleted⚡️Issue⚡️Milestone($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['milestone'] = $value;

            after_milestone:

            $value = $payload['node_id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'node_id';
                goto after_nodeId;
            }

            $properties['nodeId'] = $value;

            after_nodeId:

            $value = $payload['number'] ?? null;

            if ($value === null) {
                $missingFields[] = 'number';
                goto after_number;
            }

            $properties['number'] = $value;

            after_number:

            $value = $payload['performed_via_github_app'] ?? null;

            if ($value === null) {
                $properties['performedViaGithubApp'] = null;
                goto after_performedViaGithubApp;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'performedViaGithubApp';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssueCommentDeleted⚡️Issue⚡️PerformedViaGithubApp($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['performedViaGithubApp'] = $value;

            after_performedViaGithubApp:

            $value = $payload['pull_request'] ?? null;

            if ($value === null) {
                $properties['pullRequest'] = null;
                goto after_pullRequest;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'pullRequest';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssueCommentCreated⚡️Issue⚡️PullRequest($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['pullRequest'] = $value;

            after_pullRequest:

            $value = $payload['reactions'] ?? null;

            if ($value === null) {
                $missingFields[] = 'reactions';
                goto after_reactions;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'reactions';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Discussion⚡️Reactions($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['reactions'] = $value;

            after_reactions:

            $value = $payload['repository_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'repository_url';
                goto after_repositoryUrl;
            }

            $properties['repositoryUrl'] = $value;

            after_repositoryUrl:

            $value = $payload['state'] ?? null;

            if ($value === null) {
                $properties['state'] = null;
                goto after_state;
            }

            $properties['state'] = $value;

            after_state:

            $value = $payload['state_reason'] ?? null;

            if ($value === null) {
                $properties['stateReason'] = null;
                goto after_stateReason;
            }

            $properties['stateReason'] = $value;

            after_stateReason:

            $value = $payload['timeline_url'] ?? null;

            if ($value === null) {
                $properties['timelineUrl'] = null;
                goto after_timelineUrl;
            }

            $properties['timelineUrl'] = $value;

            after_timelineUrl:

            $value = $payload['title'] ?? null;

            if ($value === null) {
                $missingFields[] = 'title';
                goto after_title;
            }

            $properties['title'] = $value;

            after_title:

            $value = $payload['updated_at'] ?? null;

            if ($value === null) {
                $missingFields[] = 'updated_at';
                goto after_updatedAt;
            }

            $properties['updatedAt'] = $value;

            after_updatedAt:

            $value = $payload['url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'url';
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

            $value = $payload['user'] ?? null;

            if ($value === null) {
                $properties['user'] = null;
                goto after_user;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'user';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Discussion⚡️AnswerChosenBy($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['user'] = $value;

            after_user:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookIssuesPinned\Issue', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookIssuesPinned\Issue::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WebhookIssuesPinned\Issue(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookIssuesPinned\Issue', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesReopened(array $payload): \ApiClients\Client\GitHub\Schema\WebhookIssuesReopened
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

            $value = $payload['issue'] ?? null;

            if ($value === null) {
                $missingFields[] = 'issue';
                goto after_issue;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'issue';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesReopened⚡️Issue($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['issue'] = $value;

            after_issue:

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
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookIssuesReopened', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookIssuesReopened::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WebhookIssuesReopened(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookIssuesReopened', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesReopened⚡️Issue(array $payload): \ApiClients\Client\GitHub\Schema\WebhookIssuesReopened\Issue
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['active_lock_reason'] ?? null;

            if ($value === null) {
                $properties['activeLockReason'] = null;
                goto after_activeLockReason;
            }

            $properties['activeLockReason'] = $value;

            after_activeLockReason:

            $value = $payload['assignee'] ?? null;

            if ($value === null) {
                $properties['assignee'] = null;
                goto after_assignee;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'assignee';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Discussion⚡️AnswerChosenBy($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['assignee'] = $value;

            after_assignee:

            $value = $payload['assignees'] ?? null;

            if ($value === null) {
                $missingFields[] = 'assignees';
                goto after_assignees;
            }

            static $assigneesCaster1;

            if ($assigneesCaster1 === null) {
                $assigneesCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\WebhookIssueCommentCreated\\Issue\\Assignee',
));
            }

            $value = $assigneesCaster1->cast($value, $this);

            $properties['assignees'] = $value;

            after_assignees:

            $value = $payload['author_association'] ?? null;

            if ($value === null) {
                $missingFields[] = 'author_association';
                goto after_authorAssociation;
            }

            $properties['authorAssociation'] = $value;

            after_authorAssociation:

            $value = $payload['body'] ?? null;

            if ($value === null) {
                $properties['body'] = null;
                goto after_body;
            }

            $properties['body'] = $value;

            after_body:

            $value = $payload['closed_at'] ?? null;

            if ($value === null) {
                $properties['closedAt'] = null;
                goto after_closedAt;
            }

            $properties['closedAt'] = $value;

            after_closedAt:

            $value = $payload['comments'] ?? null;

            if ($value === null) {
                $missingFields[] = 'comments';
                goto after_comments;
            }

            $properties['comments'] = $value;

            after_comments:

            $value = $payload['comments_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'comments_url';
                goto after_commentsUrl;
            }

            $properties['commentsUrl'] = $value;

            after_commentsUrl:

            $value = $payload['created_at'] ?? null;

            if ($value === null) {
                $missingFields[] = 'created_at';
                goto after_createdAt;
            }

            $properties['createdAt'] = $value;

            after_createdAt:

            $value = $payload['draft'] ?? null;

            if ($value === null) {
                $properties['draft'] = null;
                goto after_draft;
            }

            $properties['draft'] = $value;

            after_draft:

            $value = $payload['events_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'events_url';
                goto after_eventsUrl;
            }

            $properties['eventsUrl'] = $value;

            after_eventsUrl:

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
                $properties['labels'] = null;
                goto after_labels;
            }

            static $labelsCaster1;

            if ($labelsCaster1 === null) {
                $labelsCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionLabeled\\Label',
));
            }

            $value = $labelsCaster1->cast($value, $this);

            $properties['labels'] = $value;

            after_labels:

            $value = $payload['labels_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'labels_url';
                goto after_labelsUrl;
            }

            $properties['labelsUrl'] = $value;

            after_labelsUrl:

            $value = $payload['locked'] ?? null;

            if ($value === null) {
                $properties['locked'] = null;
                goto after_locked;
            }

            $properties['locked'] = $value;

            after_locked:

            $value = $payload['milestone'] ?? null;

            if ($value === null) {
                $properties['milestone'] = null;
                goto after_milestone;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'milestone';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssueCommentCreated⚡️Issue⚡️Milestone($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['milestone'] = $value;

            after_milestone:

            $value = $payload['node_id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'node_id';
                goto after_nodeId;
            }

            $properties['nodeId'] = $value;

            after_nodeId:

            $value = $payload['number'] ?? null;

            if ($value === null) {
                $missingFields[] = 'number';
                goto after_number;
            }

            $properties['number'] = $value;

            after_number:

            $value = $payload['performed_via_github_app'] ?? null;

            if ($value === null) {
                $properties['performedViaGithubApp'] = null;
                goto after_performedViaGithubApp;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'performedViaGithubApp';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesReopened⚡️Issue⚡️PerformedViaGithubApp($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['performedViaGithubApp'] = $value;

            after_performedViaGithubApp:

            $value = $payload['pull_request'] ?? null;

            if ($value === null) {
                $properties['pullRequest'] = null;
                goto after_pullRequest;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'pullRequest';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssueCommentCreated⚡️Issue⚡️PullRequest($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['pullRequest'] = $value;

            after_pullRequest:

            $value = $payload['reactions'] ?? null;

            if ($value === null) {
                $missingFields[] = 'reactions';
                goto after_reactions;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'reactions';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Discussion⚡️Reactions($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['reactions'] = $value;

            after_reactions:

            $value = $payload['repository_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'repository_url';
                goto after_repositoryUrl;
            }

            $properties['repositoryUrl'] = $value;

            after_repositoryUrl:

            $value = $payload['state'] ?? null;

            if ($value === null) {
                $properties['state'] = null;
                goto after_state;
            }

            $properties['state'] = $value;

            after_state:

            $value = $payload['state_reason'] ?? null;

            if ($value === null) {
                $properties['stateReason'] = null;
                goto after_stateReason;
            }

            $properties['stateReason'] = $value;

            after_stateReason:

            $value = $payload['timeline_url'] ?? null;

            if ($value === null) {
                $properties['timelineUrl'] = null;
                goto after_timelineUrl;
            }

            $properties['timelineUrl'] = $value;

            after_timelineUrl:

            $value = $payload['title'] ?? null;

            if ($value === null) {
                $missingFields[] = 'title';
                goto after_title;
            }

            $properties['title'] = $value;

            after_title:

            $value = $payload['updated_at'] ?? null;

            if ($value === null) {
                $missingFields[] = 'updated_at';
                goto after_updatedAt;
            }

            $properties['updatedAt'] = $value;

            after_updatedAt:

            $value = $payload['url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'url';
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

            $value = $payload['user'] ?? null;

            if ($value === null) {
                $properties['user'] = null;
                goto after_user;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'user';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssueCommentCreated⚡️Issue⚡️Assignee($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['user'] = $value;

            after_user:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookIssuesReopened\Issue', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookIssuesReopened\Issue::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WebhookIssuesReopened\Issue(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookIssuesReopened\Issue', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesReopened⚡️Issue⚡️PerformedViaGithubApp(array $payload): \ApiClients\Client\GitHub\Schema\WebhookIssuesReopened\Issue\PerformedViaGithubApp
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['created_at'] ?? null;

            if ($value === null) {
                $properties['createdAt'] = null;
                goto after_createdAt;
            }

            $properties['createdAt'] = $value;

            after_createdAt:

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
                $properties['externalUrl'] = null;
                goto after_externalUrl;
            }

            $properties['externalUrl'] = $value;

            after_externalUrl:

            $value = $payload['html_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'html_url';
                goto after_htmlUrl;
            }

            $properties['htmlUrl'] = $value;

            after_htmlUrl:

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
                goto after_nodeId;
            }

            $properties['nodeId'] = $value;

            after_nodeId:

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
                $properties['updatedAt'] = null;
                goto after_updatedAt;
            }

            $properties['updatedAt'] = $value;

            after_updatedAt:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookIssuesReopened\Issue\PerformedViaGithubApp', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookIssuesReopened\Issue\PerformedViaGithubApp::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WebhookIssuesReopened\Issue\PerformedViaGithubApp(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookIssuesReopened\Issue\PerformedViaGithubApp', $exception, stack: $this->hydrationStack);
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
                $properties['contentReferences'] = null;
                goto after_contentReferences;
            }

            $properties['contentReferences'] = $value;

            after_contentReferences:

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
                $properties['organizationAdministration'] = null;
                goto after_organizationAdministration;
            }

            $properties['organizationAdministration'] = $value;

            after_organizationAdministration:

            $value = $payload['organization_hooks'] ?? null;

            if ($value === null) {
                $properties['organizationHooks'] = null;
                goto after_organizationHooks;
            }

            $properties['organizationHooks'] = $value;

            after_organizationHooks:

            $value = $payload['organization_packages'] ?? null;

            if ($value === null) {
                $properties['organizationPackages'] = null;
                goto after_organizationPackages;
            }

            $properties['organizationPackages'] = $value;

            after_organizationPackages:

            $value = $payload['organization_plan'] ?? null;

            if ($value === null) {
                $properties['organizationPlan'] = null;
                goto after_organizationPlan;
            }

            $properties['organizationPlan'] = $value;

            after_organizationPlan:

            $value = $payload['organization_projects'] ?? null;

            if ($value === null) {
                $properties['organizationProjects'] = null;
                goto after_organizationProjects;
            }

            $properties['organizationProjects'] = $value;

            after_organizationProjects:

            $value = $payload['organization_secrets'] ?? null;

            if ($value === null) {
                $properties['organizationSecrets'] = null;
                goto after_organizationSecrets;
            }

            $properties['organizationSecrets'] = $value;

            after_organizationSecrets:

            $value = $payload['organization_self_hosted_runners'] ?? null;

            if ($value === null) {
                $properties['organizationSelfHostedRunners'] = null;
                goto after_organizationSelfHostedRunners;
            }

            $properties['organizationSelfHostedRunners'] = $value;

            after_organizationSelfHostedRunners:

            $value = $payload['organization_user_blocking'] ?? null;

            if ($value === null) {
                $properties['organizationUserBlocking'] = null;
                goto after_organizationUserBlocking;
            }

            $properties['organizationUserBlocking'] = $value;

            after_organizationUserBlocking:

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
                $properties['pullRequests'] = null;
                goto after_pullRequests;
            }

            $properties['pullRequests'] = $value;

            after_pullRequests:

            $value = $payload['repository_hooks'] ?? null;

            if ($value === null) {
                $properties['repositoryHooks'] = null;
                goto after_repositoryHooks;
            }

            $properties['repositoryHooks'] = $value;

            after_repositoryHooks:

            $value = $payload['repository_projects'] ?? null;

            if ($value === null) {
                $properties['repositoryProjects'] = null;
                goto after_repositoryProjects;
            }

            $properties['repositoryProjects'] = $value;

            after_repositoryProjects:

            $value = $payload['secret_scanning_alerts'] ?? null;

            if ($value === null) {
                $properties['secretScanningAlerts'] = null;
                goto after_secretScanningAlerts;
            }

            $properties['secretScanningAlerts'] = $value;

            after_secretScanningAlerts:

            $value = $payload['secrets'] ?? null;

            if ($value === null) {
                $properties['secrets'] = null;
                goto after_secrets;
            }

            $properties['secrets'] = $value;

            after_secrets:

            $value = $payload['security_events'] ?? null;

            if ($value === null) {
                $properties['securityEvents'] = null;
                goto after_securityEvents;
            }

            $properties['securityEvents'] = $value;

            after_securityEvents:

            $value = $payload['security_scanning_alert'] ?? null;

            if ($value === null) {
                $properties['securityScanningAlert'] = null;
                goto after_securityScanningAlert;
            }

            $properties['securityScanningAlert'] = $value;

            after_securityScanningAlert:

            $value = $payload['single_file'] ?? null;

            if ($value === null) {
                $properties['singleFile'] = null;
                goto after_singleFile;
            }

            $properties['singleFile'] = $value;

            after_singleFile:

            $value = $payload['statuses'] ?? null;

            if ($value === null) {
                $properties['statuses'] = null;
                goto after_statuses;
            }

            $properties['statuses'] = $value;

            after_statuses:

            $value = $payload['team_discussions'] ?? null;

            if ($value === null) {
                $properties['teamDiscussions'] = null;
                goto after_teamDiscussions;
            }

            $properties['teamDiscussions'] = $value;

            after_teamDiscussions:

            $value = $payload['vulnerability_alerts'] ?? null;

            if ($value === null) {
                $properties['vulnerabilityAlerts'] = null;
                goto after_vulnerabilityAlerts;
            }

            $properties['vulnerabilityAlerts'] = $value;

            after_vulnerabilityAlerts:

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

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesTransferred(array $payload): \ApiClients\Client\GitHub\Schema\WebhookIssuesTransferred
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

            $value = $payload['changes'] ?? null;

            if ($value === null) {
                $missingFields[] = 'changes';
                goto after_changes;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'changes';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesTransferred⚡️Changes($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['changes'] = $value;

            after_changes:

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

            $value = $payload['issue'] ?? null;

            if ($value === null) {
                $missingFields[] = 'issue';
                goto after_issue;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'issue';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesPinned⚡️Issue($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['issue'] = $value;

            after_issue:

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
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookIssuesTransferred', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookIssuesTransferred::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WebhookIssuesTransferred(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookIssuesTransferred', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesTransferred⚡️Changes(array $payload): \ApiClients\Client\GitHub\Schema\WebhookIssuesTransferred\Changes
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['new_issue'] ?? null;

            if ($value === null) {
                $missingFields[] = 'new_issue';
                goto after_newIssue;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'newIssue';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesPinned⚡️Issue($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['newIssue'] = $value;

            after_newIssue:

            $value = $payload['new_repository'] ?? null;

            if ($value === null) {
                $missingFields[] = 'new_repository';
                goto after_newRepository;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'newRepository';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesTransferred⚡️Changes⚡️NewRepository($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['newRepository'] = $value;

            after_newRepository:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookIssuesTransferred\Changes', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookIssuesTransferred\Changes::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WebhookIssuesTransferred\Changes(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookIssuesTransferred\Changes', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesTransferred⚡️Changes⚡️NewRepository(array $payload): \ApiClients\Client\GitHub\Schema\WebhookIssuesTransferred\Changes\NewRepository
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['allow_auto_merge'] ?? null;

            if ($value === null) {
                $properties['allowAutoMerge'] = null;
                goto after_allowAutoMerge;
            }

            $properties['allowAutoMerge'] = $value;

            after_allowAutoMerge:

            $value = $payload['allow_forking'] ?? null;

            if ($value === null) {
                $properties['allowForking'] = null;
                goto after_allowForking;
            }

            $properties['allowForking'] = $value;

            after_allowForking:

            $value = $payload['allow_merge_commit'] ?? null;

            if ($value === null) {
                $properties['allowMergeCommit'] = null;
                goto after_allowMergeCommit;
            }

            $properties['allowMergeCommit'] = $value;

            after_allowMergeCommit:

            $value = $payload['allow_rebase_merge'] ?? null;

            if ($value === null) {
                $properties['allowRebaseMerge'] = null;
                goto after_allowRebaseMerge;
            }

            $properties['allowRebaseMerge'] = $value;

            after_allowRebaseMerge:

            $value = $payload['allow_squash_merge'] ?? null;

            if ($value === null) {
                $properties['allowSquashMerge'] = null;
                goto after_allowSquashMerge;
            }

            $properties['allowSquashMerge'] = $value;

            after_allowSquashMerge:

            $value = $payload['allow_update_branch'] ?? null;

            if ($value === null) {
                $properties['allowUpdateBranch'] = null;
                goto after_allowUpdateBranch;
            }

            $properties['allowUpdateBranch'] = $value;

            after_allowUpdateBranch:

            $value = $payload['archive_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'archive_url';
                goto after_archiveUrl;
            }

            $properties['archiveUrl'] = $value;

            after_archiveUrl:

            $value = $payload['archived'] ?? null;

            if ($value === null) {
                $missingFields[] = 'archived';
                goto after_archived;
            }

            $properties['archived'] = $value;

            after_archived:

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

            $value = $payload['clone_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'clone_url';
                goto after_cloneUrl;
            }

            $properties['cloneUrl'] = $value;

            after_cloneUrl:

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

            $value = $payload['created_at'] ?? null;

            if ($value === null) {
                $missingFields[] = 'created_at';
                goto after_createdAt;
            }

            $properties['createdAt'] = $value;

            after_createdAt:

            $value = $payload['default_branch'] ?? null;

            if ($value === null) {
                $missingFields[] = 'default_branch';
                goto after_defaultBranch;
            }

            $properties['defaultBranch'] = $value;

            after_defaultBranch:

            $value = $payload['delete_branch_on_merge'] ?? null;

            if ($value === null) {
                $properties['deleteBranchOnMerge'] = null;
                goto after_deleteBranchOnMerge;
            }

            $properties['deleteBranchOnMerge'] = $value;

            after_deleteBranchOnMerge:

            $value = $payload['deployments_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'deployments_url';
                goto after_deploymentsUrl;
            }

            $properties['deploymentsUrl'] = $value;

            after_deploymentsUrl:

            $value = $payload['description'] ?? null;

            if ($value === null) {
                $properties['description'] = null;
                goto after_description;
            }

            $properties['description'] = $value;

            after_description:

            $value = $payload['disabled'] ?? null;

            if ($value === null) {
                $properties['disabled'] = null;
                goto after_disabled;
            }

            $properties['disabled'] = $value;

            after_disabled:

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

            $value = $payload['fork'] ?? null;

            if ($value === null) {
                $missingFields[] = 'fork';
                goto after_fork;
            }

            $properties['fork'] = $value;

            after_fork:

            $value = $payload['forks'] ?? null;

            if ($value === null) {
                $missingFields[] = 'forks';
                goto after_forks;
            }

            $properties['forks'] = $value;

            after_forks:

            $value = $payload['forks_count'] ?? null;

            if ($value === null) {
                $missingFields[] = 'forks_count';
                goto after_forksCount;
            }

            $properties['forksCount'] = $value;

            after_forksCount:

            $value = $payload['forks_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'forks_url';
                goto after_forksUrl;
            }

            $properties['forksUrl'] = $value;

            after_forksUrl:

            $value = $payload['full_name'] ?? null;

            if ($value === null) {
                $missingFields[] = 'full_name';
                goto after_fullName;
            }

            $properties['fullName'] = $value;

            after_fullName:

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

            $value = $payload['has_downloads'] ?? null;

            if ($value === null) {
                $missingFields[] = 'has_downloads';
                goto after_hasDownloads;
            }

            $properties['hasDownloads'] = $value;

            after_hasDownloads:

            $value = $payload['has_issues'] ?? null;

            if ($value === null) {
                $missingFields[] = 'has_issues';
                goto after_hasIssues;
            }

            $properties['hasIssues'] = $value;

            after_hasIssues:

            $value = $payload['has_pages'] ?? null;

            if ($value === null) {
                $missingFields[] = 'has_pages';
                goto after_hasPages;
            }

            $properties['hasPages'] = $value;

            after_hasPages:

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

            $value = $payload['has_discussions'] ?? null;

            if ($value === null) {
                $missingFields[] = 'has_discussions';
                goto after_hasDiscussions;
            }

            $properties['hasDiscussions'] = $value;

            after_hasDiscussions:

            $value = $payload['homepage'] ?? null;

            if ($value === null) {
                $properties['homepage'] = null;
                goto after_homepage;
            }

            $properties['homepage'] = $value;

            after_homepage:

            $value = $payload['hooks_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'hooks_url';
                goto after_hooksUrl;
            }

            $properties['hooksUrl'] = $value;

            after_hooksUrl:

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

            $value = $payload['is_template'] ?? null;

            if ($value === null) {
                $properties['isTemplate'] = null;
                goto after_isTemplate;
            }

            $properties['isTemplate'] = $value;

            after_isTemplate:

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

            $value = $payload['language'] ?? null;

            if ($value === null) {
                $properties['language'] = null;
                goto after_language;
            }

            $properties['language'] = $value;

            after_language:

            $value = $payload['languages_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'languages_url';
                goto after_languagesUrl;
            }

            $properties['languagesUrl'] = $value;

            after_languagesUrl:

            $value = $payload['license'] ?? null;

            if ($value === null) {
                $properties['license'] = null;
                goto after_license;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'license';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookFork⚡️Forkee⚡️License($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['license'] = $value;

            after_license:

            $value = $payload['master_branch'] ?? null;

            if ($value === null) {
                $properties['masterBranch'] = null;
                goto after_masterBranch;
            }

            $properties['masterBranch'] = $value;

            after_masterBranch:

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

            $value = $payload['mirror_url'] ?? null;

            if ($value === null) {
                $properties['mirrorUrl'] = null;
                goto after_mirrorUrl;
            }

            $properties['mirrorUrl'] = $value;

            after_mirrorUrl:

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

            $value = $payload['notifications_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'notifications_url';
                goto after_notificationsUrl;
            }

            $properties['notificationsUrl'] = $value;

            after_notificationsUrl:

            $value = $payload['open_issues'] ?? null;

            if ($value === null) {
                $missingFields[] = 'open_issues';
                goto after_openIssues;
            }

            $properties['openIssues'] = $value;

            after_openIssues:

            $value = $payload['open_issues_count'] ?? null;

            if ($value === null) {
                $missingFields[] = 'open_issues_count';
                goto after_openIssuesCount;
            }

            $properties['openIssuesCount'] = $value;

            after_openIssuesCount:

            $value = $payload['organization'] ?? null;

            if ($value === null) {
                $properties['organization'] = null;
                goto after_organization;
            }

            $properties['organization'] = $value;

            after_organization:

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
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookFork⚡️Forkee⚡️Permissions($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['permissions'] = $value;

            after_permissions:

            $value = $payload['private'] ?? null;

            if ($value === null) {
                $missingFields[] = 'private';
                goto after_private;
            }

            $properties['private'] = $value;

            after_private:

            $value = $payload['public'] ?? null;

            if ($value === null) {
                $properties['public'] = null;
                goto after_public;
            }

            $properties['public'] = $value;

            after_public:

            $value = $payload['pulls_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'pulls_url';
                goto after_pullsUrl;
            }

            $properties['pullsUrl'] = $value;

            after_pullsUrl:

            $value = $payload['pushed_at'] ?? null;

            if ($value === null) {
                $missingFields[] = 'pushed_at';
                goto after_pushedAt;
            }

            $properties['pushedAt'] = $value;

            after_pushedAt:

            $value = $payload['releases_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'releases_url';
                goto after_releasesUrl;
            }

            $properties['releasesUrl'] = $value;

            after_releasesUrl:

            $value = $payload['role_name'] ?? null;

            if ($value === null) {
                $properties['roleName'] = null;
                goto after_roleName;
            }

            $properties['roleName'] = $value;

            after_roleName:

            $value = $payload['size'] ?? null;

            if ($value === null) {
                $missingFields[] = 'size';
                goto after_size;
            }

            $properties['size'] = $value;

            after_size:

            $value = $payload['ssh_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'ssh_url';
                goto after_sshUrl;
            }

            $properties['sshUrl'] = $value;

            after_sshUrl:

            $value = $payload['stargazers'] ?? null;

            if ($value === null) {
                $properties['stargazers'] = null;
                goto after_stargazers;
            }

            $properties['stargazers'] = $value;

            after_stargazers:

            $value = $payload['stargazers_count'] ?? null;

            if ($value === null) {
                $missingFields[] = 'stargazers_count';
                goto after_stargazersCount;
            }

            $properties['stargazersCount'] = $value;

            after_stargazersCount:

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

            $value = $payload['svn_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'svn_url';
                goto after_svnUrl;
            }

            $properties['svnUrl'] = $value;

            after_svnUrl:

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

            $value = $payload['topics'] ?? null;

            if ($value === null) {
                $missingFields[] = 'topics';
                goto after_topics;
            }

            $properties['topics'] = $value;

            after_topics:

            $value = $payload['trees_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'trees_url';
                goto after_treesUrl;
            }

            $properties['treesUrl'] = $value;

            after_treesUrl:

            $value = $payload['updated_at'] ?? null;

            if ($value === null) {
                $missingFields[] = 'updated_at';
                goto after_updatedAt;
            }

            $properties['updatedAt'] = $value;

            after_updatedAt:

            $value = $payload['url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'url';
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

            $value = $payload['visibility'] ?? null;

            if ($value === null) {
                $missingFields[] = 'visibility';
                goto after_visibility;
            }

            $properties['visibility'] = $value;

            after_visibility:

            $value = $payload['watchers'] ?? null;

            if ($value === null) {
                $missingFields[] = 'watchers';
                goto after_watchers;
            }

            $properties['watchers'] = $value;

            after_watchers:

            $value = $payload['watchers_count'] ?? null;

            if ($value === null) {
                $missingFields[] = 'watchers_count';
                goto after_watchersCount;
            }

            $properties['watchersCount'] = $value;

            after_watchersCount:

            $value = $payload['web_commit_signoff_required'] ?? null;

            if ($value === null) {
                $properties['webCommitSignoffRequired'] = null;
                goto after_webCommitSignoffRequired;
            }

            $properties['webCommitSignoffRequired'] = $value;

            after_webCommitSignoffRequired:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookIssuesTransferred\Changes\NewRepository', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookIssuesTransferred\Changes\NewRepository::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WebhookIssuesTransferred\Changes\NewRepository(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookIssuesTransferred\Changes\NewRepository', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesUnassigned(array $payload): \ApiClients\Client\GitHub\Schema\WebhookIssuesUnassigned
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

            $value = $payload['assignee'] ?? null;

            if ($value === null) {
                $properties['assignee'] = null;
                goto after_assignee;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'assignee';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssueCommentCreated⚡️Issue⚡️Assignee($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['assignee'] = $value;

            after_assignee:

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

            $value = $payload['issue'] ?? null;

            if ($value === null) {
                $missingFields[] = 'issue';
                goto after_issue;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'issue';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssueCommentEdited⚡️Issue($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['issue'] = $value;

            after_issue:

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
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookIssuesUnassigned', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookIssuesUnassigned::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WebhookIssuesUnassigned(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookIssuesUnassigned', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesUnlabeled(array $payload): \ApiClients\Client\GitHub\Schema\WebhookIssuesUnlabeled
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

            $value = $payload['issue'] ?? null;

            if ($value === null) {
                $missingFields[] = 'issue';
                goto after_issue;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'issue';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssueCommentEdited⚡️Issue($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['issue'] = $value;

            after_issue:

            $value = $payload['label'] ?? null;

            if ($value === null) {
                $properties['label'] = null;
                goto after_label;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'label';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookDiscussionLabeled⚡️Label($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['label'] = $value;

            after_label:

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
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookIssuesUnlabeled', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookIssuesUnlabeled::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WebhookIssuesUnlabeled(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookIssuesUnlabeled', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesUnlocked(array $payload): \ApiClients\Client\GitHub\Schema\WebhookIssuesUnlocked
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

            $value = $payload['issue'] ?? null;

            if ($value === null) {
                $missingFields[] = 'issue';
                goto after_issue;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'issue';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesPinned⚡️Issue($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['issue'] = $value;

            after_issue:

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
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookIssuesUnlocked', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookIssuesUnlocked::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WebhookIssuesUnlocked(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookIssuesUnlocked', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesUnpinned(array $payload): \ApiClients\Client\GitHub\Schema\WebhookIssuesUnpinned
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

            $value = $payload['issue'] ?? null;

            if ($value === null) {
                $missingFields[] = 'issue';
                goto after_issue;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'issue';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesPinned⚡️Issue($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['issue'] = $value;

            after_issue:

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
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookIssuesUnpinned', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookIssuesUnpinned::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WebhookIssuesUnpinned(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookIssuesUnpinned', $exception, stack: $this->hydrationStack);
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
            'ApiClients\Client\GitHub\Schema\WebhookIssuesAssigned' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesAssigned($object),
            'ApiClients\Client\GitHub\Schema\Discussion\AnswerChosenBy' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Discussion⚡️AnswerChosenBy($object),
            'ApiClients\Client\GitHub\Schema\Enterprise' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Enterprise($object),
            'ApiClients\Client\GitHub\Schema\SimpleInstallation' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleInstallation($object),
            'ApiClients\Client\GitHub\Schema\WebhookIssueCommentEdited\Issue' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssueCommentEdited⚡️Issue($object),
            'ApiClients\Client\GitHub\Schema\WebhookIssueCommentCreated\Issue\Assignee' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssueCommentCreated⚡️Issue⚡️Assignee($object),
            'ApiClients\Client\GitHub\Schema\WebhookDiscussionLabeled\Label' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookDiscussionLabeled⚡️Label($object),
            'ApiClients\Client\GitHub\Schema\WebhookIssueCommentCreated\Issue\Milestone' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssueCommentCreated⚡️Issue⚡️Milestone($object),
            'ApiClients\Client\GitHub\Schema\WebhookIssueCommentEdited\Issue\PerformedViaGithubApp' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssueCommentEdited⚡️Issue⚡️PerformedViaGithubApp($object),
            'ApiClients\Client\GitHub\Schema\WebhookIssueCommentEdited\Issue\PerformedViaGithubApp\Permissions' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssueCommentEdited⚡️Issue⚡️PerformedViaGithubApp⚡️Permissions($object),
            'ApiClients\Client\GitHub\Schema\WebhookIssueCommentCreated\Issue\PullRequest' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssueCommentCreated⚡️Issue⚡️PullRequest($object),
            'ApiClients\Client\GitHub\Schema\Discussion\Reactions' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Discussion⚡️Reactions($object),
            'ApiClients\Client\GitHub\Schema\OrganizationSimple' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️OrganizationSimple($object),
            'ApiClients\Client\GitHub\Schema\Repository' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Repository($object),
            'ApiClients\Client\GitHub\Schema\Repository\Permissions' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Repository⚡️Permissions($object),
            'ApiClients\Client\GitHub\Schema\SimpleUser' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($object),
            'ApiClients\Client\GitHub\Schema\Repository\TemplateRepository' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Repository⚡️TemplateRepository($object),
            'ApiClients\Client\GitHub\Schema\Repository\TemplateRepository\Owner' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Repository⚡️TemplateRepository⚡️Owner($object),
            'ApiClients\Client\GitHub\Schema\Repository\TemplateRepository\Permissions' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Repository⚡️TemplateRepository⚡️Permissions($object),
            'ApiClients\Client\GitHub\Schema\WebhookIssuesClosed' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesClosed($object),
            'ApiClients\Client\GitHub\Schema\WebhookIssuesClosed\Issue' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesClosed⚡️Issue($object),
            'ApiClients\Client\GitHub\Schema\WebhookIssuesClosed\Issue\PerformedViaGithubApp' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesClosed⚡️Issue⚡️PerformedViaGithubApp($object),
            'ApiClients\Client\GitHub\Schema\WebhookIssuesDeleted' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesDeleted($object),
            'ApiClients\Client\GitHub\Schema\WebhookIssuesDeleted\Issue' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesDeleted⚡️Issue($object),
            'ApiClients\Client\GitHub\Schema\WebhookIssuesDeleted\Issue\Milestone' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesDeleted⚡️Issue⚡️Milestone($object),
            'ApiClients\Client\GitHub\Schema\WebhookIssuesDeleted\Issue\PerformedViaGithubApp' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesDeleted⚡️Issue⚡️PerformedViaGithubApp($object),
            'ApiClients\Client\GitHub\Schema\WebhookDeploymentCreated\Deployment\PerformedViaGithubApp\Permissions' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookDeploymentCreated⚡️Deployment⚡️PerformedViaGithubApp⚡️Permissions($object),
            'ApiClients\Client\GitHub\Schema\WebhookIssuesDemilestoned' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesDemilestoned($object),
            'ApiClients\Client\GitHub\Schema\WebhookIssuesDemilestoned\Issue' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesDemilestoned⚡️Issue($object),
            'ApiClients\Client\GitHub\Schema\WebhookIssuesDemilestoned\Issue\PerformedViaGithubApp' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesDemilestoned⚡️Issue⚡️PerformedViaGithubApp($object),
            'ApiClients\Client\GitHub\Schema\WebhookIssuesDemilestoned\Milestone' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesDemilestoned⚡️Milestone($object),
            'ApiClients\Client\GitHub\Schema\WebhookIssuesEdited' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesEdited($object),
            'ApiClients\Client\GitHub\Schema\WebhookIssuesEdited\Changes' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesEdited⚡️Changes($object),
            'ApiClients\Client\GitHub\Schema\WebhookIssueCommentEdited\Changes\Body' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssueCommentEdited⚡️Changes⚡️Body($object),
            'ApiClients\Client\GitHub\Schema\WebhookIssuesEdited\Changes\Title' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesEdited⚡️Changes⚡️Title($object),
            'ApiClients\Client\GitHub\Schema\WebhookIssuesEdited\Issue' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesEdited⚡️Issue($object),
            'ApiClients\Client\GitHub\Schema\WebhookIssuesEdited\Issue\PerformedViaGithubApp' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesEdited⚡️Issue⚡️PerformedViaGithubApp($object),
            'ApiClients\Client\GitHub\Schema\WebhookIssuesLabeled' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesLabeled($object),
            'ApiClients\Client\GitHub\Schema\WebhookIssuesLabeled\Issue' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesLabeled⚡️Issue($object),
            'ApiClients\Client\GitHub\Schema\WebhookIssuesLabeled\Issue\PerformedViaGithubApp' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesLabeled⚡️Issue⚡️PerformedViaGithubApp($object),
            'ApiClients\Client\GitHub\Schema\WebhookIssuesLocked' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesLocked($object),
            'ApiClients\Client\GitHub\Schema\WebhookIssuesLocked\Issue' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesLocked⚡️Issue($object),
            'ApiClients\Client\GitHub\Schema\WebhookIssuesLocked\Issue\PerformedViaGithubApp' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesLocked⚡️Issue⚡️PerformedViaGithubApp($object),
            'ApiClients\Client\GitHub\Schema\WebhookIssuesMilestoned' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesMilestoned($object),
            'ApiClients\Client\GitHub\Schema\WebhookIssuesMilestoned\Issue' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesMilestoned⚡️Issue($object),
            'ApiClients\Client\GitHub\Schema\WebhookIssuesMilestoned\Issue\PerformedViaGithubApp' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesMilestoned⚡️Issue⚡️PerformedViaGithubApp($object),
            'ApiClients\Client\GitHub\Schema\WebhookIssuesOpened' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesOpened($object),
            'ApiClients\Client\GitHub\Schema\WebhookIssuesOpened\Changes' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesOpened⚡️Changes($object),
            'ApiClients\Client\GitHub\Schema\WebhookIssuesOpened\Changes\OldIssue' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesOpened⚡️Changes⚡️OldIssue($object),
            'ApiClients\Client\GitHub\Schema\WebhookIssueCommentDeleted\Issue\PerformedViaGithubApp' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssueCommentDeleted⚡️Issue⚡️PerformedViaGithubApp($object),
            'ApiClients\Client\GitHub\Schema\WebhookIssuesOpened\Changes\OldRepository' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesOpened⚡️Changes⚡️OldRepository($object),
            'ApiClients\Client\GitHub\Schema\WebhookFork\Forkee\License' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookFork⚡️Forkee⚡️License($object),
            'ApiClients\Client\GitHub\Schema\WebhookFork\Forkee\Permissions' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookFork⚡️Forkee⚡️Permissions($object),
            'ApiClients\Client\GitHub\Schema\WebhookIssuesOpened\Issue' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesOpened⚡️Issue($object),
            'ApiClients\Client\GitHub\Schema\WebhookIssuesPinned' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesPinned($object),
            'ApiClients\Client\GitHub\Schema\WebhookIssuesPinned\Issue' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesPinned⚡️Issue($object),
            'ApiClients\Client\GitHub\Schema\WebhookIssuesReopened' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesReopened($object),
            'ApiClients\Client\GitHub\Schema\WebhookIssuesReopened\Issue' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesReopened⚡️Issue($object),
            'ApiClients\Client\GitHub\Schema\WebhookIssuesReopened\Issue\PerformedViaGithubApp' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesReopened⚡️Issue⚡️PerformedViaGithubApp($object),
            'ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted\CheckSuite\App\Permissions' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteCompleted⚡️CheckSuite⚡️App⚡️Permissions($object),
            'ApiClients\Client\GitHub\Schema\WebhookIssuesTransferred' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesTransferred($object),
            'ApiClients\Client\GitHub\Schema\WebhookIssuesTransferred\Changes' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesTransferred⚡️Changes($object),
            'ApiClients\Client\GitHub\Schema\WebhookIssuesTransferred\Changes\NewRepository' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesTransferred⚡️Changes⚡️NewRepository($object),
            'ApiClients\Client\GitHub\Schema\WebhookIssuesUnassigned' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesUnassigned($object),
            'ApiClients\Client\GitHub\Schema\WebhookIssuesUnlabeled' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesUnlabeled($object),
            'ApiClients\Client\GitHub\Schema\WebhookIssuesUnlocked' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesUnlocked($object),
            'ApiClients\Client\GitHub\Schema\WebhookIssuesUnpinned' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesUnpinned($object),
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


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesAssigned(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookIssuesAssigned);
        $result = [];

        $action = $object->action;
        after_action:        $result['action'] = $action;

        
        $assignee = $object->assignee;

        if ($assignee === null) {
            goto after_assignee;
        }
        $assignee = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Discussion⚡️AnswerChosenBy($assignee);
        after_assignee:        $result['assignee'] = $assignee;

        
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

        
        $issue = $object->issue;
        $issue = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssueCommentEdited⚡️Issue($issue);
        after_issue:        $result['issue'] = $issue;

        
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


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Discussion⚡️AnswerChosenBy(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\Discussion\AnswerChosenBy);
        $result = [];

        $avatarUrl = $object->avatarUrl;

        if ($avatarUrl === null) {
            goto after_avatarUrl;
        }
        after_avatarUrl:        $result['avatar_url'] = $avatarUrl;

        
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

        
        $eventsUrl = $object->eventsUrl;

        if ($eventsUrl === null) {
            goto after_eventsUrl;
        }
        after_eventsUrl:        $result['events_url'] = $eventsUrl;

        
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

        
        $gravatarId = $object->gravatarId;

        if ($gravatarId === null) {
            goto after_gravatarId;
        }
        after_gravatarId:        $result['gravatar_id'] = $gravatarId;

        
        $htmlUrl = $object->htmlUrl;

        if ($htmlUrl === null) {
            goto after_htmlUrl;
        }
        after_htmlUrl:        $result['html_url'] = $htmlUrl;

        
        $id = $object->id;
        after_id:        $result['id'] = $id;

        
        $login = $object->login;
        after_login:        $result['login'] = $login;

        
        $name = $object->name;

        if ($name === null) {
            goto after_name;
        }
        after_name:        $result['name'] = $name;

        
        $nodeId = $object->nodeId;

        if ($nodeId === null) {
            goto after_nodeId;
        }
        after_nodeId:        $result['node_id'] = $nodeId;

        
        $organizationsUrl = $object->organizationsUrl;

        if ($organizationsUrl === null) {
            goto after_organizationsUrl;
        }
        after_organizationsUrl:        $result['organizations_url'] = $organizationsUrl;

        
        $receivedEventsUrl = $object->receivedEventsUrl;

        if ($receivedEventsUrl === null) {
            goto after_receivedEventsUrl;
        }
        after_receivedEventsUrl:        $result['received_events_url'] = $receivedEventsUrl;

        
        $reposUrl = $object->reposUrl;

        if ($reposUrl === null) {
            goto after_reposUrl;
        }
        after_reposUrl:        $result['repos_url'] = $reposUrl;

        
        $siteAdmin = $object->siteAdmin;

        if ($siteAdmin === null) {
            goto after_siteAdmin;
        }
        after_siteAdmin:        $result['site_admin'] = $siteAdmin;

        
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


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssueCommentEdited⚡️Issue(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookIssueCommentEdited\Issue);
        $result = [];

        $activeLockReason = $object->activeLockReason;

        if ($activeLockReason === null) {
            goto after_activeLockReason;
        }
        after_activeLockReason:        $result['active_lock_reason'] = $activeLockReason;

        
        $assignee = $object->assignee;

        if ($assignee === null) {
            goto after_assignee;
        }
        $assignee = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssueCommentCreated⚡️Issue⚡️Assignee($assignee);
        after_assignee:        $result['assignee'] = $assignee;

        
        $assignees = $object->assignees;
        static $assigneesSerializer0;

        if ($assigneesSerializer0 === null) {
            $assigneesSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\WebhookIssueCommentCreated\\Issue\\Assignee',
));
        }
        
        $assignees = $assigneesSerializer0->serialize($assignees, $this);
        after_assignees:        $result['assignees'] = $assignees;

        
        $authorAssociation = $object->authorAssociation;
        after_authorAssociation:        $result['author_association'] = $authorAssociation;

        
        $body = $object->body;

        if ($body === null) {
            goto after_body;
        }
        after_body:        $result['body'] = $body;

        
        $closedAt = $object->closedAt;

        if ($closedAt === null) {
            goto after_closedAt;
        }
        after_closedAt:        $result['closed_at'] = $closedAt;

        
        $comments = $object->comments;
        after_comments:        $result['comments'] = $comments;

        
        $commentsUrl = $object->commentsUrl;
        after_commentsUrl:        $result['comments_url'] = $commentsUrl;

        
        $createdAt = $object->createdAt;
        after_createdAt:        $result['created_at'] = $createdAt;

        
        $draft = $object->draft;

        if ($draft === null) {
            goto after_draft;
        }
        after_draft:        $result['draft'] = $draft;

        
        $eventsUrl = $object->eventsUrl;
        after_eventsUrl:        $result['events_url'] = $eventsUrl;

        
        $htmlUrl = $object->htmlUrl;
        after_htmlUrl:        $result['html_url'] = $htmlUrl;

        
        $id = $object->id;
        after_id:        $result['id'] = $id;

        
        $labels = $object->labels;

        if ($labels === null) {
            goto after_labels;
        }
        static $labelsSerializer0;

        if ($labelsSerializer0 === null) {
            $labelsSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionLabeled\\Label',
));
        }
        
        $labels = $labelsSerializer0->serialize($labels, $this);
        after_labels:        $result['labels'] = $labels;

        
        $labelsUrl = $object->labelsUrl;
        after_labelsUrl:        $result['labels_url'] = $labelsUrl;

        
        $locked = $object->locked;

        if ($locked === null) {
            goto after_locked;
        }
        after_locked:        $result['locked'] = $locked;

        
        $milestone = $object->milestone;

        if ($milestone === null) {
            goto after_milestone;
        }
        $milestone = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssueCommentCreated⚡️Issue⚡️Milestone($milestone);
        after_milestone:        $result['milestone'] = $milestone;

        
        $nodeId = $object->nodeId;
        after_nodeId:        $result['node_id'] = $nodeId;

        
        $number = $object->number;
        after_number:        $result['number'] = $number;

        
        $performedViaGithubApp = $object->performedViaGithubApp;

        if ($performedViaGithubApp === null) {
            goto after_performedViaGithubApp;
        }
        $performedViaGithubApp = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssueCommentEdited⚡️Issue⚡️PerformedViaGithubApp($performedViaGithubApp);
        after_performedViaGithubApp:        $result['performed_via_github_app'] = $performedViaGithubApp;

        
        $pullRequest = $object->pullRequest;

        if ($pullRequest === null) {
            goto after_pullRequest;
        }
        $pullRequest = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssueCommentCreated⚡️Issue⚡️PullRequest($pullRequest);
        after_pullRequest:        $result['pull_request'] = $pullRequest;

        
        $reactions = $object->reactions;
        $reactions = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Discussion⚡️Reactions($reactions);
        after_reactions:        $result['reactions'] = $reactions;

        
        $repositoryUrl = $object->repositoryUrl;
        after_repositoryUrl:        $result['repository_url'] = $repositoryUrl;

        
        $state = $object->state;

        if ($state === null) {
            goto after_state;
        }
        after_state:        $result['state'] = $state;

        
        $stateReason = $object->stateReason;

        if ($stateReason === null) {
            goto after_stateReason;
        }
        after_stateReason:        $result['state_reason'] = $stateReason;

        
        $timelineUrl = $object->timelineUrl;

        if ($timelineUrl === null) {
            goto after_timelineUrl;
        }
        after_timelineUrl:        $result['timeline_url'] = $timelineUrl;

        
        $title = $object->title;
        after_title:        $result['title'] = $title;

        
        $updatedAt = $object->updatedAt;
        after_updatedAt:        $result['updated_at'] = $updatedAt;

        
        $url = $object->url;
        after_url:        $result['url'] = $url;

        
        $user = $object->user;

        if ($user === null) {
            goto after_user;
        }
        $user = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssueCommentCreated⚡️Issue⚡️Assignee($user);
        after_user:        $result['user'] = $user;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssueCommentCreated⚡️Issue⚡️Assignee(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookIssueCommentCreated\Issue\Assignee);
        $result = [];

        $avatarUrl = $object->avatarUrl;

        if ($avatarUrl === null) {
            goto after_avatarUrl;
        }
        after_avatarUrl:        $result['avatar_url'] = $avatarUrl;

        
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

        
        $eventsUrl = $object->eventsUrl;

        if ($eventsUrl === null) {
            goto after_eventsUrl;
        }
        after_eventsUrl:        $result['events_url'] = $eventsUrl;

        
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

        
        $gravatarId = $object->gravatarId;

        if ($gravatarId === null) {
            goto after_gravatarId;
        }
        after_gravatarId:        $result['gravatar_id'] = $gravatarId;

        
        $htmlUrl = $object->htmlUrl;

        if ($htmlUrl === null) {
            goto after_htmlUrl;
        }
        after_htmlUrl:        $result['html_url'] = $htmlUrl;

        
        $id = $object->id;
        after_id:        $result['id'] = $id;

        
        $login = $object->login;
        after_login:        $result['login'] = $login;

        
        $name = $object->name;

        if ($name === null) {
            goto after_name;
        }
        after_name:        $result['name'] = $name;

        
        $nodeId = $object->nodeId;

        if ($nodeId === null) {
            goto after_nodeId;
        }
        after_nodeId:        $result['node_id'] = $nodeId;

        
        $organizationsUrl = $object->organizationsUrl;

        if ($organizationsUrl === null) {
            goto after_organizationsUrl;
        }
        after_organizationsUrl:        $result['organizations_url'] = $organizationsUrl;

        
        $receivedEventsUrl = $object->receivedEventsUrl;

        if ($receivedEventsUrl === null) {
            goto after_receivedEventsUrl;
        }
        after_receivedEventsUrl:        $result['received_events_url'] = $receivedEventsUrl;

        
        $reposUrl = $object->reposUrl;

        if ($reposUrl === null) {
            goto after_reposUrl;
        }
        after_reposUrl:        $result['repos_url'] = $reposUrl;

        
        $siteAdmin = $object->siteAdmin;

        if ($siteAdmin === null) {
            goto after_siteAdmin;
        }
        after_siteAdmin:        $result['site_admin'] = $siteAdmin;

        
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


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookDiscussionLabeled⚡️Label(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookDiscussionLabeled\Label);
        $result = [];

        $color = $object->color;
        after_color:        $result['color'] = $color;

        
        $default = $object->default;
        after_default:        $result['default'] = $default;

        
        $description = $object->description;

        if ($description === null) {
            goto after_description;
        }
        after_description:        $result['description'] = $description;

        
        $id = $object->id;
        after_id:        $result['id'] = $id;

        
        $name = $object->name;
        after_name:        $result['name'] = $name;

        
        $nodeId = $object->nodeId;
        after_nodeId:        $result['node_id'] = $nodeId;

        
        $url = $object->url;
        after_url:        $result['url'] = $url;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssueCommentCreated⚡️Issue⚡️Milestone(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookIssueCommentCreated\Issue\Milestone);
        $result = [];

        $closedAt = $object->closedAt;

        if ($closedAt === null) {
            goto after_closedAt;
        }
        after_closedAt:        $result['closed_at'] = $closedAt;

        
        $closedIssues = $object->closedIssues;
        after_closedIssues:        $result['closed_issues'] = $closedIssues;

        
        $createdAt = $object->createdAt;
        after_createdAt:        $result['created_at'] = $createdAt;

        
        $creator = $object->creator;

        if ($creator === null) {
            goto after_creator;
        }
        $creator = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssueCommentCreated⚡️Issue⚡️Assignee($creator);
        after_creator:        $result['creator'] = $creator;

        
        $description = $object->description;

        if ($description === null) {
            goto after_description;
        }
        after_description:        $result['description'] = $description;

        
        $dueOn = $object->dueOn;

        if ($dueOn === null) {
            goto after_dueOn;
        }
        after_dueOn:        $result['due_on'] = $dueOn;

        
        $htmlUrl = $object->htmlUrl;
        after_htmlUrl:        $result['html_url'] = $htmlUrl;

        
        $id = $object->id;
        after_id:        $result['id'] = $id;

        
        $labelsUrl = $object->labelsUrl;
        after_labelsUrl:        $result['labels_url'] = $labelsUrl;

        
        $nodeId = $object->nodeId;
        after_nodeId:        $result['node_id'] = $nodeId;

        
        $number = $object->number;
        after_number:        $result['number'] = $number;

        
        $openIssues = $object->openIssues;
        after_openIssues:        $result['open_issues'] = $openIssues;

        
        $state = $object->state;
        after_state:        $result['state'] = $state;

        
        $title = $object->title;
        after_title:        $result['title'] = $title;

        
        $updatedAt = $object->updatedAt;
        after_updatedAt:        $result['updated_at'] = $updatedAt;

        
        $url = $object->url;
        after_url:        $result['url'] = $url;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssueCommentEdited⚡️Issue⚡️PerformedViaGithubApp(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookIssueCommentEdited\Issue\PerformedViaGithubApp);
        $result = [];

        $createdAt = $object->createdAt;

        if ($createdAt === null) {
            goto after_createdAt;
        }
        after_createdAt:        $result['created_at'] = $createdAt;

        
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

        
        $externalUrl = $object->externalUrl;

        if ($externalUrl === null) {
            goto after_externalUrl;
        }
        after_externalUrl:        $result['external_url'] = $externalUrl;

        
        $htmlUrl = $object->htmlUrl;
        after_htmlUrl:        $result['html_url'] = $htmlUrl;

        
        $id = $object->id;

        if ($id === null) {
            goto after_id;
        }
        after_id:        $result['id'] = $id;

        
        $name = $object->name;
        after_name:        $result['name'] = $name;

        
        $nodeId = $object->nodeId;
        after_nodeId:        $result['node_id'] = $nodeId;

        
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
        $permissions = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssueCommentEdited⚡️Issue⚡️PerformedViaGithubApp⚡️Permissions($permissions);
        after_permissions:        $result['permissions'] = $permissions;

        
        $slug = $object->slug;

        if ($slug === null) {
            goto after_slug;
        }
        after_slug:        $result['slug'] = $slug;

        
        $updatedAt = $object->updatedAt;

        if ($updatedAt === null) {
            goto after_updatedAt;
        }
        after_updatedAt:        $result['updated_at'] = $updatedAt;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssueCommentEdited⚡️Issue⚡️PerformedViaGithubApp⚡️Permissions(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookIssueCommentEdited\Issue\PerformedViaGithubApp\Permissions);
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

        
        $contentReferences = $object->contentReferences;

        if ($contentReferences === null) {
            goto after_contentReferences;
        }
        after_contentReferences:        $result['content_references'] = $contentReferences;

        
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

        
        $organizationAdministration = $object->organizationAdministration;

        if ($organizationAdministration === null) {
            goto after_organizationAdministration;
        }
        after_organizationAdministration:        $result['organization_administration'] = $organizationAdministration;

        
        $organizationHooks = $object->organizationHooks;

        if ($organizationHooks === null) {
            goto after_organizationHooks;
        }
        after_organizationHooks:        $result['organization_hooks'] = $organizationHooks;

        
        $organizationPackages = $object->organizationPackages;

        if ($organizationPackages === null) {
            goto after_organizationPackages;
        }
        after_organizationPackages:        $result['organization_packages'] = $organizationPackages;

        
        $organizationPlan = $object->organizationPlan;

        if ($organizationPlan === null) {
            goto after_organizationPlan;
        }
        after_organizationPlan:        $result['organization_plan'] = $organizationPlan;

        
        $organizationProjects = $object->organizationProjects;

        if ($organizationProjects === null) {
            goto after_organizationProjects;
        }
        after_organizationProjects:        $result['organization_projects'] = $organizationProjects;

        
        $organizationSecrets = $object->organizationSecrets;

        if ($organizationSecrets === null) {
            goto after_organizationSecrets;
        }
        after_organizationSecrets:        $result['organization_secrets'] = $organizationSecrets;

        
        $organizationSelfHostedRunners = $object->organizationSelfHostedRunners;

        if ($organizationSelfHostedRunners === null) {
            goto after_organizationSelfHostedRunners;
        }
        after_organizationSelfHostedRunners:        $result['organization_self_hosted_runners'] = $organizationSelfHostedRunners;

        
        $organizationUserBlocking = $object->organizationUserBlocking;

        if ($organizationUserBlocking === null) {
            goto after_organizationUserBlocking;
        }
        after_organizationUserBlocking:        $result['organization_user_blocking'] = $organizationUserBlocking;

        
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

        
        $pullRequests = $object->pullRequests;

        if ($pullRequests === null) {
            goto after_pullRequests;
        }
        after_pullRequests:        $result['pull_requests'] = $pullRequests;

        
        $repositoryHooks = $object->repositoryHooks;

        if ($repositoryHooks === null) {
            goto after_repositoryHooks;
        }
        after_repositoryHooks:        $result['repository_hooks'] = $repositoryHooks;

        
        $repositoryProjects = $object->repositoryProjects;

        if ($repositoryProjects === null) {
            goto after_repositoryProjects;
        }
        after_repositoryProjects:        $result['repository_projects'] = $repositoryProjects;

        
        $secretScanningAlerts = $object->secretScanningAlerts;

        if ($secretScanningAlerts === null) {
            goto after_secretScanningAlerts;
        }
        after_secretScanningAlerts:        $result['secret_scanning_alerts'] = $secretScanningAlerts;

        
        $secrets = $object->secrets;

        if ($secrets === null) {
            goto after_secrets;
        }
        after_secrets:        $result['secrets'] = $secrets;

        
        $securityEvents = $object->securityEvents;

        if ($securityEvents === null) {
            goto after_securityEvents;
        }
        after_securityEvents:        $result['security_events'] = $securityEvents;

        
        $securityScanningAlert = $object->securityScanningAlert;

        if ($securityScanningAlert === null) {
            goto after_securityScanningAlert;
        }
        after_securityScanningAlert:        $result['security_scanning_alert'] = $securityScanningAlert;

        
        $singleFile = $object->singleFile;

        if ($singleFile === null) {
            goto after_singleFile;
        }
        after_singleFile:        $result['single_file'] = $singleFile;

        
        $statuses = $object->statuses;

        if ($statuses === null) {
            goto after_statuses;
        }
        after_statuses:        $result['statuses'] = $statuses;

        
        $teamDiscussions = $object->teamDiscussions;

        if ($teamDiscussions === null) {
            goto after_teamDiscussions;
        }
        after_teamDiscussions:        $result['team_discussions'] = $teamDiscussions;

        
        $vulnerabilityAlerts = $object->vulnerabilityAlerts;

        if ($vulnerabilityAlerts === null) {
            goto after_vulnerabilityAlerts;
        }
        after_vulnerabilityAlerts:        $result['vulnerability_alerts'] = $vulnerabilityAlerts;

        
        $workflows = $object->workflows;

        if ($workflows === null) {
            goto after_workflows;
        }
        after_workflows:        $result['workflows'] = $workflows;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssueCommentCreated⚡️Issue⚡️PullRequest(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookIssueCommentCreated\Issue\PullRequest);
        $result = [];

        $diffUrl = $object->diffUrl;

        if ($diffUrl === null) {
            goto after_diffUrl;
        }
        after_diffUrl:        $result['diff_url'] = $diffUrl;

        
        $htmlUrl = $object->htmlUrl;

        if ($htmlUrl === null) {
            goto after_htmlUrl;
        }
        after_htmlUrl:        $result['html_url'] = $htmlUrl;

        
        $mergedAt = $object->mergedAt;

        if ($mergedAt === null) {
            goto after_mergedAt;
        }
        after_mergedAt:        $result['merged_at'] = $mergedAt;

        
        $patchUrl = $object->patchUrl;

        if ($patchUrl === null) {
            goto after_patchUrl;
        }
        after_patchUrl:        $result['patch_url'] = $patchUrl;

        
        $url = $object->url;

        if ($url === null) {
            goto after_url;
        }
        after_url:        $result['url'] = $url;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Discussion⚡️Reactions(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\Discussion\Reactions);
        $result = [];

        $pluses1 = $object->pluses1;
        after_pluses1:        $result['_PLUSES_1'] = $pluses1;

        
        $minus1 = $object->minus1;
        after_minus1:        $result['_MINUS_1'] = $minus1;

        
        $confused = $object->confused;
        after_confused:        $result['confused'] = $confused;

        
        $eyes = $object->eyes;
        after_eyes:        $result['eyes'] = $eyes;

        
        $heart = $object->heart;
        after_heart:        $result['heart'] = $heart;

        
        $hooray = $object->hooray;
        after_hooray:        $result['hooray'] = $hooray;

        
        $laugh = $object->laugh;
        after_laugh:        $result['laugh'] = $laugh;

        
        $rocket = $object->rocket;
        after_rocket:        $result['rocket'] = $rocket;

        
        $totalCount = $object->totalCount;
        after_totalCount:        $result['total_count'] = $totalCount;

        
        $url = $object->url;
        after_url:        $result['url'] = $url;


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


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesClosed(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookIssuesClosed);
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

        
        $issue = $object->issue;
        $issue = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesClosed⚡️Issue($issue);
        after_issue:        $result['issue'] = $issue;

        
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


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesClosed⚡️Issue(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookIssuesClosed\Issue);
        $result = [];

        $activeLockReason = $object->activeLockReason;

        if ($activeLockReason === null) {
            goto after_activeLockReason;
        }
        after_activeLockReason:        $result['active_lock_reason'] = $activeLockReason;

        
        $assignee = $object->assignee;

        if ($assignee === null) {
            goto after_assignee;
        }
        $assignee = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssueCommentCreated⚡️Issue⚡️Assignee($assignee);
        after_assignee:        $result['assignee'] = $assignee;

        
        $assignees = $object->assignees;
        static $assigneesSerializer0;

        if ($assigneesSerializer0 === null) {
            $assigneesSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\WebhookIssueCommentCreated\\Issue\\Assignee',
));
        }
        
        $assignees = $assigneesSerializer0->serialize($assignees, $this);
        after_assignees:        $result['assignees'] = $assignees;

        
        $authorAssociation = $object->authorAssociation;
        after_authorAssociation:        $result['author_association'] = $authorAssociation;

        
        $body = $object->body;

        if ($body === null) {
            goto after_body;
        }
        after_body:        $result['body'] = $body;

        
        $closedAt = $object->closedAt;

        if ($closedAt === null) {
            goto after_closedAt;
        }
        after_closedAt:        $result['closed_at'] = $closedAt;

        
        $comments = $object->comments;
        after_comments:        $result['comments'] = $comments;

        
        $commentsUrl = $object->commentsUrl;
        after_commentsUrl:        $result['comments_url'] = $commentsUrl;

        
        $createdAt = $object->createdAt;
        after_createdAt:        $result['created_at'] = $createdAt;

        
        $draft = $object->draft;

        if ($draft === null) {
            goto after_draft;
        }
        after_draft:        $result['draft'] = $draft;

        
        $eventsUrl = $object->eventsUrl;
        after_eventsUrl:        $result['events_url'] = $eventsUrl;

        
        $htmlUrl = $object->htmlUrl;
        after_htmlUrl:        $result['html_url'] = $htmlUrl;

        
        $id = $object->id;
        after_id:        $result['id'] = $id;

        
        $labels = $object->labels;

        if ($labels === null) {
            goto after_labels;
        }
        static $labelsSerializer0;

        if ($labelsSerializer0 === null) {
            $labelsSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionLabeled\\Label',
));
        }
        
        $labels = $labelsSerializer0->serialize($labels, $this);
        after_labels:        $result['labels'] = $labels;

        
        $labelsUrl = $object->labelsUrl;
        after_labelsUrl:        $result['labels_url'] = $labelsUrl;

        
        $locked = $object->locked;

        if ($locked === null) {
            goto after_locked;
        }
        after_locked:        $result['locked'] = $locked;

        
        $milestone = $object->milestone;

        if ($milestone === null) {
            goto after_milestone;
        }
        $milestone = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssueCommentCreated⚡️Issue⚡️Milestone($milestone);
        after_milestone:        $result['milestone'] = $milestone;

        
        $nodeId = $object->nodeId;
        after_nodeId:        $result['node_id'] = $nodeId;

        
        $number = $object->number;
        after_number:        $result['number'] = $number;

        
        $performedViaGithubApp = $object->performedViaGithubApp;

        if ($performedViaGithubApp === null) {
            goto after_performedViaGithubApp;
        }
        $performedViaGithubApp = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesClosed⚡️Issue⚡️PerformedViaGithubApp($performedViaGithubApp);
        after_performedViaGithubApp:        $result['performed_via_github_app'] = $performedViaGithubApp;

        
        $pullRequest = $object->pullRequest;

        if ($pullRequest === null) {
            goto after_pullRequest;
        }
        $pullRequest = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssueCommentCreated⚡️Issue⚡️PullRequest($pullRequest);
        after_pullRequest:        $result['pull_request'] = $pullRequest;

        
        $reactions = $object->reactions;
        $reactions = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Discussion⚡️Reactions($reactions);
        after_reactions:        $result['reactions'] = $reactions;

        
        $repositoryUrl = $object->repositoryUrl;
        after_repositoryUrl:        $result['repository_url'] = $repositoryUrl;

        
        $state = $object->state;

        if ($state === null) {
            goto after_state;
        }
        after_state:        $result['state'] = $state;

        
        $stateReason = $object->stateReason;

        if ($stateReason === null) {
            goto after_stateReason;
        }
        after_stateReason:        $result['state_reason'] = $stateReason;

        
        $timelineUrl = $object->timelineUrl;

        if ($timelineUrl === null) {
            goto after_timelineUrl;
        }
        after_timelineUrl:        $result['timeline_url'] = $timelineUrl;

        
        $title = $object->title;
        after_title:        $result['title'] = $title;

        
        $updatedAt = $object->updatedAt;
        after_updatedAt:        $result['updated_at'] = $updatedAt;

        
        $url = $object->url;
        after_url:        $result['url'] = $url;

        
        $user = $object->user;

        if ($user === null) {
            goto after_user;
        }
        $user = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssueCommentCreated⚡️Issue⚡️Assignee($user);
        after_user:        $result['user'] = $user;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesClosed⚡️Issue⚡️PerformedViaGithubApp(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookIssuesClosed\Issue\PerformedViaGithubApp);
        $result = [];

        $createdAt = $object->createdAt;

        if ($createdAt === null) {
            goto after_createdAt;
        }
        after_createdAt:        $result['created_at'] = $createdAt;

        
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

        
        $externalUrl = $object->externalUrl;

        if ($externalUrl === null) {
            goto after_externalUrl;
        }
        after_externalUrl:        $result['external_url'] = $externalUrl;

        
        $htmlUrl = $object->htmlUrl;
        after_htmlUrl:        $result['html_url'] = $htmlUrl;

        
        $id = $object->id;

        if ($id === null) {
            goto after_id;
        }
        after_id:        $result['id'] = $id;

        
        $name = $object->name;
        after_name:        $result['name'] = $name;

        
        $nodeId = $object->nodeId;
        after_nodeId:        $result['node_id'] = $nodeId;

        
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
        $permissions = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssueCommentEdited⚡️Issue⚡️PerformedViaGithubApp⚡️Permissions($permissions);
        after_permissions:        $result['permissions'] = $permissions;

        
        $slug = $object->slug;

        if ($slug === null) {
            goto after_slug;
        }
        after_slug:        $result['slug'] = $slug;

        
        $updatedAt = $object->updatedAt;

        if ($updatedAt === null) {
            goto after_updatedAt;
        }
        after_updatedAt:        $result['updated_at'] = $updatedAt;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesDeleted(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookIssuesDeleted);
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

        
        $issue = $object->issue;
        $issue = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesDeleted⚡️Issue($issue);
        after_issue:        $result['issue'] = $issue;

        
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


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesDeleted⚡️Issue(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookIssuesDeleted\Issue);
        $result = [];

        $activeLockReason = $object->activeLockReason;

        if ($activeLockReason === null) {
            goto after_activeLockReason;
        }
        after_activeLockReason:        $result['active_lock_reason'] = $activeLockReason;

        
        $assignee = $object->assignee;

        if ($assignee === null) {
            goto after_assignee;
        }
        $assignee = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Discussion⚡️AnswerChosenBy($assignee);
        after_assignee:        $result['assignee'] = $assignee;

        
        $assignees = $object->assignees;
        static $assigneesSerializer0;

        if ($assigneesSerializer0 === null) {
            $assigneesSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\Discussion\\AnswerChosenBy',
));
        }
        
        $assignees = $assigneesSerializer0->serialize($assignees, $this);
        after_assignees:        $result['assignees'] = $assignees;

        
        $authorAssociation = $object->authorAssociation;
        after_authorAssociation:        $result['author_association'] = $authorAssociation;

        
        $body = $object->body;

        if ($body === null) {
            goto after_body;
        }
        after_body:        $result['body'] = $body;

        
        $closedAt = $object->closedAt;

        if ($closedAt === null) {
            goto after_closedAt;
        }
        after_closedAt:        $result['closed_at'] = $closedAt;

        
        $comments = $object->comments;
        after_comments:        $result['comments'] = $comments;

        
        $commentsUrl = $object->commentsUrl;
        after_commentsUrl:        $result['comments_url'] = $commentsUrl;

        
        $createdAt = $object->createdAt;
        after_createdAt:        $result['created_at'] = $createdAt;

        
        $draft = $object->draft;

        if ($draft === null) {
            goto after_draft;
        }
        after_draft:        $result['draft'] = $draft;

        
        $eventsUrl = $object->eventsUrl;
        after_eventsUrl:        $result['events_url'] = $eventsUrl;

        
        $htmlUrl = $object->htmlUrl;
        after_htmlUrl:        $result['html_url'] = $htmlUrl;

        
        $id = $object->id;
        after_id:        $result['id'] = $id;

        
        $labels = $object->labels;

        if ($labels === null) {
            goto after_labels;
        }
        static $labelsSerializer0;

        if ($labelsSerializer0 === null) {
            $labelsSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionLabeled\\Label',
));
        }
        
        $labels = $labelsSerializer0->serialize($labels, $this);
        after_labels:        $result['labels'] = $labels;

        
        $labelsUrl = $object->labelsUrl;
        after_labelsUrl:        $result['labels_url'] = $labelsUrl;

        
        $locked = $object->locked;

        if ($locked === null) {
            goto after_locked;
        }
        after_locked:        $result['locked'] = $locked;

        
        $milestone = $object->milestone;

        if ($milestone === null) {
            goto after_milestone;
        }
        $milestone = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesDeleted⚡️Issue⚡️Milestone($milestone);
        after_milestone:        $result['milestone'] = $milestone;

        
        $nodeId = $object->nodeId;
        after_nodeId:        $result['node_id'] = $nodeId;

        
        $number = $object->number;
        after_number:        $result['number'] = $number;

        
        $performedViaGithubApp = $object->performedViaGithubApp;

        if ($performedViaGithubApp === null) {
            goto after_performedViaGithubApp;
        }
        $performedViaGithubApp = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesDeleted⚡️Issue⚡️PerformedViaGithubApp($performedViaGithubApp);
        after_performedViaGithubApp:        $result['performed_via_github_app'] = $performedViaGithubApp;

        
        $pullRequest = $object->pullRequest;

        if ($pullRequest === null) {
            goto after_pullRequest;
        }
        $pullRequest = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssueCommentCreated⚡️Issue⚡️PullRequest($pullRequest);
        after_pullRequest:        $result['pull_request'] = $pullRequest;

        
        $reactions = $object->reactions;
        $reactions = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Discussion⚡️Reactions($reactions);
        after_reactions:        $result['reactions'] = $reactions;

        
        $repositoryUrl = $object->repositoryUrl;
        after_repositoryUrl:        $result['repository_url'] = $repositoryUrl;

        
        $state = $object->state;

        if ($state === null) {
            goto after_state;
        }
        after_state:        $result['state'] = $state;

        
        $stateReason = $object->stateReason;

        if ($stateReason === null) {
            goto after_stateReason;
        }
        after_stateReason:        $result['state_reason'] = $stateReason;

        
        $timelineUrl = $object->timelineUrl;

        if ($timelineUrl === null) {
            goto after_timelineUrl;
        }
        after_timelineUrl:        $result['timeline_url'] = $timelineUrl;

        
        $title = $object->title;
        after_title:        $result['title'] = $title;

        
        $updatedAt = $object->updatedAt;
        after_updatedAt:        $result['updated_at'] = $updatedAt;

        
        $url = $object->url;
        after_url:        $result['url'] = $url;

        
        $user = $object->user;

        if ($user === null) {
            goto after_user;
        }
        $user = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Discussion⚡️AnswerChosenBy($user);
        after_user:        $result['user'] = $user;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesDeleted⚡️Issue⚡️Milestone(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookIssuesDeleted\Issue\Milestone);
        $result = [];

        $closedAt = $object->closedAt;

        if ($closedAt === null) {
            goto after_closedAt;
        }
        after_closedAt:        $result['closed_at'] = $closedAt;

        
        $closedIssues = $object->closedIssues;
        after_closedIssues:        $result['closed_issues'] = $closedIssues;

        
        $createdAt = $object->createdAt;
        after_createdAt:        $result['created_at'] = $createdAt;

        
        $creator = $object->creator;

        if ($creator === null) {
            goto after_creator;
        }
        $creator = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Discussion⚡️AnswerChosenBy($creator);
        after_creator:        $result['creator'] = $creator;

        
        $description = $object->description;

        if ($description === null) {
            goto after_description;
        }
        after_description:        $result['description'] = $description;

        
        $dueOn = $object->dueOn;

        if ($dueOn === null) {
            goto after_dueOn;
        }
        after_dueOn:        $result['due_on'] = $dueOn;

        
        $htmlUrl = $object->htmlUrl;
        after_htmlUrl:        $result['html_url'] = $htmlUrl;

        
        $id = $object->id;
        after_id:        $result['id'] = $id;

        
        $labelsUrl = $object->labelsUrl;
        after_labelsUrl:        $result['labels_url'] = $labelsUrl;

        
        $nodeId = $object->nodeId;
        after_nodeId:        $result['node_id'] = $nodeId;

        
        $number = $object->number;
        after_number:        $result['number'] = $number;

        
        $openIssues = $object->openIssues;
        after_openIssues:        $result['open_issues'] = $openIssues;

        
        $state = $object->state;
        after_state:        $result['state'] = $state;

        
        $title = $object->title;
        after_title:        $result['title'] = $title;

        
        $updatedAt = $object->updatedAt;
        after_updatedAt:        $result['updated_at'] = $updatedAt;

        
        $url = $object->url;
        after_url:        $result['url'] = $url;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesDeleted⚡️Issue⚡️PerformedViaGithubApp(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookIssuesDeleted\Issue\PerformedViaGithubApp);
        $result = [];

        $createdAt = $object->createdAt;

        if ($createdAt === null) {
            goto after_createdAt;
        }
        after_createdAt:        $result['created_at'] = $createdAt;

        
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

        
        $externalUrl = $object->externalUrl;

        if ($externalUrl === null) {
            goto after_externalUrl;
        }
        after_externalUrl:        $result['external_url'] = $externalUrl;

        
        $htmlUrl = $object->htmlUrl;
        after_htmlUrl:        $result['html_url'] = $htmlUrl;

        
        $id = $object->id;

        if ($id === null) {
            goto after_id;
        }
        after_id:        $result['id'] = $id;

        
        $name = $object->name;
        after_name:        $result['name'] = $name;

        
        $nodeId = $object->nodeId;
        after_nodeId:        $result['node_id'] = $nodeId;

        
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
        $permissions = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookDeploymentCreated⚡️Deployment⚡️PerformedViaGithubApp⚡️Permissions($permissions);
        after_permissions:        $result['permissions'] = $permissions;

        
        $slug = $object->slug;

        if ($slug === null) {
            goto after_slug;
        }
        after_slug:        $result['slug'] = $slug;

        
        $updatedAt = $object->updatedAt;

        if ($updatedAt === null) {
            goto after_updatedAt;
        }
        after_updatedAt:        $result['updated_at'] = $updatedAt;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookDeploymentCreated⚡️Deployment⚡️PerformedViaGithubApp⚡️Permissions(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookDeploymentCreated\Deployment\PerformedViaGithubApp\Permissions);
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

        
        $contentReferences = $object->contentReferences;

        if ($contentReferences === null) {
            goto after_contentReferences;
        }
        after_contentReferences:        $result['content_references'] = $contentReferences;

        
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

        
        $organizationAdministration = $object->organizationAdministration;

        if ($organizationAdministration === null) {
            goto after_organizationAdministration;
        }
        after_organizationAdministration:        $result['organization_administration'] = $organizationAdministration;

        
        $organizationHooks = $object->organizationHooks;

        if ($organizationHooks === null) {
            goto after_organizationHooks;
        }
        after_organizationHooks:        $result['organization_hooks'] = $organizationHooks;

        
        $organizationPackages = $object->organizationPackages;

        if ($organizationPackages === null) {
            goto after_organizationPackages;
        }
        after_organizationPackages:        $result['organization_packages'] = $organizationPackages;

        
        $organizationPlan = $object->organizationPlan;

        if ($organizationPlan === null) {
            goto after_organizationPlan;
        }
        after_organizationPlan:        $result['organization_plan'] = $organizationPlan;

        
        $organizationProjects = $object->organizationProjects;

        if ($organizationProjects === null) {
            goto after_organizationProjects;
        }
        after_organizationProjects:        $result['organization_projects'] = $organizationProjects;

        
        $organizationSecrets = $object->organizationSecrets;

        if ($organizationSecrets === null) {
            goto after_organizationSecrets;
        }
        after_organizationSecrets:        $result['organization_secrets'] = $organizationSecrets;

        
        $organizationSelfHostedRunners = $object->organizationSelfHostedRunners;

        if ($organizationSelfHostedRunners === null) {
            goto after_organizationSelfHostedRunners;
        }
        after_organizationSelfHostedRunners:        $result['organization_self_hosted_runners'] = $organizationSelfHostedRunners;

        
        $organizationUserBlocking = $object->organizationUserBlocking;

        if ($organizationUserBlocking === null) {
            goto after_organizationUserBlocking;
        }
        after_organizationUserBlocking:        $result['organization_user_blocking'] = $organizationUserBlocking;

        
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

        
        $pullRequests = $object->pullRequests;

        if ($pullRequests === null) {
            goto after_pullRequests;
        }
        after_pullRequests:        $result['pull_requests'] = $pullRequests;

        
        $repositoryHooks = $object->repositoryHooks;

        if ($repositoryHooks === null) {
            goto after_repositoryHooks;
        }
        after_repositoryHooks:        $result['repository_hooks'] = $repositoryHooks;

        
        $repositoryProjects = $object->repositoryProjects;

        if ($repositoryProjects === null) {
            goto after_repositoryProjects;
        }
        after_repositoryProjects:        $result['repository_projects'] = $repositoryProjects;

        
        $secretScanningAlerts = $object->secretScanningAlerts;

        if ($secretScanningAlerts === null) {
            goto after_secretScanningAlerts;
        }
        after_secretScanningAlerts:        $result['secret_scanning_alerts'] = $secretScanningAlerts;

        
        $secrets = $object->secrets;

        if ($secrets === null) {
            goto after_secrets;
        }
        after_secrets:        $result['secrets'] = $secrets;

        
        $securityEvents = $object->securityEvents;

        if ($securityEvents === null) {
            goto after_securityEvents;
        }
        after_securityEvents:        $result['security_events'] = $securityEvents;

        
        $securityScanningAlert = $object->securityScanningAlert;

        if ($securityScanningAlert === null) {
            goto after_securityScanningAlert;
        }
        after_securityScanningAlert:        $result['security_scanning_alert'] = $securityScanningAlert;

        
        $singleFile = $object->singleFile;

        if ($singleFile === null) {
            goto after_singleFile;
        }
        after_singleFile:        $result['single_file'] = $singleFile;

        
        $statuses = $object->statuses;

        if ($statuses === null) {
            goto after_statuses;
        }
        after_statuses:        $result['statuses'] = $statuses;

        
        $teamDiscussions = $object->teamDiscussions;

        if ($teamDiscussions === null) {
            goto after_teamDiscussions;
        }
        after_teamDiscussions:        $result['team_discussions'] = $teamDiscussions;

        
        $vulnerabilityAlerts = $object->vulnerabilityAlerts;

        if ($vulnerabilityAlerts === null) {
            goto after_vulnerabilityAlerts;
        }
        after_vulnerabilityAlerts:        $result['vulnerability_alerts'] = $vulnerabilityAlerts;

        
        $workflows = $object->workflows;

        if ($workflows === null) {
            goto after_workflows;
        }
        after_workflows:        $result['workflows'] = $workflows;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesDemilestoned(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookIssuesDemilestoned);
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

        
        $issue = $object->issue;
        $issue = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesDemilestoned⚡️Issue($issue);
        after_issue:        $result['issue'] = $issue;

        
        $milestone = $object->milestone;

        if ($milestone === null) {
            goto after_milestone;
        }
        $milestone = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesDemilestoned⚡️Milestone($milestone);
        after_milestone:        $result['milestone'] = $milestone;

        
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


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesDemilestoned⚡️Issue(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookIssuesDemilestoned\Issue);
        $result = [];

        $activeLockReason = $object->activeLockReason;

        if ($activeLockReason === null) {
            goto after_activeLockReason;
        }
        after_activeLockReason:        $result['active_lock_reason'] = $activeLockReason;

        
        $assignee = $object->assignee;

        if ($assignee === null) {
            goto after_assignee;
        }
        $assignee = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssueCommentCreated⚡️Issue⚡️Assignee($assignee);
        after_assignee:        $result['assignee'] = $assignee;

        
        $assignees = $object->assignees;
        static $assigneesSerializer0;

        if ($assigneesSerializer0 === null) {
            $assigneesSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\WebhookIssueCommentCreated\\Issue\\Assignee',
));
        }
        
        $assignees = $assigneesSerializer0->serialize($assignees, $this);
        after_assignees:        $result['assignees'] = $assignees;

        
        $authorAssociation = $object->authorAssociation;
        after_authorAssociation:        $result['author_association'] = $authorAssociation;

        
        $body = $object->body;

        if ($body === null) {
            goto after_body;
        }
        after_body:        $result['body'] = $body;

        
        $closedAt = $object->closedAt;

        if ($closedAt === null) {
            goto after_closedAt;
        }
        after_closedAt:        $result['closed_at'] = $closedAt;

        
        $comments = $object->comments;
        after_comments:        $result['comments'] = $comments;

        
        $commentsUrl = $object->commentsUrl;
        after_commentsUrl:        $result['comments_url'] = $commentsUrl;

        
        $createdAt = $object->createdAt;
        after_createdAt:        $result['created_at'] = $createdAt;

        
        $draft = $object->draft;

        if ($draft === null) {
            goto after_draft;
        }
        after_draft:        $result['draft'] = $draft;

        
        $eventsUrl = $object->eventsUrl;
        after_eventsUrl:        $result['events_url'] = $eventsUrl;

        
        $htmlUrl = $object->htmlUrl;
        after_htmlUrl:        $result['html_url'] = $htmlUrl;

        
        $id = $object->id;
        after_id:        $result['id'] = $id;

        
        $labels = $object->labels;

        if ($labels === null) {
            goto after_labels;
        }
        static $labelsSerializer0;

        if ($labelsSerializer0 === null) {
            $labelsSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionLabeled\\Label',
));
        }
        
        $labels = $labelsSerializer0->serialize($labels, $this);
        after_labels:        $result['labels'] = $labels;

        
        $labelsUrl = $object->labelsUrl;
        after_labelsUrl:        $result['labels_url'] = $labelsUrl;

        
        $locked = $object->locked;

        if ($locked === null) {
            goto after_locked;
        }
        after_locked:        $result['locked'] = $locked;

        
        $milestone = $object->milestone;

        if ($milestone === null) {
            goto after_milestone;
        }
        $milestone = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssueCommentCreated⚡️Issue⚡️Milestone($milestone);
        after_milestone:        $result['milestone'] = $milestone;

        
        $nodeId = $object->nodeId;
        after_nodeId:        $result['node_id'] = $nodeId;

        
        $number = $object->number;
        after_number:        $result['number'] = $number;

        
        $performedViaGithubApp = $object->performedViaGithubApp;

        if ($performedViaGithubApp === null) {
            goto after_performedViaGithubApp;
        }
        $performedViaGithubApp = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesDemilestoned⚡️Issue⚡️PerformedViaGithubApp($performedViaGithubApp);
        after_performedViaGithubApp:        $result['performed_via_github_app'] = $performedViaGithubApp;

        
        $pullRequest = $object->pullRequest;

        if ($pullRequest === null) {
            goto after_pullRequest;
        }
        $pullRequest = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssueCommentCreated⚡️Issue⚡️PullRequest($pullRequest);
        after_pullRequest:        $result['pull_request'] = $pullRequest;

        
        $reactions = $object->reactions;
        $reactions = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Discussion⚡️Reactions($reactions);
        after_reactions:        $result['reactions'] = $reactions;

        
        $repositoryUrl = $object->repositoryUrl;
        after_repositoryUrl:        $result['repository_url'] = $repositoryUrl;

        
        $state = $object->state;

        if ($state === null) {
            goto after_state;
        }
        after_state:        $result['state'] = $state;

        
        $stateReason = $object->stateReason;

        if ($stateReason === null) {
            goto after_stateReason;
        }
        after_stateReason:        $result['state_reason'] = $stateReason;

        
        $timelineUrl = $object->timelineUrl;

        if ($timelineUrl === null) {
            goto after_timelineUrl;
        }
        after_timelineUrl:        $result['timeline_url'] = $timelineUrl;

        
        $title = $object->title;
        after_title:        $result['title'] = $title;

        
        $updatedAt = $object->updatedAt;
        after_updatedAt:        $result['updated_at'] = $updatedAt;

        
        $url = $object->url;
        after_url:        $result['url'] = $url;

        
        $user = $object->user;

        if ($user === null) {
            goto after_user;
        }
        $user = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssueCommentCreated⚡️Issue⚡️Assignee($user);
        after_user:        $result['user'] = $user;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesDemilestoned⚡️Issue⚡️PerformedViaGithubApp(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookIssuesDemilestoned\Issue\PerformedViaGithubApp);
        $result = [];

        $createdAt = $object->createdAt;

        if ($createdAt === null) {
            goto after_createdAt;
        }
        after_createdAt:        $result['created_at'] = $createdAt;

        
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

        
        $externalUrl = $object->externalUrl;

        if ($externalUrl === null) {
            goto after_externalUrl;
        }
        after_externalUrl:        $result['external_url'] = $externalUrl;

        
        $htmlUrl = $object->htmlUrl;
        after_htmlUrl:        $result['html_url'] = $htmlUrl;

        
        $id = $object->id;

        if ($id === null) {
            goto after_id;
        }
        after_id:        $result['id'] = $id;

        
        $name = $object->name;
        after_name:        $result['name'] = $name;

        
        $nodeId = $object->nodeId;
        after_nodeId:        $result['node_id'] = $nodeId;

        
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
        $permissions = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssueCommentEdited⚡️Issue⚡️PerformedViaGithubApp⚡️Permissions($permissions);
        after_permissions:        $result['permissions'] = $permissions;

        
        $slug = $object->slug;

        if ($slug === null) {
            goto after_slug;
        }
        after_slug:        $result['slug'] = $slug;

        
        $updatedAt = $object->updatedAt;

        if ($updatedAt === null) {
            goto after_updatedAt;
        }
        after_updatedAt:        $result['updated_at'] = $updatedAt;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesDemilestoned⚡️Milestone(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookIssuesDemilestoned\Milestone);
        $result = [];

        $closedAt = $object->closedAt;

        if ($closedAt === null) {
            goto after_closedAt;
        }
        after_closedAt:        $result['closed_at'] = $closedAt;

        
        $closedIssues = $object->closedIssues;
        after_closedIssues:        $result['closed_issues'] = $closedIssues;

        
        $createdAt = $object->createdAt;
        after_createdAt:        $result['created_at'] = $createdAt;

        
        $creator = $object->creator;

        if ($creator === null) {
            goto after_creator;
        }
        $creator = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssueCommentCreated⚡️Issue⚡️Assignee($creator);
        after_creator:        $result['creator'] = $creator;

        
        $description = $object->description;

        if ($description === null) {
            goto after_description;
        }
        after_description:        $result['description'] = $description;

        
        $dueOn = $object->dueOn;

        if ($dueOn === null) {
            goto after_dueOn;
        }
        after_dueOn:        $result['due_on'] = $dueOn;

        
        $htmlUrl = $object->htmlUrl;
        after_htmlUrl:        $result['html_url'] = $htmlUrl;

        
        $id = $object->id;
        after_id:        $result['id'] = $id;

        
        $labelsUrl = $object->labelsUrl;
        after_labelsUrl:        $result['labels_url'] = $labelsUrl;

        
        $nodeId = $object->nodeId;
        after_nodeId:        $result['node_id'] = $nodeId;

        
        $number = $object->number;
        after_number:        $result['number'] = $number;

        
        $openIssues = $object->openIssues;
        after_openIssues:        $result['open_issues'] = $openIssues;

        
        $state = $object->state;
        after_state:        $result['state'] = $state;

        
        $title = $object->title;
        after_title:        $result['title'] = $title;

        
        $updatedAt = $object->updatedAt;
        after_updatedAt:        $result['updated_at'] = $updatedAt;

        
        $url = $object->url;
        after_url:        $result['url'] = $url;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesEdited(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookIssuesEdited);
        $result = [];

        $action = $object->action;
        after_action:        $result['action'] = $action;

        
        $changes = $object->changes;
        $changes = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesEdited⚡️Changes($changes);
        after_changes:        $result['changes'] = $changes;

        
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

        
        $issue = $object->issue;
        $issue = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesEdited⚡️Issue($issue);
        after_issue:        $result['issue'] = $issue;

        
        $label = $object->label;

        if ($label === null) {
            goto after_label;
        }
        $label = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookDiscussionLabeled⚡️Label($label);
        after_label:        $result['label'] = $label;

        
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


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesEdited⚡️Changes(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookIssuesEdited\Changes);
        $result = [];

        $body = $object->body;

        if ($body === null) {
            goto after_body;
        }
        $body = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssueCommentEdited⚡️Changes⚡️Body($body);
        after_body:        $result['body'] = $body;

        
        $title = $object->title;

        if ($title === null) {
            goto after_title;
        }
        $title = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesEdited⚡️Changes⚡️Title($title);
        after_title:        $result['title'] = $title;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssueCommentEdited⚡️Changes⚡️Body(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookIssueCommentEdited\Changes\Body);
        $result = [];

        $from = $object->from;
        after_from:        $result['from'] = $from;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesEdited⚡️Changes⚡️Title(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookIssuesEdited\Changes\Title);
        $result = [];

        $from = $object->from;
        after_from:        $result['from'] = $from;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesEdited⚡️Issue(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookIssuesEdited\Issue);
        $result = [];

        $activeLockReason = $object->activeLockReason;

        if ($activeLockReason === null) {
            goto after_activeLockReason;
        }
        after_activeLockReason:        $result['active_lock_reason'] = $activeLockReason;

        
        $assignee = $object->assignee;

        if ($assignee === null) {
            goto after_assignee;
        }
        $assignee = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssueCommentCreated⚡️Issue⚡️Assignee($assignee);
        after_assignee:        $result['assignee'] = $assignee;

        
        $assignees = $object->assignees;
        static $assigneesSerializer0;

        if ($assigneesSerializer0 === null) {
            $assigneesSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\WebhookIssueCommentCreated\\Issue\\Assignee',
));
        }
        
        $assignees = $assigneesSerializer0->serialize($assignees, $this);
        after_assignees:        $result['assignees'] = $assignees;

        
        $authorAssociation = $object->authorAssociation;
        after_authorAssociation:        $result['author_association'] = $authorAssociation;

        
        $body = $object->body;

        if ($body === null) {
            goto after_body;
        }
        after_body:        $result['body'] = $body;

        
        $closedAt = $object->closedAt;

        if ($closedAt === null) {
            goto after_closedAt;
        }
        after_closedAt:        $result['closed_at'] = $closedAt;

        
        $comments = $object->comments;
        after_comments:        $result['comments'] = $comments;

        
        $commentsUrl = $object->commentsUrl;
        after_commentsUrl:        $result['comments_url'] = $commentsUrl;

        
        $createdAt = $object->createdAt;
        after_createdAt:        $result['created_at'] = $createdAt;

        
        $draft = $object->draft;

        if ($draft === null) {
            goto after_draft;
        }
        after_draft:        $result['draft'] = $draft;

        
        $eventsUrl = $object->eventsUrl;
        after_eventsUrl:        $result['events_url'] = $eventsUrl;

        
        $htmlUrl = $object->htmlUrl;
        after_htmlUrl:        $result['html_url'] = $htmlUrl;

        
        $id = $object->id;
        after_id:        $result['id'] = $id;

        
        $labels = $object->labels;

        if ($labels === null) {
            goto after_labels;
        }
        static $labelsSerializer0;

        if ($labelsSerializer0 === null) {
            $labelsSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionLabeled\\Label',
));
        }
        
        $labels = $labelsSerializer0->serialize($labels, $this);
        after_labels:        $result['labels'] = $labels;

        
        $labelsUrl = $object->labelsUrl;
        after_labelsUrl:        $result['labels_url'] = $labelsUrl;

        
        $locked = $object->locked;

        if ($locked === null) {
            goto after_locked;
        }
        after_locked:        $result['locked'] = $locked;

        
        $milestone = $object->milestone;

        if ($milestone === null) {
            goto after_milestone;
        }
        $milestone = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssueCommentCreated⚡️Issue⚡️Milestone($milestone);
        after_milestone:        $result['milestone'] = $milestone;

        
        $nodeId = $object->nodeId;
        after_nodeId:        $result['node_id'] = $nodeId;

        
        $number = $object->number;
        after_number:        $result['number'] = $number;

        
        $performedViaGithubApp = $object->performedViaGithubApp;

        if ($performedViaGithubApp === null) {
            goto after_performedViaGithubApp;
        }
        $performedViaGithubApp = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesEdited⚡️Issue⚡️PerformedViaGithubApp($performedViaGithubApp);
        after_performedViaGithubApp:        $result['performed_via_github_app'] = $performedViaGithubApp;

        
        $pullRequest = $object->pullRequest;

        if ($pullRequest === null) {
            goto after_pullRequest;
        }
        $pullRequest = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssueCommentCreated⚡️Issue⚡️PullRequest($pullRequest);
        after_pullRequest:        $result['pull_request'] = $pullRequest;

        
        $reactions = $object->reactions;
        $reactions = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Discussion⚡️Reactions($reactions);
        after_reactions:        $result['reactions'] = $reactions;

        
        $repositoryUrl = $object->repositoryUrl;
        after_repositoryUrl:        $result['repository_url'] = $repositoryUrl;

        
        $state = $object->state;

        if ($state === null) {
            goto after_state;
        }
        after_state:        $result['state'] = $state;

        
        $stateReason = $object->stateReason;

        if ($stateReason === null) {
            goto after_stateReason;
        }
        after_stateReason:        $result['state_reason'] = $stateReason;

        
        $timelineUrl = $object->timelineUrl;

        if ($timelineUrl === null) {
            goto after_timelineUrl;
        }
        after_timelineUrl:        $result['timeline_url'] = $timelineUrl;

        
        $title = $object->title;
        after_title:        $result['title'] = $title;

        
        $updatedAt = $object->updatedAt;
        after_updatedAt:        $result['updated_at'] = $updatedAt;

        
        $url = $object->url;
        after_url:        $result['url'] = $url;

        
        $user = $object->user;

        if ($user === null) {
            goto after_user;
        }
        $user = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssueCommentCreated⚡️Issue⚡️Assignee($user);
        after_user:        $result['user'] = $user;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesEdited⚡️Issue⚡️PerformedViaGithubApp(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookIssuesEdited\Issue\PerformedViaGithubApp);
        $result = [];

        $createdAt = $object->createdAt;

        if ($createdAt === null) {
            goto after_createdAt;
        }
        after_createdAt:        $result['created_at'] = $createdAt;

        
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

        
        $externalUrl = $object->externalUrl;

        if ($externalUrl === null) {
            goto after_externalUrl;
        }
        after_externalUrl:        $result['external_url'] = $externalUrl;

        
        $htmlUrl = $object->htmlUrl;
        after_htmlUrl:        $result['html_url'] = $htmlUrl;

        
        $id = $object->id;

        if ($id === null) {
            goto after_id;
        }
        after_id:        $result['id'] = $id;

        
        $name = $object->name;
        after_name:        $result['name'] = $name;

        
        $nodeId = $object->nodeId;
        after_nodeId:        $result['node_id'] = $nodeId;

        
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
        $permissions = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssueCommentEdited⚡️Issue⚡️PerformedViaGithubApp⚡️Permissions($permissions);
        after_permissions:        $result['permissions'] = $permissions;

        
        $slug = $object->slug;

        if ($slug === null) {
            goto after_slug;
        }
        after_slug:        $result['slug'] = $slug;

        
        $updatedAt = $object->updatedAt;

        if ($updatedAt === null) {
            goto after_updatedAt;
        }
        after_updatedAt:        $result['updated_at'] = $updatedAt;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesLabeled(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookIssuesLabeled);
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

        
        $issue = $object->issue;
        $issue = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesLabeled⚡️Issue($issue);
        after_issue:        $result['issue'] = $issue;

        
        $label = $object->label;

        if ($label === null) {
            goto after_label;
        }
        $label = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookDiscussionLabeled⚡️Label($label);
        after_label:        $result['label'] = $label;

        
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


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesLabeled⚡️Issue(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookIssuesLabeled\Issue);
        $result = [];

        $activeLockReason = $object->activeLockReason;

        if ($activeLockReason === null) {
            goto after_activeLockReason;
        }
        after_activeLockReason:        $result['active_lock_reason'] = $activeLockReason;

        
        $assignee = $object->assignee;

        if ($assignee === null) {
            goto after_assignee;
        }
        $assignee = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssueCommentCreated⚡️Issue⚡️Assignee($assignee);
        after_assignee:        $result['assignee'] = $assignee;

        
        $assignees = $object->assignees;
        static $assigneesSerializer0;

        if ($assigneesSerializer0 === null) {
            $assigneesSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\WebhookIssueCommentCreated\\Issue\\Assignee',
));
        }
        
        $assignees = $assigneesSerializer0->serialize($assignees, $this);
        after_assignees:        $result['assignees'] = $assignees;

        
        $authorAssociation = $object->authorAssociation;
        after_authorAssociation:        $result['author_association'] = $authorAssociation;

        
        $body = $object->body;

        if ($body === null) {
            goto after_body;
        }
        after_body:        $result['body'] = $body;

        
        $closedAt = $object->closedAt;

        if ($closedAt === null) {
            goto after_closedAt;
        }
        after_closedAt:        $result['closed_at'] = $closedAt;

        
        $comments = $object->comments;
        after_comments:        $result['comments'] = $comments;

        
        $commentsUrl = $object->commentsUrl;
        after_commentsUrl:        $result['comments_url'] = $commentsUrl;

        
        $createdAt = $object->createdAt;
        after_createdAt:        $result['created_at'] = $createdAt;

        
        $draft = $object->draft;

        if ($draft === null) {
            goto after_draft;
        }
        after_draft:        $result['draft'] = $draft;

        
        $eventsUrl = $object->eventsUrl;
        after_eventsUrl:        $result['events_url'] = $eventsUrl;

        
        $htmlUrl = $object->htmlUrl;
        after_htmlUrl:        $result['html_url'] = $htmlUrl;

        
        $id = $object->id;
        after_id:        $result['id'] = $id;

        
        $labels = $object->labels;

        if ($labels === null) {
            goto after_labels;
        }
        static $labelsSerializer0;

        if ($labelsSerializer0 === null) {
            $labelsSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionLabeled\\Label',
));
        }
        
        $labels = $labelsSerializer0->serialize($labels, $this);
        after_labels:        $result['labels'] = $labels;

        
        $labelsUrl = $object->labelsUrl;
        after_labelsUrl:        $result['labels_url'] = $labelsUrl;

        
        $locked = $object->locked;

        if ($locked === null) {
            goto after_locked;
        }
        after_locked:        $result['locked'] = $locked;

        
        $milestone = $object->milestone;

        if ($milestone === null) {
            goto after_milestone;
        }
        $milestone = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssueCommentCreated⚡️Issue⚡️Milestone($milestone);
        after_milestone:        $result['milestone'] = $milestone;

        
        $nodeId = $object->nodeId;
        after_nodeId:        $result['node_id'] = $nodeId;

        
        $number = $object->number;
        after_number:        $result['number'] = $number;

        
        $performedViaGithubApp = $object->performedViaGithubApp;

        if ($performedViaGithubApp === null) {
            goto after_performedViaGithubApp;
        }
        $performedViaGithubApp = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesLabeled⚡️Issue⚡️PerformedViaGithubApp($performedViaGithubApp);
        after_performedViaGithubApp:        $result['performed_via_github_app'] = $performedViaGithubApp;

        
        $pullRequest = $object->pullRequest;

        if ($pullRequest === null) {
            goto after_pullRequest;
        }
        $pullRequest = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssueCommentCreated⚡️Issue⚡️PullRequest($pullRequest);
        after_pullRequest:        $result['pull_request'] = $pullRequest;

        
        $reactions = $object->reactions;
        $reactions = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Discussion⚡️Reactions($reactions);
        after_reactions:        $result['reactions'] = $reactions;

        
        $repositoryUrl = $object->repositoryUrl;
        after_repositoryUrl:        $result['repository_url'] = $repositoryUrl;

        
        $state = $object->state;

        if ($state === null) {
            goto after_state;
        }
        after_state:        $result['state'] = $state;

        
        $stateReason = $object->stateReason;

        if ($stateReason === null) {
            goto after_stateReason;
        }
        after_stateReason:        $result['state_reason'] = $stateReason;

        
        $timelineUrl = $object->timelineUrl;

        if ($timelineUrl === null) {
            goto after_timelineUrl;
        }
        after_timelineUrl:        $result['timeline_url'] = $timelineUrl;

        
        $title = $object->title;
        after_title:        $result['title'] = $title;

        
        $updatedAt = $object->updatedAt;
        after_updatedAt:        $result['updated_at'] = $updatedAt;

        
        $url = $object->url;
        after_url:        $result['url'] = $url;

        
        $user = $object->user;

        if ($user === null) {
            goto after_user;
        }
        $user = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssueCommentCreated⚡️Issue⚡️Assignee($user);
        after_user:        $result['user'] = $user;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesLabeled⚡️Issue⚡️PerformedViaGithubApp(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookIssuesLabeled\Issue\PerformedViaGithubApp);
        $result = [];

        $createdAt = $object->createdAt;

        if ($createdAt === null) {
            goto after_createdAt;
        }
        after_createdAt:        $result['created_at'] = $createdAt;

        
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

        
        $externalUrl = $object->externalUrl;

        if ($externalUrl === null) {
            goto after_externalUrl;
        }
        after_externalUrl:        $result['external_url'] = $externalUrl;

        
        $htmlUrl = $object->htmlUrl;
        after_htmlUrl:        $result['html_url'] = $htmlUrl;

        
        $id = $object->id;

        if ($id === null) {
            goto after_id;
        }
        after_id:        $result['id'] = $id;

        
        $name = $object->name;
        after_name:        $result['name'] = $name;

        
        $nodeId = $object->nodeId;
        after_nodeId:        $result['node_id'] = $nodeId;

        
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
        $permissions = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssueCommentEdited⚡️Issue⚡️PerformedViaGithubApp⚡️Permissions($permissions);
        after_permissions:        $result['permissions'] = $permissions;

        
        $slug = $object->slug;

        if ($slug === null) {
            goto after_slug;
        }
        after_slug:        $result['slug'] = $slug;

        
        $updatedAt = $object->updatedAt;

        if ($updatedAt === null) {
            goto after_updatedAt;
        }
        after_updatedAt:        $result['updated_at'] = $updatedAt;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesLocked(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookIssuesLocked);
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

        
        $issue = $object->issue;
        $issue = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesLocked⚡️Issue($issue);
        after_issue:        $result['issue'] = $issue;

        
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


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesLocked⚡️Issue(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookIssuesLocked\Issue);
        $result = [];

        $activeLockReason = $object->activeLockReason;

        if ($activeLockReason === null) {
            goto after_activeLockReason;
        }
        after_activeLockReason:        $result['active_lock_reason'] = $activeLockReason;

        
        $assignee = $object->assignee;

        if ($assignee === null) {
            goto after_assignee;
        }
        $assignee = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Discussion⚡️AnswerChosenBy($assignee);
        after_assignee:        $result['assignee'] = $assignee;

        
        $assignees = $object->assignees;
        static $assigneesSerializer0;

        if ($assigneesSerializer0 === null) {
            $assigneesSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\Discussion\\AnswerChosenBy',
));
        }
        
        $assignees = $assigneesSerializer0->serialize($assignees, $this);
        after_assignees:        $result['assignees'] = $assignees;

        
        $authorAssociation = $object->authorAssociation;
        after_authorAssociation:        $result['author_association'] = $authorAssociation;

        
        $body = $object->body;

        if ($body === null) {
            goto after_body;
        }
        after_body:        $result['body'] = $body;

        
        $closedAt = $object->closedAt;

        if ($closedAt === null) {
            goto after_closedAt;
        }
        after_closedAt:        $result['closed_at'] = $closedAt;

        
        $comments = $object->comments;
        after_comments:        $result['comments'] = $comments;

        
        $commentsUrl = $object->commentsUrl;
        after_commentsUrl:        $result['comments_url'] = $commentsUrl;

        
        $createdAt = $object->createdAt;
        after_createdAt:        $result['created_at'] = $createdAt;

        
        $draft = $object->draft;

        if ($draft === null) {
            goto after_draft;
        }
        after_draft:        $result['draft'] = $draft;

        
        $eventsUrl = $object->eventsUrl;
        after_eventsUrl:        $result['events_url'] = $eventsUrl;

        
        $htmlUrl = $object->htmlUrl;
        after_htmlUrl:        $result['html_url'] = $htmlUrl;

        
        $id = $object->id;
        after_id:        $result['id'] = $id;

        
        $labels = $object->labels;

        if ($labels === null) {
            goto after_labels;
        }
        static $labelsSerializer0;

        if ($labelsSerializer0 === null) {
            $labelsSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionLabeled\\Label',
));
        }
        
        $labels = $labelsSerializer0->serialize($labels, $this);
        after_labels:        $result['labels'] = $labels;

        
        $labelsUrl = $object->labelsUrl;
        after_labelsUrl:        $result['labels_url'] = $labelsUrl;

        
        $locked = $object->locked;

        if ($locked === null) {
            goto after_locked;
        }
        after_locked:        $result['locked'] = $locked;

        
        $milestone = $object->milestone;

        if ($milestone === null) {
            goto after_milestone;
        }
        $milestone = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesDeleted⚡️Issue⚡️Milestone($milestone);
        after_milestone:        $result['milestone'] = $milestone;

        
        $nodeId = $object->nodeId;
        after_nodeId:        $result['node_id'] = $nodeId;

        
        $number = $object->number;
        after_number:        $result['number'] = $number;

        
        $performedViaGithubApp = $object->performedViaGithubApp;

        if ($performedViaGithubApp === null) {
            goto after_performedViaGithubApp;
        }
        $performedViaGithubApp = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesLocked⚡️Issue⚡️PerformedViaGithubApp($performedViaGithubApp);
        after_performedViaGithubApp:        $result['performed_via_github_app'] = $performedViaGithubApp;

        
        $pullRequest = $object->pullRequest;

        if ($pullRequest === null) {
            goto after_pullRequest;
        }
        $pullRequest = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssueCommentCreated⚡️Issue⚡️PullRequest($pullRequest);
        after_pullRequest:        $result['pull_request'] = $pullRequest;

        
        $reactions = $object->reactions;
        $reactions = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Discussion⚡️Reactions($reactions);
        after_reactions:        $result['reactions'] = $reactions;

        
        $repositoryUrl = $object->repositoryUrl;
        after_repositoryUrl:        $result['repository_url'] = $repositoryUrl;

        
        $state = $object->state;

        if ($state === null) {
            goto after_state;
        }
        after_state:        $result['state'] = $state;

        
        $stateReason = $object->stateReason;

        if ($stateReason === null) {
            goto after_stateReason;
        }
        after_stateReason:        $result['state_reason'] = $stateReason;

        
        $timelineUrl = $object->timelineUrl;

        if ($timelineUrl === null) {
            goto after_timelineUrl;
        }
        after_timelineUrl:        $result['timeline_url'] = $timelineUrl;

        
        $title = $object->title;
        after_title:        $result['title'] = $title;

        
        $updatedAt = $object->updatedAt;
        after_updatedAt:        $result['updated_at'] = $updatedAt;

        
        $url = $object->url;
        after_url:        $result['url'] = $url;

        
        $user = $object->user;

        if ($user === null) {
            goto after_user;
        }
        $user = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Discussion⚡️AnswerChosenBy($user);
        after_user:        $result['user'] = $user;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesLocked⚡️Issue⚡️PerformedViaGithubApp(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookIssuesLocked\Issue\PerformedViaGithubApp);
        $result = [];

        $createdAt = $object->createdAt;

        if ($createdAt === null) {
            goto after_createdAt;
        }
        after_createdAt:        $result['created_at'] = $createdAt;

        
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

        
        $externalUrl = $object->externalUrl;

        if ($externalUrl === null) {
            goto after_externalUrl;
        }
        after_externalUrl:        $result['external_url'] = $externalUrl;

        
        $htmlUrl = $object->htmlUrl;
        after_htmlUrl:        $result['html_url'] = $htmlUrl;

        
        $id = $object->id;

        if ($id === null) {
            goto after_id;
        }
        after_id:        $result['id'] = $id;

        
        $name = $object->name;
        after_name:        $result['name'] = $name;

        
        $nodeId = $object->nodeId;
        after_nodeId:        $result['node_id'] = $nodeId;

        
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
        $permissions = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookDeploymentCreated⚡️Deployment⚡️PerformedViaGithubApp⚡️Permissions($permissions);
        after_permissions:        $result['permissions'] = $permissions;

        
        $slug = $object->slug;

        if ($slug === null) {
            goto after_slug;
        }
        after_slug:        $result['slug'] = $slug;

        
        $updatedAt = $object->updatedAt;

        if ($updatedAt === null) {
            goto after_updatedAt;
        }
        after_updatedAt:        $result['updated_at'] = $updatedAt;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesMilestoned(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookIssuesMilestoned);
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

        
        $issue = $object->issue;
        $issue = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesMilestoned⚡️Issue($issue);
        after_issue:        $result['issue'] = $issue;

        
        $milestone = $object->milestone;
        $milestone = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesDemilestoned⚡️Milestone($milestone);
        after_milestone:        $result['milestone'] = $milestone;

        
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


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesMilestoned⚡️Issue(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookIssuesMilestoned\Issue);
        $result = [];

        $activeLockReason = $object->activeLockReason;

        if ($activeLockReason === null) {
            goto after_activeLockReason;
        }
        after_activeLockReason:        $result['active_lock_reason'] = $activeLockReason;

        
        $assignee = $object->assignee;

        if ($assignee === null) {
            goto after_assignee;
        }
        $assignee = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Discussion⚡️AnswerChosenBy($assignee);
        after_assignee:        $result['assignee'] = $assignee;

        
        $assignees = $object->assignees;
        static $assigneesSerializer0;

        if ($assigneesSerializer0 === null) {
            $assigneesSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\Discussion\\AnswerChosenBy',
));
        }
        
        $assignees = $assigneesSerializer0->serialize($assignees, $this);
        after_assignees:        $result['assignees'] = $assignees;

        
        $authorAssociation = $object->authorAssociation;
        after_authorAssociation:        $result['author_association'] = $authorAssociation;

        
        $body = $object->body;

        if ($body === null) {
            goto after_body;
        }
        after_body:        $result['body'] = $body;

        
        $closedAt = $object->closedAt;

        if ($closedAt === null) {
            goto after_closedAt;
        }
        after_closedAt:        $result['closed_at'] = $closedAt;

        
        $comments = $object->comments;
        after_comments:        $result['comments'] = $comments;

        
        $commentsUrl = $object->commentsUrl;
        after_commentsUrl:        $result['comments_url'] = $commentsUrl;

        
        $createdAt = $object->createdAt;
        after_createdAt:        $result['created_at'] = $createdAt;

        
        $draft = $object->draft;

        if ($draft === null) {
            goto after_draft;
        }
        after_draft:        $result['draft'] = $draft;

        
        $eventsUrl = $object->eventsUrl;
        after_eventsUrl:        $result['events_url'] = $eventsUrl;

        
        $htmlUrl = $object->htmlUrl;
        after_htmlUrl:        $result['html_url'] = $htmlUrl;

        
        $id = $object->id;
        after_id:        $result['id'] = $id;

        
        $labels = $object->labels;

        if ($labels === null) {
            goto after_labels;
        }
        static $labelsSerializer0;

        if ($labelsSerializer0 === null) {
            $labelsSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionLabeled\\Label',
));
        }
        
        $labels = $labelsSerializer0->serialize($labels, $this);
        after_labels:        $result['labels'] = $labels;

        
        $labelsUrl = $object->labelsUrl;
        after_labelsUrl:        $result['labels_url'] = $labelsUrl;

        
        $locked = $object->locked;

        if ($locked === null) {
            goto after_locked;
        }
        after_locked:        $result['locked'] = $locked;

        
        $milestone = $object->milestone;

        if ($milestone === null) {
            goto after_milestone;
        }
        $milestone = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssueCommentCreated⚡️Issue⚡️Milestone($milestone);
        after_milestone:        $result['milestone'] = $milestone;

        
        $nodeId = $object->nodeId;
        after_nodeId:        $result['node_id'] = $nodeId;

        
        $number = $object->number;
        after_number:        $result['number'] = $number;

        
        $performedViaGithubApp = $object->performedViaGithubApp;

        if ($performedViaGithubApp === null) {
            goto after_performedViaGithubApp;
        }
        $performedViaGithubApp = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesMilestoned⚡️Issue⚡️PerformedViaGithubApp($performedViaGithubApp);
        after_performedViaGithubApp:        $result['performed_via_github_app'] = $performedViaGithubApp;

        
        $pullRequest = $object->pullRequest;

        if ($pullRequest === null) {
            goto after_pullRequest;
        }
        $pullRequest = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssueCommentCreated⚡️Issue⚡️PullRequest($pullRequest);
        after_pullRequest:        $result['pull_request'] = $pullRequest;

        
        $reactions = $object->reactions;
        $reactions = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Discussion⚡️Reactions($reactions);
        after_reactions:        $result['reactions'] = $reactions;

        
        $repositoryUrl = $object->repositoryUrl;
        after_repositoryUrl:        $result['repository_url'] = $repositoryUrl;

        
        $state = $object->state;

        if ($state === null) {
            goto after_state;
        }
        after_state:        $result['state'] = $state;

        
        $stateReason = $object->stateReason;

        if ($stateReason === null) {
            goto after_stateReason;
        }
        after_stateReason:        $result['state_reason'] = $stateReason;

        
        $timelineUrl = $object->timelineUrl;

        if ($timelineUrl === null) {
            goto after_timelineUrl;
        }
        after_timelineUrl:        $result['timeline_url'] = $timelineUrl;

        
        $title = $object->title;
        after_title:        $result['title'] = $title;

        
        $updatedAt = $object->updatedAt;
        after_updatedAt:        $result['updated_at'] = $updatedAt;

        
        $url = $object->url;
        after_url:        $result['url'] = $url;

        
        $user = $object->user;

        if ($user === null) {
            goto after_user;
        }
        $user = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Discussion⚡️AnswerChosenBy($user);
        after_user:        $result['user'] = $user;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesMilestoned⚡️Issue⚡️PerformedViaGithubApp(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookIssuesMilestoned\Issue\PerformedViaGithubApp);
        $result = [];

        $createdAt = $object->createdAt;

        if ($createdAt === null) {
            goto after_createdAt;
        }
        after_createdAt:        $result['created_at'] = $createdAt;

        
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

        
        $externalUrl = $object->externalUrl;

        if ($externalUrl === null) {
            goto after_externalUrl;
        }
        after_externalUrl:        $result['external_url'] = $externalUrl;

        
        $htmlUrl = $object->htmlUrl;
        after_htmlUrl:        $result['html_url'] = $htmlUrl;

        
        $id = $object->id;

        if ($id === null) {
            goto after_id;
        }
        after_id:        $result['id'] = $id;

        
        $name = $object->name;
        after_name:        $result['name'] = $name;

        
        $nodeId = $object->nodeId;
        after_nodeId:        $result['node_id'] = $nodeId;

        
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
        $permissions = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssueCommentEdited⚡️Issue⚡️PerformedViaGithubApp⚡️Permissions($permissions);
        after_permissions:        $result['permissions'] = $permissions;

        
        $slug = $object->slug;

        if ($slug === null) {
            goto after_slug;
        }
        after_slug:        $result['slug'] = $slug;

        
        $updatedAt = $object->updatedAt;

        if ($updatedAt === null) {
            goto after_updatedAt;
        }
        after_updatedAt:        $result['updated_at'] = $updatedAt;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesOpened(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookIssuesOpened);
        $result = [];

        $action = $object->action;
        after_action:        $result['action'] = $action;

        
        $changes = $object->changes;

        if ($changes === null) {
            goto after_changes;
        }
        $changes = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesOpened⚡️Changes($changes);
        after_changes:        $result['changes'] = $changes;

        
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

        
        $issue = $object->issue;
        $issue = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesOpened⚡️Issue($issue);
        after_issue:        $result['issue'] = $issue;

        
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


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesOpened⚡️Changes(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookIssuesOpened\Changes);
        $result = [];

        $oldIssue = $object->oldIssue;

        if ($oldIssue === null) {
            goto after_oldIssue;
        }
        $oldIssue = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesOpened⚡️Changes⚡️OldIssue($oldIssue);
        after_oldIssue:        $result['old_issue'] = $oldIssue;

        
        $oldRepository = $object->oldRepository;
        $oldRepository = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesOpened⚡️Changes⚡️OldRepository($oldRepository);
        after_oldRepository:        $result['old_repository'] = $oldRepository;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesOpened⚡️Changes⚡️OldIssue(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookIssuesOpened\Changes\OldIssue);
        $result = [];

        $activeLockReason = $object->activeLockReason;

        if ($activeLockReason === null) {
            goto after_activeLockReason;
        }
        after_activeLockReason:        $result['active_lock_reason'] = $activeLockReason;

        
        $assignee = $object->assignee;

        if ($assignee === null) {
            goto after_assignee;
        }
        $assignee = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Discussion⚡️AnswerChosenBy($assignee);
        after_assignee:        $result['assignee'] = $assignee;

        
        $assignees = $object->assignees;
        static $assigneesSerializer0;

        if ($assigneesSerializer0 === null) {
            $assigneesSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\Discussion\\AnswerChosenBy',
));
        }
        
        $assignees = $assigneesSerializer0->serialize($assignees, $this);
        after_assignees:        $result['assignees'] = $assignees;

        
        $authorAssociation = $object->authorAssociation;
        after_authorAssociation:        $result['author_association'] = $authorAssociation;

        
        $body = $object->body;

        if ($body === null) {
            goto after_body;
        }
        after_body:        $result['body'] = $body;

        
        $closedAt = $object->closedAt;

        if ($closedAt === null) {
            goto after_closedAt;
        }
        after_closedAt:        $result['closed_at'] = $closedAt;

        
        $comments = $object->comments;
        after_comments:        $result['comments'] = $comments;

        
        $commentsUrl = $object->commentsUrl;
        after_commentsUrl:        $result['comments_url'] = $commentsUrl;

        
        $createdAt = $object->createdAt;
        after_createdAt:        $result['created_at'] = $createdAt;

        
        $draft = $object->draft;

        if ($draft === null) {
            goto after_draft;
        }
        after_draft:        $result['draft'] = $draft;

        
        $eventsUrl = $object->eventsUrl;
        after_eventsUrl:        $result['events_url'] = $eventsUrl;

        
        $htmlUrl = $object->htmlUrl;
        after_htmlUrl:        $result['html_url'] = $htmlUrl;

        
        $id = $object->id;
        after_id:        $result['id'] = $id;

        
        $labels = $object->labels;

        if ($labels === null) {
            goto after_labels;
        }
        static $labelsSerializer0;

        if ($labelsSerializer0 === null) {
            $labelsSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionLabeled\\Label',
));
        }
        
        $labels = $labelsSerializer0->serialize($labels, $this);
        after_labels:        $result['labels'] = $labels;

        
        $labelsUrl = $object->labelsUrl;
        after_labelsUrl:        $result['labels_url'] = $labelsUrl;

        
        $locked = $object->locked;

        if ($locked === null) {
            goto after_locked;
        }
        after_locked:        $result['locked'] = $locked;

        
        $milestone = $object->milestone;

        if ($milestone === null) {
            goto after_milestone;
        }
        $milestone = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesDeleted⚡️Issue⚡️Milestone($milestone);
        after_milestone:        $result['milestone'] = $milestone;

        
        $nodeId = $object->nodeId;
        after_nodeId:        $result['node_id'] = $nodeId;

        
        $number = $object->number;
        after_number:        $result['number'] = $number;

        
        $performedViaGithubApp = $object->performedViaGithubApp;

        if ($performedViaGithubApp === null) {
            goto after_performedViaGithubApp;
        }
        $performedViaGithubApp = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssueCommentDeleted⚡️Issue⚡️PerformedViaGithubApp($performedViaGithubApp);
        after_performedViaGithubApp:        $result['performed_via_github_app'] = $performedViaGithubApp;

        
        $pullRequest = $object->pullRequest;

        if ($pullRequest === null) {
            goto after_pullRequest;
        }
        $pullRequest = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssueCommentCreated⚡️Issue⚡️PullRequest($pullRequest);
        after_pullRequest:        $result['pull_request'] = $pullRequest;

        
        $reactions = $object->reactions;
        $reactions = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Discussion⚡️Reactions($reactions);
        after_reactions:        $result['reactions'] = $reactions;

        
        $repositoryUrl = $object->repositoryUrl;
        after_repositoryUrl:        $result['repository_url'] = $repositoryUrl;

        
        $state = $object->state;

        if ($state === null) {
            goto after_state;
        }
        after_state:        $result['state'] = $state;

        
        $stateReason = $object->stateReason;

        if ($stateReason === null) {
            goto after_stateReason;
        }
        after_stateReason:        $result['state_reason'] = $stateReason;

        
        $timelineUrl = $object->timelineUrl;

        if ($timelineUrl === null) {
            goto after_timelineUrl;
        }
        after_timelineUrl:        $result['timeline_url'] = $timelineUrl;

        
        $title = $object->title;
        after_title:        $result['title'] = $title;

        
        $updatedAt = $object->updatedAt;
        after_updatedAt:        $result['updated_at'] = $updatedAt;

        
        $url = $object->url;
        after_url:        $result['url'] = $url;

        
        $user = $object->user;

        if ($user === null) {
            goto after_user;
        }
        $user = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Discussion⚡️AnswerChosenBy($user);
        after_user:        $result['user'] = $user;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssueCommentDeleted⚡️Issue⚡️PerformedViaGithubApp(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookIssueCommentDeleted\Issue\PerformedViaGithubApp);
        $result = [];

        $createdAt = $object->createdAt;

        if ($createdAt === null) {
            goto after_createdAt;
        }
        after_createdAt:        $result['created_at'] = $createdAt;

        
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

        
        $externalUrl = $object->externalUrl;

        if ($externalUrl === null) {
            goto after_externalUrl;
        }
        after_externalUrl:        $result['external_url'] = $externalUrl;

        
        $htmlUrl = $object->htmlUrl;
        after_htmlUrl:        $result['html_url'] = $htmlUrl;

        
        $id = $object->id;

        if ($id === null) {
            goto after_id;
        }
        after_id:        $result['id'] = $id;

        
        $name = $object->name;
        after_name:        $result['name'] = $name;

        
        $nodeId = $object->nodeId;
        after_nodeId:        $result['node_id'] = $nodeId;

        
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
        $permissions = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookDeploymentCreated⚡️Deployment⚡️PerformedViaGithubApp⚡️Permissions($permissions);
        after_permissions:        $result['permissions'] = $permissions;

        
        $slug = $object->slug;

        if ($slug === null) {
            goto after_slug;
        }
        after_slug:        $result['slug'] = $slug;

        
        $updatedAt = $object->updatedAt;

        if ($updatedAt === null) {
            goto after_updatedAt;
        }
        after_updatedAt:        $result['updated_at'] = $updatedAt;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesOpened⚡️Changes⚡️OldRepository(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookIssuesOpened\Changes\OldRepository);
        $result = [];

        $allowAutoMerge = $object->allowAutoMerge;

        if ($allowAutoMerge === null) {
            goto after_allowAutoMerge;
        }
        after_allowAutoMerge:        $result['allow_auto_merge'] = $allowAutoMerge;

        
        $allowForking = $object->allowForking;

        if ($allowForking === null) {
            goto after_allowForking;
        }
        after_allowForking:        $result['allow_forking'] = $allowForking;

        
        $allowMergeCommit = $object->allowMergeCommit;

        if ($allowMergeCommit === null) {
            goto after_allowMergeCommit;
        }
        after_allowMergeCommit:        $result['allow_merge_commit'] = $allowMergeCommit;

        
        $allowRebaseMerge = $object->allowRebaseMerge;

        if ($allowRebaseMerge === null) {
            goto after_allowRebaseMerge;
        }
        after_allowRebaseMerge:        $result['allow_rebase_merge'] = $allowRebaseMerge;

        
        $allowSquashMerge = $object->allowSquashMerge;

        if ($allowSquashMerge === null) {
            goto after_allowSquashMerge;
        }
        after_allowSquashMerge:        $result['allow_squash_merge'] = $allowSquashMerge;

        
        $allowUpdateBranch = $object->allowUpdateBranch;

        if ($allowUpdateBranch === null) {
            goto after_allowUpdateBranch;
        }
        after_allowUpdateBranch:        $result['allow_update_branch'] = $allowUpdateBranch;

        
        $archiveUrl = $object->archiveUrl;
        after_archiveUrl:        $result['archive_url'] = $archiveUrl;

        
        $archived = $object->archived;
        after_archived:        $result['archived'] = $archived;

        
        $assigneesUrl = $object->assigneesUrl;
        after_assigneesUrl:        $result['assignees_url'] = $assigneesUrl;

        
        $blobsUrl = $object->blobsUrl;
        after_blobsUrl:        $result['blobs_url'] = $blobsUrl;

        
        $branchesUrl = $object->branchesUrl;
        after_branchesUrl:        $result['branches_url'] = $branchesUrl;

        
        $cloneUrl = $object->cloneUrl;
        after_cloneUrl:        $result['clone_url'] = $cloneUrl;

        
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

        
        $createdAt = $object->createdAt;
        after_createdAt:        $result['created_at'] = $createdAt;

        
        $defaultBranch = $object->defaultBranch;
        after_defaultBranch:        $result['default_branch'] = $defaultBranch;

        
        $deleteBranchOnMerge = $object->deleteBranchOnMerge;

        if ($deleteBranchOnMerge === null) {
            goto after_deleteBranchOnMerge;
        }
        after_deleteBranchOnMerge:        $result['delete_branch_on_merge'] = $deleteBranchOnMerge;

        
        $deploymentsUrl = $object->deploymentsUrl;
        after_deploymentsUrl:        $result['deployments_url'] = $deploymentsUrl;

        
        $description = $object->description;

        if ($description === null) {
            goto after_description;
        }
        after_description:        $result['description'] = $description;

        
        $disabled = $object->disabled;

        if ($disabled === null) {
            goto after_disabled;
        }
        after_disabled:        $result['disabled'] = $disabled;

        
        $downloadsUrl = $object->downloadsUrl;
        after_downloadsUrl:        $result['downloads_url'] = $downloadsUrl;

        
        $eventsUrl = $object->eventsUrl;
        after_eventsUrl:        $result['events_url'] = $eventsUrl;

        
        $fork = $object->fork;
        after_fork:        $result['fork'] = $fork;

        
        $forks = $object->forks;
        after_forks:        $result['forks'] = $forks;

        
        $forksCount = $object->forksCount;
        after_forksCount:        $result['forks_count'] = $forksCount;

        
        $forksUrl = $object->forksUrl;
        after_forksUrl:        $result['forks_url'] = $forksUrl;

        
        $fullName = $object->fullName;
        after_fullName:        $result['full_name'] = $fullName;

        
        $gitCommitsUrl = $object->gitCommitsUrl;
        after_gitCommitsUrl:        $result['git_commits_url'] = $gitCommitsUrl;

        
        $gitRefsUrl = $object->gitRefsUrl;
        after_gitRefsUrl:        $result['git_refs_url'] = $gitRefsUrl;

        
        $gitTagsUrl = $object->gitTagsUrl;
        after_gitTagsUrl:        $result['git_tags_url'] = $gitTagsUrl;

        
        $gitUrl = $object->gitUrl;
        after_gitUrl:        $result['git_url'] = $gitUrl;

        
        $hasDownloads = $object->hasDownloads;
        after_hasDownloads:        $result['has_downloads'] = $hasDownloads;

        
        $hasIssues = $object->hasIssues;
        after_hasIssues:        $result['has_issues'] = $hasIssues;

        
        $hasPages = $object->hasPages;
        after_hasPages:        $result['has_pages'] = $hasPages;

        
        $hasProjects = $object->hasProjects;
        after_hasProjects:        $result['has_projects'] = $hasProjects;

        
        $hasWiki = $object->hasWiki;
        after_hasWiki:        $result['has_wiki'] = $hasWiki;

        
        $homepage = $object->homepage;

        if ($homepage === null) {
            goto after_homepage;
        }
        after_homepage:        $result['homepage'] = $homepage;

        
        $hooksUrl = $object->hooksUrl;
        after_hooksUrl:        $result['hooks_url'] = $hooksUrl;

        
        $htmlUrl = $object->htmlUrl;
        after_htmlUrl:        $result['html_url'] = $htmlUrl;

        
        $id = $object->id;
        after_id:        $result['id'] = $id;

        
        $isTemplate = $object->isTemplate;

        if ($isTemplate === null) {
            goto after_isTemplate;
        }
        after_isTemplate:        $result['is_template'] = $isTemplate;

        
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

        
        $language = $object->language;

        if ($language === null) {
            goto after_language;
        }
        after_language:        $result['language'] = $language;

        
        $languagesUrl = $object->languagesUrl;
        after_languagesUrl:        $result['languages_url'] = $languagesUrl;

        
        $license = $object->license;

        if ($license === null) {
            goto after_license;
        }
        $license = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookFork⚡️Forkee⚡️License($license);
        after_license:        $result['license'] = $license;

        
        $masterBranch = $object->masterBranch;

        if ($masterBranch === null) {
            goto after_masterBranch;
        }
        after_masterBranch:        $result['master_branch'] = $masterBranch;

        
        $mergesUrl = $object->mergesUrl;
        after_mergesUrl:        $result['merges_url'] = $mergesUrl;

        
        $milestonesUrl = $object->milestonesUrl;
        after_milestonesUrl:        $result['milestones_url'] = $milestonesUrl;

        
        $mirrorUrl = $object->mirrorUrl;

        if ($mirrorUrl === null) {
            goto after_mirrorUrl;
        }
        after_mirrorUrl:        $result['mirror_url'] = $mirrorUrl;

        
        $name = $object->name;
        after_name:        $result['name'] = $name;

        
        $nodeId = $object->nodeId;
        after_nodeId:        $result['node_id'] = $nodeId;

        
        $notificationsUrl = $object->notificationsUrl;
        after_notificationsUrl:        $result['notifications_url'] = $notificationsUrl;

        
        $openIssues = $object->openIssues;
        after_openIssues:        $result['open_issues'] = $openIssues;

        
        $openIssuesCount = $object->openIssuesCount;
        after_openIssuesCount:        $result['open_issues_count'] = $openIssuesCount;

        
        $organization = $object->organization;

        if ($organization === null) {
            goto after_organization;
        }
        after_organization:        $result['organization'] = $organization;

        
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
        $permissions = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookFork⚡️Forkee⚡️Permissions($permissions);
        after_permissions:        $result['permissions'] = $permissions;

        
        $private = $object->private;
        after_private:        $result['private'] = $private;

        
        $public = $object->public;

        if ($public === null) {
            goto after_public;
        }
        after_public:        $result['public'] = $public;

        
        $pullsUrl = $object->pullsUrl;
        after_pullsUrl:        $result['pulls_url'] = $pullsUrl;

        
        $pushedAt = $object->pushedAt;
        after_pushedAt:        $result['pushed_at'] = $pushedAt;

        
        $releasesUrl = $object->releasesUrl;
        after_releasesUrl:        $result['releases_url'] = $releasesUrl;

        
        $roleName = $object->roleName;

        if ($roleName === null) {
            goto after_roleName;
        }
        after_roleName:        $result['role_name'] = $roleName;

        
        $size = $object->size;
        after_size:        $result['size'] = $size;

        
        $sshUrl = $object->sshUrl;
        after_sshUrl:        $result['ssh_url'] = $sshUrl;

        
        $stargazers = $object->stargazers;

        if ($stargazers === null) {
            goto after_stargazers;
        }
        after_stargazers:        $result['stargazers'] = $stargazers;

        
        $stargazersCount = $object->stargazersCount;
        after_stargazersCount:        $result['stargazers_count'] = $stargazersCount;

        
        $stargazersUrl = $object->stargazersUrl;
        after_stargazersUrl:        $result['stargazers_url'] = $stargazersUrl;

        
        $statusesUrl = $object->statusesUrl;
        after_statusesUrl:        $result['statuses_url'] = $statusesUrl;

        
        $subscribersUrl = $object->subscribersUrl;
        after_subscribersUrl:        $result['subscribers_url'] = $subscribersUrl;

        
        $subscriptionUrl = $object->subscriptionUrl;
        after_subscriptionUrl:        $result['subscription_url'] = $subscriptionUrl;

        
        $svnUrl = $object->svnUrl;
        after_svnUrl:        $result['svn_url'] = $svnUrl;

        
        $tagsUrl = $object->tagsUrl;
        after_tagsUrl:        $result['tags_url'] = $tagsUrl;

        
        $teamsUrl = $object->teamsUrl;
        after_teamsUrl:        $result['teams_url'] = $teamsUrl;

        
        $topics = $object->topics;
        static $topicsSerializer0;

        if ($topicsSerializer0 === null) {
            $topicsSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $topics = $topicsSerializer0->serialize($topics, $this);
        after_topics:        $result['topics'] = $topics;

        
        $treesUrl = $object->treesUrl;
        after_treesUrl:        $result['trees_url'] = $treesUrl;

        
        $updatedAt = $object->updatedAt;
        after_updatedAt:        $result['updated_at'] = $updatedAt;

        
        $url = $object->url;
        after_url:        $result['url'] = $url;

        
        $visibility = $object->visibility;
        after_visibility:        $result['visibility'] = $visibility;

        
        $watchers = $object->watchers;
        after_watchers:        $result['watchers'] = $watchers;

        
        $watchersCount = $object->watchersCount;
        after_watchersCount:        $result['watchers_count'] = $watchersCount;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookFork⚡️Forkee⚡️License(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookFork\Forkee\License);
        $result = [];

        $key = $object->key;
        after_key:        $result['key'] = $key;

        
        $name = $object->name;
        after_name:        $result['name'] = $name;

        
        $nodeId = $object->nodeId;
        after_nodeId:        $result['node_id'] = $nodeId;

        
        $spdxId = $object->spdxId;
        after_spdxId:        $result['spdx_id'] = $spdxId;

        
        $url = $object->url;

        if ($url === null) {
            goto after_url;
        }
        after_url:        $result['url'] = $url;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookFork⚡️Forkee⚡️Permissions(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookFork\Forkee\Permissions);
        $result = [];

        $admin = $object->admin;
        after_admin:        $result['admin'] = $admin;

        
        $maintain = $object->maintain;

        if ($maintain === null) {
            goto after_maintain;
        }
        after_maintain:        $result['maintain'] = $maintain;

        
        $pull = $object->pull;
        after_pull:        $result['pull'] = $pull;

        
        $push = $object->push;
        after_push:        $result['push'] = $push;

        
        $triage = $object->triage;

        if ($triage === null) {
            goto after_triage;
        }
        after_triage:        $result['triage'] = $triage;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesOpened⚡️Issue(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookIssuesOpened\Issue);
        $result = [];

        $activeLockReason = $object->activeLockReason;

        if ($activeLockReason === null) {
            goto after_activeLockReason;
        }
        after_activeLockReason:        $result['active_lock_reason'] = $activeLockReason;

        
        $assignee = $object->assignee;

        if ($assignee === null) {
            goto after_assignee;
        }
        $assignee = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Discussion⚡️AnswerChosenBy($assignee);
        after_assignee:        $result['assignee'] = $assignee;

        
        $assignees = $object->assignees;
        static $assigneesSerializer0;

        if ($assigneesSerializer0 === null) {
            $assigneesSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\Discussion\\AnswerChosenBy',
));
        }
        
        $assignees = $assigneesSerializer0->serialize($assignees, $this);
        after_assignees:        $result['assignees'] = $assignees;

        
        $authorAssociation = $object->authorAssociation;
        after_authorAssociation:        $result['author_association'] = $authorAssociation;

        
        $body = $object->body;

        if ($body === null) {
            goto after_body;
        }
        after_body:        $result['body'] = $body;

        
        $closedAt = $object->closedAt;

        if ($closedAt === null) {
            goto after_closedAt;
        }
        after_closedAt:        $result['closed_at'] = $closedAt;

        
        $comments = $object->comments;
        after_comments:        $result['comments'] = $comments;

        
        $commentsUrl = $object->commentsUrl;
        after_commentsUrl:        $result['comments_url'] = $commentsUrl;

        
        $createdAt = $object->createdAt;
        after_createdAt:        $result['created_at'] = $createdAt;

        
        $draft = $object->draft;

        if ($draft === null) {
            goto after_draft;
        }
        after_draft:        $result['draft'] = $draft;

        
        $eventsUrl = $object->eventsUrl;
        after_eventsUrl:        $result['events_url'] = $eventsUrl;

        
        $htmlUrl = $object->htmlUrl;
        after_htmlUrl:        $result['html_url'] = $htmlUrl;

        
        $id = $object->id;
        after_id:        $result['id'] = $id;

        
        $labels = $object->labels;

        if ($labels === null) {
            goto after_labels;
        }
        static $labelsSerializer0;

        if ($labelsSerializer0 === null) {
            $labelsSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionLabeled\\Label',
));
        }
        
        $labels = $labelsSerializer0->serialize($labels, $this);
        after_labels:        $result['labels'] = $labels;

        
        $labelsUrl = $object->labelsUrl;
        after_labelsUrl:        $result['labels_url'] = $labelsUrl;

        
        $locked = $object->locked;

        if ($locked === null) {
            goto after_locked;
        }
        after_locked:        $result['locked'] = $locked;

        
        $milestone = $object->milestone;

        if ($milestone === null) {
            goto after_milestone;
        }
        $milestone = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssueCommentCreated⚡️Issue⚡️Milestone($milestone);
        after_milestone:        $result['milestone'] = $milestone;

        
        $nodeId = $object->nodeId;
        after_nodeId:        $result['node_id'] = $nodeId;

        
        $number = $object->number;
        after_number:        $result['number'] = $number;

        
        $performedViaGithubApp = $object->performedViaGithubApp;

        if ($performedViaGithubApp === null) {
            goto after_performedViaGithubApp;
        }
        $performedViaGithubApp = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesEdited⚡️Issue⚡️PerformedViaGithubApp($performedViaGithubApp);
        after_performedViaGithubApp:        $result['performed_via_github_app'] = $performedViaGithubApp;

        
        $pullRequest = $object->pullRequest;

        if ($pullRequest === null) {
            goto after_pullRequest;
        }
        $pullRequest = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssueCommentCreated⚡️Issue⚡️PullRequest($pullRequest);
        after_pullRequest:        $result['pull_request'] = $pullRequest;

        
        $reactions = $object->reactions;
        $reactions = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Discussion⚡️Reactions($reactions);
        after_reactions:        $result['reactions'] = $reactions;

        
        $repositoryUrl = $object->repositoryUrl;
        after_repositoryUrl:        $result['repository_url'] = $repositoryUrl;

        
        $state = $object->state;

        if ($state === null) {
            goto after_state;
        }
        after_state:        $result['state'] = $state;

        
        $stateReason = $object->stateReason;

        if ($stateReason === null) {
            goto after_stateReason;
        }
        after_stateReason:        $result['state_reason'] = $stateReason;

        
        $timelineUrl = $object->timelineUrl;

        if ($timelineUrl === null) {
            goto after_timelineUrl;
        }
        after_timelineUrl:        $result['timeline_url'] = $timelineUrl;

        
        $title = $object->title;
        after_title:        $result['title'] = $title;

        
        $updatedAt = $object->updatedAt;
        after_updatedAt:        $result['updated_at'] = $updatedAt;

        
        $url = $object->url;
        after_url:        $result['url'] = $url;

        
        $user = $object->user;

        if ($user === null) {
            goto after_user;
        }
        $user = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Discussion⚡️AnswerChosenBy($user);
        after_user:        $result['user'] = $user;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesPinned(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookIssuesPinned);
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

        
        $issue = $object->issue;
        $issue = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesPinned⚡️Issue($issue);
        after_issue:        $result['issue'] = $issue;

        
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


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesPinned⚡️Issue(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookIssuesPinned\Issue);
        $result = [];

        $activeLockReason = $object->activeLockReason;

        if ($activeLockReason === null) {
            goto after_activeLockReason;
        }
        after_activeLockReason:        $result['active_lock_reason'] = $activeLockReason;

        
        $assignee = $object->assignee;

        if ($assignee === null) {
            goto after_assignee;
        }
        $assignee = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Discussion⚡️AnswerChosenBy($assignee);
        after_assignee:        $result['assignee'] = $assignee;

        
        $assignees = $object->assignees;
        static $assigneesSerializer0;

        if ($assigneesSerializer0 === null) {
            $assigneesSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\Discussion\\AnswerChosenBy',
));
        }
        
        $assignees = $assigneesSerializer0->serialize($assignees, $this);
        after_assignees:        $result['assignees'] = $assignees;

        
        $authorAssociation = $object->authorAssociation;
        after_authorAssociation:        $result['author_association'] = $authorAssociation;

        
        $body = $object->body;

        if ($body === null) {
            goto after_body;
        }
        after_body:        $result['body'] = $body;

        
        $closedAt = $object->closedAt;

        if ($closedAt === null) {
            goto after_closedAt;
        }
        after_closedAt:        $result['closed_at'] = $closedAt;

        
        $comments = $object->comments;
        after_comments:        $result['comments'] = $comments;

        
        $commentsUrl = $object->commentsUrl;
        after_commentsUrl:        $result['comments_url'] = $commentsUrl;

        
        $createdAt = $object->createdAt;
        after_createdAt:        $result['created_at'] = $createdAt;

        
        $draft = $object->draft;

        if ($draft === null) {
            goto after_draft;
        }
        after_draft:        $result['draft'] = $draft;

        
        $eventsUrl = $object->eventsUrl;
        after_eventsUrl:        $result['events_url'] = $eventsUrl;

        
        $htmlUrl = $object->htmlUrl;
        after_htmlUrl:        $result['html_url'] = $htmlUrl;

        
        $id = $object->id;
        after_id:        $result['id'] = $id;

        
        $labels = $object->labels;

        if ($labels === null) {
            goto after_labels;
        }
        static $labelsSerializer0;

        if ($labelsSerializer0 === null) {
            $labelsSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionLabeled\\Label',
));
        }
        
        $labels = $labelsSerializer0->serialize($labels, $this);
        after_labels:        $result['labels'] = $labels;

        
        $labelsUrl = $object->labelsUrl;
        after_labelsUrl:        $result['labels_url'] = $labelsUrl;

        
        $locked = $object->locked;

        if ($locked === null) {
            goto after_locked;
        }
        after_locked:        $result['locked'] = $locked;

        
        $milestone = $object->milestone;

        if ($milestone === null) {
            goto after_milestone;
        }
        $milestone = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesDeleted⚡️Issue⚡️Milestone($milestone);
        after_milestone:        $result['milestone'] = $milestone;

        
        $nodeId = $object->nodeId;
        after_nodeId:        $result['node_id'] = $nodeId;

        
        $number = $object->number;
        after_number:        $result['number'] = $number;

        
        $performedViaGithubApp = $object->performedViaGithubApp;

        if ($performedViaGithubApp === null) {
            goto after_performedViaGithubApp;
        }
        $performedViaGithubApp = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssueCommentDeleted⚡️Issue⚡️PerformedViaGithubApp($performedViaGithubApp);
        after_performedViaGithubApp:        $result['performed_via_github_app'] = $performedViaGithubApp;

        
        $pullRequest = $object->pullRequest;

        if ($pullRequest === null) {
            goto after_pullRequest;
        }
        $pullRequest = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssueCommentCreated⚡️Issue⚡️PullRequest($pullRequest);
        after_pullRequest:        $result['pull_request'] = $pullRequest;

        
        $reactions = $object->reactions;
        $reactions = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Discussion⚡️Reactions($reactions);
        after_reactions:        $result['reactions'] = $reactions;

        
        $repositoryUrl = $object->repositoryUrl;
        after_repositoryUrl:        $result['repository_url'] = $repositoryUrl;

        
        $state = $object->state;

        if ($state === null) {
            goto after_state;
        }
        after_state:        $result['state'] = $state;

        
        $stateReason = $object->stateReason;

        if ($stateReason === null) {
            goto after_stateReason;
        }
        after_stateReason:        $result['state_reason'] = $stateReason;

        
        $timelineUrl = $object->timelineUrl;

        if ($timelineUrl === null) {
            goto after_timelineUrl;
        }
        after_timelineUrl:        $result['timeline_url'] = $timelineUrl;

        
        $title = $object->title;
        after_title:        $result['title'] = $title;

        
        $updatedAt = $object->updatedAt;
        after_updatedAt:        $result['updated_at'] = $updatedAt;

        
        $url = $object->url;
        after_url:        $result['url'] = $url;

        
        $user = $object->user;

        if ($user === null) {
            goto after_user;
        }
        $user = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Discussion⚡️AnswerChosenBy($user);
        after_user:        $result['user'] = $user;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesReopened(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookIssuesReopened);
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

        
        $issue = $object->issue;
        $issue = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesReopened⚡️Issue($issue);
        after_issue:        $result['issue'] = $issue;

        
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


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesReopened⚡️Issue(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookIssuesReopened\Issue);
        $result = [];

        $activeLockReason = $object->activeLockReason;

        if ($activeLockReason === null) {
            goto after_activeLockReason;
        }
        after_activeLockReason:        $result['active_lock_reason'] = $activeLockReason;

        
        $assignee = $object->assignee;

        if ($assignee === null) {
            goto after_assignee;
        }
        $assignee = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Discussion⚡️AnswerChosenBy($assignee);
        after_assignee:        $result['assignee'] = $assignee;

        
        $assignees = $object->assignees;
        static $assigneesSerializer0;

        if ($assigneesSerializer0 === null) {
            $assigneesSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\WebhookIssueCommentCreated\\Issue\\Assignee',
));
        }
        
        $assignees = $assigneesSerializer0->serialize($assignees, $this);
        after_assignees:        $result['assignees'] = $assignees;

        
        $authorAssociation = $object->authorAssociation;
        after_authorAssociation:        $result['author_association'] = $authorAssociation;

        
        $body = $object->body;

        if ($body === null) {
            goto after_body;
        }
        after_body:        $result['body'] = $body;

        
        $closedAt = $object->closedAt;

        if ($closedAt === null) {
            goto after_closedAt;
        }
        after_closedAt:        $result['closed_at'] = $closedAt;

        
        $comments = $object->comments;
        after_comments:        $result['comments'] = $comments;

        
        $commentsUrl = $object->commentsUrl;
        after_commentsUrl:        $result['comments_url'] = $commentsUrl;

        
        $createdAt = $object->createdAt;
        after_createdAt:        $result['created_at'] = $createdAt;

        
        $draft = $object->draft;

        if ($draft === null) {
            goto after_draft;
        }
        after_draft:        $result['draft'] = $draft;

        
        $eventsUrl = $object->eventsUrl;
        after_eventsUrl:        $result['events_url'] = $eventsUrl;

        
        $htmlUrl = $object->htmlUrl;
        after_htmlUrl:        $result['html_url'] = $htmlUrl;

        
        $id = $object->id;
        after_id:        $result['id'] = $id;

        
        $labels = $object->labels;

        if ($labels === null) {
            goto after_labels;
        }
        static $labelsSerializer0;

        if ($labelsSerializer0 === null) {
            $labelsSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionLabeled\\Label',
));
        }
        
        $labels = $labelsSerializer0->serialize($labels, $this);
        after_labels:        $result['labels'] = $labels;

        
        $labelsUrl = $object->labelsUrl;
        after_labelsUrl:        $result['labels_url'] = $labelsUrl;

        
        $locked = $object->locked;

        if ($locked === null) {
            goto after_locked;
        }
        after_locked:        $result['locked'] = $locked;

        
        $milestone = $object->milestone;

        if ($milestone === null) {
            goto after_milestone;
        }
        $milestone = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssueCommentCreated⚡️Issue⚡️Milestone($milestone);
        after_milestone:        $result['milestone'] = $milestone;

        
        $nodeId = $object->nodeId;
        after_nodeId:        $result['node_id'] = $nodeId;

        
        $number = $object->number;
        after_number:        $result['number'] = $number;

        
        $performedViaGithubApp = $object->performedViaGithubApp;

        if ($performedViaGithubApp === null) {
            goto after_performedViaGithubApp;
        }
        $performedViaGithubApp = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesReopened⚡️Issue⚡️PerformedViaGithubApp($performedViaGithubApp);
        after_performedViaGithubApp:        $result['performed_via_github_app'] = $performedViaGithubApp;

        
        $pullRequest = $object->pullRequest;

        if ($pullRequest === null) {
            goto after_pullRequest;
        }
        $pullRequest = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssueCommentCreated⚡️Issue⚡️PullRequest($pullRequest);
        after_pullRequest:        $result['pull_request'] = $pullRequest;

        
        $reactions = $object->reactions;
        $reactions = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Discussion⚡️Reactions($reactions);
        after_reactions:        $result['reactions'] = $reactions;

        
        $repositoryUrl = $object->repositoryUrl;
        after_repositoryUrl:        $result['repository_url'] = $repositoryUrl;

        
        $state = $object->state;

        if ($state === null) {
            goto after_state;
        }
        after_state:        $result['state'] = $state;

        
        $stateReason = $object->stateReason;

        if ($stateReason === null) {
            goto after_stateReason;
        }
        after_stateReason:        $result['state_reason'] = $stateReason;

        
        $timelineUrl = $object->timelineUrl;

        if ($timelineUrl === null) {
            goto after_timelineUrl;
        }
        after_timelineUrl:        $result['timeline_url'] = $timelineUrl;

        
        $title = $object->title;
        after_title:        $result['title'] = $title;

        
        $updatedAt = $object->updatedAt;
        after_updatedAt:        $result['updated_at'] = $updatedAt;

        
        $url = $object->url;
        after_url:        $result['url'] = $url;

        
        $user = $object->user;

        if ($user === null) {
            goto after_user;
        }
        $user = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssueCommentCreated⚡️Issue⚡️Assignee($user);
        after_user:        $result['user'] = $user;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesReopened⚡️Issue⚡️PerformedViaGithubApp(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookIssuesReopened\Issue\PerformedViaGithubApp);
        $result = [];

        $createdAt = $object->createdAt;

        if ($createdAt === null) {
            goto after_createdAt;
        }
        after_createdAt:        $result['created_at'] = $createdAt;

        
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

        
        $externalUrl = $object->externalUrl;

        if ($externalUrl === null) {
            goto after_externalUrl;
        }
        after_externalUrl:        $result['external_url'] = $externalUrl;

        
        $htmlUrl = $object->htmlUrl;
        after_htmlUrl:        $result['html_url'] = $htmlUrl;

        
        $id = $object->id;

        if ($id === null) {
            goto after_id;
        }
        after_id:        $result['id'] = $id;

        
        $name = $object->name;
        after_name:        $result['name'] = $name;

        
        $nodeId = $object->nodeId;
        after_nodeId:        $result['node_id'] = $nodeId;

        
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

        
        $updatedAt = $object->updatedAt;

        if ($updatedAt === null) {
            goto after_updatedAt;
        }
        after_updatedAt:        $result['updated_at'] = $updatedAt;


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

        
        $contentReferences = $object->contentReferences;

        if ($contentReferences === null) {
            goto after_contentReferences;
        }
        after_contentReferences:        $result['content_references'] = $contentReferences;

        
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

        
        $organizationAdministration = $object->organizationAdministration;

        if ($organizationAdministration === null) {
            goto after_organizationAdministration;
        }
        after_organizationAdministration:        $result['organization_administration'] = $organizationAdministration;

        
        $organizationHooks = $object->organizationHooks;

        if ($organizationHooks === null) {
            goto after_organizationHooks;
        }
        after_organizationHooks:        $result['organization_hooks'] = $organizationHooks;

        
        $organizationPackages = $object->organizationPackages;

        if ($organizationPackages === null) {
            goto after_organizationPackages;
        }
        after_organizationPackages:        $result['organization_packages'] = $organizationPackages;

        
        $organizationPlan = $object->organizationPlan;

        if ($organizationPlan === null) {
            goto after_organizationPlan;
        }
        after_organizationPlan:        $result['organization_plan'] = $organizationPlan;

        
        $organizationProjects = $object->organizationProjects;

        if ($organizationProjects === null) {
            goto after_organizationProjects;
        }
        after_organizationProjects:        $result['organization_projects'] = $organizationProjects;

        
        $organizationSecrets = $object->organizationSecrets;

        if ($organizationSecrets === null) {
            goto after_organizationSecrets;
        }
        after_organizationSecrets:        $result['organization_secrets'] = $organizationSecrets;

        
        $organizationSelfHostedRunners = $object->organizationSelfHostedRunners;

        if ($organizationSelfHostedRunners === null) {
            goto after_organizationSelfHostedRunners;
        }
        after_organizationSelfHostedRunners:        $result['organization_self_hosted_runners'] = $organizationSelfHostedRunners;

        
        $organizationUserBlocking = $object->organizationUserBlocking;

        if ($organizationUserBlocking === null) {
            goto after_organizationUserBlocking;
        }
        after_organizationUserBlocking:        $result['organization_user_blocking'] = $organizationUserBlocking;

        
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

        
        $pullRequests = $object->pullRequests;

        if ($pullRequests === null) {
            goto after_pullRequests;
        }
        after_pullRequests:        $result['pull_requests'] = $pullRequests;

        
        $repositoryHooks = $object->repositoryHooks;

        if ($repositoryHooks === null) {
            goto after_repositoryHooks;
        }
        after_repositoryHooks:        $result['repository_hooks'] = $repositoryHooks;

        
        $repositoryProjects = $object->repositoryProjects;

        if ($repositoryProjects === null) {
            goto after_repositoryProjects;
        }
        after_repositoryProjects:        $result['repository_projects'] = $repositoryProjects;

        
        $secretScanningAlerts = $object->secretScanningAlerts;

        if ($secretScanningAlerts === null) {
            goto after_secretScanningAlerts;
        }
        after_secretScanningAlerts:        $result['secret_scanning_alerts'] = $secretScanningAlerts;

        
        $secrets = $object->secrets;

        if ($secrets === null) {
            goto after_secrets;
        }
        after_secrets:        $result['secrets'] = $secrets;

        
        $securityEvents = $object->securityEvents;

        if ($securityEvents === null) {
            goto after_securityEvents;
        }
        after_securityEvents:        $result['security_events'] = $securityEvents;

        
        $securityScanningAlert = $object->securityScanningAlert;

        if ($securityScanningAlert === null) {
            goto after_securityScanningAlert;
        }
        after_securityScanningAlert:        $result['security_scanning_alert'] = $securityScanningAlert;

        
        $singleFile = $object->singleFile;

        if ($singleFile === null) {
            goto after_singleFile;
        }
        after_singleFile:        $result['single_file'] = $singleFile;

        
        $statuses = $object->statuses;

        if ($statuses === null) {
            goto after_statuses;
        }
        after_statuses:        $result['statuses'] = $statuses;

        
        $teamDiscussions = $object->teamDiscussions;

        if ($teamDiscussions === null) {
            goto after_teamDiscussions;
        }
        after_teamDiscussions:        $result['team_discussions'] = $teamDiscussions;

        
        $vulnerabilityAlerts = $object->vulnerabilityAlerts;

        if ($vulnerabilityAlerts === null) {
            goto after_vulnerabilityAlerts;
        }
        after_vulnerabilityAlerts:        $result['vulnerability_alerts'] = $vulnerabilityAlerts;

        
        $workflows = $object->workflows;

        if ($workflows === null) {
            goto after_workflows;
        }
        after_workflows:        $result['workflows'] = $workflows;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesTransferred(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookIssuesTransferred);
        $result = [];

        $action = $object->action;
        after_action:        $result['action'] = $action;

        
        $changes = $object->changes;
        $changes = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesTransferred⚡️Changes($changes);
        after_changes:        $result['changes'] = $changes;

        
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

        
        $issue = $object->issue;
        $issue = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesPinned⚡️Issue($issue);
        after_issue:        $result['issue'] = $issue;

        
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


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesTransferred⚡️Changes(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookIssuesTransferred\Changes);
        $result = [];

        $newIssue = $object->newIssue;
        $newIssue = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesPinned⚡️Issue($newIssue);
        after_newIssue:        $result['new_issue'] = $newIssue;

        
        $newRepository = $object->newRepository;
        $newRepository = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesTransferred⚡️Changes⚡️NewRepository($newRepository);
        after_newRepository:        $result['new_repository'] = $newRepository;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesTransferred⚡️Changes⚡️NewRepository(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookIssuesTransferred\Changes\NewRepository);
        $result = [];

        $allowAutoMerge = $object->allowAutoMerge;

        if ($allowAutoMerge === null) {
            goto after_allowAutoMerge;
        }
        after_allowAutoMerge:        $result['allow_auto_merge'] = $allowAutoMerge;

        
        $allowForking = $object->allowForking;

        if ($allowForking === null) {
            goto after_allowForking;
        }
        after_allowForking:        $result['allow_forking'] = $allowForking;

        
        $allowMergeCommit = $object->allowMergeCommit;

        if ($allowMergeCommit === null) {
            goto after_allowMergeCommit;
        }
        after_allowMergeCommit:        $result['allow_merge_commit'] = $allowMergeCommit;

        
        $allowRebaseMerge = $object->allowRebaseMerge;

        if ($allowRebaseMerge === null) {
            goto after_allowRebaseMerge;
        }
        after_allowRebaseMerge:        $result['allow_rebase_merge'] = $allowRebaseMerge;

        
        $allowSquashMerge = $object->allowSquashMerge;

        if ($allowSquashMerge === null) {
            goto after_allowSquashMerge;
        }
        after_allowSquashMerge:        $result['allow_squash_merge'] = $allowSquashMerge;

        
        $allowUpdateBranch = $object->allowUpdateBranch;

        if ($allowUpdateBranch === null) {
            goto after_allowUpdateBranch;
        }
        after_allowUpdateBranch:        $result['allow_update_branch'] = $allowUpdateBranch;

        
        $archiveUrl = $object->archiveUrl;
        after_archiveUrl:        $result['archive_url'] = $archiveUrl;

        
        $archived = $object->archived;
        after_archived:        $result['archived'] = $archived;

        
        $assigneesUrl = $object->assigneesUrl;
        after_assigneesUrl:        $result['assignees_url'] = $assigneesUrl;

        
        $blobsUrl = $object->blobsUrl;
        after_blobsUrl:        $result['blobs_url'] = $blobsUrl;

        
        $branchesUrl = $object->branchesUrl;
        after_branchesUrl:        $result['branches_url'] = $branchesUrl;

        
        $cloneUrl = $object->cloneUrl;
        after_cloneUrl:        $result['clone_url'] = $cloneUrl;

        
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

        
        $createdAt = $object->createdAt;
        after_createdAt:        $result['created_at'] = $createdAt;

        
        $defaultBranch = $object->defaultBranch;
        after_defaultBranch:        $result['default_branch'] = $defaultBranch;

        
        $deleteBranchOnMerge = $object->deleteBranchOnMerge;

        if ($deleteBranchOnMerge === null) {
            goto after_deleteBranchOnMerge;
        }
        after_deleteBranchOnMerge:        $result['delete_branch_on_merge'] = $deleteBranchOnMerge;

        
        $deploymentsUrl = $object->deploymentsUrl;
        after_deploymentsUrl:        $result['deployments_url'] = $deploymentsUrl;

        
        $description = $object->description;

        if ($description === null) {
            goto after_description;
        }
        after_description:        $result['description'] = $description;

        
        $disabled = $object->disabled;

        if ($disabled === null) {
            goto after_disabled;
        }
        after_disabled:        $result['disabled'] = $disabled;

        
        $downloadsUrl = $object->downloadsUrl;
        after_downloadsUrl:        $result['downloads_url'] = $downloadsUrl;

        
        $eventsUrl = $object->eventsUrl;
        after_eventsUrl:        $result['events_url'] = $eventsUrl;

        
        $fork = $object->fork;
        after_fork:        $result['fork'] = $fork;

        
        $forks = $object->forks;
        after_forks:        $result['forks'] = $forks;

        
        $forksCount = $object->forksCount;
        after_forksCount:        $result['forks_count'] = $forksCount;

        
        $forksUrl = $object->forksUrl;
        after_forksUrl:        $result['forks_url'] = $forksUrl;

        
        $fullName = $object->fullName;
        after_fullName:        $result['full_name'] = $fullName;

        
        $gitCommitsUrl = $object->gitCommitsUrl;
        after_gitCommitsUrl:        $result['git_commits_url'] = $gitCommitsUrl;

        
        $gitRefsUrl = $object->gitRefsUrl;
        after_gitRefsUrl:        $result['git_refs_url'] = $gitRefsUrl;

        
        $gitTagsUrl = $object->gitTagsUrl;
        after_gitTagsUrl:        $result['git_tags_url'] = $gitTagsUrl;

        
        $gitUrl = $object->gitUrl;
        after_gitUrl:        $result['git_url'] = $gitUrl;

        
        $hasDownloads = $object->hasDownloads;
        after_hasDownloads:        $result['has_downloads'] = $hasDownloads;

        
        $hasIssues = $object->hasIssues;
        after_hasIssues:        $result['has_issues'] = $hasIssues;

        
        $hasPages = $object->hasPages;
        after_hasPages:        $result['has_pages'] = $hasPages;

        
        $hasProjects = $object->hasProjects;
        after_hasProjects:        $result['has_projects'] = $hasProjects;

        
        $hasWiki = $object->hasWiki;
        after_hasWiki:        $result['has_wiki'] = $hasWiki;

        
        $hasDiscussions = $object->hasDiscussions;
        after_hasDiscussions:        $result['has_discussions'] = $hasDiscussions;

        
        $homepage = $object->homepage;

        if ($homepage === null) {
            goto after_homepage;
        }
        after_homepage:        $result['homepage'] = $homepage;

        
        $hooksUrl = $object->hooksUrl;
        after_hooksUrl:        $result['hooks_url'] = $hooksUrl;

        
        $htmlUrl = $object->htmlUrl;
        after_htmlUrl:        $result['html_url'] = $htmlUrl;

        
        $id = $object->id;
        after_id:        $result['id'] = $id;

        
        $isTemplate = $object->isTemplate;

        if ($isTemplate === null) {
            goto after_isTemplate;
        }
        after_isTemplate:        $result['is_template'] = $isTemplate;

        
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

        
        $language = $object->language;

        if ($language === null) {
            goto after_language;
        }
        after_language:        $result['language'] = $language;

        
        $languagesUrl = $object->languagesUrl;
        after_languagesUrl:        $result['languages_url'] = $languagesUrl;

        
        $license = $object->license;

        if ($license === null) {
            goto after_license;
        }
        $license = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookFork⚡️Forkee⚡️License($license);
        after_license:        $result['license'] = $license;

        
        $masterBranch = $object->masterBranch;

        if ($masterBranch === null) {
            goto after_masterBranch;
        }
        after_masterBranch:        $result['master_branch'] = $masterBranch;

        
        $mergesUrl = $object->mergesUrl;
        after_mergesUrl:        $result['merges_url'] = $mergesUrl;

        
        $milestonesUrl = $object->milestonesUrl;
        after_milestonesUrl:        $result['milestones_url'] = $milestonesUrl;

        
        $mirrorUrl = $object->mirrorUrl;

        if ($mirrorUrl === null) {
            goto after_mirrorUrl;
        }
        after_mirrorUrl:        $result['mirror_url'] = $mirrorUrl;

        
        $name = $object->name;
        after_name:        $result['name'] = $name;

        
        $nodeId = $object->nodeId;
        after_nodeId:        $result['node_id'] = $nodeId;

        
        $notificationsUrl = $object->notificationsUrl;
        after_notificationsUrl:        $result['notifications_url'] = $notificationsUrl;

        
        $openIssues = $object->openIssues;
        after_openIssues:        $result['open_issues'] = $openIssues;

        
        $openIssuesCount = $object->openIssuesCount;
        after_openIssuesCount:        $result['open_issues_count'] = $openIssuesCount;

        
        $organization = $object->organization;

        if ($organization === null) {
            goto after_organization;
        }
        after_organization:        $result['organization'] = $organization;

        
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
        $permissions = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookFork⚡️Forkee⚡️Permissions($permissions);
        after_permissions:        $result['permissions'] = $permissions;

        
        $private = $object->private;
        after_private:        $result['private'] = $private;

        
        $public = $object->public;

        if ($public === null) {
            goto after_public;
        }
        after_public:        $result['public'] = $public;

        
        $pullsUrl = $object->pullsUrl;
        after_pullsUrl:        $result['pulls_url'] = $pullsUrl;

        
        $pushedAt = $object->pushedAt;
        after_pushedAt:        $result['pushed_at'] = $pushedAt;

        
        $releasesUrl = $object->releasesUrl;
        after_releasesUrl:        $result['releases_url'] = $releasesUrl;

        
        $roleName = $object->roleName;

        if ($roleName === null) {
            goto after_roleName;
        }
        after_roleName:        $result['role_name'] = $roleName;

        
        $size = $object->size;
        after_size:        $result['size'] = $size;

        
        $sshUrl = $object->sshUrl;
        after_sshUrl:        $result['ssh_url'] = $sshUrl;

        
        $stargazers = $object->stargazers;

        if ($stargazers === null) {
            goto after_stargazers;
        }
        after_stargazers:        $result['stargazers'] = $stargazers;

        
        $stargazersCount = $object->stargazersCount;
        after_stargazersCount:        $result['stargazers_count'] = $stargazersCount;

        
        $stargazersUrl = $object->stargazersUrl;
        after_stargazersUrl:        $result['stargazers_url'] = $stargazersUrl;

        
        $statusesUrl = $object->statusesUrl;
        after_statusesUrl:        $result['statuses_url'] = $statusesUrl;

        
        $subscribersUrl = $object->subscribersUrl;
        after_subscribersUrl:        $result['subscribers_url'] = $subscribersUrl;

        
        $subscriptionUrl = $object->subscriptionUrl;
        after_subscriptionUrl:        $result['subscription_url'] = $subscriptionUrl;

        
        $svnUrl = $object->svnUrl;
        after_svnUrl:        $result['svn_url'] = $svnUrl;

        
        $tagsUrl = $object->tagsUrl;
        after_tagsUrl:        $result['tags_url'] = $tagsUrl;

        
        $teamsUrl = $object->teamsUrl;
        after_teamsUrl:        $result['teams_url'] = $teamsUrl;

        
        $topics = $object->topics;
        static $topicsSerializer0;

        if ($topicsSerializer0 === null) {
            $topicsSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $topics = $topicsSerializer0->serialize($topics, $this);
        after_topics:        $result['topics'] = $topics;

        
        $treesUrl = $object->treesUrl;
        after_treesUrl:        $result['trees_url'] = $treesUrl;

        
        $updatedAt = $object->updatedAt;
        after_updatedAt:        $result['updated_at'] = $updatedAt;

        
        $url = $object->url;
        after_url:        $result['url'] = $url;

        
        $visibility = $object->visibility;
        after_visibility:        $result['visibility'] = $visibility;

        
        $watchers = $object->watchers;
        after_watchers:        $result['watchers'] = $watchers;

        
        $watchersCount = $object->watchersCount;
        after_watchersCount:        $result['watchers_count'] = $watchersCount;

        
        $webCommitSignoffRequired = $object->webCommitSignoffRequired;

        if ($webCommitSignoffRequired === null) {
            goto after_webCommitSignoffRequired;
        }
        after_webCommitSignoffRequired:        $result['web_commit_signoff_required'] = $webCommitSignoffRequired;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesUnassigned(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookIssuesUnassigned);
        $result = [];

        $action = $object->action;
        after_action:        $result['action'] = $action;

        
        $assignee = $object->assignee;

        if ($assignee === null) {
            goto after_assignee;
        }
        $assignee = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssueCommentCreated⚡️Issue⚡️Assignee($assignee);
        after_assignee:        $result['assignee'] = $assignee;

        
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

        
        $issue = $object->issue;
        $issue = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssueCommentEdited⚡️Issue($issue);
        after_issue:        $result['issue'] = $issue;

        
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


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesUnlabeled(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookIssuesUnlabeled);
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

        
        $issue = $object->issue;
        $issue = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssueCommentEdited⚡️Issue($issue);
        after_issue:        $result['issue'] = $issue;

        
        $label = $object->label;

        if ($label === null) {
            goto after_label;
        }
        $label = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookDiscussionLabeled⚡️Label($label);
        after_label:        $result['label'] = $label;

        
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


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesUnlocked(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookIssuesUnlocked);
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

        
        $issue = $object->issue;
        $issue = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesPinned⚡️Issue($issue);
        after_issue:        $result['issue'] = $issue;

        
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


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesUnpinned(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookIssuesUnpinned);
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

        
        $issue = $object->issue;
        $issue = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesPinned⚡️Issue($issue);
        after_issue:        $result['issue'] = $issue;

        
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
