<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Orgs\CbOrgRcb\Actions\Runners;

final class CbRunnerIdRcb
{
    function get($org, $runner_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\GetSelfHostedRunnerForOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\GetSelfHostedRunnerForOrg($org, $runner_id);
    }
    function delete($org, $runner_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\DeleteSelfHostedRunnerFromOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\DeleteSelfHostedRunnerFromOrg($org, $runner_id);
    }
}
