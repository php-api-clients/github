<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema;

final class EnterpriseSettings
{
    public const SCHEMA_TITLE       = 'enterprise-settings';
    public const SCHEMA_DESCRIPTION = '';
    private array $enterprise       = [];
    private array $run_list         = [];

    public function enterprise(): array
    {
        return $this->enterprise;
    }

    public function run_list(): array
    {
        return $this->run_list;
    }
}
