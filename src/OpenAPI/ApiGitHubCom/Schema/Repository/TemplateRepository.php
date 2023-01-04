<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Repository;

final class TemplateRepository
{
    public const SCHEMA_JSON = '{"type":["object","null"],"properties":{"id":{"type":"integer"},"node_id":{"type":"string"},"name":{"type":"string"},"full_name":{"type":"string"},"owner":{"type":"object","properties":{"login":{"type":"string"},"id":{"type":"integer"},"node_id":{"type":"string"},"avatar_url":{"type":"string"},"gravatar_id":{"type":"string"},"url":{"type":"string"},"html_url":{"type":"string"},"followers_url":{"type":"string"},"following_url":{"type":"string"},"gists_url":{"type":"string"},"starred_url":{"type":"string"},"subscriptions_url":{"type":"string"},"organizations_url":{"type":"string"},"repos_url":{"type":"string"},"events_url":{"type":"string"},"received_events_url":{"type":"string"},"type":{"type":"string"},"site_admin":{"type":"boolean"}}},"private":{"type":"boolean"},"html_url":{"type":"string"},"description":{"type":"string"},"fork":{"type":"boolean"},"url":{"type":"string"},"archive_url":{"type":"string"},"assignees_url":{"type":"string"},"blobs_url":{"type":"string"},"branches_url":{"type":"string"},"collaborators_url":{"type":"string"},"comments_url":{"type":"string"},"commits_url":{"type":"string"},"compare_url":{"type":"string"},"contents_url":{"type":"string"},"contributors_url":{"type":"string"},"deployments_url":{"type":"string"},"downloads_url":{"type":"string"},"events_url":{"type":"string"},"forks_url":{"type":"string"},"git_commits_url":{"type":"string"},"git_refs_url":{"type":"string"},"git_tags_url":{"type":"string"},"git_url":{"type":"string"},"issue_comment_url":{"type":"string"},"issue_events_url":{"type":"string"},"issues_url":{"type":"string"},"keys_url":{"type":"string"},"labels_url":{"type":"string"},"languages_url":{"type":"string"},"merges_url":{"type":"string"},"milestones_url":{"type":"string"},"notifications_url":{"type":"string"},"pulls_url":{"type":"string"},"releases_url":{"type":"string"},"ssh_url":{"type":"string"},"stargazers_url":{"type":"string"},"statuses_url":{"type":"string"},"subscribers_url":{"type":"string"},"subscription_url":{"type":"string"},"tags_url":{"type":"string"},"teams_url":{"type":"string"},"trees_url":{"type":"string"},"clone_url":{"type":"string"},"mirror_url":{"type":"string"},"hooks_url":{"type":"string"},"svn_url":{"type":"string"},"homepage":{"type":"string"},"language":{"type":"string"},"forks_count":{"type":"integer"},"stargazers_count":{"type":"integer"},"watchers_count":{"type":"integer"},"size":{"type":"integer"},"default_branch":{"type":"string"},"open_issues_count":{"type":"integer"},"is_template":{"type":"boolean"},"topics":{"type":"array","items":{"type":"string"}},"has_issues":{"type":"boolean"},"has_projects":{"type":"boolean"},"has_wiki":{"type":"boolean"},"has_pages":{"type":"boolean"},"has_downloads":{"type":"boolean"},"archived":{"type":"boolean"},"disabled":{"type":"boolean"},"visibility":{"type":"string"},"pushed_at":{"type":"string"},"created_at":{"type":"string"},"updated_at":{"type":"string"},"permissions":{"type":"object","properties":{"admin":{"type":"boolean"},"maintain":{"type":"boolean"},"push":{"type":"boolean"},"triage":{"type":"boolean"},"pull":{"type":"boolean"}}},"allow_rebase_merge":{"type":"boolean"},"temp_clone_token":{"type":"string"},"allow_squash_merge":{"type":"boolean"},"allow_auto_merge":{"type":"boolean"},"delete_branch_on_merge":{"type":"boolean"},"allow_update_branch":{"type":"boolean"},"use_squash_pr_title_as_default":{"type":"boolean"},"squash_merge_commit_title":{"enum":["PR_TITLE","COMMIT_OR_PR_TITLE"],"type":"string","description":"The default value for a squash merge commit title:\\n\\n- `PR_TITLE` - default to the pull request\'s title.\\n- `COMMIT_OR_PR_TITLE` - default to the commit\'s title (if only one commit) or the pull request\'s title (when more than one commit)."},"squash_merge_commit_message":{"enum":["PR_BODY","COMMIT_MESSAGES","BLANK"],"type":"string","description":"The default value for a squash merge commit message:\\n\\n- `PR_BODY` - default to the pull request\'s body.\\n- `COMMIT_MESSAGES` - default to the branch\'s commit messages.\\n- `BLANK` - default to a blank commit message."},"merge_commit_title":{"enum":["PR_TITLE","MERGE_MESSAGE"],"type":"string","description":"The default value for a merge commit title.\\n\\n- `PR_TITLE` - default to the pull request\'s title.\\n- `MERGE_MESSAGE` - default to the classic title for a merge message (e.g., Merge pull request #123 from branch-name)."},"merge_commit_message":{"enum":["PR_BODY","PR_TITLE","BLANK"],"type":"string","description":"The default value for a merge commit message.\\n\\n- `PR_TITLE` - default to the pull request\'s title.\\n- `PR_BODY` - default to the pull request\'s body.\\n- `BLANK` - default to a blank commit message."},"allow_merge_commit":{"type":"boolean"},"subscribers_count":{"type":"integer"},"network_count":{"type":"integer"}}}';
    public const SCHEMA_TITLE = 'Repository\\TemplateRepository';
    public const SCHEMA_DESCRIPTION = '';
    private int $id;
    private string $node_id;
    private string $name;
    private string $full_name;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TemplateRepository\Owner::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TemplateRepository\Owner $owner;
    private bool $private;
    private string $html_url;
    private string $description;
    private bool $fork;
    private string $url;
    private string $archive_url;
    private string $assignees_url;
    private string $blobs_url;
    private string $branches_url;
    private string $collaborators_url;
    private string $comments_url;
    private string $commits_url;
    private string $compare_url;
    private string $contents_url;
    private string $contributors_url;
    private string $deployments_url;
    private string $downloads_url;
    private string $events_url;
    private string $forks_url;
    private string $git_commits_url;
    private string $git_refs_url;
    private string $git_tags_url;
    private string $git_url;
    private string $issue_comment_url;
    private string $issue_events_url;
    private string $issues_url;
    private string $keys_url;
    private string $labels_url;
    private string $languages_url;
    private string $merges_url;
    private string $milestones_url;
    private string $notifications_url;
    private string $pulls_url;
    private string $releases_url;
    private string $ssh_url;
    private string $stargazers_url;
    private string $statuses_url;
    private string $subscribers_url;
    private string $subscription_url;
    private string $tags_url;
    private string $teams_url;
    private string $trees_url;
    private string $clone_url;
    private string $mirror_url;
    private string $hooks_url;
    private string $svn_url;
    private string $homepage;
    private string $language;
    private int $forks_count;
    private int $stargazers_count;
    private int $watchers_count;
    private int $size;
    private string $default_branch;
    private int $open_issues_count;
    private bool $is_template;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TemplateRepository\Topics>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TemplateRepository\Topics::class)
     */
    private array $topics = array();
    private bool $has_issues;
    private bool $has_projects;
    private bool $has_wiki;
    private bool $has_pages;
    private bool $has_downloads;
    private bool $archived;
    private bool $disabled;
    private string $visibility;
    private string $pushed_at;
    private string $created_at;
    private string $updated_at;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TemplateRepository\Permissions::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TemplateRepository\Permissions $permissions;
    private bool $allow_rebase_merge;
    private string $temp_clone_token;
    private bool $allow_squash_merge;
    private bool $allow_auto_merge;
    private bool $delete_branch_on_merge;
    private bool $allow_update_branch;
    private bool $use_squash_pr_title_as_default;
    /**
    * The default value for a squash merge commit title:
    
    - `PR_TITLE` - default to the pull request's title.
    - `COMMIT_OR_PR_TITLE` - default to the commit's title (if only one commit) or the pull request's title (when more than one commit).
    */
    private string $squash_merge_commit_title;
    /**
    * The default value for a squash merge commit message:
    
    - `PR_BODY` - default to the pull request's body.
    - `COMMIT_MESSAGES` - default to the branch's commit messages.
    - `BLANK` - default to a blank commit message.
    */
    private string $squash_merge_commit_message;
    /**
    * The default value for a merge commit title.
    
    - `PR_TITLE` - default to the pull request's title.
    - `MERGE_MESSAGE` - default to the classic title for a merge message (e.g., Merge pull request #123 from branch-name).
    */
    private string $merge_commit_title;
    /**
    * The default value for a merge commit message.
    
    - `PR_TITLE` - default to the pull request's title.
    - `PR_BODY` - default to the pull request's body.
    - `BLANK` - default to a blank commit message.
    */
    private string $merge_commit_message;
    private bool $allow_merge_commit;
    private int $subscribers_count;
    private int $network_count;
    public function id() : int
    {
        return $this->id;
    }
    public function node_id() : string
    {
        return $this->node_id;
    }
    public function name() : string
    {
        return $this->name;
    }
    public function full_name() : string
    {
        return $this->full_name;
    }
    public function owner() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TemplateRepository\Owner
    {
        return $this->owner;
    }
    public function private() : bool
    {
        return $this->private;
    }
    public function html_url() : string
    {
        return $this->html_url;
    }
    public function description() : string
    {
        return $this->description;
    }
    public function fork() : bool
    {
        return $this->fork;
    }
    public function url() : string
    {
        return $this->url;
    }
    public function archive_url() : string
    {
        return $this->archive_url;
    }
    public function assignees_url() : string
    {
        return $this->assignees_url;
    }
    public function blobs_url() : string
    {
        return $this->blobs_url;
    }
    public function branches_url() : string
    {
        return $this->branches_url;
    }
    public function collaborators_url() : string
    {
        return $this->collaborators_url;
    }
    public function comments_url() : string
    {
        return $this->comments_url;
    }
    public function commits_url() : string
    {
        return $this->commits_url;
    }
    public function compare_url() : string
    {
        return $this->compare_url;
    }
    public function contents_url() : string
    {
        return $this->contents_url;
    }
    public function contributors_url() : string
    {
        return $this->contributors_url;
    }
    public function deployments_url() : string
    {
        return $this->deployments_url;
    }
    public function downloads_url() : string
    {
        return $this->downloads_url;
    }
    public function events_url() : string
    {
        return $this->events_url;
    }
    public function forks_url() : string
    {
        return $this->forks_url;
    }
    public function git_commits_url() : string
    {
        return $this->git_commits_url;
    }
    public function git_refs_url() : string
    {
        return $this->git_refs_url;
    }
    public function git_tags_url() : string
    {
        return $this->git_tags_url;
    }
    public function git_url() : string
    {
        return $this->git_url;
    }
    public function issue_comment_url() : string
    {
        return $this->issue_comment_url;
    }
    public function issue_events_url() : string
    {
        return $this->issue_events_url;
    }
    public function issues_url() : string
    {
        return $this->issues_url;
    }
    public function keys_url() : string
    {
        return $this->keys_url;
    }
    public function labels_url() : string
    {
        return $this->labels_url;
    }
    public function languages_url() : string
    {
        return $this->languages_url;
    }
    public function merges_url() : string
    {
        return $this->merges_url;
    }
    public function milestones_url() : string
    {
        return $this->milestones_url;
    }
    public function notifications_url() : string
    {
        return $this->notifications_url;
    }
    public function pulls_url() : string
    {
        return $this->pulls_url;
    }
    public function releases_url() : string
    {
        return $this->releases_url;
    }
    public function ssh_url() : string
    {
        return $this->ssh_url;
    }
    public function stargazers_url() : string
    {
        return $this->stargazers_url;
    }
    public function statuses_url() : string
    {
        return $this->statuses_url;
    }
    public function subscribers_url() : string
    {
        return $this->subscribers_url;
    }
    public function subscription_url() : string
    {
        return $this->subscription_url;
    }
    public function tags_url() : string
    {
        return $this->tags_url;
    }
    public function teams_url() : string
    {
        return $this->teams_url;
    }
    public function trees_url() : string
    {
        return $this->trees_url;
    }
    public function clone_url() : string
    {
        return $this->clone_url;
    }
    public function mirror_url() : string
    {
        return $this->mirror_url;
    }
    public function hooks_url() : string
    {
        return $this->hooks_url;
    }
    public function svn_url() : string
    {
        return $this->svn_url;
    }
    public function homepage() : string
    {
        return $this->homepage;
    }
    public function language() : string
    {
        return $this->language;
    }
    public function forks_count() : int
    {
        return $this->forks_count;
    }
    public function stargazers_count() : int
    {
        return $this->stargazers_count;
    }
    public function watchers_count() : int
    {
        return $this->watchers_count;
    }
    public function size() : int
    {
        return $this->size;
    }
    public function default_branch() : string
    {
        return $this->default_branch;
    }
    public function open_issues_count() : int
    {
        return $this->open_issues_count;
    }
    public function is_template() : bool
    {
        return $this->is_template;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TemplateRepository\Topics>
     */
    public function topics() : array
    {
        return $this->topics;
    }
    public function has_issues() : bool
    {
        return $this->has_issues;
    }
    public function has_projects() : bool
    {
        return $this->has_projects;
    }
    public function has_wiki() : bool
    {
        return $this->has_wiki;
    }
    public function has_pages() : bool
    {
        return $this->has_pages;
    }
    public function has_downloads() : bool
    {
        return $this->has_downloads;
    }
    public function archived() : bool
    {
        return $this->archived;
    }
    public function disabled() : bool
    {
        return $this->disabled;
    }
    public function visibility() : string
    {
        return $this->visibility;
    }
    public function pushed_at() : string
    {
        return $this->pushed_at;
    }
    public function created_at() : string
    {
        return $this->created_at;
    }
    public function updated_at() : string
    {
        return $this->updated_at;
    }
    public function permissions() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TemplateRepository\Permissions
    {
        return $this->permissions;
    }
    public function allow_rebase_merge() : bool
    {
        return $this->allow_rebase_merge;
    }
    public function temp_clone_token() : string
    {
        return $this->temp_clone_token;
    }
    public function allow_squash_merge() : bool
    {
        return $this->allow_squash_merge;
    }
    public function allow_auto_merge() : bool
    {
        return $this->allow_auto_merge;
    }
    public function delete_branch_on_merge() : bool
    {
        return $this->delete_branch_on_merge;
    }
    public function allow_update_branch() : bool
    {
        return $this->allow_update_branch;
    }
    public function use_squash_pr_title_as_default() : bool
    {
        return $this->use_squash_pr_title_as_default;
    }
    /**
    * The default value for a squash merge commit title:
    
    - `PR_TITLE` - default to the pull request's title.
    - `COMMIT_OR_PR_TITLE` - default to the commit's title (if only one commit) or the pull request's title (when more than one commit).
    */
    public function squash_merge_commit_title() : string
    {
        return $this->squash_merge_commit_title;
    }
    /**
    * The default value for a squash merge commit message:
    
    - `PR_BODY` - default to the pull request's body.
    - `COMMIT_MESSAGES` - default to the branch's commit messages.
    - `BLANK` - default to a blank commit message.
    */
    public function squash_merge_commit_message() : string
    {
        return $this->squash_merge_commit_message;
    }
    /**
    * The default value for a merge commit title.
    
    - `PR_TITLE` - default to the pull request's title.
    - `MERGE_MESSAGE` - default to the classic title for a merge message (e.g., Merge pull request #123 from branch-name).
    */
    public function merge_commit_title() : string
    {
        return $this->merge_commit_title;
    }
    /**
    * The default value for a merge commit message.
    
    - `PR_TITLE` - default to the pull request's title.
    - `PR_BODY` - default to the pull request's body.
    - `BLANK` - default to a blank commit message.
    */
    public function merge_commit_message() : string
    {
        return $this->merge_commit_message;
    }
    public function allow_merge_commit() : bool
    {
        return $this->allow_merge_commit;
    }
    public function subscribers_count() : int
    {
        return $this->subscribers_count;
    }
    public function network_count() : int
    {
        return $this->network_count;
    }
}
