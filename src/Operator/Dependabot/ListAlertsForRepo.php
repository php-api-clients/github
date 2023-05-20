<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Dependabot;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class ListAlertsForRepo
{
    public const OPERATION_ID    = 'dependabot/list-alerts-for-repo';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/dependabot/alerts';
    private const METHOD         = 'GET';
    private const PATH           = '/repos/{owner}/{repo}/dependabot/alerts';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Repos\Owner\Repo\Dependabot\Alerts $hydrator)
    {
    }

    /**
     * @return PromiseInterface<array>
     **/
    public function call(string $owner, string $repo, string $state, string $severity, string $ecosystem, string $package, string $manifest, string $scope, string $before, string $after, int $last, string $sort = 'created', string $direction = 'desc', int $page = 1, int $perPage = 30, int $first = 30): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Dependabot\ListAlertsForRepo($this->responseSchemaValidator, $this->hydrator, $owner, $repo, $state, $severity, $ecosystem, $package, $manifest, $scope, $before, $after, $last, $sort, $direction, $page, $perPage, $first);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): array {
            return $operation->createResponse($response);
        });
    }
}
