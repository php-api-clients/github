<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DependabotAlertSecurityAdvisory;

final class Cwes
{
    public const SCHEMA_JSON = '{"required":["cwe_id","name"],"type":"object","properties":{"cwe_id":{"type":"string","description":"The unique CWE ID.","readOnly":true},"name":{"type":"string","description":"The short, plain text name of the CWE.","readOnly":true}},"description":"A CWE weakness assigned to the advisory.","readOnly":true,"additionalProperties":false}';
    public const SCHEMA_TITLE = 'DependabotAlertSecurityAdvisory\\Cwes';
    public const SCHEMA_DESCRIPTION = 'A CWE weakness assigned to the advisory.';
    /**
     * The unique CWE ID.
     */
    public readonly string $cwe_id;
    /**
     * The short, plain text name of the CWE.
     */
    public readonly string $name;
    public function __construct(string $cwe_id, string $name)
    {
        $this->cwe_id = $cwe_id;
        $this->name = $name;
    }
}
