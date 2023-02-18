<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ActionsBillingUsage;

final readonly class MinutesUsedBreakdown
{
    public const SCHEMA_JSON        = '{"type":"object","properties":{"UBUNTU":{"type":"integer","description":"Total minutes used on Ubuntu runner machines."},"MACOS":{"type":"integer","description":"Total minutes used on macOS runner machines."},"WINDOWS":{"type":"integer","description":"Total minutes used on Windows runner machines."},"ubuntu_4_core":{"type":"integer","description":"Total minutes used on Ubuntu 4 core runner machines."},"ubuntu_8_core":{"type":"integer","description":"Total minutes used on Ubuntu 8 core runner machines."},"ubuntu_16_core":{"type":"integer","description":"Total minutes used on Ubuntu 16 core runner machines."},"ubuntu_32_core":{"type":"integer","description":"Total minutes used on Ubuntu 32 core runner machines."},"ubuntu_64_core":{"type":"integer","description":"Total minutes used on Ubuntu 64 core runner machines."},"windows_4_core":{"type":"integer","description":"Total minutes used on Windows 4 core runner machines."},"windows_8_core":{"type":"integer","description":"Total minutes used on Windows 8 core runner machines."},"windows_16_core":{"type":"integer","description":"Total minutes used on Windows 16 core runner machines."},"windows_32_core":{"type":"integer","description":"Total minutes used on Windows 32 core runner machines."},"windows_64_core":{"type":"integer","description":"Total minutes used on Windows 64 core runner machines."},"macos_12_core":{"type":"integer","description":"Total minutes used on macOS 12 core runner machines."},"total":{"type":"integer","description":"Total minutes used on all runner machines."}}}';
    public const SCHEMA_TITLE       = '';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * Total minutes used on Ubuntu runner machines.
     */
    public ?int $UBUNTU;
    /**
     * Total minutes used on macOS runner machines.
     */
    public ?int $MACOS;
    /**
     * Total minutes used on Windows runner machines.
     */
    public ?int $WINDOWS;
    /**
     * Total minutes used on Ubuntu 4 core runner machines.
     */
    public ?int $ubuntu_4_core;
    /**
     * Total minutes used on Ubuntu 8 core runner machines.
     */
    public ?int $ubuntu_8_core;
    /**
     * Total minutes used on Ubuntu 16 core runner machines.
     */
    public ?int $ubuntu_16_core;
    /**
     * Total minutes used on Ubuntu 32 core runner machines.
     */
    public ?int $ubuntu_32_core;
    /**
     * Total minutes used on Ubuntu 64 core runner machines.
     */
    public ?int $ubuntu_64_core;
    /**
     * Total minutes used on Windows 4 core runner machines.
     */
    public ?int $windows_4_core;
    /**
     * Total minutes used on Windows 8 core runner machines.
     */
    public ?int $windows_8_core;
    /**
     * Total minutes used on Windows 16 core runner machines.
     */
    public ?int $windows_16_core;
    /**
     * Total minutes used on Windows 32 core runner machines.
     */
    public ?int $windows_32_core;
    /**
     * Total minutes used on Windows 64 core runner machines.
     */
    public ?int $windows_64_core;
    /**
     * Total minutes used on macOS 12 core runner machines.
     */
    public ?int $macos_12_core;
    /**
     * Total minutes used on all runner machines.
     */
    public ?int $total;

    public function __construct(int $UBUNTU, int $MACOS, int $WINDOWS, int $ubuntu_4_core, int $ubuntu_8_core, int $ubuntu_16_core, int $ubuntu_32_core, int $ubuntu_64_core, int $windows_4_core, int $windows_8_core, int $windows_16_core, int $windows_32_core, int $windows_64_core, int $macos_12_core, int $total)
    {
        $this->UBUNTU          = $UBUNTU;
        $this->MACOS           = $MACOS;
        $this->WINDOWS         = $WINDOWS;
        $this->ubuntu_4_core   = $ubuntu_4_core;
        $this->ubuntu_8_core   = $ubuntu_8_core;
        $this->ubuntu_16_core  = $ubuntu_16_core;
        $this->ubuntu_32_core  = $ubuntu_32_core;
        $this->ubuntu_64_core  = $ubuntu_64_core;
        $this->windows_4_core  = $windows_4_core;
        $this->windows_8_core  = $windows_8_core;
        $this->windows_16_core = $windows_16_core;
        $this->windows_32_core = $windows_32_core;
        $this->windows_64_core = $windows_64_core;
        $this->macos_12_core   = $macos_12_core;
        $this->total           = $total;
    }
}
