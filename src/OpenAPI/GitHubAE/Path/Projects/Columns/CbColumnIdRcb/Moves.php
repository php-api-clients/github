<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\\Projects\Columns\CbColumnIdRcb;

final class Moves
{
    function post($column_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Projects\MoveColumnOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Projects\MoveColumnOperation($column_id);
    }
}
