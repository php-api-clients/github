<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Issues;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class DeleteLabel
{
    private const OPERATION_ID = 'issues/delete-label';
    public string $owner;
    public string $repo;
    public string $name;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($owner, $repo, $name)
    {
        $this->owner = $owner;
        $this->repo  = $repo;
        $this->name  = $name;
    }

    function createRequest(): RequestInterface
    {
        return new Request('delete', str_replace(['{owner}', '{repo}', '{name}'], [$this->owner, $this->repo, $this->name], '/repos/{owner}/{repo}/labels/{name}?'));
    }

    function validateResponse(): void
    {
    }
}
