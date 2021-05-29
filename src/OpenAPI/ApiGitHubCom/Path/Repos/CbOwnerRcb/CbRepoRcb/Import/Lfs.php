<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Import;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\SetLfsPreferenceOperation;

final class Lfs
{
    function patch($owner, $repo): SetLfsPreferenceOperation
    {
        return new SetLfsPreferenceOperation($owner, $repo);
    }
}
