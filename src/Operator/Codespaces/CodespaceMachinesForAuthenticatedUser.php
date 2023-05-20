<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Codespaces;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema\Operations\Codespaces\RepoMachinesForAuthenticatedUser\Response\ApplicationJson\Ok;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class CodespaceMachinesForAuthenticatedUser
{
    public const OPERATION_ID    = 'codespaces/codespace-machines-for-authenticated-user';
    public const OPERATION_MATCH = 'GET /user/codespaces/{codespace_name}/machines';
    private const METHOD         = 'GET';
    private const PATH           = '/user/codespaces/{codespace_name}/machines';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\User\Codespaces\CodespaceName\Machines $hydrator)
    {
    }

    /**
     * @return PromiseInterface<(Ok|array)>
     **/
    public function call(string $codespaceName): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Codespaces\CodespaceMachinesForAuthenticatedUser($this->responseSchemaValidator, $this->hydrator, $codespaceName);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Ok|array {
            return $operation->createResponse($response);
        });
    }
}
