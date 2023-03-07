<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Hydrator\Operation\User;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class Installations implements ObjectMapper
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
            'ApiClients\Client\GitHub\Schema\Operation\Orgs\ListAppInstallations\Response\Applicationjson\H200' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Operation⚡️Orgs⚡️ListAppInstallations⚡️Response⚡️Applicationjson⚡️H200($payload),
                'ApiClients\Client\GitHub\Schema\Installation' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Installation($payload),
                'ApiClients\Client\GitHub\Schema\SimpleUser' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($payload),
                'ApiClients\Client\GitHub\Schema\AppPermissions' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️AppPermissions($payload),
                'ApiClients\Client\GitHub\Schema\BasicError' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BasicError($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Operation⚡️Orgs⚡️ListAppInstallations⚡️Response⚡️Applicationjson⚡️H200(array $payload): \ApiClients\Client\GitHub\Schema\Operation\Orgs\ListAppInstallations\Response\Applicationjson\H200
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['total_count'] ?? null;
    
                if ($value === null) {
                    $properties['total_count'] = null;
                    goto after_total_count;
                }

                $properties['total_count'] = $value;
    
                after_total_count:

                $value = $payload['installations'] ?? null;
    
                if ($value === null) {
                    $properties['installations'] = null;
                    goto after_installations;
                }

                static $installationsCaster1;
    
                if ($installationsCaster1 === null) {
                    $installationsCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\Installation',
));
                }
    
                $value = $installationsCaster1->cast($value, $this);

                $properties['installations'] = $value;
    
                after_installations:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Operation\Orgs\ListAppInstallations\Response\Applicationjson\H200', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\Operation\Orgs\ListAppInstallations\Response\Applicationjson\H200::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\Operation\Orgs\ListAppInstallations\Response\Applicationjson\H200(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Operation\Orgs\ListAppInstallations\Response\Applicationjson\H200', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Installation(array $payload): \ApiClients\Client\GitHub\Schema\Installation
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

                $value = $payload['account'] ?? null;
    
                if ($value === null) {
                    $properties['account'] = null;
                    goto after_account;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'account';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['account'] = $value;
    
                after_account:

                $value = $payload['repository_selection'] ?? null;
    
                if ($value === null) {
                    $properties['repository_selection'] = null;
                    goto after_repository_selection;
                }

                $properties['repository_selection'] = $value;
    
                after_repository_selection:

                $value = $payload['access_tokens_url'] ?? null;
    
                if ($value === null) {
                    $properties['access_tokens_url'] = null;
                    goto after_access_tokens_url;
                }

                $properties['access_tokens_url'] = $value;
    
                after_access_tokens_url:

                $value = $payload['repositories_url'] ?? null;
    
                if ($value === null) {
                    $properties['repositories_url'] = null;
                    goto after_repositories_url;
                }

                $properties['repositories_url'] = $value;
    
                after_repositories_url:

                $value = $payload['html_url'] ?? null;
    
                if ($value === null) {
                    $properties['html_url'] = null;
                    goto after_html_url;
                }

                $properties['html_url'] = $value;
    
                after_html_url:

                $value = $payload['app_id'] ?? null;
    
                if ($value === null) {
                    $properties['app_id'] = null;
                    goto after_app_id;
                }

                $properties['app_id'] = $value;
    
                after_app_id:

                $value = $payload['target_id'] ?? null;
    
                if ($value === null) {
                    $properties['target_id'] = null;
                    goto after_target_id;
                }

                $properties['target_id'] = $value;
    
                after_target_id:

                $value = $payload['target_type'] ?? null;
    
                if ($value === null) {
                    $properties['target_type'] = null;
                    goto after_target_type;
                }

                $properties['target_type'] = $value;
    
                after_target_type:

                $value = $payload['permissions'] ?? null;
    
                if ($value === null) {
                    $properties['permissions'] = null;
                    goto after_permissions;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'permissions';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️AppPermissions($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['permissions'] = $value;
    
                after_permissions:

                $value = $payload['events'] ?? null;
    
                if ($value === null) {
                    $properties['events'] = null;
                    goto after_events;
                }

                $properties['events'] = $value;
    
                after_events:

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

                $value = $payload['single_file_name'] ?? null;
    
                if ($value === null) {
                    $properties['single_file_name'] = null;
                    goto after_single_file_name;
                }

                $properties['single_file_name'] = $value;
    
                after_single_file_name:

                $value = $payload['has_multiple_single_files'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'has_multiple_single_files';
                    goto after_has_multiple_single_files;
                }

                $properties['has_multiple_single_files'] = $value;
    
                after_has_multiple_single_files:

                $value = $payload['single_file_paths'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'single_file_paths';
                    goto after_single_file_paths;
                }

                $properties['single_file_paths'] = $value;
    
                after_single_file_paths:

                $value = $payload['app_slug'] ?? null;
    
                if ($value === null) {
                    $properties['app_slug'] = null;
                    goto after_app_slug;
                }

                $properties['app_slug'] = $value;
    
                after_app_slug:

                $value = $payload['suspended_by'] ?? null;
    
                if ($value === null) {
                    $properties['suspended_by'] = null;
                    goto after_suspended_by;
                }

                $properties['suspended_by'] = $value;
    
                after_suspended_by:

                $value = $payload['suspended_at'] ?? null;
    
                if ($value === null) {
                    $properties['suspended_at'] = null;
                    goto after_suspended_at;
                }

                $properties['suspended_at'] = $value;
    
                after_suspended_at:

                $value = $payload['contact_email'] ?? null;
    
                if ($value === null) {
                    $properties['contact_email'] = null;
                    goto after_contact_email;
                }

                $properties['contact_email'] = $value;
    
                after_contact_email:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Installation', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\Installation::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\Installation(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Installation', $exception, stack: $this->hydrationStack);
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

        
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️AppPermissions(array $payload): \ApiClients\Client\GitHub\Schema\AppPermissions
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

                $value = $payload['metadata'] ?? null;
    
                if ($value === null) {
                    $properties['metadata'] = null;
                    goto after_metadata;
                }

                $properties['metadata'] = $value;
    
                after_metadata:

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
                    $properties['pull_requests'] = null;
                    goto after_pull_requests;
                }

                $properties['pull_requests'] = $value;
    
                after_pull_requests:

                $value = $payload['repository_announcement_banners'] ?? null;
    
                if ($value === null) {
                    $properties['repository_announcement_banners'] = null;
                    goto after_repository_announcement_banners;
                }

                $properties['repository_announcement_banners'] = $value;
    
                after_repository_announcement_banners:

                $value = $payload['repository_hooks'] ?? null;
    
                if ($value === null) {
                    $properties['repository_hooks'] = null;
                    goto after_repository_hooks;
                }

                $properties['repository_hooks'] = $value;
    
                after_repository_hooks:

                $value = $payload['repository_projects'] ?? null;
    
                if ($value === null) {
                    $properties['repository_projects'] = null;
                    goto after_repository_projects;
                }

                $properties['repository_projects'] = $value;
    
                after_repository_projects:

                $value = $payload['secret_scanning_alerts'] ?? null;
    
                if ($value === null) {
                    $properties['secret_scanning_alerts'] = null;
                    goto after_secret_scanning_alerts;
                }

                $properties['secret_scanning_alerts'] = $value;
    
                after_secret_scanning_alerts:

                $value = $payload['secrets'] ?? null;
    
                if ($value === null) {
                    $properties['secrets'] = null;
                    goto after_secrets;
                }

                $properties['secrets'] = $value;
    
                after_secrets:

                $value = $payload['security_events'] ?? null;
    
                if ($value === null) {
                    $properties['security_events'] = null;
                    goto after_security_events;
                }

                $properties['security_events'] = $value;
    
                after_security_events:

                $value = $payload['single_file'] ?? null;
    
                if ($value === null) {
                    $properties['single_file'] = null;
                    goto after_single_file;
                }

                $properties['single_file'] = $value;
    
                after_single_file:

                $value = $payload['statuses'] ?? null;
    
                if ($value === null) {
                    $properties['statuses'] = null;
                    goto after_statuses;
                }

                $properties['statuses'] = $value;
    
                after_statuses:

                $value = $payload['vulnerability_alerts'] ?? null;
    
                if ($value === null) {
                    $properties['vulnerability_alerts'] = null;
                    goto after_vulnerability_alerts;
                }

                $properties['vulnerability_alerts'] = $value;
    
                after_vulnerability_alerts:

                $value = $payload['workflows'] ?? null;
    
                if ($value === null) {
                    $properties['workflows'] = null;
                    goto after_workflows;
                }

                $properties['workflows'] = $value;
    
                after_workflows:

                $value = $payload['members'] ?? null;
    
                if ($value === null) {
                    $properties['members'] = null;
                    goto after_members;
                }

                $properties['members'] = $value;
    
                after_members:

                $value = $payload['organization_administration'] ?? null;
    
                if ($value === null) {
                    $properties['organization_administration'] = null;
                    goto after_organization_administration;
                }

                $properties['organization_administration'] = $value;
    
                after_organization_administration:

                $value = $payload['organization_custom_roles'] ?? null;
    
                if ($value === null) {
                    $properties['organization_custom_roles'] = null;
                    goto after_organization_custom_roles;
                }

                $properties['organization_custom_roles'] = $value;
    
                after_organization_custom_roles:

                $value = $payload['organization_announcement_banners'] ?? null;
    
                if ($value === null) {
                    $properties['organization_announcement_banners'] = null;
                    goto after_organization_announcement_banners;
                }

                $properties['organization_announcement_banners'] = $value;
    
                after_organization_announcement_banners:

                $value = $payload['organization_hooks'] ?? null;
    
                if ($value === null) {
                    $properties['organization_hooks'] = null;
                    goto after_organization_hooks;
                }

                $properties['organization_hooks'] = $value;
    
                after_organization_hooks:

                $value = $payload['organization_plan'] ?? null;
    
                if ($value === null) {
                    $properties['organization_plan'] = null;
                    goto after_organization_plan;
                }

                $properties['organization_plan'] = $value;
    
                after_organization_plan:

                $value = $payload['organization_projects'] ?? null;
    
                if ($value === null) {
                    $properties['organization_projects'] = null;
                    goto after_organization_projects;
                }

                $properties['organization_projects'] = $value;
    
                after_organization_projects:

                $value = $payload['organization_packages'] ?? null;
    
                if ($value === null) {
                    $properties['organization_packages'] = null;
                    goto after_organization_packages;
                }

                $properties['organization_packages'] = $value;
    
                after_organization_packages:

                $value = $payload['organization_secrets'] ?? null;
    
                if ($value === null) {
                    $properties['organization_secrets'] = null;
                    goto after_organization_secrets;
                }

                $properties['organization_secrets'] = $value;
    
                after_organization_secrets:

                $value = $payload['organization_self_hosted_runners'] ?? null;
    
                if ($value === null) {
                    $properties['organization_self_hosted_runners'] = null;
                    goto after_organization_self_hosted_runners;
                }

                $properties['organization_self_hosted_runners'] = $value;
    
                after_organization_self_hosted_runners:

                $value = $payload['organization_user_blocking'] ?? null;
    
                if ($value === null) {
                    $properties['organization_user_blocking'] = null;
                    goto after_organization_user_blocking;
                }

                $properties['organization_user_blocking'] = $value;
    
                after_organization_user_blocking:

                $value = $payload['team_discussions'] ?? null;
    
                if ($value === null) {
                    $properties['team_discussions'] = null;
                    goto after_team_discussions;
                }

                $properties['team_discussions'] = $value;
    
                after_team_discussions:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\AppPermissions', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\AppPermissions::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\AppPermissions(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\AppPermissions', $exception, stack: $this->hydrationStack);
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
                'ApiClients\Client\GitHub\Schema\Operation\Orgs\ListAppInstallations\Response\Applicationjson\H200' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Operation⚡️Orgs⚡️ListAppInstallations⚡️Response⚡️Applicationjson⚡️H200($object),
                'ApiClients\Client\GitHub\Schema\Installation' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Installation($object),
                'ApiClients\Client\GitHub\Schema\SimpleUser' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($object),
                'ApiClients\Client\GitHub\Schema\AppPermissions' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️AppPermissions($object),
                'ApiClients\Client\GitHub\Schema\BasicError' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BasicError($object),
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

    
    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Operation⚡️Orgs⚡️ListAppInstallations⚡️Response⚡️Applicationjson⚡️H200(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\Operation\Orgs\ListAppInstallations\Response\Applicationjson\H200);
        $result = [];
        
        $total_count = $object->total_count;

        if ($total_count === null) {
            goto after_total_count;
        }
        after_total_count:        $result['total_count'] = $total_count;

        
        $installations = $object->installations;

        if ($installations === null) {
            goto after_installations;
        }
        static $installationsSerializer0;

        if ($installationsSerializer0 === null) {
            $installationsSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\Installation',
));
        }
        
        $installations = $installationsSerializer0->serialize($installations, $this);
        after_installations:        $result['installations'] = $installations;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Installation(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\Installation);
        $result = [];
        
        $id = $object->id;

        if ($id === null) {
            goto after_id;
        }
        after_id:        $result['id'] = $id;

        
        $account = $object->account;

        if ($account === null) {
            goto after_account;
        }
        $account = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($account);
        after_account:        $result['account'] = $account;

        
        $repository_selection = $object->repository_selection;

        if ($repository_selection === null) {
            goto after_repository_selection;
        }
        after_repository_selection:        $result['repository_selection'] = $repository_selection;

        
        $access_tokens_url = $object->access_tokens_url;

        if ($access_tokens_url === null) {
            goto after_access_tokens_url;
        }
        after_access_tokens_url:        $result['access_tokens_url'] = $access_tokens_url;

        
        $repositories_url = $object->repositories_url;

        if ($repositories_url === null) {
            goto after_repositories_url;
        }
        after_repositories_url:        $result['repositories_url'] = $repositories_url;

        
        $html_url = $object->html_url;

        if ($html_url === null) {
            goto after_html_url;
        }
        after_html_url:        $result['html_url'] = $html_url;

        
        $app_id = $object->app_id;

        if ($app_id === null) {
            goto after_app_id;
        }
        after_app_id:        $result['app_id'] = $app_id;

        
        $target_id = $object->target_id;

        if ($target_id === null) {
            goto after_target_id;
        }
        after_target_id:        $result['target_id'] = $target_id;

        
        $target_type = $object->target_type;

        if ($target_type === null) {
            goto after_target_type;
        }
        after_target_type:        $result['target_type'] = $target_type;

        
        $permissions = $object->permissions;

        if ($permissions === null) {
            goto after_permissions;
        }
        $permissions = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️AppPermissions($permissions);
        after_permissions:        $result['permissions'] = $permissions;

        
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

        
        $single_file_name = $object->single_file_name;

        if ($single_file_name === null) {
            goto after_single_file_name;
        }
        after_single_file_name:        $result['single_file_name'] = $single_file_name;

        
        $has_multiple_single_files = $object->has_multiple_single_files;
        after_has_multiple_single_files:        $result['has_multiple_single_files'] = $has_multiple_single_files;

        
        $single_file_paths = $object->single_file_paths;
        static $single_file_pathsSerializer0;

        if ($single_file_pathsSerializer0 === null) {
            $single_file_pathsSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $single_file_paths = $single_file_pathsSerializer0->serialize($single_file_paths, $this);
        after_single_file_paths:        $result['single_file_paths'] = $single_file_paths;

        
        $app_slug = $object->app_slug;

        if ($app_slug === null) {
            goto after_app_slug;
        }
        after_app_slug:        $result['app_slug'] = $app_slug;

        
        $suspended_by = $object->suspended_by;

        if ($suspended_by === null) {
            goto after_suspended_by;
        }
        after_suspended_by:        $result['suspended_by'] = $suspended_by;

        
        $suspended_at = $object->suspended_at;

        if ($suspended_at === null) {
            goto after_suspended_at;
        }
        after_suspended_at:        $result['suspended_at'] = $suspended_at;

        
        $contact_email = $object->contact_email;

        if ($contact_email === null) {
            goto after_contact_email;
        }
        after_contact_email:        $result['contact_email'] = $contact_email;


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

    
    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️AppPermissions(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\AppPermissions);
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

        
        $metadata = $object->metadata;

        if ($metadata === null) {
            goto after_metadata;
        }
        after_metadata:        $result['metadata'] = $metadata;

        
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

        
        $pull_requests = $object->pull_requests;

        if ($pull_requests === null) {
            goto after_pull_requests;
        }
        after_pull_requests:        $result['pull_requests'] = $pull_requests;

        
        $repository_announcement_banners = $object->repository_announcement_banners;

        if ($repository_announcement_banners === null) {
            goto after_repository_announcement_banners;
        }
        after_repository_announcement_banners:        $result['repository_announcement_banners'] = $repository_announcement_banners;

        
        $repository_hooks = $object->repository_hooks;

        if ($repository_hooks === null) {
            goto after_repository_hooks;
        }
        after_repository_hooks:        $result['repository_hooks'] = $repository_hooks;

        
        $repository_projects = $object->repository_projects;

        if ($repository_projects === null) {
            goto after_repository_projects;
        }
        after_repository_projects:        $result['repository_projects'] = $repository_projects;

        
        $secret_scanning_alerts = $object->secret_scanning_alerts;

        if ($secret_scanning_alerts === null) {
            goto after_secret_scanning_alerts;
        }
        after_secret_scanning_alerts:        $result['secret_scanning_alerts'] = $secret_scanning_alerts;

        
        $secrets = $object->secrets;

        if ($secrets === null) {
            goto after_secrets;
        }
        after_secrets:        $result['secrets'] = $secrets;

        
        $security_events = $object->security_events;

        if ($security_events === null) {
            goto after_security_events;
        }
        after_security_events:        $result['security_events'] = $security_events;

        
        $single_file = $object->single_file;

        if ($single_file === null) {
            goto after_single_file;
        }
        after_single_file:        $result['single_file'] = $single_file;

        
        $statuses = $object->statuses;

        if ($statuses === null) {
            goto after_statuses;
        }
        after_statuses:        $result['statuses'] = $statuses;

        
        $vulnerability_alerts = $object->vulnerability_alerts;

        if ($vulnerability_alerts === null) {
            goto after_vulnerability_alerts;
        }
        after_vulnerability_alerts:        $result['vulnerability_alerts'] = $vulnerability_alerts;

        
        $workflows = $object->workflows;

        if ($workflows === null) {
            goto after_workflows;
        }
        after_workflows:        $result['workflows'] = $workflows;

        
        $members = $object->members;

        if ($members === null) {
            goto after_members;
        }
        after_members:        $result['members'] = $members;

        
        $organization_administration = $object->organization_administration;

        if ($organization_administration === null) {
            goto after_organization_administration;
        }
        after_organization_administration:        $result['organization_administration'] = $organization_administration;

        
        $organization_custom_roles = $object->organization_custom_roles;

        if ($organization_custom_roles === null) {
            goto after_organization_custom_roles;
        }
        after_organization_custom_roles:        $result['organization_custom_roles'] = $organization_custom_roles;

        
        $organization_announcement_banners = $object->organization_announcement_banners;

        if ($organization_announcement_banners === null) {
            goto after_organization_announcement_banners;
        }
        after_organization_announcement_banners:        $result['organization_announcement_banners'] = $organization_announcement_banners;

        
        $organization_hooks = $object->organization_hooks;

        if ($organization_hooks === null) {
            goto after_organization_hooks;
        }
        after_organization_hooks:        $result['organization_hooks'] = $organization_hooks;

        
        $organization_plan = $object->organization_plan;

        if ($organization_plan === null) {
            goto after_organization_plan;
        }
        after_organization_plan:        $result['organization_plan'] = $organization_plan;

        
        $organization_projects = $object->organization_projects;

        if ($organization_projects === null) {
            goto after_organization_projects;
        }
        after_organization_projects:        $result['organization_projects'] = $organization_projects;

        
        $organization_packages = $object->organization_packages;

        if ($organization_packages === null) {
            goto after_organization_packages;
        }
        after_organization_packages:        $result['organization_packages'] = $organization_packages;

        
        $organization_secrets = $object->organization_secrets;

        if ($organization_secrets === null) {
            goto after_organization_secrets;
        }
        after_organization_secrets:        $result['organization_secrets'] = $organization_secrets;

        
        $organization_self_hosted_runners = $object->organization_self_hosted_runners;

        if ($organization_self_hosted_runners === null) {
            goto after_organization_self_hosted_runners;
        }
        after_organization_self_hosted_runners:        $result['organization_self_hosted_runners'] = $organization_self_hosted_runners;

        
        $organization_user_blocking = $object->organization_user_blocking;

        if ($organization_user_blocking === null) {
            goto after_organization_user_blocking;
        }
        after_organization_user_blocking:        $result['organization_user_blocking'] = $organization_user_blocking;

        
        $team_discussions = $object->team_discussions;

        if ($team_discussions === null) {
            goto after_team_discussions;
        }
        after_team_discussions:        $result['team_discussions'] = $team_discussions;


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
