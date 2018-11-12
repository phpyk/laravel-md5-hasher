# laravel-md5-hasher

安装：

`composer require phpyk/hasher`

配置：

修改config/app.php，在providers数组中添加

`
\Phpyk\Hasher\MD5HasherProvider::class
`

使用：

`

$value = '123456';

$hasher = new MD5Hasher();

$hashValue = $hasher->make($value);

`
