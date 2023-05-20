<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Repos;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema\Repository;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class CreateUsingTemplate
{
    public const OPERATION_ID    = 'repos/create-using-template';
    public const OPERATION_MATCH = 'POST /repos/{template_owner}/{template_repo}/generate';
    private const METHOD         = 'POST';
    private const PATH           = '/repos/{template_owner}/{template_repo}/generate';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Repos\TemplateOwner\TemplateRepo\Generate $hydrator)
    {
    }

    /**
     * @return PromiseInterface<Repository>
     **/
    public function call(string $templateOwner, string $templateRepo, array $params): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Repos\CreateUsingTemplate($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $templateOwner, $templateRepo);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Repository {
            return $operation->createResponse($response);
        });
    }
}
