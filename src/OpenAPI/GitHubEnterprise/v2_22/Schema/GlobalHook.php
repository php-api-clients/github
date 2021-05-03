<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema;

final class GlobalHook
{
    public const SCHEMA_TITLE = 'global-hook';
    public const SPL_HASH = '0000000031ee27db00000000484d7fbe';
    public const SCHEMA_DESCRIPTION = '';
    private string $type;
    private int $id;
    private string $name;
    private bool $active;
    private array $events;
    private object $config;
    private string $updated_at;
    private string $created_at;
    private string $url;
    private string $ping_url;
    public function type() : string
    {
        return $this->type;
    }
    public function id() : int
    {
        return $this->id;
    }
    public function name() : string
    {
        return $this->name;
    }
    public function active() : bool
    {
        return $this->active;
    }
    public function events() : array
    {
        return $this->events;
    }
    public function config() : object
    {
        return $this->config;
    }
    public function updated_at() : string
    {
        return $this->updated_at;
    }
    public function created_at() : string
    {
        return $this->created_at;
    }
    public function url() : string
    {
        return $this->url;
    }
    public function ping_url() : string
    {
        return $this->ping_url;
    }
}
