<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Issues;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class Lock
{
    private const OPERATION_ID = 'issues/lock';
    public string $owner;
    public string $repo;
    /**issue_number parameter**/
    public int $issue_number;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($owner, $repo, $issue_number)
    {
        $this->owner        = $owner;
        $this->repo         = $repo;
        $this->issue_number = $issue_number;
    }

    function createRequest(): RequestInterface
    {
        return new Request('put', str_replace(['{owner}', '{repo}', '{issue_number}'], [$this->owner, $this->repo, $this->issue_number], '/repos/{owner}/{repo}/issues/{issue_number}/lock?'));
    }

    function validateResponse(): void
    {
    }
}
