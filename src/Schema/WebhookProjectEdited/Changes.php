<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\WebhookProjectEdited;

use ApiClients\Client\GitHub\Schema;

final readonly class Changes
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"body":{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The previous version of the body if the action was `edited`."}}},"name":{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The changes to the project if the action was `edited`."}}}},"description":"The changes to the project if the action was `edited`."}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'The changes to the project if the action was `edited`.';
    public const SCHEMA_EXAMPLE_DATA = '{"body":{"from":"generated"},"name":{"from":"generated"}}';

    public function __construct(public Schema\WebhookProjectEdited\Changes\Body|null $body, public Schema\WebhookProjectEdited\Changes\Name|null $name)
    {
    }
}
