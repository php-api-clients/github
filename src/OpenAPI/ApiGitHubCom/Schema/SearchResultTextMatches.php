<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class SearchResultTextMatches
{
    public const SCHEMA_JSON = '{"title":"Search Result Text Matches","type":"array","items":{"type":"object","properties":{"object_url":{"type":"string"},"object_type":{"type":["string","null"]},"property":{"type":"string"},"fragment":{"type":"string"},"matches":{"type":"array","items":{"type":"object","properties":{"text":{"type":"string"},"indices":{"type":"array","items":{"type":"integer"}}}}}}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'search-result-text-matches';
    public const SCHEMA_DESCRIPTION = '';
    public readonly string $object_url;
    public readonly ?string $object_type;
    public readonly string $property;
    public readonly string $fragment;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SearchResultTextMatches\Matches>
     */
    public readonly array $matches;
    /**
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SearchResultTextMatches\Matches> $matches
     */
    public function __construct(string $object_url, string $object_type, string $property, string $fragment, array $matches)
    {
        $this->object_url = $object_url;
        $this->object_type = $object_type;
        $this->property = $property;
        $this->fragment = $fragment;
        $this->matches = $matches;
    }
}
