<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\CodeScanning;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class GetAnalysis
{
    private const OPERATION_ID = 'code-scanning/get-analysis';
    public string $owner;
    public string $repo;
    /**The ID of the analysis, as returned from the `GET /repos/{owner}/{repo}/code-scanning/analyses` operation.**/
    public int $analysis_id;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($owner, $repo, $analysis_id)
    {
        $this->owner       = $owner;
        $this->repo        = $repo;
        $this->analysis_id = $analysis_id;
    }

    function createRequest(): RequestInterface
    {
        return new Request('get', str_replace(['{owner}', '{repo}', '{analysis_id}'], [$this->owner, $this->repo, $this->analysis_id], '/repos/{owner}/{repo}/code-scanning/analyses/{analysis_id}?'));
    }

    function validateResponse(): void
    {
    }
}
