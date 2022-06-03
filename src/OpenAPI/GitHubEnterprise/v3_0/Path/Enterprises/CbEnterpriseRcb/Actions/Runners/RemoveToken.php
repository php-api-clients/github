<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Enterprises\CbEnterpriseRcb\Actions\Runners;

final class RemoveToken
{
    function post($enterprise) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\EnterpriseAdmin\CreateRemoveTokenForEnterprise
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\EnterpriseAdmin\CreateRemoveTokenForEnterprise($enterprise);
    }
}
