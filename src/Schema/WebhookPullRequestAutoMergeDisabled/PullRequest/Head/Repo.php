<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookPullRequestAutoMergeDisabled\PullRequest\Head;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Repo
{
    public const SCHEMA_JSON = '{"title":"Repository","required":["id","node_id","name","full_name","private","owner","html_url","description","fork","url","forks_url","keys_url","collaborators_url","teams_url","hooks_url","issue_events_url","events_url","assignees_url","branches_url","tags_url","blobs_url","git_tags_url","git_refs_url","trees_url","statuses_url","languages_url","stargazers_url","contributors_url","subscribers_url","subscription_url","commits_url","git_commits_url","comments_url","issue_comment_url","contents_url","compare_url","merges_url","archive_url","downloads_url","issues_url","pulls_url","milestones_url","notifications_url","labels_url","releases_url","deployments_url","created_at","updated_at","pushed_at","git_url","ssh_url","clone_url","svn_url","homepage","size","stargazers_count","watchers_count","language","has_issues","has_projects","has_downloads","has_wiki","has_pages","has_discussions","forks_count","mirror_url","archived","open_issues_count","license","forks","open_issues","watchers","default_branch","topics","visibility"],"type":"object","properties":{"allow_auto_merge":{"type":"boolean","description":"Whether to allow auto-merge for pull requests.","default":false},"allow_forking":{"type":"boolean","description":"Whether to allow private forks"},"allow_merge_commit":{"type":"boolean","description":"Whether to allow merge commits for pull requests.","default":true},"allow_rebase_merge":{"type":"boolean","description":"Whether to allow rebase merges for pull requests.","default":true},"allow_squash_merge":{"type":"boolean","description":"Whether to allow squash merges for pull requests.","default":true},"allow_update_branch":{"type":"boolean"},"archive_url":{"type":"string","format":"uri-template"},"archived":{"type":"boolean","description":"Whether the repository is archived.","default":false},"assignees_url":{"type":"string","format":"uri-template"},"blobs_url":{"type":"string","format":"uri-template"},"branches_url":{"type":"string","format":"uri-template"},"clone_url":{"type":"string","format":"uri"},"collaborators_url":{"type":"string","format":"uri-template"},"comments_url":{"type":"string","format":"uri-template"},"commits_url":{"type":"string","format":"uri-template"},"compare_url":{"type":"string","format":"uri-template"},"contents_url":{"type":"string","format":"uri-template"},"contributors_url":{"type":"string","format":"uri"},"created_at":{"oneOf":[{"type":"integer"},{"type":"string","format":"date-time"}]},"default_branch":{"type":"string","description":"The default branch of the repository."},"delete_branch_on_merge":{"type":"boolean","description":"Whether to delete head branches when pull requests are merged","default":false},"deployments_url":{"type":"string","format":"uri"},"description":{"type":["string","null"]},"disabled":{"type":"boolean","description":"Returns whether or not this repository is disabled."},"downloads_url":{"type":"string","format":"uri"},"events_url":{"type":"string","format":"uri"},"fork":{"type":"boolean"},"forks":{"type":"integer"},"forks_count":{"type":"integer"},"forks_url":{"type":"string","format":"uri"},"full_name":{"type":"string"},"git_commits_url":{"type":"string","format":"uri-template"},"git_refs_url":{"type":"string","format":"uri-template"},"git_tags_url":{"type":"string","format":"uri-template"},"git_url":{"type":"string","format":"uri"},"has_downloads":{"type":"boolean","description":"Whether downloads are enabled.","default":true},"has_issues":{"type":"boolean","description":"Whether issues are enabled.","default":true},"has_pages":{"type":"boolean"},"has_projects":{"type":"boolean","description":"Whether projects are enabled.","default":true},"has_wiki":{"type":"boolean","description":"Whether the wiki is enabled.","default":true},"has_discussions":{"type":"boolean","description":"Whether discussions are enabled.","default":false},"homepage":{"type":["string","null"]},"hooks_url":{"type":"string","format":"uri"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer","description":"Unique identifier of the repository"},"is_template":{"type":"boolean"},"issue_comment_url":{"type":"string","format":"uri-template"},"issue_events_url":{"type":"string","format":"uri-template"},"issues_url":{"type":"string","format":"uri-template"},"keys_url":{"type":"string","format":"uri-template"},"labels_url":{"type":"string","format":"uri-template"},"language":{"type":["string","null"]},"languages_url":{"type":"string","format":"uri"},"license":{"title":"License","required":["key","name","spdx_id","url","node_id"],"type":["object","null"],"properties":{"key":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"spdx_id":{"type":"string"},"url":{"type":["string","null"],"format":"uri"}}},"master_branch":{"type":"string"},"merge_commit_message":{"enum":["PR_BODY","PR_TITLE","BLANK"],"type":"string","description":"The default value for a merge commit message.\\n\\n- `PR_TITLE` - default to the pull request\'s title.\\n- `PR_BODY` - default to the pull request\'s body.\\n- `BLANK` - default to a blank commit message."},"merge_commit_title":{"enum":["PR_TITLE","MERGE_MESSAGE"],"type":"string","description":"The default value for a merge commit title.\\n\\n- `PR_TITLE` - default to the pull request\'s title.\\n- `MERGE_MESSAGE` - default to the classic title for a merge message (e.g., Merge pull request #123 from branch-name)."},"merges_url":{"type":"string","format":"uri"},"milestones_url":{"type":"string","format":"uri-template"},"mirror_url":{"type":["string","null"],"format":"uri"},"name":{"type":"string","description":"The name of the repository."},"node_id":{"type":"string"},"notifications_url":{"type":"string","format":"uri-template"},"open_issues":{"type":"integer"},"open_issues_count":{"type":"integer"},"organization":{"type":"string"},"owner":{"title":"User","required":["login","id"],"type":["object","null"],"properties":{"avatar_url":{"type":"string","format":"uri"},"deleted":{"type":"boolean"},"email":{"type":["string","null"]},"events_url":{"type":"string","format":"uri-template"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"gravatar_id":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"login":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization"],"type":"string"},"url":{"type":"string","format":"uri"}}},"permissions":{"required":["pull","push","admin"],"type":"object","properties":{"admin":{"type":"boolean"},"maintain":{"type":"boolean"},"pull":{"type":"boolean"},"push":{"type":"boolean"},"triage":{"type":"boolean"}}},"private":{"type":"boolean","description":"Whether the repository is private or public."},"public":{"type":"boolean"},"pulls_url":{"type":"string","format":"uri-template"},"pushed_at":{"type":["null","integer","string"],"oneOf":[{"type":"integer"},{"type":"string","format":"date-time"}]},"releases_url":{"type":"string","format":"uri-template"},"role_name":{"type":["string","null"]},"size":{"type":"integer"},"squash_merge_commit_message":{"enum":["PR_BODY","COMMIT_MESSAGES","BLANK"],"type":"string","description":"The default value for a squash merge commit message:\\n\\n- `PR_BODY` - default to the pull request\'s body.\\n- `COMMIT_MESSAGES` - default to the branch\'s commit messages.\\n- `BLANK` - default to a blank commit message."},"squash_merge_commit_title":{"enum":["PR_TITLE","COMMIT_OR_PR_TITLE"],"type":"string","description":"The default value for a squash merge commit title:\\n\\n- `PR_TITLE` - default to the pull request\'s title.\\n- `COMMIT_OR_PR_TITLE` - default to the commit\'s title (if only one commit) or the pull request\'s title (when more than one commit)."},"ssh_url":{"type":"string"},"stargazers":{"type":"integer"},"stargazers_count":{"type":"integer"},"stargazers_url":{"type":"string","format":"uri"},"statuses_url":{"type":"string","format":"uri-template"},"subscribers_url":{"type":"string","format":"uri"},"subscription_url":{"type":"string","format":"uri"},"svn_url":{"type":"string","format":"uri"},"tags_url":{"type":"string","format":"uri"},"teams_url":{"type":"string","format":"uri"},"topics":{"type":"array","items":{"type":"string"}},"trees_url":{"type":"string","format":"uri-template"},"updated_at":{"type":"string","format":"date-time"},"url":{"type":"string","format":"uri"},"use_squash_pr_title_as_default":{"type":"boolean","description":"Whether a squash merge commit can use the pull request title as default. **This property has been deprecated. Please use `squash_merge_commit_title` instead.","default":false},"visibility":{"enum":["public","private","internal"],"type":"string"},"watchers":{"type":"integer"},"watchers_count":{"type":"integer"},"web_commit_signoff_required":{"type":"boolean","description":"Whether to require contributors to sign off on web-based commits"}},"description":"A git repository"}';
    public const SCHEMA_TITLE = 'Repository';
    public const SCHEMA_DESCRIPTION = 'A git repository';
    public const SCHEMA_EXAMPLE_DATA = '{"allow_auto_merge":false,"allow_forking":false,"allow_merge_commit":false,"allow_rebase_merge":false,"allow_squash_merge":false,"allow_update_branch":false,"archive_url":"generated_archive_url_uri-template","archived":false,"assignees_url":"generated_assignees_url_uri-template","blobs_url":"generated_blobs_url_uri-template","branches_url":"generated_branches_url_uri-template","clone_url":"https:\\/\\/example.com\\/","collaborators_url":"generated_collaborators_url_uri-template","comments_url":"generated_comments_url_uri-template","commits_url":"generated_commits_url_uri-template","compare_url":"generated_compare_url_uri-template","contents_url":"generated_contents_url_uri-template","contributors_url":"https:\\/\\/example.com\\/","created_at":13,"default_branch":"generated_default_branch_null","delete_branch_on_merge":false,"deployments_url":"https:\\/\\/example.com\\/","description":"generated_description_null","disabled":false,"downloads_url":"https:\\/\\/example.com\\/","events_url":"https:\\/\\/example.com\\/","fork":false,"forks":13,"forks_count":13,"forks_url":"https:\\/\\/example.com\\/","full_name":"generated_full_name_null","git_commits_url":"generated_git_commits_url_uri-template","git_refs_url":"generated_git_refs_url_uri-template","git_tags_url":"generated_git_tags_url_uri-template","git_url":"https:\\/\\/example.com\\/","has_downloads":false,"has_issues":false,"has_pages":false,"has_projects":false,"has_wiki":false,"has_discussions":false,"homepage":"generated_homepage_null","hooks_url":"https:\\/\\/example.com\\/","html_url":"https:\\/\\/example.com\\/","id":13,"is_template":false,"issue_comment_url":"generated_issue_comment_url_uri-template","issue_events_url":"generated_issue_events_url_uri-template","issues_url":"generated_issues_url_uri-template","keys_url":"generated_keys_url_uri-template","labels_url":"generated_labels_url_uri-template","language":"generated_language_null","languages_url":"https:\\/\\/example.com\\/","license":{"key":"generated_key_null","name":"generated_name_null","node_id":"generated_node_id_null","spdx_id":"generated_spdx_id_null","url":"https:\\/\\/example.com\\/"},"master_branch":"generated_master_branch_null","merge_commit_message":"PR_BODY","merge_commit_title":"PR_TITLE","merges_url":"https:\\/\\/example.com\\/","milestones_url":"generated_milestones_url_uri-template","mirror_url":"https:\\/\\/example.com\\/","name":"generated_name_null","node_id":"generated_node_id_null","notifications_url":"generated_notifications_url_uri-template","open_issues":13,"open_issues_count":13,"organization":"generated_organization_null","owner":{"avatar_url":"https:\\/\\/example.com\\/","deleted":false,"email":"generated_email_null","events_url":"generated_events_url_uri-template","followers_url":"https:\\/\\/example.com\\/","following_url":"generated_following_url_uri-template","gists_url":"generated_gists_url_uri-template","gravatar_id":"generated_gravatar_id_null","html_url":"https:\\/\\/example.com\\/","id":13,"login":"generated_login_null","name":"generated_name_null","node_id":"generated_node_id_null","organizations_url":"https:\\/\\/example.com\\/","received_events_url":"https:\\/\\/example.com\\/","repos_url":"https:\\/\\/example.com\\/","site_admin":false,"starred_url":"generated_starred_url_uri-template","subscriptions_url":"https:\\/\\/example.com\\/","type":"Bot","url":"https:\\/\\/example.com\\/"},"permissions":{"admin":false,"maintain":false,"pull":false,"push":false,"triage":false},"private":false,"public":false,"pulls_url":"generated_pulls_url_uri-template","pushed_at":13,"releases_url":"generated_releases_url_uri-template","role_name":"generated_role_name_null","size":13,"squash_merge_commit_message":"PR_BODY","squash_merge_commit_title":"PR_TITLE","ssh_url":"generated_ssh_url_null","stargazers":13,"stargazers_count":13,"stargazers_url":"https:\\/\\/example.com\\/","statuses_url":"generated_statuses_url_uri-template","subscribers_url":"https:\\/\\/example.com\\/","subscription_url":"https:\\/\\/example.com\\/","svn_url":"https:\\/\\/example.com\\/","tags_url":"https:\\/\\/example.com\\/","teams_url":"https:\\/\\/example.com\\/","topics":["generated_topics_null"],"trees_url":"generated_trees_url_uri-template","updated_at":"1970-01-01T00:00:00+00:00","url":"https:\\/\\/example.com\\/","use_squash_pr_title_as_default":false,"visibility":"public","watchers":13,"watchers_count":13,"web_commit_signoff_required":false}';
    /**
    * allowAutoMerge: Whether to allow auto-merge for pull requests.
    * allowForking: Whether to allow private forks
    * allowMergeCommit: Whether to allow merge commits for pull requests.
    * allowRebaseMerge: Whether to allow rebase merges for pull requests.
    * allowSquashMerge: Whether to allow squash merges for pull requests.
    * archived: Whether the repository is archived.
    * defaultBranch: The default branch of the repository.
    * deleteBranchOnMerge: Whether to delete head branches when pull requests are merged
    * disabled: Returns whether or not this repository is disabled.
    * hasDownloads: Whether downloads are enabled.
    * hasIssues: Whether issues are enabled.
    * hasProjects: Whether projects are enabled.
    * hasWiki: Whether the wiki is enabled.
    * hasDiscussions: Whether discussions are enabled.
    * id: Unique identifier of the repository
    * mergeCommitMessage: The default value for a merge commit message.
    
    - `PR_TITLE` - default to the pull request's title.
    - `PR_BODY` - default to the pull request's body.
    - `BLANK` - default to a blank commit message.
    * mergeCommitTitle: The default value for a merge commit title.
    
    - `PR_TITLE` - default to the pull request's title.
    - `MERGE_MESSAGE` - default to the classic title for a merge message (e.g., Merge pull request #123 from branch-name).
    * name: The name of the repository.
    * private: Whether the repository is private or public.
    * squashMergeCommitMessage: The default value for a squash merge commit message:
    
    - `PR_BODY` - default to the pull request's body.
    - `COMMIT_MESSAGES` - default to the branch's commit messages.
    - `BLANK` - default to a blank commit message.
    * squashMergeCommitTitle: The default value for a squash merge commit title:
    
    - `PR_TITLE` - default to the pull request's title.
    - `COMMIT_OR_PR_TITLE` - default to the commit's title (if only one commit) or the pull request's title (when more than one commit).
    * @param array<string> $topics
    * useSquashPrTitleAsDefault: Whether a squash merge commit can use the pull request title as default. **This property has been deprecated. Please use `squash_merge_commit_title` instead.
    * webCommitSignoffRequired: Whether to require contributors to sign off on web-based commits
    */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('allow_auto_merge')] public ?bool $allowAutoMerge, #[\EventSauce\ObjectHydrator\MapFrom('allow_forking')] public ?bool $allowForking, #[\EventSauce\ObjectHydrator\MapFrom('allow_merge_commit')] public ?bool $allowMergeCommit, #[\EventSauce\ObjectHydrator\MapFrom('allow_rebase_merge')] public ?bool $allowRebaseMerge, #[\EventSauce\ObjectHydrator\MapFrom('allow_squash_merge')] public ?bool $allowSquashMerge, #[\EventSauce\ObjectHydrator\MapFrom('allow_update_branch')] public ?bool $allowUpdateBranch, #[\EventSauce\ObjectHydrator\MapFrom('archive_url')] public string $archiveUrl, public bool $archived, #[\EventSauce\ObjectHydrator\MapFrom('assignees_url')] public string $assigneesUrl, #[\EventSauce\ObjectHydrator\MapFrom('blobs_url')] public string $blobsUrl, #[\EventSauce\ObjectHydrator\MapFrom('branches_url')] public string $branchesUrl, #[\EventSauce\ObjectHydrator\MapFrom('clone_url')] public string $cloneUrl, #[\EventSauce\ObjectHydrator\MapFrom('collaborators_url')] public string $collaboratorsUrl, #[\EventSauce\ObjectHydrator\MapFrom('comments_url')] public string $commentsUrl, #[\EventSauce\ObjectHydrator\MapFrom('commits_url')] public string $commitsUrl, #[\EventSauce\ObjectHydrator\MapFrom('compare_url')] public string $compareUrl, #[\EventSauce\ObjectHydrator\MapFrom('contents_url')] public string $contentsUrl, #[\EventSauce\ObjectHydrator\MapFrom('contributors_url')] public string $contributorsUrl, #[\EventSauce\ObjectHydrator\MapFrom('created_at')] public int $createdAt, #[\EventSauce\ObjectHydrator\MapFrom('default_branch')] public string $defaultBranch, #[\EventSauce\ObjectHydrator\MapFrom('delete_branch_on_merge')] public ?bool $deleteBranchOnMerge, #[\EventSauce\ObjectHydrator\MapFrom('deployments_url')] public string $deploymentsUrl, public ?string $description, public ?bool $disabled, #[\EventSauce\ObjectHydrator\MapFrom('downloads_url')] public string $downloadsUrl, #[\EventSauce\ObjectHydrator\MapFrom('events_url')] public string $eventsUrl, public bool $fork, public int $forks, #[\EventSauce\ObjectHydrator\MapFrom('forks_count')] public int $forksCount, #[\EventSauce\ObjectHydrator\MapFrom('forks_url')] public string $forksUrl, #[\EventSauce\ObjectHydrator\MapFrom('full_name')] public string $fullName, #[\EventSauce\ObjectHydrator\MapFrom('git_commits_url')] public string $gitCommitsUrl, #[\EventSauce\ObjectHydrator\MapFrom('git_refs_url')] public string $gitRefsUrl, #[\EventSauce\ObjectHydrator\MapFrom('git_tags_url')] public string $gitTagsUrl, #[\EventSauce\ObjectHydrator\MapFrom('git_url')] public string $gitUrl, #[\EventSauce\ObjectHydrator\MapFrom('has_downloads')] public bool $hasDownloads, #[\EventSauce\ObjectHydrator\MapFrom('has_issues')] public bool $hasIssues, #[\EventSauce\ObjectHydrator\MapFrom('has_pages')] public bool $hasPages, #[\EventSauce\ObjectHydrator\MapFrom('has_projects')] public bool $hasProjects, #[\EventSauce\ObjectHydrator\MapFrom('has_wiki')] public bool $hasWiki, #[\EventSauce\ObjectHydrator\MapFrom('has_discussions')] public bool $hasDiscussions, public ?string $homepage, #[\EventSauce\ObjectHydrator\MapFrom('hooks_url')] public string $hooksUrl, #[\EventSauce\ObjectHydrator\MapFrom('html_url')] public string $htmlUrl, public int $id, #[\EventSauce\ObjectHydrator\MapFrom('is_template')] public ?bool $isTemplate, #[\EventSauce\ObjectHydrator\MapFrom('issue_comment_url')] public string $issueCommentUrl, #[\EventSauce\ObjectHydrator\MapFrom('issue_events_url')] public string $issueEventsUrl, #[\EventSauce\ObjectHydrator\MapFrom('issues_url')] public string $issuesUrl, #[\EventSauce\ObjectHydrator\MapFrom('keys_url')] public string $keysUrl, #[\EventSauce\ObjectHydrator\MapFrom('labels_url')] public string $labelsUrl, public ?string $language, #[\EventSauce\ObjectHydrator\MapFrom('languages_url')] public string $languagesUrl, public ?Schema\WebhookPullRequestAutoMergeDisabled\PullRequest\Head\Repo\License $license, #[\EventSauce\ObjectHydrator\MapFrom('master_branch')] public ?string $masterBranch, #[\EventSauce\ObjectHydrator\MapFrom('merge_commit_message')] public ?string $mergeCommitMessage, #[\EventSauce\ObjectHydrator\MapFrom('merge_commit_title')] public ?string $mergeCommitTitle, #[\EventSauce\ObjectHydrator\MapFrom('merges_url')] public string $mergesUrl, #[\EventSauce\ObjectHydrator\MapFrom('milestones_url')] public string $milestonesUrl, #[\EventSauce\ObjectHydrator\MapFrom('mirror_url')] public ?string $mirrorUrl, public string $name, #[\EventSauce\ObjectHydrator\MapFrom('node_id')] public string $nodeId, #[\EventSauce\ObjectHydrator\MapFrom('notifications_url')] public string $notificationsUrl, #[\EventSauce\ObjectHydrator\MapFrom('open_issues')] public int $openIssues, #[\EventSauce\ObjectHydrator\MapFrom('open_issues_count')] public int $openIssuesCount, public ?string $organization, public ?Schema\WebhookPullRequestAutoMergeDisabled\PullRequest\Head\Repo\Owner $owner, public ?Schema\WebhookPullRequestAutoMergeDisabled\PullRequest\Head\Repo\Permissions $permissions, public bool $private, public ?bool $public, #[\EventSauce\ObjectHydrator\MapFrom('pulls_url')] public string $pullsUrl, #[\EventSauce\ObjectHydrator\MapFrom('pushed_at')] public int $pushedAt, #[\EventSauce\ObjectHydrator\MapFrom('releases_url')] public string $releasesUrl, #[\EventSauce\ObjectHydrator\MapFrom('role_name')] public ?string $roleName, public int $size, #[\EventSauce\ObjectHydrator\MapFrom('squash_merge_commit_message')] public ?string $squashMergeCommitMessage, #[\EventSauce\ObjectHydrator\MapFrom('squash_merge_commit_title')] public ?string $squashMergeCommitTitle, #[\EventSauce\ObjectHydrator\MapFrom('ssh_url')] public string $sshUrl, public ?int $stargazers, #[\EventSauce\ObjectHydrator\MapFrom('stargazers_count')] public int $stargazersCount, #[\EventSauce\ObjectHydrator\MapFrom('stargazers_url')] public string $stargazersUrl, #[\EventSauce\ObjectHydrator\MapFrom('statuses_url')] public string $statusesUrl, #[\EventSauce\ObjectHydrator\MapFrom('subscribers_url')] public string $subscribersUrl, #[\EventSauce\ObjectHydrator\MapFrom('subscription_url')] public string $subscriptionUrl, #[\EventSauce\ObjectHydrator\MapFrom('svn_url')] public string $svnUrl, #[\EventSauce\ObjectHydrator\MapFrom('tags_url')] public string $tagsUrl, #[\EventSauce\ObjectHydrator\MapFrom('teams_url')] public string $teamsUrl, public array $topics, #[\EventSauce\ObjectHydrator\MapFrom('trees_url')] public string $treesUrl, #[\EventSauce\ObjectHydrator\MapFrom('updated_at')] public string $updatedAt, public string $url, #[\EventSauce\ObjectHydrator\MapFrom('use_squash_pr_title_as_default')] public ?bool $useSquashPrTitleAsDefault, public string $visibility, public int $watchers, #[\EventSauce\ObjectHydrator\MapFrom('watchers_count')] public int $watchersCount, #[\EventSauce\ObjectHydrator\MapFrom('web_commit_signoff_required')] public ?bool $webCommitSignoffRequired)
    {
    }
}
