<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\DependabotAlertSecurityAdvisory;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Cwes
{
    public const SCHEMA_JSON = '{"required":["cwe_id","name"],"type":"object","properties":{"cwe_id":{"type":"string","description":"The unique CWE ID.","readOnly":true},"name":{"type":"string","description":"The short, plain text name of the CWE.","readOnly":true}},"description":"A CWE weakness assigned to the advisory.","readOnly":true,"additionalProperties":false}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'A CWE weakness assigned to the advisory.';
    public const SCHEMA_EXAMPLE_DATA = '{"cwe_id":"generated_cwe_id","name":"generated_name"}';
    /**
     * cwe_id: The unique CWE ID.
     * name: The short, plain text name of the CWE.
     */
    public function __construct(public string $cwe_id, public string $name)
    {
    }
}
