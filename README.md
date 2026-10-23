# wordpress-product-monitoring

---

# PHỤ LỤC — WORDPRESS PRODUCT MONITORING

## 1. Tổng quan đề tài

Dự án xây dựng website quảng bá sản phẩm bằng WordPress và triển khai hệ thống giám sát hoạt động website, tài nguyên máy chủ bằng Docker, Prometheus, Grafana, Node Exporter và Blackbox Exporter.

Mục tiêu:
- Xây dựng website giới thiệu sản phẩm.
- Triển khai các dịch vụ bằng Docker Compose.
- Theo dõi CPU, bộ nhớ và trạng thái hoạt động của website.
- Thu thập số liệu giám sát và trực quan hóa trên Grafana.
- Quản lý mã nguồn và tài liệu dự án bằng GitHub.

## 2. Kiến trúc hệ thống

Hệ thống gồm 7 container:

| Container | Chức năng |
|---|---|
| `wordpress` | Chạy website WordPress |
| `db` | MariaDB, lưu dữ liệu WordPress |
| `nginx` | Tiếp nhận và chuyển tiếp yêu cầu HTTP/HTTPS |
| `prometheus` | Thu thập và lưu trữ số liệu giám sát |
| `node-exporter` | Cung cấp số liệu tài nguyên máy chủ |
| `blackbox-exporter` | Kiểm tra website qua HTTP/HTTPS |
| `grafana` | Hiển thị dashboard giám sát |

Luồng giám sát website:

`Website → Blackbox Exporter → Prometheus → Grafana`

Luồng giám sát tài nguyên:

`Máy chủ → Node Exporter → Prometheus → Grafana`

## 3. Các đường dẫn truy cập

| Thành phần | Đường dẫn |
|---|---|
| Website HTTP | http://localhost |
| Website HTTPS cục bộ | https://localhost |
| Grafana | http://localhost:3002 |
| Prometheus | http://localhost:9091 |
| Node Exporter | http://localhost:9100/metrics |
| Repository GitHub | https://github.com/dtc245190017-web/wordpress-product-monitoring |

**Lưu ý:** Các địa chỉ `localhost` chỉ truy cập được trên máy đang chạy hệ thống. HTTPS cục bộ có thể hiển thị cảnh báo chứng chỉ tự ký.

## 4. Công nghệ sử dụng

- **WordPress:** Hệ quản trị nội dung của website.
- **PHP và Apache:** Chạy ứng dụng WordPress.
- **MariaDB:** Lưu dữ liệu website.
- **Docker Compose:** Triển khai và quản lý các container.
- **Nginx:** Tiếp nhận và chuyển tiếp lưu lượng truy cập.
- **Prometheus:** Thu thập, truy vấn số liệu giám sát.
- **Node Exporter:** Cung cấp số liệu CPU, bộ nhớ và tài nguyên hệ thống.
- **Blackbox Exporter:** Kiểm tra khả năng truy cập website.
- **Grafana:** Trực quan hóa số liệu thành dashboard.
- **Git và GitHub:** Quản lý mã nguồn và lịch sử thay đổi.

## 5. Các truy vấn PromQL tiêu biểu

### Trạng thái các mục tiêu giám sát

```promql
up
```

Giá trị `1` thường biểu thị mục tiêu được scrape thành công; `0` biểu thị scrape thất bại.

### Mức sử dụng CPU (%)

```promql
100 * (1 - avg(rate(node_cpu_seconds_total{mode="idle"}[5m])))
```

### Mức sử dụng bộ nhớ (%)

```promql
100 * (1 - node_memory_MemAvailable_bytes / node_memory_MemTotal_bytes)
```

### Trạng thái truy cập website

```promql
probe_success{job="wordpress-http"}
```

Giá trị `1` biểu thị phép kiểm tra thành công.

### Thời gian kiểm tra HTTP

```promql
probe_duration_seconds{job="wordpress-http"}
```

### Mã trạng thái HTTP

```promql
probe_http_status_code{job="wordpress-http"}
```

## 6. Cấu trúc dự án

```text
wordpress-product-monitoring/
├── docker-compose.yml
├── README.md
├── .env
├── .env.example
├── nginx/
│   └── default.conf
├── prometheus/
│   ├── prometheus.yml
│   └── blackbox.yml
├── wordpress-theme/
│   └── product-showcase/
│       ├── front-page.php
│       └── style.css
└── certs/
```

Một số file hoặc thư mục có thể thay đổi tùy theo cấu hình thực tế của dự án.

## 7. Khởi động và kiểm tra hệ thống

Khởi động các dịch vụ:

```bash
cd /root/wordpress-product-monitoring
docker compose up -d
```

Kiểm tra trạng thái container:

```bash
docker compose ps
```

Xem log khi cần xử lý sự cố:

```bash
docker compose logs --tail=100
```

Kiểm tra cấu hình Compose:

```bash
docker compose config
```

## 8. Lưu trữ dữ liệu

Dự án sử dụng các named volume như `db_data`, `wordpress_data`, `grafana_data` và `prometheus_data` để lưu dữ liệu tương ứng.

Khi cần dừng hoặc khởi động lại dịch vụ, ưu tiên sử dụng:

```bash
docker compose stop
docker compose start
```

Hoặc khởi động các dịch vụ:

```bash
docker compose up -d
```

**Không sử dụng `docker compose down -v` nếu muốn giữ dữ liệu trong các named volume.** Thời gian lưu số liệu Prometheus còn phụ thuộc cấu hình retention.

## 9. Phạm vi và lưu ý

- Website sử dụng giao diện giới thiệu sản phẩm mẫu; nội dung sản phẩm hiện không phải hệ thống quản lý kho hàng hoàn chỉnh.
- Các địa chỉ `localhost` không phải địa chỉ website công khai trên Internet.
- Kết quả giám sát phụ thuộc trạng thái container và cấu hình Prometheus.
- Không công khai mật khẩu, khóa bí mật hoặc nội dung file `.env` trên GitHub.

