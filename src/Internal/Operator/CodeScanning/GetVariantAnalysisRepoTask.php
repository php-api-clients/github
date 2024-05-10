<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operator\CodeScanning;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema\CodeScanningVariantAnalysisRepoTask;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class GetVariantAnalysisRepoTask
{
    public const OPERATION_ID    = 'code-scanning/get-variant-analysis-repo-task';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/code-scanning/codeql/variant-analyses/{codeql_variant_analysis_id}/repos/{repo_owner}/{repo_name}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Repos\Owner\Repo\CodeScanning\Codeql\VariantAnalyses\CodeqlVariantAnalysisId\Repos\RepoOwner\RepoName $hydrator)
    {
    }

    public function call(string $owner, string $repo, int $codeqlVariantAnalysisId, string $repoOwner, string $repoName): CodeScanningVariantAnalysisRepoTask
    {
        $operation = new \ApiClients\Client\GitHub\Internal\Operation\CodeScanning\GetVariantAnalysisRepoTask($this->responseSchemaValidator, $this->hydrator, $owner, $repo, $codeqlVariantAnalysisId, $repoOwner, $repoName);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): CodeScanningVariantAnalysisRepoTask {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
