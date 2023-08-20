<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Copilot;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema\Operations\Copilot\ListCopilotSeats\Response\ApplicationJson\Ok;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class ListCopilotSeats
{
    public const OPERATION_ID    = 'copilot/list-copilot-seats';
    public const OPERATION_MATCH = 'GET /orgs/{org}/copilot/billing/seats';
    private const METHOD         = 'GET';
    private const PATH           = '/orgs/{org}/copilot/billing/seats';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Orgs\Org\Copilot\Billing\Seats $hydrator)
    {
    }

    /** @return */
    public function call(string $org, int $page = 1, int $perPage = 50): Ok|array
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Copilot\ListCopilotSeats($this->responseSchemaValidator, $this->hydrator, $org, $page, $perPage);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Ok|array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
