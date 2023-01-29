<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Hovercard;

final class Contexts
{
    public const SCHEMA_JSON = '{"required":["message","octicon"],"type":"object","properties":{"message":{"type":"string"},"octicon":{"type":"string"}}}';
    public const SCHEMA_TITLE = 'Hovercard\\Contexts';
    public const SCHEMA_DESCRIPTION = '';
    public readonly string $message;
    public readonly string $octicon;
    public function __construct(string $message, string $octicon)
    {
        $this->message = $message;
        $this->octicon = $octicon;
    }
}
