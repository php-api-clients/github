<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Actions;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\Schema\Operations\Actions\ListSelectedReposForOrgVariable\Response\ApplicationJson\Ok\Application\Json;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class ListSelectedReposForOrgVariable
{
    public const OPERATION_ID    = 'actions/list-selected-repos-for-org-variable';
    public const OPERATION_MATCH = 'GET /orgs/{org}/actions/variables/{name}/repositories';
    private const METHOD         = 'GET';
    private const PATH           = '/orgs/{org}/actions/variables/{name}/repositories';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Orgs\Org\Actions\Variables\Name\Repositories $hydrator)
    {
    }

    /** @return (Schema\Operations\Actions\ListSelectedReposForOrgVariable\Response\ApplicationJson\Ok\Application\Json | array{code: int}) */
    public function call(string $org, string $name, int $page = 1, int $perPage = 30): Json|array
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Actions\ListSelectedReposForOrgVariable($this->responseSchemaValidator, $this->hydrator, $org, $name, $page, $perPage);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Json|array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
