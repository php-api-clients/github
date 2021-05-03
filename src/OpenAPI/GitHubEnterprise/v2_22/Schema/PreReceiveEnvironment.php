<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema;

final class PreReceiveEnvironment
{
    public const SCHEMA_TITLE = 'pre-receive-environment';
    public const SPL_HASH = '000000003d2c48650000000068da5fbb';
    public const SCHEMA_DESCRIPTION = '';
    private ?int $id = null;
    private ?string $name = null;
    private ?string $image_url = null;
    private ?string $url = null;
    private ?string $html_url = null;
    private ?bool $default_environment = null;
    private ?string $created_at = null;
    private ?int $hooks_count = null;
    private ?object $download = null;
    public function id() : ?int
    {
        return $this->id;
    }
    public function name() : ?string
    {
        return $this->name;
    }
    public function image_url() : ?string
    {
        return $this->image_url;
    }
    public function url() : ?string
    {
        return $this->url;
    }
    public function html_url() : ?string
    {
        return $this->html_url;
    }
    public function default_environment() : ?bool
    {
        return $this->default_environment;
    }
    public function created_at() : ?string
    {
        return $this->created_at;
    }
    public function hooks_count() : ?int
    {
        return $this->hooks_count;
    }
    public function download() : ?object
    {
        return $this->download;
    }
}
