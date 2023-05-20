<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Operations\Projects\MoveCard\Response\ApplicationJson\ServiceUnavailable;

final readonly class Errors
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"code":{"type":"string"},"message":{"type":"string"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"code":"generated","message":"generated"}';

    public function __construct(public ?string $code, public ?string $message)
    {
    }
}
