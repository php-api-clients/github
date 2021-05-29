<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema\TopicSearchResultItem;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema\TopicSearchResultItem\TextMatches\Matches;

final class TextMatches
{
    public const SCHEMA_TITLE       = 'topic-search-result-item::text_matches';
    public const SCHEMA_DESCRIPTION = '';
    private ?string $object_url     = null;
    private ?string $object_type    = null;
    private ?string $property       = null;
    private ?string $fragment       = null;
    /**
     * @var array<Matches>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema\TopicSearchResultItem\TextMatches\Matches::class)
     */
    private array $matches = [];

    public function object_url(): ?string
    {
        return $this->object_url;
    }

    public function object_type(): ?string
    {
        return $this->object_type;
    }

    public function property(): ?string
    {
        return $this->property;
    }

    public function fragment(): ?string
    {
        return $this->fragment;
    }

    public function matches(): array
    {
        return $this->matches;
    }
}
