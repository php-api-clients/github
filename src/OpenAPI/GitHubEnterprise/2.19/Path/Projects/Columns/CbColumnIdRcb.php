<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.19\Path\\Projects\Columns;

final class CbColumnIdRcb
{
    function get($column_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.19\Operation\Projects\GetColumnOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.19\Operation\Projects\GetColumnOperation($column_id);
    }
    function delete($column_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.19\Operation\Projects\DeleteColumnOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.19\Operation\Projects\DeleteColumnOperation($column_id);
    }
    function patch($column_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.19\Operation\Projects\UpdateColumnOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.19\Operation\Projects\UpdateColumnOperation($column_id);
    }
}
