<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Path\Reactions;

final class CbReactionIdRcb
{
    function delete(string $accept = 'application/vnd.github.squirrel-girl-preview+json', $reaction_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Reactions\Delete
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Reactions\Delete($accept, $reaction_id);
    }
}
