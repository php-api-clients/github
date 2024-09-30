<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Hydrator\WebHook;

use ApiClients\Client\GitHub\Schema\OrganizationSimpleWebhooks;
use ApiClients\Client\GitHub\Schema\SimpleInstallation;
use ApiClients\Client\GitHub\Schema\SimpleUser;
use ApiClients\Client\GitHub\Schema\WebhookProjectsV2StatusUpdateCreated;
use ApiClients\Client\GitHub\Schema\WebhookProjectsV2StatusUpdateDeleted;
use ApiClients\Client\GitHub\Schema\WebhookProjectsV2StatusUpdateEdited;
use ApiClients\Client\GitHub\Schema\WebhookProjectsV2StatusUpdateEdited\Changes;
use ApiClients\Client\GitHub\Schema\WebhookProjectsV2StatusUpdateEdited\Changes\Body;
use ApiClients\Client\GitHub\Schema\WebhookProjectsV2StatusUpdateEdited\Changes\StartDate;
use ApiClients\Client\GitHub\Schema\WebhookProjectsV2StatusUpdateEdited\Changes\Status;
use ApiClients\Client\GitHub\Schema\WebhookProjectsV2StatusUpdateEdited\Changes\TargetDate;
use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems;
use EventSauce\ObjectHydrator\PropertySerializers\SerializeDateTime;
use EventSauce\ObjectHydrator\PropertySerializers\SerializeUuidToString;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;
use LogicException;
use Throwable;

use function array_pop;
use function assert;
use function count;
use function is_a;
use function is_array;

class ProjectsV2StatusUpdate implements ObjectMapper
{
    private array $hydrationStack = [];

    public function __construct()
    {
    }

    /**
     * @param class-string<T> $className
     *
     * @return T
     *
     * @template T of object
     */
    public function hydrateObject(string $className, array $payload): object
    {
        return match ($className) {
            'ApiClients\Client\GitHub\Schema\WebhookProjectsV2StatusUpdateCreated' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2StatusUpdateCreated($payload),
                'ApiClients\Client\GitHub\Schema\SimpleInstallation' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleInstallation($payload),
                'ApiClients\Client\GitHub\Schema\OrganizationSimpleWebhooks' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️OrganizationSimpleWebhooks($payload),
                'ApiClients\Client\GitHub\Schema\ProjectsV2StatusUpdate' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProjectsV2StatusUpdate($payload),
                'ApiClients\Client\GitHub\Schema\SimpleUser' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($payload),
                'ApiClients\Client\GitHub\Schema\WebhookProjectsV2StatusUpdateDeleted' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2StatusUpdateDeleted($payload),
                'ApiClients\Client\GitHub\Schema\WebhookProjectsV2StatusUpdateEdited' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2StatusUpdateEdited($payload),
                'ApiClients\Client\GitHub\Schema\WebhookProjectsV2StatusUpdateEdited\Changes' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2StatusUpdateEdited⚡️Changes($payload),
                'ApiClients\Client\GitHub\Schema\WebhookProjectsV2StatusUpdateEdited\Changes\Body' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2StatusUpdateEdited⚡️Changes⚡️Body($payload),
                'ApiClients\Client\GitHub\Schema\WebhookProjectsV2StatusUpdateEdited\Changes\Status' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2StatusUpdateEdited⚡️Changes⚡️Status($payload),
                'ApiClients\Client\GitHub\Schema\WebhookProjectsV2StatusUpdateEdited\Changes\StartDate' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2StatusUpdateEdited⚡️Changes⚡️StartDate($payload),
                'ApiClients\Client\GitHub\Schema\WebhookProjectsV2StatusUpdateEdited\Changes\TargetDate' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2StatusUpdateEdited⚡️Changes⚡️TargetDate($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2StatusUpdateCreated(array $payload): WebhookProjectsV2StatusUpdateCreated
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['action'] ?? null;

            if ($value === null) {
                $missingFields[] = 'action';
                goto after_action;
            }

            $properties['action'] = $value;

            after_action:

            $value = $payload['installation'] ?? null;

            if ($value === null) {
                $properties['installation'] = null;
                goto after_installation;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'installation';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleInstallation($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['installation'] = $value;

            after_installation:

            $value = $payload['organization'] ?? null;

            if ($value === null) {
                $missingFields[] = 'organization';
                goto after_organization;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'organization';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️OrganizationSimpleWebhooks($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['organization'] = $value;

            after_organization:

            $value = $payload['projects_v2_status_update'] ?? null;

            if ($value === null) {
                $missingFields[] = 'projects_v2_status_update';
                goto after_projectsVTwoStatusUpdate;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'projectsVTwoStatusUpdate';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProjectsV2StatusUpdate($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['projectsVTwoStatusUpdate'] = $value;

            after_projectsVTwoStatusUpdate:

            $value = $payload['sender'] ?? null;

            if ($value === null) {
                $missingFields[] = 'sender';
                goto after_sender;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'sender';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['sender'] = $value;

            after_sender:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookProjectsV2StatusUpdateCreated', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(WebhookProjectsV2StatusUpdateCreated::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new WebhookProjectsV2StatusUpdateCreated(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookProjectsV2StatusUpdateCreated', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleInstallation(array $payload): SimpleInstallation
    {
        $properties    = [];
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
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\SimpleInstallation', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(SimpleInstallation::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new SimpleInstallation(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\SimpleInstallation', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️OrganizationSimpleWebhooks(array $payload): OrganizationSimpleWebhooks
    {
        $properties    = [];
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
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\OrganizationSimpleWebhooks', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(OrganizationSimpleWebhooks::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new OrganizationSimpleWebhooks(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\OrganizationSimpleWebhooks', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProjectsV2StatusUpdate(array $payload): \ApiClients\Client\GitHub\Schema\ProjectsV2StatusUpdate
    {
        $properties    = [];
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

            $value = $payload['project_node_id'] ?? null;

            if ($value === null) {
                $properties['projectNodeId'] = null;
                goto after_projectNodeId;
            }

            $properties['projectNodeId'] = $value;

            after_projectNodeId:

            $value = $payload['creator'] ?? null;

            if ($value === null) {
                $properties['creator'] = null;
                goto after_creator;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'creator';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
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

            $value = $payload['status'] ?? null;

            if ($value === null) {
                $properties['status'] = null;
                goto after_status;
            }

            $properties['status'] = $value;

            after_status:

            $value = $payload['start_date'] ?? null;

            if ($value === null) {
                $properties['startDate'] = null;
                goto after_startDate;
            }

            $properties['startDate'] = $value;

            after_startDate:

            $value = $payload['target_date'] ?? null;

            if ($value === null) {
                $properties['targetDate'] = null;
                goto after_targetDate;
            }

            $properties['targetDate'] = $value;

            after_targetDate:

            $value = $payload['body'] ?? null;

            if ($value === null) {
                $properties['body'] = null;
                goto after_body;
            }

            $properties['body'] = $value;

            after_body:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ProjectsV2StatusUpdate', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\ProjectsV2StatusUpdate::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\ProjectsV2StatusUpdate(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ProjectsV2StatusUpdate', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser(array $payload): SimpleUser
    {
        $properties    = [];
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
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\SimpleUser', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(SimpleUser::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new SimpleUser(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\SimpleUser', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2StatusUpdateDeleted(array $payload): WebhookProjectsV2StatusUpdateDeleted
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['action'] ?? null;

            if ($value === null) {
                $missingFields[] = 'action';
                goto after_action;
            }

            $properties['action'] = $value;

            after_action:

            $value = $payload['installation'] ?? null;

            if ($value === null) {
                $properties['installation'] = null;
                goto after_installation;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'installation';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleInstallation($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['installation'] = $value;

            after_installation:

            $value = $payload['organization'] ?? null;

            if ($value === null) {
                $missingFields[] = 'organization';
                goto after_organization;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'organization';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️OrganizationSimpleWebhooks($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['organization'] = $value;

            after_organization:

            $value = $payload['projects_v2_status_update'] ?? null;

            if ($value === null) {
                $missingFields[] = 'projects_v2_status_update';
                goto after_projectsVTwoStatusUpdate;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'projectsVTwoStatusUpdate';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProjectsV2StatusUpdate($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['projectsVTwoStatusUpdate'] = $value;

            after_projectsVTwoStatusUpdate:

            $value = $payload['sender'] ?? null;

            if ($value === null) {
                $missingFields[] = 'sender';
                goto after_sender;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'sender';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['sender'] = $value;

            after_sender:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookProjectsV2StatusUpdateDeleted', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(WebhookProjectsV2StatusUpdateDeleted::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new WebhookProjectsV2StatusUpdateDeleted(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookProjectsV2StatusUpdateDeleted', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2StatusUpdateEdited(array $payload): WebhookProjectsV2StatusUpdateEdited
    {
        $properties    = [];
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
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2StatusUpdateEdited⚡️Changes($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['changes'] = $value;

            after_changes:

            $value = $payload['installation'] ?? null;

            if ($value === null) {
                $properties['installation'] = null;
                goto after_installation;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'installation';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleInstallation($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['installation'] = $value;

            after_installation:

            $value = $payload['organization'] ?? null;

            if ($value === null) {
                $missingFields[] = 'organization';
                goto after_organization;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'organization';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️OrganizationSimpleWebhooks($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['organization'] = $value;

            after_organization:

            $value = $payload['projects_v2_status_update'] ?? null;

            if ($value === null) {
                $missingFields[] = 'projects_v2_status_update';
                goto after_projectsVTwoStatusUpdate;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'projectsVTwoStatusUpdate';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProjectsV2StatusUpdate($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['projectsVTwoStatusUpdate'] = $value;

            after_projectsVTwoStatusUpdate:

            $value = $payload['sender'] ?? null;

            if ($value === null) {
                $missingFields[] = 'sender';
                goto after_sender;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'sender';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['sender'] = $value;

            after_sender:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookProjectsV2StatusUpdateEdited', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(WebhookProjectsV2StatusUpdateEdited::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new WebhookProjectsV2StatusUpdateEdited(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookProjectsV2StatusUpdateEdited', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2StatusUpdateEdited⚡️Changes(array $payload): Changes
    {
        $properties    = [];
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
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2StatusUpdateEdited⚡️Changes⚡️Body($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['body'] = $value;

            after_body:

            $value = $payload['status'] ?? null;

            if ($value === null) {
                $properties['status'] = null;
                goto after_status;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'status';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2StatusUpdateEdited⚡️Changes⚡️Status($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['status'] = $value;

            after_status:

            $value = $payload['start_date'] ?? null;

            if ($value === null) {
                $properties['startDate'] = null;
                goto after_startDate;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'startDate';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2StatusUpdateEdited⚡️Changes⚡️StartDate($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['startDate'] = $value;

            after_startDate:

            $value = $payload['target_date'] ?? null;

            if ($value === null) {
                $properties['targetDate'] = null;
                goto after_targetDate;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'targetDate';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2StatusUpdateEdited⚡️Changes⚡️TargetDate($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['targetDate'] = $value;

            after_targetDate:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookProjectsV2StatusUpdateEdited\Changes', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(Changes::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new Changes(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookProjectsV2StatusUpdateEdited\Changes', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2StatusUpdateEdited⚡️Changes⚡️Body(array $payload): Body
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['from'] ?? null;

            if ($value === null) {
                $properties['from'] = null;
                goto after_from;
            }

            $properties['from'] = $value;

            after_from:

            $value = $payload['to'] ?? null;

            if ($value === null) {
                $properties['to'] = null;
                goto after_to;
            }

            $properties['to'] = $value;

            after_to:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookProjectsV2StatusUpdateEdited\Changes\Body', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(Body::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new Body(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookProjectsV2StatusUpdateEdited\Changes\Body', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2StatusUpdateEdited⚡️Changes⚡️Status(array $payload): Status
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['from'] ?? null;

            if ($value === null) {
                $properties['from'] = null;
                goto after_from;
            }

            $properties['from'] = $value;

            after_from:

            $value = $payload['to'] ?? null;

            if ($value === null) {
                $properties['to'] = null;
                goto after_to;
            }

            $properties['to'] = $value;

            after_to:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookProjectsV2StatusUpdateEdited\Changes\Status', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(Status::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new Status(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookProjectsV2StatusUpdateEdited\Changes\Status', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2StatusUpdateEdited⚡️Changes⚡️StartDate(array $payload): StartDate
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['from'] ?? null;

            if ($value === null) {
                $properties['from'] = null;
                goto after_from;
            }

            $properties['from'] = $value;

            after_from:

            $value = $payload['to'] ?? null;

            if ($value === null) {
                $properties['to'] = null;
                goto after_to;
            }

            $properties['to'] = $value;

            after_to:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookProjectsV2StatusUpdateEdited\Changes\StartDate', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(StartDate::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new StartDate(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookProjectsV2StatusUpdateEdited\Changes\StartDate', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2StatusUpdateEdited⚡️Changes⚡️TargetDate(array $payload): TargetDate
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['from'] ?? null;

            if ($value === null) {
                $properties['from'] = null;
                goto after_from;
            }

            $properties['from'] = $value;

            after_from:

            $value = $payload['to'] ?? null;

            if ($value === null) {
                $properties['to'] = null;
                goto after_to;
            }

            $properties['to'] = $value;

            after_to:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookProjectsV2StatusUpdateEdited\Changes\TargetDate', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(TargetDate::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new TargetDate(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookProjectsV2StatusUpdateEdited\Changes\TargetDate', $exception, stack: $this->hydrationStack);
        }
    }

    private function serializeViaTypeMap(string $accessor, object $object, array $payloadToTypeMap): array
    {
        foreach ($payloadToTypeMap as $payloadType => [$valueType, $method]) {
            if (is_a($object, $valueType)) {
                return [$accessor => $payloadType] + $this->{$method}($object);
            }
        }

        throw new LogicException('No type mapped for object of class: ' . $object::class);
    }

    public function serializeObject(object $object): mixed
    {
        return $this->serializeObjectOfType($object, $object::class);
    }

    /**
     * @param T               $object
     * @param class-string<T> $className
     *
     * @template T
     */
    public function serializeObjectOfType(object $object, string $className): mixed
    {
        try {
            return match ($className) {
                'array' => $this->serializeValuearray($object),
                'Ramsey\Uuid\UuidInterface' => $this->serializeValueRamsey⚡️Uuid⚡️UuidInterface($object),
                'DateTime' => $this->serializeValueDateTime($object),
                'DateTimeImmutable' => $this->serializeValueDateTimeImmutable($object),
                'DateTimeInterface' => $this->serializeValueDateTimeInterface($object),
                'ApiClients\Client\GitHub\Schema\WebhookProjectsV2StatusUpdateCreated' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2StatusUpdateCreated($object),
                'ApiClients\Client\GitHub\Schema\SimpleInstallation' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleInstallation($object),
                'ApiClients\Client\GitHub\Schema\OrganizationSimpleWebhooks' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️OrganizationSimpleWebhooks($object),
                'ApiClients\Client\GitHub\Schema\ProjectsV2StatusUpdate' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProjectsV2StatusUpdate($object),
                'ApiClients\Client\GitHub\Schema\SimpleUser' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($object),
                'ApiClients\Client\GitHub\Schema\WebhookProjectsV2StatusUpdateDeleted' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2StatusUpdateDeleted($object),
                'ApiClients\Client\GitHub\Schema\WebhookProjectsV2StatusUpdateEdited' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2StatusUpdateEdited($object),
                'ApiClients\Client\GitHub\Schema\WebhookProjectsV2StatusUpdateEdited\Changes' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2StatusUpdateEdited⚡️Changes($object),
                'ApiClients\Client\GitHub\Schema\WebhookProjectsV2StatusUpdateEdited\Changes\Body' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2StatusUpdateEdited⚡️Changes⚡️Body($object),
                'ApiClients\Client\GitHub\Schema\WebhookProjectsV2StatusUpdateEdited\Changes\Status' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2StatusUpdateEdited⚡️Changes⚡️Status($object),
                'ApiClients\Client\GitHub\Schema\WebhookProjectsV2StatusUpdateEdited\Changes\StartDate' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2StatusUpdateEdited⚡️Changes⚡️StartDate($object),
                'ApiClients\Client\GitHub\Schema\WebhookProjectsV2StatusUpdateEdited\Changes\TargetDate' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2StatusUpdateEdited⚡️Changes⚡️TargetDate($object),
                default => throw new LogicException("No serialization defined for $className"),
            };
        } catch (Throwable $exception) {
            throw UnableToSerializeObject::dueToError($className, $exception);
        }
    }

    private function serializeValuearray(mixed $value): mixed
    {
        static $serializer;

        if ($serializer === null) {
            $serializer = new SerializeArrayItems(...[]);
        }

        return $serializer->serialize($value, $this);
    }

    private function serializeValueRamsey⚡️Uuid⚡️UuidInterface(mixed $value): mixed
    {
        static $serializer;

        if ($serializer === null) {
            $serializer = new SerializeUuidToString(...[]);
        }

        return $serializer->serialize($value, $this);
    }

    private function serializeValueDateTime(mixed $value): mixed
    {
        static $serializer;

        if ($serializer === null) {
            $serializer = new SerializeDateTime(...[]);
        }

        return $serializer->serialize($value, $this);
    }

    private function serializeValueDateTimeImmutable(mixed $value): mixed
    {
        static $serializer;

        if ($serializer === null) {
            $serializer = new SerializeDateTime(...[]);
        }

        return $serializer->serialize($value, $this);
    }

    private function serializeValueDateTimeInterface(mixed $value): mixed
    {
        static $serializer;

        if ($serializer === null) {
            $serializer = new SerializeDateTime(...[]);
        }

        return $serializer->serialize($value, $this);
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2StatusUpdateCreated(mixed $object): mixed
    {
        assert($object instanceof WebhookProjectsV2StatusUpdateCreated);
        $result = [];

        $action                                = $object->action;
        after_action:        $result['action'] = $action;

        $installation = $object->installation;

        if ($installation === null) {
            goto after_installation;
        }

        $installation                                      = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleInstallation($installation);
        after_installation:        $result['installation'] = $installation;

        $organization                                      = $object->organization;
        $organization                                      = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️OrganizationSimpleWebhooks($organization);
        after_organization:        $result['organization'] = $organization;

        $projectsVTwoStatusUpdate                                                   = $object->projectsVTwoStatusUpdate;
        $projectsVTwoStatusUpdate                                                   = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProjectsV2StatusUpdate($projectsVTwoStatusUpdate);
        after_projectsVTwoStatusUpdate:        $result['projects_v2_status_update'] = $projectsVTwoStatusUpdate;

        $sender                                = $object->sender;
        $sender                                = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($sender);
        after_sender:        $result['sender'] = $sender;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleInstallation(mixed $object): mixed
    {
        assert($object instanceof SimpleInstallation);
        $result = [];

        $id                            = $object->id;
        after_id:        $result['id'] = $id;

        $nodeId                                 = $object->nodeId;
        after_nodeId:        $result['node_id'] = $nodeId;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️OrganizationSimpleWebhooks(mixed $object): mixed
    {
        assert($object instanceof OrganizationSimpleWebhooks);
        $result = [];

        $login                               = $object->login;
        after_login:        $result['login'] = $login;

        $id                            = $object->id;
        after_id:        $result['id'] = $id;

        $nodeId                                 = $object->nodeId;
        after_nodeId:        $result['node_id'] = $nodeId;

        $url                             = $object->url;
        after_url:        $result['url'] = $url;

        $reposUrl                                   = $object->reposUrl;
        after_reposUrl:        $result['repos_url'] = $reposUrl;

        $eventsUrl                                    = $object->eventsUrl;
        after_eventsUrl:        $result['events_url'] = $eventsUrl;

        $hooksUrl                                   = $object->hooksUrl;
        after_hooksUrl:        $result['hooks_url'] = $hooksUrl;

        $issuesUrl                                    = $object->issuesUrl;
        after_issuesUrl:        $result['issues_url'] = $issuesUrl;

        $membersUrl                                     = $object->membersUrl;
        after_membersUrl:        $result['members_url'] = $membersUrl;

        $publicMembersUrl                                            = $object->publicMembersUrl;
        after_publicMembersUrl:        $result['public_members_url'] = $publicMembersUrl;

        $avatarUrl                                    = $object->avatarUrl;
        after_avatarUrl:        $result['avatar_url'] = $avatarUrl;

        $description = $object->description;

        if ($description === null) {
            goto after_description;
        }

        after_description:        $result['description'] = $description;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProjectsV2StatusUpdate(mixed $object): mixed
    {
        assert($object instanceof \ApiClients\Client\GitHub\Schema\ProjectsV2StatusUpdate);
        $result = [];

        $id                            = $object->id;
        after_id:        $result['id'] = $id;

        $nodeId                                 = $object->nodeId;
        after_nodeId:        $result['node_id'] = $nodeId;

        $projectNodeId = $object->projectNodeId;

        if ($projectNodeId === null) {
            goto after_projectNodeId;
        }

        after_projectNodeId:        $result['project_node_id'] = $projectNodeId;

        $creator = $object->creator;

        if ($creator === null) {
            goto after_creator;
        }

        $creator                                 = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($creator);
        after_creator:        $result['creator'] = $creator;

        $createdAt                                    = $object->createdAt;
        after_createdAt:        $result['created_at'] = $createdAt;

        $updatedAt                                    = $object->updatedAt;
        after_updatedAt:        $result['updated_at'] = $updatedAt;

        $status = $object->status;

        if ($status === null) {
            goto after_status;
        }

        after_status:        $result['status'] = $status;

        $startDate = $object->startDate;

        if ($startDate === null) {
            goto after_startDate;
        }

        after_startDate:        $result['start_date'] = $startDate;

        $targetDate = $object->targetDate;

        if ($targetDate === null) {
            goto after_targetDate;
        }

        after_targetDate:        $result['target_date'] = $targetDate;

        $body = $object->body;

        if ($body === null) {
            goto after_body;
        }

        after_body:        $result['body'] = $body;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser(mixed $object): mixed
    {
        assert($object instanceof SimpleUser);
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

        $login                               = $object->login;
        after_login:        $result['login'] = $login;

        $id                            = $object->id;
        after_id:        $result['id'] = $id;

        $nodeId                                 = $object->nodeId;
        after_nodeId:        $result['node_id'] = $nodeId;

        $avatarUrl                                    = $object->avatarUrl;
        after_avatarUrl:        $result['avatar_url'] = $avatarUrl;

        $gravatarId = $object->gravatarId;

        if ($gravatarId === null) {
            goto after_gravatarId;
        }

        after_gravatarId:        $result['gravatar_id'] = $gravatarId;

        $url                             = $object->url;
        after_url:        $result['url'] = $url;

        $htmlUrl                                  = $object->htmlUrl;
        after_htmlUrl:        $result['html_url'] = $htmlUrl;

        $followersUrl                                       = $object->followersUrl;
        after_followersUrl:        $result['followers_url'] = $followersUrl;

        $followingUrl                                       = $object->followingUrl;
        after_followingUrl:        $result['following_url'] = $followingUrl;

        $gistsUrl                                   = $object->gistsUrl;
        after_gistsUrl:        $result['gists_url'] = $gistsUrl;

        $starredUrl                                     = $object->starredUrl;
        after_starredUrl:        $result['starred_url'] = $starredUrl;

        $subscriptionsUrl                                           = $object->subscriptionsUrl;
        after_subscriptionsUrl:        $result['subscriptions_url'] = $subscriptionsUrl;

        $organizationsUrl                                           = $object->organizationsUrl;
        after_organizationsUrl:        $result['organizations_url'] = $organizationsUrl;

        $reposUrl                                   = $object->reposUrl;
        after_reposUrl:        $result['repos_url'] = $reposUrl;

        $eventsUrl                                    = $object->eventsUrl;
        after_eventsUrl:        $result['events_url'] = $eventsUrl;

        $receivedEventsUrl                                             = $object->receivedEventsUrl;
        after_receivedEventsUrl:        $result['received_events_url'] = $receivedEventsUrl;

        $type                              = $object->type;
        after_type:        $result['type'] = $type;

        $siteAdmin                                    = $object->siteAdmin;
        after_siteAdmin:        $result['site_admin'] = $siteAdmin;

        $starredAt = $object->starredAt;

        if ($starredAt === null) {
            goto after_starredAt;
        }

        after_starredAt:        $result['starred_at'] = $starredAt;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2StatusUpdateDeleted(mixed $object): mixed
    {
        assert($object instanceof WebhookProjectsV2StatusUpdateDeleted);
        $result = [];

        $action                                = $object->action;
        after_action:        $result['action'] = $action;

        $installation = $object->installation;

        if ($installation === null) {
            goto after_installation;
        }

        $installation                                      = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleInstallation($installation);
        after_installation:        $result['installation'] = $installation;

        $organization                                      = $object->organization;
        $organization                                      = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️OrganizationSimpleWebhooks($organization);
        after_organization:        $result['organization'] = $organization;

        $projectsVTwoStatusUpdate                                                   = $object->projectsVTwoStatusUpdate;
        $projectsVTwoStatusUpdate                                                   = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProjectsV2StatusUpdate($projectsVTwoStatusUpdate);
        after_projectsVTwoStatusUpdate:        $result['projects_v2_status_update'] = $projectsVTwoStatusUpdate;

        $sender                                = $object->sender;
        $sender                                = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($sender);
        after_sender:        $result['sender'] = $sender;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2StatusUpdateEdited(mixed $object): mixed
    {
        assert($object instanceof WebhookProjectsV2StatusUpdateEdited);
        $result = [];

        $action                                = $object->action;
        after_action:        $result['action'] = $action;

        $changes = $object->changes;

        if ($changes === null) {
            goto after_changes;
        }

        $changes                                 = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2StatusUpdateEdited⚡️Changes($changes);
        after_changes:        $result['changes'] = $changes;

        $installation = $object->installation;

        if ($installation === null) {
            goto after_installation;
        }

        $installation                                      = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleInstallation($installation);
        after_installation:        $result['installation'] = $installation;

        $organization                                      = $object->organization;
        $organization                                      = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️OrganizationSimpleWebhooks($organization);
        after_organization:        $result['organization'] = $organization;

        $projectsVTwoStatusUpdate                                                   = $object->projectsVTwoStatusUpdate;
        $projectsVTwoStatusUpdate                                                   = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProjectsV2StatusUpdate($projectsVTwoStatusUpdate);
        after_projectsVTwoStatusUpdate:        $result['projects_v2_status_update'] = $projectsVTwoStatusUpdate;

        $sender                                = $object->sender;
        $sender                                = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($sender);
        after_sender:        $result['sender'] = $sender;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2StatusUpdateEdited⚡️Changes(mixed $object): mixed
    {
        assert($object instanceof Changes);
        $result = [];

        $body = $object->body;

        if ($body === null) {
            goto after_body;
        }

        $body                              = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2StatusUpdateEdited⚡️Changes⚡️Body($body);
        after_body:        $result['body'] = $body;

        $status = $object->status;

        if ($status === null) {
            goto after_status;
        }

        $status                                = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2StatusUpdateEdited⚡️Changes⚡️Status($status);
        after_status:        $result['status'] = $status;

        $startDate = $object->startDate;

        if ($startDate === null) {
            goto after_startDate;
        }

        $startDate                                    = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2StatusUpdateEdited⚡️Changes⚡️StartDate($startDate);
        after_startDate:        $result['start_date'] = $startDate;

        $targetDate = $object->targetDate;

        if ($targetDate === null) {
            goto after_targetDate;
        }

        $targetDate                                     = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2StatusUpdateEdited⚡️Changes⚡️TargetDate($targetDate);
        after_targetDate:        $result['target_date'] = $targetDate;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2StatusUpdateEdited⚡️Changes⚡️Body(mixed $object): mixed
    {
        assert($object instanceof Body);
        $result = [];

        $from = $object->from;

        if ($from === null) {
            goto after_from;
        }

        after_from:        $result['from'] = $from;

        $to = $object->to;

        if ($to === null) {
            goto after_to;
        }

        after_to:        $result['to'] = $to;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2StatusUpdateEdited⚡️Changes⚡️Status(mixed $object): mixed
    {
        assert($object instanceof Status);
        $result = [];

        $from = $object->from;

        if ($from === null) {
            goto after_from;
        }

        after_from:        $result['from'] = $from;

        $to = $object->to;

        if ($to === null) {
            goto after_to;
        }

        after_to:        $result['to'] = $to;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2StatusUpdateEdited⚡️Changes⚡️StartDate(mixed $object): mixed
    {
        assert($object instanceof StartDate);
        $result = [];

        $from = $object->from;

        if ($from === null) {
            goto after_from;
        }

        after_from:        $result['from'] = $from;

        $to = $object->to;

        if ($to === null) {
            goto after_to;
        }

        after_to:        $result['to'] = $to;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2StatusUpdateEdited⚡️Changes⚡️TargetDate(mixed $object): mixed
    {
        assert($object instanceof TargetDate);
        $result = [];

        $from = $object->from;

        if ($from === null) {
            goto after_from;
        }

        after_from:        $result['from'] = $from;

        $to = $object->to;

        if ($to === null) {
            goto after_to;
        }

        after_to:        $result['to'] = $to;

        return $result;
    }

    /**
     * @param class-string<T> $className
     * @param iterable<array> $payloads;
     *
     * @return IterableList<T>
     *
     * @throws UnableToHydrateObject
     *
     * @template T
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
     * @param class-string<T> $className
     * @param iterable<array> $payloads;
     *
     * @return IterableList<T>
     *
     * @throws UnableToSerializeObject
     *
     * @template T
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
