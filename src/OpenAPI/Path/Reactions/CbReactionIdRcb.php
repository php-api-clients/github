<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Reactions;

final class CbReactionIdRcb
{
    function delete($reaction_id) : \ApiClients\Client\Github\OpenAPI\Operation\Reactions\DeleteLegacyOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Reactions\DeleteLegacyOperation($reaction_id);
    }
}
