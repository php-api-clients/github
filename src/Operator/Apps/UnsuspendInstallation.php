<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Apps;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class UnsuspendInstallation
{
    public const OPERATION_ID    = 'apps/unsuspend-installation';
    public const OPERATION_MATCH = 'DELETE /app/installations/{installation_id}/suspended';
    private const METHOD         = 'DELETE';
    private const PATH           = '/app/installations/{installation_id}/suspended';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\App\Installations\InstallationId\Suspended $hydrator)
    {
    }

    /** @return array{code: int} */
    public function call(int $installationId): array
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Apps\UnsuspendInstallation($this->responseSchemaValidator, $this->hydrator, $installationId);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
