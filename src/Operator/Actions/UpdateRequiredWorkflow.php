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

final readonly class UpdateRequiredWorkflow
{
    public const OPERATION_ID    = 'actions/update-required-workflow';
    public const OPERATION_MATCH = 'PATCH /orgs/{org}/actions/required_workflows/{required_workflow_id}';
    private const METHOD         = 'PATCH';
    private const PATH           = '/orgs/{org}/actions/required_workflows/{required_workflow_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Orgs\Org\Actions\RequiredWorkflows\RequiredWorkflowId $hydrator)
    {
    }

    /**
     * @return PromiseInterface<RequiredWorkflow>
     **/
    public function call(string $org, int $requiredWorkflowId, array $params): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Actions\UpdateRequiredWorkflow($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $org, $requiredWorkflowId);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): RequiredWorkflow {
            return $operation->createResponse($response);
        });
    }
}
