<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\MarketplaceListing;

final class Plans
{
    function get(int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\ListPlansOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\ListPlansOperation($per_page, $page);
    }
}
