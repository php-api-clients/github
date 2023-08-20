<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Codespaces;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\Schema\Operations\Codespaces\ListInOrganization\Response\ApplicationJson\Ok;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class ListInOrganization
{
    public const OPERATION_ID    = 'codespaces/list-in-organization';
    public const OPERATION_MATCH = 'GET /orgs/{org}/codespaces';
    private const METHOD         = 'GET';
    private const PATH           = '/orgs/{org}/codespaces';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Orgs\Org\Codespaces $hydrator)
    {
    }

    /** @return (Schema\Operations\Codespaces\ListInOrganization\Response\ApplicationJson\Ok | array{code: int}) */
    public function call(string $org, int $perPage = 30, int $page = 1): Ok|array
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Codespaces\ListInOrganization($this->responseSchemaValidator, $this->hydrator, $org, $perPage, $page);
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
