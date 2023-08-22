<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Router\List;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Hydrators;
use ApiClients\Client\GitHub\Operator;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use EventSauce\ObjectHydrator\ObjectMapper;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;
use function count;

final class Licenses
{
    /** @var array<class-string, ObjectMapper> */
    private array $hydrator = [];

    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return (iterable<Schema\LicenseSimple> | array{code: int}) */
    public function getAllCommonlyUsedListing(array $params): iterable
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('featured', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: featured');
        }

        $arguments['featured'] = $params['featured'];
        unset($params['featured']);
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (array_key_exists(Hydrator\Operation\Licenses::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Licenses::class] = $this->hydrators->getObjectMapperOperation🌀Licenses();
        }

        $arguments['page'] = 1;
        do {
            $operator = new Operator\Licenses\GetAllCommonlyUsedListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Licenses::class]);
            $items    = $operator->call($arguments['featured'], $arguments['per_page'], $arguments['page']);

            yield from $items;

            $arguments['page']++;
        } while (count($items) > 0);
    }
}
