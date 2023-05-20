<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\CodeScanningAlertInstance;

final readonly class Message
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"text":{"type":"string"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"text":"generated"}';

    public function __construct(public ?string $text)
    {
    }
}
