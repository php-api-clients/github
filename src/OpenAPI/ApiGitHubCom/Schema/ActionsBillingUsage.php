<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class ActionsBillingUsage
{
    public const SCHEMA_JSON = '{"required":["total_minutes_used","total_paid_minutes_used","included_minutes","minutes_used_breakdown"],"type":"object","properties":{"total_minutes_used":{"type":"integer","description":"The sum of the free and paid GitHub Actions minutes used."},"total_paid_minutes_used":{"type":"integer","description":"The total paid GitHub Actions minutes used."},"included_minutes":{"type":"integer","description":"The amount of free GitHub Actions minutes available."},"minutes_used_breakdown":{"type":"object","properties":{"UBUNTU":{"type":"integer","description":"Total minutes used on Ubuntu runner machines."},"MACOS":{"type":"integer","description":"Total minutes used on macOS runner machines."},"WINDOWS":{"type":"integer","description":"Total minutes used on Windows runner machines."},"ubuntu_4_core":{"type":"integer","description":"Total minutes used on Ubuntu 4 core runner machines."},"ubuntu_8_core":{"type":"integer","description":"Total minutes used on Ubuntu 8 core runner machines."},"ubuntu_16_core":{"type":"integer","description":"Total minutes used on Ubuntu 16 core runner machines."},"ubuntu_32_core":{"type":"integer","description":"Total minutes used on Ubuntu 32 core runner machines."},"ubuntu_64_core":{"type":"integer","description":"Total minutes used on Ubuntu 64 core runner machines."},"windows_4_core":{"type":"integer","description":"Total minutes used on Windows 4 core runner machines."},"windows_8_core":{"type":"integer","description":"Total minutes used on Windows 8 core runner machines."},"windows_16_core":{"type":"integer","description":"Total minutes used on Windows 16 core runner machines."},"windows_32_core":{"type":"integer","description":"Total minutes used on Windows 32 core runner machines."},"windows_64_core":{"type":"integer","description":"Total minutes used on Windows 64 core runner machines."},"macos_12_core":{"type":"integer","description":"Total minutes used on macOS 12 core runner machines."},"total":{"type":"integer","description":"Total minutes used on all runner machines."}}}}}';
    public const SCHEMA_TITLE = 'actions-billing-usage';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The sum of the free and paid GitHub Actions minutes used.
     */
    public readonly int $total_minutes_used;
    /**
     * The total paid GitHub Actions minutes used.
     */
    public readonly int $total_paid_minutes_used;
    /**
     * The amount of free GitHub Actions minutes available.
     */
    public readonly int $included_minutes;
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ActionsBillingUsage\MinutesUsedBreakdown $minutes_used_breakdown;
    public function __construct(int $total_minutes_used, int $total_paid_minutes_used, int $included_minutes, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ActionsBillingUsage\MinutesUsedBreakdown $minutes_used_breakdown)
    {
        $this->total_minutes_used = $total_minutes_used;
        $this->total_paid_minutes_used = $total_paid_minutes_used;
        $this->included_minutes = $included_minutes;
        $this->minutes_used_breakdown = $minutes_used_breakdown;
    }
}
