<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema;

final class ApiOverview
{
    public const SCHEMA_TITLE = 'Api Overview';
    public const SPL_HASH = '0000000051ede2560000000051f77f0f';
    public const SCHEMA_DESCRIPTION = 'Api Overview';
    private ?bool $verifiable_password_authentication = null;
    private array $packages = array();
    private array $dependabot = array();
    private ?string $installed_version = null;
    private ?string $github_services_sha = null;
    public function verifiable_password_authentication() : ?bool
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
    public function installed_version() : ?string
    {
        return $this->installed_version;
    }
    public function github_services_sha() : ?string
    {
        return $this->github_services_sha;
    }
}
