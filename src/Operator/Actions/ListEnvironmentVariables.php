<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Actions;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema\Operations\Actions\ListRepoOrganizationVariables\Response\ApplicationJson\Ok;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class ListEnvironmentVariables
{
    public const OPERATION_ID    = 'actions/list-environment-variables';
    public const OPERATION_MATCH = 'GET /repositories/{repository_id}/environments/{environment_name}/variables';
    private const METHOD         = 'GET';
    private const PATH           = '/repositories/{repository_id}/environments/{environment_name}/variables';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Repositories\RepositoryId\Environments\EnvironmentName\Variables $hydrator)
    {
    }

    /**
     * @return PromiseInterface<Ok>
     **/
    public function call(int $repositoryId, string $environmentName, int $perPage = 10, int $page = 1): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Actions\ListEnvironmentVariables($this->responseSchemaValidator, $this->hydrator, $repositoryId, $environmentName, $perPage, $page);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Ok {
            return $operation->createResponse($response);
        });
    }
}
