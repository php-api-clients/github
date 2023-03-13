<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class CbPullNumberRcb implements ObjectMapper
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
            'ApiClients\Client\GitHub\Schema\PullRequest' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PullRequest($payload),
                'ApiClients\Client\GitHub\Schema\PullRequest\Labels' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PullRequest⚡️Labels($payload),
                'ApiClients\Client\GitHub\Schema\SimpleUser' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($payload),
                'ApiClients\Client\GitHub\Schema\TeamSimple' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️TeamSimple($payload),
                'ApiClients\Client\GitHub\Schema\PullRequest\Head' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PullRequest⚡️Head($payload),
                'ApiClients\Client\GitHub\Schema\PullRequest\Head\Repo' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PullRequest⚡️Head⚡️Repo($payload),
                'ApiClients\Client\GitHub\Schema\PullRequest\Head\Repo\Owner' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PullRequest⚡️Head⚡️Repo⚡️Owner($payload),
                'ApiClients\Client\GitHub\Schema\FullRepository\Permissions' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️FullRepository⚡️Permissions($payload),
                'ApiClients\Client\GitHub\Schema\PullRequest\Head\Repo\License' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PullRequest⚡️Head⚡️Repo⚡️License($payload),
                'ApiClients\Client\GitHub\Schema\PullRequest\Base' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PullRequest⚡️Base($payload),
                'ApiClients\Client\GitHub\Schema\PullRequest\Base\Repo' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PullRequest⚡️Base⚡️Repo($payload),
                'ApiClients\Client\GitHub\Schema\PullRequestSimple\Links' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PullRequestSimple⚡️Links($payload),
                'ApiClients\Client\GitHub\Schema\Link' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Link($payload),
                'ApiClients\Client\GitHub\Schema\AutoMerge' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️AutoMerge($payload),
                'ApiClients\Client\GitHub\Schema\BasicError' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BasicError($payload),
                'ApiClients\Client\GitHub\Schema\Operation\SecretScanning\ListAlertsForEnterprise\Response\Applicationjson\H503' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Operation⚡️SecretScanning⚡️ListAlertsForEnterprise⚡️Response⚡️Applicationjson⚡️H503($payload),
                'ApiClients\Client\GitHub\Schema\ValidationError' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ValidationError($payload),
                'ApiClients\Client\GitHub\Schema\ValidationError\Errors' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ValidationError⚡️Errors($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PullRequest(array $payload): \ApiClients\Client\GitHub\Schema\PullRequest
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

            $value = $payload['html_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'html_url';
                goto after_html_url;
            }

            $properties['html_url'] = $value;

            after_html_url:

            $value = $payload['diff_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'diff_url';
                goto after_diff_url;
            }

            $properties['diff_url'] = $value;

            after_diff_url:

            $value = $payload['patch_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'patch_url';
                goto after_patch_url;
            }

            $properties['patch_url'] = $value;

            after_patch_url:

            $value = $payload['issue_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'issue_url';
                goto after_issue_url;
            }

            $properties['issue_url'] = $value;

            after_issue_url:

            $value = $payload['commits_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'commits_url';
                goto after_commits_url;
            }

            $properties['commits_url'] = $value;

            after_commits_url:

            $value = $payload['review_comments_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'review_comments_url';
                goto after_review_comments_url;
            }

            $properties['review_comments_url'] = $value;

            after_review_comments_url:

            $value = $payload['review_comment_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'review_comment_url';
                goto after_review_comment_url;
            }

            $properties['review_comment_url'] = $value;

            after_review_comment_url:

            $value = $payload['comments_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'comments_url';
                goto after_comments_url;
            }

            $properties['comments_url'] = $value;

            after_comments_url:

            $value = $payload['statuses_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'statuses_url';
                goto after_statuses_url;
            }

            $properties['statuses_url'] = $value;

            after_statuses_url:

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

            $value = $payload['locked'] ?? null;

            if ($value === null) {
                $missingFields[] = 'locked';
                goto after_locked;
            }

            $properties['locked'] = $value;

            after_locked:

            $value = $payload['title'] ?? null;

            if ($value === null) {
                $missingFields[] = 'title';
                goto after_title;
            }

            $properties['title'] = $value;

            after_title:

            $value = $payload['user'] ?? null;

            if ($value === null) {
                $properties['user'] = null;
                goto after_user;
            }

            $properties['user'] = $value;

            after_user:

            $value = $payload['body'] ?? null;

            if ($value === null) {
                $properties['body'] = null;
                goto after_body;
            }

            $properties['body'] = $value;

            after_body:

            $value = $payload['labels'] ?? null;

            if ($value === null) {
                $missingFields[] = 'labels';
                goto after_labels;
            }

            static $labelsCaster1;

            if ($labelsCaster1 === null) {
                $labelsCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\PullRequest\\Labels',
));
            }

            $value = $labelsCaster1->cast($value, $this);

            $properties['labels'] = $value;

            after_labels:

            $value = $payload['milestone'] ?? null;

            if ($value === null) {
                $properties['milestone'] = null;
                goto after_milestone;
            }

            $properties['milestone'] = $value;

            after_milestone:

            $value = $payload['active_lock_reason'] ?? null;

            if ($value === null) {
                $properties['active_lock_reason'] = null;
                goto after_active_lock_reason;
            }

            $properties['active_lock_reason'] = $value;

            after_active_lock_reason:

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

            $value = $payload['closed_at'] ?? null;

            if ($value === null) {
                $properties['closed_at'] = null;
                goto after_closed_at;
            }

            $properties['closed_at'] = $value;

            after_closed_at:

            $value = $payload['merged_at'] ?? null;

            if ($value === null) {
                $properties['merged_at'] = null;
                goto after_merged_at;
            }

            $properties['merged_at'] = $value;

            after_merged_at:

            $value = $payload['merge_commit_sha'] ?? null;

            if ($value === null) {
                $properties['merge_commit_sha'] = null;
                goto after_merge_commit_sha;
            }

            $properties['merge_commit_sha'] = $value;

            after_merge_commit_sha:

            $value = $payload['assignee'] ?? null;

            if ($value === null) {
                $properties['assignee'] = null;
                goto after_assignee;
            }

            $properties['assignee'] = $value;

            after_assignee:

            $value = $payload['assignees'] ?? null;

            if ($value === null) {
                $properties['assignees'] = null;
                goto after_assignees;
            }

            static $assigneesCaster1;

            if ($assigneesCaster1 === null) {
                $assigneesCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\SimpleUser',
));
            }

            $value = $assigneesCaster1->cast($value, $this);

            $properties['assignees'] = $value;

            after_assignees:

            $value = $payload['requested_reviewers'] ?? null;

            if ($value === null) {
                $properties['requested_reviewers'] = null;
                goto after_requested_reviewers;
            }

            static $requested_reviewersCaster1;

            if ($requested_reviewersCaster1 === null) {
                $requested_reviewersCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\SimpleUser',
));
            }

            $value = $requested_reviewersCaster1->cast($value, $this);

            $properties['requested_reviewers'] = $value;

            after_requested_reviewers:

            $value = $payload['requested_teams'] ?? null;

            if ($value === null) {
                $properties['requested_teams'] = null;
                goto after_requested_teams;
            }

            static $requested_teamsCaster1;

            if ($requested_teamsCaster1 === null) {
                $requested_teamsCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\TeamSimple',
));
            }

            $value = $requested_teamsCaster1->cast($value, $this);

            $properties['requested_teams'] = $value;

            after_requested_teams:

            $value = $payload['head'] ?? null;

            if ($value === null) {
                $missingFields[] = 'head';
                goto after_head;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'head';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PullRequest⚡️Head($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['head'] = $value;

            after_head:

            $value = $payload['base'] ?? null;

            if ($value === null) {
                $missingFields[] = 'base';
                goto after_base;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'base';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PullRequest⚡️Base($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['base'] = $value;

            after_base:

            $value = $payload['_links'] ?? null;

            if ($value === null) {
                $missingFields[] = '_links';
                goto after__links;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = '_links';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PullRequestSimple⚡️Links($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['_links'] = $value;

            after__links:

            $value = $payload['author_association'] ?? null;

            if ($value === null) {
                $missingFields[] = 'author_association';
                goto after_author_association;
            }

            $properties['author_association'] = $value;

            after_author_association:

            $value = $payload['auto_merge'] ?? null;

            if ($value === null) {
                $properties['auto_merge'] = null;
                goto after_auto_merge;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'auto_merge';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️AutoMerge($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['auto_merge'] = $value;

            after_auto_merge:

            $value = $payload['draft'] ?? null;

            if ($value === null) {
                $properties['draft'] = null;
                goto after_draft;
            }

            $properties['draft'] = $value;

            after_draft:

            $value = $payload['merged'] ?? null;

            if ($value === null) {
                $missingFields[] = 'merged';
                goto after_merged;
            }

            $properties['merged'] = $value;

            after_merged:

            $value = $payload['mergeable'] ?? null;

            if ($value === null) {
                $properties['mergeable'] = null;
                goto after_mergeable;
            }

            $properties['mergeable'] = $value;

            after_mergeable:

            $value = $payload['rebaseable'] ?? null;

            if ($value === null) {
                $properties['rebaseable'] = null;
                goto after_rebaseable;
            }

            $properties['rebaseable'] = $value;

            after_rebaseable:

            $value = $payload['mergeable_state'] ?? null;

            if ($value === null) {
                $missingFields[] = 'mergeable_state';
                goto after_mergeable_state;
            }

            $properties['mergeable_state'] = $value;

            after_mergeable_state:

            $value = $payload['merged_by'] ?? null;

            if ($value === null) {
                $properties['merged_by'] = null;
                goto after_merged_by;
            }

            $properties['merged_by'] = $value;

            after_merged_by:

            $value = $payload['comments'] ?? null;

            if ($value === null) {
                $missingFields[] = 'comments';
                goto after_comments;
            }

            $properties['comments'] = $value;

            after_comments:

            $value = $payload['review_comments'] ?? null;

            if ($value === null) {
                $missingFields[] = 'review_comments';
                goto after_review_comments;
            }

            $properties['review_comments'] = $value;

            after_review_comments:

            $value = $payload['maintainer_can_modify'] ?? null;

            if ($value === null) {
                $missingFields[] = 'maintainer_can_modify';
                goto after_maintainer_can_modify;
            }

            $properties['maintainer_can_modify'] = $value;

            after_maintainer_can_modify:

            $value = $payload['commits'] ?? null;

            if ($value === null) {
                $missingFields[] = 'commits';
                goto after_commits;
            }

            $properties['commits'] = $value;

            after_commits:

            $value = $payload['additions'] ?? null;

            if ($value === null) {
                $missingFields[] = 'additions';
                goto after_additions;
            }

            $properties['additions'] = $value;

            after_additions:

            $value = $payload['deletions'] ?? null;

            if ($value === null) {
                $missingFields[] = 'deletions';
                goto after_deletions;
            }

            $properties['deletions'] = $value;

            after_deletions:

            $value = $payload['changed_files'] ?? null;

            if ($value === null) {
                $missingFields[] = 'changed_files';
                goto after_changed_files;
            }

            $properties['changed_files'] = $value;

            after_changed_files:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\PullRequest', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\PullRequest::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\PullRequest(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\PullRequest', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PullRequest⚡️Labels(array $payload): \ApiClients\Client\GitHub\Schema\PullRequest\Labels
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

            $value = $payload['url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'url';
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

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

            $value = $payload['color'] ?? null;

            if ($value === null) {
                $missingFields[] = 'color';
                goto after_color;
            }

            $properties['color'] = $value;

            after_color:

            $value = $payload['default'] ?? null;

            if ($value === null) {
                $missingFields[] = 'default';
                goto after_default;
            }

            $properties['default'] = $value;

            after_default:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\PullRequest\Labels', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\PullRequest\Labels::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\PullRequest\Labels(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\PullRequest\Labels', $exception, stack: $this->hydrationStack);
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
                $properties['gravatar_id'] = null;
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
                $properties['starred_at'] = null;
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

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️TeamSimple(array $payload): \ApiClients\Client\GitHub\Schema\TeamSimple
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

            $value = $payload['url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'url';
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

            $value = $payload['members_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'members_url';
                goto after_members_url;
            }

            $properties['members_url'] = $value;

            after_members_url:

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

            $value = $payload['permission'] ?? null;

            if ($value === null) {
                $missingFields[] = 'permission';
                goto after_permission;
            }

            $properties['permission'] = $value;

            after_permission:

            $value = $payload['privacy'] ?? null;

            if ($value === null) {
                $properties['privacy'] = null;
                goto after_privacy;
            }

            $properties['privacy'] = $value;

            after_privacy:

            $value = $payload['html_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'html_url';
                goto after_html_url;
            }

            $properties['html_url'] = $value;

            after_html_url:

            $value = $payload['repositories_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'repositories_url';
                goto after_repositories_url;
            }

            $properties['repositories_url'] = $value;

            after_repositories_url:

            $value = $payload['slug'] ?? null;

            if ($value === null) {
                $missingFields[] = 'slug';
                goto after_slug;
            }

            $properties['slug'] = $value;

            after_slug:

            $value = $payload['ldap_dn'] ?? null;

            if ($value === null) {
                $properties['ldap_dn'] = null;
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

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PullRequest⚡️Head(array $payload): \ApiClients\Client\GitHub\Schema\PullRequest\Head
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['label'] ?? null;

            if ($value === null) {
                $missingFields[] = 'label';
                goto after_label;
            }

            $properties['label'] = $value;

            after_label:

            $value = $payload['ref'] ?? null;

            if ($value === null) {
                $missingFields[] = 'ref';
                goto after_ref;
            }

            $properties['ref'] = $value;

            after_ref:

            $value = $payload['repo'] ?? null;

            if ($value === null) {
                $properties['repo'] = null;
                goto after_repo;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'repo';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PullRequest⚡️Head⚡️Repo($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['repo'] = $value;

            after_repo:

            $value = $payload['sha'] ?? null;

            if ($value === null) {
                $missingFields[] = 'sha';
                goto after_sha;
            }

            $properties['sha'] = $value;

            after_sha:

            $value = $payload['user'] ?? null;

            if ($value === null) {
                $missingFields[] = 'user';
                goto after_user;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'user';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PullRequest⚡️Head⚡️Repo⚡️Owner($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['user'] = $value;

            after_user:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\PullRequest\Head', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\PullRequest\Head::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\PullRequest\Head(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\PullRequest\Head', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PullRequest⚡️Head⚡️Repo(array $payload): \ApiClients\Client\GitHub\Schema\PullRequest\Head\Repo
    {
        $properties = []; 
        $missingFields = [];
        try {
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

            $value = $payload['description'] ?? null;

            if ($value === null) {
                $properties['description'] = null;
                goto after_description;
            }

            $properties['description'] = $value;

            after_description:

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

            $value = $payload['fork'] ?? null;

            if ($value === null) {
                $missingFields[] = 'fork';
                goto after_fork;
            }

            $properties['fork'] = $value;

            after_fork:

            $value = $payload['forks_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'forks_url';
                goto after_forks_url;
            }

            $properties['forks_url'] = $value;

            after_forks_url:

            $value = $payload['full_name'] ?? null;

            if ($value === null) {
                $missingFields[] = 'full_name';
                goto after_full_name;
            }

            $properties['full_name'] = $value;

            after_full_name:

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

            $value = $payload['hooks_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'hooks_url';
                goto after_hooks_url;
            }

            $properties['hooks_url'] = $value;

            after_hooks_url:

            $value = $payload['html_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'html_url';
                goto after_html_url;
            }

            $properties['html_url'] = $value;

            after_html_url:

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

            $value = $payload['name'] ?? null;

            if ($value === null) {
                $missingFields[] = 'name';
                goto after_name;
            }

            $properties['name'] = $value;

            after_name:

            $value = $payload['notifications_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'notifications_url';
                goto after_notifications_url;
            }

            $properties['notifications_url'] = $value;

            after_notifications_url:

            $value = $payload['owner'] ?? null;

            if ($value === null) {
                $missingFields[] = 'owner';
                goto after_owner;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'owner';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PullRequest⚡️Head⚡️Repo⚡️Owner($value);
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

            $value = $payload['url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'url';
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

            $value = $payload['clone_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'clone_url';
                goto after_clone_url;
            }

            $properties['clone_url'] = $value;

            after_clone_url:

            $value = $payload['default_branch'] ?? null;

            if ($value === null) {
                $missingFields[] = 'default_branch';
                goto after_default_branch;
            }

            $properties['default_branch'] = $value;

            after_default_branch:

            $value = $payload['forks'] ?? null;

            if ($value === null) {
                $missingFields[] = 'forks';
                goto after_forks;
            }

            $properties['forks'] = $value;

            after_forks:

            $value = $payload['forks_count'] ?? null;

            if ($value === null) {
                $missingFields[] = 'forks_count';
                goto after_forks_count;
            }

            $properties['forks_count'] = $value;

            after_forks_count:

            $value = $payload['git_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'git_url';
                goto after_git_url;
            }

            $properties['git_url'] = $value;

            after_git_url:

            $value = $payload['has_downloads'] ?? null;

            if ($value === null) {
                $missingFields[] = 'has_downloads';
                goto after_has_downloads;
            }

            $properties['has_downloads'] = $value;

            after_has_downloads:

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

            $value = $payload['has_discussions'] ?? null;

            if ($value === null) {
                $missingFields[] = 'has_discussions';
                goto after_has_discussions;
            }

            $properties['has_discussions'] = $value;

            after_has_discussions:

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

            $value = $payload['master_branch'] ?? null;

            if ($value === null) {
                $properties['master_branch'] = null;
                goto after_master_branch;
            }

            $properties['master_branch'] = $value;

            after_master_branch:

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
                $properties['visibility'] = null;
                goto after_visibility;
            }

            $properties['visibility'] = $value;

            after_visibility:

            $value = $payload['mirror_url'] ?? null;

            if ($value === null) {
                $properties['mirror_url'] = null;
                goto after_mirror_url;
            }

            $properties['mirror_url'] = $value;

            after_mirror_url:

            $value = $payload['open_issues'] ?? null;

            if ($value === null) {
                $missingFields[] = 'open_issues';
                goto after_open_issues;
            }

            $properties['open_issues'] = $value;

            after_open_issues:

            $value = $payload['open_issues_count'] ?? null;

            if ($value === null) {
                $missingFields[] = 'open_issues_count';
                goto after_open_issues_count;
            }

            $properties['open_issues_count'] = $value;

            after_open_issues_count:

            $value = $payload['permissions'] ?? null;

            if ($value === null) {
                $properties['permissions'] = null;
                goto after_permissions;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'permissions';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️FullRepository⚡️Permissions($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['permissions'] = $value;

            after_permissions:

            $value = $payload['temp_clone_token'] ?? null;

            if ($value === null) {
                $properties['temp_clone_token'] = null;
                goto after_temp_clone_token;
            }

            $properties['temp_clone_token'] = $value;

            after_temp_clone_token:

            $value = $payload['allow_merge_commit'] ?? null;

            if ($value === null) {
                $properties['allow_merge_commit'] = null;
                goto after_allow_merge_commit;
            }

            $properties['allow_merge_commit'] = $value;

            after_allow_merge_commit:

            $value = $payload['allow_squash_merge'] ?? null;

            if ($value === null) {
                $properties['allow_squash_merge'] = null;
                goto after_allow_squash_merge;
            }

            $properties['allow_squash_merge'] = $value;

            after_allow_squash_merge:

            $value = $payload['allow_rebase_merge'] ?? null;

            if ($value === null) {
                $properties['allow_rebase_merge'] = null;
                goto after_allow_rebase_merge;
            }

            $properties['allow_rebase_merge'] = $value;

            after_allow_rebase_merge:

            $value = $payload['license'] ?? null;

            if ($value === null) {
                $properties['license'] = null;
                goto after_license;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'license';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PullRequest⚡️Head⚡️Repo⚡️License($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['license'] = $value;

            after_license:

            $value = $payload['pushed_at'] ?? null;

            if ($value === null) {
                $missingFields[] = 'pushed_at';
                goto after_pushed_at;
            }

            $properties['pushed_at'] = $value;

            after_pushed_at:

            $value = $payload['size'] ?? null;

            if ($value === null) {
                $missingFields[] = 'size';
                goto after_size;
            }

            $properties['size'] = $value;

            after_size:

            $value = $payload['ssh_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'ssh_url';
                goto after_ssh_url;
            }

            $properties['ssh_url'] = $value;

            after_ssh_url:

            $value = $payload['stargazers_count'] ?? null;

            if ($value === null) {
                $missingFields[] = 'stargazers_count';
                goto after_stargazers_count;
            }

            $properties['stargazers_count'] = $value;

            after_stargazers_count:

            $value = $payload['svn_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'svn_url';
                goto after_svn_url;
            }

            $properties['svn_url'] = $value;

            after_svn_url:

            $value = $payload['topics'] ?? null;

            if ($value === null) {
                $properties['topics'] = null;
                goto after_topics;
            }

            $properties['topics'] = $value;

            after_topics:

            $value = $payload['watchers'] ?? null;

            if ($value === null) {
                $missingFields[] = 'watchers';
                goto after_watchers;
            }

            $properties['watchers'] = $value;

            after_watchers:

            $value = $payload['watchers_count'] ?? null;

            if ($value === null) {
                $missingFields[] = 'watchers_count';
                goto after_watchers_count;
            }

            $properties['watchers_count'] = $value;

            after_watchers_count:

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

            $value = $payload['allow_forking'] ?? null;

            if ($value === null) {
                $properties['allow_forking'] = null;
                goto after_allow_forking;
            }

            $properties['allow_forking'] = $value;

            after_allow_forking:

            $value = $payload['is_template'] ?? null;

            if ($value === null) {
                $properties['is_template'] = null;
                goto after_is_template;
            }

            $properties['is_template'] = $value;

            after_is_template:

            $value = $payload['web_commit_signoff_required'] ?? null;

            if ($value === null) {
                $properties['web_commit_signoff_required'] = null;
                goto after_web_commit_signoff_required;
            }

            $properties['web_commit_signoff_required'] = $value;

            after_web_commit_signoff_required:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\PullRequest\Head\Repo', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\PullRequest\Head\Repo::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\PullRequest\Head\Repo(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\PullRequest\Head\Repo', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PullRequest⚡️Head⚡️Repo⚡️Owner(array $payload): \ApiClients\Client\GitHub\Schema\PullRequest\Head\Repo\Owner
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
                $properties['gravatar_id'] = null;
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

            $value = $payload['login'] ?? null;

            if ($value === null) {
                $missingFields[] = 'login';
                goto after_login;
            }

            $properties['login'] = $value;

            after_login:

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
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\PullRequest\Head\Repo\Owner', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\PullRequest\Head\Repo\Owner::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\PullRequest\Head\Repo\Owner(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\PullRequest\Head\Repo\Owner', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️FullRepository⚡️Permissions(array $payload): \ApiClients\Client\GitHub\Schema\FullRepository\Permissions
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
                $properties['maintain'] = null;
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
                $properties['triage'] = null;
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
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\FullRepository\Permissions', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\FullRepository\Permissions::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\FullRepository\Permissions(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\FullRepository\Permissions', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PullRequest⚡️Head⚡️Repo⚡️License(array $payload): \ApiClients\Client\GitHub\Schema\PullRequest\Head\Repo\License
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['key'] ?? null;

            if ($value === null) {
                $missingFields[] = 'key';
                goto after_key;
            }

            $properties['key'] = $value;

            after_key:

            $value = $payload['name'] ?? null;

            if ($value === null) {
                $missingFields[] = 'name';
                goto after_name;
            }

            $properties['name'] = $value;

            after_name:

            $value = $payload['url'] ?? null;

            if ($value === null) {
                $properties['url'] = null;
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

            $value = $payload['spdx_id'] ?? null;

            if ($value === null) {
                $properties['spdx_id'] = null;
                goto after_spdx_id;
            }

            $properties['spdx_id'] = $value;

            after_spdx_id:

            $value = $payload['node_id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'node_id';
                goto after_node_id;
            }

            $properties['node_id'] = $value;

            after_node_id:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\PullRequest\Head\Repo\License', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\PullRequest\Head\Repo\License::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\PullRequest\Head\Repo\License(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\PullRequest\Head\Repo\License', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PullRequest⚡️Base(array $payload): \ApiClients\Client\GitHub\Schema\PullRequest\Base
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['label'] ?? null;

            if ($value === null) {
                $missingFields[] = 'label';
                goto after_label;
            }

            $properties['label'] = $value;

            after_label:

            $value = $payload['ref'] ?? null;

            if ($value === null) {
                $missingFields[] = 'ref';
                goto after_ref;
            }

            $properties['ref'] = $value;

            after_ref:

            $value = $payload['repo'] ?? null;

            if ($value === null) {
                $missingFields[] = 'repo';
                goto after_repo;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'repo';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PullRequest⚡️Base⚡️Repo($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['repo'] = $value;

            after_repo:

            $value = $payload['sha'] ?? null;

            if ($value === null) {
                $missingFields[] = 'sha';
                goto after_sha;
            }

            $properties['sha'] = $value;

            after_sha:

            $value = $payload['user'] ?? null;

            if ($value === null) {
                $missingFields[] = 'user';
                goto after_user;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'user';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PullRequest⚡️Head⚡️Repo⚡️Owner($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['user'] = $value;

            after_user:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\PullRequest\Base', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\PullRequest\Base::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\PullRequest\Base(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\PullRequest\Base', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PullRequest⚡️Base⚡️Repo(array $payload): \ApiClients\Client\GitHub\Schema\PullRequest\Base\Repo
    {
        $properties = []; 
        $missingFields = [];
        try {
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

            $value = $payload['description'] ?? null;

            if ($value === null) {
                $properties['description'] = null;
                goto after_description;
            }

            $properties['description'] = $value;

            after_description:

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

            $value = $payload['fork'] ?? null;

            if ($value === null) {
                $missingFields[] = 'fork';
                goto after_fork;
            }

            $properties['fork'] = $value;

            after_fork:

            $value = $payload['forks_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'forks_url';
                goto after_forks_url;
            }

            $properties['forks_url'] = $value;

            after_forks_url:

            $value = $payload['full_name'] ?? null;

            if ($value === null) {
                $missingFields[] = 'full_name';
                goto after_full_name;
            }

            $properties['full_name'] = $value;

            after_full_name:

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

            $value = $payload['hooks_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'hooks_url';
                goto after_hooks_url;
            }

            $properties['hooks_url'] = $value;

            after_hooks_url:

            $value = $payload['html_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'html_url';
                goto after_html_url;
            }

            $properties['html_url'] = $value;

            after_html_url:

            $value = $payload['id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'id';
                goto after_id;
            }

            $properties['id'] = $value;

            after_id:

            $value = $payload['is_template'] ?? null;

            if ($value === null) {
                $properties['is_template'] = null;
                goto after_is_template;
            }

            $properties['is_template'] = $value;

            after_is_template:

            $value = $payload['node_id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'node_id';
                goto after_node_id;
            }

            $properties['node_id'] = $value;

            after_node_id:

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

            $value = $payload['name'] ?? null;

            if ($value === null) {
                $missingFields[] = 'name';
                goto after_name;
            }

            $properties['name'] = $value;

            after_name:

            $value = $payload['notifications_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'notifications_url';
                goto after_notifications_url;
            }

            $properties['notifications_url'] = $value;

            after_notifications_url:

            $value = $payload['owner'] ?? null;

            if ($value === null) {
                $missingFields[] = 'owner';
                goto after_owner;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'owner';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PullRequest⚡️Head⚡️Repo⚡️Owner($value);
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

            $value = $payload['url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'url';
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

            $value = $payload['clone_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'clone_url';
                goto after_clone_url;
            }

            $properties['clone_url'] = $value;

            after_clone_url:

            $value = $payload['default_branch'] ?? null;

            if ($value === null) {
                $missingFields[] = 'default_branch';
                goto after_default_branch;
            }

            $properties['default_branch'] = $value;

            after_default_branch:

            $value = $payload['forks'] ?? null;

            if ($value === null) {
                $missingFields[] = 'forks';
                goto after_forks;
            }

            $properties['forks'] = $value;

            after_forks:

            $value = $payload['forks_count'] ?? null;

            if ($value === null) {
                $missingFields[] = 'forks_count';
                goto after_forks_count;
            }

            $properties['forks_count'] = $value;

            after_forks_count:

            $value = $payload['git_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'git_url';
                goto after_git_url;
            }

            $properties['git_url'] = $value;

            after_git_url:

            $value = $payload['has_downloads'] ?? null;

            if ($value === null) {
                $missingFields[] = 'has_downloads';
                goto after_has_downloads;
            }

            $properties['has_downloads'] = $value;

            after_has_downloads:

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

            $value = $payload['has_discussions'] ?? null;

            if ($value === null) {
                $missingFields[] = 'has_discussions';
                goto after_has_discussions;
            }

            $properties['has_discussions'] = $value;

            after_has_discussions:

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

            $value = $payload['master_branch'] ?? null;

            if ($value === null) {
                $properties['master_branch'] = null;
                goto after_master_branch;
            }

            $properties['master_branch'] = $value;

            after_master_branch:

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
                $properties['visibility'] = null;
                goto after_visibility;
            }

            $properties['visibility'] = $value;

            after_visibility:

            $value = $payload['mirror_url'] ?? null;

            if ($value === null) {
                $properties['mirror_url'] = null;
                goto after_mirror_url;
            }

            $properties['mirror_url'] = $value;

            after_mirror_url:

            $value = $payload['open_issues'] ?? null;

            if ($value === null) {
                $missingFields[] = 'open_issues';
                goto after_open_issues;
            }

            $properties['open_issues'] = $value;

            after_open_issues:

            $value = $payload['open_issues_count'] ?? null;

            if ($value === null) {
                $missingFields[] = 'open_issues_count';
                goto after_open_issues_count;
            }

            $properties['open_issues_count'] = $value;

            after_open_issues_count:

            $value = $payload['permissions'] ?? null;

            if ($value === null) {
                $properties['permissions'] = null;
                goto after_permissions;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'permissions';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️FullRepository⚡️Permissions($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['permissions'] = $value;

            after_permissions:

            $value = $payload['temp_clone_token'] ?? null;

            if ($value === null) {
                $properties['temp_clone_token'] = null;
                goto after_temp_clone_token;
            }

            $properties['temp_clone_token'] = $value;

            after_temp_clone_token:

            $value = $payload['allow_merge_commit'] ?? null;

            if ($value === null) {
                $properties['allow_merge_commit'] = null;
                goto after_allow_merge_commit;
            }

            $properties['allow_merge_commit'] = $value;

            after_allow_merge_commit:

            $value = $payload['allow_squash_merge'] ?? null;

            if ($value === null) {
                $properties['allow_squash_merge'] = null;
                goto after_allow_squash_merge;
            }

            $properties['allow_squash_merge'] = $value;

            after_allow_squash_merge:

            $value = $payload['allow_rebase_merge'] ?? null;

            if ($value === null) {
                $properties['allow_rebase_merge'] = null;
                goto after_allow_rebase_merge;
            }

            $properties['allow_rebase_merge'] = $value;

            after_allow_rebase_merge:

            $value = $payload['license'] ?? null;

            if ($value === null) {
                $properties['license'] = null;
                goto after_license;
            }

            $properties['license'] = $value;

            after_license:

            $value = $payload['pushed_at'] ?? null;

            if ($value === null) {
                $missingFields[] = 'pushed_at';
                goto after_pushed_at;
            }

            $properties['pushed_at'] = $value;

            after_pushed_at:

            $value = $payload['size'] ?? null;

            if ($value === null) {
                $missingFields[] = 'size';
                goto after_size;
            }

            $properties['size'] = $value;

            after_size:

            $value = $payload['ssh_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'ssh_url';
                goto after_ssh_url;
            }

            $properties['ssh_url'] = $value;

            after_ssh_url:

            $value = $payload['stargazers_count'] ?? null;

            if ($value === null) {
                $missingFields[] = 'stargazers_count';
                goto after_stargazers_count;
            }

            $properties['stargazers_count'] = $value;

            after_stargazers_count:

            $value = $payload['svn_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'svn_url';
                goto after_svn_url;
            }

            $properties['svn_url'] = $value;

            after_svn_url:

            $value = $payload['topics'] ?? null;

            if ($value === null) {
                $properties['topics'] = null;
                goto after_topics;
            }

            $properties['topics'] = $value;

            after_topics:

            $value = $payload['watchers'] ?? null;

            if ($value === null) {
                $missingFields[] = 'watchers';
                goto after_watchers;
            }

            $properties['watchers'] = $value;

            after_watchers:

            $value = $payload['watchers_count'] ?? null;

            if ($value === null) {
                $missingFields[] = 'watchers_count';
                goto after_watchers_count;
            }

            $properties['watchers_count'] = $value;

            after_watchers_count:

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

            $value = $payload['allow_forking'] ?? null;

            if ($value === null) {
                $properties['allow_forking'] = null;
                goto after_allow_forking;
            }

            $properties['allow_forking'] = $value;

            after_allow_forking:

            $value = $payload['web_commit_signoff_required'] ?? null;

            if ($value === null) {
                $properties['web_commit_signoff_required'] = null;
                goto after_web_commit_signoff_required;
            }

            $properties['web_commit_signoff_required'] = $value;

            after_web_commit_signoff_required:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\PullRequest\Base\Repo', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\PullRequest\Base\Repo::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\PullRequest\Base\Repo(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\PullRequest\Base\Repo', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PullRequestSimple⚡️Links(array $payload): \ApiClients\Client\GitHub\Schema\PullRequestSimple\Links
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['comments'] ?? null;

            if ($value === null) {
                $missingFields[] = 'comments';
                goto after_comments;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'comments';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Link($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['comments'] = $value;

            after_comments:

            $value = $payload['commits'] ?? null;

            if ($value === null) {
                $missingFields[] = 'commits';
                goto after_commits;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'commits';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Link($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['commits'] = $value;

            after_commits:

            $value = $payload['statuses'] ?? null;

            if ($value === null) {
                $missingFields[] = 'statuses';
                goto after_statuses;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'statuses';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Link($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['statuses'] = $value;

            after_statuses:

            $value = $payload['html'] ?? null;

            if ($value === null) {
                $missingFields[] = 'html';
                goto after_html;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'html';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Link($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['html'] = $value;

            after_html:

            $value = $payload['issue'] ?? null;

            if ($value === null) {
                $missingFields[] = 'issue';
                goto after_issue;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'issue';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Link($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['issue'] = $value;

            after_issue:

            $value = $payload['review_comments'] ?? null;

            if ($value === null) {
                $missingFields[] = 'review_comments';
                goto after_review_comments;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'review_comments';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Link($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['review_comments'] = $value;

            after_review_comments:

            $value = $payload['review_comment'] ?? null;

            if ($value === null) {
                $missingFields[] = 'review_comment';
                goto after_review_comment;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'review_comment';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Link($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['review_comment'] = $value;

            after_review_comment:

            $value = $payload['self'] ?? null;

            if ($value === null) {
                $missingFields[] = 'self';
                goto after_self;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'self';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Link($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['self'] = $value;

            after_self:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\PullRequestSimple\Links', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\PullRequestSimple\Links::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\PullRequestSimple\Links(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\PullRequestSimple\Links', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Link(array $payload): \ApiClients\Client\GitHub\Schema\Link
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['href'] ?? null;

            if ($value === null) {
                $missingFields[] = 'href';
                goto after_href;
            }

            $properties['href'] = $value;

            after_href:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Link', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\Link::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\Link(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Link', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️AutoMerge(array $payload): \ApiClients\Client\GitHub\Schema\AutoMerge
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['enabled_by'] ?? null;

            if ($value === null) {
                $missingFields[] = 'enabled_by';
                goto after_enabled_by;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'enabled_by';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['enabled_by'] = $value;

            after_enabled_by:

            $value = $payload['merge_method'] ?? null;

            if ($value === null) {
                $missingFields[] = 'merge_method';
                goto after_merge_method;
            }

            $properties['merge_method'] = $value;

            after_merge_method:

            $value = $payload['commit_title'] ?? null;

            if ($value === null) {
                $missingFields[] = 'commit_title';
                goto after_commit_title;
            }

            $properties['commit_title'] = $value;

            after_commit_title:

            $value = $payload['commit_message'] ?? null;

            if ($value === null) {
                $missingFields[] = 'commit_message';
                goto after_commit_message;
            }

            $properties['commit_message'] = $value;

            after_commit_message:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\AutoMerge', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\AutoMerge::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\AutoMerge(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\AutoMerge', $exception, stack: $this->hydrationStack);
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

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Operation⚡️SecretScanning⚡️ListAlertsForEnterprise⚡️Response⚡️Applicationjson⚡️H503(array $payload): \ApiClients\Client\GitHub\Schema\Operation\SecretScanning\ListAlertsForEnterprise\Response\Applicationjson\H503
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['code'] ?? null;

            if ($value === null) {
                $properties['code'] = null;
                goto after_code;
            }

            $properties['code'] = $value;

            after_code:

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

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Operation\SecretScanning\ListAlertsForEnterprise\Response\Applicationjson\H503', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\Operation\SecretScanning\ListAlertsForEnterprise\Response\Applicationjson\H503::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\Operation\SecretScanning\ListAlertsForEnterprise\Response\Applicationjson\H503(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Operation\SecretScanning\ListAlertsForEnterprise\Response\Applicationjson\H503', $exception, stack: $this->hydrationStack);
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
                goto after_documentation_url;
            }

            $properties['documentation_url'] = $value;

            after_documentation_url:

            $value = $payload['errors'] ?? null;

            if ($value === null) {
                $properties['errors'] = null;
                goto after_errors;
            }

            static $errorsCaster1;

            if ($errorsCaster1 === null) {
                $errorsCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\ValidationError\\Errors',
));
            }

            $value = $errorsCaster1->cast($value, $this);

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

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ValidationError⚡️Errors(array $payload): \ApiClients\Client\GitHub\Schema\ValidationError\Errors
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['resource'] ?? null;

            if ($value === null) {
                $properties['resource'] = null;
                goto after_resource;
            }

            $properties['resource'] = $value;

            after_resource:

            $value = $payload['field'] ?? null;

            if ($value === null) {
                $properties['field'] = null;
                goto after_field;
            }

            $properties['field'] = $value;

            after_field:

            $value = $payload['message'] ?? null;

            if ($value === null) {
                $properties['message'] = null;
                goto after_message;
            }

            $properties['message'] = $value;

            after_message:

            $value = $payload['code'] ?? null;

            if ($value === null) {
                $missingFields[] = 'code';
                goto after_code;
            }

            $properties['code'] = $value;

            after_code:

            $value = $payload['index'] ?? null;

            if ($value === null) {
                $properties['index'] = null;
                goto after_index;
            }

            $properties['index'] = $value;

            after_index:

            $value = $payload['value'] ?? null;

            if ($value === null) {
                $properties['value'] = null;
                goto after_value;
            }

            $properties['value'] = $value;

            after_value:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ValidationError\Errors', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\ValidationError\Errors::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\ValidationError\Errors(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ValidationError\Errors', $exception, stack: $this->hydrationStack);
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
            'ApiClients\Client\GitHub\Schema\PullRequest' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PullRequest($object),
            'ApiClients\Client\GitHub\Schema\PullRequest\Labels' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PullRequest⚡️Labels($object),
            'ApiClients\Client\GitHub\Schema\SimpleUser' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($object),
            'ApiClients\Client\GitHub\Schema\TeamSimple' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️TeamSimple($object),
            'ApiClients\Client\GitHub\Schema\PullRequest\Head' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PullRequest⚡️Head($object),
            'ApiClients\Client\GitHub\Schema\PullRequest\Head\Repo' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PullRequest⚡️Head⚡️Repo($object),
            'ApiClients\Client\GitHub\Schema\PullRequest\Head\Repo\Owner' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PullRequest⚡️Head⚡️Repo⚡️Owner($object),
            'ApiClients\Client\GitHub\Schema\FullRepository\Permissions' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️FullRepository⚡️Permissions($object),
            'ApiClients\Client\GitHub\Schema\PullRequest\Head\Repo\License' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PullRequest⚡️Head⚡️Repo⚡️License($object),
            'ApiClients\Client\GitHub\Schema\PullRequest\Base' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PullRequest⚡️Base($object),
            'ApiClients\Client\GitHub\Schema\PullRequest\Base\Repo' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PullRequest⚡️Base⚡️Repo($object),
            'ApiClients\Client\GitHub\Schema\PullRequestSimple\Links' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PullRequestSimple⚡️Links($object),
            'ApiClients\Client\GitHub\Schema\Link' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Link($object),
            'ApiClients\Client\GitHub\Schema\AutoMerge' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️AutoMerge($object),
            'ApiClients\Client\GitHub\Schema\BasicError' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BasicError($object),
            'ApiClients\Client\GitHub\Schema\Operation\SecretScanning\ListAlertsForEnterprise\Response\Applicationjson\H503' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Operation⚡️SecretScanning⚡️ListAlertsForEnterprise⚡️Response⚡️Applicationjson⚡️H503($object),
            'ApiClients\Client\GitHub\Schema\ValidationError' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ValidationError($object),
            'ApiClients\Client\GitHub\Schema\ValidationError\Errors' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ValidationError⚡️Errors($object),
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


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PullRequest(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\PullRequest);
        $result = [];

        $url = $object->url;
        after_url:        $result['url'] = $url;

        
        $id = $object->id;
        after_id:        $result['id'] = $id;

        
        $node_id = $object->node_id;
        after_node_id:        $result['node_id'] = $node_id;

        
        $html_url = $object->html_url;
        after_html_url:        $result['html_url'] = $html_url;

        
        $diff_url = $object->diff_url;
        after_diff_url:        $result['diff_url'] = $diff_url;

        
        $patch_url = $object->patch_url;
        after_patch_url:        $result['patch_url'] = $patch_url;

        
        $issue_url = $object->issue_url;
        after_issue_url:        $result['issue_url'] = $issue_url;

        
        $commits_url = $object->commits_url;
        after_commits_url:        $result['commits_url'] = $commits_url;

        
        $review_comments_url = $object->review_comments_url;
        after_review_comments_url:        $result['review_comments_url'] = $review_comments_url;

        
        $review_comment_url = $object->review_comment_url;
        after_review_comment_url:        $result['review_comment_url'] = $review_comment_url;

        
        $comments_url = $object->comments_url;
        after_comments_url:        $result['comments_url'] = $comments_url;

        
        $statuses_url = $object->statuses_url;
        after_statuses_url:        $result['statuses_url'] = $statuses_url;

        
        $number = $object->number;
        after_number:        $result['number'] = $number;

        
        $state = $object->state;
        after_state:        $result['state'] = $state;

        
        $locked = $object->locked;
        after_locked:        $result['locked'] = $locked;

        
        $title = $object->title;
        after_title:        $result['title'] = $title;

        
        $user = $object->user;

        if ($user === null) {
            goto after_user;
        }
        after_user:        $result['user'] = $user;

        
        $body = $object->body;

        if ($body === null) {
            goto after_body;
        }
        after_body:        $result['body'] = $body;

        
        $labels = $object->labels;
        static $labelsSerializer0;

        if ($labelsSerializer0 === null) {
            $labelsSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\PullRequest\\Labels',
));
        }
        
        $labels = $labelsSerializer0->serialize($labels, $this);
        after_labels:        $result['labels'] = $labels;

        
        $milestone = $object->milestone;

        if ($milestone === null) {
            goto after_milestone;
        }
        after_milestone:        $result['milestone'] = $milestone;

        
        $active_lock_reason = $object->active_lock_reason;

        if ($active_lock_reason === null) {
            goto after_active_lock_reason;
        }
        after_active_lock_reason:        $result['active_lock_reason'] = $active_lock_reason;

        
        $created_at = $object->created_at;
        after_created_at:        $result['created_at'] = $created_at;

        
        $updated_at = $object->updated_at;
        after_updated_at:        $result['updated_at'] = $updated_at;

        
        $closed_at = $object->closed_at;

        if ($closed_at === null) {
            goto after_closed_at;
        }
        after_closed_at:        $result['closed_at'] = $closed_at;

        
        $merged_at = $object->merged_at;

        if ($merged_at === null) {
            goto after_merged_at;
        }
        after_merged_at:        $result['merged_at'] = $merged_at;

        
        $merge_commit_sha = $object->merge_commit_sha;

        if ($merge_commit_sha === null) {
            goto after_merge_commit_sha;
        }
        after_merge_commit_sha:        $result['merge_commit_sha'] = $merge_commit_sha;

        
        $assignee = $object->assignee;

        if ($assignee === null) {
            goto after_assignee;
        }
        after_assignee:        $result['assignee'] = $assignee;

        
        $assignees = $object->assignees;

        if ($assignees === null) {
            goto after_assignees;
        }
        static $assigneesSerializer0;

        if ($assigneesSerializer0 === null) {
            $assigneesSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\SimpleUser',
));
        }
        
        $assignees = $assigneesSerializer0->serialize($assignees, $this);
        after_assignees:        $result['assignees'] = $assignees;

        
        $requested_reviewers = $object->requested_reviewers;

        if ($requested_reviewers === null) {
            goto after_requested_reviewers;
        }
        static $requested_reviewersSerializer0;

        if ($requested_reviewersSerializer0 === null) {
            $requested_reviewersSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\SimpleUser',
));
        }
        
        $requested_reviewers = $requested_reviewersSerializer0->serialize($requested_reviewers, $this);
        after_requested_reviewers:        $result['requested_reviewers'] = $requested_reviewers;

        
        $requested_teams = $object->requested_teams;

        if ($requested_teams === null) {
            goto after_requested_teams;
        }
        static $requested_teamsSerializer0;

        if ($requested_teamsSerializer0 === null) {
            $requested_teamsSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\TeamSimple',
));
        }
        
        $requested_teams = $requested_teamsSerializer0->serialize($requested_teams, $this);
        after_requested_teams:        $result['requested_teams'] = $requested_teams;

        
        $head = $object->head;
        $head = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PullRequest⚡️Head($head);
        after_head:        $result['head'] = $head;

        
        $base = $object->base;
        $base = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PullRequest⚡️Base($base);
        after_base:        $result['base'] = $base;

        
        $_links = $object->_links;
        $_links = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PullRequestSimple⚡️Links($_links);
        after__links:        $result['_links'] = $_links;

        
        $author_association = $object->author_association;
        after_author_association:        $result['author_association'] = $author_association;

        
        $auto_merge = $object->auto_merge;

        if ($auto_merge === null) {
            goto after_auto_merge;
        }
        $auto_merge = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️AutoMerge($auto_merge);
        after_auto_merge:        $result['auto_merge'] = $auto_merge;

        
        $draft = $object->draft;

        if ($draft === null) {
            goto after_draft;
        }
        after_draft:        $result['draft'] = $draft;

        
        $merged = $object->merged;
        after_merged:        $result['merged'] = $merged;

        
        $mergeable = $object->mergeable;

        if ($mergeable === null) {
            goto after_mergeable;
        }
        after_mergeable:        $result['mergeable'] = $mergeable;

        
        $rebaseable = $object->rebaseable;

        if ($rebaseable === null) {
            goto after_rebaseable;
        }
        after_rebaseable:        $result['rebaseable'] = $rebaseable;

        
        $mergeable_state = $object->mergeable_state;
        after_mergeable_state:        $result['mergeable_state'] = $mergeable_state;

        
        $merged_by = $object->merged_by;

        if ($merged_by === null) {
            goto after_merged_by;
        }
        after_merged_by:        $result['merged_by'] = $merged_by;

        
        $comments = $object->comments;
        after_comments:        $result['comments'] = $comments;

        
        $review_comments = $object->review_comments;
        after_review_comments:        $result['review_comments'] = $review_comments;

        
        $maintainer_can_modify = $object->maintainer_can_modify;
        after_maintainer_can_modify:        $result['maintainer_can_modify'] = $maintainer_can_modify;

        
        $commits = $object->commits;
        after_commits:        $result['commits'] = $commits;

        
        $additions = $object->additions;
        after_additions:        $result['additions'] = $additions;

        
        $deletions = $object->deletions;
        after_deletions:        $result['deletions'] = $deletions;

        
        $changed_files = $object->changed_files;
        after_changed_files:        $result['changed_files'] = $changed_files;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PullRequest⚡️Labels(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\PullRequest\Labels);
        $result = [];

        $id = $object->id;
        after_id:        $result['id'] = $id;

        
        $node_id = $object->node_id;
        after_node_id:        $result['node_id'] = $node_id;

        
        $url = $object->url;
        after_url:        $result['url'] = $url;

        
        $name = $object->name;
        after_name:        $result['name'] = $name;

        
        $description = $object->description;

        if ($description === null) {
            goto after_description;
        }
        after_description:        $result['description'] = $description;

        
        $color = $object->color;
        after_color:        $result['color'] = $color;

        
        $default = $object->default;
        after_default:        $result['default'] = $default;


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

        
        $node_id = $object->node_id;
        after_node_id:        $result['node_id'] = $node_id;

        
        $avatar_url = $object->avatar_url;
        after_avatar_url:        $result['avatar_url'] = $avatar_url;

        
        $gravatar_id = $object->gravatar_id;

        if ($gravatar_id === null) {
            goto after_gravatar_id;
        }
        after_gravatar_id:        $result['gravatar_id'] = $gravatar_id;

        
        $url = $object->url;
        after_url:        $result['url'] = $url;

        
        $html_url = $object->html_url;
        after_html_url:        $result['html_url'] = $html_url;

        
        $followers_url = $object->followers_url;
        after_followers_url:        $result['followers_url'] = $followers_url;

        
        $following_url = $object->following_url;
        after_following_url:        $result['following_url'] = $following_url;

        
        $gists_url = $object->gists_url;
        after_gists_url:        $result['gists_url'] = $gists_url;

        
        $starred_url = $object->starred_url;
        after_starred_url:        $result['starred_url'] = $starred_url;

        
        $subscriptions_url = $object->subscriptions_url;
        after_subscriptions_url:        $result['subscriptions_url'] = $subscriptions_url;

        
        $organizations_url = $object->organizations_url;
        after_organizations_url:        $result['organizations_url'] = $organizations_url;

        
        $repos_url = $object->repos_url;
        after_repos_url:        $result['repos_url'] = $repos_url;

        
        $events_url = $object->events_url;
        after_events_url:        $result['events_url'] = $events_url;

        
        $received_events_url = $object->received_events_url;
        after_received_events_url:        $result['received_events_url'] = $received_events_url;

        
        $type = $object->type;
        after_type:        $result['type'] = $type;

        
        $site_admin = $object->site_admin;
        after_site_admin:        $result['site_admin'] = $site_admin;

        
        $starred_at = $object->starred_at;

        if ($starred_at === null) {
            goto after_starred_at;
        }
        after_starred_at:        $result['starred_at'] = $starred_at;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️TeamSimple(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\TeamSimple);
        $result = [];

        $id = $object->id;
        after_id:        $result['id'] = $id;

        
        $node_id = $object->node_id;
        after_node_id:        $result['node_id'] = $node_id;

        
        $url = $object->url;
        after_url:        $result['url'] = $url;

        
        $members_url = $object->members_url;
        after_members_url:        $result['members_url'] = $members_url;

        
        $name = $object->name;
        after_name:        $result['name'] = $name;

        
        $description = $object->description;

        if ($description === null) {
            goto after_description;
        }
        after_description:        $result['description'] = $description;

        
        $permission = $object->permission;
        after_permission:        $result['permission'] = $permission;

        
        $privacy = $object->privacy;

        if ($privacy === null) {
            goto after_privacy;
        }
        after_privacy:        $result['privacy'] = $privacy;

        
        $html_url = $object->html_url;
        after_html_url:        $result['html_url'] = $html_url;

        
        $repositories_url = $object->repositories_url;
        after_repositories_url:        $result['repositories_url'] = $repositories_url;

        
        $slug = $object->slug;
        after_slug:        $result['slug'] = $slug;

        
        $ldap_dn = $object->ldap_dn;

        if ($ldap_dn === null) {
            goto after_ldap_dn;
        }
        after_ldap_dn:        $result['ldap_dn'] = $ldap_dn;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PullRequest⚡️Head(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\PullRequest\Head);
        $result = [];

        $label = $object->label;
        after_label:        $result['label'] = $label;

        
        $ref = $object->ref;
        after_ref:        $result['ref'] = $ref;

        
        $repo = $object->repo;

        if ($repo === null) {
            goto after_repo;
        }
        $repo = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PullRequest⚡️Head⚡️Repo($repo);
        after_repo:        $result['repo'] = $repo;

        
        $sha = $object->sha;
        after_sha:        $result['sha'] = $sha;

        
        $user = $object->user;
        $user = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PullRequest⚡️Head⚡️Repo⚡️Owner($user);
        after_user:        $result['user'] = $user;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PullRequest⚡️Head⚡️Repo(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\PullRequest\Head\Repo);
        $result = [];

        $archive_url = $object->archive_url;
        after_archive_url:        $result['archive_url'] = $archive_url;

        
        $assignees_url = $object->assignees_url;
        after_assignees_url:        $result['assignees_url'] = $assignees_url;

        
        $blobs_url = $object->blobs_url;
        after_blobs_url:        $result['blobs_url'] = $blobs_url;

        
        $branches_url = $object->branches_url;
        after_branches_url:        $result['branches_url'] = $branches_url;

        
        $collaborators_url = $object->collaborators_url;
        after_collaborators_url:        $result['collaborators_url'] = $collaborators_url;

        
        $comments_url = $object->comments_url;
        after_comments_url:        $result['comments_url'] = $comments_url;

        
        $commits_url = $object->commits_url;
        after_commits_url:        $result['commits_url'] = $commits_url;

        
        $compare_url = $object->compare_url;
        after_compare_url:        $result['compare_url'] = $compare_url;

        
        $contents_url = $object->contents_url;
        after_contents_url:        $result['contents_url'] = $contents_url;

        
        $contributors_url = $object->contributors_url;
        after_contributors_url:        $result['contributors_url'] = $contributors_url;

        
        $deployments_url = $object->deployments_url;
        after_deployments_url:        $result['deployments_url'] = $deployments_url;

        
        $description = $object->description;

        if ($description === null) {
            goto after_description;
        }
        after_description:        $result['description'] = $description;

        
        $downloads_url = $object->downloads_url;
        after_downloads_url:        $result['downloads_url'] = $downloads_url;

        
        $events_url = $object->events_url;
        after_events_url:        $result['events_url'] = $events_url;

        
        $fork = $object->fork;
        after_fork:        $result['fork'] = $fork;

        
        $forks_url = $object->forks_url;
        after_forks_url:        $result['forks_url'] = $forks_url;

        
        $full_name = $object->full_name;
        after_full_name:        $result['full_name'] = $full_name;

        
        $git_commits_url = $object->git_commits_url;
        after_git_commits_url:        $result['git_commits_url'] = $git_commits_url;

        
        $git_refs_url = $object->git_refs_url;
        after_git_refs_url:        $result['git_refs_url'] = $git_refs_url;

        
        $git_tags_url = $object->git_tags_url;
        after_git_tags_url:        $result['git_tags_url'] = $git_tags_url;

        
        $hooks_url = $object->hooks_url;
        after_hooks_url:        $result['hooks_url'] = $hooks_url;

        
        $html_url = $object->html_url;
        after_html_url:        $result['html_url'] = $html_url;

        
        $id = $object->id;
        after_id:        $result['id'] = $id;

        
        $node_id = $object->node_id;
        after_node_id:        $result['node_id'] = $node_id;

        
        $issue_comment_url = $object->issue_comment_url;
        after_issue_comment_url:        $result['issue_comment_url'] = $issue_comment_url;

        
        $issue_events_url = $object->issue_events_url;
        after_issue_events_url:        $result['issue_events_url'] = $issue_events_url;

        
        $issues_url = $object->issues_url;
        after_issues_url:        $result['issues_url'] = $issues_url;

        
        $keys_url = $object->keys_url;
        after_keys_url:        $result['keys_url'] = $keys_url;

        
        $labels_url = $object->labels_url;
        after_labels_url:        $result['labels_url'] = $labels_url;

        
        $languages_url = $object->languages_url;
        after_languages_url:        $result['languages_url'] = $languages_url;

        
        $merges_url = $object->merges_url;
        after_merges_url:        $result['merges_url'] = $merges_url;

        
        $milestones_url = $object->milestones_url;
        after_milestones_url:        $result['milestones_url'] = $milestones_url;

        
        $name = $object->name;
        after_name:        $result['name'] = $name;

        
        $notifications_url = $object->notifications_url;
        after_notifications_url:        $result['notifications_url'] = $notifications_url;

        
        $owner = $object->owner;
        $owner = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PullRequest⚡️Head⚡️Repo⚡️Owner($owner);
        after_owner:        $result['owner'] = $owner;

        
        $private = $object->private;
        after_private:        $result['private'] = $private;

        
        $pulls_url = $object->pulls_url;
        after_pulls_url:        $result['pulls_url'] = $pulls_url;

        
        $releases_url = $object->releases_url;
        after_releases_url:        $result['releases_url'] = $releases_url;

        
        $stargazers_url = $object->stargazers_url;
        after_stargazers_url:        $result['stargazers_url'] = $stargazers_url;

        
        $statuses_url = $object->statuses_url;
        after_statuses_url:        $result['statuses_url'] = $statuses_url;

        
        $subscribers_url = $object->subscribers_url;
        after_subscribers_url:        $result['subscribers_url'] = $subscribers_url;

        
        $subscription_url = $object->subscription_url;
        after_subscription_url:        $result['subscription_url'] = $subscription_url;

        
        $tags_url = $object->tags_url;
        after_tags_url:        $result['tags_url'] = $tags_url;

        
        $teams_url = $object->teams_url;
        after_teams_url:        $result['teams_url'] = $teams_url;

        
        $trees_url = $object->trees_url;
        after_trees_url:        $result['trees_url'] = $trees_url;

        
        $url = $object->url;
        after_url:        $result['url'] = $url;

        
        $clone_url = $object->clone_url;
        after_clone_url:        $result['clone_url'] = $clone_url;

        
        $default_branch = $object->default_branch;
        after_default_branch:        $result['default_branch'] = $default_branch;

        
        $forks = $object->forks;
        after_forks:        $result['forks'] = $forks;

        
        $forks_count = $object->forks_count;
        after_forks_count:        $result['forks_count'] = $forks_count;

        
        $git_url = $object->git_url;
        after_git_url:        $result['git_url'] = $git_url;

        
        $has_downloads = $object->has_downloads;
        after_has_downloads:        $result['has_downloads'] = $has_downloads;

        
        $has_issues = $object->has_issues;
        after_has_issues:        $result['has_issues'] = $has_issues;

        
        $has_projects = $object->has_projects;
        after_has_projects:        $result['has_projects'] = $has_projects;

        
        $has_wiki = $object->has_wiki;
        after_has_wiki:        $result['has_wiki'] = $has_wiki;

        
        $has_pages = $object->has_pages;
        after_has_pages:        $result['has_pages'] = $has_pages;

        
        $has_discussions = $object->has_discussions;
        after_has_discussions:        $result['has_discussions'] = $has_discussions;

        
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

        
        $master_branch = $object->master_branch;

        if ($master_branch === null) {
            goto after_master_branch;
        }
        after_master_branch:        $result['master_branch'] = $master_branch;

        
        $archived = $object->archived;
        after_archived:        $result['archived'] = $archived;

        
        $disabled = $object->disabled;
        after_disabled:        $result['disabled'] = $disabled;

        
        $visibility = $object->visibility;

        if ($visibility === null) {
            goto after_visibility;
        }
        after_visibility:        $result['visibility'] = $visibility;

        
        $mirror_url = $object->mirror_url;

        if ($mirror_url === null) {
            goto after_mirror_url;
        }
        after_mirror_url:        $result['mirror_url'] = $mirror_url;

        
        $open_issues = $object->open_issues;
        after_open_issues:        $result['open_issues'] = $open_issues;

        
        $open_issues_count = $object->open_issues_count;
        after_open_issues_count:        $result['open_issues_count'] = $open_issues_count;

        
        $permissions = $object->permissions;

        if ($permissions === null) {
            goto after_permissions;
        }
        $permissions = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️FullRepository⚡️Permissions($permissions);
        after_permissions:        $result['permissions'] = $permissions;

        
        $temp_clone_token = $object->temp_clone_token;

        if ($temp_clone_token === null) {
            goto after_temp_clone_token;
        }
        after_temp_clone_token:        $result['temp_clone_token'] = $temp_clone_token;

        
        $allow_merge_commit = $object->allow_merge_commit;

        if ($allow_merge_commit === null) {
            goto after_allow_merge_commit;
        }
        after_allow_merge_commit:        $result['allow_merge_commit'] = $allow_merge_commit;

        
        $allow_squash_merge = $object->allow_squash_merge;

        if ($allow_squash_merge === null) {
            goto after_allow_squash_merge;
        }
        after_allow_squash_merge:        $result['allow_squash_merge'] = $allow_squash_merge;

        
        $allow_rebase_merge = $object->allow_rebase_merge;

        if ($allow_rebase_merge === null) {
            goto after_allow_rebase_merge;
        }
        after_allow_rebase_merge:        $result['allow_rebase_merge'] = $allow_rebase_merge;

        
        $license = $object->license;

        if ($license === null) {
            goto after_license;
        }
        $license = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PullRequest⚡️Head⚡️Repo⚡️License($license);
        after_license:        $result['license'] = $license;

        
        $pushed_at = $object->pushed_at;
        after_pushed_at:        $result['pushed_at'] = $pushed_at;

        
        $size = $object->size;
        after_size:        $result['size'] = $size;

        
        $ssh_url = $object->ssh_url;
        after_ssh_url:        $result['ssh_url'] = $ssh_url;

        
        $stargazers_count = $object->stargazers_count;
        after_stargazers_count:        $result['stargazers_count'] = $stargazers_count;

        
        $svn_url = $object->svn_url;
        after_svn_url:        $result['svn_url'] = $svn_url;

        
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

        
        $watchers = $object->watchers;
        after_watchers:        $result['watchers'] = $watchers;

        
        $watchers_count = $object->watchers_count;
        after_watchers_count:        $result['watchers_count'] = $watchers_count;

        
        $created_at = $object->created_at;
        after_created_at:        $result['created_at'] = $created_at;

        
        $updated_at = $object->updated_at;
        after_updated_at:        $result['updated_at'] = $updated_at;

        
        $allow_forking = $object->allow_forking;

        if ($allow_forking === null) {
            goto after_allow_forking;
        }
        after_allow_forking:        $result['allow_forking'] = $allow_forking;

        
        $is_template = $object->is_template;

        if ($is_template === null) {
            goto after_is_template;
        }
        after_is_template:        $result['is_template'] = $is_template;

        
        $web_commit_signoff_required = $object->web_commit_signoff_required;

        if ($web_commit_signoff_required === null) {
            goto after_web_commit_signoff_required;
        }
        after_web_commit_signoff_required:        $result['web_commit_signoff_required'] = $web_commit_signoff_required;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PullRequest⚡️Head⚡️Repo⚡️Owner(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\PullRequest\Head\Repo\Owner);
        $result = [];

        $avatar_url = $object->avatar_url;
        after_avatar_url:        $result['avatar_url'] = $avatar_url;

        
        $events_url = $object->events_url;
        after_events_url:        $result['events_url'] = $events_url;

        
        $followers_url = $object->followers_url;
        after_followers_url:        $result['followers_url'] = $followers_url;

        
        $following_url = $object->following_url;
        after_following_url:        $result['following_url'] = $following_url;

        
        $gists_url = $object->gists_url;
        after_gists_url:        $result['gists_url'] = $gists_url;

        
        $gravatar_id = $object->gravatar_id;

        if ($gravatar_id === null) {
            goto after_gravatar_id;
        }
        after_gravatar_id:        $result['gravatar_id'] = $gravatar_id;

        
        $html_url = $object->html_url;
        after_html_url:        $result['html_url'] = $html_url;

        
        $id = $object->id;
        after_id:        $result['id'] = $id;

        
        $node_id = $object->node_id;
        after_node_id:        $result['node_id'] = $node_id;

        
        $login = $object->login;
        after_login:        $result['login'] = $login;

        
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


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️FullRepository⚡️Permissions(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\FullRepository\Permissions);
        $result = [];

        $admin = $object->admin;
        after_admin:        $result['admin'] = $admin;

        
        $maintain = $object->maintain;

        if ($maintain === null) {
            goto after_maintain;
        }
        after_maintain:        $result['maintain'] = $maintain;

        
        $push = $object->push;
        after_push:        $result['push'] = $push;

        
        $triage = $object->triage;

        if ($triage === null) {
            goto after_triage;
        }
        after_triage:        $result['triage'] = $triage;

        
        $pull = $object->pull;
        after_pull:        $result['pull'] = $pull;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PullRequest⚡️Head⚡️Repo⚡️License(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\PullRequest\Head\Repo\License);
        $result = [];

        $key = $object->key;
        after_key:        $result['key'] = $key;

        
        $name = $object->name;
        after_name:        $result['name'] = $name;

        
        $url = $object->url;

        if ($url === null) {
            goto after_url;
        }
        after_url:        $result['url'] = $url;

        
        $spdx_id = $object->spdx_id;

        if ($spdx_id === null) {
            goto after_spdx_id;
        }
        after_spdx_id:        $result['spdx_id'] = $spdx_id;

        
        $node_id = $object->node_id;
        after_node_id:        $result['node_id'] = $node_id;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PullRequest⚡️Base(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\PullRequest\Base);
        $result = [];

        $label = $object->label;
        after_label:        $result['label'] = $label;

        
        $ref = $object->ref;
        after_ref:        $result['ref'] = $ref;

        
        $repo = $object->repo;
        $repo = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PullRequest⚡️Base⚡️Repo($repo);
        after_repo:        $result['repo'] = $repo;

        
        $sha = $object->sha;
        after_sha:        $result['sha'] = $sha;

        
        $user = $object->user;
        $user = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PullRequest⚡️Head⚡️Repo⚡️Owner($user);
        after_user:        $result['user'] = $user;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PullRequest⚡️Base⚡️Repo(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\PullRequest\Base\Repo);
        $result = [];

        $archive_url = $object->archive_url;
        after_archive_url:        $result['archive_url'] = $archive_url;

        
        $assignees_url = $object->assignees_url;
        after_assignees_url:        $result['assignees_url'] = $assignees_url;

        
        $blobs_url = $object->blobs_url;
        after_blobs_url:        $result['blobs_url'] = $blobs_url;

        
        $branches_url = $object->branches_url;
        after_branches_url:        $result['branches_url'] = $branches_url;

        
        $collaborators_url = $object->collaborators_url;
        after_collaborators_url:        $result['collaborators_url'] = $collaborators_url;

        
        $comments_url = $object->comments_url;
        after_comments_url:        $result['comments_url'] = $comments_url;

        
        $commits_url = $object->commits_url;
        after_commits_url:        $result['commits_url'] = $commits_url;

        
        $compare_url = $object->compare_url;
        after_compare_url:        $result['compare_url'] = $compare_url;

        
        $contents_url = $object->contents_url;
        after_contents_url:        $result['contents_url'] = $contents_url;

        
        $contributors_url = $object->contributors_url;
        after_contributors_url:        $result['contributors_url'] = $contributors_url;

        
        $deployments_url = $object->deployments_url;
        after_deployments_url:        $result['deployments_url'] = $deployments_url;

        
        $description = $object->description;

        if ($description === null) {
            goto after_description;
        }
        after_description:        $result['description'] = $description;

        
        $downloads_url = $object->downloads_url;
        after_downloads_url:        $result['downloads_url'] = $downloads_url;

        
        $events_url = $object->events_url;
        after_events_url:        $result['events_url'] = $events_url;

        
        $fork = $object->fork;
        after_fork:        $result['fork'] = $fork;

        
        $forks_url = $object->forks_url;
        after_forks_url:        $result['forks_url'] = $forks_url;

        
        $full_name = $object->full_name;
        after_full_name:        $result['full_name'] = $full_name;

        
        $git_commits_url = $object->git_commits_url;
        after_git_commits_url:        $result['git_commits_url'] = $git_commits_url;

        
        $git_refs_url = $object->git_refs_url;
        after_git_refs_url:        $result['git_refs_url'] = $git_refs_url;

        
        $git_tags_url = $object->git_tags_url;
        after_git_tags_url:        $result['git_tags_url'] = $git_tags_url;

        
        $hooks_url = $object->hooks_url;
        after_hooks_url:        $result['hooks_url'] = $hooks_url;

        
        $html_url = $object->html_url;
        after_html_url:        $result['html_url'] = $html_url;

        
        $id = $object->id;
        after_id:        $result['id'] = $id;

        
        $is_template = $object->is_template;

        if ($is_template === null) {
            goto after_is_template;
        }
        after_is_template:        $result['is_template'] = $is_template;

        
        $node_id = $object->node_id;
        after_node_id:        $result['node_id'] = $node_id;

        
        $issue_comment_url = $object->issue_comment_url;
        after_issue_comment_url:        $result['issue_comment_url'] = $issue_comment_url;

        
        $issue_events_url = $object->issue_events_url;
        after_issue_events_url:        $result['issue_events_url'] = $issue_events_url;

        
        $issues_url = $object->issues_url;
        after_issues_url:        $result['issues_url'] = $issues_url;

        
        $keys_url = $object->keys_url;
        after_keys_url:        $result['keys_url'] = $keys_url;

        
        $labels_url = $object->labels_url;
        after_labels_url:        $result['labels_url'] = $labels_url;

        
        $languages_url = $object->languages_url;
        after_languages_url:        $result['languages_url'] = $languages_url;

        
        $merges_url = $object->merges_url;
        after_merges_url:        $result['merges_url'] = $merges_url;

        
        $milestones_url = $object->milestones_url;
        after_milestones_url:        $result['milestones_url'] = $milestones_url;

        
        $name = $object->name;
        after_name:        $result['name'] = $name;

        
        $notifications_url = $object->notifications_url;
        after_notifications_url:        $result['notifications_url'] = $notifications_url;

        
        $owner = $object->owner;
        $owner = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PullRequest⚡️Head⚡️Repo⚡️Owner($owner);
        after_owner:        $result['owner'] = $owner;

        
        $private = $object->private;
        after_private:        $result['private'] = $private;

        
        $pulls_url = $object->pulls_url;
        after_pulls_url:        $result['pulls_url'] = $pulls_url;

        
        $releases_url = $object->releases_url;
        after_releases_url:        $result['releases_url'] = $releases_url;

        
        $stargazers_url = $object->stargazers_url;
        after_stargazers_url:        $result['stargazers_url'] = $stargazers_url;

        
        $statuses_url = $object->statuses_url;
        after_statuses_url:        $result['statuses_url'] = $statuses_url;

        
        $subscribers_url = $object->subscribers_url;
        after_subscribers_url:        $result['subscribers_url'] = $subscribers_url;

        
        $subscription_url = $object->subscription_url;
        after_subscription_url:        $result['subscription_url'] = $subscription_url;

        
        $tags_url = $object->tags_url;
        after_tags_url:        $result['tags_url'] = $tags_url;

        
        $teams_url = $object->teams_url;
        after_teams_url:        $result['teams_url'] = $teams_url;

        
        $trees_url = $object->trees_url;
        after_trees_url:        $result['trees_url'] = $trees_url;

        
        $url = $object->url;
        after_url:        $result['url'] = $url;

        
        $clone_url = $object->clone_url;
        after_clone_url:        $result['clone_url'] = $clone_url;

        
        $default_branch = $object->default_branch;
        after_default_branch:        $result['default_branch'] = $default_branch;

        
        $forks = $object->forks;
        after_forks:        $result['forks'] = $forks;

        
        $forks_count = $object->forks_count;
        after_forks_count:        $result['forks_count'] = $forks_count;

        
        $git_url = $object->git_url;
        after_git_url:        $result['git_url'] = $git_url;

        
        $has_downloads = $object->has_downloads;
        after_has_downloads:        $result['has_downloads'] = $has_downloads;

        
        $has_issues = $object->has_issues;
        after_has_issues:        $result['has_issues'] = $has_issues;

        
        $has_projects = $object->has_projects;
        after_has_projects:        $result['has_projects'] = $has_projects;

        
        $has_wiki = $object->has_wiki;
        after_has_wiki:        $result['has_wiki'] = $has_wiki;

        
        $has_pages = $object->has_pages;
        after_has_pages:        $result['has_pages'] = $has_pages;

        
        $has_discussions = $object->has_discussions;
        after_has_discussions:        $result['has_discussions'] = $has_discussions;

        
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

        
        $master_branch = $object->master_branch;

        if ($master_branch === null) {
            goto after_master_branch;
        }
        after_master_branch:        $result['master_branch'] = $master_branch;

        
        $archived = $object->archived;
        after_archived:        $result['archived'] = $archived;

        
        $disabled = $object->disabled;
        after_disabled:        $result['disabled'] = $disabled;

        
        $visibility = $object->visibility;

        if ($visibility === null) {
            goto after_visibility;
        }
        after_visibility:        $result['visibility'] = $visibility;

        
        $mirror_url = $object->mirror_url;

        if ($mirror_url === null) {
            goto after_mirror_url;
        }
        after_mirror_url:        $result['mirror_url'] = $mirror_url;

        
        $open_issues = $object->open_issues;
        after_open_issues:        $result['open_issues'] = $open_issues;

        
        $open_issues_count = $object->open_issues_count;
        after_open_issues_count:        $result['open_issues_count'] = $open_issues_count;

        
        $permissions = $object->permissions;

        if ($permissions === null) {
            goto after_permissions;
        }
        $permissions = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️FullRepository⚡️Permissions($permissions);
        after_permissions:        $result['permissions'] = $permissions;

        
        $temp_clone_token = $object->temp_clone_token;

        if ($temp_clone_token === null) {
            goto after_temp_clone_token;
        }
        after_temp_clone_token:        $result['temp_clone_token'] = $temp_clone_token;

        
        $allow_merge_commit = $object->allow_merge_commit;

        if ($allow_merge_commit === null) {
            goto after_allow_merge_commit;
        }
        after_allow_merge_commit:        $result['allow_merge_commit'] = $allow_merge_commit;

        
        $allow_squash_merge = $object->allow_squash_merge;

        if ($allow_squash_merge === null) {
            goto after_allow_squash_merge;
        }
        after_allow_squash_merge:        $result['allow_squash_merge'] = $allow_squash_merge;

        
        $allow_rebase_merge = $object->allow_rebase_merge;

        if ($allow_rebase_merge === null) {
            goto after_allow_rebase_merge;
        }
        after_allow_rebase_merge:        $result['allow_rebase_merge'] = $allow_rebase_merge;

        
        $license = $object->license;

        if ($license === null) {
            goto after_license;
        }
        after_license:        $result['license'] = $license;

        
        $pushed_at = $object->pushed_at;
        after_pushed_at:        $result['pushed_at'] = $pushed_at;

        
        $size = $object->size;
        after_size:        $result['size'] = $size;

        
        $ssh_url = $object->ssh_url;
        after_ssh_url:        $result['ssh_url'] = $ssh_url;

        
        $stargazers_count = $object->stargazers_count;
        after_stargazers_count:        $result['stargazers_count'] = $stargazers_count;

        
        $svn_url = $object->svn_url;
        after_svn_url:        $result['svn_url'] = $svn_url;

        
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

        
        $watchers = $object->watchers;
        after_watchers:        $result['watchers'] = $watchers;

        
        $watchers_count = $object->watchers_count;
        after_watchers_count:        $result['watchers_count'] = $watchers_count;

        
        $created_at = $object->created_at;
        after_created_at:        $result['created_at'] = $created_at;

        
        $updated_at = $object->updated_at;
        after_updated_at:        $result['updated_at'] = $updated_at;

        
        $allow_forking = $object->allow_forking;

        if ($allow_forking === null) {
            goto after_allow_forking;
        }
        after_allow_forking:        $result['allow_forking'] = $allow_forking;

        
        $web_commit_signoff_required = $object->web_commit_signoff_required;

        if ($web_commit_signoff_required === null) {
            goto after_web_commit_signoff_required;
        }
        after_web_commit_signoff_required:        $result['web_commit_signoff_required'] = $web_commit_signoff_required;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PullRequestSimple⚡️Links(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\PullRequestSimple\Links);
        $result = [];

        $comments = $object->comments;
        $comments = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Link($comments);
        after_comments:        $result['comments'] = $comments;

        
        $commits = $object->commits;
        $commits = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Link($commits);
        after_commits:        $result['commits'] = $commits;

        
        $statuses = $object->statuses;
        $statuses = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Link($statuses);
        after_statuses:        $result['statuses'] = $statuses;

        
        $html = $object->html;
        $html = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Link($html);
        after_html:        $result['html'] = $html;

        
        $issue = $object->issue;
        $issue = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Link($issue);
        after_issue:        $result['issue'] = $issue;

        
        $review_comments = $object->review_comments;
        $review_comments = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Link($review_comments);
        after_review_comments:        $result['review_comments'] = $review_comments;

        
        $review_comment = $object->review_comment;
        $review_comment = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Link($review_comment);
        after_review_comment:        $result['review_comment'] = $review_comment;

        
        $self = $object->self;
        $self = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Link($self);
        after_self:        $result['self'] = $self;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Link(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\Link);
        $result = [];

        $href = $object->href;
        after_href:        $result['href'] = $href;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️AutoMerge(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\AutoMerge);
        $result = [];

        $enabled_by = $object->enabled_by;
        $enabled_by = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($enabled_by);
        after_enabled_by:        $result['enabled_by'] = $enabled_by;

        
        $merge_method = $object->merge_method;
        after_merge_method:        $result['merge_method'] = $merge_method;

        
        $commit_title = $object->commit_title;
        after_commit_title:        $result['commit_title'] = $commit_title;

        
        $commit_message = $object->commit_message;
        after_commit_message:        $result['commit_message'] = $commit_message;


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


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Operation⚡️SecretScanning⚡️ListAlertsForEnterprise⚡️Response⚡️Applicationjson⚡️H503(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\Operation\SecretScanning\ListAlertsForEnterprise\Response\Applicationjson\H503);
        $result = [];

        $code = $object->code;

        if ($code === null) {
            goto after_code;
        }
        after_code:        $result['code'] = $code;

        
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


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ValidationError(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\ValidationError);
        $result = [];

        $message = $object->message;
        after_message:        $result['message'] = $message;

        
        $documentation_url = $object->documentation_url;
        after_documentation_url:        $result['documentation_url'] = $documentation_url;

        
        $errors = $object->errors;

        if ($errors === null) {
            goto after_errors;
        }
        static $errorsSerializer0;

        if ($errorsSerializer0 === null) {
            $errorsSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\ValidationError\\Errors',
));
        }
        
        $errors = $errorsSerializer0->serialize($errors, $this);
        after_errors:        $result['errors'] = $errors;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ValidationError⚡️Errors(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\ValidationError\Errors);
        $result = [];

        $resource = $object->resource;

        if ($resource === null) {
            goto after_resource;
        }
        after_resource:        $result['resource'] = $resource;

        
        $field = $object->field;

        if ($field === null) {
            goto after_field;
        }
        after_field:        $result['field'] = $field;

        
        $message = $object->message;

        if ($message === null) {
            goto after_message;
        }
        after_message:        $result['message'] = $message;

        
        $code = $object->code;
        after_code:        $result['code'] = $code;

        
        $index = $object->index;

        if ($index === null) {
            goto after_index;
        }
        after_index:        $result['index'] = $index;

        
        $value = $object->value;

        if ($value === null) {
            goto after_value;
        }
        after_value:        $result['value'] = $value;


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
