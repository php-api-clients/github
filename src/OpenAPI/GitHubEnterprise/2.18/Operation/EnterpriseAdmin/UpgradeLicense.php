<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.18\Operation\EnterpriseAdmin;

final class UpgradeLicense
{
    private const OPERATION_ID = 'enterprise-admin/upgrade-license';
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct()
    {
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('post', \str_replace(array(), array(), '/setup/api/upgrade?'));
    }
    function validateResponse()
    {
    }
}
