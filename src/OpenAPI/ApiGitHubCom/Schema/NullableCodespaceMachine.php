<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class NullableCodespaceMachine
{
    public const SCHEMA_TITLE = 'Codespace machine';
    public const SCHEMA_DESCRIPTION = 'A description of the machine powering a codespace.';
    /**
     * The name of the machine.
     */
    private string $name;
    /**
     * The display name of the machine includes cores, memory, and storage.
     */
    private string $display_name;
    /**
     * The operating system of the machine.
     */
    private string $operating_system;
    /**
     * How much storage is available to the codespace.
     */
    private int $storage_in_bytes;
    /**
     * How much memory is available to the codespace.
     */
    private int $memory_in_bytes;
    /**
     * How many cores are available to the codespace.
     */
    private int $cpus;
    /**
     * Whether a prebuild is currently available when creating a codespace for this machine and repository. If a branch was not specified as a ref, the default branch will be assumed. Value will be "null" if prebuilds are not supported or prebuild availability could not be determined. Value will be "none" if no prebuild is available. Latest values "ready" and "in_progress" indicate the prebuild availability status. Old values "blob" and "pool" will be deprecated soon.
     */
    private ?string $prebuild_availability = null;
    /**
     * The name of the machine.
     */
    public function name() : string
    {
        return $this->name;
    }
    /**
     * The display name of the machine includes cores, memory, and storage.
     */
    public function display_name() : string
    {
        return $this->display_name;
    }
    /**
     * The operating system of the machine.
     */
    public function operating_system() : string
    {
        return $this->operating_system;
    }
    /**
     * How much storage is available to the codespace.
     */
    public function storage_in_bytes() : int
    {
        return $this->storage_in_bytes;
    }
    /**
     * How much memory is available to the codespace.
     */
    public function memory_in_bytes() : int
    {
        return $this->memory_in_bytes;
    }
    /**
     * How many cores are available to the codespace.
     */
    public function cpus() : int
    {
        return $this->cpus;
    }
    /**
     * Whether a prebuild is currently available when creating a codespace for this machine and repository. If a branch was not specified as a ref, the default branch will be assumed. Value will be "null" if prebuilds are not supported or prebuild availability could not be determined. Value will be "none" if no prebuild is available. Latest values "ready" and "in_progress" indicate the prebuild availability status. Old values "blob" and "pool" will be deprecated soon.
     */
    public function prebuild_availability() : ?string
    {
        return $this->prebuild_availability;
    }
}
