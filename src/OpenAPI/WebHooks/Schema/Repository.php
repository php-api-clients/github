<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class Repository
{
    public const SCHEMA_TITLE       = 'Repository';
    public const SCHEMA_DESCRIPTION = 'A git repository';
    /**
     * Unique identifier of the repository
     */
    private ?int $id         = null;
    private ?string $node_id = null;
    /**
     * The name of the repository.
     */
    private ?string $name      = null;
    private ?string $full_name = null;
    /**
     * Whether the repository is private or public.
     */
    private ?bool $private    = null;
    private array $owner      = [];
    private ?string $html_url = null;
    private $description;
    private ?bool $fork                = null;
    private ?string $url               = null;
    private ?string $forks_url         = null;
    private ?string $keys_url          = null;
    private ?string $collaborators_url = null;
    private ?string $teams_url         = null;
    private ?string $hooks_url         = null;
    private ?string $issue_events_url  = null;
    private ?string $events_url        = null;
    private ?string $assignees_url     = null;
    private ?string $branches_url      = null;
    private ?string $tags_url          = null;
    private ?string $blobs_url         = null;
    private ?string $git_tags_url      = null;
    private ?string $git_refs_url      = null;
    private ?string $trees_url         = null;
    private ?string $statuses_url      = null;
    private ?string $languages_url     = null;
    private ?string $stargazers_url    = null;
    private ?string $contributors_url  = null;
    private ?string $subscribers_url   = null;
    private ?string $subscription_url  = null;
    private ?string $commits_url       = null;
    private ?string $git_commits_url   = null;
    private ?string $comments_url      = null;
    private ?string $issue_comment_url = null;
    private ?string $contents_url      = null;
    private ?string $compare_url       = null;
    private ?string $merges_url        = null;
    private ?string $archive_url       = null;
    private ?string $downloads_url     = null;
    private ?string $issues_url        = null;
    private ?string $pulls_url         = null;
    private ?string $milestones_url    = null;
    private ?string $notifications_url = null;
    private ?string $labels_url        = null;
    private ?string $releases_url      = null;
    private ?string $deployments_url   = null;
    private $created_at;
    private ?string $updated_at = null;
    private $pushed_at;
    private ?string $git_url   = null;
    private ?string $ssh_url   = null;
    private ?string $clone_url = null;
    private ?string $svn_url   = null;
    private $homepage;
    private ?int $size             = null;
    private ?int $stargazers_count = null;
    private ?int $watchers_count   = null;
    private $language;
    /**
     * Whether issues are enabled.
     */
    private ?bool $has_issues = null;
    /**
     * Whether projects are enabled.
     */
    private ?bool $has_projects = null;
    /**
     * Whether downloads are enabled.
     */
    private ?bool $has_downloads = null;
    /**
     * Whether the wiki is enabled.
     */
    private ?bool $has_wiki   = null;
    private ?bool $has_pages  = null;
    private ?int $forks_count = null;
    private $mirror_url;
    /**
     * Whether the repository is archived.
     */
    private ?bool $archived = null;
    /**
     * Returns whether or not this repository is disabled.
     */
    private ?bool $disabled         = null;
    private ?int $open_issues_count = null;
    private $license;
    private ?int $forks       = null;
    private ?int $open_issues = null;
    private ?int $watchers    = null;
    private ?int $stargazers  = null;
    /**
     * The default branch of the repository.
     */
    private ?string $default_branch = null;
    /**
     * Whether to allow squash merges for pull requests.
     */
    private ?bool $allow_squash_merge = null;
    /**
     * Whether to allow merge commits for pull requests.
     */
    private ?bool $allow_merge_commit = null;
    /**
     * Whether to allow rebase merges for pull requests.
     */
    private ?bool $allow_rebase_merge = null;
    /**
     * Whether to delete head branches when pull requests are merged
     */
    private ?bool $delete_branch_on_merge = null;
    private ?string $master_branch        = null;
    private array $permissions            = [];
    private ?bool $public                 = null;
    private ?string $organization         = null;

    public function id(): ?int
    {
        return $this->id;
    }

    public function node_id(): ?string
    {
        return $this->node_id;
    }

    public function name(): ?string
    {
        return $this->name;
    }

    public function full_name(): ?string
    {
        return $this->full_name;
    }

    public function private(): ?bool
    {
        return $this->private;
    }

    public function owner(): array
    {
        return $this->owner;
    }

    public function html_url(): ?string
    {
        return $this->html_url;
    }

    public function description()
    {
        return $this->description;
    }

    public function fork(): ?bool
    {
        return $this->fork;
    }

    public function url(): ?string
    {
        return $this->url;
    }

    public function forks_url(): ?string
    {
        return $this->forks_url;
    }

    public function keys_url(): ?string
    {
        return $this->keys_url;
    }

    public function collaborators_url(): ?string
    {
        return $this->collaborators_url;
    }

    public function teams_url(): ?string
    {
        return $this->teams_url;
    }

    public function hooks_url(): ?string
    {
        return $this->hooks_url;
    }

    public function issue_events_url(): ?string
    {
        return $this->issue_events_url;
    }

    public function events_url(): ?string
    {
        return $this->events_url;
    }

    public function assignees_url(): ?string
    {
        return $this->assignees_url;
    }

    public function branches_url(): ?string
    {
        return $this->branches_url;
    }

    public function tags_url(): ?string
    {
        return $this->tags_url;
    }

    public function blobs_url(): ?string
    {
        return $this->blobs_url;
    }

    public function git_tags_url(): ?string
    {
        return $this->git_tags_url;
    }

    public function git_refs_url(): ?string
    {
        return $this->git_refs_url;
    }

    public function trees_url(): ?string
    {
        return $this->trees_url;
    }

    public function statuses_url(): ?string
    {
        return $this->statuses_url;
    }

    public function languages_url(): ?string
    {
        return $this->languages_url;
    }

    public function stargazers_url(): ?string
    {
        return $this->stargazers_url;
    }

    public function contributors_url(): ?string
    {
        return $this->contributors_url;
    }

    public function subscribers_url(): ?string
    {
        return $this->subscribers_url;
    }

    public function subscription_url(): ?string
    {
        return $this->subscription_url;
    }

    public function commits_url(): ?string
    {
        return $this->commits_url;
    }

    public function git_commits_url(): ?string
    {
        return $this->git_commits_url;
    }

    public function comments_url(): ?string
    {
        return $this->comments_url;
    }

    public function issue_comment_url(): ?string
    {
        return $this->issue_comment_url;
    }

    public function contents_url(): ?string
    {
        return $this->contents_url;
    }

    public function compare_url(): ?string
    {
        return $this->compare_url;
    }

    public function merges_url(): ?string
    {
        return $this->merges_url;
    }

    public function archive_url(): ?string
    {
        return $this->archive_url;
    }

    public function downloads_url(): ?string
    {
        return $this->downloads_url;
    }

    public function issues_url(): ?string
    {
        return $this->issues_url;
    }

    public function pulls_url(): ?string
    {
        return $this->pulls_url;
    }

    public function milestones_url(): ?string
    {
        return $this->milestones_url;
    }

    public function notifications_url(): ?string
    {
        return $this->notifications_url;
    }

    public function labels_url(): ?string
    {
        return $this->labels_url;
    }

    public function releases_url(): ?string
    {
        return $this->releases_url;
    }

    public function deployments_url(): ?string
    {
        return $this->deployments_url;
    }

    public function created_at()
    {
        return $this->created_at;
    }

    public function updated_at(): ?string
    {
        return $this->updated_at;
    }

    public function pushed_at()
    {
        return $this->pushed_at;
    }

    public function git_url(): ?string
    {
        return $this->git_url;
    }

    public function ssh_url(): ?string
    {
        return $this->ssh_url;
    }

    public function clone_url(): ?string
    {
        return $this->clone_url;
    }

    public function svn_url(): ?string
    {
        return $this->svn_url;
    }

    public function homepage()
    {
        return $this->homepage;
    }

    public function size(): ?int
    {
        return $this->size;
    }

    public function stargazers_count(): ?int
    {
        return $this->stargazers_count;
    }

    public function watchers_count(): ?int
    {
        return $this->watchers_count;
    }

    public function language()
    {
        return $this->language;
    }

    public function has_issues(): ?bool
    {
        return $this->has_issues;
    }

    public function has_projects(): ?bool
    {
        return $this->has_projects;
    }

    public function has_downloads(): ?bool
    {
        return $this->has_downloads;
    }

    public function has_wiki(): ?bool
    {
        return $this->has_wiki;
    }

    public function has_pages(): ?bool
    {
        return $this->has_pages;
    }

    public function forks_count(): ?int
    {
        return $this->forks_count;
    }

    public function mirror_url()
    {
        return $this->mirror_url;
    }

    public function archived(): ?bool
    {
        return $this->archived;
    }

    public function disabled(): ?bool
    {
        return $this->disabled;
    }

    public function open_issues_count(): ?int
    {
        return $this->open_issues_count;
    }

    public function license()
    {
        return $this->license;
    }

    public function forks(): ?int
    {
        return $this->forks;
    }

    public function open_issues(): ?int
    {
        return $this->open_issues;
    }

    public function watchers(): ?int
    {
        return $this->watchers;
    }

    public function stargazers(): ?int
    {
        return $this->stargazers;
    }

    public function default_branch(): ?string
    {
        return $this->default_branch;
    }

    public function allow_squash_merge(): ?bool
    {
        return $this->allow_squash_merge;
    }

    public function allow_merge_commit(): ?bool
    {
        return $this->allow_merge_commit;
    }

    public function allow_rebase_merge(): ?bool
    {
        return $this->allow_rebase_merge;
    }

    public function delete_branch_on_merge(): ?bool
    {
        return $this->delete_branch_on_merge;
    }

    public function master_branch(): ?string
    {
        return $this->master_branch;
    }

    public function permissions(): array
    {
        return $this->permissions;
    }

    public function public(): ?bool
    {
        return $this->public;
    }

    public function organization(): ?string
    {
        return $this->organization;
    }
}
