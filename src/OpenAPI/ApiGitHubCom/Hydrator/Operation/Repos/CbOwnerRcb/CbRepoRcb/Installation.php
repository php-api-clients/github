<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class Installation implements ObjectMapper
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
            'ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Installation' => $this->hydrateApiClients⚡️Client⚡️Github⚡️OpenAPI⚡️ApiGitHubCom⚡️Schema⚡️Installation($payload),
                'ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError' => $this->hydrateApiClients⚡️Client⚡️Github⚡️OpenAPI⚡️ApiGitHubCom⚡️Schema⚡️BasicError($payload),
                'ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Installation\Account' => $this->hydrateApiClients⚡️Client⚡️Github⚡️OpenAPI⚡️ApiGitHubCom⚡️Schema⚡️Installation⚡️Account($payload),
                'ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\AppPermissions' => $this->hydrateApiClients⚡️Client⚡️Github⚡️OpenAPI⚡️ApiGitHubCom⚡️Schema⚡️AppPermissions($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
        private function hydrateApiClients⚡️Client⚡️Github⚡️OpenAPI⚡️ApiGitHubCom⚡️Schema⚡️Installation(array $payload): \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Installation
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

                $value = $payload['account'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'account';
                    goto after_account;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'account';
                        $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️OpenAPI⚡️ApiGitHubCom⚡️Schema⚡️Installation⚡️Account($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['account'] = $value;
    
                after_account:

                $value = $payload['repository_selection'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'repository_selection';
                    goto after_repository_selection;
                }

                $properties['repository_selection'] = $value;
    
                after_repository_selection:

                $value = $payload['access_tokens_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'access_tokens_url';
                    goto after_access_tokens_url;
                }

                $properties['access_tokens_url'] = $value;
    
                after_access_tokens_url:

                $value = $payload['repositories_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'repositories_url';
                    goto after_repositories_url;
                }

                $properties['repositories_url'] = $value;
    
                after_repositories_url:

                $value = $payload['html_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'html_url';
                    goto after_html_url;
                }

                $properties['html_url'] = $value;
    
                after_html_url:

                $value = $payload['app_id'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'app_id';
                    goto after_app_id;
                }

                $properties['app_id'] = $value;
    
                after_app_id:

                $value = $payload['target_id'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'target_id';
                    goto after_target_id;
                }

                $properties['target_id'] = $value;
    
                after_target_id:

                $value = $payload['target_type'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'target_type';
                    goto after_target_type;
                }

                $properties['target_type'] = $value;
    
                after_target_type:

                $value = $payload['permissions'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'permissions';
                    goto after_permissions;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'permissions';
                        $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️OpenAPI⚡️ApiGitHubCom⚡️Schema⚡️AppPermissions($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['permissions'] = $value;
    
                after_permissions:

                $value = $payload['events'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'events';
                    goto after_events;
                }

                $properties['events'] = $value;
    
                after_events:

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

                $value = $payload['single_file_name'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'single_file_name';
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
                    $missingFields[] = 'app_slug';
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
                    $missingFields[] = 'suspended_at';
                    goto after_suspended_at;
                }

                $properties['suspended_at'] = $value;
    
                after_suspended_at:

                $value = $payload['contact_email'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'contact_email';
                    goto after_contact_email;
                }

                $properties['contact_email'] = $value;
    
                after_contact_email:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Installation', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Installation::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Installation(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Installation', $exception, stack: $this->hydrationStack);
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

        
        private function hydrateApiClients⚡️Client⚡️Github⚡️OpenAPI⚡️ApiGitHubCom⚡️Schema⚡️Installation⚡️Account(array $payload): \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Installation\Account
        {
            $properties = []; 
            $missingFields = [];
            try {
                
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Installation\Account', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Installation\Account::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Installation\Account(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Installation\Account', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️Github⚡️OpenAPI⚡️ApiGitHubCom⚡️Schema⚡️AppPermissions(array $payload): \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\AppPermissions
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['actions'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'actions';
                    goto after_actions;
                }

                $properties['actions'] = $value;
    
                after_actions:

                $value = $payload['administration'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'administration';
                    goto after_administration;
                }

                $properties['administration'] = $value;
    
                after_administration:

                $value = $payload['checks'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'checks';
                    goto after_checks;
                }

                $properties['checks'] = $value;
    
                after_checks:

                $value = $payload['contents'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'contents';
                    goto after_contents;
                }

                $properties['contents'] = $value;
    
                after_contents:

                $value = $payload['deployments'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'deployments';
                    goto after_deployments;
                }

                $properties['deployments'] = $value;
    
                after_deployments:

                $value = $payload['environments'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'environments';
                    goto after_environments;
                }

                $properties['environments'] = $value;
    
                after_environments:

                $value = $payload['issues'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'issues';
                    goto after_issues;
                }

                $properties['issues'] = $value;
    
                after_issues:

                $value = $payload['metadata'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'metadata';
                    goto after_metadata;
                }

                $properties['metadata'] = $value;
    
                after_metadata:

                $value = $payload['packages'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'packages';
                    goto after_packages;
                }

                $properties['packages'] = $value;
    
                after_packages:

                $value = $payload['pages'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'pages';
                    goto after_pages;
                }

                $properties['pages'] = $value;
    
                after_pages:

                $value = $payload['pull_requests'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'pull_requests';
                    goto after_pull_requests;
                }

                $properties['pull_requests'] = $value;
    
                after_pull_requests:

                $value = $payload['repository_announcement_banners'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'repository_announcement_banners';
                    goto after_repository_announcement_banners;
                }

                $properties['repository_announcement_banners'] = $value;
    
                after_repository_announcement_banners:

                $value = $payload['repository_hooks'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'repository_hooks';
                    goto after_repository_hooks;
                }

                $properties['repository_hooks'] = $value;
    
                after_repository_hooks:

                $value = $payload['repository_projects'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'repository_projects';
                    goto after_repository_projects;
                }

                $properties['repository_projects'] = $value;
    
                after_repository_projects:

                $value = $payload['secret_scanning_alerts'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'secret_scanning_alerts';
                    goto after_secret_scanning_alerts;
                }

                $properties['secret_scanning_alerts'] = $value;
    
                after_secret_scanning_alerts:

                $value = $payload['secrets'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'secrets';
                    goto after_secrets;
                }

                $properties['secrets'] = $value;
    
                after_secrets:

                $value = $payload['security_events'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'security_events';
                    goto after_security_events;
                }

                $properties['security_events'] = $value;
    
                after_security_events:

                $value = $payload['single_file'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'single_file';
                    goto after_single_file;
                }

                $properties['single_file'] = $value;
    
                after_single_file:

                $value = $payload['statuses'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'statuses';
                    goto after_statuses;
                }

                $properties['statuses'] = $value;
    
                after_statuses:

                $value = $payload['vulnerability_alerts'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'vulnerability_alerts';
                    goto after_vulnerability_alerts;
                }

                $properties['vulnerability_alerts'] = $value;
    
                after_vulnerability_alerts:

                $value = $payload['workflows'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'workflows';
                    goto after_workflows;
                }

                $properties['workflows'] = $value;
    
                after_workflows:

                $value = $payload['members'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'members';
                    goto after_members;
                }

                $properties['members'] = $value;
    
                after_members:

                $value = $payload['organization_administration'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'organization_administration';
                    goto after_organization_administration;
                }

                $properties['organization_administration'] = $value;
    
                after_organization_administration:

                $value = $payload['organization_custom_roles'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'organization_custom_roles';
                    goto after_organization_custom_roles;
                }

                $properties['organization_custom_roles'] = $value;
    
                after_organization_custom_roles:

                $value = $payload['organization_announcement_banners'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'organization_announcement_banners';
                    goto after_organization_announcement_banners;
                }

                $properties['organization_announcement_banners'] = $value;
    
                after_organization_announcement_banners:

                $value = $payload['organization_hooks'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'organization_hooks';
                    goto after_organization_hooks;
                }

                $properties['organization_hooks'] = $value;
    
                after_organization_hooks:

                $value = $payload['organization_plan'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'organization_plan';
                    goto after_organization_plan;
                }

                $properties['organization_plan'] = $value;
    
                after_organization_plan:

                $value = $payload['organization_projects'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'organization_projects';
                    goto after_organization_projects;
                }

                $properties['organization_projects'] = $value;
    
                after_organization_projects:

                $value = $payload['organization_packages'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'organization_packages';
                    goto after_organization_packages;
                }

                $properties['organization_packages'] = $value;
    
                after_organization_packages:

                $value = $payload['organization_secrets'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'organization_secrets';
                    goto after_organization_secrets;
                }

                $properties['organization_secrets'] = $value;
    
                after_organization_secrets:

                $value = $payload['organization_self_hosted_runners'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'organization_self_hosted_runners';
                    goto after_organization_self_hosted_runners;
                }

                $properties['organization_self_hosted_runners'] = $value;
    
                after_organization_self_hosted_runners:

                $value = $payload['organization_user_blocking'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'organization_user_blocking';
                    goto after_organization_user_blocking;
                }

                $properties['organization_user_blocking'] = $value;
    
                after_organization_user_blocking:

                $value = $payload['team_discussions'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'team_discussions';
                    goto after_team_discussions;
                }

                $properties['team_discussions'] = $value;
    
                after_team_discussions:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\AppPermissions', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\AppPermissions::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\AppPermissions(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\AppPermissions', $exception, stack: $this->hydrationStack);
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
                'ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Installation' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️OpenAPI⚡️ApiGitHubCom⚡️Schema⚡️Installation($object),
                'ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️OpenAPI⚡️ApiGitHubCom⚡️Schema⚡️BasicError($object),
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

    
    private function serializeObjectApiClients⚡️Client⚡️Github⚡️OpenAPI⚡️ApiGitHubCom⚡️Schema⚡️Installation(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Installation);
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
        $account = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️OpenAPI⚡️ApiGitHubCom⚡️Schema⚡️Installation⚡️Account($account);
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
        $permissions = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️OpenAPI⚡️ApiGitHubCom⚡️Schema⚡️AppPermissions($permissions);
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
