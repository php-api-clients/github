<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\CodeScanning;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class ListAlertsForOrg
{
    public const OPERATION_ID    = 'code-scanning/list-alerts-for-org';
    public const OPERATION_MATCH = 'GET /orgs/{org}/code-scanning/alerts';
    private const METHOD         = 'GET';
    private const PATH           = '/orgs/{org}/code-scanning/alerts';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Orgs\Org\CodeScanning\Alerts $hydrator)
    {
    }

    /**
     * @return PromiseInterface<mixed>
     **/
    public function call(string $org, string $toolName, string|null $toolGuid, string $before, string $after, string $state, string $severity, int $page = 1, int $perPage = 30, string $direction = 'desc', string $sort = 'created'): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\CodeScanning\ListAlertsForOrg($this->responseSchemaValidator, $this->hydrator, $org, $toolName, $toolGuid, $before, $after, $state, $severity, $page, $perPage, $direction, $sort);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): mixed {
            return $operation->createResponse($response);
        });
    }
}
