<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Repos;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class RemoveCollaborator
{
    private const OPERATION_ID = 'repos/remove-collaborator';
    public string $owner;
    public string $repo;
    public string $username;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($owner, $repo, $username)
    {
        $this->owner    = $owner;
        $this->repo     = $repo;
        $this->username = $username;
    }

    function createRequest(): RequestInterface
    {
        return new Request('delete', str_replace(['{owner}', '{repo}', '{username}'], [$this->owner, $this->repo, $this->username], '/repos/{owner}/{repo}/collaborators/{username}?'));
    }

    function validateResponse(): void
    {
    }
}
