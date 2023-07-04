<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Users;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema\Hovercard;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class GetContextForUser
{
    public const OPERATION_ID    = 'users/get-context-for-user';
    public const OPERATION_MATCH = 'GET /users/{username}/hovercard';
    private const METHOD         = 'GET';
    private const PATH           = '/users/{username}/hovercard';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Users\Username\Hovercard $hydrator)
    {
    }

    /** @return PromiseInterface<Hovercard> **/
    public function call(string $username, string $subjectType, string $subjectId): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Users\GetContextForUser($this->responseSchemaValidator, $this->hydrator, $username, $subjectType, $subjectId);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Hovercard {
            return $operation->createResponse($response);
        });
    }
}
