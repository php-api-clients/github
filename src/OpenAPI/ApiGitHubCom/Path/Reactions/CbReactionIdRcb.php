<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\\Reactions;

final class CbReactionIdRcb
{
    function delete($reaction_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\DeleteLegacyOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\DeleteLegacyOperation($reaction_id);
    }
}
