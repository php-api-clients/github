<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class DownloadArtifact
{
    private const OPERATION_ID = 'actions/download-artifact';
    public string $owner;
    public string $repo;
    /**artifact_id parameter**/
    public int $artifact_id;
    public string $archive_format;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($owner, $repo, $artifact_id, $archive_format)
    {
        $this->owner          = $owner;
        $this->repo           = $repo;
        $this->artifact_id    = $artifact_id;
        $this->archive_format = $archive_format;
    }

    function createRequest(): RequestInterface
    {
        return new Request('get', str_replace(['{owner}', '{repo}', '{artifact_id}', '{archive_format}'], [$this->owner, $this->repo, $this->artifact_id, $this->archive_format], '/repos/{owner}/{repo}/actions/artifacts/{artifact_id}/{archive_format}?'));
    }

    function validateResponse(): void
    {
    }
}
