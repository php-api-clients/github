<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Router\Delete;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Hydrators;
use ApiClients\Client\GitHub\Operator;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use EventSauce\ObjectHydrator\ObjectMapper;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class CodeScanning
{
    /** @var array<class-string, ObjectMapper> */
    private array $hydrator = [];

    public function __construct(private readonly SchemaValidator $requestSchemaValidator, private readonly SchemaValidator $responseSchemaValidator, private readonly Hydrators $hydrators, private readonly Browser $browser, private readonly AuthenticationInterface $authentication)
    {
    }

    public function deleteAnalysis(array $params)
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
        if (array_key_exists('analysis_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: analysis_id');
        }

        $arguments['analysis_id'] = $params['analysis_id'];
        unset($params['analysis_id']);
        if (array_key_exists('confirm_delete', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: confirm_delete');
        }

        $arguments['confirm_delete'] = $params['confirm_delete'];
        unset($params['confirm_delete']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\CodeScanning\Analyses\AnalysisId::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\CodeScanning\Analyses\AnalysisId::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Analyses🌀AnalysisId();
        }

        $operator = new Operator\CodeScanning\DeleteAnalysis($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\CodeScanning\Analyses\AnalysisId::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['analysis_id'], $arguments['confirm_delete']);
    }
}
