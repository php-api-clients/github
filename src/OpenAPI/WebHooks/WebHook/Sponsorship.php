<?php

namespace ApiClients\Client\Github\OpenAPI\WebHooks\WebHook;

final class Sponsorship implements \ApiClients\Client\Github\OpenAPI\WebHooks\WebHookInterface
{
    public function resolve(array $data) : string
    {
        $schemaValidator = new \League\OpenAPIValidation\Schema\SchemaValidator(\League\OpenAPIValidation\Schema\SchemaValidator::VALIDATE_AS_REQUEST);
        a:
        try {
            $schemaValidator->validate($data, \cebe\openapi\Reader::readFromJson('{"title":"sponsorship cancelled event","required":["action","sponsorship","sender"],"type":"object","properties":{"action":{"enum":["cancelled"],"type":"string"},"sponsorship":{"required":["node_id","created_at","sponsorable","sponsor","privacy_level","tier"],"type":"object","properties":{"node_id":{"type":"string"},"created_at":{"type":"string"},"sponsorable":{"title":"User","required":["login","id","node_id","avatar_url","gravatar_id","url","html_url","followers_url","following_url","gists_url","starred_url","subscriptions_url","organizations_url","repos_url","events_url","received_events_url","type","site_admin"],"type":"object","properties":{"login":{"type":"string"},"id":{"type":"integer"},"node_id":{"type":"string"},"name":{"type":"string"},"email":{"type":["string","null"]},"avatar_url":{"type":"string","format":"uri"},"gravatar_id":{"type":"string"},"url":{"type":"string","format":"uri"},"html_url":{"type":"string","format":"uri"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"organizations_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"events_url":{"type":"string","format":"uri-template"},"received_events_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization"],"type":"string"},"site_admin":{"type":"boolean"}},"additionalProperties":false},"sponsor":{"title":"User","required":["login","id","node_id","avatar_url","gravatar_id","url","html_url","followers_url","following_url","gists_url","starred_url","subscriptions_url","organizations_url","repos_url","events_url","received_events_url","type","site_admin"],"type":"object","properties":{"login":{"type":"string"},"id":{"type":"integer"},"node_id":{"type":"string"},"name":{"type":"string"},"email":{"type":["string","null"]},"avatar_url":{"type":"string","format":"uri"},"gravatar_id":{"type":"string"},"url":{"type":"string","format":"uri"},"html_url":{"type":"string","format":"uri"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"organizations_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"events_url":{"type":"string","format":"uri-template"},"received_events_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization"],"type":"string"},"site_admin":{"type":"boolean"}},"additionalProperties":false},"privacy_level":{"type":"string"},"tier":{"title":"Sponsorship Tier","required":["node_id","created_at","description","monthly_price_in_cents","monthly_price_in_dollars","name","is_one_time","is_custom_ammount"],"type":"object","properties":{"node_id":{"type":"string"},"created_at":{"type":"string"},"description":{"type":"string"},"monthly_price_in_cents":{"type":"integer"},"monthly_price_in_dollars":{"type":"integer"},"name":{"type":"string"},"is_one_time":{"type":"boolean"},"is_custom_ammount":{"type":"boolean"}},"description":"The `tier_changed` and `pending_tier_change` will include the original tier before the change or pending change. For more information, see the pending tier change payload.","additionalProperties":false}},"additionalProperties":false},"sender":{"title":"User","required":["login","id","node_id","avatar_url","gravatar_id","url","html_url","followers_url","following_url","gists_url","starred_url","subscriptions_url","organizations_url","repos_url","events_url","received_events_url","type","site_admin"],"type":"object","properties":{"login":{"type":"string"},"id":{"type":"integer"},"node_id":{"type":"string"},"name":{"type":"string"},"email":{"type":["string","null"]},"avatar_url":{"type":"string","format":"uri"},"gravatar_id":{"type":"string"},"url":{"type":"string","format":"uri"},"html_url":{"type":"string","format":"uri"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"organizations_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"events_url":{"type":"string","format":"uri-template"},"received_events_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization"],"type":"string"},"site_admin":{"type":"boolean"}},"additionalProperties":false}},"additionalProperties":false}', '\\cebe\\openapi\\spec\\Schema'));
            return 'ApiClients\\Client\\Github\\OpenAPI\\WebHooks\\Schema\\Sponsorship\\Cancelled';
        } catch (\Throwable $b) {
            goto b;
        }
        b:
        try {
            $schemaValidator->validate($data, \cebe\openapi\Reader::readFromJson('{"title":"sponsorship created event","required":["action","sponsorship","sender"],"type":"object","properties":{"action":{"enum":["created"],"type":"string"},"sponsorship":{"required":["node_id","created_at","sponsorable","sponsor","privacy_level","tier"],"type":"object","properties":{"node_id":{"type":"string"},"created_at":{"type":"string"},"sponsorable":{"title":"User","required":["login","id","node_id","avatar_url","gravatar_id","url","html_url","followers_url","following_url","gists_url","starred_url","subscriptions_url","organizations_url","repos_url","events_url","received_events_url","type","site_admin"],"type":"object","properties":{"login":{"type":"string"},"id":{"type":"integer"},"node_id":{"type":"string"},"name":{"type":"string"},"email":{"type":["string","null"]},"avatar_url":{"type":"string","format":"uri"},"gravatar_id":{"type":"string"},"url":{"type":"string","format":"uri"},"html_url":{"type":"string","format":"uri"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"organizations_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"events_url":{"type":"string","format":"uri-template"},"received_events_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization"],"type":"string"},"site_admin":{"type":"boolean"}},"additionalProperties":false},"sponsor":{"title":"User","required":["login","id","node_id","avatar_url","gravatar_id","url","html_url","followers_url","following_url","gists_url","starred_url","subscriptions_url","organizations_url","repos_url","events_url","received_events_url","type","site_admin"],"type":"object","properties":{"login":{"type":"string"},"id":{"type":"integer"},"node_id":{"type":"string"},"name":{"type":"string"},"email":{"type":["string","null"]},"avatar_url":{"type":"string","format":"uri"},"gravatar_id":{"type":"string"},"url":{"type":"string","format":"uri"},"html_url":{"type":"string","format":"uri"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"organizations_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"events_url":{"type":"string","format":"uri-template"},"received_events_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization"],"type":"string"},"site_admin":{"type":"boolean"}},"additionalProperties":false},"privacy_level":{"type":"string"},"tier":{"title":"Sponsorship Tier","required":["node_id","created_at","description","monthly_price_in_cents","monthly_price_in_dollars","name","is_one_time","is_custom_ammount"],"type":"object","properties":{"node_id":{"type":"string"},"created_at":{"type":"string"},"description":{"type":"string"},"monthly_price_in_cents":{"type":"integer"},"monthly_price_in_dollars":{"type":"integer"},"name":{"type":"string"},"is_one_time":{"type":"boolean"},"is_custom_ammount":{"type":"boolean"}},"description":"The `tier_changed` and `pending_tier_change` will include the original tier before the change or pending change. For more information, see the pending tier change payload.","additionalProperties":false}},"additionalProperties":false},"sender":{"title":"User","required":["login","id","node_id","avatar_url","gravatar_id","url","html_url","followers_url","following_url","gists_url","starred_url","subscriptions_url","organizations_url","repos_url","events_url","received_events_url","type","site_admin"],"type":"object","properties":{"login":{"type":"string"},"id":{"type":"integer"},"node_id":{"type":"string"},"name":{"type":"string"},"email":{"type":["string","null"]},"avatar_url":{"type":"string","format":"uri"},"gravatar_id":{"type":"string"},"url":{"type":"string","format":"uri"},"html_url":{"type":"string","format":"uri"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"organizations_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"events_url":{"type":"string","format":"uri-template"},"received_events_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization"],"type":"string"},"site_admin":{"type":"boolean"}},"additionalProperties":false}},"additionalProperties":false}', '\\cebe\\openapi\\spec\\Schema'));
            return 'ApiClients\\Client\\Github\\OpenAPI\\WebHooks\\Schema\\Sponsorship\\Created';
        } catch (\Throwable $c) {
            goto c;
        }
        c:
        try {
            $schemaValidator->validate($data, \cebe\openapi\Reader::readFromJson('{"title":"sponsorship edited event","required":["action","changes","sponsorship","sender"],"type":"object","properties":{"action":{"enum":["edited"],"type":"string"},"sponsorship":{"required":["node_id","created_at","sponsorable","sponsor","privacy_level","tier"],"type":"object","properties":{"node_id":{"type":"string"},"created_at":{"type":"string"},"sponsorable":{"title":"User","required":["login","id","node_id","avatar_url","gravatar_id","url","html_url","followers_url","following_url","gists_url","starred_url","subscriptions_url","organizations_url","repos_url","events_url","received_events_url","type","site_admin"],"type":"object","properties":{"login":{"type":"string"},"id":{"type":"integer"},"node_id":{"type":"string"},"name":{"type":"string"},"email":{"type":["string","null"]},"avatar_url":{"type":"string","format":"uri"},"gravatar_id":{"type":"string"},"url":{"type":"string","format":"uri"},"html_url":{"type":"string","format":"uri"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"organizations_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"events_url":{"type":"string","format":"uri-template"},"received_events_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization"],"type":"string"},"site_admin":{"type":"boolean"}},"additionalProperties":false},"sponsor":{"title":"User","required":["login","id","node_id","avatar_url","gravatar_id","url","html_url","followers_url","following_url","gists_url","starred_url","subscriptions_url","organizations_url","repos_url","events_url","received_events_url","type","site_admin"],"type":"object","properties":{"login":{"type":"string"},"id":{"type":"integer"},"node_id":{"type":"string"},"name":{"type":"string"},"email":{"type":["string","null"]},"avatar_url":{"type":"string","format":"uri"},"gravatar_id":{"type":"string"},"url":{"type":"string","format":"uri"},"html_url":{"type":"string","format":"uri"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"organizations_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"events_url":{"type":"string","format":"uri-template"},"received_events_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization"],"type":"string"},"site_admin":{"type":"boolean"}},"additionalProperties":false},"privacy_level":{"type":"string"},"tier":{"title":"Sponsorship Tier","required":["node_id","created_at","description","monthly_price_in_cents","monthly_price_in_dollars","name","is_one_time","is_custom_ammount"],"type":"object","properties":{"node_id":{"type":"string"},"created_at":{"type":"string"},"description":{"type":"string"},"monthly_price_in_cents":{"type":"integer"},"monthly_price_in_dollars":{"type":"integer"},"name":{"type":"string"},"is_one_time":{"type":"boolean"},"is_custom_ammount":{"type":"boolean"}},"description":"The `tier_changed` and `pending_tier_change` will include the original tier before the change or pending change. For more information, see the pending tier change payload.","additionalProperties":false}},"additionalProperties":false},"changes":{"type":"object","properties":{"privacy_level":{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The `edited` event types include the details about the change when someone edits a sponsorship to change the privacy."}},"additionalProperties":false}},"additionalProperties":false},"sender":{"title":"User","required":["login","id","node_id","avatar_url","gravatar_id","url","html_url","followers_url","following_url","gists_url","starred_url","subscriptions_url","organizations_url","repos_url","events_url","received_events_url","type","site_admin"],"type":"object","properties":{"login":{"type":"string"},"id":{"type":"integer"},"node_id":{"type":"string"},"name":{"type":"string"},"email":{"type":["string","null"]},"avatar_url":{"type":"string","format":"uri"},"gravatar_id":{"type":"string"},"url":{"type":"string","format":"uri"},"html_url":{"type":"string","format":"uri"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"organizations_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"events_url":{"type":"string","format":"uri-template"},"received_events_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization"],"type":"string"},"site_admin":{"type":"boolean"}},"additionalProperties":false}},"additionalProperties":false}', '\\cebe\\openapi\\spec\\Schema'));
            return 'ApiClients\\Client\\Github\\OpenAPI\\WebHooks\\Schema\\Sponsorship\\Edited';
        } catch (\Throwable $d) {
            goto d;
        }
        d:
        try {
            $schemaValidator->validate($data, \cebe\openapi\Reader::readFromJson('{"title":"sponsorship pending_cancellation event","required":["action","sponsorship","sender"],"type":"object","properties":{"action":{"enum":["pending_cancellation"],"type":"string"},"sponsorship":{"required":["node_id","created_at","sponsorable","sponsor","privacy_level","tier"],"type":"object","properties":{"node_id":{"type":"string"},"created_at":{"type":"string"},"sponsorable":{"title":"User","required":["login","id","node_id","avatar_url","gravatar_id","url","html_url","followers_url","following_url","gists_url","starred_url","subscriptions_url","organizations_url","repos_url","events_url","received_events_url","type","site_admin"],"type":"object","properties":{"login":{"type":"string"},"id":{"type":"integer"},"node_id":{"type":"string"},"name":{"type":"string"},"email":{"type":["string","null"]},"avatar_url":{"type":"string","format":"uri"},"gravatar_id":{"type":"string"},"url":{"type":"string","format":"uri"},"html_url":{"type":"string","format":"uri"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"organizations_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"events_url":{"type":"string","format":"uri-template"},"received_events_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization"],"type":"string"},"site_admin":{"type":"boolean"}},"additionalProperties":false},"sponsor":{"title":"User","required":["login","id","node_id","avatar_url","gravatar_id","url","html_url","followers_url","following_url","gists_url","starred_url","subscriptions_url","organizations_url","repos_url","events_url","received_events_url","type","site_admin"],"type":"object","properties":{"login":{"type":"string"},"id":{"type":"integer"},"node_id":{"type":"string"},"name":{"type":"string"},"email":{"type":["string","null"]},"avatar_url":{"type":"string","format":"uri"},"gravatar_id":{"type":"string"},"url":{"type":"string","format":"uri"},"html_url":{"type":"string","format":"uri"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"organizations_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"events_url":{"type":"string","format":"uri-template"},"received_events_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization"],"type":"string"},"site_admin":{"type":"boolean"}},"additionalProperties":false},"privacy_level":{"type":"string"},"tier":{"title":"Sponsorship Tier","required":["node_id","created_at","description","monthly_price_in_cents","monthly_price_in_dollars","name","is_one_time","is_custom_ammount"],"type":"object","properties":{"node_id":{"type":"string"},"created_at":{"type":"string"},"description":{"type":"string"},"monthly_price_in_cents":{"type":"integer"},"monthly_price_in_dollars":{"type":"integer"},"name":{"type":"string"},"is_one_time":{"type":"boolean"},"is_custom_ammount":{"type":"boolean"}},"description":"The `tier_changed` and `pending_tier_change` will include the original tier before the change or pending change. For more information, see the pending tier change payload.","additionalProperties":false}},"additionalProperties":false},"effective_date":{"type":"string","description":"The `pending_cancellation` and `pending_tier_change` event types will include the date the cancellation or tier change will take effect."},"sender":{"title":"User","required":["login","id","node_id","avatar_url","gravatar_id","url","html_url","followers_url","following_url","gists_url","starred_url","subscriptions_url","organizations_url","repos_url","events_url","received_events_url","type","site_admin"],"type":"object","properties":{"login":{"type":"string"},"id":{"type":"integer"},"node_id":{"type":"string"},"name":{"type":"string"},"email":{"type":["string","null"]},"avatar_url":{"type":"string","format":"uri"},"gravatar_id":{"type":"string"},"url":{"type":"string","format":"uri"},"html_url":{"type":"string","format":"uri"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"organizations_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"events_url":{"type":"string","format":"uri-template"},"received_events_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization"],"type":"string"},"site_admin":{"type":"boolean"}},"additionalProperties":false}},"additionalProperties":false}', '\\cebe\\openapi\\spec\\Schema'));
            return 'ApiClients\\Client\\Github\\OpenAPI\\WebHooks\\Schema\\Sponsorship\\PendingCancellation';
        } catch (\Throwable $e) {
            goto e;
        }
        e:
        try {
            $schemaValidator->validate($data, \cebe\openapi\Reader::readFromJson('{"title":"sponsorship pending_tier_change event","required":["action","changes","sponsorship","sender"],"type":"object","properties":{"action":{"enum":["pending_tier_change"],"type":"string"},"sponsorship":{"required":["node_id","created_at","sponsorable","sponsor","privacy_level","tier"],"type":"object","properties":{"node_id":{"type":"string"},"created_at":{"type":"string"},"sponsorable":{"title":"User","required":["login","id","node_id","avatar_url","gravatar_id","url","html_url","followers_url","following_url","gists_url","starred_url","subscriptions_url","organizations_url","repos_url","events_url","received_events_url","type","site_admin"],"type":"object","properties":{"login":{"type":"string"},"id":{"type":"integer"},"node_id":{"type":"string"},"name":{"type":"string"},"email":{"type":["string","null"]},"avatar_url":{"type":"string","format":"uri"},"gravatar_id":{"type":"string"},"url":{"type":"string","format":"uri"},"html_url":{"type":"string","format":"uri"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"organizations_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"events_url":{"type":"string","format":"uri-template"},"received_events_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization"],"type":"string"},"site_admin":{"type":"boolean"}},"additionalProperties":false},"sponsor":{"title":"User","required":["login","id","node_id","avatar_url","gravatar_id","url","html_url","followers_url","following_url","gists_url","starred_url","subscriptions_url","organizations_url","repos_url","events_url","received_events_url","type","site_admin"],"type":"object","properties":{"login":{"type":"string"},"id":{"type":"integer"},"node_id":{"type":"string"},"name":{"type":"string"},"email":{"type":["string","null"]},"avatar_url":{"type":"string","format":"uri"},"gravatar_id":{"type":"string"},"url":{"type":"string","format":"uri"},"html_url":{"type":"string","format":"uri"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"organizations_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"events_url":{"type":"string","format":"uri-template"},"received_events_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization"],"type":"string"},"site_admin":{"type":"boolean"}},"additionalProperties":false},"privacy_level":{"type":"string"},"tier":{"title":"Sponsorship Tier","required":["node_id","created_at","description","monthly_price_in_cents","monthly_price_in_dollars","name","is_one_time","is_custom_ammount"],"type":"object","properties":{"node_id":{"type":"string"},"created_at":{"type":"string"},"description":{"type":"string"},"monthly_price_in_cents":{"type":"integer"},"monthly_price_in_dollars":{"type":"integer"},"name":{"type":"string"},"is_one_time":{"type":"boolean"},"is_custom_ammount":{"type":"boolean"}},"description":"The `tier_changed` and `pending_tier_change` will include the original tier before the change or pending change. For more information, see the pending tier change payload.","additionalProperties":false}},"additionalProperties":false},"effective_date":{"type":"string","description":"The `pending_cancellation` and `pending_tier_change` event types will include the date the cancellation or tier change will take effect."},"changes":{"required":["tier"],"type":"object","properties":{"tier":{"required":["from"],"type":"object","properties":{"from":{"title":"Sponsorship Tier","required":["node_id","created_at","description","monthly_price_in_cents","monthly_price_in_dollars","name","is_one_time","is_custom_ammount"],"type":"object","properties":{"node_id":{"type":"string"},"created_at":{"type":"string"},"description":{"type":"string"},"monthly_price_in_cents":{"type":"integer"},"monthly_price_in_dollars":{"type":"integer"},"name":{"type":"string"},"is_one_time":{"type":"boolean"},"is_custom_ammount":{"type":"boolean"}},"description":"The `tier_changed` and `pending_tier_change` will include the original tier before the change or pending change. For more information, see the pending tier change payload.","additionalProperties":false}},"additionalProperties":false}},"additionalProperties":false},"sender":{"title":"User","required":["login","id","node_id","avatar_url","gravatar_id","url","html_url","followers_url","following_url","gists_url","starred_url","subscriptions_url","organizations_url","repos_url","events_url","received_events_url","type","site_admin"],"type":"object","properties":{"login":{"type":"string"},"id":{"type":"integer"},"node_id":{"type":"string"},"name":{"type":"string"},"email":{"type":["string","null"]},"avatar_url":{"type":"string","format":"uri"},"gravatar_id":{"type":"string"},"url":{"type":"string","format":"uri"},"html_url":{"type":"string","format":"uri"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"organizations_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"events_url":{"type":"string","format":"uri-template"},"received_events_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization"],"type":"string"},"site_admin":{"type":"boolean"}},"additionalProperties":false}},"additionalProperties":false}', '\\cebe\\openapi\\spec\\Schema'));
            return 'ApiClients\\Client\\Github\\OpenAPI\\WebHooks\\Schema\\Sponsorship\\PendingTierChange';
        } catch (\Throwable $f) {
            goto f;
        }
        f:
        try {
            $schemaValidator->validate($data, \cebe\openapi\Reader::readFromJson('{"title":"sponsorship tier_changed event","required":["action","changes","sponsorship","sender"],"type":"object","properties":{"action":{"enum":["tier_changed"],"type":"string"},"sponsorship":{"required":["node_id","created_at","sponsorable","sponsor","privacy_level","tier"],"type":"object","properties":{"node_id":{"type":"string"},"created_at":{"type":"string"},"sponsorable":{"title":"User","required":["login","id","node_id","avatar_url","gravatar_id","url","html_url","followers_url","following_url","gists_url","starred_url","subscriptions_url","organizations_url","repos_url","events_url","received_events_url","type","site_admin"],"type":"object","properties":{"login":{"type":"string"},"id":{"type":"integer"},"node_id":{"type":"string"},"name":{"type":"string"},"email":{"type":["string","null"]},"avatar_url":{"type":"string","format":"uri"},"gravatar_id":{"type":"string"},"url":{"type":"string","format":"uri"},"html_url":{"type":"string","format":"uri"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"organizations_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"events_url":{"type":"string","format":"uri-template"},"received_events_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization"],"type":"string"},"site_admin":{"type":"boolean"}},"additionalProperties":false},"sponsor":{"title":"User","required":["login","id","node_id","avatar_url","gravatar_id","url","html_url","followers_url","following_url","gists_url","starred_url","subscriptions_url","organizations_url","repos_url","events_url","received_events_url","type","site_admin"],"type":"object","properties":{"login":{"type":"string"},"id":{"type":"integer"},"node_id":{"type":"string"},"name":{"type":"string"},"email":{"type":["string","null"]},"avatar_url":{"type":"string","format":"uri"},"gravatar_id":{"type":"string"},"url":{"type":"string","format":"uri"},"html_url":{"type":"string","format":"uri"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"organizations_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"events_url":{"type":"string","format":"uri-template"},"received_events_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization"],"type":"string"},"site_admin":{"type":"boolean"}},"additionalProperties":false},"privacy_level":{"type":"string"},"tier":{"title":"Sponsorship Tier","required":["node_id","created_at","description","monthly_price_in_cents","monthly_price_in_dollars","name","is_one_time","is_custom_ammount"],"type":"object","properties":{"node_id":{"type":"string"},"created_at":{"type":"string"},"description":{"type":"string"},"monthly_price_in_cents":{"type":"integer"},"monthly_price_in_dollars":{"type":"integer"},"name":{"type":"string"},"is_one_time":{"type":"boolean"},"is_custom_ammount":{"type":"boolean"}},"description":"The `tier_changed` and `pending_tier_change` will include the original tier before the change or pending change. For more information, see the pending tier change payload.","additionalProperties":false}},"additionalProperties":false},"changes":{"required":["tier"],"type":"object","properties":{"tier":{"required":["from"],"type":"object","properties":{"from":{"title":"Sponsorship Tier","required":["node_id","created_at","description","monthly_price_in_cents","monthly_price_in_dollars","name","is_one_time","is_custom_ammount"],"type":"object","properties":{"node_id":{"type":"string"},"created_at":{"type":"string"},"description":{"type":"string"},"monthly_price_in_cents":{"type":"integer"},"monthly_price_in_dollars":{"type":"integer"},"name":{"type":"string"},"is_one_time":{"type":"boolean"},"is_custom_ammount":{"type":"boolean"}},"description":"The `tier_changed` and `pending_tier_change` will include the original tier before the change or pending change. For more information, see the pending tier change payload.","additionalProperties":false}},"additionalProperties":false}},"additionalProperties":false},"sender":{"title":"User","required":["login","id","node_id","avatar_url","gravatar_id","url","html_url","followers_url","following_url","gists_url","starred_url","subscriptions_url","organizations_url","repos_url","events_url","received_events_url","type","site_admin"],"type":"object","properties":{"login":{"type":"string"},"id":{"type":"integer"},"node_id":{"type":"string"},"name":{"type":"string"},"email":{"type":["string","null"]},"avatar_url":{"type":"string","format":"uri"},"gravatar_id":{"type":"string"},"url":{"type":"string","format":"uri"},"html_url":{"type":"string","format":"uri"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"organizations_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"events_url":{"type":"string","format":"uri-template"},"received_events_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization"],"type":"string"},"site_admin":{"type":"boolean"}},"additionalProperties":false}},"additionalProperties":false}', '\\cebe\\openapi\\spec\\Schema'));
            return 'ApiClients\\Client\\Github\\OpenAPI\\WebHooks\\Schema\\Sponsorship\\TierChanged';
        } catch (\Throwable $g) {
            goto g;
        }
        g:
        throw $g;
    }
}
