<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operator\Teams;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class AddOrUpdateRepoPermissionsLegacy
{
    public const OPERATION_ID    = 'teams/add-or-update-repo-permissions-legacy';
    public const OPERATION_MATCH = 'PUT /teams/{team_id}/repos/{owner}/{repo}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Teams\TeamId\Repos\Owner\Repo $hydrator)
    {
    }

    /** @return */
    public function call(int $teamId, string $owner, string $repo, array $params): WithoutBody
    {
        $operation = new \ApiClients\Client\GitHub\Internal\Operation\Teams\AddOrUpdateRepoPermissionsLegacy($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $teamId, $owner, $repo);
        $request   = $operation->createRequest($params);
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): WithoutBody {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
