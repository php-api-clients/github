<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Projects;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class ListCards
{
    public const OPERATION_ID    = 'projects/list-cards';
    public const OPERATION_MATCH = 'GET /projects/columns/{column_id}/cards';
    private const METHOD         = 'GET';
    private const PATH           = '/projects/columns/{column_id}/cards';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Projects\Columns\ColumnId\Cards $hydrator)
    {
    }

    /**
     * @return PromiseInterface<array>
     **/
    public function call(int $columnId, string $archivedState = 'not_archived', int $perPage = 30, int $page = 1): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Projects\ListCards($this->responseSchemaValidator, $this->hydrator, $columnId, $archivedState, $perPage, $page);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): array {
            return $operation->createResponse($response);
        });
    }
}
