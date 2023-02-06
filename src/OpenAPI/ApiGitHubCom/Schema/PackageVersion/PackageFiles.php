<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PackageVersion;

final class PackageFiles
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"content_type":{"type":"string"},"created_at":{"type":"string"},"download_url":{"type":"string"},"id":{"type":"integer"},"md5":{"type":["string","null"]},"name":{"type":"string"},"sha1":{"type":["string","null"]},"sha256":{"type":"string"},"size":{"type":"integer"},"state":{"type":"string"},"updated_at":{"type":"string"}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'PackageVersion\\PackageFiles';
    public const SCHEMA_DESCRIPTION = '';
    public readonly string $content_type;
    public readonly string $created_at;
    public readonly string $download_url;
    public readonly int $id;
    public readonly ?string $md5;
    public readonly string $name;
    public readonly ?string $sha1;
    public readonly string $sha256;
    public readonly int $size;
    public readonly string $state;
    public readonly string $updated_at;
    public function __construct(string $content_type, string $created_at, string $download_url, int $id, string $md5, string $name, string $sha1, string $sha256, int $size, string $state, string $updated_at)
    {
        $this->content_type = $content_type;
        $this->created_at = $created_at;
        $this->download_url = $download_url;
        $this->id = $id;
        $this->md5 = $md5;
        $this->name = $name;
        $this->sha1 = $sha1;
        $this->sha256 = $sha256;
        $this->size = $size;
        $this->state = $state;
        $this->updated_at = $updated_at;
    }
}
