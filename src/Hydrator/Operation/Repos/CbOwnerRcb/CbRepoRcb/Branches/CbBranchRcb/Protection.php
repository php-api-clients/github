<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class Protection implements ObjectMapper
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
            'ApiClients\Client\Github\Schema\BranchProtection' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️BranchProtection($payload),
                'ApiClients\Client\Github\Schema\BasicError' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️BasicError($payload),
                'ApiClients\Client\Github\Schema\ProtectedBranch' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️ProtectedBranch($payload),
                'ApiClients\Client\Github\Schema\ValidationErrorSimple' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️ValidationErrorSimple($payload),
                'ApiClients\Client\Github\Schema\ProtectedBranchRequiredStatusCheck' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️ProtectedBranchRequiredStatusCheck($payload),
                'ApiClients\Client\Github\Schema\ProtectedBranchAdminEnforced' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️ProtectedBranchAdminEnforced($payload),
                'ApiClients\Client\Github\Schema\ProtectedBranchPullRequestReview' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️ProtectedBranchPullRequestReview($payload),
                'ApiClients\Client\Github\Schema\BranchRestrictionPolicy' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️BranchRestrictionPolicy($payload),
                'ApiClients\Client\Github\Schema\BranchProtection\RequiredLinearHistory' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️BranchProtection⚡️RequiredLinearHistory($payload),
                'ApiClients\Client\Github\Schema\BranchProtection\RequiredSignatures' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️BranchProtection⚡️RequiredSignatures($payload),
                'ApiClients\Client\Github\Schema\BranchProtection\LockBranch' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️BranchProtection⚡️LockBranch($payload),
                'ApiClients\Client\Github\Schema\BranchProtection\AllowForkSyncing' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️BranchProtection⚡️AllowForkSyncing($payload),
                'ApiClients\Client\Github\Schema\StatusCheckPolicy' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️StatusCheckPolicy($payload),
                'ApiClients\Client\Github\Schema\ProtectedBranch\RequiredPullRequestReviews' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️ProtectedBranch⚡️RequiredPullRequestReviews($payload),
                'ApiClients\Client\Github\Schema\ProtectedBranch\EnforceAdmins' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️ProtectedBranch⚡️EnforceAdmins($payload),
                'ApiClients\Client\Github\Schema\ProtectedBranch\RequiredLinearHistory' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️ProtectedBranch⚡️RequiredLinearHistory($payload),
                'ApiClients\Client\Github\Schema\ProtectedBranch\RequiredConversationResolution' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️ProtectedBranch⚡️RequiredConversationResolution($payload),
                'ApiClients\Client\Github\Schema\ProtectedBranch\LockBranch' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️ProtectedBranch⚡️LockBranch($payload),
                'ApiClients\Client\Github\Schema\ProtectedBranch\AllowForkSyncing' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️ProtectedBranch⚡️AllowForkSyncing($payload),
                'ApiClients\Client\Github\Schema\ProtectedBranchPullRequestReview\DismissalRestrictions' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️ProtectedBranchPullRequestReview⚡️DismissalRestrictions($payload),
                'ApiClients\Client\Github\Schema\ProtectedBranchPullRequestReview\BypassPullRequestAllowances' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️ProtectedBranchPullRequestReview⚡️BypassPullRequestAllowances($payload),
                'ApiClients\Client\Github\Schema\ProtectedBranch\RequiredPullRequestReviews\DismissalRestrictions' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️ProtectedBranch⚡️RequiredPullRequestReviews⚡️DismissalRestrictions($payload),
                'ApiClients\Client\Github\Schema\ProtectedBranch\RequiredPullRequestReviews\BypassPullRequestAllowances' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️ProtectedBranch⚡️RequiredPullRequestReviews⚡️BypassPullRequestAllowances($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
        private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️BranchProtection(array $payload): \ApiClients\Client\Github\Schema\BranchProtection
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

                $value = $payload['enabled'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'enabled';
                    goto after_enabled;
                }

                $properties['enabled'] = $value;
    
                after_enabled:

                $value = $payload['required_status_checks'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'required_status_checks';
                    goto after_required_status_checks;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'required_status_checks';
                        $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️ProtectedBranchRequiredStatusCheck($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['required_status_checks'] = $value;
    
                after_required_status_checks:

                $value = $payload['enforce_admins'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'enforce_admins';
                    goto after_enforce_admins;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'enforce_admins';
                        $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️ProtectedBranchAdminEnforced($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['enforce_admins'] = $value;
    
                after_enforce_admins:

                $value = $payload['required_pull_request_reviews'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'required_pull_request_reviews';
                    goto after_required_pull_request_reviews;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'required_pull_request_reviews';
                        $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️ProtectedBranchPullRequestReview($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['required_pull_request_reviews'] = $value;
    
                after_required_pull_request_reviews:

                $value = $payload['restrictions'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'restrictions';
                    goto after_restrictions;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'restrictions';
                        $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️BranchRestrictionPolicy($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['restrictions'] = $value;
    
                after_restrictions:

                $value = $payload['required_linear_history'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'required_linear_history';
                    goto after_required_linear_history;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'required_linear_history';
                        $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️BranchProtection⚡️RequiredLinearHistory($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['required_linear_history'] = $value;
    
                after_required_linear_history:

                $value = $payload['allow_force_pushes'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'allow_force_pushes';
                    goto after_allow_force_pushes;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'allow_force_pushes';
                        $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️BranchProtection⚡️RequiredLinearHistory($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['allow_force_pushes'] = $value;
    
                after_allow_force_pushes:

                $value = $payload['allow_deletions'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'allow_deletions';
                    goto after_allow_deletions;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'allow_deletions';
                        $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️BranchProtection⚡️RequiredLinearHistory($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['allow_deletions'] = $value;
    
                after_allow_deletions:

                $value = $payload['block_creations'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'block_creations';
                    goto after_block_creations;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'block_creations';
                        $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️BranchProtection⚡️RequiredLinearHistory($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['block_creations'] = $value;
    
                after_block_creations:

                $value = $payload['required_conversation_resolution'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'required_conversation_resolution';
                    goto after_required_conversation_resolution;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'required_conversation_resolution';
                        $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️BranchProtection⚡️RequiredLinearHistory($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['required_conversation_resolution'] = $value;
    
                after_required_conversation_resolution:

                $value = $payload['name'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'name';
                    goto after_name;
                }

                $properties['name'] = $value;
    
                after_name:

                $value = $payload['protection_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'protection_url';
                    goto after_protection_url;
                }

                $properties['protection_url'] = $value;
    
                after_protection_url:

                $value = $payload['required_signatures'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'required_signatures';
                    goto after_required_signatures;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'required_signatures';
                        $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️BranchProtection⚡️RequiredSignatures($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['required_signatures'] = $value;
    
                after_required_signatures:

                $value = $payload['lock_branch'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'lock_branch';
                    goto after_lock_branch;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'lock_branch';
                        $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️BranchProtection⚡️LockBranch($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['lock_branch'] = $value;
    
                after_lock_branch:

                $value = $payload['allow_fork_syncing'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'allow_fork_syncing';
                    goto after_allow_fork_syncing;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'allow_fork_syncing';
                        $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️BranchProtection⚡️AllowForkSyncing($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['allow_fork_syncing'] = $value;
    
                after_allow_fork_syncing:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\BranchProtection', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\BranchProtection::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\Github\Schema\BranchProtection(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\BranchProtection', $exception, stack: $this->hydrationStack);
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

        
        private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️ProtectedBranch(array $payload): \ApiClients\Client\Github\Schema\ProtectedBranch
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

                $value = $payload['required_status_checks'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'required_status_checks';
                    goto after_required_status_checks;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'required_status_checks';
                        $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️StatusCheckPolicy($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['required_status_checks'] = $value;
    
                after_required_status_checks:

                $value = $payload['required_pull_request_reviews'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'required_pull_request_reviews';
                    goto after_required_pull_request_reviews;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'required_pull_request_reviews';
                        $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️ProtectedBranch⚡️RequiredPullRequestReviews($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['required_pull_request_reviews'] = $value;
    
                after_required_pull_request_reviews:

                $value = $payload['required_signatures'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'required_signatures';
                    goto after_required_signatures;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'required_signatures';
                        $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️BranchProtection⚡️RequiredSignatures($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['required_signatures'] = $value;
    
                after_required_signatures:

                $value = $payload['enforce_admins'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'enforce_admins';
                    goto after_enforce_admins;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'enforce_admins';
                        $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️ProtectedBranch⚡️EnforceAdmins($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['enforce_admins'] = $value;
    
                after_enforce_admins:

                $value = $payload['required_linear_history'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'required_linear_history';
                    goto after_required_linear_history;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'required_linear_history';
                        $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️ProtectedBranch⚡️RequiredLinearHistory($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['required_linear_history'] = $value;
    
                after_required_linear_history:

                $value = $payload['allow_force_pushes'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'allow_force_pushes';
                    goto after_allow_force_pushes;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'allow_force_pushes';
                        $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️ProtectedBranch⚡️RequiredLinearHistory($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['allow_force_pushes'] = $value;
    
                after_allow_force_pushes:

                $value = $payload['allow_deletions'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'allow_deletions';
                    goto after_allow_deletions;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'allow_deletions';
                        $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️ProtectedBranch⚡️RequiredLinearHistory($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['allow_deletions'] = $value;
    
                after_allow_deletions:

                $value = $payload['restrictions'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'restrictions';
                    goto after_restrictions;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'restrictions';
                        $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️BranchRestrictionPolicy($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['restrictions'] = $value;
    
                after_restrictions:

                $value = $payload['required_conversation_resolution'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'required_conversation_resolution';
                    goto after_required_conversation_resolution;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'required_conversation_resolution';
                        $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️ProtectedBranch⚡️RequiredConversationResolution($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['required_conversation_resolution'] = $value;
    
                after_required_conversation_resolution:

                $value = $payload['block_creations'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'block_creations';
                    goto after_block_creations;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'block_creations';
                        $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️ProtectedBranch⚡️RequiredLinearHistory($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['block_creations'] = $value;
    
                after_block_creations:

                $value = $payload['lock_branch'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'lock_branch';
                    goto after_lock_branch;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'lock_branch';
                        $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️ProtectedBranch⚡️LockBranch($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['lock_branch'] = $value;
    
                after_lock_branch:

                $value = $payload['allow_fork_syncing'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'allow_fork_syncing';
                    goto after_allow_fork_syncing;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'allow_fork_syncing';
                        $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️ProtectedBranch⚡️AllowForkSyncing($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['allow_fork_syncing'] = $value;
    
                after_allow_fork_syncing:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\ProtectedBranch', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\ProtectedBranch::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\Github\Schema\ProtectedBranch(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\ProtectedBranch', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️ValidationErrorSimple(array $payload): \ApiClients\Client\Github\Schema\ValidationErrorSimple
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
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\ValidationErrorSimple', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\ValidationErrorSimple::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\Github\Schema\ValidationErrorSimple(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\ValidationErrorSimple', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️ProtectedBranchRequiredStatusCheck(array $payload): \ApiClients\Client\Github\Schema\ProtectedBranchRequiredStatusCheck
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
                    $missingFields[] = 'contexts';
                    goto after_contexts;
                }

                $properties['contexts'] = $value;
    
                after_contexts:

                $value = $payload['checks'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'checks';
                    goto after_checks;
                }

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
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\ProtectedBranchRequiredStatusCheck', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\ProtectedBranchRequiredStatusCheck::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\Github\Schema\ProtectedBranchRequiredStatusCheck(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\ProtectedBranchRequiredStatusCheck', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️ProtectedBranchAdminEnforced(array $payload): \ApiClients\Client\Github\Schema\ProtectedBranchAdminEnforced
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

                $value = $payload['enabled'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'enabled';
                    goto after_enabled;
                }

                $properties['enabled'] = $value;
    
                after_enabled:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\ProtectedBranchAdminEnforced', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\ProtectedBranchAdminEnforced::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\Github\Schema\ProtectedBranchAdminEnforced(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\ProtectedBranchAdminEnforced', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️ProtectedBranchPullRequestReview(array $payload): \ApiClients\Client\Github\Schema\ProtectedBranchPullRequestReview
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
                        $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️ProtectedBranchPullRequestReview⚡️DismissalRestrictions($value);
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
                        $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️ProtectedBranchPullRequestReview⚡️BypassPullRequestAllowances($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['bypass_pull_request_allowances'] = $value;
    
                after_bypass_pull_request_allowances:

                $value = $payload['dismiss_stale_reviews'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'dismiss_stale_reviews';
                    goto after_dismiss_stale_reviews;
                }

                $properties['dismiss_stale_reviews'] = $value;
    
                after_dismiss_stale_reviews:

                $value = $payload['require_code_owner_reviews'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'require_code_owner_reviews';
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
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\ProtectedBranchPullRequestReview', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\ProtectedBranchPullRequestReview::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\Github\Schema\ProtectedBranchPullRequestReview(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\ProtectedBranchPullRequestReview', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️BranchRestrictionPolicy(array $payload): \ApiClients\Client\Github\Schema\BranchRestrictionPolicy
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

                $value = $payload['users_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'users_url';
                    goto after_users_url;
                }

                $properties['users_url'] = $value;
    
                after_users_url:

                $value = $payload['teams_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'teams_url';
                    goto after_teams_url;
                }

                $properties['teams_url'] = $value;
    
                after_teams_url:

                $value = $payload['apps_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'apps_url';
                    goto after_apps_url;
                }

                $properties['apps_url'] = $value;
    
                after_apps_url:

                $value = $payload['users'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'users';
                    goto after_users;
                }

                $properties['users'] = $value;
    
                after_users:

                $value = $payload['teams'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'teams';
                    goto after_teams;
                }

                $properties['teams'] = $value;
    
                after_teams:

                $value = $payload['apps'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'apps';
                    goto after_apps;
                }

                $properties['apps'] = $value;
    
                after_apps:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\BranchRestrictionPolicy', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\BranchRestrictionPolicy::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\Github\Schema\BranchRestrictionPolicy(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\BranchRestrictionPolicy', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️BranchProtection⚡️RequiredLinearHistory(array $payload): \ApiClients\Client\Github\Schema\BranchProtection\RequiredLinearHistory
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['enabled'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'enabled';
                    goto after_enabled;
                }

                $properties['enabled'] = $value;
    
                after_enabled:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\BranchProtection\RequiredLinearHistory', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\BranchProtection\RequiredLinearHistory::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\Github\Schema\BranchProtection\RequiredLinearHistory(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\BranchProtection\RequiredLinearHistory', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️BranchProtection⚡️RequiredSignatures(array $payload): \ApiClients\Client\Github\Schema\BranchProtection\RequiredSignatures
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

                $value = $payload['enabled'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'enabled';
                    goto after_enabled;
                }

                $properties['enabled'] = $value;
    
                after_enabled:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\BranchProtection\RequiredSignatures', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\BranchProtection\RequiredSignatures::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\Github\Schema\BranchProtection\RequiredSignatures(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\BranchProtection\RequiredSignatures', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️BranchProtection⚡️LockBranch(array $payload): \ApiClients\Client\Github\Schema\BranchProtection\LockBranch
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['enabled'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'enabled';
                    goto after_enabled;
                }

                $properties['enabled'] = $value;
    
                after_enabled:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\BranchProtection\LockBranch', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\BranchProtection\LockBranch::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\Github\Schema\BranchProtection\LockBranch(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\BranchProtection\LockBranch', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️BranchProtection⚡️AllowForkSyncing(array $payload): \ApiClients\Client\Github\Schema\BranchProtection\AllowForkSyncing
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['enabled'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'enabled';
                    goto after_enabled;
                }

                $properties['enabled'] = $value;
    
                after_enabled:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\BranchProtection\AllowForkSyncing', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\BranchProtection\AllowForkSyncing::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\Github\Schema\BranchProtection\AllowForkSyncing(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\BranchProtection\AllowForkSyncing', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️StatusCheckPolicy(array $payload): \ApiClients\Client\Github\Schema\StatusCheckPolicy
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

                $value = $payload['strict'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'strict';
                    goto after_strict;
                }

                $properties['strict'] = $value;
    
                after_strict:

                $value = $payload['contexts'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'contexts';
                    goto after_contexts;
                }

                $properties['contexts'] = $value;
    
                after_contexts:

                $value = $payload['checks'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'checks';
                    goto after_checks;
                }

                $properties['checks'] = $value;
    
                after_checks:

                $value = $payload['contexts_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'contexts_url';
                    goto after_contexts_url;
                }

                $properties['contexts_url'] = $value;
    
                after_contexts_url:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\StatusCheckPolicy', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\StatusCheckPolicy::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\Github\Schema\StatusCheckPolicy(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\StatusCheckPolicy', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️ProtectedBranch⚡️RequiredPullRequestReviews(array $payload): \ApiClients\Client\Github\Schema\ProtectedBranch\RequiredPullRequestReviews
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

                $value = $payload['dismiss_stale_reviews'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'dismiss_stale_reviews';
                    goto after_dismiss_stale_reviews;
                }

                $properties['dismiss_stale_reviews'] = $value;
    
                after_dismiss_stale_reviews:

                $value = $payload['require_code_owner_reviews'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'require_code_owner_reviews';
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

                $value = $payload['dismissal_restrictions'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'dismissal_restrictions';
                    goto after_dismissal_restrictions;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'dismissal_restrictions';
                        $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️ProtectedBranch⚡️RequiredPullRequestReviews⚡️DismissalRestrictions($value);
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
                        $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️ProtectedBranch⚡️RequiredPullRequestReviews⚡️BypassPullRequestAllowances($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['bypass_pull_request_allowances'] = $value;
    
                after_bypass_pull_request_allowances:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\ProtectedBranch\RequiredPullRequestReviews', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\ProtectedBranch\RequiredPullRequestReviews::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\Github\Schema\ProtectedBranch\RequiredPullRequestReviews(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\ProtectedBranch\RequiredPullRequestReviews', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️ProtectedBranch⚡️EnforceAdmins(array $payload): \ApiClients\Client\Github\Schema\ProtectedBranch\EnforceAdmins
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

                $value = $payload['enabled'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'enabled';
                    goto after_enabled;
                }

                $properties['enabled'] = $value;
    
                after_enabled:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\ProtectedBranch\EnforceAdmins', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\ProtectedBranch\EnforceAdmins::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\Github\Schema\ProtectedBranch\EnforceAdmins(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\ProtectedBranch\EnforceAdmins', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️ProtectedBranch⚡️RequiredLinearHistory(array $payload): \ApiClients\Client\Github\Schema\ProtectedBranch\RequiredLinearHistory
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['enabled'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'enabled';
                    goto after_enabled;
                }

                $properties['enabled'] = $value;
    
                after_enabled:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\ProtectedBranch\RequiredLinearHistory', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\ProtectedBranch\RequiredLinearHistory::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\Github\Schema\ProtectedBranch\RequiredLinearHistory(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\ProtectedBranch\RequiredLinearHistory', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️ProtectedBranch⚡️RequiredConversationResolution(array $payload): \ApiClients\Client\Github\Schema\ProtectedBranch\RequiredConversationResolution
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['enabled'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'enabled';
                    goto after_enabled;
                }

                $properties['enabled'] = $value;
    
                after_enabled:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\ProtectedBranch\RequiredConversationResolution', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\ProtectedBranch\RequiredConversationResolution::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\Github\Schema\ProtectedBranch\RequiredConversationResolution(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\ProtectedBranch\RequiredConversationResolution', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️ProtectedBranch⚡️LockBranch(array $payload): \ApiClients\Client\Github\Schema\ProtectedBranch\LockBranch
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['enabled'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'enabled';
                    goto after_enabled;
                }

                $properties['enabled'] = $value;
    
                after_enabled:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\ProtectedBranch\LockBranch', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\ProtectedBranch\LockBranch::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\Github\Schema\ProtectedBranch\LockBranch(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\ProtectedBranch\LockBranch', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️ProtectedBranch⚡️AllowForkSyncing(array $payload): \ApiClients\Client\Github\Schema\ProtectedBranch\AllowForkSyncing
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['enabled'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'enabled';
                    goto after_enabled;
                }

                $properties['enabled'] = $value;
    
                after_enabled:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\ProtectedBranch\AllowForkSyncing', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\ProtectedBranch\AllowForkSyncing::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\Github\Schema\ProtectedBranch\AllowForkSyncing(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\ProtectedBranch\AllowForkSyncing', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️ProtectedBranchPullRequestReview⚡️DismissalRestrictions(array $payload): \ApiClients\Client\Github\Schema\ProtectedBranchPullRequestReview\DismissalRestrictions
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['users'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'users';
                    goto after_users;
                }

                $properties['users'] = $value;
    
                after_users:

                $value = $payload['teams'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'teams';
                    goto after_teams;
                }

                $properties['teams'] = $value;
    
                after_teams:

                $value = $payload['apps'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'apps';
                    goto after_apps;
                }

                $properties['apps'] = $value;
    
                after_apps:

                $value = $payload['url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'url';
                    goto after_url;
                }

                $properties['url'] = $value;
    
                after_url:

                $value = $payload['users_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'users_url';
                    goto after_users_url;
                }

                $properties['users_url'] = $value;
    
                after_users_url:

                $value = $payload['teams_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'teams_url';
                    goto after_teams_url;
                }

                $properties['teams_url'] = $value;
    
                after_teams_url:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\ProtectedBranchPullRequestReview\DismissalRestrictions', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\ProtectedBranchPullRequestReview\DismissalRestrictions::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\Github\Schema\ProtectedBranchPullRequestReview\DismissalRestrictions(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\ProtectedBranchPullRequestReview\DismissalRestrictions', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️ProtectedBranchPullRequestReview⚡️BypassPullRequestAllowances(array $payload): \ApiClients\Client\Github\Schema\ProtectedBranchPullRequestReview\BypassPullRequestAllowances
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['users'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'users';
                    goto after_users;
                }

                $properties['users'] = $value;
    
                after_users:

                $value = $payload['teams'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'teams';
                    goto after_teams;
                }

                $properties['teams'] = $value;
    
                after_teams:

                $value = $payload['apps'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'apps';
                    goto after_apps;
                }

                $properties['apps'] = $value;
    
                after_apps:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\ProtectedBranchPullRequestReview\BypassPullRequestAllowances', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\ProtectedBranchPullRequestReview\BypassPullRequestAllowances::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\Github\Schema\ProtectedBranchPullRequestReview\BypassPullRequestAllowances(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\ProtectedBranchPullRequestReview\BypassPullRequestAllowances', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️ProtectedBranch⚡️RequiredPullRequestReviews⚡️DismissalRestrictions(array $payload): \ApiClients\Client\Github\Schema\ProtectedBranch\RequiredPullRequestReviews\DismissalRestrictions
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

                $value = $payload['users_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'users_url';
                    goto after_users_url;
                }

                $properties['users_url'] = $value;
    
                after_users_url:

                $value = $payload['teams_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'teams_url';
                    goto after_teams_url;
                }

                $properties['teams_url'] = $value;
    
                after_teams_url:

                $value = $payload['users'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'users';
                    goto after_users;
                }

                $properties['users'] = $value;
    
                after_users:

                $value = $payload['teams'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'teams';
                    goto after_teams;
                }

                $properties['teams'] = $value;
    
                after_teams:

                $value = $payload['apps'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'apps';
                    goto after_apps;
                }

                $properties['apps'] = $value;
    
                after_apps:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\ProtectedBranch\RequiredPullRequestReviews\DismissalRestrictions', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\ProtectedBranch\RequiredPullRequestReviews\DismissalRestrictions::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\Github\Schema\ProtectedBranch\RequiredPullRequestReviews\DismissalRestrictions(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\ProtectedBranch\RequiredPullRequestReviews\DismissalRestrictions', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️ProtectedBranch⚡️RequiredPullRequestReviews⚡️BypassPullRequestAllowances(array $payload): \ApiClients\Client\Github\Schema\ProtectedBranch\RequiredPullRequestReviews\BypassPullRequestAllowances
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['users'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'users';
                    goto after_users;
                }

                $properties['users'] = $value;
    
                after_users:

                $value = $payload['teams'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'teams';
                    goto after_teams;
                }

                $properties['teams'] = $value;
    
                after_teams:

                $value = $payload['apps'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'apps';
                    goto after_apps;
                }

                $properties['apps'] = $value;
    
                after_apps:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\ProtectedBranch\RequiredPullRequestReviews\BypassPullRequestAllowances', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\ProtectedBranch\RequiredPullRequestReviews\BypassPullRequestAllowances::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\Github\Schema\ProtectedBranch\RequiredPullRequestReviews\BypassPullRequestAllowances(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\ProtectedBranch\RequiredPullRequestReviews\BypassPullRequestAllowances', $exception, stack: $this->hydrationStack);
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
                'ApiClients\Client\Github\Schema\BranchProtection' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️BranchProtection($object),
                'ApiClients\Client\Github\Schema\BasicError' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️BasicError($object),
                'ApiClients\Client\Github\Schema\ProtectedBranch' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️ProtectedBranch($object),
                'ApiClients\Client\Github\Schema\ValidationErrorSimple' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️ValidationErrorSimple($object),
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

    
    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️BranchProtection(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\BranchProtection);
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
        $required_status_checks = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️ProtectedBranchRequiredStatusCheck($required_status_checks);
        after_required_status_checks:        $result['required_status_checks'] = $required_status_checks;

        
        $enforce_admins = $object->enforce_admins;

        if ($enforce_admins === null) {
            goto after_enforce_admins;
        }
        $enforce_admins = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️ProtectedBranchAdminEnforced($enforce_admins);
        after_enforce_admins:        $result['enforce_admins'] = $enforce_admins;

        
        $required_pull_request_reviews = $object->required_pull_request_reviews;

        if ($required_pull_request_reviews === null) {
            goto after_required_pull_request_reviews;
        }
        $required_pull_request_reviews = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️ProtectedBranchPullRequestReview($required_pull_request_reviews);
        after_required_pull_request_reviews:        $result['required_pull_request_reviews'] = $required_pull_request_reviews;

        
        $restrictions = $object->restrictions;

        if ($restrictions === null) {
            goto after_restrictions;
        }
        $restrictions = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️BranchRestrictionPolicy($restrictions);
        after_restrictions:        $result['restrictions'] = $restrictions;

        
        $required_linear_history = $object->required_linear_history;

        if ($required_linear_history === null) {
            goto after_required_linear_history;
        }
        $required_linear_history = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️BranchProtection⚡️RequiredLinearHistory($required_linear_history);
        after_required_linear_history:        $result['required_linear_history'] = $required_linear_history;

        
        $allow_force_pushes = $object->allow_force_pushes;

        if ($allow_force_pushes === null) {
            goto after_allow_force_pushes;
        }
        $allow_force_pushes = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️BranchProtection⚡️RequiredLinearHistory($allow_force_pushes);
        after_allow_force_pushes:        $result['allow_force_pushes'] = $allow_force_pushes;

        
        $allow_deletions = $object->allow_deletions;

        if ($allow_deletions === null) {
            goto after_allow_deletions;
        }
        $allow_deletions = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️BranchProtection⚡️RequiredLinearHistory($allow_deletions);
        after_allow_deletions:        $result['allow_deletions'] = $allow_deletions;

        
        $block_creations = $object->block_creations;

        if ($block_creations === null) {
            goto after_block_creations;
        }
        $block_creations = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️BranchProtection⚡️RequiredLinearHistory($block_creations);
        after_block_creations:        $result['block_creations'] = $block_creations;

        
        $required_conversation_resolution = $object->required_conversation_resolution;

        if ($required_conversation_resolution === null) {
            goto after_required_conversation_resolution;
        }
        $required_conversation_resolution = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️BranchProtection⚡️RequiredLinearHistory($required_conversation_resolution);
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
        $required_signatures = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️BranchProtection⚡️RequiredSignatures($required_signatures);
        after_required_signatures:        $result['required_signatures'] = $required_signatures;

        
        $lock_branch = $object->lock_branch;

        if ($lock_branch === null) {
            goto after_lock_branch;
        }
        $lock_branch = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️BranchProtection⚡️LockBranch($lock_branch);
        after_lock_branch:        $result['lock_branch'] = $lock_branch;

        
        $allow_fork_syncing = $object->allow_fork_syncing;

        if ($allow_fork_syncing === null) {
            goto after_allow_fork_syncing;
        }
        $allow_fork_syncing = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️BranchProtection⚡️AllowForkSyncing($allow_fork_syncing);
        after_allow_fork_syncing:        $result['allow_fork_syncing'] = $allow_fork_syncing;


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

    
    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️ProtectedBranch(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\ProtectedBranch);
        $result = [];
        
        $url = $object->url;

        if ($url === null) {
            goto after_url;
        }
        after_url:        $result['url'] = $url;

        
        $required_status_checks = $object->required_status_checks;
        $required_status_checks = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️StatusCheckPolicy($required_status_checks);
        after_required_status_checks:        $result['required_status_checks'] = $required_status_checks;

        
        $required_pull_request_reviews = $object->required_pull_request_reviews;
        $required_pull_request_reviews = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️ProtectedBranch⚡️RequiredPullRequestReviews($required_pull_request_reviews);
        after_required_pull_request_reviews:        $result['required_pull_request_reviews'] = $required_pull_request_reviews;

        
        $required_signatures = $object->required_signatures;
        $required_signatures = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️BranchProtection⚡️RequiredSignatures($required_signatures);
        after_required_signatures:        $result['required_signatures'] = $required_signatures;

        
        $enforce_admins = $object->enforce_admins;
        $enforce_admins = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️ProtectedBranch⚡️EnforceAdmins($enforce_admins);
        after_enforce_admins:        $result['enforce_admins'] = $enforce_admins;

        
        $required_linear_history = $object->required_linear_history;
        $required_linear_history = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️ProtectedBranch⚡️RequiredLinearHistory($required_linear_history);
        after_required_linear_history:        $result['required_linear_history'] = $required_linear_history;

        
        $allow_force_pushes = $object->allow_force_pushes;
        $allow_force_pushes = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️ProtectedBranch⚡️RequiredLinearHistory($allow_force_pushes);
        after_allow_force_pushes:        $result['allow_force_pushes'] = $allow_force_pushes;

        
        $allow_deletions = $object->allow_deletions;
        $allow_deletions = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️ProtectedBranch⚡️RequiredLinearHistory($allow_deletions);
        after_allow_deletions:        $result['allow_deletions'] = $allow_deletions;

        
        $restrictions = $object->restrictions;
        $restrictions = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️BranchRestrictionPolicy($restrictions);
        after_restrictions:        $result['restrictions'] = $restrictions;

        
        $required_conversation_resolution = $object->required_conversation_resolution;
        $required_conversation_resolution = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️ProtectedBranch⚡️RequiredConversationResolution($required_conversation_resolution);
        after_required_conversation_resolution:        $result['required_conversation_resolution'] = $required_conversation_resolution;

        
        $block_creations = $object->block_creations;
        $block_creations = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️ProtectedBranch⚡️RequiredLinearHistory($block_creations);
        after_block_creations:        $result['block_creations'] = $block_creations;

        
        $lock_branch = $object->lock_branch;
        $lock_branch = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️ProtectedBranch⚡️LockBranch($lock_branch);
        after_lock_branch:        $result['lock_branch'] = $lock_branch;

        
        $allow_fork_syncing = $object->allow_fork_syncing;
        $allow_fork_syncing = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️ProtectedBranch⚡️AllowForkSyncing($allow_fork_syncing);
        after_allow_fork_syncing:        $result['allow_fork_syncing'] = $allow_fork_syncing;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️ValidationErrorSimple(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\ValidationErrorSimple);
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
