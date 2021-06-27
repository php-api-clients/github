<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Enterprises\CbEnterpriseRcb\Actions\Runners;

final class RemoveToken
{
    function post($enterprise) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\CreateRemoveTokenForEnterprise
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\CreateRemoveTokenForEnterprise($enterprise);
    }
}
