<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\PullRequest\Head\Repo;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Owner
{
    public const SCHEMA_JSON = '{"required":["avatar_url","events_url","followers_url","following_url","gists_url","gravatar_id","html_url","id","node_id","login","organizations_url","received_events_url","repos_url","site_admin","starred_url","subscriptions_url","type","url"],"type":"object","properties":{"avatar_url":{"type":"string","format":"uri"},"events_url":{"type":"string"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string"},"gists_url":{"type":"string"},"gravatar_id":{"type":["string","null"]},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"node_id":{"type":"string"},"login":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"type":"string"},"url":{"type":"string","format":"uri"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"avatarUrl":"https:\\/\\/example.com\\/","eventsUrl":"generated_events_url_null","followersUrl":"https:\\/\\/example.com\\/","followingUrl":"generated_following_url_null","gistsUrl":"generated_gists_url_null","gravatarId":"generated_gravatar_id_null","htmlUrl":"https:\\/\\/example.com\\/","id":13,"nodeId":"generated_node_id_null","login":"generated_login_null","organizationsUrl":"https:\\/\\/example.com\\/","receivedEventsUrl":"https:\\/\\/example.com\\/","reposUrl":"https:\\/\\/example.com\\/","siteAdmin":false,"starredUrl":"generated_starred_url_null","subscriptionsUrl":"https:\\/\\/example.com\\/","type":"generated_type_null","url":"https:\\/\\/example.com\\/"}';
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('avatar_url')] public string $avatarUrl, #[\EventSauce\ObjectHydrator\MapFrom('events_url')] public string $eventsUrl, #[\EventSauce\ObjectHydrator\MapFrom('followers_url')] public string $followersUrl, #[\EventSauce\ObjectHydrator\MapFrom('following_url')] public string $followingUrl, #[\EventSauce\ObjectHydrator\MapFrom('gists_url')] public string $gistsUrl, #[\EventSauce\ObjectHydrator\MapFrom('gravatar_id')] public ?string $gravatarId, #[\EventSauce\ObjectHydrator\MapFrom('html_url')] public string $htmlUrl, public int $id, #[\EventSauce\ObjectHydrator\MapFrom('node_id')] public string $nodeId, public string $login, #[\EventSauce\ObjectHydrator\MapFrom('organizations_url')] public string $organizationsUrl, #[\EventSauce\ObjectHydrator\MapFrom('received_events_url')] public string $receivedEventsUrl, #[\EventSauce\ObjectHydrator\MapFrom('repos_url')] public string $reposUrl, #[\EventSauce\ObjectHydrator\MapFrom('site_admin')] public bool $siteAdmin, #[\EventSauce\ObjectHydrator\MapFrom('starred_url')] public string $starredUrl, #[\EventSauce\ObjectHydrator\MapFrom('subscriptions_url')] public string $subscriptionsUrl, public string $type, public string $url)
    {
    }
}
