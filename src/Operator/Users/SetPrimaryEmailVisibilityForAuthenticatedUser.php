<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Users;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class SetPrimaryEmailVisibilityForAuthenticatedUser
{
    public const OPERATION_ID    = 'users/set-primary-email-visibility-for-authenticated-user';
    public const OPERATION_MATCH = 'PATCH /user/email/visibility';
    private const METHOD         = 'PATCH';
    private const PATH           = '/user/email/visibility';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\User\Email\Visibility $hydrator)
    {
    }

    /**
     * @return PromiseInterface<array>
     **/
    public function call(array $params): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Users\SetPrimaryEmailVisibilityForAuthenticatedUser($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): array {
            return $operation->createResponse($response);
        });
    }
}
