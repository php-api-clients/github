<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\PullRequest\Head\Repo;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Owner
{
    public const SCHEMA_JSON         = '{"required":["avatar_url","events_url","followers_url","following_url","gists_url","gravatar_id","html_url","id","node_id","login","organizations_url","received_events_url","repos_url","site_admin","starred_url","subscriptions_url","type","url"],"type":"object","properties":{"avatar_url":{"type":"string","format":"uri"},"events_url":{"type":"string"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string"},"gists_url":{"type":"string"},"gravatar_id":{"type":["string","null"]},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"node_id":{"type":"string"},"login":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"type":"string"},"url":{"type":"string","format":"uri"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"avatar_url":"https:\\/\\/example.com\\/","events_url":"generated","followers_url":"https:\\/\\/example.com\\/","following_url":"generated","gists_url":"generated","gravatar_id":"generated","html_url":"https:\\/\\/example.com\\/","id":2,"node_id":"generated","login":"generated","organizations_url":"https:\\/\\/example.com\\/","received_events_url":"https:\\/\\/example.com\\/","repos_url":"https:\\/\\/example.com\\/","site_admin":false,"starred_url":"generated","subscriptions_url":"https:\\/\\/example.com\\/","type":"generated","url":"https:\\/\\/example.com\\/"}';

    public function __construct(#[MapFrom('avatar_url')] public string $avatarUrl, #[MapFrom('events_url')] public string $eventsUrl, #[MapFrom('followers_url')] public string $followersUrl, #[MapFrom('following_url')] public string $followingUrl, #[MapFrom('gists_url')] public string $gistsUrl, #[MapFrom('gravatar_id')] public ?string $gravatarId, #[MapFrom('html_url')] public string $htmlUrl, public int $id, #[MapFrom('node_id')] public string $nodeId, public string $login, #[MapFrom('organizations_url')] public string $organizationsUrl, #[MapFrom('received_events_url')] public string $receivedEventsUrl, #[MapFrom('repos_url')] public string $reposUrl, #[MapFrom('site_admin')] public bool $siteAdmin, #[MapFrom('starred_url')] public string $starredUrl, #[MapFrom('subscriptions_url')] public string $subscriptionsUrl, public string $type, public string $url)
    {
    }
}
