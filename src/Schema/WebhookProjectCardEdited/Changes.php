<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookProjectCardEdited;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Changes
{
    public const SCHEMA_JSON = '{"required":["note"],"type":"object","properties":{"note":{"required":["from"],"type":"object","properties":{"from":{"type":["string","null"]}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"note":{"from":"generated_from_null"}}';
    public function __construct(public Schema\WebhookProjectCardEdited\Changes\Note $note)
    {
    }
}
