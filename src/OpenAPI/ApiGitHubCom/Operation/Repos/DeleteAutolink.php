<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos;

final class DeleteAutolink
{
    private const OPERATION_ID = 'repos/delete-autolink';
    /****/
    public string $owner;
    /****/
    public string $repo;
    /**autolink_id parameter**/
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
        return new \RingCentral\Psr7\Request('delete', \str_replace(array('{owner}', '{repo}', '{autolink_id}'), array($this->owner, $this->repo, $this->autolink_id), '/repos/{owner}/{repo}/autolinks/{autolink_id}?'));
    }
    function validateResponse()
    {
    }
}
