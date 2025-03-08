<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Actions\UpdateHostedRunnerForOrg\Request;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "name": {
            "type": "string",
            "description": "Name of the runner. Must be between 1 and 64 characters and may only contain upper and lowercase letters a-z, numbers 0-9, \'.\', \'-\', and \'_\'."
        },
        "runner_group_id": {
            "type": "integer",
            "description": "The existing runner group to add this runner to."
        },
        "maximum_runners": {
            "type": "integer",
            "description": "The maximum amount of runners to scale up to. Runners will not auto-scale above this number. Use this setting to limit your cost."
        },
        "enable_static_ip": {
            "type": "boolean",
            "description": "Whether this runner should be updated with a static public IP. Note limit on account. To list limits on account, use `GET actions\\/hosted-runners\\/limits`"
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "name": "generated",
    "runner_group_id": 15,
    "maximum_runners": 15,
    "enable_static_ip": false
}';

    /**
     * name: Name of the runner. Must be between 1 and 64 characters and may only contain upper and lowercase letters a-z, numbers 0-9, '.', '-', and '_'.
     * runnerGroupId: The existing runner group to add this runner to.
     * maximumRunners: The maximum amount of runners to scale up to. Runners will not auto-scale above this number. Use this setting to limit your cost.
     * enableStaticIp: Whether this runner should be updated with a static public IP. Note limit on account. To list limits on account, use `GET actions/hosted-runners/limits`
     */
    public function __construct(public string|null $name, #[MapFrom('runner_group_id')]
    public int|null $runnerGroupId, #[MapFrom('maximum_runners')]
    public int|null $maximumRunners, #[MapFrom('enable_static_ip')]
    public bool|null $enableStaticIp,)
    {
    }
}
