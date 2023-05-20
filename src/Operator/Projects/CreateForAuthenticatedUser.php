<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Projects;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema\Project;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class CreateForAuthenticatedUser
{
    public const OPERATION_ID    = 'projects/create-for-authenticated-user';
    public const OPERATION_MATCH = 'POST /user/projects';
    private const METHOD         = 'POST';
    private const PATH           = '/user/projects';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\User\Projects $hydrator)
    {
    }

    /**
     * @return PromiseInterface<(Project|array)>
     **/
    public function call(array $params): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Projects\CreateForAuthenticatedUser($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Project|array {
            return $operation->createResponse($response);
        });
    }
}
