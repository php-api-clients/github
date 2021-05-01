<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\\App\Hook;

final class Config
{
    function get() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\GetWebhookConfigForAppOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\GetWebhookConfigForAppOperation();
    }
    function patch() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\UpdateWebhookConfigForAppOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\UpdateWebhookConfigForAppOperation();
    }
}
