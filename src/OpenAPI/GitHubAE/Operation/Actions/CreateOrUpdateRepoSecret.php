<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class CreateOrUpdateRepoSecret
{
    private const OPERATION_ID = 'actions/create-or-update-repo-secret';
    public string $owner;
    public string $repo;
    /**secret_name parameter**/
    public string $secret_name;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($owner, $repo, $secret_name)
    {
        $this->owner       = $owner;
        $this->repo        = $repo;
        $this->secret_name = $secret_name;
    }

    function createRequest(): RequestInterface
    {
        return new Request('put', str_replace(['{owner}', '{repo}', '{secret_name}'], [$this->owner, $this->repo, $this->secret_name], '/repos/{owner}/{repo}/actions/secrets/{secret_name}?'));
    }

    function validateResponse(): void
    {
    }
}
