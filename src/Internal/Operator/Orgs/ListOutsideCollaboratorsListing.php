<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operator\Orgs;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class ListOutsideCollaboratorsListing
{
    public const OPERATION_ID    = 'orgs/list-outside-collaborators';
    public const OPERATION_MATCH = 'LIST /orgs/{org}/outside_collaborators';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Orgs\Org\OutsideCollaborators $hydrator)
    {
    }

    /** @return Observable<Schema\SimpleUser> */
    public function call(string $org, string $filter = 'all', int $perPage = 30, int $page = 1): iterable
    {
        $operation = new \ApiClients\Client\GitHub\Internal\Operation\Orgs\ListOutsideCollaboratorsListing($this->responseSchemaValidator, $this->hydrator, $org, $filter, $perPage, $page);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Observable {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
