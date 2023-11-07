<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operator\Codespaces;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema\CodespacesPermissionsCheckForDevcontainer;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class CheckPermissionsForDevcontainer
{
    public const OPERATION_ID    = 'codespaces/check-permissions-for-devcontainer';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/codespaces/permissions_check';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Repos\Owner\Repo\Codespaces\PermissionsCheck $hydrator)
    {
    }

    public function call(string $owner, string $repo, string $ref, string $devcontainerPath): CodespacesPermissionsCheckForDevcontainer
    {
        $operation = new \ApiClients\Client\GitHub\Internal\Operation\Codespaces\CheckPermissionsForDevcontainer($this->responseSchemaValidator, $this->hydrator, $owner, $repo, $ref, $devcontainerPath);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): CodespacesPermissionsCheckForDevcontainer {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
