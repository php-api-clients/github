<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class SimpleRepository
{
    public const SCHEMA_JSON = '{"title":"Simple Repository","required":["archive_url","assignees_url","blobs_url","branches_url","collaborators_url","comments_url","commits_url","compare_url","contents_url","contributors_url","deployments_url","description","downloads_url","events_url","fork","forks_url","full_name","git_commits_url","git_refs_url","git_tags_url","hooks_url","html_url","id","node_id","issue_comment_url","issue_events_url","issues_url","keys_url","labels_url","languages_url","merges_url","milestones_url","name","notifications_url","owner","private","pulls_url","releases_url","stargazers_url","statuses_url","subscribers_url","subscription_url","tags_url","teams_url","trees_url","url"],"type":"object","properties":{"id":{"type":"integer","description":"A unique identifier of the repository.","examples":[1296269]},"node_id":{"type":"string","description":"The GraphQL identifier of the repository.","examples":["MDEwOlJlcG9zaXRvcnkxMjk2MjY5"]},"name":{"type":"string","description":"The name of the repository.","examples":["Hello-World"]},"full_name":{"type":"string","description":"The full, globally unique, name of the repository.","examples":["octocat\\/Hello-World"]},"owner":{"title":"Simple User","required":["avatar_url","events_url","followers_url","following_url","gists_url","gravatar_id","html_url","id","node_id","login","organizations_url","received_events_url","repos_url","site_admin","starred_url","subscriptions_url","type","url"],"type":"object","properties":{"name":{"type":["string","null"]},"email":{"type":["string","null"]},"login":{"type":"string","examples":["octocat"]},"id":{"type":"integer","examples":[1]},"node_id":{"type":"string","examples":["MDQ6VXNlcjE="]},"avatar_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif"]},"gravatar_id":{"type":["string","null"],"examples":["41d064eb2195891e12d0413f63227ea7"]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat"]},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat"]},"followers_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/followers"]},"following_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}"]},"gists_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}"]},"starred_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}"]},"subscriptions_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions"]},"organizations_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/orgs"]},"repos_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/repos"]},"events_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}"]},"received_events_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/received_events"]},"type":{"type":"string","examples":["User"]},"site_admin":{"type":"boolean"},"starred_at":{"type":"string","examples":["\\"2020-07-09T00:17:55Z\\""]}},"description":"A GitHub user."},"private":{"type":"boolean","description":"Whether the repository is private."},"html_url":{"type":"string","description":"The URL to view the repository on GitHub.com.","format":"uri","examples":["https:\\/\\/github.com\\/octocat\\/Hello-World"]},"description":{"type":["string","null"],"description":"The repository description.","examples":["This your first repo!"]},"fork":{"type":"boolean","description":"Whether the repository is a fork."},"url":{"type":"string","description":"The URL to get more information about the repository from the GitHub API.","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World"]},"archive_url":{"type":"string","description":"A template for the API URL to download the repository as an archive.","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/{archive_format}{\\/ref}"]},"assignees_url":{"type":"string","description":"A template for the API URL to list the available assignees for issues in the repository.","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/assignees{\\/user}"]},"blobs_url":{"type":"string","description":"A template for the API URL to create or retrieve a raw Git blob in the repository.","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/blobs{\\/sha}"]},"branches_url":{"type":"string","description":"A template for the API URL to get information about branches in the repository.","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/branches{\\/branch}"]},"collaborators_url":{"type":"string","description":"A template for the API URL to get information about collaborators of the repository.","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/collaborators{\\/collaborator}"]},"comments_url":{"type":"string","description":"A template for the API URL to get information about comments on the repository.","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/comments{\\/number}"]},"commits_url":{"type":"string","description":"A template for the API URL to get information about commits on the repository.","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/commits{\\/sha}"]},"compare_url":{"type":"string","description":"A template for the API URL to compare two commits or refs.","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/compare\\/{base}...{head}"]},"contents_url":{"type":"string","description":"A template for the API URL to get the contents of the repository.","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/contents\\/{+path}"]},"contributors_url":{"type":"string","description":"A template for the API URL to list the contributors to the repository.","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/contributors"]},"deployments_url":{"type":"string","description":"The API URL to list the deployments of the repository.","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/deployments"]},"downloads_url":{"type":"string","description":"The API URL to list the downloads on the repository.","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/downloads"]},"events_url":{"type":"string","description":"The API URL to list the events of the repository.","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/events"]},"forks_url":{"type":"string","description":"The API URL to list the forks of the repository.","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/forks"]},"git_commits_url":{"type":"string","description":"A template for the API URL to get information about Git commits of the repository.","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/commits{\\/sha}"]},"git_refs_url":{"type":"string","description":"A template for the API URL to get information about Git refs of the repository.","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/refs{\\/sha}"]},"git_tags_url":{"type":"string","description":"A template for the API URL to get information about Git tags of the repository.","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/tags{\\/sha}"]},"issue_comment_url":{"type":"string","description":"A template for the API URL to get information about issue comments on the repository.","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/issues\\/comments{\\/number}"]},"issue_events_url":{"type":"string","description":"A template for the API URL to get information about issue events on the repository.","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/issues\\/events{\\/number}"]},"issues_url":{"type":"string","description":"A template for the API URL to get information about issues on the repository.","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/issues{\\/number}"]},"keys_url":{"type":"string","description":"A template for the API URL to get information about deploy keys on the repository.","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/keys{\\/key_id}"]},"labels_url":{"type":"string","description":"A template for the API URL to get information about labels of the repository.","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/labels{\\/name}"]},"languages_url":{"type":"string","description":"The API URL to get information about the languages of the repository.","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/languages"]},"merges_url":{"type":"string","description":"The API URL to merge branches in the repository.","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/merges"]},"milestones_url":{"type":"string","description":"A template for the API URL to get information about milestones of the repository.","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/milestones{\\/number}"]},"notifications_url":{"type":"string","description":"A template for the API URL to get information about notifications on the repository.","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/notifications{?since,all,participating}"]},"pulls_url":{"type":"string","description":"A template for the API URL to get information about pull requests on the repository.","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/pulls{\\/number}"]},"releases_url":{"type":"string","description":"A template for the API URL to get information about releases on the repository.","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/releases{\\/id}"]},"stargazers_url":{"type":"string","description":"The API URL to list the stargazers on the repository.","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/stargazers"]},"statuses_url":{"type":"string","description":"A template for the API URL to get information about statuses of a commit.","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/statuses\\/{sha}"]},"subscribers_url":{"type":"string","description":"The API URL to list the subscribers on the repository.","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/subscribers"]},"subscription_url":{"type":"string","description":"The API URL to subscribe to notifications for this repository.","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/subscription"]},"tags_url":{"type":"string","description":"The API URL to get information about tags on the repository.","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/tags"]},"teams_url":{"type":"string","description":"The API URL to list the teams on the repository.","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/teams"]},"trees_url":{"type":"string","description":"A template for the API URL to create or retrieve a raw Git tree of the repository.","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/trees{\\/sha}"]},"hooks_url":{"type":"string","description":"The API URL to list the hooks on the repository.","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/hooks"]}},"description":"A GitHub repository."}';
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
    private ?string $description;
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
    public function description() : ?string
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
