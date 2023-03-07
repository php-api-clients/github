<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\ActionsBillingUsage;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class MinutesUsedBreakdown
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"UBUNTU":{"type":"integer","description":"Total minutes used on Ubuntu runner machines."},"MACOS":{"type":"integer","description":"Total minutes used on macOS runner machines."},"WINDOWS":{"type":"integer","description":"Total minutes used on Windows runner machines."},"ubuntu_4_core":{"type":"integer","description":"Total minutes used on Ubuntu 4 core runner machines."},"ubuntu_8_core":{"type":"integer","description":"Total minutes used on Ubuntu 8 core runner machines."},"ubuntu_16_core":{"type":"integer","description":"Total minutes used on Ubuntu 16 core runner machines."},"ubuntu_32_core":{"type":"integer","description":"Total minutes used on Ubuntu 32 core runner machines."},"ubuntu_64_core":{"type":"integer","description":"Total minutes used on Ubuntu 64 core runner machines."},"windows_4_core":{"type":"integer","description":"Total minutes used on Windows 4 core runner machines."},"windows_8_core":{"type":"integer","description":"Total minutes used on Windows 8 core runner machines."},"windows_16_core":{"type":"integer","description":"Total minutes used on Windows 16 core runner machines."},"windows_32_core":{"type":"integer","description":"Total minutes used on Windows 32 core runner machines."},"windows_64_core":{"type":"integer","description":"Total minutes used on Windows 64 core runner machines."},"macos_12_core":{"type":"integer","description":"Total minutes used on macOS 12 core runner machines."},"total":{"type":"integer","description":"Total minutes used on all runner machines."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"UBUNTU":13,"MACOS":13,"WINDOWS":13,"ubuntu_4_core":13,"ubuntu_8_core":13,"ubuntu_16_core":13,"ubuntu_32_core":13,"ubuntu_64_core":13,"windows_4_core":13,"windows_8_core":13,"windows_16_core":13,"windows_32_core":13,"windows_64_core":13,"macos_12_core":13,"total":13}';
    /**
     * UBUNTU: Total minutes used on Ubuntu runner machines.
     * MACOS: Total minutes used on macOS runner machines.
     * WINDOWS: Total minutes used on Windows runner machines.
     * ubuntu_4_core: Total minutes used on Ubuntu 4 core runner machines.
     * ubuntu_8_core: Total minutes used on Ubuntu 8 core runner machines.
     * ubuntu_16_core: Total minutes used on Ubuntu 16 core runner machines.
     * ubuntu_32_core: Total minutes used on Ubuntu 32 core runner machines.
     * ubuntu_64_core: Total minutes used on Ubuntu 64 core runner machines.
     * windows_4_core: Total minutes used on Windows 4 core runner machines.
     * windows_8_core: Total minutes used on Windows 8 core runner machines.
     * windows_16_core: Total minutes used on Windows 16 core runner machines.
     * windows_32_core: Total minutes used on Windows 32 core runner machines.
     * windows_64_core: Total minutes used on Windows 64 core runner machines.
     * macos_12_core: Total minutes used on macOS 12 core runner machines.
     * total: Total minutes used on all runner machines.
     */
    public function __construct(public ?int $UBUNTU, public ?int $MACOS, public ?int $WINDOWS, public ?int $ubuntu_4_core, public ?int $ubuntu_8_core, public ?int $ubuntu_16_core, public ?int $ubuntu_32_core, public ?int $ubuntu_64_core, public ?int $windows_4_core, public ?int $windows_8_core, public ?int $windows_16_core, public ?int $windows_32_core, public ?int $windows_64_core, public ?int $macos_12_core, public ?int $total)
    {
    }
}
