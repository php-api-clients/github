<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operator\Actions;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema\Operations\Actions\GetActionsCacheUsageByRepoForOrg\Response\ApplicationJson\Ok;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class GetActionsCacheUsageByRepoForOrg
{
    public const OPERATION_ID    = 'actions/get-actions-cache-usage-by-repo-for-org';
    public const OPERATION_MATCH = 'GET /orgs/{org}/actions/cache/usage-by-repository';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Orgs\Org\Actions\Cache\UsageByRepository $hydrator)
    {
    }

    /** @return */
    public function call(string $org, int $perPage = 30, int $page = 1): Ok
    {
        $operation = new \ApiClients\Client\GitHub\Internal\Operation\Actions\GetActionsCacheUsageByRepoForOrg($this->responseSchemaValidator, $this->hydrator, $org, $perPage, $page);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Ok {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
