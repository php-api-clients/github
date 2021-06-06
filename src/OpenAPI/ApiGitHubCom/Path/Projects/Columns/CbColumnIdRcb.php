<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Projects\Columns;

final class CbColumnIdRcb
{
    function get($column_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\GetColumn
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\GetColumn($column_id);
    }
    function delete($column_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\DeleteColumn
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\DeleteColumn($column_id);
    }
    function patch($column_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\UpdateColumn
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\UpdateColumn($column_id);
    }
}
