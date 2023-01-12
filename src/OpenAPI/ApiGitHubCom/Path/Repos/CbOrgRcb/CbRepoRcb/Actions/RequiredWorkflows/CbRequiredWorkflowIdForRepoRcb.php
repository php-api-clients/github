<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOrgRcb\CbRepoRcb\Actions\RequiredWorkflows;

final class CbRequiredWorkflowIdForRepoRcb
{
    function get($org, $repo, $required_workflow_id_for_repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetRepoRequiredWorkflow
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetRepoRequiredWorkflow($org, $repo, $required_workflow_id_for_repo);
    }
}
