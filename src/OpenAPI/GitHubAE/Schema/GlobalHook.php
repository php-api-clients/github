<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class GlobalHook
{
    public const SCHEMA_TITLE = 'global-hook';
    public const SPL_HASH = '000000001ef89acc000000007fdcfded';
    public const SCHEMA_DESCRIPTION = '';
    private ?string $type = null;
    private ?int $id = null;
    private ?string $name = null;
    private ?bool $active = null;
    private array $events = array();
    private ?object $config = null;
    private ?string $updated_at = null;
    private ?string $created_at = null;
    private ?string $url = null;
    private ?string $ping_url = null;
    public function type() : ?string
    {
        return $this->type;
    }
    public function id() : ?int
    {
        return $this->id;
    }
    public function name() : ?string
    {
        return $this->name;
    }
    public function active() : ?bool
    {
        return $this->active;
    }
    public function events() : array
    {
        return $this->events;
    }
    public function config() : ?object
    {
        return $this->config;
    }
    public function updated_at() : ?string
    {
        return $this->updated_at;
    }
    public function created_at() : ?string
    {
        return $this->created_at;
    }
    public function url() : ?string
    {
        return $this->url;
    }
    public function ping_url() : ?string
    {
        return $this->ping_url;
    }
}
