<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Apps;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema\InstallationToken;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class CreateInstallationAccessToken
{
    public const OPERATION_ID    = 'apps/create-installation-access-token';
    public const OPERATION_MATCH = 'POST /app/installations/{installation_id}/access_tokens';
    private const METHOD         = 'POST';
    private const PATH           = '/app/installations/{installation_id}/access_tokens';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\App\Installations\InstallationId\AccessTokens $hydrator)
    {
    }

    /**
     * @return PromiseInterface<InstallationToken>
     **/
    public function call(int $installationId, array $params): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Apps\CreateInstallationAccessToken($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $installationId);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): InstallationToken {
            return $operation->createResponse($response);
        });
    }
}
