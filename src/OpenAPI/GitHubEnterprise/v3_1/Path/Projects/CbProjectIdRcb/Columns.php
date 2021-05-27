<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\\Projects\CbProjectIdRcb;

final class Columns
{
    function get($project_id, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Projects\ListColumnsOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Projects\ListColumnsOperation($project_id, $per_page, $page);
    }
    function post($project_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Projects\CreateColumnOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Projects\CreateColumnOperation($project_id);
    }
}
