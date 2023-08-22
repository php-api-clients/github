<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Actions;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class ListRunnerApplicationsForOrg
{
    public const OPERATION_ID    = 'actions/list-runner-applications-for-org';
    public const OPERATION_MATCH = 'GET /orgs/{org}/actions/runners/downloads';
    private const METHOD         = 'GET';
    private const PATH           = '/orgs/{org}/actions/runners/downloads';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Orgs\Org\Actions\Runners\Downloads $hydrator)
    {
    }

    /** @return Observable<Schema\RunnerApplication> */
    public function call(string $org): iterable
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Actions\ListRunnerApplicationsForOrg($this->responseSchemaValidator, $this->hydrator, $org);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Observable|array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
