<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Orgs\CbOrgRcb;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\CreateWebhook;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListWebhooks;

final class Hooks
{
    function get($org, int $per_page = 30, int $page = 1): ListWebhooks
    {
        return new ListWebhooks($org, $per_page, $page);
    }

    function post($org): CreateWebhook
    {
        return new CreateWebhook($org);
    }
}
