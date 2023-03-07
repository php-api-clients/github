<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Hydrator\WebHook;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class Package implements ObjectMapper
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
            'ApiClients\Client\GitHub\Schema\WebhookPackagePublished' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookPackagePublished($payload),
                'ApiClients\Client\GitHub\Schema\Enterprise' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Enterprise($payload),
                'ApiClients\Client\GitHub\Schema\SimpleInstallation' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleInstallation($payload),
                'ApiClients\Client\GitHub\Schema\OrganizationSimple' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️OrganizationSimple($payload),
                'ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookPackagePublished⚡️Package($payload),
                'ApiClients\Client\GitHub\Schema\Discussion\AnswerChosenBy' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Discussion⚡️AnswerChosenBy($payload),
                'ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package\PackageVersion' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookPackagePublished⚡️Package⚡️PackageVersion($payload),
                'ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package\PackageVersion\ContainerMetadata' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookPackagePublished⚡️Package⚡️PackageVersion⚡️ContainerMetadata($payload),
                'ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package\PackageVersion\ContainerMetadata\Tag' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookPackagePublished⚡️Package⚡️PackageVersion⚡️ContainerMetadata⚡️Tag($payload),
                'ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package\PackageVersion\NpmMetadata' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookPackagePublished⚡️Package⚡️PackageVersion⚡️NpmMetadata($payload),
                'ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package\PackageVersion\NugetMetadata' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookPackagePublished⚡️Package⚡️PackageVersion⚡️NugetMetadata($payload),
                'ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package\PackageVersion\PackageFiles' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookPackagePublished⚡️Package⚡️PackageVersion⚡️PackageFiles($payload),
                'ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package\PackageVersion\Release' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookPackagePublished⚡️Package⚡️PackageVersion⚡️Release($payload),
                'ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package\Registry' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookPackagePublished⚡️Package⚡️Registry($payload),
                'ApiClients\Client\GitHub\Schema\Repository' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Repository($payload),
                'ApiClients\Client\GitHub\Schema\Repository\Permissions' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Repository⚡️Permissions($payload),
                'ApiClients\Client\GitHub\Schema\SimpleUser' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($payload),
                'ApiClients\Client\GitHub\Schema\Repository\TemplateRepository' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Repository⚡️TemplateRepository($payload),
                'ApiClients\Client\GitHub\Schema\Repository\TemplateRepository\Owner' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Repository⚡️TemplateRepository⚡️Owner($payload),
                'ApiClients\Client\GitHub\Schema\Repository\TemplateRepository\Permissions' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Repository⚡️TemplateRepository⚡️Permissions($payload),
                'ApiClients\Client\GitHub\Schema\WebhookPackageUpdated' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookPackageUpdated($payload),
                'ApiClients\Client\GitHub\Schema\WebhookPackageUpdated\Package' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookPackageUpdated⚡️Package($payload),
                'ApiClients\Client\GitHub\Schema\WebhookPackageUpdated\Package\PackageVersion' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookPackageUpdated⚡️Package⚡️PackageVersion($payload),
                'ApiClients\Client\GitHub\Schema\WebhookPackageUpdated\Package\PackageVersion\PackageFiles' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookPackageUpdated⚡️Package⚡️PackageVersion⚡️PackageFiles($payload),
                'ApiClients\Client\GitHub\Schema\WebhookPackageUpdated\Package\PackageVersion\Release' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookPackageUpdated⚡️Package⚡️PackageVersion⚡️Release($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookPackagePublished(array $payload): \ApiClients\Client\GitHub\Schema\WebhookPackagePublished
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

                $value = $payload['enterprise'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'enterprise';
                    goto after_enterprise;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'enterprise';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Enterprise($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['enterprise'] = $value;
    
                after_enterprise:

                $value = $payload['installation'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'installation';
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

                $value = $payload['package'] ?? null;
    
                if ($value === null) {
                    $properties['package'] = null;
                    goto after_package;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'package';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookPackagePublished⚡️Package($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['package'] = $value;
    
                after_package:

                $value = $payload['repository'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'repository';
                    goto after_repository;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'repository';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Repository($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['repository'] = $value;
    
                after_repository:

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
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookPackagePublished', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookPackagePublished::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\WebhookPackagePublished(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookPackagePublished', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Enterprise(array $payload): \ApiClients\Client\GitHub\Schema\Enterprise
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['description'] ?? null;
    
                if ($value === null) {
                    $properties['description'] = null;
                    goto after_description;
                }

                $properties['description'] = $value;
    
                after_description:

                $value = $payload['html_url'] ?? null;
    
                if ($value === null) {
                    $properties['html_url'] = null;
                    goto after_html_url;
                }

                $properties['html_url'] = $value;
    
                after_html_url:

                $value = $payload['website_url'] ?? null;
    
                if ($value === null) {
                    $properties['website_url'] = null;
                    goto after_website_url;
                }

                $properties['website_url'] = $value;
    
                after_website_url:

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

                $value = $payload['avatar_url'] ?? null;
    
                if ($value === null) {
                    $properties['avatar_url'] = null;
                    goto after_avatar_url;
                }

                $properties['avatar_url'] = $value;
    
                after_avatar_url:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Enterprise', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\Enterprise::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\Enterprise(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Enterprise', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleInstallation(array $payload): \ApiClients\Client\GitHub\Schema\SimpleInstallation
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

        
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookPackagePublished⚡️Package(array $payload): \ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['created_at'] ?? null;
    
                if ($value === null) {
                    $properties['created_at'] = null;
                    goto after_created_at;
                }

                $properties['created_at'] = $value;
    
                after_created_at:

                $value = $payload['description'] ?? null;
    
                if ($value === null) {
                    $properties['description'] = null;
                    goto after_description;
                }

                $properties['description'] = $value;
    
                after_description:

                $value = $payload['ecosystem'] ?? null;
    
                if ($value === null) {
                    $properties['ecosystem'] = null;
                    goto after_ecosystem;
                }

                $properties['ecosystem'] = $value;
    
                after_ecosystem:

                $value = $payload['html_url'] ?? null;
    
                if ($value === null) {
                    $properties['html_url'] = null;
                    goto after_html_url;
                }

                $properties['html_url'] = $value;
    
                after_html_url:

                $value = $payload['id'] ?? null;
    
                if ($value === null) {
                    $properties['id'] = null;
                    goto after_id;
                }

                $properties['id'] = $value;
    
                after_id:

                $value = $payload['name'] ?? null;
    
                if ($value === null) {
                    $properties['name'] = null;
                    goto after_name;
                }

                $properties['name'] = $value;
    
                after_name:

                $value = $payload['namespace'] ?? null;
    
                if ($value === null) {
                    $properties['namespace'] = null;
                    goto after_namespace;
                }

                $properties['namespace'] = $value;
    
                after_namespace:

                $value = $payload['owner'] ?? null;
    
                if ($value === null) {
                    $properties['owner'] = null;
                    goto after_owner;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'owner';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Discussion⚡️AnswerChosenBy($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['owner'] = $value;
    
                after_owner:

                $value = $payload['package_type'] ?? null;
    
                if ($value === null) {
                    $properties['package_type'] = null;
                    goto after_package_type;
                }

                $properties['package_type'] = $value;
    
                after_package_type:

                $value = $payload['package_version'] ?? null;
    
                if ($value === null) {
                    $properties['package_version'] = null;
                    goto after_package_version;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'package_version';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookPackagePublished⚡️Package⚡️PackageVersion($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['package_version'] = $value;
    
                after_package_version:

                $value = $payload['registry'] ?? null;
    
                if ($value === null) {
                    $properties['registry'] = null;
                    goto after_registry;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'registry';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookPackagePublished⚡️Package⚡️Registry($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['registry'] = $value;
    
                after_registry:

                $value = $payload['updated_at'] ?? null;
    
                if ($value === null) {
                    $properties['updated_at'] = null;
                    goto after_updated_at;
                }

                $properties['updated_at'] = $value;
    
                after_updated_at:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Discussion⚡️AnswerChosenBy(array $payload): \ApiClients\Client\GitHub\Schema\Discussion\AnswerChosenBy
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['avatar_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'avatar_url';
                    goto after_avatar_url;
                }

                $properties['avatar_url'] = $value;
    
                after_avatar_url:

                $value = $payload['deleted'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'deleted';
                    goto after_deleted;
                }

                $properties['deleted'] = $value;
    
                after_deleted:

                $value = $payload['email'] ?? null;
    
                if ($value === null) {
                    $properties['email'] = null;
                    goto after_email;
                }

                $properties['email'] = $value;
    
                after_email:

                $value = $payload['events_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'events_url';
                    goto after_events_url;
                }

                $properties['events_url'] = $value;
    
                after_events_url:

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

                $value = $payload['gravatar_id'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'gravatar_id';
                    goto after_gravatar_id;
                }

                $properties['gravatar_id'] = $value;
    
                after_gravatar_id:

                $value = $payload['html_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'html_url';
                    goto after_html_url;
                }

                $properties['html_url'] = $value;
    
                after_html_url:

                $value = $payload['id'] ?? null;
    
                if ($value === null) {
                    $properties['id'] = null;
                    goto after_id;
                }

                $properties['id'] = $value;
    
                after_id:

                $value = $payload['login'] ?? null;
    
                if ($value === null) {
                    $properties['login'] = null;
                    goto after_login;
                }

                $properties['login'] = $value;
    
                after_login:

                $value = $payload['name'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'name';
                    goto after_name;
                }

                $properties['name'] = $value;
    
                after_name:

                $value = $payload['node_id'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'node_id';
                    goto after_node_id;
                }

                $properties['node_id'] = $value;
    
                after_node_id:

                $value = $payload['organizations_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'organizations_url';
                    goto after_organizations_url;
                }

                $properties['organizations_url'] = $value;
    
                after_organizations_url:

                $value = $payload['received_events_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'received_events_url';
                    goto after_received_events_url;
                }

                $properties['received_events_url'] = $value;
    
                after_received_events_url:

                $value = $payload['repos_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'repos_url';
                    goto after_repos_url;
                }

                $properties['repos_url'] = $value;
    
                after_repos_url:

                $value = $payload['site_admin'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'site_admin';
                    goto after_site_admin;
                }

                $properties['site_admin'] = $value;
    
                after_site_admin:

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

                $value = $payload['type'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'type';
                    goto after_type;
                }

                $properties['type'] = $value;
    
                after_type:

                $value = $payload['url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'url';
                    goto after_url;
                }

                $properties['url'] = $value;
    
                after_url:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Discussion\AnswerChosenBy', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\Discussion\AnswerChosenBy::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\Discussion\AnswerChosenBy(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Discussion\AnswerChosenBy', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookPackagePublished⚡️Package⚡️PackageVersion(array $payload): \ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package\PackageVersion
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['author'] ?? null;
    
                if ($value === null) {
                    $properties['author'] = null;
                    goto after_author;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'author';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Discussion⚡️AnswerChosenBy($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['author'] = $value;
    
                after_author:

                $value = $payload['body'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'body';
                    goto after_body;
                }

                $properties['body'] = $value;
    
                after_body:

                $value = $payload['body_html'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'body_html';
                    goto after_body_html;
                }

                $properties['body_html'] = $value;
    
                after_body_html:

                $value = $payload['container_metadata'] ?? null;
    
                if ($value === null) {
                    $properties['container_metadata'] = null;
                    goto after_container_metadata;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'container_metadata';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookPackagePublished⚡️Package⚡️PackageVersion⚡️ContainerMetadata($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['container_metadata'] = $value;
    
                after_container_metadata:

                $value = $payload['created_at'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'created_at';
                    goto after_created_at;
                }

                $properties['created_at'] = $value;
    
                after_created_at:

                $value = $payload['description'] ?? null;
    
                if ($value === null) {
                    $properties['description'] = null;
                    goto after_description;
                }

                $properties['description'] = $value;
    
                after_description:

                $value = $payload['docker_metadata'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'docker_metadata';
                    goto after_docker_metadata;
                }

                $properties['docker_metadata'] = $value;
    
                after_docker_metadata:

                $value = $payload['draft'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'draft';
                    goto after_draft;
                }

                $properties['draft'] = $value;
    
                after_draft:

                $value = $payload['html_url'] ?? null;
    
                if ($value === null) {
                    $properties['html_url'] = null;
                    goto after_html_url;
                }

                $properties['html_url'] = $value;
    
                after_html_url:

                $value = $payload['id'] ?? null;
    
                if ($value === null) {
                    $properties['id'] = null;
                    goto after_id;
                }

                $properties['id'] = $value;
    
                after_id:

                $value = $payload['installation_command'] ?? null;
    
                if ($value === null) {
                    $properties['installation_command'] = null;
                    goto after_installation_command;
                }

                $properties['installation_command'] = $value;
    
                after_installation_command:

                $value = $payload['manifest'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'manifest';
                    goto after_manifest;
                }

                $properties['manifest'] = $value;
    
                after_manifest:

                $value = $payload['metadata'] ?? null;
    
                if ($value === null) {
                    $properties['metadata'] = null;
                    goto after_metadata;
                }

                $properties['metadata'] = $value;
    
                after_metadata:

                $value = $payload['name'] ?? null;
    
                if ($value === null) {
                    $properties['name'] = null;
                    goto after_name;
                }

                $properties['name'] = $value;
    
                after_name:

                $value = $payload['npm_metadata'] ?? null;
    
                if ($value === null) {
                    $properties['npm_metadata'] = null;
                    goto after_npm_metadata;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'npm_metadata';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookPackagePublished⚡️Package⚡️PackageVersion⚡️NpmMetadata($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['npm_metadata'] = $value;
    
                after_npm_metadata:

                $value = $payload['nuget_metadata'] ?? null;
    
                if ($value === null) {
                    $properties['nuget_metadata'] = null;
                    goto after_nuget_metadata;
                }

                static $nuget_metadataCaster1;
    
                if ($nuget_metadataCaster1 === null) {
                    $nuget_metadataCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\WebhookPackagePublished\\Package\\PackageVersion\\NugetMetadata',
));
                }
    
                $value = $nuget_metadataCaster1->cast($value, $this);

                $properties['nuget_metadata'] = $value;
    
                after_nuget_metadata:

                $value = $payload['package_files'] ?? null;
    
                if ($value === null) {
                    $properties['package_files'] = null;
                    goto after_package_files;
                }

                static $package_filesCaster1;
    
                if ($package_filesCaster1 === null) {
                    $package_filesCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\WebhookPackagePublished\\Package\\PackageVersion\\PackageFiles',
));
                }
    
                $value = $package_filesCaster1->cast($value, $this);

                $properties['package_files'] = $value;
    
                after_package_files:

                $value = $payload['package_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'package_url';
                    goto after_package_url;
                }

                $properties['package_url'] = $value;
    
                after_package_url:

                $value = $payload['prerelease'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'prerelease';
                    goto after_prerelease;
                }

                $properties['prerelease'] = $value;
    
                after_prerelease:

                $value = $payload['release'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'release';
                    goto after_release;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'release';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookPackagePublished⚡️Package⚡️PackageVersion⚡️Release($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['release'] = $value;
    
                after_release:

                $value = $payload['rubygems_metadata'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'rubygems_metadata';
                    goto after_rubygems_metadata;
                }

                $properties['rubygems_metadata'] = $value;
    
                after_rubygems_metadata:

                $value = $payload['source_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'source_url';
                    goto after_source_url;
                }

                $properties['source_url'] = $value;
    
                after_source_url:

                $value = $payload['summary'] ?? null;
    
                if ($value === null) {
                    $properties['summary'] = null;
                    goto after_summary;
                }

                $properties['summary'] = $value;
    
                after_summary:

                $value = $payload['tag_name'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'tag_name';
                    goto after_tag_name;
                }

                $properties['tag_name'] = $value;
    
                after_tag_name:

                $value = $payload['target_commitish'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'target_commitish';
                    goto after_target_commitish;
                }

                $properties['target_commitish'] = $value;
    
                after_target_commitish:

                $value = $payload['target_oid'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'target_oid';
                    goto after_target_oid;
                }

                $properties['target_oid'] = $value;
    
                after_target_oid:

                $value = $payload['updated_at'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'updated_at';
                    goto after_updated_at;
                }

                $properties['updated_at'] = $value;
    
                after_updated_at:

                $value = $payload['version'] ?? null;
    
                if ($value === null) {
                    $properties['version'] = null;
                    goto after_version;
                }

                $properties['version'] = $value;
    
                after_version:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package\PackageVersion', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package\PackageVersion::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package\PackageVersion(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package\PackageVersion', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookPackagePublished⚡️Package⚡️PackageVersion⚡️ContainerMetadata(array $payload): \ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package\PackageVersion\ContainerMetadata
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['labels'] ?? null;
    
                if ($value === null) {
                    $properties['labels'] = null;
                    goto after_labels;
                }

                $properties['labels'] = $value;
    
                after_labels:

                $value = $payload['manifest'] ?? null;
    
                if ($value === null) {
                    $properties['manifest'] = null;
                    goto after_manifest;
                }

                $properties['manifest'] = $value;
    
                after_manifest:

                $value = $payload['tag'] ?? null;
    
                if ($value === null) {
                    $properties['tag'] = null;
                    goto after_tag;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'tag';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookPackagePublished⚡️Package⚡️PackageVersion⚡️ContainerMetadata⚡️Tag($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['tag'] = $value;
    
                after_tag:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package\PackageVersion\ContainerMetadata', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package\PackageVersion\ContainerMetadata::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package\PackageVersion\ContainerMetadata(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package\PackageVersion\ContainerMetadata', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookPackagePublished⚡️Package⚡️PackageVersion⚡️ContainerMetadata⚡️Tag(array $payload): \ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package\PackageVersion\ContainerMetadata\Tag
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['digest'] ?? null;
    
                if ($value === null) {
                    $properties['digest'] = null;
                    goto after_digest;
                }

                $properties['digest'] = $value;
    
                after_digest:

                $value = $payload['name'] ?? null;
    
                if ($value === null) {
                    $properties['name'] = null;
                    goto after_name;
                }

                $properties['name'] = $value;
    
                after_name:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package\PackageVersion\ContainerMetadata\Tag', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package\PackageVersion\ContainerMetadata\Tag::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package\PackageVersion\ContainerMetadata\Tag(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package\PackageVersion\ContainerMetadata\Tag', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookPackagePublished⚡️Package⚡️PackageVersion⚡️NpmMetadata(array $payload): \ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package\PackageVersion\NpmMetadata
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

                $value = $payload['version'] ?? null;
    
                if ($value === null) {
                    $properties['version'] = null;
                    goto after_version;
                }

                $properties['version'] = $value;
    
                after_version:

                $value = $payload['npm_user'] ?? null;
    
                if ($value === null) {
                    $properties['npm_user'] = null;
                    goto after_npm_user;
                }

                $properties['npm_user'] = $value;
    
                after_npm_user:

                $value = $payload['author'] ?? null;
    
                if ($value === null) {
                    $properties['author'] = null;
                    goto after_author;
                }

                $properties['author'] = $value;
    
                after_author:

                $value = $payload['bugs'] ?? null;
    
                if ($value === null) {
                    $properties['bugs'] = null;
                    goto after_bugs;
                }

                $properties['bugs'] = $value;
    
                after_bugs:

                $value = $payload['dependencies'] ?? null;
    
                if ($value === null) {
                    $properties['dependencies'] = null;
                    goto after_dependencies;
                }

                $properties['dependencies'] = $value;
    
                after_dependencies:

                $value = $payload['dev_dependencies'] ?? null;
    
                if ($value === null) {
                    $properties['dev_dependencies'] = null;
                    goto after_dev_dependencies;
                }

                $properties['dev_dependencies'] = $value;
    
                after_dev_dependencies:

                $value = $payload['peer_dependencies'] ?? null;
    
                if ($value === null) {
                    $properties['peer_dependencies'] = null;
                    goto after_peer_dependencies;
                }

                $properties['peer_dependencies'] = $value;
    
                after_peer_dependencies:

                $value = $payload['optional_dependencies'] ?? null;
    
                if ($value === null) {
                    $properties['optional_dependencies'] = null;
                    goto after_optional_dependencies;
                }

                $properties['optional_dependencies'] = $value;
    
                after_optional_dependencies:

                $value = $payload['description'] ?? null;
    
                if ($value === null) {
                    $properties['description'] = null;
                    goto after_description;
                }

                $properties['description'] = $value;
    
                after_description:

                $value = $payload['dist'] ?? null;
    
                if ($value === null) {
                    $properties['dist'] = null;
                    goto after_dist;
                }

                $properties['dist'] = $value;
    
                after_dist:

                $value = $payload['git_head'] ?? null;
    
                if ($value === null) {
                    $properties['git_head'] = null;
                    goto after_git_head;
                }

                $properties['git_head'] = $value;
    
                after_git_head:

                $value = $payload['homepage'] ?? null;
    
                if ($value === null) {
                    $properties['homepage'] = null;
                    goto after_homepage;
                }

                $properties['homepage'] = $value;
    
                after_homepage:

                $value = $payload['license'] ?? null;
    
                if ($value === null) {
                    $properties['license'] = null;
                    goto after_license;
                }

                $properties['license'] = $value;
    
                after_license:

                $value = $payload['main'] ?? null;
    
                if ($value === null) {
                    $properties['main'] = null;
                    goto after_main;
                }

                $properties['main'] = $value;
    
                after_main:

                $value = $payload['repository'] ?? null;
    
                if ($value === null) {
                    $properties['repository'] = null;
                    goto after_repository;
                }

                $properties['repository'] = $value;
    
                after_repository:

                $value = $payload['scripts'] ?? null;
    
                if ($value === null) {
                    $properties['scripts'] = null;
                    goto after_scripts;
                }

                $properties['scripts'] = $value;
    
                after_scripts:

                $value = $payload['id'] ?? null;
    
                if ($value === null) {
                    $properties['id'] = null;
                    goto after_id;
                }

                $properties['id'] = $value;
    
                after_id:

                $value = $payload['node_version'] ?? null;
    
                if ($value === null) {
                    $properties['node_version'] = null;
                    goto after_node_version;
                }

                $properties['node_version'] = $value;
    
                after_node_version:

                $value = $payload['npm_version'] ?? null;
    
                if ($value === null) {
                    $properties['npm_version'] = null;
                    goto after_npm_version;
                }

                $properties['npm_version'] = $value;
    
                after_npm_version:

                $value = $payload['has_shrinkwrap'] ?? null;
    
                if ($value === null) {
                    $properties['has_shrinkwrap'] = null;
                    goto after_has_shrinkwrap;
                }

                $properties['has_shrinkwrap'] = $value;
    
                after_has_shrinkwrap:

                $value = $payload['maintainers'] ?? null;
    
                if ($value === null) {
                    $properties['maintainers'] = null;
                    goto after_maintainers;
                }

                $properties['maintainers'] = $value;
    
                after_maintainers:

                $value = $payload['contributors'] ?? null;
    
                if ($value === null) {
                    $properties['contributors'] = null;
                    goto after_contributors;
                }

                $properties['contributors'] = $value;
    
                after_contributors:

                $value = $payload['engines'] ?? null;
    
                if ($value === null) {
                    $properties['engines'] = null;
                    goto after_engines;
                }

                $properties['engines'] = $value;
    
                after_engines:

                $value = $payload['keywords'] ?? null;
    
                if ($value === null) {
                    $properties['keywords'] = null;
                    goto after_keywords;
                }

                $properties['keywords'] = $value;
    
                after_keywords:

                $value = $payload['files'] ?? null;
    
                if ($value === null) {
                    $properties['files'] = null;
                    goto after_files;
                }

                $properties['files'] = $value;
    
                after_files:

                $value = $payload['bin'] ?? null;
    
                if ($value === null) {
                    $properties['bin'] = null;
                    goto after_bin;
                }

                $properties['bin'] = $value;
    
                after_bin:

                $value = $payload['man'] ?? null;
    
                if ($value === null) {
                    $properties['man'] = null;
                    goto after_man;
                }

                $properties['man'] = $value;
    
                after_man:

                $value = $payload['directories'] ?? null;
    
                if ($value === null) {
                    $properties['directories'] = null;
                    goto after_directories;
                }

                $properties['directories'] = $value;
    
                after_directories:

                $value = $payload['os'] ?? null;
    
                if ($value === null) {
                    $properties['os'] = null;
                    goto after_os;
                }

                $properties['os'] = $value;
    
                after_os:

                $value = $payload['cpu'] ?? null;
    
                if ($value === null) {
                    $properties['cpu'] = null;
                    goto after_cpu;
                }

                $properties['cpu'] = $value;
    
                after_cpu:

                $value = $payload['readme'] ?? null;
    
                if ($value === null) {
                    $properties['readme'] = null;
                    goto after_readme;
                }

                $properties['readme'] = $value;
    
                after_readme:

                $value = $payload['installation_command'] ?? null;
    
                if ($value === null) {
                    $properties['installation_command'] = null;
                    goto after_installation_command;
                }

                $properties['installation_command'] = $value;
    
                after_installation_command:

                $value = $payload['release_id'] ?? null;
    
                if ($value === null) {
                    $properties['release_id'] = null;
                    goto after_release_id;
                }

                $properties['release_id'] = $value;
    
                after_release_id:

                $value = $payload['commit_oid'] ?? null;
    
                if ($value === null) {
                    $properties['commit_oid'] = null;
                    goto after_commit_oid;
                }

                $properties['commit_oid'] = $value;
    
                after_commit_oid:

                $value = $payload['published_via_actions'] ?? null;
    
                if ($value === null) {
                    $properties['published_via_actions'] = null;
                    goto after_published_via_actions;
                }

                $properties['published_via_actions'] = $value;
    
                after_published_via_actions:

                $value = $payload['deleted_by_id'] ?? null;
    
                if ($value === null) {
                    $properties['deleted_by_id'] = null;
                    goto after_deleted_by_id;
                }

                $properties['deleted_by_id'] = $value;
    
                after_deleted_by_id:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package\PackageVersion\NpmMetadata', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package\PackageVersion\NpmMetadata::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package\PackageVersion\NpmMetadata(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package\PackageVersion\NpmMetadata', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookPackagePublished⚡️Package⚡️PackageVersion⚡️NugetMetadata(array $payload): \ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package\PackageVersion\NugetMetadata
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

                $value = $payload['name'] ?? null;
    
                if ($value === null) {
                    $properties['name'] = null;
                    goto after_name;
                }

                $properties['name'] = $value;
    
                after_name:

                $value = $payload['value'] ?? null;
    
                if ($value === null) {
                    $properties['value'] = null;
                    goto after_value;
                }

                $properties['value'] = $value;
    
                after_value:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package\PackageVersion\NugetMetadata', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package\PackageVersion\NugetMetadata::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package\PackageVersion\NugetMetadata(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package\PackageVersion\NugetMetadata', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookPackagePublished⚡️Package⚡️PackageVersion⚡️PackageFiles(array $payload): \ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package\PackageVersion\PackageFiles
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['content_type'] ?? null;
    
                if ($value === null) {
                    $properties['content_type'] = null;
                    goto after_content_type;
                }

                $properties['content_type'] = $value;
    
                after_content_type:

                $value = $payload['created_at'] ?? null;
    
                if ($value === null) {
                    $properties['created_at'] = null;
                    goto after_created_at;
                }

                $properties['created_at'] = $value;
    
                after_created_at:

                $value = $payload['download_url'] ?? null;
    
                if ($value === null) {
                    $properties['download_url'] = null;
                    goto after_download_url;
                }

                $properties['download_url'] = $value;
    
                after_download_url:

                $value = $payload['id'] ?? null;
    
                if ($value === null) {
                    $properties['id'] = null;
                    goto after_id;
                }

                $properties['id'] = $value;
    
                after_id:

                $value = $payload['md5'] ?? null;
    
                if ($value === null) {
                    $properties['md5'] = null;
                    goto after_md5;
                }

                $properties['md5'] = $value;
    
                after_md5:

                $value = $payload['name'] ?? null;
    
                if ($value === null) {
                    $properties['name'] = null;
                    goto after_name;
                }

                $properties['name'] = $value;
    
                after_name:

                $value = $payload['sha1'] ?? null;
    
                if ($value === null) {
                    $properties['sha1'] = null;
                    goto after_sha1;
                }

                $properties['sha1'] = $value;
    
                after_sha1:

                $value = $payload['sha256'] ?? null;
    
                if ($value === null) {
                    $properties['sha256'] = null;
                    goto after_sha256;
                }

                $properties['sha256'] = $value;
    
                after_sha256:

                $value = $payload['size'] ?? null;
    
                if ($value === null) {
                    $properties['size'] = null;
                    goto after_size;
                }

                $properties['size'] = $value;
    
                after_size:

                $value = $payload['state'] ?? null;
    
                if ($value === null) {
                    $properties['state'] = null;
                    goto after_state;
                }

                $properties['state'] = $value;
    
                after_state:

                $value = $payload['updated_at'] ?? null;
    
                if ($value === null) {
                    $properties['updated_at'] = null;
                    goto after_updated_at;
                }

                $properties['updated_at'] = $value;
    
                after_updated_at:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package\PackageVersion\PackageFiles', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package\PackageVersion\PackageFiles::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package\PackageVersion\PackageFiles(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package\PackageVersion\PackageFiles', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookPackagePublished⚡️Package⚡️PackageVersion⚡️Release(array $payload): \ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package\PackageVersion\Release
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['author'] ?? null;
    
                if ($value === null) {
                    $properties['author'] = null;
                    goto after_author;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'author';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Discussion⚡️AnswerChosenBy($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['author'] = $value;
    
                after_author:

                $value = $payload['created_at'] ?? null;
    
                if ($value === null) {
                    $properties['created_at'] = null;
                    goto after_created_at;
                }

                $properties['created_at'] = $value;
    
                after_created_at:

                $value = $payload['draft'] ?? null;
    
                if ($value === null) {
                    $properties['draft'] = null;
                    goto after_draft;
                }

                $properties['draft'] = $value;
    
                after_draft:

                $value = $payload['html_url'] ?? null;
    
                if ($value === null) {
                    $properties['html_url'] = null;
                    goto after_html_url;
                }

                $properties['html_url'] = $value;
    
                after_html_url:

                $value = $payload['id'] ?? null;
    
                if ($value === null) {
                    $properties['id'] = null;
                    goto after_id;
                }

                $properties['id'] = $value;
    
                after_id:

                $value = $payload['name'] ?? null;
    
                if ($value === null) {
                    $properties['name'] = null;
                    goto after_name;
                }

                $properties['name'] = $value;
    
                after_name:

                $value = $payload['prerelease'] ?? null;
    
                if ($value === null) {
                    $properties['prerelease'] = null;
                    goto after_prerelease;
                }

                $properties['prerelease'] = $value;
    
                after_prerelease:

                $value = $payload['published_at'] ?? null;
    
                if ($value === null) {
                    $properties['published_at'] = null;
                    goto after_published_at;
                }

                $properties['published_at'] = $value;
    
                after_published_at:

                $value = $payload['tag_name'] ?? null;
    
                if ($value === null) {
                    $properties['tag_name'] = null;
                    goto after_tag_name;
                }

                $properties['tag_name'] = $value;
    
                after_tag_name:

                $value = $payload['target_commitish'] ?? null;
    
                if ($value === null) {
                    $properties['target_commitish'] = null;
                    goto after_target_commitish;
                }

                $properties['target_commitish'] = $value;
    
                after_target_commitish:

                $value = $payload['url'] ?? null;
    
                if ($value === null) {
                    $properties['url'] = null;
                    goto after_url;
                }

                $properties['url'] = $value;
    
                after_url:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package\PackageVersion\Release', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package\PackageVersion\Release::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package\PackageVersion\Release(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package\PackageVersion\Release', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookPackagePublished⚡️Package⚡️Registry(array $payload): \ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package\Registry
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['about_url'] ?? null;
    
                if ($value === null) {
                    $properties['about_url'] = null;
                    goto after_about_url;
                }

                $properties['about_url'] = $value;
    
                after_about_url:

                $value = $payload['name'] ?? null;
    
                if ($value === null) {
                    $properties['name'] = null;
                    goto after_name;
                }

                $properties['name'] = $value;
    
                after_name:

                $value = $payload['type'] ?? null;
    
                if ($value === null) {
                    $properties['type'] = null;
                    goto after_type;
                }

                $properties['type'] = $value;
    
                after_type:

                $value = $payload['url'] ?? null;
    
                if ($value === null) {
                    $properties['url'] = null;
                    goto after_url;
                }

                $properties['url'] = $value;
    
                after_url:

                $value = $payload['vendor'] ?? null;
    
                if ($value === null) {
                    $properties['vendor'] = null;
                    goto after_vendor;
                }

                $properties['vendor'] = $value;
    
                after_vendor:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package\Registry', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package\Registry::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package\Registry(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package\Registry', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Repository(array $payload): \ApiClients\Client\GitHub\Schema\Repository
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

                $value = $payload['name'] ?? null;
    
                if ($value === null) {
                    $properties['name'] = null;
                    goto after_name;
                }

                $properties['name'] = $value;
    
                after_name:

                $value = $payload['full_name'] ?? null;
    
                if ($value === null) {
                    $properties['full_name'] = null;
                    goto after_full_name;
                }

                $properties['full_name'] = $value;
    
                after_full_name:

                $value = $payload['license'] ?? null;
    
                if ($value === null) {
                    $properties['license'] = null;
                    goto after_license;
                }

                $properties['license'] = $value;
    
                after_license:

                $value = $payload['organization'] ?? null;
    
                if ($value === null) {
                    $properties['organization'] = null;
                    goto after_organization;
                }

                $properties['organization'] = $value;
    
                after_organization:

                $value = $payload['forks'] ?? null;
    
                if ($value === null) {
                    $properties['forks'] = null;
                    goto after_forks;
                }

                $properties['forks'] = $value;
    
                after_forks:

                $value = $payload['permissions'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'permissions';
                    goto after_permissions;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'permissions';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Repository⚡️Permissions($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['permissions'] = $value;
    
                after_permissions:

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

                $value = $payload['private'] ?? null;
    
                if ($value === null) {
                    $properties['private'] = null;
                    goto after_private;
                }

                $properties['private'] = $value;
    
                after_private:

                $value = $payload['html_url'] ?? null;
    
                if ($value === null) {
                    $properties['html_url'] = null;
                    goto after_html_url;
                }

                $properties['html_url'] = $value;
    
                after_html_url:

                $value = $payload['description'] ?? null;
    
                if ($value === null) {
                    $properties['description'] = null;
                    goto after_description;
                }

                $properties['description'] = $value;
    
                after_description:

                $value = $payload['fork'] ?? null;
    
                if ($value === null) {
                    $properties['fork'] = null;
                    goto after_fork;
                }

                $properties['fork'] = $value;
    
                after_fork:

                $value = $payload['url'] ?? null;
    
                if ($value === null) {
                    $properties['url'] = null;
                    goto after_url;
                }

                $properties['url'] = $value;
    
                after_url:

                $value = $payload['archive_url'] ?? null;
    
                if ($value === null) {
                    $properties['archive_url'] = null;
                    goto after_archive_url;
                }

                $properties['archive_url'] = $value;
    
                after_archive_url:

                $value = $payload['assignees_url'] ?? null;
    
                if ($value === null) {
                    $properties['assignees_url'] = null;
                    goto after_assignees_url;
                }

                $properties['assignees_url'] = $value;
    
                after_assignees_url:

                $value = $payload['blobs_url'] ?? null;
    
                if ($value === null) {
                    $properties['blobs_url'] = null;
                    goto after_blobs_url;
                }

                $properties['blobs_url'] = $value;
    
                after_blobs_url:

                $value = $payload['branches_url'] ?? null;
    
                if ($value === null) {
                    $properties['branches_url'] = null;
                    goto after_branches_url;
                }

                $properties['branches_url'] = $value;
    
                after_branches_url:

                $value = $payload['collaborators_url'] ?? null;
    
                if ($value === null) {
                    $properties['collaborators_url'] = null;
                    goto after_collaborators_url;
                }

                $properties['collaborators_url'] = $value;
    
                after_collaborators_url:

                $value = $payload['comments_url'] ?? null;
    
                if ($value === null) {
                    $properties['comments_url'] = null;
                    goto after_comments_url;
                }

                $properties['comments_url'] = $value;
    
                after_comments_url:

                $value = $payload['commits_url'] ?? null;
    
                if ($value === null) {
                    $properties['commits_url'] = null;
                    goto after_commits_url;
                }

                $properties['commits_url'] = $value;
    
                after_commits_url:

                $value = $payload['compare_url'] ?? null;
    
                if ($value === null) {
                    $properties['compare_url'] = null;
                    goto after_compare_url;
                }

                $properties['compare_url'] = $value;
    
                after_compare_url:

                $value = $payload['contents_url'] ?? null;
    
                if ($value === null) {
                    $properties['contents_url'] = null;
                    goto after_contents_url;
                }

                $properties['contents_url'] = $value;
    
                after_contents_url:

                $value = $payload['contributors_url'] ?? null;
    
                if ($value === null) {
                    $properties['contributors_url'] = null;
                    goto after_contributors_url;
                }

                $properties['contributors_url'] = $value;
    
                after_contributors_url:

                $value = $payload['deployments_url'] ?? null;
    
                if ($value === null) {
                    $properties['deployments_url'] = null;
                    goto after_deployments_url;
                }

                $properties['deployments_url'] = $value;
    
                after_deployments_url:

                $value = $payload['downloads_url'] ?? null;
    
                if ($value === null) {
                    $properties['downloads_url'] = null;
                    goto after_downloads_url;
                }

                $properties['downloads_url'] = $value;
    
                after_downloads_url:

                $value = $payload['events_url'] ?? null;
    
                if ($value === null) {
                    $properties['events_url'] = null;
                    goto after_events_url;
                }

                $properties['events_url'] = $value;
    
                after_events_url:

                $value = $payload['forks_url'] ?? null;
    
                if ($value === null) {
                    $properties['forks_url'] = null;
                    goto after_forks_url;
                }

                $properties['forks_url'] = $value;
    
                after_forks_url:

                $value = $payload['git_commits_url'] ?? null;
    
                if ($value === null) {
                    $properties['git_commits_url'] = null;
                    goto after_git_commits_url;
                }

                $properties['git_commits_url'] = $value;
    
                after_git_commits_url:

                $value = $payload['git_refs_url'] ?? null;
    
                if ($value === null) {
                    $properties['git_refs_url'] = null;
                    goto after_git_refs_url;
                }

                $properties['git_refs_url'] = $value;
    
                after_git_refs_url:

                $value = $payload['git_tags_url'] ?? null;
    
                if ($value === null) {
                    $properties['git_tags_url'] = null;
                    goto after_git_tags_url;
                }

                $properties['git_tags_url'] = $value;
    
                after_git_tags_url:

                $value = $payload['git_url'] ?? null;
    
                if ($value === null) {
                    $properties['git_url'] = null;
                    goto after_git_url;
                }

                $properties['git_url'] = $value;
    
                after_git_url:

                $value = $payload['issue_comment_url'] ?? null;
    
                if ($value === null) {
                    $properties['issue_comment_url'] = null;
                    goto after_issue_comment_url;
                }

                $properties['issue_comment_url'] = $value;
    
                after_issue_comment_url:

                $value = $payload['issue_events_url'] ?? null;
    
                if ($value === null) {
                    $properties['issue_events_url'] = null;
                    goto after_issue_events_url;
                }

                $properties['issue_events_url'] = $value;
    
                after_issue_events_url:

                $value = $payload['issues_url'] ?? null;
    
                if ($value === null) {
                    $properties['issues_url'] = null;
                    goto after_issues_url;
                }

                $properties['issues_url'] = $value;
    
                after_issues_url:

                $value = $payload['keys_url'] ?? null;
    
                if ($value === null) {
                    $properties['keys_url'] = null;
                    goto after_keys_url;
                }

                $properties['keys_url'] = $value;
    
                after_keys_url:

                $value = $payload['labels_url'] ?? null;
    
                if ($value === null) {
                    $properties['labels_url'] = null;
                    goto after_labels_url;
                }

                $properties['labels_url'] = $value;
    
                after_labels_url:

                $value = $payload['languages_url'] ?? null;
    
                if ($value === null) {
                    $properties['languages_url'] = null;
                    goto after_languages_url;
                }

                $properties['languages_url'] = $value;
    
                after_languages_url:

                $value = $payload['merges_url'] ?? null;
    
                if ($value === null) {
                    $properties['merges_url'] = null;
                    goto after_merges_url;
                }

                $properties['merges_url'] = $value;
    
                after_merges_url:

                $value = $payload['milestones_url'] ?? null;
    
                if ($value === null) {
                    $properties['milestones_url'] = null;
                    goto after_milestones_url;
                }

                $properties['milestones_url'] = $value;
    
                after_milestones_url:

                $value = $payload['notifications_url'] ?? null;
    
                if ($value === null) {
                    $properties['notifications_url'] = null;
                    goto after_notifications_url;
                }

                $properties['notifications_url'] = $value;
    
                after_notifications_url:

                $value = $payload['pulls_url'] ?? null;
    
                if ($value === null) {
                    $properties['pulls_url'] = null;
                    goto after_pulls_url;
                }

                $properties['pulls_url'] = $value;
    
                after_pulls_url:

                $value = $payload['releases_url'] ?? null;
    
                if ($value === null) {
                    $properties['releases_url'] = null;
                    goto after_releases_url;
                }

                $properties['releases_url'] = $value;
    
                after_releases_url:

                $value = $payload['ssh_url'] ?? null;
    
                if ($value === null) {
                    $properties['ssh_url'] = null;
                    goto after_ssh_url;
                }

                $properties['ssh_url'] = $value;
    
                after_ssh_url:

                $value = $payload['stargazers_url'] ?? null;
    
                if ($value === null) {
                    $properties['stargazers_url'] = null;
                    goto after_stargazers_url;
                }

                $properties['stargazers_url'] = $value;
    
                after_stargazers_url:

                $value = $payload['statuses_url'] ?? null;
    
                if ($value === null) {
                    $properties['statuses_url'] = null;
                    goto after_statuses_url;
                }

                $properties['statuses_url'] = $value;
    
                after_statuses_url:

                $value = $payload['subscribers_url'] ?? null;
    
                if ($value === null) {
                    $properties['subscribers_url'] = null;
                    goto after_subscribers_url;
                }

                $properties['subscribers_url'] = $value;
    
                after_subscribers_url:

                $value = $payload['subscription_url'] ?? null;
    
                if ($value === null) {
                    $properties['subscription_url'] = null;
                    goto after_subscription_url;
                }

                $properties['subscription_url'] = $value;
    
                after_subscription_url:

                $value = $payload['tags_url'] ?? null;
    
                if ($value === null) {
                    $properties['tags_url'] = null;
                    goto after_tags_url;
                }

                $properties['tags_url'] = $value;
    
                after_tags_url:

                $value = $payload['teams_url'] ?? null;
    
                if ($value === null) {
                    $properties['teams_url'] = null;
                    goto after_teams_url;
                }

                $properties['teams_url'] = $value;
    
                after_teams_url:

                $value = $payload['trees_url'] ?? null;
    
                if ($value === null) {
                    $properties['trees_url'] = null;
                    goto after_trees_url;
                }

                $properties['trees_url'] = $value;
    
                after_trees_url:

                $value = $payload['clone_url'] ?? null;
    
                if ($value === null) {
                    $properties['clone_url'] = null;
                    goto after_clone_url;
                }

                $properties['clone_url'] = $value;
    
                after_clone_url:

                $value = $payload['mirror_url'] ?? null;
    
                if ($value === null) {
                    $properties['mirror_url'] = null;
                    goto after_mirror_url;
                }

                $properties['mirror_url'] = $value;
    
                after_mirror_url:

                $value = $payload['hooks_url'] ?? null;
    
                if ($value === null) {
                    $properties['hooks_url'] = null;
                    goto after_hooks_url;
                }

                $properties['hooks_url'] = $value;
    
                after_hooks_url:

                $value = $payload['svn_url'] ?? null;
    
                if ($value === null) {
                    $properties['svn_url'] = null;
                    goto after_svn_url;
                }

                $properties['svn_url'] = $value;
    
                after_svn_url:

                $value = $payload['homepage'] ?? null;
    
                if ($value === null) {
                    $properties['homepage'] = null;
                    goto after_homepage;
                }

                $properties['homepage'] = $value;
    
                after_homepage:

                $value = $payload['language'] ?? null;
    
                if ($value === null) {
                    $properties['language'] = null;
                    goto after_language;
                }

                $properties['language'] = $value;
    
                after_language:

                $value = $payload['forks_count'] ?? null;
    
                if ($value === null) {
                    $properties['forks_count'] = null;
                    goto after_forks_count;
                }

                $properties['forks_count'] = $value;
    
                after_forks_count:

                $value = $payload['stargazers_count'] ?? null;
    
                if ($value === null) {
                    $properties['stargazers_count'] = null;
                    goto after_stargazers_count;
                }

                $properties['stargazers_count'] = $value;
    
                after_stargazers_count:

                $value = $payload['watchers_count'] ?? null;
    
                if ($value === null) {
                    $properties['watchers_count'] = null;
                    goto after_watchers_count;
                }

                $properties['watchers_count'] = $value;
    
                after_watchers_count:

                $value = $payload['size'] ?? null;
    
                if ($value === null) {
                    $properties['size'] = null;
                    goto after_size;
                }

                $properties['size'] = $value;
    
                after_size:

                $value = $payload['default_branch'] ?? null;
    
                if ($value === null) {
                    $properties['default_branch'] = null;
                    goto after_default_branch;
                }

                $properties['default_branch'] = $value;
    
                after_default_branch:

                $value = $payload['open_issues_count'] ?? null;
    
                if ($value === null) {
                    $properties['open_issues_count'] = null;
                    goto after_open_issues_count;
                }

                $properties['open_issues_count'] = $value;
    
                after_open_issues_count:

                $value = $payload['is_template'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'is_template';
                    goto after_is_template;
                }

                $properties['is_template'] = $value;
    
                after_is_template:

                $value = $payload['topics'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'topics';
                    goto after_topics;
                }

                $properties['topics'] = $value;
    
                after_topics:

                $value = $payload['has_issues'] ?? null;
    
                if ($value === null) {
                    $properties['has_issues'] = null;
                    goto after_has_issues;
                }

                $properties['has_issues'] = $value;
    
                after_has_issues:

                $value = $payload['has_projects'] ?? null;
    
                if ($value === null) {
                    $properties['has_projects'] = null;
                    goto after_has_projects;
                }

                $properties['has_projects'] = $value;
    
                after_has_projects:

                $value = $payload['has_wiki'] ?? null;
    
                if ($value === null) {
                    $properties['has_wiki'] = null;
                    goto after_has_wiki;
                }

                $properties['has_wiki'] = $value;
    
                after_has_wiki:

                $value = $payload['has_pages'] ?? null;
    
                if ($value === null) {
                    $properties['has_pages'] = null;
                    goto after_has_pages;
                }

                $properties['has_pages'] = $value;
    
                after_has_pages:

                $value = $payload['has_downloads'] ?? null;
    
                if ($value === null) {
                    $properties['has_downloads'] = null;
                    goto after_has_downloads;
                }

                $properties['has_downloads'] = $value;
    
                after_has_downloads:

                $value = $payload['has_discussions'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'has_discussions';
                    goto after_has_discussions;
                }

                $properties['has_discussions'] = $value;
    
                after_has_discussions:

                $value = $payload['archived'] ?? null;
    
                if ($value === null) {
                    $properties['archived'] = null;
                    goto after_archived;
                }

                $properties['archived'] = $value;
    
                after_archived:

                $value = $payload['disabled'] ?? null;
    
                if ($value === null) {
                    $properties['disabled'] = null;
                    goto after_disabled;
                }

                $properties['disabled'] = $value;
    
                after_disabled:

                $value = $payload['visibility'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'visibility';
                    goto after_visibility;
                }

                $properties['visibility'] = $value;
    
                after_visibility:

                $value = $payload['pushed_at'] ?? null;
    
                if ($value === null) {
                    $properties['pushed_at'] = null;
                    goto after_pushed_at;
                }

                $properties['pushed_at'] = $value;
    
                after_pushed_at:

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

                $value = $payload['allow_rebase_merge'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'allow_rebase_merge';
                    goto after_allow_rebase_merge;
                }

                $properties['allow_rebase_merge'] = $value;
    
                after_allow_rebase_merge:

                $value = $payload['template_repository'] ?? null;
    
                if ($value === null) {
                    $properties['template_repository'] = null;
                    goto after_template_repository;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'template_repository';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Repository⚡️TemplateRepository($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['template_repository'] = $value;
    
                after_template_repository:

                $value = $payload['temp_clone_token'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'temp_clone_token';
                    goto after_temp_clone_token;
                }

                $properties['temp_clone_token'] = $value;
    
                after_temp_clone_token:

                $value = $payload['allow_squash_merge'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'allow_squash_merge';
                    goto after_allow_squash_merge;
                }

                $properties['allow_squash_merge'] = $value;
    
                after_allow_squash_merge:

                $value = $payload['allow_auto_merge'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'allow_auto_merge';
                    goto after_allow_auto_merge;
                }

                $properties['allow_auto_merge'] = $value;
    
                after_allow_auto_merge:

                $value = $payload['delete_branch_on_merge'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'delete_branch_on_merge';
                    goto after_delete_branch_on_merge;
                }

                $properties['delete_branch_on_merge'] = $value;
    
                after_delete_branch_on_merge:

                $value = $payload['allow_update_branch'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'allow_update_branch';
                    goto after_allow_update_branch;
                }

                $properties['allow_update_branch'] = $value;
    
                after_allow_update_branch:

                $value = $payload['use_squash_pr_title_as_default'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'use_squash_pr_title_as_default';
                    goto after_use_squash_pr_title_as_default;
                }

                $properties['use_squash_pr_title_as_default'] = $value;
    
                after_use_squash_pr_title_as_default:

                $value = $payload['squash_merge_commit_title'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'squash_merge_commit_title';
                    goto after_squash_merge_commit_title;
                }

                $properties['squash_merge_commit_title'] = $value;
    
                after_squash_merge_commit_title:

                $value = $payload['squash_merge_commit_message'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'squash_merge_commit_message';
                    goto after_squash_merge_commit_message;
                }

                $properties['squash_merge_commit_message'] = $value;
    
                after_squash_merge_commit_message:

                $value = $payload['merge_commit_title'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'merge_commit_title';
                    goto after_merge_commit_title;
                }

                $properties['merge_commit_title'] = $value;
    
                after_merge_commit_title:

                $value = $payload['merge_commit_message'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'merge_commit_message';
                    goto after_merge_commit_message;
                }

                $properties['merge_commit_message'] = $value;
    
                after_merge_commit_message:

                $value = $payload['allow_merge_commit'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'allow_merge_commit';
                    goto after_allow_merge_commit;
                }

                $properties['allow_merge_commit'] = $value;
    
                after_allow_merge_commit:

                $value = $payload['allow_forking'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'allow_forking';
                    goto after_allow_forking;
                }

                $properties['allow_forking'] = $value;
    
                after_allow_forking:

                $value = $payload['web_commit_signoff_required'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'web_commit_signoff_required';
                    goto after_web_commit_signoff_required;
                }

                $properties['web_commit_signoff_required'] = $value;
    
                after_web_commit_signoff_required:

                $value = $payload['subscribers_count'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'subscribers_count';
                    goto after_subscribers_count;
                }

                $properties['subscribers_count'] = $value;
    
                after_subscribers_count:

                $value = $payload['network_count'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'network_count';
                    goto after_network_count;
                }

                $properties['network_count'] = $value;
    
                after_network_count:

                $value = $payload['open_issues'] ?? null;
    
                if ($value === null) {
                    $properties['open_issues'] = null;
                    goto after_open_issues;
                }

                $properties['open_issues'] = $value;
    
                after_open_issues:

                $value = $payload['watchers'] ?? null;
    
                if ($value === null) {
                    $properties['watchers'] = null;
                    goto after_watchers;
                }

                $properties['watchers'] = $value;
    
                after_watchers:

                $value = $payload['master_branch'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'master_branch';
                    goto after_master_branch;
                }

                $properties['master_branch'] = $value;
    
                after_master_branch:

                $value = $payload['starred_at'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'starred_at';
                    goto after_starred_at;
                }

                $properties['starred_at'] = $value;
    
                after_starred_at:

                $value = $payload['anonymous_access_enabled'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'anonymous_access_enabled';
                    goto after_anonymous_access_enabled;
                }

                $properties['anonymous_access_enabled'] = $value;
    
                after_anonymous_access_enabled:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Repository', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\Repository::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\Repository(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Repository', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Repository⚡️Permissions(array $payload): \ApiClients\Client\GitHub\Schema\Repository\Permissions
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['admin'] ?? null;
    
                if ($value === null) {
                    $properties['admin'] = null;
                    goto after_admin;
                }

                $properties['admin'] = $value;
    
                after_admin:

                $value = $payload['pull'] ?? null;
    
                if ($value === null) {
                    $properties['pull'] = null;
                    goto after_pull;
                }

                $properties['pull'] = $value;
    
                after_pull:

                $value = $payload['triage'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'triage';
                    goto after_triage;
                }

                $properties['triage'] = $value;
    
                after_triage:

                $value = $payload['push'] ?? null;
    
                if ($value === null) {
                    $properties['push'] = null;
                    goto after_push;
                }

                $properties['push'] = $value;
    
                after_push:

                $value = $payload['maintain'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'maintain';
                    goto after_maintain;
                }

                $properties['maintain'] = $value;
    
                after_maintain:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Repository\Permissions', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\Repository\Permissions::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\Repository\Permissions(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Repository\Permissions', $exception, stack: $this->hydrationStack);
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

        
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Repository⚡️TemplateRepository(array $payload): \ApiClients\Client\GitHub\Schema\Repository\TemplateRepository
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

                $value = $payload['name'] ?? null;
    
                if ($value === null) {
                    $properties['name'] = null;
                    goto after_name;
                }

                $properties['name'] = $value;
    
                after_name:

                $value = $payload['full_name'] ?? null;
    
                if ($value === null) {
                    $properties['full_name'] = null;
                    goto after_full_name;
                }

                $properties['full_name'] = $value;
    
                after_full_name:

                $value = $payload['owner'] ?? null;
    
                if ($value === null) {
                    $properties['owner'] = null;
                    goto after_owner;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'owner';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Repository⚡️TemplateRepository⚡️Owner($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['owner'] = $value;
    
                after_owner:

                $value = $payload['private'] ?? null;
    
                if ($value === null) {
                    $properties['private'] = null;
                    goto after_private;
                }

                $properties['private'] = $value;
    
                after_private:

                $value = $payload['html_url'] ?? null;
    
                if ($value === null) {
                    $properties['html_url'] = null;
                    goto after_html_url;
                }

                $properties['html_url'] = $value;
    
                after_html_url:

                $value = $payload['description'] ?? null;
    
                if ($value === null) {
                    $properties['description'] = null;
                    goto after_description;
                }

                $properties['description'] = $value;
    
                after_description:

                $value = $payload['fork'] ?? null;
    
                if ($value === null) {
                    $properties['fork'] = null;
                    goto after_fork;
                }

                $properties['fork'] = $value;
    
                after_fork:

                $value = $payload['url'] ?? null;
    
                if ($value === null) {
                    $properties['url'] = null;
                    goto after_url;
                }

                $properties['url'] = $value;
    
                after_url:

                $value = $payload['archive_url'] ?? null;
    
                if ($value === null) {
                    $properties['archive_url'] = null;
                    goto after_archive_url;
                }

                $properties['archive_url'] = $value;
    
                after_archive_url:

                $value = $payload['assignees_url'] ?? null;
    
                if ($value === null) {
                    $properties['assignees_url'] = null;
                    goto after_assignees_url;
                }

                $properties['assignees_url'] = $value;
    
                after_assignees_url:

                $value = $payload['blobs_url'] ?? null;
    
                if ($value === null) {
                    $properties['blobs_url'] = null;
                    goto after_blobs_url;
                }

                $properties['blobs_url'] = $value;
    
                after_blobs_url:

                $value = $payload['branches_url'] ?? null;
    
                if ($value === null) {
                    $properties['branches_url'] = null;
                    goto after_branches_url;
                }

                $properties['branches_url'] = $value;
    
                after_branches_url:

                $value = $payload['collaborators_url'] ?? null;
    
                if ($value === null) {
                    $properties['collaborators_url'] = null;
                    goto after_collaborators_url;
                }

                $properties['collaborators_url'] = $value;
    
                after_collaborators_url:

                $value = $payload['comments_url'] ?? null;
    
                if ($value === null) {
                    $properties['comments_url'] = null;
                    goto after_comments_url;
                }

                $properties['comments_url'] = $value;
    
                after_comments_url:

                $value = $payload['commits_url'] ?? null;
    
                if ($value === null) {
                    $properties['commits_url'] = null;
                    goto after_commits_url;
                }

                $properties['commits_url'] = $value;
    
                after_commits_url:

                $value = $payload['compare_url'] ?? null;
    
                if ($value === null) {
                    $properties['compare_url'] = null;
                    goto after_compare_url;
                }

                $properties['compare_url'] = $value;
    
                after_compare_url:

                $value = $payload['contents_url'] ?? null;
    
                if ($value === null) {
                    $properties['contents_url'] = null;
                    goto after_contents_url;
                }

                $properties['contents_url'] = $value;
    
                after_contents_url:

                $value = $payload['contributors_url'] ?? null;
    
                if ($value === null) {
                    $properties['contributors_url'] = null;
                    goto after_contributors_url;
                }

                $properties['contributors_url'] = $value;
    
                after_contributors_url:

                $value = $payload['deployments_url'] ?? null;
    
                if ($value === null) {
                    $properties['deployments_url'] = null;
                    goto after_deployments_url;
                }

                $properties['deployments_url'] = $value;
    
                after_deployments_url:

                $value = $payload['downloads_url'] ?? null;
    
                if ($value === null) {
                    $properties['downloads_url'] = null;
                    goto after_downloads_url;
                }

                $properties['downloads_url'] = $value;
    
                after_downloads_url:

                $value = $payload['events_url'] ?? null;
    
                if ($value === null) {
                    $properties['events_url'] = null;
                    goto after_events_url;
                }

                $properties['events_url'] = $value;
    
                after_events_url:

                $value = $payload['forks_url'] ?? null;
    
                if ($value === null) {
                    $properties['forks_url'] = null;
                    goto after_forks_url;
                }

                $properties['forks_url'] = $value;
    
                after_forks_url:

                $value = $payload['git_commits_url'] ?? null;
    
                if ($value === null) {
                    $properties['git_commits_url'] = null;
                    goto after_git_commits_url;
                }

                $properties['git_commits_url'] = $value;
    
                after_git_commits_url:

                $value = $payload['git_refs_url'] ?? null;
    
                if ($value === null) {
                    $properties['git_refs_url'] = null;
                    goto after_git_refs_url;
                }

                $properties['git_refs_url'] = $value;
    
                after_git_refs_url:

                $value = $payload['git_tags_url'] ?? null;
    
                if ($value === null) {
                    $properties['git_tags_url'] = null;
                    goto after_git_tags_url;
                }

                $properties['git_tags_url'] = $value;
    
                after_git_tags_url:

                $value = $payload['git_url'] ?? null;
    
                if ($value === null) {
                    $properties['git_url'] = null;
                    goto after_git_url;
                }

                $properties['git_url'] = $value;
    
                after_git_url:

                $value = $payload['issue_comment_url'] ?? null;
    
                if ($value === null) {
                    $properties['issue_comment_url'] = null;
                    goto after_issue_comment_url;
                }

                $properties['issue_comment_url'] = $value;
    
                after_issue_comment_url:

                $value = $payload['issue_events_url'] ?? null;
    
                if ($value === null) {
                    $properties['issue_events_url'] = null;
                    goto after_issue_events_url;
                }

                $properties['issue_events_url'] = $value;
    
                after_issue_events_url:

                $value = $payload['issues_url'] ?? null;
    
                if ($value === null) {
                    $properties['issues_url'] = null;
                    goto after_issues_url;
                }

                $properties['issues_url'] = $value;
    
                after_issues_url:

                $value = $payload['keys_url'] ?? null;
    
                if ($value === null) {
                    $properties['keys_url'] = null;
                    goto after_keys_url;
                }

                $properties['keys_url'] = $value;
    
                after_keys_url:

                $value = $payload['labels_url'] ?? null;
    
                if ($value === null) {
                    $properties['labels_url'] = null;
                    goto after_labels_url;
                }

                $properties['labels_url'] = $value;
    
                after_labels_url:

                $value = $payload['languages_url'] ?? null;
    
                if ($value === null) {
                    $properties['languages_url'] = null;
                    goto after_languages_url;
                }

                $properties['languages_url'] = $value;
    
                after_languages_url:

                $value = $payload['merges_url'] ?? null;
    
                if ($value === null) {
                    $properties['merges_url'] = null;
                    goto after_merges_url;
                }

                $properties['merges_url'] = $value;
    
                after_merges_url:

                $value = $payload['milestones_url'] ?? null;
    
                if ($value === null) {
                    $properties['milestones_url'] = null;
                    goto after_milestones_url;
                }

                $properties['milestones_url'] = $value;
    
                after_milestones_url:

                $value = $payload['notifications_url'] ?? null;
    
                if ($value === null) {
                    $properties['notifications_url'] = null;
                    goto after_notifications_url;
                }

                $properties['notifications_url'] = $value;
    
                after_notifications_url:

                $value = $payload['pulls_url'] ?? null;
    
                if ($value === null) {
                    $properties['pulls_url'] = null;
                    goto after_pulls_url;
                }

                $properties['pulls_url'] = $value;
    
                after_pulls_url:

                $value = $payload['releases_url'] ?? null;
    
                if ($value === null) {
                    $properties['releases_url'] = null;
                    goto after_releases_url;
                }

                $properties['releases_url'] = $value;
    
                after_releases_url:

                $value = $payload['ssh_url'] ?? null;
    
                if ($value === null) {
                    $properties['ssh_url'] = null;
                    goto after_ssh_url;
                }

                $properties['ssh_url'] = $value;
    
                after_ssh_url:

                $value = $payload['stargazers_url'] ?? null;
    
                if ($value === null) {
                    $properties['stargazers_url'] = null;
                    goto after_stargazers_url;
                }

                $properties['stargazers_url'] = $value;
    
                after_stargazers_url:

                $value = $payload['statuses_url'] ?? null;
    
                if ($value === null) {
                    $properties['statuses_url'] = null;
                    goto after_statuses_url;
                }

                $properties['statuses_url'] = $value;
    
                after_statuses_url:

                $value = $payload['subscribers_url'] ?? null;
    
                if ($value === null) {
                    $properties['subscribers_url'] = null;
                    goto after_subscribers_url;
                }

                $properties['subscribers_url'] = $value;
    
                after_subscribers_url:

                $value = $payload['subscription_url'] ?? null;
    
                if ($value === null) {
                    $properties['subscription_url'] = null;
                    goto after_subscription_url;
                }

                $properties['subscription_url'] = $value;
    
                after_subscription_url:

                $value = $payload['tags_url'] ?? null;
    
                if ($value === null) {
                    $properties['tags_url'] = null;
                    goto after_tags_url;
                }

                $properties['tags_url'] = $value;
    
                after_tags_url:

                $value = $payload['teams_url'] ?? null;
    
                if ($value === null) {
                    $properties['teams_url'] = null;
                    goto after_teams_url;
                }

                $properties['teams_url'] = $value;
    
                after_teams_url:

                $value = $payload['trees_url'] ?? null;
    
                if ($value === null) {
                    $properties['trees_url'] = null;
                    goto after_trees_url;
                }

                $properties['trees_url'] = $value;
    
                after_trees_url:

                $value = $payload['clone_url'] ?? null;
    
                if ($value === null) {
                    $properties['clone_url'] = null;
                    goto after_clone_url;
                }

                $properties['clone_url'] = $value;
    
                after_clone_url:

                $value = $payload['mirror_url'] ?? null;
    
                if ($value === null) {
                    $properties['mirror_url'] = null;
                    goto after_mirror_url;
                }

                $properties['mirror_url'] = $value;
    
                after_mirror_url:

                $value = $payload['hooks_url'] ?? null;
    
                if ($value === null) {
                    $properties['hooks_url'] = null;
                    goto after_hooks_url;
                }

                $properties['hooks_url'] = $value;
    
                after_hooks_url:

                $value = $payload['svn_url'] ?? null;
    
                if ($value === null) {
                    $properties['svn_url'] = null;
                    goto after_svn_url;
                }

                $properties['svn_url'] = $value;
    
                after_svn_url:

                $value = $payload['homepage'] ?? null;
    
                if ($value === null) {
                    $properties['homepage'] = null;
                    goto after_homepage;
                }

                $properties['homepage'] = $value;
    
                after_homepage:

                $value = $payload['language'] ?? null;
    
                if ($value === null) {
                    $properties['language'] = null;
                    goto after_language;
                }

                $properties['language'] = $value;
    
                after_language:

                $value = $payload['forks_count'] ?? null;
    
                if ($value === null) {
                    $properties['forks_count'] = null;
                    goto after_forks_count;
                }

                $properties['forks_count'] = $value;
    
                after_forks_count:

                $value = $payload['stargazers_count'] ?? null;
    
                if ($value === null) {
                    $properties['stargazers_count'] = null;
                    goto after_stargazers_count;
                }

                $properties['stargazers_count'] = $value;
    
                after_stargazers_count:

                $value = $payload['watchers_count'] ?? null;
    
                if ($value === null) {
                    $properties['watchers_count'] = null;
                    goto after_watchers_count;
                }

                $properties['watchers_count'] = $value;
    
                after_watchers_count:

                $value = $payload['size'] ?? null;
    
                if ($value === null) {
                    $properties['size'] = null;
                    goto after_size;
                }

                $properties['size'] = $value;
    
                after_size:

                $value = $payload['default_branch'] ?? null;
    
                if ($value === null) {
                    $properties['default_branch'] = null;
                    goto after_default_branch;
                }

                $properties['default_branch'] = $value;
    
                after_default_branch:

                $value = $payload['open_issues_count'] ?? null;
    
                if ($value === null) {
                    $properties['open_issues_count'] = null;
                    goto after_open_issues_count;
                }

                $properties['open_issues_count'] = $value;
    
                after_open_issues_count:

                $value = $payload['is_template'] ?? null;
    
                if ($value === null) {
                    $properties['is_template'] = null;
                    goto after_is_template;
                }

                $properties['is_template'] = $value;
    
                after_is_template:

                $value = $payload['topics'] ?? null;
    
                if ($value === null) {
                    $properties['topics'] = null;
                    goto after_topics;
                }

                $properties['topics'] = $value;
    
                after_topics:

                $value = $payload['has_issues'] ?? null;
    
                if ($value === null) {
                    $properties['has_issues'] = null;
                    goto after_has_issues;
                }

                $properties['has_issues'] = $value;
    
                after_has_issues:

                $value = $payload['has_projects'] ?? null;
    
                if ($value === null) {
                    $properties['has_projects'] = null;
                    goto after_has_projects;
                }

                $properties['has_projects'] = $value;
    
                after_has_projects:

                $value = $payload['has_wiki'] ?? null;
    
                if ($value === null) {
                    $properties['has_wiki'] = null;
                    goto after_has_wiki;
                }

                $properties['has_wiki'] = $value;
    
                after_has_wiki:

                $value = $payload['has_pages'] ?? null;
    
                if ($value === null) {
                    $properties['has_pages'] = null;
                    goto after_has_pages;
                }

                $properties['has_pages'] = $value;
    
                after_has_pages:

                $value = $payload['has_downloads'] ?? null;
    
                if ($value === null) {
                    $properties['has_downloads'] = null;
                    goto after_has_downloads;
                }

                $properties['has_downloads'] = $value;
    
                after_has_downloads:

                $value = $payload['archived'] ?? null;
    
                if ($value === null) {
                    $properties['archived'] = null;
                    goto after_archived;
                }

                $properties['archived'] = $value;
    
                after_archived:

                $value = $payload['disabled'] ?? null;
    
                if ($value === null) {
                    $properties['disabled'] = null;
                    goto after_disabled;
                }

                $properties['disabled'] = $value;
    
                after_disabled:

                $value = $payload['visibility'] ?? null;
    
                if ($value === null) {
                    $properties['visibility'] = null;
                    goto after_visibility;
                }

                $properties['visibility'] = $value;
    
                after_visibility:

                $value = $payload['pushed_at'] ?? null;
    
                if ($value === null) {
                    $properties['pushed_at'] = null;
                    goto after_pushed_at;
                }

                $properties['pushed_at'] = $value;
    
                after_pushed_at:

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

                $value = $payload['permissions'] ?? null;
    
                if ($value === null) {
                    $properties['permissions'] = null;
                    goto after_permissions;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'permissions';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Repository⚡️TemplateRepository⚡️Permissions($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['permissions'] = $value;
    
                after_permissions:

                $value = $payload['allow_rebase_merge'] ?? null;
    
                if ($value === null) {
                    $properties['allow_rebase_merge'] = null;
                    goto after_allow_rebase_merge;
                }

                $properties['allow_rebase_merge'] = $value;
    
                after_allow_rebase_merge:

                $value = $payload['temp_clone_token'] ?? null;
    
                if ($value === null) {
                    $properties['temp_clone_token'] = null;
                    goto after_temp_clone_token;
                }

                $properties['temp_clone_token'] = $value;
    
                after_temp_clone_token:

                $value = $payload['allow_squash_merge'] ?? null;
    
                if ($value === null) {
                    $properties['allow_squash_merge'] = null;
                    goto after_allow_squash_merge;
                }

                $properties['allow_squash_merge'] = $value;
    
                after_allow_squash_merge:

                $value = $payload['allow_auto_merge'] ?? null;
    
                if ($value === null) {
                    $properties['allow_auto_merge'] = null;
                    goto after_allow_auto_merge;
                }

                $properties['allow_auto_merge'] = $value;
    
                after_allow_auto_merge:

                $value = $payload['delete_branch_on_merge'] ?? null;
    
                if ($value === null) {
                    $properties['delete_branch_on_merge'] = null;
                    goto after_delete_branch_on_merge;
                }

                $properties['delete_branch_on_merge'] = $value;
    
                after_delete_branch_on_merge:

                $value = $payload['allow_update_branch'] ?? null;
    
                if ($value === null) {
                    $properties['allow_update_branch'] = null;
                    goto after_allow_update_branch;
                }

                $properties['allow_update_branch'] = $value;
    
                after_allow_update_branch:

                $value = $payload['use_squash_pr_title_as_default'] ?? null;
    
                if ($value === null) {
                    $properties['use_squash_pr_title_as_default'] = null;
                    goto after_use_squash_pr_title_as_default;
                }

                $properties['use_squash_pr_title_as_default'] = $value;
    
                after_use_squash_pr_title_as_default:

                $value = $payload['squash_merge_commit_title'] ?? null;
    
                if ($value === null) {
                    $properties['squash_merge_commit_title'] = null;
                    goto after_squash_merge_commit_title;
                }

                $properties['squash_merge_commit_title'] = $value;
    
                after_squash_merge_commit_title:

                $value = $payload['squash_merge_commit_message'] ?? null;
    
                if ($value === null) {
                    $properties['squash_merge_commit_message'] = null;
                    goto after_squash_merge_commit_message;
                }

                $properties['squash_merge_commit_message'] = $value;
    
                after_squash_merge_commit_message:

                $value = $payload['merge_commit_title'] ?? null;
    
                if ($value === null) {
                    $properties['merge_commit_title'] = null;
                    goto after_merge_commit_title;
                }

                $properties['merge_commit_title'] = $value;
    
                after_merge_commit_title:

                $value = $payload['merge_commit_message'] ?? null;
    
                if ($value === null) {
                    $properties['merge_commit_message'] = null;
                    goto after_merge_commit_message;
                }

                $properties['merge_commit_message'] = $value;
    
                after_merge_commit_message:

                $value = $payload['allow_merge_commit'] ?? null;
    
                if ($value === null) {
                    $properties['allow_merge_commit'] = null;
                    goto after_allow_merge_commit;
                }

                $properties['allow_merge_commit'] = $value;
    
                after_allow_merge_commit:

                $value = $payload['subscribers_count'] ?? null;
    
                if ($value === null) {
                    $properties['subscribers_count'] = null;
                    goto after_subscribers_count;
                }

                $properties['subscribers_count'] = $value;
    
                after_subscribers_count:

                $value = $payload['network_count'] ?? null;
    
                if ($value === null) {
                    $properties['network_count'] = null;
                    goto after_network_count;
                }

                $properties['network_count'] = $value;
    
                after_network_count:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Repository\TemplateRepository', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\Repository\TemplateRepository::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\Repository\TemplateRepository(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Repository\TemplateRepository', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Repository⚡️TemplateRepository⚡️Owner(array $payload): \ApiClients\Client\GitHub\Schema\Repository\TemplateRepository\Owner
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

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Repository\TemplateRepository\Owner', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\Repository\TemplateRepository\Owner::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\Repository\TemplateRepository\Owner(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Repository\TemplateRepository\Owner', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Repository⚡️TemplateRepository⚡️Permissions(array $payload): \ApiClients\Client\GitHub\Schema\Repository\TemplateRepository\Permissions
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['admin'] ?? null;
    
                if ($value === null) {
                    $properties['admin'] = null;
                    goto after_admin;
                }

                $properties['admin'] = $value;
    
                after_admin:

                $value = $payload['maintain'] ?? null;
    
                if ($value === null) {
                    $properties['maintain'] = null;
                    goto after_maintain;
                }

                $properties['maintain'] = $value;
    
                after_maintain:

                $value = $payload['push'] ?? null;
    
                if ($value === null) {
                    $properties['push'] = null;
                    goto after_push;
                }

                $properties['push'] = $value;
    
                after_push:

                $value = $payload['triage'] ?? null;
    
                if ($value === null) {
                    $properties['triage'] = null;
                    goto after_triage;
                }

                $properties['triage'] = $value;
    
                after_triage:

                $value = $payload['pull'] ?? null;
    
                if ($value === null) {
                    $properties['pull'] = null;
                    goto after_pull;
                }

                $properties['pull'] = $value;
    
                after_pull:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Repository\TemplateRepository\Permissions', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\Repository\TemplateRepository\Permissions::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\Repository\TemplateRepository\Permissions(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Repository\TemplateRepository\Permissions', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookPackageUpdated(array $payload): \ApiClients\Client\GitHub\Schema\WebhookPackageUpdated
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

                $value = $payload['enterprise'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'enterprise';
                    goto after_enterprise;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'enterprise';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Enterprise($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['enterprise'] = $value;
    
                after_enterprise:

                $value = $payload['installation'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'installation';
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

                $value = $payload['package'] ?? null;
    
                if ($value === null) {
                    $properties['package'] = null;
                    goto after_package;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'package';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookPackageUpdated⚡️Package($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['package'] = $value;
    
                after_package:

                $value = $payload['repository'] ?? null;
    
                if ($value === null) {
                    $properties['repository'] = null;
                    goto after_repository;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'repository';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Repository($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['repository'] = $value;
    
                after_repository:

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
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookPackageUpdated', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookPackageUpdated::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\WebhookPackageUpdated(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookPackageUpdated', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookPackageUpdated⚡️Package(array $payload): \ApiClients\Client\GitHub\Schema\WebhookPackageUpdated\Package
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['created_at'] ?? null;
    
                if ($value === null) {
                    $properties['created_at'] = null;
                    goto after_created_at;
                }

                $properties['created_at'] = $value;
    
                after_created_at:

                $value = $payload['description'] ?? null;
    
                if ($value === null) {
                    $properties['description'] = null;
                    goto after_description;
                }

                $properties['description'] = $value;
    
                after_description:

                $value = $payload['ecosystem'] ?? null;
    
                if ($value === null) {
                    $properties['ecosystem'] = null;
                    goto after_ecosystem;
                }

                $properties['ecosystem'] = $value;
    
                after_ecosystem:

                $value = $payload['html_url'] ?? null;
    
                if ($value === null) {
                    $properties['html_url'] = null;
                    goto after_html_url;
                }

                $properties['html_url'] = $value;
    
                after_html_url:

                $value = $payload['id'] ?? null;
    
                if ($value === null) {
                    $properties['id'] = null;
                    goto after_id;
                }

                $properties['id'] = $value;
    
                after_id:

                $value = $payload['name'] ?? null;
    
                if ($value === null) {
                    $properties['name'] = null;
                    goto after_name;
                }

                $properties['name'] = $value;
    
                after_name:

                $value = $payload['namespace'] ?? null;
    
                if ($value === null) {
                    $properties['namespace'] = null;
                    goto after_namespace;
                }

                $properties['namespace'] = $value;
    
                after_namespace:

                $value = $payload['owner'] ?? null;
    
                if ($value === null) {
                    $properties['owner'] = null;
                    goto after_owner;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'owner';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Discussion⚡️AnswerChosenBy($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['owner'] = $value;
    
                after_owner:

                $value = $payload['package_type'] ?? null;
    
                if ($value === null) {
                    $properties['package_type'] = null;
                    goto after_package_type;
                }

                $properties['package_type'] = $value;
    
                after_package_type:

                $value = $payload['package_version'] ?? null;
    
                if ($value === null) {
                    $properties['package_version'] = null;
                    goto after_package_version;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'package_version';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookPackageUpdated⚡️Package⚡️PackageVersion($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['package_version'] = $value;
    
                after_package_version:

                $value = $payload['registry'] ?? null;
    
                if ($value === null) {
                    $properties['registry'] = null;
                    goto after_registry;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'registry';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookPackagePublished⚡️Package⚡️Registry($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['registry'] = $value;
    
                after_registry:

                $value = $payload['updated_at'] ?? null;
    
                if ($value === null) {
                    $properties['updated_at'] = null;
                    goto after_updated_at;
                }

                $properties['updated_at'] = $value;
    
                after_updated_at:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookPackageUpdated\Package', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookPackageUpdated\Package::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\WebhookPackageUpdated\Package(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookPackageUpdated\Package', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookPackageUpdated⚡️Package⚡️PackageVersion(array $payload): \ApiClients\Client\GitHub\Schema\WebhookPackageUpdated\Package\PackageVersion
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['author'] ?? null;
    
                if ($value === null) {
                    $properties['author'] = null;
                    goto after_author;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'author';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Discussion⚡️AnswerChosenBy($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['author'] = $value;
    
                after_author:

                $value = $payload['body'] ?? null;
    
                if ($value === null) {
                    $properties['body'] = null;
                    goto after_body;
                }

                $properties['body'] = $value;
    
                after_body:

                $value = $payload['body_html'] ?? null;
    
                if ($value === null) {
                    $properties['body_html'] = null;
                    goto after_body_html;
                }

                $properties['body_html'] = $value;
    
                after_body_html:

                $value = $payload['created_at'] ?? null;
    
                if ($value === null) {
                    $properties['created_at'] = null;
                    goto after_created_at;
                }

                $properties['created_at'] = $value;
    
                after_created_at:

                $value = $payload['description'] ?? null;
    
                if ($value === null) {
                    $properties['description'] = null;
                    goto after_description;
                }

                $properties['description'] = $value;
    
                after_description:

                $value = $payload['docker_metadata'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'docker_metadata';
                    goto after_docker_metadata;
                }

                $properties['docker_metadata'] = $value;
    
                after_docker_metadata:

                $value = $payload['draft'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'draft';
                    goto after_draft;
                }

                $properties['draft'] = $value;
    
                after_draft:

                $value = $payload['html_url'] ?? null;
    
                if ($value === null) {
                    $properties['html_url'] = null;
                    goto after_html_url;
                }

                $properties['html_url'] = $value;
    
                after_html_url:

                $value = $payload['id'] ?? null;
    
                if ($value === null) {
                    $properties['id'] = null;
                    goto after_id;
                }

                $properties['id'] = $value;
    
                after_id:

                $value = $payload['installation_command'] ?? null;
    
                if ($value === null) {
                    $properties['installation_command'] = null;
                    goto after_installation_command;
                }

                $properties['installation_command'] = $value;
    
                after_installation_command:

                $value = $payload['manifest'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'manifest';
                    goto after_manifest;
                }

                $properties['manifest'] = $value;
    
                after_manifest:

                $value = $payload['metadata'] ?? null;
    
                if ($value === null) {
                    $properties['metadata'] = null;
                    goto after_metadata;
                }

                $properties['metadata'] = $value;
    
                after_metadata:

                $value = $payload['name'] ?? null;
    
                if ($value === null) {
                    $properties['name'] = null;
                    goto after_name;
                }

                $properties['name'] = $value;
    
                after_name:

                $value = $payload['package_files'] ?? null;
    
                if ($value === null) {
                    $properties['package_files'] = null;
                    goto after_package_files;
                }

                static $package_filesCaster1;
    
                if ($package_filesCaster1 === null) {
                    $package_filesCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\WebhookPackageUpdated\\Package\\PackageVersion\\PackageFiles',
));
                }
    
                $value = $package_filesCaster1->cast($value, $this);

                $properties['package_files'] = $value;
    
                after_package_files:

                $value = $payload['package_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'package_url';
                    goto after_package_url;
                }

                $properties['package_url'] = $value;
    
                after_package_url:

                $value = $payload['prerelease'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'prerelease';
                    goto after_prerelease;
                }

                $properties['prerelease'] = $value;
    
                after_prerelease:

                $value = $payload['release'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'release';
                    goto after_release;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'release';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookPackageUpdated⚡️Package⚡️PackageVersion⚡️Release($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['release'] = $value;
    
                after_release:

                $value = $payload['rubygems_metadata'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'rubygems_metadata';
                    goto after_rubygems_metadata;
                }

                $properties['rubygems_metadata'] = $value;
    
                after_rubygems_metadata:

                $value = $payload['source_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'source_url';
                    goto after_source_url;
                }

                $properties['source_url'] = $value;
    
                after_source_url:

                $value = $payload['summary'] ?? null;
    
                if ($value === null) {
                    $properties['summary'] = null;
                    goto after_summary;
                }

                $properties['summary'] = $value;
    
                after_summary:

                $value = $payload['tag_name'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'tag_name';
                    goto after_tag_name;
                }

                $properties['tag_name'] = $value;
    
                after_tag_name:

                $value = $payload['target_commitish'] ?? null;
    
                if ($value === null) {
                    $properties['target_commitish'] = null;
                    goto after_target_commitish;
                }

                $properties['target_commitish'] = $value;
    
                after_target_commitish:

                $value = $payload['target_oid'] ?? null;
    
                if ($value === null) {
                    $properties['target_oid'] = null;
                    goto after_target_oid;
                }

                $properties['target_oid'] = $value;
    
                after_target_oid:

                $value = $payload['updated_at'] ?? null;
    
                if ($value === null) {
                    $properties['updated_at'] = null;
                    goto after_updated_at;
                }

                $properties['updated_at'] = $value;
    
                after_updated_at:

                $value = $payload['version'] ?? null;
    
                if ($value === null) {
                    $properties['version'] = null;
                    goto after_version;
                }

                $properties['version'] = $value;
    
                after_version:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookPackageUpdated\Package\PackageVersion', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookPackageUpdated\Package\PackageVersion::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\WebhookPackageUpdated\Package\PackageVersion(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookPackageUpdated\Package\PackageVersion', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookPackageUpdated⚡️Package⚡️PackageVersion⚡️PackageFiles(array $payload): \ApiClients\Client\GitHub\Schema\WebhookPackageUpdated\Package\PackageVersion\PackageFiles
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['content_type'] ?? null;
    
                if ($value === null) {
                    $properties['content_type'] = null;
                    goto after_content_type;
                }

                $properties['content_type'] = $value;
    
                after_content_type:

                $value = $payload['created_at'] ?? null;
    
                if ($value === null) {
                    $properties['created_at'] = null;
                    goto after_created_at;
                }

                $properties['created_at'] = $value;
    
                after_created_at:

                $value = $payload['download_url'] ?? null;
    
                if ($value === null) {
                    $properties['download_url'] = null;
                    goto after_download_url;
                }

                $properties['download_url'] = $value;
    
                after_download_url:

                $value = $payload['id'] ?? null;
    
                if ($value === null) {
                    $properties['id'] = null;
                    goto after_id;
                }

                $properties['id'] = $value;
    
                after_id:

                $value = $payload['md5'] ?? null;
    
                if ($value === null) {
                    $properties['md5'] = null;
                    goto after_md5;
                }

                $properties['md5'] = $value;
    
                after_md5:

                $value = $payload['name'] ?? null;
    
                if ($value === null) {
                    $properties['name'] = null;
                    goto after_name;
                }

                $properties['name'] = $value;
    
                after_name:

                $value = $payload['sha1'] ?? null;
    
                if ($value === null) {
                    $properties['sha1'] = null;
                    goto after_sha1;
                }

                $properties['sha1'] = $value;
    
                after_sha1:

                $value = $payload['sha256'] ?? null;
    
                if ($value === null) {
                    $properties['sha256'] = null;
                    goto after_sha256;
                }

                $properties['sha256'] = $value;
    
                after_sha256:

                $value = $payload['size'] ?? null;
    
                if ($value === null) {
                    $properties['size'] = null;
                    goto after_size;
                }

                $properties['size'] = $value;
    
                after_size:

                $value = $payload['state'] ?? null;
    
                if ($value === null) {
                    $properties['state'] = null;
                    goto after_state;
                }

                $properties['state'] = $value;
    
                after_state:

                $value = $payload['updated_at'] ?? null;
    
                if ($value === null) {
                    $properties['updated_at'] = null;
                    goto after_updated_at;
                }

                $properties['updated_at'] = $value;
    
                after_updated_at:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookPackageUpdated\Package\PackageVersion\PackageFiles', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookPackageUpdated\Package\PackageVersion\PackageFiles::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\WebhookPackageUpdated\Package\PackageVersion\PackageFiles(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookPackageUpdated\Package\PackageVersion\PackageFiles', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookPackageUpdated⚡️Package⚡️PackageVersion⚡️Release(array $payload): \ApiClients\Client\GitHub\Schema\WebhookPackageUpdated\Package\PackageVersion\Release
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['author'] ?? null;
    
                if ($value === null) {
                    $properties['author'] = null;
                    goto after_author;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'author';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Discussion⚡️AnswerChosenBy($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['author'] = $value;
    
                after_author:

                $value = $payload['created_at'] ?? null;
    
                if ($value === null) {
                    $properties['created_at'] = null;
                    goto after_created_at;
                }

                $properties['created_at'] = $value;
    
                after_created_at:

                $value = $payload['draft'] ?? null;
    
                if ($value === null) {
                    $properties['draft'] = null;
                    goto after_draft;
                }

                $properties['draft'] = $value;
    
                after_draft:

                $value = $payload['html_url'] ?? null;
    
                if ($value === null) {
                    $properties['html_url'] = null;
                    goto after_html_url;
                }

                $properties['html_url'] = $value;
    
                after_html_url:

                $value = $payload['id'] ?? null;
    
                if ($value === null) {
                    $properties['id'] = null;
                    goto after_id;
                }

                $properties['id'] = $value;
    
                after_id:

                $value = $payload['name'] ?? null;
    
                if ($value === null) {
                    $properties['name'] = null;
                    goto after_name;
                }

                $properties['name'] = $value;
    
                after_name:

                $value = $payload['prerelease'] ?? null;
    
                if ($value === null) {
                    $properties['prerelease'] = null;
                    goto after_prerelease;
                }

                $properties['prerelease'] = $value;
    
                after_prerelease:

                $value = $payload['published_at'] ?? null;
    
                if ($value === null) {
                    $properties['published_at'] = null;
                    goto after_published_at;
                }

                $properties['published_at'] = $value;
    
                after_published_at:

                $value = $payload['tag_name'] ?? null;
    
                if ($value === null) {
                    $properties['tag_name'] = null;
                    goto after_tag_name;
                }

                $properties['tag_name'] = $value;
    
                after_tag_name:

                $value = $payload['target_commitish'] ?? null;
    
                if ($value === null) {
                    $properties['target_commitish'] = null;
                    goto after_target_commitish;
                }

                $properties['target_commitish'] = $value;
    
                after_target_commitish:

                $value = $payload['url'] ?? null;
    
                if ($value === null) {
                    $properties['url'] = null;
                    goto after_url;
                }

                $properties['url'] = $value;
    
                after_url:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookPackageUpdated\Package\PackageVersion\Release', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookPackageUpdated\Package\PackageVersion\Release::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\WebhookPackageUpdated\Package\PackageVersion\Release(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookPackageUpdated\Package\PackageVersion\Release', $exception, stack: $this->hydrationStack);
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
                'ApiClients\Client\GitHub\Schema\WebhookPackagePublished' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookPackagePublished($object),
                'ApiClients\Client\GitHub\Schema\Enterprise' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Enterprise($object),
                'ApiClients\Client\GitHub\Schema\SimpleInstallation' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleInstallation($object),
                'ApiClients\Client\GitHub\Schema\OrganizationSimple' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️OrganizationSimple($object),
                'ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookPackagePublished⚡️Package($object),
                'ApiClients\Client\GitHub\Schema\Discussion\AnswerChosenBy' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Discussion⚡️AnswerChosenBy($object),
                'ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package\PackageVersion' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookPackagePublished⚡️Package⚡️PackageVersion($object),
                'ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package\PackageVersion\ContainerMetadata' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookPackagePublished⚡️Package⚡️PackageVersion⚡️ContainerMetadata($object),
                'ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package\PackageVersion\ContainerMetadata\Tag' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookPackagePublished⚡️Package⚡️PackageVersion⚡️ContainerMetadata⚡️Tag($object),
                'ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package\PackageVersion\NpmMetadata' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookPackagePublished⚡️Package⚡️PackageVersion⚡️NpmMetadata($object),
                'ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package\PackageVersion\NugetMetadata' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookPackagePublished⚡️Package⚡️PackageVersion⚡️NugetMetadata($object),
                'ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package\PackageVersion\PackageFiles' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookPackagePublished⚡️Package⚡️PackageVersion⚡️PackageFiles($object),
                'ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package\PackageVersion\Release' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookPackagePublished⚡️Package⚡️PackageVersion⚡️Release($object),
                'ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package\Registry' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookPackagePublished⚡️Package⚡️Registry($object),
                'ApiClients\Client\GitHub\Schema\Repository' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Repository($object),
                'ApiClients\Client\GitHub\Schema\Repository\Permissions' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Repository⚡️Permissions($object),
                'ApiClients\Client\GitHub\Schema\SimpleUser' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($object),
                'ApiClients\Client\GitHub\Schema\Repository\TemplateRepository' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Repository⚡️TemplateRepository($object),
                'ApiClients\Client\GitHub\Schema\Repository\TemplateRepository\Owner' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Repository⚡️TemplateRepository⚡️Owner($object),
                'ApiClients\Client\GitHub\Schema\Repository\TemplateRepository\Permissions' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Repository⚡️TemplateRepository⚡️Permissions($object),
                'ApiClients\Client\GitHub\Schema\WebhookPackageUpdated' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookPackageUpdated($object),
                'ApiClients\Client\GitHub\Schema\WebhookPackageUpdated\Package' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookPackageUpdated⚡️Package($object),
                'ApiClients\Client\GitHub\Schema\WebhookPackageUpdated\Package\PackageVersion' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookPackageUpdated⚡️Package⚡️PackageVersion($object),
                'ApiClients\Client\GitHub\Schema\WebhookPackageUpdated\Package\PackageVersion\PackageFiles' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookPackageUpdated⚡️Package⚡️PackageVersion⚡️PackageFiles($object),
                'ApiClients\Client\GitHub\Schema\WebhookPackageUpdated\Package\PackageVersion\Release' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookPackageUpdated⚡️Package⚡️PackageVersion⚡️Release($object),
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

    
    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookPackagePublished(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookPackagePublished);
        $result = [];
        
        $action = $object->action;

        if ($action === null) {
            goto after_action;
        }
        after_action:        $result['action'] = $action;

        
        $enterprise = $object->enterprise;
        $enterprise = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Enterprise($enterprise);
        after_enterprise:        $result['enterprise'] = $enterprise;

        
        $installation = $object->installation;
        $installation = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleInstallation($installation);
        after_installation:        $result['installation'] = $installation;

        
        $organization = $object->organization;
        $organization = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️OrganizationSimple($organization);
        after_organization:        $result['organization'] = $organization;

        
        $package = $object->package;

        if ($package === null) {
            goto after_package;
        }
        $package = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookPackagePublished⚡️Package($package);
        after_package:        $result['package'] = $package;

        
        $repository = $object->repository;
        $repository = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Repository($repository);
        after_repository:        $result['repository'] = $repository;

        
        $sender = $object->sender;

        if ($sender === null) {
            goto after_sender;
        }
        $sender = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($sender);
        after_sender:        $result['sender'] = $sender;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Enterprise(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\Enterprise);
        $result = [];
        
        $description = $object->description;

        if ($description === null) {
            goto after_description;
        }
        after_description:        $result['description'] = $description;

        
        $html_url = $object->html_url;

        if ($html_url === null) {
            goto after_html_url;
        }
        after_html_url:        $result['html_url'] = $html_url;

        
        $website_url = $object->website_url;

        if ($website_url === null) {
            goto after_website_url;
        }
        after_website_url:        $result['website_url'] = $website_url;

        
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

        
        $avatar_url = $object->avatar_url;

        if ($avatar_url === null) {
            goto after_avatar_url;
        }
        after_avatar_url:        $result['avatar_url'] = $avatar_url;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleInstallation(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\SimpleInstallation);
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

    
    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookPackagePublished⚡️Package(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package);
        $result = [];
        
        $created_at = $object->created_at;

        if ($created_at === null) {
            goto after_created_at;
        }
        after_created_at:        $result['created_at'] = $created_at;

        
        $description = $object->description;

        if ($description === null) {
            goto after_description;
        }
        after_description:        $result['description'] = $description;

        
        $ecosystem = $object->ecosystem;

        if ($ecosystem === null) {
            goto after_ecosystem;
        }
        after_ecosystem:        $result['ecosystem'] = $ecosystem;

        
        $html_url = $object->html_url;

        if ($html_url === null) {
            goto after_html_url;
        }
        after_html_url:        $result['html_url'] = $html_url;

        
        $id = $object->id;

        if ($id === null) {
            goto after_id;
        }
        after_id:        $result['id'] = $id;

        
        $name = $object->name;

        if ($name === null) {
            goto after_name;
        }
        after_name:        $result['name'] = $name;

        
        $namespace = $object->namespace;

        if ($namespace === null) {
            goto after_namespace;
        }
        after_namespace:        $result['namespace'] = $namespace;

        
        $owner = $object->owner;

        if ($owner === null) {
            goto after_owner;
        }
        $owner = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Discussion⚡️AnswerChosenBy($owner);
        after_owner:        $result['owner'] = $owner;

        
        $package_type = $object->package_type;

        if ($package_type === null) {
            goto after_package_type;
        }
        after_package_type:        $result['package_type'] = $package_type;

        
        $package_version = $object->package_version;

        if ($package_version === null) {
            goto after_package_version;
        }
        $package_version = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookPackagePublished⚡️Package⚡️PackageVersion($package_version);
        after_package_version:        $result['package_version'] = $package_version;

        
        $registry = $object->registry;

        if ($registry === null) {
            goto after_registry;
        }
        $registry = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookPackagePublished⚡️Package⚡️Registry($registry);
        after_registry:        $result['registry'] = $registry;

        
        $updated_at = $object->updated_at;

        if ($updated_at === null) {
            goto after_updated_at;
        }
        after_updated_at:        $result['updated_at'] = $updated_at;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Discussion⚡️AnswerChosenBy(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\Discussion\AnswerChosenBy);
        $result = [];
        
        $avatar_url = $object->avatar_url;
        after_avatar_url:        $result['avatar_url'] = $avatar_url;

        
        $deleted = $object->deleted;
        after_deleted:        $result['deleted'] = $deleted;

        
        $email = $object->email;

        if ($email === null) {
            goto after_email;
        }
        after_email:        $result['email'] = $email;

        
        $events_url = $object->events_url;
        after_events_url:        $result['events_url'] = $events_url;

        
        $followers_url = $object->followers_url;
        after_followers_url:        $result['followers_url'] = $followers_url;

        
        $following_url = $object->following_url;
        after_following_url:        $result['following_url'] = $following_url;

        
        $gists_url = $object->gists_url;
        after_gists_url:        $result['gists_url'] = $gists_url;

        
        $gravatar_id = $object->gravatar_id;
        after_gravatar_id:        $result['gravatar_id'] = $gravatar_id;

        
        $html_url = $object->html_url;
        after_html_url:        $result['html_url'] = $html_url;

        
        $id = $object->id;

        if ($id === null) {
            goto after_id;
        }
        after_id:        $result['id'] = $id;

        
        $login = $object->login;

        if ($login === null) {
            goto after_login;
        }
        after_login:        $result['login'] = $login;

        
        $name = $object->name;
        after_name:        $result['name'] = $name;

        
        $node_id = $object->node_id;
        after_node_id:        $result['node_id'] = $node_id;

        
        $organizations_url = $object->organizations_url;
        after_organizations_url:        $result['organizations_url'] = $organizations_url;

        
        $received_events_url = $object->received_events_url;
        after_received_events_url:        $result['received_events_url'] = $received_events_url;

        
        $repos_url = $object->repos_url;
        after_repos_url:        $result['repos_url'] = $repos_url;

        
        $site_admin = $object->site_admin;
        after_site_admin:        $result['site_admin'] = $site_admin;

        
        $starred_url = $object->starred_url;
        after_starred_url:        $result['starred_url'] = $starred_url;

        
        $subscriptions_url = $object->subscriptions_url;
        after_subscriptions_url:        $result['subscriptions_url'] = $subscriptions_url;

        
        $type = $object->type;
        after_type:        $result['type'] = $type;

        
        $url = $object->url;
        after_url:        $result['url'] = $url;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookPackagePublished⚡️Package⚡️PackageVersion(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package\PackageVersion);
        $result = [];
        
        $author = $object->author;

        if ($author === null) {
            goto after_author;
        }
        $author = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Discussion⚡️AnswerChosenBy($author);
        after_author:        $result['author'] = $author;

        
        $body = $object->body;
        after_body:        $result['body'] = $body;

        
        $body_html = $object->body_html;
        after_body_html:        $result['body_html'] = $body_html;

        
        $container_metadata = $object->container_metadata;

        if ($container_metadata === null) {
            goto after_container_metadata;
        }
        $container_metadata = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookPackagePublished⚡️Package⚡️PackageVersion⚡️ContainerMetadata($container_metadata);
        after_container_metadata:        $result['container_metadata'] = $container_metadata;

        
        $created_at = $object->created_at;
        after_created_at:        $result['created_at'] = $created_at;

        
        $description = $object->description;

        if ($description === null) {
            goto after_description;
        }
        after_description:        $result['description'] = $description;

        
        $docker_metadata = $object->docker_metadata;
        static $docker_metadataSerializer0;

        if ($docker_metadataSerializer0 === null) {
            $docker_metadataSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $docker_metadata = $docker_metadataSerializer0->serialize($docker_metadata, $this);
        after_docker_metadata:        $result['docker_metadata'] = $docker_metadata;

        
        $draft = $object->draft;
        after_draft:        $result['draft'] = $draft;

        
        $html_url = $object->html_url;

        if ($html_url === null) {
            goto after_html_url;
        }
        after_html_url:        $result['html_url'] = $html_url;

        
        $id = $object->id;

        if ($id === null) {
            goto after_id;
        }
        after_id:        $result['id'] = $id;

        
        $installation_command = $object->installation_command;

        if ($installation_command === null) {
            goto after_installation_command;
        }
        after_installation_command:        $result['installation_command'] = $installation_command;

        
        $manifest = $object->manifest;
        after_manifest:        $result['manifest'] = $manifest;

        
        $metadata = $object->metadata;

        if ($metadata === null) {
            goto after_metadata;
        }
        after_metadata:        $result['metadata'] = $metadata;

        
        $name = $object->name;

        if ($name === null) {
            goto after_name;
        }
        after_name:        $result['name'] = $name;

        
        $npm_metadata = $object->npm_metadata;

        if ($npm_metadata === null) {
            goto after_npm_metadata;
        }
        $npm_metadata = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookPackagePublished⚡️Package⚡️PackageVersion⚡️NpmMetadata($npm_metadata);
        after_npm_metadata:        $result['npm_metadata'] = $npm_metadata;

        
        $nuget_metadata = $object->nuget_metadata;

        if ($nuget_metadata === null) {
            goto after_nuget_metadata;
        }
        static $nuget_metadataSerializer0;

        if ($nuget_metadataSerializer0 === null) {
            $nuget_metadataSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\WebhookPackagePublished\\Package\\PackageVersion\\NugetMetadata',
));
        }
        
        $nuget_metadata = $nuget_metadataSerializer0->serialize($nuget_metadata, $this);
        after_nuget_metadata:        $result['nuget_metadata'] = $nuget_metadata;

        
        $package_files = $object->package_files;

        if ($package_files === null) {
            goto after_package_files;
        }
        static $package_filesSerializer0;

        if ($package_filesSerializer0 === null) {
            $package_filesSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\WebhookPackagePublished\\Package\\PackageVersion\\PackageFiles',
));
        }
        
        $package_files = $package_filesSerializer0->serialize($package_files, $this);
        after_package_files:        $result['package_files'] = $package_files;

        
        $package_url = $object->package_url;
        after_package_url:        $result['package_url'] = $package_url;

        
        $prerelease = $object->prerelease;
        after_prerelease:        $result['prerelease'] = $prerelease;

        
        $release = $object->release;
        $release = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookPackagePublished⚡️Package⚡️PackageVersion⚡️Release($release);
        after_release:        $result['release'] = $release;

        
        $rubygems_metadata = $object->rubygems_metadata;
        static $rubygems_metadataSerializer0;

        if ($rubygems_metadataSerializer0 === null) {
            $rubygems_metadataSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $rubygems_metadata = $rubygems_metadataSerializer0->serialize($rubygems_metadata, $this);
        after_rubygems_metadata:        $result['rubygems_metadata'] = $rubygems_metadata;

        
        $source_url = $object->source_url;
        after_source_url:        $result['source_url'] = $source_url;

        
        $summary = $object->summary;

        if ($summary === null) {
            goto after_summary;
        }
        after_summary:        $result['summary'] = $summary;

        
        $tag_name = $object->tag_name;
        after_tag_name:        $result['tag_name'] = $tag_name;

        
        $target_commitish = $object->target_commitish;
        after_target_commitish:        $result['target_commitish'] = $target_commitish;

        
        $target_oid = $object->target_oid;
        after_target_oid:        $result['target_oid'] = $target_oid;

        
        $updated_at = $object->updated_at;
        after_updated_at:        $result['updated_at'] = $updated_at;

        
        $version = $object->version;

        if ($version === null) {
            goto after_version;
        }
        after_version:        $result['version'] = $version;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookPackagePublished⚡️Package⚡️PackageVersion⚡️ContainerMetadata(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package\PackageVersion\ContainerMetadata);
        $result = [];
        
        $labels = $object->labels;

        if ($labels === null) {
            goto after_labels;
        }
        after_labels:        $result['labels'] = $labels;

        
        $manifest = $object->manifest;

        if ($manifest === null) {
            goto after_manifest;
        }
        after_manifest:        $result['manifest'] = $manifest;

        
        $tag = $object->tag;

        if ($tag === null) {
            goto after_tag;
        }
        $tag = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookPackagePublished⚡️Package⚡️PackageVersion⚡️ContainerMetadata⚡️Tag($tag);
        after_tag:        $result['tag'] = $tag;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookPackagePublished⚡️Package⚡️PackageVersion⚡️ContainerMetadata⚡️Tag(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package\PackageVersion\ContainerMetadata\Tag);
        $result = [];
        
        $digest = $object->digest;

        if ($digest === null) {
            goto after_digest;
        }
        after_digest:        $result['digest'] = $digest;

        
        $name = $object->name;

        if ($name === null) {
            goto after_name;
        }
        after_name:        $result['name'] = $name;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookPackagePublished⚡️Package⚡️PackageVersion⚡️NpmMetadata(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package\PackageVersion\NpmMetadata);
        $result = [];
        
        $name = $object->name;

        if ($name === null) {
            goto after_name;
        }
        after_name:        $result['name'] = $name;

        
        $version = $object->version;

        if ($version === null) {
            goto after_version;
        }
        after_version:        $result['version'] = $version;

        
        $npm_user = $object->npm_user;

        if ($npm_user === null) {
            goto after_npm_user;
        }
        after_npm_user:        $result['npm_user'] = $npm_user;

        
        $author = $object->author;

        if ($author === null) {
            goto after_author;
        }
        after_author:        $result['author'] = $author;

        
        $bugs = $object->bugs;

        if ($bugs === null) {
            goto after_bugs;
        }
        after_bugs:        $result['bugs'] = $bugs;

        
        $dependencies = $object->dependencies;

        if ($dependencies === null) {
            goto after_dependencies;
        }
        after_dependencies:        $result['dependencies'] = $dependencies;

        
        $dev_dependencies = $object->dev_dependencies;

        if ($dev_dependencies === null) {
            goto after_dev_dependencies;
        }
        after_dev_dependencies:        $result['dev_dependencies'] = $dev_dependencies;

        
        $peer_dependencies = $object->peer_dependencies;

        if ($peer_dependencies === null) {
            goto after_peer_dependencies;
        }
        after_peer_dependencies:        $result['peer_dependencies'] = $peer_dependencies;

        
        $optional_dependencies = $object->optional_dependencies;

        if ($optional_dependencies === null) {
            goto after_optional_dependencies;
        }
        after_optional_dependencies:        $result['optional_dependencies'] = $optional_dependencies;

        
        $description = $object->description;

        if ($description === null) {
            goto after_description;
        }
        after_description:        $result['description'] = $description;

        
        $dist = $object->dist;

        if ($dist === null) {
            goto after_dist;
        }
        after_dist:        $result['dist'] = $dist;

        
        $git_head = $object->git_head;

        if ($git_head === null) {
            goto after_git_head;
        }
        after_git_head:        $result['git_head'] = $git_head;

        
        $homepage = $object->homepage;

        if ($homepage === null) {
            goto after_homepage;
        }
        after_homepage:        $result['homepage'] = $homepage;

        
        $license = $object->license;

        if ($license === null) {
            goto after_license;
        }
        after_license:        $result['license'] = $license;

        
        $main = $object->main;

        if ($main === null) {
            goto after_main;
        }
        after_main:        $result['main'] = $main;

        
        $repository = $object->repository;

        if ($repository === null) {
            goto after_repository;
        }
        after_repository:        $result['repository'] = $repository;

        
        $scripts = $object->scripts;

        if ($scripts === null) {
            goto after_scripts;
        }
        after_scripts:        $result['scripts'] = $scripts;

        
        $id = $object->id;

        if ($id === null) {
            goto after_id;
        }
        after_id:        $result['id'] = $id;

        
        $node_version = $object->node_version;

        if ($node_version === null) {
            goto after_node_version;
        }
        after_node_version:        $result['node_version'] = $node_version;

        
        $npm_version = $object->npm_version;

        if ($npm_version === null) {
            goto after_npm_version;
        }
        after_npm_version:        $result['npm_version'] = $npm_version;

        
        $has_shrinkwrap = $object->has_shrinkwrap;

        if ($has_shrinkwrap === null) {
            goto after_has_shrinkwrap;
        }
        after_has_shrinkwrap:        $result['has_shrinkwrap'] = $has_shrinkwrap;

        
        $maintainers = $object->maintainers;

        if ($maintainers === null) {
            goto after_maintainers;
        }
        after_maintainers:        $result['maintainers'] = $maintainers;

        
        $contributors = $object->contributors;

        if ($contributors === null) {
            goto after_contributors;
        }
        after_contributors:        $result['contributors'] = $contributors;

        
        $engines = $object->engines;

        if ($engines === null) {
            goto after_engines;
        }
        after_engines:        $result['engines'] = $engines;

        
        $keywords = $object->keywords;

        if ($keywords === null) {
            goto after_keywords;
        }
        static $keywordsSerializer0;

        if ($keywordsSerializer0 === null) {
            $keywordsSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $keywords = $keywordsSerializer0->serialize($keywords, $this);
        after_keywords:        $result['keywords'] = $keywords;

        
        $files = $object->files;

        if ($files === null) {
            goto after_files;
        }
        static $filesSerializer0;

        if ($filesSerializer0 === null) {
            $filesSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $files = $filesSerializer0->serialize($files, $this);
        after_files:        $result['files'] = $files;

        
        $bin = $object->bin;

        if ($bin === null) {
            goto after_bin;
        }
        after_bin:        $result['bin'] = $bin;

        
        $man = $object->man;

        if ($man === null) {
            goto after_man;
        }
        after_man:        $result['man'] = $man;

        
        $directories = $object->directories;

        if ($directories === null) {
            goto after_directories;
        }
        after_directories:        $result['directories'] = $directories;

        
        $os = $object->os;

        if ($os === null) {
            goto after_os;
        }
        static $osSerializer0;

        if ($osSerializer0 === null) {
            $osSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $os = $osSerializer0->serialize($os, $this);
        after_os:        $result['os'] = $os;

        
        $cpu = $object->cpu;

        if ($cpu === null) {
            goto after_cpu;
        }
        static $cpuSerializer0;

        if ($cpuSerializer0 === null) {
            $cpuSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $cpu = $cpuSerializer0->serialize($cpu, $this);
        after_cpu:        $result['cpu'] = $cpu;

        
        $readme = $object->readme;

        if ($readme === null) {
            goto after_readme;
        }
        after_readme:        $result['readme'] = $readme;

        
        $installation_command = $object->installation_command;

        if ($installation_command === null) {
            goto after_installation_command;
        }
        after_installation_command:        $result['installation_command'] = $installation_command;

        
        $release_id = $object->release_id;

        if ($release_id === null) {
            goto after_release_id;
        }
        after_release_id:        $result['release_id'] = $release_id;

        
        $commit_oid = $object->commit_oid;

        if ($commit_oid === null) {
            goto after_commit_oid;
        }
        after_commit_oid:        $result['commit_oid'] = $commit_oid;

        
        $published_via_actions = $object->published_via_actions;

        if ($published_via_actions === null) {
            goto after_published_via_actions;
        }
        after_published_via_actions:        $result['published_via_actions'] = $published_via_actions;

        
        $deleted_by_id = $object->deleted_by_id;

        if ($deleted_by_id === null) {
            goto after_deleted_by_id;
        }
        after_deleted_by_id:        $result['deleted_by_id'] = $deleted_by_id;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookPackagePublished⚡️Package⚡️PackageVersion⚡️NugetMetadata(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package\PackageVersion\NugetMetadata);
        $result = [];
        
        $id = $object->id;

        if ($id === null) {
            goto after_id;
        }
        after_id:        $result['id'] = $id;

        
        $name = $object->name;

        if ($name === null) {
            goto after_name;
        }
        after_name:        $result['name'] = $name;

        
        $value = $object->value;

        if ($value === null) {
            goto after_value;
        }
        after_value:        $result['value'] = $value;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookPackagePublished⚡️Package⚡️PackageVersion⚡️PackageFiles(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package\PackageVersion\PackageFiles);
        $result = [];
        
        $content_type = $object->content_type;

        if ($content_type === null) {
            goto after_content_type;
        }
        after_content_type:        $result['content_type'] = $content_type;

        
        $created_at = $object->created_at;

        if ($created_at === null) {
            goto after_created_at;
        }
        after_created_at:        $result['created_at'] = $created_at;

        
        $download_url = $object->download_url;

        if ($download_url === null) {
            goto after_download_url;
        }
        after_download_url:        $result['download_url'] = $download_url;

        
        $id = $object->id;

        if ($id === null) {
            goto after_id;
        }
        after_id:        $result['id'] = $id;

        
        $md5 = $object->md5;

        if ($md5 === null) {
            goto after_md5;
        }
        after_md5:        $result['md5'] = $md5;

        
        $name = $object->name;

        if ($name === null) {
            goto after_name;
        }
        after_name:        $result['name'] = $name;

        
        $sha1 = $object->sha1;

        if ($sha1 === null) {
            goto after_sha1;
        }
        after_sha1:        $result['sha1'] = $sha1;

        
        $sha256 = $object->sha256;

        if ($sha256 === null) {
            goto after_sha256;
        }
        after_sha256:        $result['sha256'] = $sha256;

        
        $size = $object->size;

        if ($size === null) {
            goto after_size;
        }
        after_size:        $result['size'] = $size;

        
        $state = $object->state;

        if ($state === null) {
            goto after_state;
        }
        after_state:        $result['state'] = $state;

        
        $updated_at = $object->updated_at;

        if ($updated_at === null) {
            goto after_updated_at;
        }
        after_updated_at:        $result['updated_at'] = $updated_at;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookPackagePublished⚡️Package⚡️PackageVersion⚡️Release(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package\PackageVersion\Release);
        $result = [];
        
        $author = $object->author;

        if ($author === null) {
            goto after_author;
        }
        $author = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Discussion⚡️AnswerChosenBy($author);
        after_author:        $result['author'] = $author;

        
        $created_at = $object->created_at;

        if ($created_at === null) {
            goto after_created_at;
        }
        after_created_at:        $result['created_at'] = $created_at;

        
        $draft = $object->draft;

        if ($draft === null) {
            goto after_draft;
        }
        after_draft:        $result['draft'] = $draft;

        
        $html_url = $object->html_url;

        if ($html_url === null) {
            goto after_html_url;
        }
        after_html_url:        $result['html_url'] = $html_url;

        
        $id = $object->id;

        if ($id === null) {
            goto after_id;
        }
        after_id:        $result['id'] = $id;

        
        $name = $object->name;

        if ($name === null) {
            goto after_name;
        }
        after_name:        $result['name'] = $name;

        
        $prerelease = $object->prerelease;

        if ($prerelease === null) {
            goto after_prerelease;
        }
        after_prerelease:        $result['prerelease'] = $prerelease;

        
        $published_at = $object->published_at;

        if ($published_at === null) {
            goto after_published_at;
        }
        after_published_at:        $result['published_at'] = $published_at;

        
        $tag_name = $object->tag_name;

        if ($tag_name === null) {
            goto after_tag_name;
        }
        after_tag_name:        $result['tag_name'] = $tag_name;

        
        $target_commitish = $object->target_commitish;

        if ($target_commitish === null) {
            goto after_target_commitish;
        }
        after_target_commitish:        $result['target_commitish'] = $target_commitish;

        
        $url = $object->url;

        if ($url === null) {
            goto after_url;
        }
        after_url:        $result['url'] = $url;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookPackagePublished⚡️Package⚡️Registry(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package\Registry);
        $result = [];
        
        $about_url = $object->about_url;

        if ($about_url === null) {
            goto after_about_url;
        }
        after_about_url:        $result['about_url'] = $about_url;

        
        $name = $object->name;

        if ($name === null) {
            goto after_name;
        }
        after_name:        $result['name'] = $name;

        
        $type = $object->type;

        if ($type === null) {
            goto after_type;
        }
        after_type:        $result['type'] = $type;

        
        $url = $object->url;

        if ($url === null) {
            goto after_url;
        }
        after_url:        $result['url'] = $url;

        
        $vendor = $object->vendor;

        if ($vendor === null) {
            goto after_vendor;
        }
        after_vendor:        $result['vendor'] = $vendor;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Repository(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\Repository);
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

        
        $name = $object->name;

        if ($name === null) {
            goto after_name;
        }
        after_name:        $result['name'] = $name;

        
        $full_name = $object->full_name;

        if ($full_name === null) {
            goto after_full_name;
        }
        after_full_name:        $result['full_name'] = $full_name;

        
        $license = $object->license;

        if ($license === null) {
            goto after_license;
        }
        after_license:        $result['license'] = $license;

        
        $organization = $object->organization;

        if ($organization === null) {
            goto after_organization;
        }
        after_organization:        $result['organization'] = $organization;

        
        $forks = $object->forks;

        if ($forks === null) {
            goto after_forks;
        }
        after_forks:        $result['forks'] = $forks;

        
        $permissions = $object->permissions;
        $permissions = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Repository⚡️Permissions($permissions);
        after_permissions:        $result['permissions'] = $permissions;

        
        $owner = $object->owner;

        if ($owner === null) {
            goto after_owner;
        }
        $owner = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($owner);
        after_owner:        $result['owner'] = $owner;

        
        $private = $object->private;

        if ($private === null) {
            goto after_private;
        }
        after_private:        $result['private'] = $private;

        
        $html_url = $object->html_url;

        if ($html_url === null) {
            goto after_html_url;
        }
        after_html_url:        $result['html_url'] = $html_url;

        
        $description = $object->description;

        if ($description === null) {
            goto after_description;
        }
        after_description:        $result['description'] = $description;

        
        $fork = $object->fork;

        if ($fork === null) {
            goto after_fork;
        }
        after_fork:        $result['fork'] = $fork;

        
        $url = $object->url;

        if ($url === null) {
            goto after_url;
        }
        after_url:        $result['url'] = $url;

        
        $archive_url = $object->archive_url;

        if ($archive_url === null) {
            goto after_archive_url;
        }
        after_archive_url:        $result['archive_url'] = $archive_url;

        
        $assignees_url = $object->assignees_url;

        if ($assignees_url === null) {
            goto after_assignees_url;
        }
        after_assignees_url:        $result['assignees_url'] = $assignees_url;

        
        $blobs_url = $object->blobs_url;

        if ($blobs_url === null) {
            goto after_blobs_url;
        }
        after_blobs_url:        $result['blobs_url'] = $blobs_url;

        
        $branches_url = $object->branches_url;

        if ($branches_url === null) {
            goto after_branches_url;
        }
        after_branches_url:        $result['branches_url'] = $branches_url;

        
        $collaborators_url = $object->collaborators_url;

        if ($collaborators_url === null) {
            goto after_collaborators_url;
        }
        after_collaborators_url:        $result['collaborators_url'] = $collaborators_url;

        
        $comments_url = $object->comments_url;

        if ($comments_url === null) {
            goto after_comments_url;
        }
        after_comments_url:        $result['comments_url'] = $comments_url;

        
        $commits_url = $object->commits_url;

        if ($commits_url === null) {
            goto after_commits_url;
        }
        after_commits_url:        $result['commits_url'] = $commits_url;

        
        $compare_url = $object->compare_url;

        if ($compare_url === null) {
            goto after_compare_url;
        }
        after_compare_url:        $result['compare_url'] = $compare_url;

        
        $contents_url = $object->contents_url;

        if ($contents_url === null) {
            goto after_contents_url;
        }
        after_contents_url:        $result['contents_url'] = $contents_url;

        
        $contributors_url = $object->contributors_url;

        if ($contributors_url === null) {
            goto after_contributors_url;
        }
        after_contributors_url:        $result['contributors_url'] = $contributors_url;

        
        $deployments_url = $object->deployments_url;

        if ($deployments_url === null) {
            goto after_deployments_url;
        }
        after_deployments_url:        $result['deployments_url'] = $deployments_url;

        
        $downloads_url = $object->downloads_url;

        if ($downloads_url === null) {
            goto after_downloads_url;
        }
        after_downloads_url:        $result['downloads_url'] = $downloads_url;

        
        $events_url = $object->events_url;

        if ($events_url === null) {
            goto after_events_url;
        }
        after_events_url:        $result['events_url'] = $events_url;

        
        $forks_url = $object->forks_url;

        if ($forks_url === null) {
            goto after_forks_url;
        }
        after_forks_url:        $result['forks_url'] = $forks_url;

        
        $git_commits_url = $object->git_commits_url;

        if ($git_commits_url === null) {
            goto after_git_commits_url;
        }
        after_git_commits_url:        $result['git_commits_url'] = $git_commits_url;

        
        $git_refs_url = $object->git_refs_url;

        if ($git_refs_url === null) {
            goto after_git_refs_url;
        }
        after_git_refs_url:        $result['git_refs_url'] = $git_refs_url;

        
        $git_tags_url = $object->git_tags_url;

        if ($git_tags_url === null) {
            goto after_git_tags_url;
        }
        after_git_tags_url:        $result['git_tags_url'] = $git_tags_url;

        
        $git_url = $object->git_url;

        if ($git_url === null) {
            goto after_git_url;
        }
        after_git_url:        $result['git_url'] = $git_url;

        
        $issue_comment_url = $object->issue_comment_url;

        if ($issue_comment_url === null) {
            goto after_issue_comment_url;
        }
        after_issue_comment_url:        $result['issue_comment_url'] = $issue_comment_url;

        
        $issue_events_url = $object->issue_events_url;

        if ($issue_events_url === null) {
            goto after_issue_events_url;
        }
        after_issue_events_url:        $result['issue_events_url'] = $issue_events_url;

        
        $issues_url = $object->issues_url;

        if ($issues_url === null) {
            goto after_issues_url;
        }
        after_issues_url:        $result['issues_url'] = $issues_url;

        
        $keys_url = $object->keys_url;

        if ($keys_url === null) {
            goto after_keys_url;
        }
        after_keys_url:        $result['keys_url'] = $keys_url;

        
        $labels_url = $object->labels_url;

        if ($labels_url === null) {
            goto after_labels_url;
        }
        after_labels_url:        $result['labels_url'] = $labels_url;

        
        $languages_url = $object->languages_url;

        if ($languages_url === null) {
            goto after_languages_url;
        }
        after_languages_url:        $result['languages_url'] = $languages_url;

        
        $merges_url = $object->merges_url;

        if ($merges_url === null) {
            goto after_merges_url;
        }
        after_merges_url:        $result['merges_url'] = $merges_url;

        
        $milestones_url = $object->milestones_url;

        if ($milestones_url === null) {
            goto after_milestones_url;
        }
        after_milestones_url:        $result['milestones_url'] = $milestones_url;

        
        $notifications_url = $object->notifications_url;

        if ($notifications_url === null) {
            goto after_notifications_url;
        }
        after_notifications_url:        $result['notifications_url'] = $notifications_url;

        
        $pulls_url = $object->pulls_url;

        if ($pulls_url === null) {
            goto after_pulls_url;
        }
        after_pulls_url:        $result['pulls_url'] = $pulls_url;

        
        $releases_url = $object->releases_url;

        if ($releases_url === null) {
            goto after_releases_url;
        }
        after_releases_url:        $result['releases_url'] = $releases_url;

        
        $ssh_url = $object->ssh_url;

        if ($ssh_url === null) {
            goto after_ssh_url;
        }
        after_ssh_url:        $result['ssh_url'] = $ssh_url;

        
        $stargazers_url = $object->stargazers_url;

        if ($stargazers_url === null) {
            goto after_stargazers_url;
        }
        after_stargazers_url:        $result['stargazers_url'] = $stargazers_url;

        
        $statuses_url = $object->statuses_url;

        if ($statuses_url === null) {
            goto after_statuses_url;
        }
        after_statuses_url:        $result['statuses_url'] = $statuses_url;

        
        $subscribers_url = $object->subscribers_url;

        if ($subscribers_url === null) {
            goto after_subscribers_url;
        }
        after_subscribers_url:        $result['subscribers_url'] = $subscribers_url;

        
        $subscription_url = $object->subscription_url;

        if ($subscription_url === null) {
            goto after_subscription_url;
        }
        after_subscription_url:        $result['subscription_url'] = $subscription_url;

        
        $tags_url = $object->tags_url;

        if ($tags_url === null) {
            goto after_tags_url;
        }
        after_tags_url:        $result['tags_url'] = $tags_url;

        
        $teams_url = $object->teams_url;

        if ($teams_url === null) {
            goto after_teams_url;
        }
        after_teams_url:        $result['teams_url'] = $teams_url;

        
        $trees_url = $object->trees_url;

        if ($trees_url === null) {
            goto after_trees_url;
        }
        after_trees_url:        $result['trees_url'] = $trees_url;

        
        $clone_url = $object->clone_url;

        if ($clone_url === null) {
            goto after_clone_url;
        }
        after_clone_url:        $result['clone_url'] = $clone_url;

        
        $mirror_url = $object->mirror_url;

        if ($mirror_url === null) {
            goto after_mirror_url;
        }
        after_mirror_url:        $result['mirror_url'] = $mirror_url;

        
        $hooks_url = $object->hooks_url;

        if ($hooks_url === null) {
            goto after_hooks_url;
        }
        after_hooks_url:        $result['hooks_url'] = $hooks_url;

        
        $svn_url = $object->svn_url;

        if ($svn_url === null) {
            goto after_svn_url;
        }
        after_svn_url:        $result['svn_url'] = $svn_url;

        
        $homepage = $object->homepage;

        if ($homepage === null) {
            goto after_homepage;
        }
        after_homepage:        $result['homepage'] = $homepage;

        
        $language = $object->language;

        if ($language === null) {
            goto after_language;
        }
        after_language:        $result['language'] = $language;

        
        $forks_count = $object->forks_count;

        if ($forks_count === null) {
            goto after_forks_count;
        }
        after_forks_count:        $result['forks_count'] = $forks_count;

        
        $stargazers_count = $object->stargazers_count;

        if ($stargazers_count === null) {
            goto after_stargazers_count;
        }
        after_stargazers_count:        $result['stargazers_count'] = $stargazers_count;

        
        $watchers_count = $object->watchers_count;

        if ($watchers_count === null) {
            goto after_watchers_count;
        }
        after_watchers_count:        $result['watchers_count'] = $watchers_count;

        
        $size = $object->size;

        if ($size === null) {
            goto after_size;
        }
        after_size:        $result['size'] = $size;

        
        $default_branch = $object->default_branch;

        if ($default_branch === null) {
            goto after_default_branch;
        }
        after_default_branch:        $result['default_branch'] = $default_branch;

        
        $open_issues_count = $object->open_issues_count;

        if ($open_issues_count === null) {
            goto after_open_issues_count;
        }
        after_open_issues_count:        $result['open_issues_count'] = $open_issues_count;

        
        $is_template = $object->is_template;
        after_is_template:        $result['is_template'] = $is_template;

        
        $topics = $object->topics;
        static $topicsSerializer0;

        if ($topicsSerializer0 === null) {
            $topicsSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $topics = $topicsSerializer0->serialize($topics, $this);
        after_topics:        $result['topics'] = $topics;

        
        $has_issues = $object->has_issues;

        if ($has_issues === null) {
            goto after_has_issues;
        }
        after_has_issues:        $result['has_issues'] = $has_issues;

        
        $has_projects = $object->has_projects;

        if ($has_projects === null) {
            goto after_has_projects;
        }
        after_has_projects:        $result['has_projects'] = $has_projects;

        
        $has_wiki = $object->has_wiki;

        if ($has_wiki === null) {
            goto after_has_wiki;
        }
        after_has_wiki:        $result['has_wiki'] = $has_wiki;

        
        $has_pages = $object->has_pages;

        if ($has_pages === null) {
            goto after_has_pages;
        }
        after_has_pages:        $result['has_pages'] = $has_pages;

        
        $has_downloads = $object->has_downloads;

        if ($has_downloads === null) {
            goto after_has_downloads;
        }
        after_has_downloads:        $result['has_downloads'] = $has_downloads;

        
        $has_discussions = $object->has_discussions;
        after_has_discussions:        $result['has_discussions'] = $has_discussions;

        
        $archived = $object->archived;

        if ($archived === null) {
            goto after_archived;
        }
        after_archived:        $result['archived'] = $archived;

        
        $disabled = $object->disabled;

        if ($disabled === null) {
            goto after_disabled;
        }
        after_disabled:        $result['disabled'] = $disabled;

        
        $visibility = $object->visibility;
        after_visibility:        $result['visibility'] = $visibility;

        
        $pushed_at = $object->pushed_at;

        if ($pushed_at === null) {
            goto after_pushed_at;
        }
        after_pushed_at:        $result['pushed_at'] = $pushed_at;

        
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

        
        $allow_rebase_merge = $object->allow_rebase_merge;
        after_allow_rebase_merge:        $result['allow_rebase_merge'] = $allow_rebase_merge;

        
        $template_repository = $object->template_repository;

        if ($template_repository === null) {
            goto after_template_repository;
        }
        $template_repository = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Repository⚡️TemplateRepository($template_repository);
        after_template_repository:        $result['template_repository'] = $template_repository;

        
        $temp_clone_token = $object->temp_clone_token;
        after_temp_clone_token:        $result['temp_clone_token'] = $temp_clone_token;

        
        $allow_squash_merge = $object->allow_squash_merge;
        after_allow_squash_merge:        $result['allow_squash_merge'] = $allow_squash_merge;

        
        $allow_auto_merge = $object->allow_auto_merge;
        after_allow_auto_merge:        $result['allow_auto_merge'] = $allow_auto_merge;

        
        $delete_branch_on_merge = $object->delete_branch_on_merge;
        after_delete_branch_on_merge:        $result['delete_branch_on_merge'] = $delete_branch_on_merge;

        
        $allow_update_branch = $object->allow_update_branch;
        after_allow_update_branch:        $result['allow_update_branch'] = $allow_update_branch;

        
        $use_squash_pr_title_as_default = $object->use_squash_pr_title_as_default;
        after_use_squash_pr_title_as_default:        $result['use_squash_pr_title_as_default'] = $use_squash_pr_title_as_default;

        
        $squash_merge_commit_title = $object->squash_merge_commit_title;
        after_squash_merge_commit_title:        $result['squash_merge_commit_title'] = $squash_merge_commit_title;

        
        $squash_merge_commit_message = $object->squash_merge_commit_message;
        after_squash_merge_commit_message:        $result['squash_merge_commit_message'] = $squash_merge_commit_message;

        
        $merge_commit_title = $object->merge_commit_title;
        after_merge_commit_title:        $result['merge_commit_title'] = $merge_commit_title;

        
        $merge_commit_message = $object->merge_commit_message;
        after_merge_commit_message:        $result['merge_commit_message'] = $merge_commit_message;

        
        $allow_merge_commit = $object->allow_merge_commit;
        after_allow_merge_commit:        $result['allow_merge_commit'] = $allow_merge_commit;

        
        $allow_forking = $object->allow_forking;
        after_allow_forking:        $result['allow_forking'] = $allow_forking;

        
        $web_commit_signoff_required = $object->web_commit_signoff_required;
        after_web_commit_signoff_required:        $result['web_commit_signoff_required'] = $web_commit_signoff_required;

        
        $subscribers_count = $object->subscribers_count;
        after_subscribers_count:        $result['subscribers_count'] = $subscribers_count;

        
        $network_count = $object->network_count;
        after_network_count:        $result['network_count'] = $network_count;

        
        $open_issues = $object->open_issues;

        if ($open_issues === null) {
            goto after_open_issues;
        }
        after_open_issues:        $result['open_issues'] = $open_issues;

        
        $watchers = $object->watchers;

        if ($watchers === null) {
            goto after_watchers;
        }
        after_watchers:        $result['watchers'] = $watchers;

        
        $master_branch = $object->master_branch;
        after_master_branch:        $result['master_branch'] = $master_branch;

        
        $starred_at = $object->starred_at;
        after_starred_at:        $result['starred_at'] = $starred_at;

        
        $anonymous_access_enabled = $object->anonymous_access_enabled;
        after_anonymous_access_enabled:        $result['anonymous_access_enabled'] = $anonymous_access_enabled;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Repository⚡️Permissions(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\Repository\Permissions);
        $result = [];
        
        $admin = $object->admin;

        if ($admin === null) {
            goto after_admin;
        }
        after_admin:        $result['admin'] = $admin;

        
        $pull = $object->pull;

        if ($pull === null) {
            goto after_pull;
        }
        after_pull:        $result['pull'] = $pull;

        
        $triage = $object->triage;
        after_triage:        $result['triage'] = $triage;

        
        $push = $object->push;

        if ($push === null) {
            goto after_push;
        }
        after_push:        $result['push'] = $push;

        
        $maintain = $object->maintain;
        after_maintain:        $result['maintain'] = $maintain;


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

    
    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Repository⚡️TemplateRepository(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\Repository\TemplateRepository);
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

        
        $name = $object->name;

        if ($name === null) {
            goto after_name;
        }
        after_name:        $result['name'] = $name;

        
        $full_name = $object->full_name;

        if ($full_name === null) {
            goto after_full_name;
        }
        after_full_name:        $result['full_name'] = $full_name;

        
        $owner = $object->owner;

        if ($owner === null) {
            goto after_owner;
        }
        $owner = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Repository⚡️TemplateRepository⚡️Owner($owner);
        after_owner:        $result['owner'] = $owner;

        
        $private = $object->private;

        if ($private === null) {
            goto after_private;
        }
        after_private:        $result['private'] = $private;

        
        $html_url = $object->html_url;

        if ($html_url === null) {
            goto after_html_url;
        }
        after_html_url:        $result['html_url'] = $html_url;

        
        $description = $object->description;

        if ($description === null) {
            goto after_description;
        }
        after_description:        $result['description'] = $description;

        
        $fork = $object->fork;

        if ($fork === null) {
            goto after_fork;
        }
        after_fork:        $result['fork'] = $fork;

        
        $url = $object->url;

        if ($url === null) {
            goto after_url;
        }
        after_url:        $result['url'] = $url;

        
        $archive_url = $object->archive_url;

        if ($archive_url === null) {
            goto after_archive_url;
        }
        after_archive_url:        $result['archive_url'] = $archive_url;

        
        $assignees_url = $object->assignees_url;

        if ($assignees_url === null) {
            goto after_assignees_url;
        }
        after_assignees_url:        $result['assignees_url'] = $assignees_url;

        
        $blobs_url = $object->blobs_url;

        if ($blobs_url === null) {
            goto after_blobs_url;
        }
        after_blobs_url:        $result['blobs_url'] = $blobs_url;

        
        $branches_url = $object->branches_url;

        if ($branches_url === null) {
            goto after_branches_url;
        }
        after_branches_url:        $result['branches_url'] = $branches_url;

        
        $collaborators_url = $object->collaborators_url;

        if ($collaborators_url === null) {
            goto after_collaborators_url;
        }
        after_collaborators_url:        $result['collaborators_url'] = $collaborators_url;

        
        $comments_url = $object->comments_url;

        if ($comments_url === null) {
            goto after_comments_url;
        }
        after_comments_url:        $result['comments_url'] = $comments_url;

        
        $commits_url = $object->commits_url;

        if ($commits_url === null) {
            goto after_commits_url;
        }
        after_commits_url:        $result['commits_url'] = $commits_url;

        
        $compare_url = $object->compare_url;

        if ($compare_url === null) {
            goto after_compare_url;
        }
        after_compare_url:        $result['compare_url'] = $compare_url;

        
        $contents_url = $object->contents_url;

        if ($contents_url === null) {
            goto after_contents_url;
        }
        after_contents_url:        $result['contents_url'] = $contents_url;

        
        $contributors_url = $object->contributors_url;

        if ($contributors_url === null) {
            goto after_contributors_url;
        }
        after_contributors_url:        $result['contributors_url'] = $contributors_url;

        
        $deployments_url = $object->deployments_url;

        if ($deployments_url === null) {
            goto after_deployments_url;
        }
        after_deployments_url:        $result['deployments_url'] = $deployments_url;

        
        $downloads_url = $object->downloads_url;

        if ($downloads_url === null) {
            goto after_downloads_url;
        }
        after_downloads_url:        $result['downloads_url'] = $downloads_url;

        
        $events_url = $object->events_url;

        if ($events_url === null) {
            goto after_events_url;
        }
        after_events_url:        $result['events_url'] = $events_url;

        
        $forks_url = $object->forks_url;

        if ($forks_url === null) {
            goto after_forks_url;
        }
        after_forks_url:        $result['forks_url'] = $forks_url;

        
        $git_commits_url = $object->git_commits_url;

        if ($git_commits_url === null) {
            goto after_git_commits_url;
        }
        after_git_commits_url:        $result['git_commits_url'] = $git_commits_url;

        
        $git_refs_url = $object->git_refs_url;

        if ($git_refs_url === null) {
            goto after_git_refs_url;
        }
        after_git_refs_url:        $result['git_refs_url'] = $git_refs_url;

        
        $git_tags_url = $object->git_tags_url;

        if ($git_tags_url === null) {
            goto after_git_tags_url;
        }
        after_git_tags_url:        $result['git_tags_url'] = $git_tags_url;

        
        $git_url = $object->git_url;

        if ($git_url === null) {
            goto after_git_url;
        }
        after_git_url:        $result['git_url'] = $git_url;

        
        $issue_comment_url = $object->issue_comment_url;

        if ($issue_comment_url === null) {
            goto after_issue_comment_url;
        }
        after_issue_comment_url:        $result['issue_comment_url'] = $issue_comment_url;

        
        $issue_events_url = $object->issue_events_url;

        if ($issue_events_url === null) {
            goto after_issue_events_url;
        }
        after_issue_events_url:        $result['issue_events_url'] = $issue_events_url;

        
        $issues_url = $object->issues_url;

        if ($issues_url === null) {
            goto after_issues_url;
        }
        after_issues_url:        $result['issues_url'] = $issues_url;

        
        $keys_url = $object->keys_url;

        if ($keys_url === null) {
            goto after_keys_url;
        }
        after_keys_url:        $result['keys_url'] = $keys_url;

        
        $labels_url = $object->labels_url;

        if ($labels_url === null) {
            goto after_labels_url;
        }
        after_labels_url:        $result['labels_url'] = $labels_url;

        
        $languages_url = $object->languages_url;

        if ($languages_url === null) {
            goto after_languages_url;
        }
        after_languages_url:        $result['languages_url'] = $languages_url;

        
        $merges_url = $object->merges_url;

        if ($merges_url === null) {
            goto after_merges_url;
        }
        after_merges_url:        $result['merges_url'] = $merges_url;

        
        $milestones_url = $object->milestones_url;

        if ($milestones_url === null) {
            goto after_milestones_url;
        }
        after_milestones_url:        $result['milestones_url'] = $milestones_url;

        
        $notifications_url = $object->notifications_url;

        if ($notifications_url === null) {
            goto after_notifications_url;
        }
        after_notifications_url:        $result['notifications_url'] = $notifications_url;

        
        $pulls_url = $object->pulls_url;

        if ($pulls_url === null) {
            goto after_pulls_url;
        }
        after_pulls_url:        $result['pulls_url'] = $pulls_url;

        
        $releases_url = $object->releases_url;

        if ($releases_url === null) {
            goto after_releases_url;
        }
        after_releases_url:        $result['releases_url'] = $releases_url;

        
        $ssh_url = $object->ssh_url;

        if ($ssh_url === null) {
            goto after_ssh_url;
        }
        after_ssh_url:        $result['ssh_url'] = $ssh_url;

        
        $stargazers_url = $object->stargazers_url;

        if ($stargazers_url === null) {
            goto after_stargazers_url;
        }
        after_stargazers_url:        $result['stargazers_url'] = $stargazers_url;

        
        $statuses_url = $object->statuses_url;

        if ($statuses_url === null) {
            goto after_statuses_url;
        }
        after_statuses_url:        $result['statuses_url'] = $statuses_url;

        
        $subscribers_url = $object->subscribers_url;

        if ($subscribers_url === null) {
            goto after_subscribers_url;
        }
        after_subscribers_url:        $result['subscribers_url'] = $subscribers_url;

        
        $subscription_url = $object->subscription_url;

        if ($subscription_url === null) {
            goto after_subscription_url;
        }
        after_subscription_url:        $result['subscription_url'] = $subscription_url;

        
        $tags_url = $object->tags_url;

        if ($tags_url === null) {
            goto after_tags_url;
        }
        after_tags_url:        $result['tags_url'] = $tags_url;

        
        $teams_url = $object->teams_url;

        if ($teams_url === null) {
            goto after_teams_url;
        }
        after_teams_url:        $result['teams_url'] = $teams_url;

        
        $trees_url = $object->trees_url;

        if ($trees_url === null) {
            goto after_trees_url;
        }
        after_trees_url:        $result['trees_url'] = $trees_url;

        
        $clone_url = $object->clone_url;

        if ($clone_url === null) {
            goto after_clone_url;
        }
        after_clone_url:        $result['clone_url'] = $clone_url;

        
        $mirror_url = $object->mirror_url;

        if ($mirror_url === null) {
            goto after_mirror_url;
        }
        after_mirror_url:        $result['mirror_url'] = $mirror_url;

        
        $hooks_url = $object->hooks_url;

        if ($hooks_url === null) {
            goto after_hooks_url;
        }
        after_hooks_url:        $result['hooks_url'] = $hooks_url;

        
        $svn_url = $object->svn_url;

        if ($svn_url === null) {
            goto after_svn_url;
        }
        after_svn_url:        $result['svn_url'] = $svn_url;

        
        $homepage = $object->homepage;

        if ($homepage === null) {
            goto after_homepage;
        }
        after_homepage:        $result['homepage'] = $homepage;

        
        $language = $object->language;

        if ($language === null) {
            goto after_language;
        }
        after_language:        $result['language'] = $language;

        
        $forks_count = $object->forks_count;

        if ($forks_count === null) {
            goto after_forks_count;
        }
        after_forks_count:        $result['forks_count'] = $forks_count;

        
        $stargazers_count = $object->stargazers_count;

        if ($stargazers_count === null) {
            goto after_stargazers_count;
        }
        after_stargazers_count:        $result['stargazers_count'] = $stargazers_count;

        
        $watchers_count = $object->watchers_count;

        if ($watchers_count === null) {
            goto after_watchers_count;
        }
        after_watchers_count:        $result['watchers_count'] = $watchers_count;

        
        $size = $object->size;

        if ($size === null) {
            goto after_size;
        }
        after_size:        $result['size'] = $size;

        
        $default_branch = $object->default_branch;

        if ($default_branch === null) {
            goto after_default_branch;
        }
        after_default_branch:        $result['default_branch'] = $default_branch;

        
        $open_issues_count = $object->open_issues_count;

        if ($open_issues_count === null) {
            goto after_open_issues_count;
        }
        after_open_issues_count:        $result['open_issues_count'] = $open_issues_count;

        
        $is_template = $object->is_template;

        if ($is_template === null) {
            goto after_is_template;
        }
        after_is_template:        $result['is_template'] = $is_template;

        
        $topics = $object->topics;

        if ($topics === null) {
            goto after_topics;
        }
        static $topicsSerializer0;

        if ($topicsSerializer0 === null) {
            $topicsSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $topics = $topicsSerializer0->serialize($topics, $this);
        after_topics:        $result['topics'] = $topics;

        
        $has_issues = $object->has_issues;

        if ($has_issues === null) {
            goto after_has_issues;
        }
        after_has_issues:        $result['has_issues'] = $has_issues;

        
        $has_projects = $object->has_projects;

        if ($has_projects === null) {
            goto after_has_projects;
        }
        after_has_projects:        $result['has_projects'] = $has_projects;

        
        $has_wiki = $object->has_wiki;

        if ($has_wiki === null) {
            goto after_has_wiki;
        }
        after_has_wiki:        $result['has_wiki'] = $has_wiki;

        
        $has_pages = $object->has_pages;

        if ($has_pages === null) {
            goto after_has_pages;
        }
        after_has_pages:        $result['has_pages'] = $has_pages;

        
        $has_downloads = $object->has_downloads;

        if ($has_downloads === null) {
            goto after_has_downloads;
        }
        after_has_downloads:        $result['has_downloads'] = $has_downloads;

        
        $archived = $object->archived;

        if ($archived === null) {
            goto after_archived;
        }
        after_archived:        $result['archived'] = $archived;

        
        $disabled = $object->disabled;

        if ($disabled === null) {
            goto after_disabled;
        }
        after_disabled:        $result['disabled'] = $disabled;

        
        $visibility = $object->visibility;

        if ($visibility === null) {
            goto after_visibility;
        }
        after_visibility:        $result['visibility'] = $visibility;

        
        $pushed_at = $object->pushed_at;

        if ($pushed_at === null) {
            goto after_pushed_at;
        }
        after_pushed_at:        $result['pushed_at'] = $pushed_at;

        
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

        
        $permissions = $object->permissions;

        if ($permissions === null) {
            goto after_permissions;
        }
        $permissions = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Repository⚡️TemplateRepository⚡️Permissions($permissions);
        after_permissions:        $result['permissions'] = $permissions;

        
        $allow_rebase_merge = $object->allow_rebase_merge;

        if ($allow_rebase_merge === null) {
            goto after_allow_rebase_merge;
        }
        after_allow_rebase_merge:        $result['allow_rebase_merge'] = $allow_rebase_merge;

        
        $temp_clone_token = $object->temp_clone_token;

        if ($temp_clone_token === null) {
            goto after_temp_clone_token;
        }
        after_temp_clone_token:        $result['temp_clone_token'] = $temp_clone_token;

        
        $allow_squash_merge = $object->allow_squash_merge;

        if ($allow_squash_merge === null) {
            goto after_allow_squash_merge;
        }
        after_allow_squash_merge:        $result['allow_squash_merge'] = $allow_squash_merge;

        
        $allow_auto_merge = $object->allow_auto_merge;

        if ($allow_auto_merge === null) {
            goto after_allow_auto_merge;
        }
        after_allow_auto_merge:        $result['allow_auto_merge'] = $allow_auto_merge;

        
        $delete_branch_on_merge = $object->delete_branch_on_merge;

        if ($delete_branch_on_merge === null) {
            goto after_delete_branch_on_merge;
        }
        after_delete_branch_on_merge:        $result['delete_branch_on_merge'] = $delete_branch_on_merge;

        
        $allow_update_branch = $object->allow_update_branch;

        if ($allow_update_branch === null) {
            goto after_allow_update_branch;
        }
        after_allow_update_branch:        $result['allow_update_branch'] = $allow_update_branch;

        
        $use_squash_pr_title_as_default = $object->use_squash_pr_title_as_default;

        if ($use_squash_pr_title_as_default === null) {
            goto after_use_squash_pr_title_as_default;
        }
        after_use_squash_pr_title_as_default:        $result['use_squash_pr_title_as_default'] = $use_squash_pr_title_as_default;

        
        $squash_merge_commit_title = $object->squash_merge_commit_title;

        if ($squash_merge_commit_title === null) {
            goto after_squash_merge_commit_title;
        }
        after_squash_merge_commit_title:        $result['squash_merge_commit_title'] = $squash_merge_commit_title;

        
        $squash_merge_commit_message = $object->squash_merge_commit_message;

        if ($squash_merge_commit_message === null) {
            goto after_squash_merge_commit_message;
        }
        after_squash_merge_commit_message:        $result['squash_merge_commit_message'] = $squash_merge_commit_message;

        
        $merge_commit_title = $object->merge_commit_title;

        if ($merge_commit_title === null) {
            goto after_merge_commit_title;
        }
        after_merge_commit_title:        $result['merge_commit_title'] = $merge_commit_title;

        
        $merge_commit_message = $object->merge_commit_message;

        if ($merge_commit_message === null) {
            goto after_merge_commit_message;
        }
        after_merge_commit_message:        $result['merge_commit_message'] = $merge_commit_message;

        
        $allow_merge_commit = $object->allow_merge_commit;

        if ($allow_merge_commit === null) {
            goto after_allow_merge_commit;
        }
        after_allow_merge_commit:        $result['allow_merge_commit'] = $allow_merge_commit;

        
        $subscribers_count = $object->subscribers_count;

        if ($subscribers_count === null) {
            goto after_subscribers_count;
        }
        after_subscribers_count:        $result['subscribers_count'] = $subscribers_count;

        
        $network_count = $object->network_count;

        if ($network_count === null) {
            goto after_network_count;
        }
        after_network_count:        $result['network_count'] = $network_count;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Repository⚡️TemplateRepository⚡️Owner(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\Repository\TemplateRepository\Owner);
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


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Repository⚡️TemplateRepository⚡️Permissions(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\Repository\TemplateRepository\Permissions);
        $result = [];
        
        $admin = $object->admin;

        if ($admin === null) {
            goto after_admin;
        }
        after_admin:        $result['admin'] = $admin;

        
        $maintain = $object->maintain;

        if ($maintain === null) {
            goto after_maintain;
        }
        after_maintain:        $result['maintain'] = $maintain;

        
        $push = $object->push;

        if ($push === null) {
            goto after_push;
        }
        after_push:        $result['push'] = $push;

        
        $triage = $object->triage;

        if ($triage === null) {
            goto after_triage;
        }
        after_triage:        $result['triage'] = $triage;

        
        $pull = $object->pull;

        if ($pull === null) {
            goto after_pull;
        }
        after_pull:        $result['pull'] = $pull;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookPackageUpdated(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookPackageUpdated);
        $result = [];
        
        $action = $object->action;

        if ($action === null) {
            goto after_action;
        }
        after_action:        $result['action'] = $action;

        
        $enterprise = $object->enterprise;
        $enterprise = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Enterprise($enterprise);
        after_enterprise:        $result['enterprise'] = $enterprise;

        
        $installation = $object->installation;
        $installation = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleInstallation($installation);
        after_installation:        $result['installation'] = $installation;

        
        $organization = $object->organization;
        $organization = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️OrganizationSimple($organization);
        after_organization:        $result['organization'] = $organization;

        
        $package = $object->package;

        if ($package === null) {
            goto after_package;
        }
        $package = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookPackageUpdated⚡️Package($package);
        after_package:        $result['package'] = $package;

        
        $repository = $object->repository;

        if ($repository === null) {
            goto after_repository;
        }
        $repository = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Repository($repository);
        after_repository:        $result['repository'] = $repository;

        
        $sender = $object->sender;

        if ($sender === null) {
            goto after_sender;
        }
        $sender = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($sender);
        after_sender:        $result['sender'] = $sender;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookPackageUpdated⚡️Package(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookPackageUpdated\Package);
        $result = [];
        
        $created_at = $object->created_at;

        if ($created_at === null) {
            goto after_created_at;
        }
        after_created_at:        $result['created_at'] = $created_at;

        
        $description = $object->description;

        if ($description === null) {
            goto after_description;
        }
        after_description:        $result['description'] = $description;

        
        $ecosystem = $object->ecosystem;

        if ($ecosystem === null) {
            goto after_ecosystem;
        }
        after_ecosystem:        $result['ecosystem'] = $ecosystem;

        
        $html_url = $object->html_url;

        if ($html_url === null) {
            goto after_html_url;
        }
        after_html_url:        $result['html_url'] = $html_url;

        
        $id = $object->id;

        if ($id === null) {
            goto after_id;
        }
        after_id:        $result['id'] = $id;

        
        $name = $object->name;

        if ($name === null) {
            goto after_name;
        }
        after_name:        $result['name'] = $name;

        
        $namespace = $object->namespace;

        if ($namespace === null) {
            goto after_namespace;
        }
        after_namespace:        $result['namespace'] = $namespace;

        
        $owner = $object->owner;

        if ($owner === null) {
            goto after_owner;
        }
        $owner = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Discussion⚡️AnswerChosenBy($owner);
        after_owner:        $result['owner'] = $owner;

        
        $package_type = $object->package_type;

        if ($package_type === null) {
            goto after_package_type;
        }
        after_package_type:        $result['package_type'] = $package_type;

        
        $package_version = $object->package_version;

        if ($package_version === null) {
            goto after_package_version;
        }
        $package_version = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookPackageUpdated⚡️Package⚡️PackageVersion($package_version);
        after_package_version:        $result['package_version'] = $package_version;

        
        $registry = $object->registry;

        if ($registry === null) {
            goto after_registry;
        }
        $registry = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookPackagePublished⚡️Package⚡️Registry($registry);
        after_registry:        $result['registry'] = $registry;

        
        $updated_at = $object->updated_at;

        if ($updated_at === null) {
            goto after_updated_at;
        }
        after_updated_at:        $result['updated_at'] = $updated_at;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookPackageUpdated⚡️Package⚡️PackageVersion(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookPackageUpdated\Package\PackageVersion);
        $result = [];
        
        $author = $object->author;

        if ($author === null) {
            goto after_author;
        }
        $author = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Discussion⚡️AnswerChosenBy($author);
        after_author:        $result['author'] = $author;

        
        $body = $object->body;

        if ($body === null) {
            goto after_body;
        }
        after_body:        $result['body'] = $body;

        
        $body_html = $object->body_html;

        if ($body_html === null) {
            goto after_body_html;
        }
        after_body_html:        $result['body_html'] = $body_html;

        
        $created_at = $object->created_at;

        if ($created_at === null) {
            goto after_created_at;
        }
        after_created_at:        $result['created_at'] = $created_at;

        
        $description = $object->description;

        if ($description === null) {
            goto after_description;
        }
        after_description:        $result['description'] = $description;

        
        $docker_metadata = $object->docker_metadata;
        static $docker_metadataSerializer0;

        if ($docker_metadataSerializer0 === null) {
            $docker_metadataSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $docker_metadata = $docker_metadataSerializer0->serialize($docker_metadata, $this);
        after_docker_metadata:        $result['docker_metadata'] = $docker_metadata;

        
        $draft = $object->draft;
        after_draft:        $result['draft'] = $draft;

        
        $html_url = $object->html_url;

        if ($html_url === null) {
            goto after_html_url;
        }
        after_html_url:        $result['html_url'] = $html_url;

        
        $id = $object->id;

        if ($id === null) {
            goto after_id;
        }
        after_id:        $result['id'] = $id;

        
        $installation_command = $object->installation_command;

        if ($installation_command === null) {
            goto after_installation_command;
        }
        after_installation_command:        $result['installation_command'] = $installation_command;

        
        $manifest = $object->manifest;
        after_manifest:        $result['manifest'] = $manifest;

        
        $metadata = $object->metadata;

        if ($metadata === null) {
            goto after_metadata;
        }
        static $metadataSerializer0;

        if ($metadataSerializer0 === null) {
            $metadataSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $metadata = $metadataSerializer0->serialize($metadata, $this);
        after_metadata:        $result['metadata'] = $metadata;

        
        $name = $object->name;

        if ($name === null) {
            goto after_name;
        }
        after_name:        $result['name'] = $name;

        
        $package_files = $object->package_files;

        if ($package_files === null) {
            goto after_package_files;
        }
        static $package_filesSerializer0;

        if ($package_filesSerializer0 === null) {
            $package_filesSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\WebhookPackageUpdated\\Package\\PackageVersion\\PackageFiles',
));
        }
        
        $package_files = $package_filesSerializer0->serialize($package_files, $this);
        after_package_files:        $result['package_files'] = $package_files;

        
        $package_url = $object->package_url;
        after_package_url:        $result['package_url'] = $package_url;

        
        $prerelease = $object->prerelease;
        after_prerelease:        $result['prerelease'] = $prerelease;

        
        $release = $object->release;
        $release = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookPackageUpdated⚡️Package⚡️PackageVersion⚡️Release($release);
        after_release:        $result['release'] = $release;

        
        $rubygems_metadata = $object->rubygems_metadata;
        static $rubygems_metadataSerializer0;

        if ($rubygems_metadataSerializer0 === null) {
            $rubygems_metadataSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $rubygems_metadata = $rubygems_metadataSerializer0->serialize($rubygems_metadata, $this);
        after_rubygems_metadata:        $result['rubygems_metadata'] = $rubygems_metadata;

        
        $source_url = $object->source_url;
        after_source_url:        $result['source_url'] = $source_url;

        
        $summary = $object->summary;

        if ($summary === null) {
            goto after_summary;
        }
        after_summary:        $result['summary'] = $summary;

        
        $tag_name = $object->tag_name;
        after_tag_name:        $result['tag_name'] = $tag_name;

        
        $target_commitish = $object->target_commitish;

        if ($target_commitish === null) {
            goto after_target_commitish;
        }
        after_target_commitish:        $result['target_commitish'] = $target_commitish;

        
        $target_oid = $object->target_oid;

        if ($target_oid === null) {
            goto after_target_oid;
        }
        after_target_oid:        $result['target_oid'] = $target_oid;

        
        $updated_at = $object->updated_at;

        if ($updated_at === null) {
            goto after_updated_at;
        }
        after_updated_at:        $result['updated_at'] = $updated_at;

        
        $version = $object->version;

        if ($version === null) {
            goto after_version;
        }
        after_version:        $result['version'] = $version;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookPackageUpdated⚡️Package⚡️PackageVersion⚡️PackageFiles(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookPackageUpdated\Package\PackageVersion\PackageFiles);
        $result = [];
        
        $content_type = $object->content_type;

        if ($content_type === null) {
            goto after_content_type;
        }
        after_content_type:        $result['content_type'] = $content_type;

        
        $created_at = $object->created_at;

        if ($created_at === null) {
            goto after_created_at;
        }
        after_created_at:        $result['created_at'] = $created_at;

        
        $download_url = $object->download_url;

        if ($download_url === null) {
            goto after_download_url;
        }
        after_download_url:        $result['download_url'] = $download_url;

        
        $id = $object->id;

        if ($id === null) {
            goto after_id;
        }
        after_id:        $result['id'] = $id;

        
        $md5 = $object->md5;

        if ($md5 === null) {
            goto after_md5;
        }
        after_md5:        $result['md5'] = $md5;

        
        $name = $object->name;

        if ($name === null) {
            goto after_name;
        }
        after_name:        $result['name'] = $name;

        
        $sha1 = $object->sha1;

        if ($sha1 === null) {
            goto after_sha1;
        }
        after_sha1:        $result['sha1'] = $sha1;

        
        $sha256 = $object->sha256;

        if ($sha256 === null) {
            goto after_sha256;
        }
        after_sha256:        $result['sha256'] = $sha256;

        
        $size = $object->size;

        if ($size === null) {
            goto after_size;
        }
        after_size:        $result['size'] = $size;

        
        $state = $object->state;

        if ($state === null) {
            goto after_state;
        }
        after_state:        $result['state'] = $state;

        
        $updated_at = $object->updated_at;

        if ($updated_at === null) {
            goto after_updated_at;
        }
        after_updated_at:        $result['updated_at'] = $updated_at;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookPackageUpdated⚡️Package⚡️PackageVersion⚡️Release(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookPackageUpdated\Package\PackageVersion\Release);
        $result = [];
        
        $author = $object->author;

        if ($author === null) {
            goto after_author;
        }
        $author = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Discussion⚡️AnswerChosenBy($author);
        after_author:        $result['author'] = $author;

        
        $created_at = $object->created_at;

        if ($created_at === null) {
            goto after_created_at;
        }
        after_created_at:        $result['created_at'] = $created_at;

        
        $draft = $object->draft;

        if ($draft === null) {
            goto after_draft;
        }
        after_draft:        $result['draft'] = $draft;

        
        $html_url = $object->html_url;

        if ($html_url === null) {
            goto after_html_url;
        }
        after_html_url:        $result['html_url'] = $html_url;

        
        $id = $object->id;

        if ($id === null) {
            goto after_id;
        }
        after_id:        $result['id'] = $id;

        
        $name = $object->name;

        if ($name === null) {
            goto after_name;
        }
        after_name:        $result['name'] = $name;

        
        $prerelease = $object->prerelease;

        if ($prerelease === null) {
            goto after_prerelease;
        }
        after_prerelease:        $result['prerelease'] = $prerelease;

        
        $published_at = $object->published_at;

        if ($published_at === null) {
            goto after_published_at;
        }
        after_published_at:        $result['published_at'] = $published_at;

        
        $tag_name = $object->tag_name;

        if ($tag_name === null) {
            goto after_tag_name;
        }
        after_tag_name:        $result['tag_name'] = $tag_name;

        
        $target_commitish = $object->target_commitish;

        if ($target_commitish === null) {
            goto after_target_commitish;
        }
        after_target_commitish:        $result['target_commitish'] = $target_commitish;

        
        $url = $object->url;

        if ($url === null) {
            goto after_url;
        }
        after_url:        $result['url'] = $url;


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
