<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb;

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
            'ApiClients\Client\Github\Schema\ShortBranch' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️ShortBranch($payload),
                'ApiClients\Client\Github\Schema\ShortBranch\Commit' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️ShortBranch⚡️Commit($payload),
                'ApiClients\Client\Github\Schema\BranchProtection' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️BranchProtection($payload),
                'ApiClients\Client\Github\Schema\ProtectedBranchRequiredStatusCheck' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️ProtectedBranchRequiredStatusCheck($payload),
                'ApiClients\Client\Github\Schema\ProtectedBranchRequiredStatusCheck\Checks' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️ProtectedBranchRequiredStatusCheck⚡️Checks($payload),
                'ApiClients\Client\Github\Schema\ProtectedBranchAdminEnforced' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️ProtectedBranchAdminEnforced($payload),
                'ApiClients\Client\Github\Schema\ProtectedBranchPullRequestReview' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️ProtectedBranchPullRequestReview($payload),
                'ApiClients\Client\Github\Schema\ProtectedBranchPullRequestReview\DismissalRestrictions' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️ProtectedBranchPullRequestReview⚡️DismissalRestrictions($payload),
                'ApiClients\Client\Github\Schema\SimpleUser' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️SimpleUser($payload),
                'ApiClients\Client\Github\Schema\Team' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️Team($payload),
                'ApiClients\Client\Github\Schema\Team\Permissions' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️Team⚡️Permissions($payload),
                'ApiClients\Client\Github\Schema\Integration' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️Integration($payload),
                'ApiClients\Client\Github\Schema\Integration\Permissions' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️Integration⚡️Permissions($payload),
                'ApiClients\Client\Github\Schema\ProtectedBranchPullRequestReview\BypassPullRequestAllowances' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️ProtectedBranchPullRequestReview⚡️BypassPullRequestAllowances($payload),
                'ApiClients\Client\Github\Schema\BranchRestrictionPolicy' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️BranchRestrictionPolicy($payload),
                'ApiClients\Client\Github\Schema\BranchRestrictionPolicy\Users' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️BranchRestrictionPolicy⚡️Users($payload),
                'ApiClients\Client\Github\Schema\BranchRestrictionPolicy\Teams' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️BranchRestrictionPolicy⚡️Teams($payload),
                'ApiClients\Client\Github\Schema\BranchRestrictionPolicy\Apps' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️BranchRestrictionPolicy⚡️Apps($payload),
                'ApiClients\Client\Github\Schema\BranchRestrictionPolicy\Apps\Owner' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️BranchRestrictionPolicy⚡️Apps⚡️Owner($payload),
                'ApiClients\Client\Github\Schema\BranchRestrictionPolicy\Apps\Permissions' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️BranchRestrictionPolicy⚡️Apps⚡️Permissions($payload),
                'ApiClients\Client\Github\Schema\BranchProtection\RequiredLinearHistory' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️BranchProtection⚡️RequiredLinearHistory($payload),
                'ApiClients\Client\Github\Schema\BranchProtection\AllowForcePushes' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️BranchProtection⚡️AllowForcePushes($payload),
                'ApiClients\Client\Github\Schema\BranchProtection\AllowDeletions' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️BranchProtection⚡️AllowDeletions($payload),
                'ApiClients\Client\Github\Schema\BranchProtection\BlockCreations' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️BranchProtection⚡️BlockCreations($payload),
                'ApiClients\Client\Github\Schema\BranchProtection\RequiredConversationResolution' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️BranchProtection⚡️RequiredConversationResolution($payload),
                'ApiClients\Client\Github\Schema\BranchProtection\RequiredSignatures' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️BranchProtection⚡️RequiredSignatures($payload),
                'ApiClients\Client\Github\Schema\BranchProtection\LockBranch' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️BranchProtection⚡️LockBranch($payload),
                'ApiClients\Client\Github\Schema\BranchProtection\AllowForkSyncing' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️BranchProtection⚡️AllowForkSyncing($payload),
                'ApiClients\Client\Github\Schema\BasicError' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️BasicError($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️ShortBranch(array $payload): \ApiClients\Client\Github\Schema\ShortBranch
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

            $value = $payload['commit'] ?? null;

            if ($value === null) {
                $missingFields[] = 'commit';
                goto after_commit;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'commit';
                    $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️ShortBranch⚡️Commit($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['commit'] = $value;

            after_commit:

            $value = $payload['protected'] ?? null;

            if ($value === null) {
                $missingFields[] = 'protected';
                goto after_protected;
            }

            $properties['protected'] = $value;

            after_protected:

            $value = $payload['protection'] ?? null;

            if ($value === null) {
                $properties['protection'] = null;
                goto after_protection;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'protection';
                    $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️BranchProtection($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['protection'] = $value;

            after_protection:

            $value = $payload['protection_url'] ?? null;

            if ($value === null) {
                $properties['protectionUrl'] = null;
                goto after_protectionUrl;
            }

            $properties['protectionUrl'] = $value;

            after_protectionUrl:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\ShortBranch', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\ShortBranch::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\Github\Schema\ShortBranch(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\ShortBranch', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️ShortBranch⚡️Commit(array $payload): \ApiClients\Client\Github\Schema\ShortBranch\Commit
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['sha'] ?? null;

            if ($value === null) {
                $missingFields[] = 'sha';
                goto after_sha;
            }

            $properties['sha'] = $value;

            after_sha:

            $value = $payload['url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'url';
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\ShortBranch\Commit', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\ShortBranch\Commit::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\Github\Schema\ShortBranch\Commit(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\ShortBranch\Commit', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️BranchProtection(array $payload): \ApiClients\Client\Github\Schema\BranchProtection
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
                $properties['requiredStatusChecks'] = null;
                goto after_requiredStatusChecks;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'requiredStatusChecks';
                    $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️ProtectedBranchRequiredStatusCheck($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['requiredStatusChecks'] = $value;

            after_requiredStatusChecks:

            $value = $payload['enforce_admins'] ?? null;

            if ($value === null) {
                $properties['enforceAdmins'] = null;
                goto after_enforceAdmins;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'enforceAdmins';
                    $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️ProtectedBranchAdminEnforced($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['enforceAdmins'] = $value;

            after_enforceAdmins:

            $value = $payload['required_pull_request_reviews'] ?? null;

            if ($value === null) {
                $properties['requiredPullRequestReviews'] = null;
                goto after_requiredPullRequestReviews;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'requiredPullRequestReviews';
                    $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️ProtectedBranchPullRequestReview($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['requiredPullRequestReviews'] = $value;

            after_requiredPullRequestReviews:

            $value = $payload['restrictions'] ?? null;

            if ($value === null) {
                $properties['restrictions'] = null;
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
                $properties['requiredLinearHistory'] = null;
                goto after_requiredLinearHistory;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'requiredLinearHistory';
                    $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️BranchProtection⚡️RequiredLinearHistory($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['requiredLinearHistory'] = $value;

            after_requiredLinearHistory:

            $value = $payload['allow_force_pushes'] ?? null;

            if ($value === null) {
                $properties['allowForcePushes'] = null;
                goto after_allowForcePushes;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'allowForcePushes';
                    $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️BranchProtection⚡️AllowForcePushes($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['allowForcePushes'] = $value;

            after_allowForcePushes:

            $value = $payload['allow_deletions'] ?? null;

            if ($value === null) {
                $properties['allowDeletions'] = null;
                goto after_allowDeletions;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'allowDeletions';
                    $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️BranchProtection⚡️AllowDeletions($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['allowDeletions'] = $value;

            after_allowDeletions:

            $value = $payload['block_creations'] ?? null;

            if ($value === null) {
                $properties['blockCreations'] = null;
                goto after_blockCreations;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'blockCreations';
                    $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️BranchProtection⚡️BlockCreations($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['blockCreations'] = $value;

            after_blockCreations:

            $value = $payload['required_conversation_resolution'] ?? null;

            if ($value === null) {
                $properties['requiredConversationResolution'] = null;
                goto after_requiredConversationResolution;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'requiredConversationResolution';
                    $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️BranchProtection⚡️RequiredConversationResolution($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['requiredConversationResolution'] = $value;

            after_requiredConversationResolution:

            $value = $payload['name'] ?? null;

            if ($value === null) {
                $properties['name'] = null;
                goto after_name;
            }

            $properties['name'] = $value;

            after_name:

            $value = $payload['protection_url'] ?? null;

            if ($value === null) {
                $properties['protectionUrl'] = null;
                goto after_protectionUrl;
            }

            $properties['protectionUrl'] = $value;

            after_protectionUrl:

            $value = $payload['required_signatures'] ?? null;

            if ($value === null) {
                $properties['requiredSignatures'] = null;
                goto after_requiredSignatures;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'requiredSignatures';
                    $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️BranchProtection⚡️RequiredSignatures($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['requiredSignatures'] = $value;

            after_requiredSignatures:

            $value = $payload['lock_branch'] ?? null;

            if ($value === null) {
                $properties['lockBranch'] = null;
                goto after_lockBranch;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'lockBranch';
                    $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️BranchProtection⚡️LockBranch($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['lockBranch'] = $value;

            after_lockBranch:

            $value = $payload['allow_fork_syncing'] ?? null;

            if ($value === null) {
                $properties['allowForkSyncing'] = null;
                goto after_allowForkSyncing;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'allowForkSyncing';
                    $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️BranchProtection⚡️AllowForkSyncing($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['allowForkSyncing'] = $value;

            after_allowForkSyncing:

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

        
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️ProtectedBranchRequiredStatusCheck(array $payload): \ApiClients\Client\Github\Schema\ProtectedBranchRequiredStatusCheck
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

            $value = $payload['enforcement_level'] ?? null;

            if ($value === null) {
                $properties['enforcementLevel'] = null;
                goto after_enforcementLevel;
            }

            $properties['enforcementLevel'] = $value;

            after_enforcementLevel:

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

            static $checksCaster1;

            if ($checksCaster1 === null) {
                $checksCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\Github\\Schema\\ProtectedBranchRequiredStatusCheck\\Checks',
));
            }

            $value = $checksCaster1->cast($value, $this);

            $properties['checks'] = $value;

            after_checks:

            $value = $payload['contexts_url'] ?? null;

            if ($value === null) {
                $properties['contextsUrl'] = null;
                goto after_contextsUrl;
            }

            $properties['contextsUrl'] = $value;

            after_contextsUrl:

            $value = $payload['strict'] ?? null;

            if ($value === null) {
                $properties['strict'] = null;
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

        
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️ProtectedBranchRequiredStatusCheck⚡️Checks(array $payload): \ApiClients\Client\Github\Schema\ProtectedBranchRequiredStatusCheck\Checks
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['context'] ?? null;

            if ($value === null) {
                $missingFields[] = 'context';
                goto after_context;
            }

            $properties['context'] = $value;

            after_context:

            $value = $payload['app_id'] ?? null;

            if ($value === null) {
                $properties['appId'] = null;
                goto after_appId;
            }

            $properties['appId'] = $value;

            after_appId:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\ProtectedBranchRequiredStatusCheck\Checks', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\ProtectedBranchRequiredStatusCheck\Checks::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\Github\Schema\ProtectedBranchRequiredStatusCheck\Checks(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\ProtectedBranchRequiredStatusCheck\Checks', $exception, stack: $this->hydrationStack);
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
                $properties['url'] = null;
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

            $value = $payload['dismissal_restrictions'] ?? null;

            if ($value === null) {
                $properties['dismissalRestrictions'] = null;
                goto after_dismissalRestrictions;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'dismissalRestrictions';
                    $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️ProtectedBranchPullRequestReview⚡️DismissalRestrictions($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['dismissalRestrictions'] = $value;

            after_dismissalRestrictions:

            $value = $payload['bypass_pull_request_allowances'] ?? null;

            if ($value === null) {
                $properties['bypassPullRequestAllowances'] = null;
                goto after_bypassPullRequestAllowances;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'bypassPullRequestAllowances';
                    $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️ProtectedBranchPullRequestReview⚡️BypassPullRequestAllowances($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['bypassPullRequestAllowances'] = $value;

            after_bypassPullRequestAllowances:

            $value = $payload['dismiss_stale_reviews'] ?? null;

            if ($value === null) {
                $missingFields[] = 'dismiss_stale_reviews';
                goto after_dismissStaleReviews;
            }

            $properties['dismissStaleReviews'] = $value;

            after_dismissStaleReviews:

            $value = $payload['require_code_owner_reviews'] ?? null;

            if ($value === null) {
                $missingFields[] = 'require_code_owner_reviews';
                goto after_requireCodeOwnerReviews;
            }

            $properties['requireCodeOwnerReviews'] = $value;

            after_requireCodeOwnerReviews:

            $value = $payload['required_approving_review_count'] ?? null;

            if ($value === null) {
                $properties['requiredApprovingReviewCount'] = null;
                goto after_requiredApprovingReviewCount;
            }

            $properties['requiredApprovingReviewCount'] = $value;

            after_requiredApprovingReviewCount:

            $value = $payload['require_last_push_approval'] ?? null;

            if ($value === null) {
                $properties['requireLastPushApproval'] = null;
                goto after_requireLastPushApproval;
            }

            $properties['requireLastPushApproval'] = $value;

            after_requireLastPushApproval:

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

        
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️ProtectedBranchPullRequestReview⚡️DismissalRestrictions(array $payload): \ApiClients\Client\Github\Schema\ProtectedBranchPullRequestReview\DismissalRestrictions
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
  0 => 'ApiClients\\Client\\Github\\Schema\\SimpleUser',
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
  0 => 'ApiClients\\Client\\Github\\Schema\\Team',
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
  0 => 'ApiClients\\Client\\Github\\Schema\\Integration',
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
                $properties['usersUrl'] = null;
                goto after_usersUrl;
            }

            $properties['usersUrl'] = $value;

            after_usersUrl:

            $value = $payload['teams_url'] ?? null;

            if ($value === null) {
                $properties['teamsUrl'] = null;
                goto after_teamsUrl;
            }

            $properties['teamsUrl'] = $value;

            after_teamsUrl:

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

        
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️SimpleUser(array $payload): \ApiClients\Client\Github\Schema\SimpleUser
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

            $value = $payload['avatar_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'avatar_url';
                goto after_avatarUrl;
            }

            $properties['avatarUrl'] = $value;

            after_avatarUrl:

            $value = $payload['gravatar_id'] ?? null;

            if ($value === null) {
                $properties['gravatarId'] = null;
                goto after_gravatarId;
            }

            $properties['gravatarId'] = $value;

            after_gravatarId:

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

            $value = $payload['followers_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'followers_url';
                goto after_followersUrl;
            }

            $properties['followersUrl'] = $value;

            after_followersUrl:

            $value = $payload['following_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'following_url';
                goto after_followingUrl;
            }

            $properties['followingUrl'] = $value;

            after_followingUrl:

            $value = $payload['gists_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'gists_url';
                goto after_gistsUrl;
            }

            $properties['gistsUrl'] = $value;

            after_gistsUrl:

            $value = $payload['starred_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'starred_url';
                goto after_starredUrl;
            }

            $properties['starredUrl'] = $value;

            after_starredUrl:

            $value = $payload['subscriptions_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'subscriptions_url';
                goto after_subscriptionsUrl;
            }

            $properties['subscriptionsUrl'] = $value;

            after_subscriptionsUrl:

            $value = $payload['organizations_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'organizations_url';
                goto after_organizationsUrl;
            }

            $properties['organizationsUrl'] = $value;

            after_organizationsUrl:

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

            $value = $payload['received_events_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'received_events_url';
                goto after_receivedEventsUrl;
            }

            $properties['receivedEventsUrl'] = $value;

            after_receivedEventsUrl:

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
                goto after_siteAdmin;
            }

            $properties['siteAdmin'] = $value;

            after_siteAdmin:

            $value = $payload['starred_at'] ?? null;

            if ($value === null) {
                $properties['starredAt'] = null;
                goto after_starredAt;
            }

            $properties['starredAt'] = $value;

            after_starredAt:

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

        
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️Team(array $payload): \ApiClients\Client\Github\Schema\Team
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

            $value = $payload['permissions'] ?? null;

            if ($value === null) {
                $properties['permissions'] = null;
                goto after_permissions;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'permissions';
                    $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️Team⚡️Permissions($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['permissions'] = $value;

            after_permissions:

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

            $properties['parent'] = $value;

            after_parent:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\Team', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\Team::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\Github\Schema\Team(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\Team', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️Team⚡️Permissions(array $payload): \ApiClients\Client\Github\Schema\Team\Permissions
    {
        $properties = []; 
        $missingFields = [];
        try {
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

            $value = $payload['admin'] ?? null;

            if ($value === null) {
                $missingFields[] = 'admin';
                goto after_admin;
            }

            $properties['admin'] = $value;

            after_admin:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\Team\Permissions', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\Team\Permissions::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\Github\Schema\Team\Permissions(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\Team\Permissions', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️Integration(array $payload): \ApiClients\Client\Github\Schema\Integration
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

            $value = $payload['slug'] ?? null;

            if ($value === null) {
                $properties['slug'] = null;
                goto after_slug;
            }

            $properties['slug'] = $value;

            after_slug:

            $value = $payload['node_id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'node_id';
                goto after_nodeId;
            }

            $properties['nodeId'] = $value;

            after_nodeId:

            $value = $payload['owner'] ?? null;

            if ($value === null) {
                $properties['owner'] = null;
                goto after_owner;
            }

            $properties['owner'] = $value;

            after_owner:

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

            $value = $payload['external_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'external_url';
                goto after_externalUrl;
            }

            $properties['externalUrl'] = $value;

            after_externalUrl:

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

            $value = $payload['updated_at'] ?? null;

            if ($value === null) {
                $missingFields[] = 'updated_at';
                goto after_updatedAt;
            }

            $properties['updatedAt'] = $value;

            after_updatedAt:

            $value = $payload['permissions'] ?? null;

            if ($value === null) {
                $missingFields[] = 'permissions';
                goto after_permissions;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'permissions';
                    $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️Integration⚡️Permissions($value);
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

            $value = $payload['installations_count'] ?? null;

            if ($value === null) {
                $properties['installationsCount'] = null;
                goto after_installationsCount;
            }

            $properties['installationsCount'] = $value;

            after_installationsCount:

            $value = $payload['client_id'] ?? null;

            if ($value === null) {
                $properties['clientId'] = null;
                goto after_clientId;
            }

            $properties['clientId'] = $value;

            after_clientId:

            $value = $payload['client_secret'] ?? null;

            if ($value === null) {
                $properties['clientSecret'] = null;
                goto after_clientSecret;
            }

            $properties['clientSecret'] = $value;

            after_clientSecret:

            $value = $payload['webhook_secret'] ?? null;

            if ($value === null) {
                $properties['webhookSecret'] = null;
                goto after_webhookSecret;
            }

            $properties['webhookSecret'] = $value;

            after_webhookSecret:

            $value = $payload['pem'] ?? null;

            if ($value === null) {
                $properties['pem'] = null;
                goto after_pem;
            }

            $properties['pem'] = $value;

            after_pem:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\Integration', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\Integration::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\Github\Schema\Integration(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\Integration', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️Integration⚡️Permissions(array $payload): \ApiClients\Client\Github\Schema\Integration\Permissions
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
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\Integration\Permissions', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\Integration\Permissions::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\Github\Schema\Integration\Permissions(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\Integration\Permissions', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️ProtectedBranchPullRequestReview⚡️BypassPullRequestAllowances(array $payload): \ApiClients\Client\Github\Schema\ProtectedBranchPullRequestReview\BypassPullRequestAllowances
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
  0 => 'ApiClients\\Client\\Github\\Schema\\SimpleUser',
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
  0 => 'ApiClients\\Client\\Github\\Schema\\Team',
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
  0 => 'ApiClients\\Client\\Github\\Schema\\Integration',
));
            }

            $value = $appsCaster1->cast($value, $this);

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
                goto after_usersUrl;
            }

            $properties['usersUrl'] = $value;

            after_usersUrl:

            $value = $payload['teams_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'teams_url';
                goto after_teamsUrl;
            }

            $properties['teamsUrl'] = $value;

            after_teamsUrl:

            $value = $payload['apps_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'apps_url';
                goto after_appsUrl;
            }

            $properties['appsUrl'] = $value;

            after_appsUrl:

            $value = $payload['users'] ?? null;

            if ($value === null) {
                $missingFields[] = 'users';
                goto after_users;
            }

            static $usersCaster1;

            if ($usersCaster1 === null) {
                $usersCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\Github\\Schema\\BranchRestrictionPolicy\\Users',
));
            }

            $value = $usersCaster1->cast($value, $this);

            $properties['users'] = $value;

            after_users:

            $value = $payload['teams'] ?? null;

            if ($value === null) {
                $missingFields[] = 'teams';
                goto after_teams;
            }

            static $teamsCaster1;

            if ($teamsCaster1 === null) {
                $teamsCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\Github\\Schema\\BranchRestrictionPolicy\\Teams',
));
            }

            $value = $teamsCaster1->cast($value, $this);

            $properties['teams'] = $value;

            after_teams:

            $value = $payload['apps'] ?? null;

            if ($value === null) {
                $missingFields[] = 'apps';
                goto after_apps;
            }

            static $appsCaster1;

            if ($appsCaster1 === null) {
                $appsCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\Github\\Schema\\BranchRestrictionPolicy\\Apps',
));
            }

            $value = $appsCaster1->cast($value, $this);

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

        
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️BranchRestrictionPolicy⚡️Users(array $payload): \ApiClients\Client\Github\Schema\BranchRestrictionPolicy\Users
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
                $properties['nodeId'] = null;
                goto after_nodeId;
            }

            $properties['nodeId'] = $value;

            after_nodeId:

            $value = $payload['avatar_url'] ?? null;

            if ($value === null) {
                $properties['avatarUrl'] = null;
                goto after_avatarUrl;
            }

            $properties['avatarUrl'] = $value;

            after_avatarUrl:

            $value = $payload['gravatar_id'] ?? null;

            if ($value === null) {
                $properties['gravatarId'] = null;
                goto after_gravatarId;
            }

            $properties['gravatarId'] = $value;

            after_gravatarId:

            $value = $payload['url'] ?? null;

            if ($value === null) {
                $properties['url'] = null;
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

            $value = $payload['html_url'] ?? null;

            if ($value === null) {
                $properties['htmlUrl'] = null;
                goto after_htmlUrl;
            }

            $properties['htmlUrl'] = $value;

            after_htmlUrl:

            $value = $payload['followers_url'] ?? null;

            if ($value === null) {
                $properties['followersUrl'] = null;
                goto after_followersUrl;
            }

            $properties['followersUrl'] = $value;

            after_followersUrl:

            $value = $payload['following_url'] ?? null;

            if ($value === null) {
                $properties['followingUrl'] = null;
                goto after_followingUrl;
            }

            $properties['followingUrl'] = $value;

            after_followingUrl:

            $value = $payload['gists_url'] ?? null;

            if ($value === null) {
                $properties['gistsUrl'] = null;
                goto after_gistsUrl;
            }

            $properties['gistsUrl'] = $value;

            after_gistsUrl:

            $value = $payload['starred_url'] ?? null;

            if ($value === null) {
                $properties['starredUrl'] = null;
                goto after_starredUrl;
            }

            $properties['starredUrl'] = $value;

            after_starredUrl:

            $value = $payload['subscriptions_url'] ?? null;

            if ($value === null) {
                $properties['subscriptionsUrl'] = null;
                goto after_subscriptionsUrl;
            }

            $properties['subscriptionsUrl'] = $value;

            after_subscriptionsUrl:

            $value = $payload['organizations_url'] ?? null;

            if ($value === null) {
                $properties['organizationsUrl'] = null;
                goto after_organizationsUrl;
            }

            $properties['organizationsUrl'] = $value;

            after_organizationsUrl:

            $value = $payload['repos_url'] ?? null;

            if ($value === null) {
                $properties['reposUrl'] = null;
                goto after_reposUrl;
            }

            $properties['reposUrl'] = $value;

            after_reposUrl:

            $value = $payload['events_url'] ?? null;

            if ($value === null) {
                $properties['eventsUrl'] = null;
                goto after_eventsUrl;
            }

            $properties['eventsUrl'] = $value;

            after_eventsUrl:

            $value = $payload['received_events_url'] ?? null;

            if ($value === null) {
                $properties['receivedEventsUrl'] = null;
                goto after_receivedEventsUrl;
            }

            $properties['receivedEventsUrl'] = $value;

            after_receivedEventsUrl:

            $value = $payload['type'] ?? null;

            if ($value === null) {
                $properties['type'] = null;
                goto after_type;
            }

            $properties['type'] = $value;

            after_type:

            $value = $payload['site_admin'] ?? null;

            if ($value === null) {
                $properties['siteAdmin'] = null;
                goto after_siteAdmin;
            }

            $properties['siteAdmin'] = $value;

            after_siteAdmin:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\BranchRestrictionPolicy\Users', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\BranchRestrictionPolicy\Users::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\Github\Schema\BranchRestrictionPolicy\Users(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\BranchRestrictionPolicy\Users', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️BranchRestrictionPolicy⚡️Teams(array $payload): \ApiClients\Client\Github\Schema\BranchRestrictionPolicy\Teams
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
                $properties['nodeId'] = null;
                goto after_nodeId;
            }

            $properties['nodeId'] = $value;

            after_nodeId:

            $value = $payload['url'] ?? null;

            if ($value === null) {
                $properties['url'] = null;
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

            $value = $payload['html_url'] ?? null;

            if ($value === null) {
                $properties['htmlUrl'] = null;
                goto after_htmlUrl;
            }

            $properties['htmlUrl'] = $value;

            after_htmlUrl:

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

            $value = $payload['notification_setting'] ?? null;

            if ($value === null) {
                $properties['notificationSetting'] = null;
                goto after_notificationSetting;
            }

            $properties['notificationSetting'] = $value;

            after_notificationSetting:

            $value = $payload['permission'] ?? null;

            if ($value === null) {
                $properties['permission'] = null;
                goto after_permission;
            }

            $properties['permission'] = $value;

            after_permission:

            $value = $payload['members_url'] ?? null;

            if ($value === null) {
                $properties['membersUrl'] = null;
                goto after_membersUrl;
            }

            $properties['membersUrl'] = $value;

            after_membersUrl:

            $value = $payload['repositories_url'] ?? null;

            if ($value === null) {
                $properties['repositoriesUrl'] = null;
                goto after_repositoriesUrl;
            }

            $properties['repositoriesUrl'] = $value;

            after_repositoriesUrl:

            $value = $payload['parent'] ?? null;

            if ($value === null) {
                $properties['parent'] = null;
                goto after_parent;
            }

            $properties['parent'] = $value;

            after_parent:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\BranchRestrictionPolicy\Teams', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\BranchRestrictionPolicy\Teams::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\Github\Schema\BranchRestrictionPolicy\Teams(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\BranchRestrictionPolicy\Teams', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️BranchRestrictionPolicy⚡️Apps(array $payload): \ApiClients\Client\Github\Schema\BranchRestrictionPolicy\Apps
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
                $properties['nodeId'] = null;
                goto after_nodeId;
            }

            $properties['nodeId'] = $value;

            after_nodeId:

            $value = $payload['owner'] ?? null;

            if ($value === null) {
                $properties['owner'] = null;
                goto after_owner;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'owner';
                    $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️BranchRestrictionPolicy⚡️Apps⚡️Owner($value);
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
                $properties['externalUrl'] = null;
                goto after_externalUrl;
            }

            $properties['externalUrl'] = $value;

            after_externalUrl:

            $value = $payload['html_url'] ?? null;

            if ($value === null) {
                $properties['htmlUrl'] = null;
                goto after_htmlUrl;
            }

            $properties['htmlUrl'] = $value;

            after_htmlUrl:

            $value = $payload['created_at'] ?? null;

            if ($value === null) {
                $properties['createdAt'] = null;
                goto after_createdAt;
            }

            $properties['createdAt'] = $value;

            after_createdAt:

            $value = $payload['updated_at'] ?? null;

            if ($value === null) {
                $properties['updatedAt'] = null;
                goto after_updatedAt;
            }

            $properties['updatedAt'] = $value;

            after_updatedAt:

            $value = $payload['permissions'] ?? null;

            if ($value === null) {
                $properties['permissions'] = null;
                goto after_permissions;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'permissions';
                    $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️BranchRestrictionPolicy⚡️Apps⚡️Permissions($value);
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
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\BranchRestrictionPolicy\Apps', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\BranchRestrictionPolicy\Apps::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\Github\Schema\BranchRestrictionPolicy\Apps(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\BranchRestrictionPolicy\Apps', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️BranchRestrictionPolicy⚡️Apps⚡️Owner(array $payload): \ApiClients\Client\Github\Schema\BranchRestrictionPolicy\Apps\Owner
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
                $properties['nodeId'] = null;
                goto after_nodeId;
            }

            $properties['nodeId'] = $value;

            after_nodeId:

            $value = $payload['url'] ?? null;

            if ($value === null) {
                $properties['url'] = null;
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

            $value = $payload['repos_url'] ?? null;

            if ($value === null) {
                $properties['reposUrl'] = null;
                goto after_reposUrl;
            }

            $properties['reposUrl'] = $value;

            after_reposUrl:

            $value = $payload['events_url'] ?? null;

            if ($value === null) {
                $properties['eventsUrl'] = null;
                goto after_eventsUrl;
            }

            $properties['eventsUrl'] = $value;

            after_eventsUrl:

            $value = $payload['hooks_url'] ?? null;

            if ($value === null) {
                $properties['hooksUrl'] = null;
                goto after_hooksUrl;
            }

            $properties['hooksUrl'] = $value;

            after_hooksUrl:

            $value = $payload['issues_url'] ?? null;

            if ($value === null) {
                $properties['issuesUrl'] = null;
                goto after_issuesUrl;
            }

            $properties['issuesUrl'] = $value;

            after_issuesUrl:

            $value = $payload['members_url'] ?? null;

            if ($value === null) {
                $properties['membersUrl'] = null;
                goto after_membersUrl;
            }

            $properties['membersUrl'] = $value;

            after_membersUrl:

            $value = $payload['public_members_url'] ?? null;

            if ($value === null) {
                $properties['publicMembersUrl'] = null;
                goto after_publicMembersUrl;
            }

            $properties['publicMembersUrl'] = $value;

            after_publicMembersUrl:

            $value = $payload['avatar_url'] ?? null;

            if ($value === null) {
                $properties['avatarUrl'] = null;
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

            $value = $payload['gravatar_id'] ?? null;

            if ($value === null) {
                $properties['gravatarId'] = null;
                goto after_gravatarId;
            }

            $properties['gravatarId'] = $value;

            after_gravatarId:

            $value = $payload['html_url'] ?? null;

            if ($value === null) {
                $properties['htmlUrl'] = null;
                goto after_htmlUrl;
            }

            $properties['htmlUrl'] = $value;

            after_htmlUrl:

            $value = $payload['followers_url'] ?? null;

            if ($value === null) {
                $properties['followersUrl'] = null;
                goto after_followersUrl;
            }

            $properties['followersUrl'] = $value;

            after_followersUrl:

            $value = $payload['following_url'] ?? null;

            if ($value === null) {
                $properties['followingUrl'] = null;
                goto after_followingUrl;
            }

            $properties['followingUrl'] = $value;

            after_followingUrl:

            $value = $payload['gists_url'] ?? null;

            if ($value === null) {
                $properties['gistsUrl'] = null;
                goto after_gistsUrl;
            }

            $properties['gistsUrl'] = $value;

            after_gistsUrl:

            $value = $payload['starred_url'] ?? null;

            if ($value === null) {
                $properties['starredUrl'] = null;
                goto after_starredUrl;
            }

            $properties['starredUrl'] = $value;

            after_starredUrl:

            $value = $payload['subscriptions_url'] ?? null;

            if ($value === null) {
                $properties['subscriptionsUrl'] = null;
                goto after_subscriptionsUrl;
            }

            $properties['subscriptionsUrl'] = $value;

            after_subscriptionsUrl:

            $value = $payload['organizations_url'] ?? null;

            if ($value === null) {
                $properties['organizationsUrl'] = null;
                goto after_organizationsUrl;
            }

            $properties['organizationsUrl'] = $value;

            after_organizationsUrl:

            $value = $payload['received_events_url'] ?? null;

            if ($value === null) {
                $properties['receivedEventsUrl'] = null;
                goto after_receivedEventsUrl;
            }

            $properties['receivedEventsUrl'] = $value;

            after_receivedEventsUrl:

            $value = $payload['type'] ?? null;

            if ($value === null) {
                $properties['type'] = null;
                goto after_type;
            }

            $properties['type'] = $value;

            after_type:

            $value = $payload['site_admin'] ?? null;

            if ($value === null) {
                $properties['siteAdmin'] = null;
                goto after_siteAdmin;
            }

            $properties['siteAdmin'] = $value;

            after_siteAdmin:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\BranchRestrictionPolicy\Apps\Owner', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\BranchRestrictionPolicy\Apps\Owner::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\Github\Schema\BranchRestrictionPolicy\Apps\Owner(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\BranchRestrictionPolicy\Apps\Owner', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️BranchRestrictionPolicy⚡️Apps⚡️Permissions(array $payload): \ApiClients\Client\Github\Schema\BranchRestrictionPolicy\Apps\Permissions
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
                $properties['singleFile'] = null;
                goto after_singleFile;
            }

            $properties['singleFile'] = $value;

            after_singleFile:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\BranchRestrictionPolicy\Apps\Permissions', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\BranchRestrictionPolicy\Apps\Permissions::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\Github\Schema\BranchRestrictionPolicy\Apps\Permissions(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\BranchRestrictionPolicy\Apps\Permissions', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️BranchProtection⚡️RequiredLinearHistory(array $payload): \ApiClients\Client\Github\Schema\BranchProtection\RequiredLinearHistory
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

        
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️BranchProtection⚡️AllowForcePushes(array $payload): \ApiClients\Client\Github\Schema\BranchProtection\AllowForcePushes
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
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\BranchProtection\AllowForcePushes', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\BranchProtection\AllowForcePushes::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\Github\Schema\BranchProtection\AllowForcePushes(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\BranchProtection\AllowForcePushes', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️BranchProtection⚡️AllowDeletions(array $payload): \ApiClients\Client\Github\Schema\BranchProtection\AllowDeletions
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
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\BranchProtection\AllowDeletions', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\BranchProtection\AllowDeletions::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\Github\Schema\BranchProtection\AllowDeletions(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\BranchProtection\AllowDeletions', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️BranchProtection⚡️BlockCreations(array $payload): \ApiClients\Client\Github\Schema\BranchProtection\BlockCreations
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
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\BranchProtection\BlockCreations', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\BranchProtection\BlockCreations::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\Github\Schema\BranchProtection\BlockCreations(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\BranchProtection\BlockCreations', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️BranchProtection⚡️RequiredConversationResolution(array $payload): \ApiClients\Client\Github\Schema\BranchProtection\RequiredConversationResolution
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
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\BranchProtection\RequiredConversationResolution', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\BranchProtection\RequiredConversationResolution::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\Github\Schema\BranchProtection\RequiredConversationResolution(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\BranchProtection\RequiredConversationResolution', $exception, stack: $this->hydrationStack);
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
                $properties['enabled'] = null;
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
                $properties['enabled'] = null;
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

        
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️BasicError(array $payload): \ApiClients\Client\Github\Schema\BasicError
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
            'ApiClients\Client\Github\Schema\ShortBranch' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️ShortBranch($object),
            'ApiClients\Client\Github\Schema\ShortBranch\Commit' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️ShortBranch⚡️Commit($object),
            'ApiClients\Client\Github\Schema\BranchProtection' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️BranchProtection($object),
            'ApiClients\Client\Github\Schema\ProtectedBranchRequiredStatusCheck' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️ProtectedBranchRequiredStatusCheck($object),
            'ApiClients\Client\Github\Schema\ProtectedBranchRequiredStatusCheck\Checks' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️ProtectedBranchRequiredStatusCheck⚡️Checks($object),
            'ApiClients\Client\Github\Schema\ProtectedBranchAdminEnforced' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️ProtectedBranchAdminEnforced($object),
            'ApiClients\Client\Github\Schema\ProtectedBranchPullRequestReview' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️ProtectedBranchPullRequestReview($object),
            'ApiClients\Client\Github\Schema\ProtectedBranchPullRequestReview\DismissalRestrictions' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️ProtectedBranchPullRequestReview⚡️DismissalRestrictions($object),
            'ApiClients\Client\Github\Schema\SimpleUser' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️SimpleUser($object),
            'ApiClients\Client\Github\Schema\Team' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️Team($object),
            'ApiClients\Client\Github\Schema\Team\Permissions' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️Team⚡️Permissions($object),
            'ApiClients\Client\Github\Schema\Integration' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️Integration($object),
            'ApiClients\Client\Github\Schema\Integration\Permissions' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️Integration⚡️Permissions($object),
            'ApiClients\Client\Github\Schema\ProtectedBranchPullRequestReview\BypassPullRequestAllowances' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️ProtectedBranchPullRequestReview⚡️BypassPullRequestAllowances($object),
            'ApiClients\Client\Github\Schema\BranchRestrictionPolicy' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️BranchRestrictionPolicy($object),
            'ApiClients\Client\Github\Schema\BranchRestrictionPolicy\Users' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️BranchRestrictionPolicy⚡️Users($object),
            'ApiClients\Client\Github\Schema\BranchRestrictionPolicy\Teams' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️BranchRestrictionPolicy⚡️Teams($object),
            'ApiClients\Client\Github\Schema\BranchRestrictionPolicy\Apps' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️BranchRestrictionPolicy⚡️Apps($object),
            'ApiClients\Client\Github\Schema\BranchRestrictionPolicy\Apps\Owner' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️BranchRestrictionPolicy⚡️Apps⚡️Owner($object),
            'ApiClients\Client\Github\Schema\BranchRestrictionPolicy\Apps\Permissions' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️BranchRestrictionPolicy⚡️Apps⚡️Permissions($object),
            'ApiClients\Client\Github\Schema\BranchProtection\RequiredLinearHistory' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️BranchProtection⚡️RequiredLinearHistory($object),
            'ApiClients\Client\Github\Schema\BranchProtection\AllowForcePushes' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️BranchProtection⚡️AllowForcePushes($object),
            'ApiClients\Client\Github\Schema\BranchProtection\AllowDeletions' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️BranchProtection⚡️AllowDeletions($object),
            'ApiClients\Client\Github\Schema\BranchProtection\BlockCreations' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️BranchProtection⚡️BlockCreations($object),
            'ApiClients\Client\Github\Schema\BranchProtection\RequiredConversationResolution' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️BranchProtection⚡️RequiredConversationResolution($object),
            'ApiClients\Client\Github\Schema\BranchProtection\RequiredSignatures' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️BranchProtection⚡️RequiredSignatures($object),
            'ApiClients\Client\Github\Schema\BranchProtection\LockBranch' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️BranchProtection⚡️LockBranch($object),
            'ApiClients\Client\Github\Schema\BranchProtection\AllowForkSyncing' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️BranchProtection⚡️AllowForkSyncing($object),
            'ApiClients\Client\Github\Schema\BasicError' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️BasicError($object),
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


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️ShortBranch(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\ShortBranch);
        $result = [];

        $name = $object->name;
        after_name:        $result['name'] = $name;

        
        $commit = $object->commit;
        $commit = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️ShortBranch⚡️Commit($commit);
        after_commit:        $result['commit'] = $commit;

        
        $protected = $object->protected;
        after_protected:        $result['protected'] = $protected;

        
        $protection = $object->protection;

        if ($protection === null) {
            goto after_protection;
        }
        $protection = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️BranchProtection($protection);
        after_protection:        $result['protection'] = $protection;

        
        $protectionUrl = $object->protectionUrl;

        if ($protectionUrl === null) {
            goto after_protectionUrl;
        }
        after_protectionUrl:        $result['protection_url'] = $protectionUrl;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️ShortBranch⚡️Commit(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\ShortBranch\Commit);
        $result = [];

        $sha = $object->sha;
        after_sha:        $result['sha'] = $sha;

        
        $url = $object->url;
        after_url:        $result['url'] = $url;


        return $result;
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

        
        $requiredStatusChecks = $object->requiredStatusChecks;

        if ($requiredStatusChecks === null) {
            goto after_requiredStatusChecks;
        }
        $requiredStatusChecks = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️ProtectedBranchRequiredStatusCheck($requiredStatusChecks);
        after_requiredStatusChecks:        $result['required_status_checks'] = $requiredStatusChecks;

        
        $enforceAdmins = $object->enforceAdmins;

        if ($enforceAdmins === null) {
            goto after_enforceAdmins;
        }
        $enforceAdmins = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️ProtectedBranchAdminEnforced($enforceAdmins);
        after_enforceAdmins:        $result['enforce_admins'] = $enforceAdmins;

        
        $requiredPullRequestReviews = $object->requiredPullRequestReviews;

        if ($requiredPullRequestReviews === null) {
            goto after_requiredPullRequestReviews;
        }
        $requiredPullRequestReviews = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️ProtectedBranchPullRequestReview($requiredPullRequestReviews);
        after_requiredPullRequestReviews:        $result['required_pull_request_reviews'] = $requiredPullRequestReviews;

        
        $restrictions = $object->restrictions;

        if ($restrictions === null) {
            goto after_restrictions;
        }
        $restrictions = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️BranchRestrictionPolicy($restrictions);
        after_restrictions:        $result['restrictions'] = $restrictions;

        
        $requiredLinearHistory = $object->requiredLinearHistory;

        if ($requiredLinearHistory === null) {
            goto after_requiredLinearHistory;
        }
        $requiredLinearHistory = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️BranchProtection⚡️RequiredLinearHistory($requiredLinearHistory);
        after_requiredLinearHistory:        $result['required_linear_history'] = $requiredLinearHistory;

        
        $allowForcePushes = $object->allowForcePushes;

        if ($allowForcePushes === null) {
            goto after_allowForcePushes;
        }
        $allowForcePushes = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️BranchProtection⚡️AllowForcePushes($allowForcePushes);
        after_allowForcePushes:        $result['allow_force_pushes'] = $allowForcePushes;

        
        $allowDeletions = $object->allowDeletions;

        if ($allowDeletions === null) {
            goto after_allowDeletions;
        }
        $allowDeletions = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️BranchProtection⚡️AllowDeletions($allowDeletions);
        after_allowDeletions:        $result['allow_deletions'] = $allowDeletions;

        
        $blockCreations = $object->blockCreations;

        if ($blockCreations === null) {
            goto after_blockCreations;
        }
        $blockCreations = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️BranchProtection⚡️BlockCreations($blockCreations);
        after_blockCreations:        $result['block_creations'] = $blockCreations;

        
        $requiredConversationResolution = $object->requiredConversationResolution;

        if ($requiredConversationResolution === null) {
            goto after_requiredConversationResolution;
        }
        $requiredConversationResolution = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️BranchProtection⚡️RequiredConversationResolution($requiredConversationResolution);
        after_requiredConversationResolution:        $result['required_conversation_resolution'] = $requiredConversationResolution;

        
        $name = $object->name;

        if ($name === null) {
            goto after_name;
        }
        after_name:        $result['name'] = $name;

        
        $protectionUrl = $object->protectionUrl;

        if ($protectionUrl === null) {
            goto after_protectionUrl;
        }
        after_protectionUrl:        $result['protection_url'] = $protectionUrl;

        
        $requiredSignatures = $object->requiredSignatures;

        if ($requiredSignatures === null) {
            goto after_requiredSignatures;
        }
        $requiredSignatures = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️BranchProtection⚡️RequiredSignatures($requiredSignatures);
        after_requiredSignatures:        $result['required_signatures'] = $requiredSignatures;

        
        $lockBranch = $object->lockBranch;

        if ($lockBranch === null) {
            goto after_lockBranch;
        }
        $lockBranch = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️BranchProtection⚡️LockBranch($lockBranch);
        after_lockBranch:        $result['lock_branch'] = $lockBranch;

        
        $allowForkSyncing = $object->allowForkSyncing;

        if ($allowForkSyncing === null) {
            goto after_allowForkSyncing;
        }
        $allowForkSyncing = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️BranchProtection⚡️AllowForkSyncing($allowForkSyncing);
        after_allowForkSyncing:        $result['allow_fork_syncing'] = $allowForkSyncing;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️ProtectedBranchRequiredStatusCheck(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\ProtectedBranchRequiredStatusCheck);
        $result = [];

        $url = $object->url;

        if ($url === null) {
            goto after_url;
        }
        after_url:        $result['url'] = $url;

        
        $enforcementLevel = $object->enforcementLevel;

        if ($enforcementLevel === null) {
            goto after_enforcementLevel;
        }
        after_enforcementLevel:        $result['enforcement_level'] = $enforcementLevel;

        
        $contexts = $object->contexts;
        static $contextsSerializer0;

        if ($contextsSerializer0 === null) {
            $contextsSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $contexts = $contextsSerializer0->serialize($contexts, $this);
        after_contexts:        $result['contexts'] = $contexts;

        
        $checks = $object->checks;
        static $checksSerializer0;

        if ($checksSerializer0 === null) {
            $checksSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\Github\\Schema\\ProtectedBranchRequiredStatusCheck\\Checks',
));
        }
        
        $checks = $checksSerializer0->serialize($checks, $this);
        after_checks:        $result['checks'] = $checks;

        
        $contextsUrl = $object->contextsUrl;

        if ($contextsUrl === null) {
            goto after_contextsUrl;
        }
        after_contextsUrl:        $result['contexts_url'] = $contextsUrl;

        
        $strict = $object->strict;

        if ($strict === null) {
            goto after_strict;
        }
        after_strict:        $result['strict'] = $strict;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️ProtectedBranchRequiredStatusCheck⚡️Checks(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\ProtectedBranchRequiredStatusCheck\Checks);
        $result = [];

        $context = $object->context;
        after_context:        $result['context'] = $context;

        
        $appId = $object->appId;

        if ($appId === null) {
            goto after_appId;
        }
        after_appId:        $result['app_id'] = $appId;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️ProtectedBranchAdminEnforced(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\ProtectedBranchAdminEnforced);
        $result = [];

        $url = $object->url;
        after_url:        $result['url'] = $url;

        
        $enabled = $object->enabled;
        after_enabled:        $result['enabled'] = $enabled;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️ProtectedBranchPullRequestReview(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\ProtectedBranchPullRequestReview);
        $result = [];

        $url = $object->url;

        if ($url === null) {
            goto after_url;
        }
        after_url:        $result['url'] = $url;

        
        $dismissalRestrictions = $object->dismissalRestrictions;

        if ($dismissalRestrictions === null) {
            goto after_dismissalRestrictions;
        }
        $dismissalRestrictions = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️ProtectedBranchPullRequestReview⚡️DismissalRestrictions($dismissalRestrictions);
        after_dismissalRestrictions:        $result['dismissal_restrictions'] = $dismissalRestrictions;

        
        $bypassPullRequestAllowances = $object->bypassPullRequestAllowances;

        if ($bypassPullRequestAllowances === null) {
            goto after_bypassPullRequestAllowances;
        }
        $bypassPullRequestAllowances = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️ProtectedBranchPullRequestReview⚡️BypassPullRequestAllowances($bypassPullRequestAllowances);
        after_bypassPullRequestAllowances:        $result['bypass_pull_request_allowances'] = $bypassPullRequestAllowances;

        
        $dismissStaleReviews = $object->dismissStaleReviews;
        after_dismissStaleReviews:        $result['dismiss_stale_reviews'] = $dismissStaleReviews;

        
        $requireCodeOwnerReviews = $object->requireCodeOwnerReviews;
        after_requireCodeOwnerReviews:        $result['require_code_owner_reviews'] = $requireCodeOwnerReviews;

        
        $requiredApprovingReviewCount = $object->requiredApprovingReviewCount;

        if ($requiredApprovingReviewCount === null) {
            goto after_requiredApprovingReviewCount;
        }
        after_requiredApprovingReviewCount:        $result['required_approving_review_count'] = $requiredApprovingReviewCount;

        
        $requireLastPushApproval = $object->requireLastPushApproval;

        if ($requireLastPushApproval === null) {
            goto after_requireLastPushApproval;
        }
        after_requireLastPushApproval:        $result['require_last_push_approval'] = $requireLastPushApproval;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️ProtectedBranchPullRequestReview⚡️DismissalRestrictions(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\ProtectedBranchPullRequestReview\DismissalRestrictions);
        $result = [];

        $users = $object->users;

        if ($users === null) {
            goto after_users;
        }
        static $usersSerializer0;

        if ($usersSerializer0 === null) {
            $usersSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\Github\\Schema\\SimpleUser',
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
  0 => 'ApiClients\\Client\\Github\\Schema\\Team',
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
  0 => 'ApiClients\\Client\\Github\\Schema\\Integration',
));
        }
        
        $apps = $appsSerializer0->serialize($apps, $this);
        after_apps:        $result['apps'] = $apps;

        
        $url = $object->url;

        if ($url === null) {
            goto after_url;
        }
        after_url:        $result['url'] = $url;

        
        $usersUrl = $object->usersUrl;

        if ($usersUrl === null) {
            goto after_usersUrl;
        }
        after_usersUrl:        $result['users_url'] = $usersUrl;

        
        $teamsUrl = $object->teamsUrl;

        if ($teamsUrl === null) {
            goto after_teamsUrl;
        }
        after_teamsUrl:        $result['teams_url'] = $teamsUrl;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️SimpleUser(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\SimpleUser);
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
        after_login:        $result['login'] = $login;

        
        $id = $object->id;
        after_id:        $result['id'] = $id;

        
        $nodeId = $object->nodeId;
        after_nodeId:        $result['node_id'] = $nodeId;

        
        $avatarUrl = $object->avatarUrl;
        after_avatarUrl:        $result['avatar_url'] = $avatarUrl;

        
        $gravatarId = $object->gravatarId;

        if ($gravatarId === null) {
            goto after_gravatarId;
        }
        after_gravatarId:        $result['gravatar_id'] = $gravatarId;

        
        $url = $object->url;
        after_url:        $result['url'] = $url;

        
        $htmlUrl = $object->htmlUrl;
        after_htmlUrl:        $result['html_url'] = $htmlUrl;

        
        $followersUrl = $object->followersUrl;
        after_followersUrl:        $result['followers_url'] = $followersUrl;

        
        $followingUrl = $object->followingUrl;
        after_followingUrl:        $result['following_url'] = $followingUrl;

        
        $gistsUrl = $object->gistsUrl;
        after_gistsUrl:        $result['gists_url'] = $gistsUrl;

        
        $starredUrl = $object->starredUrl;
        after_starredUrl:        $result['starred_url'] = $starredUrl;

        
        $subscriptionsUrl = $object->subscriptionsUrl;
        after_subscriptionsUrl:        $result['subscriptions_url'] = $subscriptionsUrl;

        
        $organizationsUrl = $object->organizationsUrl;
        after_organizationsUrl:        $result['organizations_url'] = $organizationsUrl;

        
        $reposUrl = $object->reposUrl;
        after_reposUrl:        $result['repos_url'] = $reposUrl;

        
        $eventsUrl = $object->eventsUrl;
        after_eventsUrl:        $result['events_url'] = $eventsUrl;

        
        $receivedEventsUrl = $object->receivedEventsUrl;
        after_receivedEventsUrl:        $result['received_events_url'] = $receivedEventsUrl;

        
        $type = $object->type;
        after_type:        $result['type'] = $type;

        
        $siteAdmin = $object->siteAdmin;
        after_siteAdmin:        $result['site_admin'] = $siteAdmin;

        
        $starredAt = $object->starredAt;

        if ($starredAt === null) {
            goto after_starredAt;
        }
        after_starredAt:        $result['starred_at'] = $starredAt;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️Team(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\Team);
        $result = [];

        $id = $object->id;
        after_id:        $result['id'] = $id;

        
        $nodeId = $object->nodeId;
        after_nodeId:        $result['node_id'] = $nodeId;

        
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

        
        $permissions = $object->permissions;

        if ($permissions === null) {
            goto after_permissions;
        }
        $permissions = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️Team⚡️Permissions($permissions);
        after_permissions:        $result['permissions'] = $permissions;

        
        $url = $object->url;
        after_url:        $result['url'] = $url;

        
        $htmlUrl = $object->htmlUrl;
        after_htmlUrl:        $result['html_url'] = $htmlUrl;

        
        $membersUrl = $object->membersUrl;
        after_membersUrl:        $result['members_url'] = $membersUrl;

        
        $repositoriesUrl = $object->repositoriesUrl;
        after_repositoriesUrl:        $result['repositories_url'] = $repositoriesUrl;

        
        $parent = $object->parent;

        if ($parent === null) {
            goto after_parent;
        }
        after_parent:        $result['parent'] = $parent;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️Team⚡️Permissions(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\Team\Permissions);
        $result = [];

        $pull = $object->pull;
        after_pull:        $result['pull'] = $pull;

        
        $triage = $object->triage;
        after_triage:        $result['triage'] = $triage;

        
        $push = $object->push;
        after_push:        $result['push'] = $push;

        
        $maintain = $object->maintain;
        after_maintain:        $result['maintain'] = $maintain;

        
        $admin = $object->admin;
        after_admin:        $result['admin'] = $admin;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️Integration(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\Integration);
        $result = [];

        $id = $object->id;
        after_id:        $result['id'] = $id;

        
        $slug = $object->slug;

        if ($slug === null) {
            goto after_slug;
        }
        after_slug:        $result['slug'] = $slug;

        
        $nodeId = $object->nodeId;
        after_nodeId:        $result['node_id'] = $nodeId;

        
        $owner = $object->owner;

        if ($owner === null) {
            goto after_owner;
        }
        after_owner:        $result['owner'] = $owner;

        
        $name = $object->name;
        after_name:        $result['name'] = $name;

        
        $description = $object->description;

        if ($description === null) {
            goto after_description;
        }
        after_description:        $result['description'] = $description;

        
        $externalUrl = $object->externalUrl;
        after_externalUrl:        $result['external_url'] = $externalUrl;

        
        $htmlUrl = $object->htmlUrl;
        after_htmlUrl:        $result['html_url'] = $htmlUrl;

        
        $createdAt = $object->createdAt;
        after_createdAt:        $result['created_at'] = $createdAt;

        
        $updatedAt = $object->updatedAt;
        after_updatedAt:        $result['updated_at'] = $updatedAt;

        
        $permissions = $object->permissions;
        $permissions = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️Integration⚡️Permissions($permissions);
        after_permissions:        $result['permissions'] = $permissions;

        
        $events = $object->events;
        static $eventsSerializer0;

        if ($eventsSerializer0 === null) {
            $eventsSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $events = $eventsSerializer0->serialize($events, $this);
        after_events:        $result['events'] = $events;

        
        $installationsCount = $object->installationsCount;

        if ($installationsCount === null) {
            goto after_installationsCount;
        }
        after_installationsCount:        $result['installations_count'] = $installationsCount;

        
        $clientId = $object->clientId;

        if ($clientId === null) {
            goto after_clientId;
        }
        after_clientId:        $result['client_id'] = $clientId;

        
        $clientSecret = $object->clientSecret;

        if ($clientSecret === null) {
            goto after_clientSecret;
        }
        after_clientSecret:        $result['client_secret'] = $clientSecret;

        
        $webhookSecret = $object->webhookSecret;

        if ($webhookSecret === null) {
            goto after_webhookSecret;
        }
        after_webhookSecret:        $result['webhook_secret'] = $webhookSecret;

        
        $pem = $object->pem;

        if ($pem === null) {
            goto after_pem;
        }
        after_pem:        $result['pem'] = $pem;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️Integration⚡️Permissions(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\Integration\Permissions);
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


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️ProtectedBranchPullRequestReview⚡️BypassPullRequestAllowances(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\ProtectedBranchPullRequestReview\BypassPullRequestAllowances);
        $result = [];

        $users = $object->users;

        if ($users === null) {
            goto after_users;
        }
        static $usersSerializer0;

        if ($usersSerializer0 === null) {
            $usersSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\Github\\Schema\\SimpleUser',
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
  0 => 'ApiClients\\Client\\Github\\Schema\\Team',
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
  0 => 'ApiClients\\Client\\Github\\Schema\\Integration',
));
        }
        
        $apps = $appsSerializer0->serialize($apps, $this);
        after_apps:        $result['apps'] = $apps;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️BranchRestrictionPolicy(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\BranchRestrictionPolicy);
        $result = [];

        $url = $object->url;
        after_url:        $result['url'] = $url;

        
        $usersUrl = $object->usersUrl;
        after_usersUrl:        $result['users_url'] = $usersUrl;

        
        $teamsUrl = $object->teamsUrl;
        after_teamsUrl:        $result['teams_url'] = $teamsUrl;

        
        $appsUrl = $object->appsUrl;
        after_appsUrl:        $result['apps_url'] = $appsUrl;

        
        $users = $object->users;
        static $usersSerializer0;

        if ($usersSerializer0 === null) {
            $usersSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\Github\\Schema\\BranchRestrictionPolicy\\Users',
));
        }
        
        $users = $usersSerializer0->serialize($users, $this);
        after_users:        $result['users'] = $users;

        
        $teams = $object->teams;
        static $teamsSerializer0;

        if ($teamsSerializer0 === null) {
            $teamsSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\Github\\Schema\\BranchRestrictionPolicy\\Teams',
));
        }
        
        $teams = $teamsSerializer0->serialize($teams, $this);
        after_teams:        $result['teams'] = $teams;

        
        $apps = $object->apps;
        static $appsSerializer0;

        if ($appsSerializer0 === null) {
            $appsSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\Github\\Schema\\BranchRestrictionPolicy\\Apps',
));
        }
        
        $apps = $appsSerializer0->serialize($apps, $this);
        after_apps:        $result['apps'] = $apps;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️BranchRestrictionPolicy⚡️Users(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\BranchRestrictionPolicy\Users);
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

        
        $nodeId = $object->nodeId;

        if ($nodeId === null) {
            goto after_nodeId;
        }
        after_nodeId:        $result['node_id'] = $nodeId;

        
        $avatarUrl = $object->avatarUrl;

        if ($avatarUrl === null) {
            goto after_avatarUrl;
        }
        after_avatarUrl:        $result['avatar_url'] = $avatarUrl;

        
        $gravatarId = $object->gravatarId;

        if ($gravatarId === null) {
            goto after_gravatarId;
        }
        after_gravatarId:        $result['gravatar_id'] = $gravatarId;

        
        $url = $object->url;

        if ($url === null) {
            goto after_url;
        }
        after_url:        $result['url'] = $url;

        
        $htmlUrl = $object->htmlUrl;

        if ($htmlUrl === null) {
            goto after_htmlUrl;
        }
        after_htmlUrl:        $result['html_url'] = $htmlUrl;

        
        $followersUrl = $object->followersUrl;

        if ($followersUrl === null) {
            goto after_followersUrl;
        }
        after_followersUrl:        $result['followers_url'] = $followersUrl;

        
        $followingUrl = $object->followingUrl;

        if ($followingUrl === null) {
            goto after_followingUrl;
        }
        after_followingUrl:        $result['following_url'] = $followingUrl;

        
        $gistsUrl = $object->gistsUrl;

        if ($gistsUrl === null) {
            goto after_gistsUrl;
        }
        after_gistsUrl:        $result['gists_url'] = $gistsUrl;

        
        $starredUrl = $object->starredUrl;

        if ($starredUrl === null) {
            goto after_starredUrl;
        }
        after_starredUrl:        $result['starred_url'] = $starredUrl;

        
        $subscriptionsUrl = $object->subscriptionsUrl;

        if ($subscriptionsUrl === null) {
            goto after_subscriptionsUrl;
        }
        after_subscriptionsUrl:        $result['subscriptions_url'] = $subscriptionsUrl;

        
        $organizationsUrl = $object->organizationsUrl;

        if ($organizationsUrl === null) {
            goto after_organizationsUrl;
        }
        after_organizationsUrl:        $result['organizations_url'] = $organizationsUrl;

        
        $reposUrl = $object->reposUrl;

        if ($reposUrl === null) {
            goto after_reposUrl;
        }
        after_reposUrl:        $result['repos_url'] = $reposUrl;

        
        $eventsUrl = $object->eventsUrl;

        if ($eventsUrl === null) {
            goto after_eventsUrl;
        }
        after_eventsUrl:        $result['events_url'] = $eventsUrl;

        
        $receivedEventsUrl = $object->receivedEventsUrl;

        if ($receivedEventsUrl === null) {
            goto after_receivedEventsUrl;
        }
        after_receivedEventsUrl:        $result['received_events_url'] = $receivedEventsUrl;

        
        $type = $object->type;

        if ($type === null) {
            goto after_type;
        }
        after_type:        $result['type'] = $type;

        
        $siteAdmin = $object->siteAdmin;

        if ($siteAdmin === null) {
            goto after_siteAdmin;
        }
        after_siteAdmin:        $result['site_admin'] = $siteAdmin;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️BranchRestrictionPolicy⚡️Teams(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\BranchRestrictionPolicy\Teams);
        $result = [];

        $id = $object->id;

        if ($id === null) {
            goto after_id;
        }
        after_id:        $result['id'] = $id;

        
        $nodeId = $object->nodeId;

        if ($nodeId === null) {
            goto after_nodeId;
        }
        after_nodeId:        $result['node_id'] = $nodeId;

        
        $url = $object->url;

        if ($url === null) {
            goto after_url;
        }
        after_url:        $result['url'] = $url;

        
        $htmlUrl = $object->htmlUrl;

        if ($htmlUrl === null) {
            goto after_htmlUrl;
        }
        after_htmlUrl:        $result['html_url'] = $htmlUrl;

        
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

        
        $notificationSetting = $object->notificationSetting;

        if ($notificationSetting === null) {
            goto after_notificationSetting;
        }
        after_notificationSetting:        $result['notification_setting'] = $notificationSetting;

        
        $permission = $object->permission;

        if ($permission === null) {
            goto after_permission;
        }
        after_permission:        $result['permission'] = $permission;

        
        $membersUrl = $object->membersUrl;

        if ($membersUrl === null) {
            goto after_membersUrl;
        }
        after_membersUrl:        $result['members_url'] = $membersUrl;

        
        $repositoriesUrl = $object->repositoriesUrl;

        if ($repositoriesUrl === null) {
            goto after_repositoriesUrl;
        }
        after_repositoriesUrl:        $result['repositories_url'] = $repositoriesUrl;

        
        $parent = $object->parent;

        if ($parent === null) {
            goto after_parent;
        }
        after_parent:        $result['parent'] = $parent;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️BranchRestrictionPolicy⚡️Apps(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\BranchRestrictionPolicy\Apps);
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

        
        $nodeId = $object->nodeId;

        if ($nodeId === null) {
            goto after_nodeId;
        }
        after_nodeId:        $result['node_id'] = $nodeId;

        
        $owner = $object->owner;

        if ($owner === null) {
            goto after_owner;
        }
        $owner = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️BranchRestrictionPolicy⚡️Apps⚡️Owner($owner);
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

        
        $externalUrl = $object->externalUrl;

        if ($externalUrl === null) {
            goto after_externalUrl;
        }
        after_externalUrl:        $result['external_url'] = $externalUrl;

        
        $htmlUrl = $object->htmlUrl;

        if ($htmlUrl === null) {
            goto after_htmlUrl;
        }
        after_htmlUrl:        $result['html_url'] = $htmlUrl;

        
        $createdAt = $object->createdAt;

        if ($createdAt === null) {
            goto after_createdAt;
        }
        after_createdAt:        $result['created_at'] = $createdAt;

        
        $updatedAt = $object->updatedAt;

        if ($updatedAt === null) {
            goto after_updatedAt;
        }
        after_updatedAt:        $result['updated_at'] = $updatedAt;

        
        $permissions = $object->permissions;

        if ($permissions === null) {
            goto after_permissions;
        }
        $permissions = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️BranchRestrictionPolicy⚡️Apps⚡️Permissions($permissions);
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


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️BranchRestrictionPolicy⚡️Apps⚡️Owner(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\BranchRestrictionPolicy\Apps\Owner);
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

        
        $nodeId = $object->nodeId;

        if ($nodeId === null) {
            goto after_nodeId;
        }
        after_nodeId:        $result['node_id'] = $nodeId;

        
        $url = $object->url;

        if ($url === null) {
            goto after_url;
        }
        after_url:        $result['url'] = $url;

        
        $reposUrl = $object->reposUrl;

        if ($reposUrl === null) {
            goto after_reposUrl;
        }
        after_reposUrl:        $result['repos_url'] = $reposUrl;

        
        $eventsUrl = $object->eventsUrl;

        if ($eventsUrl === null) {
            goto after_eventsUrl;
        }
        after_eventsUrl:        $result['events_url'] = $eventsUrl;

        
        $hooksUrl = $object->hooksUrl;

        if ($hooksUrl === null) {
            goto after_hooksUrl;
        }
        after_hooksUrl:        $result['hooks_url'] = $hooksUrl;

        
        $issuesUrl = $object->issuesUrl;

        if ($issuesUrl === null) {
            goto after_issuesUrl;
        }
        after_issuesUrl:        $result['issues_url'] = $issuesUrl;

        
        $membersUrl = $object->membersUrl;

        if ($membersUrl === null) {
            goto after_membersUrl;
        }
        after_membersUrl:        $result['members_url'] = $membersUrl;

        
        $publicMembersUrl = $object->publicMembersUrl;

        if ($publicMembersUrl === null) {
            goto after_publicMembersUrl;
        }
        after_publicMembersUrl:        $result['public_members_url'] = $publicMembersUrl;

        
        $avatarUrl = $object->avatarUrl;

        if ($avatarUrl === null) {
            goto after_avatarUrl;
        }
        after_avatarUrl:        $result['avatar_url'] = $avatarUrl;

        
        $description = $object->description;

        if ($description === null) {
            goto after_description;
        }
        after_description:        $result['description'] = $description;

        
        $gravatarId = $object->gravatarId;

        if ($gravatarId === null) {
            goto after_gravatarId;
        }
        after_gravatarId:        $result['gravatar_id'] = $gravatarId;

        
        $htmlUrl = $object->htmlUrl;

        if ($htmlUrl === null) {
            goto after_htmlUrl;
        }
        after_htmlUrl:        $result['html_url'] = $htmlUrl;

        
        $followersUrl = $object->followersUrl;

        if ($followersUrl === null) {
            goto after_followersUrl;
        }
        after_followersUrl:        $result['followers_url'] = $followersUrl;

        
        $followingUrl = $object->followingUrl;

        if ($followingUrl === null) {
            goto after_followingUrl;
        }
        after_followingUrl:        $result['following_url'] = $followingUrl;

        
        $gistsUrl = $object->gistsUrl;

        if ($gistsUrl === null) {
            goto after_gistsUrl;
        }
        after_gistsUrl:        $result['gists_url'] = $gistsUrl;

        
        $starredUrl = $object->starredUrl;

        if ($starredUrl === null) {
            goto after_starredUrl;
        }
        after_starredUrl:        $result['starred_url'] = $starredUrl;

        
        $subscriptionsUrl = $object->subscriptionsUrl;

        if ($subscriptionsUrl === null) {
            goto after_subscriptionsUrl;
        }
        after_subscriptionsUrl:        $result['subscriptions_url'] = $subscriptionsUrl;

        
        $organizationsUrl = $object->organizationsUrl;

        if ($organizationsUrl === null) {
            goto after_organizationsUrl;
        }
        after_organizationsUrl:        $result['organizations_url'] = $organizationsUrl;

        
        $receivedEventsUrl = $object->receivedEventsUrl;

        if ($receivedEventsUrl === null) {
            goto after_receivedEventsUrl;
        }
        after_receivedEventsUrl:        $result['received_events_url'] = $receivedEventsUrl;

        
        $type = $object->type;

        if ($type === null) {
            goto after_type;
        }
        after_type:        $result['type'] = $type;

        
        $siteAdmin = $object->siteAdmin;

        if ($siteAdmin === null) {
            goto after_siteAdmin;
        }
        after_siteAdmin:        $result['site_admin'] = $siteAdmin;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️BranchRestrictionPolicy⚡️Apps⚡️Permissions(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\BranchRestrictionPolicy\Apps\Permissions);
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

        
        $singleFile = $object->singleFile;

        if ($singleFile === null) {
            goto after_singleFile;
        }
        after_singleFile:        $result['single_file'] = $singleFile;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️BranchProtection⚡️RequiredLinearHistory(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\BranchProtection\RequiredLinearHistory);
        $result = [];

        $enabled = $object->enabled;

        if ($enabled === null) {
            goto after_enabled;
        }
        after_enabled:        $result['enabled'] = $enabled;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️BranchProtection⚡️AllowForcePushes(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\BranchProtection\AllowForcePushes);
        $result = [];

        $enabled = $object->enabled;

        if ($enabled === null) {
            goto after_enabled;
        }
        after_enabled:        $result['enabled'] = $enabled;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️BranchProtection⚡️AllowDeletions(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\BranchProtection\AllowDeletions);
        $result = [];

        $enabled = $object->enabled;

        if ($enabled === null) {
            goto after_enabled;
        }
        after_enabled:        $result['enabled'] = $enabled;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️BranchProtection⚡️BlockCreations(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\BranchProtection\BlockCreations);
        $result = [];

        $enabled = $object->enabled;

        if ($enabled === null) {
            goto after_enabled;
        }
        after_enabled:        $result['enabled'] = $enabled;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️BranchProtection⚡️RequiredConversationResolution(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\BranchProtection\RequiredConversationResolution);
        $result = [];

        $enabled = $object->enabled;

        if ($enabled === null) {
            goto after_enabled;
        }
        after_enabled:        $result['enabled'] = $enabled;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️BranchProtection⚡️RequiredSignatures(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\BranchProtection\RequiredSignatures);
        $result = [];

        $url = $object->url;
        after_url:        $result['url'] = $url;

        
        $enabled = $object->enabled;
        after_enabled:        $result['enabled'] = $enabled;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️BranchProtection⚡️LockBranch(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\BranchProtection\LockBranch);
        $result = [];

        $enabled = $object->enabled;

        if ($enabled === null) {
            goto after_enabled;
        }
        after_enabled:        $result['enabled'] = $enabled;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️BranchProtection⚡️AllowForkSyncing(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\BranchProtection\AllowForkSyncing);
        $result = [];

        $enabled = $object->enabled;

        if ($enabled === null) {
            goto after_enabled;
        }
        after_enabled:        $result['enabled'] = $enabled;


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
