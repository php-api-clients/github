<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Projects\Columns\Cards\CbCardIdRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Projects\MoveCardOperation;

final class Moves
{
    function post($card_id): MoveCardOperation
    {
        return new MoveCardOperation($card_id);
    }
}
