<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Orgs\CbOrgRcb\Actions;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListOrgSecretsOperation;

final class Secrets
{
    function get($org, int $per_page = 30, int $page = 1): ListOrgSecretsOperation
    {
        return new ListOrgSecretsOperation($org, $per_page, $page);
    }
}
