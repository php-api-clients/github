<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path\Reactions;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Reactions\DeleteOperation;

final class CbReactionIdRcb
{
    function delete(string $accept = 'application/vnd.github.echo-preview+json,application/vnd.github.squirrel-girl-preview+json', $reaction_id): DeleteOperation
    {
        return new DeleteOperation($accept, $reaction_id);
    }
}
