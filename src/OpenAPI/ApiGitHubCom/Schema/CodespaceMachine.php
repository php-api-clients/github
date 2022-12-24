<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class CodespaceMachine
{
    public const SCHEMA_JSON = '{"title":"Codespace machine","required":["name","display_name","operating_system","storage_in_bytes","memory_in_bytes","cpus","prebuild_availability"],"type":"object","properties":{"name":{"type":"string","description":"The name of the machine.","examples":["standardLinux"]},"display_name":{"type":"string","description":"The display name of the machine includes cores, memory, and storage.","examples":["4 cores, 8 GB RAM, 64 GB storage"]},"operating_system":{"type":"string","description":"The operating system of the machine.","examples":["linux"]},"storage_in_bytes":{"type":"integer","description":"How much storage is available to the codespace.","examples":[68719476736]},"memory_in_bytes":{"type":"integer","description":"How much memory is available to the codespace.","examples":[8589934592]},"cpus":{"type":"integer","description":"How many cores are available to the codespace.","examples":[4]},"prebuild_availability":{"enum":["none","ready","in_progress",null],"type":["string","null"],"description":"Whether a prebuild is currently available when creating a codespace for this machine and repository. If a branch was not specified as a ref, the default branch will be assumed. Value will be \\"null\\" if prebuilds are not supported or prebuild availability could not be determined. Value will be \\"none\\" if no prebuild is available. Latest values \\"ready\\" and \\"in_progress\\" indicate the prebuild availability status.","examples":["ready"]}},"description":"A description of the machine powering a codespace."}';
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
     * Whether a prebuild is currently available when creating a codespace for this machine and repository. If a branch was not specified as a ref, the default branch will be assumed. Value will be "null" if prebuilds are not supported or prebuild availability could not be determined. Value will be "none" if no prebuild is available. Latest values "ready" and "in_progress" indicate the prebuild availability status.
     */
    private $prebuild_availability;
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
     * Whether a prebuild is currently available when creating a codespace for this machine and repository. If a branch was not specified as a ref, the default branch will be assumed. Value will be "null" if prebuilds are not supported or prebuild availability could not be determined. Value will be "none" if no prebuild is available. Latest values "ready" and "in_progress" indicate the prebuild availability status.
     */
    public function prebuild_availability()
    {
        return $this->prebuild_availability;
    }
}