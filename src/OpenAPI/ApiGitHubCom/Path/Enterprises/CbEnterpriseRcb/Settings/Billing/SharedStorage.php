<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Enterprises\CbEnterpriseRcb\Settings\Billing;

final class SharedStorage
{
    function get($enterprise) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Billing\GetSharedStorageBillingGhe
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Billing\GetSharedStorageBillingGhe($enterprise);
    }
}
