<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Router\Patch;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Hydrators;
use ApiClients\Client\GitHub\Operator;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use EventSauce\ObjectHydrator\ObjectMapper;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class Apps
{
    /** @var array<class-string, ObjectMapper> */
    private array $hydrator = [];
    private readonly SchemaValidator $requestSchemaValidator;
    private readonly SchemaValidator $responseSchemaValidator;
    private readonly Hydrators $hydrators;
    private readonly Browser $browser;
    private readonly AuthenticationInterface $authentication;

    public function __construct(SchemaValidator $requestSchemaValidator, SchemaValidator $responseSchemaValidator, Hydrators $hydrators, Browser $browser, AuthenticationInterface $authentication)
    {
        $this->requestSchemaValidator  = $requestSchemaValidator;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrators               = $hydrators;
        $this->browser                 = $browser;
        $this->authentication          = $authentication;
    }

    public function updateWebhookConfigForApp(array $params)
    {
        if (array_key_exists(Hydrator\Operation\App\Hook\Config::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\App\Hook\Config::class] = $this->hydrators->getObjectMapperOperation🌀App🌀Hook🌀Config();
        }

        $operator = new Operator\Apps\UpdateWebhookConfigForApp($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\App\Hook\Config::class]);

        return $operator->call($params);
    }

    public function resetToken(array $params)
    {
        $arguments = [];
        if (array_key_exists('client_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: client_id');
        }

        $arguments['client_id'] = $params['client_id'];
        unset($params['client_id']);
        if (array_key_exists(Hydrator\Operation\Applications\ClientId\Token::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Applications\ClientId\Token::class] = $this->hydrators->getObjectMapperOperation🌀Applications🌀ClientId🌀Token();
        }

        $operator = new Operator\Apps\ResetToken($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Applications\ClientId\Token::class]);

        return $operator->call($arguments['client_id'], $params);
    }
}
