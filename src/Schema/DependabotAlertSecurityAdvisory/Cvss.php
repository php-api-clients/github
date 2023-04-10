<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\DependabotAlertSecurityAdvisory;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class Cvss
{
    public const SCHEMA_JSON = '{"required":["score","vector_string"],"type":"object","properties":{"score":{"maximum":10,"minimum":0,"type":"number","description":"The overall CVSS score of the advisory.","readOnly":true},"vector_string":{"type":["string","null"],"description":"The full CVSS vector string for the advisory.","readOnly":true}},"description":"Details for the advisory pertaining to the Common Vulnerability Scoring System.","readOnly":true,"additionalProperties":false}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'Details for the advisory pertaining to the Common Vulnerability Scoring System.';
    public const SCHEMA_EXAMPLE_DATA = '{"score":13.13,"vector_string":"generated_vector_string_null"}';
    /**
     * score: The overall CVSS score of the advisory.
     * vectorString: The full CVSS vector string for the advisory.
     */
    public function __construct(public float $score, #[\EventSauce\ObjectHydrator\MapFrom('vector_string')] public ?string $vectorString)
    {
    }
}
