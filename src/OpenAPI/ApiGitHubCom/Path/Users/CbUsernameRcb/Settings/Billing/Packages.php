<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Users\CbUsernameRcb\Settings\Billing;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Billing\GetGithubPackagesBillingUserOperation;

final class Packages
{
    function get($username): GetGithubPackagesBillingUserOperation
    {
        return new GetGithubPackagesBillingUserOperation($username);
    }
}
