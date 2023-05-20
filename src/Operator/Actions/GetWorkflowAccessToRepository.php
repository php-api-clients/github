<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Actions;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema\ActionsWorkflowAccessToRepository;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class GetWorkflowAccessToRepository
{
    public const OPERATION_ID    = 'actions/get-workflow-access-to-repository';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/actions/permissions/access';
    private const METHOD         = 'GET';
    private const PATH           = '/repos/{owner}/{repo}/actions/permissions/access';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Repos\Owner\Repo\Actions\Permissions\Access $hydrator)
    {
    }

    /**
     * @return PromiseInterface<ActionsWorkflowAccessToRepository>
     **/
    public function call(string $owner, string $repo): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Actions\GetWorkflowAccessToRepository($this->responseSchemaValidator, $this->hydrator, $owner, $repo);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): ActionsWorkflowAccessToRepository {
            return $operation->createResponse($response);
        });
    }
}
