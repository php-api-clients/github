<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class DeleteForIssueComment
{
    private const OPERATION_ID = 'reactions/delete-for-issue-comment';
    public string $owner;
    public string $repo;
    /**comment_id parameter**/
    public int $comment_id;
    public int $reaction_id;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($owner, $repo, $comment_id, $reaction_id)
    {
        $this->owner       = $owner;
        $this->repo        = $repo;
        $this->comment_id  = $comment_id;
        $this->reaction_id = $reaction_id;
    }

    function createRequest(): RequestInterface
    {
        return new Request('delete', str_replace(['{owner}', '{repo}', '{comment_id}', '{reaction_id}'], [$this->owner, $this->repo, $this->comment_id, $this->reaction_id], '/repos/{owner}/{repo}/issues/comments/{comment_id}/reactions/{reaction_id}?'));
    }

    function validateResponse(): void
    {
    }
}
