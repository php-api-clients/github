<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookRegistryPackagePublished\RegistryPackage;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Owner
{
    public const SCHEMA_JSON = '{"required":["login","id","node_id","avatar_url","gravatar_id","url","html_url","followers_url","following_url","gists_url","starred_url","subscriptions_url","organizations_url","repos_url","events_url","received_events_url","type","site_admin"],"type":"object","properties":{"avatar_url":{"type":"string"},"events_url":{"type":"string"},"followers_url":{"type":"string"},"following_url":{"type":"string"},"gists_url":{"type":"string"},"gravatar_id":{"type":"string"},"html_url":{"type":"string"},"id":{"type":"integer"},"login":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string"},"received_events_url":{"type":"string"},"repos_url":{"type":"string"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string"},"subscriptions_url":{"type":"string"},"type":{"type":"string"},"url":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"avatarUrl":"generated_avatar_url_null","eventsUrl":"generated_events_url_null","followersUrl":"generated_followers_url_null","followingUrl":"generated_following_url_null","gistsUrl":"generated_gists_url_null","gravatarId":"generated_gravatar_id_null","htmlUrl":"generated_html_url_null","id":13,"login":"generated_login_null","nodeId":"generated_node_id_null","organizationsUrl":"generated_organizations_url_null","receivedEventsUrl":"generated_received_events_url_null","reposUrl":"generated_repos_url_null","siteAdmin":false,"starredUrl":"generated_starred_url_null","subscriptionsUrl":"generated_subscriptions_url_null","type":"generated_type_null","url":"generated_url_null"}';
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('avatar_url')] public string $avatarUrl, #[\EventSauce\ObjectHydrator\MapFrom('events_url')] public string $eventsUrl, #[\EventSauce\ObjectHydrator\MapFrom('followers_url')] public string $followersUrl, #[\EventSauce\ObjectHydrator\MapFrom('following_url')] public string $followingUrl, #[\EventSauce\ObjectHydrator\MapFrom('gists_url')] public string $gistsUrl, #[\EventSauce\ObjectHydrator\MapFrom('gravatar_id')] public string $gravatarId, #[\EventSauce\ObjectHydrator\MapFrom('html_url')] public string $htmlUrl, public int $id, public string $login, #[\EventSauce\ObjectHydrator\MapFrom('node_id')] public string $nodeId, #[\EventSauce\ObjectHydrator\MapFrom('organizations_url')] public string $organizationsUrl, #[\EventSauce\ObjectHydrator\MapFrom('received_events_url')] public string $receivedEventsUrl, #[\EventSauce\ObjectHydrator\MapFrom('repos_url')] public string $reposUrl, #[\EventSauce\ObjectHydrator\MapFrom('site_admin')] public bool $siteAdmin, #[\EventSauce\ObjectHydrator\MapFrom('starred_url')] public string $starredUrl, #[\EventSauce\ObjectHydrator\MapFrom('subscriptions_url')] public string $subscriptionsUrl, public string $type, public string $url)
    {
    }
}
