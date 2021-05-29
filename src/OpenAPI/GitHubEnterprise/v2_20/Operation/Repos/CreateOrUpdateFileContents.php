<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Repos;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class CreateOrUpdateFileContents
{
    private const OPERATION_ID = 'repos/create-or-update-file-contents';
    public string $owner;
    public string $repo;
    /**path parameter**/
    public string $path;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($owner, $repo, $path)
    {
        $this->owner = $owner;
        $this->repo  = $repo;
        $this->path  = $path;
    }

    function createRequest(): RequestInterface
    {
        return new Request('put', str_replace(['{owner}', '{repo}', '{path}'], [$this->owner, $this->repo, $this->path], '/repos/{owner}/{repo}/contents/{path}?'));
    }

    function validateResponse(): void
    {
    }
}
