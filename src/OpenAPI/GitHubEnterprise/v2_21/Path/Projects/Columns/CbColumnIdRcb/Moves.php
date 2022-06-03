<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Path\Projects\Columns\CbColumnIdRcb;

final class Moves
{
    function post($column_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Projects\MoveColumn
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Projects\MoveColumn($column_id);
    }
}
