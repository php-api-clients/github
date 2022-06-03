<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos;

final class GetAutolink_
{
    private const OPERATION_ID = 'repos/get-autolink';
    /**The account owner of the repository. The name is not case sensitive.**/
    public string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    public string $repo;
    /**The unique identifier of the autolink.**/
    public int $autolink_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($owner, $repo, $autolink_id)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->autolink_id = $autolink_id;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{owner}', '{repo}', '{autolink_id}'), array($this->owner, $this->repo, $this->autolink_id), '/repos/{owner}/{repo}/autolinks/{autolink_id}?'));
    }
    function validateResponse()
    {
    }
}
