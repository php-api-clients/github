<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs;

final class DeleteWebhook_
{
    private const OPERATION_ID = 'orgs/delete-webhook';
    /**The organization name. The name is not case sensitive.**/
    public string $org;
    /**The unique identifier of the hook.**/
    public int $hook_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($org, $hook_id)
    {
        $this->org = $org;
        $this->hook_id = $hook_id;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('delete', \str_replace(array('{org}', '{hook_id}'), array($this->org, $this->hook_id), '/orgs/{org}/hooks/{hook_id}?'));
    }
    function validateResponse()
    {
    }
}
