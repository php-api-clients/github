<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\\Projects\Columns\Cards;

final class CbCardIdRcb
{
    function get($card_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\GetCardOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\GetCardOperation($card_id);
    }
    function delete($card_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\DeleteCardOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\DeleteCardOperation($card_id);
    }
    function patch($card_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\UpdateCardOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\UpdateCardOperation($card_id);
    }
}
