<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Orgs\CbOrgRcb\Actions\Runners;

final class RegistrationToken
{
    function post($org) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\CreateRegistrationTokenForOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\CreateRegistrationTokenForOrg($org);
    }
}
