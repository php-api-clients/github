<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Orgs\CbOrgRcb\Actions\Runners;

final class CbRunnerIdRcb
{
    function get($org, $runner_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\GetSelfHostedRunnerForOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\GetSelfHostedRunnerForOrg($org, $runner_id);
    }
    function delete($org, $runner_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\DeleteSelfHostedRunnerFromOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\DeleteSelfHostedRunnerFromOrg($org, $runner_id);
    }
}
