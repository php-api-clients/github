<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema\TopicSearchResultItem\TextMatches;

final class Matches
{
    public const SCHEMA_TITLE       = 'topic-search-result-item::text_matches::matches';
    public const SCHEMA_DESCRIPTION = '';
    private string $text;
    private array $indices = [];

    public function text(): string
    {
        return $this->text;
    }

    public function indices(): array
    {
        return $this->indices;
    }
}
