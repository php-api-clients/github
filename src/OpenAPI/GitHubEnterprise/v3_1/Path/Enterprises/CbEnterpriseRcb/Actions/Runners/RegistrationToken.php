<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Enterprises\CbEnterpriseRcb\Actions\Runners;

final class RegistrationToken
{
    function post($enterprise) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\CreateRegistrationTokenForEnterprise
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\CreateRegistrationTokenForEnterprise($enterprise);
    }
}
