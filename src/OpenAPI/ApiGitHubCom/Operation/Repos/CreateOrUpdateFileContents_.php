<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos;

final class CreateOrUpdateFileContents_
{
    private const OPERATION_ID = 'repos/create-or-update-file-contents';
    /**The account owner of the repository. The name is not case sensitive.**/
    public string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    public string $repo;
    /**path parameter**/
    public string $path;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($owner, $repo, $path)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->path = $path;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('put', \str_replace(array('{owner}', '{repo}', '{path}'), array($this->owner, $this->repo, $this->path), '/repos/{owner}/{repo}/contents/{path}?'));
    }
    function validateResponse()
    {
    }
}
