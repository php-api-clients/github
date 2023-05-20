<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Actions;

use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class SetWorkflowAccessToRepository
{
    public const OPERATION_ID    = 'actions/set-workflow-access-to-repository';
    public const OPERATION_MATCH = 'PUT /repos/{owner}/{repo}/actions/permissions/access';
    private const METHOD         = 'PUT';
    private const PATH           = '/repos/{owner}/{repo}/actions/permissions/access';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator)
    {
    }

    /**
     * @return PromiseInterface<array>
     **/
    public function call(string $owner, string $repo, array $params): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Actions\SetWorkflowAccessToRepository($this->requestSchemaValidator, $owner, $repo);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): array {
            return $operation->createResponse($response);
        });
    }
}
