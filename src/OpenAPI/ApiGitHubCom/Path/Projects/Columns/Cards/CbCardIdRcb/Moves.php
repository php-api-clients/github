<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\\Projects\Columns\Cards\CbCardIdRcb;

final class Moves
{
    function post($card_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\MoveCardOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\MoveCardOperation($card_id);
    }
}
