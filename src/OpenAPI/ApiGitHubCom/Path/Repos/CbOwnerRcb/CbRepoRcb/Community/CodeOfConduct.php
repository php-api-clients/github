<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Community;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodesOfConduct\GetForRepo;

final class CodeOfConduct
{
    function get($owner, $repo): GetForRepo
    {
        return new GetForRepo($owner, $repo);
    }
}
