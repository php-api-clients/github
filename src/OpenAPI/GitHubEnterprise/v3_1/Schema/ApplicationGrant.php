<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema;

final class ApplicationGrant
{
    public const SCHEMA_JSON = '{"title":"Application Grant","required":["app","id","scopes","url","created_at","updated_at"],"type":"object","properties":{"id":{"type":"integer","examples":[1]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/applications\\/grants\\/1"]},"app":{"required":["client_id","name","url"],"type":"object","properties":{"client_id":{"type":"string"},"name":{"type":"string"},"url":{"type":"string","format":"uri"}}},"created_at":{"type":"string","format":"date-time","examples":["2011-09-06T17:26:27Z"]},"updated_at":{"type":"string","format":"date-time","examples":["2011-09-06T20:39:23Z"]},"scopes":{"type":"array","items":{"type":"string"},"examples":["public_repo"]},"user":{"anyOf":[{"type":"null"},{"title":"Simple User","required":["avatar_url","events_url","followers_url","following_url","gists_url","gravatar_id","html_url","id","node_id","login","organizations_url","received_events_url","repos_url","site_admin","starred_url","subscriptions_url","type","url"],"type":"object","properties":{"name":{"type":["string","null"]},"email":{"type":["string","null"]},"login":{"type":"string","examples":["octocat"]},"id":{"type":"integer","examples":[1]},"node_id":{"type":"string","examples":["MDQ6VXNlcjE="]},"avatar_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif"]},"gravatar_id":{"type":["string","null"],"examples":["41d064eb2195891e12d0413f63227ea7"]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat"]},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat"]},"followers_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/followers"]},"following_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}"]},"gists_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}"]},"starred_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}"]},"subscriptions_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions"]},"organizations_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/orgs"]},"repos_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/repos"]},"events_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}"]},"received_events_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/received_events"]},"type":{"type":"string","examples":["User"]},"site_admin":{"type":"boolean"},"starred_at":{"type":"string","examples":["\\"2020-07-09T00:17:55Z\\""]}},"description":"Simple User"}]}},"description":"The authorization associated with an OAuth Access."}';
    public const SCHEMA_TITLE = 'Application Grant';
    public const SCHEMA_DESCRIPTION = 'The authorization associated with an OAuth Access.';
    private int $id;
    private string $url;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ApplicationGrant\App::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ApplicationGrant\App $app;
    private string $created_at;
    private string $updated_at;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ApplicationGrant\Scopes>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ApplicationGrant\Scopes::class)
     */
    private array $scopes = array();
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ApplicationGrant\User::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ApplicationGrant\User $user;
    public function id() : int
    {
        return $this->id;
    }
    public function url() : string
    {
        return $this->url;
    }
    public function app() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ApplicationGrant\App
    {
        return $this->app;
    }
    public function created_at() : string
    {
        return $this->created_at;
    }
    public function updated_at() : string
    {
        return $this->updated_at;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ApplicationGrant\Scopes>
     */
    public function scopes() : array
    {
        return $this->scopes;
    }
    public function user() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ApplicationGrant\User
    {
        return $this->user;
    }
}
