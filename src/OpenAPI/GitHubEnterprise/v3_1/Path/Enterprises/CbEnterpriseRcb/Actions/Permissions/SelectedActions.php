<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Enterprises\CbEnterpriseRcb\Actions\Permissions;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\GetAllowedActionsEnterprise;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\SetAllowedActionsEnterprise;

final class SelectedActions
{
    function get($enterprise): GetAllowedActionsEnterprise
    {
        return new GetAllowedActionsEnterprise($enterprise);
    }

    function put($enterprise): SetAllowedActionsEnterprise
    {
        return new SetAllowedActionsEnterprise($enterprise);
    }
}