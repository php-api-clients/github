<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class RepositorySubscription
{
    public const SCHEMA_JSON = '{"title":"Repository Invitation","required":["created_at","ignored","reason","subscribed","url","repository_url"],"type":"object","properties":{"subscribed":{"type":"boolean","description":"Determines if notifications should be received from this repository.","examples":[true]},"ignored":{"type":"boolean","description":"Determines if all notifications should be blocked from this repository."},"reason":{"type":["string","null"]},"created_at":{"type":"string","format":"date-time","examples":["2012-10-06T21:34:12Z"]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/example\\/subscription"]},"repository_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/example"]}},"description":"Repository invitations let you manage who you collaborate with."}';
    public const SCHEMA_TITLE = 'Repository Invitation';
    public const SCHEMA_DESCRIPTION = 'Repository invitations let you manage who you collaborate with.';
    /**
     * Determines if notifications should be received from this repository.
     */
    public readonly bool $subscribed;
    /**
     * Determines if all notifications should be blocked from this repository.
     */
    public readonly bool $ignored;
    public readonly ?string $reason;
    public readonly string $created_at;
    public readonly string $url;
    public readonly string $repository_url;
    public function __construct(bool $subscribed, bool $ignored, string $reason, string $created_at, string $url, string $repository_url)
    {
        $this->subscribed = $subscribed;
        $this->ignored = $ignored;
        $this->reason = $reason;
        $this->created_at = $created_at;
        $this->url = $url;
        $this->repository_url = $repository_url;
    }
}
