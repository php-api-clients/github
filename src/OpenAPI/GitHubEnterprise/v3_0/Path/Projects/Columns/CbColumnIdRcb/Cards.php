<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Projects\Columns\CbColumnIdRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Projects\CreateCard;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Projects\ListCards;

final class Cards
{
    function get($column_id, string $archived_state = 'not_archived', int $per_page = 30, int $page = 1): ListCards
    {
        return new ListCards($column_id, $archived_state, $per_page, $page);
    }

    function post($column_id): CreateCard
    {
        return new CreateCard($column_id);
    }
}
