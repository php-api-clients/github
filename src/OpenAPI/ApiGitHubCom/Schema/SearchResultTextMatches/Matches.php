<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SearchResultTextMatches;

final class Matches
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"text":{"type":"string"},"indices":{"type":"array","items":{"type":"integer"}}}}';
    public const SCHEMA_TITLE = 'SearchResultTextMatches\\Matches';
    public const SCHEMA_DESCRIPTION = '';
    public readonly string $text;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodeFrequencyStat>
     */
    public readonly array $indices;
    /**
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodeFrequencyStat> $indices
     */
    public function __construct(string $text, array $indices)
    {
        $this->text = $text;
        $this->indices = $indices;
    }
}
