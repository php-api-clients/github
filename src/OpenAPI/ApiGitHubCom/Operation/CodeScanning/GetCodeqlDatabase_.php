<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodeScanning;

final class GetCodeqlDatabase_
{
    private const OPERATION_ID = 'code-scanning/get-codeql-database';
    /**The account owner of the repository. The name is not case sensitive.**/
    private readonly string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private readonly string $repo;
    /**The language of the CodeQL database.**/
    private readonly string $language;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(string $owner, string $repo, string $language)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->language = $language;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{owner}', '{repo}', '{language}'), array($this->owner, $this->repo, $this->language), '/repos/{owner}/{repo}/code-scanning/codeql/databases/{language}'));
    }
    function validateResponse()
    {
    }
}
