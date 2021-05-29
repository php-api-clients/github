<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Enterprises\CbEnterpriseRcb\Actions\Runners;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\CreateRemoveTokenForEnterpriseOperation;

final class RemoveToken
{
    function post($enterprise): CreateRemoveTokenForEnterpriseOperation
    {
        return new CreateRemoveTokenForEnterpriseOperation($enterprise);
    }
}
