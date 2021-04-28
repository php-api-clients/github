<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\App\Hook;

final class Config
{
    function get() : \ApiClients\Client\Github\OpenAPI\Operation\Apps\GetWebhookConfigForAppOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Apps\GetWebhookConfigForAppOperation();
    }
    function patch() : \ApiClients\Client\Github\OpenAPI\Operation\Apps\UpdateWebhookConfigForAppOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Apps\UpdateWebhookConfigForAppOperation();
    }
}
