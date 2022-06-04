<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\EnterpriseAdmin;

final class RemoveAuthorizedSshKey_
{
    private const OPERATION_ID = 'enterprise-admin/remove-authorized-ssh-key';
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct()
    {
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('delete', \str_replace(array(), array(), '/setup/api/settings/authorized-keys'));
    }
    function validateResponse()
    {
    }
}
