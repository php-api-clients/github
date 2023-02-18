<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookProjectCardMoved\Changes;

final readonly class ColumnId
{
    public const SCHEMA_JSON = '{"required":["from"],"type":"object","properties":{"from":{"type":"integer"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public ?int $from;
    public function __construct(int $from)
    {
        $this->from = $from;
    }
}
