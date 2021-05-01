<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Schema;

final class Repository
{
    public const SCHEMA_TITLE = 'Repository';
    public const SCHEMA_DESCRIPTION = 'A git repository';
    /**Unique identifier of the repository**/
    private int $id;
    private string $node_id;
    /**The name of the repository.**/
    private string $name;
    private string $full_name;
    private $license;
    private $organization;
    private int $forks;
    private object $permissions;
    private $owner;
    /**Whether the repository is private or public.**/
    private boolean $private;
    private string $html_url;
    private string $description;
    private boolean $fork;
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
    /**The default branch of the repository.**/
    private string $default_branch;
    private int $open_issues_count;
    /**Whether this repository acts as a template that can be used to generate new repositories.**/
    private boolean $is_template;
    private array $topics;
    /**Whether issues are enabled.**/
    private boolean $has_issues;
    /**Whether projects are enabled.**/
    private boolean $has_projects;
    /**Whether the wiki is enabled.**/
    private boolean $has_wiki;
    private boolean $has_pages;
    /**Whether downloads are enabled.**/
    private boolean $has_downloads;
    /**Whether the repository is archived.**/
    private boolean $archived;
    /**Returns whether or not this repository disabled.**/
    private boolean $disabled;
    /**The repository visibility: public, private, or internal.**/
    private string $visibility;
    private string $pushed_at;
    private string $created_at;
    private string $updated_at;
    /**Whether to allow rebase merges for pull requests.**/
    private boolean $allow_rebase_merge;
    private object $template_repository;
    /**Whether to allow squash merges for pull requests.**/
    private boolean $allow_squash_merge;
    /**Whether to allow merge commits for pull requests.**/
    private boolean $allow_merge_commit;
    private int $subscribers_count;
    private int $network_count;
    private int $open_issues;
    private int $watchers;
    private string $master_branch;
    private string $starred_at;
    private boolean $anonymous_access_enabled;
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
    public function license()
    {
        return $this->license;
    }
    public function organization()
    {
        return $this->organization;
    }
    public function forks() : int
    {
        return $this->forks;
    }
    public function permissions() : object
    {
        return $this->permissions;
    }
    public function owner()
    {
        return $this->owner;
    }
    public function private() : boolean
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
    public function fork() : boolean
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
    public function is_template() : boolean
    {
        return $this->is_template;
    }
    public function topics() : array
    {
        return $this->topics;
    }
    public function has_issues() : boolean
    {
        return $this->has_issues;
    }
    public function has_projects() : boolean
    {
        return $this->has_projects;
    }
    public function has_wiki() : boolean
    {
        return $this->has_wiki;
    }
    public function has_pages() : boolean
    {
        return $this->has_pages;
    }
    public function has_downloads() : boolean
    {
        return $this->has_downloads;
    }
    public function archived() : boolean
    {
        return $this->archived;
    }
    public function disabled() : boolean
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
    public function allow_rebase_merge() : boolean
    {
        return $this->allow_rebase_merge;
    }
    public function template_repository() : object
    {
        return $this->template_repository;
    }
    public function allow_squash_merge() : boolean
    {
        return $this->allow_squash_merge;
    }
    public function allow_merge_commit() : boolean
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
    public function open_issues() : int
    {
        return $this->open_issues;
    }
    public function watchers() : int
    {
        return $this->watchers;
    }
    public function master_branch() : string
    {
        return $this->master_branch;
    }
    public function starred_at() : string
    {
        return $this->starred_at;
    }
    public function anonymous_access_enabled() : boolean
    {
        return $this->anonymous_access_enabled;
    }
}
