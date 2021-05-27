<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Projects\Columns;

final class CbColumnIdRcb
{
    function get($column_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\GetColumnOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\GetColumnOperation($column_id);
    }
    function delete($column_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\DeleteColumnOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\DeleteColumnOperation($column_id);
    }
    function patch($column_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\UpdateColumnOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\UpdateColumnOperation($column_id);
    }
}
