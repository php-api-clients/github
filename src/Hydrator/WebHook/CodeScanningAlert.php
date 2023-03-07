<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Hydrator\WebHook;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class CodeScanningAlert implements ObjectMapper
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
            'ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertAppearedInBranch' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCodeScanningAlertAppearedInBranch($payload),
                'ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertAppearedInBranch\Alert' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCodeScanningAlertAppearedInBranch⚡️Alert($payload),
                'ApiClients\Client\GitHub\Schema\Discussion\AnswerChosenBy' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Discussion⚡️AnswerChosenBy($payload),
                'ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertAppearedInBranch\Alert\MostRecentInstance' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCodeScanningAlertAppearedInBranch⚡️Alert⚡️MostRecentInstance($payload),
                'ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertAppearedInBranch\Alert\MostRecentInstance\Location' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCodeScanningAlertAppearedInBranch⚡️Alert⚡️MostRecentInstance⚡️Location($payload),
                'ApiClients\Client\GitHub\Schema\CodeScanningAlertInstance\Message' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CodeScanningAlertInstance⚡️Message($payload),
                'ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertAppearedInBranch\Alert\Rule' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCodeScanningAlertAppearedInBranch⚡️Alert⚡️Rule($payload),
                'ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertAppearedInBranch\Alert\Tool' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCodeScanningAlertAppearedInBranch⚡️Alert⚡️Tool($payload),
                'ApiClients\Client\GitHub\Schema\Enterprise' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Enterprise($payload),
                'ApiClients\Client\GitHub\Schema\SimpleInstallation' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleInstallation($payload),
                'ApiClients\Client\GitHub\Schema\OrganizationSimple' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️OrganizationSimple($payload),
                'ApiClients\Client\GitHub\Schema\Repository' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Repository($payload),
                'ApiClients\Client\GitHub\Schema\Repository\Permissions' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Repository⚡️Permissions($payload),
                'ApiClients\Client\GitHub\Schema\SimpleUser' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($payload),
                'ApiClients\Client\GitHub\Schema\Repository\TemplateRepository' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Repository⚡️TemplateRepository($payload),
                'ApiClients\Client\GitHub\Schema\Repository\TemplateRepository\Owner' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Repository⚡️TemplateRepository⚡️Owner($payload),
                'ApiClients\Client\GitHub\Schema\Repository\TemplateRepository\Permissions' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Repository⚡️TemplateRepository⚡️Permissions($payload),
                'ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertClosedByUser' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCodeScanningAlertClosedByUser($payload),
                'ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertClosedByUser\Alert' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCodeScanningAlertClosedByUser⚡️Alert($payload),
                'ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertClosedByUser\Alert\Rule' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCodeScanningAlertClosedByUser⚡️Alert⚡️Rule($payload),
                'ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertClosedByUser\Alert\Tool' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCodeScanningAlertClosedByUser⚡️Alert⚡️Tool($payload),
                'ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertCreated' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCodeScanningAlertCreated($payload),
                'ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertCreated\Alert' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCodeScanningAlertCreated⚡️Alert($payload),
                'ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertCreated\Alert\Tool' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCodeScanningAlertCreated⚡️Alert⚡️Tool($payload),
                'ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertFixed' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCodeScanningAlertFixed($payload),
                'ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertFixed\Alert' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCodeScanningAlertFixed⚡️Alert($payload),
                'ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertReopened' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCodeScanningAlertReopened($payload),
                'ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertReopened\Alert' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCodeScanningAlertReopened⚡️Alert($payload),
                'ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertReopenedByUser' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCodeScanningAlertReopenedByUser($payload),
                'ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertReopenedByUser\Alert' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCodeScanningAlertReopenedByUser⚡️Alert($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCodeScanningAlertAppearedInBranch(array $payload): \ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertAppearedInBranch
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

                $value = $payload['alert'] ?? null;
    
                if ($value === null) {
                    $properties['alert'] = null;
                    goto after_alert;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'alert';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCodeScanningAlertAppearedInBranch⚡️Alert($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['alert'] = $value;
    
                after_alert:

                $value = $payload['commit_oid'] ?? null;
    
                if ($value === null) {
                    $properties['commit_oid'] = null;
                    goto after_commit_oid;
                }

                $properties['commit_oid'] = $value;
    
                after_commit_oid:

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

                $value = $payload['ref'] ?? null;
    
                if ($value === null) {
                    $properties['ref'] = null;
                    goto after_ref;
                }

                $properties['ref'] = $value;
    
                after_ref:

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
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertAppearedInBranch', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertAppearedInBranch::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertAppearedInBranch(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertAppearedInBranch', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCodeScanningAlertAppearedInBranch⚡️Alert(array $payload): \ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertAppearedInBranch\Alert
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

                $value = $payload['dismissed_at'] ?? null;
    
                if ($value === null) {
                    $properties['dismissed_at'] = null;
                    goto after_dismissed_at;
                }

                $properties['dismissed_at'] = $value;
    
                after_dismissed_at:

                $value = $payload['dismissed_by'] ?? null;
    
                if ($value === null) {
                    $properties['dismissed_by'] = null;
                    goto after_dismissed_by;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'dismissed_by';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Discussion⚡️AnswerChosenBy($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['dismissed_by'] = $value;
    
                after_dismissed_by:

                $value = $payload['dismissed_reason'] ?? null;
    
                if ($value === null) {
                    $properties['dismissed_reason'] = null;
                    goto after_dismissed_reason;
                }

                $properties['dismissed_reason'] = $value;
    
                after_dismissed_reason:

                $value = $payload['html_url'] ?? null;
    
                if ($value === null) {
                    $properties['html_url'] = null;
                    goto after_html_url;
                }

                $properties['html_url'] = $value;
    
                after_html_url:

                $value = $payload['most_recent_instance'] ?? null;
    
                if ($value === null) {
                    $properties['most_recent_instance'] = null;
                    goto after_most_recent_instance;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'most_recent_instance';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCodeScanningAlertAppearedInBranch⚡️Alert⚡️MostRecentInstance($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['most_recent_instance'] = $value;
    
                after_most_recent_instance:

                $value = $payload['number'] ?? null;
    
                if ($value === null) {
                    $properties['number'] = null;
                    goto after_number;
                }

                $properties['number'] = $value;
    
                after_number:

                $value = $payload['rule'] ?? null;
    
                if ($value === null) {
                    $properties['rule'] = null;
                    goto after_rule;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'rule';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCodeScanningAlertAppearedInBranch⚡️Alert⚡️Rule($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['rule'] = $value;
    
                after_rule:

                $value = $payload['state'] ?? null;
    
                if ($value === null) {
                    $properties['state'] = null;
                    goto after_state;
                }

                $properties['state'] = $value;
    
                after_state:

                $value = $payload['tool'] ?? null;
    
                if ($value === null) {
                    $properties['tool'] = null;
                    goto after_tool;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'tool';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCodeScanningAlertAppearedInBranch⚡️Alert⚡️Tool($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['tool'] = $value;
    
                after_tool:

                $value = $payload['url'] ?? null;
    
                if ($value === null) {
                    $properties['url'] = null;
                    goto after_url;
                }

                $properties['url'] = $value;
    
                after_url:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertAppearedInBranch\Alert', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertAppearedInBranch\Alert::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertAppearedInBranch\Alert(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertAppearedInBranch\Alert', $exception, stack: $this->hydrationStack);
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

        
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCodeScanningAlertAppearedInBranch⚡️Alert⚡️MostRecentInstance(array $payload): \ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertAppearedInBranch\Alert\MostRecentInstance
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['analysis_key'] ?? null;
    
                if ($value === null) {
                    $properties['analysis_key'] = null;
                    goto after_analysis_key;
                }

                $properties['analysis_key'] = $value;
    
                after_analysis_key:

                $value = $payload['classifications'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'classifications';
                    goto after_classifications;
                }

                $properties['classifications'] = $value;
    
                after_classifications:

                $value = $payload['commit_sha'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'commit_sha';
                    goto after_commit_sha;
                }

                $properties['commit_sha'] = $value;
    
                after_commit_sha:

                $value = $payload['environment'] ?? null;
    
                if ($value === null) {
                    $properties['environment'] = null;
                    goto after_environment;
                }

                $properties['environment'] = $value;
    
                after_environment:

                $value = $payload['location'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'location';
                    goto after_location;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'location';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCodeScanningAlertAppearedInBranch⚡️Alert⚡️MostRecentInstance⚡️Location($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['location'] = $value;
    
                after_location:

                $value = $payload['message'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'message';
                    goto after_message;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'message';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CodeScanningAlertInstance⚡️Message($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['message'] = $value;
    
                after_message:

                $value = $payload['ref'] ?? null;
    
                if ($value === null) {
                    $properties['ref'] = null;
                    goto after_ref;
                }

                $properties['ref'] = $value;
    
                after_ref:

                $value = $payload['state'] ?? null;
    
                if ($value === null) {
                    $properties['state'] = null;
                    goto after_state;
                }

                $properties['state'] = $value;
    
                after_state:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertAppearedInBranch\Alert\MostRecentInstance', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertAppearedInBranch\Alert\MostRecentInstance::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertAppearedInBranch\Alert\MostRecentInstance(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertAppearedInBranch\Alert\MostRecentInstance', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCodeScanningAlertAppearedInBranch⚡️Alert⚡️MostRecentInstance⚡️Location(array $payload): \ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertAppearedInBranch\Alert\MostRecentInstance\Location
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['end_column'] ?? null;
    
                if ($value === null) {
                    $properties['end_column'] = null;
                    goto after_end_column;
                }

                $properties['end_column'] = $value;
    
                after_end_column:

                $value = $payload['end_line'] ?? null;
    
                if ($value === null) {
                    $properties['end_line'] = null;
                    goto after_end_line;
                }

                $properties['end_line'] = $value;
    
                after_end_line:

                $value = $payload['path'] ?? null;
    
                if ($value === null) {
                    $properties['path'] = null;
                    goto after_path;
                }

                $properties['path'] = $value;
    
                after_path:

                $value = $payload['start_column'] ?? null;
    
                if ($value === null) {
                    $properties['start_column'] = null;
                    goto after_start_column;
                }

                $properties['start_column'] = $value;
    
                after_start_column:

                $value = $payload['start_line'] ?? null;
    
                if ($value === null) {
                    $properties['start_line'] = null;
                    goto after_start_line;
                }

                $properties['start_line'] = $value;
    
                after_start_line:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertAppearedInBranch\Alert\MostRecentInstance\Location', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertAppearedInBranch\Alert\MostRecentInstance\Location::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertAppearedInBranch\Alert\MostRecentInstance\Location(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertAppearedInBranch\Alert\MostRecentInstance\Location', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CodeScanningAlertInstance⚡️Message(array $payload): \ApiClients\Client\GitHub\Schema\CodeScanningAlertInstance\Message
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['text'] ?? null;
    
                if ($value === null) {
                    $properties['text'] = null;
                    goto after_text;
                }

                $properties['text'] = $value;
    
                after_text:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\CodeScanningAlertInstance\Message', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\CodeScanningAlertInstance\Message::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\CodeScanningAlertInstance\Message(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\CodeScanningAlertInstance\Message', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCodeScanningAlertAppearedInBranch⚡️Alert⚡️Rule(array $payload): \ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertAppearedInBranch\Alert\Rule
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

                $value = $payload['id'] ?? null;
    
                if ($value === null) {
                    $properties['id'] = null;
                    goto after_id;
                }

                $properties['id'] = $value;
    
                after_id:

                $value = $payload['severity'] ?? null;
    
                if ($value === null) {
                    $properties['severity'] = null;
                    goto after_severity;
                }

                $properties['severity'] = $value;
    
                after_severity:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertAppearedInBranch\Alert\Rule', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertAppearedInBranch\Alert\Rule::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertAppearedInBranch\Alert\Rule(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertAppearedInBranch\Alert\Rule', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCodeScanningAlertAppearedInBranch⚡️Alert⚡️Tool(array $payload): \ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertAppearedInBranch\Alert\Tool
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

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertAppearedInBranch\Alert\Tool', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertAppearedInBranch\Alert\Tool::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertAppearedInBranch\Alert\Tool(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertAppearedInBranch\Alert\Tool', $exception, stack: $this->hydrationStack);
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

        
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCodeScanningAlertClosedByUser(array $payload): \ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertClosedByUser
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

                $value = $payload['alert'] ?? null;
    
                if ($value === null) {
                    $properties['alert'] = null;
                    goto after_alert;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'alert';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCodeScanningAlertClosedByUser⚡️Alert($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['alert'] = $value;
    
                after_alert:

                $value = $payload['commit_oid'] ?? null;
    
                if ($value === null) {
                    $properties['commit_oid'] = null;
                    goto after_commit_oid;
                }

                $properties['commit_oid'] = $value;
    
                after_commit_oid:

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

                $value = $payload['ref'] ?? null;
    
                if ($value === null) {
                    $properties['ref'] = null;
                    goto after_ref;
                }

                $properties['ref'] = $value;
    
                after_ref:

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
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertClosedByUser', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertClosedByUser::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertClosedByUser(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertClosedByUser', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCodeScanningAlertClosedByUser⚡️Alert(array $payload): \ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertClosedByUser\Alert
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

                $value = $payload['dismissed_at'] ?? null;
    
                if ($value === null) {
                    $properties['dismissed_at'] = null;
                    goto after_dismissed_at;
                }

                $properties['dismissed_at'] = $value;
    
                after_dismissed_at:

                $value = $payload['dismissed_by'] ?? null;
    
                if ($value === null) {
                    $properties['dismissed_by'] = null;
                    goto after_dismissed_by;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'dismissed_by';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Discussion⚡️AnswerChosenBy($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['dismissed_by'] = $value;
    
                after_dismissed_by:

                $value = $payload['dismissed_reason'] ?? null;
    
                if ($value === null) {
                    $properties['dismissed_reason'] = null;
                    goto after_dismissed_reason;
                }

                $properties['dismissed_reason'] = $value;
    
                after_dismissed_reason:

                $value = $payload['html_url'] ?? null;
    
                if ($value === null) {
                    $properties['html_url'] = null;
                    goto after_html_url;
                }

                $properties['html_url'] = $value;
    
                after_html_url:

                $value = $payload['most_recent_instance'] ?? null;
    
                if ($value === null) {
                    $properties['most_recent_instance'] = null;
                    goto after_most_recent_instance;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'most_recent_instance';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCodeScanningAlertAppearedInBranch⚡️Alert⚡️MostRecentInstance($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['most_recent_instance'] = $value;
    
                after_most_recent_instance:

                $value = $payload['number'] ?? null;
    
                if ($value === null) {
                    $properties['number'] = null;
                    goto after_number;
                }

                $properties['number'] = $value;
    
                after_number:

                $value = $payload['rule'] ?? null;
    
                if ($value === null) {
                    $properties['rule'] = null;
                    goto after_rule;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'rule';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCodeScanningAlertClosedByUser⚡️Alert⚡️Rule($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['rule'] = $value;
    
                after_rule:

                $value = $payload['state'] ?? null;
    
                if ($value === null) {
                    $properties['state'] = null;
                    goto after_state;
                }

                $properties['state'] = $value;
    
                after_state:

                $value = $payload['tool'] ?? null;
    
                if ($value === null) {
                    $properties['tool'] = null;
                    goto after_tool;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'tool';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCodeScanningAlertClosedByUser⚡️Alert⚡️Tool($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['tool'] = $value;
    
                after_tool:

                $value = $payload['url'] ?? null;
    
                if ($value === null) {
                    $properties['url'] = null;
                    goto after_url;
                }

                $properties['url'] = $value;
    
                after_url:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertClosedByUser\Alert', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertClosedByUser\Alert::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertClosedByUser\Alert(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertClosedByUser\Alert', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCodeScanningAlertClosedByUser⚡️Alert⚡️Rule(array $payload): \ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertClosedByUser\Alert\Rule
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

                $value = $payload['full_description'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'full_description';
                    goto after_full_description;
                }

                $properties['full_description'] = $value;
    
                after_full_description:

                $value = $payload['help'] ?? null;
    
                if ($value === null) {
                    $properties['help'] = null;
                    goto after_help;
                }

                $properties['help'] = $value;
    
                after_help:

                $value = $payload['help_uri'] ?? null;
    
                if ($value === null) {
                    $properties['help_uri'] = null;
                    goto after_help_uri;
                }

                $properties['help_uri'] = $value;
    
                after_help_uri:

                $value = $payload['id'] ?? null;
    
                if ($value === null) {
                    $properties['id'] = null;
                    goto after_id;
                }

                $properties['id'] = $value;
    
                after_id:

                $value = $payload['name'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'name';
                    goto after_name;
                }

                $properties['name'] = $value;
    
                after_name:

                $value = $payload['severity'] ?? null;
    
                if ($value === null) {
                    $properties['severity'] = null;
                    goto after_severity;
                }

                $properties['severity'] = $value;
    
                after_severity:

                $value = $payload['tags'] ?? null;
    
                if ($value === null) {
                    $properties['tags'] = null;
                    goto after_tags;
                }

                $properties['tags'] = $value;
    
                after_tags:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertClosedByUser\Alert\Rule', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertClosedByUser\Alert\Rule::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertClosedByUser\Alert\Rule(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertClosedByUser\Alert\Rule', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCodeScanningAlertClosedByUser⚡️Alert⚡️Tool(array $payload): \ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertClosedByUser\Alert\Tool
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['guid'] ?? null;
    
                if ($value === null) {
                    $properties['guid'] = null;
                    goto after_guid;
                }

                $properties['guid'] = $value;
    
                after_guid:

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

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertClosedByUser\Alert\Tool', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertClosedByUser\Alert\Tool::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertClosedByUser\Alert\Tool(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertClosedByUser\Alert\Tool', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCodeScanningAlertCreated(array $payload): \ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertCreated
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

                $value = $payload['alert'] ?? null;
    
                if ($value === null) {
                    $properties['alert'] = null;
                    goto after_alert;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'alert';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCodeScanningAlertCreated⚡️Alert($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['alert'] = $value;
    
                after_alert:

                $value = $payload['commit_oid'] ?? null;
    
                if ($value === null) {
                    $properties['commit_oid'] = null;
                    goto after_commit_oid;
                }

                $properties['commit_oid'] = $value;
    
                after_commit_oid:

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

                $value = $payload['ref'] ?? null;
    
                if ($value === null) {
                    $properties['ref'] = null;
                    goto after_ref;
                }

                $properties['ref'] = $value;
    
                after_ref:

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
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertCreated', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertCreated::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertCreated(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertCreated', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCodeScanningAlertCreated⚡️Alert(array $payload): \ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertCreated\Alert
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

                $value = $payload['dismissed_at'] ?? null;
    
                if ($value === null) {
                    $properties['dismissed_at'] = null;
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

                $value = $payload['dismissed_comment'] ?? null;
    
                if ($value === null) {
                    $properties['dismissed_comment'] = null;
                    goto after_dismissed_comment;
                }

                $properties['dismissed_comment'] = $value;
    
                after_dismissed_comment:

                $value = $payload['dismissed_reason'] ?? null;
    
                if ($value === null) {
                    $properties['dismissed_reason'] = null;
                    goto after_dismissed_reason;
                }

                $properties['dismissed_reason'] = $value;
    
                after_dismissed_reason:

                $value = $payload['fixed_at'] ?? null;
    
                if ($value === null) {
                    $properties['fixed_at'] = null;
                    goto after_fixed_at;
                }

                $properties['fixed_at'] = $value;
    
                after_fixed_at:

                $value = $payload['html_url'] ?? null;
    
                if ($value === null) {
                    $properties['html_url'] = null;
                    goto after_html_url;
                }

                $properties['html_url'] = $value;
    
                after_html_url:

                $value = $payload['instances_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'instances_url';
                    goto after_instances_url;
                }

                $properties['instances_url'] = $value;
    
                after_instances_url:

                $value = $payload['most_recent_instance'] ?? null;
    
                if ($value === null) {
                    $properties['most_recent_instance'] = null;
                    goto after_most_recent_instance;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'most_recent_instance';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCodeScanningAlertAppearedInBranch⚡️Alert⚡️MostRecentInstance($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['most_recent_instance'] = $value;
    
                after_most_recent_instance:

                $value = $payload['number'] ?? null;
    
                if ($value === null) {
                    $properties['number'] = null;
                    goto after_number;
                }

                $properties['number'] = $value;
    
                after_number:

                $value = $payload['rule'] ?? null;
    
                if ($value === null) {
                    $properties['rule'] = null;
                    goto after_rule;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'rule';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCodeScanningAlertClosedByUser⚡️Alert⚡️Rule($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['rule'] = $value;
    
                after_rule:

                $value = $payload['state'] ?? null;
    
                if ($value === null) {
                    $properties['state'] = null;
                    goto after_state;
                }

                $properties['state'] = $value;
    
                after_state:

                $value = $payload['tool'] ?? null;
    
                if ($value === null) {
                    $properties['tool'] = null;
                    goto after_tool;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'tool';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCodeScanningAlertCreated⚡️Alert⚡️Tool($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['tool'] = $value;
    
                after_tool:

                $value = $payload['updated_at'] ?? null;
    
                if ($value === null) {
                    $properties['updated_at'] = null;
                    goto after_updated_at;
                }

                $properties['updated_at'] = $value;
    
                after_updated_at:

                $value = $payload['url'] ?? null;
    
                if ($value === null) {
                    $properties['url'] = null;
                    goto after_url;
                }

                $properties['url'] = $value;
    
                after_url:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertCreated\Alert', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertCreated\Alert::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertCreated\Alert(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertCreated\Alert', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCodeScanningAlertCreated⚡️Alert⚡️Tool(array $payload): \ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertCreated\Alert\Tool
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['guid'] ?? null;
    
                if ($value === null) {
                    $properties['guid'] = null;
                    goto after_guid;
                }

                $properties['guid'] = $value;
    
                after_guid:

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

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertCreated\Alert\Tool', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertCreated\Alert\Tool::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertCreated\Alert\Tool(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertCreated\Alert\Tool', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCodeScanningAlertFixed(array $payload): \ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertFixed
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

                $value = $payload['alert'] ?? null;
    
                if ($value === null) {
                    $properties['alert'] = null;
                    goto after_alert;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'alert';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCodeScanningAlertFixed⚡️Alert($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['alert'] = $value;
    
                after_alert:

                $value = $payload['commit_oid'] ?? null;
    
                if ($value === null) {
                    $properties['commit_oid'] = null;
                    goto after_commit_oid;
                }

                $properties['commit_oid'] = $value;
    
                after_commit_oid:

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

                $value = $payload['ref'] ?? null;
    
                if ($value === null) {
                    $properties['ref'] = null;
                    goto after_ref;
                }

                $properties['ref'] = $value;
    
                after_ref:

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
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertFixed', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertFixed::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertFixed(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertFixed', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCodeScanningAlertFixed⚡️Alert(array $payload): \ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertFixed\Alert
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

                $value = $payload['dismissed_at'] ?? null;
    
                if ($value === null) {
                    $properties['dismissed_at'] = null;
                    goto after_dismissed_at;
                }

                $properties['dismissed_at'] = $value;
    
                after_dismissed_at:

                $value = $payload['dismissed_by'] ?? null;
    
                if ($value === null) {
                    $properties['dismissed_by'] = null;
                    goto after_dismissed_by;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'dismissed_by';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Discussion⚡️AnswerChosenBy($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['dismissed_by'] = $value;
    
                after_dismissed_by:

                $value = $payload['dismissed_reason'] ?? null;
    
                if ($value === null) {
                    $properties['dismissed_reason'] = null;
                    goto after_dismissed_reason;
                }

                $properties['dismissed_reason'] = $value;
    
                after_dismissed_reason:

                $value = $payload['html_url'] ?? null;
    
                if ($value === null) {
                    $properties['html_url'] = null;
                    goto after_html_url;
                }

                $properties['html_url'] = $value;
    
                after_html_url:

                $value = $payload['instances_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'instances_url';
                    goto after_instances_url;
                }

                $properties['instances_url'] = $value;
    
                after_instances_url:

                $value = $payload['most_recent_instance'] ?? null;
    
                if ($value === null) {
                    $properties['most_recent_instance'] = null;
                    goto after_most_recent_instance;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'most_recent_instance';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCodeScanningAlertAppearedInBranch⚡️Alert⚡️MostRecentInstance($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['most_recent_instance'] = $value;
    
                after_most_recent_instance:

                $value = $payload['number'] ?? null;
    
                if ($value === null) {
                    $properties['number'] = null;
                    goto after_number;
                }

                $properties['number'] = $value;
    
                after_number:

                $value = $payload['rule'] ?? null;
    
                if ($value === null) {
                    $properties['rule'] = null;
                    goto after_rule;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'rule';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCodeScanningAlertClosedByUser⚡️Alert⚡️Rule($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['rule'] = $value;
    
                after_rule:

                $value = $payload['state'] ?? null;
    
                if ($value === null) {
                    $properties['state'] = null;
                    goto after_state;
                }

                $properties['state'] = $value;
    
                after_state:

                $value = $payload['tool'] ?? null;
    
                if ($value === null) {
                    $properties['tool'] = null;
                    goto after_tool;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'tool';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCodeScanningAlertClosedByUser⚡️Alert⚡️Tool($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['tool'] = $value;
    
                after_tool:

                $value = $payload['url'] ?? null;
    
                if ($value === null) {
                    $properties['url'] = null;
                    goto after_url;
                }

                $properties['url'] = $value;
    
                after_url:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertFixed\Alert', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertFixed\Alert::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertFixed\Alert(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertFixed\Alert', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCodeScanningAlertReopened(array $payload): \ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertReopened
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

                $value = $payload['alert'] ?? null;
    
                if ($value === null) {
                    $properties['alert'] = null;
                    goto after_alert;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'alert';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCodeScanningAlertReopened⚡️Alert($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['alert'] = $value;
    
                after_alert:

                $value = $payload['commit_oid'] ?? null;
    
                if ($value === null) {
                    $properties['commit_oid'] = null;
                    goto after_commit_oid;
                }

                $properties['commit_oid'] = $value;
    
                after_commit_oid:

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

                $value = $payload['ref'] ?? null;
    
                if ($value === null) {
                    $properties['ref'] = null;
                    goto after_ref;
                }

                $properties['ref'] = $value;
    
                after_ref:

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
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertReopened', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertReopened::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertReopened(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertReopened', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCodeScanningAlertReopened⚡️Alert(array $payload): \ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertReopened\Alert
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

                $value = $payload['dismissed_at'] ?? null;
    
                if ($value === null) {
                    $properties['dismissed_at'] = null;
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
                    $properties['dismissed_reason'] = null;
                    goto after_dismissed_reason;
                }

                $properties['dismissed_reason'] = $value;
    
                after_dismissed_reason:

                $value = $payload['html_url'] ?? null;
    
                if ($value === null) {
                    $properties['html_url'] = null;
                    goto after_html_url;
                }

                $properties['html_url'] = $value;
    
                after_html_url:

                $value = $payload['most_recent_instance'] ?? null;
    
                if ($value === null) {
                    $properties['most_recent_instance'] = null;
                    goto after_most_recent_instance;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'most_recent_instance';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCodeScanningAlertAppearedInBranch⚡️Alert⚡️MostRecentInstance($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['most_recent_instance'] = $value;
    
                after_most_recent_instance:

                $value = $payload['number'] ?? null;
    
                if ($value === null) {
                    $properties['number'] = null;
                    goto after_number;
                }

                $properties['number'] = $value;
    
                after_number:

                $value = $payload['rule'] ?? null;
    
                if ($value === null) {
                    $properties['rule'] = null;
                    goto after_rule;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'rule';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCodeScanningAlertClosedByUser⚡️Alert⚡️Rule($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['rule'] = $value;
    
                after_rule:

                $value = $payload['state'] ?? null;
    
                if ($value === null) {
                    $properties['state'] = null;
                    goto after_state;
                }

                $properties['state'] = $value;
    
                after_state:

                $value = $payload['tool'] ?? null;
    
                if ($value === null) {
                    $properties['tool'] = null;
                    goto after_tool;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'tool';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCodeScanningAlertClosedByUser⚡️Alert⚡️Tool($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['tool'] = $value;
    
                after_tool:

                $value = $payload['url'] ?? null;
    
                if ($value === null) {
                    $properties['url'] = null;
                    goto after_url;
                }

                $properties['url'] = $value;
    
                after_url:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertReopened\Alert', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertReopened\Alert::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertReopened\Alert(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertReopened\Alert', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCodeScanningAlertReopenedByUser(array $payload): \ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertReopenedByUser
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

                $value = $payload['alert'] ?? null;
    
                if ($value === null) {
                    $properties['alert'] = null;
                    goto after_alert;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'alert';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCodeScanningAlertReopenedByUser⚡️Alert($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['alert'] = $value;
    
                after_alert:

                $value = $payload['commit_oid'] ?? null;
    
                if ($value === null) {
                    $properties['commit_oid'] = null;
                    goto after_commit_oid;
                }

                $properties['commit_oid'] = $value;
    
                after_commit_oid:

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

                $value = $payload['ref'] ?? null;
    
                if ($value === null) {
                    $properties['ref'] = null;
                    goto after_ref;
                }

                $properties['ref'] = $value;
    
                after_ref:

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
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertReopenedByUser', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertReopenedByUser::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertReopenedByUser(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertReopenedByUser', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCodeScanningAlertReopenedByUser⚡️Alert(array $payload): \ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertReopenedByUser\Alert
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

                $value = $payload['dismissed_at'] ?? null;
    
                if ($value === null) {
                    $properties['dismissed_at'] = null;
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
                    $properties['dismissed_reason'] = null;
                    goto after_dismissed_reason;
                }

                $properties['dismissed_reason'] = $value;
    
                after_dismissed_reason:

                $value = $payload['html_url'] ?? null;
    
                if ($value === null) {
                    $properties['html_url'] = null;
                    goto after_html_url;
                }

                $properties['html_url'] = $value;
    
                after_html_url:

                $value = $payload['most_recent_instance'] ?? null;
    
                if ($value === null) {
                    $properties['most_recent_instance'] = null;
                    goto after_most_recent_instance;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'most_recent_instance';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCodeScanningAlertAppearedInBranch⚡️Alert⚡️MostRecentInstance($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['most_recent_instance'] = $value;
    
                after_most_recent_instance:

                $value = $payload['number'] ?? null;
    
                if ($value === null) {
                    $properties['number'] = null;
                    goto after_number;
                }

                $properties['number'] = $value;
    
                after_number:

                $value = $payload['rule'] ?? null;
    
                if ($value === null) {
                    $properties['rule'] = null;
                    goto after_rule;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'rule';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCodeScanningAlertAppearedInBranch⚡️Alert⚡️Rule($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['rule'] = $value;
    
                after_rule:

                $value = $payload['state'] ?? null;
    
                if ($value === null) {
                    $properties['state'] = null;
                    goto after_state;
                }

                $properties['state'] = $value;
    
                after_state:

                $value = $payload['tool'] ?? null;
    
                if ($value === null) {
                    $properties['tool'] = null;
                    goto after_tool;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'tool';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCodeScanningAlertAppearedInBranch⚡️Alert⚡️Tool($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['tool'] = $value;
    
                after_tool:

                $value = $payload['url'] ?? null;
    
                if ($value === null) {
                    $properties['url'] = null;
                    goto after_url;
                }

                $properties['url'] = $value;
    
                after_url:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertReopenedByUser\Alert', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertReopenedByUser\Alert::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertReopenedByUser\Alert(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertReopenedByUser\Alert', $exception, stack: $this->hydrationStack);
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
                'ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertAppearedInBranch' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCodeScanningAlertAppearedInBranch($object),
                'ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertAppearedInBranch\Alert' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCodeScanningAlertAppearedInBranch⚡️Alert($object),
                'ApiClients\Client\GitHub\Schema\Discussion\AnswerChosenBy' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Discussion⚡️AnswerChosenBy($object),
                'ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertAppearedInBranch\Alert\MostRecentInstance' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCodeScanningAlertAppearedInBranch⚡️Alert⚡️MostRecentInstance($object),
                'ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertAppearedInBranch\Alert\MostRecentInstance\Location' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCodeScanningAlertAppearedInBranch⚡️Alert⚡️MostRecentInstance⚡️Location($object),
                'ApiClients\Client\GitHub\Schema\CodeScanningAlertInstance\Message' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CodeScanningAlertInstance⚡️Message($object),
                'ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertAppearedInBranch\Alert\Rule' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCodeScanningAlertAppearedInBranch⚡️Alert⚡️Rule($object),
                'ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertAppearedInBranch\Alert\Tool' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCodeScanningAlertAppearedInBranch⚡️Alert⚡️Tool($object),
                'ApiClients\Client\GitHub\Schema\Enterprise' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Enterprise($object),
                'ApiClients\Client\GitHub\Schema\SimpleInstallation' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleInstallation($object),
                'ApiClients\Client\GitHub\Schema\OrganizationSimple' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️OrganizationSimple($object),
                'ApiClients\Client\GitHub\Schema\Repository' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Repository($object),
                'ApiClients\Client\GitHub\Schema\Repository\Permissions' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Repository⚡️Permissions($object),
                'ApiClients\Client\GitHub\Schema\SimpleUser' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($object),
                'ApiClients\Client\GitHub\Schema\Repository\TemplateRepository' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Repository⚡️TemplateRepository($object),
                'ApiClients\Client\GitHub\Schema\Repository\TemplateRepository\Owner' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Repository⚡️TemplateRepository⚡️Owner($object),
                'ApiClients\Client\GitHub\Schema\Repository\TemplateRepository\Permissions' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Repository⚡️TemplateRepository⚡️Permissions($object),
                'ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertClosedByUser' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCodeScanningAlertClosedByUser($object),
                'ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertClosedByUser\Alert' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCodeScanningAlertClosedByUser⚡️Alert($object),
                'ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertClosedByUser\Alert\Rule' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCodeScanningAlertClosedByUser⚡️Alert⚡️Rule($object),
                'ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertClosedByUser\Alert\Tool' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCodeScanningAlertClosedByUser⚡️Alert⚡️Tool($object),
                'ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertCreated' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCodeScanningAlertCreated($object),
                'ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertCreated\Alert' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCodeScanningAlertCreated⚡️Alert($object),
                'ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertCreated\Alert\Tool' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCodeScanningAlertCreated⚡️Alert⚡️Tool($object),
                'ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertFixed' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCodeScanningAlertFixed($object),
                'ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertFixed\Alert' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCodeScanningAlertFixed⚡️Alert($object),
                'ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertReopened' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCodeScanningAlertReopened($object),
                'ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertReopened\Alert' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCodeScanningAlertReopened⚡️Alert($object),
                'ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertReopenedByUser' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCodeScanningAlertReopenedByUser($object),
                'ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertReopenedByUser\Alert' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCodeScanningAlertReopenedByUser⚡️Alert($object),
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

    
    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCodeScanningAlertAppearedInBranch(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertAppearedInBranch);
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
        $alert = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCodeScanningAlertAppearedInBranch⚡️Alert($alert);
        after_alert:        $result['alert'] = $alert;

        
        $commit_oid = $object->commit_oid;

        if ($commit_oid === null) {
            goto after_commit_oid;
        }
        after_commit_oid:        $result['commit_oid'] = $commit_oid;

        
        $enterprise = $object->enterprise;
        $enterprise = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Enterprise($enterprise);
        after_enterprise:        $result['enterprise'] = $enterprise;

        
        $installation = $object->installation;
        $installation = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleInstallation($installation);
        after_installation:        $result['installation'] = $installation;

        
        $organization = $object->organization;
        $organization = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️OrganizationSimple($organization);
        after_organization:        $result['organization'] = $organization;

        
        $ref = $object->ref;

        if ($ref === null) {
            goto after_ref;
        }
        after_ref:        $result['ref'] = $ref;

        
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

    
    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCodeScanningAlertAppearedInBranch⚡️Alert(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertAppearedInBranch\Alert);
        $result = [];
        
        $created_at = $object->created_at;

        if ($created_at === null) {
            goto after_created_at;
        }
        after_created_at:        $result['created_at'] = $created_at;

        
        $dismissed_at = $object->dismissed_at;

        if ($dismissed_at === null) {
            goto after_dismissed_at;
        }
        after_dismissed_at:        $result['dismissed_at'] = $dismissed_at;

        
        $dismissed_by = $object->dismissed_by;

        if ($dismissed_by === null) {
            goto after_dismissed_by;
        }
        $dismissed_by = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Discussion⚡️AnswerChosenBy($dismissed_by);
        after_dismissed_by:        $result['dismissed_by'] = $dismissed_by;

        
        $dismissed_reason = $object->dismissed_reason;

        if ($dismissed_reason === null) {
            goto after_dismissed_reason;
        }
        after_dismissed_reason:        $result['dismissed_reason'] = $dismissed_reason;

        
        $html_url = $object->html_url;

        if ($html_url === null) {
            goto after_html_url;
        }
        after_html_url:        $result['html_url'] = $html_url;

        
        $most_recent_instance = $object->most_recent_instance;

        if ($most_recent_instance === null) {
            goto after_most_recent_instance;
        }
        $most_recent_instance = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCodeScanningAlertAppearedInBranch⚡️Alert⚡️MostRecentInstance($most_recent_instance);
        after_most_recent_instance:        $result['most_recent_instance'] = $most_recent_instance;

        
        $number = $object->number;

        if ($number === null) {
            goto after_number;
        }
        after_number:        $result['number'] = $number;

        
        $rule = $object->rule;

        if ($rule === null) {
            goto after_rule;
        }
        $rule = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCodeScanningAlertAppearedInBranch⚡️Alert⚡️Rule($rule);
        after_rule:        $result['rule'] = $rule;

        
        $state = $object->state;

        if ($state === null) {
            goto after_state;
        }
        after_state:        $result['state'] = $state;

        
        $tool = $object->tool;

        if ($tool === null) {
            goto after_tool;
        }
        $tool = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCodeScanningAlertAppearedInBranch⚡️Alert⚡️Tool($tool);
        after_tool:        $result['tool'] = $tool;

        
        $url = $object->url;

        if ($url === null) {
            goto after_url;
        }
        after_url:        $result['url'] = $url;


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

    
    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCodeScanningAlertAppearedInBranch⚡️Alert⚡️MostRecentInstance(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertAppearedInBranch\Alert\MostRecentInstance);
        $result = [];
        
        $analysis_key = $object->analysis_key;

        if ($analysis_key === null) {
            goto after_analysis_key;
        }
        after_analysis_key:        $result['analysis_key'] = $analysis_key;

        
        $classifications = $object->classifications;
        static $classificationsSerializer0;

        if ($classificationsSerializer0 === null) {
            $classificationsSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $classifications = $classificationsSerializer0->serialize($classifications, $this);
        after_classifications:        $result['classifications'] = $classifications;

        
        $commit_sha = $object->commit_sha;
        after_commit_sha:        $result['commit_sha'] = $commit_sha;

        
        $environment = $object->environment;

        if ($environment === null) {
            goto after_environment;
        }
        after_environment:        $result['environment'] = $environment;

        
        $location = $object->location;
        $location = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCodeScanningAlertAppearedInBranch⚡️Alert⚡️MostRecentInstance⚡️Location($location);
        after_location:        $result['location'] = $location;

        
        $message = $object->message;
        $message = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CodeScanningAlertInstance⚡️Message($message);
        after_message:        $result['message'] = $message;

        
        $ref = $object->ref;

        if ($ref === null) {
            goto after_ref;
        }
        after_ref:        $result['ref'] = $ref;

        
        $state = $object->state;

        if ($state === null) {
            goto after_state;
        }
        after_state:        $result['state'] = $state;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCodeScanningAlertAppearedInBranch⚡️Alert⚡️MostRecentInstance⚡️Location(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertAppearedInBranch\Alert\MostRecentInstance\Location);
        $result = [];
        
        $end_column = $object->end_column;

        if ($end_column === null) {
            goto after_end_column;
        }
        after_end_column:        $result['end_column'] = $end_column;

        
        $end_line = $object->end_line;

        if ($end_line === null) {
            goto after_end_line;
        }
        after_end_line:        $result['end_line'] = $end_line;

        
        $path = $object->path;

        if ($path === null) {
            goto after_path;
        }
        after_path:        $result['path'] = $path;

        
        $start_column = $object->start_column;

        if ($start_column === null) {
            goto after_start_column;
        }
        after_start_column:        $result['start_column'] = $start_column;

        
        $start_line = $object->start_line;

        if ($start_line === null) {
            goto after_start_line;
        }
        after_start_line:        $result['start_line'] = $start_line;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CodeScanningAlertInstance⚡️Message(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\CodeScanningAlertInstance\Message);
        $result = [];
        
        $text = $object->text;

        if ($text === null) {
            goto after_text;
        }
        after_text:        $result['text'] = $text;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCodeScanningAlertAppearedInBranch⚡️Alert⚡️Rule(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertAppearedInBranch\Alert\Rule);
        $result = [];
        
        $description = $object->description;

        if ($description === null) {
            goto after_description;
        }
        after_description:        $result['description'] = $description;

        
        $id = $object->id;

        if ($id === null) {
            goto after_id;
        }
        after_id:        $result['id'] = $id;

        
        $severity = $object->severity;

        if ($severity === null) {
            goto after_severity;
        }
        after_severity:        $result['severity'] = $severity;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCodeScanningAlertAppearedInBranch⚡️Alert⚡️Tool(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertAppearedInBranch\Alert\Tool);
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

    
    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCodeScanningAlertClosedByUser(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertClosedByUser);
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
        $alert = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCodeScanningAlertClosedByUser⚡️Alert($alert);
        after_alert:        $result['alert'] = $alert;

        
        $commit_oid = $object->commit_oid;

        if ($commit_oid === null) {
            goto after_commit_oid;
        }
        after_commit_oid:        $result['commit_oid'] = $commit_oid;

        
        $enterprise = $object->enterprise;
        $enterprise = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Enterprise($enterprise);
        after_enterprise:        $result['enterprise'] = $enterprise;

        
        $installation = $object->installation;
        $installation = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleInstallation($installation);
        after_installation:        $result['installation'] = $installation;

        
        $organization = $object->organization;
        $organization = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️OrganizationSimple($organization);
        after_organization:        $result['organization'] = $organization;

        
        $ref = $object->ref;

        if ($ref === null) {
            goto after_ref;
        }
        after_ref:        $result['ref'] = $ref;

        
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

    
    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCodeScanningAlertClosedByUser⚡️Alert(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertClosedByUser\Alert);
        $result = [];
        
        $created_at = $object->created_at;

        if ($created_at === null) {
            goto after_created_at;
        }
        after_created_at:        $result['created_at'] = $created_at;

        
        $dismissed_at = $object->dismissed_at;

        if ($dismissed_at === null) {
            goto after_dismissed_at;
        }
        after_dismissed_at:        $result['dismissed_at'] = $dismissed_at;

        
        $dismissed_by = $object->dismissed_by;

        if ($dismissed_by === null) {
            goto after_dismissed_by;
        }
        $dismissed_by = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Discussion⚡️AnswerChosenBy($dismissed_by);
        after_dismissed_by:        $result['dismissed_by'] = $dismissed_by;

        
        $dismissed_reason = $object->dismissed_reason;

        if ($dismissed_reason === null) {
            goto after_dismissed_reason;
        }
        after_dismissed_reason:        $result['dismissed_reason'] = $dismissed_reason;

        
        $html_url = $object->html_url;

        if ($html_url === null) {
            goto after_html_url;
        }
        after_html_url:        $result['html_url'] = $html_url;

        
        $most_recent_instance = $object->most_recent_instance;

        if ($most_recent_instance === null) {
            goto after_most_recent_instance;
        }
        $most_recent_instance = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCodeScanningAlertAppearedInBranch⚡️Alert⚡️MostRecentInstance($most_recent_instance);
        after_most_recent_instance:        $result['most_recent_instance'] = $most_recent_instance;

        
        $number = $object->number;

        if ($number === null) {
            goto after_number;
        }
        after_number:        $result['number'] = $number;

        
        $rule = $object->rule;

        if ($rule === null) {
            goto after_rule;
        }
        $rule = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCodeScanningAlertClosedByUser⚡️Alert⚡️Rule($rule);
        after_rule:        $result['rule'] = $rule;

        
        $state = $object->state;

        if ($state === null) {
            goto after_state;
        }
        after_state:        $result['state'] = $state;

        
        $tool = $object->tool;

        if ($tool === null) {
            goto after_tool;
        }
        $tool = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCodeScanningAlertClosedByUser⚡️Alert⚡️Tool($tool);
        after_tool:        $result['tool'] = $tool;

        
        $url = $object->url;

        if ($url === null) {
            goto after_url;
        }
        after_url:        $result['url'] = $url;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCodeScanningAlertClosedByUser⚡️Alert⚡️Rule(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertClosedByUser\Alert\Rule);
        $result = [];
        
        $description = $object->description;

        if ($description === null) {
            goto after_description;
        }
        after_description:        $result['description'] = $description;

        
        $full_description = $object->full_description;
        after_full_description:        $result['full_description'] = $full_description;

        
        $help = $object->help;

        if ($help === null) {
            goto after_help;
        }
        after_help:        $result['help'] = $help;

        
        $help_uri = $object->help_uri;

        if ($help_uri === null) {
            goto after_help_uri;
        }
        after_help_uri:        $result['help_uri'] = $help_uri;

        
        $id = $object->id;

        if ($id === null) {
            goto after_id;
        }
        after_id:        $result['id'] = $id;

        
        $name = $object->name;
        after_name:        $result['name'] = $name;

        
        $severity = $object->severity;

        if ($severity === null) {
            goto after_severity;
        }
        after_severity:        $result['severity'] = $severity;

        
        $tags = $object->tags;

        if ($tags === null) {
            goto after_tags;
        }
        static $tagsSerializer0;

        if ($tagsSerializer0 === null) {
            $tagsSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $tags = $tagsSerializer0->serialize($tags, $this);
        after_tags:        $result['tags'] = $tags;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCodeScanningAlertClosedByUser⚡️Alert⚡️Tool(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertClosedByUser\Alert\Tool);
        $result = [];
        
        $guid = $object->guid;

        if ($guid === null) {
            goto after_guid;
        }
        after_guid:        $result['guid'] = $guid;

        
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


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCodeScanningAlertCreated(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertCreated);
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
        $alert = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCodeScanningAlertCreated⚡️Alert($alert);
        after_alert:        $result['alert'] = $alert;

        
        $commit_oid = $object->commit_oid;

        if ($commit_oid === null) {
            goto after_commit_oid;
        }
        after_commit_oid:        $result['commit_oid'] = $commit_oid;

        
        $enterprise = $object->enterprise;
        $enterprise = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Enterprise($enterprise);
        after_enterprise:        $result['enterprise'] = $enterprise;

        
        $installation = $object->installation;
        $installation = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleInstallation($installation);
        after_installation:        $result['installation'] = $installation;

        
        $organization = $object->organization;
        $organization = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️OrganizationSimple($organization);
        after_organization:        $result['organization'] = $organization;

        
        $ref = $object->ref;

        if ($ref === null) {
            goto after_ref;
        }
        after_ref:        $result['ref'] = $ref;

        
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

    
    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCodeScanningAlertCreated⚡️Alert(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertCreated\Alert);
        $result = [];
        
        $created_at = $object->created_at;

        if ($created_at === null) {
            goto after_created_at;
        }
        after_created_at:        $result['created_at'] = $created_at;

        
        $dismissed_at = $object->dismissed_at;

        if ($dismissed_at === null) {
            goto after_dismissed_at;
        }
        after_dismissed_at:        $result['dismissed_at'] = $dismissed_at;

        
        $dismissed_by = $object->dismissed_by;

        if ($dismissed_by === null) {
            goto after_dismissed_by;
        }
        after_dismissed_by:        $result['dismissed_by'] = $dismissed_by;

        
        $dismissed_comment = $object->dismissed_comment;

        if ($dismissed_comment === null) {
            goto after_dismissed_comment;
        }
        after_dismissed_comment:        $result['dismissed_comment'] = $dismissed_comment;

        
        $dismissed_reason = $object->dismissed_reason;

        if ($dismissed_reason === null) {
            goto after_dismissed_reason;
        }
        after_dismissed_reason:        $result['dismissed_reason'] = $dismissed_reason;

        
        $fixed_at = $object->fixed_at;

        if ($fixed_at === null) {
            goto after_fixed_at;
        }
        after_fixed_at:        $result['fixed_at'] = $fixed_at;

        
        $html_url = $object->html_url;

        if ($html_url === null) {
            goto after_html_url;
        }
        after_html_url:        $result['html_url'] = $html_url;

        
        $instances_url = $object->instances_url;
        after_instances_url:        $result['instances_url'] = $instances_url;

        
        $most_recent_instance = $object->most_recent_instance;

        if ($most_recent_instance === null) {
            goto after_most_recent_instance;
        }
        $most_recent_instance = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCodeScanningAlertAppearedInBranch⚡️Alert⚡️MostRecentInstance($most_recent_instance);
        after_most_recent_instance:        $result['most_recent_instance'] = $most_recent_instance;

        
        $number = $object->number;

        if ($number === null) {
            goto after_number;
        }
        after_number:        $result['number'] = $number;

        
        $rule = $object->rule;

        if ($rule === null) {
            goto after_rule;
        }
        $rule = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCodeScanningAlertClosedByUser⚡️Alert⚡️Rule($rule);
        after_rule:        $result['rule'] = $rule;

        
        $state = $object->state;

        if ($state === null) {
            goto after_state;
        }
        after_state:        $result['state'] = $state;

        
        $tool = $object->tool;

        if ($tool === null) {
            goto after_tool;
        }
        $tool = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCodeScanningAlertCreated⚡️Alert⚡️Tool($tool);
        after_tool:        $result['tool'] = $tool;

        
        $updated_at = $object->updated_at;

        if ($updated_at === null) {
            goto after_updated_at;
        }
        after_updated_at:        $result['updated_at'] = $updated_at;

        
        $url = $object->url;

        if ($url === null) {
            goto after_url;
        }
        after_url:        $result['url'] = $url;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCodeScanningAlertCreated⚡️Alert⚡️Tool(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertCreated\Alert\Tool);
        $result = [];
        
        $guid = $object->guid;

        if ($guid === null) {
            goto after_guid;
        }
        after_guid:        $result['guid'] = $guid;

        
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


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCodeScanningAlertFixed(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertFixed);
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
        $alert = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCodeScanningAlertFixed⚡️Alert($alert);
        after_alert:        $result['alert'] = $alert;

        
        $commit_oid = $object->commit_oid;

        if ($commit_oid === null) {
            goto after_commit_oid;
        }
        after_commit_oid:        $result['commit_oid'] = $commit_oid;

        
        $enterprise = $object->enterprise;
        $enterprise = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Enterprise($enterprise);
        after_enterprise:        $result['enterprise'] = $enterprise;

        
        $installation = $object->installation;
        $installation = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleInstallation($installation);
        after_installation:        $result['installation'] = $installation;

        
        $organization = $object->organization;
        $organization = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️OrganizationSimple($organization);
        after_organization:        $result['organization'] = $organization;

        
        $ref = $object->ref;

        if ($ref === null) {
            goto after_ref;
        }
        after_ref:        $result['ref'] = $ref;

        
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

    
    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCodeScanningAlertFixed⚡️Alert(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertFixed\Alert);
        $result = [];
        
        $created_at = $object->created_at;

        if ($created_at === null) {
            goto after_created_at;
        }
        after_created_at:        $result['created_at'] = $created_at;

        
        $dismissed_at = $object->dismissed_at;

        if ($dismissed_at === null) {
            goto after_dismissed_at;
        }
        after_dismissed_at:        $result['dismissed_at'] = $dismissed_at;

        
        $dismissed_by = $object->dismissed_by;

        if ($dismissed_by === null) {
            goto after_dismissed_by;
        }
        $dismissed_by = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Discussion⚡️AnswerChosenBy($dismissed_by);
        after_dismissed_by:        $result['dismissed_by'] = $dismissed_by;

        
        $dismissed_reason = $object->dismissed_reason;

        if ($dismissed_reason === null) {
            goto after_dismissed_reason;
        }
        after_dismissed_reason:        $result['dismissed_reason'] = $dismissed_reason;

        
        $html_url = $object->html_url;

        if ($html_url === null) {
            goto after_html_url;
        }
        after_html_url:        $result['html_url'] = $html_url;

        
        $instances_url = $object->instances_url;
        after_instances_url:        $result['instances_url'] = $instances_url;

        
        $most_recent_instance = $object->most_recent_instance;

        if ($most_recent_instance === null) {
            goto after_most_recent_instance;
        }
        $most_recent_instance = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCodeScanningAlertAppearedInBranch⚡️Alert⚡️MostRecentInstance($most_recent_instance);
        after_most_recent_instance:        $result['most_recent_instance'] = $most_recent_instance;

        
        $number = $object->number;

        if ($number === null) {
            goto after_number;
        }
        after_number:        $result['number'] = $number;

        
        $rule = $object->rule;

        if ($rule === null) {
            goto after_rule;
        }
        $rule = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCodeScanningAlertClosedByUser⚡️Alert⚡️Rule($rule);
        after_rule:        $result['rule'] = $rule;

        
        $state = $object->state;

        if ($state === null) {
            goto after_state;
        }
        after_state:        $result['state'] = $state;

        
        $tool = $object->tool;

        if ($tool === null) {
            goto after_tool;
        }
        $tool = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCodeScanningAlertClosedByUser⚡️Alert⚡️Tool($tool);
        after_tool:        $result['tool'] = $tool;

        
        $url = $object->url;

        if ($url === null) {
            goto after_url;
        }
        after_url:        $result['url'] = $url;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCodeScanningAlertReopened(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertReopened);
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
        $alert = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCodeScanningAlertReopened⚡️Alert($alert);
        after_alert:        $result['alert'] = $alert;

        
        $commit_oid = $object->commit_oid;

        if ($commit_oid === null) {
            goto after_commit_oid;
        }
        after_commit_oid:        $result['commit_oid'] = $commit_oid;

        
        $enterprise = $object->enterprise;
        $enterprise = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Enterprise($enterprise);
        after_enterprise:        $result['enterprise'] = $enterprise;

        
        $installation = $object->installation;
        $installation = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleInstallation($installation);
        after_installation:        $result['installation'] = $installation;

        
        $organization = $object->organization;
        $organization = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️OrganizationSimple($organization);
        after_organization:        $result['organization'] = $organization;

        
        $ref = $object->ref;

        if ($ref === null) {
            goto after_ref;
        }
        after_ref:        $result['ref'] = $ref;

        
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

    
    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCodeScanningAlertReopened⚡️Alert(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertReopened\Alert);
        $result = [];
        
        $created_at = $object->created_at;

        if ($created_at === null) {
            goto after_created_at;
        }
        after_created_at:        $result['created_at'] = $created_at;

        
        $dismissed_at = $object->dismissed_at;

        if ($dismissed_at === null) {
            goto after_dismissed_at;
        }
        after_dismissed_at:        $result['dismissed_at'] = $dismissed_at;

        
        $dismissed_by = $object->dismissed_by;

        if ($dismissed_by === null) {
            goto after_dismissed_by;
        }
        after_dismissed_by:        $result['dismissed_by'] = $dismissed_by;

        
        $dismissed_reason = $object->dismissed_reason;

        if ($dismissed_reason === null) {
            goto after_dismissed_reason;
        }
        after_dismissed_reason:        $result['dismissed_reason'] = $dismissed_reason;

        
        $html_url = $object->html_url;

        if ($html_url === null) {
            goto after_html_url;
        }
        after_html_url:        $result['html_url'] = $html_url;

        
        $most_recent_instance = $object->most_recent_instance;

        if ($most_recent_instance === null) {
            goto after_most_recent_instance;
        }
        $most_recent_instance = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCodeScanningAlertAppearedInBranch⚡️Alert⚡️MostRecentInstance($most_recent_instance);
        after_most_recent_instance:        $result['most_recent_instance'] = $most_recent_instance;

        
        $number = $object->number;

        if ($number === null) {
            goto after_number;
        }
        after_number:        $result['number'] = $number;

        
        $rule = $object->rule;

        if ($rule === null) {
            goto after_rule;
        }
        $rule = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCodeScanningAlertClosedByUser⚡️Alert⚡️Rule($rule);
        after_rule:        $result['rule'] = $rule;

        
        $state = $object->state;

        if ($state === null) {
            goto after_state;
        }
        after_state:        $result['state'] = $state;

        
        $tool = $object->tool;

        if ($tool === null) {
            goto after_tool;
        }
        $tool = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCodeScanningAlertClosedByUser⚡️Alert⚡️Tool($tool);
        after_tool:        $result['tool'] = $tool;

        
        $url = $object->url;

        if ($url === null) {
            goto after_url;
        }
        after_url:        $result['url'] = $url;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCodeScanningAlertReopenedByUser(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertReopenedByUser);
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
        $alert = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCodeScanningAlertReopenedByUser⚡️Alert($alert);
        after_alert:        $result['alert'] = $alert;

        
        $commit_oid = $object->commit_oid;

        if ($commit_oid === null) {
            goto after_commit_oid;
        }
        after_commit_oid:        $result['commit_oid'] = $commit_oid;

        
        $enterprise = $object->enterprise;
        $enterprise = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Enterprise($enterprise);
        after_enterprise:        $result['enterprise'] = $enterprise;

        
        $installation = $object->installation;
        $installation = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleInstallation($installation);
        after_installation:        $result['installation'] = $installation;

        
        $organization = $object->organization;
        $organization = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️OrganizationSimple($organization);
        after_organization:        $result['organization'] = $organization;

        
        $ref = $object->ref;

        if ($ref === null) {
            goto after_ref;
        }
        after_ref:        $result['ref'] = $ref;

        
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

    
    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCodeScanningAlertReopenedByUser⚡️Alert(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertReopenedByUser\Alert);
        $result = [];
        
        $created_at = $object->created_at;

        if ($created_at === null) {
            goto after_created_at;
        }
        after_created_at:        $result['created_at'] = $created_at;

        
        $dismissed_at = $object->dismissed_at;

        if ($dismissed_at === null) {
            goto after_dismissed_at;
        }
        after_dismissed_at:        $result['dismissed_at'] = $dismissed_at;

        
        $dismissed_by = $object->dismissed_by;

        if ($dismissed_by === null) {
            goto after_dismissed_by;
        }
        after_dismissed_by:        $result['dismissed_by'] = $dismissed_by;

        
        $dismissed_reason = $object->dismissed_reason;

        if ($dismissed_reason === null) {
            goto after_dismissed_reason;
        }
        after_dismissed_reason:        $result['dismissed_reason'] = $dismissed_reason;

        
        $html_url = $object->html_url;

        if ($html_url === null) {
            goto after_html_url;
        }
        after_html_url:        $result['html_url'] = $html_url;

        
        $most_recent_instance = $object->most_recent_instance;

        if ($most_recent_instance === null) {
            goto after_most_recent_instance;
        }
        $most_recent_instance = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCodeScanningAlertAppearedInBranch⚡️Alert⚡️MostRecentInstance($most_recent_instance);
        after_most_recent_instance:        $result['most_recent_instance'] = $most_recent_instance;

        
        $number = $object->number;

        if ($number === null) {
            goto after_number;
        }
        after_number:        $result['number'] = $number;

        
        $rule = $object->rule;

        if ($rule === null) {
            goto after_rule;
        }
        $rule = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCodeScanningAlertAppearedInBranch⚡️Alert⚡️Rule($rule);
        after_rule:        $result['rule'] = $rule;

        
        $state = $object->state;

        if ($state === null) {
            goto after_state;
        }
        after_state:        $result['state'] = $state;

        
        $tool = $object->tool;

        if ($tool === null) {
            goto after_tool;
        }
        $tool = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCodeScanningAlertAppearedInBranch⚡️Alert⚡️Tool($tool);
        after_tool:        $result['tool'] = $tool;

        
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
