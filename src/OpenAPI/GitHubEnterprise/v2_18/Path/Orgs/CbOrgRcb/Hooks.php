<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path\Orgs\CbOrgRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Orgs\CreateWebhookOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Orgs\ListWebhooksOperation;

final class Hooks
{
    function get($org, int $per_page = 30, int $page = 1): ListWebhooksOperation
    {
        return new ListWebhooksOperation($org, $per_page, $page);
    }

    function post($org): CreateWebhookOperation
    {
        return new CreateWebhookOperation($org);
    }
}
