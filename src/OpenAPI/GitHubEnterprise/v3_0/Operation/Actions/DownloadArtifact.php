<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Actions;

final class DownloadArtifact
{
    private const OPERATION_ID = 'actions/download-artifact';
    /****/
    public string $owner;
    /****/
    public string $repo;
    /**artifact_id parameter**/
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
