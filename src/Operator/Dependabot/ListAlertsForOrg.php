<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Dependabot;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class ListAlertsForOrg
{
    public const OPERATION_ID    = 'dependabot/list-alerts-for-org';
    public const OPERATION_MATCH = 'GET /orgs/{org}/dependabot/alerts';
    private const METHOD         = 'GET';
    private const PATH           = '/orgs/{org}/dependabot/alerts';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Orgs\Org\Dependabot\Alerts $hydrator)
    {
    }

    /**
     * @return PromiseInterface<array>
     **/
    public function call(string $org, string $state, string $severity, string $ecosystem, string $package, string $scope, string $before, string $after, int $last, string $sort = 'created', string $direction = 'desc', int $first = 30, int $perPage = 30): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Dependabot\ListAlertsForOrg($this->responseSchemaValidator, $this->hydrator, $org, $state, $severity, $ecosystem, $package, $scope, $before, $after, $last, $sort, $direction, $first, $perPage);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): array {
            return $operation->createResponse($response);
        });
    }
}
