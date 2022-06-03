<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

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
