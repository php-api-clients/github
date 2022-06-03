<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path;

final class App
{
    function get() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\GetAuthenticated
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\GetAuthenticated();
    }
}
