<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookRegistryPackageUpdated\RegistryPackage\PackageVersion;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Release
{
    public const SCHEMA_JSON = '{"required":["url","html_url","id","tag_name","target_commitish","name","draft","author","prerelease","created_at","published_at"],"type":"object","properties":{"author":{"required":["login","id","node_id","avatar_url","gravatar_id","url","html_url","followers_url","following_url","gists_url","starred_url","subscriptions_url","organizations_url","repos_url","events_url","received_events_url","type","site_admin"],"type":"object","properties":{"avatar_url":{"type":"string"},"events_url":{"type":"string"},"followers_url":{"type":"string"},"following_url":{"type":"string"},"gists_url":{"type":"string"},"gravatar_id":{"type":"string"},"html_url":{"type":"string"},"id":{"type":"integer"},"login":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string"},"received_events_url":{"type":"string"},"repos_url":{"type":"string"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string"},"subscriptions_url":{"type":"string"},"type":{"type":"string"},"url":{"type":"string"}}},"created_at":{"type":"string"},"draft":{"type":"boolean"},"html_url":{"type":"string"},"id":{"type":"integer"},"name":{"type":"string"},"prerelease":{"type":"boolean"},"published_at":{"type":"string"},"tag_name":{"type":"string"},"target_commitish":{"type":"string"},"url":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"author":{"avatarUrl":"generated_avatar_url_null","eventsUrl":"generated_events_url_null","followersUrl":"generated_followers_url_null","followingUrl":"generated_following_url_null","gistsUrl":"generated_gists_url_null","gravatarId":"generated_gravatar_id_null","htmlUrl":"generated_html_url_null","id":13,"login":"generated_login_null","nodeId":"generated_node_id_null","organizationsUrl":"generated_organizations_url_null","receivedEventsUrl":"generated_received_events_url_null","reposUrl":"generated_repos_url_null","siteAdmin":false,"starredUrl":"generated_starred_url_null","subscriptionsUrl":"generated_subscriptions_url_null","type":"generated_type_null","url":"generated_url_null"},"createdAt":"generated_created_at_null","draft":false,"htmlUrl":"generated_html_url_null","id":13,"name":"generated_name_null","prerelease":false,"publishedAt":"generated_published_at_null","tagName":"generated_tag_name_null","targetCommitish":"generated_target_commitish_null","url":"generated_url_null"}';
    public function __construct(public Schema\WebhookRegistryPackagePublished\RegistryPackage\Owner $author, #[\EventSauce\ObjectHydrator\MapFrom('created_at')] public string $createdAt, public bool $draft, #[\EventSauce\ObjectHydrator\MapFrom('html_url')] public string $htmlUrl, public int $id, public string $name, public bool $prerelease, #[\EventSauce\ObjectHydrator\MapFrom('published_at')] public string $publishedAt, #[\EventSauce\ObjectHydrator\MapFrom('tag_name')] public string $tagName, #[\EventSauce\ObjectHydrator\MapFrom('target_commitish')] public string $targetCommitish, public string $url)
    {
    }
}
