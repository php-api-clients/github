<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema;

final class PreReceiveEnvironment
{
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
    private array $download = array();
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
    public function download() : array
    {
        return $this->download;
    }
}
