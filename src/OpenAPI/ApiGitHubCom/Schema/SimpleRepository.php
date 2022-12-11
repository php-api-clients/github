<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class SimpleRepository
{
    public const SCHEMA_TITLE = 'Simple Repository';
    public const SCHEMA_DESCRIPTION = 'A GitHub repository.';
    /**
     * A unique identifier of the repository.
     */
    private int $id;
    /**
     * The GraphQL identifier of the repository.
     */
    private string $node_id;
    /**
     * The name of the repository.
     */
    private string $name;
    /**
     * The full, globally unique, name of the repository.
     */
    private string $full_name;
    /**
     * A GitHub user.
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleUser::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleUser $owner;
    /**
     * Whether the repository is private.
     */
    private bool $private;
    /**
     * The URL to view the repository on GitHub.com.
     */
    private string $html_url;
    /**
     * The repository description.
     */
    private $description;
    /**
     * Whether the repository is a fork.
     */
    private bool $fork;
    /**
     * The URL to get more information about the repository from the GitHub API.
     */
    private string $url;
    /**
     * A template for the API URL to download the repository as an archive.
     */
    private string $archive_url;
    /**
     * A template for the API URL to list the available assignees for issues in the repository.
     */
    private string $assignees_url;
    /**
     * A template for the API URL to create or retrieve a raw Git blob in the repository.
     */
    private string $blobs_url;
    /**
     * A template for the API URL to get information about branches in the repository.
     */
    private string $branches_url;
    /**
     * A template for the API URL to get information about collaborators of the repository.
     */
    private string $collaborators_url;
    /**
     * A template for the API URL to get information about comments on the repository.
     */
    private string $comments_url;
    /**
     * A template for the API URL to get information about commits on the repository.
     */
    private string $commits_url;
    /**
     * A template for the API URL to compare two commits or refs.
     */
    private string $compare_url;
    /**
     * A template for the API URL to get the contents of the repository.
     */
    private string $contents_url;
    /**
     * A template for the API URL to list the contributors to the repository.
     */
    private string $contributors_url;
    /**
     * The API URL to list the deployments of the repository.
     */
    private string $deployments_url;
    /**
     * The API URL to list the downloads on the repository.
     */
    private string $downloads_url;
    /**
     * The API URL to list the events of the repository.
     */
    private string $events_url;
    /**
     * The API URL to list the forks of the repository.
     */
    private string $forks_url;
    /**
     * A template for the API URL to get information about Git commits of the repository.
     */
    private string $git_commits_url;
    /**
     * A template for the API URL to get information about Git refs of the repository.
     */
    private string $git_refs_url;
    /**
     * A template for the API URL to get information about Git tags of the repository.
     */
    private string $git_tags_url;
    /**
     * A template for the API URL to get information about issue comments on the repository.
     */
    private string $issue_comment_url;
    /**
     * A template for the API URL to get information about issue events on the repository.
     */
    private string $issue_events_url;
    /**
     * A template for the API URL to get information about issues on the repository.
     */
    private string $issues_url;
    /**
     * A template for the API URL to get information about deploy keys on the repository.
     */
    private string $keys_url;
    /**
     * A template for the API URL to get information about labels of the repository.
     */
    private string $labels_url;
    /**
     * The API URL to get information about the languages of the repository.
     */
    private string $languages_url;
    /**
     * The API URL to merge branches in the repository.
     */
    private string $merges_url;
    /**
     * A template for the API URL to get information about milestones of the repository.
     */
    private string $milestones_url;
    /**
     * A template for the API URL to get information about notifications on the repository.
     */
    private string $notifications_url;
    /**
     * A template for the API URL to get information about pull requests on the repository.
     */
    private string $pulls_url;
    /**
     * A template for the API URL to get information about releases on the repository.
     */
    private string $releases_url;
    /**
     * The API URL to list the stargazers on the repository.
     */
    private string $stargazers_url;
    /**
     * A template for the API URL to get information about statuses of a commit.
     */
    private string $statuses_url;
    /**
     * The API URL to list the subscribers on the repository.
     */
    private string $subscribers_url;
    /**
     * The API URL to subscribe to notifications for this repository.
     */
    private string $subscription_url;
    /**
     * The API URL to get information about tags on the repository.
     */
    private string $tags_url;
    /**
     * The API URL to list the teams on the repository.
     */
    private string $teams_url;
    /**
     * A template for the API URL to create or retrieve a raw Git tree of the repository.
     */
    private string $trees_url;
    /**
     * The API URL to list the hooks on the repository.
     */
    private string $hooks_url;
    /**
     * A unique identifier of the repository.
     */
    public function id() : int
    {
        return $this->id;
    }
    /**
     * The GraphQL identifier of the repository.
     */
    public function node_id() : string
    {
        return $this->node_id;
    }
    /**
     * The name of the repository.
     */
    public function name() : string
    {
        return $this->name;
    }
    /**
     * The full, globally unique, name of the repository.
     */
    public function full_name() : string
    {
        return $this->full_name;
    }
    /**
     * A GitHub user.
     */
    public function owner() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleUser
    {
        return $this->owner;
    }
    /**
     * Whether the repository is private.
     */
    public function private() : bool
    {
        return $this->private;
    }
    /**
     * The URL to view the repository on GitHub.com.
     */
    public function html_url() : string
    {
        return $this->html_url;
    }
    /**
     * The repository description.
     */
    public function description()
    {
        return $this->description;
    }
    /**
     * Whether the repository is a fork.
     */
    public function fork() : bool
    {
        return $this->fork;
    }
    /**
     * The URL to get more information about the repository from the GitHub API.
     */
    public function url() : string
    {
        return $this->url;
    }
    /**
     * A template for the API URL to download the repository as an archive.
     */
    public function archive_url() : string
    {
        return $this->archive_url;
    }
    /**
     * A template for the API URL to list the available assignees for issues in the repository.
     */
    public function assignees_url() : string
    {
        return $this->assignees_url;
    }
    /**
     * A template for the API URL to create or retrieve a raw Git blob in the repository.
     */
    public function blobs_url() : string
    {
        return $this->blobs_url;
    }
    /**
     * A template for the API URL to get information about branches in the repository.
     */
    public function branches_url() : string
    {
        return $this->branches_url;
    }
    /**
     * A template for the API URL to get information about collaborators of the repository.
     */
    public function collaborators_url() : string
    {
        return $this->collaborators_url;
    }
    /**
     * A template for the API URL to get information about comments on the repository.
     */
    public function comments_url() : string
    {
        return $this->comments_url;
    }
    /**
     * A template for the API URL to get information about commits on the repository.
     */
    public function commits_url() : string
    {
        return $this->commits_url;
    }
    /**
     * A template for the API URL to compare two commits or refs.
     */
    public function compare_url() : string
    {
        return $this->compare_url;
    }
    /**
     * A template for the API URL to get the contents of the repository.
     */
    public function contents_url() : string
    {
        return $this->contents_url;
    }
    /**
     * A template for the API URL to list the contributors to the repository.
     */
    public function contributors_url() : string
    {
        return $this->contributors_url;
    }
    /**
     * The API URL to list the deployments of the repository.
     */
    public function deployments_url() : string
    {
        return $this->deployments_url;
    }
    /**
     * The API URL to list the downloads on the repository.
     */
    public function downloads_url() : string
    {
        return $this->downloads_url;
    }
    /**
     * The API URL to list the events of the repository.
     */
    public function events_url() : string
    {
        return $this->events_url;
    }
    /**
     * The API URL to list the forks of the repository.
     */
    public function forks_url() : string
    {
        return $this->forks_url;
    }
    /**
     * A template for the API URL to get information about Git commits of the repository.
     */
    public function git_commits_url() : string
    {
        return $this->git_commits_url;
    }
    /**
     * A template for the API URL to get information about Git refs of the repository.
     */
    public function git_refs_url() : string
    {
        return $this->git_refs_url;
    }
    /**
     * A template for the API URL to get information about Git tags of the repository.
     */
    public function git_tags_url() : string
    {
        return $this->git_tags_url;
    }
    /**
     * A template for the API URL to get information about issue comments on the repository.
     */
    public function issue_comment_url() : string
    {
        return $this->issue_comment_url;
    }
    /**
     * A template for the API URL to get information about issue events on the repository.
     */
    public function issue_events_url() : string
    {
        return $this->issue_events_url;
    }
    /**
     * A template for the API URL to get information about issues on the repository.
     */
    public function issues_url() : string
    {
        return $this->issues_url;
    }
    /**
     * A template for the API URL to get information about deploy keys on the repository.
     */
    public function keys_url() : string
    {
        return $this->keys_url;
    }
    /**
     * A template for the API URL to get information about labels of the repository.
     */
    public function labels_url() : string
    {
        return $this->labels_url;
    }
    /**
     * The API URL to get information about the languages of the repository.
     */
    public function languages_url() : string
    {
        return $this->languages_url;
    }
    /**
     * The API URL to merge branches in the repository.
     */
    public function merges_url() : string
    {
        return $this->merges_url;
    }
    /**
     * A template for the API URL to get information about milestones of the repository.
     */
    public function milestones_url() : string
    {
        return $this->milestones_url;
    }
    /**
     * A template for the API URL to get information about notifications on the repository.
     */
    public function notifications_url() : string
    {
        return $this->notifications_url;
    }
    /**
     * A template for the API URL to get information about pull requests on the repository.
     */
    public function pulls_url() : string
    {
        return $this->pulls_url;
    }
    /**
     * A template for the API URL to get information about releases on the repository.
     */
    public function releases_url() : string
    {
        return $this->releases_url;
    }
    /**
     * The API URL to list the stargazers on the repository.
     */
    public function stargazers_url() : string
    {
        return $this->stargazers_url;
    }
    /**
     * A template for the API URL to get information about statuses of a commit.
     */
    public function statuses_url() : string
    {
        return $this->statuses_url;
    }
    /**
     * The API URL to list the subscribers on the repository.
     */
    public function subscribers_url() : string
    {
        return $this->subscribers_url;
    }
    /**
     * The API URL to subscribe to notifications for this repository.
     */
    public function subscription_url() : string
    {
        return $this->subscription_url;
    }
    /**
     * The API URL to get information about tags on the repository.
     */
    public function tags_url() : string
    {
        return $this->tags_url;
    }
    /**
     * The API URL to list the teams on the repository.
     */
    public function teams_url() : string
    {
        return $this->teams_url;
    }
    /**
     * A template for the API URL to create or retrieve a raw Git tree of the repository.
     */
    public function trees_url() : string
    {
        return $this->trees_url;
    }
    /**
     * The API URL to list the hooks on the repository.
     */
    public function hooks_url() : string
    {
        return $this->hooks_url;
    }
}
