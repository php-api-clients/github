<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Codespaces;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema\CodespaceWithFullRepository;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class PublishForAuthenticatedUser
{
    public const OPERATION_ID    = 'codespaces/publish-for-authenticated-user';
    public const OPERATION_MATCH = 'POST /user/codespaces/{codespace_name}/publish';
    private const METHOD         = 'POST';
    private const PATH           = '/user/codespaces/{codespace_name}/publish';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\User\Codespaces\CodespaceName\Publish $hydrator)
    {
    }

    /**
     * @return PromiseInterface<CodespaceWithFullRepository>
     **/
    public function call(string $codespaceName, array $params): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Codespaces\PublishForAuthenticatedUser($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $codespaceName);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): CodespaceWithFullRepository {
            return $operation->createResponse($response);
        });
    }
}
