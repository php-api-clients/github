<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SecurityAdvisory;

final class Cvss
{
    public const SCHEMA_JSON = '{"required":["vector_string","score"],"type":"object","properties":{"score":{"type":"number"},"vector_string":{"type":["string","null"]}}}';
    public const SCHEMA_TITLE = 'SecurityAdvisory\\Cvss';
    public const SCHEMA_DESCRIPTION = '';
    public readonly int $score;
    public readonly ?string $vector_string;
    public function __construct(int $score, string $vector_string)
    {
        $this->score = $score;
        $this->vector_string = $vector_string;
    }
}
