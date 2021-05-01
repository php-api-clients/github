<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\3.0\Operation\EnterpriseAdmin;

final class GetAllAuthorizedSshKeys
{
    private const OPERATION_ID = 'enterprise-admin/get-all-authorized-ssh-keys';
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct()
    {
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array(), array(), '/setup/api/settings/authorized-keys?'));
    }
    function validateResponse()
    {
    }
}
