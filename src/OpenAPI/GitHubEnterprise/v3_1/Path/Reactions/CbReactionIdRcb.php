<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\\Reactions;

final class CbReactionIdRcb
{
    function delete($reaction_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions\DeleteLegacyOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions\DeleteLegacyOperation($reaction_id);
    }
}
