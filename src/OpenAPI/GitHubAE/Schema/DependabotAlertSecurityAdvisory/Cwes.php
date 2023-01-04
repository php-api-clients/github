<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\DependabotAlertSecurityAdvisory;

final class Cwes
{
    public const SCHEMA_JSON = '{"required":["cwe_id","name"],"type":"object","properties":{"cwe_id":{"type":"string","description":"The unique CWE ID.","readOnly":true},"name":{"type":"string","description":"The short, plain text name of the CWE.","readOnly":true}},"description":"A CWE weakness assigned to the advisory.","readOnly":true,"additionalProperties":false}';
    public const SCHEMA_TITLE = 'DependabotAlertSecurityAdvisory\\Cwes';
    public const SCHEMA_DESCRIPTION = 'A CWE weakness assigned to the advisory.';
    /**
     * The unique CWE ID.
     */
    private string $cwe_id;
    /**
     * The short, plain text name of the CWE.
     */
    private string $name;
    /**
     * The unique CWE ID.
     */
    public function cwe_id() : string
    {
        return $this->cwe_id;
    }
    /**
     * The short, plain text name of the CWE.
     */
    public function name() : string
    {
        return $this->name;
    }
}
