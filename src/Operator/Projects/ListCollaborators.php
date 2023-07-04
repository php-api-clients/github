<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Projects;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class ListCollaborators
{
    public const OPERATION_ID    = 'projects/list-collaborators';
    public const OPERATION_MATCH = 'GET /projects/{project_id}/collaborators';
    private const METHOD         = 'GET';
    private const PATH           = '/projects/{project_id}/collaborators';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Projects\ProjectId\Collaborators $hydrator)
    {
    }

    /** @return PromiseInterface<array> **/
    public function call(int $projectId, string $affiliation = 'all', int $perPage = 30, int $page = 1): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Projects\ListCollaborators($this->responseSchemaValidator, $this->hydrator, $projectId, $affiliation, $perPage, $page);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): array {
            return $operation->createResponse($response);
        });
    }
}
