<?php

declare(strict_types=1);

namespace ApiClients\Tests\Client\GitHub\Operation\Teams;

use ApiClients\Client\GitHub\Client;
use ApiClients\Client\GitHub\Operation\Teams\CreateDiscussionCommentLegacy;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use Prophecy\Argument;
use React\Http\Browser;
use React\Http\Message\Response;
use WyriHaximus\AsyncTestUtilities\AsyncTestCase;

use function json_decode;
use function React\Promise\resolve;

final class CreateDiscussionCommentLegacyTest extends AsyncTestCase
{
    /**
     * @test
     */
    public function httpCode_201_requestContentType_application_json_responseContentType_application_json(): void
    {
        $response = new Response(201, ['Content-Type' => 'application/json'], Schema\TeamDiscussionComment::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('POST', '/teams/13/discussions/13/comments', Argument::type('array'), Schema\Teams\CreateDiscussionCommentLegacy\Request\Applicationjson::SCHEMA_EXAMPLE_DATA)->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $client->call(CreateDiscussionCommentLegacy::OPERATION_MATCH, (static function (array $data): array {
            $data['team_id']           = 13;
            $data['discussion_number'] = 13;

            return $data;
        })(json_decode(Schema\Teams\CreateDiscussionCommentLegacy\Request\Applicationjson::SCHEMA_EXAMPLE_DATA, true)));
    }
}
