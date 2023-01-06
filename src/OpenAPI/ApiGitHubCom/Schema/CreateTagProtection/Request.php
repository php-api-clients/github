<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CreateTagProtection;

final class Request
{
    public const SCHEMA_JSON = '{"required":["pattern"],"type":"object","properties":{"pattern":{"type":"string","description":"An optional glob pattern to match against when enforcing tag protection."}}}';
    public const SCHEMA_TITLE = 'CreateTagProtection\\Request';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * An optional glob pattern to match against when enforcing tag protection.
     */
    private string $pattern;
    /**
     * An optional glob pattern to match against when enforcing tag protection.
     */
    public function pattern() : string
    {
        return $this->pattern;
    }
}
