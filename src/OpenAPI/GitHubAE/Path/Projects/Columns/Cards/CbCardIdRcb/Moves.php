<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Projects\Columns\Cards\CbCardIdRcb;

final class Moves
{
    function post($card_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Projects\MoveCard
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Projects\MoveCard($card_id);
    }
}
