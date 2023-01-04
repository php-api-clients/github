<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Changes;

final class ArchivedAt
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"from":{"type":["string","null"],"format":"date-time"},"to":{"type":["string","null"],"format":"date-time"}}}';
    public const SCHEMA_TITLE = 'Changes\\ArchivedAt';
    public const SCHEMA_DESCRIPTION = '';
    private ?string $from;
    private ?string $to;
    public function from() : ?string
    {
        return $this->from;
    }
    public function to() : ?string
    {
        return $this->to;
    }
}
