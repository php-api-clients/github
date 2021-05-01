<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path;

final class Emojis
{
    function get() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Emojis\GetOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Emojis\GetOperation();
    }
}
