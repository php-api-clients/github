<?php

declare(strict_types=1);

namespace ApiClients\Tests\Client\GitHub\Operation\Pulls;

use ApiClients\Client\GitHub\Client;
use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Operation\Pulls\DeletePendingReview;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use Prophecy\Argument;
use React\Http\Browser;
use React\Http\Message\Response;
use WyriHaximus\AsyncTestUtilities\AsyncTestCase;

use function React\Promise\resolve;

final class DeletePendingReviewTest extends AsyncTestCase
{
    /**
     * @test
     */
    public function httpCode_200_responseContentType_application_json(): void
    {
        $response = new Response(200, ['Content-Type' => 'application/json'], Schema\PullRequestReview::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('DELETE', '/repos/generated_null/generated_null/pulls/13/reviews/13', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $client->call(DeletePendingReview::OPERATION_MATCH, (static function (array $data): array {
            $data['owner']       = 'generated_null';
            $data['repo']        = 'generated_null';
            $data['pull_number'] = 13;
            $data['review_id']   = 13;

            return $data;
        })([]));
    }

    /**
     * @test
     */
    public function httpCode_422_responseContentType_application_json(): void
    {
        self::expectException(ErrorSchemas\ValidationErrorSimple::class);
        $response = new Response(422, ['Content-Type' => 'application/json'], Schema\ValidationErrorSimple::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('DELETE', '/repos/generated_null/generated_null/pulls/13/reviews/13', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $client->call(DeletePendingReview::OPERATION_MATCH, (static function (array $data): array {
            $data['owner']       = 'generated_null';
            $data['repo']        = 'generated_null';
            $data['pull_number'] = 13;
            $data['review_id']   = 13;

            return $data;
        })([]));
    }

    /**
     * @test
     */
    public function httpCode_404_responseContentType_application_json(): void
    {
        self::expectException(ErrorSchemas\BasicError::class);
        $response = new Response(404, ['Content-Type' => 'application/json'], Schema\BasicError::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('DELETE', '/repos/generated_null/generated_null/pulls/13/reviews/13', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $client->call(DeletePendingReview::OPERATION_MATCH, (static function (array $data): array {
            $data['owner']       = 'generated_null';
            $data['repo']        = 'generated_null';
            $data['pull_number'] = 13;
            $data['review_id']   = 13;

            return $data;
        })([]));
    }
}
