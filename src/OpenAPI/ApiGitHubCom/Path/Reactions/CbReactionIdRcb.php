<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Reactions;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\DeleteLegacyOperation;

final class CbReactionIdRcb
{
    function delete($reaction_id): DeleteLegacyOperation
    {
        return new DeleteLegacyOperation($reaction_id);
    }
}
