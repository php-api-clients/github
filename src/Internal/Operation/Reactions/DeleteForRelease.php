<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operation\Reactions;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function str_replace;

final class DeleteForRelease
{
    public const OPERATION_ID    = 'reactions/delete-for-release';
    public const OPERATION_MATCH = 'DELETE /repos/{owner}/{repo}/releases/{release_id}/reactions/{reaction_id}';
    private const METHOD         = 'DELETE';
    private const PATH           = '/repos/{owner}/{repo}/releases/{release_id}/reactions/{reaction_id}';
    /**The account owner of the repository. The name is not case sensitive. **/
    private string $owner;
    /**The name of the repository without the `.git` extension. The name is not case sensitive. **/
    private string $repo;
    /**The unique identifier of the release. **/
    private int $releaseId;
    /**The unique identifier of the reaction. **/
    private int $reactionId;

    public function __construct(string $owner, string $repo, int $releaseId, int $reactionId)
    {
        $this->owner      = $owner;
        $this->repo       = $repo;
        $this->releaseId  = $releaseId;
        $this->reactionId = $reactionId;
    }

    public function createRequest(): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{owner}', '{repo}', '{release_id}', '{reaction_id}'], [$this->owner, $this->repo, $this->releaseId, $this->reactionId], self::PATH));
    }

    /** @return array{code: int} */
    public function createResponse(ResponseInterface $response): array
    {
        $code = $response->getStatusCode();
        switch ($code) {
            /**
             * Response
             **/
            case 204:
                return ['code' => 204];
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
