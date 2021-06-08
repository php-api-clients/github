<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Schema\TopicSearchResultItem;

final class Related
{
    public const SCHEMA_TITLE       = 'topic-search-result-item::related';
    public const SCHEMA_DESCRIPTION = '';
    private array $topic_relation   = [];

    public function topic_relation(): array
    {
        return $this->topic_relation;
    }
}
