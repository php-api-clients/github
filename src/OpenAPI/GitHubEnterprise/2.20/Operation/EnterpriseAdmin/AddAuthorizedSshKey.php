<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.20\Operation\EnterpriseAdmin;

final class AddAuthorizedSshKey
{
    private const OPERATION_ID = 'enterprise-admin/add-authorized-ssh-key';
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct()
    {
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('post', \str_replace(array(), array(), '/setup/api/settings/authorized-keys?'));
    }
    function validateResponse()
    {
    }
}
