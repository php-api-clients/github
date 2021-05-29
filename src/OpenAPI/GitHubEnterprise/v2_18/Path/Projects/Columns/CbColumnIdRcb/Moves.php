<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path\Projects\Columns\CbColumnIdRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Projects\MoveColumn;

final class Moves
{
    function post($column_id): MoveColumn
    {
        return new MoveColumn($column_id);
    }
}
