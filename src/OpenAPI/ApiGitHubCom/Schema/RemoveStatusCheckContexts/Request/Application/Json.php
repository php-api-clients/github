<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RemoveStatusCheckContexts\Request\Application;

final class Json
{
    public const SCHEMA_JSON = '{"oneOf":[{"required":["contexts"],"type":"object","properties":{"contexts":{"type":"array","items":{"type":"string"},"description":"The name of the status checks"}},"example":{"contexts":["contexts"]}},{"type":"array","items":{"type":"string"},"description":"The name of the status checks"}]}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'RemoveStatusCheckContexts\\Request\\Application\\Json';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The name of the status checks
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Json\Contexts>
     */
    public readonly array $contexts;
    /**
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Json\Contexts> $contexts
     */
    public function __construct(array $contexts)
    {
        $this->contexts = $contexts;
    }
}
