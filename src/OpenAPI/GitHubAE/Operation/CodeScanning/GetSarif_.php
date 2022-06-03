<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\CodeScanning;

final class GetSarif_
{
    private const OPERATION_ID = 'code-scanning/get-sarif';
    /**The account owner of the repository. The name is not case sensitive.**/
    public string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    public string $repo;
    /**The SARIF ID obtained after uploading.**/
    public string $sarif_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($owner, $repo, $sarif_id)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->sarif_id = $sarif_id;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{owner}', '{repo}', '{sarif_id}'), array($this->owner, $this->repo, $this->sarif_id), '/repos/{owner}/{repo}/code-scanning/sarifs/{sarif_id}?'));
    }
    function validateResponse()
    {
    }
}
