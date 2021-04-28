<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Orgs\CbOrgRcb;

final class Hooks
{
    function get($org, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\Operation\Orgs\ListWebhooksOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Orgs\ListWebhooksOperation($org, $per_page, $page);
    }
    function post($org) : \ApiClients\Client\Github\OpenAPI\Operation\Orgs\CreateWebhookOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Orgs\CreateWebhookOperation($org);
    }
}
