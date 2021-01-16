# yii2-akademisyenders Modülü

Bu modülde kullanıcılar sitelerindeki tabloya veriler ekleyebilir/çıkarabilir/güncelleyebilir.

Bu modül ne işe yarar?

-Bu modül ile akademisyenlerin bilgileri tutularak pratik bir şekilde saklanabilir, o dönem açılan derslerin listesi alınıp yalnızca akademisyen ID ile akademisyenin adı diğer tablodan getirilerek pratik bir şekilde derslerin listesi oluşturulabilir.

Tabloların Ayrıntılı Açıklaması:

Dersler Tablosu:

![2021-01-16_23-22-07](https://user-images.githubusercontent.com/57414546/104822214-f3c06680-5851-11eb-9322-cb3dfa37394d.png)

1- Ders Oluştur Butonu: Bu buton ile ders oluşturmaya gidebilirsiniz 

![2021-01-16_23-00-01](https://user-images.githubusercontent.com/57414546/104821987-b3141d80-5850-11eb-880a-affada8b506a.png)

2- Arama Kutusu: Bu kutuya o sütundan aramak istediğinizi veriyi girebilirsiniz bu sayede yalnızca yazdığınız harfleri içeren kelimeler gelecektir.

![2021-01-16_23-25-54](https://user-images.githubusercontent.com/57414546/104822250-3c781f80-5852-11eb-870d-70abe932a9e9.png)

![2021-01-16_23-26-03](https://user-images.githubusercontent.com/57414546/104822256-47cb4b00-5852-11eb-95f5-f19ba17a750e.png)

3- Sıralama: Mavi yazılara tıklayarak mevcut sütundaki verileri A-Z ya da Z-A biçiminde sıralayabilirsiniz.

![2021-01-16_23-25-54](https://user-images.githubusercontent.com/57414546/104822250-3c781f80-5852-11eb-870d-70abe932a9e9.png)

![2021-01-16_23-27-39](https://user-images.githubusercontent.com/57414546/104822282-777a5300-5852-11eb-8561-8b2afd1553ff.png)

4- Görüntüle, Güncelle, Sil Butonları: Bu butonlar da isimleri gibi görüntüle butonuna basarak dersin bilgilerine erişebilir güncelleme yapabilir ya da silebirsiniz:
![image](https://user-images.githubusercontent.com/57414546/104822351-e0fa6180-5852-11eb-9d60-50cb6875db04.png)
Güncelle(kalem işareti) butonuna tıkladığınızda: 
![image](https://user-images.githubusercontent.com/57414546/104822366-f7082200-5852-11eb-80f3-524bb387fc19.png)

Akademisyenler Tablosu: 

![image](https://user-images.githubusercontent.com/57414546/104822424-70077980-5853-11eb-8b8b-4000d5dd8443.png)

Genel olarak dersler tablosuyla aynı özellikleri barındırır. Fakat ek olarak:

1- Akademisyen ID'si: 

Bu değer diğer tabloda görülen güncelle kısmındaki numaradır. Akademisyen ID'si kullanıcı tarafından belirlenebilir. Bu ID sayesinde dersler tablosuna akademisyenin ismi kolayca eklenebilir.(Dersler tablosunda akademisyen kısmına bu tabloda bulunan akademisyen ID yazılmalıdır.)(İlişki buradadır.)

2- En sağdaki arama kutusu: Bu kutu yalnızca kendi sütunu değil kalan sağındaki tüm sütunlarda arama gerçekleştirir. Böylece bütün dersler arasından aranabilir.

![image](https://user-images.githubusercontent.com/57414546/104822474-d4c2d400-5853-11eb-8902-e0f6b3660215.png)

![image](https://user-images.githubusercontent.com/57414546/104822506-0176eb80-5854-11eb-8c5f-55b84e38c345.png)

Görüldüğü gibi sonuç filtlenirken son satırdaki akademisyenin sütununda bulunmamasına rağmen sonraki sütünunda bulunduğu içi ekranda görüntülendi. 



# KURULUMU

Vagrant advanced Projesine Modülü Yükleme:

Öncelikle:

php: >=7.0

yiisoft/yii2: ~2.0.13

Gereklidir devam etmeden önce kurulu olduklarından emin olun.

Öncelikle Vagrant'ın kurulu olduğu yerde iken:

```
vagrant up
```

yazarak makineyi çalıştırmanız gerekmekte.

![image](https://user-images.githubusercontent.com/57414546/104822675-58c98b80-5855-11eb-9835-7512658b8bf0.png)

Daha sonra

```
vagrant ssh
```

komutu ile sanal makineye bağlanıp

```
cd /var/www/advanced
```

yazarak advanced dizinine gittikten sonra

```
composer require --prefer-dist seqhilla/yii2-akademisyenders "*"
```

![image](https://user-images.githubusercontent.com/57414546/104822807-6af7f980-5856-11eb-94bd-3637afe92338.png)
ardından

```
composer require --prefer-dist seqhilla/yii2-akademisyenders "dev-main"
```

![image](https://user-images.githubusercontent.com/57414546/104822830-82cf7d80-5856-11eb-8e26-7f78a2b0d50b.png)
yazarak paket projeye çekilir.

Devamında migration için:

```
php yii migrate/up --migrationPath=@vendor/seqhilla/migrations
```

![image](https://user-images.githubusercontent.com/57414546/104823105-a85d8680-5858-11eb-89ba-1fbea45f7267.png)
yazmanız gerekmekte.

Daha sonra yapmanız gereken: 

Kullandığınız kod düzenleme uygulamasından(Fotoğraftaki PHP Storm)

advanced/backend/config/main.php içerisinde bulunan 'modules' => [], kısmına


![image](https://user-images.githubusercontent.com/57414546/104822944-65e77a00-5857-11eb-960b-da4f650c1994.png)

```
'akademisyenders'=> [
            'class' => 'seqhilla\akademisyenders\Module',
        ]
```

yazmanız gerekmekte.

Şöyle bir şey olacak:

![image](https://user-images.githubusercontent.com/57414546/104822977-ae9f3300-5857-11eb-860e-3bdafadb7c12.png)

Kurulum tamamlandı. Şimdi tablolara erişmek için linkler:

Akademisyen tablosu-> http://advanced/backend/web/index.php?r=akademisyenders/ogrtuye/index

Dersler tablosu -> http://advanced/backend/web/index.php?r=akademisyenders/dersler/index

!!Eğer projeniz advanced değil ise advanced kısmına sitenize erişmek için yazdığınız adresi yazınız.

