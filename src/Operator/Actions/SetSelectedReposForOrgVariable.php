<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Actions;

use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class SetSelectedReposForOrgVariable
{
    public const OPERATION_ID    = 'actions/set-selected-repos-for-org-variable';
    public const OPERATION_MATCH = 'PUT /orgs/{org}/actions/variables/{name}/repositories';
    private const METHOD         = 'PUT';
    private const PATH           = '/orgs/{org}/actions/variables/{name}/repositories';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator)
    {
    }

    /** @return array{code: int} */
    public function call(string $org, string $name, array $params): array
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Actions\SetSelectedReposForOrgVariable($this->requestSchemaValidator, $org, $name);
        $request   = $operation->createRequest($params);
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
