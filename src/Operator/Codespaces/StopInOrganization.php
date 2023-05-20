<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Codespaces;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema\Codespace;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class StopInOrganization
{
    public const OPERATION_ID    = 'codespaces/stop-in-organization';
    public const OPERATION_MATCH = 'POST /orgs/{org}/members/{username}/codespaces/{codespace_name}/stop';
    private const METHOD         = 'POST';
    private const PATH           = '/orgs/{org}/members/{username}/codespaces/{codespace_name}/stop';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Orgs\Org\Members\Username\Codespaces\CodespaceName\Stop $hydrator)
    {
    }

    /**
     * @return PromiseInterface<(Codespace|array)>
     **/
    public function call(string $org, string $username, string $codespaceName): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Codespaces\StopInOrganization($this->responseSchemaValidator, $this->hydrator, $org, $username, $codespaceName);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Codespace|array {
            return $operation->createResponse($response);
        });
    }
}
