<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Schema;

final class ApiOverview
{
    public const SCHEMA_TITLE = 'Api Overview';
    public const SCHEMA_DESCRIPTION = 'Api Overview';
    private boolean $verifiable_password_authentication;
    private array $packages;
    private array $dependabot;
    private string $installed_version;
    private string $github_services_sha;
    public function verifiable_password_authentication() : boolean
    {
        return $this->verifiable_password_authentication;
    }
    public function packages() : array
    {
        return $this->packages;
    }
    public function dependabot() : array
    {
        return $this->dependabot;
    }
    public function installed_version() : string
    {
        return $this->installed_version;
    }
    public function github_services_sha() : string
    {
        return $this->github_services_sha;
    }
}
