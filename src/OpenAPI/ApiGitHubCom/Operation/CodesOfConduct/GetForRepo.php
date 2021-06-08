<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodesOfConduct;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class GetForRepo
{
    private const OPERATION_ID = 'codes-of-conduct/get-for-repo';
    public string $owner;
    public string $repo;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($owner, $repo)
    {
        $this->owner = $owner;
        $this->repo  = $repo;
    }

    function createRequest(): RequestInterface
    {
        return new Request('get', str_replace(['{owner}', '{repo}'], [$this->owner, $this->repo], '/repos/{owner}/{repo}/community/code_of_conduct?'));
    }

    function validateResponse(): void
    {
    }
}
