<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class ActionsBillingUsage
{
    public const SCHEMA_JSON         = '{"required":["total_minutes_used","total_paid_minutes_used","included_minutes","minutes_used_breakdown"],"type":"object","properties":{"total_minutes_used":{"type":"integer","description":"The sum of the free and paid GitHub Actions minutes used."},"total_paid_minutes_used":{"type":"integer","description":"The total paid GitHub Actions minutes used."},"included_minutes":{"type":"integer","description":"The amount of free GitHub Actions minutes available."},"minutes_used_breakdown":{"type":"object","properties":{"UBUNTU":{"type":"integer","description":"Total minutes used on Ubuntu runner machines."},"MACOS":{"type":"integer","description":"Total minutes used on macOS runner machines."},"WINDOWS":{"type":"integer","description":"Total minutes used on Windows runner machines."},"ubuntu_4_core":{"type":"integer","description":"Total minutes used on Ubuntu 4 core runner machines."},"ubuntu_8_core":{"type":"integer","description":"Total minutes used on Ubuntu 8 core runner machines."},"ubuntu_16_core":{"type":"integer","description":"Total minutes used on Ubuntu 16 core runner machines."},"ubuntu_32_core":{"type":"integer","description":"Total minutes used on Ubuntu 32 core runner machines."},"ubuntu_64_core":{"type":"integer","description":"Total minutes used on Ubuntu 64 core runner machines."},"windows_4_core":{"type":"integer","description":"Total minutes used on Windows 4 core runner machines."},"windows_8_core":{"type":"integer","description":"Total minutes used on Windows 8 core runner machines."},"windows_16_core":{"type":"integer","description":"Total minutes used on Windows 16 core runner machines."},"windows_32_core":{"type":"integer","description":"Total minutes used on Windows 32 core runner machines."},"windows_64_core":{"type":"integer","description":"Total minutes used on Windows 64 core runner machines."},"macos_12_core":{"type":"integer","description":"Total minutes used on macOS 12 core runner machines."},"total":{"type":"integer","description":"Total minutes used on all runner machines."}}}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"total_minutes_used":18,"total_paid_minutes_used":23,"included_minutes":16,"minutes_used_breakdown":{"UBUNTU":6,"MACOS":5,"WINDOWS":7,"ubuntu_4_core":18,"ubuntu_8_core":19,"ubuntu_16_core":21,"ubuntu_32_core":24,"ubuntu_64_core":24,"windows_4_core":19,"windows_8_core":20,"windows_16_core":22,"windows_32_core":25,"windows_64_core":25,"macos_12_core":19,"total":5}}';

    /**
     * totalMinutesUsed: The sum of the free and paid GitHub Actions minutes used.
     * totalPaidMinutesUsed: The total paid GitHub Actions minutes used.
     * includedMinutes: The amount of free GitHub Actions minutes available.
     */
    public function __construct(#[MapFrom('total_minutes_used')] public int $totalMinutesUsed, #[MapFrom('total_paid_minutes_used')] public int $totalPaidMinutesUsed, #[MapFrom('included_minutes')] public int $includedMinutes, #[MapFrom('minutes_used_breakdown')] public Schema\ActionsBillingUsage\MinutesUsedBreakdown $minutesUsedBreakdown)
    {
    }
}
