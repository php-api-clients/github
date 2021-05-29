<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path\Enterprises\CbEnterpriseRcb\Actions\Runners;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\EnterpriseAdmin\CreateRegistrationTokenForEnterpriseOperation;

final class RegistrationToken
{
    function post($enterprise): CreateRegistrationTokenForEnterpriseOperation
    {
        return new CreateRegistrationTokenForEnterpriseOperation($enterprise);
    }
}
