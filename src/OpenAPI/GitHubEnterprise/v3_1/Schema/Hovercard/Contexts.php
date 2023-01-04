<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Hovercard;

final class Contexts
{
    public const SCHEMA_JSON = '{"required":["message","octicon"],"type":"object","properties":{"message":{"type":"string"},"octicon":{"type":"string"}}}';
    public const SCHEMA_TITLE = 'Hovercard\\Contexts';
    public const SCHEMA_DESCRIPTION = '';
    private string $message;
    private string $octicon;
    public function message() : string
    {
        return $this->message;
    }
    public function octicon() : string
    {
        return $this->octicon;
    }
}
