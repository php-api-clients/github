<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\EnterpriseAdmin;

final class GetPreReceiveEnvironment_
{
    private const OPERATION_ID = 'enterprise-admin/get-pre-receive-environment';
    /****/
    public int $pre_receive_environment_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($pre_receive_environment_id)
    {
        $this->pre_receive_environment_id = $pre_receive_environment_id;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{pre_receive_environment_id}'), array($this->pre_receive_environment_id), '/admin/pre-receive-environments/{pre_receive_environment_id}?'));
    }
    function validateResponse()
    {
    }
}
