<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Hydrator\WebHook;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class DependabotAlert implements ObjectMapper
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
            'ApiClients\Client\Github\Schema\WebhookDependabotAlertReopened' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️WebhookDependabotAlertReopened($payload),
                'ApiClients\Client\Github\Schema\DependabotAlert' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️DependabotAlert($payload),
                'ApiClients\Client\Github\Schema\SimpleInstallation' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️SimpleInstallation($payload),
                'ApiClients\Client\Github\Schema\OrganizationSimple' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️OrganizationSimple($payload),
                'ApiClients\Client\Github\Schema\Enterprise' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️Enterprise($payload),
                'ApiClients\Client\Github\Schema\Repository' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️Repository($payload),
                'ApiClients\Client\Github\Schema\SimpleUser' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️SimpleUser($payload),
                'ApiClients\Client\Github\Schema\DependabotAlertWithRepository\Dependency' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️DependabotAlertWithRepository⚡️Dependency($payload),
                'ApiClients\Client\Github\Schema\DependabotAlertSecurityAdvisory' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️DependabotAlertSecurityAdvisory($payload),
                'ApiClients\Client\Github\Schema\DependabotAlertSecurityVulnerability' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️DependabotAlertSecurityVulnerability($payload),
                'ApiClients\Client\Github\Schema\Repository\Permissions' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️Repository⚡️Permissions($payload),
                'ApiClients\Client\Github\Schema\Repository\TemplateRepository' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️Repository⚡️TemplateRepository($payload),
                'ApiClients\Client\Github\Schema\DependabotAlertPackage' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️DependabotAlertPackage($payload),
                'ApiClients\Client\Github\Schema\DependabotAlertSecurityAdvisory\Cvss' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️DependabotAlertSecurityAdvisory⚡️Cvss($payload),
                'ApiClients\Client\Github\Schema\DependabotAlertSecurityVulnerability\FirstPatchedVersion' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️DependabotAlertSecurityVulnerability⚡️FirstPatchedVersion($payload),
                'ApiClients\Client\Github\Schema\Repository\TemplateRepository\Owner' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️Repository⚡️TemplateRepository⚡️Owner($payload),
                'ApiClients\Client\Github\Schema\Repository\TemplateRepository\Permissions' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️Repository⚡️TemplateRepository⚡️Permissions($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
        private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️WebhookDependabotAlertReopened(array $payload): \ApiClients\Client\Github\Schema\WebhookDependabotAlertReopened
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

                $value = $payload['alert'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'alert';
                    goto after_alert;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'alert';
                        $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️DependabotAlert($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['alert'] = $value;
    
                after_alert:

                $value = $payload['installation'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'installation';
                    goto after_installation;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'installation';
                        $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️SimpleInstallation($value);
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
                        $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️OrganizationSimple($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['organization'] = $value;
    
                after_organization:

                $value = $payload['enterprise'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'enterprise';
                    goto after_enterprise;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'enterprise';
                        $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️Enterprise($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['enterprise'] = $value;
    
                after_enterprise:

                $value = $payload['repository'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'repository';
                    goto after_repository;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'repository';
                        $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️Repository($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['repository'] = $value;
    
                after_repository:

                $value = $payload['sender'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'sender';
                    goto after_sender;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'sender';
                        $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️SimpleUser($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['sender'] = $value;
    
                after_sender:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\WebhookDependabotAlertReopened', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\WebhookDependabotAlertReopened::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\Github\Schema\WebhookDependabotAlertReopened(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\WebhookDependabotAlertReopened', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️DependabotAlert(array $payload): \ApiClients\Client\Github\Schema\DependabotAlert
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['number'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'number';
                    goto after_number;
                }

                $properties['number'] = $value;
    
                after_number:

                $value = $payload['state'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'state';
                    goto after_state;
                }

                $properties['state'] = $value;
    
                after_state:

                $value = $payload['dependency'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'dependency';
                    goto after_dependency;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'dependency';
                        $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️DependabotAlertWithRepository⚡️Dependency($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['dependency'] = $value;
    
                after_dependency:

                $value = $payload['security_advisory'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'security_advisory';
                    goto after_security_advisory;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'security_advisory';
                        $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️DependabotAlertSecurityAdvisory($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['security_advisory'] = $value;
    
                after_security_advisory:

                $value = $payload['security_vulnerability'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'security_vulnerability';
                    goto after_security_vulnerability;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'security_vulnerability';
                        $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️DependabotAlertSecurityVulnerability($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['security_vulnerability'] = $value;
    
                after_security_vulnerability:

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

                $value = $payload['dismissed_at'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'dismissed_at';
                    goto after_dismissed_at;
                }

                $properties['dismissed_at'] = $value;
    
                after_dismissed_at:

                $value = $payload['dismissed_by'] ?? null;
    
                if ($value === null) {
                    $properties['dismissed_by'] = null;
                    goto after_dismissed_by;
                }

                $properties['dismissed_by'] = $value;
    
                after_dismissed_by:

                $value = $payload['dismissed_reason'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'dismissed_reason';
                    goto after_dismissed_reason;
                }

                $properties['dismissed_reason'] = $value;
    
                after_dismissed_reason:

                $value = $payload['dismissed_comment'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'dismissed_comment';
                    goto after_dismissed_comment;
                }

                $properties['dismissed_comment'] = $value;
    
                after_dismissed_comment:

                $value = $payload['fixed_at'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'fixed_at';
                    goto after_fixed_at;
                }

                $properties['fixed_at'] = $value;
    
                after_fixed_at:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\DependabotAlert', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\DependabotAlert::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\Github\Schema\DependabotAlert(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\DependabotAlert', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️SimpleInstallation(array $payload): \ApiClients\Client\Github\Schema\SimpleInstallation
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
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\SimpleInstallation', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\SimpleInstallation::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\Github\Schema\SimpleInstallation(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\SimpleInstallation', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️OrganizationSimple(array $payload): \ApiClients\Client\Github\Schema\OrganizationSimple
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

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\OrganizationSimple', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\OrganizationSimple::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\Github\Schema\OrganizationSimple(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\OrganizationSimple', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️Enterprise(array $payload): \ApiClients\Client\Github\Schema\Enterprise
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['description'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'description';
                    goto after_description;
                }

                $properties['description'] = $value;
    
                after_description:

                $value = $payload['html_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'html_url';
                    goto after_html_url;
                }

                $properties['html_url'] = $value;
    
                after_html_url:

                $value = $payload['website_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'website_url';
                    goto after_website_url;
                }

                $properties['website_url'] = $value;
    
                after_website_url:

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

                $value = $payload['avatar_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'avatar_url';
                    goto after_avatar_url;
                }

                $properties['avatar_url'] = $value;
    
                after_avatar_url:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\Enterprise', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\Enterprise::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\Github\Schema\Enterprise(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\Enterprise', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️Repository(array $payload): \ApiClients\Client\Github\Schema\Repository
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

                $value = $payload['name'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'name';
                    goto after_name;
                }

                $properties['name'] = $value;
    
                after_name:

                $value = $payload['full_name'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'full_name';
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
                    $missingFields[] = 'forks';
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
                        $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️Repository⚡️Permissions($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['permissions'] = $value;
    
                after_permissions:

                $value = $payload['owner'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'owner';
                    goto after_owner;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'owner';
                        $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️SimpleUser($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['owner'] = $value;
    
                after_owner:

                $value = $payload['private'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'private';
                    goto after_private;
                }

                $properties['private'] = $value;
    
                after_private:

                $value = $payload['html_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'html_url';
                    goto after_html_url;
                }

                $properties['html_url'] = $value;
    
                after_html_url:

                $value = $payload['description'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'description';
                    goto after_description;
                }

                $properties['description'] = $value;
    
                after_description:

                $value = $payload['fork'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'fork';
                    goto after_fork;
                }

                $properties['fork'] = $value;
    
                after_fork:

                $value = $payload['url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'url';
                    goto after_url;
                }

                $properties['url'] = $value;
    
                after_url:

                $value = $payload['archive_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'archive_url';
                    goto after_archive_url;
                }

                $properties['archive_url'] = $value;
    
                after_archive_url:

                $value = $payload['assignees_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'assignees_url';
                    goto after_assignees_url;
                }

                $properties['assignees_url'] = $value;
    
                after_assignees_url:

                $value = $payload['blobs_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'blobs_url';
                    goto after_blobs_url;
                }

                $properties['blobs_url'] = $value;
    
                after_blobs_url:

                $value = $payload['branches_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'branches_url';
                    goto after_branches_url;
                }

                $properties['branches_url'] = $value;
    
                after_branches_url:

                $value = $payload['collaborators_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'collaborators_url';
                    goto after_collaborators_url;
                }

                $properties['collaborators_url'] = $value;
    
                after_collaborators_url:

                $value = $payload['comments_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'comments_url';
                    goto after_comments_url;
                }

                $properties['comments_url'] = $value;
    
                after_comments_url:

                $value = $payload['commits_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'commits_url';
                    goto after_commits_url;
                }

                $properties['commits_url'] = $value;
    
                after_commits_url:

                $value = $payload['compare_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'compare_url';
                    goto after_compare_url;
                }

                $properties['compare_url'] = $value;
    
                after_compare_url:

                $value = $payload['contents_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'contents_url';
                    goto after_contents_url;
                }

                $properties['contents_url'] = $value;
    
                after_contents_url:

                $value = $payload['contributors_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'contributors_url';
                    goto after_contributors_url;
                }

                $properties['contributors_url'] = $value;
    
                after_contributors_url:

                $value = $payload['deployments_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'deployments_url';
                    goto after_deployments_url;
                }

                $properties['deployments_url'] = $value;
    
                after_deployments_url:

                $value = $payload['downloads_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'downloads_url';
                    goto after_downloads_url;
                }

                $properties['downloads_url'] = $value;
    
                after_downloads_url:

                $value = $payload['events_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'events_url';
                    goto after_events_url;
                }

                $properties['events_url'] = $value;
    
                after_events_url:

                $value = $payload['forks_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'forks_url';
                    goto after_forks_url;
                }

                $properties['forks_url'] = $value;
    
                after_forks_url:

                $value = $payload['git_commits_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'git_commits_url';
                    goto after_git_commits_url;
                }

                $properties['git_commits_url'] = $value;
    
                after_git_commits_url:

                $value = $payload['git_refs_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'git_refs_url';
                    goto after_git_refs_url;
                }

                $properties['git_refs_url'] = $value;
    
                after_git_refs_url:

                $value = $payload['git_tags_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'git_tags_url';
                    goto after_git_tags_url;
                }

                $properties['git_tags_url'] = $value;
    
                after_git_tags_url:

                $value = $payload['git_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'git_url';
                    goto after_git_url;
                }

                $properties['git_url'] = $value;
    
                after_git_url:

                $value = $payload['issue_comment_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'issue_comment_url';
                    goto after_issue_comment_url;
                }

                $properties['issue_comment_url'] = $value;
    
                after_issue_comment_url:

                $value = $payload['issue_events_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'issue_events_url';
                    goto after_issue_events_url;
                }

                $properties['issue_events_url'] = $value;
    
                after_issue_events_url:

                $value = $payload['issues_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'issues_url';
                    goto after_issues_url;
                }

                $properties['issues_url'] = $value;
    
                after_issues_url:

                $value = $payload['keys_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'keys_url';
                    goto after_keys_url;
                }

                $properties['keys_url'] = $value;
    
                after_keys_url:

                $value = $payload['labels_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'labels_url';
                    goto after_labels_url;
                }

                $properties['labels_url'] = $value;
    
                after_labels_url:

                $value = $payload['languages_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'languages_url';
                    goto after_languages_url;
                }

                $properties['languages_url'] = $value;
    
                after_languages_url:

                $value = $payload['merges_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'merges_url';
                    goto after_merges_url;
                }

                $properties['merges_url'] = $value;
    
                after_merges_url:

                $value = $payload['milestones_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'milestones_url';
                    goto after_milestones_url;
                }

                $properties['milestones_url'] = $value;
    
                after_milestones_url:

                $value = $payload['notifications_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'notifications_url';
                    goto after_notifications_url;
                }

                $properties['notifications_url'] = $value;
    
                after_notifications_url:

                $value = $payload['pulls_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'pulls_url';
                    goto after_pulls_url;
                }

                $properties['pulls_url'] = $value;
    
                after_pulls_url:

                $value = $payload['releases_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'releases_url';
                    goto after_releases_url;
                }

                $properties['releases_url'] = $value;
    
                after_releases_url:

                $value = $payload['ssh_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'ssh_url';
                    goto after_ssh_url;
                }

                $properties['ssh_url'] = $value;
    
                after_ssh_url:

                $value = $payload['stargazers_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'stargazers_url';
                    goto after_stargazers_url;
                }

                $properties['stargazers_url'] = $value;
    
                after_stargazers_url:

                $value = $payload['statuses_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'statuses_url';
                    goto after_statuses_url;
                }

                $properties['statuses_url'] = $value;
    
                after_statuses_url:

                $value = $payload['subscribers_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'subscribers_url';
                    goto after_subscribers_url;
                }

                $properties['subscribers_url'] = $value;
    
                after_subscribers_url:

                $value = $payload['subscription_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'subscription_url';
                    goto after_subscription_url;
                }

                $properties['subscription_url'] = $value;
    
                after_subscription_url:

                $value = $payload['tags_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'tags_url';
                    goto after_tags_url;
                }

                $properties['tags_url'] = $value;
    
                after_tags_url:

                $value = $payload['teams_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'teams_url';
                    goto after_teams_url;
                }

                $properties['teams_url'] = $value;
    
                after_teams_url:

                $value = $payload['trees_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'trees_url';
                    goto after_trees_url;
                }

                $properties['trees_url'] = $value;
    
                after_trees_url:

                $value = $payload['clone_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'clone_url';
                    goto after_clone_url;
                }

                $properties['clone_url'] = $value;
    
                after_clone_url:

                $value = $payload['mirror_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'mirror_url';
                    goto after_mirror_url;
                }

                $properties['mirror_url'] = $value;
    
                after_mirror_url:

                $value = $payload['hooks_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'hooks_url';
                    goto after_hooks_url;
                }

                $properties['hooks_url'] = $value;
    
                after_hooks_url:

                $value = $payload['svn_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'svn_url';
                    goto after_svn_url;
                }

                $properties['svn_url'] = $value;
    
                after_svn_url:

                $value = $payload['homepage'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'homepage';
                    goto after_homepage;
                }

                $properties['homepage'] = $value;
    
                after_homepage:

                $value = $payload['language'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'language';
                    goto after_language;
                }

                $properties['language'] = $value;
    
                after_language:

                $value = $payload['forks_count'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'forks_count';
                    goto after_forks_count;
                }

                $properties['forks_count'] = $value;
    
                after_forks_count:

                $value = $payload['stargazers_count'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'stargazers_count';
                    goto after_stargazers_count;
                }

                $properties['stargazers_count'] = $value;
    
                after_stargazers_count:

                $value = $payload['watchers_count'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'watchers_count';
                    goto after_watchers_count;
                }

                $properties['watchers_count'] = $value;
    
                after_watchers_count:

                $value = $payload['size'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'size';
                    goto after_size;
                }

                $properties['size'] = $value;
    
                after_size:

                $value = $payload['default_branch'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'default_branch';
                    goto after_default_branch;
                }

                $properties['default_branch'] = $value;
    
                after_default_branch:

                $value = $payload['open_issues_count'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'open_issues_count';
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
                    $missingFields[] = 'has_issues';
                    goto after_has_issues;
                }

                $properties['has_issues'] = $value;
    
                after_has_issues:

                $value = $payload['has_projects'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'has_projects';
                    goto after_has_projects;
                }

                $properties['has_projects'] = $value;
    
                after_has_projects:

                $value = $payload['has_wiki'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'has_wiki';
                    goto after_has_wiki;
                }

                $properties['has_wiki'] = $value;
    
                after_has_wiki:

                $value = $payload['has_pages'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'has_pages';
                    goto after_has_pages;
                }

                $properties['has_pages'] = $value;
    
                after_has_pages:

                $value = $payload['has_downloads'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'has_downloads';
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
                    $missingFields[] = 'archived';
                    goto after_archived;
                }

                $properties['archived'] = $value;
    
                after_archived:

                $value = $payload['disabled'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'disabled';
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
                    $missingFields[] = 'pushed_at';
                    goto after_pushed_at;
                }

                $properties['pushed_at'] = $value;
    
                after_pushed_at:

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

                $value = $payload['allow_rebase_merge'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'allow_rebase_merge';
                    goto after_allow_rebase_merge;
                }

                $properties['allow_rebase_merge'] = $value;
    
                after_allow_rebase_merge:

                $value = $payload['template_repository'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'template_repository';
                    goto after_template_repository;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'template_repository';
                        $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️Repository⚡️TemplateRepository($value);
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
                    $missingFields[] = 'open_issues';
                    goto after_open_issues;
                }

                $properties['open_issues'] = $value;
    
                after_open_issues:

                $value = $payload['watchers'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'watchers';
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
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\Repository', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\Repository::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\Github\Schema\Repository(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\Repository', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️SimpleUser(array $payload): \ApiClients\Client\Github\Schema\SimpleUser
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

                $value = $payload['email'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'email';
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
                    $missingFields[] = 'gravatar_id';
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
                    $missingFields[] = 'starred_at';
                    goto after_starred_at;
                }

                $properties['starred_at'] = $value;
    
                after_starred_at:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\SimpleUser', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\SimpleUser::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\Github\Schema\SimpleUser(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\SimpleUser', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️DependabotAlertWithRepository⚡️Dependency(array $payload): \ApiClients\Client\Github\Schema\DependabotAlertWithRepository\Dependency
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['package'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'package';
                    goto after_package;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'package';
                        $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️DependabotAlertPackage($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['package'] = $value;
    
                after_package:

                $value = $payload['manifest_path'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'manifest_path';
                    goto after_manifest_path;
                }

                $properties['manifest_path'] = $value;
    
                after_manifest_path:

                $value = $payload['scope'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'scope';
                    goto after_scope;
                }

                $properties['scope'] = $value;
    
                after_scope:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\DependabotAlertWithRepository\Dependency', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\DependabotAlertWithRepository\Dependency::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\Github\Schema\DependabotAlertWithRepository\Dependency(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\DependabotAlertWithRepository\Dependency', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️DependabotAlertSecurityAdvisory(array $payload): \ApiClients\Client\Github\Schema\DependabotAlertSecurityAdvisory
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['ghsa_id'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'ghsa_id';
                    goto after_ghsa_id;
                }

                $properties['ghsa_id'] = $value;
    
                after_ghsa_id:

                $value = $payload['cve_id'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'cve_id';
                    goto after_cve_id;
                }

                $properties['cve_id'] = $value;
    
                after_cve_id:

                $value = $payload['summary'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'summary';
                    goto after_summary;
                }

                $properties['summary'] = $value;
    
                after_summary:

                $value = $payload['description'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'description';
                    goto after_description;
                }

                $properties['description'] = $value;
    
                after_description:

                $value = $payload['vulnerabilities'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'vulnerabilities';
                    goto after_vulnerabilities;
                }

                $properties['vulnerabilities'] = $value;
    
                after_vulnerabilities:

                $value = $payload['severity'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'severity';
                    goto after_severity;
                }

                $properties['severity'] = $value;
    
                after_severity:

                $value = $payload['cvss'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'cvss';
                    goto after_cvss;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'cvss';
                        $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️DependabotAlertSecurityAdvisory⚡️Cvss($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['cvss'] = $value;
    
                after_cvss:

                $value = $payload['cwes'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'cwes';
                    goto after_cwes;
                }

                $properties['cwes'] = $value;
    
                after_cwes:

                $value = $payload['identifiers'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'identifiers';
                    goto after_identifiers;
                }

                $properties['identifiers'] = $value;
    
                after_identifiers:

                $value = $payload['references'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'references';
                    goto after_references;
                }

                $properties['references'] = $value;
    
                after_references:

                $value = $payload['published_at'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'published_at';
                    goto after_published_at;
                }

                $properties['published_at'] = $value;
    
                after_published_at:

                $value = $payload['updated_at'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'updated_at';
                    goto after_updated_at;
                }

                $properties['updated_at'] = $value;
    
                after_updated_at:

                $value = $payload['withdrawn_at'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'withdrawn_at';
                    goto after_withdrawn_at;
                }

                $properties['withdrawn_at'] = $value;
    
                after_withdrawn_at:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\DependabotAlertSecurityAdvisory', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\DependabotAlertSecurityAdvisory::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\Github\Schema\DependabotAlertSecurityAdvisory(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\DependabotAlertSecurityAdvisory', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️DependabotAlertSecurityVulnerability(array $payload): \ApiClients\Client\Github\Schema\DependabotAlertSecurityVulnerability
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['package'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'package';
                    goto after_package;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'package';
                        $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️DependabotAlertPackage($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['package'] = $value;
    
                after_package:

                $value = $payload['severity'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'severity';
                    goto after_severity;
                }

                $properties['severity'] = $value;
    
                after_severity:

                $value = $payload['vulnerable_version_range'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'vulnerable_version_range';
                    goto after_vulnerable_version_range;
                }

                $properties['vulnerable_version_range'] = $value;
    
                after_vulnerable_version_range:

                $value = $payload['first_patched_version'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'first_patched_version';
                    goto after_first_patched_version;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'first_patched_version';
                        $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️DependabotAlertSecurityVulnerability⚡️FirstPatchedVersion($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['first_patched_version'] = $value;
    
                after_first_patched_version:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\DependabotAlertSecurityVulnerability', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\DependabotAlertSecurityVulnerability::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\Github\Schema\DependabotAlertSecurityVulnerability(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\DependabotAlertSecurityVulnerability', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️Repository⚡️Permissions(array $payload): \ApiClients\Client\Github\Schema\Repository\Permissions
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['admin'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'admin';
                    goto after_admin;
                }

                $properties['admin'] = $value;
    
                after_admin:

                $value = $payload['pull'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'pull';
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
                    $missingFields[] = 'push';
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
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\Repository\Permissions', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\Repository\Permissions::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\Github\Schema\Repository\Permissions(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\Repository\Permissions', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️Repository⚡️TemplateRepository(array $payload): \ApiClients\Client\Github\Schema\Repository\TemplateRepository
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

                $value = $payload['name'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'name';
                    goto after_name;
                }

                $properties['name'] = $value;
    
                after_name:

                $value = $payload['full_name'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'full_name';
                    goto after_full_name;
                }

                $properties['full_name'] = $value;
    
                after_full_name:

                $value = $payload['owner'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'owner';
                    goto after_owner;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'owner';
                        $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️Repository⚡️TemplateRepository⚡️Owner($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['owner'] = $value;
    
                after_owner:

                $value = $payload['private'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'private';
                    goto after_private;
                }

                $properties['private'] = $value;
    
                after_private:

                $value = $payload['html_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'html_url';
                    goto after_html_url;
                }

                $properties['html_url'] = $value;
    
                after_html_url:

                $value = $payload['description'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'description';
                    goto after_description;
                }

                $properties['description'] = $value;
    
                after_description:

                $value = $payload['fork'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'fork';
                    goto after_fork;
                }

                $properties['fork'] = $value;
    
                after_fork:

                $value = $payload['url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'url';
                    goto after_url;
                }

                $properties['url'] = $value;
    
                after_url:

                $value = $payload['archive_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'archive_url';
                    goto after_archive_url;
                }

                $properties['archive_url'] = $value;
    
                after_archive_url:

                $value = $payload['assignees_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'assignees_url';
                    goto after_assignees_url;
                }

                $properties['assignees_url'] = $value;
    
                after_assignees_url:

                $value = $payload['blobs_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'blobs_url';
                    goto after_blobs_url;
                }

                $properties['blobs_url'] = $value;
    
                after_blobs_url:

                $value = $payload['branches_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'branches_url';
                    goto after_branches_url;
                }

                $properties['branches_url'] = $value;
    
                after_branches_url:

                $value = $payload['collaborators_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'collaborators_url';
                    goto after_collaborators_url;
                }

                $properties['collaborators_url'] = $value;
    
                after_collaborators_url:

                $value = $payload['comments_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'comments_url';
                    goto after_comments_url;
                }

                $properties['comments_url'] = $value;
    
                after_comments_url:

                $value = $payload['commits_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'commits_url';
                    goto after_commits_url;
                }

                $properties['commits_url'] = $value;
    
                after_commits_url:

                $value = $payload['compare_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'compare_url';
                    goto after_compare_url;
                }

                $properties['compare_url'] = $value;
    
                after_compare_url:

                $value = $payload['contents_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'contents_url';
                    goto after_contents_url;
                }

                $properties['contents_url'] = $value;
    
                after_contents_url:

                $value = $payload['contributors_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'contributors_url';
                    goto after_contributors_url;
                }

                $properties['contributors_url'] = $value;
    
                after_contributors_url:

                $value = $payload['deployments_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'deployments_url';
                    goto after_deployments_url;
                }

                $properties['deployments_url'] = $value;
    
                after_deployments_url:

                $value = $payload['downloads_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'downloads_url';
                    goto after_downloads_url;
                }

                $properties['downloads_url'] = $value;
    
                after_downloads_url:

                $value = $payload['events_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'events_url';
                    goto after_events_url;
                }

                $properties['events_url'] = $value;
    
                after_events_url:

                $value = $payload['forks_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'forks_url';
                    goto after_forks_url;
                }

                $properties['forks_url'] = $value;
    
                after_forks_url:

                $value = $payload['git_commits_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'git_commits_url';
                    goto after_git_commits_url;
                }

                $properties['git_commits_url'] = $value;
    
                after_git_commits_url:

                $value = $payload['git_refs_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'git_refs_url';
                    goto after_git_refs_url;
                }

                $properties['git_refs_url'] = $value;
    
                after_git_refs_url:

                $value = $payload['git_tags_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'git_tags_url';
                    goto after_git_tags_url;
                }

                $properties['git_tags_url'] = $value;
    
                after_git_tags_url:

                $value = $payload['git_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'git_url';
                    goto after_git_url;
                }

                $properties['git_url'] = $value;
    
                after_git_url:

                $value = $payload['issue_comment_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'issue_comment_url';
                    goto after_issue_comment_url;
                }

                $properties['issue_comment_url'] = $value;
    
                after_issue_comment_url:

                $value = $payload['issue_events_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'issue_events_url';
                    goto after_issue_events_url;
                }

                $properties['issue_events_url'] = $value;
    
                after_issue_events_url:

                $value = $payload['issues_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'issues_url';
                    goto after_issues_url;
                }

                $properties['issues_url'] = $value;
    
                after_issues_url:

                $value = $payload['keys_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'keys_url';
                    goto after_keys_url;
                }

                $properties['keys_url'] = $value;
    
                after_keys_url:

                $value = $payload['labels_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'labels_url';
                    goto after_labels_url;
                }

                $properties['labels_url'] = $value;
    
                after_labels_url:

                $value = $payload['languages_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'languages_url';
                    goto after_languages_url;
                }

                $properties['languages_url'] = $value;
    
                after_languages_url:

                $value = $payload['merges_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'merges_url';
                    goto after_merges_url;
                }

                $properties['merges_url'] = $value;
    
                after_merges_url:

                $value = $payload['milestones_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'milestones_url';
                    goto after_milestones_url;
                }

                $properties['milestones_url'] = $value;
    
                after_milestones_url:

                $value = $payload['notifications_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'notifications_url';
                    goto after_notifications_url;
                }

                $properties['notifications_url'] = $value;
    
                after_notifications_url:

                $value = $payload['pulls_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'pulls_url';
                    goto after_pulls_url;
                }

                $properties['pulls_url'] = $value;
    
                after_pulls_url:

                $value = $payload['releases_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'releases_url';
                    goto after_releases_url;
                }

                $properties['releases_url'] = $value;
    
                after_releases_url:

                $value = $payload['ssh_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'ssh_url';
                    goto after_ssh_url;
                }

                $properties['ssh_url'] = $value;
    
                after_ssh_url:

                $value = $payload['stargazers_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'stargazers_url';
                    goto after_stargazers_url;
                }

                $properties['stargazers_url'] = $value;
    
                after_stargazers_url:

                $value = $payload['statuses_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'statuses_url';
                    goto after_statuses_url;
                }

                $properties['statuses_url'] = $value;
    
                after_statuses_url:

                $value = $payload['subscribers_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'subscribers_url';
                    goto after_subscribers_url;
                }

                $properties['subscribers_url'] = $value;
    
                after_subscribers_url:

                $value = $payload['subscription_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'subscription_url';
                    goto after_subscription_url;
                }

                $properties['subscription_url'] = $value;
    
                after_subscription_url:

                $value = $payload['tags_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'tags_url';
                    goto after_tags_url;
                }

                $properties['tags_url'] = $value;
    
                after_tags_url:

                $value = $payload['teams_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'teams_url';
                    goto after_teams_url;
                }

                $properties['teams_url'] = $value;
    
                after_teams_url:

                $value = $payload['trees_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'trees_url';
                    goto after_trees_url;
                }

                $properties['trees_url'] = $value;
    
                after_trees_url:

                $value = $payload['clone_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'clone_url';
                    goto after_clone_url;
                }

                $properties['clone_url'] = $value;
    
                after_clone_url:

                $value = $payload['mirror_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'mirror_url';
                    goto after_mirror_url;
                }

                $properties['mirror_url'] = $value;
    
                after_mirror_url:

                $value = $payload['hooks_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'hooks_url';
                    goto after_hooks_url;
                }

                $properties['hooks_url'] = $value;
    
                after_hooks_url:

                $value = $payload['svn_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'svn_url';
                    goto after_svn_url;
                }

                $properties['svn_url'] = $value;
    
                after_svn_url:

                $value = $payload['homepage'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'homepage';
                    goto after_homepage;
                }

                $properties['homepage'] = $value;
    
                after_homepage:

                $value = $payload['language'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'language';
                    goto after_language;
                }

                $properties['language'] = $value;
    
                after_language:

                $value = $payload['forks_count'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'forks_count';
                    goto after_forks_count;
                }

                $properties['forks_count'] = $value;
    
                after_forks_count:

                $value = $payload['stargazers_count'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'stargazers_count';
                    goto after_stargazers_count;
                }

                $properties['stargazers_count'] = $value;
    
                after_stargazers_count:

                $value = $payload['watchers_count'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'watchers_count';
                    goto after_watchers_count;
                }

                $properties['watchers_count'] = $value;
    
                after_watchers_count:

                $value = $payload['size'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'size';
                    goto after_size;
                }

                $properties['size'] = $value;
    
                after_size:

                $value = $payload['default_branch'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'default_branch';
                    goto after_default_branch;
                }

                $properties['default_branch'] = $value;
    
                after_default_branch:

                $value = $payload['open_issues_count'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'open_issues_count';
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
                    $missingFields[] = 'has_issues';
                    goto after_has_issues;
                }

                $properties['has_issues'] = $value;
    
                after_has_issues:

                $value = $payload['has_projects'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'has_projects';
                    goto after_has_projects;
                }

                $properties['has_projects'] = $value;
    
                after_has_projects:

                $value = $payload['has_wiki'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'has_wiki';
                    goto after_has_wiki;
                }

                $properties['has_wiki'] = $value;
    
                after_has_wiki:

                $value = $payload['has_pages'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'has_pages';
                    goto after_has_pages;
                }

                $properties['has_pages'] = $value;
    
                after_has_pages:

                $value = $payload['has_downloads'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'has_downloads';
                    goto after_has_downloads;
                }

                $properties['has_downloads'] = $value;
    
                after_has_downloads:

                $value = $payload['archived'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'archived';
                    goto after_archived;
                }

                $properties['archived'] = $value;
    
                after_archived:

                $value = $payload['disabled'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'disabled';
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
                    $missingFields[] = 'pushed_at';
                    goto after_pushed_at;
                }

                $properties['pushed_at'] = $value;
    
                after_pushed_at:

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

                $value = $payload['permissions'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'permissions';
                    goto after_permissions;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'permissions';
                        $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️Repository⚡️TemplateRepository⚡️Permissions($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['permissions'] = $value;
    
                after_permissions:

                $value = $payload['allow_rebase_merge'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'allow_rebase_merge';
                    goto after_allow_rebase_merge;
                }

                $properties['allow_rebase_merge'] = $value;
    
                after_allow_rebase_merge:

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

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\Repository\TemplateRepository', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\Repository\TemplateRepository::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\Github\Schema\Repository\TemplateRepository(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\Repository\TemplateRepository', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️DependabotAlertPackage(array $payload): \ApiClients\Client\Github\Schema\DependabotAlertPackage
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['ecosystem'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'ecosystem';
                    goto after_ecosystem;
                }

                $properties['ecosystem'] = $value;
    
                after_ecosystem:

                $value = $payload['name'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'name';
                    goto after_name;
                }

                $properties['name'] = $value;
    
                after_name:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\DependabotAlertPackage', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\DependabotAlertPackage::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\Github\Schema\DependabotAlertPackage(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\DependabotAlertPackage', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️DependabotAlertSecurityAdvisory⚡️Cvss(array $payload): \ApiClients\Client\Github\Schema\DependabotAlertSecurityAdvisory\Cvss
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['score'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'score';
                    goto after_score;
                }

                $properties['score'] = $value;
    
                after_score:

                $value = $payload['vector_string'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'vector_string';
                    goto after_vector_string;
                }

                $properties['vector_string'] = $value;
    
                after_vector_string:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\DependabotAlertSecurityAdvisory\Cvss', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\DependabotAlertSecurityAdvisory\Cvss::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\Github\Schema\DependabotAlertSecurityAdvisory\Cvss(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\DependabotAlertSecurityAdvisory\Cvss', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️DependabotAlertSecurityVulnerability⚡️FirstPatchedVersion(array $payload): \ApiClients\Client\Github\Schema\DependabotAlertSecurityVulnerability\FirstPatchedVersion
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['identifier'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'identifier';
                    goto after_identifier;
                }

                $properties['identifier'] = $value;
    
                after_identifier:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\DependabotAlertSecurityVulnerability\FirstPatchedVersion', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\DependabotAlertSecurityVulnerability\FirstPatchedVersion::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\Github\Schema\DependabotAlertSecurityVulnerability\FirstPatchedVersion(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\DependabotAlertSecurityVulnerability\FirstPatchedVersion', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️Repository⚡️TemplateRepository⚡️Owner(array $payload): \ApiClients\Client\Github\Schema\Repository\TemplateRepository\Owner
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

                $value = $payload['avatar_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'avatar_url';
                    goto after_avatar_url;
                }

                $properties['avatar_url'] = $value;
    
                after_avatar_url:

                $value = $payload['gravatar_id'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'gravatar_id';
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

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\Repository\TemplateRepository\Owner', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\Repository\TemplateRepository\Owner::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\Github\Schema\Repository\TemplateRepository\Owner(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\Repository\TemplateRepository\Owner', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️Repository⚡️TemplateRepository⚡️Permissions(array $payload): \ApiClients\Client\Github\Schema\Repository\TemplateRepository\Permissions
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['admin'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'admin';
                    goto after_admin;
                }

                $properties['admin'] = $value;
    
                after_admin:

                $value = $payload['maintain'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'maintain';
                    goto after_maintain;
                }

                $properties['maintain'] = $value;
    
                after_maintain:

                $value = $payload['push'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'push';
                    goto after_push;
                }

                $properties['push'] = $value;
    
                after_push:

                $value = $payload['triage'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'triage';
                    goto after_triage;
                }

                $properties['triage'] = $value;
    
                after_triage:

                $value = $payload['pull'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'pull';
                    goto after_pull;
                }

                $properties['pull'] = $value;
    
                after_pull:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\Repository\TemplateRepository\Permissions', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\Repository\TemplateRepository\Permissions::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\Github\Schema\Repository\TemplateRepository\Permissions(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\Repository\TemplateRepository\Permissions', $exception, stack: $this->hydrationStack);
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
                'ApiClients\Client\Github\Schema\WebhookDependabotAlertReopened' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️WebhookDependabotAlertReopened($object),
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

    
    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️WebhookDependabotAlertReopened(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\WebhookDependabotAlertReopened);
        $result = [];
        
        $action = $object->action;

        if ($action === null) {
            goto after_action;
        }
        after_action:        $result['action'] = $action;

        
        $alert = $object->alert;

        if ($alert === null) {
            goto after_alert;
        }
        $alert = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️DependabotAlert($alert);
        after_alert:        $result['alert'] = $alert;

        
        $installation = $object->installation;
        $installation = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️SimpleInstallation($installation);
        after_installation:        $result['installation'] = $installation;

        
        $organization = $object->organization;
        $organization = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️OrganizationSimple($organization);
        after_organization:        $result['organization'] = $organization;

        
        $enterprise = $object->enterprise;
        $enterprise = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️Enterprise($enterprise);
        after_enterprise:        $result['enterprise'] = $enterprise;

        
        $repository = $object->repository;

        if ($repository === null) {
            goto after_repository;
        }
        $repository = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️Repository($repository);
        after_repository:        $result['repository'] = $repository;

        
        $sender = $object->sender;

        if ($sender === null) {
            goto after_sender;
        }
        $sender = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️SimpleUser($sender);
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
