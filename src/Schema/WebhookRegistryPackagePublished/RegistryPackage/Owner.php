<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\WebhookRegistryPackagePublished\RegistryPackage;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Owner
{
    public const SCHEMA_JSON         = '{"required":["login","id","node_id","avatar_url","gravatar_id","url","html_url","followers_url","following_url","gists_url","starred_url","subscriptions_url","organizations_url","repos_url","events_url","received_events_url","type","site_admin"],"type":"object","properties":{"avatar_url":{"type":"string"},"events_url":{"type":"string"},"followers_url":{"type":"string"},"following_url":{"type":"string"},"gists_url":{"type":"string"},"gravatar_id":{"type":"string"},"html_url":{"type":"string"},"id":{"type":"integer"},"login":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string"},"received_events_url":{"type":"string"},"repos_url":{"type":"string"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string"},"subscriptions_url":{"type":"string"},"type":{"type":"string"},"url":{"type":"string"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"avatar_url":"generated","events_url":"generated","followers_url":"generated","following_url":"generated","gists_url":"generated","gravatar_id":"generated","html_url":"generated","id":2,"login":"generated","node_id":"generated","organizations_url":"generated","received_events_url":"generated","repos_url":"generated","site_admin":false,"starred_url":"generated","subscriptions_url":"generated","type":"generated","url":"generated"}';

    public function __construct(#[MapFrom('avatar_url')] public string $avatarUrl, #[MapFrom('events_url')] public string $eventsUrl, #[MapFrom('followers_url')] public string $followersUrl, #[MapFrom('following_url')] public string $followingUrl, #[MapFrom('gists_url')] public string $gistsUrl, #[MapFrom('gravatar_id')] public string $gravatarId, #[MapFrom('html_url')] public string $htmlUrl, public int $id, public string $login, #[MapFrom('node_id')] public string $nodeId, #[MapFrom('organizations_url')] public string $organizationsUrl, #[MapFrom('received_events_url')] public string $receivedEventsUrl, #[MapFrom('repos_url')] public string $reposUrl, #[MapFrom('site_admin')] public bool $siteAdmin, #[MapFrom('starred_url')] public string $starredUrl, #[MapFrom('subscriptions_url')] public string $subscriptionsUrl, public string $type, public string $url)
    {
    }
}
