<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PackageVersion;

final class Release
{
    public const SCHEMA_JSON = '{"required":["url","html_url","id","tag_name","target_commitish","name","draft","author","prerelease","created_at","published_at"],"type":"object","properties":{"author":{"required":["login","id","node_id","avatar_url","gravatar_id","url","html_url","followers_url","following_url","gists_url","starred_url","subscriptions_url","organizations_url","repos_url","events_url","received_events_url","type","site_admin"],"type":"object","properties":{"avatar_url":{"type":"string"},"events_url":{"type":"string"},"followers_url":{"type":"string"},"following_url":{"type":"string"},"gists_url":{"type":"string"},"gravatar_id":{"type":"string"},"html_url":{"type":"string"},"id":{"type":"integer"},"login":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string"},"received_events_url":{"type":"string"},"repos_url":{"type":"string"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string"},"subscriptions_url":{"type":"string"},"type":{"type":"string"},"url":{"type":"string"}}},"created_at":{"type":"string"},"draft":{"type":"boolean"},"html_url":{"type":"string"},"id":{"type":"integer"},"name":{"type":"string"},"prerelease":{"type":"boolean"},"published_at":{"type":"string"},"tag_name":{"type":"string"},"target_commitish":{"type":"string"},"url":{"type":"string"}}}';
    public const SCHEMA_TITLE = 'PackageVersion\\Release';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Release\Author::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Release\Author $author;
    private string $created_at;
    private bool $draft;
    private string $html_url;
    private int $id;
    private string $name;
    private bool $prerelease;
    private string $published_at;
    private string $tag_name;
    private string $target_commitish;
    private string $url;
    public function author() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Release\Author
    {
        return $this->author;
    }
    public function created_at() : string
    {
        return $this->created_at;
    }
    public function draft() : bool
    {
        return $this->draft;
    }
    public function html_url() : string
    {
        return $this->html_url;
    }
    public function id() : int
    {
        return $this->id;
    }
    public function name() : string
    {
        return $this->name;
    }
    public function prerelease() : bool
    {
        return $this->prerelease;
    }
    public function published_at() : string
    {
        return $this->published_at;
    }
    public function tag_name() : string
    {
        return $this->tag_name;
    }
    public function target_commitish() : string
    {
        return $this->target_commitish;
    }
    public function url() : string
    {
        return $this->url;
    }
}
