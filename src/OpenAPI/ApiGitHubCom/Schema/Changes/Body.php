<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Changes;

final class Body
{
    public const SCHEMA_JSON = '{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The previous version of the body if the action was `edited`."}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'Changes\\Body';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The previous version of the body if the action was `edited`.
     */
    public readonly string $from;
    public function __construct(string $from)
    {
        $this->from = $from;
    }
}
