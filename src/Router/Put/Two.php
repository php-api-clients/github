<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Router\Put;

use ApiClients\Client\GitHub\Hydrators;
use ApiClients\Client\GitHub\Router;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\Schema\Operations\Activity\MarkNotificationsAsRead\Response\ApplicationJson\Accepted;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class Two
{
    private array $router = [];

    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return (Schema\Operations\Activity\MarkNotificationsAsRead\Response\ApplicationJson\Accepted|array{code: int}) */
    public function call(string $call, array $params, array $pathChunks): Accepted|array
    {
        $matched = false;
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'notifications') {
                if ($call === 'PUT /notifications') {
                    $matched = true;
                    if (array_key_exists(Router\Put\Activity::class, $this->router) === false) {
                        $this->router[Router\Put\Activity::class] = new Router\Put\Activity($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                    }

                    return $this->router[Router\Put\Activity::class]->markNotificationsAsRead($params);
                }
            }
        }

        if ($matched === false) {
            throw new InvalidArgumentException();
        }
    }
}
