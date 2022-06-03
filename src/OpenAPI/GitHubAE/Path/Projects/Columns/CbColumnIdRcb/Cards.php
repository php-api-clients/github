<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Projects\Columns\CbColumnIdRcb;

final class Cards
{
    function get($column_id, string $archived_state = 'not_archived', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Projects\ListCards
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Projects\ListCards($column_id, $archived_state, $per_page, $page);
    }
    function post($column_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Projects\CreateCard
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Projects\CreateCard($column_id);
    }
}
