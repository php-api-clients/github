<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\WebhookProjectCardMoved;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class Changes
{
    public const SCHEMA_JSON = '{"required":["column_id"],"type":"object","properties":{"column_id":{"required":["from"],"type":"object","properties":{"from":{"type":"integer"}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"column_id":{"from":13}}';
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('column_id')] public Schema\WebhookProjectCardMoved\Changes\ColumnId $columnId)
    {
    }
}
