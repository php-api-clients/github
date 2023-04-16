<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract;

use EventSauce\ObjectHydrator\MapFrom;

abstract readonly class Abstracta304ce1d51cdba42045aa15c0e7cc885
{
    public const SCHEMA_JSON         = '{"required":["vector_string","score"],"type":"object","properties":{"score":{"type":"number"},"vector_string":{"type":["string","null"]}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"score":13.13,"vector_string":"generated_vector_string_null"}';

    public function __construct(public int|float $score, #[MapFrom('vector_string')] public ?string $vectorString)
    {
    }
}
