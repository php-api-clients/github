<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Actions;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema\Runner;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class GetSelfHostedRunnerForOrg
{
    public const OPERATION_ID    = 'actions/get-self-hosted-runner-for-org';
    public const OPERATION_MATCH = 'GET /orgs/{org}/actions/runners/{runner_id}';
    private const METHOD         = 'GET';
    private const PATH           = '/orgs/{org}/actions/runners/{runner_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Orgs\Org\Actions\Runners\RunnerId $hydrator)
    {
    }

    /**
     * @return PromiseInterface<Runner>
     **/
    public function call(string $org, int $runnerId): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Actions\GetSelfHostedRunnerForOrg($this->responseSchemaValidator, $this->hydrator, $org, $runnerId);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Runner {
            return $operation->createResponse($response);
        });
    }
}
