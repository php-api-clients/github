<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Enterprises\CbEnterpriseRcb\Actions\Runners\CbRunnerIdRcb\Labels;

final class CbNameRcb
{
    function delete($enterprise, $runner_id, $name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\RemoveCustomLabelFromSelfHostedRunnerForEnterprise
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\RemoveCustomLabelFromSelfHostedRunnerForEnterprise($enterprise, $runner_id, $name);
    }
}
