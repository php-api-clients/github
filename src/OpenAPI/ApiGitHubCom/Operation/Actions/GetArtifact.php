<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class GetArtifact
{
    private const OPERATION_ID = 'actions/get-artifact';
    public string $owner;
    public string $repo;
    /**artifact_id parameter**/
    public int $artifact_id;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($owner, $repo, $artifact_id)
    {
        $this->owner       = $owner;
        $this->repo        = $repo;
        $this->artifact_id = $artifact_id;
    }

    function createRequest(): RequestInterface
    {
        return new Request('get', str_replace(['{owner}', '{repo}', '{artifact_id}'], [$this->owner, $this->repo, $this->artifact_id], '/repos/{owner}/{repo}/actions/artifacts/{artifact_id}?'));
    }

    function validateResponse(): void
    {
    }
}
