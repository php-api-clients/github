<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\TietE98507D8\TietF41EA699\TietAAC5DBB4;

use EventSauce\ObjectHydrator\MapFrom;

abstract readonly class TietFCFECF7D
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "login": {
            "type": "string"
        },
        "id": {
            "type": "integer"
        },
        "node_id": {
            "type": "string"
        },
        "avatar_url": {
            "type": "string"
        },
        "gravatar_id": {
            "type": "string"
        },
        "url": {
            "type": "string"
        },
        "html_url": {
            "type": "string"
        },
        "followers_url": {
            "type": "string"
        },
        "following_url": {
            "type": "string"
        },
        "gists_url": {
            "type": "string"
        },
        "starred_url": {
            "type": "string"
        },
        "subscriptions_url": {
            "type": "string"
        },
        "organizations_url": {
            "type": "string"
        },
        "repos_url": {
            "type": "string"
        },
        "events_url": {
            "type": "string"
        },
        "received_events_url": {
            "type": "string"
        },
        "type": {
            "type": "string"
        },
        "site_admin": {
            "type": "boolean"
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "login": "generated",
    "id": 2,
    "node_id": "generated",
    "avatar_url": "generated",
    "gravatar_id": "generated",
    "url": "generated",
    "html_url": "generated",
    "followers_url": "generated",
    "following_url": "generated",
    "gists_url": "generated",
    "starred_url": "generated",
    "subscriptions_url": "generated",
    "organizations_url": "generated",
    "repos_url": "generated",
    "events_url": "generated",
    "received_events_url": "generated",
    "type": "generated",
    "site_admin": false
}';

    public function __construct(public string|null $login, public int|null $id, #[MapFrom('node_id')]
    public string|null $nodeId, #[MapFrom('avatar_url')]
    public string|null $avatarUrl, #[MapFrom('gravatar_id')]
    public string|null $gravatarId, public string|null $url, #[MapFrom('html_url')]
    public string|null $htmlUrl, #[MapFrom('followers_url')]
    public string|null $followersUrl, #[MapFrom('following_url')]
    public string|null $followingUrl, #[MapFrom('gists_url')]
    public string|null $gistsUrl, #[MapFrom('starred_url')]
    public string|null $starredUrl, #[MapFrom('subscriptions_url')]
    public string|null $subscriptionsUrl, #[MapFrom('organizations_url')]
    public string|null $organizationsUrl, #[MapFrom('repos_url')]
    public string|null $reposUrl, #[MapFrom('events_url')]
    public string|null $eventsUrl, #[MapFrom('received_events_url')]
    public string|null $receivedEventsUrl, public string|null $type, #[MapFrom('site_admin')]
    public bool|null $siteAdmin,)
    {
    }
}
