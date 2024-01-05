<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operator\Projects;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class ListCards
{
    public const OPERATION_ID    = 'projects/list-cards';
    public const OPERATION_MATCH = 'GET /projects/columns/{column_id}/cards';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Projects\Columns\ColumnId\Cards $hydrator)
    {
    }

    /** @return iterable<int,Schema\ProjectCard>|WithoutBody */
    public function call(int $columnId, string $archivedState = 'not_archived', int $perPage = 30, int $page = 1): iterable|WithoutBody
    {
        $operation = new \ApiClients\Client\GitHub\Internal\Operation\Projects\ListCards($this->responseSchemaValidator, $this->hydrator, $columnId, $archivedState, $perPage, $page);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Observable|WithoutBody {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
