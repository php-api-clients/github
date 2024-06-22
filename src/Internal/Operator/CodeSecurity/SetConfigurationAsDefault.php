<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operator\CodeSecurity;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema\Operations\CodeSecurity\SetConfigurationAsDefault\Response\ApplicationJson\Ok;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class SetConfigurationAsDefault
{
    public const OPERATION_ID    = 'code-security/set-configuration-as-default';
    public const OPERATION_MATCH = 'PUT /orgs/{org}/code-security/configurations/{configuration_id}/defaults';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Orgs\Org\CodeSecurity\Configurations\ConfigurationId\Defaults $hydrator)
    {
    }

    /** @return */
    public function call(string $org, int $configurationId, array $params): Ok
    {
        $operation = new \ApiClients\Client\GitHub\Internal\Operation\CodeSecurity\SetConfigurationAsDefault($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $org, $configurationId);
        $request   = $operation->createRequest($params);
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Ok {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
