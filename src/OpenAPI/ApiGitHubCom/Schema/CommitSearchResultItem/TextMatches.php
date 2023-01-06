<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CommitSearchResultItem;

final class TextMatches
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"object_url":{"type":"string"},"object_type":{"type":["string","null"]},"property":{"type":"string"},"fragment":{"type":"string"},"matches":{"type":"array","items":{"type":"object","properties":{"text":{"type":"string"},"indices":{"type":"array","items":{"type":"integer"}}}}}}}';
    public const SCHEMA_TITLE = 'CommitSearchResultItem\\TextMatches';
    public const SCHEMA_DESCRIPTION = '';
    private string $object_url;
    private ?string $object_type;
    private string $property;
    private string $fragment;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TextMatches\Matches>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TextMatches\Matches::class)
     */
    private array $matches = array();
    public function object_url() : string
    {
        return $this->object_url;
    }
    public function object_type() : ?string
    {
        return $this->object_type;
    }
    public function property() : string
    {
        return $this->property;
    }
    public function fragment() : string
    {
        return $this->fragment;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TextMatches\Matches>
     */
    public function matches() : array
    {
        return $this->matches;
    }
}
