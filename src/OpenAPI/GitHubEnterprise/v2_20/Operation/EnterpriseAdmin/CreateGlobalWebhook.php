<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin;

final class CreateGlobalWebhook
{
    private const OPERATION_ID = 'enterprise-admin/create-global-webhook';
    /**This API is under preview and subject to change.**/
    public string $accept;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(string $accept = 'application/vnd.github.superpro-preview+json')
    {
        $this->accept = $accept;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('post', \str_replace(array(), array(), '/admin/hooks?'));
    }
    function validateResponse()
    {
    }
}
