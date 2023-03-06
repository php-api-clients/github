<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Hydrator\Operation\Orgs\CbOrgRcb\Teams;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class CbTeamSlugRcb implements ObjectMapper
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
            'ApiClients\Client\GitHub\Schema\TeamFull' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️TeamFull($payload),
                'ApiClients\Client\GitHub\Schema\TeamSimple' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️TeamSimple($payload),
                'ApiClients\Client\GitHub\Schema\TeamOrganization' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️TeamOrganization($payload),
                'ApiClients\Client\GitHub\Schema\OrganizationFull\Plan' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️OrganizationFull⚡️Plan($payload),
                'ApiClients\Client\GitHub\Schema\BasicError' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BasicError($payload),
                'ApiClients\Client\GitHub\Schema\ValidationError' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ValidationError($payload),
                'ApiClients\Client\GitHub\Schema\ValidationError\Errors' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ValidationError⚡️Errors($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️TeamFull(array $payload): \ApiClients\Client\GitHub\Schema\TeamFull
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

                $value = $payload['name'] ?? null;
    
                if ($value === null) {
                    $properties['name'] = null;
                    goto after_name;
                }

                $properties['name'] = $value;
    
                after_name:

                $value = $payload['slug'] ?? null;
    
                if ($value === null) {
                    $properties['slug'] = null;
                    goto after_slug;
                }

                $properties['slug'] = $value;
    
                after_slug:

                $value = $payload['description'] ?? null;
    
                if ($value === null) {
                    $properties['description'] = null;
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
                    $properties['permission'] = null;
                    goto after_permission;
                }

                $properties['permission'] = $value;
    
                after_permission:

                $value = $payload['members_url'] ?? null;
    
                if ($value === null) {
                    $properties['members_url'] = null;
                    goto after_members_url;
                }

                $properties['members_url'] = $value;
    
                after_members_url:

                $value = $payload['repositories_url'] ?? null;
    
                if ($value === null) {
                    $properties['repositories_url'] = null;
                    goto after_repositories_url;
                }

                $properties['repositories_url'] = $value;
    
                after_repositories_url:

                $value = $payload['parent'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'parent';
                    goto after_parent;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'parent';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️TeamSimple($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['parent'] = $value;
    
                after_parent:

                $value = $payload['members_count'] ?? null;
    
                if ($value === null) {
                    $properties['members_count'] = null;
                    goto after_members_count;
                }

                $properties['members_count'] = $value;
    
                after_members_count:

                $value = $payload['repos_count'] ?? null;
    
                if ($value === null) {
                    $properties['repos_count'] = null;
                    goto after_repos_count;
                }

                $properties['repos_count'] = $value;
    
                after_repos_count:

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

                $value = $payload['organization'] ?? null;
    
                if ($value === null) {
                    $properties['organization'] = null;
                    goto after_organization;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'organization';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️TeamOrganization($value);
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
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\TeamFull', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\TeamFull::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\TeamFull(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\TeamFull', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️TeamSimple(array $payload): \ApiClients\Client\GitHub\Schema\TeamSimple
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

                $value = $payload['url'] ?? null;
    
                if ($value === null) {
                    $properties['url'] = null;
                    goto after_url;
                }

                $properties['url'] = $value;
    
                after_url:

                $value = $payload['members_url'] ?? null;
    
                if ($value === null) {
                    $properties['members_url'] = null;
                    goto after_members_url;
                }

                $properties['members_url'] = $value;
    
                after_members_url:

                $value = $payload['name'] ?? null;
    
                if ($value === null) {
                    $properties['name'] = null;
                    goto after_name;
                }

                $properties['name'] = $value;
    
                after_name:

                $value = $payload['description'] ?? null;
    
                if ($value === null) {
                    $properties['description'] = null;
                    goto after_description;
                }

                $properties['description'] = $value;
    
                after_description:

                $value = $payload['permission'] ?? null;
    
                if ($value === null) {
                    $properties['permission'] = null;
                    goto after_permission;
                }

                $properties['permission'] = $value;
    
                after_permission:

                $value = $payload['privacy'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'privacy';
                    goto after_privacy;
                }

                $properties['privacy'] = $value;
    
                after_privacy:

                $value = $payload['html_url'] ?? null;
    
                if ($value === null) {
                    $properties['html_url'] = null;
                    goto after_html_url;
                }

                $properties['html_url'] = $value;
    
                after_html_url:

                $value = $payload['repositories_url'] ?? null;
    
                if ($value === null) {
                    $properties['repositories_url'] = null;
                    goto after_repositories_url;
                }

                $properties['repositories_url'] = $value;
    
                after_repositories_url:

                $value = $payload['slug'] ?? null;
    
                if ($value === null) {
                    $properties['slug'] = null;
                    goto after_slug;
                }

                $properties['slug'] = $value;
    
                after_slug:

                $value = $payload['ldap_dn'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'ldap_dn';
                    goto after_ldap_dn;
                }

                $properties['ldap_dn'] = $value;
    
                after_ldap_dn:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\TeamSimple', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\TeamSimple::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\TeamSimple(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\TeamSimple', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️TeamOrganization(array $payload): \ApiClients\Client\GitHub\Schema\TeamOrganization
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
                    $properties['twitter_username'] = null;
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
                    $properties['has_organization_projects'] = null;
                    goto after_has_organization_projects;
                }

                $properties['has_organization_projects'] = $value;
    
                after_has_organization_projects:

                $value = $payload['has_repository_projects'] ?? null;
    
                if ($value === null) {
                    $properties['has_repository_projects'] = null;
                    goto after_has_repository_projects;
                }

                $properties['has_repository_projects'] = $value;
    
                after_has_repository_projects:

                $value = $payload['public_repos'] ?? null;
    
                if ($value === null) {
                    $properties['public_repos'] = null;
                    goto after_public_repos;
                }

                $properties['public_repos'] = $value;
    
                after_public_repos:

                $value = $payload['public_gists'] ?? null;
    
                if ($value === null) {
                    $properties['public_gists'] = null;
                    goto after_public_gists;
                }

                $properties['public_gists'] = $value;
    
                after_public_gists:

                $value = $payload['followers'] ?? null;
    
                if ($value === null) {
                    $properties['followers'] = null;
                    goto after_followers;
                }

                $properties['followers'] = $value;
    
                after_followers:

                $value = $payload['following'] ?? null;
    
                if ($value === null) {
                    $properties['following'] = null;
                    goto after_following;
                }

                $properties['following'] = $value;
    
                after_following:

                $value = $payload['html_url'] ?? null;
    
                if ($value === null) {
                    $properties['html_url'] = null;
                    goto after_html_url;
                }

                $properties['html_url'] = $value;
    
                after_html_url:

                $value = $payload['created_at'] ?? null;
    
                if ($value === null) {
                    $properties['created_at'] = null;
                    goto after_created_at;
                }

                $properties['created_at'] = $value;
    
                after_created_at:

                $value = $payload['type'] ?? null;
    
                if ($value === null) {
                    $properties['type'] = null;
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
                    $properties['private_gists'] = null;
                    goto after_private_gists;
                }

                $properties['private_gists'] = $value;
    
                after_private_gists:

                $value = $payload['disk_usage'] ?? null;
    
                if ($value === null) {
                    $properties['disk_usage'] = null;
                    goto after_disk_usage;
                }

                $properties['disk_usage'] = $value;
    
                after_disk_usage:

                $value = $payload['collaborators'] ?? null;
    
                if ($value === null) {
                    $properties['collaborators'] = null;
                    goto after_collaborators;
                }

                $properties['collaborators'] = $value;
    
                after_collaborators:

                $value = $payload['billing_email'] ?? null;
    
                if ($value === null) {
                    $properties['billing_email'] = null;
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
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️OrganizationFull⚡️Plan($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['plan'] = $value;
    
                after_plan:

                $value = $payload['default_repository_permission'] ?? null;
    
                if ($value === null) {
                    $properties['default_repository_permission'] = null;
                    goto after_default_repository_permission;
                }

                $properties['default_repository_permission'] = $value;
    
                after_default_repository_permission:

                $value = $payload['members_can_create_repositories'] ?? null;
    
                if ($value === null) {
                    $properties['members_can_create_repositories'] = null;
                    goto after_members_can_create_repositories;
                }

                $properties['members_can_create_repositories'] = $value;
    
                after_members_can_create_repositories:

                $value = $payload['two_factor_requirement_enabled'] ?? null;
    
                if ($value === null) {
                    $properties['two_factor_requirement_enabled'] = null;
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
                    $properties['members_can_fork_private_repositories'] = null;
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
                    $properties['updated_at'] = null;
                    goto after_updated_at;
                }

                $properties['updated_at'] = $value;
    
                after_updated_at:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\TeamOrganization', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\TeamOrganization::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\TeamOrganization(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\TeamOrganization', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️OrganizationFull⚡️Plan(array $payload): \ApiClients\Client\GitHub\Schema\OrganizationFull\Plan
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

                $value = $payload['space'] ?? null;
    
                if ($value === null) {
                    $properties['space'] = null;
                    goto after_space;
                }

                $properties['space'] = $value;
    
                after_space:

                $value = $payload['private_repos'] ?? null;
    
                if ($value === null) {
                    $properties['private_repos'] = null;
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
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\OrganizationFull\Plan', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\OrganizationFull\Plan::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\OrganizationFull\Plan(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\OrganizationFull\Plan', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BasicError(array $payload): \ApiClients\Client\GitHub\Schema\BasicError
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['message'] ?? null;
    
                if ($value === null) {
                    $properties['message'] = null;
                    goto after_message;
                }

                $properties['message'] = $value;
    
                after_message:

                $value = $payload['documentation_url'] ?? null;
    
                if ($value === null) {
                    $properties['documentation_url'] = null;
                    goto after_documentation_url;
                }

                $properties['documentation_url'] = $value;
    
                after_documentation_url:

                $value = $payload['url'] ?? null;
    
                if ($value === null) {
                    $properties['url'] = null;
                    goto after_url;
                }

                $properties['url'] = $value;
    
                after_url:

                $value = $payload['status'] ?? null;
    
                if ($value === null) {
                    $properties['status'] = null;
                    goto after_status;
                }

                $properties['status'] = $value;
    
                after_status:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\BasicError', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\BasicError::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\BasicError(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\BasicError', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ValidationError(array $payload): \ApiClients\Client\GitHub\Schema\ValidationError
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['message'] ?? null;
    
                if ($value === null) {
                    $properties['message'] = null;
                    goto after_message;
                }

                $properties['message'] = $value;
    
                after_message:

                $value = $payload['documentation_url'] ?? null;
    
                if ($value === null) {
                    $properties['documentation_url'] = null;
                    goto after_documentation_url;
                }

                $properties['documentation_url'] = $value;
    
                after_documentation_url:

                $value = $payload['errors'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'errors';
                    goto after_errors;
                }

                static $errorsCaster1;
    
                if ($errorsCaster1 === null) {
                    $errorsCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\ValidationError\\Errors',
));
                }
    
                $value = $errorsCaster1->cast($value, $this);

                $properties['errors'] = $value;
    
                after_errors:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ValidationError', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\ValidationError::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\ValidationError(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ValidationError', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ValidationError⚡️Errors(array $payload): \ApiClients\Client\GitHub\Schema\ValidationError\Errors
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['resource'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'resource';
                    goto after_resource;
                }

                $properties['resource'] = $value;
    
                after_resource:

                $value = $payload['field'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'field';
                    goto after_field;
                }

                $properties['field'] = $value;
    
                after_field:

                $value = $payload['message'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'message';
                    goto after_message;
                }

                $properties['message'] = $value;
    
                after_message:

                $value = $payload['code'] ?? null;
    
                if ($value === null) {
                    $properties['code'] = null;
                    goto after_code;
                }

                $properties['code'] = $value;
    
                after_code:

                $value = $payload['index'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'index';
                    goto after_index;
                }

                $properties['index'] = $value;
    
                after_index:

                $value = $payload['value'] ?? null;
    
                if ($value === null) {
                    $properties['value'] = null;
                    goto after_value;
                }

                $properties['value'] = $value;
    
                after_value:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ValidationError\Errors', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\ValidationError\Errors::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\ValidationError\Errors(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ValidationError\Errors', $exception, stack: $this->hydrationStack);
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
                'ApiClients\Client\GitHub\Schema\TeamFull' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️TeamFull($object),
                'ApiClients\Client\GitHub\Schema\TeamSimple' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️TeamSimple($object),
                'ApiClients\Client\GitHub\Schema\TeamOrganization' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️TeamOrganization($object),
                'ApiClients\Client\GitHub\Schema\OrganizationFull\Plan' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️OrganizationFull⚡️Plan($object),
                'ApiClients\Client\GitHub\Schema\BasicError' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BasicError($object),
                'ApiClients\Client\GitHub\Schema\ValidationError' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ValidationError($object),
                'ApiClients\Client\GitHub\Schema\ValidationError\Errors' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ValidationError⚡️Errors($object),
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

    
    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️TeamFull(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\TeamFull);
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
        $parent = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️TeamSimple($parent);
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
        $organization = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️TeamOrganization($organization);
        after_organization:        $result['organization'] = $organization;

        
        $ldap_dn = $object->ldap_dn;
        after_ldap_dn:        $result['ldap_dn'] = $ldap_dn;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️TeamSimple(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\TeamSimple);
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

        
        $members_url = $object->members_url;

        if ($members_url === null) {
            goto after_members_url;
        }
        after_members_url:        $result['members_url'] = $members_url;

        
        $name = $object->name;

        if ($name === null) {
            goto after_name;
        }
        after_name:        $result['name'] = $name;

        
        $description = $object->description;

        if ($description === null) {
            goto after_description;
        }
        after_description:        $result['description'] = $description;

        
        $permission = $object->permission;

        if ($permission === null) {
            goto after_permission;
        }
        after_permission:        $result['permission'] = $permission;

        
        $privacy = $object->privacy;
        after_privacy:        $result['privacy'] = $privacy;

        
        $html_url = $object->html_url;

        if ($html_url === null) {
            goto after_html_url;
        }
        after_html_url:        $result['html_url'] = $html_url;

        
        $repositories_url = $object->repositories_url;

        if ($repositories_url === null) {
            goto after_repositories_url;
        }
        after_repositories_url:        $result['repositories_url'] = $repositories_url;

        
        $slug = $object->slug;

        if ($slug === null) {
            goto after_slug;
        }
        after_slug:        $result['slug'] = $slug;

        
        $ldap_dn = $object->ldap_dn;
        after_ldap_dn:        $result['ldap_dn'] = $ldap_dn;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️TeamOrganization(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\TeamOrganization);
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

        
        $name = $object->name;
        after_name:        $result['name'] = $name;

        
        $company = $object->company;
        after_company:        $result['company'] = $company;

        
        $blog = $object->blog;
        after_blog:        $result['blog'] = $blog;

        
        $location = $object->location;
        after_location:        $result['location'] = $location;

        
        $email = $object->email;
        after_email:        $result['email'] = $email;

        
        $twitter_username = $object->twitter_username;

        if ($twitter_username === null) {
            goto after_twitter_username;
        }
        after_twitter_username:        $result['twitter_username'] = $twitter_username;

        
        $is_verified = $object->is_verified;
        after_is_verified:        $result['is_verified'] = $is_verified;

        
        $has_organization_projects = $object->has_organization_projects;

        if ($has_organization_projects === null) {
            goto after_has_organization_projects;
        }
        after_has_organization_projects:        $result['has_organization_projects'] = $has_organization_projects;

        
        $has_repository_projects = $object->has_repository_projects;

        if ($has_repository_projects === null) {
            goto after_has_repository_projects;
        }
        after_has_repository_projects:        $result['has_repository_projects'] = $has_repository_projects;

        
        $public_repos = $object->public_repos;

        if ($public_repos === null) {
            goto after_public_repos;
        }
        after_public_repos:        $result['public_repos'] = $public_repos;

        
        $public_gists = $object->public_gists;

        if ($public_gists === null) {
            goto after_public_gists;
        }
        after_public_gists:        $result['public_gists'] = $public_gists;

        
        $followers = $object->followers;

        if ($followers === null) {
            goto after_followers;
        }
        after_followers:        $result['followers'] = $followers;

        
        $following = $object->following;

        if ($following === null) {
            goto after_following;
        }
        after_following:        $result['following'] = $following;

        
        $html_url = $object->html_url;

        if ($html_url === null) {
            goto after_html_url;
        }
        after_html_url:        $result['html_url'] = $html_url;

        
        $created_at = $object->created_at;

        if ($created_at === null) {
            goto after_created_at;
        }
        after_created_at:        $result['created_at'] = $created_at;

        
        $type = $object->type;

        if ($type === null) {
            goto after_type;
        }
        after_type:        $result['type'] = $type;

        
        $total_private_repos = $object->total_private_repos;
        after_total_private_repos:        $result['total_private_repos'] = $total_private_repos;

        
        $owned_private_repos = $object->owned_private_repos;
        after_owned_private_repos:        $result['owned_private_repos'] = $owned_private_repos;

        
        $private_gists = $object->private_gists;

        if ($private_gists === null) {
            goto after_private_gists;
        }
        after_private_gists:        $result['private_gists'] = $private_gists;

        
        $disk_usage = $object->disk_usage;

        if ($disk_usage === null) {
            goto after_disk_usage;
        }
        after_disk_usage:        $result['disk_usage'] = $disk_usage;

        
        $collaborators = $object->collaborators;

        if ($collaborators === null) {
            goto after_collaborators;
        }
        after_collaborators:        $result['collaborators'] = $collaborators;

        
        $billing_email = $object->billing_email;

        if ($billing_email === null) {
            goto after_billing_email;
        }
        after_billing_email:        $result['billing_email'] = $billing_email;

        
        $plan = $object->plan;
        $plan = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️OrganizationFull⚡️Plan($plan);
        after_plan:        $result['plan'] = $plan;

        
        $default_repository_permission = $object->default_repository_permission;

        if ($default_repository_permission === null) {
            goto after_default_repository_permission;
        }
        after_default_repository_permission:        $result['default_repository_permission'] = $default_repository_permission;

        
        $members_can_create_repositories = $object->members_can_create_repositories;

        if ($members_can_create_repositories === null) {
            goto after_members_can_create_repositories;
        }
        after_members_can_create_repositories:        $result['members_can_create_repositories'] = $members_can_create_repositories;

        
        $two_factor_requirement_enabled = $object->two_factor_requirement_enabled;

        if ($two_factor_requirement_enabled === null) {
            goto after_two_factor_requirement_enabled;
        }
        after_two_factor_requirement_enabled:        $result['two_factor_requirement_enabled'] = $two_factor_requirement_enabled;

        
        $members_allowed_repository_creation_type = $object->members_allowed_repository_creation_type;
        after_members_allowed_repository_creation_type:        $result['members_allowed_repository_creation_type'] = $members_allowed_repository_creation_type;

        
        $members_can_create_public_repositories = $object->members_can_create_public_repositories;
        after_members_can_create_public_repositories:        $result['members_can_create_public_repositories'] = $members_can_create_public_repositories;

        
        $members_can_create_private_repositories = $object->members_can_create_private_repositories;
        after_members_can_create_private_repositories:        $result['members_can_create_private_repositories'] = $members_can_create_private_repositories;

        
        $members_can_create_internal_repositories = $object->members_can_create_internal_repositories;
        after_members_can_create_internal_repositories:        $result['members_can_create_internal_repositories'] = $members_can_create_internal_repositories;

        
        $members_can_create_pages = $object->members_can_create_pages;
        after_members_can_create_pages:        $result['members_can_create_pages'] = $members_can_create_pages;

        
        $members_can_create_public_pages = $object->members_can_create_public_pages;
        after_members_can_create_public_pages:        $result['members_can_create_public_pages'] = $members_can_create_public_pages;

        
        $members_can_create_private_pages = $object->members_can_create_private_pages;
        after_members_can_create_private_pages:        $result['members_can_create_private_pages'] = $members_can_create_private_pages;

        
        $members_can_fork_private_repositories = $object->members_can_fork_private_repositories;

        if ($members_can_fork_private_repositories === null) {
            goto after_members_can_fork_private_repositories;
        }
        after_members_can_fork_private_repositories:        $result['members_can_fork_private_repositories'] = $members_can_fork_private_repositories;

        
        $web_commit_signoff_required = $object->web_commit_signoff_required;
        after_web_commit_signoff_required:        $result['web_commit_signoff_required'] = $web_commit_signoff_required;

        
        $updated_at = $object->updated_at;

        if ($updated_at === null) {
            goto after_updated_at;
        }
        after_updated_at:        $result['updated_at'] = $updated_at;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️OrganizationFull⚡️Plan(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\OrganizationFull\Plan);
        $result = [];
        
        $name = $object->name;

        if ($name === null) {
            goto after_name;
        }
        after_name:        $result['name'] = $name;

        
        $space = $object->space;

        if ($space === null) {
            goto after_space;
        }
        after_space:        $result['space'] = $space;

        
        $private_repos = $object->private_repos;

        if ($private_repos === null) {
            goto after_private_repos;
        }
        after_private_repos:        $result['private_repos'] = $private_repos;

        
        $filled_seats = $object->filled_seats;
        after_filled_seats:        $result['filled_seats'] = $filled_seats;

        
        $seats = $object->seats;
        after_seats:        $result['seats'] = $seats;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BasicError(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\BasicError);
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

    
    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ValidationError(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\ValidationError);
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
            $errorsSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\ValidationError\\Errors',
));
        }
        
        $errors = $errorsSerializer0->serialize($errors, $this);
        after_errors:        $result['errors'] = $errors;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ValidationError⚡️Errors(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\ValidationError\Errors);
        $result = [];
        
        $resource = $object->resource;
        after_resource:        $result['resource'] = $resource;

        
        $field = $object->field;
        after_field:        $result['field'] = $field;

        
        $message = $object->message;
        after_message:        $result['message'] = $message;

        
        $code = $object->code;

        if ($code === null) {
            goto after_code;
        }
        after_code:        $result['code'] = $code;

        
        $index = $object->index;
        after_index:        $result['index'] = $index;

        
        $value = $object->value;

        if ($value === null) {
            goto after_value;
        }
        static $valueSerializer0;

        if ($valueSerializer0 === null) {
            $valueSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $value = $valueSerializer0->serialize($value, $this);
        after_value:        $result['value'] = $value;


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
