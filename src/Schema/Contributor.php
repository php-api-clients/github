<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Contributor
{
    public const SCHEMA_JSON         = '{"title":"Contributor","required":["contributions","type"],"type":"object","properties":{"login":{"type":"string"},"id":{"type":"integer"},"node_id":{"type":"string"},"avatar_url":{"type":"string","format":"uri"},"gravatar_id":{"type":["string","null"]},"url":{"type":"string","format":"uri"},"html_url":{"type":"string","format":"uri"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string"},"gists_url":{"type":"string"},"starred_url":{"type":"string"},"subscriptions_url":{"type":"string","format":"uri"},"organizations_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"events_url":{"type":"string"},"received_events_url":{"type":"string","format":"uri"},"type":{"type":"string"},"site_admin":{"type":"boolean"},"contributions":{"type":"integer"},"email":{"type":"string"},"name":{"type":"string"}},"description":"Contributor"}';
    public const SCHEMA_TITLE        = 'Contributor';
    public const SCHEMA_DESCRIPTION  = 'Contributor';
    public const SCHEMA_EXAMPLE_DATA = '{"login":"generated","id":2,"node_id":"generated","avatar_url":"https:\\/\\/example.com\\/","gravatar_id":"generated","url":"https:\\/\\/example.com\\/","html_url":"https:\\/\\/example.com\\/","followers_url":"https:\\/\\/example.com\\/","following_url":"generated","gists_url":"generated","starred_url":"generated","subscriptions_url":"https:\\/\\/example.com\\/","organizations_url":"https:\\/\\/example.com\\/","repos_url":"https:\\/\\/example.com\\/","events_url":"generated","received_events_url":"https:\\/\\/example.com\\/","type":"generated","site_admin":false,"contributions":13,"email":"generated","name":"generated"}';

    public function __construct(public ?string $login, public ?int $id, #[MapFrom('node_id')] public ?string $nodeId, #[MapFrom('avatar_url')] public ?string $avatarUrl, #[MapFrom('gravatar_id')] public ?string $gravatarId, public ?string $url, #[MapFrom('html_url')] public ?string $htmlUrl, #[MapFrom('followers_url')] public ?string $followersUrl, #[MapFrom('following_url')] public ?string $followingUrl, #[MapFrom('gists_url')] public ?string $gistsUrl, #[MapFrom('starred_url')] public ?string $starredUrl, #[MapFrom('subscriptions_url')] public ?string $subscriptionsUrl, #[MapFrom('organizations_url')] public ?string $organizationsUrl, #[MapFrom('repos_url')] public ?string $reposUrl, #[MapFrom('events_url')] public ?string $eventsUrl, #[MapFrom('received_events_url')] public ?string $receivedEventsUrl, public string $type, #[MapFrom('site_admin')] public ?bool $siteAdmin, public int $contributions, public ?string $email, public ?string $name)
    {
    }
}
