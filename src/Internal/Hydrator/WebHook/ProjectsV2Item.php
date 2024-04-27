<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Hydrator\WebHook;

use ApiClients\Client\GitHub\Schema\OrganizationSimpleWebhooks;
use ApiClients\Client\GitHub\Schema\SimpleInstallation;
use ApiClients\Client\GitHub\Schema\SimpleUser;
use ApiClients\Client\GitHub\Schema\SimpleUserWebhooks;
use ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemArchived;
use ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemConverted;
use ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemConverted\Changes;
use ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemConverted\Changes\ContentType;
use ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemCreated;
use ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemDeleted;
use ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemEdited;
use ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemReordered;
use ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemReordered\Changes\PreviousProjectsVTwoItemNodeId;
use ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemRestored;
use ApiClients\Client\GitHub\Schema\WebhooksProjectChanges;
use ApiClients\Client\GitHub\Schema\WebhooksProjectChanges\ArchivedAt;
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
use function is_object;

class ProjectsV2Item implements ObjectMapper
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
            'ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemArchived' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemArchived($payload),
                'ApiClients\Client\GitHub\Schema\WebhooksProjectChanges' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhooksProjectChanges($payload),
                'ApiClients\Client\GitHub\Schema\WebhooksProjectChanges\ArchivedAt' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhooksProjectChanges⚡️ArchivedAt($payload),
                'ApiClients\Client\GitHub\Schema\SimpleInstallation' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleInstallation($payload),
                'ApiClients\Client\GitHub\Schema\OrganizationSimpleWebhooks' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️OrganizationSimpleWebhooks($payload),
                'ApiClients\Client\GitHub\Schema\ProjectsV2Item' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProjectsV2Item($payload),
                'ApiClients\Client\GitHub\Schema\SimpleUser' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($payload),
                'ApiClients\Client\GitHub\Schema\SimpleUserWebhooks' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUserWebhooks($payload),
                'ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemConverted' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemConverted($payload),
                'ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemConverted\Changes' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemConverted⚡️Changes($payload),
                'ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemConverted\Changes\ContentType' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemConverted⚡️Changes⚡️ContentType($payload),
                'ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemCreated' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemCreated($payload),
                'ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemDeleted' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemDeleted($payload),
                'ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemEdited' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemEdited($payload),
                'ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemReordered' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemReordered($payload),
                'ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemReordered\Changes' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemReordered⚡️Changes($payload),
                'ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemReordered\Changes\PreviousProjectsVTwoItemNodeId' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemReordered⚡️Changes⚡️PreviousProjectsVTwoItemNodeId($payload),
                'ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemRestored' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemRestored($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemArchived(array $payload): WebhookProjectsV2ItemArchived
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
                $missingFields[] = 'changes';
                goto after_changes;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'changes';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhooksProjectChanges($value);
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

            $value = $payload['projects_v2_item'] ?? null;

            if ($value === null) {
                $missingFields[] = 'projects_v2_item';
                goto after_projectsVTwoItem;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'projectsVTwoItem';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProjectsV2Item($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['projectsVTwoItem'] = $value;

            after_projectsVTwoItem:

            $value = $payload['sender'] ?? null;

            if ($value === null) {
                $missingFields[] = 'sender';
                goto after_sender;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'sender';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUserWebhooks($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['sender'] = $value;

            after_sender:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemArchived', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(WebhookProjectsV2ItemArchived::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new WebhookProjectsV2ItemArchived(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemArchived', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhooksProjectChanges(array $payload): WebhooksProjectChanges
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['archived_at'] ?? null;

            if ($value === null) {
                $properties['archivedAt'] = null;
                goto after_archivedAt;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'archivedAt';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhooksProjectChanges⚡️ArchivedAt($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['archivedAt'] = $value;

            after_archivedAt:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhooksProjectChanges', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(WebhooksProjectChanges::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new WebhooksProjectChanges(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhooksProjectChanges', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhooksProjectChanges⚡️ArchivedAt(array $payload): ArchivedAt
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
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhooksProjectChanges\ArchivedAt', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(ArchivedAt::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new ArchivedAt(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhooksProjectChanges\ArchivedAt', $exception, stack: $this->hydrationStack);
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

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProjectsV2Item(array $payload): \ApiClients\Client\GitHub\Schema\ProjectsV2Item
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
                $properties['nodeId'] = null;
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

            $value = $payload['content_node_id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'content_node_id';
                goto after_contentNodeId;
            }

            $properties['contentNodeId'] = $value;

            after_contentNodeId:

            $value = $payload['content_type'] ?? null;

            if ($value === null) {
                $missingFields[] = 'content_type';
                goto after_contentType;
            }

            $properties['contentType'] = $value;

            after_contentType:

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

            $value = $payload['archived_at'] ?? null;

            if ($value === null) {
                $properties['archivedAt'] = null;
                goto after_archivedAt;
            }

            $properties['archivedAt'] = $value;

            after_archivedAt:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ProjectsV2Item', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\ProjectsV2Item::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\ProjectsV2Item(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ProjectsV2Item', $exception, stack: $this->hydrationStack);
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

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUserWebhooks(array $payload): SimpleUserWebhooks
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
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\SimpleUserWebhooks', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(SimpleUserWebhooks::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new SimpleUserWebhooks(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\SimpleUserWebhooks', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemConverted(array $payload): WebhookProjectsV2ItemConverted
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
                $missingFields[] = 'changes';
                goto after_changes;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'changes';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemConverted⚡️Changes($value);
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

            $value = $payload['projects_v2_item'] ?? null;

            if ($value === null) {
                $missingFields[] = 'projects_v2_item';
                goto after_projectsVTwoItem;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'projectsVTwoItem';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProjectsV2Item($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['projectsVTwoItem'] = $value;

            after_projectsVTwoItem:

            $value = $payload['sender'] ?? null;

            if ($value === null) {
                $missingFields[] = 'sender';
                goto after_sender;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'sender';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUserWebhooks($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['sender'] = $value;

            after_sender:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemConverted', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(WebhookProjectsV2ItemConverted::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new WebhookProjectsV2ItemConverted(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemConverted', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemConverted⚡️Changes(array $payload): Changes
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['content_type'] ?? null;

            if ($value === null) {
                $properties['contentType'] = null;
                goto after_contentType;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'contentType';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemConverted⚡️Changes⚡️ContentType($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['contentType'] = $value;

            after_contentType:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemConverted\Changes', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(Changes::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new Changes(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemConverted\Changes', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemConverted⚡️Changes⚡️ContentType(array $payload): ContentType
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
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemConverted\Changes\ContentType', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(ContentType::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new ContentType(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemConverted\Changes\ContentType', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemCreated(array $payload): WebhookProjectsV2ItemCreated
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

            $value = $payload['projects_v2_item'] ?? null;

            if ($value === null) {
                $missingFields[] = 'projects_v2_item';
                goto after_projectsVTwoItem;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'projectsVTwoItem';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProjectsV2Item($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['projectsVTwoItem'] = $value;

            after_projectsVTwoItem:

            $value = $payload['sender'] ?? null;

            if ($value === null) {
                $missingFields[] = 'sender';
                goto after_sender;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'sender';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUserWebhooks($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['sender'] = $value;

            after_sender:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemCreated', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(WebhookProjectsV2ItemCreated::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new WebhookProjectsV2ItemCreated(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemCreated', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemDeleted(array $payload): WebhookProjectsV2ItemDeleted
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

            $value = $payload['projects_v2_item'] ?? null;

            if ($value === null) {
                $missingFields[] = 'projects_v2_item';
                goto after_projectsVTwoItem;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'projectsVTwoItem';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProjectsV2Item($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['projectsVTwoItem'] = $value;

            after_projectsVTwoItem:

            $value = $payload['sender'] ?? null;

            if ($value === null) {
                $missingFields[] = 'sender';
                goto after_sender;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'sender';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUserWebhooks($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['sender'] = $value;

            after_sender:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemDeleted', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(WebhookProjectsV2ItemDeleted::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new WebhookProjectsV2ItemDeleted(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemDeleted', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemEdited(array $payload): WebhookProjectsV2ItemEdited
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

            static $changesCaster1;

            if ($changesCaster1 === null) {
                $changesCaster1 = new \ApiClients\Client\GitHub\Internal\Attribute\CastUnionToType\Schema\WebhookProjectsV2ItemEdited\Changes(...[]);
            }

            $value = $changesCaster1->cast($value, $this);

            if ($value === null) {
                                $properties['changes'] = null;
                goto after_changes;
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

            $value = $payload['projects_v2_item'] ?? null;

            if ($value === null) {
                $missingFields[] = 'projects_v2_item';
                goto after_projectsVTwoItem;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'projectsVTwoItem';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProjectsV2Item($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['projectsVTwoItem'] = $value;

            after_projectsVTwoItem:

            $value = $payload['sender'] ?? null;

            if ($value === null) {
                $missingFields[] = 'sender';
                goto after_sender;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'sender';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUserWebhooks($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['sender'] = $value;

            after_sender:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemEdited', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(WebhookProjectsV2ItemEdited::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new WebhookProjectsV2ItemEdited(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemEdited', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemReordered(array $payload): WebhookProjectsV2ItemReordered
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
                $missingFields[] = 'changes';
                goto after_changes;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'changes';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemReordered⚡️Changes($value);
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

            $value = $payload['projects_v2_item'] ?? null;

            if ($value === null) {
                $missingFields[] = 'projects_v2_item';
                goto after_projectsVTwoItem;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'projectsVTwoItem';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProjectsV2Item($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['projectsVTwoItem'] = $value;

            after_projectsVTwoItem:

            $value = $payload['sender'] ?? null;

            if ($value === null) {
                $missingFields[] = 'sender';
                goto after_sender;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'sender';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUserWebhooks($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['sender'] = $value;

            after_sender:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemReordered', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(WebhookProjectsV2ItemReordered::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new WebhookProjectsV2ItemReordered(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemReordered', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemReordered⚡️Changes(array $payload): \ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemReordered\Changes
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['previous_projects_v2_item_node_id'] ?? null;

            if ($value === null) {
                $properties['previousProjectsVTwoItemNodeId'] = null;
                goto after_previousProjectsVTwoItemNodeId;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'previousProjectsVTwoItemNodeId';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemReordered⚡️Changes⚡️PreviousProjectsVTwoItemNodeId($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['previousProjectsVTwoItemNodeId'] = $value;

            after_previousProjectsVTwoItemNodeId:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemReordered\Changes', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemReordered\Changes::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemReordered\Changes(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemReordered\Changes', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemReordered⚡️Changes⚡️PreviousProjectsVTwoItemNodeId(array $payload): PreviousProjectsVTwoItemNodeId
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
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemReordered\Changes\PreviousProjectsVTwoItemNodeId', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(PreviousProjectsVTwoItemNodeId::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new PreviousProjectsVTwoItemNodeId(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemReordered\Changes\PreviousProjectsVTwoItemNodeId', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemRestored(array $payload): WebhookProjectsV2ItemRestored
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
                $missingFields[] = 'changes';
                goto after_changes;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'changes';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhooksProjectChanges($value);
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

            $value = $payload['projects_v2_item'] ?? null;

            if ($value === null) {
                $missingFields[] = 'projects_v2_item';
                goto after_projectsVTwoItem;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'projectsVTwoItem';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProjectsV2Item($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['projectsVTwoItem'] = $value;

            after_projectsVTwoItem:

            $value = $payload['sender'] ?? null;

            if ($value === null) {
                $missingFields[] = 'sender';
                goto after_sender;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'sender';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUserWebhooks($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['sender'] = $value;

            after_sender:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemRestored', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(WebhookProjectsV2ItemRestored::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new WebhookProjectsV2ItemRestored(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemRestored', $exception, stack: $this->hydrationStack);
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
                'ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemArchived' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemArchived($object),
                'ApiClients\Client\GitHub\Schema\WebhooksProjectChanges' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhooksProjectChanges($object),
                'ApiClients\Client\GitHub\Schema\WebhooksProjectChanges\ArchivedAt' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhooksProjectChanges⚡️ArchivedAt($object),
                'ApiClients\Client\GitHub\Schema\SimpleInstallation' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleInstallation($object),
                'ApiClients\Client\GitHub\Schema\OrganizationSimpleWebhooks' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️OrganizationSimpleWebhooks($object),
                'ApiClients\Client\GitHub\Schema\ProjectsV2Item' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProjectsV2Item($object),
                'ApiClients\Client\GitHub\Schema\SimpleUser' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($object),
                'ApiClients\Client\GitHub\Schema\SimpleUserWebhooks' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUserWebhooks($object),
                'ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemConverted' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemConverted($object),
                'ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemConverted\Changes' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemConverted⚡️Changes($object),
                'ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemConverted\Changes\ContentType' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemConverted⚡️Changes⚡️ContentType($object),
                'ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemCreated' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemCreated($object),
                'ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemDeleted' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemDeleted($object),
                'ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemEdited' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemEdited($object),
                'ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemReordered' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemReordered($object),
                'ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemReordered\Changes' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemReordered⚡️Changes($object),
                'ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemReordered\Changes\PreviousProjectsVTwoItemNodeId' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemReordered⚡️Changes⚡️PreviousProjectsVTwoItemNodeId($object),
                'ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemRestored' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemRestored($object),
                default => throw new LogicException('No serialization defined for $className'),
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

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemArchived(mixed $object): mixed
    {
        assert($object instanceof WebhookProjectsV2ItemArchived);
        $result = [];

        $action                                = $object->action;
        after_action:        $result['action'] = $action;

        $changes                                 = $object->changes;
        $changes                                 = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhooksProjectChanges($changes);
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

        $projectsVTwoItem                                          = $object->projectsVTwoItem;
        $projectsVTwoItem                                          = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProjectsV2Item($projectsVTwoItem);
        after_projectsVTwoItem:        $result['projects_v2_item'] = $projectsVTwoItem;

        $sender                                = $object->sender;
        $sender                                = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUserWebhooks($sender);
        after_sender:        $result['sender'] = $sender;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhooksProjectChanges(mixed $object): mixed
    {
        assert($object instanceof WebhooksProjectChanges);
        $result = [];

        $archivedAt = $object->archivedAt;

        if ($archivedAt === null) {
            goto after_archivedAt;
        }

        $archivedAt                                     = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhooksProjectChanges⚡️ArchivedAt($archivedAt);
        after_archivedAt:        $result['archived_at'] = $archivedAt;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhooksProjectChanges⚡️ArchivedAt(mixed $object): mixed
    {
        assert($object instanceof ArchivedAt);
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

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProjectsV2Item(mixed $object): mixed
    {
        assert($object instanceof \ApiClients\Client\GitHub\Schema\ProjectsV2Item);
        $result = [];

        $id                            = $object->id;
        after_id:        $result['id'] = $id;

        $nodeId = $object->nodeId;

        if ($nodeId === null) {
            goto after_nodeId;
        }

        after_nodeId:        $result['node_id'] = $nodeId;

        $projectNodeId = $object->projectNodeId;

        if ($projectNodeId === null) {
            goto after_projectNodeId;
        }

        after_projectNodeId:        $result['project_node_id'] = $projectNodeId;

        $contentNodeId                                         = $object->contentNodeId;
        after_contentNodeId:        $result['content_node_id'] = $contentNodeId;

        $contentType                                      = $object->contentType;
        after_contentType:        $result['content_type'] = $contentType;

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

        $archivedAt = $object->archivedAt;

        if ($archivedAt === null) {
            goto after_archivedAt;
        }

        after_archivedAt:        $result['archived_at'] = $archivedAt;

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

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUserWebhooks(mixed $object): mixed
    {
        assert($object instanceof SimpleUserWebhooks);
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

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemConverted(mixed $object): mixed
    {
        assert($object instanceof WebhookProjectsV2ItemConverted);
        $result = [];

        $action                                = $object->action;
        after_action:        $result['action'] = $action;

        $changes                                 = $object->changes;
        $changes                                 = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemConverted⚡️Changes($changes);
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

        $projectsVTwoItem                                          = $object->projectsVTwoItem;
        $projectsVTwoItem                                          = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProjectsV2Item($projectsVTwoItem);
        after_projectsVTwoItem:        $result['projects_v2_item'] = $projectsVTwoItem;

        $sender                                = $object->sender;
        $sender                                = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUserWebhooks($sender);
        after_sender:        $result['sender'] = $sender;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemConverted⚡️Changes(mixed $object): mixed
    {
        assert($object instanceof Changes);
        $result = [];

        $contentType = $object->contentType;

        if ($contentType === null) {
            goto after_contentType;
        }

        $contentType                                      = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemConverted⚡️Changes⚡️ContentType($contentType);
        after_contentType:        $result['content_type'] = $contentType;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemConverted⚡️Changes⚡️ContentType(mixed $object): mixed
    {
        assert($object instanceof ContentType);
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

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemCreated(mixed $object): mixed
    {
        assert($object instanceof WebhookProjectsV2ItemCreated);
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

        $projectsVTwoItem                                          = $object->projectsVTwoItem;
        $projectsVTwoItem                                          = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProjectsV2Item($projectsVTwoItem);
        after_projectsVTwoItem:        $result['projects_v2_item'] = $projectsVTwoItem;

        $sender                                = $object->sender;
        $sender                                = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUserWebhooks($sender);
        after_sender:        $result['sender'] = $sender;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemDeleted(mixed $object): mixed
    {
        assert($object instanceof WebhookProjectsV2ItemDeleted);
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

        $projectsVTwoItem                                          = $object->projectsVTwoItem;
        $projectsVTwoItem                                          = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProjectsV2Item($projectsVTwoItem);
        after_projectsVTwoItem:        $result['projects_v2_item'] = $projectsVTwoItem;

        $sender                                = $object->sender;
        $sender                                = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUserWebhooks($sender);
        after_sender:        $result['sender'] = $sender;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemEdited(mixed $object): mixed
    {
        assert($object instanceof WebhookProjectsV2ItemEdited);
        $result = [];

        $action                                = $object->action;
        after_action:        $result['action'] = $action;

        $changes = $object->changes;

        if ($changes === null) {
            goto after_changes;
        }

        if (is_object($changes)) {
            $changes = $this->serializeObject($changes);
        }

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

        $projectsVTwoItem                                          = $object->projectsVTwoItem;
        $projectsVTwoItem                                          = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProjectsV2Item($projectsVTwoItem);
        after_projectsVTwoItem:        $result['projects_v2_item'] = $projectsVTwoItem;

        $sender                                = $object->sender;
        $sender                                = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUserWebhooks($sender);
        after_sender:        $result['sender'] = $sender;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemReordered(mixed $object): mixed
    {
        assert($object instanceof WebhookProjectsV2ItemReordered);
        $result = [];

        $action                                = $object->action;
        after_action:        $result['action'] = $action;

        $changes                                 = $object->changes;
        $changes                                 = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemReordered⚡️Changes($changes);
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

        $projectsVTwoItem                                          = $object->projectsVTwoItem;
        $projectsVTwoItem                                          = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProjectsV2Item($projectsVTwoItem);
        after_projectsVTwoItem:        $result['projects_v2_item'] = $projectsVTwoItem;

        $sender                                = $object->sender;
        $sender                                = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUserWebhooks($sender);
        after_sender:        $result['sender'] = $sender;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemReordered⚡️Changes(mixed $object): mixed
    {
        assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemReordered\Changes);
        $result = [];

        $previousProjectsVTwoItemNodeId = $object->previousProjectsVTwoItemNodeId;

        if ($previousProjectsVTwoItemNodeId === null) {
            goto after_previousProjectsVTwoItemNodeId;
        }

        $previousProjectsVTwoItemNodeId                                                           = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemReordered⚡️Changes⚡️PreviousProjectsVTwoItemNodeId($previousProjectsVTwoItemNodeId);
        after_previousProjectsVTwoItemNodeId:        $result['previous_projects_v2_item_node_id'] = $previousProjectsVTwoItemNodeId;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemReordered⚡️Changes⚡️PreviousProjectsVTwoItemNodeId(mixed $object): mixed
    {
        assert($object instanceof PreviousProjectsVTwoItemNodeId);
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

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemRestored(mixed $object): mixed
    {
        assert($object instanceof WebhookProjectsV2ItemRestored);
        $result = [];

        $action                                = $object->action;
        after_action:        $result['action'] = $action;

        $changes                                 = $object->changes;
        $changes                                 = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhooksProjectChanges($changes);
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

        $projectsVTwoItem                                          = $object->projectsVTwoItem;
        $projectsVTwoItem                                          = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProjectsV2Item($projectsVTwoItem);
        after_projectsVTwoItem:        $result['projects_v2_item'] = $projectsVTwoItem;

        $sender                                = $object->sender;
        $sender                                = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUserWebhooks($sender);
        after_sender:        $result['sender'] = $sender;

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
