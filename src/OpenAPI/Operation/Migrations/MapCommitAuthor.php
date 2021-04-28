<?php

namespace ApiClients\Client\Github\OpenAPI\Operation\Migrations;

final class MapCommitAuthor
{
    private const OPERATION_ID = 'migrations/map-commit-author';
    /****/
    public string $owner;
    /****/
    public string $repo;
    /****/
    public int $author_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($owner, $repo, $author_id)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->author_id = $author_id;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('patch', \str_replace(array('{owner}', '{repo}', '{author_id}'), array($this->owner, $this->repo, $this->author_id), '/repos/{owner}/{repo}/import/authors/{author_id}?'));
    }
    function validateResponse()
    {
    }
}
