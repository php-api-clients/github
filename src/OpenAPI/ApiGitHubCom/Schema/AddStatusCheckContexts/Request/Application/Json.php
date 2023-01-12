<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\AddStatusCheckContexts\Request\Application;

final class Json
{
    public const SCHEMA_JSON = '{"oneOf":[{"required":["contexts"],"type":"object","properties":{"contexts":{"type":"array","items":{"type":"string"},"description":"The name of the status checks"}},"example":{"contexts":["contexts"]}},{"type":"array","items":{"type":"string"},"description":"The name of the status checks"}]}';
    public const SCHEMA_TITLE = 'AddStatusCheckContexts\\Request\\Application\\Json';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The name of the status checks
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Json\Contexts>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Json\Contexts::class)
     */
    private array $contexts = array();
    /**
     * The name of the status checks
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Json\Contexts>
     */
    public function contexts() : array
    {
        return $this->contexts;
    }
}
