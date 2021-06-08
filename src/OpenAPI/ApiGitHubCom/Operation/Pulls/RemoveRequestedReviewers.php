<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class RemoveRequestedReviewers
{
    private const OPERATION_ID = 'pulls/remove-requested-reviewers';
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
        return new Request('delete', str_replace(['{owner}', '{repo}', '{pull_number}'], [$this->owner, $this->repo, $this->pull_number], '/repos/{owner}/{repo}/pulls/{pull_number}/requested_reviewers?'));
    }

    function validateResponse(): void
    {
    }
}
