<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\App\Hook;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Apps\GetWebhookConfigForApp;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Apps\UpdateWebhookConfigForApp;

final class Config
{
    function get(): GetWebhookConfigForApp
    {
        return new GetWebhookConfigForApp();
    }

    function patch(): UpdateWebhookConfigForApp
    {
        return new UpdateWebhookConfigForApp();
    }
}
