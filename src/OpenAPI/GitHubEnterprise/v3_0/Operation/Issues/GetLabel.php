<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Issues;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class GetLabel
{
    private const OPERATION_ID = 'issues/get-label';
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
        return new Request('get', str_replace(['{owner}', '{repo}', '{name}'], [$this->owner, $this->repo, $this->name], '/repos/{owner}/{repo}/labels/{name}?'));
    }

    function validateResponse(): void
    {
    }
}
