<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\User\MarketplacePurchases;

final class Stubbed
{
    function get(int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\ListSubscriptionsForAuthenticatedUserStubbed
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\ListSubscriptionsForAuthenticatedUserStubbed($per_page, $page);
    }
}
