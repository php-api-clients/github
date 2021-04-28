<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Projects\Columns\Cards\CbCardIdRcb;

final class Moves
{
    function post($card_id) : \ApiClients\Client\Github\OpenAPI\Operation\Projects\MoveCardOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Projects\MoveCardOperation($card_id);
    }
}
