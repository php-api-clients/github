<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema;

final class ApiOverview
{
    public const SCHEMA_TITLE = 'Api Overview';
    public const SPL_HASH = '000000001f1e2965000000004be6709d';
    public const SCHEMA_DESCRIPTION = 'Api Overview';
    private bool $verifiable_password_authentication;
    private array $packages;
    private array $dependabot;
    private string $installed_version;
    public function verifiable_password_authentication() : bool
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
}
