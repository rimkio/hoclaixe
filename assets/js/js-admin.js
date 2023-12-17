jQuery(document).ready(function($) {
    $('#export-csv-button').on('click', function() {
        // Lấy giá trị từ các trường select
        var address = $('#address').val();
        var center = $('#center').val();
        var course = $('#course').val();
        var status = $('#status').val();

        // Tạo đối tượng chứa dữ liệu để gửi lên server
        var data = {
            action: 'export_hoc_vien_csv',
            address: address,
            center: center,
            course: course,
            status: status
        };

        // Thực hiện AJAX request
        $.ajax({
            url: hoclaixeAjax.ajaxUrl,
            type: 'GET',
            data: data,
            success: function(response) {
                // Xử lý phản hồi từ server (nếu cần)
                console.log(response);

                // Điều hướng đến URL xuất file CSV
                // window.location.href = response.file_url;
            }
        });
    });
});
