<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema;

final class EnterpriseSettings
{
    public const SCHEMA_TITLE = 'enterprise-settings';
    public const SCHEMA_DESCRIPTION = '';
    private ?object $enterprise = null;
    private array $run_list = array();
    public function enterprise() : ?object
    {
        return $this->enterprise;
    }
    public function run_list() : array
    {
        return $this->run_list;
    }
}
