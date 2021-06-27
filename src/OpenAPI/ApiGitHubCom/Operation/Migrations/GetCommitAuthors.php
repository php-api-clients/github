<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations;

final class GetCommitAuthors
{
    private const OPERATION_ID = 'migrations/get-commit-authors';
    /****/
    public string $owner;
    /****/
    public string $repo;
    /**A user ID. Only return users with an ID greater than this ID.**/
    public int $since;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($owner, $repo, $since)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->since = $since;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{owner}', '{repo}', '{since}'), array($this->owner, $this->repo, $this->since), '/repos/{owner}/{repo}/import/authors?since={since}'));
    }
    function validateResponse()
    {
    }
}
