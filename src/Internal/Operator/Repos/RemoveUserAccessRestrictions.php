<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operator\Repos;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class RemoveUserAccessRestrictions
{
    public const OPERATION_ID    = 'repos/remove-user-access-restrictions';
    public const OPERATION_MATCH = 'DELETE /repos/{owner}/{repo}/branches/{branch}/protection/restrictions/users';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\Restrictions\Users $hydrator)
    {
    }

    /** @return Observable<Schema\SimpleUser> */
    public function call(string $owner, string $repo, string $branch, array $params): iterable
    {
        $operation = new \ApiClients\Client\GitHub\Internal\Operation\Repos\RemoveUserAccessRestrictions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $owner, $repo, $branch);
        $request   = $operation->createRequest($params);
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Observable|array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
