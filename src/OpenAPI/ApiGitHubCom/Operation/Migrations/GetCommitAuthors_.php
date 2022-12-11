<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations;

final class GetCommitAuthors_
{
    private const OPERATION_ID = 'migrations/get-commit-authors';
    /**The account owner of the repository. The name is not case sensitive.**/
    private readonly string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private readonly string $repo;
    /**A user ID. Only return users with an ID greater than this ID.**/
    private readonly int $since;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(string $owner, string $repo, int $since)
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
