<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\TietF5944C0A\TietAA99D7D8\Tiet9AE1F544;

use EventSauce\ObjectHydrator\MapFrom;

abstract readonly class TietA28F869C
{
    public const SCHEMA_JSON         = '{"required":["seats_created"],"type":"object","properties":{"seats_created":{"type":"integer"}},"description":"The total number of seat assignments created."}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'The total number of seat assignments created.';
    public const SCHEMA_EXAMPLE_DATA = '{"seats_created":13}';

    public function __construct(#[MapFrom('seats_created')]
    public int $seatsCreated,)
    {
    }
}
