<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operator\Apps;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema\Operations\Apps\ListInstallationReposForAuthenticatedUser\Response\ApplicationJson\Ok;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class ListInstallationReposForAuthenticatedUser
{
    public const OPERATION_ID    = 'apps/list-installation-repos-for-authenticated-user';
    public const OPERATION_MATCH = 'GET /user/installations/{installation_id}/repositories';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\User\Installations\InstallationId\Repositories $hydrator)
    {
    }

    public function call(int $installationId, int $perPage = 30, int $page = 1): Ok|WithoutBody
    {
        $operation = new \ApiClients\Client\GitHub\Internal\Operation\Apps\ListInstallationReposForAuthenticatedUser($this->responseSchemaValidator, $this->hydrator, $installationId, $perPage, $page);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Ok|WithoutBody {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
