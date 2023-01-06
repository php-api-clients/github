<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SetSelfHostedRunnersInGroupForEnterprise;

final class Request
{
    public const SCHEMA_JSON = '{"required":["runners"],"type":"object","properties":{"runners":{"type":"array","items":{"type":"integer","description":"Unique identifier of the runner."},"description":"List of runner IDs to add to the runner group."}}}';
    public const SCHEMA_TITLE = 'SetSelfHostedRunnersInGroupForEnterprise\\Request';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * List of runner IDs to add to the runner group.
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Request\Runners>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Request\Runners::class)
     */
    private array $runners = array();
    /**
     * List of runner IDs to add to the runner group.
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Request\Runners>
     */
    public function runners() : array
    {
        return $this->runners;
    }
}
