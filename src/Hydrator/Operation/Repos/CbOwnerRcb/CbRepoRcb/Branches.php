<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class Branches implements ObjectMapper
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
            'ApiClients\Client\GitHub\Schema\ShortBranch' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ShortBranch($payload),
                'ApiClients\Client\GitHub\Schema\ShortBranch\Commit' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ShortBranch⚡️Commit($payload),
                'ApiClients\Client\GitHub\Schema\BranchProtection' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchProtection($payload),
                'ApiClients\Client\GitHub\Schema\ProtectedBranchRequiredStatusCheck' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranchRequiredStatusCheck($payload),
                'ApiClients\Client\GitHub\Schema\ProtectedBranchRequiredStatusCheck\Checks' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranchRequiredStatusCheck⚡️Checks($payload),
                'ApiClients\Client\GitHub\Schema\ProtectedBranchAdminEnforced' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranchAdminEnforced($payload),
                'ApiClients\Client\GitHub\Schema\ProtectedBranchPullRequestReview' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranchPullRequestReview($payload),
                'ApiClients\Client\GitHub\Schema\ProtectedBranchPullRequestReview\DismissalRestrictions' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranchPullRequestReview⚡️DismissalRestrictions($payload),
                'ApiClients\Client\GitHub\Schema\SimpleUser' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($payload),
                'ApiClients\Client\GitHub\Schema\Team' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Team($payload),
                'ApiClients\Client\GitHub\Schema\Team\Permissions' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Team⚡️Permissions($payload),
                'ApiClients\Client\GitHub\Schema\TeamSimple' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️TeamSimple($payload),
                'ApiClients\Client\GitHub\Schema\Integration' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Integration($payload),
                'ApiClients\Client\GitHub\Schema\Integration\Permissions' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Integration⚡️Permissions($payload),
                'ApiClients\Client\GitHub\Schema\ProtectedBranchPullRequestReview\BypassPullRequestAllowances' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranchPullRequestReview⚡️BypassPullRequestAllowances($payload),
                'ApiClients\Client\GitHub\Schema\BranchRestrictionPolicy' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchRestrictionPolicy($payload),
                'ApiClients\Client\GitHub\Schema\Repository\TemplateRepository\Owner' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Repository⚡️TemplateRepository⚡️Owner($payload),
                'ApiClients\Client\GitHub\Schema\BranchRestrictionPolicy\Teams' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchRestrictionPolicy⚡️Teams($payload),
                'ApiClients\Client\GitHub\Schema\BranchRestrictionPolicy\Apps' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchRestrictionPolicy⚡️Apps($payload),
                'ApiClients\Client\GitHub\Schema\BranchRestrictionPolicy\Apps\Owner' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchRestrictionPolicy⚡️Apps⚡️Owner($payload),
                'ApiClients\Client\GitHub\Schema\BranchRestrictionPolicy\Apps\Permissions' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchRestrictionPolicy⚡️Apps⚡️Permissions($payload),
                'ApiClients\Client\GitHub\Schema\BranchProtection\RequiredLinearHistory' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchProtection⚡️RequiredLinearHistory($payload),
                'ApiClients\Client\GitHub\Schema\BranchProtection\RequiredSignatures' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchProtection⚡️RequiredSignatures($payload),
                'ApiClients\Client\GitHub\Schema\BranchProtection\LockBranch' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchProtection⚡️LockBranch($payload),
                'ApiClients\Client\GitHub\Schema\BranchProtection\AllowForkSyncing' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchProtection⚡️AllowForkSyncing($payload),
                'ApiClients\Client\GitHub\Schema\BasicError' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BasicError($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ShortBranch(array $payload): \ApiClients\Client\GitHub\Schema\ShortBranch
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

                $value = $payload['commit'] ?? null;
    
                if ($value === null) {
                    $properties['commit'] = null;
                    goto after_commit;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'commit';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ShortBranch⚡️Commit($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['commit'] = $value;
    
                after_commit:

                $value = $payload['protected'] ?? null;
    
                if ($value === null) {
                    $properties['protected'] = null;
                    goto after_protected;
                }

                $properties['protected'] = $value;
    
                after_protected:

                $value = $payload['protection'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'protection';
                    goto after_protection;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'protection';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchProtection($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['protection'] = $value;
    
                after_protection:

                $value = $payload['protection_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'protection_url';
                    goto after_protection_url;
                }

                $properties['protection_url'] = $value;
    
                after_protection_url:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ShortBranch', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\ShortBranch::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\ShortBranch(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ShortBranch', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ShortBranch⚡️Commit(array $payload): \ApiClients\Client\GitHub\Schema\ShortBranch\Commit
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['sha'] ?? null;
    
                if ($value === null) {
                    $properties['sha'] = null;
                    goto after_sha;
                }

                $properties['sha'] = $value;
    
                after_sha:

                $value = $payload['url'] ?? null;
    
                if ($value === null) {
                    $properties['url'] = null;
                    goto after_url;
                }

                $properties['url'] = $value;
    
                after_url:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ShortBranch\Commit', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\ShortBranch\Commit::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\ShortBranch\Commit(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ShortBranch\Commit', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchProtection(array $payload): \ApiClients\Client\GitHub\Schema\BranchProtection
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['url'] ?? null;
    
                if ($value === null) {
                    $properties['url'] = null;
                    goto after_url;
                }

                $properties['url'] = $value;
    
                after_url:

                $value = $payload['enabled'] ?? null;
    
                if ($value === null) {
                    $properties['enabled'] = null;
                    goto after_enabled;
                }

                $properties['enabled'] = $value;
    
                after_enabled:

                $value = $payload['required_status_checks'] ?? null;
    
                if ($value === null) {
                    $properties['required_status_checks'] = null;
                    goto after_required_status_checks;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'required_status_checks';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranchRequiredStatusCheck($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['required_status_checks'] = $value;
    
                after_required_status_checks:

                $value = $payload['enforce_admins'] ?? null;
    
                if ($value === null) {
                    $properties['enforce_admins'] = null;
                    goto after_enforce_admins;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'enforce_admins';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranchAdminEnforced($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['enforce_admins'] = $value;
    
                after_enforce_admins:

                $value = $payload['required_pull_request_reviews'] ?? null;
    
                if ($value === null) {
                    $properties['required_pull_request_reviews'] = null;
                    goto after_required_pull_request_reviews;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'required_pull_request_reviews';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranchPullRequestReview($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['required_pull_request_reviews'] = $value;
    
                after_required_pull_request_reviews:

                $value = $payload['restrictions'] ?? null;
    
                if ($value === null) {
                    $properties['restrictions'] = null;
                    goto after_restrictions;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'restrictions';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchRestrictionPolicy($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['restrictions'] = $value;
    
                after_restrictions:

                $value = $payload['required_linear_history'] ?? null;
    
                if ($value === null) {
                    $properties['required_linear_history'] = null;
                    goto after_required_linear_history;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'required_linear_history';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchProtection⚡️RequiredLinearHistory($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['required_linear_history'] = $value;
    
                after_required_linear_history:

                $value = $payload['allow_force_pushes'] ?? null;
    
                if ($value === null) {
                    $properties['allow_force_pushes'] = null;
                    goto after_allow_force_pushes;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'allow_force_pushes';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchProtection⚡️RequiredLinearHistory($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['allow_force_pushes'] = $value;
    
                after_allow_force_pushes:

                $value = $payload['allow_deletions'] ?? null;
    
                if ($value === null) {
                    $properties['allow_deletions'] = null;
                    goto after_allow_deletions;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'allow_deletions';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchProtection⚡️RequiredLinearHistory($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['allow_deletions'] = $value;
    
                after_allow_deletions:

                $value = $payload['block_creations'] ?? null;
    
                if ($value === null) {
                    $properties['block_creations'] = null;
                    goto after_block_creations;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'block_creations';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchProtection⚡️RequiredLinearHistory($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['block_creations'] = $value;
    
                after_block_creations:

                $value = $payload['required_conversation_resolution'] ?? null;
    
                if ($value === null) {
                    $properties['required_conversation_resolution'] = null;
                    goto after_required_conversation_resolution;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'required_conversation_resolution';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchProtection⚡️RequiredLinearHistory($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['required_conversation_resolution'] = $value;
    
                after_required_conversation_resolution:

                $value = $payload['name'] ?? null;
    
                if ($value === null) {
                    $properties['name'] = null;
                    goto after_name;
                }

                $properties['name'] = $value;
    
                after_name:

                $value = $payload['protection_url'] ?? null;
    
                if ($value === null) {
                    $properties['protection_url'] = null;
                    goto after_protection_url;
                }

                $properties['protection_url'] = $value;
    
                after_protection_url:

                $value = $payload['required_signatures'] ?? null;
    
                if ($value === null) {
                    $properties['required_signatures'] = null;
                    goto after_required_signatures;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'required_signatures';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchProtection⚡️RequiredSignatures($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['required_signatures'] = $value;
    
                after_required_signatures:

                $value = $payload['lock_branch'] ?? null;
    
                if ($value === null) {
                    $properties['lock_branch'] = null;
                    goto after_lock_branch;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'lock_branch';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchProtection⚡️LockBranch($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['lock_branch'] = $value;
    
                after_lock_branch:

                $value = $payload['allow_fork_syncing'] ?? null;
    
                if ($value === null) {
                    $properties['allow_fork_syncing'] = null;
                    goto after_allow_fork_syncing;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'allow_fork_syncing';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchProtection⚡️AllowForkSyncing($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['allow_fork_syncing'] = $value;
    
                after_allow_fork_syncing:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\BranchProtection', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\BranchProtection::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\BranchProtection(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\BranchProtection', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranchRequiredStatusCheck(array $payload): \ApiClients\Client\GitHub\Schema\ProtectedBranchRequiredStatusCheck
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'url';
                    goto after_url;
                }

                $properties['url'] = $value;
    
                after_url:

                $value = $payload['enforcement_level'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'enforcement_level';
                    goto after_enforcement_level;
                }

                $properties['enforcement_level'] = $value;
    
                after_enforcement_level:

                $value = $payload['contexts'] ?? null;
    
                if ($value === null) {
                    $properties['contexts'] = null;
                    goto after_contexts;
                }

                $properties['contexts'] = $value;
    
                after_contexts:

                $value = $payload['checks'] ?? null;
    
                if ($value === null) {
                    $properties['checks'] = null;
                    goto after_checks;
                }

                static $checksCaster1;
    
                if ($checksCaster1 === null) {
                    $checksCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\ProtectedBranchRequiredStatusCheck\\Checks',
));
                }
    
                $value = $checksCaster1->cast($value, $this);

                $properties['checks'] = $value;
    
                after_checks:

                $value = $payload['contexts_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'contexts_url';
                    goto after_contexts_url;
                }

                $properties['contexts_url'] = $value;
    
                after_contexts_url:

                $value = $payload['strict'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'strict';
                    goto after_strict;
                }

                $properties['strict'] = $value;
    
                after_strict:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ProtectedBranchRequiredStatusCheck', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\ProtectedBranchRequiredStatusCheck::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\ProtectedBranchRequiredStatusCheck(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ProtectedBranchRequiredStatusCheck', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranchRequiredStatusCheck⚡️Checks(array $payload): \ApiClients\Client\GitHub\Schema\ProtectedBranchRequiredStatusCheck\Checks
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['context'] ?? null;
    
                if ($value === null) {
                    $properties['context'] = null;
                    goto after_context;
                }

                $properties['context'] = $value;
    
                after_context:

                $value = $payload['app_id'] ?? null;
    
                if ($value === null) {
                    $properties['app_id'] = null;
                    goto after_app_id;
                }

                $properties['app_id'] = $value;
    
                after_app_id:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ProtectedBranchRequiredStatusCheck\Checks', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\ProtectedBranchRequiredStatusCheck\Checks::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\ProtectedBranchRequiredStatusCheck\Checks(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ProtectedBranchRequiredStatusCheck\Checks', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranchAdminEnforced(array $payload): \ApiClients\Client\GitHub\Schema\ProtectedBranchAdminEnforced
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['url'] ?? null;
    
                if ($value === null) {
                    $properties['url'] = null;
                    goto after_url;
                }

                $properties['url'] = $value;
    
                after_url:

                $value = $payload['enabled'] ?? null;
    
                if ($value === null) {
                    $properties['enabled'] = null;
                    goto after_enabled;
                }

                $properties['enabled'] = $value;
    
                after_enabled:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ProtectedBranchAdminEnforced', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\ProtectedBranchAdminEnforced::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\ProtectedBranchAdminEnforced(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ProtectedBranchAdminEnforced', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranchPullRequestReview(array $payload): \ApiClients\Client\GitHub\Schema\ProtectedBranchPullRequestReview
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'url';
                    goto after_url;
                }

                $properties['url'] = $value;
    
                after_url:

                $value = $payload['dismissal_restrictions'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'dismissal_restrictions';
                    goto after_dismissal_restrictions;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'dismissal_restrictions';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranchPullRequestReview⚡️DismissalRestrictions($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['dismissal_restrictions'] = $value;
    
                after_dismissal_restrictions:

                $value = $payload['bypass_pull_request_allowances'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'bypass_pull_request_allowances';
                    goto after_bypass_pull_request_allowances;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'bypass_pull_request_allowances';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranchPullRequestReview⚡️BypassPullRequestAllowances($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['bypass_pull_request_allowances'] = $value;
    
                after_bypass_pull_request_allowances:

                $value = $payload['dismiss_stale_reviews'] ?? null;
    
                if ($value === null) {
                    $properties['dismiss_stale_reviews'] = null;
                    goto after_dismiss_stale_reviews;
                }

                $properties['dismiss_stale_reviews'] = $value;
    
                after_dismiss_stale_reviews:

                $value = $payload['require_code_owner_reviews'] ?? null;
    
                if ($value === null) {
                    $properties['require_code_owner_reviews'] = null;
                    goto after_require_code_owner_reviews;
                }

                $properties['require_code_owner_reviews'] = $value;
    
                after_require_code_owner_reviews:

                $value = $payload['required_approving_review_count'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'required_approving_review_count';
                    goto after_required_approving_review_count;
                }

                $properties['required_approving_review_count'] = $value;
    
                after_required_approving_review_count:

                $value = $payload['require_last_push_approval'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'require_last_push_approval';
                    goto after_require_last_push_approval;
                }

                $properties['require_last_push_approval'] = $value;
    
                after_require_last_push_approval:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ProtectedBranchPullRequestReview', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\ProtectedBranchPullRequestReview::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\ProtectedBranchPullRequestReview(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ProtectedBranchPullRequestReview', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranchPullRequestReview⚡️DismissalRestrictions(array $payload): \ApiClients\Client\GitHub\Schema\ProtectedBranchPullRequestReview\DismissalRestrictions
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['users'] ?? null;
    
                if ($value === null) {
                    $properties['users'] = null;
                    goto after_users;
                }

                static $usersCaster1;
    
                if ($usersCaster1 === null) {
                    $usersCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\SimpleUser',
));
                }
    
                $value = $usersCaster1->cast($value, $this);

                $properties['users'] = $value;
    
                after_users:

                $value = $payload['teams'] ?? null;
    
                if ($value === null) {
                    $properties['teams'] = null;
                    goto after_teams;
                }

                static $teamsCaster1;
    
                if ($teamsCaster1 === null) {
                    $teamsCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\Team',
));
                }
    
                $value = $teamsCaster1->cast($value, $this);

                $properties['teams'] = $value;
    
                after_teams:

                $value = $payload['apps'] ?? null;
    
                if ($value === null) {
                    $properties['apps'] = null;
                    goto after_apps;
                }

                static $appsCaster1;
    
                if ($appsCaster1 === null) {
                    $appsCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\Integration',
));
                }
    
                $value = $appsCaster1->cast($value, $this);

                $properties['apps'] = $value;
    
                after_apps:

                $value = $payload['url'] ?? null;
    
                if ($value === null) {
                    $properties['url'] = null;
                    goto after_url;
                }

                $properties['url'] = $value;
    
                after_url:

                $value = $payload['users_url'] ?? null;
    
                if ($value === null) {
                    $properties['users_url'] = null;
                    goto after_users_url;
                }

                $properties['users_url'] = $value;
    
                after_users_url:

                $value = $payload['teams_url'] ?? null;
    
                if ($value === null) {
                    $properties['teams_url'] = null;
                    goto after_teams_url;
                }

                $properties['teams_url'] = $value;
    
                after_teams_url:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ProtectedBranchPullRequestReview\DismissalRestrictions', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\ProtectedBranchPullRequestReview\DismissalRestrictions::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\ProtectedBranchPullRequestReview\DismissalRestrictions(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ProtectedBranchPullRequestReview\DismissalRestrictions', $exception, stack: $this->hydrationStack);
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

        
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Team(array $payload): \ApiClients\Client\GitHub\Schema\Team
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

                $value = $payload['permissions'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'permissions';
                    goto after_permissions;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'permissions';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Team⚡️Permissions($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['permissions'] = $value;
    
                after_permissions:

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

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Team', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\Team::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\Team(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Team', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Team⚡️Permissions(array $payload): \ApiClients\Client\GitHub\Schema\Team\Permissions
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['pull'] ?? null;
    
                if ($value === null) {
                    $properties['pull'] = null;
                    goto after_pull;
                }

                $properties['pull'] = $value;
    
                after_pull:

                $value = $payload['triage'] ?? null;
    
                if ($value === null) {
                    $properties['triage'] = null;
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
                    $properties['maintain'] = null;
                    goto after_maintain;
                }

                $properties['maintain'] = $value;
    
                after_maintain:

                $value = $payload['admin'] ?? null;
    
                if ($value === null) {
                    $properties['admin'] = null;
                    goto after_admin;
                }

                $properties['admin'] = $value;
    
                after_admin:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Team\Permissions', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\Team\Permissions::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\Team\Permissions(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Team\Permissions', $exception, stack: $this->hydrationStack);
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

        
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Integration(array $payload): \ApiClients\Client\GitHub\Schema\Integration
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

                $value = $payload['slug'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'slug';
                    goto after_slug;
                }

                $properties['slug'] = $value;
    
                after_slug:

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

                $value = $payload['external_url'] ?? null;
    
                if ($value === null) {
                    $properties['external_url'] = null;
                    goto after_external_url;
                }

                $properties['external_url'] = $value;
    
                after_external_url:

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
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Integration⚡️Permissions($value);
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

                $value = $payload['installations_count'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'installations_count';
                    goto after_installations_count;
                }

                $properties['installations_count'] = $value;
    
                after_installations_count:

                $value = $payload['client_id'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'client_id';
                    goto after_client_id;
                }

                $properties['client_id'] = $value;
    
                after_client_id:

                $value = $payload['client_secret'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'client_secret';
                    goto after_client_secret;
                }

                $properties['client_secret'] = $value;
    
                after_client_secret:

                $value = $payload['webhook_secret'] ?? null;
    
                if ($value === null) {
                    $properties['webhook_secret'] = null;
                    goto after_webhook_secret;
                }

                $properties['webhook_secret'] = $value;
    
                after_webhook_secret:

                $value = $payload['pem'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'pem';
                    goto after_pem;
                }

                $properties['pem'] = $value;
    
                after_pem:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Integration', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\Integration::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\Integration(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Integration', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Integration⚡️Permissions(array $payload): \ApiClients\Client\GitHub\Schema\Integration\Permissions
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['issues'] ?? null;
    
                if ($value === null) {
                    $properties['issues'] = null;
                    goto after_issues;
                }

                $properties['issues'] = $value;
    
                after_issues:

                $value = $payload['checks'] ?? null;
    
                if ($value === null) {
                    $properties['checks'] = null;
                    goto after_checks;
                }

                $properties['checks'] = $value;
    
                after_checks:

                $value = $payload['metadata'] ?? null;
    
                if ($value === null) {
                    $properties['metadata'] = null;
                    goto after_metadata;
                }

                $properties['metadata'] = $value;
    
                after_metadata:

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

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Integration\Permissions', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\Integration\Permissions::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\Integration\Permissions(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Integration\Permissions', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranchPullRequestReview⚡️BypassPullRequestAllowances(array $payload): \ApiClients\Client\GitHub\Schema\ProtectedBranchPullRequestReview\BypassPullRequestAllowances
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['users'] ?? null;
    
                if ($value === null) {
                    $properties['users'] = null;
                    goto after_users;
                }

                static $usersCaster1;
    
                if ($usersCaster1 === null) {
                    $usersCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\SimpleUser',
));
                }
    
                $value = $usersCaster1->cast($value, $this);

                $properties['users'] = $value;
    
                after_users:

                $value = $payload['teams'] ?? null;
    
                if ($value === null) {
                    $properties['teams'] = null;
                    goto after_teams;
                }

                static $teamsCaster1;
    
                if ($teamsCaster1 === null) {
                    $teamsCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\Team',
));
                }
    
                $value = $teamsCaster1->cast($value, $this);

                $properties['teams'] = $value;
    
                after_teams:

                $value = $payload['apps'] ?? null;
    
                if ($value === null) {
                    $properties['apps'] = null;
                    goto after_apps;
                }

                static $appsCaster1;
    
                if ($appsCaster1 === null) {
                    $appsCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\Integration',
));
                }
    
                $value = $appsCaster1->cast($value, $this);

                $properties['apps'] = $value;
    
                after_apps:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ProtectedBranchPullRequestReview\BypassPullRequestAllowances', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\ProtectedBranchPullRequestReview\BypassPullRequestAllowances::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\ProtectedBranchPullRequestReview\BypassPullRequestAllowances(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ProtectedBranchPullRequestReview\BypassPullRequestAllowances', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchRestrictionPolicy(array $payload): \ApiClients\Client\GitHub\Schema\BranchRestrictionPolicy
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['url'] ?? null;
    
                if ($value === null) {
                    $properties['url'] = null;
                    goto after_url;
                }

                $properties['url'] = $value;
    
                after_url:

                $value = $payload['users_url'] ?? null;
    
                if ($value === null) {
                    $properties['users_url'] = null;
                    goto after_users_url;
                }

                $properties['users_url'] = $value;
    
                after_users_url:

                $value = $payload['teams_url'] ?? null;
    
                if ($value === null) {
                    $properties['teams_url'] = null;
                    goto after_teams_url;
                }

                $properties['teams_url'] = $value;
    
                after_teams_url:

                $value = $payload['apps_url'] ?? null;
    
                if ($value === null) {
                    $properties['apps_url'] = null;
                    goto after_apps_url;
                }

                $properties['apps_url'] = $value;
    
                after_apps_url:

                $value = $payload['users'] ?? null;
    
                if ($value === null) {
                    $properties['users'] = null;
                    goto after_users;
                }

                static $usersCaster1;
    
                if ($usersCaster1 === null) {
                    $usersCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\Repository\\TemplateRepository\\Owner',
));
                }
    
                $value = $usersCaster1->cast($value, $this);

                $properties['users'] = $value;
    
                after_users:

                $value = $payload['teams'] ?? null;
    
                if ($value === null) {
                    $properties['teams'] = null;
                    goto after_teams;
                }

                static $teamsCaster1;
    
                if ($teamsCaster1 === null) {
                    $teamsCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\BranchRestrictionPolicy\\Teams',
));
                }
    
                $value = $teamsCaster1->cast($value, $this);

                $properties['teams'] = $value;
    
                after_teams:

                $value = $payload['apps'] ?? null;
    
                if ($value === null) {
                    $properties['apps'] = null;
                    goto after_apps;
                }

                static $appsCaster1;
    
                if ($appsCaster1 === null) {
                    $appsCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\BranchRestrictionPolicy\\Apps',
));
                }
    
                $value = $appsCaster1->cast($value, $this);

                $properties['apps'] = $value;
    
                after_apps:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\BranchRestrictionPolicy', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\BranchRestrictionPolicy::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\BranchRestrictionPolicy(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\BranchRestrictionPolicy', $exception, stack: $this->hydrationStack);
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

        
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchRestrictionPolicy⚡️Teams(array $payload): \ApiClients\Client\GitHub\Schema\BranchRestrictionPolicy\Teams
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
                    $properties['privacy'] = null;
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
                    $properties['parent'] = null;
                    goto after_parent;
                }

                $properties['parent'] = $value;
    
                after_parent:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\BranchRestrictionPolicy\Teams', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\BranchRestrictionPolicy\Teams::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\BranchRestrictionPolicy\Teams(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\BranchRestrictionPolicy\Teams', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchRestrictionPolicy⚡️Apps(array $payload): \ApiClients\Client\GitHub\Schema\BranchRestrictionPolicy\Apps
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

                $value = $payload['slug'] ?? null;
    
                if ($value === null) {
                    $properties['slug'] = null;
                    goto after_slug;
                }

                $properties['slug'] = $value;
    
                after_slug:

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
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchRestrictionPolicy⚡️Apps⚡️Owner($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['owner'] = $value;
    
                after_owner:

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

                $value = $payload['external_url'] ?? null;
    
                if ($value === null) {
                    $properties['external_url'] = null;
                    goto after_external_url;
                }

                $properties['external_url'] = $value;
    
                after_external_url:

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
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchRestrictionPolicy⚡️Apps⚡️Permissions($value);
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

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\BranchRestrictionPolicy\Apps', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\BranchRestrictionPolicy\Apps::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\BranchRestrictionPolicy\Apps(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\BranchRestrictionPolicy\Apps', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchRestrictionPolicy⚡️Apps⚡️Owner(array $payload): \ApiClients\Client\GitHub\Schema\BranchRestrictionPolicy\Apps\Owner
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

                $value = $payload['gravatar_id'] ?? null;
    
                if ($value === null) {
                    $properties['gravatar_id'] = null;
                    goto after_gravatar_id;
                }

                $properties['gravatar_id'] = $value;
    
                after_gravatar_id:

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
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\BranchRestrictionPolicy\Apps\Owner', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\BranchRestrictionPolicy\Apps\Owner::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\BranchRestrictionPolicy\Apps\Owner(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\BranchRestrictionPolicy\Apps\Owner', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchRestrictionPolicy⚡️Apps⚡️Permissions(array $payload): \ApiClients\Client\GitHub\Schema\BranchRestrictionPolicy\Apps\Permissions
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['metadata'] ?? null;
    
                if ($value === null) {
                    $properties['metadata'] = null;
                    goto after_metadata;
                }

                $properties['metadata'] = $value;
    
                after_metadata:

                $value = $payload['contents'] ?? null;
    
                if ($value === null) {
                    $properties['contents'] = null;
                    goto after_contents;
                }

                $properties['contents'] = $value;
    
                after_contents:

                $value = $payload['issues'] ?? null;
    
                if ($value === null) {
                    $properties['issues'] = null;
                    goto after_issues;
                }

                $properties['issues'] = $value;
    
                after_issues:

                $value = $payload['single_file'] ?? null;
    
                if ($value === null) {
                    $properties['single_file'] = null;
                    goto after_single_file;
                }

                $properties['single_file'] = $value;
    
                after_single_file:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\BranchRestrictionPolicy\Apps\Permissions', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\BranchRestrictionPolicy\Apps\Permissions::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\BranchRestrictionPolicy\Apps\Permissions(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\BranchRestrictionPolicy\Apps\Permissions', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchProtection⚡️RequiredLinearHistory(array $payload): \ApiClients\Client\GitHub\Schema\BranchProtection\RequiredLinearHistory
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['enabled'] ?? null;
    
                if ($value === null) {
                    $properties['enabled'] = null;
                    goto after_enabled;
                }

                $properties['enabled'] = $value;
    
                after_enabled:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\BranchProtection\RequiredLinearHistory', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\BranchProtection\RequiredLinearHistory::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\BranchProtection\RequiredLinearHistory(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\BranchProtection\RequiredLinearHistory', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchProtection⚡️RequiredSignatures(array $payload): \ApiClients\Client\GitHub\Schema\BranchProtection\RequiredSignatures
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['url'] ?? null;
    
                if ($value === null) {
                    $properties['url'] = null;
                    goto after_url;
                }

                $properties['url'] = $value;
    
                after_url:

                $value = $payload['enabled'] ?? null;
    
                if ($value === null) {
                    $properties['enabled'] = null;
                    goto after_enabled;
                }

                $properties['enabled'] = $value;
    
                after_enabled:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\BranchProtection\RequiredSignatures', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\BranchProtection\RequiredSignatures::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\BranchProtection\RequiredSignatures(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\BranchProtection\RequiredSignatures', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchProtection⚡️LockBranch(array $payload): \ApiClients\Client\GitHub\Schema\BranchProtection\LockBranch
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['enabled'] ?? null;
    
                if ($value === null) {
                    $properties['enabled'] = null;
                    goto after_enabled;
                }

                $properties['enabled'] = $value;
    
                after_enabled:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\BranchProtection\LockBranch', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\BranchProtection\LockBranch::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\BranchProtection\LockBranch(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\BranchProtection\LockBranch', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchProtection⚡️AllowForkSyncing(array $payload): \ApiClients\Client\GitHub\Schema\BranchProtection\AllowForkSyncing
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['enabled'] ?? null;
    
                if ($value === null) {
                    $properties['enabled'] = null;
                    goto after_enabled;
                }

                $properties['enabled'] = $value;
    
                after_enabled:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\BranchProtection\AllowForkSyncing', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\BranchProtection\AllowForkSyncing::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\BranchProtection\AllowForkSyncing(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\BranchProtection\AllowForkSyncing', $exception, stack: $this->hydrationStack);
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
                'ApiClients\Client\GitHub\Schema\ShortBranch' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ShortBranch($object),
                'ApiClients\Client\GitHub\Schema\ShortBranch\Commit' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ShortBranch⚡️Commit($object),
                'ApiClients\Client\GitHub\Schema\BranchProtection' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchProtection($object),
                'ApiClients\Client\GitHub\Schema\ProtectedBranchRequiredStatusCheck' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranchRequiredStatusCheck($object),
                'ApiClients\Client\GitHub\Schema\ProtectedBranchRequiredStatusCheck\Checks' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranchRequiredStatusCheck⚡️Checks($object),
                'ApiClients\Client\GitHub\Schema\ProtectedBranchAdminEnforced' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranchAdminEnforced($object),
                'ApiClients\Client\GitHub\Schema\ProtectedBranchPullRequestReview' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranchPullRequestReview($object),
                'ApiClients\Client\GitHub\Schema\ProtectedBranchPullRequestReview\DismissalRestrictions' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranchPullRequestReview⚡️DismissalRestrictions($object),
                'ApiClients\Client\GitHub\Schema\SimpleUser' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($object),
                'ApiClients\Client\GitHub\Schema\Team' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Team($object),
                'ApiClients\Client\GitHub\Schema\Team\Permissions' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Team⚡️Permissions($object),
                'ApiClients\Client\GitHub\Schema\TeamSimple' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️TeamSimple($object),
                'ApiClients\Client\GitHub\Schema\Integration' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Integration($object),
                'ApiClients\Client\GitHub\Schema\Integration\Permissions' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Integration⚡️Permissions($object),
                'ApiClients\Client\GitHub\Schema\ProtectedBranchPullRequestReview\BypassPullRequestAllowances' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranchPullRequestReview⚡️BypassPullRequestAllowances($object),
                'ApiClients\Client\GitHub\Schema\BranchRestrictionPolicy' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchRestrictionPolicy($object),
                'ApiClients\Client\GitHub\Schema\Repository\TemplateRepository\Owner' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Repository⚡️TemplateRepository⚡️Owner($object),
                'ApiClients\Client\GitHub\Schema\BranchRestrictionPolicy\Teams' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchRestrictionPolicy⚡️Teams($object),
                'ApiClients\Client\GitHub\Schema\BranchRestrictionPolicy\Apps' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchRestrictionPolicy⚡️Apps($object),
                'ApiClients\Client\GitHub\Schema\BranchRestrictionPolicy\Apps\Owner' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchRestrictionPolicy⚡️Apps⚡️Owner($object),
                'ApiClients\Client\GitHub\Schema\BranchRestrictionPolicy\Apps\Permissions' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchRestrictionPolicy⚡️Apps⚡️Permissions($object),
                'ApiClients\Client\GitHub\Schema\BranchProtection\RequiredLinearHistory' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchProtection⚡️RequiredLinearHistory($object),
                'ApiClients\Client\GitHub\Schema\BranchProtection\RequiredSignatures' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchProtection⚡️RequiredSignatures($object),
                'ApiClients\Client\GitHub\Schema\BranchProtection\LockBranch' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchProtection⚡️LockBranch($object),
                'ApiClients\Client\GitHub\Schema\BranchProtection\AllowForkSyncing' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchProtection⚡️AllowForkSyncing($object),
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

    
    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ShortBranch(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\ShortBranch);
        $result = [];
        
        $name = $object->name;

        if ($name === null) {
            goto after_name;
        }
        after_name:        $result['name'] = $name;

        
        $commit = $object->commit;

        if ($commit === null) {
            goto after_commit;
        }
        $commit = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ShortBranch⚡️Commit($commit);
        after_commit:        $result['commit'] = $commit;

        
        $protected = $object->protected;

        if ($protected === null) {
            goto after_protected;
        }
        after_protected:        $result['protected'] = $protected;

        
        $protection = $object->protection;
        $protection = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchProtection($protection);
        after_protection:        $result['protection'] = $protection;

        
        $protection_url = $object->protection_url;
        after_protection_url:        $result['protection_url'] = $protection_url;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ShortBranch⚡️Commit(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\ShortBranch\Commit);
        $result = [];
        
        $sha = $object->sha;

        if ($sha === null) {
            goto after_sha;
        }
        after_sha:        $result['sha'] = $sha;

        
        $url = $object->url;

        if ($url === null) {
            goto after_url;
        }
        after_url:        $result['url'] = $url;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchProtection(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\BranchProtection);
        $result = [];
        
        $url = $object->url;

        if ($url === null) {
            goto after_url;
        }
        after_url:        $result['url'] = $url;

        
        $enabled = $object->enabled;

        if ($enabled === null) {
            goto after_enabled;
        }
        after_enabled:        $result['enabled'] = $enabled;

        
        $required_status_checks = $object->required_status_checks;

        if ($required_status_checks === null) {
            goto after_required_status_checks;
        }
        $required_status_checks = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranchRequiredStatusCheck($required_status_checks);
        after_required_status_checks:        $result['required_status_checks'] = $required_status_checks;

        
        $enforce_admins = $object->enforce_admins;

        if ($enforce_admins === null) {
            goto after_enforce_admins;
        }
        $enforce_admins = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranchAdminEnforced($enforce_admins);
        after_enforce_admins:        $result['enforce_admins'] = $enforce_admins;

        
        $required_pull_request_reviews = $object->required_pull_request_reviews;

        if ($required_pull_request_reviews === null) {
            goto after_required_pull_request_reviews;
        }
        $required_pull_request_reviews = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranchPullRequestReview($required_pull_request_reviews);
        after_required_pull_request_reviews:        $result['required_pull_request_reviews'] = $required_pull_request_reviews;

        
        $restrictions = $object->restrictions;

        if ($restrictions === null) {
            goto after_restrictions;
        }
        $restrictions = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchRestrictionPolicy($restrictions);
        after_restrictions:        $result['restrictions'] = $restrictions;

        
        $required_linear_history = $object->required_linear_history;

        if ($required_linear_history === null) {
            goto after_required_linear_history;
        }
        $required_linear_history = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchProtection⚡️RequiredLinearHistory($required_linear_history);
        after_required_linear_history:        $result['required_linear_history'] = $required_linear_history;

        
        $allow_force_pushes = $object->allow_force_pushes;

        if ($allow_force_pushes === null) {
            goto after_allow_force_pushes;
        }
        $allow_force_pushes = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchProtection⚡️RequiredLinearHistory($allow_force_pushes);
        after_allow_force_pushes:        $result['allow_force_pushes'] = $allow_force_pushes;

        
        $allow_deletions = $object->allow_deletions;

        if ($allow_deletions === null) {
            goto after_allow_deletions;
        }
        $allow_deletions = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchProtection⚡️RequiredLinearHistory($allow_deletions);
        after_allow_deletions:        $result['allow_deletions'] = $allow_deletions;

        
        $block_creations = $object->block_creations;

        if ($block_creations === null) {
            goto after_block_creations;
        }
        $block_creations = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchProtection⚡️RequiredLinearHistory($block_creations);
        after_block_creations:        $result['block_creations'] = $block_creations;

        
        $required_conversation_resolution = $object->required_conversation_resolution;

        if ($required_conversation_resolution === null) {
            goto after_required_conversation_resolution;
        }
        $required_conversation_resolution = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchProtection⚡️RequiredLinearHistory($required_conversation_resolution);
        after_required_conversation_resolution:        $result['required_conversation_resolution'] = $required_conversation_resolution;

        
        $name = $object->name;

        if ($name === null) {
            goto after_name;
        }
        after_name:        $result['name'] = $name;

        
        $protection_url = $object->protection_url;

        if ($protection_url === null) {
            goto after_protection_url;
        }
        after_protection_url:        $result['protection_url'] = $protection_url;

        
        $required_signatures = $object->required_signatures;

        if ($required_signatures === null) {
            goto after_required_signatures;
        }
        $required_signatures = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchProtection⚡️RequiredSignatures($required_signatures);
        after_required_signatures:        $result['required_signatures'] = $required_signatures;

        
        $lock_branch = $object->lock_branch;

        if ($lock_branch === null) {
            goto after_lock_branch;
        }
        $lock_branch = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchProtection⚡️LockBranch($lock_branch);
        after_lock_branch:        $result['lock_branch'] = $lock_branch;

        
        $allow_fork_syncing = $object->allow_fork_syncing;

        if ($allow_fork_syncing === null) {
            goto after_allow_fork_syncing;
        }
        $allow_fork_syncing = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchProtection⚡️AllowForkSyncing($allow_fork_syncing);
        after_allow_fork_syncing:        $result['allow_fork_syncing'] = $allow_fork_syncing;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranchRequiredStatusCheck(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\ProtectedBranchRequiredStatusCheck);
        $result = [];
        
        $url = $object->url;
        after_url:        $result['url'] = $url;

        
        $enforcement_level = $object->enforcement_level;
        after_enforcement_level:        $result['enforcement_level'] = $enforcement_level;

        
        $contexts = $object->contexts;

        if ($contexts === null) {
            goto after_contexts;
        }
        static $contextsSerializer0;

        if ($contextsSerializer0 === null) {
            $contextsSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $contexts = $contextsSerializer0->serialize($contexts, $this);
        after_contexts:        $result['contexts'] = $contexts;

        
        $checks = $object->checks;

        if ($checks === null) {
            goto after_checks;
        }
        static $checksSerializer0;

        if ($checksSerializer0 === null) {
            $checksSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\ProtectedBranchRequiredStatusCheck\\Checks',
));
        }
        
        $checks = $checksSerializer0->serialize($checks, $this);
        after_checks:        $result['checks'] = $checks;

        
        $contexts_url = $object->contexts_url;
        after_contexts_url:        $result['contexts_url'] = $contexts_url;

        
        $strict = $object->strict;
        after_strict:        $result['strict'] = $strict;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranchRequiredStatusCheck⚡️Checks(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\ProtectedBranchRequiredStatusCheck\Checks);
        $result = [];
        
        $context = $object->context;

        if ($context === null) {
            goto after_context;
        }
        after_context:        $result['context'] = $context;

        
        $app_id = $object->app_id;

        if ($app_id === null) {
            goto after_app_id;
        }
        after_app_id:        $result['app_id'] = $app_id;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranchAdminEnforced(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\ProtectedBranchAdminEnforced);
        $result = [];
        
        $url = $object->url;

        if ($url === null) {
            goto after_url;
        }
        after_url:        $result['url'] = $url;

        
        $enabled = $object->enabled;

        if ($enabled === null) {
            goto after_enabled;
        }
        after_enabled:        $result['enabled'] = $enabled;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranchPullRequestReview(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\ProtectedBranchPullRequestReview);
        $result = [];
        
        $url = $object->url;
        after_url:        $result['url'] = $url;

        
        $dismissal_restrictions = $object->dismissal_restrictions;
        $dismissal_restrictions = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranchPullRequestReview⚡️DismissalRestrictions($dismissal_restrictions);
        after_dismissal_restrictions:        $result['dismissal_restrictions'] = $dismissal_restrictions;

        
        $bypass_pull_request_allowances = $object->bypass_pull_request_allowances;
        $bypass_pull_request_allowances = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranchPullRequestReview⚡️BypassPullRequestAllowances($bypass_pull_request_allowances);
        after_bypass_pull_request_allowances:        $result['bypass_pull_request_allowances'] = $bypass_pull_request_allowances;

        
        $dismiss_stale_reviews = $object->dismiss_stale_reviews;

        if ($dismiss_stale_reviews === null) {
            goto after_dismiss_stale_reviews;
        }
        after_dismiss_stale_reviews:        $result['dismiss_stale_reviews'] = $dismiss_stale_reviews;

        
        $require_code_owner_reviews = $object->require_code_owner_reviews;

        if ($require_code_owner_reviews === null) {
            goto after_require_code_owner_reviews;
        }
        after_require_code_owner_reviews:        $result['require_code_owner_reviews'] = $require_code_owner_reviews;

        
        $required_approving_review_count = $object->required_approving_review_count;
        after_required_approving_review_count:        $result['required_approving_review_count'] = $required_approving_review_count;

        
        $require_last_push_approval = $object->require_last_push_approval;
        after_require_last_push_approval:        $result['require_last_push_approval'] = $require_last_push_approval;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranchPullRequestReview⚡️DismissalRestrictions(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\ProtectedBranchPullRequestReview\DismissalRestrictions);
        $result = [];
        
        $users = $object->users;

        if ($users === null) {
            goto after_users;
        }
        static $usersSerializer0;

        if ($usersSerializer0 === null) {
            $usersSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\SimpleUser',
));
        }
        
        $users = $usersSerializer0->serialize($users, $this);
        after_users:        $result['users'] = $users;

        
        $teams = $object->teams;

        if ($teams === null) {
            goto after_teams;
        }
        static $teamsSerializer0;

        if ($teamsSerializer0 === null) {
            $teamsSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\Team',
));
        }
        
        $teams = $teamsSerializer0->serialize($teams, $this);
        after_teams:        $result['teams'] = $teams;

        
        $apps = $object->apps;

        if ($apps === null) {
            goto after_apps;
        }
        static $appsSerializer0;

        if ($appsSerializer0 === null) {
            $appsSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\Integration',
));
        }
        
        $apps = $appsSerializer0->serialize($apps, $this);
        after_apps:        $result['apps'] = $apps;

        
        $url = $object->url;

        if ($url === null) {
            goto after_url;
        }
        after_url:        $result['url'] = $url;

        
        $users_url = $object->users_url;

        if ($users_url === null) {
            goto after_users_url;
        }
        after_users_url:        $result['users_url'] = $users_url;

        
        $teams_url = $object->teams_url;

        if ($teams_url === null) {
            goto after_teams_url;
        }
        after_teams_url:        $result['teams_url'] = $teams_url;


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

    
    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Team(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\Team);
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

        
        $permissions = $object->permissions;
        $permissions = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Team⚡️Permissions($permissions);
        after_permissions:        $result['permissions'] = $permissions;

        
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
        $parent = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️TeamSimple($parent);
        after_parent:        $result['parent'] = $parent;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Team⚡️Permissions(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\Team\Permissions);
        $result = [];
        
        $pull = $object->pull;

        if ($pull === null) {
            goto after_pull;
        }
        after_pull:        $result['pull'] = $pull;

        
        $triage = $object->triage;

        if ($triage === null) {
            goto after_triage;
        }
        after_triage:        $result['triage'] = $triage;

        
        $push = $object->push;

        if ($push === null) {
            goto after_push;
        }
        after_push:        $result['push'] = $push;

        
        $maintain = $object->maintain;

        if ($maintain === null) {
            goto after_maintain;
        }
        after_maintain:        $result['maintain'] = $maintain;

        
        $admin = $object->admin;

        if ($admin === null) {
            goto after_admin;
        }
        after_admin:        $result['admin'] = $admin;


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

    
    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Integration(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\Integration);
        $result = [];
        
        $id = $object->id;

        if ($id === null) {
            goto after_id;
        }
        after_id:        $result['id'] = $id;

        
        $slug = $object->slug;
        after_slug:        $result['slug'] = $slug;

        
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

        
        $external_url = $object->external_url;

        if ($external_url === null) {
            goto after_external_url;
        }
        after_external_url:        $result['external_url'] = $external_url;

        
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

        
        $updated_at = $object->updated_at;

        if ($updated_at === null) {
            goto after_updated_at;
        }
        after_updated_at:        $result['updated_at'] = $updated_at;

        
        $permissions = $object->permissions;

        if ($permissions === null) {
            goto after_permissions;
        }
        $permissions = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Integration⚡️Permissions($permissions);
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

        
        $installations_count = $object->installations_count;
        after_installations_count:        $result['installations_count'] = $installations_count;

        
        $client_id = $object->client_id;
        after_client_id:        $result['client_id'] = $client_id;

        
        $client_secret = $object->client_secret;
        after_client_secret:        $result['client_secret'] = $client_secret;

        
        $webhook_secret = $object->webhook_secret;

        if ($webhook_secret === null) {
            goto after_webhook_secret;
        }
        after_webhook_secret:        $result['webhook_secret'] = $webhook_secret;

        
        $pem = $object->pem;
        after_pem:        $result['pem'] = $pem;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Integration⚡️Permissions(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\Integration\Permissions);
        $result = [];
        
        $issues = $object->issues;

        if ($issues === null) {
            goto after_issues;
        }
        after_issues:        $result['issues'] = $issues;

        
        $checks = $object->checks;

        if ($checks === null) {
            goto after_checks;
        }
        after_checks:        $result['checks'] = $checks;

        
        $metadata = $object->metadata;

        if ($metadata === null) {
            goto after_metadata;
        }
        after_metadata:        $result['metadata'] = $metadata;

        
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


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranchPullRequestReview⚡️BypassPullRequestAllowances(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\ProtectedBranchPullRequestReview\BypassPullRequestAllowances);
        $result = [];
        
        $users = $object->users;

        if ($users === null) {
            goto after_users;
        }
        static $usersSerializer0;

        if ($usersSerializer0 === null) {
            $usersSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\SimpleUser',
));
        }
        
        $users = $usersSerializer0->serialize($users, $this);
        after_users:        $result['users'] = $users;

        
        $teams = $object->teams;

        if ($teams === null) {
            goto after_teams;
        }
        static $teamsSerializer0;

        if ($teamsSerializer0 === null) {
            $teamsSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\Team',
));
        }
        
        $teams = $teamsSerializer0->serialize($teams, $this);
        after_teams:        $result['teams'] = $teams;

        
        $apps = $object->apps;

        if ($apps === null) {
            goto after_apps;
        }
        static $appsSerializer0;

        if ($appsSerializer0 === null) {
            $appsSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\Integration',
));
        }
        
        $apps = $appsSerializer0->serialize($apps, $this);
        after_apps:        $result['apps'] = $apps;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchRestrictionPolicy(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\BranchRestrictionPolicy);
        $result = [];
        
        $url = $object->url;

        if ($url === null) {
            goto after_url;
        }
        after_url:        $result['url'] = $url;

        
        $users_url = $object->users_url;

        if ($users_url === null) {
            goto after_users_url;
        }
        after_users_url:        $result['users_url'] = $users_url;

        
        $teams_url = $object->teams_url;

        if ($teams_url === null) {
            goto after_teams_url;
        }
        after_teams_url:        $result['teams_url'] = $teams_url;

        
        $apps_url = $object->apps_url;

        if ($apps_url === null) {
            goto after_apps_url;
        }
        after_apps_url:        $result['apps_url'] = $apps_url;

        
        $users = $object->users;

        if ($users === null) {
            goto after_users;
        }
        static $usersSerializer0;

        if ($usersSerializer0 === null) {
            $usersSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\Repository\\TemplateRepository\\Owner',
));
        }
        
        $users = $usersSerializer0->serialize($users, $this);
        after_users:        $result['users'] = $users;

        
        $teams = $object->teams;

        if ($teams === null) {
            goto after_teams;
        }
        static $teamsSerializer0;

        if ($teamsSerializer0 === null) {
            $teamsSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\BranchRestrictionPolicy\\Teams',
));
        }
        
        $teams = $teamsSerializer0->serialize($teams, $this);
        after_teams:        $result['teams'] = $teams;

        
        $apps = $object->apps;

        if ($apps === null) {
            goto after_apps;
        }
        static $appsSerializer0;

        if ($appsSerializer0 === null) {
            $appsSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\BranchRestrictionPolicy\\Apps',
));
        }
        
        $apps = $appsSerializer0->serialize($apps, $this);
        after_apps:        $result['apps'] = $apps;


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

    
    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchRestrictionPolicy⚡️Teams(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\BranchRestrictionPolicy\Teams);
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

        if ($privacy === null) {
            goto after_privacy;
        }
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


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchRestrictionPolicy⚡️Apps(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\BranchRestrictionPolicy\Apps);
        $result = [];
        
        $id = $object->id;

        if ($id === null) {
            goto after_id;
        }
        after_id:        $result['id'] = $id;

        
        $slug = $object->slug;

        if ($slug === null) {
            goto after_slug;
        }
        after_slug:        $result['slug'] = $slug;

        
        $node_id = $object->node_id;

        if ($node_id === null) {
            goto after_node_id;
        }
        after_node_id:        $result['node_id'] = $node_id;

        
        $owner = $object->owner;

        if ($owner === null) {
            goto after_owner;
        }
        $owner = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchRestrictionPolicy⚡️Apps⚡️Owner($owner);
        after_owner:        $result['owner'] = $owner;

        
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

        
        $external_url = $object->external_url;

        if ($external_url === null) {
            goto after_external_url;
        }
        after_external_url:        $result['external_url'] = $external_url;

        
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

        
        $updated_at = $object->updated_at;

        if ($updated_at === null) {
            goto after_updated_at;
        }
        after_updated_at:        $result['updated_at'] = $updated_at;

        
        $permissions = $object->permissions;

        if ($permissions === null) {
            goto after_permissions;
        }
        $permissions = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchRestrictionPolicy⚡️Apps⚡️Permissions($permissions);
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


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchRestrictionPolicy⚡️Apps⚡️Owner(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\BranchRestrictionPolicy\Apps\Owner);
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

        
        $gravatar_id = $object->gravatar_id;

        if ($gravatar_id === null) {
            goto after_gravatar_id;
        }
        after_gravatar_id:        $result['gravatar_id'] = $gravatar_id;

        
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

    
    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchRestrictionPolicy⚡️Apps⚡️Permissions(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\BranchRestrictionPolicy\Apps\Permissions);
        $result = [];
        
        $metadata = $object->metadata;

        if ($metadata === null) {
            goto after_metadata;
        }
        after_metadata:        $result['metadata'] = $metadata;

        
        $contents = $object->contents;

        if ($contents === null) {
            goto after_contents;
        }
        after_contents:        $result['contents'] = $contents;

        
        $issues = $object->issues;

        if ($issues === null) {
            goto after_issues;
        }
        after_issues:        $result['issues'] = $issues;

        
        $single_file = $object->single_file;

        if ($single_file === null) {
            goto after_single_file;
        }
        after_single_file:        $result['single_file'] = $single_file;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchProtection⚡️RequiredLinearHistory(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\BranchProtection\RequiredLinearHistory);
        $result = [];
        
        $enabled = $object->enabled;

        if ($enabled === null) {
            goto after_enabled;
        }
        after_enabled:        $result['enabled'] = $enabled;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchProtection⚡️RequiredSignatures(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\BranchProtection\RequiredSignatures);
        $result = [];
        
        $url = $object->url;

        if ($url === null) {
            goto after_url;
        }
        after_url:        $result['url'] = $url;

        
        $enabled = $object->enabled;

        if ($enabled === null) {
            goto after_enabled;
        }
        after_enabled:        $result['enabled'] = $enabled;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchProtection⚡️LockBranch(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\BranchProtection\LockBranch);
        $result = [];
        
        $enabled = $object->enabled;

        if ($enabled === null) {
            goto after_enabled;
        }
        after_enabled:        $result['enabled'] = $enabled;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchProtection⚡️AllowForkSyncing(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\BranchProtection\AllowForkSyncing);
        $result = [];
        
        $enabled = $object->enabled;

        if ($enabled === null) {
            goto after_enabled;
        }
        after_enabled:        $result['enabled'] = $enabled;


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
