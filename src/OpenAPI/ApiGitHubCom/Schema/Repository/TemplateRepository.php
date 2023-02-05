<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Repository;

final class TemplateRepository
{
    public const SCHEMA_JSON = '{"type":["object","null"],"properties":{"id":{"type":"integer"},"node_id":{"type":"string"},"name":{"type":"string"},"full_name":{"type":"string"},"owner":{"type":"object","properties":{"login":{"type":"string"},"id":{"type":"integer"},"node_id":{"type":"string"},"avatar_url":{"type":"string"},"gravatar_id":{"type":"string"},"url":{"type":"string"},"html_url":{"type":"string"},"followers_url":{"type":"string"},"following_url":{"type":"string"},"gists_url":{"type":"string"},"starred_url":{"type":"string"},"subscriptions_url":{"type":"string"},"organizations_url":{"type":"string"},"repos_url":{"type":"string"},"events_url":{"type":"string"},"received_events_url":{"type":"string"},"type":{"type":"string"},"site_admin":{"type":"boolean"}}},"private":{"type":"boolean"},"html_url":{"type":"string"},"description":{"type":"string"},"fork":{"type":"boolean"},"url":{"type":"string"},"archive_url":{"type":"string"},"assignees_url":{"type":"string"},"blobs_url":{"type":"string"},"branches_url":{"type":"string"},"collaborators_url":{"type":"string"},"comments_url":{"type":"string"},"commits_url":{"type":"string"},"compare_url":{"type":"string"},"contents_url":{"type":"string"},"contributors_url":{"type":"string"},"deployments_url":{"type":"string"},"downloads_url":{"type":"string"},"events_url":{"type":"string"},"forks_url":{"type":"string"},"git_commits_url":{"type":"string"},"git_refs_url":{"type":"string"},"git_tags_url":{"type":"string"},"git_url":{"type":"string"},"issue_comment_url":{"type":"string"},"issue_events_url":{"type":"string"},"issues_url":{"type":"string"},"keys_url":{"type":"string"},"labels_url":{"type":"string"},"languages_url":{"type":"string"},"merges_url":{"type":"string"},"milestones_url":{"type":"string"},"notifications_url":{"type":"string"},"pulls_url":{"type":"string"},"releases_url":{"type":"string"},"ssh_url":{"type":"string"},"stargazers_url":{"type":"string"},"statuses_url":{"type":"string"},"subscribers_url":{"type":"string"},"subscription_url":{"type":"string"},"tags_url":{"type":"string"},"teams_url":{"type":"string"},"trees_url":{"type":"string"},"clone_url":{"type":"string"},"mirror_url":{"type":"string"},"hooks_url":{"type":"string"},"svn_url":{"type":"string"},"homepage":{"type":"string"},"language":{"type":"string"},"forks_count":{"type":"integer"},"stargazers_count":{"type":"integer"},"watchers_count":{"type":"integer"},"size":{"type":"integer"},"default_branch":{"type":"string"},"open_issues_count":{"type":"integer"},"is_template":{"type":"boolean"},"topics":{"type":"array","items":{"type":"string"}},"has_issues":{"type":"boolean"},"has_projects":{"type":"boolean"},"has_wiki":{"type":"boolean"},"has_pages":{"type":"boolean"},"has_downloads":{"type":"boolean"},"archived":{"type":"boolean"},"disabled":{"type":"boolean"},"visibility":{"type":"string"},"pushed_at":{"type":"string"},"created_at":{"type":"string"},"updated_at":{"type":"string"},"permissions":{"type":"object","properties":{"admin":{"type":"boolean"},"maintain":{"type":"boolean"},"push":{"type":"boolean"},"triage":{"type":"boolean"},"pull":{"type":"boolean"}}},"allow_rebase_merge":{"type":"boolean"},"temp_clone_token":{"type":"string"},"allow_squash_merge":{"type":"boolean"},"allow_auto_merge":{"type":"boolean"},"delete_branch_on_merge":{"type":"boolean"},"allow_update_branch":{"type":"boolean"},"use_squash_pr_title_as_default":{"type":"boolean"},"squash_merge_commit_title":{"enum":["PR_TITLE","COMMIT_OR_PR_TITLE"],"type":"string","description":"The default value for a squash merge commit title:\\n\\n- `PR_TITLE` - default to the pull request\'s title.\\n- `COMMIT_OR_PR_TITLE` - default to the commit\'s title (if only one commit) or the pull request\'s title (when more than one commit)."},"squash_merge_commit_message":{"enum":["PR_BODY","COMMIT_MESSAGES","BLANK"],"type":"string","description":"The default value for a squash merge commit message:\\n\\n- `PR_BODY` - default to the pull request\'s body.\\n- `COMMIT_MESSAGES` - default to the branch\'s commit messages.\\n- `BLANK` - default to a blank commit message."},"merge_commit_title":{"enum":["PR_TITLE","MERGE_MESSAGE"],"type":"string","description":"The default value for a merge commit title.\\n\\n- `PR_TITLE` - default to the pull request\'s title.\\n- `MERGE_MESSAGE` - default to the classic title for a merge message (e.g., Merge pull request #123 from branch-name)."},"merge_commit_message":{"enum":["PR_BODY","PR_TITLE","BLANK"],"type":"string","description":"The default value for a merge commit message.\\n\\n- `PR_TITLE` - default to the pull request\'s title.\\n- `PR_BODY` - default to the pull request\'s body.\\n- `BLANK` - default to a blank commit message."},"allow_merge_commit":{"type":"boolean"},"subscribers_count":{"type":"integer"},"network_count":{"type":"integer"}}}';
    public const SCHEMA_TITLE = 'Repository\\TemplateRepository';
    public const SCHEMA_DESCRIPTION = '';
    public readonly int $id;
    public readonly string $node_id;
    public readonly string $name;
    public readonly string $full_name;
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TemplateRepository\Owner $owner;
    public readonly bool $private;
    public readonly string $html_url;
    public readonly string $description;
    public readonly bool $fork;
    public readonly string $url;
    public readonly string $archive_url;
    public readonly string $assignees_url;
    public readonly string $blobs_url;
    public readonly string $branches_url;
    public readonly string $collaborators_url;
    public readonly string $comments_url;
    public readonly string $commits_url;
    public readonly string $compare_url;
    public readonly string $contents_url;
    public readonly string $contributors_url;
    public readonly string $deployments_url;
    public readonly string $downloads_url;
    public readonly string $events_url;
    public readonly string $forks_url;
    public readonly string $git_commits_url;
    public readonly string $git_refs_url;
    public readonly string $git_tags_url;
    public readonly string $git_url;
    public readonly string $issue_comment_url;
    public readonly string $issue_events_url;
    public readonly string $issues_url;
    public readonly string $keys_url;
    public readonly string $labels_url;
    public readonly string $languages_url;
    public readonly string $merges_url;
    public readonly string $milestones_url;
    public readonly string $notifications_url;
    public readonly string $pulls_url;
    public readonly string $releases_url;
    public readonly string $ssh_url;
    public readonly string $stargazers_url;
    public readonly string $statuses_url;
    public readonly string $subscribers_url;
    public readonly string $subscription_url;
    public readonly string $tags_url;
    public readonly string $teams_url;
    public readonly string $trees_url;
    public readonly string $clone_url;
    public readonly string $mirror_url;
    public readonly string $hooks_url;
    public readonly string $svn_url;
    public readonly string $homepage;
    public readonly string $language;
    public readonly int $forks_count;
    public readonly int $stargazers_count;
    public readonly int $watchers_count;
    public readonly int $size;
    public readonly string $default_branch;
    public readonly int $open_issues_count;
    public readonly bool $is_template;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TemplateRepository\Topics>
     */
    public readonly array $topics;
    public readonly bool $has_issues;
    public readonly bool $has_projects;
    public readonly bool $has_wiki;
    public readonly bool $has_pages;
    public readonly bool $has_downloads;
    public readonly bool $archived;
    public readonly bool $disabled;
    public readonly string $visibility;
    public readonly string $pushed_at;
    public readonly string $created_at;
    public readonly string $updated_at;
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TemplateRepository\Permissions $permissions;
    public readonly bool $allow_rebase_merge;
    public readonly string $temp_clone_token;
    public readonly bool $allow_squash_merge;
    public readonly bool $allow_auto_merge;
    public readonly bool $delete_branch_on_merge;
    public readonly bool $allow_update_branch;
    public readonly bool $use_squash_pr_title_as_default;
    /**
    * The default value for a squash merge commit title:
    
    - `PR_TITLE` - default to the pull request's title.
    - `COMMIT_OR_PR_TITLE` - default to the commit's title (if only one commit) or the pull request's title (when more than one commit).
    */
    public readonly string $squash_merge_commit_title;
    /**
    * The default value for a squash merge commit message:
    
    - `PR_BODY` - default to the pull request's body.
    - `COMMIT_MESSAGES` - default to the branch's commit messages.
    - `BLANK` - default to a blank commit message.
    */
    public readonly string $squash_merge_commit_message;
    /**
    * The default value for a merge commit title.
    
    - `PR_TITLE` - default to the pull request's title.
    - `MERGE_MESSAGE` - default to the classic title for a merge message (e.g., Merge pull request #123 from branch-name).
    */
    public readonly string $merge_commit_title;
    /**
    * The default value for a merge commit message.
    
    - `PR_TITLE` - default to the pull request's title.
    - `PR_BODY` - default to the pull request's body.
    - `BLANK` - default to a blank commit message.
    */
    public readonly string $merge_commit_message;
    public readonly bool $allow_merge_commit;
    public readonly int $subscribers_count;
    public readonly int $network_count;
    /**
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TemplateRepository\Topics> $topics
     */
    public function __construct(int $id, string $node_id, string $name, string $full_name, object $owner, bool $private, string $html_url, string $description, bool $fork, string $url, string $archive_url, string $assignees_url, string $blobs_url, string $branches_url, string $collaborators_url, string $comments_url, string $commits_url, string $compare_url, string $contents_url, string $contributors_url, string $deployments_url, string $downloads_url, string $events_url, string $forks_url, string $git_commits_url, string $git_refs_url, string $git_tags_url, string $git_url, string $issue_comment_url, string $issue_events_url, string $issues_url, string $keys_url, string $labels_url, string $languages_url, string $merges_url, string $milestones_url, string $notifications_url, string $pulls_url, string $releases_url, string $ssh_url, string $stargazers_url, string $statuses_url, string $subscribers_url, string $subscription_url, string $tags_url, string $teams_url, string $trees_url, string $clone_url, string $mirror_url, string $hooks_url, string $svn_url, string $homepage, string $language, int $forks_count, int $stargazers_count, int $watchers_count, int $size, string $default_branch, int $open_issues_count, bool $is_template, array $topics, bool $has_issues, bool $has_projects, bool $has_wiki, bool $has_pages, bool $has_downloads, bool $archived, bool $disabled, string $visibility, string $pushed_at, string $created_at, string $updated_at, object $permissions, bool $allow_rebase_merge, string $temp_clone_token, bool $allow_squash_merge, bool $allow_auto_merge, bool $delete_branch_on_merge, bool $allow_update_branch, bool $use_squash_pr_title_as_default, string $squash_merge_commit_title, string $squash_merge_commit_message, string $merge_commit_title, string $merge_commit_message, bool $allow_merge_commit, int $subscribers_count, int $network_count)
    {
        $this->id = $id;
        $this->node_id = $node_id;
        $this->name = $name;
        $this->full_name = $full_name;
        $this->owner = $owner;
        $this->private = $private;
        $this->html_url = $html_url;
        $this->description = $description;
        $this->fork = $fork;
        $this->url = $url;
        $this->archive_url = $archive_url;
        $this->assignees_url = $assignees_url;
        $this->blobs_url = $blobs_url;
        $this->branches_url = $branches_url;
        $this->collaborators_url = $collaborators_url;
        $this->comments_url = $comments_url;
        $this->commits_url = $commits_url;
        $this->compare_url = $compare_url;
        $this->contents_url = $contents_url;
        $this->contributors_url = $contributors_url;
        $this->deployments_url = $deployments_url;
        $this->downloads_url = $downloads_url;
        $this->events_url = $events_url;
        $this->forks_url = $forks_url;
        $this->git_commits_url = $git_commits_url;
        $this->git_refs_url = $git_refs_url;
        $this->git_tags_url = $git_tags_url;
        $this->git_url = $git_url;
        $this->issue_comment_url = $issue_comment_url;
        $this->issue_events_url = $issue_events_url;
        $this->issues_url = $issues_url;
        $this->keys_url = $keys_url;
        $this->labels_url = $labels_url;
        $this->languages_url = $languages_url;
        $this->merges_url = $merges_url;
        $this->milestones_url = $milestones_url;
        $this->notifications_url = $notifications_url;
        $this->pulls_url = $pulls_url;
        $this->releases_url = $releases_url;
        $this->ssh_url = $ssh_url;
        $this->stargazers_url = $stargazers_url;
        $this->statuses_url = $statuses_url;
        $this->subscribers_url = $subscribers_url;
        $this->subscription_url = $subscription_url;
        $this->tags_url = $tags_url;
        $this->teams_url = $teams_url;
        $this->trees_url = $trees_url;
        $this->clone_url = $clone_url;
        $this->mirror_url = $mirror_url;
        $this->hooks_url = $hooks_url;
        $this->svn_url = $svn_url;
        $this->homepage = $homepage;
        $this->language = $language;
        $this->forks_count = $forks_count;
        $this->stargazers_count = $stargazers_count;
        $this->watchers_count = $watchers_count;
        $this->size = $size;
        $this->default_branch = $default_branch;
        $this->open_issues_count = $open_issues_count;
        $this->is_template = $is_template;
        $this->topics = $topics;
        $this->has_issues = $has_issues;
        $this->has_projects = $has_projects;
        $this->has_wiki = $has_wiki;
        $this->has_pages = $has_pages;
        $this->has_downloads = $has_downloads;
        $this->archived = $archived;
        $this->disabled = $disabled;
        $this->visibility = $visibility;
        $this->pushed_at = $pushed_at;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
        $this->permissions = $permissions;
        $this->allow_rebase_merge = $allow_rebase_merge;
        $this->temp_clone_token = $temp_clone_token;
        $this->allow_squash_merge = $allow_squash_merge;
        $this->allow_auto_merge = $allow_auto_merge;
        $this->delete_branch_on_merge = $delete_branch_on_merge;
        $this->allow_update_branch = $allow_update_branch;
        $this->use_squash_pr_title_as_default = $use_squash_pr_title_as_default;
        $this->squash_merge_commit_title = $squash_merge_commit_title;
        $this->squash_merge_commit_message = $squash_merge_commit_message;
        $this->merge_commit_title = $merge_commit_title;
        $this->merge_commit_message = $merge_commit_message;
        $this->allow_merge_commit = $allow_merge_commit;
        $this->subscribers_count = $subscribers_count;
        $this->network_count = $network_count;
    }
}
