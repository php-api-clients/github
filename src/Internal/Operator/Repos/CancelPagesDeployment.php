<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operator\Repos;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class CancelPagesDeployment
{
    public const OPERATION_ID    = 'repos/cancel-pages-deployment';
    public const OPERATION_MATCH = 'POST /repos/{owner}/{repo}/pages/deployments/{pages_deployment_id}/cancel';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Repos\Owner\Repo\Pages\Deployments\PagesDeploymentId\Cancel $hydrator)
    {
    }

    public function call(string $owner, string $repo, $pagesDeploymentId): WithoutBody
    {
        $operation = new \ApiClients\Client\GitHub\Internal\Operation\Repos\CancelPagesDeployment($this->responseSchemaValidator, $this->hydrator, $owner, $repo, $pagesDeploymentId);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): WithoutBody {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
