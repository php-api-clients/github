<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Path\\Projects\Columns\CbColumnIdRcb;

final class Cards
{
    function get($column_id, string $archived_state = 'not_archived', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Projects\ListCardsOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Projects\ListCardsOperation($column_id, $archived_state, $per_page, $page);
    }
    function post($column_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Projects\CreateCardOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Projects\CreateCardOperation($column_id);
    }
}