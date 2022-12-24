<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown;

final class CA59E28F0Be3379F32C745A03A3C91F58
{
    public const SCHEMA_JSON = '{"required":["score","vector_string"],"type":"object","properties":{"score":{"maximum":10,"minimum":0,"type":"number","description":"The overall CVSS score of the advisory.","readOnly":true},"vector_string":{"type":["string","null"],"description":"The full CVSS vector string for the advisory.","readOnly":true}},"description":"Details for the advisory pertaining to the Common Vulnerability Scoring System.","readOnly":true,"additionalProperties":false}';
    public const SCHEMA_TITLE = 'c_a59e28f0be3379f32c745a03a3c91f58';
    public const SCHEMA_DESCRIPTION = 'Details for the advisory pertaining to the Common Vulnerability Scoring System.';
    /**
     * The overall CVSS score of the advisory.
     */
    private int $score;
    /**
     * The full CVSS vector string for the advisory.
     */
    private $vector_string;
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
    public function vector_string()
    {
        return $this->vector_string;
    }
}
