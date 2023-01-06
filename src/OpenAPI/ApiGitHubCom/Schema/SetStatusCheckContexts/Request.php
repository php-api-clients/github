<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SetStatusCheckContexts;

final class Request
{
    public const SCHEMA_JSON = '{"oneOf":[{"required":["contexts"],"type":"object","properties":{"contexts":{"type":"array","items":{"type":"string"},"description":"The name of the status checks"}},"example":{"contexts":["contexts"]}},{"type":"array","items":{"type":"string"},"description":"The name of the status checks"}]}';
    public const SCHEMA_TITLE = 'SetStatusCheckContexts\\Request';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The name of the status checks
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Request\Contexts>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Request\Contexts::class)
     */
    private array $contexts = array();
    /**
     * The name of the status checks
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Request\Contexts>
     */
    public function contexts() : array
    {
        return $this->contexts;
    }
}
