<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Codespaces;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class DeleteCodespacesAccessUsers
{
    public const OPERATION_ID    = 'codespaces/delete-codespaces-access-users';
    public const OPERATION_MATCH = 'DELETE /orgs/{org}/codespaces/access/selected_users';
    private const METHOD         = 'DELETE';
    private const PATH           = '/orgs/{org}/codespaces/access/selected_users';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Orgs\Org\Codespaces\Access\SelectedUsers $hydrator)
    {
    }

    /** @return array{code: int} */
    public function call(string $org, array $params): array
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Codespaces\DeleteCodespacesAccessUsers($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $org);
        $request   = $operation->createRequest($params);
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
