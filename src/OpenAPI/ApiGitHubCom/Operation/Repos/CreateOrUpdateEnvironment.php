<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class CreateOrUpdateEnvironment
{
    private const OPERATION_ID = 'repos/create-or-update-environment';
    public string $owner;
    public string $repo;
    /**The name of the environment**/
    public string $environment_name;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($owner, $repo, $environment_name)
    {
        $this->owner            = $owner;
        $this->repo             = $repo;
        $this->environment_name = $environment_name;
    }

    function createRequest(): RequestInterface
    {
        return new Request('put', str_replace(['{owner}', '{repo}', '{environment_name}'], [$this->owner, $this->repo, $this->environment_name], '/repos/{owner}/{repo}/environments/{environment_name}?'));
    }

    function validateResponse(): void
    {
    }
}
