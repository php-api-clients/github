<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Repos;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class DeleteDeployKey
{
    private const OPERATION_ID = 'repos/delete-deploy-key';
    public string $owner;
    public string $repo;
    /**key_id parameter**/
    public int $key_id;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($owner, $repo, $key_id)
    {
        $this->owner  = $owner;
        $this->repo   = $repo;
        $this->key_id = $key_id;
    }

    function createRequest(): RequestInterface
    {
        return new Request('delete', str_replace(['{owner}', '{repo}', '{key_id}'], [$this->owner, $this->repo, $this->key_id], '/repos/{owner}/{repo}/keys/{key_id}?'));
    }

    function validateResponse(): void
    {
    }
}
