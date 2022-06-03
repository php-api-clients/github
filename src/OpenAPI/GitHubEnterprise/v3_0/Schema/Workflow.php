<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema;

final class Workflow
{
    public const SCHEMA_TITLE = 'Workflow';
    public const SCHEMA_DESCRIPTION = 'A GitHub Actions workflow';
    private int $id;
    private string $node_id;
    private string $name;
    private string $path;
    private string $state;
    private string $created_at;
    private string $updated_at;
    private string $url;
    private string $html_url;
    private string $badge_url;
    private ?string $deleted_at = null;
    public function id() : int
    {
        return $this->id;
    }
    public function node_id() : string
    {
        return $this->node_id;
    }
    public function name() : string
    {
        return $this->name;
    }
    public function path() : string
    {
        return $this->path;
    }
    public function state() : string
    {
        return $this->state;
    }
    public function created_at() : string
    {
        return $this->created_at;
    }
    public function updated_at() : string
    {
        return $this->updated_at;
    }
    public function url() : string
    {
        return $this->url;
    }
    public function html_url() : string
    {
        return $this->html_url;
    }
    public function badge_url() : string
    {
        return $this->badge_url;
    }
    public function deleted_at() : ?string
    {
        return $this->deleted_at;
    }
}
