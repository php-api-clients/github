<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\\Enterprises\CbEnterpriseRcb\Actions\Runners;

final class Downloads
{
    function get($enterprise) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\ListRunnerApplicationsForEnterpriseOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\ListRunnerApplicationsForEnterpriseOperation($enterprise);
    }
}
