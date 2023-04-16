<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract;

use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\Schema\CodespaceMachine;
use EventSauce\ObjectHydrator\MapFrom;
use EventSauce\ObjectHydrator\PropertyCasters\CastListToType;

abstract readonly class Abstractdcad5e8f2eec4de5b5cb16bffb04ba48
{
    public const SCHEMA_JSON         = '{"required":["total_count","machines"],"type":"object","properties":{"total_count":{"type":"integer"},"machines":{"type":"array","items":{"title":"Codespace machine","required":["name","display_name","operating_system","storage_in_bytes","memory_in_bytes","cpus","prebuild_availability"],"type":"object","properties":{"name":{"type":"string","description":"The name of the machine.","examples":["standardLinux"]},"display_name":{"type":"string","description":"The display name of the machine includes cores, memory, and storage.","examples":["4 cores, 8 GB RAM, 64 GB storage"]},"operating_system":{"type":"string","description":"The operating system of the machine.","examples":["linux"]},"storage_in_bytes":{"type":"integer","description":"How much storage is available to the codespace.","examples":[68719476736]},"memory_in_bytes":{"type":"integer","description":"How much memory is available to the codespace.","examples":[8589934592]},"cpus":{"type":"integer","description":"How many cores are available to the codespace.","examples":[4]},"prebuild_availability":{"enum":["none","ready","in_progress",null],"type":["string","null"],"description":"Whether a prebuild is currently available when creating a codespace for this machine and repository. If a branch was not specified as a ref, the default branch will be assumed. Value will be \\"null\\" if prebuilds are not supported or prebuild availability could not be determined. Value will be \\"none\\" if no prebuild is available. Latest values \\"ready\\" and \\"in_progress\\" indicate the prebuild availability status.","examples":["ready"]}},"description":"A description of the machine powering a codespace."}}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"total_count":13,"machines":[{"name":"standardLinux","display_name":"4 cores, 8 GB RAM, 64 GB storage","operating_system":"linux","storage_in_bytes":68719476736,"memory_in_bytes":8589934592,"cpus":4,"prebuild_availability":"ready"}]}';

    /**
     * @param array<CodespaceMachine> $machines
     */
    public function __construct(#[MapFrom('total_count')] public int $totalCount, #[CastListToType(Schema\CodespaceMachine::class)] public array $machines)
    {
    }
}
