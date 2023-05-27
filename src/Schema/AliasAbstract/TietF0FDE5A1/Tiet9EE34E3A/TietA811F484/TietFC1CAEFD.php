<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\TietF0FDE5A1\Tiet9EE34E3A\TietA811F484;

abstract readonly class TietFC1CAEFD
{
    public const SCHEMA_JSON         = '{"required":["url"],"type":"object","properties":{"url":{"type":"string","format":"uri"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"url":"https:\\/\\/example.com\\/"}';

    public function __construct(public string $url)
    {
    }
}
