<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract;

use EventSauce\ObjectHydrator\MapFrom;

abstract readonly class Abstracte98507d8f41ea699aac5dbb4fcfecf7d
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"login":{"type":"string"},"id":{"type":"integer"},"node_id":{"type":"string"},"avatar_url":{"type":"string"},"gravatar_id":{"type":"string"},"url":{"type":"string"},"html_url":{"type":"string"},"followers_url":{"type":"string"},"following_url":{"type":"string"},"gists_url":{"type":"string"},"starred_url":{"type":"string"},"subscriptions_url":{"type":"string"},"organizations_url":{"type":"string"},"repos_url":{"type":"string"},"events_url":{"type":"string"},"received_events_url":{"type":"string"},"type":{"type":"string"},"site_admin":{"type":"boolean"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"login":"generated_login_null","id":13,"node_id":"generated_node_id_null","avatar_url":"generated_avatar_url_null","gravatar_id":"generated_gravatar_id_null","url":"generated_url_null","html_url":"generated_html_url_null","followers_url":"generated_followers_url_null","following_url":"generated_following_url_null","gists_url":"generated_gists_url_null","starred_url":"generated_starred_url_null","subscriptions_url":"generated_subscriptions_url_null","organizations_url":"generated_organizations_url_null","repos_url":"generated_repos_url_null","events_url":"generated_events_url_null","received_events_url":"generated_received_events_url_null","type":"generated_type_null","site_admin":false}';

    public function __construct(public ?string $login, public ?int $id, #[MapFrom('node_id')] public ?string $nodeId, #[MapFrom('avatar_url')] public ?string $avatarUrl, #[MapFrom('gravatar_id')] public ?string $gravatarId, public ?string $url, #[MapFrom('html_url')] public ?string $htmlUrl, #[MapFrom('followers_url')] public ?string $followersUrl, #[MapFrom('following_url')] public ?string $followingUrl, #[MapFrom('gists_url')] public ?string $gistsUrl, #[MapFrom('starred_url')] public ?string $starredUrl, #[MapFrom('subscriptions_url')] public ?string $subscriptionsUrl, #[MapFrom('organizations_url')] public ?string $organizationsUrl, #[MapFrom('repos_url')] public ?string $reposUrl, #[MapFrom('events_url')] public ?string $eventsUrl, #[MapFrom('received_events_url')] public ?string $receivedEventsUrl, public ?string $type, #[MapFrom('site_admin')] public ?bool $siteAdmin)
    {
    }
}
