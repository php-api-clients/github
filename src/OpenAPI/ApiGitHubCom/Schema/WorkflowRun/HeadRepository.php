<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WorkflowRun;

final class HeadRepository
{
    public const SCHEMA_JSON = '{"title":"Repository Lite","required":["archive_url","assignees_url","blobs_url","branches_url","collaborators_url","comments_url","commits_url","compare_url","contents_url","contributors_url","deployments_url","description","downloads_url","events_url","fork","forks_url","full_name","git_commits_url","git_refs_url","git_tags_url","hooks_url","html_url","id","issue_comment_url","issue_events_url","issues_url","keys_url","labels_url","languages_url","merges_url","milestones_url","name","node_id","notifications_url","owner","private","pulls_url","releases_url","stargazers_url","statuses_url","subscribers_url","subscription_url","tags_url","teams_url","trees_url","url"],"type":"object","properties":{"archive_url":{"type":"string","format":"uri-template"},"assignees_url":{"type":"string","format":"uri-template"},"blobs_url":{"type":"string","format":"uri-template"},"branches_url":{"type":"string","format":"uri-template"},"collaborators_url":{"type":"string","format":"uri-template"},"comments_url":{"type":"string","format":"uri-template"},"commits_url":{"type":"string","format":"uri-template"},"compare_url":{"type":"string","format":"uri-template"},"contents_url":{"type":"string","format":"uri-template"},"contributors_url":{"type":"string","format":"uri"},"deployments_url":{"type":"string","format":"uri"},"description":{"type":["string","null"]},"downloads_url":{"type":"string","format":"uri"},"events_url":{"type":"string","format":"uri"},"fork":{"type":"boolean"},"forks_url":{"type":"string","format":"uri"},"full_name":{"type":"string"},"git_commits_url":{"type":"string","format":"uri-template"},"git_refs_url":{"type":"string","format":"uri-template"},"git_tags_url":{"type":"string","format":"uri-template"},"hooks_url":{"type":"string","format":"uri"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer","description":"Unique identifier of the repository"},"issue_comment_url":{"type":"string","format":"uri-template"},"issue_events_url":{"type":"string","format":"uri-template"},"issues_url":{"type":"string","format":"uri-template"},"keys_url":{"type":"string","format":"uri-template"},"labels_url":{"type":"string","format":"uri-template"},"languages_url":{"type":"string","format":"uri"},"merges_url":{"type":"string","format":"uri"},"milestones_url":{"type":"string","format":"uri-template"},"name":{"type":"string","description":"The name of the repository."},"node_id":{"type":"string"},"notifications_url":{"type":"string","format":"uri-template"},"owner":{"title":"User","required":["login","id"],"type":["object","null"],"properties":{"avatar_url":{"type":"string","format":"uri"},"deleted":{"type":"boolean"},"email":{"type":["string","null"]},"events_url":{"type":"string","format":"uri-template"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"gravatar_id":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"login":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization"],"type":"string"},"url":{"type":"string","format":"uri"}}},"private":{"type":"boolean","description":"Whether the repository is private or public."},"pulls_url":{"type":"string","format":"uri-template"},"releases_url":{"type":"string","format":"uri-template"},"stargazers_url":{"type":"string","format":"uri"},"statuses_url":{"type":"string","format":"uri-template"},"subscribers_url":{"type":"string","format":"uri"},"subscription_url":{"type":"string","format":"uri"},"tags_url":{"type":"string","format":"uri"},"teams_url":{"type":"string","format":"uri"},"trees_url":{"type":"string","format":"uri-template"},"url":{"type":"string","format":"uri"}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'Repository Lite';
    public const SCHEMA_DESCRIPTION = '';
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
    public readonly ?string $description;
    public readonly string $downloads_url;
    public readonly string $events_url;
    public readonly bool $fork;
    public readonly string $forks_url;
    public readonly string $full_name;
    public readonly string $git_commits_url;
    public readonly string $git_refs_url;
    public readonly string $git_tags_url;
    public readonly string $hooks_url;
    public readonly string $html_url;
    /**
     * Unique identifier of the repository
     */
    public readonly int $id;
    public readonly string $issue_comment_url;
    public readonly string $issue_events_url;
    public readonly string $issues_url;
    public readonly string $keys_url;
    public readonly string $labels_url;
    public readonly string $languages_url;
    public readonly string $merges_url;
    public readonly string $milestones_url;
    /**
     * The name of the repository.
     */
    public readonly string $name;
    public readonly string $node_id;
    public readonly string $notifications_url;
    public readonly ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\HeadRepository\Owner $owner;
    /**
     * Whether the repository is private or public.
     */
    public readonly bool $private;
    public readonly string $pulls_url;
    public readonly string $releases_url;
    public readonly string $stargazers_url;
    public readonly string $statuses_url;
    public readonly string $subscribers_url;
    public readonly string $subscription_url;
    public readonly string $tags_url;
    public readonly string $teams_url;
    public readonly string $trees_url;
    public readonly string $url;
    public function __construct(string $archive_url, string $assignees_url, string $blobs_url, string $branches_url, string $collaborators_url, string $comments_url, string $commits_url, string $compare_url, string $contents_url, string $contributors_url, string $deployments_url, string $description, string $downloads_url, string $events_url, bool $fork, string $forks_url, string $full_name, string $git_commits_url, string $git_refs_url, string $git_tags_url, string $hooks_url, string $html_url, int $id, string $issue_comment_url, string $issue_events_url, string $issues_url, string $keys_url, string $labels_url, string $languages_url, string $merges_url, string $milestones_url, string $name, string $node_id, string $notifications_url, ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\HeadRepository\Owner $owner, bool $private, string $pulls_url, string $releases_url, string $stargazers_url, string $statuses_url, string $subscribers_url, string $subscription_url, string $tags_url, string $teams_url, string $trees_url, string $url)
    {
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
        $this->description = $description;
        $this->downloads_url = $downloads_url;
        $this->events_url = $events_url;
        $this->fork = $fork;
        $this->forks_url = $forks_url;
        $this->full_name = $full_name;
        $this->git_commits_url = $git_commits_url;
        $this->git_refs_url = $git_refs_url;
        $this->git_tags_url = $git_tags_url;
        $this->hooks_url = $hooks_url;
        $this->html_url = $html_url;
        $this->id = $id;
        $this->issue_comment_url = $issue_comment_url;
        $this->issue_events_url = $issue_events_url;
        $this->issues_url = $issues_url;
        $this->keys_url = $keys_url;
        $this->labels_url = $labels_url;
        $this->languages_url = $languages_url;
        $this->merges_url = $merges_url;
        $this->milestones_url = $milestones_url;
        $this->name = $name;
        $this->node_id = $node_id;
        $this->notifications_url = $notifications_url;
        $this->owner = $owner;
        $this->private = $private;
        $this->pulls_url = $pulls_url;
        $this->releases_url = $releases_url;
        $this->stargazers_url = $stargazers_url;
        $this->statuses_url = $statuses_url;
        $this->subscribers_url = $subscribers_url;
        $this->subscription_url = $subscription_url;
        $this->tags_url = $tags_url;
        $this->teams_url = $teams_url;
        $this->trees_url = $trees_url;
        $this->url = $url;
    }
}
