<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\WebhookProjectCardMoved\Changes;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class ColumnId
{
    public const SCHEMA_JSON = '{"required":["from"],"type":"object","properties":{"from":{"type":"integer"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"from":13}';
    public function __construct(public int $from)
    {
    }
}
