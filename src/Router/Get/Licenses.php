<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Router\Get;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Hydrators;
use ApiClients\Client\GitHub\Operator;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\Schema\License;
use ApiClients\Client\GitHub\Schema\LicenseContent;
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

    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return (Observable<Schema\LicenseSimple> | array{code: int}) */
    public function getAllCommonlyUsed(array $params): iterable
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

        $operator = new Operator\Licenses\GetAllCommonlyUsed($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Licenses::class]);

        return $operator->call($arguments['featured'], $arguments['per_page'], $arguments['page']);
    }

    /** @return (Schema\License | array{code: int}) */
    public function get(array $params): License|array
    {
        $matched   = true;
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

    /** @return */
    public function getForRepo(array $params): LicenseContent|array
    {
        $matched   = true;
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
}
