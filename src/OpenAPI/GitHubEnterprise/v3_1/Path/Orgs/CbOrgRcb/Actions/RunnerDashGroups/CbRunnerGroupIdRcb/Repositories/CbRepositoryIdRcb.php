<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Orgs\CbOrgRcb\Actions\RunnerDashGroups\CbRunnerGroupIdRcb\Repositories;

final class CbRepositoryIdRcb
{
    function put($org, $runner_group_id, $repository_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\AddRepoAccessToSelfHostedRunnerGroupInOrgOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\AddRepoAccessToSelfHostedRunnerGroupInOrgOperation($org, $runner_group_id, $repository_id);
    }
    function delete($org, $runner_group_id, $repository_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\RemoveRepoAccessToSelfHostedRunnerGroupInOrgOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\RemoveRepoAccessToSelfHostedRunnerGroupInOrgOperation($org, $runner_group_id, $repository_id);
    }
}
