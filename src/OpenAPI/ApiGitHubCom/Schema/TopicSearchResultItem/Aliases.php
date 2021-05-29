<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TopicSearchResultItem;

final class Aliases
{
    public const SCHEMA_TITLE       = 'topic-search-result-item::aliases';
    public const SCHEMA_DESCRIPTION = '';
    private array $topic_relation   = [];

    public function topic_relation(): array
    {
        return $this->topic_relation;
    }
}
