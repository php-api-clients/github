<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema;

final class EnterprisePageOverview
{
    public const SCHEMA_TITLE = 'Enterprise Pages Stats';
    public const SCHEMA_DESCRIPTION = '';
    private int $total_pages;
    public function total_pages() : int
    {
        return $this->total_pages;
    }
}
