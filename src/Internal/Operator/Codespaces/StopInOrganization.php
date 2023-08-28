<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operator\Codespaces;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\Schema\Codespace;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class StopInOrganization
{
    public const OPERATION_ID    = 'codespaces/stop-in-organization';
    public const OPERATION_MATCH = 'POST /orgs/{org}/members/{username}/codespaces/{codespace_name}/stop';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Orgs\Org\Members\Username\Codespaces\CodespaceName\Stop $hydrator)
    {
    }

    /** @return Schema\Codespace|array{code:int} */
    public function call(string $org, string $username, string $codespaceName): Codespace|array
    {
        $operation = new \ApiClients\Client\GitHub\Internal\Operation\Codespaces\StopInOrganization($this->responseSchemaValidator, $this->hydrator, $org, $username, $codespaceName);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Codespace|array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
