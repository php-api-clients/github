<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Branches\Branch;

use ApiClients\Client\GitHub\Schema\BasicError;
use ApiClients\Client\GitHub\Schema\BranchProtection;
use ApiClients\Client\GitHub\Schema\BranchProtection\AllowDeletions;
use ApiClients\Client\GitHub\Schema\BranchProtection\AllowForcePushes;
use ApiClients\Client\GitHub\Schema\BranchProtection\AllowForkSyncing;
use ApiClients\Client\GitHub\Schema\BranchProtection\BlockCreations;
use ApiClients\Client\GitHub\Schema\BranchProtection\LockBranch;
use ApiClients\Client\GitHub\Schema\BranchProtection\RequiredConversationResolution;
use ApiClients\Client\GitHub\Schema\BranchProtection\RequiredLinearHistory;
use ApiClients\Client\GitHub\Schema\BranchProtection\RequiredSignatures;
use ApiClients\Client\GitHub\Schema\BranchRestrictionPolicy;
use ApiClients\Client\GitHub\Schema\ProtectedBranch;
use ApiClients\Client\GitHub\Schema\ProtectedBranch\EnforceAdmins;
use ApiClients\Client\GitHub\Schema\ProtectedBranch\RequiredPullRequestReviews;
use ApiClients\Client\GitHub\Schema\ProtectedBranchAdminEnforced;
use ApiClients\Client\GitHub\Schema\ProtectedBranchPullRequestReview;
use ApiClients\Client\GitHub\Schema\ProtectedBranchPullRequestReview\BypassPullRequestAllowances;
use ApiClients\Client\GitHub\Schema\ProtectedBranchPullRequestReview\DismissalRestrictions;
use ApiClients\Client\GitHub\Schema\ProtectedBranchRequiredStatusCheck;
use ApiClients\Client\GitHub\Schema\StatusCheckPolicy;
use ApiClients\Client\GitHub\Schema\ValidationErrorSimple;
use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems;
use EventSauce\ObjectHydrator\PropertySerializers\SerializeDateTime;
use EventSauce\ObjectHydrator\PropertySerializers\SerializeUuidToString;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;
use LogicException;
use Throwable;

use function array_pop;
use function assert;
use function count;
use function is_a;
use function is_array;

class Protection implements ObjectMapper
{
    private array $hydrationStack = [];

    public function __construct()
    {
    }

    /**
     * @param class-string<T> $className
     *
     * @return T
     *
     * @template T of object
     */
    public function hydrateObject(string $className, array $payload): object
    {
        return match ($className) {
            'ApiClients\Client\GitHub\Schema\BranchProtection' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchProtection($payload),
                'ApiClients\Client\GitHub\Schema\ProtectedBranchRequiredStatusCheck' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranchRequiredStatusCheck($payload),
                'ApiClients\Client\GitHub\Schema\ProtectedBranchAdminEnforced' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranchAdminEnforced($payload),
                'ApiClients\Client\GitHub\Schema\ProtectedBranchPullRequestReview' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranchPullRequestReview($payload),
                'ApiClients\Client\GitHub\Schema\ProtectedBranchPullRequestReview\DismissalRestrictions' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranchPullRequestReview⚡️DismissalRestrictions($payload),
                'ApiClients\Client\GitHub\Schema\ProtectedBranchPullRequestReview\BypassPullRequestAllowances' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranchPullRequestReview⚡️BypassPullRequestAllowances($payload),
                'ApiClients\Client\GitHub\Schema\BranchRestrictionPolicy' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchRestrictionPolicy($payload),
                'ApiClients\Client\GitHub\Schema\BranchProtection\RequiredLinearHistory' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchProtection⚡️RequiredLinearHistory($payload),
                'ApiClients\Client\GitHub\Schema\BranchProtection\AllowForcePushes' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchProtection⚡️AllowForcePushes($payload),
                'ApiClients\Client\GitHub\Schema\BranchProtection\AllowDeletions' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchProtection⚡️AllowDeletions($payload),
                'ApiClients\Client\GitHub\Schema\BranchProtection\BlockCreations' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchProtection⚡️BlockCreations($payload),
                'ApiClients\Client\GitHub\Schema\BranchProtection\RequiredConversationResolution' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchProtection⚡️RequiredConversationResolution($payload),
                'ApiClients\Client\GitHub\Schema\BranchProtection\RequiredSignatures' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchProtection⚡️RequiredSignatures($payload),
                'ApiClients\Client\GitHub\Schema\BranchProtection\LockBranch' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchProtection⚡️LockBranch($payload),
                'ApiClients\Client\GitHub\Schema\BranchProtection\AllowForkSyncing' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchProtection⚡️AllowForkSyncing($payload),
                'ApiClients\Client\GitHub\Schema\BasicError' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BasicError($payload),
                'ApiClients\Client\GitHub\Schema\ProtectedBranch' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranch($payload),
                'ApiClients\Client\GitHub\Schema\StatusCheckPolicy' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️StatusCheckPolicy($payload),
                'ApiClients\Client\GitHub\Schema\ProtectedBranch\RequiredPullRequestReviews' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranch⚡️RequiredPullRequestReviews($payload),
                'ApiClients\Client\GitHub\Schema\ProtectedBranch\RequiredPullRequestReviews\DismissalRestrictions' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranch⚡️RequiredPullRequestReviews⚡️DismissalRestrictions($payload),
                'ApiClients\Client\GitHub\Schema\ProtectedBranch\RequiredPullRequestReviews\BypassPullRequestAllowances' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranch⚡️RequiredPullRequestReviews⚡️BypassPullRequestAllowances($payload),
                'ApiClients\Client\GitHub\Schema\ProtectedBranch\RequiredSignatures' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranch⚡️RequiredSignatures($payload),
                'ApiClients\Client\GitHub\Schema\ProtectedBranch\EnforceAdmins' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranch⚡️EnforceAdmins($payload),
                'ApiClients\Client\GitHub\Schema\ProtectedBranch\RequiredLinearHistory' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranch⚡️RequiredLinearHistory($payload),
                'ApiClients\Client\GitHub\Schema\ProtectedBranch\AllowForcePushes' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranch⚡️AllowForcePushes($payload),
                'ApiClients\Client\GitHub\Schema\ProtectedBranch\AllowDeletions' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranch⚡️AllowDeletions($payload),
                'ApiClients\Client\GitHub\Schema\ProtectedBranch\RequiredConversationResolution' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranch⚡️RequiredConversationResolution($payload),
                'ApiClients\Client\GitHub\Schema\ProtectedBranch\BlockCreations' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranch⚡️BlockCreations($payload),
                'ApiClients\Client\GitHub\Schema\ProtectedBranch\LockBranch' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranch⚡️LockBranch($payload),
                'ApiClients\Client\GitHub\Schema\ProtectedBranch\AllowForkSyncing' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranch⚡️AllowForkSyncing($payload),
                'ApiClients\Client\GitHub\Schema\ValidationErrorSimple' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ValidationErrorSimple($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchProtection(array $payload): BranchProtection
    {
        $properties    = [];
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
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranchRequiredStatusCheck($value);
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
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranchAdminEnforced($value);
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
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranchPullRequestReview($value);
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
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchRestrictionPolicy($value);
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
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchProtection⚡️RequiredLinearHistory($value);
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
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchProtection⚡️AllowForcePushes($value);
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
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchProtection⚡️AllowDeletions($value);
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
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchProtection⚡️BlockCreations($value);
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
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchProtection⚡️RequiredConversationResolution($value);
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
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchProtection⚡️RequiredSignatures($value);
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
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchProtection⚡️LockBranch($value);
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
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchProtection⚡️AllowForkSyncing($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['allowForkSyncing'] = $value;

            after_allowForkSyncing:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\BranchProtection', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(BranchProtection::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new BranchProtection(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\BranchProtection', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranchRequiredStatusCheck(array $payload): ProtectedBranchRequiredStatusCheck
    {
        $properties    = [];
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
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ProtectedBranchRequiredStatusCheck', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(ProtectedBranchRequiredStatusCheck::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new ProtectedBranchRequiredStatusCheck(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ProtectedBranchRequiredStatusCheck', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranchAdminEnforced(array $payload): ProtectedBranchAdminEnforced
    {
        $properties    = [];
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
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ProtectedBranchAdminEnforced', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(ProtectedBranchAdminEnforced::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new ProtectedBranchAdminEnforced(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ProtectedBranchAdminEnforced', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranchPullRequestReview(array $payload): ProtectedBranchPullRequestReview
    {
        $properties    = [];
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
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranchPullRequestReview⚡️DismissalRestrictions($value);
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
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranchPullRequestReview⚡️BypassPullRequestAllowances($value);
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
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ProtectedBranchPullRequestReview', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(ProtectedBranchPullRequestReview::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new ProtectedBranchPullRequestReview(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ProtectedBranchPullRequestReview', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranchPullRequestReview⚡️DismissalRestrictions(array $payload): DismissalRestrictions
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['users'] ?? null;

            if ($value === null) {
                $properties['users'] = null;
                goto after_users;
            }

            $properties['users'] = $value;

            after_users:

            $value = $payload['teams'] ?? null;

            if ($value === null) {
                $properties['teams'] = null;
                goto after_teams;
            }

            $properties['teams'] = $value;

            after_teams:

            $value = $payload['apps'] ?? null;

            if ($value === null) {
                $properties['apps'] = null;
                goto after_apps;
            }

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
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ProtectedBranchPullRequestReview\DismissalRestrictions', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(DismissalRestrictions::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new DismissalRestrictions(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ProtectedBranchPullRequestReview\DismissalRestrictions', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranchPullRequestReview⚡️BypassPullRequestAllowances(array $payload): BypassPullRequestAllowances
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['users'] ?? null;

            if ($value === null) {
                $properties['users'] = null;
                goto after_users;
            }

            $properties['users'] = $value;

            after_users:

            $value = $payload['teams'] ?? null;

            if ($value === null) {
                $properties['teams'] = null;
                goto after_teams;
            }

            $properties['teams'] = $value;

            after_teams:

            $value = $payload['apps'] ?? null;

            if ($value === null) {
                $properties['apps'] = null;
                goto after_apps;
            }

            $properties['apps'] = $value;

            after_apps:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ProtectedBranchPullRequestReview\BypassPullRequestAllowances', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(BypassPullRequestAllowances::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new BypassPullRequestAllowances(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ProtectedBranchPullRequestReview\BypassPullRequestAllowances', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchRestrictionPolicy(array $payload): BranchRestrictionPolicy
    {
        $properties    = [];
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
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\BranchRestrictionPolicy', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(BranchRestrictionPolicy::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new BranchRestrictionPolicy(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\BranchRestrictionPolicy', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchProtection⚡️RequiredLinearHistory(array $payload): RequiredLinearHistory
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['enabled'] ?? null;

            if ($value === null) {
                $properties['enabled'] = null;
                goto after_enabled;
            }

            $properties['enabled'] = $value;

            after_enabled:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\BranchProtection\RequiredLinearHistory', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(RequiredLinearHistory::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new RequiredLinearHistory(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\BranchProtection\RequiredLinearHistory', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchProtection⚡️AllowForcePushes(array $payload): AllowForcePushes
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['enabled'] ?? null;

            if ($value === null) {
                $properties['enabled'] = null;
                goto after_enabled;
            }

            $properties['enabled'] = $value;

            after_enabled:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\BranchProtection\AllowForcePushes', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(AllowForcePushes::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new AllowForcePushes(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\BranchProtection\AllowForcePushes', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchProtection⚡️AllowDeletions(array $payload): AllowDeletions
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['enabled'] ?? null;

            if ($value === null) {
                $properties['enabled'] = null;
                goto after_enabled;
            }

            $properties['enabled'] = $value;

            after_enabled:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\BranchProtection\AllowDeletions', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(AllowDeletions::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new AllowDeletions(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\BranchProtection\AllowDeletions', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchProtection⚡️BlockCreations(array $payload): BlockCreations
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['enabled'] ?? null;

            if ($value === null) {
                $properties['enabled'] = null;
                goto after_enabled;
            }

            $properties['enabled'] = $value;

            after_enabled:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\BranchProtection\BlockCreations', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(BlockCreations::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new BlockCreations(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\BranchProtection\BlockCreations', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchProtection⚡️RequiredConversationResolution(array $payload): RequiredConversationResolution
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['enabled'] ?? null;

            if ($value === null) {
                $properties['enabled'] = null;
                goto after_enabled;
            }

            $properties['enabled'] = $value;

            after_enabled:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\BranchProtection\RequiredConversationResolution', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(RequiredConversationResolution::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new RequiredConversationResolution(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\BranchProtection\RequiredConversationResolution', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchProtection⚡️RequiredSignatures(array $payload): RequiredSignatures
    {
        $properties    = [];
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
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\BranchProtection\RequiredSignatures', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(RequiredSignatures::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new RequiredSignatures(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\BranchProtection\RequiredSignatures', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchProtection⚡️LockBranch(array $payload): LockBranch
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['enabled'] ?? null;

            if ($value === null) {
                $properties['enabled'] = null;
                goto after_enabled;
            }

            $properties['enabled'] = $value;

            after_enabled:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\BranchProtection\LockBranch', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(LockBranch::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new LockBranch(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\BranchProtection\LockBranch', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchProtection⚡️AllowForkSyncing(array $payload): AllowForkSyncing
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['enabled'] ?? null;

            if ($value === null) {
                $properties['enabled'] = null;
                goto after_enabled;
            }

            $properties['enabled'] = $value;

            after_enabled:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\BranchProtection\AllowForkSyncing', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(AllowForkSyncing::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new AllowForkSyncing(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\BranchProtection\AllowForkSyncing', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BasicError(array $payload): BasicError
    {
        $properties    = [];
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
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\BasicError', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(BasicError::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new BasicError(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\BasicError', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranch(array $payload): ProtectedBranch
    {
        $properties    = [];
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
                $properties['requiredStatusChecks'] = null;
                goto after_requiredStatusChecks;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'requiredStatusChecks';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️StatusCheckPolicy($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['requiredStatusChecks'] = $value;

            after_requiredStatusChecks:

            $value = $payload['required_pull_request_reviews'] ?? null;

            if ($value === null) {
                $properties['requiredPullRequestReviews'] = null;
                goto after_requiredPullRequestReviews;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'requiredPullRequestReviews';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranch⚡️RequiredPullRequestReviews($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['requiredPullRequestReviews'] = $value;

            after_requiredPullRequestReviews:

            $value = $payload['required_signatures'] ?? null;

            if ($value === null) {
                $properties['requiredSignatures'] = null;
                goto after_requiredSignatures;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'requiredSignatures';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranch⚡️RequiredSignatures($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['requiredSignatures'] = $value;

            after_requiredSignatures:

            $value = $payload['enforce_admins'] ?? null;

            if ($value === null) {
                $properties['enforceAdmins'] = null;
                goto after_enforceAdmins;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'enforceAdmins';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranch⚡️EnforceAdmins($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['enforceAdmins'] = $value;

            after_enforceAdmins:

            $value = $payload['required_linear_history'] ?? null;

            if ($value === null) {
                $properties['requiredLinearHistory'] = null;
                goto after_requiredLinearHistory;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'requiredLinearHistory';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranch⚡️RequiredLinearHistory($value);
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
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranch⚡️AllowForcePushes($value);
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
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranch⚡️AllowDeletions($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['allowDeletions'] = $value;

            after_allowDeletions:

            $value = $payload['restrictions'] ?? null;

            if ($value === null) {
                $properties['restrictions'] = null;
                goto after_restrictions;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'restrictions';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchRestrictionPolicy($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['restrictions'] = $value;

            after_restrictions:

            $value = $payload['required_conversation_resolution'] ?? null;

            if ($value === null) {
                $properties['requiredConversationResolution'] = null;
                goto after_requiredConversationResolution;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'requiredConversationResolution';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranch⚡️RequiredConversationResolution($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['requiredConversationResolution'] = $value;

            after_requiredConversationResolution:

            $value = $payload['block_creations'] ?? null;

            if ($value === null) {
                $properties['blockCreations'] = null;
                goto after_blockCreations;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'blockCreations';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranch⚡️BlockCreations($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['blockCreations'] = $value;

            after_blockCreations:

            $value = $payload['lock_branch'] ?? null;

            if ($value === null) {
                $properties['lockBranch'] = null;
                goto after_lockBranch;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'lockBranch';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranch⚡️LockBranch($value);
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
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranch⚡️AllowForkSyncing($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['allowForkSyncing'] = $value;

            after_allowForkSyncing:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ProtectedBranch', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(ProtectedBranch::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new ProtectedBranch(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ProtectedBranch', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️StatusCheckPolicy(array $payload): StatusCheckPolicy
    {
        $properties    = [];
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
                goto after_contextsUrl;
            }

            $properties['contextsUrl'] = $value;

            after_contextsUrl:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\StatusCheckPolicy', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(StatusCheckPolicy::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new StatusCheckPolicy(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\StatusCheckPolicy', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranch⚡️RequiredPullRequestReviews(array $payload): RequiredPullRequestReviews
    {
        $properties    = [];
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
                $properties['dismissStaleReviews'] = null;
                goto after_dismissStaleReviews;
            }

            $properties['dismissStaleReviews'] = $value;

            after_dismissStaleReviews:

            $value = $payload['require_code_owner_reviews'] ?? null;

            if ($value === null) {
                $properties['requireCodeOwnerReviews'] = null;
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

            $value = $payload['dismissal_restrictions'] ?? null;

            if ($value === null) {
                $properties['dismissalRestrictions'] = null;
                goto after_dismissalRestrictions;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'dismissalRestrictions';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranch⚡️RequiredPullRequestReviews⚡️DismissalRestrictions($value);
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
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranch⚡️RequiredPullRequestReviews⚡️BypassPullRequestAllowances($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['bypassPullRequestAllowances'] = $value;

            after_bypassPullRequestAllowances:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ProtectedBranch\RequiredPullRequestReviews', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(RequiredPullRequestReviews::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new RequiredPullRequestReviews(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ProtectedBranch\RequiredPullRequestReviews', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranch⚡️RequiredPullRequestReviews⚡️DismissalRestrictions(array $payload): \ApiClients\Client\GitHub\Schema\ProtectedBranch\RequiredPullRequestReviews\DismissalRestrictions
    {
        $properties    = [];
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
                $properties['apps'] = null;
                goto after_apps;
            }

            $properties['apps'] = $value;

            after_apps:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ProtectedBranch\RequiredPullRequestReviews\DismissalRestrictions', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\ProtectedBranch\RequiredPullRequestReviews\DismissalRestrictions::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\ProtectedBranch\RequiredPullRequestReviews\DismissalRestrictions(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ProtectedBranch\RequiredPullRequestReviews\DismissalRestrictions', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranch⚡️RequiredPullRequestReviews⚡️BypassPullRequestAllowances(array $payload): \ApiClients\Client\GitHub\Schema\ProtectedBranch\RequiredPullRequestReviews\BypassPullRequestAllowances
    {
        $properties    = [];
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
                $properties['apps'] = null;
                goto after_apps;
            }

            $properties['apps'] = $value;

            after_apps:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ProtectedBranch\RequiredPullRequestReviews\BypassPullRequestAllowances', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\ProtectedBranch\RequiredPullRequestReviews\BypassPullRequestAllowances::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\ProtectedBranch\RequiredPullRequestReviews\BypassPullRequestAllowances(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ProtectedBranch\RequiredPullRequestReviews\BypassPullRequestAllowances', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranch⚡️RequiredSignatures(array $payload): \ApiClients\Client\GitHub\Schema\ProtectedBranch\RequiredSignatures
    {
        $properties    = [];
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
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ProtectedBranch\RequiredSignatures', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\ProtectedBranch\RequiredSignatures::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\ProtectedBranch\RequiredSignatures(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ProtectedBranch\RequiredSignatures', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranch⚡️EnforceAdmins(array $payload): EnforceAdmins
    {
        $properties    = [];
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
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ProtectedBranch\EnforceAdmins', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(EnforceAdmins::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new EnforceAdmins(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ProtectedBranch\EnforceAdmins', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranch⚡️RequiredLinearHistory(array $payload): \ApiClients\Client\GitHub\Schema\ProtectedBranch\RequiredLinearHistory
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['enabled'] ?? null;

            if ($value === null) {
                $missingFields[] = 'enabled';
                goto after_enabled;
            }

            $properties['enabled'] = $value;

            after_enabled:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ProtectedBranch\RequiredLinearHistory', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\ProtectedBranch\RequiredLinearHistory::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\ProtectedBranch\RequiredLinearHistory(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ProtectedBranch\RequiredLinearHistory', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranch⚡️AllowForcePushes(array $payload): \ApiClients\Client\GitHub\Schema\ProtectedBranch\AllowForcePushes
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['enabled'] ?? null;

            if ($value === null) {
                $missingFields[] = 'enabled';
                goto after_enabled;
            }

            $properties['enabled'] = $value;

            after_enabled:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ProtectedBranch\AllowForcePushes', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\ProtectedBranch\AllowForcePushes::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\ProtectedBranch\AllowForcePushes(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ProtectedBranch\AllowForcePushes', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranch⚡️AllowDeletions(array $payload): \ApiClients\Client\GitHub\Schema\ProtectedBranch\AllowDeletions
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['enabled'] ?? null;

            if ($value === null) {
                $missingFields[] = 'enabled';
                goto after_enabled;
            }

            $properties['enabled'] = $value;

            after_enabled:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ProtectedBranch\AllowDeletions', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\ProtectedBranch\AllowDeletions::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\ProtectedBranch\AllowDeletions(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ProtectedBranch\AllowDeletions', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranch⚡️RequiredConversationResolution(array $payload): \ApiClients\Client\GitHub\Schema\ProtectedBranch\RequiredConversationResolution
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['enabled'] ?? null;

            if ($value === null) {
                $properties['enabled'] = null;
                goto after_enabled;
            }

            $properties['enabled'] = $value;

            after_enabled:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ProtectedBranch\RequiredConversationResolution', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\ProtectedBranch\RequiredConversationResolution::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\ProtectedBranch\RequiredConversationResolution(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ProtectedBranch\RequiredConversationResolution', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranch⚡️BlockCreations(array $payload): \ApiClients\Client\GitHub\Schema\ProtectedBranch\BlockCreations
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['enabled'] ?? null;

            if ($value === null) {
                $missingFields[] = 'enabled';
                goto after_enabled;
            }

            $properties['enabled'] = $value;

            after_enabled:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ProtectedBranch\BlockCreations', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\ProtectedBranch\BlockCreations::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\ProtectedBranch\BlockCreations(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ProtectedBranch\BlockCreations', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranch⚡️LockBranch(array $payload): \ApiClients\Client\GitHub\Schema\ProtectedBranch\LockBranch
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['enabled'] ?? null;

            if ($value === null) {
                $properties['enabled'] = null;
                goto after_enabled;
            }

            $properties['enabled'] = $value;

            after_enabled:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ProtectedBranch\LockBranch', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\ProtectedBranch\LockBranch::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\ProtectedBranch\LockBranch(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ProtectedBranch\LockBranch', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranch⚡️AllowForkSyncing(array $payload): \ApiClients\Client\GitHub\Schema\ProtectedBranch\AllowForkSyncing
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['enabled'] ?? null;

            if ($value === null) {
                $properties['enabled'] = null;
                goto after_enabled;
            }

            $properties['enabled'] = $value;

            after_enabled:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ProtectedBranch\AllowForkSyncing', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\ProtectedBranch\AllowForkSyncing::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\ProtectedBranch\AllowForkSyncing(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ProtectedBranch\AllowForkSyncing', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ValidationErrorSimple(array $payload): ValidationErrorSimple
    {
        $properties    = [];
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
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ValidationErrorSimple', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(ValidationErrorSimple::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new ValidationErrorSimple(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ValidationErrorSimple', $exception, stack: $this->hydrationStack);
        }
    }

    private function serializeViaTypeMap(string $accessor, object $object, array $payloadToTypeMap): array
    {
        foreach ($payloadToTypeMap as $payloadType => [$valueType, $method]) {
            if (is_a($object, $valueType)) {
                return [$accessor => $payloadType] + $this->{$method}($object);
            }
        }

        throw new LogicException('No type mapped for object of class: ' . $object::class);
    }

    public function serializeObject(object $object): mixed
    {
        return $this->serializeObjectOfType($object, $object::class);
    }

    /**
     * @param T               $object
     * @param class-string<T> $className
     *
     * @template T
     */
    public function serializeObjectOfType(object $object, string $className): mixed
    {
        try {
            return match ($className) {
                'array' => $this->serializeValuearray($object),
                'Ramsey\Uuid\UuidInterface' => $this->serializeValueRamsey⚡️Uuid⚡️UuidInterface($object),
                'DateTime' => $this->serializeValueDateTime($object),
                'DateTimeImmutable' => $this->serializeValueDateTimeImmutable($object),
                'DateTimeInterface' => $this->serializeValueDateTimeInterface($object),
                'ApiClients\Client\GitHub\Schema\BranchProtection' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchProtection($object),
                'ApiClients\Client\GitHub\Schema\ProtectedBranchRequiredStatusCheck' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranchRequiredStatusCheck($object),
                'ApiClients\Client\GitHub\Schema\ProtectedBranchAdminEnforced' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranchAdminEnforced($object),
                'ApiClients\Client\GitHub\Schema\ProtectedBranchPullRequestReview' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranchPullRequestReview($object),
                'ApiClients\Client\GitHub\Schema\ProtectedBranchPullRequestReview\DismissalRestrictions' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranchPullRequestReview⚡️DismissalRestrictions($object),
                'ApiClients\Client\GitHub\Schema\ProtectedBranchPullRequestReview\BypassPullRequestAllowances' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranchPullRequestReview⚡️BypassPullRequestAllowances($object),
                'ApiClients\Client\GitHub\Schema\BranchRestrictionPolicy' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchRestrictionPolicy($object),
                'ApiClients\Client\GitHub\Schema\BranchProtection\RequiredLinearHistory' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchProtection⚡️RequiredLinearHistory($object),
                'ApiClients\Client\GitHub\Schema\BranchProtection\AllowForcePushes' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchProtection⚡️AllowForcePushes($object),
                'ApiClients\Client\GitHub\Schema\BranchProtection\AllowDeletions' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchProtection⚡️AllowDeletions($object),
                'ApiClients\Client\GitHub\Schema\BranchProtection\BlockCreations' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchProtection⚡️BlockCreations($object),
                'ApiClients\Client\GitHub\Schema\BranchProtection\RequiredConversationResolution' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchProtection⚡️RequiredConversationResolution($object),
                'ApiClients\Client\GitHub\Schema\BranchProtection\RequiredSignatures' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchProtection⚡️RequiredSignatures($object),
                'ApiClients\Client\GitHub\Schema\BranchProtection\LockBranch' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchProtection⚡️LockBranch($object),
                'ApiClients\Client\GitHub\Schema\BranchProtection\AllowForkSyncing' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchProtection⚡️AllowForkSyncing($object),
                'ApiClients\Client\GitHub\Schema\BasicError' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BasicError($object),
                'ApiClients\Client\GitHub\Schema\ProtectedBranch' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranch($object),
                'ApiClients\Client\GitHub\Schema\StatusCheckPolicy' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️StatusCheckPolicy($object),
                'ApiClients\Client\GitHub\Schema\ProtectedBranch\RequiredPullRequestReviews' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranch⚡️RequiredPullRequestReviews($object),
                'ApiClients\Client\GitHub\Schema\ProtectedBranch\RequiredPullRequestReviews\DismissalRestrictions' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranch⚡️RequiredPullRequestReviews⚡️DismissalRestrictions($object),
                'ApiClients\Client\GitHub\Schema\ProtectedBranch\RequiredPullRequestReviews\BypassPullRequestAllowances' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranch⚡️RequiredPullRequestReviews⚡️BypassPullRequestAllowances($object),
                'ApiClients\Client\GitHub\Schema\ProtectedBranch\RequiredSignatures' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranch⚡️RequiredSignatures($object),
                'ApiClients\Client\GitHub\Schema\ProtectedBranch\EnforceAdmins' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranch⚡️EnforceAdmins($object),
                'ApiClients\Client\GitHub\Schema\ProtectedBranch\RequiredLinearHistory' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranch⚡️RequiredLinearHistory($object),
                'ApiClients\Client\GitHub\Schema\ProtectedBranch\AllowForcePushes' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranch⚡️AllowForcePushes($object),
                'ApiClients\Client\GitHub\Schema\ProtectedBranch\AllowDeletions' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranch⚡️AllowDeletions($object),
                'ApiClients\Client\GitHub\Schema\ProtectedBranch\RequiredConversationResolution' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranch⚡️RequiredConversationResolution($object),
                'ApiClients\Client\GitHub\Schema\ProtectedBranch\BlockCreations' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranch⚡️BlockCreations($object),
                'ApiClients\Client\GitHub\Schema\ProtectedBranch\LockBranch' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranch⚡️LockBranch($object),
                'ApiClients\Client\GitHub\Schema\ProtectedBranch\AllowForkSyncing' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranch⚡️AllowForkSyncing($object),
                'ApiClients\Client\GitHub\Schema\ValidationErrorSimple' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ValidationErrorSimple($object),
                default => throw new LogicException("No serialization defined for $className"),
            };
        } catch (Throwable $exception) {
            throw UnableToSerializeObject::dueToError($className, $exception);
        }
    }

    private function serializeValuearray(mixed $value): mixed
    {
        static $serializer;

        if ($serializer === null) {
            $serializer = new SerializeArrayItems(...[]);
        }

        return $serializer->serialize($value, $this);
    }

    private function serializeValueRamsey⚡️Uuid⚡️UuidInterface(mixed $value): mixed
    {
        static $serializer;

        if ($serializer === null) {
            $serializer = new SerializeUuidToString(...[]);
        }

        return $serializer->serialize($value, $this);
    }

    private function serializeValueDateTime(mixed $value): mixed
    {
        static $serializer;

        if ($serializer === null) {
            $serializer = new SerializeDateTime(...[]);
        }

        return $serializer->serialize($value, $this);
    }

    private function serializeValueDateTimeImmutable(mixed $value): mixed
    {
        static $serializer;

        if ($serializer === null) {
            $serializer = new SerializeDateTime(...[]);
        }

        return $serializer->serialize($value, $this);
    }

    private function serializeValueDateTimeInterface(mixed $value): mixed
    {
        static $serializer;

        if ($serializer === null) {
            $serializer = new SerializeDateTime(...[]);
        }

        return $serializer->serialize($value, $this);
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchProtection(mixed $object): mixed
    {
        assert($object instanceof BranchProtection);
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

        $requiredStatusChecks                                                = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranchRequiredStatusCheck($requiredStatusChecks);
        after_requiredStatusChecks:        $result['required_status_checks'] = $requiredStatusChecks;

        $enforceAdmins = $object->enforceAdmins;

        if ($enforceAdmins === null) {
            goto after_enforceAdmins;
        }

        $enforceAdmins                                        = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranchAdminEnforced($enforceAdmins);
        after_enforceAdmins:        $result['enforce_admins'] = $enforceAdmins;

        $requiredPullRequestReviews = $object->requiredPullRequestReviews;

        if ($requiredPullRequestReviews === null) {
            goto after_requiredPullRequestReviews;
        }

        $requiredPullRequestReviews                                                       = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranchPullRequestReview($requiredPullRequestReviews);
        after_requiredPullRequestReviews:        $result['required_pull_request_reviews'] = $requiredPullRequestReviews;

        $restrictions = $object->restrictions;

        if ($restrictions === null) {
            goto after_restrictions;
        }

        $restrictions                                      = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchRestrictionPolicy($restrictions);
        after_restrictions:        $result['restrictions'] = $restrictions;

        $requiredLinearHistory = $object->requiredLinearHistory;

        if ($requiredLinearHistory === null) {
            goto after_requiredLinearHistory;
        }

        $requiredLinearHistory                                                 = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchProtection⚡️RequiredLinearHistory($requiredLinearHistory);
        after_requiredLinearHistory:        $result['required_linear_history'] = $requiredLinearHistory;

        $allowForcePushes = $object->allowForcePushes;

        if ($allowForcePushes === null) {
            goto after_allowForcePushes;
        }

        $allowForcePushes                                            = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchProtection⚡️AllowForcePushes($allowForcePushes);
        after_allowForcePushes:        $result['allow_force_pushes'] = $allowForcePushes;

        $allowDeletions = $object->allowDeletions;

        if ($allowDeletions === null) {
            goto after_allowDeletions;
        }

        $allowDeletions                                         = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchProtection⚡️AllowDeletions($allowDeletions);
        after_allowDeletions:        $result['allow_deletions'] = $allowDeletions;

        $blockCreations = $object->blockCreations;

        if ($blockCreations === null) {
            goto after_blockCreations;
        }

        $blockCreations                                         = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchProtection⚡️BlockCreations($blockCreations);
        after_blockCreations:        $result['block_creations'] = $blockCreations;

        $requiredConversationResolution = $object->requiredConversationResolution;

        if ($requiredConversationResolution === null) {
            goto after_requiredConversationResolution;
        }

        $requiredConversationResolution                                                          = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchProtection⚡️RequiredConversationResolution($requiredConversationResolution);
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

        $requiredSignatures                                             = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchProtection⚡️RequiredSignatures($requiredSignatures);
        after_requiredSignatures:        $result['required_signatures'] = $requiredSignatures;

        $lockBranch = $object->lockBranch;

        if ($lockBranch === null) {
            goto after_lockBranch;
        }

        $lockBranch                                     = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchProtection⚡️LockBranch($lockBranch);
        after_lockBranch:        $result['lock_branch'] = $lockBranch;

        $allowForkSyncing = $object->allowForkSyncing;

        if ($allowForkSyncing === null) {
            goto after_allowForkSyncing;
        }

        $allowForkSyncing                                            = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchProtection⚡️AllowForkSyncing($allowForkSyncing);
        after_allowForkSyncing:        $result['allow_fork_syncing'] = $allowForkSyncing;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranchRequiredStatusCheck(mixed $object): mixed
    {
        assert($object instanceof ProtectedBranchRequiredStatusCheck);
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
            $contextsSerializer0 = new SerializeArrayItems(...[]);
        }

        $contexts                                  = $contextsSerializer0->serialize($contexts, $this);
        after_contexts:        $result['contexts'] = $contexts;

        $checks = $object->checks;
        static $checksSerializer0;

        if ($checksSerializer0 === null) {
            $checksSerializer0 = new SerializeArrayItems(...[]);
        }

        $checks                                = $checksSerializer0->serialize($checks, $this);
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

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranchAdminEnforced(mixed $object): mixed
    {
        assert($object instanceof ProtectedBranchAdminEnforced);
        $result = [];

        $url                             = $object->url;
        after_url:        $result['url'] = $url;

        $enabled                                 = $object->enabled;
        after_enabled:        $result['enabled'] = $enabled;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranchPullRequestReview(mixed $object): mixed
    {
        assert($object instanceof ProtectedBranchPullRequestReview);
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

        $dismissalRestrictions                                                = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranchPullRequestReview⚡️DismissalRestrictions($dismissalRestrictions);
        after_dismissalRestrictions:        $result['dismissal_restrictions'] = $dismissalRestrictions;

        $bypassPullRequestAllowances = $object->bypassPullRequestAllowances;

        if ($bypassPullRequestAllowances === null) {
            goto after_bypassPullRequestAllowances;
        }

        $bypassPullRequestAllowances                                                        = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranchPullRequestReview⚡️BypassPullRequestAllowances($bypassPullRequestAllowances);
        after_bypassPullRequestAllowances:        $result['bypass_pull_request_allowances'] = $bypassPullRequestAllowances;

        $dismissStaleReviews                                               = $object->dismissStaleReviews;
        after_dismissStaleReviews:        $result['dismiss_stale_reviews'] = $dismissStaleReviews;

        $requireCodeOwnerReviews                                                    = $object->requireCodeOwnerReviews;
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

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranchPullRequestReview⚡️DismissalRestrictions(mixed $object): mixed
    {
        assert($object instanceof DismissalRestrictions);
        $result = [];

        $users = $object->users;

        if ($users === null) {
            goto after_users;
        }

        static $usersSerializer0;

        if ($usersSerializer0 === null) {
            $usersSerializer0 = new SerializeArrayItems(...[]);
        }

        $users                               = $usersSerializer0->serialize($users, $this);
        after_users:        $result['users'] = $users;

        $teams = $object->teams;

        if ($teams === null) {
            goto after_teams;
        }

        static $teamsSerializer0;

        if ($teamsSerializer0 === null) {
            $teamsSerializer0 = new SerializeArrayItems(...[]);
        }

        $teams                               = $teamsSerializer0->serialize($teams, $this);
        after_teams:        $result['teams'] = $teams;

        $apps = $object->apps;

        if ($apps === null) {
            goto after_apps;
        }

        static $appsSerializer0;

        if ($appsSerializer0 === null) {
            $appsSerializer0 = new SerializeArrayItems(...[]);
        }

        $apps                              = $appsSerializer0->serialize($apps, $this);
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

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranchPullRequestReview⚡️BypassPullRequestAllowances(mixed $object): mixed
    {
        assert($object instanceof BypassPullRequestAllowances);
        $result = [];

        $users = $object->users;

        if ($users === null) {
            goto after_users;
        }

        static $usersSerializer0;

        if ($usersSerializer0 === null) {
            $usersSerializer0 = new SerializeArrayItems(...[]);
        }

        $users                               = $usersSerializer0->serialize($users, $this);
        after_users:        $result['users'] = $users;

        $teams = $object->teams;

        if ($teams === null) {
            goto after_teams;
        }

        static $teamsSerializer0;

        if ($teamsSerializer0 === null) {
            $teamsSerializer0 = new SerializeArrayItems(...[]);
        }

        $teams                               = $teamsSerializer0->serialize($teams, $this);
        after_teams:        $result['teams'] = $teams;

        $apps = $object->apps;

        if ($apps === null) {
            goto after_apps;
        }

        static $appsSerializer0;

        if ($appsSerializer0 === null) {
            $appsSerializer0 = new SerializeArrayItems(...[]);
        }

        $apps                              = $appsSerializer0->serialize($apps, $this);
        after_apps:        $result['apps'] = $apps;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchRestrictionPolicy(mixed $object): mixed
    {
        assert($object instanceof BranchRestrictionPolicy);
        $result = [];

        $url                             = $object->url;
        after_url:        $result['url'] = $url;

        $usersUrl                                   = $object->usersUrl;
        after_usersUrl:        $result['users_url'] = $usersUrl;

        $teamsUrl                                   = $object->teamsUrl;
        after_teamsUrl:        $result['teams_url'] = $teamsUrl;

        $appsUrl                                  = $object->appsUrl;
        after_appsUrl:        $result['apps_url'] = $appsUrl;

        $users = $object->users;
        static $usersSerializer0;

        if ($usersSerializer0 === null) {
            $usersSerializer0 = new SerializeArrayItems(...[]);
        }

        $users                               = $usersSerializer0->serialize($users, $this);
        after_users:        $result['users'] = $users;

        $teams = $object->teams;
        static $teamsSerializer0;

        if ($teamsSerializer0 === null) {
            $teamsSerializer0 = new SerializeArrayItems(...[]);
        }

        $teams                               = $teamsSerializer0->serialize($teams, $this);
        after_teams:        $result['teams'] = $teams;

        $apps = $object->apps;
        static $appsSerializer0;

        if ($appsSerializer0 === null) {
            $appsSerializer0 = new SerializeArrayItems(...[]);
        }

        $apps                              = $appsSerializer0->serialize($apps, $this);
        after_apps:        $result['apps'] = $apps;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchProtection⚡️RequiredLinearHistory(mixed $object): mixed
    {
        assert($object instanceof RequiredLinearHistory);
        $result = [];

        $enabled = $object->enabled;

        if ($enabled === null) {
            goto after_enabled;
        }

        after_enabled:        $result['enabled'] = $enabled;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchProtection⚡️AllowForcePushes(mixed $object): mixed
    {
        assert($object instanceof AllowForcePushes);
        $result = [];

        $enabled = $object->enabled;

        if ($enabled === null) {
            goto after_enabled;
        }

        after_enabled:        $result['enabled'] = $enabled;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchProtection⚡️AllowDeletions(mixed $object): mixed
    {
        assert($object instanceof AllowDeletions);
        $result = [];

        $enabled = $object->enabled;

        if ($enabled === null) {
            goto after_enabled;
        }

        after_enabled:        $result['enabled'] = $enabled;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchProtection⚡️BlockCreations(mixed $object): mixed
    {
        assert($object instanceof BlockCreations);
        $result = [];

        $enabled = $object->enabled;

        if ($enabled === null) {
            goto after_enabled;
        }

        after_enabled:        $result['enabled'] = $enabled;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchProtection⚡️RequiredConversationResolution(mixed $object): mixed
    {
        assert($object instanceof RequiredConversationResolution);
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
        assert($object instanceof RequiredSignatures);
        $result = [];

        $url                             = $object->url;
        after_url:        $result['url'] = $url;

        $enabled                                 = $object->enabled;
        after_enabled:        $result['enabled'] = $enabled;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchProtection⚡️LockBranch(mixed $object): mixed
    {
        assert($object instanceof LockBranch);
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
        assert($object instanceof AllowForkSyncing);
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
        assert($object instanceof BasicError);
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

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranch(mixed $object): mixed
    {
        assert($object instanceof ProtectedBranch);
        $result = [];

        $url                             = $object->url;
        after_url:        $result['url'] = $url;

        $requiredStatusChecks = $object->requiredStatusChecks;

        if ($requiredStatusChecks === null) {
            goto after_requiredStatusChecks;
        }

        $requiredStatusChecks                                                = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️StatusCheckPolicy($requiredStatusChecks);
        after_requiredStatusChecks:        $result['required_status_checks'] = $requiredStatusChecks;

        $requiredPullRequestReviews = $object->requiredPullRequestReviews;

        if ($requiredPullRequestReviews === null) {
            goto after_requiredPullRequestReviews;
        }

        $requiredPullRequestReviews                                                       = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranch⚡️RequiredPullRequestReviews($requiredPullRequestReviews);
        after_requiredPullRequestReviews:        $result['required_pull_request_reviews'] = $requiredPullRequestReviews;

        $requiredSignatures = $object->requiredSignatures;

        if ($requiredSignatures === null) {
            goto after_requiredSignatures;
        }

        $requiredSignatures                                             = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranch⚡️RequiredSignatures($requiredSignatures);
        after_requiredSignatures:        $result['required_signatures'] = $requiredSignatures;

        $enforceAdmins = $object->enforceAdmins;

        if ($enforceAdmins === null) {
            goto after_enforceAdmins;
        }

        $enforceAdmins                                        = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranch⚡️EnforceAdmins($enforceAdmins);
        after_enforceAdmins:        $result['enforce_admins'] = $enforceAdmins;

        $requiredLinearHistory = $object->requiredLinearHistory;

        if ($requiredLinearHistory === null) {
            goto after_requiredLinearHistory;
        }

        $requiredLinearHistory                                                 = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranch⚡️RequiredLinearHistory($requiredLinearHistory);
        after_requiredLinearHistory:        $result['required_linear_history'] = $requiredLinearHistory;

        $allowForcePushes = $object->allowForcePushes;

        if ($allowForcePushes === null) {
            goto after_allowForcePushes;
        }

        $allowForcePushes                                            = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranch⚡️AllowForcePushes($allowForcePushes);
        after_allowForcePushes:        $result['allow_force_pushes'] = $allowForcePushes;

        $allowDeletions = $object->allowDeletions;

        if ($allowDeletions === null) {
            goto after_allowDeletions;
        }

        $allowDeletions                                         = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranch⚡️AllowDeletions($allowDeletions);
        after_allowDeletions:        $result['allow_deletions'] = $allowDeletions;

        $restrictions = $object->restrictions;

        if ($restrictions === null) {
            goto after_restrictions;
        }

        $restrictions                                      = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchRestrictionPolicy($restrictions);
        after_restrictions:        $result['restrictions'] = $restrictions;

        $requiredConversationResolution = $object->requiredConversationResolution;

        if ($requiredConversationResolution === null) {
            goto after_requiredConversationResolution;
        }

        $requiredConversationResolution                                                          = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranch⚡️RequiredConversationResolution($requiredConversationResolution);
        after_requiredConversationResolution:        $result['required_conversation_resolution'] = $requiredConversationResolution;

        $blockCreations = $object->blockCreations;

        if ($blockCreations === null) {
            goto after_blockCreations;
        }

        $blockCreations                                         = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranch⚡️BlockCreations($blockCreations);
        after_blockCreations:        $result['block_creations'] = $blockCreations;

        $lockBranch = $object->lockBranch;

        if ($lockBranch === null) {
            goto after_lockBranch;
        }

        $lockBranch                                     = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranch⚡️LockBranch($lockBranch);
        after_lockBranch:        $result['lock_branch'] = $lockBranch;

        $allowForkSyncing = $object->allowForkSyncing;

        if ($allowForkSyncing === null) {
            goto after_allowForkSyncing;
        }

        $allowForkSyncing                                            = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranch⚡️AllowForkSyncing($allowForkSyncing);
        after_allowForkSyncing:        $result['allow_fork_syncing'] = $allowForkSyncing;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️StatusCheckPolicy(mixed $object): mixed
    {
        assert($object instanceof StatusCheckPolicy);
        $result = [];

        $url                             = $object->url;
        after_url:        $result['url'] = $url;

        $strict                                = $object->strict;
        after_strict:        $result['strict'] = $strict;

        $contexts = $object->contexts;
        static $contextsSerializer0;

        if ($contextsSerializer0 === null) {
            $contextsSerializer0 = new SerializeArrayItems(...[]);
        }

        $contexts                                  = $contextsSerializer0->serialize($contexts, $this);
        after_contexts:        $result['contexts'] = $contexts;

        $checks = $object->checks;
        static $checksSerializer0;

        if ($checksSerializer0 === null) {
            $checksSerializer0 = new SerializeArrayItems(...[]);
        }

        $checks                                = $checksSerializer0->serialize($checks, $this);
        after_checks:        $result['checks'] = $checks;

        $contextsUrl                                      = $object->contextsUrl;
        after_contextsUrl:        $result['contexts_url'] = $contextsUrl;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranch⚡️RequiredPullRequestReviews(mixed $object): mixed
    {
        assert($object instanceof RequiredPullRequestReviews);
        $result = [];

        $url                             = $object->url;
        after_url:        $result['url'] = $url;

        $dismissStaleReviews = $object->dismissStaleReviews;

        if ($dismissStaleReviews === null) {
            goto after_dismissStaleReviews;
        }

        after_dismissStaleReviews:        $result['dismiss_stale_reviews'] = $dismissStaleReviews;

        $requireCodeOwnerReviews = $object->requireCodeOwnerReviews;

        if ($requireCodeOwnerReviews === null) {
            goto after_requireCodeOwnerReviews;
        }

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

        $dismissalRestrictions = $object->dismissalRestrictions;

        if ($dismissalRestrictions === null) {
            goto after_dismissalRestrictions;
        }

        $dismissalRestrictions                                                = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranch⚡️RequiredPullRequestReviews⚡️DismissalRestrictions($dismissalRestrictions);
        after_dismissalRestrictions:        $result['dismissal_restrictions'] = $dismissalRestrictions;

        $bypassPullRequestAllowances = $object->bypassPullRequestAllowances;

        if ($bypassPullRequestAllowances === null) {
            goto after_bypassPullRequestAllowances;
        }

        $bypassPullRequestAllowances                                                        = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranch⚡️RequiredPullRequestReviews⚡️BypassPullRequestAllowances($bypassPullRequestAllowances);
        after_bypassPullRequestAllowances:        $result['bypass_pull_request_allowances'] = $bypassPullRequestAllowances;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranch⚡️RequiredPullRequestReviews⚡️DismissalRestrictions(mixed $object): mixed
    {
        assert($object instanceof \ApiClients\Client\GitHub\Schema\ProtectedBranch\RequiredPullRequestReviews\DismissalRestrictions);
        $result = [];

        $url                             = $object->url;
        after_url:        $result['url'] = $url;

        $usersUrl                                   = $object->usersUrl;
        after_usersUrl:        $result['users_url'] = $usersUrl;

        $teamsUrl                                   = $object->teamsUrl;
        after_teamsUrl:        $result['teams_url'] = $teamsUrl;

        $users = $object->users;
        static $usersSerializer0;

        if ($usersSerializer0 === null) {
            $usersSerializer0 = new SerializeArrayItems(...[]);
        }

        $users                               = $usersSerializer0->serialize($users, $this);
        after_users:        $result['users'] = $users;

        $teams = $object->teams;
        static $teamsSerializer0;

        if ($teamsSerializer0 === null) {
            $teamsSerializer0 = new SerializeArrayItems(...[]);
        }

        $teams                               = $teamsSerializer0->serialize($teams, $this);
        after_teams:        $result['teams'] = $teams;

        $apps = $object->apps;

        if ($apps === null) {
            goto after_apps;
        }

        static $appsSerializer0;

        if ($appsSerializer0 === null) {
            $appsSerializer0 = new SerializeArrayItems(...[]);
        }

        $apps                              = $appsSerializer0->serialize($apps, $this);
        after_apps:        $result['apps'] = $apps;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranch⚡️RequiredPullRequestReviews⚡️BypassPullRequestAllowances(mixed $object): mixed
    {
        assert($object instanceof \ApiClients\Client\GitHub\Schema\ProtectedBranch\RequiredPullRequestReviews\BypassPullRequestAllowances);
        $result = [];

        $users = $object->users;
        static $usersSerializer0;

        if ($usersSerializer0 === null) {
            $usersSerializer0 = new SerializeArrayItems(...[]);
        }

        $users                               = $usersSerializer0->serialize($users, $this);
        after_users:        $result['users'] = $users;

        $teams = $object->teams;
        static $teamsSerializer0;

        if ($teamsSerializer0 === null) {
            $teamsSerializer0 = new SerializeArrayItems(...[]);
        }

        $teams                               = $teamsSerializer0->serialize($teams, $this);
        after_teams:        $result['teams'] = $teams;

        $apps = $object->apps;

        if ($apps === null) {
            goto after_apps;
        }

        static $appsSerializer0;

        if ($appsSerializer0 === null) {
            $appsSerializer0 = new SerializeArrayItems(...[]);
        }

        $apps                              = $appsSerializer0->serialize($apps, $this);
        after_apps:        $result['apps'] = $apps;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranch⚡️RequiredSignatures(mixed $object): mixed
    {
        assert($object instanceof \ApiClients\Client\GitHub\Schema\ProtectedBranch\RequiredSignatures);
        $result = [];

        $url                             = $object->url;
        after_url:        $result['url'] = $url;

        $enabled                                 = $object->enabled;
        after_enabled:        $result['enabled'] = $enabled;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranch⚡️EnforceAdmins(mixed $object): mixed
    {
        assert($object instanceof EnforceAdmins);
        $result = [];

        $url                             = $object->url;
        after_url:        $result['url'] = $url;

        $enabled                                 = $object->enabled;
        after_enabled:        $result['enabled'] = $enabled;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranch⚡️RequiredLinearHistory(mixed $object): mixed
    {
        assert($object instanceof \ApiClients\Client\GitHub\Schema\ProtectedBranch\RequiredLinearHistory);
        $result = [];

        $enabled                                 = $object->enabled;
        after_enabled:        $result['enabled'] = $enabled;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranch⚡️AllowForcePushes(mixed $object): mixed
    {
        assert($object instanceof \ApiClients\Client\GitHub\Schema\ProtectedBranch\AllowForcePushes);
        $result = [];

        $enabled                                 = $object->enabled;
        after_enabled:        $result['enabled'] = $enabled;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranch⚡️AllowDeletions(mixed $object): mixed
    {
        assert($object instanceof \ApiClients\Client\GitHub\Schema\ProtectedBranch\AllowDeletions);
        $result = [];

        $enabled                                 = $object->enabled;
        after_enabled:        $result['enabled'] = $enabled;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranch⚡️RequiredConversationResolution(mixed $object): mixed
    {
        assert($object instanceof \ApiClients\Client\GitHub\Schema\ProtectedBranch\RequiredConversationResolution);
        $result = [];

        $enabled = $object->enabled;

        if ($enabled === null) {
            goto after_enabled;
        }

        after_enabled:        $result['enabled'] = $enabled;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranch⚡️BlockCreations(mixed $object): mixed
    {
        assert($object instanceof \ApiClients\Client\GitHub\Schema\ProtectedBranch\BlockCreations);
        $result = [];

        $enabled                                 = $object->enabled;
        after_enabled:        $result['enabled'] = $enabled;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranch⚡️LockBranch(mixed $object): mixed
    {
        assert($object instanceof \ApiClients\Client\GitHub\Schema\ProtectedBranch\LockBranch);
        $result = [];

        $enabled = $object->enabled;

        if ($enabled === null) {
            goto after_enabled;
        }

        after_enabled:        $result['enabled'] = $enabled;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranch⚡️AllowForkSyncing(mixed $object): mixed
    {
        assert($object instanceof \ApiClients\Client\GitHub\Schema\ProtectedBranch\AllowForkSyncing);
        $result = [];

        $enabled = $object->enabled;

        if ($enabled === null) {
            goto after_enabled;
        }

        after_enabled:        $result['enabled'] = $enabled;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ValidationErrorSimple(mixed $object): mixed
    {
        assert($object instanceof ValidationErrorSimple);
        $result = [];

        $message                                 = $object->message;
        after_message:        $result['message'] = $message;

        $documentationUrl                                           = $object->documentationUrl;
        after_documentationUrl:        $result['documentation_url'] = $documentationUrl;

        $errors = $object->errors;

        if ($errors === null) {
            goto after_errors;
        }

        static $errorsSerializer0;

        if ($errorsSerializer0 === null) {
            $errorsSerializer0 = new SerializeArrayItems(...[]);
        }

        $errors                                = $errorsSerializer0->serialize($errors, $this);
        after_errors:        $result['errors'] = $errors;

        return $result;
    }

    /**
     * @param class-string<T> $className
     * @param iterable<array> $payloads;
     *
     * @return IterableList<T>
     *
     * @throws UnableToHydrateObject
     *
     * @template T
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
     * @param class-string<T> $className
     * @param iterable<array> $payloads;
     *
     * @return IterableList<T>
     *
     * @throws UnableToSerializeObject
     *
     * @template T
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
