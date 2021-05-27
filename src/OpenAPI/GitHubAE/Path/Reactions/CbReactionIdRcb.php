<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Reactions;

final class CbReactionIdRcb
{
    function delete($reaction_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Reactions\DeleteLegacyOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Reactions\DeleteLegacyOperation($reaction_id);
    }
}
