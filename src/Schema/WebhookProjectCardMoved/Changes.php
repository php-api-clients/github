<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookProjectCardMoved;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Changes
{
    public const SCHEMA_JSON = '{"required":["column_id"],"type":"object","properties":{"column_id":{"required":["from"],"type":"object","properties":{"from":{"type":"integer"}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"column_id":{"from":13}}';
    public function __construct(public ?Schema\WebhookProjectCardMoved\Changes\ColumnId $column_id)
    {
    }
}
