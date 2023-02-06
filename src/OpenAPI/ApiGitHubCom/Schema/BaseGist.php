<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class BaseGist
{
    public const SCHEMA_JSON = '{"title":"Base Gist","required":["id","node_id","url","forks_url","commits_url","git_pull_url","git_push_url","html_url","comments_url","public","description","comments","user","files","created_at","updated_at"],"type":"object","properties":{"url":{"type":"string","format":"uri"},"forks_url":{"type":"string","format":"uri"},"commits_url":{"type":"string","format":"uri"},"id":{"type":"string"},"node_id":{"type":"string"},"git_pull_url":{"type":"string","format":"uri"},"git_push_url":{"type":"string","format":"uri"},"html_url":{"type":"string","format":"uri"},"files":{"type":"object","additionalProperties":{"type":"object","properties":{"filename":{"type":"string"},"type":{"type":"string"},"language":{"type":"string"},"raw_url":{"type":"string"},"size":{"type":"integer"}}}},"public":{"type":"boolean"},"created_at":{"type":"string","format":"date-time"},"updated_at":{"type":"string","format":"date-time"},"description":{"type":["string","null"]},"comments":{"type":"integer"},"user":{"anyOf":[{"type":"null"},{"title":"Simple User","required":["avatar_url","events_url","followers_url","following_url","gists_url","gravatar_id","html_url","id","node_id","login","organizations_url","received_events_url","repos_url","site_admin","starred_url","subscriptions_url","type","url"],"type":"object","properties":{"name":{"type":["string","null"]},"email":{"type":["string","null"]},"login":{"type":"string","examples":["octocat"]},"id":{"type":"integer","examples":[1]},"node_id":{"type":"string","examples":["MDQ6VXNlcjE="]},"avatar_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif"]},"gravatar_id":{"type":["string","null"],"examples":["41d064eb2195891e12d0413f63227ea7"]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat"]},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat"]},"followers_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/followers"]},"following_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}"]},"gists_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}"]},"starred_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}"]},"subscriptions_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions"]},"organizations_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/orgs"]},"repos_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/repos"]},"events_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}"]},"received_events_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/received_events"]},"type":{"type":"string","examples":["User"]},"site_admin":{"type":"boolean"},"starred_at":{"type":"string","examples":["\\"2020-07-09T00:17:55Z\\""]}},"description":"A GitHub user."}]},"comments_url":{"type":"string","format":"uri"},"owner":{"title":"Simple User","required":["avatar_url","events_url","followers_url","following_url","gists_url","gravatar_id","html_url","id","node_id","login","organizations_url","received_events_url","repos_url","site_admin","starred_url","subscriptions_url","type","url"],"type":"object","properties":{"name":{"type":["string","null"]},"email":{"type":["string","null"]},"login":{"type":"string","examples":["octocat"]},"id":{"type":"integer","examples":[1]},"node_id":{"type":"string","examples":["MDQ6VXNlcjE="]},"avatar_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif"]},"gravatar_id":{"type":["string","null"],"examples":["41d064eb2195891e12d0413f63227ea7"]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat"]},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat"]},"followers_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/followers"]},"following_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}"]},"gists_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}"]},"starred_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}"]},"subscriptions_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions"]},"organizations_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/orgs"]},"repos_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/repos"]},"events_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}"]},"received_events_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/received_events"]},"type":{"type":"string","examples":["User"]},"site_admin":{"type":"boolean"},"starred_at":{"type":"string","examples":["\\"2020-07-09T00:17:55Z\\""]}},"description":"A GitHub user."},"truncated":{"type":"boolean"},"forks":{"type":"array","items":{}},"history":{"type":"array","items":{}}},"description":"Base Gist"}';
    public const SCHEMA_EXAMPLE = '{"owner":{"login":"octocat","id":1,"node_id":"MDQ6VXNlcjE=","avatar_url":"https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif","gravatar_id":"41d064eb2195891e12d0413f63227ea7","url":"https:\\/\\/api.github.com\\/users\\/octocat","html_url":"https:\\/\\/github.com\\/octocat","followers_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/followers","following_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}","gists_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}","starred_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}","subscriptions_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions","organizations_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/orgs","repos_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/repos","events_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}","received_events_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/received_events","type":"User","starred_at":"\\"2020-07-09T00:17:55Z\\""}}';
    public const SCHEMA_TITLE = 'Base Gist';
    public const SCHEMA_DESCRIPTION = 'Base Gist';
    public readonly string $url;
    public readonly string $forks_url;
    public readonly string $commits_url;
    public readonly string $id;
    public readonly string $node_id;
    public readonly string $git_pull_url;
    public readonly string $git_push_url;
    public readonly string $html_url;
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BaseGist\Files $files;
    public readonly bool $public;
    public readonly string $created_at;
    public readonly string $updated_at;
    public readonly ?string $description;
    public readonly int $comments;
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BaseGist\User $user;
    public readonly string $comments_url;
    /**
     * A GitHub user.
     */
    public readonly ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleUser $owner;
    public readonly ?bool $truncated;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BaseGist\Forks>
     */
    public readonly array $forks;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BaseGist\History>
     */
    public readonly array $history;
    /**
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BaseGist\Forks> $forks
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BaseGist\History> $history
     */
    public function __construct(string $url, string $forks_url, string $commits_url, string $id, string $node_id, string $git_pull_url, string $git_push_url, string $html_url, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BaseGist\Files $files, bool $public, string $created_at, string $updated_at, string $description, int $comments, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BaseGist\User $user, string $comments_url, ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleUser $owner, bool $truncated, array $forks, array $history)
    {
        $this->url = $url;
        $this->forks_url = $forks_url;
        $this->commits_url = $commits_url;
        $this->id = $id;
        $this->node_id = $node_id;
        $this->git_pull_url = $git_pull_url;
        $this->git_push_url = $git_push_url;
        $this->html_url = $html_url;
        $this->files = $files;
        $this->public = $public;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
        $this->description = $description;
        $this->comments = $comments;
        $this->user = $user;
        $this->comments_url = $comments_url;
        $this->owner = $owner;
        $this->truncated = $truncated;
        $this->forks = $forks;
        $this->history = $history;
    }
}
