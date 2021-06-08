<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Path\Reactions;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Reactions\Delete;

final class CbReactionIdRcb
{
    function delete(string $accept = 'application/vnd.github.squirrel-girl-preview+json', $reaction_id): Delete
    {
        return new Delete($accept, $reaction_id);
    }
}
