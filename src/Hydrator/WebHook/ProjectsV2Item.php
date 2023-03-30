<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Hydrator\WebHook;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class ProjectsV2Item implements ObjectMapper
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
            'ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemArchived' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemArchived($payload),
                'ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemArchived\Changes' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemArchived⚡️Changes($payload),
                'ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemArchived\Changes\ArchivedAt' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemArchived⚡️Changes⚡️ArchivedAt($payload),
                'ApiClients\Client\GitHub\Schema\SimpleInstallation' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleInstallation($payload),
                'ApiClients\Client\GitHub\Schema\OrganizationSimple' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️OrganizationSimple($payload),
                'ApiClients\Client\GitHub\Schema\ProjectsV2Item' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProjectsV2Item($payload),
                'ApiClients\Client\GitHub\Schema\SimpleUser' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($payload),
                'ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemConverted' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemConverted($payload),
                'ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemConverted\Changes' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemConverted⚡️Changes($payload),
                'ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemConverted\Changes\ContentType' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemConverted⚡️Changes⚡️ContentType($payload),
                'ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemCreated' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemCreated($payload),
                'ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemDeleted' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemDeleted($payload),
                'ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemEdited' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemEdited($payload),
                'ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemEdited\Changes' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemEdited⚡️Changes($payload),
                'ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemEdited\Changes\FieldValue' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemEdited⚡️Changes⚡️FieldValue($payload),
                'ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemReordered' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemReordered($payload),
                'ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemReordered\Changes' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemReordered⚡️Changes($payload),
                'ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemReordered\Changes\PreviousProjectsV2ItemNodeId' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemReordered⚡️Changes⚡️PreviousProjectsV2ItemNodeId($payload),
                'ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemRestored' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemRestored($payload),
                'ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemRestored\Changes' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemRestored⚡️Changes($payload),
                'ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemRestored\Changes\ArchivedAt' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemRestored⚡️Changes⚡️ArchivedAt($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemArchived(array $payload): \ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemArchived
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
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemArchived⚡️Changes($value);
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
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleInstallation($value);
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
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️OrganizationSimple($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['organization'] = $value;

            after_organization:

            $value = $payload['projects_v2_item'] ?? null;

            if ($value === null) {
                $missingFields[] = 'projects_v2_item';
                goto after_projectsV2Item;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'projectsV2Item';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProjectsV2Item($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['projectsV2Item'] = $value;

            after_projectsV2Item:

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
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemArchived', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemArchived::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemArchived(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemArchived', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemArchived⚡️Changes(array $payload): \ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemArchived\Changes
    {
        $properties = []; 
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
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemArchived⚡️Changes⚡️ArchivedAt($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['archivedAt'] = $value;

            after_archivedAt:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemArchived\Changes', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemArchived\Changes::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemArchived\Changes(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemArchived\Changes', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemArchived⚡️Changes⚡️ArchivedAt(array $payload): \ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemArchived\Changes\ArchivedAt
    {
        $properties = []; 
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

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemArchived\Changes\ArchivedAt', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemArchived\Changes\ArchivedAt::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemArchived\Changes\ArchivedAt(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemArchived\Changes\ArchivedAt', $exception, stack: $this->hydrationStack);
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

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProjectsV2Item(array $payload): \ApiClients\Client\GitHub\Schema\ProjectsV2Item
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
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($value);
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

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ProjectsV2Item', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\ProjectsV2Item::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\ProjectsV2Item(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ProjectsV2Item', $exception, stack: $this->hydrationStack);
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

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemConverted(array $payload): \ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemConverted
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
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemConverted⚡️Changes($value);
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
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleInstallation($value);
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
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️OrganizationSimple($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['organization'] = $value;

            after_organization:

            $value = $payload['projects_v2_item'] ?? null;

            if ($value === null) {
                $missingFields[] = 'projects_v2_item';
                goto after_projectsV2Item;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'projectsV2Item';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProjectsV2Item($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['projectsV2Item'] = $value;

            after_projectsV2Item:

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
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemConverted', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemConverted::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemConverted(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemConverted', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemConverted⚡️Changes(array $payload): \ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemConverted\Changes
    {
        $properties = []; 
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
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemConverted⚡️Changes⚡️ContentType($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['contentType'] = $value;

            after_contentType:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemConverted\Changes', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemConverted\Changes::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemConverted\Changes(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemConverted\Changes', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemConverted⚡️Changes⚡️ContentType(array $payload): \ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemConverted\Changes\ContentType
    {
        $properties = []; 
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

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemConverted\Changes\ContentType', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemConverted\Changes\ContentType::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemConverted\Changes\ContentType(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemConverted\Changes\ContentType', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemCreated(array $payload): \ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemCreated
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
                $missingFields[] = 'organization';
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

            $value = $payload['projects_v2_item'] ?? null;

            if ($value === null) {
                $missingFields[] = 'projects_v2_item';
                goto after_projectsV2Item;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'projectsV2Item';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProjectsV2Item($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['projectsV2Item'] = $value;

            after_projectsV2Item:

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
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemCreated', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemCreated::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemCreated(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemCreated', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemDeleted(array $payload): \ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemDeleted
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
                $missingFields[] = 'organization';
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

            $value = $payload['projects_v2_item'] ?? null;

            if ($value === null) {
                $missingFields[] = 'projects_v2_item';
                goto after_projectsV2Item;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'projectsV2Item';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProjectsV2Item($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['projectsV2Item'] = $value;

            after_projectsV2Item:

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
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemDeleted', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemDeleted::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemDeleted(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemDeleted', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemEdited(array $payload): \ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemEdited
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
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemEdited⚡️Changes($value);
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
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleInstallation($value);
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
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️OrganizationSimple($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['organization'] = $value;

            after_organization:

            $value = $payload['projects_v2_item'] ?? null;

            if ($value === null) {
                $missingFields[] = 'projects_v2_item';
                goto after_projectsV2Item;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'projectsV2Item';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProjectsV2Item($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['projectsV2Item'] = $value;

            after_projectsV2Item:

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
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemEdited', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemEdited::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemEdited(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemEdited', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemEdited⚡️Changes(array $payload): \ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemEdited\Changes
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['field_value'] ?? null;

            if ($value === null) {
                $missingFields[] = 'field_value';
                goto after_fieldValue;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'fieldValue';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemEdited⚡️Changes⚡️FieldValue($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['fieldValue'] = $value;

            after_fieldValue:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemEdited\Changes', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemEdited\Changes::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemEdited\Changes(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemEdited\Changes', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemEdited⚡️Changes⚡️FieldValue(array $payload): \ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemEdited\Changes\FieldValue
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['field_node_id'] ?? null;

            if ($value === null) {
                $properties['fieldNodeId'] = null;
                goto after_fieldNodeId;
            }

            $properties['fieldNodeId'] = $value;

            after_fieldNodeId:

            $value = $payload['field_type'] ?? null;

            if ($value === null) {
                $properties['fieldType'] = null;
                goto after_fieldType;
            }

            $properties['fieldType'] = $value;

            after_fieldType:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemEdited\Changes\FieldValue', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemEdited\Changes\FieldValue::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemEdited\Changes\FieldValue(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemEdited\Changes\FieldValue', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemReordered(array $payload): \ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemReordered
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
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemReordered⚡️Changes($value);
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
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleInstallation($value);
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
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️OrganizationSimple($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['organization'] = $value;

            after_organization:

            $value = $payload['projects_v2_item'] ?? null;

            if ($value === null) {
                $missingFields[] = 'projects_v2_item';
                goto after_projectsV2Item;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'projectsV2Item';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProjectsV2Item($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['projectsV2Item'] = $value;

            after_projectsV2Item:

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
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemReordered', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemReordered::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemReordered(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemReordered', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemReordered⚡️Changes(array $payload): \ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemReordered\Changes
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['previous_projects_v2_item_node_id'] ?? null;

            if ($value === null) {
                $properties['previousProjectsV2ItemNodeId'] = null;
                goto after_previousProjectsV2ItemNodeId;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'previousProjectsV2ItemNodeId';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemReordered⚡️Changes⚡️PreviousProjectsV2ItemNodeId($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['previousProjectsV2ItemNodeId'] = $value;

            after_previousProjectsV2ItemNodeId:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemReordered\Changes', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemReordered\Changes::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemReordered\Changes(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemReordered\Changes', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemReordered⚡️Changes⚡️PreviousProjectsV2ItemNodeId(array $payload): \ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemReordered\Changes\PreviousProjectsV2ItemNodeId
    {
        $properties = []; 
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

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemReordered\Changes\PreviousProjectsV2ItemNodeId', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemReordered\Changes\PreviousProjectsV2ItemNodeId::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemReordered\Changes\PreviousProjectsV2ItemNodeId(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemReordered\Changes\PreviousProjectsV2ItemNodeId', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemRestored(array $payload): \ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemRestored
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
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemRestored⚡️Changes($value);
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
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleInstallation($value);
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
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️OrganizationSimple($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['organization'] = $value;

            after_organization:

            $value = $payload['projects_v2_item'] ?? null;

            if ($value === null) {
                $missingFields[] = 'projects_v2_item';
                goto after_projectsV2Item;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'projectsV2Item';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProjectsV2Item($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['projectsV2Item'] = $value;

            after_projectsV2Item:

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
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemRestored', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemRestored::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemRestored(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemRestored', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemRestored⚡️Changes(array $payload): \ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemRestored\Changes
    {
        $properties = []; 
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
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemArchived⚡️Changes⚡️ArchivedAt($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['archivedAt'] = $value;

            after_archivedAt:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemRestored\Changes', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemRestored\Changes::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemRestored\Changes(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemRestored\Changes', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemRestored⚡️Changes⚡️ArchivedAt(array $payload): \ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemRestored\Changes\ArchivedAt
    {
        $properties = []; 
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

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemRestored\Changes\ArchivedAt', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemRestored\Changes\ArchivedAt::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemRestored\Changes\ArchivedAt(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemRestored\Changes\ArchivedAt', $exception, stack: $this->hydrationStack);
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
            'ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemArchived' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemArchived($object),
            'ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemArchived\Changes' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemArchived⚡️Changes($object),
            'ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemArchived\Changes\ArchivedAt' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemArchived⚡️Changes⚡️ArchivedAt($object),
            'ApiClients\Client\GitHub\Schema\SimpleInstallation' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleInstallation($object),
            'ApiClients\Client\GitHub\Schema\OrganizationSimple' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️OrganizationSimple($object),
            'ApiClients\Client\GitHub\Schema\ProjectsV2Item' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProjectsV2Item($object),
            'ApiClients\Client\GitHub\Schema\SimpleUser' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($object),
            'ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemConverted' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemConverted($object),
            'ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemConverted\Changes' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemConverted⚡️Changes($object),
            'ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemConverted\Changes\ContentType' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemConverted⚡️Changes⚡️ContentType($object),
            'ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemCreated' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemCreated($object),
            'ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemDeleted' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemDeleted($object),
            'ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemEdited' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemEdited($object),
            'ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemEdited\Changes' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemEdited⚡️Changes($object),
            'ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemEdited\Changes\FieldValue' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemEdited⚡️Changes⚡️FieldValue($object),
            'ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemReordered' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemReordered($object),
            'ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemReordered\Changes' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemReordered⚡️Changes($object),
            'ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemReordered\Changes\PreviousProjectsV2ItemNodeId' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemReordered⚡️Changes⚡️PreviousProjectsV2ItemNodeId($object),
            'ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemRestored' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemRestored($object),
            'ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemRestored\Changes' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemRestored⚡️Changes($object),
            'ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemRestored\Changes\ArchivedAt' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemRestored⚡️Changes⚡️ArchivedAt($object),
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


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemArchived(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemArchived);
        $result = [];

        $action = $object->action;
        after_action:        $result['action'] = $action;

        
        $changes = $object->changes;
        $changes = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemArchived⚡️Changes($changes);
        after_changes:        $result['changes'] = $changes;

        
        $installation = $object->installation;

        if ($installation === null) {
            goto after_installation;
        }
        $installation = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleInstallation($installation);
        after_installation:        $result['installation'] = $installation;

        
        $organization = $object->organization;
        $organization = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️OrganizationSimple($organization);
        after_organization:        $result['organization'] = $organization;

        
        $projectsV2Item = $object->projectsV2Item;
        $projectsV2Item = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProjectsV2Item($projectsV2Item);
        after_projectsV2Item:        $result['projects_v2_item'] = $projectsV2Item;

        
        $sender = $object->sender;
        $sender = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($sender);
        after_sender:        $result['sender'] = $sender;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemArchived⚡️Changes(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemArchived\Changes);
        $result = [];

        $archivedAt = $object->archivedAt;

        if ($archivedAt === null) {
            goto after_archivedAt;
        }
        $archivedAt = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemArchived⚡️Changes⚡️ArchivedAt($archivedAt);
        after_archivedAt:        $result['archived_at'] = $archivedAt;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemArchived⚡️Changes⚡️ArchivedAt(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemArchived\Changes\ArchivedAt);
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


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProjectsV2Item(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\ProjectsV2Item);
        $result = [];

        $id = $object->id;
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

        
        $contentNodeId = $object->contentNodeId;
        after_contentNodeId:        $result['content_node_id'] = $contentNodeId;

        
        $contentType = $object->contentType;
        after_contentType:        $result['content_type'] = $contentType;

        
        $creator = $object->creator;

        if ($creator === null) {
            goto after_creator;
        }
        $creator = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($creator);
        after_creator:        $result['creator'] = $creator;

        
        $createdAt = $object->createdAt;
        after_createdAt:        $result['created_at'] = $createdAt;

        
        $updatedAt = $object->updatedAt;
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


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemConverted(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemConverted);
        $result = [];

        $action = $object->action;
        after_action:        $result['action'] = $action;

        
        $changes = $object->changes;
        $changes = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemConverted⚡️Changes($changes);
        after_changes:        $result['changes'] = $changes;

        
        $installation = $object->installation;

        if ($installation === null) {
            goto after_installation;
        }
        $installation = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleInstallation($installation);
        after_installation:        $result['installation'] = $installation;

        
        $organization = $object->organization;
        $organization = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️OrganizationSimple($organization);
        after_organization:        $result['organization'] = $organization;

        
        $projectsV2Item = $object->projectsV2Item;
        $projectsV2Item = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProjectsV2Item($projectsV2Item);
        after_projectsV2Item:        $result['projects_v2_item'] = $projectsV2Item;

        
        $sender = $object->sender;
        $sender = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($sender);
        after_sender:        $result['sender'] = $sender;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemConverted⚡️Changes(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemConverted\Changes);
        $result = [];

        $contentType = $object->contentType;

        if ($contentType === null) {
            goto after_contentType;
        }
        $contentType = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemConverted⚡️Changes⚡️ContentType($contentType);
        after_contentType:        $result['content_type'] = $contentType;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemConverted⚡️Changes⚡️ContentType(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemConverted\Changes\ContentType);
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
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemCreated);
        $result = [];

        $action = $object->action;
        after_action:        $result['action'] = $action;

        
        $installation = $object->installation;

        if ($installation === null) {
            goto after_installation;
        }
        $installation = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleInstallation($installation);
        after_installation:        $result['installation'] = $installation;

        
        $organization = $object->organization;
        $organization = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️OrganizationSimple($organization);
        after_organization:        $result['organization'] = $organization;

        
        $projectsV2Item = $object->projectsV2Item;
        $projectsV2Item = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProjectsV2Item($projectsV2Item);
        after_projectsV2Item:        $result['projects_v2_item'] = $projectsV2Item;

        
        $sender = $object->sender;
        $sender = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($sender);
        after_sender:        $result['sender'] = $sender;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemDeleted(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemDeleted);
        $result = [];

        $action = $object->action;
        after_action:        $result['action'] = $action;

        
        $installation = $object->installation;

        if ($installation === null) {
            goto after_installation;
        }
        $installation = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleInstallation($installation);
        after_installation:        $result['installation'] = $installation;

        
        $organization = $object->organization;
        $organization = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️OrganizationSimple($organization);
        after_organization:        $result['organization'] = $organization;

        
        $projectsV2Item = $object->projectsV2Item;
        $projectsV2Item = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProjectsV2Item($projectsV2Item);
        after_projectsV2Item:        $result['projects_v2_item'] = $projectsV2Item;

        
        $sender = $object->sender;
        $sender = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($sender);
        after_sender:        $result['sender'] = $sender;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemEdited(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemEdited);
        $result = [];

        $action = $object->action;
        after_action:        $result['action'] = $action;

        
        $changes = $object->changes;

        if ($changes === null) {
            goto after_changes;
        }
        $changes = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemEdited⚡️Changes($changes);
        after_changes:        $result['changes'] = $changes;

        
        $installation = $object->installation;

        if ($installation === null) {
            goto after_installation;
        }
        $installation = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleInstallation($installation);
        after_installation:        $result['installation'] = $installation;

        
        $organization = $object->organization;
        $organization = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️OrganizationSimple($organization);
        after_organization:        $result['organization'] = $organization;

        
        $projectsV2Item = $object->projectsV2Item;
        $projectsV2Item = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProjectsV2Item($projectsV2Item);
        after_projectsV2Item:        $result['projects_v2_item'] = $projectsV2Item;

        
        $sender = $object->sender;
        $sender = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($sender);
        after_sender:        $result['sender'] = $sender;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemEdited⚡️Changes(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemEdited\Changes);
        $result = [];

        $fieldValue = $object->fieldValue;
        $fieldValue = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemEdited⚡️Changes⚡️FieldValue($fieldValue);
        after_fieldValue:        $result['field_value'] = $fieldValue;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemEdited⚡️Changes⚡️FieldValue(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemEdited\Changes\FieldValue);
        $result = [];

        $fieldNodeId = $object->fieldNodeId;

        if ($fieldNodeId === null) {
            goto after_fieldNodeId;
        }
        after_fieldNodeId:        $result['field_node_id'] = $fieldNodeId;

        
        $fieldType = $object->fieldType;

        if ($fieldType === null) {
            goto after_fieldType;
        }
        after_fieldType:        $result['field_type'] = $fieldType;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemReordered(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemReordered);
        $result = [];

        $action = $object->action;
        after_action:        $result['action'] = $action;

        
        $changes = $object->changes;
        $changes = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemReordered⚡️Changes($changes);
        after_changes:        $result['changes'] = $changes;

        
        $installation = $object->installation;

        if ($installation === null) {
            goto after_installation;
        }
        $installation = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleInstallation($installation);
        after_installation:        $result['installation'] = $installation;

        
        $organization = $object->organization;
        $organization = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️OrganizationSimple($organization);
        after_organization:        $result['organization'] = $organization;

        
        $projectsV2Item = $object->projectsV2Item;
        $projectsV2Item = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProjectsV2Item($projectsV2Item);
        after_projectsV2Item:        $result['projects_v2_item'] = $projectsV2Item;

        
        $sender = $object->sender;
        $sender = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($sender);
        after_sender:        $result['sender'] = $sender;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemReordered⚡️Changes(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemReordered\Changes);
        $result = [];

        $previousProjectsV2ItemNodeId = $object->previousProjectsV2ItemNodeId;

        if ($previousProjectsV2ItemNodeId === null) {
            goto after_previousProjectsV2ItemNodeId;
        }
        $previousProjectsV2ItemNodeId = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemReordered⚡️Changes⚡️PreviousProjectsV2ItemNodeId($previousProjectsV2ItemNodeId);
        after_previousProjectsV2ItemNodeId:        $result['previous_projects_v2_item_node_id'] = $previousProjectsV2ItemNodeId;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemReordered⚡️Changes⚡️PreviousProjectsV2ItemNodeId(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemReordered\Changes\PreviousProjectsV2ItemNodeId);
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
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemRestored);
        $result = [];

        $action = $object->action;
        after_action:        $result['action'] = $action;

        
        $changes = $object->changes;
        $changes = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemRestored⚡️Changes($changes);
        after_changes:        $result['changes'] = $changes;

        
        $installation = $object->installation;

        if ($installation === null) {
            goto after_installation;
        }
        $installation = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleInstallation($installation);
        after_installation:        $result['installation'] = $installation;

        
        $organization = $object->organization;
        $organization = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️OrganizationSimple($organization);
        after_organization:        $result['organization'] = $organization;

        
        $projectsV2Item = $object->projectsV2Item;
        $projectsV2Item = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProjectsV2Item($projectsV2Item);
        after_projectsV2Item:        $result['projects_v2_item'] = $projectsV2Item;

        
        $sender = $object->sender;
        $sender = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($sender);
        after_sender:        $result['sender'] = $sender;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemRestored⚡️Changes(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemRestored\Changes);
        $result = [];

        $archivedAt = $object->archivedAt;

        if ($archivedAt === null) {
            goto after_archivedAt;
        }
        $archivedAt = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemArchived⚡️Changes⚡️ArchivedAt($archivedAt);
        after_archivedAt:        $result['archived_at'] = $archivedAt;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemRestored⚡️Changes⚡️ArchivedAt(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemRestored\Changes\ArchivedAt);
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
