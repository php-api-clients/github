<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Enterprises\CbEnterpriseRcb\Actions\Runners;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\CreateRegistrationTokenForEnterprise;

final class RegistrationToken
{
    function post($enterprise): CreateRegistrationTokenForEnterprise
    {
        return new CreateRegistrationTokenForEnterprise($enterprise);
    }
}
