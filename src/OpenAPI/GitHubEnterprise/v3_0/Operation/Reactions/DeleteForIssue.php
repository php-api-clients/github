<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Reactions;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class DeleteForIssue
{
    private const OPERATION_ID = 'reactions/delete-for-issue';
    public string $owner;
    public string $repo;
    /**issue_number parameter**/
    public int $issue_number;
    public int $reaction_id;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($owner, $repo, $issue_number, $reaction_id)
    {
        $this->owner        = $owner;
        $this->repo         = $repo;
        $this->issue_number = $issue_number;
        $this->reaction_id  = $reaction_id;
    }

    function createRequest(): RequestInterface
    {
        return new Request('delete', str_replace(['{owner}', '{repo}', '{issue_number}', '{reaction_id}'], [$this->owner, $this->repo, $this->issue_number, $this->reaction_id], '/repos/{owner}/{repo}/issues/{issue_number}/reactions/{reaction_id}?'));
    }

    function validateResponse(): void
    {
    }
}
