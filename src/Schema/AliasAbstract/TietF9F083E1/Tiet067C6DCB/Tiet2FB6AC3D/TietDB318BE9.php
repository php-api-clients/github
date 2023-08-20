<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\TietF9F083E1\Tiet067C6DCB\Tiet2FB6AC3D;

use EventSauce\ObjectHydrator\MapFrom;

abstract readonly class TietDB318BE9
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "avatar_url": {
            "type": "string"
        },
        "events_url": {
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
        "gravatar_id": {
            "type": "string"
        },
        "html_url": {
            "type": "string"
        },
        "id": {
            "type": "integer"
        },
        "login": {
            "type": "string"
        },
        "node_id": {
            "type": "string"
        },
        "organizations_url": {
            "type": "string"
        },
        "received_events_url": {
            "type": "string"
        },
        "repos_url": {
            "type": "string"
        },
        "site_admin": {
            "type": "boolean"
        },
        "starred_url": {
            "type": "string"
        },
        "subscriptions_url": {
            "type": "string"
        },
        "type": {
            "type": "string"
        },
        "url": {
            "type": "string"
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "avatar_url": "generated",
    "events_url": "generated",
    "followers_url": "generated",
    "following_url": "generated",
    "gists_url": "generated",
    "gravatar_id": "generated",
    "html_url": "generated",
    "id": 2,
    "login": "generated",
    "node_id": "generated",
    "organizations_url": "generated",
    "received_events_url": "generated",
    "repos_url": "generated",
    "site_admin": false,
    "starred_url": "generated",
    "subscriptions_url": "generated",
    "type": "generated",
    "url": "generated"
}';

    public function __construct(#[MapFrom('avatar_url')]
    public string|null $avatarUrl, #[MapFrom('events_url')]
    public string|null $eventsUrl, #[MapFrom('followers_url')]
    public string|null $followersUrl, #[MapFrom('following_url')]
    public string|null $followingUrl, #[MapFrom('gists_url')]
    public string|null $gistsUrl, #[MapFrom('gravatar_id')]
    public string|null $gravatarId, #[MapFrom('html_url')]
    public string|null $htmlUrl, public int|null $id, public string|null $login, #[MapFrom('node_id')]
    public string|null $nodeId, #[MapFrom('organizations_url')]
    public string|null $organizationsUrl, #[MapFrom('received_events_url')]
    public string|null $receivedEventsUrl, #[MapFrom('repos_url')]
    public string|null $reposUrl, #[MapFrom('site_admin')]
    public bool|null $siteAdmin, #[MapFrom('starred_url')]
    public string|null $starredUrl, #[MapFrom('subscriptions_url')]
    public string|null $subscriptionsUrl, public string|null $type, public string|null $url,)
    {
    }
}
