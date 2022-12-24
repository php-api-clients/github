<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown;

final class C0974F8A2C4E2Bc2668B9Fd34172D517C
{
    public const SCHEMA_JSON = '{"title":"Repository","required":["id","node_id","name","full_name","private","owner","html_url","description","fork","url","forks_url","keys_url","collaborators_url","teams_url","hooks_url","issue_events_url","events_url","assignees_url","branches_url","tags_url","blobs_url","git_tags_url","git_refs_url","trees_url","statuses_url","languages_url","stargazers_url","contributors_url","subscribers_url","subscription_url","commits_url","git_commits_url","comments_url","issue_comment_url","contents_url","compare_url","merges_url","archive_url","downloads_url","issues_url","pulls_url","milestones_url","notifications_url","labels_url","releases_url","deployments_url","created_at","updated_at","pushed_at","git_url","ssh_url","clone_url","svn_url","homepage","size","stargazers_count","watchers_count","language","has_issues","has_projects","has_downloads","has_wiki","has_pages","has_discussions","forks_count","mirror_url","archived","open_issues_count","license","forks","open_issues","watchers","default_branch","topics","visibility"],"type":"object","properties":{"allow_auto_merge":{"type":"boolean","description":"Whether to allow auto-merge for pull requests.","default":false},"allow_forking":{"type":"boolean","description":"Whether to allow private forks"},"allow_merge_commit":{"type":"boolean","description":"Whether to allow merge commits for pull requests.","default":true},"allow_rebase_merge":{"type":"boolean","description":"Whether to allow rebase merges for pull requests.","default":true},"allow_squash_merge":{"type":"boolean","description":"Whether to allow squash merges for pull requests.","default":true},"allow_update_branch":{"type":"boolean"},"archive_url":{"type":"string","format":"uri-template"},"archived":{"type":"boolean","description":"Whether the repository is archived.","default":false},"assignees_url":{"type":"string","format":"uri-template"},"blobs_url":{"type":"string","format":"uri-template"},"branches_url":{"type":"string","format":"uri-template"},"clone_url":{"type":"string","format":"uri"},"collaborators_url":{"type":"string","format":"uri-template"},"comments_url":{"type":"string","format":"uri-template"},"commits_url":{"type":"string","format":"uri-template"},"compare_url":{"type":"string","format":"uri-template"},"contents_url":{"type":"string","format":"uri-template"},"contributors_url":{"type":"string","format":"uri"},"created_at":{"oneOf":[{"type":"integer"},{"type":"string","format":"date-time"}]},"default_branch":{"type":"string","description":"The default branch of the repository."},"delete_branch_on_merge":{"type":"boolean","description":"Whether to delete head branches when pull requests are merged","default":false},"deployments_url":{"type":"string","format":"uri"},"description":{"type":["string","null"]},"disabled":{"type":"boolean","description":"Returns whether or not this repository is disabled."},"downloads_url":{"type":"string","format":"uri"},"events_url":{"type":"string","format":"uri"},"fork":{"type":"boolean"},"forks":{"type":"integer"},"forks_count":{"type":"integer"},"forks_url":{"type":"string","format":"uri"},"full_name":{"type":"string"},"git_commits_url":{"type":"string","format":"uri-template"},"git_refs_url":{"type":"string","format":"uri-template"},"git_tags_url":{"type":"string","format":"uri-template"},"git_url":{"type":"string","format":"uri"},"has_downloads":{"type":"boolean","description":"Whether downloads are enabled.","default":true},"has_issues":{"type":"boolean","description":"Whether issues are enabled.","default":true},"has_pages":{"type":"boolean"},"has_projects":{"type":"boolean","description":"Whether projects are enabled.","default":true},"has_wiki":{"type":"boolean","description":"Whether the wiki is enabled.","default":true},"has_discussions":{"type":"boolean","description":"Whether discussions are enabled.","default":false},"homepage":{"type":["string","null"]},"hooks_url":{"type":"string","format":"uri"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer","description":"Unique identifier of the repository"},"is_template":{"type":"boolean"},"issue_comment_url":{"type":"string","format":"uri-template"},"issue_events_url":{"type":"string","format":"uri-template"},"issues_url":{"type":"string","format":"uri-template"},"keys_url":{"type":"string","format":"uri-template"},"labels_url":{"type":"string","format":"uri-template"},"language":{"type":["string","null"]},"languages_url":{"type":"string","format":"uri"},"license":{"title":"License","required":["key","name","spdx_id","url","node_id"],"type":["object","null"],"properties":{"key":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"spdx_id":{"type":"string"},"url":{"type":["string","null"],"format":"uri"}}},"master_branch":{"type":"string"},"merges_url":{"type":"string","format":"uri"},"milestones_url":{"type":"string","format":"uri-template"},"mirror_url":{"type":["string","null"],"format":"uri"},"name":{"type":"string","description":"The name of the repository."},"node_id":{"type":"string"},"notifications_url":{"type":"string","format":"uri-template"},"open_issues":{"type":"integer"},"open_issues_count":{"type":"integer"},"organization":{"type":"string"},"owner":{"title":"User","required":["login","id"],"type":["object","null"],"properties":{"avatar_url":{"type":"string","format":"uri"},"deleted":{"type":"boolean"},"email":{"type":["string","null"]},"events_url":{"type":"string","format":"uri-template"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"gravatar_id":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"login":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization"],"type":"string"},"url":{"type":"string","format":"uri"}}},"permissions":{"required":["pull","push","admin"],"type":"object","properties":{"admin":{"type":"boolean"},"maintain":{"type":"boolean"},"pull":{"type":"boolean"},"push":{"type":"boolean"},"triage":{"type":"boolean"}}},"private":{"type":"boolean","description":"Whether the repository is private or public."},"public":{"type":"boolean"},"pulls_url":{"type":"string","format":"uri-template"},"pushed_at":{"type":["null","integer","string"],"oneOf":[{"type":"integer"},{"type":"string","format":"date-time"}]},"releases_url":{"type":"string","format":"uri-template"},"role_name":{"type":["string","null"]},"size":{"type":"integer"},"ssh_url":{"type":"string"},"stargazers":{"type":"integer"},"stargazers_count":{"type":"integer"},"stargazers_url":{"type":"string","format":"uri"},"statuses_url":{"type":"string","format":"uri-template"},"subscribers_url":{"type":"string","format":"uri"},"subscription_url":{"type":"string","format":"uri"},"svn_url":{"type":"string","format":"uri"},"tags_url":{"type":"string","format":"uri"},"teams_url":{"type":"string","format":"uri"},"topics":{"type":"array","items":{"type":"string"}},"trees_url":{"type":"string","format":"uri-template"},"updated_at":{"type":"string","format":"date-time"},"url":{"type":"string","format":"uri"},"visibility":{"enum":["public","private","internal"],"type":"string"},"watchers":{"type":"integer"},"watchers_count":{"type":"integer"},"web_commit_signoff_required":{"type":"boolean","description":"Whether to require contributors to sign off on web-based commits"}},"description":"A git repository"}';
    public const SCHEMA_TITLE = 'Repository';
    public const SCHEMA_DESCRIPTION = 'A git repository';
    /**
     * Whether to allow auto-merge for pull requests.
     */
    private ?bool $allow_auto_merge = null;
    /**
     * Whether to allow private forks
     */
    private ?bool $allow_forking = null;
    /**
     * Whether to allow merge commits for pull requests.
     */
    private ?bool $allow_merge_commit = null;
    /**
     * Whether to allow rebase merges for pull requests.
     */
    private ?bool $allow_rebase_merge = null;
    /**
     * Whether to allow squash merges for pull requests.
     */
    private ?bool $allow_squash_merge = null;
    private ?bool $allow_update_branch = null;
    private string $archive_url;
    /**
     * Whether the repository is archived.
     */
    private bool $archived;
    private string $assignees_url;
    private string $blobs_url;
    private string $branches_url;
    private string $clone_url;
    private string $collaborators_url;
    private string $comments_url;
    private string $commits_url;
    private string $compare_url;
    private string $contents_url;
    private string $contributors_url;
    private $created_at;
    /**
     * The default branch of the repository.
     */
    private string $default_branch;
    /**
     * Whether to delete head branches when pull requests are merged
     */
    private ?bool $delete_branch_on_merge = null;
    private string $deployments_url;
    private $description;
    /**
     * Returns whether or not this repository is disabled.
     */
    private ?bool $disabled = null;
    private string $downloads_url;
    private string $events_url;
    private bool $fork;
    private int $forks;
    private int $forks_count;
    private string $forks_url;
    private string $full_name;
    private string $git_commits_url;
    private string $git_refs_url;
    private string $git_tags_url;
    private string $git_url;
    /**
     * Whether downloads are enabled.
     */
    private bool $has_downloads;
    /**
     * Whether issues are enabled.
     */
    private bool $has_issues;
    private bool $has_pages;
    /**
     * Whether projects are enabled.
     */
    private bool $has_projects;
    /**
     * Whether the wiki is enabled.
     */
    private bool $has_wiki;
    /**
     * Whether discussions are enabled.
     */
    private bool $has_discussions;
    private $homepage;
    private string $hooks_url;
    private string $html_url;
    /**
     * Unique identifier of the repository
     */
    private int $id;
    private ?bool $is_template = null;
    private string $issue_comment_url;
    private string $issue_events_url;
    private string $issues_url;
    private string $keys_url;
    private string $labels_url;
    private $language;
    private string $languages_url;
    private $license;
    private ?string $master_branch = null;
    private string $merges_url;
    private string $milestones_url;
    private $mirror_url;
    /**
     * The name of the repository.
     */
    private string $name;
    private string $node_id;
    private string $notifications_url;
    private int $open_issues;
    private int $open_issues_count;
    private ?string $organization = null;
    private $owner;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CD132835D06Ce1Ed3Bf25165Bedaa71C5::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CD132835D06Ce1Ed3Bf25165Bedaa71C5 $permissions = null;
    /**
     * Whether the repository is private or public.
     */
    private bool $private;
    private ?bool $public = null;
    private string $pulls_url;
    private $pushed_at;
    private string $releases_url;
    private $role_name;
    private int $size;
    private string $ssh_url;
    private ?int $stargazers = null;
    private int $stargazers_count;
    private string $stargazers_url;
    private string $statuses_url;
    private string $subscribers_url;
    private string $subscription_url;
    private string $svn_url;
    private string $tags_url;
    private string $teams_url;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C2809284B6E54D0D34017715Ffe5636Bd>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C2809284B6E54D0D34017715Ffe5636Bd::class)
     */
    private array $topics = array();
    private string $trees_url;
    private string $updated_at;
    private string $url;
    private string $visibility;
    private int $watchers;
    private int $watchers_count;
    /**
     * Whether to require contributors to sign off on web-based commits
     */
    private ?bool $web_commit_signoff_required = null;
    /**
     * Whether to allow auto-merge for pull requests.
     */
    public function allow_auto_merge() : ?bool
    {
        return $this->allow_auto_merge;
    }
    /**
     * Whether to allow private forks
     */
    public function allow_forking() : ?bool
    {
        return $this->allow_forking;
    }
    /**
     * Whether to allow merge commits for pull requests.
     */
    public function allow_merge_commit() : ?bool
    {
        return $this->allow_merge_commit;
    }
    /**
     * Whether to allow rebase merges for pull requests.
     */
    public function allow_rebase_merge() : ?bool
    {
        return $this->allow_rebase_merge;
    }
    /**
     * Whether to allow squash merges for pull requests.
     */
    public function allow_squash_merge() : ?bool
    {
        return $this->allow_squash_merge;
    }
    public function allow_update_branch() : ?bool
    {
        return $this->allow_update_branch;
    }
    public function archive_url() : string
    {
        return $this->archive_url;
    }
    /**
     * Whether the repository is archived.
     */
    public function archived() : bool
    {
        return $this->archived;
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
    public function clone_url() : string
    {
        return $this->clone_url;
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
    public function created_at()
    {
        return $this->created_at;
    }
    /**
     * The default branch of the repository.
     */
    public function default_branch() : string
    {
        return $this->default_branch;
    }
    /**
     * Whether to delete head branches when pull requests are merged
     */
    public function delete_branch_on_merge() : ?bool
    {
        return $this->delete_branch_on_merge;
    }
    public function deployments_url() : string
    {
        return $this->deployments_url;
    }
    public function description()
    {
        return $this->description;
    }
    /**
     * Returns whether or not this repository is disabled.
     */
    public function disabled() : ?bool
    {
        return $this->disabled;
    }
    public function downloads_url() : string
    {
        return $this->downloads_url;
    }
    public function events_url() : string
    {
        return $this->events_url;
    }
    public function fork() : bool
    {
        return $this->fork;
    }
    public function forks() : int
    {
        return $this->forks;
    }
    public function forks_count() : int
    {
        return $this->forks_count;
    }
    public function forks_url() : string
    {
        return $this->forks_url;
    }
    public function full_name() : string
    {
        return $this->full_name;
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
    /**
     * Whether downloads are enabled.
     */
    public function has_downloads() : bool
    {
        return $this->has_downloads;
    }
    /**
     * Whether issues are enabled.
     */
    public function has_issues() : bool
    {
        return $this->has_issues;
    }
    public function has_pages() : bool
    {
        return $this->has_pages;
    }
    /**
     * Whether projects are enabled.
     */
    public function has_projects() : bool
    {
        return $this->has_projects;
    }
    /**
     * Whether the wiki is enabled.
     */
    public function has_wiki() : bool
    {
        return $this->has_wiki;
    }
    /**
     * Whether discussions are enabled.
     */
    public function has_discussions() : bool
    {
        return $this->has_discussions;
    }
    public function homepage()
    {
        return $this->homepage;
    }
    public function hooks_url() : string
    {
        return $this->hooks_url;
    }
    public function html_url() : string
    {
        return $this->html_url;
    }
    /**
     * Unique identifier of the repository
     */
    public function id() : int
    {
        return $this->id;
    }
    public function is_template() : ?bool
    {
        return $this->is_template;
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
    public function language()
    {
        return $this->language;
    }
    public function languages_url() : string
    {
        return $this->languages_url;
    }
    public function license()
    {
        return $this->license;
    }
    public function master_branch() : ?string
    {
        return $this->master_branch;
    }
    public function merges_url() : string
    {
        return $this->merges_url;
    }
    public function milestones_url() : string
    {
        return $this->milestones_url;
    }
    public function mirror_url()
    {
        return $this->mirror_url;
    }
    /**
     * The name of the repository.
     */
    public function name() : string
    {
        return $this->name;
    }
    public function node_id() : string
    {
        return $this->node_id;
    }
    public function notifications_url() : string
    {
        return $this->notifications_url;
    }
    public function open_issues() : int
    {
        return $this->open_issues;
    }
    public function open_issues_count() : int
    {
        return $this->open_issues_count;
    }
    public function organization() : ?string
    {
        return $this->organization;
    }
    public function owner()
    {
        return $this->owner;
    }
    public function permissions() : ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CD132835D06Ce1Ed3Bf25165Bedaa71C5
    {
        return $this->permissions;
    }
    /**
     * Whether the repository is private or public.
     */
    public function private() : bool
    {
        return $this->private;
    }
    public function public() : ?bool
    {
        return $this->public;
    }
    public function pulls_url() : string
    {
        return $this->pulls_url;
    }
    public function pushed_at()
    {
        return $this->pushed_at;
    }
    public function releases_url() : string
    {
        return $this->releases_url;
    }
    public function role_name()
    {
        return $this->role_name;
    }
    public function size() : int
    {
        return $this->size;
    }
    public function ssh_url() : string
    {
        return $this->ssh_url;
    }
    public function stargazers() : ?int
    {
        return $this->stargazers;
    }
    public function stargazers_count() : int
    {
        return $this->stargazers_count;
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
    public function svn_url() : string
    {
        return $this->svn_url;
    }
    public function tags_url() : string
    {
        return $this->tags_url;
    }
    public function teams_url() : string
    {
        return $this->teams_url;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C2809284B6E54D0D34017715Ffe5636Bd>
     */
    public function topics() : array
    {
        return $this->topics;
    }
    public function trees_url() : string
    {
        return $this->trees_url;
    }
    public function updated_at() : string
    {
        return $this->updated_at;
    }
    public function url() : string
    {
        return $this->url;
    }
    public function visibility() : string
    {
        return $this->visibility;
    }
    public function watchers() : int
    {
        return $this->watchers;
    }
    public function watchers_count() : int
    {
        return $this->watchers_count;
    }
    /**
     * Whether to require contributors to sign off on web-based commits
     */
    public function web_commit_signoff_required() : ?bool
    {
        return $this->web_commit_signoff_required;
    }
}
