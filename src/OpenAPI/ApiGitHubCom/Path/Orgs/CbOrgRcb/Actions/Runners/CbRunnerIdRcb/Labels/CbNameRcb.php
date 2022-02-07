<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Orgs\CbOrgRcb\Actions\Runners\CbRunnerIdRcb\Labels;

final class CbNameRcb
{
    function delete($org, $runner_id, $name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\RemoveCustomLabelFromSelfHostedRunnerForOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\RemoveCustomLabelFromSelfHostedRunnerForOrg($org, $runner_id, $name);
    }
}
