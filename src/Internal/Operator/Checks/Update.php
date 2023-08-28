<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operator\Checks;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\Schema\CheckRun;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class Update
{
    public const OPERATION_ID    = 'checks/update';
    public const OPERATION_MATCH = 'PATCH /repos/{owner}/{repo}/check-runs/{check_run_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Repos\Owner\Repo\CheckRuns\CheckRunId $hydrator)
    {
    }

    /** @return Schema\CheckRun */
    public function call(string $owner, string $repo, int $checkRunId, array $params): CheckRun|array
    {
        $operation = new \ApiClients\Client\GitHub\Internal\Operation\Checks\Update($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $owner, $repo, $checkRunId);
        $request   = $operation->createRequest($params);
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): CheckRun|array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
