<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Path\Projects\Columns\Cards\CbCardIdRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Projects\MoveCard;

final class Moves
{
    function post($card_id): MoveCard
    {
        return new MoveCard($card_id);
    }
}
