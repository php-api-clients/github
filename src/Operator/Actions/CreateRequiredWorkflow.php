<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Actions;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema\RequiredWorkflow;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class CreateRequiredWorkflow
{
    public const OPERATION_ID    = 'actions/create-required-workflow';
    public const OPERATION_MATCH = 'POST /orgs/{org}/actions/required_workflows';
    private const METHOD         = 'POST';
    private const PATH           = '/orgs/{org}/actions/required_workflows';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Orgs\Org\Actions\RequiredWorkflows $hydrator)
    {
    }

    /**
     * @return PromiseInterface<RequiredWorkflow>
     **/
    public function call(string $org, array $params): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Actions\CreateRequiredWorkflow($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $org);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): RequiredWorkflow {
            return $operation->createResponse($response);
        });
    }
}
