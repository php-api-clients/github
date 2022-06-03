<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Orgs\CbOrgRcb\Actions;

final class Secrets
{
    function get($org, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\ListOrgSecrets
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\ListOrgSecrets($org, $per_page, $page);
    }
}
