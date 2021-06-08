<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class UploadReleaseAsset
{
    private const OPERATION_ID = 'repos/upload-release-asset';
    public string $owner;
    public string $repo;
    /**release_id parameter**/
    public int $release_id;
    public string $name;
    public string $label;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($owner, $repo, $release_id, $name, $label)
    {
        $this->owner      = $owner;
        $this->repo       = $repo;
        $this->release_id = $release_id;
        $this->name       = $name;
        $this->label      = $label;
    }

    function createRequest(): RequestInterface
    {
        return new Request('post', str_replace(['{owner}', '{repo}', '{release_id}', '{name}', '{label}'], [$this->owner, $this->repo, $this->release_id, $this->name, $this->label], '/repos/{owner}/{repo}/releases/{release_id}/assets?name={name}&label={label}'));
    }

    function validateResponse(): void
    {
    }
}
