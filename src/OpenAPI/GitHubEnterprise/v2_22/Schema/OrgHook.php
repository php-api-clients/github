<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema;

final class OrgHook
{
    public const SCHEMA_TITLE = 'Org Hook';
    public const SCHEMA_DESCRIPTION = 'Org Hook';
    private ?int $id = null;
    private ?string $url = null;
    private ?string $ping_url = null;
    private ?string $name = null;
    private array $events = array();
    private ?bool $active = null;
    private array $config = array();
    private ?string $updated_at = null;
    private ?string $created_at = null;
    private ?string $type = null;
    public function id() : ?int
    {
        return $this->id;
    }
    public function url() : ?string
    {
        return $this->url;
    }
    public function ping_url() : ?string
    {
        return $this->ping_url;
    }
    public function name() : ?string
    {
        return $this->name;
    }
    public function events() : array
    {
        return $this->events;
    }
    public function active() : ?bool
    {
        return $this->active;
    }
    public function config() : array
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
    public function type() : ?string
    {
        return $this->type;
    }
}
