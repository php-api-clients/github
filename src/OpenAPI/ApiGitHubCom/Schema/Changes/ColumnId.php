<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Changes;

final class ColumnId
{
    public const SCHEMA_JSON = '{"required":["from"],"type":"object","properties":{"from":{"type":"integer"}}}';
    public const SCHEMA_TITLE = 'Changes\\ColumnId';
    public const SCHEMA_DESCRIPTION = '';
    public readonly int $from;
    public function __construct(int $from)
    {
        $this->from = $from;
    }
}
