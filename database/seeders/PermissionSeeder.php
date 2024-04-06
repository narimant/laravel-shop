<?php

namespace Database\Seeders;

use Carbon\Carbon;
use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->insert([
            //market brand permission
            [
                'name' => 'shop_brand_index',
                'description' => 'نمایش لیست همه برندهای فروشگاه',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'shop_brand_create',
                'description' => 'نمایش صفحه ایجاد برند فروشگاه',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'shop_brand_store',
                'description' => 'عملیات ذخیره برند فروشگاه حدید',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'shop_brand_edit',
                'description' => 'نمایش صفحه ویرایش برند فروشگاه',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'shop_brand_update',
                'description' => 'عملیات ذخیره ویرایش برند فروشگاه',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'shop_brand_delete',
                'description' => 'عملیات حذف برند فروشگاه',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            //market category permission
            [
                'name' => 'shop_category_index',
                'description' => ' نمایش لیست همه دسته بندی های فروشگاه',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'shop_category_create',
                'description' => 'نمایش صفحه ایجاد دسته بندی فروشگاه',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'shop_category_store',
                'description' => 'عملیات ذخیره کردن دسته بندی جدید فروشگاه',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'shop_category_edit',
                'description' => 'نمایش صفحه ویرایش دسته بندی فروشگاه',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'shop_category_Update',
                'description' => 'عملیات ذخیره ویرایش دسته بندی فروشگاه',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'shop_category_delete',
                'description' => 'عملیات حذف دسته بندی فروشگاه',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],


            //market comment permission
            [
                'name' => 'shop_comment_index',
                'description' => ' نمایش لیست همه کامنت های فروشگاه',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'shop_comment_show',
                'description' => 'نمایش جزییات کامنت فروشگاه',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'shop_comment_status',
                'description' => 'عملیات تغییر وضعیت استاتوس کامنت فروشگاه',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],



            //market delivery permission
            [
                'name' => 'shop_delivery_index',
                'description' => ' نمایش لیست همه روش های ارسال',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'shop_delivery_create',
                'description' => 'نمایش صفحه ایجاد روش های ارسال',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'shop_delivery_store',
                'description' => 'عملیات ذخیره کردن روش های ارسال',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'shop_delivery_edit',
                'description' => 'نمایش صفحه ویرایش روش های ارسال',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'shop_delivery_Update',
                'description' => 'عملیات ذخیره ویرایش روش های ارسال',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'shop_delivery_delete',
                'description' => 'عملیات حذف روش های ارسال',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],

            [
                'name' => 'shop_delivery_status',
                'description' => 'عملیات تغییر وضعیت استاتوس روش های ارسال',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],



            //market Discount permission
            [
                'name' => 'shop_discount_copan_index',
                'description' => ' نمایش لیست همه  تخفیف ها ',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'shop_discount_copan_create',
                'description' => 'نمایش صفحه ایجاد کوپن تخفیف',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'shop_discount_copan_store',
                'description' => 'عملیات ذخیره کردن کوپن تخفیف',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'shop_discount_copan_edit',
                'description' => 'نمایش صفحه ویرایش کوپن تخفیف',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'shop_discount_copan_Update',
                'description' => 'عملیات ذخیره کوپن تخفیف',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'shop_discount_copan_delete',
                'description' => 'عملیات حذف کوپن تخفیف',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],

            // common discount
            [
                'name' => 'shop_common_discount_index',
                'description' => ' نمایش لیست همه تخفیف های عمومی ',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'shop_common_discount_create',
                'description' => 'نمایش صفحه ایجاد  تخفیف عمومی',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'shop_common_discount_store',
                'description' => 'عملیات ذخیره کردن  تخفف عمومی',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'shop_common_discount_edit',
                'description' => 'نمایش صفحه ویرایش  تخفیف عمومی',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'shop_common_discount_Update',
                'description' => 'عملیات ذخیره  تخفیف عمومی',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'shop_common_discount_delete',
                'description' => 'عملیات حذف  تخفیف عمومی',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],


            // amazing sale
            [
                'name' => 'shop_amazing_sale_index',
                'description' => ' نمایش لیست همه فروش شگفت انگیز ',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'shop_amazing_sale_create',
                'description' => 'نمایش صفحه ایجاد   فروش شگفت انگیز',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'shop_amazing_sale_store',
                'description' => 'عملیات ذخیره کردن  فروش شگفت انگیز',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'shop_amazing_sale_edit',
                'description' => 'نمایش صفحه ویرایش  فروش شگفت انگیز',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'shop_amazing_sale_Update',
                'description' => 'عملیات ذخیره  فروش شگفت انگیز',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'shop_amazing_sale_delete',
                'description' => 'عملیات حذف  فروش شگفت انگیز',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],

            //market gallery permission
            [
                'name' => 'shop_gallery_index',
                'description' => 'نمایش لیست همه عکس های گالری محصول',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'shop_gallery_create',
                'description' => 'نمایش صفحه ایجاد عکس گالری محصول',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'shop_gallery_store',
                'description' => 'عملیات ذخیره کردن عکس گالری محصول',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'shop_gallery_delete',
                'description' => 'عملیات حذف عکس گالری محصول',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],


            //market Guarantee permission
            [
                'name' => 'shop_guarantee_index',
                'description' => 'نمایش لیست همه گارانتی های محصول',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'shop_guarantee_create',
                'description' => 'نمایش صفحه ایجاد گارانتی محصول',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'shop_guarantee_store',
                'description' => 'عملیات ذخیره کردن گارانتی محصول',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'shop_guarantee_delete',
                'description' => 'عملیات حذف  گارانتی محصول',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],

            //market order permission
            [
                'name' => 'shop_new_order',
                'description' => 'نمایش لیست  سفارشات جدید',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'shop_sending_order',
                'description' => 'نمایش لیست همه   سفارشات در حال ارسال',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'shop_unpaid_order',
                'description' => 'نمایش لیست همه   سفارشات پرداخت نشده',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'shop_canceled_order',
                'description' => 'نمایش لیست همه   سفارشات ابطال شده',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'shop_returned_order',
                'description' => 'نمایش لیست همه   سفارشات برگشتی',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'shop_all_order',
                'description' => 'نمایش لیست همه  سفارشات',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'shop_show_order',
                'description' => 'نمایش  سفارش ',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'shop_detail_order',
                'description' => 'نمایش  جزییات سفارش',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'shop_change_order_status',
                'description' => 'عملیات تغییر وضعیت سفارش',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'shop_ cancel_order',
                'description' => 'عملیات کنسل کردن سفارش',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'shop_change_send_status',
                'description' => 'تغییر وضعیت ارسال سفارش',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],

            //market  payment permission
            [
                'name' => 'shop_payment_index',
                'description' => 'نمایش لیست همه پرداخت ها',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'shop_payment_offline',
                'description' => 'نمایش لیست همه پرداخت های آفلاین',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'shop_payment_online',
                'description' => 'نمایش لیست همه پرداخت های آنلاین',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'shop_payment_cash',
                'description' => 'نمایش لیست همه پرداخت های نقد',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'shop_payment_canceled',
                'description' => 'نمایش لیست همه پرداخت های کنسل شده',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'shop_payment_returned',
                'description' => 'عملیات بازگرداندن پرداخت',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'shop_payment_show',
                'description' => 'نمایش جزییات پرداخت',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],

            //market Product Color permission
            [
                'name' => 'shop_product_color_index',
                'description' => 'نمایش لیست همه رنگ های محصول',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'shop_product_color_create',
                'description' => 'نمایش صفحه ایجاد رنگ محصول',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'shop_product_color_store',
                'description' => 'عملیات ذخیره کردن رنگ محصول',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'shop_product_color_delete',
                'description' => 'عملیات حذف  رنگ محصول',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],

            //market product permission
            [
                'name' => 'shop_product_index',
                'description' => 'نمایش لیست همه محصولات ',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'shop_product_create',
                'description' => 'نمایش صفحه ایجاد محصول ',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'shop_product_store',
                'description' => 'عملیات ذخیره محصول حدید',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'shop_product_edit',
                'description' => 'نمایش صفحه ویرایش محصول',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'shop_product_update',
                'description' => 'عملیات ذخیره ویرایش محصول',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'shop_product_delete',
                'description' => 'عملیات حذف  محصول',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],


            //market product Property permission
            [
                'name' => 'shop_property_index',
                'description' => 'نمایش لیست همه ویژگی کالاها ',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'shop_property_create',
                'description' => 'نمایش صفحه ایجاد ویژگی کالا ',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'shop_property_store',
                'description' => 'عملیات ذخیره ویژگی کالا حدید',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'shop_property_edit',
                'description' => 'نمایش صفحه ویرایش ویژگی کالا',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'shop_property_update',
                'description' => 'عملیات ذخیره ویرایش ویژگی کالا',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'shop_property_delete',
                'description' => 'عملیات حذف  ویژگی کالا',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],


            //market product Property Value permission
            [
                'name' => 'shop_property_value_index',
                'description' => 'نمایش لیست همه مقدار ویژگی کالاها ',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'shop_property_value_create',
                'description' => 'نمایش صفحه ایجاد مقدار ویژگی کالا ',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'shop_property_value_store',
                'description' => 'عملیات ذخیره مقدار ویژگی کالا حدید',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'shop_property_value_edit',
                'description' => 'نمایش صفحه ویرایش مقدار ویژگی کالا',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'shop_property_value_update',
                'description' => 'عملیات ذخیره ویرایش مقدار ویژگی کالا',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'shop_property_value_delete',
                'description' => 'عملیات حذف  مقدار ویژگی کالا',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],


            //market product store permission
            [
                'name' => 'shop_store_index',
                'description' => 'نمایش لیست همه انبار کالاها ',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'shop_add_to_store',
                'description' => 'نمایش    فرم اضافه کردن تعداد کالا ',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'shop_store_store',
                'description' => 'عملیات ذخیره افزودن تعداد کالا',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'shop_store_edit',
                'description' => 'نمایش فرم ویرایش تعداد کالا',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'shop_store_update',
                'description' => 'عملیات ذخیره ویرایش  تعداد کالا',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],

            // Banner perimssion
            [
                'name' => 'banner_index',
                'description' => 'نمایش لیست تمام بنرها',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'banner_create',
                'description' => 'نمایش فرم ایجاد بنر',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'banner_store',
                'description' => 'عملیات ذخیره بنر جدید',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'banner_edit',
                'description' => 'نمایش فرم ویرایش بنر',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'banner_update',
                'description' => 'عملیات ذخیره ویرایش بنر',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'banner_destroy',
                'description' => 'عملیات حذف بنر',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'banner_status',
                'description' => 'عملیات تغییر وضعیت نمایش بنر',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],

            // content category perimssion
            [
                'name' => 'content_category_index',
                'description' => 'نمایش لیست تمام دسته بندی محتوا',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'content_category_create',
                'description' => 'نمایش فرم ایجاد دسته بندی محتوا',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'content_category_store',
                'description' => 'عملیات ذخیره دسته بندی محتوای جدید',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'content_category_edit',
                'description' => 'نمایش فرم ویرایش دسته بندی مختوا',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'content_category_update',
                'description' => 'عملیات ذخیره ویرایش دسته بندی مختوا',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'content_category_destroy',
                'description' => 'عملیات حذف دسته بندی مختوا',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'content_category_status',
                'description' => 'عملیات تغییر وضعیت نمایش دسته بندی مختوا',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],


            // content comment perimssion
            [
                'name' => 'content_comment_index',
                'description' => 'نمایش لیست تمام نظرات  محتوا',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'content_comment_show',
                'description' => 'نمایش کامل نظر محتوا',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'content_comment_status',
                'description' => 'عملیات تغییر وضعیت نمایش نظر محتوا',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'content_comment_approved',
                'description' => ' عملیات تغییر وضعیت نظر محتوا',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'content_comment_answer',
                'description' => 'عملیات جواب دادن به نظر محتوا',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],


            // content Frequently Asked Questions perimssion
            [
                'name' => 'content_faq_index',
                'description' => 'نمایش لیست تمام سوالات متداول',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'content_faq_create',
                'description' => 'نمایش فرم ایجاد سوالات متداول',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'content_faq_store',
                'description' => 'عملیات ذخیره سوالات متداول',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'content_faq_edit',
                'description' => 'نمایش فرم ویرایش سوالات متداول',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'content_faq_update',
                'description' => 'عملیات ذخیره ویرایش سوالات متداول',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'content_faq_destroy',
                'description' => 'عملیات حذف سوالات متداول',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'content_faq_status',
                'description' => 'عملیات تغییر وضعیت نمایش سوالات متداول',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],


            // content menu perimssion
            [
                'name' => 'content_menu_index',
                'description' => 'نمایش لیست تمام  منوها',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'content_menu_create',
                'description' => 'نمایش فرم ایجاد  منو',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'content_menu_store',
                'description' => 'عملیات ذخیره  منو',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'content_menu_edit',
                'description' => 'نمایش فرم ویرایش  منو',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'content_menu_update',
                'description' => 'عملیات ذخیره ویرایش  منو',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'content_menu_destroy',
                'description' => 'عملیات حذف  منو',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],


            // content page perimssion
            [
                'name' => 'content_page_index',
                'description' => 'نمایش لیست تمام  منوها',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'content_page_create',
                'description' => 'نمایش فرم ایجاد  منو',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'content_page_store',
                'description' => 'عملیات ذخیره  منو',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'content_page_edit',
                'description' => 'نمایش فرم ویرایش  منو',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'content_page_update',
                'description' => 'عملیات ذخیره ویرایش  منو',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'content_page_destroy',
                'description' => 'عملیات حذف  منو',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],


            // content post perimssion
            [
                'name' => 'content_post_index',
                'description' => 'نمایش لیست تمام  پست ها',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'content_post_create',
                'description' => 'نمایش فرم ایجاد  پست',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'content_post_store',
                'description' => 'عملیات ذخیره  پست',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'content_post_edit',
                'description' => 'نمایش فرم ویرایش  پست',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'content_post_update',
                'description' => 'عملیات ذخیره ویرایش  پست',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'content_post_destroy',
                'description' => 'عملیات حذف  پست',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'content_post_status',
                'description' => 'عملیات تغییر وضعیت نمایش  پست',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'content_post_commentable',
                'description' => 'عملیات اجازه ارسال کامنت برای  پست',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],


            // content setting perimssion
            [
                'name' => 'content_setting_index',
                'description' => 'نمایش تنظیمات سئو',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'content_setting_edit',
                'description' => 'نمایش فرم ویرایش  سئو',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'content_setting_update',
                'description' => 'عملیات ویرایش  سئو',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],

            // content admin_user perimssion
            [
                'name' => 'admin_user_index',
                'description' => 'نمایش لیست تمام  ادمین ها',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'admin_user_create',
                'description' => 'نمایش فرم ایجاد  ادمین',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'admin_user_store',
                'description' => 'عملیات ذخیره  ادمین',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'admin_user_edit',
                'description' => 'نمایش فرم ویرایش  ادمین',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'admin_user_update',
                'description' => 'عملیات ذخیره ویرایش  ادمین',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'admin_user_destroy',
                'description' => 'عملیات حذف  ادمین',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'admin_user_activation',
                'description' => 'عملیات تغییر وضعیت اکتیو بودن ادمین  ',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'admin_user_status',
                'description' => 'عملیات تغییر وضعیت ادمین ',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'admin_user_roles',
                'description' => 'نمایش فرم نقش های موجود',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'admin_user_roles_tore',
                'description' => 'عملیات ذخیره همگام سازی نقش با کاربر ',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'admin_user_permissions',
                'description' => 'نمایش فرم مجوز های کاربری',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'admin_user_permissions_store',
                'description' => 'عملیات ذخیره همگام سازی مجوز ها با کاربر   ',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],



            // content customer_user perimssion
            [
                'name' => 'customer_user_index',
                'description' => 'نمایش لیست تمام  کاربر ها',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'customer_user_create',
                'description' => 'نمایش فرم ایجاد  کاربر',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'customer_user_store',
                'description' => 'عملیات ذخیره  کاربر',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'customer_user_edit',
                'description' => 'نمایش فرم ویرایش  کاربر',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'customer_user_update',
                'description' => 'عملیات ذخیره ویرایش  کاربر',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'customer_user_destroy',
                'description' => 'عملیات حذف  کاربر',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'customer_user_activation',
                'description' => 'عملیات تغییر وضعیت اکتیو بودن کاربر  ',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'customer_user_status',
                'description' => 'عملیات تغییر وضعیت کاربر ',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],




            // content permission_user perimssion
            [
                'name' => 'permission_user_index',
                'description' => 'نمایش لیست تمام  مجوز ها',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'permission_user_create',
                'description' => 'نمایش فرم ایجاد  مجوز',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'permission_user_store',
                'description' => 'عملیات ذخیره  مجوز',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'permission_user_edit',
                'description' => 'نمایش فرم ویرایش  مجوز',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'permission_user_update',
                'description' => 'عملیات ذخیره ویرایش  مجوز',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'permission_user_destroy',
                'description' => 'عملیات حذف  مجوز',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],


              // content role_user perimssion
              [
                'name' => 'role_user_index',
                'description' => 'نمایش لیست تمام  نقش ها',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'role_user_create',
                'description' => 'نمایش فرم ایجاد  نقش',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'role_user_store',
                'description' => 'عملیات ذخیره  نقش',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'role_user_edit',
                'description' => 'نمایش فرم ویرایش  نقش',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'role_user_update',
                'description' => 'عملیات ذخیره ویرایش  نقش',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'role_user_destroy',
                'description' => 'عملیات حذف  نقش',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'role_permission_user_form',
                'description' => 'فرم همگام سازی مجوز ها برای نقش',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'role_permission_user_update',
                'description' => 'عملیات ذخیره همگام سازی مجوز ها برای نقش',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],





        ]);
    }
}
