<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions;

final class GetArtifact_
{
    private const OPERATION_ID = 'actions/get-artifact';
    /**The account owner of the repository. The name is not case sensitive.**/
    public string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    public string $repo;
    /**The unique identifier of the artifact.**/
    public int $artifact_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($owner, $repo, $artifact_id)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->artifact_id = $artifact_id;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{owner}', '{repo}', '{artifact_id}'), array($this->owner, $this->repo, $this->artifact_id), '/repos/{owner}/{repo}/actions/artifacts/{artifact_id}?'));
    }
    function validateResponse()
    {
    }
}
