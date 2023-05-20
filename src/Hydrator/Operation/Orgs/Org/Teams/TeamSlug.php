<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Hydrator\Operation\Orgs\Org\Teams;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class TeamSlug implements ObjectMapper
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

            $value = $payload['html_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'html_url';
                goto after_htmlUrl;
            }

            $properties['htmlUrl'] = $value;

            after_htmlUrl:

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
                $properties['description'] = null;
                goto after_description;
            }

            $properties['description'] = $value;

            after_description:

            $value = $payload['privacy'] ?? null;

            if ($value === null) {
                $properties['privacy'] = null;
                goto after_privacy;
            }

            $properties['privacy'] = $value;

            after_privacy:

            $value = $payload['notification_setting'] ?? null;

            if ($value === null) {
                $properties['notificationSetting'] = null;
                goto after_notificationSetting;
            }

            $properties['notificationSetting'] = $value;

            after_notificationSetting:

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
                goto after_membersUrl;
            }

            $properties['membersUrl'] = $value;

            after_membersUrl:

            $value = $payload['repositories_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'repositories_url';
                goto after_repositoriesUrl;
            }

            $properties['repositoriesUrl'] = $value;

            after_repositoriesUrl:

            $value = $payload['parent'] ?? null;

            if ($value === null) {
                $properties['parent'] = null;
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
                $missingFields[] = 'members_count';
                goto after_membersCount;
            }

            $properties['membersCount'] = $value;

            after_membersCount:

            $value = $payload['repos_count'] ?? null;

            if ($value === null) {
                $missingFields[] = 'repos_count';
                goto after_reposCount;
            }

            $properties['reposCount'] = $value;

            after_reposCount:

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

            $value = $payload['organization'] ?? null;

            if ($value === null) {
                $missingFields[] = 'organization';
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
                $properties['ldapDn'] = null;
                goto after_ldapDn;
            }

            $properties['ldapDn'] = $value;

            after_ldapDn:

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

            $value = $payload['members_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'members_url';
                goto after_membersUrl;
            }

            $properties['membersUrl'] = $value;

            after_membersUrl:

            $value = $payload['name'] ?? null;

            if ($value === null) {
                $missingFields[] = 'name';
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
                $missingFields[] = 'permission';
                goto after_permission;
            }

            $properties['permission'] = $value;

            after_permission:

            $value = $payload['privacy'] ?? null;

            if ($value === null) {
                $properties['privacy'] = null;
                goto after_privacy;
            }

            $properties['privacy'] = $value;

            after_privacy:

            $value = $payload['notification_setting'] ?? null;

            if ($value === null) {
                $properties['notificationSetting'] = null;
                goto after_notificationSetting;
            }

            $properties['notificationSetting'] = $value;

            after_notificationSetting:

            $value = $payload['html_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'html_url';
                goto after_htmlUrl;
            }

            $properties['htmlUrl'] = $value;

            after_htmlUrl:

            $value = $payload['repositories_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'repositories_url';
                goto after_repositoriesUrl;
            }

            $properties['repositoriesUrl'] = $value;

            after_repositoriesUrl:

            $value = $payload['slug'] ?? null;

            if ($value === null) {
                $missingFields[] = 'slug';
                goto after_slug;
            }

            $properties['slug'] = $value;

            after_slug:

            $value = $payload['ldap_dn'] ?? null;

            if ($value === null) {
                $properties['ldapDn'] = null;
                goto after_ldapDn;
            }

            $properties['ldapDn'] = $value;

            after_ldapDn:

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

            $value = $payload['name'] ?? null;

            if ($value === null) {
                $properties['name'] = null;
                goto after_name;
            }

            $properties['name'] = $value;

            after_name:

            $value = $payload['company'] ?? null;

            if ($value === null) {
                $properties['company'] = null;
                goto after_company;
            }

            $properties['company'] = $value;

            after_company:

            $value = $payload['blog'] ?? null;

            if ($value === null) {
                $properties['blog'] = null;
                goto after_blog;
            }

            $properties['blog'] = $value;

            after_blog:

            $value = $payload['location'] ?? null;

            if ($value === null) {
                $properties['location'] = null;
                goto after_location;
            }

            $properties['location'] = $value;

            after_location:

            $value = $payload['email'] ?? null;

            if ($value === null) {
                $properties['email'] = null;
                goto after_email;
            }

            $properties['email'] = $value;

            after_email:

            $value = $payload['twitter_username'] ?? null;

            if ($value === null) {
                $properties['twitterUsername'] = null;
                goto after_twitterUsername;
            }

            $properties['twitterUsername'] = $value;

            after_twitterUsername:

            $value = $payload['is_verified'] ?? null;

            if ($value === null) {
                $properties['isVerified'] = null;
                goto after_isVerified;
            }

            $properties['isVerified'] = $value;

            after_isVerified:

            $value = $payload['has_organization_projects'] ?? null;

            if ($value === null) {
                $missingFields[] = 'has_organization_projects';
                goto after_hasOrganizationProjects;
            }

            $properties['hasOrganizationProjects'] = $value;

            after_hasOrganizationProjects:

            $value = $payload['has_repository_projects'] ?? null;

            if ($value === null) {
                $missingFields[] = 'has_repository_projects';
                goto after_hasRepositoryProjects;
            }

            $properties['hasRepositoryProjects'] = $value;

            after_hasRepositoryProjects:

            $value = $payload['public_repos'] ?? null;

            if ($value === null) {
                $missingFields[] = 'public_repos';
                goto after_publicRepos;
            }

            $properties['publicRepos'] = $value;

            after_publicRepos:

            $value = $payload['public_gists'] ?? null;

            if ($value === null) {
                $missingFields[] = 'public_gists';
                goto after_publicGists;
            }

            $properties['publicGists'] = $value;

            after_publicGists:

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
                goto after_htmlUrl;
            }

            $properties['htmlUrl'] = $value;

            after_htmlUrl:

            $value = $payload['created_at'] ?? null;

            if ($value === null) {
                $missingFields[] = 'created_at';
                goto after_createdAt;
            }

            $properties['createdAt'] = $value;

            after_createdAt:

            $value = $payload['type'] ?? null;

            if ($value === null) {
                $missingFields[] = 'type';
                goto after_type;
            }

            $properties['type'] = $value;

            after_type:

            $value = $payload['total_private_repos'] ?? null;

            if ($value === null) {
                $properties['totalPrivateRepos'] = null;
                goto after_totalPrivateRepos;
            }

            $properties['totalPrivateRepos'] = $value;

            after_totalPrivateRepos:

            $value = $payload['owned_private_repos'] ?? null;

            if ($value === null) {
                $properties['ownedPrivateRepos'] = null;
                goto after_ownedPrivateRepos;
            }

            $properties['ownedPrivateRepos'] = $value;

            after_ownedPrivateRepos:

            $value = $payload['private_gists'] ?? null;

            if ($value === null) {
                $properties['privateGists'] = null;
                goto after_privateGists;
            }

            $properties['privateGists'] = $value;

            after_privateGists:

            $value = $payload['disk_usage'] ?? null;

            if ($value === null) {
                $properties['diskUsage'] = null;
                goto after_diskUsage;
            }

            $properties['diskUsage'] = $value;

            after_diskUsage:

            $value = $payload['collaborators'] ?? null;

            if ($value === null) {
                $properties['collaborators'] = null;
                goto after_collaborators;
            }

            $properties['collaborators'] = $value;

            after_collaborators:

            $value = $payload['billing_email'] ?? null;

            if ($value === null) {
                $properties['billingEmail'] = null;
                goto after_billingEmail;
            }

            $properties['billingEmail'] = $value;

            after_billingEmail:

            $value = $payload['plan'] ?? null;

            if ($value === null) {
                $properties['plan'] = null;
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
                $properties['defaultRepositoryPermission'] = null;
                goto after_defaultRepositoryPermission;
            }

            $properties['defaultRepositoryPermission'] = $value;

            after_defaultRepositoryPermission:

            $value = $payload['members_can_create_repositories'] ?? null;

            if ($value === null) {
                $properties['membersCanCreateRepositories'] = null;
                goto after_membersCanCreateRepositories;
            }

            $properties['membersCanCreateRepositories'] = $value;

            after_membersCanCreateRepositories:

            $value = $payload['two_factor_requirement_enabled'] ?? null;

            if ($value === null) {
                $properties['twoFactorRequirementEnabled'] = null;
                goto after_twoFactorRequirementEnabled;
            }

            $properties['twoFactorRequirementEnabled'] = $value;

            after_twoFactorRequirementEnabled:

            $value = $payload['members_allowed_repository_creation_type'] ?? null;

            if ($value === null) {
                $properties['membersAllowedRepositoryCreationType'] = null;
                goto after_membersAllowedRepositoryCreationType;
            }

            $properties['membersAllowedRepositoryCreationType'] = $value;

            after_membersAllowedRepositoryCreationType:

            $value = $payload['members_can_create_public_repositories'] ?? null;

            if ($value === null) {
                $properties['membersCanCreatePublicRepositories'] = null;
                goto after_membersCanCreatePublicRepositories;
            }

            $properties['membersCanCreatePublicRepositories'] = $value;

            after_membersCanCreatePublicRepositories:

            $value = $payload['members_can_create_private_repositories'] ?? null;

            if ($value === null) {
                $properties['membersCanCreatePrivateRepositories'] = null;
                goto after_membersCanCreatePrivateRepositories;
            }

            $properties['membersCanCreatePrivateRepositories'] = $value;

            after_membersCanCreatePrivateRepositories:

            $value = $payload['members_can_create_internal_repositories'] ?? null;

            if ($value === null) {
                $properties['membersCanCreateInternalRepositories'] = null;
                goto after_membersCanCreateInternalRepositories;
            }

            $properties['membersCanCreateInternalRepositories'] = $value;

            after_membersCanCreateInternalRepositories:

            $value = $payload['members_can_create_pages'] ?? null;

            if ($value === null) {
                $properties['membersCanCreatePages'] = null;
                goto after_membersCanCreatePages;
            }

            $properties['membersCanCreatePages'] = $value;

            after_membersCanCreatePages:

            $value = $payload['members_can_create_public_pages'] ?? null;

            if ($value === null) {
                $properties['membersCanCreatePublicPages'] = null;
                goto after_membersCanCreatePublicPages;
            }

            $properties['membersCanCreatePublicPages'] = $value;

            after_membersCanCreatePublicPages:

            $value = $payload['members_can_create_private_pages'] ?? null;

            if ($value === null) {
                $properties['membersCanCreatePrivatePages'] = null;
                goto after_membersCanCreatePrivatePages;
            }

            $properties['membersCanCreatePrivatePages'] = $value;

            after_membersCanCreatePrivatePages:

            $value = $payload['members_can_fork_private_repositories'] ?? null;

            if ($value === null) {
                $properties['membersCanForkPrivateRepositories'] = null;
                goto after_membersCanForkPrivateRepositories;
            }

            $properties['membersCanForkPrivateRepositories'] = $value;

            after_membersCanForkPrivateRepositories:

            $value = $payload['web_commit_signoff_required'] ?? null;

            if ($value === null) {
                $properties['webCommitSignoffRequired'] = null;
                goto after_webCommitSignoffRequired;
            }

            $properties['webCommitSignoffRequired'] = $value;

            after_webCommitSignoffRequired:

            $value = $payload['updated_at'] ?? null;

            if ($value === null) {
                $missingFields[] = 'updated_at';
                goto after_updatedAt;
            }

            $properties['updatedAt'] = $value;

            after_updatedAt:

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
                goto after_privateRepos;
            }

            $properties['privateRepos'] = $value;

            after_privateRepos:

            $value = $payload['filled_seats'] ?? null;

            if ($value === null) {
                $properties['filledSeats'] = null;
                goto after_filledSeats;
            }

            $properties['filledSeats'] = $value;

            after_filledSeats:

            $value = $payload['seats'] ?? null;

            if ($value === null) {
                $properties['seats'] = null;
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
                $properties['documentationUrl'] = null;
                goto after_documentationUrl;
            }

            $properties['documentationUrl'] = $value;

            after_documentationUrl:

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
                $missingFields[] = 'message';
                goto after_message;
            }

            $properties['message'] = $value;

            after_message:

            $value = $payload['documentation_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'documentation_url';
                goto after_documentationUrl;
            }

            $properties['documentationUrl'] = $value;

            after_documentationUrl:

            $value = $payload['errors'] ?? null;

            if ($value === null) {
                $properties['errors'] = null;
                goto after_errors;
            }

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
            'ApiClients\Client\GitHub\Schema\TeamFull' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️TeamFull($object),
            'ApiClients\Client\GitHub\Schema\TeamSimple' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️TeamSimple($object),
            'ApiClients\Client\GitHub\Schema\TeamOrganization' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️TeamOrganization($object),
            'ApiClients\Client\GitHub\Schema\OrganizationFull\Plan' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️OrganizationFull⚡️Plan($object),
            'ApiClients\Client\GitHub\Schema\BasicError' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BasicError($object),
            'ApiClients\Client\GitHub\Schema\ValidationError' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ValidationError($object),
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
        after_id:        $result['id'] = $id;

        
        $nodeId = $object->nodeId;
        after_nodeId:        $result['node_id'] = $nodeId;

        
        $url = $object->url;
        after_url:        $result['url'] = $url;

        
        $htmlUrl = $object->htmlUrl;
        after_htmlUrl:        $result['html_url'] = $htmlUrl;

        
        $name = $object->name;
        after_name:        $result['name'] = $name;

        
        $slug = $object->slug;
        after_slug:        $result['slug'] = $slug;

        
        $description = $object->description;

        if ($description === null) {
            goto after_description;
        }
        after_description:        $result['description'] = $description;

        
        $privacy = $object->privacy;

        if ($privacy === null) {
            goto after_privacy;
        }
        after_privacy:        $result['privacy'] = $privacy;

        
        $notificationSetting = $object->notificationSetting;

        if ($notificationSetting === null) {
            goto after_notificationSetting;
        }
        after_notificationSetting:        $result['notification_setting'] = $notificationSetting;

        
        $permission = $object->permission;
        after_permission:        $result['permission'] = $permission;

        
        $membersUrl = $object->membersUrl;
        after_membersUrl:        $result['members_url'] = $membersUrl;

        
        $repositoriesUrl = $object->repositoriesUrl;
        after_repositoriesUrl:        $result['repositories_url'] = $repositoriesUrl;

        
        $parent = $object->parent;

        if ($parent === null) {
            goto after_parent;
        }
        $parent = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️TeamSimple($parent);
        after_parent:        $result['parent'] = $parent;

        
        $membersCount = $object->membersCount;
        after_membersCount:        $result['members_count'] = $membersCount;

        
        $reposCount = $object->reposCount;
        after_reposCount:        $result['repos_count'] = $reposCount;

        
        $createdAt = $object->createdAt;
        after_createdAt:        $result['created_at'] = $createdAt;

        
        $updatedAt = $object->updatedAt;
        after_updatedAt:        $result['updated_at'] = $updatedAt;

        
        $organization = $object->organization;
        $organization = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️TeamOrganization($organization);
        after_organization:        $result['organization'] = $organization;

        
        $ldapDn = $object->ldapDn;

        if ($ldapDn === null) {
            goto after_ldapDn;
        }
        after_ldapDn:        $result['ldap_dn'] = $ldapDn;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️TeamSimple(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\TeamSimple);
        $result = [];

        $id = $object->id;
        after_id:        $result['id'] = $id;

        
        $nodeId = $object->nodeId;
        after_nodeId:        $result['node_id'] = $nodeId;

        
        $url = $object->url;
        after_url:        $result['url'] = $url;

        
        $membersUrl = $object->membersUrl;
        after_membersUrl:        $result['members_url'] = $membersUrl;

        
        $name = $object->name;
        after_name:        $result['name'] = $name;

        
        $description = $object->description;

        if ($description === null) {
            goto after_description;
        }
        after_description:        $result['description'] = $description;

        
        $permission = $object->permission;
        after_permission:        $result['permission'] = $permission;

        
        $privacy = $object->privacy;

        if ($privacy === null) {
            goto after_privacy;
        }
        after_privacy:        $result['privacy'] = $privacy;

        
        $notificationSetting = $object->notificationSetting;

        if ($notificationSetting === null) {
            goto after_notificationSetting;
        }
        after_notificationSetting:        $result['notification_setting'] = $notificationSetting;

        
        $htmlUrl = $object->htmlUrl;
        after_htmlUrl:        $result['html_url'] = $htmlUrl;

        
        $repositoriesUrl = $object->repositoriesUrl;
        after_repositoriesUrl:        $result['repositories_url'] = $repositoriesUrl;

        
        $slug = $object->slug;
        after_slug:        $result['slug'] = $slug;

        
        $ldapDn = $object->ldapDn;

        if ($ldapDn === null) {
            goto after_ldapDn;
        }
        after_ldapDn:        $result['ldap_dn'] = $ldapDn;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️TeamOrganization(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\TeamOrganization);
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

        
        $name = $object->name;

        if ($name === null) {
            goto after_name;
        }
        after_name:        $result['name'] = $name;

        
        $company = $object->company;

        if ($company === null) {
            goto after_company;
        }
        after_company:        $result['company'] = $company;

        
        $blog = $object->blog;

        if ($blog === null) {
            goto after_blog;
        }
        after_blog:        $result['blog'] = $blog;

        
        $location = $object->location;

        if ($location === null) {
            goto after_location;
        }
        after_location:        $result['location'] = $location;

        
        $email = $object->email;

        if ($email === null) {
            goto after_email;
        }
        after_email:        $result['email'] = $email;

        
        $twitterUsername = $object->twitterUsername;

        if ($twitterUsername === null) {
            goto after_twitterUsername;
        }
        after_twitterUsername:        $result['twitter_username'] = $twitterUsername;

        
        $isVerified = $object->isVerified;

        if ($isVerified === null) {
            goto after_isVerified;
        }
        after_isVerified:        $result['is_verified'] = $isVerified;

        
        $hasOrganizationProjects = $object->hasOrganizationProjects;
        after_hasOrganizationProjects:        $result['has_organization_projects'] = $hasOrganizationProjects;

        
        $hasRepositoryProjects = $object->hasRepositoryProjects;
        after_hasRepositoryProjects:        $result['has_repository_projects'] = $hasRepositoryProjects;

        
        $publicRepos = $object->publicRepos;
        after_publicRepos:        $result['public_repos'] = $publicRepos;

        
        $publicGists = $object->publicGists;
        after_publicGists:        $result['public_gists'] = $publicGists;

        
        $followers = $object->followers;
        after_followers:        $result['followers'] = $followers;

        
        $following = $object->following;
        after_following:        $result['following'] = $following;

        
        $htmlUrl = $object->htmlUrl;
        after_htmlUrl:        $result['html_url'] = $htmlUrl;

        
        $createdAt = $object->createdAt;
        after_createdAt:        $result['created_at'] = $createdAt;

        
        $type = $object->type;
        after_type:        $result['type'] = $type;

        
        $totalPrivateRepos = $object->totalPrivateRepos;

        if ($totalPrivateRepos === null) {
            goto after_totalPrivateRepos;
        }
        after_totalPrivateRepos:        $result['total_private_repos'] = $totalPrivateRepos;

        
        $ownedPrivateRepos = $object->ownedPrivateRepos;

        if ($ownedPrivateRepos === null) {
            goto after_ownedPrivateRepos;
        }
        after_ownedPrivateRepos:        $result['owned_private_repos'] = $ownedPrivateRepos;

        
        $privateGists = $object->privateGists;

        if ($privateGists === null) {
            goto after_privateGists;
        }
        after_privateGists:        $result['private_gists'] = $privateGists;

        
        $diskUsage = $object->diskUsage;

        if ($diskUsage === null) {
            goto after_diskUsage;
        }
        after_diskUsage:        $result['disk_usage'] = $diskUsage;

        
        $collaborators = $object->collaborators;

        if ($collaborators === null) {
            goto after_collaborators;
        }
        after_collaborators:        $result['collaborators'] = $collaborators;

        
        $billingEmail = $object->billingEmail;

        if ($billingEmail === null) {
            goto after_billingEmail;
        }
        after_billingEmail:        $result['billing_email'] = $billingEmail;

        
        $plan = $object->plan;

        if ($plan === null) {
            goto after_plan;
        }
        $plan = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️OrganizationFull⚡️Plan($plan);
        after_plan:        $result['plan'] = $plan;

        
        $defaultRepositoryPermission = $object->defaultRepositoryPermission;

        if ($defaultRepositoryPermission === null) {
            goto after_defaultRepositoryPermission;
        }
        after_defaultRepositoryPermission:        $result['default_repository_permission'] = $defaultRepositoryPermission;

        
        $membersCanCreateRepositories = $object->membersCanCreateRepositories;

        if ($membersCanCreateRepositories === null) {
            goto after_membersCanCreateRepositories;
        }
        after_membersCanCreateRepositories:        $result['members_can_create_repositories'] = $membersCanCreateRepositories;

        
        $twoFactorRequirementEnabled = $object->twoFactorRequirementEnabled;

        if ($twoFactorRequirementEnabled === null) {
            goto after_twoFactorRequirementEnabled;
        }
        after_twoFactorRequirementEnabled:        $result['two_factor_requirement_enabled'] = $twoFactorRequirementEnabled;

        
        $membersAllowedRepositoryCreationType = $object->membersAllowedRepositoryCreationType;

        if ($membersAllowedRepositoryCreationType === null) {
            goto after_membersAllowedRepositoryCreationType;
        }
        after_membersAllowedRepositoryCreationType:        $result['members_allowed_repository_creation_type'] = $membersAllowedRepositoryCreationType;

        
        $membersCanCreatePublicRepositories = $object->membersCanCreatePublicRepositories;

        if ($membersCanCreatePublicRepositories === null) {
            goto after_membersCanCreatePublicRepositories;
        }
        after_membersCanCreatePublicRepositories:        $result['members_can_create_public_repositories'] = $membersCanCreatePublicRepositories;

        
        $membersCanCreatePrivateRepositories = $object->membersCanCreatePrivateRepositories;

        if ($membersCanCreatePrivateRepositories === null) {
            goto after_membersCanCreatePrivateRepositories;
        }
        after_membersCanCreatePrivateRepositories:        $result['members_can_create_private_repositories'] = $membersCanCreatePrivateRepositories;

        
        $membersCanCreateInternalRepositories = $object->membersCanCreateInternalRepositories;

        if ($membersCanCreateInternalRepositories === null) {
            goto after_membersCanCreateInternalRepositories;
        }
        after_membersCanCreateInternalRepositories:        $result['members_can_create_internal_repositories'] = $membersCanCreateInternalRepositories;

        
        $membersCanCreatePages = $object->membersCanCreatePages;

        if ($membersCanCreatePages === null) {
            goto after_membersCanCreatePages;
        }
        after_membersCanCreatePages:        $result['members_can_create_pages'] = $membersCanCreatePages;

        
        $membersCanCreatePublicPages = $object->membersCanCreatePublicPages;

        if ($membersCanCreatePublicPages === null) {
            goto after_membersCanCreatePublicPages;
        }
        after_membersCanCreatePublicPages:        $result['members_can_create_public_pages'] = $membersCanCreatePublicPages;

        
        $membersCanCreatePrivatePages = $object->membersCanCreatePrivatePages;

        if ($membersCanCreatePrivatePages === null) {
            goto after_membersCanCreatePrivatePages;
        }
        after_membersCanCreatePrivatePages:        $result['members_can_create_private_pages'] = $membersCanCreatePrivatePages;

        
        $membersCanForkPrivateRepositories = $object->membersCanForkPrivateRepositories;

        if ($membersCanForkPrivateRepositories === null) {
            goto after_membersCanForkPrivateRepositories;
        }
        after_membersCanForkPrivateRepositories:        $result['members_can_fork_private_repositories'] = $membersCanForkPrivateRepositories;

        
        $webCommitSignoffRequired = $object->webCommitSignoffRequired;

        if ($webCommitSignoffRequired === null) {
            goto after_webCommitSignoffRequired;
        }
        after_webCommitSignoffRequired:        $result['web_commit_signoff_required'] = $webCommitSignoffRequired;

        
        $updatedAt = $object->updatedAt;
        after_updatedAt:        $result['updated_at'] = $updatedAt;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️OrganizationFull⚡️Plan(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\OrganizationFull\Plan);
        $result = [];

        $name = $object->name;
        after_name:        $result['name'] = $name;

        
        $space = $object->space;
        after_space:        $result['space'] = $space;

        
        $privateRepos = $object->privateRepos;
        after_privateRepos:        $result['private_repos'] = $privateRepos;

        
        $filledSeats = $object->filledSeats;

        if ($filledSeats === null) {
            goto after_filledSeats;
        }
        after_filledSeats:        $result['filled_seats'] = $filledSeats;

        
        $seats = $object->seats;

        if ($seats === null) {
            goto after_seats;
        }
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

        
        $documentationUrl = $object->documentationUrl;

        if ($documentationUrl === null) {
            goto after_documentationUrl;
        }
        after_documentationUrl:        $result['documentation_url'] = $documentationUrl;

        
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
        after_message:        $result['message'] = $message;

        
        $documentationUrl = $object->documentationUrl;
        after_documentationUrl:        $result['documentation_url'] = $documentationUrl;

        
        $errors = $object->errors;

        if ($errors === null) {
            goto after_errors;
        }
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
