<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\WebhookProjectCardEdited\Changes;

final readonly class Note
{
    public const SCHEMA_JSON         = '{"required":["from"],"type":"object","properties":{"from":{"type":["string","null"]}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"from":"generated"}';

    public function __construct(public ?string $from)
    {
    }
}
