SELECT * FROM tacgia
SELECT * FROM baiviet
SELECT * FROM theloai


a. Liệt kê các bài viết về các bài hát thuộc thể loại Nhạc trữ tình (2 đ)
SELECT *
FROM baiviet INNER JOIN theloai ON 
theloai.ma_tloai = baiviet.ma_tloai
WHERE theloai.ten_tloai = 'Nhạc trữ tình'

b. Liệt kê các bài viết của tác giả “Nhacvietplus” (2 đ)
SELECT * 
FROM baiviet INNER JOIN tacgia ON
baiviet.ma_tgia = tacgia.ma_tgia
WHERE tacgia.ten_tgia = 'Nhacvietplus'

c. Liệt kê các thể loại nhạc chưa có bài viết cảm nhận nào. (2 đ)


d. Liệt kê các bài viết với các thông tin sau: mã bài viết, tên bài viết, tên bài hát, tên tác giả, tên 
thể loại, ngày viết. (2 đ)


e. Tìm thể loại có số bài viết nhiều nhất (2 đ)


f. Liệt kê 2 tác giả có số bài viết nhiều nhất (2 đ)
g. Liệt kê các bài viết về các bài hát có tựa bài hát chứa 1 trong các từ “yêu”, “thương”, “anh”, 
“em” (2 đ)
h. Liệt kê các bài viết về các bài hát có tiêu đề bài viết hoặc tựa bài hát chứa 1 trong các từ 
“yêu”, “thương”, “anh”, “em” (2 đ)
i. Tạo 1 view có tên vw_Music để hiển thị thông tin về Danh sách các bài viết kèm theo Tên 
thể loại và tên tác giả (2 đ)
j. Tạo 1 thủ tục có tên sp_DSBaiViet với tham số truyền vào là Tên thể loại và trả về danh sách 
Bài viết của thể loại đó. Nếu thể loại không tồn tại thì hiển thị thông báo lỗi. (2 đ)
k. Thêm mới cột SLBaiViet vào trong bảng theloai. Tạo 1 trigger có tên tg_CapNhatTheLoai để
khi thêm/sửa/xóa bài viết thì số lượng bài viết trong bảng theloai được cập nhật theo. (2 đ)
l. Bổ sung thêm bảng Users để lưu thông tin Tài khoản đăng nhập và sử dụng cho chức năng 
Đăng nhập/Quản trị trang web. (5 đ)