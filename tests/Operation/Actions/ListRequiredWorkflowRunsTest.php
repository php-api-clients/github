<?php

declare(strict_types=1);

namespace ApiClients\Tests\Client\GitHub\Operation\Actions;

use ApiClients\Client\GitHub\Client;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use Prophecy\Argument;
use React\Http\Browser;
use React\Http\Message\Response;
use WyriHaximus\AsyncTestUtilities\AsyncTestCase;

use function React\Async\await;
use function React\Promise\resolve;

final class ListRequiredWorkflowRunsTest extends AsyncTestCase
{
    /**
     * @test
     */
    public function call_httpCode_200_responseContentType_application_json_zero(): void
    {
        $response = new Response(200, ['Content-Type' => 'application/json'], Schema\Operations\Actions\ListRequiredWorkflowRuns\Response\ApplicationJson\Ok::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/repos/generated/generated/actions/required_workflows/29/runs?actor=generated&branch=generated&event=generated&status=generated&created=1970-01-01T00:00:00+00:00&check_suite_id=14&head_sha=generated&per_page=8&page=4&exclude_pull_requests=', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(Operation\Actions\ListRequiredWorkflowRuns::OPERATION_MATCH, (static function (array $data): array {
            $data['owner']                         = 'generated';
            $data['repo']                          = 'generated';
            $data['required_workflow_id_for_repo'] = 29;
            $data['actor']                         = 'generated';
            $data['branch']                        = 'generated';
            $data['event']                         = 'generated';
            $data['status']                        = 'generated';
            $data['created']                       = '1970-01-01T00:00:00+00:00';
            $data['check_suite_id']                = 14;
            $data['head_sha']                      = 'generated';
            $data['per_page']                      = 8;
            $data['page']                          = 4;
            $data['exclude_pull_requests']         = false;

            return $data;
        })([]));
    }

    /**
     * @test
     */
    public function operations_httpCode_200_responseContentType_application_json_zero(): void
    {
        $response = new Response(200, ['Content-Type' => 'application/json'], Schema\Operations\Actions\ListRequiredWorkflowRuns\Response\ApplicationJson\Ok::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/repos/generated/generated/actions/required_workflows/29/runs?actor=generated&branch=generated&event=generated&status=generated&created=1970-01-01T00:00:00+00:00&check_suite_id=14&head_sha=generated&per_page=8&page=4&exclude_pull_requests=', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = await($client->operations()->actions()->listRequiredWorkflowRuns('generated', 'generated', 29, 'generated', 'generated', 'generated', 'generated', '1970-01-01T00:00:00+00:00', 14, 'generated', 8, 4, false));
    }
}
