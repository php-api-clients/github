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
                'ApiClients\Client\GitHub\Schema\WebhookMemberEdited\Changes\Permission' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookMemberEdited⚡️Changes⚡️Permission($payload),
                'ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemRestored' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemRestored($payload),
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
                goto after_projects_v2_item;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'projects_v2_item';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProjectsV2Item($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['projects_v2_item'] = $value;

            after_projects_v2_item:

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
                $properties['archived_at'] = null;
                goto after_archived_at;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'archived_at';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemArchived⚡️Changes⚡️ArchivedAt($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['archived_at'] = $value;

            after_archived_at:

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
                $properties['node_id'] = null;
                goto after_node_id;
            }

            $properties['node_id'] = $value;

            after_node_id:

            $value = $payload['project_node_id'] ?? null;

            if ($value === null) {
                $properties['project_node_id'] = null;
                goto after_project_node_id;
            }

            $properties['project_node_id'] = $value;

            after_project_node_id:

            $value = $payload['content_node_id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'content_node_id';
                goto after_content_node_id;
            }

            $properties['content_node_id'] = $value;

            after_content_node_id:

            $value = $payload['content_type'] ?? null;

            if ($value === null) {
                $missingFields[] = 'content_type';
                goto after_content_type;
            }

            $properties['content_type'] = $value;

            after_content_type:

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

            $value = $payload['archived_at'] ?? null;

            if ($value === null) {
                $properties['archived_at'] = null;
                goto after_archived_at;
            }

            $properties['archived_at'] = $value;

            after_archived_at:

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
                goto after_projects_v2_item;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'projects_v2_item';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProjectsV2Item($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['projects_v2_item'] = $value;

            after_projects_v2_item:

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
                $properties['content_type'] = null;
                goto after_content_type;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'content_type';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemConverted⚡️Changes⚡️ContentType($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['content_type'] = $value;

            after_content_type:

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
                goto after_projects_v2_item;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'projects_v2_item';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProjectsV2Item($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['projects_v2_item'] = $value;

            after_projects_v2_item:

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
                goto after_projects_v2_item;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'projects_v2_item';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProjectsV2Item($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['projects_v2_item'] = $value;

            after_projects_v2_item:

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
                goto after_projects_v2_item;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'projects_v2_item';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProjectsV2Item($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['projects_v2_item'] = $value;

            after_projects_v2_item:

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
                goto after_field_value;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'field_value';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemEdited⚡️Changes⚡️FieldValue($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['field_value'] = $value;

            after_field_value:

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
                $properties['field_node_id'] = null;
                goto after_field_node_id;
            }

            $properties['field_node_id'] = $value;

            after_field_node_id:

            $value = $payload['field_type'] ?? null;

            if ($value === null) {
                $properties['field_type'] = null;
                goto after_field_type;
            }

            $properties['field_type'] = $value;

            after_field_type:

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
                goto after_projects_v2_item;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'projects_v2_item';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProjectsV2Item($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['projects_v2_item'] = $value;

            after_projects_v2_item:

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
                $properties['previous_projects_v2_item_node_id'] = null;
                goto after_previous_projects_v2_item_node_id;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'previous_projects_v2_item_node_id';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookMemberEdited⚡️Changes⚡️Permission($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['previous_projects_v2_item_node_id'] = $value;

            after_previous_projects_v2_item_node_id:

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

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookMemberEdited⚡️Changes⚡️Permission(array $payload): \ApiClients\Client\GitHub\Schema\WebhookMemberEdited\Changes\Permission
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
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookMemberEdited\Changes\Permission', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookMemberEdited\Changes\Permission::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WebhookMemberEdited\Changes\Permission(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookMemberEdited\Changes\Permission', $exception, stack: $this->hydrationStack);
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
                goto after_projects_v2_item;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'projects_v2_item';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProjectsV2Item($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['projects_v2_item'] = $value;

            after_projects_v2_item:

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
            'ApiClients\Client\GitHub\Schema\WebhookMemberEdited\Changes\Permission' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookMemberEdited⚡️Changes⚡️Permission($object),
            'ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemRestored' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemRestored($object),
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

        
        $projects_v2_item = $object->projects_v2_item;
        $projects_v2_item = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProjectsV2Item($projects_v2_item);
        after_projects_v2_item:        $result['projects_v2_item'] = $projects_v2_item;

        
        $sender = $object->sender;
        $sender = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($sender);
        after_sender:        $result['sender'] = $sender;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemArchived⚡️Changes(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemArchived\Changes);
        $result = [];

        $archived_at = $object->archived_at;

        if ($archived_at === null) {
            goto after_archived_at;
        }
        $archived_at = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemArchived⚡️Changes⚡️ArchivedAt($archived_at);
        after_archived_at:        $result['archived_at'] = $archived_at;


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


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProjectsV2Item(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\ProjectsV2Item);
        $result = [];

        $id = $object->id;
        after_id:        $result['id'] = $id;

        
        $node_id = $object->node_id;

        if ($node_id === null) {
            goto after_node_id;
        }
        after_node_id:        $result['node_id'] = $node_id;

        
        $project_node_id = $object->project_node_id;

        if ($project_node_id === null) {
            goto after_project_node_id;
        }
        after_project_node_id:        $result['project_node_id'] = $project_node_id;

        
        $content_node_id = $object->content_node_id;
        after_content_node_id:        $result['content_node_id'] = $content_node_id;

        
        $content_type = $object->content_type;
        after_content_type:        $result['content_type'] = $content_type;

        
        $creator = $object->creator;

        if ($creator === null) {
            goto after_creator;
        }
        $creator = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($creator);
        after_creator:        $result['creator'] = $creator;

        
        $created_at = $object->created_at;
        after_created_at:        $result['created_at'] = $created_at;

        
        $updated_at = $object->updated_at;
        after_updated_at:        $result['updated_at'] = $updated_at;

        
        $archived_at = $object->archived_at;

        if ($archived_at === null) {
            goto after_archived_at;
        }
        after_archived_at:        $result['archived_at'] = $archived_at;


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

        
        $projects_v2_item = $object->projects_v2_item;
        $projects_v2_item = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProjectsV2Item($projects_v2_item);
        after_projects_v2_item:        $result['projects_v2_item'] = $projects_v2_item;

        
        $sender = $object->sender;
        $sender = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($sender);
        after_sender:        $result['sender'] = $sender;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemConverted⚡️Changes(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemConverted\Changes);
        $result = [];

        $content_type = $object->content_type;

        if ($content_type === null) {
            goto after_content_type;
        }
        $content_type = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemConverted⚡️Changes⚡️ContentType($content_type);
        after_content_type:        $result['content_type'] = $content_type;


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

        
        $projects_v2_item = $object->projects_v2_item;
        $projects_v2_item = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProjectsV2Item($projects_v2_item);
        after_projects_v2_item:        $result['projects_v2_item'] = $projects_v2_item;

        
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

        
        $projects_v2_item = $object->projects_v2_item;
        $projects_v2_item = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProjectsV2Item($projects_v2_item);
        after_projects_v2_item:        $result['projects_v2_item'] = $projects_v2_item;

        
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

        
        $projects_v2_item = $object->projects_v2_item;
        $projects_v2_item = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProjectsV2Item($projects_v2_item);
        after_projects_v2_item:        $result['projects_v2_item'] = $projects_v2_item;

        
        $sender = $object->sender;
        $sender = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($sender);
        after_sender:        $result['sender'] = $sender;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemEdited⚡️Changes(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemEdited\Changes);
        $result = [];

        $field_value = $object->field_value;
        $field_value = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemEdited⚡️Changes⚡️FieldValue($field_value);
        after_field_value:        $result['field_value'] = $field_value;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemEdited⚡️Changes⚡️FieldValue(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemEdited\Changes\FieldValue);
        $result = [];

        $field_node_id = $object->field_node_id;

        if ($field_node_id === null) {
            goto after_field_node_id;
        }
        after_field_node_id:        $result['field_node_id'] = $field_node_id;

        
        $field_type = $object->field_type;

        if ($field_type === null) {
            goto after_field_type;
        }
        after_field_type:        $result['field_type'] = $field_type;


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

        
        $projects_v2_item = $object->projects_v2_item;
        $projects_v2_item = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProjectsV2Item($projects_v2_item);
        after_projects_v2_item:        $result['projects_v2_item'] = $projects_v2_item;

        
        $sender = $object->sender;
        $sender = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($sender);
        after_sender:        $result['sender'] = $sender;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ItemReordered⚡️Changes(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemReordered\Changes);
        $result = [];

        $previous_projects_v2_item_node_id = $object->previous_projects_v2_item_node_id;

        if ($previous_projects_v2_item_node_id === null) {
            goto after_previous_projects_v2_item_node_id;
        }
        $previous_projects_v2_item_node_id = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookMemberEdited⚡️Changes⚡️Permission($previous_projects_v2_item_node_id);
        after_previous_projects_v2_item_node_id:        $result['previous_projects_v2_item_node_id'] = $previous_projects_v2_item_node_id;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookMemberEdited⚡️Changes⚡️Permission(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookMemberEdited\Changes\Permission);
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

        
        $projects_v2_item = $object->projects_v2_item;
        $projects_v2_item = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProjectsV2Item($projects_v2_item);
        after_projects_v2_item:        $result['projects_v2_item'] = $projects_v2_item;

        
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
