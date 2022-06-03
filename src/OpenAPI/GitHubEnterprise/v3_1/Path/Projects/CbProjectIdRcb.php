<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Projects;

final class CbProjectIdRcb
{
    function get($project_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Projects\Get
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Projects\Get($project_id);
    }
    function delete($project_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Projects\Delete
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Projects\Delete($project_id);
    }
    function patch($project_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Projects\Update
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Projects\Update($project_id);
    }
}
