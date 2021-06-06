<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Projects\Columns\CbColumnIdRcb;

final class Moves
{
    function post($column_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\MoveColumn
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\MoveColumn($column_id);
    }
}
