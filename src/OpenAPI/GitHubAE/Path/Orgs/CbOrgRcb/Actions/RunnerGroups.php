<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Orgs\CbOrgRcb\Actions;

final class RunnerGroups
{
    function post($org) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\CreateSelfHostedRunnerGroupForOrgOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\CreateSelfHostedRunnerGroupForOrgOperation($org);
    }
}
