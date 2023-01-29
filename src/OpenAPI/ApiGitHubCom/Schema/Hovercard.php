<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class Hovercard
{
    public const SCHEMA_JSON = '{"title":"Hovercard","required":["contexts"],"type":"object","properties":{"contexts":{"type":"array","items":{"required":["message","octicon"],"type":"object","properties":{"message":{"type":"string"},"octicon":{"type":"string"}}}}},"description":"Hovercard"}';
    public const SCHEMA_TITLE = 'Hovercard';
    public const SCHEMA_DESCRIPTION = 'Hovercard';
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Hovercard\Contexts>
     */
    public readonly array $contexts;
    /**
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Hovercard\Contexts> $contexts
     */
    public function __construct(array $contexts)
    {
        $this->contexts = $contexts;
    }
}
