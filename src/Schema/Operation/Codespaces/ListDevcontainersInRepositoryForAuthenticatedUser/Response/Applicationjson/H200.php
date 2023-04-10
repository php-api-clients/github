<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\Operation\Codespaces\ListDevcontainersInRepositoryForAuthenticatedUser\Response\Applicationjson;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class H200
{
    public const SCHEMA_JSON = '{"required":["total_count","devcontainers"],"type":"object","properties":{"total_count":{"type":"integer"},"devcontainers":{"type":"array","items":{"required":["path"],"type":"object","properties":{"path":{"type":"string"},"name":{"type":"string"},"display_name":{"type":"string"}}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"total_count":13,"devcontainers":[{"path":"generated_path_null","name":"generated_name_null","display_name":"generated_display_name_null"}]}';
    /**
     * @param array<\ApiClients\Client\Github\Schema\Operation\Codespaces\ListDevcontainersInRepositoryForAuthenticatedUser\Response\Applicationjson\H200\Devcontainers> $devcontainers
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('total_count')] public int $totalCount, #[\EventSauce\ObjectHydrator\PropertyCasters\CastListToType(Schema\Operation\Codespaces\ListDevcontainersInRepositoryForAuthenticatedUser\Response\Applicationjson\H200\Devcontainers::class)] public array $devcontainers)
    {
    }
}
