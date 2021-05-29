<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Reactions;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class ListForPullRequestReviewComment
{
    private const OPERATION_ID = 'reactions/list-for-pull-request-review-comment';
    public string $owner;
    public string $repo;
    /**comment_id parameter**/
    public int $comment_id;
    /**Returns a single [reaction type](https://docs.github.com/enterprise-server@2.19/rest/reference/reactions#reaction-types). Omit this parameter to list all reactions to a pull request review comment.**/
    public string $content;
    /**Results per page (max 100).**/
    public int $per_page;
    /**Page number of the results to fetch.**/
    public int $page;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($owner, $repo, $comment_id, $content, int $per_page = 30, int $page = 1)
    {
        $this->owner      = $owner;
        $this->repo       = $repo;
        $this->comment_id = $comment_id;
        $this->content    = $content;
        $this->per_page   = $per_page;
        $this->page       = $page;
    }

    function createRequest(): RequestInterface
    {
        return new Request('get', str_replace(['{owner}', '{repo}', '{comment_id}', '{content}', '{per_page}', '{page}'], [$this->owner, $this->repo, $this->comment_id, $this->content, $this->per_page, $this->page], '/repos/{owner}/{repo}/pulls/comments/{comment_id}/reactions?content={content}&per_page={per_page}&page={page}'));
    }

    function validateResponse(): void
    {
    }
}
