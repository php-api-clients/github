<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation\Reactions;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class DeleteForIssue
{
    public const OPERATION_ID    = 'reactions/delete-for-issue';
    public const OPERATION_MATCH = 'DELETE /repos/{owner}/{repo}/issues/{issue_number}/reactions/{reaction_id}';
    private const METHOD         = 'DELETE';
    private const PATH           = '/repos/{owner}/{repo}/issues/{issue_number}/reactions/{reaction_id}';
    /**The account owner of the repository. The name is not case sensitive.**/
    private string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private string $repo;
    /**The number that identifies the issue.**/
    private int $issueNumber;
    /**The unique identifier of the reaction.**/
    private int $reactionId;

    public function __construct(string $owner, string $repo, int $issueNumber, int $reactionId)
    {
        $this->owner       = $owner;
        $this->repo        = $repo;
        $this->issueNumber = $issueNumber;
        $this->reactionId  = $reactionId;
    }

    public function createRequest(array $data = []): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{owner}', '{repo}', '{issue_number}', '{reaction_id}'], [$this->owner, $this->repo, $this->issueNumber, $this->reactionId], self::PATH));
    }

    public function createResponse(ResponseInterface $response): ResponseInterface
    {
        return $response;
    }
}
