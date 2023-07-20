<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Copilot;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema\Operations\Copilot\ListCopilotSeats\Response\ApplicationJson\Ok;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class ListCopilotSeats
{
    public const OPERATION_ID    = 'copilot/list-copilot-seats';
    public const OPERATION_MATCH = 'GET /orgs/{org}/copilot/billing/seats';
    private const METHOD         = 'GET';
    private const PATH           = '/orgs/{org}/copilot/billing/seats';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Orgs\Org\Copilot\Billing\Seats $hydrator)
    {
    }

    /** @return PromiseInterface<Ok> **/
    public function call(string $org, int $page = 1, int $perPage = 50): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Copilot\ListCopilotSeats($this->responseSchemaValidator, $this->hydrator, $org, $page, $perPage);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Ok {
            return $operation->createResponse($response);
        });
    }
}
