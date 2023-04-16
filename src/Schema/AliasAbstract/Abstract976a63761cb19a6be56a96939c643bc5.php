<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract;

use EventSauce\ObjectHydrator\MapFrom;

abstract readonly class Abstract976a63761cb19a6be56a96939c643bc5
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"total_ms":{"type":"integer"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"total_ms":13}';

    public function __construct(#[MapFrom('total_ms')] public ?int $totalMs)
    {
    }
}
