<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Path\Projects\Columns\CbColumnIdRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Projects\MoveColumn;

final class Moves
{
    function post($column_id): MoveColumn
    {
        return new MoveColumn($column_id);
    }
}
