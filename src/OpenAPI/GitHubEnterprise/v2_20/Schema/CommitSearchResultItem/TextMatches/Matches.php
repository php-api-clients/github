<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Schema\CommitSearchResultItem\TextMatches;

final class Matches
{
    public const SCHEMA_TITLE       = 'commit-search-result-item::text_matches::matches';
    public const SCHEMA_DESCRIPTION = '';
    private ?string $text           = null;
    private array $indices          = [];

    public function text(): ?string
    {
        return $this->text;
    }

    public function indices(): array
    {
        return $this->indices;
    }
}
