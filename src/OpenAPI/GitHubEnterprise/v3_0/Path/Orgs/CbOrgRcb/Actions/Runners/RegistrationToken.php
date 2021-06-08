<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Orgs\CbOrgRcb\Actions\Runners;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Actions\CreateRegistrationTokenForOrg;

final class RegistrationToken
{
    function post($org): CreateRegistrationTokenForOrg
    {
        return new CreateRegistrationTokenForOrg($org);
    }
}
