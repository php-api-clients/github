<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Apps;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class GetRepoInstallation
{
    private const OPERATION_ID = 'apps/get-repo-installation';
    /**This API is under preview and subject to change.**/
    public string $accept;
    public string $owner;
    public string $repo;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct(string $accept = 'application/vnd.github.machine-man-preview+json', $owner, $repo)
    {
        $this->accept = $accept;
        $this->owner  = $owner;
        $this->repo   = $repo;
    }

    function createRequest(): RequestInterface
    {
        return new Request('get', str_replace(['{owner}', '{repo}'], [$this->owner, $this->repo], '/repos/{owner}/{repo}/installation?'));
    }

    function validateResponse(): void
    {
    }
}
