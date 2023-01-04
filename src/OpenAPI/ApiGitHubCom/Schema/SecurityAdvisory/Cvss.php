<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SecurityAdvisory;

final class Cvss
{
    public const SCHEMA_JSON = '{"required":["vector_string","score"],"type":"object","properties":{"score":{"type":"number"},"vector_string":{"type":["string","null"]}}}';
    public const SCHEMA_TITLE = 'SecurityAdvisory\\Cvss';
    public const SCHEMA_DESCRIPTION = '';
    private int $score;
    private $vector_string;
    public function score() : int
    {
        return $this->score;
    }
    public function vector_string()
    {
        return $this->vector_string;
    }
}
