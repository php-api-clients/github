<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class GistCommit
{
    public const SCHEMA_JSON = '{"title":"Gist Commit","required":["url","user","version","committed_at","change_status"],"type":"object","properties":{"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/gists\\/aa5a315d61ae9438b18d\\/57a7f021a713b1c5a6a199b54cc514735d2d462f"]},"version":{"type":"string","examples":["57a7f021a713b1c5a6a199b54cc514735d2d462f"]},"user":{"anyOf":[{"type":"null"},{"title":"Simple User","required":["avatar_url","events_url","followers_url","following_url","gists_url","gravatar_id","html_url","id","node_id","login","organizations_url","received_events_url","repos_url","site_admin","starred_url","subscriptions_url","type","url"],"type":"object","properties":{"name":{"type":["string","null"]},"email":{"type":["string","null"]},"login":{"type":"string","examples":["octocat"]},"id":{"type":"integer","examples":[1]},"node_id":{"type":"string","examples":["MDQ6VXNlcjE="]},"avatar_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif"]},"gravatar_id":{"type":["string","null"],"examples":["41d064eb2195891e12d0413f63227ea7"]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat"]},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat"]},"followers_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/followers"]},"following_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}"]},"gists_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}"]},"starred_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}"]},"subscriptions_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions"]},"organizations_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/orgs"]},"repos_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/repos"]},"events_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}"]},"received_events_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/received_events"]},"type":{"type":"string","examples":["User"]},"site_admin":{"type":"boolean"},"starred_at":{"type":"string","examples":["\\"2020-07-09T00:17:55Z\\""]}},"description":"A GitHub user."}]},"change_status":{"type":"object","properties":{"total":{"type":"integer"},"additions":{"type":"integer"},"deletions":{"type":"integer"}}},"committed_at":{"type":"string","format":"date-time","examples":["2010-04-14T02:15:15Z"]}},"description":"Gist Commit"}';
    public const SCHEMA_EXAMPLE = '{"url":"https:\\/\\/api.github.com\\/gists\\/aa5a315d61ae9438b18d\\/57a7f021a713b1c5a6a199b54cc514735d2d462f","version":"57a7f021a713b1c5a6a199b54cc514735d2d462f","committed_at":"2010-04-14T02:15:15Z"}';
    public const SCHEMA_TITLE = 'Gist Commit';
    public const SCHEMA_DESCRIPTION = 'Gist Commit';
    public readonly string $url;
    public readonly string $version;
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GistCommit\User $user;
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GistCommit\ChangeStatus $change_status;
    public readonly string $committed_at;
    public function __construct(string $url, string $version, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GistCommit\User $user, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GistCommit\ChangeStatus $change_status, string $committed_at)
    {
        $this->url = $url;
        $this->version = $version;
        $this->user = $user;
        $this->change_status = $change_status;
        $this->committed_at = $committed_at;
    }
}
