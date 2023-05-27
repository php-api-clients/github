<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\Tiet976A6376\Tiet1CB19A6B\TietE56A9693;

use EventSauce\ObjectHydrator\MapFrom;

abstract readonly class Tiet9C643BC5
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"total_ms":{"type":"integer"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"total_ms":8}';

    public function __construct(#[MapFrom('total_ms')] public ?int $totalMs)
    {
    }
}
