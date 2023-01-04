<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WorkflowRun;

final class HeadRepository
{
    public const SCHEMA_JSON = '{"title":"Repository Lite","required":["archive_url","assignees_url","blobs_url","branches_url","collaborators_url","comments_url","commits_url","compare_url","contents_url","contributors_url","deployments_url","description","downloads_url","events_url","fork","forks_url","full_name","git_commits_url","git_refs_url","git_tags_url","hooks_url","html_url","id","issue_comment_url","issue_events_url","issues_url","keys_url","labels_url","languages_url","merges_url","milestones_url","name","node_id","notifications_url","owner","private","pulls_url","releases_url","stargazers_url","statuses_url","subscribers_url","subscription_url","tags_url","teams_url","trees_url","url"],"type":"object","properties":{"archive_url":{"type":"string","format":"uri-template"},"assignees_url":{"type":"string","format":"uri-template"},"blobs_url":{"type":"string","format":"uri-template"},"branches_url":{"type":"string","format":"uri-template"},"collaborators_url":{"type":"string","format":"uri-template"},"comments_url":{"type":"string","format":"uri-template"},"commits_url":{"type":"string","format":"uri-template"},"compare_url":{"type":"string","format":"uri-template"},"contents_url":{"type":"string","format":"uri-template"},"contributors_url":{"type":"string","format":"uri"},"deployments_url":{"type":"string","format":"uri"},"description":{"type":["string","null"]},"downloads_url":{"type":"string","format":"uri"},"events_url":{"type":"string","format":"uri"},"fork":{"type":"boolean"},"forks_url":{"type":"string","format":"uri"},"full_name":{"type":"string"},"git_commits_url":{"type":"string","format":"uri-template"},"git_refs_url":{"type":"string","format":"uri-template"},"git_tags_url":{"type":"string","format":"uri-template"},"hooks_url":{"type":"string","format":"uri"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer","description":"Unique identifier of the repository"},"issue_comment_url":{"type":"string","format":"uri-template"},"issue_events_url":{"type":"string","format":"uri-template"},"issues_url":{"type":"string","format":"uri-template"},"keys_url":{"type":"string","format":"uri-template"},"labels_url":{"type":"string","format":"uri-template"},"languages_url":{"type":"string","format":"uri"},"merges_url":{"type":"string","format":"uri"},"milestones_url":{"type":"string","format":"uri-template"},"name":{"type":"string","description":"The name of the repository."},"node_id":{"type":"string"},"notifications_url":{"type":"string","format":"uri-template"},"owner":{"title":"User","required":["login","id"],"type":["object","null"],"properties":{"avatar_url":{"type":"string","format":"uri"},"deleted":{"type":"boolean"},"email":{"type":["string","null"]},"events_url":{"type":"string","format":"uri-template"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"gravatar_id":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"login":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization"],"type":"string"},"url":{"type":"string","format":"uri"}}},"private":{"type":"boolean","description":"Whether the repository is private or public."},"pulls_url":{"type":"string","format":"uri-template"},"releases_url":{"type":"string","format":"uri-template"},"stargazers_url":{"type":"string","format":"uri"},"statuses_url":{"type":"string","format":"uri-template"},"subscribers_url":{"type":"string","format":"uri"},"subscription_url":{"type":"string","format":"uri"},"tags_url":{"type":"string","format":"uri"},"teams_url":{"type":"string","format":"uri"},"trees_url":{"type":"string","format":"uri-template"},"url":{"type":"string","format":"uri"}}}';
    public const SCHEMA_TITLE = 'Repository Lite';
    public const SCHEMA_DESCRIPTION = '';
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
    private $description;
    private string $downloads_url;
    private string $events_url;
    private bool $fork;
    private string $forks_url;
    private string $full_name;
    private string $git_commits_url;
    private string $git_refs_url;
    private string $git_tags_url;
    private string $hooks_url;
    private string $html_url;
    /**
     * Unique identifier of the repository
     */
    private int $id;
    private string $issue_comment_url;
    private string $issue_events_url;
    private string $issues_url;
    private string $keys_url;
    private string $labels_url;
    private string $languages_url;
    private string $merges_url;
    private string $milestones_url;
    /**
     * The name of the repository.
     */
    private string $name;
    private string $node_id;
    private string $notifications_url;
    private $owner;
    /**
     * Whether the repository is private or public.
     */
    private bool $private;
    private string $pulls_url;
    private string $releases_url;
    private string $stargazers_url;
    private string $statuses_url;
    private string $subscribers_url;
    private string $subscription_url;
    private string $tags_url;
    private string $teams_url;
    private string $trees_url;
    private string $url;
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
    public function description()
    {
        return $this->description;
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
    public function owner()
    {
        return $this->owner;
    }
    /**
     * Whether the repository is private or public.
     */
    public function private() : bool
    {
        return $this->private;
    }
    public function pulls_url() : string
    {
        return $this->pulls_url;
    }
    public function releases_url() : string
    {
        return $this->releases_url;
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
    public function url() : string
    {
        return $this->url;
    }
}
