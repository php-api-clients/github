<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Orgs;

final class PingWebhook_
{
    private const OPERATION_ID = 'orgs/ping-webhook';
    /**The organization name. The name is not case sensitive.**/
    private readonly string $org;
    /**The unique identifier of the hook.**/
    private readonly int $hook_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(string $org, int $hook_id)
    {
        $this->org = $org;
        $this->hook_id = $hook_id;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('post', \str_replace(array('{org}', '{hook_id}'), array($this->org, $this->hook_id), '/orgs/{org}/hooks/{hook_id}/pings'));
    }
    function validateResponse()
    {
    }
}
