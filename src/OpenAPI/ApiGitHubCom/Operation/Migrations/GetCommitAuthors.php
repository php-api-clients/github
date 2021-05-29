<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class GetCommitAuthors
{
    private const OPERATION_ID = 'migrations/get-commit-authors';
    public string $owner;
    public string $repo;
    /**A user ID. Only return users with an ID greater than this ID.**/
    public int $since;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($owner, $repo, $since)
    {
        $this->owner = $owner;
        $this->repo  = $repo;
        $this->since = $since;
    }

    function createRequest(): RequestInterface
    {
        return new Request('get', str_replace(['{owner}', '{repo}', '{since}'], [$this->owner, $this->repo, $this->since], '/repos/{owner}/{repo}/import/authors?since={since}'));
    }

    function validateResponse(): void
    {
    }
}
