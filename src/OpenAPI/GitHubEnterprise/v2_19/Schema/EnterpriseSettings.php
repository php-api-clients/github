<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Schema;

final class EnterpriseSettings
{
    public const SCHEMA_TITLE = 'enterprise-settings';
    public const SPL_HASH = '000000005bc9f76a000000002dbcf303';
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
