<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Path\\Projects\Columns\CbColumnIdRcb;

final class Moves
{
    function post($column_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Projects\MoveColumnOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Projects\MoveColumnOperation($column_id);
    }
}