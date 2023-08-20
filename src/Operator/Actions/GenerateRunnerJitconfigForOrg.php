<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Actions;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema\Operations\Actions\GenerateRunnerJitconfigForOrg\Response\ApplicationJson\Created;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class GenerateRunnerJitconfigForOrg
{
    public const OPERATION_ID    = 'actions/generate-runner-jitconfig-for-org';
    public const OPERATION_MATCH = 'POST /orgs/{org}/actions/runners/generate-jitconfig';
    private const METHOD         = 'POST';
    private const PATH           = '/orgs/{org}/actions/runners/generate-jitconfig';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Orgs\Org\Actions\Runners\GenerateJitconfig $hydrator)
    {
    }

    /** @return */
    public function call(string $org, array $params): Created|array
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Actions\GenerateRunnerJitconfigForOrg($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $org);
        $request   = $operation->createRequest($params);
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Created|array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
