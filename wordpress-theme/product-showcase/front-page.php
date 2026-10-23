<?php
if (!defined('ABSPATH')) exit;
get_header();
?>
<header class="site-header">
  <div class="container nav">
    <a class="logo" href="<?php echo esc_url(home_url('/')); ?>">GREEN<span>ORA.</span></a>
    <nav class="nav-links" aria-label="Điều hướng chính">
      <a href="#home">Trang chủ</a><a href="#products">Sản phẩm</a>
      <a href="#about">Về chúng tôi</a><a href="#contact">Liên hệ</a>
    </nav>
  </div>
</header>

<main>
<section class="hero" id="home">
  <div class="container hero-grid">
    <div>
      <span class="eyebrow">Lựa chọn tốt hơn mỗi ngày</span>
      <h1>Sản phẩm chất lượng cho cuộc sống hiện đại.</h1>
      <p>Khám phá những sản phẩm được tuyển chọn kỹ lưỡng, kết hợp thiết kế tinh tế, tính ứng dụng và trải nghiệm đáng tin cậy.</p>
      <div class="hero-actions">
        <a class="btn" href="#products">Khám phá sản phẩm →</a>
        <a class="btn btn-light" href="#about">Tìm hiểu thêm</a>
      </div>
    </div>
    <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?auto=format&fit=crop&w=1000&q=85" alt="Sản phẩm nổi bật với thiết kế hiện đại">
  </div>
</section>

<section class="section" id="products">
  <div class="container">
    <div class="section-head">
      <span class="eyebrow">Bộ sưu tập</span>
      <h2>Sản phẩm nổi bật</h2>
      <p>Tham khảo những lựa chọn nổi bật dành cho nhu cầu hằng ngày của bạn.</p>
    </div>
    <div class="product-grid">
      <article class="product-card">
        <img loading="lazy" src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?auto=format&fit=crop&w=700&q=80" alt="Giày thể thao năng động">
        <div class="product-info"><span class="tag">Nổi bật</span><h3>Giày thể thao năng động</h3><p>Thiết kế trẻ trung, phù hợp nhiều hoạt động thường ngày.</p><a class="btn" href="#contact">Tìm hiểu thêm</a></div>
      </article>
      <article class="product-card">
        <img loading="lazy" src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?auto=format&fit=crop&w=700&q=80" alt="Đồng hồ phong cách tối giản">
        <div class="product-info"><span class="tag">Tinh tế</span><h3>Đồng hồ tối giản</h3><p>Phong cách thanh lịch, dễ kết hợp trong nhiều hoàn cảnh.</p><a class="btn" href="#contact">Tìm hiểu thêm</a></div>
      </article>
      <article class="product-card">
        <img loading="lazy" src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?auto=format&fit=crop&w=700&q=80" alt="Tai nghe hiện đại">
        <div class="product-info"><span class="tag">Được quan tâm</span><h3>Tai nghe hiện đại</h3><p>Tận hưởng âm nhạc và không gian giải trí của riêng bạn.</p><a class="btn" href="#contact">Tìm hiểu thêm</a></div>
      </article>
    </div>
  </div>
</section>

<section class="section section-soft">
  <div class="container">
    <div class="section-head"><span class="eyebrow">Cam kết của chúng tôi</span><h2>Trải nghiệm mua sắm đáng tin cậy</h2></div>
    <div class="features">
      <article class="feature"><div class="feature-icon">✦</div><h3>Chọn lọc chất lượng</h3><p>Thông tin sản phẩm rõ ràng để bạn dễ dàng tham khảo.</p></article>
      <article class="feature"><div class="feature-icon">♡</div><h3>Thiết kế hữu ích</h3><p>Ưu tiên tính ứng dụng, sự tiện lợi và phong cách hiện đại.</p></article>
      <article class="feature"><div class="feature-icon">☏</div><h3>Hỗ trợ tận tâm</h3><p>Liên hệ với chúng tôi để được giải đáp về sản phẩm.</p></article>
    </div>
  </div>
</section>

<section class="section" id="about">
  <div class="container about-grid">
    <img loading="lazy" src="https://images.unsplash.com/photo-1441986300917-64674bd600d8?auto=format&fit=crop&w=1000&q=80" alt="Không gian trưng bày sản phẩm">
    <div><span class="eyebrow">Về Greenora</span><h2>Giúp bạn tìm thấy sản phẩm phù hợp.</h2><p class="section-intro">Greenora là giao diện mẫu dành cho website quảng bá sản phẩm. Chúng tôi hướng đến việc trình bày sản phẩm trực quan, truyền tải thông tin dễ hiểu và giúp khách hàng nhanh chóng tìm được điều mình quan tâm.</p><a class="btn" href="#contact">Kết nối với chúng tôi</a></div>
  </div>
</section>

<section class="section" id="contact">
  <div class="container"><div class="contact">
    <span class="eyebrow" style="color:#c5f1df">Hãy bắt đầu</span>
    <h2>Bạn muốn tìm hiểu thêm?</h2>
    <p>Thay nội dung mẫu này bằng email, số điện thoại hoặc đường dẫn liên hệ chính thức của bạn.</p>
    <a class="btn btn-light" href="mailto:hello@example.com">Liên hệ ngay</a>
  </div></div>
</section>
</main>

<footer class="site-footer"><div class="container"><p>© <?php echo esc_html(wp_date('Y')); ?> Greenora. Website quảng bá sản phẩm.</p></div></footer>
<?php get_footer(); ?>
