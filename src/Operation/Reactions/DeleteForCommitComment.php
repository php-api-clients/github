<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation\Reactions;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function str_replace;

final class DeleteForCommitComment
{
    public const OPERATION_ID    = 'reactions/delete-for-commit-comment';
    public const OPERATION_MATCH = 'DELETE /repos/{owner}/{repo}/comments/{comment_id}/reactions/{reaction_id}';
    private const METHOD         = 'DELETE';
    private const PATH           = '/repos/{owner}/{repo}/comments/{comment_id}/reactions/{reaction_id}';
    /**The account owner of the repository. The name is not case sensitive. **/
    private string $owner;
    /**The name of the repository. The name is not case sensitive. **/
    private string $repo;
    /**The unique identifier of the comment. **/
    private int $commentId;
    /**The unique identifier of the reaction. **/
    private int $reactionId;

    public function __construct(string $owner, string $repo, int $commentId, int $reactionId)
    {
        $this->owner      = $owner;
        $this->repo       = $repo;
        $this->commentId  = $commentId;
        $this->reactionId = $reactionId;
    }

    public function createRequest(): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{owner}', '{repo}', '{comment_id}', '{reaction_id}'], [$this->owner, $this->repo, $this->commentId, $this->reactionId], self::PATH));
    }

    /**
     * @return array{code: int}
     */
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
