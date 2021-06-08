<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Actions;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class CreateRegistrationTokenForRepo
{
    private const OPERATION_ID = 'actions/create-registration-token-for-repo';
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
        return new Request('post', str_replace(['{owner}', '{repo}'], [$this->owner, $this->repo], '/repos/{owner}/{repo}/actions/runners/registration-token?'));
    }

    function validateResponse(): void
    {
    }
}
