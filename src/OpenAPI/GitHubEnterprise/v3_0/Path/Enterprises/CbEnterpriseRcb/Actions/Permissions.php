<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Enterprises\CbEnterpriseRcb\Actions;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\EnterpriseAdmin\GetGithubActionsPermissionsEnterpriseOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\EnterpriseAdmin\SetGithubActionsPermissionsEnterpriseOperation;

final class Permissions
{
    function get($enterprise): GetGithubActionsPermissionsEnterpriseOperation
    {
        return new GetGithubActionsPermissionsEnterpriseOperation($enterprise);
    }

    function put($enterprise): SetGithubActionsPermissionsEnterpriseOperation
    {
        return new SetGithubActionsPermissionsEnterpriseOperation($enterprise);
    }
}
