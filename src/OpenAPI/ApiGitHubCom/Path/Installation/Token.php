<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\\Installation;

final class Token
{
    function delete() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\RevokeInstallationAccessTokenOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\RevokeInstallationAccessTokenOperation();
    }
}
