<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Projects\Columns\CbColumnIdRcb;

final class Moves
{
    function post($column_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Projects\MoveColumn
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Projects\MoveColumn($column_id);
    }
}
