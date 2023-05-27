<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\TietFE7865BF\Tiet5F7F1DFF\TietE50994AE;

abstract readonly class TietB8600E0B
{
    public const SCHEMA_JSON         = '{"required":["name","value"],"type":"object","properties":{"name":{"type":"string","description":"The name of the variable."},"value":{"type":"string","description":"The value of the variable."}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"name":"generated","value":"generated"}';

    /**
     * name: The name of the variable.
     * value: The value of the variable.
     */
    public function __construct(public string $name, public string $value)
    {
    }
}
