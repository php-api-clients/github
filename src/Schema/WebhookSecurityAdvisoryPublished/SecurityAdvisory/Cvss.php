<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\WebhookSecurityAdvisoryPublished\SecurityAdvisory;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Cvss
{
    public const SCHEMA_JSON         = '{"required":["vector_string","score"],"type":"object","properties":{"score":{"type":"number"},"vector_string":{"type":["string","null"]}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"score":0.5,"vector_string":"generated"}';

    public function __construct(public int|float $score, #[MapFrom('vector_string')] public ?string $vectorString)
    {
    }
}
