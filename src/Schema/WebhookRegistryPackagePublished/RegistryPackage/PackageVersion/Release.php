<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookRegistryPackagePublished\RegistryPackage\PackageVersion;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Release
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"author":{"type":"object","properties":{"avatar_url":{"type":"string"},"events_url":{"type":"string"},"followers_url":{"type":"string"},"following_url":{"type":"string"},"gists_url":{"type":"string"},"gravatar_id":{"type":"string"},"html_url":{"type":"string"},"id":{"type":"integer"},"login":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string"},"received_events_url":{"type":"string"},"repos_url":{"type":"string"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string"},"subscriptions_url":{"type":"string"},"type":{"type":"string"},"url":{"type":"string"}}},"created_at":{"type":"string"},"draft":{"type":"boolean"},"html_url":{"type":"string"},"id":{"type":"integer"},"name":{"type":["string","null"]},"prerelease":{"type":"boolean"},"published_at":{"type":"string"},"tag_name":{"type":"string"},"target_commitish":{"type":"string"},"url":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"author":{"avatar_url":"generated_avatar_url_null","events_url":"generated_events_url_null","followers_url":"generated_followers_url_null","following_url":"generated_following_url_null","gists_url":"generated_gists_url_null","gravatar_id":"generated_gravatar_id_null","html_url":"generated_html_url_null","id":13,"login":"generated_login_null","node_id":"generated_node_id_null","organizations_url":"generated_organizations_url_null","received_events_url":"generated_received_events_url_null","repos_url":"generated_repos_url_null","site_admin":false,"starred_url":"generated_starred_url_null","subscriptions_url":"generated_subscriptions_url_null","type":"generated_type_null","url":"generated_url_null"},"created_at":"generated_created_at_null","draft":false,"html_url":"generated_html_url_null","id":13,"name":"generated_name_null","prerelease":false,"published_at":"generated_published_at_null","tag_name":"generated_tag_name_null","target_commitish":"generated_target_commitish_null","url":"generated_url_null"}';
    public function __construct(public ?Schema\WebhookRegistryPackagePublished\RegistryPackage\PackageVersion\Release\Author $author, #[\EventSauce\ObjectHydrator\MapFrom('created_at')] public ?string $createdAt, public ?bool $draft, #[\EventSauce\ObjectHydrator\MapFrom('html_url')] public ?string $htmlUrl, public ?int $id, public ?string $name, public ?bool $prerelease, #[\EventSauce\ObjectHydrator\MapFrom('published_at')] public ?string $publishedAt, #[\EventSauce\ObjectHydrator\MapFrom('tag_name')] public ?string $tagName, #[\EventSauce\ObjectHydrator\MapFrom('target_commitish')] public ?string $targetCommitish, public ?string $url)
    {
    }
}
