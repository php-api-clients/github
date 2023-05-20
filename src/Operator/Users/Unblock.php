<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Users;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class Unblock
{
    public const OPERATION_ID    = 'users/unblock';
    public const OPERATION_MATCH = 'DELETE /user/blocks/{username}';
    private const METHOD         = 'DELETE';
    private const PATH           = '/user/blocks/{username}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\User\Blocks\Username $hydrator)
    {
    }

    /**
     * @return PromiseInterface<array>
     **/
    public function call(string $username): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Users\Unblock($this->responseSchemaValidator, $this->hydrator, $username);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): array {
            return $operation->createResponse($response);
        });
    }
}
