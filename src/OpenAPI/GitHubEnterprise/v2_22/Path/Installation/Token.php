<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path\Installation;

final class Token
{
    function delete() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Apps\RevokeInstallationAccessTokenOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Apps\RevokeInstallationAccessTokenOperation();
    }
}
