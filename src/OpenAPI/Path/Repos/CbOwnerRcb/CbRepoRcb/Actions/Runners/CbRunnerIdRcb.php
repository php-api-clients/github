<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runners;

final class CbRunnerIdRcb
{
    function get($owner, $repo, $runner_id) : \ApiClients\Client\Github\OpenAPI\Operation\Actions\GetSelfHostedRunnerForRepoOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Actions\GetSelfHostedRunnerForRepoOperation($owner, $repo, $runner_id);
    }
    function delete($owner, $repo, $runner_id) : \ApiClients\Client\Github\OpenAPI\Operation\Actions\DeleteSelfHostedRunnerFromRepoOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Actions\DeleteSelfHostedRunnerFromRepoOperation($owner, $repo, $runner_id);
    }
}
