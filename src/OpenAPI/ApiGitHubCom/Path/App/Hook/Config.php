<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\App\Hook;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\GetWebhookConfigForApp;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\UpdateWebhookConfigForApp;

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
