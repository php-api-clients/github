<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Teams;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema\TeamFull;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class UpdateInOrg
{
    public const OPERATION_ID    = 'teams/update-in-org';
    public const OPERATION_MATCH = 'PATCH /orgs/{org}/teams/{team_slug}';
    private const METHOD         = 'PATCH';
    private const PATH           = '/orgs/{org}/teams/{team_slug}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Orgs\Org\Teams\TeamSlug $hydrator)
    {
    }

    /** @return */
    public function call(string $org, string $teamSlug, array $params): TeamFull|array
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Teams\UpdateInOrg($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $org, $teamSlug);
        $request   = $operation->createRequest($params);
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): TeamFull|array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
