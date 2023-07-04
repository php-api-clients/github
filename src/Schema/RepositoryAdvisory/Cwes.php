<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\RepositoryAdvisory;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Cwes
{
    public const SCHEMA_JSON         = '{"required":["cwe_id","name"],"type":"object","properties":{"cwe_id":{"type":"string","description":"The Common Weakness Enumeration (CWE) identifier."},"name":{"type":"string","description":"The name of the CWE.","readOnly":true}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"cwe_id":"generated","name":"generated"}';

    /**
     * cweId: The Common Weakness Enumeration (CWE) identifier.
     * name: The name of the CWE.
     */
    public function __construct(#[MapFrom('cwe_id')]
    public string $cweId, public string $name,)
    {
    }
}
