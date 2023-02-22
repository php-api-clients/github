<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DependabotAlertSecurityAdvisory;

final readonly class Cvss
{
    public const SCHEMA_JSON = '{"required":["score","vector_string"],"type":"object","properties":{"score":{"maximum":10,"minimum":0,"type":"number","description":"The overall CVSS score of the advisory.","readOnly":true},"vector_string":{"type":["string","null"],"description":"The full CVSS vector string for the advisory.","readOnly":true}},"description":"Details for the advisory pertaining to the Common Vulnerability Scoring System.","readOnly":true,"additionalProperties":false}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'Details for the advisory pertaining to the Common Vulnerability Scoring System.';
    /**
     * The overall CVSS score of the advisory.
     */
    public ?int $score;
    /**
     * The full CVSS vector string for the advisory.
     */
    public ?string $vector_string;
    public function __construct(int $score, string $vector_string)
    {
        $this->score = $score;
        $this->vector_string = $vector_string;
    }
}
