<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Projects\Columns\CbColumnIdRcb;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\CreateCardOperation;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\ListCardsOperation;

final class Cards
{
    function get($column_id, string $archived_state = 'not_archived', int $per_page = 30, int $page = 1): ListCardsOperation
    {
        return new ListCardsOperation($column_id, $archived_state, $per_page, $page);
    }

    function post($column_id): CreateCardOperation
    {
        return new CreateCardOperation($column_id);
    }
}
