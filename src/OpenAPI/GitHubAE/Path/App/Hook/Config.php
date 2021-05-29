<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\App\Hook;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\GetWebhookConfigForApp;
use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\UpdateWebhookConfigForApp;

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
