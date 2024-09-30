<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operator\CodeScanning;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class ListRecentAnalyses
{
    public const OPERATION_ID    = 'code-scanning/list-recent-analyses';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/code-scanning/analyses';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Repos\Owner\Repo\CodeScanning\Analyses $hydrator)
    {
    }

    /** @return iterable<int,Schema\CodeScanningAnalysis> */
    public function call(string $owner, string $repo, string $toolName, string|null $toolGuid, int $pr, string $ref, string $sarifId, int $page = 1, int $perPage = 30, string $direction = 'desc', string $sort = 'created'): iterable
    {
        $operation = new \ApiClients\Client\GitHub\Internal\Operation\CodeScanning\ListRecentAnalyses($this->responseSchemaValidator, $this->hydrator, $owner, $repo, $toolName, $toolGuid, $pr, $ref, $sarifId, $page, $perPage, $direction, $sort);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Observable {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
