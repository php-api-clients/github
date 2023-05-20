<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\PageBuild;

final readonly class Error
{
    public const SCHEMA_JSON         = '{"required":["message"],"type":"object","properties":{"message":{"type":["string","null"]}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"message":"generated"}';

    public function __construct(public ?string $message)
    {
    }
}
