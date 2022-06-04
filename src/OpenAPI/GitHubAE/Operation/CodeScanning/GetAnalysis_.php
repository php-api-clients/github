<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\CodeScanning;

final class GetAnalysis_
{
    private const OPERATION_ID = 'code-scanning/get-analysis';
    /**The account owner of the repository. The name is not case sensitive.**/
    public string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    public string $repo;
    /**The ID of the analysis, as returned from the `GET /repos/{owner}/{repo}/code-scanning/analyses` operation.**/
    public int $analysis_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($owner, $repo, $analysis_id)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->analysis_id = $analysis_id;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{owner}', '{repo}', '{analysis_id}'), array($this->owner, $this->repo, $this->analysis_id), '/repos/{owner}/{repo}/code-scanning/analyses/{analysis_id}'));
    }
    function validateResponse()
    {
    }
}
