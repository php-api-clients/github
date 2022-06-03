<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\App\Hook;

final class Config
{
    function get() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Apps\GetWebhookConfigForApp
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Apps\GetWebhookConfigForApp();
    }
    function patch() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Apps\UpdateWebhookConfigForApp
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Apps\UpdateWebhookConfigForApp();
    }
}
