<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema;

final class ApiOverview
{
    public const SCHEMA_TITLE = 'Api Overview';
    public const SPL_HASH = '00000000238243cc000000001c501073';
    public const SCHEMA_DESCRIPTION = 'Api Overview';
    private ?bool $verifiable_password_authentication = null;
    private array $packages = array();
    private array $dependabot = array();
    private ?string $installed_version = null;
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
}
