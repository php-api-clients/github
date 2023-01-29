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
    public readonly int $id;
    /**
     * The GraphQL identifier of the repository.
     */
    public readonly string $node_id;
    /**
     * The name of the repository.
     */
    public readonly string $name;
    /**
     * The full, globally unique, name of the repository.
     */
    public readonly string $full_name;
    /**
     * A GitHub user.
     */
    public readonly array $owner;
    /**
     * Whether the repository is private.
     */
    public readonly bool $private;
    /**
     * The URL to view the repository on GitHub.com.
     */
    public readonly string $html_url;
    /**
     * The repository description.
     */
    public readonly ?string $description;
    /**
     * Whether the repository is a fork.
     */
    public readonly bool $fork;
    /**
     * The URL to get more information about the repository from the GitHub API.
     */
    public readonly string $url;
    /**
     * A template for the API URL to download the repository as an archive.
     */
    public readonly string $archive_url;
    /**
     * A template for the API URL to list the available assignees for issues in the repository.
     */
    public readonly string $assignees_url;
    /**
     * A template for the API URL to create or retrieve a raw Git blob in the repository.
     */
    public readonly string $blobs_url;
    /**
     * A template for the API URL to get information about branches in the repository.
     */
    public readonly string $branches_url;
    /**
     * A template for the API URL to get information about collaborators of the repository.
     */
    public readonly string $collaborators_url;
    /**
     * A template for the API URL to get information about comments on the repository.
     */
    public readonly string $comments_url;
    /**
     * A template for the API URL to get information about commits on the repository.
     */
    public readonly string $commits_url;
    /**
     * A template for the API URL to compare two commits or refs.
     */
    public readonly string $compare_url;
    /**
     * A template for the API URL to get the contents of the repository.
     */
    public readonly string $contents_url;
    /**
     * A template for the API URL to list the contributors to the repository.
     */
    public readonly string $contributors_url;
    /**
     * The API URL to list the deployments of the repository.
     */
    public readonly string $deployments_url;
    /**
     * The API URL to list the downloads on the repository.
     */
    public readonly string $downloads_url;
    /**
     * The API URL to list the events of the repository.
     */
    public readonly string $events_url;
    /**
     * The API URL to list the forks of the repository.
     */
    public readonly string $forks_url;
    /**
     * A template for the API URL to get information about Git commits of the repository.
     */
    public readonly string $git_commits_url;
    /**
     * A template for the API URL to get information about Git refs of the repository.
     */
    public readonly string $git_refs_url;
    /**
     * A template for the API URL to get information about Git tags of the repository.
     */
    public readonly string $git_tags_url;
    /**
     * A template for the API URL to get information about issue comments on the repository.
     */
    public readonly string $issue_comment_url;
    /**
     * A template for the API URL to get information about issue events on the repository.
     */
    public readonly string $issue_events_url;
    /**
     * A template for the API URL to get information about issues on the repository.
     */
    public readonly string $issues_url;
    /**
     * A template for the API URL to get information about deploy keys on the repository.
     */
    public readonly string $keys_url;
    /**
     * A template for the API URL to get information about labels of the repository.
     */
    public readonly string $labels_url;
    /**
     * The API URL to get information about the languages of the repository.
     */
    public readonly string $languages_url;
    /**
     * The API URL to merge branches in the repository.
     */
    public readonly string $merges_url;
    /**
     * A template for the API URL to get information about milestones of the repository.
     */
    public readonly string $milestones_url;
    /**
     * A template for the API URL to get information about notifications on the repository.
     */
    public readonly string $notifications_url;
    /**
     * A template for the API URL to get information about pull requests on the repository.
     */
    public readonly string $pulls_url;
    /**
     * A template for the API URL to get information about releases on the repository.
     */
    public readonly string $releases_url;
    /**
     * The API URL to list the stargazers on the repository.
     */
    public readonly string $stargazers_url;
    /**
     * A template for the API URL to get information about statuses of a commit.
     */
    public readonly string $statuses_url;
    /**
     * The API URL to list the subscribers on the repository.
     */
    public readonly string $subscribers_url;
    /**
     * The API URL to subscribe to notifications for this repository.
     */
    public readonly string $subscription_url;
    /**
     * The API URL to get information about tags on the repository.
     */
    public readonly string $tags_url;
    /**
     * The API URL to list the teams on the repository.
     */
    public readonly string $teams_url;
    /**
     * A template for the API URL to create or retrieve a raw Git tree of the repository.
     */
    public readonly string $trees_url;
    /**
     * The API URL to list the hooks on the repository.
     */
    public readonly string $hooks_url;
    public function __construct(int $id, string $node_id, string $name, string $full_name, array $owner, bool $private, string $html_url, string $description, bool $fork, string $url, string $archive_url, string $assignees_url, string $blobs_url, string $branches_url, string $collaborators_url, string $comments_url, string $commits_url, string $compare_url, string $contents_url, string $contributors_url, string $deployments_url, string $downloads_url, string $events_url, string $forks_url, string $git_commits_url, string $git_refs_url, string $git_tags_url, string $issue_comment_url, string $issue_events_url, string $issues_url, string $keys_url, string $labels_url, string $languages_url, string $merges_url, string $milestones_url, string $notifications_url, string $pulls_url, string $releases_url, string $stargazers_url, string $statuses_url, string $subscribers_url, string $subscription_url, string $tags_url, string $teams_url, string $trees_url, string $hooks_url)
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
        $this->stargazers_url = $stargazers_url;
        $this->statuses_url = $statuses_url;
        $this->subscribers_url = $subscribers_url;
        $this->subscription_url = $subscription_url;
        $this->tags_url = $tags_url;
        $this->teams_url = $teams_url;
        $this->trees_url = $trees_url;
        $this->hooks_url = $hooks_url;
    }
}
