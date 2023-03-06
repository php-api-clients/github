<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class PackagesBillingUsage
{
    public const SCHEMA_JSON = '{"required":["total_gigabytes_bandwidth_used","total_paid_gigabytes_bandwidth_used","included_gigabytes_bandwidth"],"type":"object","properties":{"total_gigabytes_bandwidth_used":{"type":"integer","description":"Sum of the free and paid storage space (GB) for GitHuub Packages."},"total_paid_gigabytes_bandwidth_used":{"type":"integer","description":"Total paid storage space (GB) for GitHuub Packages."},"included_gigabytes_bandwidth":{"type":"integer","description":"Free storage space (GB) for GitHub Packages."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"total_gigabytes_bandwidth_used":13,"total_paid_gigabytes_bandwidth_used":13,"included_gigabytes_bandwidth":13}';
    /**
     * total_gigabytes_bandwidth_used: Sum of the free and paid storage space (GB) for GitHuub Packages.
     * total_paid_gigabytes_bandwidth_used: Total paid storage space (GB) for GitHuub Packages.
     * included_gigabytes_bandwidth: Free storage space (GB) for GitHub Packages.
     */
    public function __construct(public ?int $total_gigabytes_bandwidth_used, public ?int $total_paid_gigabytes_bandwidth_used, public ?int $included_gigabytes_bandwidth)
    {
    }
}
