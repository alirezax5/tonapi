# tonapi


<div dir="rtl">

## درباره پروژه

با استفاده از این پروژه شما می توانید با استفاده از php به api سرویس tonapi.io ارتباط برقرار کنید

## نصب
برای نصب دستور زیر را در cmd اجرا کنید (نکته : باید از قبل composer را نصب کرده باشید.)

</div>

```
composer require alirezax5/tonapi
```

<div dir="rtl">

فانکشن / متد های این پروژه براساس  نام گذاری [tonapi](https://tonapi.io/api-v2) نام گذاری شده است. 

جهت ارتباط با متد ها نیاز نیست شی بسازید و متد ها به صورت static تعریف شده اند.

## مثال ها

1 - دریافت آخرین تراکنش های یک حساب :

</div>

```php
<?php
include 'vendor/autoload.php';
\alirezax5\Tonapi\Tonapi::getAccountEvents('UQBnlnOGefCkwgtO7IZdOBFuoojkpKgK3mI1GmH3MH_gG0A9',50);
```
<div dir="rtl">
در مثال بالا به جای UQBnlnOGefCkwgtO7IZdOBFuoojkpKgK3mI1GmH3MH_gG0A9 آدرس کیف پول مورد نظر و به جای 50 تعداد رکورد های دریافتی را وارد نمایید.


2 - دریافت اطلاعات یک Jetton :


</div>

```php
<?php
include 'vendor/autoload.php';
\alirezax5\Tonapi\Tonapi::getJettonInfo('EQD-cvR0Nz6XAyRBvbhz-abTrRC6sI5tvHvvpeQraV9UAAD7')
```

<div dir="rtl">
jetton ها همان توکن های بر بستر شبکه تون هستند مانند ناتکوین و داگز , با استفاده از این متد می توانید اطلاعات این توکن هارا بدست آورید


3 - دریافت اطلاعات یک کیف پول : 

</div>

```php
<?php
include 'vendor/autoload.php';
 \alirezax5\Tonapi\Tonapi::getAccount('UQBnlnOGefCkwgtO7IZdOBFuoojkpKgK3mI1GmH3MH_gG0A9');
```
<div dir="rtl">

برای دریافت اطلاعات یک کیف پول میتوانید مانند مثال بالا عمل کنید 


برای سایر مثال ها حتما به مستندات خود tonapi سر بزنید , نام گذاری متد ها طبق سایت نام گذاری شده.


## فانکشن های کمکی

</div>

```php
<?php
include 'vendor/autoload.php';
getTransactions('address');
```

<div dir="rtl">

با استفاده از فانکشن بالا میتوانیم آخرین تراکنش های یک کیف پول را بدست آوریم

</div>

```php
<?php
include 'vendor/autoload.php';
convertSatoshiToNumber('price');
```

<div dir="rtl">
مقدار حجم ارز و توکن های نمایش داده در api ها به صورت ساتوشی می باشد , برای تبدیل به یک واحد غیر ساتوشی می توانید از فانکشن بالا استفاده کنید
</div>

<div dir="rtl">

## ایده برای ایجاد سرویس پرداخت خودکار

اگر بخواهید برای پروژه خود یک سیستم پرداخت مبتنی بر ton ایجاد کنید پشنهاد میکنم در سرویس خود آدرس ولت و کامنت مربوط به فاکتور را به کاربر نمایش دهید تا در موقع ارسال یک تراکنش آن کامنت را ارسال کند و شما براساس آن کامنت و تراکنش می توانید یک سرویس پرداخت خودکار بسازید.

به مثال زیر که تراکنش هارا دریافت و اعتبار کاربر را افزایش می دهد دقت کنید:


</div>

```php
<?php
include 'vendor/autoload.php';
$getList = getTransactions('YOU_WALLET');
function checkTonPay($item, $factorId)
{
        $amount =  $item['amount'];
        $hash =  $item['hash'];
        $price = {price} * $amount;
        $symbol = 'ton';
             
}

function checkJettonPay($item, $factorId)
{
    $amount =  $item['amount'];
    $hash =  $item['hash'];
    $price = {price} * $amount;
    $symbol = $item['item']['symbol'];
   
}

foreach ($getList as $item) {
    $status = $item['status'];
    $type = $item['type'];
    $comment = $item['comment'];

    if ($status == 'ok' && ($type == 'ton' || $type == 'jetton')) {
        if (isset($comment)) {
            $factorId = $comment;
        


            if ($type == 'ton')
                checkTonPay($item, $factorId);
            else
                checkJettonPay($item, $factorId);

        }
    }
}
```

<div dir="rtl">

## کانال بنده : 

 [alireza_x5](https://t.me/alireza_x5)

</div>

<div dir="rtl">

## حمایت : 

جهت حمایت از بنده لطفا  ستاره پروژه را فعال کنید 

جهت دونیت میتوانید از ادرس زیر استفاده کنید
</div>

TON:

```
UQBnlnOGefCkwgtO7IZdOBFuoojkpKgK3mI1GmH3MH_gG0A9
```