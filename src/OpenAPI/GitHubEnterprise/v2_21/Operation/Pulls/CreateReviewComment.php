<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Pulls;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class CreateReviewComment
{
    private const OPERATION_ID = 'pulls/create-review-comment';
    public string $owner;
    public string $repo;
    public int $pull_number;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($owner, $repo, $pull_number)
    {
        $this->owner       = $owner;
        $this->repo        = $repo;
        $this->pull_number = $pull_number;
    }

    function createRequest(): RequestInterface
    {
        return new Request('post', str_replace(['{owner}', '{repo}', '{pull_number}'], [$this->owner, $this->repo, $this->pull_number], '/repos/{owner}/{repo}/pulls/{pull_number}/comments?'));
    }

    function validateResponse(): void
    {
    }
}
