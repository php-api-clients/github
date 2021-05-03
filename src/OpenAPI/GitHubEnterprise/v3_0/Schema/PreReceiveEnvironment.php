<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema;

final class PreReceiveEnvironment
{
    public const SCHEMA_TITLE = 'pre-receive-environment';
    public const SPL_HASH = '000000001f1e2d1c000000004be6709d';
    public const SCHEMA_DESCRIPTION = '';
    private int $id;
    private string $name;
    private string $image_url;
    private string $url;
    private string $html_url;
    private bool $default_environment;
    private string $created_at;
    private int $hooks_count;
    private object $download;
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
    public function download() : object
    {
        return $this->download;
    }
}
