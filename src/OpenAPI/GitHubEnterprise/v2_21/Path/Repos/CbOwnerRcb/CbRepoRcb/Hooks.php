<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Path\Repos\CbOwnerRcb\CbRepoRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Repos\CreateWebhookOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Repos\ListWebhooksOperation;

final class Hooks
{
    function get($owner, $repo, int $per_page = 30, int $page = 1): ListWebhooksOperation
    {
        return new ListWebhooksOperation($owner, $repo, $per_page, $page);
    }

    function post($owner, $repo): CreateWebhookOperation
    {
        return new CreateWebhookOperation($owner, $repo);
    }
}
