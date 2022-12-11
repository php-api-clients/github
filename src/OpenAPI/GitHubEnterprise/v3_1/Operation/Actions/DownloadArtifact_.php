<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions;

final class DownloadArtifact_
{
    private const OPERATION_ID = 'actions/download-artifact';
    /**The account owner of the repository. The name is not case sensitive.**/
    private readonly string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private readonly string $repo;
    /**The unique identifier of the artifact.**/
    private readonly int $artifact_id;
    private readonly string $archive_format;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(string $owner, string $repo, int $artifact_id, string $archive_format)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->artifact_id = $artifact_id;
        $this->archive_format = $archive_format;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{owner}', '{repo}', '{artifact_id}', '{archive_format}'), array($this->owner, $this->repo, $this->artifact_id, $this->archive_format), '/repos/{owner}/{repo}/actions/artifacts/{artifact_id}/{archive_format}'));
    }
    function validateResponse()
    {
    }
}
