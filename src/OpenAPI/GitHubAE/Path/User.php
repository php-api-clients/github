<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path;

final class User
{
    function get() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\GetAuthenticated
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\GetAuthenticated();
    }
    function patch() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\UpdateAuthenticated
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\UpdateAuthenticated();
    }
}
