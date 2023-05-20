<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Actions;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema\SelectedActions;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class GetAllowedActionsOrganization
{
    public const OPERATION_ID    = 'actions/get-allowed-actions-organization';
    public const OPERATION_MATCH = 'GET /orgs/{org}/actions/permissions/selected-actions';
    private const METHOD         = 'GET';
    private const PATH           = '/orgs/{org}/actions/permissions/selected-actions';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Orgs\Org\Actions\Permissions\SelectedActions $hydrator)
    {
    }

    /**
     * @return PromiseInterface<SelectedActions>
     **/
    public function call(string $org): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Actions\GetAllowedActionsOrganization($this->responseSchemaValidator, $this->hydrator, $org);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): SelectedActions {
            return $operation->createResponse($response);
        });
    }
}
