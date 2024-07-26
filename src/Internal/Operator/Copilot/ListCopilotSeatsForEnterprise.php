<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operator\Copilot;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema\Operations\Copilot\ListCopilotSeatsForEnterprise\Response\ApplicationJson\Ok;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class ListCopilotSeatsForEnterprise
{
    public const OPERATION_ID    = 'copilot/list-copilot-seats-for-enterprise';
    public const OPERATION_MATCH = 'GET /enterprises/{enterprise}/copilot/billing/seats';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Enterprises\Enterprise\Copilot\Billing\Seats $hydrator)
    {
    }

    /** @return */
    public function call(string $enterprise, int $page = 1, int $perPage = 50): Ok
    {
        $operation = new \ApiClients\Client\GitHub\Internal\Operation\Copilot\ListCopilotSeatsForEnterprise($this->responseSchemaValidator, $this->hydrator, $enterprise, $page, $perPage);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Ok {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}