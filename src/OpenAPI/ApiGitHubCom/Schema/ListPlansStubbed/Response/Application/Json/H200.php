<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ListPlansStubbed\Response\Application\Json;

final class H200
{
    public const SCHEMA_JSON = '{"type":"array","items":{"title":"Marketplace Listing Plan","required":["url","accounts_url","id","number","name","description","has_free_trial","price_model","unit_name","monthly_price_in_cents","state","yearly_price_in_cents","bullets"],"type":"object","properties":{"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/marketplace_listing\\/plans\\/1313"]},"accounts_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/marketplace_listing\\/plans\\/1313\\/accounts"]},"id":{"type":"integer","examples":[1313]},"number":{"type":"integer","examples":[3]},"name":{"type":"string","examples":["Pro"]},"description":{"type":"string","examples":["A professional-grade CI solution"]},"monthly_price_in_cents":{"type":"integer","examples":[1099]},"yearly_price_in_cents":{"type":"integer","examples":[11870]},"price_model":{"enum":["FREE","FLAT_RATE","PER_UNIT"],"type":"string","examples":["FLAT_RATE"]},"has_free_trial":{"type":"boolean","examples":[true]},"unit_name":{"type":["string","null"]},"state":{"type":"string","examples":["published"]},"bullets":{"type":"array","items":{"type":"string"},"examples":["Up to 25 private repositories","11 concurrent builds"]}},"description":"Marketplace Listing Plan"}}';
    public const SCHEMA_TITLE = 'ListPlansStubbed\\Response\\Application\\Json\\H200';
    public const SCHEMA_DESCRIPTION = '';
}
