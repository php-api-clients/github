<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract;

abstract readonly class Abstractf77b7beed3678f701df1eadebe02277d
{
    public const SCHEMA_JSON         = '{"required":["href"],"type":"object","properties":{"href":{"type":"string"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"href":"generated_href_null"}';

    public function __construct(public string $href)
    {
    }
}
