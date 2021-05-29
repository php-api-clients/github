<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Enterprises\CbEnterpriseRcb\Actions;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\GetGithubActionsPermissionsEnterpriseOperation;
use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\SetGithubActionsPermissionsEnterpriseOperation;

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
