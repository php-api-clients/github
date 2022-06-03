<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Path\Projects\Columns\Cards;

final class CbCardIdRcb
{
    function get($card_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Projects\GetCard
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Projects\GetCard($card_id);
    }
    function delete($card_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Projects\DeleteCard
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Projects\DeleteCard($card_id);
    }
    function patch($card_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Projects\UpdateCard
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Projects\UpdateCard($card_id);
    }
}
