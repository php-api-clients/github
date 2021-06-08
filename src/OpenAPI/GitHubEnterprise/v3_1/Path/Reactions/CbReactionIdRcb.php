<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Reactions;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions\DeleteLegacy;

final class CbReactionIdRcb
{
    function delete($reaction_id): DeleteLegacy
    {
        return new DeleteLegacy($reaction_id);
    }
}
