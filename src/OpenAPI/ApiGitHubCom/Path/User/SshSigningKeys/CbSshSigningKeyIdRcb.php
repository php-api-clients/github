<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\User\SshSigningKeys;

final class CbSshSigningKeyIdRcb
{
    function get($ssh_signing_key_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\GetSshSigningKeyForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\GetSshSigningKeyForAuthenticatedUser($ssh_signing_key_id);
    }
    function delete($ssh_signing_key_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\DeleteSshSigningKeyForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\DeleteSshSigningKeyForAuthenticatedUser($ssh_signing_key_id);
    }
}
