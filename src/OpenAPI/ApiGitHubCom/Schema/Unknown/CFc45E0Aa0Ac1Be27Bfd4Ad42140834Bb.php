<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown;

final class CFc45E0Aa0Ac1Be27Bfd4Ad42140834Bb
{
    public const SCHEMA_JSON = '{"required":["pattern"],"type":"object","properties":{"pattern":{"type":"string","description":"An optional glob pattern to match against when enforcing tag protection."}}}';
    public const SCHEMA_TITLE = 'c_fc45e0aa0ac1be27bfd4ad42140834bb';
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
