<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Changes;

final class ColumnId
{
    public const SCHEMA_JSON = '{"required":["from"],"type":"object","properties":{"from":{"type":"integer"}}}';
    public const SCHEMA_TITLE = 'Changes\\ColumnId';
    public const SCHEMA_DESCRIPTION = '';
    private int $from;
    public function from() : int
    {
        return $this->from;
    }
}
