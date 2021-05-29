<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class MapCommitAuthor
{
    private const OPERATION_ID = 'migrations/map-commit-author';
    public string $owner;
    public string $repo;
    public int $author_id;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($owner, $repo, $author_id)
    {
        $this->owner     = $owner;
        $this->repo      = $repo;
        $this->author_id = $author_id;
    }

    function createRequest(): RequestInterface
    {
        return new Request('patch', str_replace(['{owner}', '{repo}', '{author_id}'], [$this->owner, $this->repo, $this->author_id], '/repos/{owner}/{repo}/import/authors/{author_id}?'));
    }

    function validateResponse(): void
    {
    }
}
