<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\WebhookPackagePublished\Package\PackageVersion;

final readonly class Release
{
    public const SCHEMA_JSON = '{"required":["url","html_url","id","tag_name","target_commitish","name","draft","author","prerelease","created_at","published_at"],"type":"object","properties":{"author":{"title":"User","required":["login","id"],"type":["object","null"],"properties":{"avatar_url":{"type":"string","format":"uri"},"deleted":{"type":"boolean"},"email":{"type":["string","null"]},"events_url":{"type":"string","format":"uri-template"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"gravatar_id":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"login":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization"],"type":"string"},"url":{"type":"string","format":"uri"}}},"created_at":{"type":"string"},"draft":{"type":"boolean"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"name":{"type":["string","null"]},"prerelease":{"type":"boolean"},"published_at":{"type":"string"},"tag_name":{"type":"string"},"target_commitish":{"type":"string"},"url":{"type":"string","format":"uri"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public ?\ApiClients\Client\Github\Schema\Discussion\AnswerChosenBy $author;
    public ?string $created_at;
    public ?bool $draft;
    public ?string $html_url;
    public ?int $id;
    public ?string $name;
    public ?bool $prerelease;
    public ?string $published_at;
    public ?string $tag_name;
    public ?string $target_commitish;
    public ?string $url;
    public function __construct(\ApiClients\Client\Github\Schema\Discussion\AnswerChosenBy $author, string $created_at, bool $draft, string $html_url, int $id, string $name, bool $prerelease, string $published_at, string $tag_name, string $target_commitish, string $url)
    {
        $this->author = $author;
        $this->created_at = $created_at;
        $this->draft = $draft;
        $this->html_url = $html_url;
        $this->id = $id;
        $this->name = $name;
        $this->prerelease = $prerelease;
        $this->published_at = $published_at;
        $this->tag_name = $tag_name;
        $this->target_commitish = $target_commitish;
        $this->url = $url;
    }
}
