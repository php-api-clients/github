<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Reactions;

final class CbReactionIdRcb
{
    function delete($reaction_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Reactions\DeleteLegacy
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Reactions\DeleteLegacy($reaction_id);
    }
}
