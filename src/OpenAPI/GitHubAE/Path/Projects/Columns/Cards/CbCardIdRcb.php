<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Projects\Columns\Cards;

final class CbCardIdRcb
{
    function get($card_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Projects\GetCard
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Projects\GetCard($card_id);
    }
    function delete($card_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Projects\DeleteCard
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Projects\DeleteCard($card_id);
    }
    function patch($card_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Projects\UpdateCard
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Projects\UpdateCard($card_id);
    }
}
