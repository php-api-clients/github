<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Pulls;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class CreateReplyForReviewComment
{
    private const OPERATION_ID = 'pulls/create-reply-for-review-comment';
    public string $owner;
    public string $repo;
    public int $pull_number;
    /**comment_id parameter**/
    public int $comment_id;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($owner, $repo, $pull_number, $comment_id)
    {
        $this->owner       = $owner;
        $this->repo        = $repo;
        $this->pull_number = $pull_number;
        $this->comment_id  = $comment_id;
    }

    function createRequest(): RequestInterface
    {
        return new Request('post', str_replace(['{owner}', '{repo}', '{pull_number}', '{comment_id}'], [$this->owner, $this->repo, $this->pull_number, $this->comment_id], '/repos/{owner}/{repo}/pulls/{pull_number}/comments/{comment_id}/replies?'));
    }

    function validateResponse(): void
    {
    }
}
