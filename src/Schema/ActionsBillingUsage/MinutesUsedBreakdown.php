<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\ActionsBillingUsage;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class MinutesUsedBreakdown
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"UBUNTU":{"type":"integer","description":"Total minutes used on Ubuntu runner machines."},"MACOS":{"type":"integer","description":"Total minutes used on macOS runner machines."},"WINDOWS":{"type":"integer","description":"Total minutes used on Windows runner machines."},"ubuntu_4_core":{"type":"integer","description":"Total minutes used on Ubuntu 4 core runner machines."},"ubuntu_8_core":{"type":"integer","description":"Total minutes used on Ubuntu 8 core runner machines."},"ubuntu_16_core":{"type":"integer","description":"Total minutes used on Ubuntu 16 core runner machines."},"ubuntu_32_core":{"type":"integer","description":"Total minutes used on Ubuntu 32 core runner machines."},"ubuntu_64_core":{"type":"integer","description":"Total minutes used on Ubuntu 64 core runner machines."},"windows_4_core":{"type":"integer","description":"Total minutes used on Windows 4 core runner machines."},"windows_8_core":{"type":"integer","description":"Total minutes used on Windows 8 core runner machines."},"windows_16_core":{"type":"integer","description":"Total minutes used on Windows 16 core runner machines."},"windows_32_core":{"type":"integer","description":"Total minutes used on Windows 32 core runner machines."},"windows_64_core":{"type":"integer","description":"Total minutes used on Windows 64 core runner machines."},"macos_12_core":{"type":"integer","description":"Total minutes used on macOS 12 core runner machines."},"total":{"type":"integer","description":"Total minutes used on all runner machines."}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"UBUNTU":6,"MACOS":5,"WINDOWS":7,"ubuntu_4_core":18,"ubuntu_8_core":19,"ubuntu_16_core":21,"ubuntu_32_core":24,"ubuntu_64_core":24,"windows_4_core":19,"windows_8_core":20,"windows_16_core":22,"windows_32_core":25,"windows_64_core":25,"macos_12_core":19,"total":5}';

    /**
     * ubuntu: Total minutes used on Ubuntu runner machines.
     * macos: Total minutes used on macOS runner machines.
     * windows: Total minutes used on Windows runner machines.
     * ubuntuFourCore: Total minutes used on Ubuntu 4 core runner machines.
     * ubuntuEightCore: Total minutes used on Ubuntu 8 core runner machines.
     * ubuntuSixteenCore: Total minutes used on Ubuntu 16 core runner machines.
     * ubuntuThirtyTwoCore: Total minutes used on Ubuntu 32 core runner machines.
     * ubuntuSixtyFourCore: Total minutes used on Ubuntu 64 core runner machines.
     * windowsFourCore: Total minutes used on Windows 4 core runner machines.
     * windowsEightCore: Total minutes used on Windows 8 core runner machines.
     * windowsSixteenCore: Total minutes used on Windows 16 core runner machines.
     * windowsThirtyTwoCore: Total minutes used on Windows 32 core runner machines.
     * windowsSixtyFourCore: Total minutes used on Windows 64 core runner machines.
     * macosTwelveCore: Total minutes used on macOS 12 core runner machines.
     * total: Total minutes used on all runner machines.
     */
    public function __construct(#[MapFrom('UBUNTU')] public ?int $ubuntu, #[MapFrom('MACOS')] public ?int $macos, #[MapFrom('WINDOWS')] public ?int $windows, #[MapFrom('ubuntu_4_core')] public ?int $ubuntuFourCore, #[MapFrom('ubuntu_8_core')] public ?int $ubuntuEightCore, #[MapFrom('ubuntu_16_core')] public ?int $ubuntuSixteenCore, #[MapFrom('ubuntu_32_core')] public ?int $ubuntuThirtyTwoCore, #[MapFrom('ubuntu_64_core')] public ?int $ubuntuSixtyFourCore, #[MapFrom('windows_4_core')] public ?int $windowsFourCore, #[MapFrom('windows_8_core')] public ?int $windowsEightCore, #[MapFrom('windows_16_core')] public ?int $windowsSixteenCore, #[MapFrom('windows_32_core')] public ?int $windowsThirtyTwoCore, #[MapFrom('windows_64_core')] public ?int $windowsSixtyFourCore, #[MapFrom('macos_12_core')] public ?int $macosTwelveCore, public ?int $total)
    {
    }
}
