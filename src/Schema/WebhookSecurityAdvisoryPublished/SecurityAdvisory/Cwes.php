<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\WebhookSecurityAdvisoryPublished\SecurityAdvisory;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Cwes
{
    public const SCHEMA_JSON         = '{"required":["cwe_id","name"],"type":"object","properties":{"cwe_id":{"type":"string"},"name":{"type":"string"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"cwe_id":"generated","name":"generated"}';

    public function __construct(#[MapFrom('cwe_id')] public string $cweId, public string $name)
    {
    }
}
