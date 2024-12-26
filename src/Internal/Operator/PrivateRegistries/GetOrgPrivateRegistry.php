<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operator\PrivateRegistries;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema\OrgPrivateRegistryConfiguration;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class GetOrgPrivateRegistry
{
    public const OPERATION_ID    = 'private-registries/get-org-private-registry';
    public const OPERATION_MATCH = 'GET /orgs/{org}/private-registries/{secret_name}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Orgs\Org\PrivateRegistries\SecretName $hydrator)
    {
    }

    /** @return */
    public function call(string $org, string $secretName): OrgPrivateRegistryConfiguration
    {
        $operation = new \ApiClients\Client\GitHub\Internal\Operation\PrivateRegistries\GetOrgPrivateRegistry($this->responseSchemaValidator, $this->hydrator, $org, $secretName);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): OrgPrivateRegistryConfiguration {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
