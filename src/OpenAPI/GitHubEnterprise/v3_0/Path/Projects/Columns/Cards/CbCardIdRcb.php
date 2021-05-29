<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Projects\Columns\Cards;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Projects\DeleteCard;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Projects\GetCard;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Projects\UpdateCard;

final class CbCardIdRcb
{
    function get($card_id): GetCard
    {
        return new GetCard($card_id);
    }

    function delete($card_id): DeleteCard
    {
        return new DeleteCard($card_id);
    }

    function patch($card_id): UpdateCard
    {
        return new UpdateCard($card_id);
    }
}
