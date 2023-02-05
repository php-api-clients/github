<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class PageBuild
{
    public const SCHEMA_JSON = '{"title":"Page Build","required":["url","status","error","pusher","commit","duration","created_at","updated_at"],"type":"object","properties":{"url":{"type":"string","format":"uri"},"status":{"type":"string"},"error":{"required":["message"],"type":"object","properties":{"message":{"type":["string","null"]}}},"pusher":{"anyOf":[{"type":"null"},{"title":"Simple User","required":["avatar_url","events_url","followers_url","following_url","gists_url","gravatar_id","html_url","id","node_id","login","organizations_url","received_events_url","repos_url","site_admin","starred_url","subscriptions_url","type","url"],"type":"object","properties":{"name":{"type":["string","null"]},"email":{"type":["string","null"]},"login":{"type":"string","examples":["octocat"]},"id":{"type":"integer","examples":[1]},"node_id":{"type":"string","examples":["MDQ6VXNlcjE="]},"avatar_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif"]},"gravatar_id":{"type":["string","null"],"examples":["41d064eb2195891e12d0413f63227ea7"]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat"]},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat"]},"followers_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/followers"]},"following_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}"]},"gists_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}"]},"starred_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}"]},"subscriptions_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions"]},"organizations_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/orgs"]},"repos_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/repos"]},"events_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}"]},"received_events_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/received_events"]},"type":{"type":"string","examples":["User"]},"site_admin":{"type":"boolean"},"starred_at":{"type":"string","examples":["\\"2020-07-09T00:17:55Z\\""]}},"description":"A GitHub user."}]},"commit":{"type":"string"},"duration":{"type":"integer"},"created_at":{"type":"string","format":"date-time"},"updated_at":{"type":"string","format":"date-time"}},"description":"Page Build"}';
    public const SCHEMA_TITLE = 'Page Build';
    public const SCHEMA_DESCRIPTION = 'Page Build';
    public readonly string $url;
    public readonly string $status;
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PageBuild\Error $error;
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PageBuild\Pusher $pusher;
    public readonly string $commit;
    public readonly int $duration;
    public readonly string $created_at;
    public readonly string $updated_at;
    public function __construct(string $url, string $status, object $error, mixed $pusher, string $commit, int $duration, string $created_at, string $updated_at)
    {
        $this->url = $url;
        $this->status = $status;
        $this->error = $error;
        $this->pusher = $pusher;
        $this->commit = $commit;
        $this->duration = $duration;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
    }
}
