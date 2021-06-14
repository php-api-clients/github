<?php

namespace ApiClients\Client\Github\OpenAPI\WebHooks\WebHook;

final class MarketplacePurchase implements \ApiClients\Client\Github\OpenAPI\WebHooks\WebHookInterface
{
    public function resolve(array $data) : string
    {
        $schemaValidator = new \League\OpenAPIValidation\Schema\SchemaValidator(\League\OpenAPIValidation\Schema\SchemaValidator::VALIDATE_AS_REQUEST);
        a:
        try {
            $schemaValidator->validate($data, \cebe\openapi\Reader::readFromJson('{"title":"marketplace_purchase cancelled event","required":["action","effective_date","sender","marketplace_purchase"],"type":"object","properties":{"action":{"enum":["cancelled"],"type":"string"},"effective_date":{"type":"string"},"sender":{"required":["login","id","avatar_url","gravatar_id","url","html_url","followers_url","following_url","gists_url","starred_url","subscriptions_url","organizations_url","repos_url","events_url","received_events_url","type","site_admin","email"],"type":"object","properties":{"login":{"type":"string"},"id":{"type":"integer"},"avatar_url":{"type":"string","format":"uri"},"gravatar_id":{"type":"string"},"url":{"type":"string","format":"uri"},"html_url":{"type":"string","format":"uri"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"organizations_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"events_url":{"type":"string","format":"uri-template"},"received_events_url":{"type":"string","format":"uri"},"type":{"type":"string"},"site_admin":{"type":"boolean"},"email":{"type":"string"}},"additionalProperties":false},"marketplace_purchase":{"allOf":[{"title":"Marketplace Purchase","required":["account","billing_cycle","unit_count","on_free_trial","free_trial_ends_on","plan"],"type":"object","properties":{"account":{"required":["type","id","node_id","login","organization_billing_email"],"type":"object","properties":{"type":{"type":"string"},"id":{"type":"integer"},"node_id":{"type":"string"},"login":{"type":"string"},"organization_billing_email":{"type":"string"}},"additionalProperties":false},"billing_cycle":{"type":"string"},"unit_count":{"type":"integer"},"on_free_trial":{"type":"boolean"},"free_trial_ends_on":{"type":"null"},"next_billing_date":{"type":"string"},"plan":{"required":["id","name","description","monthly_price_in_cents","yearly_price_in_cents","price_model","has_free_trial","unit_name","bullets"],"type":"object","properties":{"id":{"type":"integer"},"name":{"type":"string"},"description":{"type":"string"},"monthly_price_in_cents":{"type":"integer"},"yearly_price_in_cents":{"type":"integer"},"price_model":{"type":"string"},"has_free_trial":{"type":"boolean"},"unit_name":{"type":["string","null"]},"bullets":{"type":"array","items":{"type":"string"}}},"additionalProperties":false}},"additionalProperties":false},{"required":["next_billing_date"],"type":"object","properties":{"next_billing_date":{"type":"string"}},"tsAdditionalProperties":false}]},"previous_marketplace_purchase":{"title":"Marketplace Purchase","required":["account","billing_cycle","unit_count","on_free_trial","free_trial_ends_on","plan"],"type":"object","properties":{"account":{"required":["type","id","node_id","login","organization_billing_email"],"type":"object","properties":{"type":{"type":"string"},"id":{"type":"integer"},"node_id":{"type":"string"},"login":{"type":"string"},"organization_billing_email":{"type":"string"}},"additionalProperties":false},"billing_cycle":{"type":"string"},"unit_count":{"type":"integer"},"on_free_trial":{"type":"boolean"},"free_trial_ends_on":{"type":"null"},"next_billing_date":{"type":"string"},"plan":{"required":["id","name","description","monthly_price_in_cents","yearly_price_in_cents","price_model","has_free_trial","unit_name","bullets"],"type":"object","properties":{"id":{"type":"integer"},"name":{"type":"string"},"description":{"type":"string"},"monthly_price_in_cents":{"type":"integer"},"yearly_price_in_cents":{"type":"integer"},"price_model":{"type":"string"},"has_free_trial":{"type":"boolean"},"unit_name":{"type":["string","null"]},"bullets":{"type":"array","items":{"type":"string"}}},"additionalProperties":false}},"additionalProperties":false}},"additionalProperties":false}', '\\cebe\\openapi\\spec\\Schema'));
            return 'ApiClients\\Client\\Github\\OpenAPI\\WebHooks\\Schema\\MarketplacePurchase\\Cancelled';
        } catch (\Throwable $b) {
            goto b;
        }
        b:
        try {
            $schemaValidator->validate($data, \cebe\openapi\Reader::readFromJson('{"title":"marketplace_purchase changed event","required":["action","effective_date","sender","marketplace_purchase"],"type":"object","properties":{"action":{"enum":["changed"],"type":"string"},"effective_date":{"type":"string"},"sender":{"required":["login","id","avatar_url","gravatar_id","url","html_url","followers_url","following_url","gists_url","starred_url","subscriptions_url","organizations_url","repos_url","events_url","received_events_url","type","site_admin","email"],"type":"object","properties":{"login":{"type":"string"},"id":{"type":"integer"},"avatar_url":{"type":"string","format":"uri"},"gravatar_id":{"type":"string"},"url":{"type":"string","format":"uri"},"html_url":{"type":"string","format":"uri"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"organizations_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"events_url":{"type":"string","format":"uri-template"},"received_events_url":{"type":"string","format":"uri"},"type":{"type":"string"},"site_admin":{"type":"boolean"},"email":{"type":"string"}},"additionalProperties":false},"marketplace_purchase":{"allOf":[{"title":"Marketplace Purchase","required":["account","billing_cycle","unit_count","on_free_trial","free_trial_ends_on","plan"],"type":"object","properties":{"account":{"required":["type","id","node_id","login","organization_billing_email"],"type":"object","properties":{"type":{"type":"string"},"id":{"type":"integer"},"node_id":{"type":"string"},"login":{"type":"string"},"organization_billing_email":{"type":"string"}},"additionalProperties":false},"billing_cycle":{"type":"string"},"unit_count":{"type":"integer"},"on_free_trial":{"type":"boolean"},"free_trial_ends_on":{"type":"null"},"next_billing_date":{"type":"string"},"plan":{"required":["id","name","description","monthly_price_in_cents","yearly_price_in_cents","price_model","has_free_trial","unit_name","bullets"],"type":"object","properties":{"id":{"type":"integer"},"name":{"type":"string"},"description":{"type":"string"},"monthly_price_in_cents":{"type":"integer"},"yearly_price_in_cents":{"type":"integer"},"price_model":{"type":"string"},"has_free_trial":{"type":"boolean"},"unit_name":{"type":["string","null"]},"bullets":{"type":"array","items":{"type":"string"}}},"additionalProperties":false}},"additionalProperties":false},{"required":["next_billing_date"],"type":"object","properties":{"next_billing_date":{"type":"string"}},"tsAdditionalProperties":false}]},"previous_marketplace_purchase":{"title":"Marketplace Purchase","required":["account","billing_cycle","unit_count","on_free_trial","free_trial_ends_on","plan"],"type":"object","properties":{"account":{"required":["type","id","node_id","login","organization_billing_email"],"type":"object","properties":{"type":{"type":"string"},"id":{"type":"integer"},"node_id":{"type":"string"},"login":{"type":"string"},"organization_billing_email":{"type":"string"}},"additionalProperties":false},"billing_cycle":{"type":"string"},"unit_count":{"type":"integer"},"on_free_trial":{"type":"boolean"},"free_trial_ends_on":{"type":"null"},"next_billing_date":{"type":"string"},"plan":{"required":["id","name","description","monthly_price_in_cents","yearly_price_in_cents","price_model","has_free_trial","unit_name","bullets"],"type":"object","properties":{"id":{"type":"integer"},"name":{"type":"string"},"description":{"type":"string"},"monthly_price_in_cents":{"type":"integer"},"yearly_price_in_cents":{"type":"integer"},"price_model":{"type":"string"},"has_free_trial":{"type":"boolean"},"unit_name":{"type":["string","null"]},"bullets":{"type":"array","items":{"type":"string"}}},"additionalProperties":false}},"additionalProperties":false}},"additionalProperties":false}', '\\cebe\\openapi\\spec\\Schema'));
            return 'ApiClients\\Client\\Github\\OpenAPI\\WebHooks\\Schema\\MarketplacePurchase\\Changed';
        } catch (\Throwable $c) {
            goto c;
        }
        c:
        try {
            $schemaValidator->validate($data, \cebe\openapi\Reader::readFromJson('{"title":"marketplace_purchase pending_change event","required":["action","effective_date","sender","marketplace_purchase"],"type":"object","properties":{"action":{"enum":["pending_change"],"type":"string"},"effective_date":{"type":"string"},"sender":{"required":["login","id","avatar_url","gravatar_id","url","html_url","followers_url","following_url","gists_url","starred_url","subscriptions_url","organizations_url","repos_url","events_url","received_events_url","type","site_admin","email"],"type":"object","properties":{"login":{"type":"string"},"id":{"type":"integer"},"avatar_url":{"type":"string","format":"uri"},"gravatar_id":{"type":"string"},"url":{"type":"string","format":"uri"},"html_url":{"type":"string","format":"uri"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"organizations_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"events_url":{"type":"string","format":"uri-template"},"received_events_url":{"type":"string","format":"uri"},"type":{"type":"string"},"site_admin":{"type":"boolean"},"email":{"type":"string"}},"additionalProperties":false},"marketplace_purchase":{"allOf":[{"title":"Marketplace Purchase","required":["account","billing_cycle","unit_count","on_free_trial","free_trial_ends_on","plan"],"type":"object","properties":{"account":{"required":["type","id","node_id","login","organization_billing_email"],"type":"object","properties":{"type":{"type":"string"},"id":{"type":"integer"},"node_id":{"type":"string"},"login":{"type":"string"},"organization_billing_email":{"type":"string"}},"additionalProperties":false},"billing_cycle":{"type":"string"},"unit_count":{"type":"integer"},"on_free_trial":{"type":"boolean"},"free_trial_ends_on":{"type":"null"},"next_billing_date":{"type":"string"},"plan":{"required":["id","name","description","monthly_price_in_cents","yearly_price_in_cents","price_model","has_free_trial","unit_name","bullets"],"type":"object","properties":{"id":{"type":"integer"},"name":{"type":"string"},"description":{"type":"string"},"monthly_price_in_cents":{"type":"integer"},"yearly_price_in_cents":{"type":"integer"},"price_model":{"type":"string"},"has_free_trial":{"type":"boolean"},"unit_name":{"type":["string","null"]},"bullets":{"type":"array","items":{"type":"string"}}},"additionalProperties":false}},"additionalProperties":false},{"required":["next_billing_date"],"type":"object","properties":{"next_billing_date":{"type":"string"}},"tsAdditionalProperties":false}]},"previous_marketplace_purchase":{"title":"Marketplace Purchase","required":["account","billing_cycle","unit_count","on_free_trial","free_trial_ends_on","plan"],"type":"object","properties":{"account":{"required":["type","id","node_id","login","organization_billing_email"],"type":"object","properties":{"type":{"type":"string"},"id":{"type":"integer"},"node_id":{"type":"string"},"login":{"type":"string"},"organization_billing_email":{"type":"string"}},"additionalProperties":false},"billing_cycle":{"type":"string"},"unit_count":{"type":"integer"},"on_free_trial":{"type":"boolean"},"free_trial_ends_on":{"type":"null"},"next_billing_date":{"type":"string"},"plan":{"required":["id","name","description","monthly_price_in_cents","yearly_price_in_cents","price_model","has_free_trial","unit_name","bullets"],"type":"object","properties":{"id":{"type":"integer"},"name":{"type":"string"},"description":{"type":"string"},"monthly_price_in_cents":{"type":"integer"},"yearly_price_in_cents":{"type":"integer"},"price_model":{"type":"string"},"has_free_trial":{"type":"boolean"},"unit_name":{"type":["string","null"]},"bullets":{"type":"array","items":{"type":"string"}}},"additionalProperties":false}},"additionalProperties":false}},"additionalProperties":false}', '\\cebe\\openapi\\spec\\Schema'));
            return 'ApiClients\\Client\\Github\\OpenAPI\\WebHooks\\Schema\\MarketplacePurchase\\PendingChange';
        } catch (\Throwable $d) {
            goto d;
        }
        d:
        try {
            $schemaValidator->validate($data, \cebe\openapi\Reader::readFromJson('{"title":"marketplace_purchase pending_change_cancelled event","required":["action","effective_date","sender","marketplace_purchase"],"type":"object","properties":{"action":{"enum":["pending_change_cancelled"],"type":"string"},"effective_date":{"type":"string"},"sender":{"required":["login","id","avatar_url","gravatar_id","url","html_url","followers_url","following_url","gists_url","starred_url","subscriptions_url","organizations_url","repos_url","events_url","received_events_url","type","site_admin","email"],"type":"object","properties":{"login":{"type":"string"},"id":{"type":"integer"},"avatar_url":{"type":"string","format":"uri"},"gravatar_id":{"type":"string"},"url":{"type":"string","format":"uri"},"html_url":{"type":"string","format":"uri"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"organizations_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"events_url":{"type":"string","format":"uri-template"},"received_events_url":{"type":"string","format":"uri"},"type":{"type":"string"},"site_admin":{"type":"boolean"},"email":{"type":"string"}},"additionalProperties":false},"marketplace_purchase":{"allOf":[{"title":"Marketplace Purchase","required":["account","billing_cycle","unit_count","on_free_trial","free_trial_ends_on","plan"],"type":"object","properties":{"account":{"required":["type","id","node_id","login","organization_billing_email"],"type":"object","properties":{"type":{"type":"string"},"id":{"type":"integer"},"node_id":{"type":"string"},"login":{"type":"string"},"organization_billing_email":{"type":"string"}},"additionalProperties":false},"billing_cycle":{"type":"string"},"unit_count":{"type":"integer"},"on_free_trial":{"type":"boolean"},"free_trial_ends_on":{"type":"null"},"next_billing_date":{"type":"string"},"plan":{"required":["id","name","description","monthly_price_in_cents","yearly_price_in_cents","price_model","has_free_trial","unit_name","bullets"],"type":"object","properties":{"id":{"type":"integer"},"name":{"type":"string"},"description":{"type":"string"},"monthly_price_in_cents":{"type":"integer"},"yearly_price_in_cents":{"type":"integer"},"price_model":{"type":"string"},"has_free_trial":{"type":"boolean"},"unit_name":{"type":["string","null"]},"bullets":{"type":"array","items":{"type":"string"}}},"additionalProperties":false}},"additionalProperties":false},{"required":["next_billing_date"],"type":"object","properties":{"next_billing_date":{"type":"string"}},"tsAdditionalProperties":false}]},"previous_marketplace_purchase":{"title":"Marketplace Purchase","required":["account","billing_cycle","unit_count","on_free_trial","free_trial_ends_on","plan"],"type":"object","properties":{"account":{"required":["type","id","node_id","login","organization_billing_email"],"type":"object","properties":{"type":{"type":"string"},"id":{"type":"integer"},"node_id":{"type":"string"},"login":{"type":"string"},"organization_billing_email":{"type":"string"}},"additionalProperties":false},"billing_cycle":{"type":"string"},"unit_count":{"type":"integer"},"on_free_trial":{"type":"boolean"},"free_trial_ends_on":{"type":"null"},"next_billing_date":{"type":"string"},"plan":{"required":["id","name","description","monthly_price_in_cents","yearly_price_in_cents","price_model","has_free_trial","unit_name","bullets"],"type":"object","properties":{"id":{"type":"integer"},"name":{"type":"string"},"description":{"type":"string"},"monthly_price_in_cents":{"type":"integer"},"yearly_price_in_cents":{"type":"integer"},"price_model":{"type":"string"},"has_free_trial":{"type":"boolean"},"unit_name":{"type":["string","null"]},"bullets":{"type":"array","items":{"type":"string"}}},"additionalProperties":false}},"additionalProperties":false}},"additionalProperties":false}', '\\cebe\\openapi\\spec\\Schema'));
            return 'ApiClients\\Client\\Github\\OpenAPI\\WebHooks\\Schema\\MarketplacePurchase\\PendingChangeCancelled';
        } catch (\Throwable $e) {
            goto e;
        }
        e:
        try {
            $schemaValidator->validate($data, \cebe\openapi\Reader::readFromJson('{"title":"marketplace_purchase purchased event","required":["action","effective_date","sender","marketplace_purchase"],"type":"object","properties":{"action":{"enum":["purchased"],"type":"string"},"effective_date":{"type":"string"},"sender":{"required":["login","id","avatar_url","gravatar_id","url","html_url","followers_url","following_url","gists_url","starred_url","subscriptions_url","organizations_url","repos_url","events_url","received_events_url","type","site_admin","email"],"type":"object","properties":{"login":{"type":"string"},"id":{"type":"integer"},"avatar_url":{"type":"string","format":"uri"},"gravatar_id":{"type":"string"},"url":{"type":"string","format":"uri"},"html_url":{"type":"string","format":"uri"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"organizations_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"events_url":{"type":"string","format":"uri-template"},"received_events_url":{"type":"string","format":"uri"},"type":{"type":"string"},"site_admin":{"type":"boolean"},"email":{"type":"string"}},"additionalProperties":false},"marketplace_purchase":{"allOf":[{"title":"Marketplace Purchase","required":["account","billing_cycle","unit_count","on_free_trial","free_trial_ends_on","plan"],"type":"object","properties":{"account":{"required":["type","id","node_id","login","organization_billing_email"],"type":"object","properties":{"type":{"type":"string"},"id":{"type":"integer"},"node_id":{"type":"string"},"login":{"type":"string"},"organization_billing_email":{"type":"string"}},"additionalProperties":false},"billing_cycle":{"type":"string"},"unit_count":{"type":"integer"},"on_free_trial":{"type":"boolean"},"free_trial_ends_on":{"type":"null"},"next_billing_date":{"type":"string"},"plan":{"required":["id","name","description","monthly_price_in_cents","yearly_price_in_cents","price_model","has_free_trial","unit_name","bullets"],"type":"object","properties":{"id":{"type":"integer"},"name":{"type":"string"},"description":{"type":"string"},"monthly_price_in_cents":{"type":"integer"},"yearly_price_in_cents":{"type":"integer"},"price_model":{"type":"string"},"has_free_trial":{"type":"boolean"},"unit_name":{"type":["string","null"]},"bullets":{"type":"array","items":{"type":"string"}}},"additionalProperties":false}},"additionalProperties":false},{"required":["next_billing_date"],"type":"object","properties":{"next_billing_date":{"type":"string"}},"tsAdditionalProperties":false}]},"previous_marketplace_purchase":{"title":"Marketplace Purchase","required":["account","billing_cycle","unit_count","on_free_trial","free_trial_ends_on","plan"],"type":"object","properties":{"account":{"required":["type","id","node_id","login","organization_billing_email"],"type":"object","properties":{"type":{"type":"string"},"id":{"type":"integer"},"node_id":{"type":"string"},"login":{"type":"string"},"organization_billing_email":{"type":"string"}},"additionalProperties":false},"billing_cycle":{"type":"string"},"unit_count":{"type":"integer"},"on_free_trial":{"type":"boolean"},"free_trial_ends_on":{"type":"null"},"next_billing_date":{"type":"string"},"plan":{"required":["id","name","description","monthly_price_in_cents","yearly_price_in_cents","price_model","has_free_trial","unit_name","bullets"],"type":"object","properties":{"id":{"type":"integer"},"name":{"type":"string"},"description":{"type":"string"},"monthly_price_in_cents":{"type":"integer"},"yearly_price_in_cents":{"type":"integer"},"price_model":{"type":"string"},"has_free_trial":{"type":"boolean"},"unit_name":{"type":["string","null"]},"bullets":{"type":"array","items":{"type":"string"}}},"additionalProperties":false}},"additionalProperties":false}},"additionalProperties":false}', '\\cebe\\openapi\\spec\\Schema'));
            return 'ApiClients\\Client\\Github\\OpenAPI\\WebHooks\\Schema\\MarketplacePurchase\\Purchased';
        } catch (\Throwable $f) {
            goto f;
        }
        f:
        throw $f;
    }
}