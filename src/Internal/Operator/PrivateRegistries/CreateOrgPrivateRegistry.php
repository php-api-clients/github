<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operator\PrivateRegistries;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema\OrgPrivateRegistryConfigurationWithSelectedRepositories;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class CreateOrgPrivateRegistry
{
    public const OPERATION_ID    = 'private-registries/create-org-private-registry';
    public const OPERATION_MATCH = 'POST /orgs/{org}/private-registries';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Orgs\Org\PrivateRegistries $hydrator)
    {
    }

    public function call(string $org, array $params): OrgPrivateRegistryConfigurationWithSelectedRepositories
    {
        $operation = new \ApiClients\Client\GitHub\Internal\Operation\PrivateRegistries\CreateOrgPrivateRegistry($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $org);
        $request   = $operation->createRequest($params);
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): OrgPrivateRegistryConfigurationWithSelectedRepositories {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
