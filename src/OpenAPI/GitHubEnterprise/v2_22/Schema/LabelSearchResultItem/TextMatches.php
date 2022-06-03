<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema\LabelSearchResultItem;

final class TextMatches
{
    public const SCHEMA_TITLE = 'label-search-result-item::text_matches';
    public const SCHEMA_DESCRIPTION = '';
    private string $object_url;
    private ?string $object_type = null;
    private string $property;
    private string $fragment;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema\LabelSearchResultItem\TextMatches\Matches>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema\LabelSearchResultItem\TextMatches\Matches::class)
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
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema\LabelSearchResultItem\TextMatches\Matches>
     */
    public function matches() : array
    {
        return $this->matches;
    }
}
