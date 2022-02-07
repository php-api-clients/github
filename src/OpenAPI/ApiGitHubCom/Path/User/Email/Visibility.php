<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\User\Email;

final class Visibility
{
    function patch() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\SetPrimaryEmailVisibilityForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\SetPrimaryEmailVisibilityForAuthenticatedUser();
    }
}
