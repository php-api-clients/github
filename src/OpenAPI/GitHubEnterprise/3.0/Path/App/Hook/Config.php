<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\3.0\Path\\App\Hook;

final class Config
{
    function get() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\3.0\Operation\Apps\GetWebhookConfigForAppOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\3.0\Operation\Apps\GetWebhookConfigForAppOperation();
    }
    function patch() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\3.0\Operation\Apps\UpdateWebhookConfigForAppOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\3.0\Operation\Apps\UpdateWebhookConfigForAppOperation();
    }
}
