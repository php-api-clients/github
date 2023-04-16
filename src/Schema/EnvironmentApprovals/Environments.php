<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\EnvironmentApprovals;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
use ApiClients\Client\GitHub\Router;
use ApiClients\Client\GitHub\ChunkSize;
final readonly class Environments
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"id":{"type":"integer","description":"The id of the environment.","examples":[56780428]},"node_id":{"type":"string","examples":["MDExOkVudmlyb25tZW50NTY3ODA0Mjg="]},"name":{"type":"string","description":"The name of the environment.","examples":["staging"]},"url":{"type":"string","examples":["https:\\/\\/api.github.com\\/repos\\/github\\/hello-world\\/environments\\/staging"]},"html_url":{"type":"string","examples":["https:\\/\\/github.com\\/github\\/hello-world\\/deployments\\/activity_log?environments_filter=staging"]},"created_at":{"type":"string","description":"The time that the environment was created, in ISO 8601 format.","format":"date-time","examples":["2020-11-23T22:00:40Z"]},"updated_at":{"type":"string","description":"The time that the environment was last updated, in ISO 8601 format.","format":"date-time","examples":["2020-11-23T22:00:40Z"]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"id":56780428,"node_id":"MDExOkVudmlyb25tZW50NTY3ODA0Mjg=","name":"staging","url":"https:\\/\\/api.github.com\\/repos\\/github\\/hello-world\\/environments\\/staging","html_url":"https:\\/\\/github.com\\/github\\/hello-world\\/deployments\\/activity_log?environments_filter=staging","created_at":"2020-11-23T22:00:40Z","updated_at":"2020-11-23T22:00:40Z"}';
    /**
     * id: The id of the environment.
     * name: The name of the environment.
     * createdAt: The time that the environment was created, in ISO 8601 format.
     * updatedAt: The time that the environment was last updated, in ISO 8601 format.
     */
    public function __construct(public ?int $id, #[\EventSauce\ObjectHydrator\MapFrom('node_id')] public ?string $nodeId, public ?string $name, public ?string $url, #[\EventSauce\ObjectHydrator\MapFrom('html_url')] public ?string $htmlUrl, #[\EventSauce\ObjectHydrator\MapFrom('created_at')] public ?string $createdAt, #[\EventSauce\ObjectHydrator\MapFrom('updated_at')] public ?string $updatedAt)
    {
    }
}
