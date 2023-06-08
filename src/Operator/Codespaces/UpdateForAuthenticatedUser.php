<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Codespaces;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema\Codespace;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class UpdateForAuthenticatedUser
{
    public const OPERATION_ID    = 'codespaces/update-for-authenticated-user';
    public const OPERATION_MATCH = 'PATCH /user/codespaces/{codespace_name}';
    private const METHOD         = 'PATCH';
    private const PATH           = '/user/codespaces/{codespace_name}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\User\Codespaces\CodespaceName $hydrator)
    {
    }

    /**
     * @return PromiseInterface<Codespace>
     **/
    public function call(string $codespaceName, array $params): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Codespaces\UpdateForAuthenticatedUser($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $codespaceName);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Codespace {
            return $operation->createResponse($response);
        });
    }
}