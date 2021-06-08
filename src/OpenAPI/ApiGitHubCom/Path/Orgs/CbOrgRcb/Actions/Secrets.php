<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Orgs\CbOrgRcb\Actions;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListOrgSecrets;

final class Secrets
{
    function get($org, int $per_page = 30, int $page = 1): ListOrgSecrets
    {
        return new ListOrgSecrets($org, $per_page, $page);
    }
}
