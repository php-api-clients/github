<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Gitignore;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema\GitignoreTemplate;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class GetTemplate
{
    public const OPERATION_ID    = 'gitignore/get-template';
    public const OPERATION_MATCH = 'GET /gitignore/templates/{name}';
    private const METHOD         = 'GET';
    private const PATH           = '/gitignore/templates/{name}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Gitignore\Templates\Name $hydrator)
    {
    }

    /**
     * @return PromiseInterface<(GitignoreTemplate|array)>
     **/
    public function call(string $name): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Gitignore\GetTemplate($this->responseSchemaValidator, $this->hydrator, $name);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): GitignoreTemplate|array {
            return $operation->createResponse($response);
        });
    }
}
