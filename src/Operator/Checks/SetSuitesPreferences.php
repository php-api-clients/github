<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Checks;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema\CheckSuitePreference;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class SetSuitesPreferences
{
    public const OPERATION_ID    = 'checks/set-suites-preferences';
    public const OPERATION_MATCH = 'PATCH /repos/{owner}/{repo}/check-suites/preferences';
    private const METHOD         = 'PATCH';
    private const PATH           = '/repos/{owner}/{repo}/check-suites/preferences';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Repos\Owner\Repo\CheckSuites\Preferences $hydrator)
    {
    }

    /** @return PromiseInterface<CheckSuitePreference> **/
    public function call(string $owner, string $repo, array $params): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Checks\SetSuitesPreferences($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $owner, $repo);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): CheckSuitePreference {
            return $operation->createResponse($response);
        });
    }
}
