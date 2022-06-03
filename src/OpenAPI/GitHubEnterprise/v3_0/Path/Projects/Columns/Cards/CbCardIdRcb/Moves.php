<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Projects\Columns\Cards\CbCardIdRcb;

final class Moves
{
    function post($card_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Projects\MoveCard
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Projects\MoveCard($card_id);
    }
}
