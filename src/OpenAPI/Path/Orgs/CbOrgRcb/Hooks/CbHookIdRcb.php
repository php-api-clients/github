<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Orgs\CbOrgRcb\Hooks;

final class CbHookIdRcb
{
    function get($org, $hook_id) : \ApiClients\Client\Github\OpenAPI\Operation\Orgs\GetWebhookOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Orgs\GetWebhookOperation($org, $hook_id);
    }
    function delete($org, $hook_id) : \ApiClients\Client\Github\OpenAPI\Operation\Orgs\DeleteWebhookOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Orgs\DeleteWebhookOperation($org, $hook_id);
    }
    function patch($org, $hook_id) : \ApiClients\Client\Github\OpenAPI\Operation\Orgs\UpdateWebhookOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Orgs\UpdateWebhookOperation($org, $hook_id);
    }
}
