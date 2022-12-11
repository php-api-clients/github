<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\IssueSearchResultItem;

final class TextMatches
{
    public const SCHEMA_TITLE = 'issue-search-result-item::text_matches';
    public const SCHEMA_DESCRIPTION = '';
    private string $object_url;
    private $object_type;
    private string $property;
    private string $fragment;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\IssueSearchResultItem\TextMatches\Matches>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\IssueSearchResultItem\TextMatches\Matches::class)
     */
    private array $matches = array();
    public function object_url() : string
    {
        return $this->object_url;
    }
    public function object_type()
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
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\IssueSearchResultItem\TextMatches\Matches>
     */
    public function matches() : array
    {
        return $this->matches;
    }
}
