<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\EnterpriseAdmin;

final class ListGlobalWebhooks_
{
    private const OPERATION_ID = 'enterprise-admin/list-global-webhooks';
    /**This API is under preview and subject to change.**/
    public string $accept;
    /**Results per page (max 100)**/
    public int $per_page;
    /**Page number of the results to fetch.**/
    public int $page;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(string $accept = 'application/vnd.github.superpro-preview+json', int $per_page = 30, int $page = 1)
    {
        $this->accept = $accept;
        $this->per_page = $per_page;
        $this->page = $page;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{per_page}', '{page}'), array($this->per_page, $this->page), '/admin/hooks?per_page={per_page}&page={page}'));
    }
    function validateResponse()
    {
    }
}
