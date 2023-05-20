<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Actions;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema\AuthenticationToken;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class CreateRegistrationTokenForOrg
{
    public const OPERATION_ID    = 'actions/create-registration-token-for-org';
    public const OPERATION_MATCH = 'POST /orgs/{org}/actions/runners/registration-token';
    private const METHOD         = 'POST';
    private const PATH           = '/orgs/{org}/actions/runners/registration-token';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Orgs\Org\Actions\Runners\RegistrationToken $hydrator)
    {
    }

    /**
     * @return PromiseInterface<AuthenticationToken>
     **/
    public function call(string $org): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Actions\CreateRegistrationTokenForOrg($this->responseSchemaValidator, $this->hydrator, $org);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): AuthenticationToken {
            return $operation->createResponse($response);
        });
    }
}
