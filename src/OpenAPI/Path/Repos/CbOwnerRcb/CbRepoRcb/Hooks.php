<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Repos\CbOwnerRcb\CbRepoRcb;

final class Hooks
{
    function get($owner, $repo, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\Operation\Repos\ListWebhooksOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Repos\ListWebhooksOperation($owner, $repo, $per_page, $page);
    }
    function post($owner, $repo) : \ApiClients\Client\Github\OpenAPI\Operation\Repos\CreateWebhookOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Repos\CreateWebhookOperation($owner, $repo);
    }
}
