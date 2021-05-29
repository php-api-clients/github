<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Reactions;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Reactions\DeleteLegacyOperation;

final class CbReactionIdRcb
{
    function delete($reaction_id): DeleteLegacyOperation
    {
        return new DeleteLegacyOperation($reaction_id);
    }
}
