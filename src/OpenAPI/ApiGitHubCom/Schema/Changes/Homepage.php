<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Changes;

final class Homepage
{
    public const SCHEMA_JSON = '{"required":["from"],"type":"object","properties":{"from":{"type":["string","null"]}}}';
    public const SCHEMA_TITLE = 'Changes\\Homepage';
    public const SCHEMA_DESCRIPTION = '';
    public readonly ?string $from;
    public function __construct(string $from)
    {
        $this->from = $from;
    }
}
