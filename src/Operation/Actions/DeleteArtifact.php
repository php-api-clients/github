<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation\Actions;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class DeleteArtifact
{
    public const OPERATION_ID    = 'actions/delete-artifact';
    public const OPERATION_MATCH = 'DELETE /repos/{owner}/{repo}/actions/artifacts/{artifact_id}';
    private const METHOD         = 'DELETE';
    private const PATH           = '/repos/{owner}/{repo}/actions/artifacts/{artifact_id}';
    /**The account owner of the repository. The name is not case sensitive.**/
    private string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private string $repo;
    /**The unique identifier of the artifact.**/
    private int $artifactId;

    public function __construct(string $owner, string $repo, int $artifactId)
    {
        $this->owner      = $owner;
        $this->repo       = $repo;
        $this->artifactId = $artifactId;
    }

    public function createRequest(array $data = []): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{owner}', '{repo}', '{artifact_id}'], [$this->owner, $this->repo, $this->artifactId], self::PATH));
    }

    public function createResponse(ResponseInterface $response): ResponseInterface
    {
        return $response;
    }
}
