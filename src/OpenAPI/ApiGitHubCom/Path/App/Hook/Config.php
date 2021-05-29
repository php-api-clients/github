<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\App\Hook;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\GetWebhookConfigForAppOperation;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\UpdateWebhookConfigForAppOperation;

final class Config
{
    function get(): GetWebhookConfigForAppOperation
    {
        return new GetWebhookConfigForAppOperation();
    }

    function patch(): UpdateWebhookConfigForAppOperation
    {
        return new UpdateWebhookConfigForAppOperation();
    }
}
