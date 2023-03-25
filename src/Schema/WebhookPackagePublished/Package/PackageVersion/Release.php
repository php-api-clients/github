<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package\PackageVersion;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Release
{
    public const SCHEMA_JSON = '{"required":["url","html_url","id","tag_name","target_commitish","name","draft","author","prerelease","created_at","published_at"],"type":"object","properties":{"author":{"title":"User","required":["login","id"],"type":["object","null"],"properties":{"avatar_url":{"type":"string","format":"uri"},"deleted":{"type":"boolean"},"email":{"type":["string","null"]},"events_url":{"type":"string","format":"uri-template"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"gravatar_id":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"login":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization"],"type":"string"},"url":{"type":"string","format":"uri"}}},"created_at":{"type":"string"},"draft":{"type":"boolean"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"name":{"type":["string","null"]},"prerelease":{"type":"boolean"},"published_at":{"type":"string"},"tag_name":{"type":"string"},"target_commitish":{"type":"string"},"url":{"type":"string","format":"uri"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"author":{"avatarUrl":"https:\\/\\/example.com\\/","deleted":false,"email":"generated_email_null","eventsUrl":"generated_events_url_uri-template","followersUrl":"https:\\/\\/example.com\\/","followingUrl":"generated_following_url_uri-template","gistsUrl":"generated_gists_url_uri-template","gravatarId":"generated_gravatar_id_null","htmlUrl":"https:\\/\\/example.com\\/","id":13,"login":"generated_login_null","name":"generated_name_null","nodeId":"generated_node_id_null","organizationsUrl":"https:\\/\\/example.com\\/","receivedEventsUrl":"https:\\/\\/example.com\\/","reposUrl":"https:\\/\\/example.com\\/","siteAdmin":false,"starredUrl":"generated_starred_url_uri-template","subscriptionsUrl":"https:\\/\\/example.com\\/","type":"Bot","url":"https:\\/\\/example.com\\/"},"createdAt":"generated_created_at_null","draft":false,"htmlUrl":"https:\\/\\/example.com\\/","id":13,"name":"generated_name_null","prerelease":false,"publishedAt":"generated_published_at_null","tagName":"generated_tag_name_null","targetCommitish":"generated_target_commitish_null","url":"https:\\/\\/example.com\\/"}';
    public function __construct(public ?Schema\Discussion\AnswerChosenBy $author, #[\EventSauce\ObjectHydrator\MapFrom('created_at')] public string $createdAt, public bool $draft, #[\EventSauce\ObjectHydrator\MapFrom('html_url')] public string $htmlUrl, public int $id, public ?string $name, public bool $prerelease, #[\EventSauce\ObjectHydrator\MapFrom('published_at')] public string $publishedAt, #[\EventSauce\ObjectHydrator\MapFrom('tag_name')] public string $tagName, #[\EventSauce\ObjectHydrator\MapFrom('target_commitish')] public string $targetCommitish, public string $url)
    {
    }
}
