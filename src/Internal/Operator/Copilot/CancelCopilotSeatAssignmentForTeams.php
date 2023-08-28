<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operator\Copilot;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\Schema\Operations\Copilot\CancelCopilotSeatAssignmentForTeams\Response\ApplicationJson\Ok;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class CancelCopilotSeatAssignmentForTeams
{
    public const OPERATION_ID    = 'copilot/cancel-copilot-seat-assignment-for-teams';
    public const OPERATION_MATCH = 'DELETE /orgs/{org}/copilot/billing/selected_teams';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Orgs\Org\Copilot\Billing\SelectedTeams $hydrator)
    {
    }

    /** @return Schema\Operations\Copilot\CancelCopilotSeatAssignmentForTeams\Response\ApplicationJson\Ok|array{code:int} */
    public function call(string $org, array $params): Ok|array
    {
        $operation = new \ApiClients\Client\GitHub\Internal\Operation\Copilot\CancelCopilotSeatAssignmentForTeams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $org);
        $request   = $operation->createRequest($params);
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Ok|array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
