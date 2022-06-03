<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Installation;

final class Token
{
    function delete() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\RevokeInstallationAccessToken
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\RevokeInstallationAccessToken();
    }
}
