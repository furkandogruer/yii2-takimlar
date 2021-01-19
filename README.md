# yii2-takimlar

composer require furkandogruer/yii2-takimlar

php yii migrate -migrationPath= @vendor/furkandogruer/console/migrations
Futbol takımları ve maç sonuçları modülü

# Hakkında
Bu modül aracılığıyla kiralama oluşturulabilir.

# Kurulum

Modül kurulumu vagrant ve yii2-advanced template'i üzerinden anlatılacaktır. Modül kurulumu için öncelikle vagrant üzerinde çalışan yii2-advanced kurulumunu gerçekleştiriniz.

ssh veya vagrant ssh ile vagrant üzerinde yii projenizin ana dizinine gidiniz.(Örneğin /var/www/advanced)

```
 composer require --prefer-dist furkandogruer/yii2-takimlar "dev-main"
 ```

 komutu ile packagist üzerinden modül kurulumunu gerçekleştiriniz.
    
Daha sonrasında yii projenizin ana dizininde backend\config\main.php dosyasını düzenlemek için açınız. Aşağıda gösterildiği şekilde düzenlemeyi yapınız.

```
    'modules' => [
		'takimlar' => 
			[	
				'class' => 'furkandogruer\takimlar\Module',
			],
	],

 ```

Modülün çalışabilmesi için son olarak migration işleminin gerçekleştirilmesi gereklidir.

ssh bağlantısı ile vagrant üzerinde proje ana dizinindeyken alttaki komut çalıştırılmalıdır.

```
    php yii migrate/up --migrationPath=@vendor/furkandogruer/yii2-takımlar/src/console/migrations
 ```

 Artık migration işlemimiz gerçekleştirilmiştir. Modülümüz çalışır hale gelmiştir.

 Modülü test etmek için tarayıcınızda 

```
    http://alanadi/frontend/web/index.php?r=movie
```
 adresine gidiniz. Modül anasayfasını karşınızda göreceksiniz.

## Migrations

Modül içerisindeki migration dosyasında modül içerisinde kullanılacak 2 adet tablo oluşturulmuştur. Tablolar arasında ilişki kurulamamıştırtakimlar ve sonuclar için 2 adet tablo bulunmaktadır. 

