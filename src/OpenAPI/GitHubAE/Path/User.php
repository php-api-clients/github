<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path;

final class User
{
    function get() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\GetAuthenticatedOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\GetAuthenticatedOperation();
    }
    function patch() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\UpdateAuthenticatedOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\UpdateAuthenticatedOperation();
    }
}
