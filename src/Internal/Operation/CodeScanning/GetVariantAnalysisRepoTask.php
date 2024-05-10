<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operation\CodeScanning;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema;
use cebe\openapi\Reader;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function explode;
use function json_decode;
use function str_replace;

final class GetVariantAnalysisRepoTask
{
    public const OPERATION_ID    = 'code-scanning/get-variant-analysis-repo-task';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/code-scanning/codeql/variant-analyses/{codeql_variant_analysis_id}/repos/{repo_owner}/{repo_name}';
    /**The account owner of the repository. The name is not case sensitive. **/
    private string $owner;
    /**The name of the controller repository. **/
    private string $repo;
    /**The ID of the variant analysis. **/
    private int $codeqlVariantAnalysisId;
    /**The account owner of the variant analysis repository. The name is not case sensitive. **/
    private string $repoOwner;
    /**The name of the variant analysis repository. **/
    private string $repoName;

    public function __construct(private readonly SchemaValidator $responseSchemaValidator, private readonly Internal\Hydrator\Operation\Repos\Owner\Repo\CodeScanning\Codeql\VariantAnalyses\CodeqlVariantAnalysisId\Repos\RepoOwner\RepoName $hydrator, string $owner, string $repo, int $codeqlVariantAnalysisId, string $repoOwner, string $repoName)
    {
        $this->owner                   = $owner;
        $this->repo                    = $repo;
        $this->codeqlVariantAnalysisId = $codeqlVariantAnalysisId;
        $this->repoOwner               = $repoOwner;
        $this->repoName                = $repoName;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('GET', str_replace(['{owner}', '{repo}', '{codeql_variant_analysis_id}', '{repo_owner}', '{repo_name}'], [$this->owner, $this->repo, $this->codeqlVariantAnalysisId, $this->repoOwner, $this->repoName], '/repos/{owner}/{repo}/code-scanning/codeql/variant-analyses/{codeql_variant_analysis_id}/repos/{repo_owner}/{repo_name}'));
    }

    public function createResponse(ResponseInterface $response): Schema\CodeScanningVariantAnalysisRepoTask
    {
        $code          = $response->getStatusCode();
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        switch ($contentType) {
            case 'application/json':
                $body = json_decode($response->getBody()->getContents(), true);
                switch ($code) {
                    /**
                     * Response
                     **/
                    case 200:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\CodeScanningVariantAnalysisRepoTask::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        return $this->hydrator->hydrateObject(Schema\CodeScanningVariantAnalysisRepoTask::class, $body);
                    /**
                     * Resource not found
                     **/

                    case 404:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\BasicError::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        throw new ErrorSchemas\BasicError(404, $this->hydrator->hydrateObject(Schema\BasicError::class, $body));
                    /**
                     * Service unavailable
                     **/

                    case 503:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\Operations\SecretScanning\ListAlertsForEnterprise\Response\ApplicationJson\ServiceUnavailable::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        throw new ErrorSchemas\Operations\SecretScanning\ListAlertsForEnterprise\Response\ApplicationJson\ServiceUnavailable(503, $this->hydrator->hydrateObject(Schema\Operations\SecretScanning\ListAlertsForEnterprise\Response\ApplicationJson\ServiceUnavailable::class, $body));
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
