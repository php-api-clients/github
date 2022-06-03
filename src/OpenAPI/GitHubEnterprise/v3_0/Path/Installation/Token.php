<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Installation;

final class Token
{
    function delete() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Apps\RevokeInstallationAccessToken
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Apps\RevokeInstallationAccessToken();
    }
}
