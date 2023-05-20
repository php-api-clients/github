<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Actions;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema\OrganizationActionsVariable;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class GetOrgVariable
{
    public const OPERATION_ID    = 'actions/get-org-variable';
    public const OPERATION_MATCH = 'GET /orgs/{org}/actions/variables/{name}';
    private const METHOD         = 'GET';
    private const PATH           = '/orgs/{org}/actions/variables/{name}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Orgs\Org\Actions\Variables\Name $hydrator)
    {
    }

    /**
     * @return PromiseInterface<OrganizationActionsVariable>
     **/
    public function call(string $org, string $name): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Actions\GetOrgVariable($this->responseSchemaValidator, $this->hydrator, $org, $name);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): OrganizationActionsVariable {
            return $operation->createResponse($response);
        });
    }
}
