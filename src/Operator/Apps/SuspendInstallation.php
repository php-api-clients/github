<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Apps;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class SuspendInstallation
{
    public const OPERATION_ID    = 'apps/suspend-installation';
    public const OPERATION_MATCH = 'PUT /app/installations/{installation_id}/suspended';
    private const METHOD         = 'PUT';
    private const PATH           = '/app/installations/{installation_id}/suspended';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\App\Installations\InstallationId\Suspended $hydrator)
    {
    }

    /** @return PromiseInterface<array> **/
    public function call(int $installationId): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Apps\SuspendInstallation($this->responseSchemaValidator, $this->hydrator, $installationId);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): array {
            return $operation->createResponse($response);
        });
    }
}
