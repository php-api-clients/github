<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\App\Hook;

final class Config
{
    function get() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\GetWebhookConfigForApp
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\GetWebhookConfigForApp();
    }
    function patch() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\UpdateWebhookConfigForApp
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\UpdateWebhookConfigForApp();
    }
}
