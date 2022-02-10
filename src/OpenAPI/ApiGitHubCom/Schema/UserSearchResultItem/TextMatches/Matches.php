<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\UserSearchResultItem\TextMatches;

final class Matches
{
    public const SCHEMA_TITLE = 'user-search-result-item::text_matches::matches';
    public const SCHEMA_DESCRIPTION = '';
    private string $text;
    private array $indices = array();
    public function text() : string
    {
        return $this->text;
    }
    public function indices() : array
    {
        return $this->indices;
    }
}
