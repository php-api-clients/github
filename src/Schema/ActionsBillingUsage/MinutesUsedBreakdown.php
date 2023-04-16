<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\ActionsBillingUsage;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class MinutesUsedBreakdown
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"UBUNTU":{"type":"integer","description":"Total minutes used on Ubuntu runner machines."},"MACOS":{"type":"integer","description":"Total minutes used on macOS runner machines."},"WINDOWS":{"type":"integer","description":"Total minutes used on Windows runner machines."},"ubuntu_4_core":{"type":"integer","description":"Total minutes used on Ubuntu 4 core runner machines."},"ubuntu_8_core":{"type":"integer","description":"Total minutes used on Ubuntu 8 core runner machines."},"ubuntu_16_core":{"type":"integer","description":"Total minutes used on Ubuntu 16 core runner machines."},"ubuntu_32_core":{"type":"integer","description":"Total minutes used on Ubuntu 32 core runner machines."},"ubuntu_64_core":{"type":"integer","description":"Total minutes used on Ubuntu 64 core runner machines."},"windows_4_core":{"type":"integer","description":"Total minutes used on Windows 4 core runner machines."},"windows_8_core":{"type":"integer","description":"Total minutes used on Windows 8 core runner machines."},"windows_16_core":{"type":"integer","description":"Total minutes used on Windows 16 core runner machines."},"windows_32_core":{"type":"integer","description":"Total minutes used on Windows 32 core runner machines."},"windows_64_core":{"type":"integer","description":"Total minutes used on Windows 64 core runner machines."},"macos_12_core":{"type":"integer","description":"Total minutes used on macOS 12 core runner machines."},"total":{"type":"integer","description":"Total minutes used on all runner machines."}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"UBUNTU":13,"MACOS":13,"WINDOWS":13,"ubuntu_4_core":13,"ubuntu_8_core":13,"ubuntu_16_core":13,"ubuntu_32_core":13,"ubuntu_64_core":13,"windows_4_core":13,"windows_8_core":13,"windows_16_core":13,"windows_32_core":13,"windows_64_core":13,"macos_12_core":13,"total":13}';

    /**
     * ubuntu: Total minutes used on Ubuntu runner machines.
     * macos: Total minutes used on macOS runner machines.
     * windows: Total minutes used on Windows runner machines.
     * ubuntu4Core: Total minutes used on Ubuntu 4 core runner machines.
     * ubuntu8Core: Total minutes used on Ubuntu 8 core runner machines.
     * ubuntu16Core: Total minutes used on Ubuntu 16 core runner machines.
     * ubuntu32Core: Total minutes used on Ubuntu 32 core runner machines.
     * ubuntu64Core: Total minutes used on Ubuntu 64 core runner machines.
     * windows4Core: Total minutes used on Windows 4 core runner machines.
     * windows8Core: Total minutes used on Windows 8 core runner machines.
     * windows16Core: Total minutes used on Windows 16 core runner machines.
     * windows32Core: Total minutes used on Windows 32 core runner machines.
     * windows64Core: Total minutes used on Windows 64 core runner machines.
     * macos12Core: Total minutes used on macOS 12 core runner machines.
     * total: Total minutes used on all runner machines.
     */
    public function __construct(#[MapFrom('UBUNTU')] public ?int $ubuntu, #[MapFrom('MACOS')] public ?int $macos, #[MapFrom('WINDOWS')] public ?int $windows, #[MapFrom('ubuntu_4_core')] public ?int $ubuntu4Core, #[MapFrom('ubuntu_8_core')] public ?int $ubuntu8Core, #[MapFrom('ubuntu_16_core')] public ?int $ubuntu16Core, #[MapFrom('ubuntu_32_core')] public ?int $ubuntu32Core, #[MapFrom('ubuntu_64_core')] public ?int $ubuntu64Core, #[MapFrom('windows_4_core')] public ?int $windows4Core, #[MapFrom('windows_8_core')] public ?int $windows8Core, #[MapFrom('windows_16_core')] public ?int $windows16Core, #[MapFrom('windows_32_core')] public ?int $windows32Core, #[MapFrom('windows_64_core')] public ?int $windows64Core, #[MapFrom('macos_12_core')] public ?int $macos12Core, public ?int $total)
    {
    }
}
