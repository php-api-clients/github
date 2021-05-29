<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Actions;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListRepoSecretsOperation;

final class Secrets
{
    function get($owner, $repo, int $per_page = 30, int $page = 1): ListRepoSecretsOperation
    {
        return new ListRepoSecretsOperation($owner, $repo, $per_page, $page);
    }
}
