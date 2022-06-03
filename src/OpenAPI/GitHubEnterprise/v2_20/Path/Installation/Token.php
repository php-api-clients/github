<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Path\Installation;

final class Token
{
    function delete() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Apps\RevokeInstallationAccessToken
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Apps\RevokeInstallationAccessToken();
    }
}
