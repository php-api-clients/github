<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Changes;

final class ArchivedAt
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"from":{"type":["string","null"],"format":"date-time"},"to":{"type":["string","null"],"format":"date-time"}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'Changes\\ArchivedAt';
    public const SCHEMA_DESCRIPTION = '';
    public readonly ?string $from;
    public readonly ?string $to;
    public function __construct(string $from, string $to)
    {
        $this->from = $from;
        $this->to = $to;
    }
}
