<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class ActionsBillingUsage
{
    public const SCHEMA_JSON = '{"required":["total_minutes_used","total_paid_minutes_used","included_minutes","minutes_used_breakdown"],"type":"object","properties":{"total_minutes_used":{"type":"integer","description":"The sum of the free and paid GitHub Actions minutes used."},"total_paid_minutes_used":{"type":"integer","description":"The total paid GitHub Actions minutes used."},"included_minutes":{"type":"integer","description":"The amount of free GitHub Actions minutes available."},"minutes_used_breakdown":{"type":"object","properties":{"UBUNTU":{"type":"integer","description":"Total minutes used on Ubuntu runner machines."},"MACOS":{"type":"integer","description":"Total minutes used on macOS runner machines."},"WINDOWS":{"type":"integer","description":"Total minutes used on Windows runner machines."},"ubuntu_4_core":{"type":"integer","description":"Total minutes used on Ubuntu 4 core runner machines."},"ubuntu_8_core":{"type":"integer","description":"Total minutes used on Ubuntu 8 core runner machines."},"ubuntu_16_core":{"type":"integer","description":"Total minutes used on Ubuntu 16 core runner machines."},"ubuntu_32_core":{"type":"integer","description":"Total minutes used on Ubuntu 32 core runner machines."},"ubuntu_64_core":{"type":"integer","description":"Total minutes used on Ubuntu 64 core runner machines."},"windows_4_core":{"type":"integer","description":"Total minutes used on Windows 4 core runner machines."},"windows_8_core":{"type":"integer","description":"Total minutes used on Windows 8 core runner machines."},"windows_16_core":{"type":"integer","description":"Total minutes used on Windows 16 core runner machines."},"windows_32_core":{"type":"integer","description":"Total minutes used on Windows 32 core runner machines."},"windows_64_core":{"type":"integer","description":"Total minutes used on Windows 64 core runner machines."},"macos_12_core":{"type":"integer","description":"Total minutes used on macOS 12 core runner machines."},"total":{"type":"integer","description":"Total minutes used on all runner machines."}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"totalMinutesUsed":13,"totalPaidMinutesUsed":13,"includedMinutes":13,"minutesUsedBreakdown":{"ubuntu":13,"macos":13,"windows":13,"ubuntu4Core":13,"ubuntu8Core":13,"ubuntu16Core":13,"ubuntu32Core":13,"ubuntu64Core":13,"windows4Core":13,"windows8Core":13,"windows16Core":13,"windows32Core":13,"windows64Core":13,"macos12Core":13,"total":13}}';
    /**
     * totalMinutesUsed: The sum of the free and paid GitHub Actions minutes used.
     * totalPaidMinutesUsed: The total paid GitHub Actions minutes used.
     * includedMinutes: The amount of free GitHub Actions minutes available.
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('total_minutes_used')] public int $totalMinutesUsed, #[\EventSauce\ObjectHydrator\MapFrom('total_paid_minutes_used')] public int $totalPaidMinutesUsed, #[\EventSauce\ObjectHydrator\MapFrom('included_minutes')] public int $includedMinutes, #[\EventSauce\ObjectHydrator\MapFrom('minutes_used_breakdown')] public Schema\ActionsBillingUsage\MinutesUsedBreakdown $minutesUsedBreakdown)
    {
    }
}
