<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\WebhookRegistryPackagePublished\RegistryPackage\PackageVersion;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class Release
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"author":{"type":"object","properties":{"avatar_url":{"type":"string"},"events_url":{"type":"string"},"followers_url":{"type":"string"},"following_url":{"type":"string"},"gists_url":{"type":"string"},"gravatar_id":{"type":"string"},"html_url":{"type":"string"},"id":{"type":"integer"},"login":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string"},"received_events_url":{"type":"string"},"repos_url":{"type":"string"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string"},"subscriptions_url":{"type":"string"},"type":{"type":"string"},"url":{"type":"string"}}},"created_at":{"type":"string"},"draft":{"type":"boolean"},"html_url":{"type":"string"},"id":{"type":"integer"},"name":{"type":["string","null"]},"prerelease":{"type":"boolean"},"published_at":{"type":"string"},"tag_name":{"type":"string"},"target_commitish":{"type":"string"},"url":{"type":"string"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"author":{"avatar_url":"generated","events_url":"generated","followers_url":"generated","following_url":"generated","gists_url":"generated","gravatar_id":"generated","html_url":"generated","id":2,"login":"generated","node_id":"generated","organizations_url":"generated","received_events_url":"generated","repos_url":"generated","site_admin":false,"starred_url":"generated","subscriptions_url":"generated","type":"generated","url":"generated"},"created_at":"generated","draft":false,"html_url":"generated","id":2,"name":"generated","prerelease":false,"published_at":"generated","tag_name":"generated","target_commitish":"generated","url":"generated"}';

    public function __construct(public Schema\WebhookRegistryPackagePublished\RegistryPackage\PackageVersion\Release\Author|null $author, #[MapFrom('created_at')]
    public string|null $createdAt, public bool|null $draft, #[MapFrom('html_url')]
    public string|null $htmlUrl, public int|null $id, public string|null $name, public bool|null $prerelease, #[MapFrom('published_at')]
    public string|null $publishedAt, #[MapFrom('tag_name')]
    public string|null $tagName, #[MapFrom('target_commitish')]
    public string|null $targetCommitish, public string|null $url,)
    {
    }
}
