<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class RepoSearchResultItem
{
    public const SCHEMA_JSON = '{"title":"Repo Search Result Item","required":["archive_url","assignees_url","blobs_url","branches_url","collaborators_url","comments_url","commits_url","compare_url","contents_url","contributors_url","deployments_url","description","downloads_url","events_url","fork","forks_url","full_name","git_commits_url","git_refs_url","git_tags_url","hooks_url","html_url","id","node_id","issue_comment_url","issue_events_url","issues_url","keys_url","labels_url","languages_url","merges_url","milestones_url","name","notifications_url","owner","private","pulls_url","releases_url","stargazers_url","statuses_url","subscribers_url","subscription_url","tags_url","teams_url","trees_url","url","clone_url","default_branch","forks","forks_count","git_url","has_downloads","has_issues","has_projects","has_wiki","has_pages","homepage","language","archived","disabled","mirror_url","open_issues","open_issues_count","license","pushed_at","size","ssh_url","stargazers_count","svn_url","watchers","watchers_count","created_at","updated_at","score"],"type":"object","properties":{"id":{"type":"integer"},"node_id":{"type":"string"},"name":{"type":"string"},"full_name":{"type":"string"},"owner":{"anyOf":[{"type":"null"},{"title":"Simple User","required":["avatar_url","events_url","followers_url","following_url","gists_url","gravatar_id","html_url","id","node_id","login","organizations_url","received_events_url","repos_url","site_admin","starred_url","subscriptions_url","type","url"],"type":"object","properties":{"name":{"type":["string","null"]},"email":{"type":["string","null"]},"login":{"type":"string","examples":["octocat"]},"id":{"type":"integer","examples":[1]},"node_id":{"type":"string","examples":["MDQ6VXNlcjE="]},"avatar_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif"]},"gravatar_id":{"type":["string","null"],"examples":["41d064eb2195891e12d0413f63227ea7"]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat"]},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat"]},"followers_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/followers"]},"following_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}"]},"gists_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}"]},"starred_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}"]},"subscriptions_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions"]},"organizations_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/orgs"]},"repos_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/repos"]},"events_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}"]},"received_events_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/received_events"]},"type":{"type":"string","examples":["User"]},"site_admin":{"type":"boolean"},"starred_at":{"type":"string","examples":["\\"2020-07-09T00:17:55Z\\""]}},"description":"A GitHub user."}]},"private":{"type":"boolean"},"html_url":{"type":"string","format":"uri"},"description":{"type":["string","null"]},"fork":{"type":"boolean"},"url":{"type":"string","format":"uri"},"created_at":{"type":"string","format":"date-time"},"updated_at":{"type":"string","format":"date-time"},"pushed_at":{"type":"string","format":"date-time"},"homepage":{"type":["string","null"],"format":"uri"},"size":{"type":"integer"},"stargazers_count":{"type":"integer"},"watchers_count":{"type":"integer"},"language":{"type":["string","null"]},"forks_count":{"type":"integer"},"open_issues_count":{"type":"integer"},"master_branch":{"type":"string"},"default_branch":{"type":"string"},"score":{"type":"number"},"forks_url":{"type":"string","format":"uri"},"keys_url":{"type":"string"},"collaborators_url":{"type":"string"},"teams_url":{"type":"string","format":"uri"},"hooks_url":{"type":"string","format":"uri"},"issue_events_url":{"type":"string"},"events_url":{"type":"string","format":"uri"},"assignees_url":{"type":"string"},"branches_url":{"type":"string"},"tags_url":{"type":"string","format":"uri"},"blobs_url":{"type":"string"},"git_tags_url":{"type":"string"},"git_refs_url":{"type":"string"},"trees_url":{"type":"string"},"statuses_url":{"type":"string"},"languages_url":{"type":"string","format":"uri"},"stargazers_url":{"type":"string","format":"uri"},"contributors_url":{"type":"string","format":"uri"},"subscribers_url":{"type":"string","format":"uri"},"subscription_url":{"type":"string","format":"uri"},"commits_url":{"type":"string"},"git_commits_url":{"type":"string"},"comments_url":{"type":"string"},"issue_comment_url":{"type":"string"},"contents_url":{"type":"string"},"compare_url":{"type":"string"},"merges_url":{"type":"string","format":"uri"},"archive_url":{"type":"string"},"downloads_url":{"type":"string","format":"uri"},"issues_url":{"type":"string"},"pulls_url":{"type":"string"},"milestones_url":{"type":"string"},"notifications_url":{"type":"string"},"labels_url":{"type":"string"},"releases_url":{"type":"string"},"deployments_url":{"type":"string","format":"uri"},"git_url":{"type":"string"},"ssh_url":{"type":"string"},"clone_url":{"type":"string"},"svn_url":{"type":"string","format":"uri"},"forks":{"type":"integer"},"open_issues":{"type":"integer"},"watchers":{"type":"integer"},"topics":{"type":"array","items":{"type":"string"}},"mirror_url":{"type":["string","null"],"format":"uri"},"has_issues":{"type":"boolean"},"has_projects":{"type":"boolean"},"has_pages":{"type":"boolean"},"has_wiki":{"type":"boolean"},"has_downloads":{"type":"boolean"},"has_discussions":{"type":"boolean"},"archived":{"type":"boolean"},"disabled":{"type":"boolean","description":"Returns whether or not this repository disabled."},"visibility":{"type":"string","description":"The repository visibility: public, private, or internal."},"license":{"anyOf":[{"type":"null"},{"title":"License Simple","required":["key","name","url","spdx_id","node_id"],"type":"object","properties":{"key":{"type":"string","examples":["mit"]},"name":{"type":"string","examples":["MIT License"]},"url":{"type":["string","null"],"format":"uri","examples":["https:\\/\\/api.github.com\\/licenses\\/mit"]},"spdx_id":{"type":["string","null"],"examples":["MIT"]},"node_id":{"type":"string","examples":["MDc6TGljZW5zZW1pdA=="]},"html_url":{"type":"string","format":"uri"}},"description":"License Simple"}]},"permissions":{"required":["admin","pull","push"],"type":"object","properties":{"admin":{"type":"boolean"},"maintain":{"type":"boolean"},"push":{"type":"boolean"},"triage":{"type":"boolean"},"pull":{"type":"boolean"}}},"text_matches":{"title":"Search Result Text Matches","type":"array","items":{"type":"object","properties":{"object_url":{"type":"string"},"object_type":{"type":["string","null"]},"property":{"type":"string"},"fragment":{"type":"string"},"matches":{"type":"array","items":{"type":"object","properties":{"text":{"type":"string"},"indices":{"type":"array","items":{"type":"integer"}}}}}}}},"temp_clone_token":{"type":"string"},"allow_merge_commit":{"type":"boolean"},"allow_squash_merge":{"type":"boolean"},"allow_rebase_merge":{"type":"boolean"},"allow_auto_merge":{"type":"boolean"},"delete_branch_on_merge":{"type":"boolean"},"allow_forking":{"type":"boolean"},"is_template":{"type":"boolean"},"web_commit_signoff_required":{"type":"boolean","examples":[false]}},"description":"Repo Search Result Item"}';
    public const SCHEMA_TITLE = 'Repo Search Result Item';
    public const SCHEMA_DESCRIPTION = 'Repo Search Result Item';
    private int $id;
    private string $node_id;
    private string $name;
    private string $full_name;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C4D5B98B02A5Afea165Db4Daaee5D7217::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C4D5B98B02A5Afea165Db4Daaee5D7217 $owner;
    private bool $private;
    private string $html_url;
    private $description;
    private bool $fork;
    private string $url;
    private string $created_at;
    private string $updated_at;
    private string $pushed_at;
    private $homepage;
    private int $size;
    private int $stargazers_count;
    private int $watchers_count;
    private $language;
    private int $forks_count;
    private int $open_issues_count;
    private ?string $master_branch = null;
    private string $default_branch;
    private int $score;
    private string $forks_url;
    private string $keys_url;
    private string $collaborators_url;
    private string $teams_url;
    private string $hooks_url;
    private string $issue_events_url;
    private string $events_url;
    private string $assignees_url;
    private string $branches_url;
    private string $tags_url;
    private string $blobs_url;
    private string $git_tags_url;
    private string $git_refs_url;
    private string $trees_url;
    private string $statuses_url;
    private string $languages_url;
    private string $stargazers_url;
    private string $contributors_url;
    private string $subscribers_url;
    private string $subscription_url;
    private string $commits_url;
    private string $git_commits_url;
    private string $comments_url;
    private string $issue_comment_url;
    private string $contents_url;
    private string $compare_url;
    private string $merges_url;
    private string $archive_url;
    private string $downloads_url;
    private string $issues_url;
    private string $pulls_url;
    private string $milestones_url;
    private string $notifications_url;
    private string $labels_url;
    private string $releases_url;
    private string $deployments_url;
    private string $git_url;
    private string $ssh_url;
    private string $clone_url;
    private string $svn_url;
    private int $forks;
    private int $open_issues;
    private int $watchers;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C2809284B6E54D0D34017715Ffe5636Bd>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C2809284B6E54D0D34017715Ffe5636Bd::class)
     */
    private array $topics = array();
    private $mirror_url;
    private bool $has_issues;
    private bool $has_projects;
    private bool $has_pages;
    private bool $has_wiki;
    private bool $has_downloads;
    private ?bool $has_discussions = null;
    private bool $archived;
    /**
     * Returns whether or not this repository disabled.
     */
    private bool $disabled;
    /**
     * The repository visibility: public, private, or internal.
     */
    private ?string $visibility = null;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C4D5B98B02A5Afea165Db4Daaee5D7217::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C4D5B98B02A5Afea165Db4Daaee5D7217 $license;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C205818De09Bc5C97De84B773Be223C26::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C205818De09Bc5C97De84B773Be223C26 $permissions = null;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C6F1C6Cb8872D75271C982D10D0301D02>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C6F1C6Cb8872D75271C982D10D0301D02::class)
     */
    private array $text_matches = array();
    private ?string $temp_clone_token = null;
    private ?bool $allow_merge_commit = null;
    private ?bool $allow_squash_merge = null;
    private ?bool $allow_rebase_merge = null;
    private ?bool $allow_auto_merge = null;
    private ?bool $delete_branch_on_merge = null;
    private ?bool $allow_forking = null;
    private ?bool $is_template = null;
    private ?bool $web_commit_signoff_required = null;
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
    public function owner() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C4D5B98B02A5Afea165Db4Daaee5D7217
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
    public function description()
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
    public function created_at() : string
    {
        return $this->created_at;
    }
    public function updated_at() : string
    {
        return $this->updated_at;
    }
    public function pushed_at() : string
    {
        return $this->pushed_at;
    }
    public function homepage()
    {
        return $this->homepage;
    }
    public function size() : int
    {
        return $this->size;
    }
    public function stargazers_count() : int
    {
        return $this->stargazers_count;
    }
    public function watchers_count() : int
    {
        return $this->watchers_count;
    }
    public function language()
    {
        return $this->language;
    }
    public function forks_count() : int
    {
        return $this->forks_count;
    }
    public function open_issues_count() : int
    {
        return $this->open_issues_count;
    }
    public function master_branch() : ?string
    {
        return $this->master_branch;
    }
    public function default_branch() : string
    {
        return $this->default_branch;
    }
    public function score() : int
    {
        return $this->score;
    }
    public function forks_url() : string
    {
        return $this->forks_url;
    }
    public function keys_url() : string
    {
        return $this->keys_url;
    }
    public function collaborators_url() : string
    {
        return $this->collaborators_url;
    }
    public function teams_url() : string
    {
        return $this->teams_url;
    }
    public function hooks_url() : string
    {
        return $this->hooks_url;
    }
    public function issue_events_url() : string
    {
        return $this->issue_events_url;
    }
    public function events_url() : string
    {
        return $this->events_url;
    }
    public function assignees_url() : string
    {
        return $this->assignees_url;
    }
    public function branches_url() : string
    {
        return $this->branches_url;
    }
    public function tags_url() : string
    {
        return $this->tags_url;
    }
    public function blobs_url() : string
    {
        return $this->blobs_url;
    }
    public function git_tags_url() : string
    {
        return $this->git_tags_url;
    }
    public function git_refs_url() : string
    {
        return $this->git_refs_url;
    }
    public function trees_url() : string
    {
        return $this->trees_url;
    }
    public function statuses_url() : string
    {
        return $this->statuses_url;
    }
    public function languages_url() : string
    {
        return $this->languages_url;
    }
    public function stargazers_url() : string
    {
        return $this->stargazers_url;
    }
    public function contributors_url() : string
    {
        return $this->contributors_url;
    }
    public function subscribers_url() : string
    {
        return $this->subscribers_url;
    }
    public function subscription_url() : string
    {
        return $this->subscription_url;
    }
    public function commits_url() : string
    {
        return $this->commits_url;
    }
    public function git_commits_url() : string
    {
        return $this->git_commits_url;
    }
    public function comments_url() : string
    {
        return $this->comments_url;
    }
    public function issue_comment_url() : string
    {
        return $this->issue_comment_url;
    }
    public function contents_url() : string
    {
        return $this->contents_url;
    }
    public function compare_url() : string
    {
        return $this->compare_url;
    }
    public function merges_url() : string
    {
        return $this->merges_url;
    }
    public function archive_url() : string
    {
        return $this->archive_url;
    }
    public function downloads_url() : string
    {
        return $this->downloads_url;
    }
    public function issues_url() : string
    {
        return $this->issues_url;
    }
    public function pulls_url() : string
    {
        return $this->pulls_url;
    }
    public function milestones_url() : string
    {
        return $this->milestones_url;
    }
    public function notifications_url() : string
    {
        return $this->notifications_url;
    }
    public function labels_url() : string
    {
        return $this->labels_url;
    }
    public function releases_url() : string
    {
        return $this->releases_url;
    }
    public function deployments_url() : string
    {
        return $this->deployments_url;
    }
    public function git_url() : string
    {
        return $this->git_url;
    }
    public function ssh_url() : string
    {
        return $this->ssh_url;
    }
    public function clone_url() : string
    {
        return $this->clone_url;
    }
    public function svn_url() : string
    {
        return $this->svn_url;
    }
    public function forks() : int
    {
        return $this->forks;
    }
    public function open_issues() : int
    {
        return $this->open_issues;
    }
    public function watchers() : int
    {
        return $this->watchers;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C2809284B6E54D0D34017715Ffe5636Bd>
     */
    public function topics() : array
    {
        return $this->topics;
    }
    public function mirror_url()
    {
        return $this->mirror_url;
    }
    public function has_issues() : bool
    {
        return $this->has_issues;
    }
    public function has_projects() : bool
    {
        return $this->has_projects;
    }
    public function has_pages() : bool
    {
        return $this->has_pages;
    }
    public function has_wiki() : bool
    {
        return $this->has_wiki;
    }
    public function has_downloads() : bool
    {
        return $this->has_downloads;
    }
    public function has_discussions() : ?bool
    {
        return $this->has_discussions;
    }
    public function archived() : bool
    {
        return $this->archived;
    }
    /**
     * Returns whether or not this repository disabled.
     */
    public function disabled() : bool
    {
        return $this->disabled;
    }
    /**
     * The repository visibility: public, private, or internal.
     */
    public function visibility() : ?string
    {
        return $this->visibility;
    }
    public function license() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C4D5B98B02A5Afea165Db4Daaee5D7217
    {
        return $this->license;
    }
    public function permissions() : ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C205818De09Bc5C97De84B773Be223C26
    {
        return $this->permissions;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C6F1C6Cb8872D75271C982D10D0301D02>
     */
    public function text_matches() : array
    {
        return $this->text_matches;
    }
    public function temp_clone_token() : ?string
    {
        return $this->temp_clone_token;
    }
    public function allow_merge_commit() : ?bool
    {
        return $this->allow_merge_commit;
    }
    public function allow_squash_merge() : ?bool
    {
        return $this->allow_squash_merge;
    }
    public function allow_rebase_merge() : ?bool
    {
        return $this->allow_rebase_merge;
    }
    public function allow_auto_merge() : ?bool
    {
        return $this->allow_auto_merge;
    }
    public function delete_branch_on_merge() : ?bool
    {
        return $this->delete_branch_on_merge;
    }
    public function allow_forking() : ?bool
    {
        return $this->allow_forking;
    }
    public function is_template() : ?bool
    {
        return $this->is_template;
    }
    public function web_commit_signoff_required() : ?bool
    {
        return $this->web_commit_signoff_required;
    }
}
