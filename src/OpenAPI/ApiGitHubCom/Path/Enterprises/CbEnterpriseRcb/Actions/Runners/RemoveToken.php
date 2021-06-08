<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Enterprises\CbEnterpriseRcb\Actions\Runners;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\CreateRemoveTokenForEnterprise;

final class RemoveToken
{
    function post($enterprise): CreateRemoveTokenForEnterprise
    {
        return new CreateRemoveTokenForEnterprise($enterprise);
    }
}
