<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operator\CodeSecurity;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema\CodeSecurityConfiguration;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class UpdateConfiguration
{
    public const OPERATION_ID    = 'code-security/update-configuration';
    public const OPERATION_MATCH = 'PATCH /orgs/{org}/code-security/configurations/{configuration_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Orgs\Org\CodeSecurity\Configurations\ConfigurationId $hydrator)
    {
    }

    /** @return */
    public function call(string $org, int $configurationId, array $params): CodeSecurityConfiguration|WithoutBody
    {
        $operation = new \ApiClients\Client\GitHub\Internal\Operation\CodeSecurity\UpdateConfiguration($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $org, $configurationId);
        $request   = $operation->createRequest($params);
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): CodeSecurityConfiguration|WithoutBody {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
