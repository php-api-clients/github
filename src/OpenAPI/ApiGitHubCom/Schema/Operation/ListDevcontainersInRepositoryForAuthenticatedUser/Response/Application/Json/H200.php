<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\ListDevcontainersInRepositoryForAuthenticatedUser\Response\Application\Json;

final class H200
{
    public const SCHEMA_JSON = '{"required":["total_count","devcontainers"],"type":"object","properties":{"total_count":{"type":"integer"},"devcontainers":{"type":"array","items":{"required":["path"],"type":"object","properties":{"path":{"type":"string"},"name":{"type":"string"}}}}}}';
    public const SCHEMA_TITLE = 'Operation\\ListDevcontainersInRepositoryForAuthenticatedUser\\Response\\Application\\Json\\H200';
    public const SCHEMA_DESCRIPTION = '';
    public readonly int $total_count;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\H200\Devcontainers>
     */
    public readonly array $devcontainers;
    /**
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\H200\Devcontainers> $devcontainers
     */
    public function __construct(int $total_count, array $devcontainers)
    {
        $this->total_count = $total_count;
        $this->devcontainers = $devcontainers;
    }
}
