<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Enterprises\CbEnterpriseRcb\Actions\Runners;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\CreateRemoveTokenForEnterpriseOperation;

final class RemoveToken
{
    function post($enterprise): CreateRemoveTokenForEnterpriseOperation
    {
        return new CreateRemoveTokenForEnterpriseOperation($enterprise);
    }
}
