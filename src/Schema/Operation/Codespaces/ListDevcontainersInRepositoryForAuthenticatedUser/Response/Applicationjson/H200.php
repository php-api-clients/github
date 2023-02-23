<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\Operation\Codespaces\ListDevcontainersInRepositoryForAuthenticatedUser\Response\Applicationjson;

final readonly class H200
{
    public const SCHEMA_JSON = '{"required":["total_count","devcontainers"],"type":"object","properties":{"total_count":{"type":"integer"},"devcontainers":{"type":"array","items":{"required":["path"],"type":"object","properties":{"path":{"type":"string"},"name":{"type":"string"}}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public ?int $total_count;
    public ?array $devcontainers;
    public function __construct(int $total_count, array $devcontainers)
    {
        $this->total_count = $total_count;
        $this->devcontainers = $devcontainers;
    }
}
