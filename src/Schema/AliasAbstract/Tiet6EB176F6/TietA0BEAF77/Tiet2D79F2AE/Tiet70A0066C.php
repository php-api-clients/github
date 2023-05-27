<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\Tiet6EB176F6\TietA0BEAF77\Tiet2D79F2AE;

abstract readonly class Tiet70A0066C
{
    public const SCHEMA_JSON         = '{"required":["from"],"type":"object","properties":{"from":{"enum":["off","non_admins","everyone"],"type":"string"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"from":"everyone"}';

    public function __construct(public string $from)
    {
    }
}
