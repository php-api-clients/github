<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Orgs\CbOrgRcb\Actions\Runners;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\CreateRegistrationTokenForOrgOperation;

final class RegistrationToken
{
    function post($org): CreateRegistrationTokenForOrgOperation
    {
        return new CreateRegistrationTokenForOrgOperation($org);
    }
}
