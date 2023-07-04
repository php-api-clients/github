<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\CodeScanning;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema\CodeScanningAnalysisDeletion;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class DeleteAnalysis
{
    public const OPERATION_ID    = 'code-scanning/delete-analysis';
    public const OPERATION_MATCH = 'DELETE /repos/{owner}/{repo}/code-scanning/analyses/{analysis_id}';
    private const METHOD         = 'DELETE';
    private const PATH           = '/repos/{owner}/{repo}/code-scanning/analyses/{analysis_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Repos\Owner\Repo\CodeScanning\Analyses\AnalysisId $hydrator)
    {
    }

    /** @return PromiseInterface<CodeScanningAnalysisDeletion> **/
    public function call(string $owner, string $repo, int $analysisId, string|null $confirmDelete): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\CodeScanning\DeleteAnalysis($this->responseSchemaValidator, $this->hydrator, $owner, $repo, $analysisId, $confirmDelete);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): CodeScanningAnalysisDeletion {
            return $operation->createResponse($response);
        });
    }
}
