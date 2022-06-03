<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Path\Reactions;

final class CbReactionIdRcb
{
    function delete($reaction_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Reactions\DeleteLegacy
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Reactions\DeleteLegacy($reaction_id);
    }
}
