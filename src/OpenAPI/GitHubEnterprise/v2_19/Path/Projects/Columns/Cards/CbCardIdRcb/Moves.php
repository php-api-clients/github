<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Path\Projects\Columns\Cards\CbCardIdRcb;

final class Moves
{
    function post($card_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Projects\MoveCard
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Projects\MoveCard($card_id);
    }
}
