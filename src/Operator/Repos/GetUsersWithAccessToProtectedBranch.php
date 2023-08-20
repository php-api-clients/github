<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Repos;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class GetUsersWithAccessToProtectedBranch
{
    public const OPERATION_ID    = 'repos/get-users-with-access-to-protected-branch';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/branches/{branch}/protection/restrictions/users';
    private const METHOD         = 'GET';
    private const PATH           = '/repos/{owner}/{repo}/branches/{branch}/protection/restrictions/users';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\Restrictions\Users $hydrator)
    {
    }

    /** @return iterable<Schema\SimpleUser> */
    public function call(string $owner, string $repo, string $branch): iterable
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Repos\GetUsersWithAccessToProtectedBranch($this->responseSchemaValidator, $this->hydrator, $owner, $repo, $branch);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Observable|array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
