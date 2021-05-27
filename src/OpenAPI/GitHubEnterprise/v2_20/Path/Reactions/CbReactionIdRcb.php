<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Path\Reactions;

final class CbReactionIdRcb
{
    function delete(string $accept = 'application/vnd.github.squirrel-girl-preview+json', $reaction_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Reactions\DeleteOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Reactions\DeleteOperation($accept, $reaction_id);
    }
}
