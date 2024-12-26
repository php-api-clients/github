<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operator\PrivateRegistries;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class UpdateOrgPrivateRegistry
{
    public const OPERATION_ID    = 'private-registries/update-org-private-registry';
    public const OPERATION_MATCH = 'PATCH /orgs/{org}/private-registries/{secret_name}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Orgs\Org\PrivateRegistries\SecretName $hydrator)
    {
    }

    /** @return */
    public function call(string $org, string $secretName, array $params): WithoutBody
    {
        $operation = new \ApiClients\Client\GitHub\Internal\Operation\PrivateRegistries\UpdateOrgPrivateRegistry($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $org, $secretName);
        $request   = $operation->createRequest($params);
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): WithoutBody {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
