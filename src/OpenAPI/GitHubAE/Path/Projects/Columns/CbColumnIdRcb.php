<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Projects\Columns;

final class CbColumnIdRcb
{
    function get($column_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Projects\GetColumn
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Projects\GetColumn($column_id);
    }
    function delete($column_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Projects\DeleteColumn
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Projects\DeleteColumn($column_id);
    }
    function patch($column_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Projects\UpdateColumn
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Projects\UpdateColumn($column_id);
    }
}
