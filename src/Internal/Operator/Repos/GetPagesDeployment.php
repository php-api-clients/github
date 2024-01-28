<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operator\Repos;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema\PagesDeploymentStatus;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class GetPagesDeployment
{
    public const OPERATION_ID    = 'repos/get-pages-deployment';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/pages/deployments/{pages_deployment_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Repos\Owner\Repo\Pages\Deployments\PagesDeploymentId $hydrator)
    {
    }

    /** @return */
    public function call(string $owner, string $repo, $pagesDeploymentId): PagesDeploymentStatus
    {
        $operation = new \ApiClients\Client\GitHub\Internal\Operation\Repos\GetPagesDeployment($this->responseSchemaValidator, $this->hydrator, $owner, $repo, $pagesDeploymentId);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): PagesDeploymentStatus {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
