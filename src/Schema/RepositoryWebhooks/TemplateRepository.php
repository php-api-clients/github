<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\RepositoryWebhooks;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class TemplateRepository
{
    public const SCHEMA_JSON         = '{
    "type": [
        "object",
        "null"
    ],
    "properties": {
        "id": {
            "type": "integer"
        },
        "node_id": {
            "type": "string"
        },
        "name": {
            "type": "string"
        },
        "full_name": {
            "type": "string"
        },
        "owner": {
            "type": "object",
            "properties": {
                "login": {
                    "type": "string"
                },
                "id": {
                    "type": "integer"
                },
                "node_id": {
                    "type": "string"
                },
                "avatar_url": {
                    "type": "string"
                },
                "gravatar_id": {
                    "type": "string"
                },
                "url": {
                    "type": "string"
                },
                "html_url": {
                    "type": "string"
                },
                "followers_url": {
                    "type": "string"
                },
                "following_url": {
                    "type": "string"
                },
                "gists_url": {
                    "type": "string"
                },
                "starred_url": {
                    "type": "string"
                },
                "subscriptions_url": {
                    "type": "string"
                },
                "organizations_url": {
                    "type": "string"
                },
                "repos_url": {
                    "type": "string"
                },
                "events_url": {
                    "type": "string"
                },
                "received_events_url": {
                    "type": "string"
                },
                "type": {
                    "type": "string"
                },
                "site_admin": {
                    "type": "boolean"
                }
            }
        },
        "private": {
            "type": "boolean"
        },
        "html_url": {
            "type": "string"
        },
        "description": {
            "type": "string"
        },
        "fork": {
            "type": "boolean"
        },
        "url": {
            "type": "string"
        },
        "archive_url": {
            "type": "string"
        },
        "assignees_url": {
            "type": "string"
        },
        "blobs_url": {
            "type": "string"
        },
        "branches_url": {
            "type": "string"
        },
        "collaborators_url": {
            "type": "string"
        },
        "comments_url": {
            "type": "string"
        },
        "commits_url": {
            "type": "string"
        },
        "compare_url": {
            "type": "string"
        },
        "contents_url": {
            "type": "string"
        },
        "contributors_url": {
            "type": "string"
        },
        "deployments_url": {
            "type": "string"
        },
        "downloads_url": {
            "type": "string"
        },
        "events_url": {
            "type": "string"
        },
        "forks_url": {
            "type": "string"
        },
        "git_commits_url": {
            "type": "string"
        },
        "git_refs_url": {
            "type": "string"
        },
        "git_tags_url": {
            "type": "string"
        },
        "git_url": {
            "type": "string"
        },
        "issue_comment_url": {
            "type": "string"
        },
        "issue_events_url": {
            "type": "string"
        },
        "issues_url": {
            "type": "string"
        },
        "keys_url": {
            "type": "string"
        },
        "labels_url": {
            "type": "string"
        },
        "languages_url": {
            "type": "string"
        },
        "merges_url": {
            "type": "string"
        },
        "milestones_url": {
            "type": "string"
        },
        "notifications_url": {
            "type": "string"
        },
        "pulls_url": {
            "type": "string"
        },
        "releases_url": {
            "type": "string"
        },
        "ssh_url": {
            "type": "string"
        },
        "stargazers_url": {
            "type": "string"
        },
        "statuses_url": {
            "type": "string"
        },
        "subscribers_url": {
            "type": "string"
        },
        "subscription_url": {
            "type": "string"
        },
        "tags_url": {
            "type": "string"
        },
        "teams_url": {
            "type": "string"
        },
        "trees_url": {
            "type": "string"
        },
        "clone_url": {
            "type": "string"
        },
        "mirror_url": {
            "type": "string"
        },
        "hooks_url": {
            "type": "string"
        },
        "svn_url": {
            "type": "string"
        },
        "homepage": {
            "type": "string"
        },
        "language": {
            "type": "string"
        },
        "forks_count": {
            "type": "integer"
        },
        "stargazers_count": {
            "type": "integer"
        },
        "watchers_count": {
            "type": "integer"
        },
        "size": {
            "type": "integer"
        },
        "default_branch": {
            "type": "string"
        },
        "open_issues_count": {
            "type": "integer"
        },
        "is_template": {
            "type": "boolean"
        },
        "topics": {
            "type": "array",
            "items": {
                "type": "string"
            }
        },
        "has_issues": {
            "type": "boolean"
        },
        "has_projects": {
            "type": "boolean"
        },
        "has_wiki": {
            "type": "boolean"
        },
        "has_pages": {
            "type": "boolean"
        },
        "has_downloads": {
            "type": "boolean"
        },
        "archived": {
            "type": "boolean"
        },
        "disabled": {
            "type": "boolean"
        },
        "visibility": {
            "type": "string"
        },
        "pushed_at": {
            "type": "string"
        },
        "created_at": {
            "type": "string"
        },
        "updated_at": {
            "type": "string"
        },
        "permissions": {
            "type": "object",
            "properties": {
                "admin": {
                    "type": "boolean"
                },
                "maintain": {
                    "type": "boolean"
                },
                "push": {
                    "type": "boolean"
                },
                "triage": {
                    "type": "boolean"
                },
                "pull": {
                    "type": "boolean"
                }
            }
        },
        "allow_rebase_merge": {
            "type": "boolean"
        },
        "temp_clone_token": {
            "type": "string"
        },
        "allow_squash_merge": {
            "type": "boolean"
        },
        "allow_auto_merge": {
            "type": "boolean"
        },
        "delete_branch_on_merge": {
            "type": "boolean"
        },
        "allow_update_branch": {
            "type": "boolean"
        },
        "use_squash_pr_title_as_default": {
            "type": "boolean"
        },
        "squash_merge_commit_title": {
            "enum": [
                "PR_TITLE",
                "COMMIT_OR_PR_TITLE"
            ],
            "type": "string",
            "description": "The default value for a squash merge commit title:\\n\\n- `PR_TITLE` - default to the pull request\'s title.\\n- `COMMIT_OR_PR_TITLE` - default to the commit\'s title (if only one commit) or the pull request\'s title (when more than one commit)."
        },
        "squash_merge_commit_message": {
            "enum": [
                "PR_BODY",
                "COMMIT_MESSAGES",
                "BLANK"
            ],
            "type": "string",
            "description": "The default value for a squash merge commit message:\\n\\n- `PR_BODY` - default to the pull request\'s body.\\n- `COMMIT_MESSAGES` - default to the branch\'s commit messages.\\n- `BLANK` - default to a blank commit message."
        },
        "merge_commit_title": {
            "enum": [
                "PR_TITLE",
                "MERGE_MESSAGE"
            ],
            "type": "string",
            "description": "The default value for a merge commit title.\\n\\n- `PR_TITLE` - default to the pull request\'s title.\\n- `MERGE_MESSAGE` - default to the classic title for a merge message (e.g., Merge pull request #123 from branch-name)."
        },
        "merge_commit_message": {
            "enum": [
                "PR_BODY",
                "PR_TITLE",
                "BLANK"
            ],
            "type": "string",
            "description": "The default value for a merge commit message.\\n\\n- `PR_TITLE` - default to the pull request\'s title.\\n- `PR_BODY` - default to the pull request\'s body.\\n- `BLANK` - default to a blank commit message."
        },
        "allow_merge_commit": {
            "type": "boolean"
        },
        "subscribers_count": {
            "type": "integer"
        },
        "network_count": {
            "type": "integer"
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "id": 2,
    "node_id": "generated",
    "name": "generated",
    "full_name": "generated",
    "owner": {
        "login": "generated",
        "id": 2,
        "node_id": "generated",
        "avatar_url": "generated",
        "gravatar_id": "generated",
        "url": "generated",
        "html_url": "generated",
        "followers_url": "generated",
        "following_url": "generated",
        "gists_url": "generated",
        "starred_url": "generated",
        "subscriptions_url": "generated",
        "organizations_url": "generated",
        "repos_url": "generated",
        "events_url": "generated",
        "received_events_url": "generated",
        "type": "generated",
        "site_admin": false
    },
    "private": false,
    "html_url": "generated",
    "description": "generated",
    "fork": false,
    "url": "generated",
    "archive_url": "generated",
    "assignees_url": "generated",
    "blobs_url": "generated",
    "branches_url": "generated",
    "collaborators_url": "generated",
    "comments_url": "generated",
    "commits_url": "generated",
    "compare_url": "generated",
    "contents_url": "generated",
    "contributors_url": "generated",
    "deployments_url": "generated",
    "downloads_url": "generated",
    "events_url": "generated",
    "forks_url": "generated",
    "git_commits_url": "generated",
    "git_refs_url": "generated",
    "git_tags_url": "generated",
    "git_url": "generated",
    "issue_comment_url": "generated",
    "issue_events_url": "generated",
    "issues_url": "generated",
    "keys_url": "generated",
    "labels_url": "generated",
    "languages_url": "generated",
    "merges_url": "generated",
    "milestones_url": "generated",
    "notifications_url": "generated",
    "pulls_url": "generated",
    "releases_url": "generated",
    "ssh_url": "generated",
    "stargazers_url": "generated",
    "statuses_url": "generated",
    "subscribers_url": "generated",
    "subscription_url": "generated",
    "tags_url": "generated",
    "teams_url": "generated",
    "trees_url": "generated",
    "clone_url": "generated",
    "mirror_url": "generated",
    "hooks_url": "generated",
    "svn_url": "generated",
    "homepage": "generated",
    "language": "generated",
    "forks_count": 11,
    "stargazers_count": 16,
    "watchers_count": 14,
    "size": 4,
    "default_branch": "generated",
    "open_issues_count": 17,
    "is_template": false,
    "topics": [
        "generated",
        "generated"
    ],
    "has_issues": false,
    "has_projects": false,
    "has_wiki": false,
    "has_pages": false,
    "has_downloads": false,
    "archived": false,
    "disabled": false,
    "visibility": "generated",
    "pushed_at": "generated",
    "created_at": "generated",
    "updated_at": "generated",
    "permissions": {
        "admin": false,
        "maintain": false,
        "push": false,
        "triage": false,
        "pull": false
    },
    "allow_rebase_merge": false,
    "temp_clone_token": "generated",
    "allow_squash_merge": false,
    "allow_auto_merge": false,
    "delete_branch_on_merge": false,
    "allow_update_branch": false,
    "use_squash_pr_title_as_default": false,
    "squash_merge_commit_title": "PR_TITLE",
    "squash_merge_commit_message": "PR_BODY",
    "merge_commit_title": "MERGE_MESSAGE",
    "merge_commit_message": "BLANK",
    "allow_merge_commit": false,
    "subscribers_count": 17,
    "network_count": 13
}';

    /**
     * squashMergeCommitTitle: The default value for a squash merge commit title:

    - `PR_TITLE` - default to the pull request's title.
    - `COMMIT_OR_PR_TITLE` - default to the commit's title (if only one commit) or the pull request's title (when more than one commit).
     * squashMergeCommitMessage: The default value for a squash merge commit message:

    - `PR_BODY` - default to the pull request's body.
    - `COMMIT_MESSAGES` - default to the branch's commit messages.
    - `BLANK` - default to a blank commit message.
     * mergeCommitTitle: The default value for a merge commit title.

    - `PR_TITLE` - default to the pull request's title.
    - `MERGE_MESSAGE` - default to the classic title for a merge message (e.g., Merge pull request #123 from branch-name).
     * mergeCommitMessage: The default value for a merge commit message.

    - `PR_TITLE` - default to the pull request's title.
    - `PR_BODY` - default to the pull request's body.
    - `BLANK` - default to a blank commit message.
     */
    public function __construct(public int|null $id, #[MapFrom('node_id')]
    public string|null $nodeId, public string|null $name, #[MapFrom('full_name')]
    public string|null $fullName, public Schema\RepositoryWebhooks\TemplateRepository\Owner|null $owner, public bool|null $private, #[MapFrom('html_url')]
    public string|null $htmlUrl, public string|null $description, public bool|null $fork, public string|null $url, #[MapFrom('archive_url')]
    public string|null $archiveUrl, #[MapFrom('assignees_url')]
    public string|null $assigneesUrl, #[MapFrom('blobs_url')]
    public string|null $blobsUrl, #[MapFrom('branches_url')]
    public string|null $branchesUrl, #[MapFrom('collaborators_url')]
    public string|null $collaboratorsUrl, #[MapFrom('comments_url')]
    public string|null $commentsUrl, #[MapFrom('commits_url')]
    public string|null $commitsUrl, #[MapFrom('compare_url')]
    public string|null $compareUrl, #[MapFrom('contents_url')]
    public string|null $contentsUrl, #[MapFrom('contributors_url')]
    public string|null $contributorsUrl, #[MapFrom('deployments_url')]
    public string|null $deploymentsUrl, #[MapFrom('downloads_url')]
    public string|null $downloadsUrl, #[MapFrom('events_url')]
    public string|null $eventsUrl, #[MapFrom('forks_url')]
    public string|null $forksUrl, #[MapFrom('git_commits_url')]
    public string|null $gitCommitsUrl, #[MapFrom('git_refs_url')]
    public string|null $gitRefsUrl, #[MapFrom('git_tags_url')]
    public string|null $gitTagsUrl, #[MapFrom('git_url')]
    public string|null $gitUrl, #[MapFrom('issue_comment_url')]
    public string|null $issueCommentUrl, #[MapFrom('issue_events_url')]
    public string|null $issueEventsUrl, #[MapFrom('issues_url')]
    public string|null $issuesUrl, #[MapFrom('keys_url')]
    public string|null $keysUrl, #[MapFrom('labels_url')]
    public string|null $labelsUrl, #[MapFrom('languages_url')]
    public string|null $languagesUrl, #[MapFrom('merges_url')]
    public string|null $mergesUrl, #[MapFrom('milestones_url')]
    public string|null $milestonesUrl, #[MapFrom('notifications_url')]
    public string|null $notificationsUrl, #[MapFrom('pulls_url')]
    public string|null $pullsUrl, #[MapFrom('releases_url')]
    public string|null $releasesUrl, #[MapFrom('ssh_url')]
    public string|null $sshUrl, #[MapFrom('stargazers_url')]
    public string|null $stargazersUrl, #[MapFrom('statuses_url')]
    public string|null $statusesUrl, #[MapFrom('subscribers_url')]
    public string|null $subscribersUrl, #[MapFrom('subscription_url')]
    public string|null $subscriptionUrl, #[MapFrom('tags_url')]
    public string|null $tagsUrl, #[MapFrom('teams_url')]
    public string|null $teamsUrl, #[MapFrom('trees_url')]
    public string|null $treesUrl, #[MapFrom('clone_url')]
    public string|null $cloneUrl, #[MapFrom('mirror_url')]
    public string|null $mirrorUrl, #[MapFrom('hooks_url')]
    public string|null $hooksUrl, #[MapFrom('svn_url')]
    public string|null $svnUrl, public string|null $homepage, public string|null $language, #[MapFrom('forks_count')]
    public int|null $forksCount, #[MapFrom('stargazers_count')]
    public int|null $stargazersCount, #[MapFrom('watchers_count')]
    public int|null $watchersCount, public int|null $size, #[MapFrom('default_branch')]
    public string|null $defaultBranch, #[MapFrom('open_issues_count')]
    public int|null $openIssuesCount, #[MapFrom('is_template')]
    public bool|null $isTemplate, public array|null $topics, #[MapFrom('has_issues')]
    public bool|null $hasIssues, #[MapFrom('has_projects')]
    public bool|null $hasProjects, #[MapFrom('has_wiki')]
    public bool|null $hasWiki, #[MapFrom('has_pages')]
    public bool|null $hasPages, #[MapFrom('has_downloads')]
    public bool|null $hasDownloads, public bool|null $archived, public bool|null $disabled, public string|null $visibility, #[MapFrom('pushed_at')]
    public string|null $pushedAt, #[MapFrom('created_at')]
    public string|null $createdAt, #[MapFrom('updated_at')]
    public string|null $updatedAt, public Schema\RepositoryWebhooks\TemplateRepository\Permissions|null $permissions, #[MapFrom('allow_rebase_merge')]
    public bool|null $allowRebaseMerge, #[MapFrom('temp_clone_token')]
    public string|null $tempCloneToken, #[MapFrom('allow_squash_merge')]
    public bool|null $allowSquashMerge, #[MapFrom('allow_auto_merge')]
    public bool|null $allowAutoMerge, #[MapFrom('delete_branch_on_merge')]
    public bool|null $deleteBranchOnMerge, #[MapFrom('allow_update_branch')]
    public bool|null $allowUpdateBranch, #[MapFrom('use_squash_pr_title_as_default')]
    public bool|null $useSquashPrTitleAsDefault, #[MapFrom('squash_merge_commit_title')]
    public string|null $squashMergeCommitTitle, #[MapFrom('squash_merge_commit_message')]
    public string|null $squashMergeCommitMessage, #[MapFrom('merge_commit_title')]
    public string|null $mergeCommitTitle, #[MapFrom('merge_commit_message')]
    public string|null $mergeCommitMessage, #[MapFrom('allow_merge_commit')]
    public bool|null $allowMergeCommit, #[MapFrom('subscribers_count')]
    public int|null $subscribersCount, #[MapFrom('network_count')]
    public int|null $networkCount,)
    {
    }
}
