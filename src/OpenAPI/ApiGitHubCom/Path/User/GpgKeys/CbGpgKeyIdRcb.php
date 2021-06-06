<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\User\GpgKeys;

final class CbGpgKeyIdRcb
{
    function get($gpg_key_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\GetGpgKeyForAuthenticated
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\GetGpgKeyForAuthenticated($gpg_key_id);
    }
    function delete($gpg_key_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\DeleteGpgKeyForAuthenticated
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\DeleteGpgKeyForAuthenticated($gpg_key_id);
    }
}
