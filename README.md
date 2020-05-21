## [Bài tập] Ứng dụng Từ điển đơn giản
### Mục tiêu
Luyện tập tạo và khởi chạy ứng dụng Laravel

#### Mô tả bài toán
Xây dựng một trang web để tra cứu từ Anh – Việt (với các từ - nghĩa của từ cho sẵn trong một mảng). Tạo trang chủ chứa một form tra cứu từ. Nếu tìm thấy từ thì hiển thị nghĩa bằng tiếng việt. Nếu không tìm thấy thì hiển thị thông báo không tìm thấy.

#### Hướng dẫn
- Bước 1: Tạo Route có url.
- Bước 2: Tạo form bằng ngôn ngữ HTML để người dùng nhập vào trường dữ liệu.
Bao gồm:

    - Form có method là POST, có action trỏ đến url của route đã tạo ở bước 1.
    - Có ô textbox để người dùng nhập vào từ khóa.
Có 1 nút "Dịch"
- Bước 3: Xử lý yêu cầu người dùng.
Tại route, sử dụng class Illuminate/Request để nhận các dữ liệu được gửi lên từ form khi người dùng nhấn nút Submit, đồng thời tạo một mảng bên trong có key là các từ tiếng Anh và value là nghĩa tiếng Việt. Viết code xử lý tìm kiếm trong mảng so sánh với từ khóa người dùng nhập vào để tìm ra nghĩa của từ cần tra trong mảng và trả về kết quả cho người dùng.

- Bước 4: Tạo view hiển thị kết quả.
