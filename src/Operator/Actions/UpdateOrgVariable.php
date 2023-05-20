<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Actions;

use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class UpdateOrgVariable
{
    public const OPERATION_ID    = 'actions/update-org-variable';
    public const OPERATION_MATCH = 'PATCH /orgs/{org}/actions/variables/{name}';
    private const METHOD         = 'PATCH';
    private const PATH           = '/orgs/{org}/actions/variables/{name}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator)
    {
    }

    /**
     * @return PromiseInterface<array>
     **/
    public function call(string $org, string $name, array $params): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Actions\UpdateOrgVariable($this->requestSchemaValidator, $org, $name);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): array {
            return $operation->createResponse($response);
        });
    }
}
