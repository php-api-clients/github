<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Copilot;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema\Operations\Copilot\AddCopilotForBusinessSeatsForTeams\Response\ApplicationJson\Created;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class AddCopilotForBusinessSeatsForTeams
{
    public const OPERATION_ID    = 'copilot/add-copilot-for-business-seats-for-teams';
    public const OPERATION_MATCH = 'POST /orgs/{org}/copilot/billing/selected_teams';
    private const METHOD         = 'POST';
    private const PATH           = '/orgs/{org}/copilot/billing/selected_teams';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Orgs\Org\Copilot\Billing\SelectedTeams $hydrator)
    {
    }

    /** @return PromiseInterface<(Created|array)> **/
    public function call(string $org, array $params): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Copilot\AddCopilotForBusinessSeatsForTeams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $org);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Created|array {
            return $operation->createResponse($response);
        });
    }
}