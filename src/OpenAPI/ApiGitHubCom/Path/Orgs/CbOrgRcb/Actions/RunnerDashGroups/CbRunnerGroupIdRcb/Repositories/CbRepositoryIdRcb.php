<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Orgs\CbOrgRcb\Actions\RunnerDashGroups\CbRunnerGroupIdRcb\Repositories;

final class CbRepositoryIdRcb
{
    function put($org, $runner_group_id, $repository_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\AddRepoAccessToSelfHostedRunnerGroupInOrgOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\AddRepoAccessToSelfHostedRunnerGroupInOrgOperation($org, $runner_group_id, $repository_id);
    }
    function delete($org, $runner_group_id, $repository_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\RemoveRepoAccessToSelfHostedRunnerGroupInOrgOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\RemoveRepoAccessToSelfHostedRunnerGroupInOrgOperation($org, $runner_group_id, $repository_id);
    }
}
