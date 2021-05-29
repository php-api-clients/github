<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Projects\Columns\Cards;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Projects\DeleteCardOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Projects\GetCardOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Projects\UpdateCardOperation;

final class CbCardIdRcb
{
    function get($card_id): GetCardOperation
    {
        return new GetCardOperation($card_id);
    }

    function delete($card_id): DeleteCardOperation
    {
        return new DeleteCardOperation($card_id);
    }

    function patch($card_id): UpdateCardOperation
    {
        return new UpdateCardOperation($card_id);
    }
}
