<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Actions;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema\Runner;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class GetSelfHostedRunnerForOrg
{
    public const OPERATION_ID    = 'actions/get-self-hosted-runner-for-org';
    public const OPERATION_MATCH = 'GET /orgs/{org}/actions/runners/{runner_id}';
    private const METHOD         = 'GET';
    private const PATH           = '/orgs/{org}/actions/runners/{runner_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Orgs\Org\Actions\Runners\RunnerId $hydrator)
    {
    }

    /** @return */
    public function call(string $org, int $runnerId): Runner|array
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Actions\GetSelfHostedRunnerForOrg($this->responseSchemaValidator, $this->hydrator, $org, $runnerId);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Runner|array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
