<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Orgs\CbOrgRcb\Actions\RunnerDashGroups\CbRunnerGroupIdRcb\Repositories;

final class CbRepositoryIdRcb
{
    function delete($org, $runner_group_id, $repository_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\RemoveRepoAccessToSelfHostedRunnerGroupInOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\RemoveRepoAccessToSelfHostedRunnerGroupInOrg($org, $runner_group_id, $repository_id);
    }
}
