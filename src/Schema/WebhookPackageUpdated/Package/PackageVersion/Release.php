<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\WebhookPackageUpdated\Package\PackageVersion;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class Release
{
    public const SCHEMA_JSON         = '{"required":["url","html_url","id","tag_name","target_commitish","name","draft","author","prerelease","created_at","published_at"],"type":"object","properties":{"author":{"title":"User","required":["login","id"],"type":["object","null"],"properties":{"avatar_url":{"type":"string","format":"uri"},"deleted":{"type":"boolean"},"email":{"type":["string","null"]},"events_url":{"type":"string","format":"uri-template"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"gravatar_id":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"login":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization"],"type":"string"},"url":{"type":"string","format":"uri"}}},"created_at":{"type":"string"},"draft":{"type":"boolean"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"name":{"type":"string"},"prerelease":{"type":"boolean"},"published_at":{"type":"string"},"tag_name":{"type":"string"},"target_commitish":{"type":"string"},"url":{"type":"string","format":"uri"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"author":{"avatar_url":"https:\\/\\/example.com\\/","deleted":false,"email":"generated","events_url":"generated","followers_url":"https:\\/\\/example.com\\/","following_url":"generated","gists_url":"generated","gravatar_id":"generated","html_url":"https:\\/\\/example.com\\/","id":2,"login":"generated","name":"generated","node_id":"generated","organizations_url":"https:\\/\\/example.com\\/","received_events_url":"https:\\/\\/example.com\\/","repos_url":"https:\\/\\/example.com\\/","site_admin":false,"starred_url":"generated","subscriptions_url":"https:\\/\\/example.com\\/","type":"Organization","url":"https:\\/\\/example.com\\/"},"created_at":"generated","draft":false,"html_url":"https:\\/\\/example.com\\/","id":2,"name":"generated","prerelease":false,"published_at":"generated","tag_name":"generated","target_commitish":"generated","url":"https:\\/\\/example.com\\/"}';

    public function __construct(public ?Schema\Discussion\AnswerChosenBy $author, #[MapFrom('created_at')] public string $createdAt, public bool $draft, #[MapFrom('html_url')] public string $htmlUrl, public int $id, public string $name, public bool $prerelease, #[MapFrom('published_at')] public string $publishedAt, #[MapFrom('tag_name')] public string $tagName, #[MapFrom('target_commitish')] public string $targetCommitish, public string $url)
    {
    }
}
