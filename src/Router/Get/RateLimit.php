<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Router\Get;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Hydrators;
use ApiClients\Client\GitHub\Operator;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\Schema\RateLimitOverview;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use EventSauce\ObjectHydrator\ObjectMapper;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class RateLimit
{
    /** @var array<class-string, ObjectMapper> */
    private array $hydrator = [];

    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return (Schema\RateLimitOverview | array{code: int}) */
    public function get(array $params): RateLimitOverview|array
    {
        $matched = true;
        if (array_key_exists(Hydrator\Operation\RateLimit::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\RateLimit::class] = $this->hydrators->getObjectMapperOperation🌀RateLimit();
        }

        $operator = new Operator\RateLimit\Get($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\RateLimit::class]);

        return $operator->call();
    }
}
