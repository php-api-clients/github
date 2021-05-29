<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Users\CbUsernameRcb\Settings\Billing;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Billing\GetGithubActionsBillingUserOperation;

final class Actions
{
    function get($username): GetGithubActionsBillingUserOperation
    {
        return new GetGithubActionsBillingUserOperation($username);
    }
}
