<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Enterprises\CbEnterpriseRcb\Actions\Permissions;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\GetAllowedActionsEnterpriseOperation;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\SetAllowedActionsEnterpriseOperation;

final class SelectedActions
{
    function get($enterprise): GetAllowedActionsEnterpriseOperation
    {
        return new GetAllowedActionsEnterpriseOperation($enterprise);
    }

    function put($enterprise): SetAllowedActionsEnterpriseOperation
    {
        return new SetAllowedActionsEnterpriseOperation($enterprise);
    }
}
