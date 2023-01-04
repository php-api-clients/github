<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DependabotAlertSecurityAdvisory;

final class Cvss
{
    public const SCHEMA_JSON = '{"required":["score","vector_string"],"type":"object","properties":{"score":{"maximum":10,"minimum":0,"type":"number","description":"The overall CVSS score of the advisory.","readOnly":true},"vector_string":{"type":["string","null"],"description":"The full CVSS vector string for the advisory.","readOnly":true}},"description":"Details for the advisory pertaining to the Common Vulnerability Scoring System.","readOnly":true,"additionalProperties":false}';
    public const SCHEMA_TITLE = 'DependabotAlertSecurityAdvisory\\Cvss';
    public const SCHEMA_DESCRIPTION = 'Details for the advisory pertaining to the Common Vulnerability Scoring System.';
    /**
     * The overall CVSS score of the advisory.
     */
    private int $score;
    /**
     * The full CVSS vector string for the advisory.
     */
    private ?string $vector_string;
    /**
     * The overall CVSS score of the advisory.
     */
    public function score() : int
    {
        return $this->score;
    }
    /**
     * The full CVSS vector string for the advisory.
     */
    public function vector_string() : ?string
    {
        return $this->vector_string;
    }
}
