<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\\Projects\Columns\Cards\CbCardIdRcb;

final class Moves
{
    function post($card_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Projects\MoveCardOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Projects\MoveCardOperation($card_id);
    }
}
