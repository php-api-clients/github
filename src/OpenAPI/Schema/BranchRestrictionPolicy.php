<?php

namespace ApiClients\Client\Github\OpenAPI\Schema;

final class BranchRestrictionPolicy
{
    public const SCHEMA_TITLE = 'Branch Restriction Policy';
    public const SCHEMA_DESCRIPTION = 'Branch Restriction Policy';
    private string $url;
    private string $users_url;
    private string $teams_url;
    private string $apps_url;
    private array $users;
    private array $teams;
    private array $apps;
    public function url() : string
    {
        return $this->url;
    }
    public function users_url() : string
    {
        return $this->users_url;
    }
    public function teams_url() : string
    {
        return $this->teams_url;
    }
    public function apps_url() : string
    {
        return $this->apps_url;
    }
    public function users() : array
    {
        return $this->users;
    }
    public function teams() : array
    {
        return $this->teams;
    }
    public function apps() : array
    {
        return $this->apps;
    }
}
