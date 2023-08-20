<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\DependencyGraph;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema\DependencyGraphSpdxSbom;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class ExportSbom
{
    public const OPERATION_ID    = 'dependency-graph/export-sbom';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/dependency-graph/sbom';
    private const METHOD         = 'GET';
    private const PATH           = '/repos/{owner}/{repo}/dependency-graph/sbom';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Repos\Owner\Repo\DependencyGraph\Sbom $hydrator)
    {
    }

    /** @return */
    public function call(string $owner, string $repo): DependencyGraphSpdxSbom|array
    {
        $operation = new \ApiClients\Client\GitHub\Operation\DependencyGraph\ExportSbom($this->responseSchemaValidator, $this->hydrator, $owner, $repo);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): DependencyGraphSpdxSbom|array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
