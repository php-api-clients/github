<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class PreReceiveEnvironment
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"id":{"type":"integer"},"name":{"type":"string"},"image_url":{"type":"string"},"url":{"type":"string"},"html_url":{"type":"string"},"default_environment":{"type":"boolean"},"created_at":{"type":"string"},"hooks_count":{"type":"integer"},"download":{"type":"object","properties":{"url":{"type":"string"},"state":{"type":"string"},"downloaded_at":{"type":["string","null"]},"message":{"type":["string","null"]}}}}}';
    public const SCHEMA_TITLE = 'pre-receive-environment';
    public const SCHEMA_DESCRIPTION = '';
    private int $id;
    private string $name;
    private string $image_url;
    private string $url;
    private string $html_url;
    private bool $default_environment;
    private string $created_at;
    private int $hooks_count;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\PreReceiveEnvironmentDownloadStatus::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\PreReceiveEnvironmentDownloadStatus $download;
    public function id() : int
    {
        return $this->id;
    }
    public function name() : string
    {
        return $this->name;
    }
    public function image_url() : string
    {
        return $this->image_url;
    }
    public function url() : string
    {
        return $this->url;
    }
    public function html_url() : string
    {
        return $this->html_url;
    }
    public function default_environment() : bool
    {
        return $this->default_environment;
    }
    public function created_at() : string
    {
        return $this->created_at;
    }
    public function hooks_count() : int
    {
        return $this->hooks_count;
    }
    public function download() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\PreReceiveEnvironmentDownloadStatus
    {
        return $this->download;
    }
}
