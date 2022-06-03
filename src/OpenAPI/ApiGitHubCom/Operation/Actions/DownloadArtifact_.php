<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions;

final class DownloadArtifact_
{
    private const OPERATION_ID = 'actions/download-artifact';
    /**The account owner of the repository. The name is not case sensitive.**/
    public string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    public string $repo;
    /**The unique identifier of the artifact.**/
    public int $artifact_id;
    /****/
    public string $archive_format;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($owner, $repo, $artifact_id, $archive_format)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->artifact_id = $artifact_id;
        $this->archive_format = $archive_format;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{owner}', '{repo}', '{artifact_id}', '{archive_format}'), array($this->owner, $this->repo, $this->artifact_id, $this->archive_format), '/repos/{owner}/{repo}/actions/artifacts/{artifact_id}/{archive_format}?'));
    }
    function validateResponse()
    {
    }
}
