<?php
// Text
$_['text_title'] = 'PayPal';
$_['text_reason'] 				= '回传讯息';
$_['text_attn_email']			= '请联系: Paypal 订单 %s 需要人工验证';
$_['text_testmode']	   	 		= '注意!!! 目前处于 \'Sandbox Mode\'. 测试模式.';

// Error
$_['error_referer'] 			= 'PP_Standard -  IPN/PDT 连结 URL "%s" 并不是 Paypal.com. 帐单需要人工验证';
$_['error_amount_mismatch']		= 'PP_Standard - IPN/PDT 总金额 "%s" 和商店总金额 "%s"不同. 帐单需要人工验证';
$_['error_email_mismatch']		= 'PP_Standard -  IPN/PDT 电子邮件和卖家不同. 帐单需要人工验证';
$_['error_verify']				= 'PP_Standard - IPN/PDT 自动验证失败. 原因通常是用户地址或姓名错误.需人工验证';
$_['error_non_complete']		= 'PP_Standard - 这个订单的状态为非complete. 需要再确认.';
$_['error_no_data']				= 'PP_Standard - 无回传资料.';

?>