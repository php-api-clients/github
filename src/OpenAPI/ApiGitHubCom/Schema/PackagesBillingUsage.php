<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class PackagesBillingUsage
{
    public const SCHEMA_JSON = '{"required":["total_gigabytes_bandwidth_used","total_paid_gigabytes_bandwidth_used","included_gigabytes_bandwidth"],"type":"object","properties":{"total_gigabytes_bandwidth_used":{"type":"integer","description":"Sum of the free and paid storage space (GB) for GitHuub Packages."},"total_paid_gigabytes_bandwidth_used":{"type":"integer","description":"Total paid storage space (GB) for GitHuub Packages."},"included_gigabytes_bandwidth":{"type":"integer","description":"Free storage space (GB) for GitHub Packages."}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'packages-billing-usage';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * Sum of the free and paid storage space (GB) for GitHuub Packages.
     */
    public readonly int $total_gigabytes_bandwidth_used;
    /**
     * Total paid storage space (GB) for GitHuub Packages.
     */
    public readonly int $total_paid_gigabytes_bandwidth_used;
    /**
     * Free storage space (GB) for GitHub Packages.
     */
    public readonly int $included_gigabytes_bandwidth;
    public function __construct(int $total_gigabytes_bandwidth_used, int $total_paid_gigabytes_bandwidth_used, int $included_gigabytes_bandwidth)
    {
        $this->total_gigabytes_bandwidth_used = $total_gigabytes_bandwidth_used;
        $this->total_paid_gigabytes_bandwidth_used = $total_paid_gigabytes_bandwidth_used;
        $this->included_gigabytes_bandwidth = $included_gigabytes_bandwidth;
    }
}
