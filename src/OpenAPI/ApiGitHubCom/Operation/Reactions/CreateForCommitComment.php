<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class CreateForCommitComment
{
    private const OPERATION_ID = 'reactions/create-for-commit-comment';
    public string $owner;
    public string $repo;
    /**comment_id parameter**/
    public int $comment_id;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($owner, $repo, $comment_id)
    {
        $this->owner      = $owner;
        $this->repo       = $repo;
        $this->comment_id = $comment_id;
    }

    function createRequest(): RequestInterface
    {
        return new Request('post', str_replace(['{owner}', '{repo}', '{comment_id}'], [$this->owner, $this->repo, $this->comment_id], '/repos/{owner}/{repo}/comments/{comment_id}/reactions?'));
    }

    function validateResponse(): void
    {
    }
}
