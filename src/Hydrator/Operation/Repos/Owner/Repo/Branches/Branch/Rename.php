<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Hydrator\Operation\Repos\Owner\Repo\Branches\Branch;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class Rename implements ObjectMapper
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
            'ApiClients\Client\GitHub\Schema\BranchWithProtection' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchWithProtection($payload),
                'ApiClients\Client\GitHub\Schema\Commit' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Commit($payload),
                'ApiClients\Client\GitHub\Schema\Commit\Commit' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Commit⚡️Commit($payload),
                'ApiClients\Client\GitHub\Schema\GitUser' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️GitUser($payload),
                'ApiClients\Client\GitHub\Schema\Commit\Commit\Tree' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Commit⚡️Commit⚡️Tree($payload),
                'ApiClients\Client\GitHub\Schema\Verification' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Verification($payload),
                'ApiClients\Client\GitHub\Schema\SimpleUser' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($payload),
                'ApiClients\Client\GitHub\Schema\Commit\Stats' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Commit⚡️Stats($payload),
                'ApiClients\Client\GitHub\Schema\BranchWithProtection\Links' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchWithProtection⚡️Links($payload),
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
                'ApiClients\Client\GitHub\Schema\ValidationError' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ValidationError($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchWithProtection(array $payload): \ApiClients\Client\GitHub\Schema\BranchWithProtection
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
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Commit($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['commit'] = $value;

            after_commit:

            $value = $payload['_links'] ?? null;

            if ($value === null) {
                $missingFields[] = '_links';
                goto after_links;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'links';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchWithProtection⚡️Links($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['links'] = $value;

            after_links:

            $value = $payload['protected'] ?? null;

            if ($value === null) {
                $missingFields[] = 'protected';
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
                goto after_protectionUrl;
            }

            $properties['protectionUrl'] = $value;

            after_protectionUrl:

            $value = $payload['pattern'] ?? null;

            if ($value === null) {
                $properties['pattern'] = null;
                goto after_pattern;
            }

            $properties['pattern'] = $value;

            after_pattern:

            $value = $payload['required_approving_review_count'] ?? null;

            if ($value === null) {
                $properties['requiredApprovingReviewCount'] = null;
                goto after_requiredApprovingReviewCount;
            }

            $properties['requiredApprovingReviewCount'] = $value;

            after_requiredApprovingReviewCount:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\BranchWithProtection', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\BranchWithProtection::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\BranchWithProtection(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\BranchWithProtection', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Commit(array $payload): \ApiClients\Client\GitHub\Schema\Commit
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

            $value = $payload['sha'] ?? null;

            if ($value === null) {
                $missingFields[] = 'sha';
                goto after_sha;
            }

            $properties['sha'] = $value;

            after_sha:

            $value = $payload['node_id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'node_id';
                goto after_nodeId;
            }

            $properties['nodeId'] = $value;

            after_nodeId:

            $value = $payload['html_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'html_url';
                goto after_htmlUrl;
            }

            $properties['htmlUrl'] = $value;

            after_htmlUrl:

            $value = $payload['comments_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'comments_url';
                goto after_commentsUrl;
            }

            $properties['commentsUrl'] = $value;

            after_commentsUrl:

            $value = $payload['commit'] ?? null;

            if ($value === null) {
                $missingFields[] = 'commit';
                goto after_commit;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'commit';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Commit⚡️Commit($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['commit'] = $value;

            after_commit:

            $value = $payload['author'] ?? null;

            if ($value === null) {
                $properties['author'] = null;
                goto after_author;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'author';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['author'] = $value;

            after_author:

            $value = $payload['committer'] ?? null;

            if ($value === null) {
                $properties['committer'] = null;
                goto after_committer;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'committer';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['committer'] = $value;

            after_committer:

            $value = $payload['parents'] ?? null;

            if ($value === null) {
                $missingFields[] = 'parents';
                goto after_parents;
            }

            $properties['parents'] = $value;

            after_parents:

            $value = $payload['stats'] ?? null;

            if ($value === null) {
                $properties['stats'] = null;
                goto after_stats;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'stats';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Commit⚡️Stats($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['stats'] = $value;

            after_stats:

            $value = $payload['files'] ?? null;

            if ($value === null) {
                $properties['files'] = null;
                goto after_files;
            }

            $properties['files'] = $value;

            after_files:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Commit', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\Commit::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\Commit(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Commit', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Commit⚡️Commit(array $payload): \ApiClients\Client\GitHub\Schema\Commit\Commit
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

            $value = $payload['author'] ?? null;

            if ($value === null) {
                $properties['author'] = null;
                goto after_author;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'author';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️GitUser($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['author'] = $value;

            after_author:

            $value = $payload['committer'] ?? null;

            if ($value === null) {
                $properties['committer'] = null;
                goto after_committer;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'committer';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️GitUser($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['committer'] = $value;

            after_committer:

            $value = $payload['message'] ?? null;

            if ($value === null) {
                $missingFields[] = 'message';
                goto after_message;
            }

            $properties['message'] = $value;

            after_message:

            $value = $payload['comment_count'] ?? null;

            if ($value === null) {
                $missingFields[] = 'comment_count';
                goto after_commentCount;
            }

            $properties['commentCount'] = $value;

            after_commentCount:

            $value = $payload['tree'] ?? null;

            if ($value === null) {
                $missingFields[] = 'tree';
                goto after_tree;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'tree';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Commit⚡️Commit⚡️Tree($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['tree'] = $value;

            after_tree:

            $value = $payload['verification'] ?? null;

            if ($value === null) {
                $properties['verification'] = null;
                goto after_verification;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'verification';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Verification($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['verification'] = $value;

            after_verification:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Commit\Commit', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\Commit\Commit::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\Commit\Commit(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Commit\Commit', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️GitUser(array $payload): \ApiClients\Client\GitHub\Schema\GitUser
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

            $value = $payload['date'] ?? null;

            if ($value === null) {
                $properties['date'] = null;
                goto after_date;
            }

            $properties['date'] = $value;

            after_date:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\GitUser', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\GitUser::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\GitUser(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\GitUser', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Commit⚡️Commit⚡️Tree(array $payload): \ApiClients\Client\GitHub\Schema\Commit\Commit\Tree
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
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Commit\Commit\Tree', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\Commit\Commit\Tree::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\Commit\Commit\Tree(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Commit\Commit\Tree', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Verification(array $payload): \ApiClients\Client\GitHub\Schema\Verification
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['verified'] ?? null;

            if ($value === null) {
                $missingFields[] = 'verified';
                goto after_verified;
            }

            $properties['verified'] = $value;

            after_verified:

            $value = $payload['reason'] ?? null;

            if ($value === null) {
                $missingFields[] = 'reason';
                goto after_reason;
            }

            $properties['reason'] = $value;

            after_reason:

            $value = $payload['payload'] ?? null;

            if ($value === null) {
                $properties['payload'] = null;
                goto after_payload;
            }

            $properties['payload'] = $value;

            after_payload:

            $value = $payload['signature'] ?? null;

            if ($value === null) {
                $properties['signature'] = null;
                goto after_signature;
            }

            $properties['signature'] = $value;

            after_signature:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Verification', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\Verification::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\Verification(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Verification', $exception, stack: $this->hydrationStack);
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

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Commit⚡️Stats(array $payload): \ApiClients\Client\GitHub\Schema\Commit\Stats
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['additions'] ?? null;

            if ($value === null) {
                $properties['additions'] = null;
                goto after_additions;
            }

            $properties['additions'] = $value;

            after_additions:

            $value = $payload['deletions'] ?? null;

            if ($value === null) {
                $properties['deletions'] = null;
                goto after_deletions;
            }

            $properties['deletions'] = $value;

            after_deletions:

            $value = $payload['total'] ?? null;

            if ($value === null) {
                $properties['total'] = null;
                goto after_total;
            }

            $properties['total'] = $value;

            after_total:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Commit\Stats', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\Commit\Stats::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\Commit\Stats(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Commit\Stats', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchWithProtection⚡️Links(array $payload): \ApiClients\Client\GitHub\Schema\BranchWithProtection\Links
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['html'] ?? null;

            if ($value === null) {
                $missingFields[] = 'html';
                goto after_html;
            }

            $properties['html'] = $value;

            after_html:

            $value = $payload['self'] ?? null;

            if ($value === null) {
                $missingFields[] = 'self';
                goto after_self;
            }

            $properties['self'] = $value;

            after_self:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\BranchWithProtection\Links', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\BranchWithProtection\Links::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\BranchWithProtection\Links(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\BranchWithProtection\Links', $exception, stack: $this->hydrationStack);
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
                $properties['requiredStatusChecks'] = null;
                goto after_requiredStatusChecks;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'requiredStatusChecks';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranchRequiredStatusCheck($value);
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
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranchAdminEnforced($value);
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
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranchPullRequestReview($value);
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
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchRestrictionPolicy($value);
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
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchProtection⚡️RequiredLinearHistory($value);
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
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchProtection⚡️AllowForcePushes($value);
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
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchProtection⚡️AllowDeletions($value);
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
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchProtection⚡️BlockCreations($value);
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
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchProtection⚡️RequiredConversationResolution($value);
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
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchProtection⚡️RequiredSignatures($value);
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
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchProtection⚡️LockBranch($value);
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
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchProtection⚡️AllowForkSyncing($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['allowForkSyncing'] = $value;

            after_allowForkSyncing:

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

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranchAdminEnforced(array $payload): \ApiClients\Client\GitHub\Schema\ProtectedBranchAdminEnforced
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
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranchPullRequestReview⚡️DismissalRestrictions($value);
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
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranchPullRequestReview⚡️BypassPullRequestAllowances($value);
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

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchProtection⚡️AllowForcePushes(array $payload): \ApiClients\Client\GitHub\Schema\BranchProtection\AllowForcePushes
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
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\BranchProtection\AllowForcePushes', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\BranchProtection\AllowForcePushes::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\BranchProtection\AllowForcePushes(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\BranchProtection\AllowForcePushes', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchProtection⚡️AllowDeletions(array $payload): \ApiClients\Client\GitHub\Schema\BranchProtection\AllowDeletions
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
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\BranchProtection\AllowDeletions', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\BranchProtection\AllowDeletions::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\BranchProtection\AllowDeletions(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\BranchProtection\AllowDeletions', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchProtection⚡️BlockCreations(array $payload): \ApiClients\Client\GitHub\Schema\BranchProtection\BlockCreations
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
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\BranchProtection\BlockCreations', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\BranchProtection\BlockCreations::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\BranchProtection\BlockCreations(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\BranchProtection\BlockCreations', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchProtection⚡️RequiredConversationResolution(array $payload): \ApiClients\Client\GitHub\Schema\BranchProtection\RequiredConversationResolution
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
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\BranchProtection\RequiredConversationResolution', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\BranchProtection\RequiredConversationResolution::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\BranchProtection\RequiredConversationResolution(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\BranchProtection\RequiredConversationResolution', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchProtection⚡️RequiredSignatures(array $payload): \ApiClients\Client\GitHub\Schema\BranchProtection\RequiredSignatures
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

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ValidationError(array $payload): \ApiClients\Client\GitHub\Schema\ValidationError
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

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ValidationError', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\ValidationError::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\ValidationError(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ValidationError', $exception, stack: $this->hydrationStack);
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
            'ApiClients\Client\GitHub\Schema\BranchWithProtection' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchWithProtection($object),
            'ApiClients\Client\GitHub\Schema\Commit' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Commit($object),
            'ApiClients\Client\GitHub\Schema\Commit\Commit' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Commit⚡️Commit($object),
            'ApiClients\Client\GitHub\Schema\GitUser' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️GitUser($object),
            'ApiClients\Client\GitHub\Schema\Commit\Commit\Tree' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Commit⚡️Commit⚡️Tree($object),
            'ApiClients\Client\GitHub\Schema\Verification' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Verification($object),
            'ApiClients\Client\GitHub\Schema\SimpleUser' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($object),
            'ApiClients\Client\GitHub\Schema\Commit\Stats' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Commit⚡️Stats($object),
            'ApiClients\Client\GitHub\Schema\BranchWithProtection\Links' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchWithProtection⚡️Links($object),
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
            'ApiClients\Client\GitHub\Schema\ValidationError' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ValidationError($object),
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


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchWithProtection(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\BranchWithProtection);
        $result = [];

        $name = $object->name;
        after_name:        $result['name'] = $name;

        
        $commit = $object->commit;
        $commit = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Commit($commit);
        after_commit:        $result['commit'] = $commit;

        
        $links = $object->links;
        $links = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchWithProtection⚡️Links($links);
        after_links:        $result['_links'] = $links;

        
        $protected = $object->protected;
        after_protected:        $result['protected'] = $protected;

        
        $protection = $object->protection;
        $protection = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchProtection($protection);
        after_protection:        $result['protection'] = $protection;

        
        $protectionUrl = $object->protectionUrl;
        after_protectionUrl:        $result['protection_url'] = $protectionUrl;

        
        $pattern = $object->pattern;

        if ($pattern === null) {
            goto after_pattern;
        }
        after_pattern:        $result['pattern'] = $pattern;

        
        $requiredApprovingReviewCount = $object->requiredApprovingReviewCount;

        if ($requiredApprovingReviewCount === null) {
            goto after_requiredApprovingReviewCount;
        }
        after_requiredApprovingReviewCount:        $result['required_approving_review_count'] = $requiredApprovingReviewCount;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Commit(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\Commit);
        $result = [];

        $url = $object->url;
        after_url:        $result['url'] = $url;

        
        $sha = $object->sha;
        after_sha:        $result['sha'] = $sha;

        
        $nodeId = $object->nodeId;
        after_nodeId:        $result['node_id'] = $nodeId;

        
        $htmlUrl = $object->htmlUrl;
        after_htmlUrl:        $result['html_url'] = $htmlUrl;

        
        $commentsUrl = $object->commentsUrl;
        after_commentsUrl:        $result['comments_url'] = $commentsUrl;

        
        $commit = $object->commit;
        $commit = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Commit⚡️Commit($commit);
        after_commit:        $result['commit'] = $commit;

        
        $author = $object->author;

        if ($author === null) {
            goto after_author;
        }
        $author = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($author);
        after_author:        $result['author'] = $author;

        
        $committer = $object->committer;

        if ($committer === null) {
            goto after_committer;
        }
        $committer = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($committer);
        after_committer:        $result['committer'] = $committer;

        
        $parents = $object->parents;
        static $parentsSerializer0;

        if ($parentsSerializer0 === null) {
            $parentsSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $parents = $parentsSerializer0->serialize($parents, $this);
        after_parents:        $result['parents'] = $parents;

        
        $stats = $object->stats;

        if ($stats === null) {
            goto after_stats;
        }
        $stats = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Commit⚡️Stats($stats);
        after_stats:        $result['stats'] = $stats;

        
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


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Commit⚡️Commit(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\Commit\Commit);
        $result = [];

        $url = $object->url;
        after_url:        $result['url'] = $url;

        
        $author = $object->author;

        if ($author === null) {
            goto after_author;
        }
        $author = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️GitUser($author);
        after_author:        $result['author'] = $author;

        
        $committer = $object->committer;

        if ($committer === null) {
            goto after_committer;
        }
        $committer = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️GitUser($committer);
        after_committer:        $result['committer'] = $committer;

        
        $message = $object->message;
        after_message:        $result['message'] = $message;

        
        $commentCount = $object->commentCount;
        after_commentCount:        $result['comment_count'] = $commentCount;

        
        $tree = $object->tree;
        $tree = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Commit⚡️Commit⚡️Tree($tree);
        after_tree:        $result['tree'] = $tree;

        
        $verification = $object->verification;

        if ($verification === null) {
            goto after_verification;
        }
        $verification = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Verification($verification);
        after_verification:        $result['verification'] = $verification;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️GitUser(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\GitUser);
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

        
        $date = $object->date;

        if ($date === null) {
            goto after_date;
        }
        after_date:        $result['date'] = $date;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Commit⚡️Commit⚡️Tree(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\Commit\Commit\Tree);
        $result = [];

        $sha = $object->sha;
        after_sha:        $result['sha'] = $sha;

        
        $url = $object->url;
        after_url:        $result['url'] = $url;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Verification(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\Verification);
        $result = [];

        $verified = $object->verified;
        after_verified:        $result['verified'] = $verified;

        
        $reason = $object->reason;
        after_reason:        $result['reason'] = $reason;

        
        $payload = $object->payload;

        if ($payload === null) {
            goto after_payload;
        }
        after_payload:        $result['payload'] = $payload;

        
        $signature = $object->signature;

        if ($signature === null) {
            goto after_signature;
        }
        after_signature:        $result['signature'] = $signature;


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


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Commit⚡️Stats(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\Commit\Stats);
        $result = [];

        $additions = $object->additions;

        if ($additions === null) {
            goto after_additions;
        }
        after_additions:        $result['additions'] = $additions;

        
        $deletions = $object->deletions;

        if ($deletions === null) {
            goto after_deletions;
        }
        after_deletions:        $result['deletions'] = $deletions;

        
        $total = $object->total;

        if ($total === null) {
            goto after_total;
        }
        after_total:        $result['total'] = $total;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchWithProtection⚡️Links(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\BranchWithProtection\Links);
        $result = [];

        $html = $object->html;
        after_html:        $result['html'] = $html;

        
        $self = $object->self;
        after_self:        $result['self'] = $self;


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

        
        $requiredStatusChecks = $object->requiredStatusChecks;

        if ($requiredStatusChecks === null) {
            goto after_requiredStatusChecks;
        }
        $requiredStatusChecks = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranchRequiredStatusCheck($requiredStatusChecks);
        after_requiredStatusChecks:        $result['required_status_checks'] = $requiredStatusChecks;

        
        $enforceAdmins = $object->enforceAdmins;

        if ($enforceAdmins === null) {
            goto after_enforceAdmins;
        }
        $enforceAdmins = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranchAdminEnforced($enforceAdmins);
        after_enforceAdmins:        $result['enforce_admins'] = $enforceAdmins;

        
        $requiredPullRequestReviews = $object->requiredPullRequestReviews;

        if ($requiredPullRequestReviews === null) {
            goto after_requiredPullRequestReviews;
        }
        $requiredPullRequestReviews = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranchPullRequestReview($requiredPullRequestReviews);
        after_requiredPullRequestReviews:        $result['required_pull_request_reviews'] = $requiredPullRequestReviews;

        
        $restrictions = $object->restrictions;

        if ($restrictions === null) {
            goto after_restrictions;
        }
        $restrictions = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchRestrictionPolicy($restrictions);
        after_restrictions:        $result['restrictions'] = $restrictions;

        
        $requiredLinearHistory = $object->requiredLinearHistory;

        if ($requiredLinearHistory === null) {
            goto after_requiredLinearHistory;
        }
        $requiredLinearHistory = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchProtection⚡️RequiredLinearHistory($requiredLinearHistory);
        after_requiredLinearHistory:        $result['required_linear_history'] = $requiredLinearHistory;

        
        $allowForcePushes = $object->allowForcePushes;

        if ($allowForcePushes === null) {
            goto after_allowForcePushes;
        }
        $allowForcePushes = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchProtection⚡️AllowForcePushes($allowForcePushes);
        after_allowForcePushes:        $result['allow_force_pushes'] = $allowForcePushes;

        
        $allowDeletions = $object->allowDeletions;

        if ($allowDeletions === null) {
            goto after_allowDeletions;
        }
        $allowDeletions = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchProtection⚡️AllowDeletions($allowDeletions);
        after_allowDeletions:        $result['allow_deletions'] = $allowDeletions;

        
        $blockCreations = $object->blockCreations;

        if ($blockCreations === null) {
            goto after_blockCreations;
        }
        $blockCreations = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchProtection⚡️BlockCreations($blockCreations);
        after_blockCreations:        $result['block_creations'] = $blockCreations;

        
        $requiredConversationResolution = $object->requiredConversationResolution;

        if ($requiredConversationResolution === null) {
            goto after_requiredConversationResolution;
        }
        $requiredConversationResolution = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchProtection⚡️RequiredConversationResolution($requiredConversationResolution);
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
        $requiredSignatures = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchProtection⚡️RequiredSignatures($requiredSignatures);
        after_requiredSignatures:        $result['required_signatures'] = $requiredSignatures;

        
        $lockBranch = $object->lockBranch;

        if ($lockBranch === null) {
            goto after_lockBranch;
        }
        $lockBranch = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchProtection⚡️LockBranch($lockBranch);
        after_lockBranch:        $result['lock_branch'] = $lockBranch;

        
        $allowForkSyncing = $object->allowForkSyncing;

        if ($allowForkSyncing === null) {
            goto after_allowForkSyncing;
        }
        $allowForkSyncing = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchProtection⚡️AllowForkSyncing($allowForkSyncing);
        after_allowForkSyncing:        $result['allow_fork_syncing'] = $allowForkSyncing;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranchRequiredStatusCheck(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\ProtectedBranchRequiredStatusCheck);
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
            $checksSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
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


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranchAdminEnforced(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\ProtectedBranchAdminEnforced);
        $result = [];

        $url = $object->url;
        after_url:        $result['url'] = $url;

        
        $enabled = $object->enabled;
        after_enabled:        $result['enabled'] = $enabled;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranchPullRequestReview(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\ProtectedBranchPullRequestReview);
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
        $dismissalRestrictions = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranchPullRequestReview⚡️DismissalRestrictions($dismissalRestrictions);
        after_dismissalRestrictions:        $result['dismissal_restrictions'] = $dismissalRestrictions;

        
        $bypassPullRequestAllowances = $object->bypassPullRequestAllowances;

        if ($bypassPullRequestAllowances === null) {
            goto after_bypassPullRequestAllowances;
        }
        $bypassPullRequestAllowances = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranchPullRequestReview⚡️BypassPullRequestAllowances($bypassPullRequestAllowances);
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
            $usersSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
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
            $teamsSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
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
            $appsSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
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
            $usersSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
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
            $teamsSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
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
            $appsSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
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
            $usersSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $users = $usersSerializer0->serialize($users, $this);
        after_users:        $result['users'] = $users;

        
        $teams = $object->teams;
        static $teamsSerializer0;

        if ($teamsSerializer0 === null) {
            $teamsSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $teams = $teamsSerializer0->serialize($teams, $this);
        after_teams:        $result['teams'] = $teams;

        
        $apps = $object->apps;
        static $appsSerializer0;

        if ($appsSerializer0 === null) {
            $appsSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $apps = $appsSerializer0->serialize($apps, $this);
        after_apps:        $result['apps'] = $apps;


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


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchProtection⚡️AllowForcePushes(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\BranchProtection\AllowForcePushes);
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
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\BranchProtection\AllowDeletions);
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
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\BranchProtection\BlockCreations);
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
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\BranchProtection\RequiredConversationResolution);
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
        after_url:        $result['url'] = $url;

        
        $enabled = $object->enabled;
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


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ValidationError(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\ValidationError);
        $result = [];

        $message = $object->message;
        after_message:        $result['message'] = $message;

        
        $documentationUrl = $object->documentationUrl;
        after_documentationUrl:        $result['documentation_url'] = $documentationUrl;

        
        $errors = $object->errors;

        if ($errors === null) {
            goto after_errors;
        }
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