<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\RepositoryAdvisory;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class Cwes
{
    public const SCHEMA_JSON = '{"required":["cwe_id","name"],"type":"object","properties":{"cwe_id":{"type":"string","description":"The Common Weakness Enumeration (CWE) identifier."},"name":{"type":"string","description":"The name of the CWE.","readOnly":true}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"cwe_id":"generated_cwe_id_null","name":"generated_name_null"}';
    /**
     * cweId: The Common Weakness Enumeration (CWE) identifier.
     * name: The name of the CWE.
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('cwe_id')] public string $cweId, public string $name)
    {
    }
}
