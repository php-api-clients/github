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
    private int $total_minutes_used;
    /**
     * The total paid GitHub Actions minutes used.
     */
    private int $total_paid_minutes_used;
    /**
     * The amount of free GitHub Actions minutes available.
     */
    private int $included_minutes;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C585073601042Bb09034Df0Cfd5E1D9A6::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C585073601042Bb09034Df0Cfd5E1D9A6 $minutes_used_breakdown;
    /**
     * The sum of the free and paid GitHub Actions minutes used.
     */
    public function total_minutes_used() : int
    {
        return $this->total_minutes_used;
    }
    /**
     * The total paid GitHub Actions minutes used.
     */
    public function total_paid_minutes_used() : int
    {
        return $this->total_paid_minutes_used;
    }
    /**
     * The amount of free GitHub Actions minutes available.
     */
    public function included_minutes() : int
    {
        return $this->included_minutes;
    }
    public function minutes_used_breakdown() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C585073601042Bb09034Df0Cfd5E1D9A6
    {
        return $this->minutes_used_breakdown;
    }
}
