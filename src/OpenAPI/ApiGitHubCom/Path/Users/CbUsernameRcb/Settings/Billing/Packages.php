<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Users\CbUsernameRcb\Settings\Billing;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Billing\GetGithubPackagesBillingUser;

final class Packages
{
    function get($username): GetGithubPackagesBillingUser
    {
        return new GetGithubPackagesBillingUser($username);
    }
}
