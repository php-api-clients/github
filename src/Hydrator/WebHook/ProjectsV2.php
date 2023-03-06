<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Hydrator\WebHook;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class ProjectsV2 implements ObjectMapper
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
            'ApiClients\Client\GitHub\Schema\WebhookProjectsV2ProjectClosed' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ProjectClosed($payload),
                'ApiClients\Client\GitHub\Schema\OrganizationSimple' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️OrganizationSimple($payload),
                'ApiClients\Client\GitHub\Schema\ProjectsV2' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProjectsV2($payload),
                'ApiClients\Client\GitHub\Schema\SimpleUser' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($payload),
                'ApiClients\Client\GitHub\Schema\WebhookProjectsV2ProjectCreated' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ProjectCreated($payload),
                'ApiClients\Client\GitHub\Schema\WebhookProjectsV2ProjectEdited' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ProjectEdited($payload),
                'ApiClients\Client\GitHub\Schema\WebhookProjectsV2ProjectEdited\Changes' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ProjectEdited⚡️Changes($payload),
                'ApiClients\Client\GitHub\Schema\WebhookMemberEdited\Changes\Permission' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookMemberEdited⚡️Changes⚡️Permission($payload),
                'ApiClients\Client\GitHub\Schema\WebhookProjectsV2ProjectEdited\Changes\Public_' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ProjectEdited⚡️Changes⚡️Public_($payload),
                'ApiClients\Client\GitHub\Schema\WebhookProjectsV2ProjectEdited\Changes\Title' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ProjectEdited⚡️Changes⚡️Title($payload),
                'ApiClients\Client\GitHub\Schema\WebhookProjectsV2ProjectReopened' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ProjectReopened($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ProjectClosed(array $payload): \ApiClients\Client\GitHub\Schema\WebhookProjectsV2ProjectClosed
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['action'] ?? null;
    
                if ($value === null) {
                    $properties['action'] = null;
                    goto after_action;
                }

                $properties['action'] = $value;
    
                after_action:

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

                $value = $payload['projects_v2'] ?? null;
    
                if ($value === null) {
                    $properties['projects_v2'] = null;
                    goto after_projects_v2;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'projects_v2';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProjectsV2($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['projects_v2'] = $value;
    
                after_projects_v2:

                $value = $payload['sender'] ?? null;
    
                if ($value === null) {
                    $properties['sender'] = null;
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
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookProjectsV2ProjectClosed', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookProjectsV2ProjectClosed::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\WebhookProjectsV2ProjectClosed(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookProjectsV2ProjectClosed', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️OrganizationSimple(array $payload): \ApiClients\Client\GitHub\Schema\OrganizationSimple
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

                $value = $payload['url'] ?? null;
    
                if ($value === null) {
                    $properties['url'] = null;
                    goto after_url;
                }

                $properties['url'] = $value;
    
                after_url:

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

                $value = $payload['hooks_url'] ?? null;
    
                if ($value === null) {
                    $properties['hooks_url'] = null;
                    goto after_hooks_url;
                }

                $properties['hooks_url'] = $value;
    
                after_hooks_url:

                $value = $payload['issues_url'] ?? null;
    
                if ($value === null) {
                    $properties['issues_url'] = null;
                    goto after_issues_url;
                }

                $properties['issues_url'] = $value;
    
                after_issues_url:

                $value = $payload['members_url'] ?? null;
    
                if ($value === null) {
                    $properties['members_url'] = null;
                    goto after_members_url;
                }

                $properties['members_url'] = $value;
    
                after_members_url:

                $value = $payload['public_members_url'] ?? null;
    
                if ($value === null) {
                    $properties['public_members_url'] = null;
                    goto after_public_members_url;
                }

                $properties['public_members_url'] = $value;
    
                after_public_members_url:

                $value = $payload['avatar_url'] ?? null;
    
                if ($value === null) {
                    $properties['avatar_url'] = null;
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

        
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProjectsV2(array $payload): \ApiClients\Client\GitHub\Schema\ProjectsV2
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

                $value = $payload['owner'] ?? null;
    
                if ($value === null) {
                    $properties['owner'] = null;
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

                $value = $payload['title'] ?? null;
    
                if ($value === null) {
                    $properties['title'] = null;
                    goto after_title;
                }

                $properties['title'] = $value;
    
                after_title:

                $value = $payload['description'] ?? null;
    
                if ($value === null) {
                    $properties['description'] = null;
                    goto after_description;
                }

                $properties['description'] = $value;
    
                after_description:

                $value = $payload['public'] ?? null;
    
                if ($value === null) {
                    $properties['public'] = null;
                    goto after_public;
                }

                $properties['public'] = $value;
    
                after_public:

                $value = $payload['closed_at'] ?? null;
    
                if ($value === null) {
                    $properties['closed_at'] = null;
                    goto after_closed_at;
                }

                $properties['closed_at'] = $value;
    
                after_closed_at:

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

                $value = $payload['number'] ?? null;
    
                if ($value === null) {
                    $properties['number'] = null;
                    goto after_number;
                }

                $properties['number'] = $value;
    
                after_number:

                $value = $payload['short_description'] ?? null;
    
                if ($value === null) {
                    $properties['short_description'] = null;
                    goto after_short_description;
                }

                $properties['short_description'] = $value;
    
                after_short_description:

                $value = $payload['deleted_at'] ?? null;
    
                if ($value === null) {
                    $properties['deleted_at'] = null;
                    goto after_deleted_at;
                }

                $properties['deleted_at'] = $value;
    
                after_deleted_at:

                $value = $payload['deleted_by'] ?? null;
    
                if ($value === null) {
                    $properties['deleted_by'] = null;
                    goto after_deleted_by;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'deleted_by';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['deleted_by'] = $value;
    
                after_deleted_by:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ProjectsV2', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\ProjectsV2::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\ProjectsV2(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ProjectsV2', $exception, stack: $this->hydrationStack);
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

                $value = $payload['starred_at'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'starred_at';
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

        
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ProjectCreated(array $payload): \ApiClients\Client\GitHub\Schema\WebhookProjectsV2ProjectCreated
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['action'] ?? null;
    
                if ($value === null) {
                    $properties['action'] = null;
                    goto after_action;
                }

                $properties['action'] = $value;
    
                after_action:

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

                $value = $payload['projects_v2'] ?? null;
    
                if ($value === null) {
                    $properties['projects_v2'] = null;
                    goto after_projects_v2;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'projects_v2';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProjectsV2($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['projects_v2'] = $value;
    
                after_projects_v2:

                $value = $payload['sender'] ?? null;
    
                if ($value === null) {
                    $properties['sender'] = null;
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
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookProjectsV2ProjectCreated', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookProjectsV2ProjectCreated::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\WebhookProjectsV2ProjectCreated(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookProjectsV2ProjectCreated', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ProjectEdited(array $payload): \ApiClients\Client\GitHub\Schema\WebhookProjectsV2ProjectEdited
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['action'] ?? null;
    
                if ($value === null) {
                    $properties['action'] = null;
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
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ProjectEdited⚡️Changes($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['changes'] = $value;
    
                after_changes:

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

                $value = $payload['projects_v2'] ?? null;
    
                if ($value === null) {
                    $properties['projects_v2'] = null;
                    goto after_projects_v2;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'projects_v2';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProjectsV2($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['projects_v2'] = $value;
    
                after_projects_v2:

                $value = $payload['sender'] ?? null;
    
                if ($value === null) {
                    $properties['sender'] = null;
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
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookProjectsV2ProjectEdited', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookProjectsV2ProjectEdited::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\WebhookProjectsV2ProjectEdited(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookProjectsV2ProjectEdited', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ProjectEdited⚡️Changes(array $payload): \ApiClients\Client\GitHub\Schema\WebhookProjectsV2ProjectEdited\Changes
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['description'] ?? null;
    
                if ($value === null) {
                    $properties['description'] = null;
                    goto after_description;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'description';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookMemberEdited⚡️Changes⚡️Permission($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['description'] = $value;
    
                after_description:

                $value = $payload['public'] ?? null;
    
                if ($value === null) {
                    $properties['public'] = null;
                    goto after_public;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'public';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ProjectEdited⚡️Changes⚡️Public_($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['public'] = $value;
    
                after_public:

                $value = $payload['short_description'] ?? null;
    
                if ($value === null) {
                    $properties['short_description'] = null;
                    goto after_short_description;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'short_description';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookMemberEdited⚡️Changes⚡️Permission($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['short_description'] = $value;
    
                after_short_description:

                $value = $payload['title'] ?? null;
    
                if ($value === null) {
                    $properties['title'] = null;
                    goto after_title;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'title';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ProjectEdited⚡️Changes⚡️Title($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['title'] = $value;
    
                after_title:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookProjectsV2ProjectEdited\Changes', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookProjectsV2ProjectEdited\Changes::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\WebhookProjectsV2ProjectEdited\Changes(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookProjectsV2ProjectEdited\Changes', $exception, stack: $this->hydrationStack);
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

        
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ProjectEdited⚡️Changes⚡️Public_(array $payload): \ApiClients\Client\GitHub\Schema\WebhookProjectsV2ProjectEdited\Changes\Public_
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
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookProjectsV2ProjectEdited\Changes\Public_', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookProjectsV2ProjectEdited\Changes\Public_::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\WebhookProjectsV2ProjectEdited\Changes\Public_(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookProjectsV2ProjectEdited\Changes\Public_', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ProjectEdited⚡️Changes⚡️Title(array $payload): \ApiClients\Client\GitHub\Schema\WebhookProjectsV2ProjectEdited\Changes\Title
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
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookProjectsV2ProjectEdited\Changes\Title', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookProjectsV2ProjectEdited\Changes\Title::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\WebhookProjectsV2ProjectEdited\Changes\Title(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookProjectsV2ProjectEdited\Changes\Title', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ProjectReopened(array $payload): \ApiClients\Client\GitHub\Schema\WebhookProjectsV2ProjectReopened
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['action'] ?? null;
    
                if ($value === null) {
                    $properties['action'] = null;
                    goto after_action;
                }

                $properties['action'] = $value;
    
                after_action:

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

                $value = $payload['projects_v2'] ?? null;
    
                if ($value === null) {
                    $properties['projects_v2'] = null;
                    goto after_projects_v2;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'projects_v2';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProjectsV2($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['projects_v2'] = $value;
    
                after_projects_v2:

                $value = $payload['sender'] ?? null;
    
                if ($value === null) {
                    $properties['sender'] = null;
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
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookProjectsV2ProjectReopened', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookProjectsV2ProjectReopened::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\WebhookProjectsV2ProjectReopened(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookProjectsV2ProjectReopened', $exception, stack: $this->hydrationStack);
            }
        }
    
    public function serializeObject(object $object): mixed
    {
        try {
            $className = get_class($object);

            return match($className) {
                'array' => $this->serializeValuearray($object),
                'Ramsey\Uuid\UuidInterface' => $this->serializeValueRamsey⚡️Uuid⚡️UuidInterface($object),
                'DateTime' => $this->serializeValueDateTime($object),
                'DateTimeImmutable' => $this->serializeValueDateTimeImmutable($object),
                'DateTimeInterface' => $this->serializeValueDateTimeInterface($object),
                'ApiClients\Client\GitHub\Schema\WebhookProjectsV2ProjectClosed' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ProjectClosed($object),
                'ApiClients\Client\GitHub\Schema\OrganizationSimple' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️OrganizationSimple($object),
                'ApiClients\Client\GitHub\Schema\ProjectsV2' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProjectsV2($object),
                'ApiClients\Client\GitHub\Schema\SimpleUser' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($object),
                'ApiClients\Client\GitHub\Schema\WebhookProjectsV2ProjectCreated' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ProjectCreated($object),
                'ApiClients\Client\GitHub\Schema\WebhookProjectsV2ProjectEdited' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ProjectEdited($object),
                'ApiClients\Client\GitHub\Schema\WebhookProjectsV2ProjectEdited\Changes' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ProjectEdited⚡️Changes($object),
                'ApiClients\Client\GitHub\Schema\WebhookMemberEdited\Changes\Permission' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookMemberEdited⚡️Changes⚡️Permission($object),
                'ApiClients\Client\GitHub\Schema\WebhookProjectsV2ProjectEdited\Changes\Public_' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ProjectEdited⚡️Changes⚡️Public_($object),
                'ApiClients\Client\GitHub\Schema\WebhookProjectsV2ProjectEdited\Changes\Title' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ProjectEdited⚡️Changes⚡️Title($object),
                'ApiClients\Client\GitHub\Schema\WebhookProjectsV2ProjectReopened' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ProjectReopened($object),
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

    
    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ProjectClosed(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookProjectsV2ProjectClosed);
        $result = [];
        
        $action = $object->action;

        if ($action === null) {
            goto after_action;
        }
        after_action:        $result['action'] = $action;

        
        $organization = $object->organization;

        if ($organization === null) {
            goto after_organization;
        }
        $organization = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️OrganizationSimple($organization);
        after_organization:        $result['organization'] = $organization;

        
        $projects_v2 = $object->projects_v2;

        if ($projects_v2 === null) {
            goto after_projects_v2;
        }
        $projects_v2 = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProjectsV2($projects_v2);
        after_projects_v2:        $result['projects_v2'] = $projects_v2;

        
        $sender = $object->sender;

        if ($sender === null) {
            goto after_sender;
        }
        $sender = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($sender);
        after_sender:        $result['sender'] = $sender;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️OrganizationSimple(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\OrganizationSimple);
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

        
        $url = $object->url;

        if ($url === null) {
            goto after_url;
        }
        after_url:        $result['url'] = $url;

        
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

        
        $hooks_url = $object->hooks_url;

        if ($hooks_url === null) {
            goto after_hooks_url;
        }
        after_hooks_url:        $result['hooks_url'] = $hooks_url;

        
        $issues_url = $object->issues_url;

        if ($issues_url === null) {
            goto after_issues_url;
        }
        after_issues_url:        $result['issues_url'] = $issues_url;

        
        $members_url = $object->members_url;

        if ($members_url === null) {
            goto after_members_url;
        }
        after_members_url:        $result['members_url'] = $members_url;

        
        $public_members_url = $object->public_members_url;

        if ($public_members_url === null) {
            goto after_public_members_url;
        }
        after_public_members_url:        $result['public_members_url'] = $public_members_url;

        
        $avatar_url = $object->avatar_url;

        if ($avatar_url === null) {
            goto after_avatar_url;
        }
        after_avatar_url:        $result['avatar_url'] = $avatar_url;

        
        $description = $object->description;

        if ($description === null) {
            goto after_description;
        }
        after_description:        $result['description'] = $description;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProjectsV2(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\ProjectsV2);
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

        
        $owner = $object->owner;

        if ($owner === null) {
            goto after_owner;
        }
        $owner = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($owner);
        after_owner:        $result['owner'] = $owner;

        
        $creator = $object->creator;

        if ($creator === null) {
            goto after_creator;
        }
        $creator = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($creator);
        after_creator:        $result['creator'] = $creator;

        
        $title = $object->title;

        if ($title === null) {
            goto after_title;
        }
        after_title:        $result['title'] = $title;

        
        $description = $object->description;

        if ($description === null) {
            goto after_description;
        }
        after_description:        $result['description'] = $description;

        
        $public = $object->public;

        if ($public === null) {
            goto after_public;
        }
        after_public:        $result['public'] = $public;

        
        $closed_at = $object->closed_at;

        if ($closed_at === null) {
            goto after_closed_at;
        }
        after_closed_at:        $result['closed_at'] = $closed_at;

        
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

        
        $number = $object->number;

        if ($number === null) {
            goto after_number;
        }
        after_number:        $result['number'] = $number;

        
        $short_description = $object->short_description;

        if ($short_description === null) {
            goto after_short_description;
        }
        after_short_description:        $result['short_description'] = $short_description;

        
        $deleted_at = $object->deleted_at;

        if ($deleted_at === null) {
            goto after_deleted_at;
        }
        after_deleted_at:        $result['deleted_at'] = $deleted_at;

        
        $deleted_by = $object->deleted_by;

        if ($deleted_by === null) {
            goto after_deleted_by;
        }
        $deleted_by = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($deleted_by);
        after_deleted_by:        $result['deleted_by'] = $deleted_by;


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

        
        $starred_at = $object->starred_at;
        after_starred_at:        $result['starred_at'] = $starred_at;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ProjectCreated(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookProjectsV2ProjectCreated);
        $result = [];
        
        $action = $object->action;

        if ($action === null) {
            goto after_action;
        }
        after_action:        $result['action'] = $action;

        
        $organization = $object->organization;

        if ($organization === null) {
            goto after_organization;
        }
        $organization = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️OrganizationSimple($organization);
        after_organization:        $result['organization'] = $organization;

        
        $projects_v2 = $object->projects_v2;

        if ($projects_v2 === null) {
            goto after_projects_v2;
        }
        $projects_v2 = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProjectsV2($projects_v2);
        after_projects_v2:        $result['projects_v2'] = $projects_v2;

        
        $sender = $object->sender;

        if ($sender === null) {
            goto after_sender;
        }
        $sender = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($sender);
        after_sender:        $result['sender'] = $sender;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ProjectEdited(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookProjectsV2ProjectEdited);
        $result = [];
        
        $action = $object->action;

        if ($action === null) {
            goto after_action;
        }
        after_action:        $result['action'] = $action;

        
        $changes = $object->changes;

        if ($changes === null) {
            goto after_changes;
        }
        $changes = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ProjectEdited⚡️Changes($changes);
        after_changes:        $result['changes'] = $changes;

        
        $organization = $object->organization;

        if ($organization === null) {
            goto after_organization;
        }
        $organization = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️OrganizationSimple($organization);
        after_organization:        $result['organization'] = $organization;

        
        $projects_v2 = $object->projects_v2;

        if ($projects_v2 === null) {
            goto after_projects_v2;
        }
        $projects_v2 = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProjectsV2($projects_v2);
        after_projects_v2:        $result['projects_v2'] = $projects_v2;

        
        $sender = $object->sender;

        if ($sender === null) {
            goto after_sender;
        }
        $sender = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($sender);
        after_sender:        $result['sender'] = $sender;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ProjectEdited⚡️Changes(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookProjectsV2ProjectEdited\Changes);
        $result = [];
        
        $description = $object->description;

        if ($description === null) {
            goto after_description;
        }
        $description = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookMemberEdited⚡️Changes⚡️Permission($description);
        after_description:        $result['description'] = $description;

        
        $public = $object->public;

        if ($public === null) {
            goto after_public;
        }
        $public = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ProjectEdited⚡️Changes⚡️Public_($public);
        after_public:        $result['public'] = $public;

        
        $short_description = $object->short_description;

        if ($short_description === null) {
            goto after_short_description;
        }
        $short_description = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookMemberEdited⚡️Changes⚡️Permission($short_description);
        after_short_description:        $result['short_description'] = $short_description;

        
        $title = $object->title;

        if ($title === null) {
            goto after_title;
        }
        $title = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ProjectEdited⚡️Changes⚡️Title($title);
        after_title:        $result['title'] = $title;


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

    
    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ProjectEdited⚡️Changes⚡️Public_(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookProjectsV2ProjectEdited\Changes\Public_);
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

    
    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ProjectEdited⚡️Changes⚡️Title(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookProjectsV2ProjectEdited\Changes\Title);
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

    
    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookProjectsV2ProjectReopened(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookProjectsV2ProjectReopened);
        $result = [];
        
        $action = $object->action;

        if ($action === null) {
            goto after_action;
        }
        after_action:        $result['action'] = $action;

        
        $organization = $object->organization;

        if ($organization === null) {
            goto after_organization;
        }
        $organization = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️OrganizationSimple($organization);
        after_organization:        $result['organization'] = $organization;

        
        $projects_v2 = $object->projects_v2;

        if ($projects_v2 === null) {
            goto after_projects_v2;
        }
        $projects_v2 = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProjectsV2($projects_v2);
        after_projects_v2:        $result['projects_v2'] = $projects_v2;

        
        $sender = $object->sender;

        if ($sender === null) {
            goto after_sender;
        }
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
