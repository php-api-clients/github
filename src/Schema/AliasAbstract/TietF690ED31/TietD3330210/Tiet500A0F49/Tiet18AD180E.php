<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\TietF690ED31\TietD3330210\Tiet500A0F49;

use EventSauce\ObjectHydrator\MapFrom;

abstract readonly class Tiet18AD180E
{
    public const SCHEMA_JSON         = '{"required":["name","runner_group_id","labels"],"type":"object","properties":{"name":{"type":"string","description":"The name of the new runner."},"runner_group_id":{"type":"integer","description":"The ID of the runner group to register the runner to."},"labels":{"maxItems":100,"minItems":1,"type":"array","items":{"type":"string"},"description":"The names of the custom labels to add to the runner. **Minimum items**: 1. **Maximum items**: 100."},"work_folder":{"type":"string","description":"The working directory to be used for job execution, relative to the runner install directory.","default":"_work"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"name":"generated","runner_group_id":15,"labels":["generated","generated","generated","generated","generated","generated","generated","generated","generated","generated","generated","generated","generated","generated","generated","generated","generated","generated","generated","generated","generated","generated","generated","generated","generated","generated","generated","generated","generated","generated","generated","generated","generated","generated","generated","generated","generated","generated","generated","generated","generated","generated","generated","generated","generated","generated","generated","generated","generated","generated","generated","generated","generated","generated","generated","generated","generated","generated","generated","generated","generated","generated","generated","generated","generated","generated","generated","generated","generated","generated","generated","generated","generated","generated","generated","generated","generated","generated","generated","generated","generated","generated","generated","generated","generated","generated","generated","generated","generated","generated","generated","generated","generated","generated","generated","generated","generated","generated","generated","generated"],"work_folder":"generated"}';

    /**
     * name: The name of the new runner.
     * runnerGroupId: The ID of the runner group to register the runner to.
     * labels: The names of the custom labels to add to the runner. **Minimum items**: 1. **Maximum items**: 100.
     * workFolder: The working directory to be used for job execution, relative to the runner install directory.
     */
    public function __construct(public string $name, #[MapFrom('runner_group_id')]
    public int $runnerGroupId, public array $labels, #[MapFrom('work_folder')]
    public string|null $workFolder,)
    {
    }
}
