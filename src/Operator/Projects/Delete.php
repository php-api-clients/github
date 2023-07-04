<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Projects;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class Delete
{
    public const OPERATION_ID    = 'projects/delete';
    public const OPERATION_MATCH = 'DELETE /projects/{project_id}';
    private const METHOD         = 'DELETE';
    private const PATH           = '/projects/{project_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Projects\ProjectId $hydrator)
    {
    }

    /** @return PromiseInterface<array> **/
    public function call(int $projectId): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Projects\Delete($this->responseSchemaValidator, $this->hydrator, $projectId);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): array {
            return $operation->createResponse($response);
        });
    }
}
