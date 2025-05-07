{extends file='checkout/_partials/steps/checkout-step.tpl'}

{block name='step_content'}
  <div id="hook-display-before-carrier">
    {$hookDisplayBeforeCarrier nofilter}
  </div>

  <div class="delivery-options-list">
    {if $delivery_options|count}
      <form
        class="clearfix"
        id="js-delivery"
        data-url-update="{url entity='order' params=['ajax' => 1, 'action' => 'selectDeliveryOption']}"
        method="post"
        style="display:none;" {* <-- ukryj cały formularz dostawy *}
      >
        <div class="form-fields">
          {block name='delivery_options'}
            <div class="delivery-options">
              {* nadal generujemy opcje, ale ich nie pokażemy *}
              {foreach from=$delivery_options item=carrier key=carrier_id}
                {* puste lub ukryte - nie usuwamy JS *}
              {/foreach}
            </div>
          {/block}
        </div>
        <button type="submit" class="continue btn btn-primary float-xs-right" name="confirmDeliveryOption" value="1">
          {l s='Continue' d='Shop.Theme.Actions'}
        </button>
      </form>
    {else}
      <p class="alert alert-danger" style="display:none;">
        {l s='Unfortunately, there are no carriers available for your delivery address.' d='Shop.Theme.Checkout'}
      </p>
    {/if}
  </div>

  <div id="hook-display-after-carrier">
    {$hookDisplayAfterCarrier nofilter}
  </div>

  <div id="extra_carrier"></div>
{/block}
