<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Community;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodesOfConduct\GetForRepoOperation;

final class CodeOfConduct
{
    function get($owner, $repo): GetForRepoOperation
    {
        return new GetForRepoOperation($owner, $repo);
    }
}
