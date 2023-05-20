<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Router\Get;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Hydrators;
use ApiClients\Client\GitHub\Operator;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use EventSauce\ObjectHydrator\ObjectMapper;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class Licenses
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

    public function getAllCommonlyUsed(array $params)
    {
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
        $operator = new Operator\Licenses\GetAllCommonlyUsed($this->browser, $this->authentication);

        return $operator->call($arguments['featured'], $arguments['per_page'], $arguments['page']);
    }

    public function getForRepo(array $params)
    {
        $arguments = [];
        if (array_key_exists('owner', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: owner');
        }

        $arguments['owner'] = $params['owner'];
        unset($params['owner']);
        if (array_key_exists('repo', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repo');
        }

        $arguments['repo'] = $params['repo'];
        unset($params['repo']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\License::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\License::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀License();
        }

        $operator = new Operator\Licenses\GetForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\License::class]);

        return $operator->call($arguments['owner'], $arguments['repo']);
    }

    public function get(array $params)
    {
        $arguments = [];
        if (array_key_exists('license', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: license');
        }

        $arguments['license'] = $params['license'];
        unset($params['license']);
        if (array_key_exists(Hydrator\Operation\Licenses\License::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Licenses\License::class] = $this->hydrators->getObjectMapperOperation🌀Licenses🌀License();
        }

        $operator = new Operator\Licenses\Get($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Licenses\License::class]);

        return $operator->call($arguments['license']);
    }
}
