<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodeScanning;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class GetSarif
{
    private const OPERATION_ID = 'code-scanning/get-sarif';
    public string $owner;
    public string $repo;
    /**The SARIF ID obtained after uploading.**/
    public string $sarif_id;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($owner, $repo, $sarif_id)
    {
        $this->owner    = $owner;
        $this->repo     = $repo;
        $this->sarif_id = $sarif_id;
    }

    function createRequest(): RequestInterface
    {
        return new Request('get', str_replace(['{owner}', '{repo}', '{sarif_id}'], [$this->owner, $this->repo, $this->sarif_id], '/repos/{owner}/{repo}/code-scanning/sarifs/{sarif_id}?'));
    }

    function validateResponse(): void
    {
    }
}
