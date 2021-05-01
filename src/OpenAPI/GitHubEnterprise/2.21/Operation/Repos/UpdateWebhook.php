<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.21\Operation\Repos;

final class UpdateWebhook
{
    private const OPERATION_ID = 'repos/update-webhook';
    /****/
    public string $owner;
    /****/
    public string $repo;
    /****/
    public int $hook_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($owner, $repo, $hook_id)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->hook_id = $hook_id;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('patch', \str_replace(array('{owner}', '{repo}', '{hook_id}'), array($this->owner, $this->repo, $this->hook_id), '/repos/{owner}/{repo}/hooks/{hook_id}?'));
    }
    function validateResponse()
    {
    }
}
