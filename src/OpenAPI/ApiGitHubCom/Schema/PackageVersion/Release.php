<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PackageVersion;

final class Release
{
    public const SCHEMA_JSON = '{"required":["url","html_url","id","tag_name","target_commitish","name","draft","author","prerelease","created_at","published_at"],"type":"object","properties":{"author":{"required":["login","id","node_id","avatar_url","gravatar_id","url","html_url","followers_url","following_url","gists_url","starred_url","subscriptions_url","organizations_url","repos_url","events_url","received_events_url","type","site_admin"],"type":"object","properties":{"avatar_url":{"type":"string"},"events_url":{"type":"string"},"followers_url":{"type":"string"},"following_url":{"type":"string"},"gists_url":{"type":"string"},"gravatar_id":{"type":"string"},"html_url":{"type":"string"},"id":{"type":"integer"},"login":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string"},"received_events_url":{"type":"string"},"repos_url":{"type":"string"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string"},"subscriptions_url":{"type":"string"},"type":{"type":"string"},"url":{"type":"string"}}},"created_at":{"type":"string"},"draft":{"type":"boolean"},"html_url":{"type":"string"},"id":{"type":"integer"},"name":{"type":"string"},"prerelease":{"type":"boolean"},"published_at":{"type":"string"},"tag_name":{"type":"string"},"target_commitish":{"type":"string"},"url":{"type":"string"}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'PackageVersion\\Release';
    public const SCHEMA_DESCRIPTION = '';
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Release\Author $author;
    public readonly string $created_at;
    public readonly bool $draft;
    public readonly string $html_url;
    public readonly int $id;
    public readonly string $name;
    public readonly bool $prerelease;
    public readonly string $published_at;
    public readonly string $tag_name;
    public readonly string $target_commitish;
    public readonly string $url;
    public function __construct(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Release\Author $author, string $created_at, bool $draft, string $html_url, int $id, string $name, bool $prerelease, string $published_at, string $tag_name, string $target_commitish, string $url)
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
