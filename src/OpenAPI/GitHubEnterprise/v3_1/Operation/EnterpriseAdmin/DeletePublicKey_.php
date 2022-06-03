<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin;

final class DeletePublicKey_
{
    private const OPERATION_ID = 'enterprise-admin/delete-public-key';
    /**The unique identifier of the key.**/
    public string $key_ids;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($key_ids)
    {
        $this->key_ids = $key_ids;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('delete', \str_replace(array('{key_ids}'), array($this->key_ids), '/admin/keys/{key_ids}?'));
    }
    function validateResponse()
    {
    }
}
