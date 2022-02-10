<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runners\CbRunnerIdRcb\Labels;

final class CbNameRcb
{
    function delete($owner, $repo, $runner_id, $name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\RemoveCustomLabelFromSelfHostedRunnerForRepo
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\RemoveCustomLabelFromSelfHostedRunnerForRepo($owner, $repo, $runner_id, $name);
    }
}
