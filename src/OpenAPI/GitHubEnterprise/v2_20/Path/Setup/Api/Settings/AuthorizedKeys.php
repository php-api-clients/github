<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Path\Setup\Api\Settings;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\AddAuthorizedSshKeyOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\GetAllAuthorizedSshKeysOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\RemoveAuthorizedSshKeyOperation;

final class AuthorizedKeys
{
    function get(): GetAllAuthorizedSshKeysOperation
    {
        return new GetAllAuthorizedSshKeysOperation();
    }

    function post(): AddAuthorizedSshKeyOperation
    {
        return new AddAuthorizedSshKeyOperation();
    }

    function delete(): RemoveAuthorizedSshKeyOperation
    {
        return new RemoveAuthorizedSshKeyOperation();
    }
}
