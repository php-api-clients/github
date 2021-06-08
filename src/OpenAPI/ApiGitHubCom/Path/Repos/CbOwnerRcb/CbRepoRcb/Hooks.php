<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CreateWebhook;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListWebhooks;

final class Hooks
{
    function get($owner, $repo, int $per_page = 30, int $page = 1): ListWebhooks
    {
        return new ListWebhooks($owner, $repo, $per_page, $page);
    }

    function post($owner, $repo): CreateWebhook
    {
        return new CreateWebhook($owner, $repo);
    }
}
