<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodeScanning;

final class DeleteAnalysis
{
    private const OPERATION_ID = 'code-scanning/delete-analysis';
    /****/
    public string $owner;
    /****/
    public string $repo;
    /**The ID of the analysis, as returned from the `GET /repos/{owner}/{repo}/code-scanning/analyses` operation.**/
    public int $analysis_id;
    /**Allow deletion if the specified analysis is the last in a set. If you attempt to delete the final analysis in a set without setting this parameter to `true`, you'll get a 400 response with the message: `Analysis is last of its type and deletion may result in the loss of historical alert data. Please specify confirm_delete.`**/
    public string $confirm_delete;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($owner, $repo, $analysis_id, $confirm_delete)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->analysis_id = $analysis_id;
        $this->confirm_delete = $confirm_delete;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('delete', \str_replace(array('{owner}', '{repo}', '{analysis_id}', '{confirm_delete}'), array($this->owner, $this->repo, $this->analysis_id, $this->confirm_delete), '/repos/{owner}/{repo}/code-scanning/analyses/{analysis_id}?confirm_delete={confirm_delete}'));
    }
    function validateResponse()
    {
    }
}
