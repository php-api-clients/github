<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\\App\Hook;

final class Config
{
    function get() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\GetWebhookConfigForAppOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\GetWebhookConfigForAppOperation();
    }
    function patch() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\UpdateWebhookConfigForAppOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\UpdateWebhookConfigForAppOperation();
    }
}
