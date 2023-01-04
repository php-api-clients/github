<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PackageVersion;

final class PackageFiles
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"content_type":{"type":"string"},"created_at":{"type":"string"},"download_url":{"type":"string"},"id":{"type":"integer"},"md5":{"type":["string","null"]},"name":{"type":"string"},"sha1":{"type":["string","null"]},"sha256":{"type":"string"},"size":{"type":"integer"},"state":{"type":"string"},"updated_at":{"type":"string"}}}';
    public const SCHEMA_TITLE = 'PackageVersion\\PackageFiles';
    public const SCHEMA_DESCRIPTION = '';
    private string $content_type;
    private string $created_at;
    private string $download_url;
    private int $id;
    private $md5;
    private string $name;
    private $sha1;
    private string $sha256;
    private int $size;
    private string $state;
    private string $updated_at;
    public function content_type() : string
    {
        return $this->content_type;
    }
    public function created_at() : string
    {
        return $this->created_at;
    }
    public function download_url() : string
    {
        return $this->download_url;
    }
    public function id() : int
    {
        return $this->id;
    }
    public function md5()
    {
        return $this->md5;
    }
    public function name() : string
    {
        return $this->name;
    }
    public function sha1()
    {
        return $this->sha1;
    }
    public function sha256() : string
    {
        return $this->sha256;
    }
    public function size() : int
    {
        return $this->size;
    }
    public function state() : string
    {
        return $this->state;
    }
    public function updated_at() : string
    {
        return $this->updated_at;
    }
}
