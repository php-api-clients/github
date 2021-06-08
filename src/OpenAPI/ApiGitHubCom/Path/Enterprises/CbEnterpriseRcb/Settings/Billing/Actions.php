<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Enterprises\CbEnterpriseRcb\Settings\Billing;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Billing\GetGithubActionsBillingGhe;

final class Actions
{
    function get($enterprise): GetGithubActionsBillingGhe
    {
        return new GetGithubActionsBillingGhe($enterprise);
    }
}
