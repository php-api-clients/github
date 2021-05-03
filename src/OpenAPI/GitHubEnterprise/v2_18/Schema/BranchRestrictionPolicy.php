<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema;

final class BranchRestrictionPolicy
{
    public const SCHEMA_TITLE = 'Branch Restriction Policy';
    public const SPL_HASH = '0000000051edec750000000051f77f0f';
    public const SCHEMA_DESCRIPTION = 'Branch Restriction Policy';
    private ?string $url = null;
    private ?string $users_url = null;
    private ?string $teams_url = null;
    private ?string $apps_url = null;
    private array $users = array();
    private array $teams = array();
    private array $apps = array();
    private array $restrictions = array();
    public function url() : ?string
    {
        return $this->url;
    }
    public function users_url() : ?string
    {
        return $this->users_url;
    }
    public function teams_url() : ?string
    {
        return $this->teams_url;
    }
    public function apps_url() : ?string
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
    public function restrictions() : array
    {
        return $this->restrictions;
    }
}
