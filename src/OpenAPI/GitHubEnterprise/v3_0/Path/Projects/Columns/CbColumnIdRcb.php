<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Projects\Columns;

final class CbColumnIdRcb
{
    function get($column_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Projects\GetColumn
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Projects\GetColumn($column_id);
    }
    function delete($column_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Projects\DeleteColumn
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Projects\DeleteColumn($column_id);
    }
    function patch($column_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Projects\UpdateColumn
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Projects\UpdateColumn($column_id);
    }
}
