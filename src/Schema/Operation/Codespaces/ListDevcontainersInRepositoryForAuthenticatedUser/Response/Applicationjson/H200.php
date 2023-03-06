<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\Operation\Codespaces\ListDevcontainersInRepositoryForAuthenticatedUser\Response\Applicationjson;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class H200
{
    public const SCHEMA_JSON = '{"required":["total_count","devcontainers"],"type":"object","properties":{"total_count":{"type":"integer"},"devcontainers":{"type":"array","items":{"required":["path"],"type":"object","properties":{"path":{"type":"string"},"name":{"type":"string"},"display_name":{"type":"string"}}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"total_count":13,"devcontainers":[{"path":"generated_path","name":"generated_name","display_name":"generated_display_name"}]}';
    /**
     * @param ?array<\ApiClients\Client\GitHub\Schema\Operation\Codespaces\ListDevcontainersInRepositoryForAuthenticatedUser\Response\Applicationjson\H200\Devcontainers> $devcontainers
     */
    public function __construct(public ?int $total_count, #[\EventSauce\ObjectHydrator\PropertyCasters\CastListToType(Schema\Operation\Codespaces\ListDevcontainersInRepositoryForAuthenticatedUser\Response\Applicationjson\H200\Devcontainers::class)] public ?array $devcontainers)
    {
    }
}
