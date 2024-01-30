<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operator\Checks;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class ListAnnotations
{
    public const OPERATION_ID    = 'checks/list-annotations';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/check-runs/{check_run_id}/annotations';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Repos\Owner\Repo\CheckRuns\CheckRunId\Annotations $hydrator)
    {
    }

    /** @return Observable<Schema\CheckAnnotation> */
    public function call(string $owner, string $repo, int $checkRunId, int $perPage = 30, int $page = 1): iterable
    {
        $operation = new \ApiClients\Client\GitHub\Internal\Operation\Checks\ListAnnotations($this->responseSchemaValidator, $this->hydrator, $owner, $repo, $checkRunId, $perPage, $page);
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