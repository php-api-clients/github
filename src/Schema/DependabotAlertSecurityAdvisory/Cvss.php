<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\DependabotAlertSecurityAdvisory;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Cvss
{
    public const SCHEMA_JSON = '{"required":["score","vector_string"],"type":"object","properties":{"score":{"maximum":10,"minimum":0,"type":"number","description":"The overall CVSS score of the advisory.","readOnly":true},"vector_string":{"type":["string","null"],"description":"The full CVSS vector string for the advisory.","readOnly":true}},"description":"Details for the advisory pertaining to the Common Vulnerability Scoring System.","readOnly":true,"additionalProperties":false}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'Details for the advisory pertaining to the Common Vulnerability Scoring System.';
    public const SCHEMA_EXAMPLE_DATA = '{"score":13,"vector_string":"generated_vector_string"}';
    /**
     * score: The overall CVSS score of the advisory.
     * vector_string: The full CVSS vector string for the advisory.
     */
    public function __construct(public int $score, public ?string $vector_string)
    {
    }
}
