<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookProjectCardMoved;

final class Changes
{
    public const SCHEMA_JSON = '{"required":["column_id"],"type":"object","properties":{"column_id":{"required":["from"],"type":"object","properties":{"from":{"type":"integer"}}}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'WebhookProjectCardMoved\\Changes';
    public const SCHEMA_DESCRIPTION = '';
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Changes\ColumnId $column_id;
    public function __construct(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Changes\ColumnId $column_id)
    {
        $this->column_id = $column_id;
    }
}
