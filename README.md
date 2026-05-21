# Turkpin API Entegrasyon Projesi

<p align="center">
  <img src="https://assets.turkpin.com/logo/white.webp" alt="Turkpin Logo" width="200"/>
</p>

<p align="center">
  <strong>Turkpin Bayi API Entegrasyon Test Projesi</strong><br>
  Yazılım Geliştirici İşe Alım Süreci
</p>

---

## Turkpin Hakkında

Turkpin, Türkiye'nin önde gelen dijital ürün ve hizmet sağlayıcısıdır. Oyun kodları, dijital içerikler ve çeşitli online hizmetlerde güvenilir çözümler sunmaktayız. Bayilerimize sunduğumuz API altyapısı ile entegrasyon hizmetleri vermekte ve bu alanda sürekli gelişim göstermekteyiz.

## Proje Amacı

Bu proje, yazılım geliştirici adaylarımızın teknik yetkinliklerini ve problem çözme becerilerini değerlendirmek amacıyla hazırlanmıştır. Gerçek iş süreçlerimizde kullandığımız API'lerin entegrasyonu ve frontend geliştirme becerilerini test etmektedir.

## Proje Genel Bakış

Mevcut web uygulamasına Turkpin Bayi API'sini entegre ederek, dinamik oyun ve ürün listeleme sistemi ile sipariş yönetimi geliştirmeniz beklenmektedir.

### Mevcut Proje Yapısı
- **Backend**: PHP 8.x, Composer, PSR-4 autoloading
- **Template Engine**: Smarty
- **Frontend**: Bootstrap 5, Vanilla JavaScript
- **Routing**: Bramus Router
- **Çoklu Dil Desteği**: TR/EN

## Sistem Gereksinimleri

- **PHP**: 8.0 veya üzeri
- **Composer**: 2.x
- **Web Server**: Apache/Nginx
- **İnternet Bağlantısı**: API erişimi için gerekli
- **IP Whitelisting**: Test API'si için gerekli

## Kurulum

### 1. Projeyi Forklayın
- Bu repository'yi kendi GitHub hesabınıza fork edin
- Fork ettiğiniz repository'yi klonlayın
```bash
git clone https://github.com/kullaniciadi/interview-test.git
cd interview-test
```

### 2. Bağımlılıkları Yükleyin
```bash
composer install
```

### 3. Web Server Yapılandırması
- Document root'u proje klasörüne ayarlayın
- PHP'nin çalıştığından emin olun
- `mod_rewrite` modülünün aktif olduğunu kontrol edin

### 4. API Erişimi
- IP adresinizi `integration@turkpin.com` adresine gönderin
- Whitelist işlemi tamamlandıktan sonra API'yi kullanabilirsiniz

## API Dokümantasyonu

### Test Ortamı Bilgileri
- **API URL**: `https://www.turkpin.net/api.php`
- **Test Kullanıcı**: `api@turkpin.net`
- **Test Şifre**: `@.nwjExrK4U5b_S@y`
- **Dokümantasyon**: [https://dev.turkpin.com](https://dev.turkpin.com)

### Temel API Endpoints
- Oyun listesi çekme
- Oyuna ait ürün listesi çekme
- Sipariş oluşturma
- Sipariş durumu sorgulama

## Görevler ve Gereksinimler

### Ana Gereksinimler

#### 1. Oyun Listesi Entegrasyonu
- Ana sayfadaki select dropdown'a API'dan oyun listesini yükleyin
- Sayfa yüklendiğinde oyun listesi boş olmalı
- Varsayılan seçenek: "Oyun Seçiniz" veya benzeri

#### 2. Dinamik Ürün Listesi
- Oyun seçildiğinde, seçilen oyuna ait ürünler API'dan çekilmeli
- Ürün listesi mevcut tablo yapısında gösterilmeli
- Oyun seçilmediğinde ürün listesi görünmemeli

#### 3. Sipariş Sistemi
- Kullanıcıdan sipariş için gerekli bilgileri toplayın
- API'ya sipariş gönderme fonksiyonunu implement edin
- Form validasyonu ve hata kontrolü yapın

#### 4. Sonuç Gösterimi
- Sipariş sonucunu modal dialog ile gösterin
- Başarılı/başarısız durumları farklı stillerle gösterin
- Sipariş detaylarını kullanıcıya sunun

### Teknik Gereksinimler
- PHP OOP yaklaşımı kullanın
- Mevcut proje yapısını koruyun
- Responsive tasarım korunmalı
- Çoklu dil desteği korunmalı
- Error handling implement edin
- Clean code principles uygulayın

## Değerlendirme Kriterleri

### Temel Kriterler (Zorunlu)
- **Fonksiyonalite**: Tüm gereksinimler çalışıyor mu?
- **API Entegrasyonu**: Doğru şekilde entegre edilmiş mi?
- **Kullanıcı Deneyimi**: Akıcı ve anlaşılır mı?
- **Hata Yönetimi**: Error handling uygulanmış mı?

### Kod Kalitesi Kriterleri
- **Code Structure**: Temiz ve okunabilir kod
- **Best Practices**: PHP ve JavaScript best practices
- **Security**: Güvenlik önlemleri alınmış mı?
- **Performance**: Performans optimizasyonları

### Artı Değer Sağlayan Özellikler
- **Problem Solving**: Mevcut kodda bulunan sorunların tespiti ve çözümü
- **Geliştirme Ortamı**: Docker, scripts gibi geliştirme kolaylıkları
- **Documentation**: Kapsamlı kod dokümantasyonu
- **Testing**: Unit test veya integration test yazımı

> **Not**: Projede mevcut bazı teknik eksiklikler ve iyileştirme alanları bulunmaktadır. Bunları keşfetmek ve çözmek değerlendirmede önemli artı puan sağlayacaktır.

## Test Senaryoları

### Temel Test Akışı
1. Sayfa yüklendiğinde oyun listesi boş olmalı
2. Oyun seçildiğinde ürünler yüklenmeli
3. Ürün sipariş formu çalışmalı
4. API yanıtları doğru işlenmeli
5. Hata durumları uygun şekilde gösterilmeli

### API Test Senaryoları
- Başarılı API çağrıları
- Ağ hatası durumları
- Geçersiz credentials
- Rate limiting durumları

## Süreç ve Teslim

### Timeline
- **Teslim Süresi**: Mail gönderiminden itibaren maksimum 5 gün
- **Değerlendirme Süresi**: Teslim sonrası 2-3 iş günü
- **Geri Bildirim**: Değerlendirme sonrası 1 iş günü içerisinde

### Teslim Süreci
1. **Fork**: Bu repository'yi fork edin
2. **Development**: Kendi fork'unuzda geliştirme yapın
3. **Commit**: Anlamlı commit mesajları yazın
4. **Pull Request**: Ana repository'ye PR gönderin
5. **Bildirim**: PR linkini `integration@turkpin.com` adresine gönderin

### Commit Standartları
```bash
feat: oyun listesi API entegrasyonu
fix: sipariş formu validasyonu
docs: API dokümantasyonu güncellendi
style: code formatting düzeltmeleri
refactor: router yapısı iyileştirildi
```

## Kaynaklar

### Teknik Dokümantasyon
- [Turkpin API Dokümantasyonu](https://dev.turkpin.com)
- [PHP Best Practices](https://www.php-fig.org/)
- [Smarty Template Engine](https://www.smarty.net/docs/)
- [Bootstrap 5 Dokümantasyonu](https://getbootstrap.com/docs/5.3/)

### Yararlı Linkler
- [Composer Dokümantasyonu](https://getcomposer.org/doc/)
- [PSR Standards](https://www.php-fig.org/psr/)
- [HTTP Status Codes](https://httpstatuses.com/)

## Sık Sorulan Sorular

### API ile İlgili
**S: IP whitelist işlemi ne kadar sürer?**  
C: Genellikle 1-2 iş günü içerisinde tamamlanır.

**S: Test API'si ile gerçek sipariş oluşur mu?**  
C: Hayır, test ortamında gerçek işlem yapılmaz.

### Teknik Sorular
**S: Mevcut kod yapısını değiştirebilir miyim?**  
C: Evet, iyileştirmeler yapabilirsiniz ancak temel yapıyı koruyun.

**S: Ek kütüphane ekleyebilir miyim?**  
C: Evet, gerekçeli olarak yeni bağımlılıklar ekleyebilirsiniz.

## İletişim ve Destek

### Teknik Destek
- **E-posta**: `integration@turkpin.com`
- **Yanıt Süresi**: 1-2 iş günü
- **Destek Saatleri**: Hafta içi 09:00 - 18:00

### Sorularınız için
- Teknik sorularınızı detaylı şekilde belirtin
- Hata mesajları varsa tam metni paylaşın
- Geliştirme ortamı bilgilerinizi ekleyin

---

<p align="center">
  <strong>Bu proje Turkpin yazılım geliştirici işe alım sürecinin bir parçasıdır.</strong><br>
  <em>Başarılar dileriz! </em>
</p>

<p align="center">
  <sub>© 2024 Turkpin. Tüm hakları saklıdır.</sub>
</p>
