<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Admin\Organizations;

final class CbOrgRcb
{
    function patch($org) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\UpdateOrgNameOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\UpdateOrgNameOperation($org);
    }
}
