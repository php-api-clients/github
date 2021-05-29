<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Path\Projects\Columns\CbColumnIdRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Projects\MoveColumnOperation;

final class Moves
{
    function post($column_id): MoveColumnOperation
    {
        return new MoveColumnOperation($column_id);
    }
}
