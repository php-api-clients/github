<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Git;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class GetRef
{
    private const OPERATION_ID = 'git/get-ref';
    public string $owner;
    public string $repo;
    /**ref parameter**/
    public string $ref;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($owner, $repo, $ref)
    {
        $this->owner = $owner;
        $this->repo  = $repo;
        $this->ref   = $ref;
    }

    function createRequest(): RequestInterface
    {
        return new Request('get', str_replace(['{owner}', '{repo}', '{ref}'], [$this->owner, $this->repo, $this->ref], '/repos/{owner}/{repo}/git/ref/{ref}?'));
    }

    function validateResponse(): void
    {
    }
}
