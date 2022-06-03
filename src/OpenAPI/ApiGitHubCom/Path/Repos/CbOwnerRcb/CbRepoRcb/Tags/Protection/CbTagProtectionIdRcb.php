<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Tags\Protection;

final class CbTagProtectionIdRcb
{
    function delete($owner, $repo, $tag_protection_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DeleteTagProtection
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DeleteTagProtection($owner, $repo, $tag_protection_id);
    }
}
