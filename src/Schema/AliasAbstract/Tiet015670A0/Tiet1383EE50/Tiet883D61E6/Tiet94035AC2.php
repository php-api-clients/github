<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\Tiet015670A0\Tiet1383EE50\Tiet883D61E6;

abstract readonly class Tiet94035AC2
{
    public const SCHEMA_JSON         = '{"required":["verified","reason","signature","payload"],"type":"object","properties":{"verified":{"type":"boolean"},"reason":{"type":"string"},"signature":{"type":["string","null"]},"payload":{"type":["string","null"]}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"verified":false,"reason":"generated","signature":"generated","payload":"generated"}';

    public function __construct(public bool $verified, public string $reason, public string|null $signature, public string|null $payload)
    {
    }
}
