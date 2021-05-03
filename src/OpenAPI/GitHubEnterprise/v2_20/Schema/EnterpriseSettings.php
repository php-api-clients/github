<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Schema;

final class EnterpriseSettings
{
    public const SCHEMA_TITLE = 'enterprise-settings';
    public const SPL_HASH = '0000000037ddc7170000000010a967e8';
    public const SCHEMA_DESCRIPTION = '';
    private object $enterprise;
    private array $run_list;
    public function enterprise() : object
    {
        return $this->enterprise;
    }
    public function run_list() : array
    {
        return $this->run_list;
    }
}
