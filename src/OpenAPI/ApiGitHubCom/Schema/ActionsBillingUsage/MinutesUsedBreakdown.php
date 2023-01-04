<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ActionsBillingUsage;

final class MinutesUsedBreakdown
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"UBUNTU":{"type":"integer","description":"Total minutes used on Ubuntu runner machines."},"MACOS":{"type":"integer","description":"Total minutes used on macOS runner machines."},"WINDOWS":{"type":"integer","description":"Total minutes used on Windows runner machines."},"ubuntu_4_core":{"type":"integer","description":"Total minutes used on Ubuntu 4 core runner machines."},"ubuntu_8_core":{"type":"integer","description":"Total minutes used on Ubuntu 8 core runner machines."},"ubuntu_16_core":{"type":"integer","description":"Total minutes used on Ubuntu 16 core runner machines."},"ubuntu_32_core":{"type":"integer","description":"Total minutes used on Ubuntu 32 core runner machines."},"ubuntu_64_core":{"type":"integer","description":"Total minutes used on Ubuntu 64 core runner machines."},"windows_4_core":{"type":"integer","description":"Total minutes used on Windows 4 core runner machines."},"windows_8_core":{"type":"integer","description":"Total minutes used on Windows 8 core runner machines."},"windows_16_core":{"type":"integer","description":"Total minutes used on Windows 16 core runner machines."},"windows_32_core":{"type":"integer","description":"Total minutes used on Windows 32 core runner machines."},"windows_64_core":{"type":"integer","description":"Total minutes used on Windows 64 core runner machines."},"macos_12_core":{"type":"integer","description":"Total minutes used on macOS 12 core runner machines."},"total":{"type":"integer","description":"Total minutes used on all runner machines."}}}';
    public const SCHEMA_TITLE = 'ActionsBillingUsage\\MinutesUsedBreakdown';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * Total minutes used on Ubuntu runner machines.
     */
    private int $UBUNTU;
    /**
     * Total minutes used on macOS runner machines.
     */
    private int $MACOS;
    /**
     * Total minutes used on Windows runner machines.
     */
    private int $WINDOWS;
    /**
     * Total minutes used on Ubuntu 4 core runner machines.
     */
    private int $ubuntu_4_core;
    /**
     * Total minutes used on Ubuntu 8 core runner machines.
     */
    private int $ubuntu_8_core;
    /**
     * Total minutes used on Ubuntu 16 core runner machines.
     */
    private int $ubuntu_16_core;
    /**
     * Total minutes used on Ubuntu 32 core runner machines.
     */
    private int $ubuntu_32_core;
    /**
     * Total minutes used on Ubuntu 64 core runner machines.
     */
    private int $ubuntu_64_core;
    /**
     * Total minutes used on Windows 4 core runner machines.
     */
    private int $windows_4_core;
    /**
     * Total minutes used on Windows 8 core runner machines.
     */
    private int $windows_8_core;
    /**
     * Total minutes used on Windows 16 core runner machines.
     */
    private int $windows_16_core;
    /**
     * Total minutes used on Windows 32 core runner machines.
     */
    private int $windows_32_core;
    /**
     * Total minutes used on Windows 64 core runner machines.
     */
    private int $windows_64_core;
    /**
     * Total minutes used on macOS 12 core runner machines.
     */
    private int $macos_12_core;
    /**
     * Total minutes used on all runner machines.
     */
    private int $total;
    /**
     * Total minutes used on Ubuntu runner machines.
     */
    public function UBUNTU() : int
    {
        return $this->UBUNTU;
    }
    /**
     * Total minutes used on macOS runner machines.
     */
    public function MACOS() : int
    {
        return $this->MACOS;
    }
    /**
     * Total minutes used on Windows runner machines.
     */
    public function WINDOWS() : int
    {
        return $this->WINDOWS;
    }
    /**
     * Total minutes used on Ubuntu 4 core runner machines.
     */
    public function ubuntu_4_core() : int
    {
        return $this->ubuntu_4_core;
    }
    /**
     * Total minutes used on Ubuntu 8 core runner machines.
     */
    public function ubuntu_8_core() : int
    {
        return $this->ubuntu_8_core;
    }
    /**
     * Total minutes used on Ubuntu 16 core runner machines.
     */
    public function ubuntu_16_core() : int
    {
        return $this->ubuntu_16_core;
    }
    /**
     * Total minutes used on Ubuntu 32 core runner machines.
     */
    public function ubuntu_32_core() : int
    {
        return $this->ubuntu_32_core;
    }
    /**
     * Total minutes used on Ubuntu 64 core runner machines.
     */
    public function ubuntu_64_core() : int
    {
        return $this->ubuntu_64_core;
    }
    /**
     * Total minutes used on Windows 4 core runner machines.
     */
    public function windows_4_core() : int
    {
        return $this->windows_4_core;
    }
    /**
     * Total minutes used on Windows 8 core runner machines.
     */
    public function windows_8_core() : int
    {
        return $this->windows_8_core;
    }
    /**
     * Total minutes used on Windows 16 core runner machines.
     */
    public function windows_16_core() : int
    {
        return $this->windows_16_core;
    }
    /**
     * Total minutes used on Windows 32 core runner machines.
     */
    public function windows_32_core() : int
    {
        return $this->windows_32_core;
    }
    /**
     * Total minutes used on Windows 64 core runner machines.
     */
    public function windows_64_core() : int
    {
        return $this->windows_64_core;
    }
    /**
     * Total minutes used on macOS 12 core runner machines.
     */
    public function macos_12_core() : int
    {
        return $this->macos_12_core;
    }
    /**
     * Total minutes used on all runner machines.
     */
    public function total() : int
    {
        return $this->total;
    }
}
