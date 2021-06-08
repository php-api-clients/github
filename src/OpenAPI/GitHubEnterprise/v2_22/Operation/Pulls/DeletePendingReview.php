<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Pulls;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class DeletePendingReview
{
    private const OPERATION_ID = 'pulls/delete-pending-review';
    public string $owner;
    public string $repo;
    public int $pull_number;
    /**review_id parameter**/
    public int $review_id;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($owner, $repo, $pull_number, $review_id)
    {
        $this->owner       = $owner;
        $this->repo        = $repo;
        $this->pull_number = $pull_number;
        $this->review_id   = $review_id;
    }

    function createRequest(): RequestInterface
    {
        return new Request('delete', str_replace(['{owner}', '{repo}', '{pull_number}', '{review_id}'], [$this->owner, $this->repo, $this->pull_number, $this->review_id], '/repos/{owner}/{repo}/pulls/{pull_number}/reviews/{review_id}?'));
    }

    function validateResponse(): void
    {
    }
}
