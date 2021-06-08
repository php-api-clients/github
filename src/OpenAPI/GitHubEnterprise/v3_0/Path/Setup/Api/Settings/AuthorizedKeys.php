<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Setup\Api\Settings;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\EnterpriseAdmin\AddAuthorizedSshKey;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\EnterpriseAdmin\GetAllAuthorizedSshKeys;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\EnterpriseAdmin\RemoveAuthorizedSshKey;

final class AuthorizedKeys
{
    function get(): GetAllAuthorizedSshKeys
    {
        return new GetAllAuthorizedSshKeys();
    }

    function post(): AddAuthorizedSshKey
    {
        return new AddAuthorizedSshKey();
    }

    function delete(): RemoveAuthorizedSshKey
    {
        return new RemoveAuthorizedSshKey();
    }
}
