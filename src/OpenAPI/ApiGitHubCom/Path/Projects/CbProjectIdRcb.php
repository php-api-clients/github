<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Projects;

final class CbProjectIdRcb
{
    function get($project_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\Get
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\Get($project_id);
    }
    function delete($project_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\Delete
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\Delete($project_id);
    }
    function patch($project_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\Update
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\Update($project_id);
    }
}
