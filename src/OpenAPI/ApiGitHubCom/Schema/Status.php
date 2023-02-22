<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final readonly class Status
{
    public const SCHEMA_JSON = '{"title":"Status","required":["url","avatar_url","id","node_id","state","description","target_url","context","created_at","updated_at","creator"],"type":"object","properties":{"url":{"type":"string"},"avatar_url":{"type":["string","null"]},"id":{"type":"integer"},"node_id":{"type":"string"},"state":{"type":"string"},"description":{"type":["string","null"]},"target_url":{"type":["string","null"]},"context":{"type":"string"},"created_at":{"type":"string"},"updated_at":{"type":"string"},"creator":{"anyOf":[{"type":"null"},{"title":"Simple User","required":["avatar_url","events_url","followers_url","following_url","gists_url","gravatar_id","html_url","id","node_id","login","organizations_url","received_events_url","repos_url","site_admin","starred_url","subscriptions_url","type","url"],"type":"object","properties":{"name":{"type":["string","null"]},"email":{"type":["string","null"]},"login":{"type":"string","examples":["octocat"]},"id":{"type":"integer","examples":[1]},"node_id":{"type":"string","examples":["MDQ6VXNlcjE="]},"avatar_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif"]},"gravatar_id":{"type":["string","null"],"examples":["41d064eb2195891e12d0413f63227ea7"]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat"]},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat"]},"followers_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/followers"]},"following_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}"]},"gists_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}"]},"starred_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}"]},"subscriptions_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions"]},"organizations_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/orgs"]},"repos_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/repos"]},"events_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}"]},"received_events_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/received_events"]},"type":{"type":"string","examples":["User"]},"site_admin":{"type":"boolean"},"starred_at":{"type":"string","examples":["\\"2020-07-09T00:17:55Z\\""]}},"description":"A GitHub user."}]}},"description":"The status of a commit."}';
    public const SCHEMA_TITLE = 'Status';
    public const SCHEMA_DESCRIPTION = 'The status of a commit.';
    public ?string $url;
    public ?string $avatar_url;
    public ?int $id;
    public ?string $node_id;
    public ?string $state;
    public ?string $description;
    public ?string $target_url;
    public ?string $context;
    public ?string $created_at;
    public ?string $updated_at;
    public mixed $creator;
    public function __construct(string $url, string $avatar_url, int $id, string $node_id, string $state, string $description, string $target_url, string $context, string $created_at, string $updated_at, mixed $creator)
    {
        $this->url = $url;
        $this->avatar_url = $avatar_url;
        $this->id = $id;
        $this->node_id = $node_id;
        $this->state = $state;
        $this->description = $description;
        $this->target_url = $target_url;
        $this->context = $context;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
        $this->creator = $creator;
    }
}
