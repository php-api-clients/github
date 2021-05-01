<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin;

final class DisableEncryption
{
    private const OPERATION_ID = 'enterprise-admin/disable-encryption';
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct()
    {
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('delete', \str_replace(array(), array(), '/enterprise/encryption?'));
    }
    function validateResponse()
    {
    }
}
