<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation\Reactions;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class DeleteForPullRequestComment
{
    public const OPERATION_ID    = 'reactions/delete-for-pull-request-comment';
    public const OPERATION_MATCH = 'DELETE /repos/{owner}/{repo}/pulls/comments/{comment_id}/reactions/{reaction_id}';
    private const METHOD         = 'DELETE';
    private const PATH           = '/repos/{owner}/{repo}/pulls/comments/{comment_id}/reactions/{reaction_id}';
    /**The account owner of the repository. The name is not case sensitive.**/
    private string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private string $repo;
    /**The unique identifier of the comment.**/
    private int $commentId;
    /**The unique identifier of the reaction.**/
    private int $reactionId;

    public function __construct(string $owner, string $repo, int $commentId, int $reactionId)
    {
        $this->owner      = $owner;
        $this->repo       = $repo;
        $this->commentId  = $commentId;
        $this->reactionId = $reactionId;
    }

    public function createRequest(array $data = []): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{owner}', '{repo}', '{comment_id}', '{reaction_id}'], [$this->owner, $this->repo, $this->commentId, $this->reactionId], self::PATH));
    }

    public function createResponse(ResponseInterface $response): ResponseInterface
    {
        return $response;
    }
}
