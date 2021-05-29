<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Reactions;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Reactions\DeleteLegacyOperation;

final class CbReactionIdRcb
{
    function delete($reaction_id): DeleteLegacyOperation
    {
        return new DeleteLegacyOperation($reaction_id);
    }
}
