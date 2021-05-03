<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class PackagesBillingUsage
{
    public const SCHEMA_TITLE = 'packages-billing-usage';
    public const SPL_HASH = '00000000084e086c0000000020f58f84';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * Sum of the free and paid storage space (GB) for GitHuub Packages.
     */
    private ?int $total_gigabytes_bandwidth_used = null;
    /**
     * Total paid storage space (GB) for GitHuub Packages.
     */
    private ?int $total_paid_gigabytes_bandwidth_used = null;
    /**
     * Free storage space (GB) for GitHub Packages.
     */
    private ?int $included_gigabytes_bandwidth = null;
    public function total_gigabytes_bandwidth_used() : ?int
    {
        return $this->total_gigabytes_bandwidth_used;
    }
    public function total_paid_gigabytes_bandwidth_used() : ?int
    {
        return $this->total_paid_gigabytes_bandwidth_used;
    }
    public function included_gigabytes_bandwidth() : ?int
    {
        return $this->included_gigabytes_bandwidth;
    }
}
