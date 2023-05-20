<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation\Actions;

use ApiClients\Client\GitHub\Schema;
use cebe\openapi\Reader;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;

use function json_encode;
use function str_replace;

final class ReviewPendingDeploymentsForRun
{
    public const OPERATION_ID    = 'actions/review-pending-deployments-for-run';
    public const OPERATION_MATCH = 'POST /repos/{owner}/{repo}/actions/runs/{run_id}/pending_deployments';
    private const METHOD         = 'POST';
    private const PATH           = '/repos/{owner}/{repo}/actions/runs/{run_id}/pending_deployments';
    private readonly SchemaValidator $requestSchemaValidator;
    /**The account owner of the repository. The name is not case sensitive. **/
    private string $owner;
    /**The name of the repository. The name is not case sensitive. **/
    private string $repo;
    /**The unique identifier of the workflow run. **/
    private int $runId;

    public function __construct(SchemaValidator $requestSchemaValidator, string $owner, string $repo, int $runId)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->owner                  = $owner;
        $this->repo                   = $repo;
        $this->runId                  = $runId;
    }

    public function createRequest(array $data): RequestInterface
    {
        $this->requestSchemaValidator->validate($data, Reader::readFromJson(Schema\Actions\ReviewPendingDeploymentsForRun\Request\ApplicationJson::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

        return new Request(self::METHOD, str_replace(['{owner}', '{repo}', '{run_id}'], [$this->owner, $this->repo, $this->runId], self::PATH), ['Content-Type' => 'application/json'], json_encode($data));
    }

    public function createResponse(ResponseInterface $response): ResponseInterface
    {
        return $response;
    }
}
