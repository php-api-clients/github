<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Router\Patch;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Hydrators;
use ApiClients\Client\GitHub\Operator;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\Schema\SecretScanningAlert;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use EventSauce\ObjectHydrator\ObjectMapper;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class SecretScanning
{
    /** @var array<class-string, ObjectMapper> */
    private array $hydrator = [];

    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return (Schema\SecretScanningAlert | array{code: int}) */
    public function updateAlert(array $params): SecretScanningAlert|array
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
        if (array_key_exists('alert_number', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: alert_number');
        }

        $arguments['alert_number'] = $params['alert_number'];
        unset($params['alert_number']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\SecretScanning\Alerts\AlertNumber::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\SecretScanning\Alerts\AlertNumber::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀SecretScanning🌀Alerts🌀AlertNumber();
        }

        $operator = new Operator\SecretScanning\UpdateAlert($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\SecretScanning\Alerts\AlertNumber::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['alert_number'], $params);
    }
}
