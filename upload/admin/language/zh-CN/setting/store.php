<?php
// Heading
$_['heading_title']           = '商店设置(Settings)';

// Text
$_['text_success']            = '已成功修改商店的设置!';
$_['text_image_manager']      = '图像管理(Image Manager)';
$_['text_default']            = '预设(Default)';
$_['text_edit_store']         = '商店(Edit Store):';

// Entry
$_['entry_name']              = '商店名称(Store Name):';
$_['entry_url']               = '商店网址(Store URL):<br /><span class="help">请输入你商店的完整网址. 注意在最后加上 \'/\' . 例: http://www.yourdomain.com/path/</span>';
$_['entry_ssl']               = '使用SSL加密(Use SSL):<br /><span class="help">要使用SSL，你需要在主机安装SSL及在设定档内设定SSL地址(To use SSL check with your host if a SSL certificate is installed and added the SSL URL to the admin config file.)</span>';
$_['entry_title']             = '首页标题(Title):';
$_['entry_meta_description']  = 'SEO 关键内容(Meta Tag Description):';
$_['entry_template']          = '模板(Template):';
$_['entry_description']       = '欢迎词(Welcome Message):';
$_['entry_country']           = '国家(Country):';
$_['entry_zone']              = '地区(Region / State):';
$_['entry_language']          = '语言(Language):';
$_['entry_currency']          = '货币(Currency):';
$_['entry_tax']               = '显示含税价格(Display Prices With Tax):';
$_['entry_customer_group']    = '预设会员群组(Customer Group):';
$_['entry_customer_price']    = '登入后才显示价格(Login Display Prices):';
$_['entry_customer_approval'] = '加入会员是否需要审核(Approve New Customers):<br /><span class="help">新注册会员是否需要审核后才能登入(Don\'t allow new customer to login until their account has been approved.)</span>';
$_['entry_guest_checkout']    = '来宾结帐(Guest Checkout):<br /><span class="help">允许未注册会员直接结帐，此项交易不适用于可下载的产品(Allow customers to checkout without creating an account. This will not be available when a downloadable product is in the shopping cart.)</span>';
$_['entry_account']           = '注册条款(Account Terms):';
$_['entry_checkout']          = '结帐条款(Checkout Terms):';
$_['entry_order_status']      = '预设订单状态(Order Status):';
$_['entry_stock_display']     = '显示库存数量(Display Stock):';
$_['entry_stock_check']       = '缺货时要显示的讯息(Show Out Of Stock):';
$_['entry_stock_checkout']    = '预售(Stock Checkout):<br /><span class="help">没有库存，仍然允许结帐(Allow customers to still checkout if the products they are ordering are not in stock.)</span>';
$_['entry_logo']              = '商店LOGO(Store Logo):';
$_['entry_icon']              = '网页favicon图(Icon):<br /><span class="help">必须为PNG格式尺寸为16px X 16px (The icon should be a PNG that is 16px x 16px.)</span>';
$_['entry_image_thumb']       = '商品图尺寸(Product Image Thumb Size):';
$_['entry_image_popup']       = '商品放大图尺寸(Product Image Popup Size):';
$_['entry_image_category']    = '目录图尺寸(Category List Size):';
$_['entry_image_product']     = '商品列表时尺寸(Product List Size):';
$_['entry_image_additional']  = '商品附加图尺寸(Additional Product Image Size):';
$_['entry_image_related']     = '关联商品图尺寸(Related Product Image Size):';
$_['entry_image_cart']        = '购物车内商品图尺寸(Cart Image Size):';
$_['entry_catalog_limit'] 	  = '前台列表每页商品显示的数量(Default Items per Page (Catalog)):<br /><span class="help">商品分类中每页显示多少商品(Determines how many catalog items are shown per page (products, categories, etc))</span>';
$_['entry_cart_weight']       = '购物车内显示商品重量(Display Weight on Cart Page):';

// Button
$_['button_add_store']        = '创建商店(Create A New Store)';
$_['button_delete_store']     = '删除商店(Delete Store)';

// Error
$_['error_permission']           = '您没有权限更改商店设置!';
$_['error_name']                 = '商店名称必须在3至32个字元之间!';
$_['error_url']                  = '商店网址无效!';
$_['error_title']                = '首页标题必须在3到32个数字之间!';
$_['error_image_thumb']          = '请输入商品预览图片尺寸!';
$_['error_image_popup']          = '请输入商品放大图片尺寸!';
$_['error_image_category']       = '请输入商品分类中的图片尺寸!';
$_['error_image_product']        = '请输入商品页面中的图片尺寸!';
$_['error_image_additional']     = '请输入附加商品图像尺寸!';
$_['error_image_related']        = '请输入关联商品图像尺寸!';
$_['error_image_cart']           = '请输入购物车中的商品图像尺寸!';
$_['error_store']             = '商店无法删除，因为已经存在 %s 订单!';
$_['error_required_data']        = '尚有资料未输入!';
$_['error_limit']                = '限制请求!';
?>