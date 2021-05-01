<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\EnterpriseAdmin;

final class DeletePublicKey
{
    private const OPERATION_ID = 'enterprise-admin/delete-public-key';
    /****/
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
