<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema;

final class License
{
    public const SCHEMA_TITLE = 'License';
    public const SPL_HASH = '0000000051ede2470000000051f77f0f';
    public const SCHEMA_DESCRIPTION = 'License';
    private ?string $key = null;
    private ?string $name = null;
    private ?string $spdx_id = null;
    private ?string $url = null;
    private ?string $node_id = null;
    private ?string $html_url = null;
    private ?string $description = null;
    private ?string $implementation = null;
    private array $permissions = array();
    private array $conditions = array();
    private array $limitations = array();
    private ?string $body = null;
    private ?bool $featured = null;
    public function key() : ?string
    {
        return $this->key;
    }
    public function name() : ?string
    {
        return $this->name;
    }
    public function spdx_id() : ?string
    {
        return $this->spdx_id;
    }
    public function url() : ?string
    {
        return $this->url;
    }
    public function node_id() : ?string
    {
        return $this->node_id;
    }
    public function html_url() : ?string
    {
        return $this->html_url;
    }
    public function description() : ?string
    {
        return $this->description;
    }
    public function implementation() : ?string
    {
        return $this->implementation;
    }
    public function permissions() : array
    {
        return $this->permissions;
    }
    public function conditions() : array
    {
        return $this->conditions;
    }
    public function limitations() : array
    {
        return $this->limitations;
    }
    public function body() : ?string
    {
        return $this->body;
    }
    public function featured() : ?bool
    {
        return $this->featured;
    }
}
