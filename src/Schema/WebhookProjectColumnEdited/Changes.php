<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\WebhookProjectColumnEdited;

use ApiClients\Client\GitHub\Schema;

final readonly class Changes
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"name":{"required":["from"],"type":"object","properties":{"from":{"type":"string"}}}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"name":{"from":"generated"}}';

    public function __construct(public Schema\WebhookProjectColumnEdited\Changes\Name|null $name)
    {
    }
}
