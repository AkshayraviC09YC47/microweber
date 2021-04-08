<?php

/*

type: layout

name: Checkout V2

description: Checkout V2

*/
?>
<div class="mw-shipping-and-payments">
    <?php if (count($payment_options) > 0): ?>
        <div class="row">
            <div class="col-xs-12 col-md-6 col-md-offset-6 mb-3">
                <h4 class="mb-1" field="checkout_payment_information_title" rel="global" rel_id="<?php print $params['id'] ?>"><?php _e("Payment method"); ?></h4>
                <small class="text-muted d-block mb-2"> <?php _e("How you would like to pay"); ?></small>
            </div>
        </div>

        <div class="methods">
            <div class="row">
                <div class="col-xs-12 col-md-6 m-b-10">
                    <ul name="payment_gw" class="mw-payment-gateway mw-payment-gateway-<?php print $params['id']; ?>">
                        <?php $count = 0;
                        foreach ($payment_options as $payment_option) : $count++; ?>
                            <li>
                                <div class="form-group my-1">
                                    <div class="custom-control custom-radio checkout-v2-radio d-flex align-self-center pl-0 pt-3 ">

                                        <label class="mx-2 mb-0" for="payment-option-<?php print $count; ?>">

                                        <input type="radio" id="payment-option-<?php print $count; ?>" <?php if ($count == 1): ?> checked="checked" <?php endif; ?>  value="<?php print  $payment_option['gw_file']; ?>"  name="payment_gw"/>

                                            <img src="<?php echo $payment_option['icon']; ?>" style="width:32px;" />

                                           <?php print  _e($payment_option['name']); ?>

                                        </label>

                                    </div>
                                </div>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>

            </div>

        </div>
    <?php endif; ?>

    <div id="mw-payment-gateway-selected-<?php print $params['id']; ?>">
        <?php //var_dump($payment_options); ?>
        <?php if (isset($payment_options[0])): ?>
            <module type="<?php print $payment_options[0]['gw_file'] ?>"/>
        <?php endif; ?>
    </div>

</div>