<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.22\Path\\Orgs\CbOrgRcb\Actions\Runner-Groups;

final class CbRunnerGroupIdRcb
{
    function get($org, $runner_group_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.22\Operation\Actions\GetSelfHostedRunnerGroupForOrgOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.22\Operation\Actions\GetSelfHostedRunnerGroupForOrgOperation($org, $runner_group_id);
    }
    function delete($org, $runner_group_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.22\Operation\Actions\DeleteSelfHostedRunnerGroupFromOrgOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.22\Operation\Actions\DeleteSelfHostedRunnerGroupFromOrgOperation($org, $runner_group_id);
    }
    function patch($org, $runner_group_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.22\Operation\Actions\UpdateSelfHostedRunnerGroupForOrgOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.22\Operation\Actions\UpdateSelfHostedRunnerGroupForOrgOperation($org, $runner_group_id);
    }
}
