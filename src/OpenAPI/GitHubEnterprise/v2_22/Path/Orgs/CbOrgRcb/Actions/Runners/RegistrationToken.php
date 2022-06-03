<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path\Orgs\CbOrgRcb\Actions\Runners;

final class RegistrationToken
{
    function post($org) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Actions\CreateRegistrationTokenForOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Actions\CreateRegistrationTokenForOrg($org);
    }
}
