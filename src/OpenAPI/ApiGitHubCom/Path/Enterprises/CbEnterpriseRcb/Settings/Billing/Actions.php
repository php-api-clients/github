<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Enterprises\CbEnterpriseRcb\Settings\Billing;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Billing\GetGithubActionsBillingGheOperation;

final class Actions
{
    function get($enterprise): GetGithubActionsBillingGheOperation
    {
        return new GetGithubActionsBillingGheOperation($enterprise);
    }
}
