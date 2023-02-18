<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Hydrator\Operation\Teams;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class CbTeamIdRcb implements ObjectMapper
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
            'ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamFull' => $this->hydrateApiClients⚡️Client⚡️Github⚡️OpenAPI⚡️ApiGitHubCom⚡️Schema⚡️TeamFull($payload),
                'ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError' => $this->hydrateApiClients⚡️Client⚡️Github⚡️OpenAPI⚡️ApiGitHubCom⚡️Schema⚡️BasicError($payload),
                'ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError' => $this->hydrateApiClients⚡️Client⚡️Github⚡️OpenAPI⚡️ApiGitHubCom⚡️Schema⚡️ValidationError($payload),
                'ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamOrganization' => $this->hydrateApiClients⚡️Client⚡️Github⚡️OpenAPI⚡️ApiGitHubCom⚡️Schema⚡️TeamOrganization($payload),
                'ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\OrganizationFull\Plan' => $this->hydrateApiClients⚡️Client⚡️Github⚡️OpenAPI⚡️ApiGitHubCom⚡️Schema⚡️OrganizationFull⚡️Plan($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
        private function hydrateApiClients⚡️Client⚡️Github⚡️OpenAPI⚡️ApiGitHubCom⚡️Schema⚡️TeamFull(array $payload): \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamFull
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

                $value = $payload['description'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'description';
                    goto after_description;
                }

                $properties['description'] = $value;
    
                after_description:

                $value = $payload['privacy'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'privacy';
                    goto after_privacy;
                }

                $properties['privacy'] = $value;
    
                after_privacy:

                $value = $payload['permission'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'permission';
                    goto after_permission;
                }

                $properties['permission'] = $value;
    
                after_permission:

                $value = $payload['members_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'members_url';
                    goto after_members_url;
                }

                $properties['members_url'] = $value;
    
                after_members_url:

                $value = $payload['repositories_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'repositories_url';
                    goto after_repositories_url;
                }

                $properties['repositories_url'] = $value;
    
                after_repositories_url:

                $value = $payload['parent'] ?? null;
    
                if ($value === null) {
                    $properties['parent'] = null;
                    goto after_parent;
                }

                $properties['parent'] = $value;
    
                after_parent:

                $value = $payload['members_count'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'members_count';
                    goto after_members_count;
                }

                $properties['members_count'] = $value;
    
                after_members_count:

                $value = $payload['repos_count'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'repos_count';
                    goto after_repos_count;
                }

                $properties['repos_count'] = $value;
    
                after_repos_count:

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

                $value = $payload['organization'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'organization';
                    goto after_organization;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'organization';
                        $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️OpenAPI⚡️ApiGitHubCom⚡️Schema⚡️TeamOrganization($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['organization'] = $value;
    
                after_organization:

                $value = $payload['ldap_dn'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'ldap_dn';
                    goto after_ldap_dn;
                }

                $properties['ldap_dn'] = $value;
    
                after_ldap_dn:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamFull', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamFull::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamFull(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamFull', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️Github⚡️OpenAPI⚡️ApiGitHubCom⚡️Schema⚡️BasicError(array $payload): \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['message'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'message';
                    goto after_message;
                }

                $properties['message'] = $value;
    
                after_message:

                $value = $payload['documentation_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'documentation_url';
                    goto after_documentation_url;
                }

                $properties['documentation_url'] = $value;
    
                after_documentation_url:

                $value = $payload['url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'url';
                    goto after_url;
                }

                $properties['url'] = $value;
    
                after_url:

                $value = $payload['status'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'status';
                    goto after_status;
                }

                $properties['status'] = $value;
    
                after_status:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️Github⚡️OpenAPI⚡️ApiGitHubCom⚡️Schema⚡️ValidationError(array $payload): \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['message'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'message';
                    goto after_message;
                }

                $properties['message'] = $value;
    
                after_message:

                $value = $payload['documentation_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'documentation_url';
                    goto after_documentation_url;
                }

                $properties['documentation_url'] = $value;
    
                after_documentation_url:

                $value = $payload['errors'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'errors';
                    goto after_errors;
                }

                $properties['errors'] = $value;
    
                after_errors:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️Github⚡️OpenAPI⚡️ApiGitHubCom⚡️Schema⚡️TeamOrganization(array $payload): \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamOrganization
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
                    $missingFields[] = 'description';
                    goto after_description;
                }

                $properties['description'] = $value;
    
                after_description:

                $value = $payload['name'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'name';
                    goto after_name;
                }

                $properties['name'] = $value;
    
                after_name:

                $value = $payload['company'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'company';
                    goto after_company;
                }

                $properties['company'] = $value;
    
                after_company:

                $value = $payload['blog'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'blog';
                    goto after_blog;
                }

                $properties['blog'] = $value;
    
                after_blog:

                $value = $payload['location'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'location';
                    goto after_location;
                }

                $properties['location'] = $value;
    
                after_location:

                $value = $payload['email'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'email';
                    goto after_email;
                }

                $properties['email'] = $value;
    
                after_email:

                $value = $payload['twitter_username'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'twitter_username';
                    goto after_twitter_username;
                }

                $properties['twitter_username'] = $value;
    
                after_twitter_username:

                $value = $payload['is_verified'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'is_verified';
                    goto after_is_verified;
                }

                $properties['is_verified'] = $value;
    
                after_is_verified:

                $value = $payload['has_organization_projects'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'has_organization_projects';
                    goto after_has_organization_projects;
                }

                $properties['has_organization_projects'] = $value;
    
                after_has_organization_projects:

                $value = $payload['has_repository_projects'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'has_repository_projects';
                    goto after_has_repository_projects;
                }

                $properties['has_repository_projects'] = $value;
    
                after_has_repository_projects:

                $value = $payload['public_repos'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'public_repos';
                    goto after_public_repos;
                }

                $properties['public_repos'] = $value;
    
                after_public_repos:

                $value = $payload['public_gists'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'public_gists';
                    goto after_public_gists;
                }

                $properties['public_gists'] = $value;
    
                after_public_gists:

                $value = $payload['followers'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'followers';
                    goto after_followers;
                }

                $properties['followers'] = $value;
    
                after_followers:

                $value = $payload['following'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'following';
                    goto after_following;
                }

                $properties['following'] = $value;
    
                after_following:

                $value = $payload['html_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'html_url';
                    goto after_html_url;
                }

                $properties['html_url'] = $value;
    
                after_html_url:

                $value = $payload['created_at'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'created_at';
                    goto after_created_at;
                }

                $properties['created_at'] = $value;
    
                after_created_at:

                $value = $payload['type'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'type';
                    goto after_type;
                }

                $properties['type'] = $value;
    
                after_type:

                $value = $payload['total_private_repos'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'total_private_repos';
                    goto after_total_private_repos;
                }

                $properties['total_private_repos'] = $value;
    
                after_total_private_repos:

                $value = $payload['owned_private_repos'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'owned_private_repos';
                    goto after_owned_private_repos;
                }

                $properties['owned_private_repos'] = $value;
    
                after_owned_private_repos:

                $value = $payload['private_gists'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'private_gists';
                    goto after_private_gists;
                }

                $properties['private_gists'] = $value;
    
                after_private_gists:

                $value = $payload['disk_usage'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'disk_usage';
                    goto after_disk_usage;
                }

                $properties['disk_usage'] = $value;
    
                after_disk_usage:

                $value = $payload['collaborators'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'collaborators';
                    goto after_collaborators;
                }

                $properties['collaborators'] = $value;
    
                after_collaborators:

                $value = $payload['billing_email'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'billing_email';
                    goto after_billing_email;
                }

                $properties['billing_email'] = $value;
    
                after_billing_email:

                $value = $payload['plan'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'plan';
                    goto after_plan;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'plan';
                        $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️OpenAPI⚡️ApiGitHubCom⚡️Schema⚡️OrganizationFull⚡️Plan($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['plan'] = $value;
    
                after_plan:

                $value = $payload['default_repository_permission'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'default_repository_permission';
                    goto after_default_repository_permission;
                }

                $properties['default_repository_permission'] = $value;
    
                after_default_repository_permission:

                $value = $payload['members_can_create_repositories'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'members_can_create_repositories';
                    goto after_members_can_create_repositories;
                }

                $properties['members_can_create_repositories'] = $value;
    
                after_members_can_create_repositories:

                $value = $payload['two_factor_requirement_enabled'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'two_factor_requirement_enabled';
                    goto after_two_factor_requirement_enabled;
                }

                $properties['two_factor_requirement_enabled'] = $value;
    
                after_two_factor_requirement_enabled:

                $value = $payload['members_allowed_repository_creation_type'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'members_allowed_repository_creation_type';
                    goto after_members_allowed_repository_creation_type;
                }

                $properties['members_allowed_repository_creation_type'] = $value;
    
                after_members_allowed_repository_creation_type:

                $value = $payload['members_can_create_public_repositories'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'members_can_create_public_repositories';
                    goto after_members_can_create_public_repositories;
                }

                $properties['members_can_create_public_repositories'] = $value;
    
                after_members_can_create_public_repositories:

                $value = $payload['members_can_create_private_repositories'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'members_can_create_private_repositories';
                    goto after_members_can_create_private_repositories;
                }

                $properties['members_can_create_private_repositories'] = $value;
    
                after_members_can_create_private_repositories:

                $value = $payload['members_can_create_internal_repositories'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'members_can_create_internal_repositories';
                    goto after_members_can_create_internal_repositories;
                }

                $properties['members_can_create_internal_repositories'] = $value;
    
                after_members_can_create_internal_repositories:

                $value = $payload['members_can_create_pages'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'members_can_create_pages';
                    goto after_members_can_create_pages;
                }

                $properties['members_can_create_pages'] = $value;
    
                after_members_can_create_pages:

                $value = $payload['members_can_create_public_pages'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'members_can_create_public_pages';
                    goto after_members_can_create_public_pages;
                }

                $properties['members_can_create_public_pages'] = $value;
    
                after_members_can_create_public_pages:

                $value = $payload['members_can_create_private_pages'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'members_can_create_private_pages';
                    goto after_members_can_create_private_pages;
                }

                $properties['members_can_create_private_pages'] = $value;
    
                after_members_can_create_private_pages:

                $value = $payload['members_can_fork_private_repositories'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'members_can_fork_private_repositories';
                    goto after_members_can_fork_private_repositories;
                }

                $properties['members_can_fork_private_repositories'] = $value;
    
                after_members_can_fork_private_repositories:

                $value = $payload['web_commit_signoff_required'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'web_commit_signoff_required';
                    goto after_web_commit_signoff_required;
                }

                $properties['web_commit_signoff_required'] = $value;
    
                after_web_commit_signoff_required:

                $value = $payload['updated_at'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'updated_at';
                    goto after_updated_at;
                }

                $properties['updated_at'] = $value;
    
                after_updated_at:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamOrganization', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamOrganization::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamOrganization(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamOrganization', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️Github⚡️OpenAPI⚡️ApiGitHubCom⚡️Schema⚡️OrganizationFull⚡️Plan(array $payload): \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\OrganizationFull\Plan
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['name'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'name';
                    goto after_name;
                }

                $properties['name'] = $value;
    
                after_name:

                $value = $payload['space'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'space';
                    goto after_space;
                }

                $properties['space'] = $value;
    
                after_space:

                $value = $payload['private_repos'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'private_repos';
                    goto after_private_repos;
                }

                $properties['private_repos'] = $value;
    
                after_private_repos:

                $value = $payload['filled_seats'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'filled_seats';
                    goto after_filled_seats;
                }

                $properties['filled_seats'] = $value;
    
                after_filled_seats:

                $value = $payload['seats'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'seats';
                    goto after_seats;
                }

                $properties['seats'] = $value;
    
                after_seats:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\OrganizationFull\Plan', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\OrganizationFull\Plan::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\OrganizationFull\Plan(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\OrganizationFull\Plan', $exception, stack: $this->hydrationStack);
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
                'ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamFull' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️OpenAPI⚡️ApiGitHubCom⚡️Schema⚡️TeamFull($object),
                'ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️OpenAPI⚡️ApiGitHubCom⚡️Schema⚡️BasicError($object),
                'ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️OpenAPI⚡️ApiGitHubCom⚡️Schema⚡️ValidationError($object),
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

    
    private function serializeObjectApiClients⚡️Client⚡️Github⚡️OpenAPI⚡️ApiGitHubCom⚡️Schema⚡️TeamFull(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamFull);
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

        
        $name = $object->name;

        if ($name === null) {
            goto after_name;
        }
        after_name:        $result['name'] = $name;

        
        $slug = $object->slug;

        if ($slug === null) {
            goto after_slug;
        }
        after_slug:        $result['slug'] = $slug;

        
        $description = $object->description;

        if ($description === null) {
            goto after_description;
        }
        after_description:        $result['description'] = $description;

        
        $privacy = $object->privacy;
        after_privacy:        $result['privacy'] = $privacy;

        
        $permission = $object->permission;

        if ($permission === null) {
            goto after_permission;
        }
        after_permission:        $result['permission'] = $permission;

        
        $members_url = $object->members_url;

        if ($members_url === null) {
            goto after_members_url;
        }
        after_members_url:        $result['members_url'] = $members_url;

        
        $repositories_url = $object->repositories_url;

        if ($repositories_url === null) {
            goto after_repositories_url;
        }
        after_repositories_url:        $result['repositories_url'] = $repositories_url;

        
        $parent = $object->parent;

        if ($parent === null) {
            goto after_parent;
        }
        after_parent:        $result['parent'] = $parent;

        
        $members_count = $object->members_count;

        if ($members_count === null) {
            goto after_members_count;
        }
        after_members_count:        $result['members_count'] = $members_count;

        
        $repos_count = $object->repos_count;

        if ($repos_count === null) {
            goto after_repos_count;
        }
        after_repos_count:        $result['repos_count'] = $repos_count;

        
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

        
        $organization = $object->organization;

        if ($organization === null) {
            goto after_organization;
        }
        $organization = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️OpenAPI⚡️ApiGitHubCom⚡️Schema⚡️TeamOrganization($organization);
        after_organization:        $result['organization'] = $organization;

        
        $ldap_dn = $object->ldap_dn;
        after_ldap_dn:        $result['ldap_dn'] = $ldap_dn;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️Github⚡️OpenAPI⚡️ApiGitHubCom⚡️Schema⚡️BasicError(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError);
        $result = [];
        
        $message = $object->message;

        if ($message === null) {
            goto after_message;
        }
        after_message:        $result['message'] = $message;

        
        $documentation_url = $object->documentation_url;

        if ($documentation_url === null) {
            goto after_documentation_url;
        }
        after_documentation_url:        $result['documentation_url'] = $documentation_url;

        
        $url = $object->url;

        if ($url === null) {
            goto after_url;
        }
        after_url:        $result['url'] = $url;

        
        $status = $object->status;

        if ($status === null) {
            goto after_status;
        }
        after_status:        $result['status'] = $status;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️Github⚡️OpenAPI⚡️ApiGitHubCom⚡️Schema⚡️ValidationError(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError);
        $result = [];
        
        $message = $object->message;

        if ($message === null) {
            goto after_message;
        }
        after_message:        $result['message'] = $message;

        
        $documentation_url = $object->documentation_url;

        if ($documentation_url === null) {
            goto after_documentation_url;
        }
        after_documentation_url:        $result['documentation_url'] = $documentation_url;

        
        $errors = $object->errors;
        static $errorsSerializer0;

        if ($errorsSerializer0 === null) {
            $errorsSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $errors = $errorsSerializer0->serialize($errors, $this);
        after_errors:        $result['errors'] = $errors;


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
