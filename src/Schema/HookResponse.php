<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

final readonly class HookResponse
{
    public const SCHEMA_JSON         = '{"title":"Hook Response","required":["code","status","message"],"type":"object","properties":{"code":{"type":["integer","null"]},"status":{"type":["string","null"]},"message":{"type":["string","null"]}}}';
    public const SCHEMA_TITLE        = 'Hook Response';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"code":4,"status":"generated","message":"generated"}';

    public function __construct(public ?int $code, public ?string $status, public ?string $message)
    {
    }
}
