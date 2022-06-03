<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Orgs\CbOrgRcb\Actions\Runners;

final class RegistrationToken
{
    function post($org) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\CreateRegistrationTokenForOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\CreateRegistrationTokenForOrg($org);
    }
}
