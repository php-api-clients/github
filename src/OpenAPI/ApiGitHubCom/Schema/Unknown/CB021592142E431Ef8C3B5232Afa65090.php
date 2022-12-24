<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown;

final class CB021592142E431Ef8C3B5232Afa65090
{
    public const SCHEMA_JSON = '{"required":["id","node_id","user","body","commit_id","submitted_at","state","html_url","pull_request_url","author_association","_links"],"type":"object","properties":{"_links":{"required":["html","pull_request"],"type":"object","properties":{"html":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string","format":"uri-template"}}},"pull_request":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string","format":"uri-template"}}}}},"author_association":{"title":"AuthorAssociation","enum":["COLLABORATOR","CONTRIBUTOR","FIRST_TIMER","FIRST_TIME_CONTRIBUTOR","MANNEQUIN","MEMBER","NONE","OWNER"],"type":"string","description":"How the author is associated with the repository."},"body":{"type":["string","null"],"description":"The text of the review."},"commit_id":{"type":"string","description":"A commit SHA for the review."},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer","description":"Unique identifier of the review"},"node_id":{"type":"string"},"pull_request_url":{"type":"string","format":"uri"},"state":{"enum":["dismissed","approved","changes_requested"],"type":"string"},"submitted_at":{"type":"string","format":"date-time"},"user":{"title":"User","required":["login","id"],"type":["object","null"],"properties":{"avatar_url":{"type":"string","format":"uri"},"deleted":{"type":"boolean"},"email":{"type":["string","null"]},"events_url":{"type":"string","format":"uri-template"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"gravatar_id":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"login":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization","Mannequin"],"type":"string"},"url":{"type":"string","format":"uri"}}}},"description":"The review that was affected."}';
    public const SCHEMA_TITLE = 'c_b021592142e431ef8c3b5232afa65090';
    public const SCHEMA_DESCRIPTION = 'The review that was affected.';
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C3725E2559D7806782692985Ee129B0E5::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C3725E2559D7806782692985Ee129B0E5 $_links;
    /**
     * How the author is associated with the repository.
     */
    private string $author_association;
    /**
     * The text of the review.
     */
    private $body;
    /**
     * A commit SHA for the review.
     */
    private string $commit_id;
    private string $html_url;
    /**
     * Unique identifier of the review
     */
    private int $id;
    private string $node_id;
    private string $pull_request_url;
    private string $state;
    private string $submitted_at;
    private $user;
    public function _links() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C3725E2559D7806782692985Ee129B0E5
    {
        return $this->_links;
    }
    /**
     * How the author is associated with the repository.
     */
    public function author_association() : string
    {
        return $this->author_association;
    }
    /**
     * The text of the review.
     */
    public function body()
    {
        return $this->body;
    }
    /**
     * A commit SHA for the review.
     */
    public function commit_id() : string
    {
        return $this->commit_id;
    }
    public function html_url() : string
    {
        return $this->html_url;
    }
    /**
     * Unique identifier of the review
     */
    public function id() : int
    {
        return $this->id;
    }
    public function node_id() : string
    {
        return $this->node_id;
    }
    public function pull_request_url() : string
    {
        return $this->pull_request_url;
    }
    public function state() : string
    {
        return $this->state;
    }
    public function submitted_at() : string
    {
        return $this->submitted_at;
    }
    public function user()
    {
        return $this->user;
    }
}
