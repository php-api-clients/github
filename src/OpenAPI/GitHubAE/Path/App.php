<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path;

final class App
{
    function get() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\GetAuthenticatedOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\GetAuthenticatedOperation();
    }
}
