<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookProjectCardMoved;

final class Changes
{
    public const SCHEMA_JSON = '{"required":["column_id"],"type":"object","properties":{"column_id":{"required":["from"],"type":"object","properties":{"from":{"type":"integer"}}}}}';
    public const SCHEMA_TITLE = 'WebhookProjectCardMoved\\Changes';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Changes\ColumnId::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Changes\ColumnId $column_id;
    public function column_id() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Changes\ColumnId
    {
        return $this->column_id;
    }
}
