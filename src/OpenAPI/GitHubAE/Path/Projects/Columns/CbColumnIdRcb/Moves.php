<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Projects\Columns\CbColumnIdRcb;

final class Moves
{
    function post($column_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Projects\MoveColumn
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Projects\MoveColumn($column_id);
    }
}
