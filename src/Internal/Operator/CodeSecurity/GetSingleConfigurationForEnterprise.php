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

final readonly class GetSingleConfigurationForEnterprise
{
    public const OPERATION_ID    = 'code-security/get-single-configuration-for-enterprise';
    public const OPERATION_MATCH = 'GET /enterprises/{enterprise}/code-security/configurations/{configuration_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Enterprises\Enterprise\CodeSecurity\Configurations\ConfigurationId $hydrator)
    {
    }

    /** @return */
    public function call(string $enterprise, int $configurationId): CodeSecurityConfiguration|WithoutBody
    {
        $operation = new \ApiClients\Client\GitHub\Internal\Operation\CodeSecurity\GetSingleConfigurationForEnterprise($this->responseSchemaValidator, $this->hydrator, $enterprise, $configurationId);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): CodeSecurityConfiguration|WithoutBody {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
