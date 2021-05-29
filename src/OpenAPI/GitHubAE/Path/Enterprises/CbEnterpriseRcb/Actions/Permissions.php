<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Enterprises\CbEnterpriseRcb\Actions;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\GetGithubActionsPermissionsEnterprise;
use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\SetGithubActionsPermissionsEnterprise;

final class Permissions
{
    function get($enterprise): GetGithubActionsPermissionsEnterprise
    {
        return new GetGithubActionsPermissionsEnterprise($enterprise);
    }

    function put($enterprise): SetGithubActionsPermissionsEnterprise
    {
        return new SetGithubActionsPermissionsEnterprise($enterprise);
    }
}
