<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class GetClones
{
    private const OPERATION_ID = 'repos/get-clones';
    public string $owner;
    public string $repo;
    /**Must be one of: `day`, `week`.**/
    public string $per;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($owner, $repo, string $per = 'day')
    {
        $this->owner = $owner;
        $this->repo  = $repo;
        $this->per   = $per;
    }

    function createRequest(): RequestInterface
    {
        return new Request('get', str_replace(['{owner}', '{repo}', '{per}'], [$this->owner, $this->repo, $this->per], '/repos/{owner}/{repo}/traffic/clones?per={per}'));
    }

    function validateResponse(): void
    {
    }
}
