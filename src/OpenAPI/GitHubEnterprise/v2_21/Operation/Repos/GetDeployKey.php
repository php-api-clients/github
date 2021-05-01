<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Repos;

final class GetDeployKey
{
    private const OPERATION_ID = 'repos/get-deploy-key';
    /****/
    public string $owner;
    /****/
    public string $repo;
    /**key_id parameter**/
    public int $key_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($owner, $repo, $key_id)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->key_id = $key_id;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{owner}', '{repo}', '{key_id}'), array($this->owner, $this->repo, $this->key_id), '/repos/{owner}/{repo}/keys/{key_id}?'));
    }
    function validateResponse()
    {
    }
}