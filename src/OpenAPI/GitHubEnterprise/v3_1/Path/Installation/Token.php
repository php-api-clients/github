<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\\Installation;

final class Token
{
    function delete() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Apps\RevokeInstallationAccessTokenOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Apps\RevokeInstallationAccessTokenOperation();
    }
}
