<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.18\Path\\Projects;

final class CbProjectIdRcb
{
    function get($project_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.18\Operation\Projects\GetOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.18\Operation\Projects\GetOperation($project_id);
    }
    function delete($project_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.18\Operation\Projects\DeleteOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.18\Operation\Projects\DeleteOperation($project_id);
    }
    function patch($project_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.18\Operation\Projects\UpdateOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.18\Operation\Projects\UpdateOperation($project_id);
    }
}
