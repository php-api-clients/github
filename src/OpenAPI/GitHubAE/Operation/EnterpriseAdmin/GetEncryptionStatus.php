<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin;

final class GetEncryptionStatus
{
    private const OPERATION_ID = 'enterprise-admin/get-encryption-status';
    /**The id provided in the `status_url` after updating or deleting an encryption key.**/
    public string $request_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($request_id)
    {
        $this->request_id = $request_id;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{request_id}'), array($this->request_id), '/enterprise/encryption/status/{request_id}?'));
    }
    function validateResponse()
    {
    }
}
