<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TextMatches;

final class Matches
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"text":{"type":"string"},"indices":{"type":"array","items":{"type":"integer"}}}}';
    public const SCHEMA_TITLE = 'TextMatches\\Matches';
    public const SCHEMA_DESCRIPTION = '';
    private string $text;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Matches\Indices>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Matches\Indices::class)
     */
    private array $indices = array();
    public function text() : string
    {
        return $this->text;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Matches\Indices>
     */
    public function indices() : array
    {
        return $this->indices;
    }
}
