<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Admin;

final class Hooks
{
    function get(int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\ListGlobalWebhooks
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\ListGlobalWebhooks($per_page, $page);
    }
    function post() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\CreateGlobalWebhook
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\CreateGlobalWebhook();
    }
}
