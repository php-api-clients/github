<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Enterprises\CbEnterpriseRcb\Actions\Runners;

final class RemoveToken
{
    function post($enterprise) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\CreateRemoveTokenForEnterprise
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\CreateRemoveTokenForEnterprise($enterprise);
    }
}
