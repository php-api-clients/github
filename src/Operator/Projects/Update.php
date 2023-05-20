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

final readonly class Update
{
    public const OPERATION_ID    = 'projects/update';
    public const OPERATION_MATCH = 'PATCH /projects/{project_id}';
    private const METHOD         = 'PATCH';
    private const PATH           = '/projects/{project_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Projects\ProjectId $hydrator)
    {
    }

    /**
     * @return PromiseInterface<(Project|array)>
     **/
    public function call(int $projectId, array $params): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Projects\Update($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $projectId);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Project|array {
            return $operation->createResponse($response);
        });
    }
}
