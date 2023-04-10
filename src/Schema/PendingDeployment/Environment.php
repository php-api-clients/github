<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\PendingDeployment;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class Environment
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"id":{"type":"integer","description":"The id of the environment.","examples":[56780428]},"node_id":{"type":"string","examples":["MDExOkVudmlyb25tZW50NTY3ODA0Mjg="]},"name":{"type":"string","description":"The name of the environment.","examples":["staging"]},"url":{"type":"string","examples":["https:\\/\\/api.github.com\\/repos\\/github\\/hello-world\\/environments\\/staging"]},"html_url":{"type":"string","examples":["https:\\/\\/github.com\\/github\\/hello-world\\/deployments\\/activity_log?environments_filter=staging"]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"id":56780428,"node_id":"MDExOkVudmlyb25tZW50NTY3ODA0Mjg=","name":"staging","url":"https:\\/\\/api.github.com\\/repos\\/github\\/hello-world\\/environments\\/staging","html_url":"https:\\/\\/github.com\\/github\\/hello-world\\/deployments\\/activity_log?environments_filter=staging"}';
    /**
     * id: The id of the environment.
     * name: The name of the environment.
     */
    public function __construct(public ?int $id, #[\EventSauce\ObjectHydrator\MapFrom('node_id')] public ?string $nodeId, public ?string $name, public ?string $url, #[\EventSauce\ObjectHydrator\MapFrom('html_url')] public ?string $htmlUrl)
    {
    }
}
