<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Hydrator\Operation\App\Installations\CbInstallationIdRcb;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class AccessTokens implements ObjectMapper
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
            'ApiClients\Client\Github\Schema\InstallationToken' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️InstallationToken($payload),
                'ApiClients\Client\Github\Schema\BasicError' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️BasicError($payload),
                'ApiClients\Client\Github\Schema\ValidationError' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️ValidationError($payload),
                'ApiClients\Client\Github\Schema\AppPermissions' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️AppPermissions($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
        private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️InstallationToken(array $payload): \ApiClients\Client\Github\Schema\InstallationToken
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['token'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'token';
                    goto after_token;
                }

                $properties['token'] = $value;
    
                after_token:

                $value = $payload['expires_at'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'expires_at';
                    goto after_expires_at;
                }

                $properties['expires_at'] = $value;
    
                after_expires_at:

                $value = $payload['permissions'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'permissions';
                    goto after_permissions;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'permissions';
                        $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️AppPermissions($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['permissions'] = $value;
    
                after_permissions:

                $value = $payload['repository_selection'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'repository_selection';
                    goto after_repository_selection;
                }

                $properties['repository_selection'] = $value;
    
                after_repository_selection:

                $value = $payload['repositories'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'repositories';
                    goto after_repositories;
                }

                $properties['repositories'] = $value;
    
                after_repositories:

                $value = $payload['single_file'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'single_file';
                    goto after_single_file;
                }

                $properties['single_file'] = $value;
    
                after_single_file:

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

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\InstallationToken', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\InstallationToken::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\Github\Schema\InstallationToken(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\InstallationToken', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️BasicError(array $payload): \ApiClients\Client\Github\Schema\BasicError
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
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\BasicError', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\BasicError::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\Github\Schema\BasicError(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\BasicError', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️ValidationError(array $payload): \ApiClients\Client\Github\Schema\ValidationError
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
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\ValidationError', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\ValidationError::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\Github\Schema\ValidationError(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\ValidationError', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️AppPermissions(array $payload): \ApiClients\Client\Github\Schema\AppPermissions
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
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\AppPermissions', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\AppPermissions::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\Github\Schema\AppPermissions(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\AppPermissions', $exception, stack: $this->hydrationStack);
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
                'ApiClients\Client\Github\Schema\InstallationToken' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️InstallationToken($object),
                'ApiClients\Client\Github\Schema\BasicError' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️BasicError($object),
                'ApiClients\Client\Github\Schema\ValidationError' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️ValidationError($object),
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

    
    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️InstallationToken(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\InstallationToken);
        $result = [];
        
        $token = $object->token;

        if ($token === null) {
            goto after_token;
        }
        after_token:        $result['token'] = $token;

        
        $expires_at = $object->expires_at;

        if ($expires_at === null) {
            goto after_expires_at;
        }
        after_expires_at:        $result['expires_at'] = $expires_at;

        
        $permissions = $object->permissions;
        $permissions = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️AppPermissions($permissions);
        after_permissions:        $result['permissions'] = $permissions;

        
        $repository_selection = $object->repository_selection;
        after_repository_selection:        $result['repository_selection'] = $repository_selection;

        
        $repositories = $object->repositories;
        static $repositoriesSerializer0;

        if ($repositoriesSerializer0 === null) {
            $repositoriesSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $repositories = $repositoriesSerializer0->serialize($repositories, $this);
        after_repositories:        $result['repositories'] = $repositories;

        
        $single_file = $object->single_file;
        after_single_file:        $result['single_file'] = $single_file;

        
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


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️BasicError(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\BasicError);
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

    
    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️ValidationError(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\ValidationError);
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
