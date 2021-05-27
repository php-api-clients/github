<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Orgs\CbOrgRcb\Actions\Runners;

final class RegistrationToken
{
    function post($org) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\CreateRegistrationTokenForOrgOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\CreateRegistrationTokenForOrgOperation($org);
    }
}
