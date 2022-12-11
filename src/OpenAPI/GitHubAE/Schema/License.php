<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class License
{
    public const SCHEMA_TITLE = 'License';
    public const SCHEMA_DESCRIPTION = 'License';
    private string $key;
    private string $name;
    private $spdx_id;
    private $url;
    private string $node_id;
    private string $html_url;
    private string $description;
    private string $implementation;
    private array $permissions = array();
    private array $conditions = array();
    private array $limitations = array();
    private string $body;
    private bool $featured;
    public function key() : string
    {
        return $this->key;
    }
    public function name() : string
    {
        return $this->name;
    }
    public function spdx_id()
    {
        return $this->spdx_id;
    }
    public function url()
    {
        return $this->url;
    }
    public function node_id() : string
    {
        return $this->node_id;
    }
    public function html_url() : string
    {
        return $this->html_url;
    }
    public function description() : string
    {
        return $this->description;
    }
    public function implementation() : string
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
    public function body() : string
    {
        return $this->body;
    }
    public function featured() : bool
    {
        return $this->featured;
    }
}
