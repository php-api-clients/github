<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class PackagesBillingUsage
{
    public const SCHEMA_JSON = '{"required":["total_gigabytes_bandwidth_used","total_paid_gigabytes_bandwidth_used","included_gigabytes_bandwidth"],"type":"object","properties":{"total_gigabytes_bandwidth_used":{"type":"integer","description":"Sum of the free and paid storage space (GB) for GitHuub Packages."},"total_paid_gigabytes_bandwidth_used":{"type":"integer","description":"Total paid storage space (GB) for GitHuub Packages."},"included_gigabytes_bandwidth":{"type":"integer","description":"Free storage space (GB) for GitHub Packages."}}}';
    public const SCHEMA_TITLE = 'packages-billing-usage';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * Sum of the free and paid storage space (GB) for GitHuub Packages.
     */
    private int $total_gigabytes_bandwidth_used;
    /**
     * Total paid storage space (GB) for GitHuub Packages.
     */
    private int $total_paid_gigabytes_bandwidth_used;
    /**
     * Free storage space (GB) for GitHub Packages.
     */
    private int $included_gigabytes_bandwidth;
    /**
     * Sum of the free and paid storage space (GB) for GitHuub Packages.
     */
    public function total_gigabytes_bandwidth_used() : int
    {
        return $this->total_gigabytes_bandwidth_used;
    }
    /**
     * Total paid storage space (GB) for GitHuub Packages.
     */
    public function total_paid_gigabytes_bandwidth_used() : int
    {
        return $this->total_paid_gigabytes_bandwidth_used;
    }
    /**
     * Free storage space (GB) for GitHub Packages.
     */
    public function included_gigabytes_bandwidth() : int
    {
        return $this->included_gigabytes_bandwidth;
    }
}
